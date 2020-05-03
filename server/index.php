<?php

$httpHost = $_SERVER['HTTP_HOST'];

$ip = filter_var($httpHost, FILTER_VALIDATE_IP); // 107.173.51.164
if ($ip) {
    header("Location: https://www.uffie.com/");
    die();
}

$array = explode(".", strtolower($httpHost));
$domainName = (array_key_exists(count($array) - 2, $array) ? $array[count($array) - 2] : "").".".$array[count($array) - 1];

$chars = array(',', '#44;');
$txt = str_replace($chars, '&', dns_get_record("uffie.". $domainName, DNS_TXT)[0]["txt"] ?? '');
parse_str($txt, $output);

$price = $output['price'] ?? '';
$email = $output['email'] ?? '';
$ga = $output['ga'] ?? ''; // custom analytics ID for paying customers
$pro = FALSE;

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "If you are the domain owner, please enter a valid email address in your domain TXT records to enable the service.";
    die();
}

if (strpos(file_get_contents('domains.txt'), $domainName) === false) {
    file_put_contents('domains.txt', $domainName.PHP_EOL, FILE_APPEND | LOCK_EX);
}

$file = file("pro.txt");
foreach($file as $line) {
    $line = trim($line);
	if ($line == $email) $pro = TRUE;
}

if ($pro == TRUE) {
	$cruip = $output['template'] ?? '';
	if (!empty($ga)) echo "<script>window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;ga('create', '" . $ga . "', 'auto');ga('send', 'pageview');</script><script async src='https://www.google-analytics.com/analytics.js'></script>";
} else {
	$cruip = "ava";
}

switch ($cruip) {
    case "ava":
        include 'templates/ava/index.php';
        break;
    case "venus":
        include 'templates/venus/index.php';
        break;
    case "ruby":
        include 'templates/ruby/index.php';
        break;
    case "blue":
        include 'templates/blue/index.php';
        break;
    case "florence":
        include 'templates/florence/index.php';
        break;
    case "grace":
        include 'templates/grace/index.php';
        break;
    case "ellie":
        include 'templates/ellie/index.php';
        break;
    case "evelyn":
        include 'templates/evelyn/index.php';
        break;
    default:
        include 'templates/ava/index.php';
}

?>

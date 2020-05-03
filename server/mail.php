<?php
require 'vendor/autoload.php';

$sellerEmail = filter_var($_POST['yourEmail'], FILTER_SANITIZE_EMAIL);
$buyerEmail = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

$email = new \SendGrid\Mail\Mail();
$email ->setFrom("notification@uffie.com", "Uffie.com");
$email ->setReplyTo($buyerEmail, $_POST['name']);
$email ->setSubject('Enquiry on '.$_POST['yourDomain']);
$email ->addTo($sellerEmail);
$email ->addContent("text/html",
"You have received an offer on your domain name ".$_POST['yourDomain'].
":<p><strong>Name:</strong> ".$_POST['name'].
"<br><strong>Email:</strong> ".$buyerEmail.
"<br><strong>Phone:</strong> ".$_POST['phone'].
"<br><strong>Offer:</strong> $".$_POST['offer'].
"<br><strong>Message:</strong> ".$_POST['message'].
"<p>You may reply directly to this email to get in touch with the prospective buyer.<p><small>You are receiving this email because you have listed your domain for sale through the domain parking service provided by uffie.com. If you do not wish to receive further enquiries regarding ".$_POST['yourDomain'].
", please update your domain host records to stop using the service.</small>");

$apiKey = 'YOUR_API_KEY_HERE';
$sendgrid = new \SendGrid($apiKey);

$valid = TRUE;

if (!empty($_POST['fax']) && (bool) $_POST['fax'] == TRUE) die(); //spam

if (!filter_var($sellerEmail, FILTER_VALIDATE_EMAIL)) $valid = FALSE;
if (!filter_var($buyerEmail, FILTER_VALIDATE_EMAIL)) $valid = FALSE;

if ($valid) {
  $response = $sendgrid->send($email);
//  print $response->statusCode();
  $message = 'Thank you, your offer has been submitted.';
  echo "<meta http-equiv='refresh' content='3;url=/' />";
} else {
  $message = 'Sorry, something went wrong. Please try again later.';
  echo "<meta http-equiv='refresh' content='3;url=/' />";
}

?>
<html><head><meta name="viewport" content="width=device-width, initial-scale=1"><style type="text/css">.loader{border:16px solid #f3f3f3;border-top:16px solid #3498db;border-radius:50%;width:50px;height:50px;animation:spin 2s linear infinite}@keyframes spin{0%{transform:rotate(0)}100%{transform:rotate(360deg)}}</style></head><body><center><br /><br /><div class="loader"></div><br /><br /><?php echo $message; ?><br /><br />You will be redirected back to the homepage shortly.</center></body></html>

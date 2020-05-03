<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $domainName; ?> is for sale</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:400,400i|Roboto:500" rel="stylesheet">
    <link rel="stylesheet" href="templates/ava/dist/css/style.css">
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
</head>
<body class="is-boxed has-animations">
    <div class="body-wrap boxed-container">
        <header class="site-header">
        </header>

        <main>
            <section class="hero text-center">
                <div class="container-sm">
                    <div class="hero-inner">
                        <h1 class="hero-title h2-mobile mt-0 is-revealing"><?php echo $domainName; ?> is for sale</h1>
                        <p class="hero-paragraph is-revealing">Please complete the form below to make an offer.</p>
                        <div class="hero-form newsletter-form field field-grouped is-revealing">
                            <div class="control control-expanded">
				                <form action="mail.php" method="post">
                                <input class="input" type="text" name="name" placeholder="Name" required>
                                <input class="input" type="email" name="email" placeholder="Email" required>
                                <input class="input" type="tel" name="phone" placeholder="Phone">
                                <input class="input" type="number" name="offer" placeholder="Offer (USD)" min="<?php if (!empty($price)) { echo $price; } else { echo '0'; } ?>" required>
                                <input type="hidden" name="yourEmail" value="<?php echo $email; ?>">
                                <input type="hidden" name="yourDomain" value="<?php echo $domainName; ?>">
                                <input type="checkbox" name="fax" value="1" style="display:none !important" tabindex="-1" autocomplete="false">
                                <textarea class="input" name="message" placeholder="Message"></textarea><p>
                                <center><input class="button button-primary button-block button-shadow" type="submit" value="Submit Offer"></center>
				                </form>
                            </div><p>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <footer class="site-footer text-light">
            <div class="container">
                <div class="site-footer-inner">
                    <div class="brand footer-brand">

                    </div>
                    <ul class="footer-links list-reset">
                        <li>
                            <?php if ($pro == FALSE) echo "Powered by <a href='https://uffie.com/'>Uffie</a>"; ?>
                        </li>
                    </ul>
                    <ul class="footer-social-links list-reset">
                    </ul>
                    <div class="footer-copyright">&copy; <?php echo date("Y") . ' ' . $domainName; ?></div>
                </div>
            </div>
        </footer>
    </div>

    <script src="templates/ava/dist/js/main.min.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $domainName; ?> is for sale</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:400,400i|PT+Serif:700" rel="stylesheet">
    <link rel="stylesheet" href="templates/evelyn/dist/css/style.css">
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
</head>
<body class="is-boxed has-animations">
    <div class="body-wrap boxed-container">
        <header class="site-header">
            <div class="container">
                <div class="site-header-inner">
                    <div class="brand header-brand">
                    </div>
                </div>
            </div>
        </header>

        <main>
            <section class="hero text-light text-center">
                <div class="container-sm">
                    <div class="hero-inner">
                        <h1 class="hero-title h2-mobile mt-0 is-revealing"><?php echo $domainName; ?> is for sale</h1>
                        <p class="hero-paragraph is-revealing">Please complete the form below to make an offer.</p>

                    </div>
                </div>
            </section>

            <section class="section">
            </section>
			
            <section class="section">
                <div class="container">
                    <div class="section-inner">
		                <form action="mail.php" method="post">
	                    <input class="input" type="text" name="name" placeholder="Name" required>
	                    <input class="input" type="email" name="email" placeholder="Email" required>
	                    <input class="input" type="tel" name="phone" placeholder="Phone">
	                    <input class="input" type="number" name="offer" placeholder="Offer (USD)" min="<?php if (!empty($price)) { echo $price; } else { echo '0'; } ?>" required>
	                    <input type="hidden" name="yourEmail" value="<?php echo $email; ?>">
	                    <input type="hidden" name="yourDomain" value="<?php echo $domainName; ?>">
	                    <input type="checkbox" name="fax" value="1" style="display:none !important" tabindex="-1" autocomplete="false">
	                    <textarea class="input" name="message" placeholder="Message"></textarea><br /><br />
	                    <input class="button button-primary button-block button-shadow" type="submit" value="Submit Offer">
		                </form>
					</div>
                </div>
            </section>
        </main>

        <footer class="site-footer">
            <div class="container">
                <div class="site-footer-inner">
                    <div class="footer-copyright">&copy; <?php echo date("Y") . ' ' . $domainName; ?></div>
                </div>
            </div>
        </footer>
    </div>
    <script src="templates/evelyn/dist/js/main.min.js"></script>
</body>
</html>

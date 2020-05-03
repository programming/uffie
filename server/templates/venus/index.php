<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $domainName; ?> is for sale</title>
    <link href="https://fonts.googleapis.com/css?family=Heebo:400,700|Oxygen:700" rel="stylesheet">
    <link rel="stylesheet" href="templates/venus/dist/css/style.css">
    <script src="https://unpkg.com/scrollreveal@4.0.5/dist/scrollreveal.min.js"></script>
</head>
<body class="is-boxed has-animations">
    <div class="body-wrap boxed-container">
        <header class="site-header text-light">
            <div class="container">
                <div class="site-header-inner">
                </div>
            </div>
        </header>

        <main>
            <section class="hero text-center text-light">
				<div class="hero-bg"></div>
				<div class="hero-particles-container">
					<canvas id="hero-particles"></canvas>
				</div>
                <div class="container-sm">
                    <div class="hero-inner">
						<div class="hero-copy">
	                        <h1 class="hero-title mt-0"><?php echo $domainName; ?> is for sale</h1>
	                        <p class="hero-paragraph">Please complete the form below to make an offer.</p>
						</div>
						<div class="mockup-container">
			                <form action="mail.php" method="post">
	                        <input class="input" type="text" name="name" placeholder="Name" required>
	                        <input class="input" type="email" name="email" placeholder="Email" required>
	                        <input class="input" type="tel" name="phone" placeholder="Phone">
	                        <input class="input" type="number" name="offer" placeholder="Offer (USD)" min="<?php if (!empty($price)) { echo $price; } else { echo '0'; } ?>" required>
	                        <input type="hidden" name="yourEmail" value="<?php echo $email; ?>">
	                        <input type="hidden" name="yourDomain" value="<?php echo $domainName; ?>">
	                        <input type="checkbox" name="fax" value="1" style="display:none !important" tabindex="-1" autocomplete="false">
	                        <textarea class="input" name="message" placeholder="Message"></textarea><br /><br />
		                    <input class="button button-primary button-wide-mobile" type="submit" value="Submit Offer">
			                </form>							
						</div>
                    </div>
                </div>
            </section>
        </main>

		<footer class="site-footer">
			<div class="footer-particles-container">
				<canvas id="footer-particles"></canvas>
			</div>
			<div class="site-footer-top">
			</div>
			<div class="site-footer-bottom">
				<div class="container">
					<div class="site-footer-inner">
						<div class="brand footer-brand">
						</div>
						<ul class="footer-links list-reset">
						</ul>
						<ul class="footer-social-links list-reset">
						</ul>
						<div class="footer-copyright">&copy; <?php echo date("Y") . ' ' . $domainName; ?></div>
					</div>
				</div>
			</div>
        </footer>
    </div>

    <script src="templates/venus/dist/js/main.min.js"></script>
</body>
</html>

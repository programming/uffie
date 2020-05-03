<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $domainName; ?> is for sale</title>
    <link href="https://fonts.googleapis.com/css?family=Oxygen:400,700|Arimo:400,700" rel="stylesheet">
    <link rel="stylesheet" href="templates/blue/dist/css/style.css">
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
            <section class="hero">
				<div class="hero-left-decoration is-revealing"></div>
				<div class="hero-right-decoration is-revealing"></div>
                <div class="container">
                    <div class="hero-inner">
						<div class="hero-copy">
	                        <h1 class="hero-title mt-0 is-revealing"><?php echo $domainName; ?> is for sale</h1>
	                        <p class="hero-paragraph is-revealing">Please complete the form below to make an offer.</p>

						</div>
						<div class="hero-illustration">
						</div>
                    </div>
                </div>
            </section>



			<section class="features section text-center">
                <div class="container">
                    <div class="features-inner section-inner has-top-divider">
						<div class="features-header text-center">
							<div class="container-sm">
								<p>
					                <form action="mail.php" method="post">
	                                <input class="input" type="text" name="name" placeholder="Name" required>
	                                <input class="input" type="email" name="email" placeholder="Email" required>
	                                <input class="input" type="tel" name="phone" placeholder="Phone">
	                                <input class="input" type="number" name="offer" placeholder="Offer (USD)" min="<?php if (!empty($price)) { echo $price; } else { echo '0'; } ?>" required>
	                                <input type="hidden" name="yourEmail" value="<?php echo $email; ?>">
	                                <input type="hidden" name="yourDomain" value="<?php echo $domainName; ?>">
	                                <input type="checkbox" name="fax" value="1" style="display:none !important" tabindex="-1" autocomplete="false">
	                                <textarea class="input" name="message" placeholder="Message"></textarea><br /><br />
	                                <center><input class="button button-primary button-shadow" type="submit" value="Submit Offer"></center>
					                </form>									
								</p>
							</div>
						</div>

                    </div>
                </div>
            </section>




			<section class="cta section">
				<div class="container">
					<div class="cta-inner section-inner is-revealing">

					</div>
				</div>
			</section>
        </main>

        <footer class="site-footer">
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
        </footer>
    </div>

    <script src="templates/blue/dist/js/main.min.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $domainName; ?> is for sale</title>
    <link href="https://fonts.googleapis.com/css?family=Heebo:400,400i,700|Titillium+Web:600" rel="stylesheet">
    <link rel="stylesheet" href="templates/florence/dist/css/style.css">
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
</head>
<body class="is-boxed">
    <div class="body-wrap boxed-container">
        <header class="site-header">
			<div class="hero-disk hero-disk-1 is-moving-object is-translating" data-translating-factor="60">
				<svg width="600" height="300" viewBox="0 0 600 300" xmlns="http://www.w3.org/2000/svg">
				    <defs>
				        <linearGradient x1="-1.265%" y1="100%" y2="100%" id="disk-1-a">
				            <stop stop-color="#040404" stop-opacity="0" offset="0%"/>
				            <stop stop-color="#3217BB" offset="100%"/>
				        </linearGradient>
				    </defs>
				    <path d="M846 515c0-165.685 134.315-300 300-300s300 134.315 300 300h-150c0-82.843-67.157-150-150-150s-150 67.157-150 150H846z" transform="translate(-846 -215)" fill="url(#disk-1-a)" fill-rule="evenodd"/>
				</svg>
			</div>
			<div class="hero-disk hero-disk-2 is-moving-object is-translating" data-translating-factor="20">
				<svg width="600" height="300" viewBox="0 0 600 300" xmlns="http://www.w3.org/2000/svg">
				    <defs>
				        <linearGradient x1="0%" y1="100%" y2="100%" id="disk-2-a">
				            <stop stop-color="#040404" stop-opacity="0" offset="0%"/>
				            <stop stop-color="#D15680" offset="100%"/>
				        </linearGradient>
				    </defs>
				    <path d="M1153 63c0 165.685-134.315 300-300 300S553 228.685 553 63h150c0 82.843 67.157 150 150 150s150-67.157 150-150h150z" transform="translate(-553 -63)" fill="url(#disk-2-a)" fill-rule="evenodd"/>
				</svg>
            </div>
			<div class="hero-sphere hero-sphere-1 is-moving-object is-translating" data-translating-factor="10">
				<svg width="48" height="48" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
				    <defs>
				        <radialGradient cx="83.479%" cy="86.284%" fx="83.479%" fy="86.284%" r="128.926%" id="sphere-1-a">
				            <stop stop-color="#D15680" offset="0%"/>
				            <stop stop-color="#040404" stop-opacity="0" offset="100%"/>
				        </radialGradient>
				    </defs>
				    <circle cx="1522" cy="447" r="24" transform="translate(-1498 -423)" fill="url(#sphere-1-a)" fill-rule="evenodd"/>
				</svg>
			</div>
        </header>

        <main>
            <section class="hero text-center">
				<div class="hero-disk hero-disk-3 is-moving-object is-translating" data-translating-factor="90">
					<svg width="600" height="300" viewBox="0 0 600 300" xmlns="http://www.w3.org/2000/svg">
						<defs>
							<linearGradient x1="100%" y1="100%" x2="-1.265%" y2="100%" id="disk-3-a">
								<stop stop-color="#040404" stop-opacity="0" offset="0%"/>
								<stop stop-color="#3217BB" offset="100%"/>
							</linearGradient>
						</defs>
						<path d="M153 492c0-165.685 134.315-300 300-300s300 134.315 300 300H603c0-82.843-67.157-150-150-150s-150 67.157-150 150H153z" transform="translate(-153 -192)" fill="url(#disk-3-a)" fill-rule="evenodd"/>
					</svg>
				</div>
				<div class="hero-disk hero-disk-4 is-moving-object is-translating" data-translating-factor="50">
					<svg width="600" height="300" viewBox="0 0 600 300" xmlns="http://www.w3.org/2000/svg">
					    <defs>
					        <linearGradient x1="0%" y1="100%" y2="100%" id="disk-4-a">
					            <stop stop-color="#040404" stop-opacity="0" offset="0%"/>
					            <stop stop-color="#D15680" offset="100%"/>
					        </linearGradient>
					    </defs>
					    <path d="M817 687c0 165.685-134.315 300-300 300S217 852.685 217 687h150c0 82.843 67.157 150 150 150s150-67.157 150-150h150z" transform="translate(-217 -687)" fill="url(#disk-4-a)" fill-rule="evenodd"/>
					</svg>
				</div>
				<div class="hero-sphere hero-sphere-2 is-moving-object is-translating" data-translating-factor="30">
					<svg width="32" height="32" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
					    <defs>
					        <radialGradient cx="83.479%" cy="86.284%" fx="83.479%" fy="86.284%" r="128.926%" id="sphere-2-a">
					            <stop stop-color="#3217BB" offset="0%"/>
					            <stop stop-color="#040404" stop-opacity="0" offset="100%"/>
					        </radialGradient>
					    </defs>
					    <circle cx="251" cy="433" r="16" transform="translate(-235 -417)" fill="url(#sphere-2-a)" fill-rule="evenodd"/>
					</svg>
				</div>
                <div class="container-sm">
                    <div class="hero-inner">
                        <h1 class="hero-title mt-0 is-revealing"><?php echo $domainName; ?> is for sale</h1>
                        <p class="hero-paragraph is-revealing">Please complete the form below to make an offer.</p>
                        <div class="hero-browser">
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
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <footer class="site-footer">
			<div class="footer-disk footer-disk-1 is-moving-object is-translating" data-translating-factor="60">
				<svg width="600" height="300" viewBox="0 0 600 300" xmlns="http://www.w3.org/2000/svg">
					<defs>
						<linearGradient x1="100%" y1="100%" x2="-1.265%" y2="100%" id="disk-5-a">
							<stop stop-color="#040404" stop-opacity="0" offset="0%"/>
							<stop stop-color="#3217BB" offset="100%"/>
						</linearGradient>
					</defs>
					<path d="M153 492c0-165.685 134.315-300 300-300s300 134.315 300 300H603c0-82.843-67.157-150-150-150s-150 67.157-150 150H153z" transform="translate(-153 -192)" fill="url(#disk-5-a)" fill-rule="evenodd"/>
				</svg>
			</div>
			<div class="footer-disk footer-disk-2 is-moving-object is-translating" data-translating-factor="80">
				<svg width="600" height="300" viewBox="0 0 600 300" xmlns="http://www.w3.org/2000/svg">
					<defs>
						<linearGradient x1="0%" y1="100%" y2="100%" id="disk-6-a">
							<stop stop-color="#040404" stop-opacity="0" offset="0%"/>
							<stop stop-color="#D15680" offset="100%"/>
						</linearGradient>
					</defs>
					<path d="M1153 63c0 165.685-134.315 300-300 300S553 228.685 553 63h150c0 82.843 67.157 150 150 150s150-67.157 150-150h150z" transform="translate(-553 -63)" fill="url(#disk-6-a)" fill-rule="evenodd"/>
				</svg>
			</div>
			<div class="footer-sphere footer-sphere-1 is-moving-object is-translating" data-translating-factor="20">
				<svg width="32" height="32" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
					<defs>
						<radialGradient cx="83.479%" cy="86.284%" fx="83.479%" fy="86.284%" r="128.926%" id="sphere-3-a">
							<stop stop-color="#D15680" offset="0%"/>
							<stop stop-color="#040404" stop-opacity="0" offset="100%"/>
						</radialGradient>
					</defs>
					<circle cx="251" cy="433" r="16" transform="translate(-235 -417)" fill="url(#sphere-3-a)" fill-rule="evenodd"/>
				</svg>
			</div>
            <div class="container">
                <div class="site-footer-inner has-top-divider">
                    <div class="brand footer-brand">
                    </div>
                    <ul class="footer-social-links list-reset">
                    </ul>
                    <div class="footer-copyright">&copy; <?php echo date("Y") . ' ' . $domainName; ?></div>
                </div>
            </div>
        </footer>
    </div>

    <script src="templates/florence/dist/js/main.min.js"></script>
</body>
</html>


<!DOCTYPE HTML>
<html lang="nl">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Checkout - 4. Bedankt</title>
	<meta name="description" content="">
	<!--font, css, js -->
	<?php include '_includes/head.html';?>
</head>

<body>
	<div class="wrapper checkout-step4-page">

		<header id="header-menu">
			<?php include '_includes/header-menu.html';?>
		</header>
			
		<main>

			<section class="step-nav">
				<div class="container">
					<ul class="step-nav__steps step-4">
						<li class="checked">Winkelwagen</li>
						<li class="checked">gegevens</li>
						<li class="checked">Overzicht</li>
						<li class="active">Bedankt!</li>
					</ul>
				</div>
			</section>

			<section class="checkout --step-4">
				<div class="container">
					<div class="thankyou-msg">
						<h1 class="like-h2">Bedankt!</h1>						
						<h3>We hebben je bestelling goed ontvangen.</h3>
						<p>Je ontvangt van ons een bevestigingsmail van jouw bestelling. Van zodra je bestelling beschikbaar is voor afhalen, ontvang je nog een mail van ons.</p>
						<a href="/" class="btn --btn-orange">Terug naar home</a>
					</div>
					
					
				</div>
			</section>

		</main>
			
		<footer id="footer-page">
			<?php include '_includes/footer.html';?>
		</footer>

	</div>
</body>
</html>

<!DOCTYPE HTML>
<html lang="nl">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Mijn account – bestelling detail</title>
	<meta name="description" content="">
	<!--font, css, js -->
	<?php include '_includes/head.html';?>
</head>

<body>
	<div class="wrapper account-order-detail-page in-login">

		<header id="header-menu">
			<?php include '_includes/header-menu-logged-in.html';?>
		</header>
			
		<main>
			
			<section class="account-header">
				<div class="account-header__inner">
					<div class="account-header__left">
						<h2>Welkom terug, Simmie!</h2>
						<ul class="account-header__menu">
							<li><a href="/mijn-account-overzicht.php">Overzicht</a></li>
							<li class="active"><a href="/mijn-account-mijn-bestellingen.php">Mijn bestellingen</a></li>
							<li><a href="/mijn-account-mijn-gegevens.php">Mijn gegevens</a></li>
							<li><a href="#">Opgeslagen offertes</a></li>
							<li><a href="#">Uitloggen</a></li>
						</ul>
					</div>
					<div class="account-header__right">
						<a href="https://wa.me/320412345678" class="whatsapp-link">
							<div class="whatsapp-link__icon-text">
								<i class="fab fa-whatsapp"></i>
								<div>Whatsapp ondersteuning<span>+32 (0)412 345 678</span></div>
							</div>
							<div>Elke werkdag van 07:00 tot 17:00</div>
						</a>
					</div>
				</div>
			</section>

			<section class="order-detail">
				<div class="container">
					<a href="/mijn-account-mijn-bestellingen.php" class="order-detail__btn-back btn-back"><span>Terug</span></a>
					<div class="section-title">
						<h3>Order 600085925</h3>
					</div>

					<div class="order-detail__row">
						<div class="order-detail__col">
							<div class="title">Datum</div>
							<div class="value">04-02-2022</div>
						</div>
						<div class="order-detail__col">
							<div class="title">Status</div>
							<div class="value">Online betaald</div>
						</div>
						<div class="order-detail__col">
							<div class="title">Bedrag</div>
							<div class="value">€ 447,68</div>
						</div>
						<div class="order-detail__col">
							<div class="title">Factuur</div>
							<div class="value">
								<a href="#" class="download">Download factuur</a>
							</div>
						</div>
					</div>
					
					<div class="order-detail__cart-items">

						<div class="cart-items__row --title">
							<div class="cart-items__col">Product</div>
							<div class="cart-items__col text-right">Prijs</div>
						</div>

						<div class="cart-items__row">
							<div class="cart-items__col">
								<div class="cart-items__product">
									<div href="/product-detail.php" class="img">
										<img src="/images/product-single__img-1.jpg" alt="">
									</div>
									<div class="content">
										<a href="/product-detail.php" class="title">
											<h5>Spuitkurk - Normale korrel - 20 kleuren</h5>
										</a>
										<div class="extra-option">Kleur #01</div>
										<div class="aantal">Aantal: 3</div>
									</div>
								</div>
							</div>
							<div class="cart-items__col text-right">
								<div class="price">€ 255,00</div>
							</div>
						</div>

						<div class="cart-items__row">
							<div class="cart-items__col">
								<div class="cart-items__product">
									<div class="img">
										<img src="/images/product-single__img-2.jpg" alt="">
									</div>
									<div class="content">
										<a href="/product-detail.php" class="title">
											<h5>Kleurboek - 20 kleuren</h5>
										</a>					
										<div class="aantal">Aantal: 3</div>
									</div>
								</div>
							</div>
							<div class="cart-items__col text-right">
								<div class="price">€ 88,95</div>
							</div>
						</div>
						
					</div>

					<div class="order-detail__subtotal subtotal">
						<div class="subtotal__row">
							<div class="subtotal__col">Subtotaal (excl. BTW)</div>
							<div class="subtotal__col">€ 343,95</div>
						</div>
						<div class="subtotal__row">
							<div class="subtotal__col">21% BTW</div>
							<div class="subtotal__col">€ 72,23</div>
						</div>
						<div class="subtotal__row --total">
							<div class="subtotal__col">Totaal (incl. BTW)</div>
							<div class="subtotal__col">€ 416,18</div>
						</div>
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
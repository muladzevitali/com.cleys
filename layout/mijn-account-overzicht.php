
<!DOCTYPE HTML>
<html lang="nl">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Mijn account - Overzicht</title>
	<meta name="description" content="">
	<!--font, css, js -->
	<?php include '_includes/head.html';?>
</head>

<body>
	<div class="wrapper account-overview-page in-login">

		<header id="header-menu">
			<?php include '_includes/header-menu-logged-in.html';?>
		</header>
			
		<main>

			<section class="account-header">
				<div class="account-header__inner">
					<div class="account-header__left">
						<h2>Welkom terug, Simmie!</h2>
						<ul class="account-header__menu">
							<li class="active"><a href="/mijn-account-overzicht.php">Overzicht</a></li>
							<li><a href="/mijn-account-mijn-bestellingen.php">Mijn bestellingen</a></li>
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

			<section class="last-seen">
				<div class="container">
					<div class="section-title">
						<h3>Recent bestelde producten</h3>
					</div>
					<div class="last-seen__list --small-product">

						<a href="/product-detail.php" class="product-single --with-label --label-promo">
							<div class="product-single__label">Promo</div>
							<div class="product-single__img">
								<img src="/images/product-single__img-1.jpg" alt="">
							</div>
							<div class="product-single__title">
								<h3 class="like-h5">Spuitkurk - Normale korrel - 20 kleuren</h3>
							</div>
							<div class="product-single__info">Corticyte - 15 L</div>
							<div class="product-single__price">
								<span class="cur-price">€ 29,65</span>
								<span class="old-price">€ 29,65</span>
							</div>
						</a>
						
						<a href="/product-detail.php" class="product-single">
							<div class="product-single__img">
								<img src="/images/product-single__img-1.jpg" alt="">
							</div>
							<div class="product-single__title">
								<h3 class="like-h5">Spuitkurk - Normale korrel - 20 kleuren</h3>
							</div>
							<div class="product-single__info">Corticyte - 15 L</div>
							<div class="product-single__price">
								<span class="cur-price">€ 29,65</span>
							</div>
						</a>

						<a href="/product-detail.php" class="product-single">
							<div class="product-single__img">
								<img src="/images/product-single__img-2.jpg" alt="">
							</div>
							<div class="product-single__title">
								<h3 class="like-h5">Kleurboek - 20 kleuren</h3>
							</div>
							<div class="product-single__info">Corticyte</div>
							<div class="product-single__price">
								<span class="cur-price">€ 29,65</span>
							</div>
						</a>

						<a href="/product-detail.php" class="product-single">
							<div class="product-single__img">
								<img src="/images/product-single__img-3.jpg" alt="">
							</div>
							<div class="product-single__title">
								<h3 class="like-h5">PVC Afdekfolie</h3>
							</div>
							<div class="product-single__price">
								<span class="cur-price">€ 16,65</span>
							</div>
						</a>

						<a href="/product-detail.php" class="product-single">
							<div class="product-single__img">
								<img src="/images/product-single__img-4.jpg" alt="">
							</div>
							<div class="product-single__title">
								<h3 class="like-h5">Compressor 10 bar</h3>
							</div>
							<div class="product-single__info">Michelin</div>
							<div class="product-single__price">
								<span class="cur-price">€ 949,85</span>
							</div>
						</a>

						<a href="/product-detail.php" class="product-single">
							<div class="product-single__img">
								<img src="/images/product-single__img-4.jpg" alt="">
							</div>
							<div class="product-single__title">
								<h3 class="like-h5">Compressor 10 bar</h3>
							</div>
							<div class="product-single__info">Michelin</div>
							<div class="product-single__price">
								<span class="cur-price">€ 949,85</span>
							</div>
						</a>

					</div>
				</div>
			</section>

			<section class="order">
				<div class="container">
					<div class="section-title">
						<h3>Recent bestellingen</h3>
					</div>
					<div class="order-items">

						<div class="order-items__row --title">
							<div class="order-items__col">Datum</div>
							<div class="order-items__col">Ordernummer</div>
							<div class="order-items__col">Aantal producten</div>
							<div class="order-items__col">Status</div>
							<div class="order-items__col">Bedrag</div>
							<div class="order-items__col">Factuur</div>
						</div>

						<a href="/mijn-account-bestelling-detail.php" class="order-items__row">
							<div class="order-items__col">
								<div class="order-items__mobiletitle">Datum</div>
								<div class="order-items__value">04-02-2022</div>
							</div>
							<div class="order-items__col">
								<div class="order-items__mobiletitle">Ordernummer</div>
								<div class="order-items__value">600085925</div>
							</div>
							<div class="order-items__col">
								<div class="order-items__mobiletitle">Aantal producten</div>
								<div class="order-items__value">6</div>
							</div>
							<div class="order-items__col">
								<div class="order-items__mobiletitle">Status</div>
								<div class="order-items__value">Online betaald</div>
							</div>
							<div class="order-items__col">
								<div class="order-items__mobiletitle">Bedrag</div>
								<div class="order-items__value">€ 447,68</div>
							</div>
							<div class="order-items__col">
								<div class="order-items__mobiletitle">Factuur</div>
								<div class="order-items__value">
									<span class="download">Download</span>
								</div>
							</div>
						</a>

						<a href="/mijn-account-bestelling-detail.php" class="order-items__row">
							<div class="order-items__col">
								<div class="order-items__mobiletitle">Datum</div>
								<div class="order-items__value">15-01-2022</div>
							</div>
							<div class="order-items__col">
								<div class="order-items__mobiletitle">Ordernummer</div>
								<div class="order-items__value">600072356</div>
							</div>
							<div class="order-items__col">
								<div class="order-items__mobiletitle">Aantal producten</div>
								<div class="order-items__value">10</div>
							</div>
							<div class="order-items__col">
								<div class="order-items__mobiletitle">Status</div>
								<div class="order-items__value">Afgehaald</div>
							</div>
							<div class="order-items__col">
								<div class="order-items__mobiletitle">Bedrag</div>
								<div class="order-items__value">€ 682,35</div>
							</div>
							<div class="order-items__col">
								<div class="order-items__mobiletitle">Factuur</div>
								<div class="order-items__value">
									<span class="download">Download</span>
								</div>
							</div>
						</a>

						<a href="/mijn-account-bestelling-detail.php" class="order-items__row">
							<div class="order-items__col">
								<div class="order-items__mobiletitle">Datum</div>
								<div class="order-items__value">05-01-2022</div>
							</div>
							<div class="order-items__col">
								<div class="order-items__mobiletitle">Ordernummer</div>
								<div class="order-items__value">600062397</div>
							</div>
							<div class="order-items__col">
								<div class="order-items__mobiletitle">Aantal producten</div>
								<div class="order-items__value">8</div>
							</div>
							<div class="order-items__col">
								<div class="order-items__mobiletitle">Status</div>
								<div class="order-items__value">Afgehaald</div>
							</div>
							<div class="order-items__col">
								<div class="order-items__mobiletitle">Bedrag</div>
								<div class="order-items__value">€ 532,68</div>
							</div>
							<div class="order-items__col">
								<div class="order-items__mobiletitle">Factuur</div>
								<div class="order-items__value">
									<span class="download">Download</span>
								</div>
							</div>
						</a>

						<a href="/mijn-account-bestelling-detail.php" class="order-items__row">
							<div class="order-items__col">
								<div class="order-items__mobiletitle">Datum</div>
								<div class="order-items__value">15-12-2022</div>
							</div>
							<div class="order-items__col">
								<div class="order-items__mobiletitle">Ordernummer</div>
								<div class="order-items__value">500046851</div>
							</div>
							<div class="order-items__col">
								<div class="order-items__mobiletitle">Aantal producten</div>
								<div class="order-items__value">5</div>
							</div>
							<div class="order-items__col">
								<div class="order-items__mobiletitle">Status</div>
								<div class="order-items__value">Afgehaald</div>
							</div>
							<div class="order-items__col">
								<div class="order-items__mobiletitle">Bedrag</div>
								<div class="order-items__value">€ 324,26</div>
							</div>
							<div class="order-items__col">
								<div class="order-items__mobiletitle">Factuur</div>
								<div class="order-items__value">
									<span class="download">Download</span>
								</div>
							</div>
						</a>

						<a href="/mijn-account-bestelling-detail.php" class="order-items__row">
							<div class="order-items__col">
								<div class="order-items__mobiletitle">Datum</div>
								<div class="order-items__value">03-12-2022</div>
							</div>
							<div class="order-items__col">
								<div class="order-items__mobiletitle">Ordernummer</div>
								<div class="order-items__value">500036985</div>
							</div>
							<div class="order-items__col">
								<div class="order-items__mobiletitle">Aantal producten</div>
								<div class="order-items__value">6</div>
							</div>
							<div class="order-items__col">
								<div class="order-items__mobiletitle">Status</div>
								<div class="order-items__value">Afgehaald</div>
							</div>
							<div class="order-items__col">
								<div class="order-items__mobiletitle">Bedrag</div>
								<div class="order-items__value">€ 436,46</div>
							</div>
							<div class="order-items__col">
								<div class="order-items__mobiletitle">Factuur</div>
								<div class="order-items__value">
									<span class="download">Download</span>
								</div>
							</div>
						</a>

					</div>
					<a href="/mijn-account-mijn-bestellingen.php" class="read-more"><span>Bekijk alle</span></a>
				</div>
			</section>

		</main>
			
		<footer id="footer-page">
			<?php include '_includes/footer.html';?>
		</footer>

	</div>
	</body>
</html>
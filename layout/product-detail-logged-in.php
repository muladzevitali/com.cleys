
<!DOCTYPE HTML>
<html lang="nl">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Aanbod – Product detail – LOGGED IN</title>
	<meta name="description" content="">
	<!--font, css, js -->
	<?php include '_includes/head.html';?>
</head>

<body>
	<div class="wrapper product-detail-page in-login">

		<header id="header-menu">
			<?php include '_includes/header-menu-logged-in.html';?>
		</header>
			
		<main>

			<nav class="breadcrumbs" aria-label="Breadcrumb navigation">
				<div class="container">
					<ul aria-label="breadcrumbs">
						<li><a href="/aanbod.php">Aanbod</a></li>
						<li><a href="#">Spuitkurk</a></li>
						<li><a href="#" aria-current="page">Spuitkurk - Normale korrel - 20 kleuren</a></li>
					</ul>
				</div>
			</nav>

			<section class="product-detail --logo-bg">
				<div class="container">
					<div class="product-detail__inner">
						<div class="product-detail__slider">
							<div class="product-detail__slider-big js-product-detail__slider-for">
								<div class="img">
									<div class="inner">
										<img src="/images/product-single__img-1.jpg" alt="">
									</div>
								</div>
								<div class="img">
									<div class="inner">
										<img src="/images/product-single__img-2.jpg" alt="">
									</div>
								</div>
								<div class="img">
									<div class="inner">
										<img src="/images/product-single__img-1.jpg" alt="">
									</div>
								</div>
								<div class="img">
									<div class="inner">
										<img src="/images/product-single__img-2.jpg" alt="">
									</div>
								</div>
								<div class="img">
									<div class="inner">
										<img src="/images/product-single__img-1.jpg" alt="">
									</div>
								</div>
								<div class="img">
									<div class="inner">
										<img src="/images/product-single__img-2.jpg" alt="">
									</div>
								</div>
							</div>
							<div class="product-detail__slider-nav js-product-detail__slider-nav">
								<div class="img"><img src="/images/product-single__img-1.jpg" alt=""></div>
								<div class="img"><img src="/images/product-single__img-2.jpg" alt=""></div>
								<div class="img"><img src="/images/product-single__img-1.jpg" alt=""></div>
								<div class="img"><img src="/images/product-single__img-2.jpg" alt=""></div>
								<div class="img"><img src="/images/product-single__img-1.jpg" alt=""></div>
								<div class="img"><img src="/images/product-single__img-2.jpg" alt=""></div>
							</div>
						</div>
						<div class="product-detail__right">
							<form action="" method="">
								<div class="product-detail__title">
									<h1 class="like-h2">Spuitkurk - Normale korrel - 20 kleuren</h1>
								</div>
								<div class="product-detail__info">Corticyte - 15 L</div>
								<!-- NOTE start of changes-->
								<div class="product-detail__price">
									<div class="cur-price --orange"><span>€ 63,79</span> incl. BTW</div>
									<div class="price-label">5% korting</div>
									<div class="old-price">€ 85,00 incl. BTW</div>
								</div>
								<!-- NOTE end of changes-->
								<div class="product-detail__extra-options">
									<select name="extra-options">
										<option value="1">Kleur #01</option>
										<option value="2">Kleur #02</option>
										<option value="3">Kleur #03</option>
									</select>
								</div>
								<div class="product-detail__stock stock --green"><i class="fas fa-check"></i> Op voorraad: 307</div>								
								<div class="product-detail__submit">
									<div class="col col-1 js-like-number like-number">
										<div class="like-number__m" data-minval="0"><i class="far fa-minus"></i></div>
										<input type="text" name="amount" value="1" pattern="^[ 0-9]+$">
										<div class="like-number__p"><i class="far fa-plus"></i></div>
									</div>
									<button type="submit" class="btn --btn-orange">Voeg toe aan winkelwagen</button>
								</div>
								<div class="product-detail__popup-link">
									<a href="#" class="js-popup-open" data-popupid="#product-detail-popup">Hoeveel materiaal heb ik nodig?</a>
								</div>
							</form>
						</div>
					</div>
				</div>
			</section>

			<section class="product-info --light-blue-bg">
				<div class="container">
					<div class="product-info__row">
						<div class="product-info__col --content">
							<h3>Beschrijving</h3>
							<p>Spuitkurk op basis van natuurlijke kurkkorrels en acrylaat bindmiddel voor binnen- en buitentoepassing.</p>
							<p>• korrelgrootte: 0,5 - 1mm</p>
							<p>Verbruik: 2 L/m2 in 3 lagen. <br>Verwerking: spuitkop 6mm op 4,5 bar.</p>
						</div>
						<div class="product-info__col --content">
							<h3>Levering of afhalen</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent non felis non dolor viverra cursus. Quisque et rutrum augue. Morbi ac pellentesque risus. Phasellus pellentesque blandit metus, vitae vestibulum lorem scelerisque vel.</p>
						</div>
						<div class="product-info__col --downloads">
							<h3>Downloads</h3>
							<a href="#"><i class="far fa-file-pdf"></i>Technische fiche Corticyte Normale korrel</a>
							<a href="#"><i class="far fa-file-pdf"></i>Handleiding spuitkurk voorbereiden</a>
						</div>
					</div>
				</div>
			</section>

			<section class="interesting-articles">
				<div class="container">
					<div class="section-title --blue-title">
						<h2>Interessante artikels</h2>
					</div>
					<div class="interesting-articles__list col-2-list">

						<a href="/academy-detail.php" class="academy-single --video">
							<div class="academy-single__img">
								<div class="academy-single__label">video’s</div>
								<img src="/images/academy-single__img-2.jpg" alt="">
							</div>
							<div class="academy-single__title">
								<h3>Hoe spuitkurk aanbrengen?</h3>
							</div>
						</a>

						<a href="/academy-detail.php" class="academy-single">
							<div class="academy-single__img">
								<div class="academy-single__label">Tips &amp; Tricks</div>
								<img src="/images/academy-single__img-1.jpg" alt="">
							</div>
							<div class="academy-single__title">
								<h3>Voordelen van spuitkurk</h3>
							</div>
						</a>

					</div>
				</div>
			</section>

			<section class="related-products --light-blue-bg">
				<div class="container">
					<div class="section-title text-center">
						<h2>Gerelateerde producten</h2>
					</div>
					<div class="related-products__list col-4-list">

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

					</div>
				</div>
			</section>

		</main>
			
		<footer id="footer-page">
			<?php include '_includes/footer.html';?>
		</footer>

		<div id="product-detail-popup" class="js-popup-content popup-content">
			<h3>Hoeveel materiaal heb ik nodig?</h3>
			<div class="prod-calc">
				<form action="" method="">
					<div class="prod-calc__form-row">
						<label for="prod-calc-field">De muurdelen hebben een totale oppervlakte van:</label>
						<div class="field-span">
							<input type="text" id="prod-calc-field" value="20">
							<span>m<sup>2</sup></span>
						</div>
						<button type="submit" class="btn --btn-orange">Bereken</button>
					</div>
				</form>
				<div class="prod-calc__title">
					<div class="like-h5">Spuitkurk - Normale korrel</div>
					<div class="like-h5">Emmer(s) van 15L</div>
				</div>
				<div class="prod-calc__results">
					<div class="prod-calc__results-row">
						<div>Oppervlakte:</div>
						<div>20m2</div>
					</div>
					<div class="prod-calc__results-row">
						<div>Gemiddeld verbruik per m<sup>2</sup> (alle 3 lagen incl.):</div>
						<div>2 L</div>
					</div>
					<div class="prod-calc__results-row">
						<div>Totaal verbruik:</div>
						<div>40 L</div>
					</div>
				</div>
				<div class="like-h5">Bestel <span>3 emmer(s)</span> Spuitkurk - Normale korrel van 15L</div>
			</div>
		</div>

	</div>
	</body>
</html>

<!DOCTYPE HTML>
<html lang="nl">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Home</title>
	<meta name="description" content="">
	<!--font, css, js -->
	<?php include '_includes/head.html';?>
</head>

<body>
	<!-- TODO for <div class="wrapper"> add clas="in-login" if user logged in -->
	<div class="wrapper home-page">

		<header id="header-menu">
			<?php include '_includes/header-menu.html';?>
		</header>
			
		<main>

			<section class="showcase">
				
				<div class="showcase__slider flex-slider js-showcase-slider">

					<div class="showcase__slider-item">
						<div class="showcase__slider-img">
							<img src="/images/showcase-slider-img-1.jpg" alt="">
						</div>
						<div class="container">
							<div class="showcase__slider-content">
								<h1>Spuitkurkshop voor professionals</h1>
								<div class="intro">Kurk in spuitvorm - een mix van kurk granulaten, harsen en pigmenten. Ecologisch , dampdoorlatend.</div>
								<a href="#" class="btn --btn-orange">Bekijk aanbods</a>
							</div>
						</div>
					</div>

					<div class="showcase__slider-item">
						<div class="showcase__slider-img">
							<img src="/images/showcase-slider-img-1.jpg" alt="">
						</div>
						<div class="container">
							<div class="showcase__slider-content">
								<h1>2</h1>
								<div class="intro">Kurk in spuitvorm - een mix van kurk granulaten, harsen en pigmenten. Ecologisch , dampdoorlatend.</div>
								<a href="#" class="btn --btn-orange">Bekijk aanbods</a>
							</div>
						</div>
					</div>

					<div class="showcase__slider-item">
						<div class="showcase__slider-img">
							<img src="/images/showcase-slider-img-1.jpg" alt="">
						</div>
						<div class="container">
							<div class="showcase__slider-content">
								<h1>3</h1>
								<div class="intro">Kurk in spuitvorm - een mix van kurk granulaten, harsen en pigmenten. Ecologisch , dampdoorlatend.</div>
								<a href="#" class="btn --btn-orange">Bekijk aanbods</a>
							</div>
						</div>
					</div>

					<div class="showcase__slider-item">
						<div class="showcase__slider-img">
							<img src="/images/showcase-slider-img-1.jpg" alt="">
						</div>
						<div class="container">
							<div class="showcase__slider-content">
								<h1>4</h1>
								<div class="intro">Kurk in spuitvorm - een mix van kurk granulaten, harsen en pigmenten. Ecologisch , dampdoorlatend.</div>
								<a href="#" class="btn --btn-orange">Bekijk aanbods</a>
							</div>
						</div>
					</div>

					<div class="showcase__slider-item">
						<div class="showcase__slider-img">
							<img src="/images/showcase-slider-img-1.jpg" alt="">
						</div>
						<div class="container">
							<div class="showcase__slider-content">
								<h1>5</h1>
								<div class="intro">Kurk in spuitvorm - een mix van kurk granulaten, harsen en pigmenten. Ecologisch , dampdoorlatend.</div>
								<a href="#" class="btn --btn-orange">Bekijk aanbods</a>
							</div>
						</div>
					</div>

					<div class="showcase__slider-item">
						<div class="showcase__slider-img">
							<img src="/images/showcase-slider-img-1.jpg" alt="">
						</div>
						<div class="container">
							<div class="showcase__slider-content">
								<h1>6</h1>
								<div class="intro">Kurk in spuitvorm - een mix van kurk granulaten, harsen en pigmenten. Ecologisch , dampdoorlatend.</div>
								<a href="#" class="btn --btn-orange">Bekijk aanbods</a>
							</div>
						</div>
					</div>

				</div>

				<div class="showcase__link">
					<div class="container">
						<div class="showcase__link-inner">
							<div class="showcase__slider-dots"></div>
							<div class="showcase__link-row">

								<a href="/aanbod.php" class="showcase__link-col --title">
									<h2>Shop nu<i class="fas fa-arrow-right"></i></h2>
								</a>

								<a href="#" class="showcase__link-col --link">
									<img src="/images/link-category-1.jpg" alt="">
									<h5>Spuitkurk</h5>
								</a>

								<a href="#" class="showcase__link-col --link">
									<img src="/images/link-category-2.jpg" alt="">
									<h5>Gevelisolatie</h5>
								</a>

								<a href="#" class="showcase__link-col --link">
									<img src="/images/link-category-3.jpg" alt="">
									<h5>Buitenbepleistering</h5>
								</a>

							</div>
						</div>
					</div>
				</div>

			</section>

			<section class="promo">
				<div class="container">
					<div class="promo__inner">
						<div class="promo__list col-2-list">
							<a href="#" class="promo__item">
								<div class="promo__img">
									<img src="/images/promo__img-1.jpg" alt="">
								</div>
								<div class="promo__title">
									<h3>Zomerpromo! Bekijk de aanbiedingen</h3>
								</div>
							</a>
							<a href="#" class="promo__item">
								<div class="promo__img">
									<img src="/images/promo__img-2.jpg" alt="">
								</div>
								<div class="promo__title">
									<h3>Professional? Ontdek hier de voordelen</h3>
								</div>
							</a>
						</div>
					</div>
				</div>
			</section>

			<section class="spotlight">
				<div class="container">
					<div class="spotlight__inner">
						<div class="section-title text-center">
							<h2>Producten in de kijker</h2>
						</div>
						<div class="spotlight__list col-4-list">
							
							<!-- NOTE for promo required class="--with-label --label-promo", and added blocks product-single__label, old-price (block exist on aanbod.php page) -->
							<!-- <a href="/product-detail.php" class="product-single --with-label --label-promo">
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
							</a> -->
							
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

						</div>
						<a href="/aanbod.php" class="spotlight__btn btn --btn-orange">Bekijk volledig aanbod</a>
					</div>
				</div>
			</section>

			<section class="academy-slider">
				<div class="container">
					<div class="section-title text-center">
						<h2>Spuitkurk Academy</h2>
					</div>
				</div>
				<div class="academy-slider__slider flex-slider js-academy-slider">

					<div class="academy-slider__item">
						<a href="/academy-detail.php" class="academy-single --video">
							<div class="academy-single__img">
								<div class="academy-single__label">video’s</div>
								<img src="/images/academy-single__img-2.jpg" alt="">
							</div>
							<div class="academy-single__title">
								<h3>Hoe spuitkurk aanbrengen?</h3>
							</div>
						</a>
					</div>
					
					<div class="academy-slider__item">
						<a href="/academy-detail.php" class="academy-single">
							<div class="academy-single__img">
								<div class="academy-single__label">Tips & Tricks</div>
								<img src="/images/academy-single__img-1.jpg" alt="">
							</div>
							<div class="academy-single__title">
								<h3>Voordelen van spuitkurk</h3>
							</div>
						</a>
					</div>

					<div class="academy-slider__item">
						<a href="/academy-detail.php" class="academy-single --video">
							<div class="academy-single__img">
								<div class="academy-single__label">video’s</div>
								<img src="/images/academy-single__img-1.jpg" alt="">
							</div>
							<div class="academy-single__title">
								<h3>Voordelen van spuitkurk</h3>
							</div>
						</a>
					</div>

				</div>
			</section>

			<section class="cta">
				<div class="container">
					<div class="cta__inner">
						<div class="cta__title">
							<h2>Vragen over spuitkurk? <br>Of ondersteuning nodig?</h2>
						</div>
						<div class="cta__btn btn-block">
							<a href="/veelgestelde-vragen.php" class="btn --btn-orange">Bekijk onze FAQ</a>
							<a href="/contact.php" class="btn --btn-white-border">Contacteer ons</a>
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
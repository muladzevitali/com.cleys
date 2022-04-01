
<!DOCTYPE HTML>
<html lang="nl">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Aanbod</title>
	<meta name="description" content="">
	<!--font, css, js -->
	<?php include '_includes/head.html';?>
</head>

<body>
	<div class="wrapper offer-page">

		<header id="header-menu">
			<?php include '_includes/header-menu.html';?>
		</header>
			
		<main>

			<section class="header-img --small">
				<img src="/images/header-img-1.jpg" alt="">
			</section>

			<section class="offer --logo-bg">
				<div class="container">
					<div class="offer__inner">

						<div class="offer__menu-trigger js-offer__menu-trigger"><i class="far fa-bars"></i></div>

						<div class="offer__menu js-offer__menu">
							<div class="offer__menu-close close-btn js-offer__menu-close"><i class="far fa-times"></i></div>
							<h3>Aanbod</h3>
							<ul>
								<li><a href="#">Alle producten</a></li>
								<li class="dropdown js-dropdown">
									<a href="#" class="dropdown__trigger js-dropdown__trigger">Spuitkurk</a>
									<ul class="dropdown__menu js-dropdown__menu">
										<li><a href="#">Spuitkurk</a></li>
										<li><a href="#">Voorbehandeling</a></li>
										<li><a href="#">Tapes en afdekmaterialen</a></li>
										<li><a href="#">Gereedschap en toebehoren</a></li>
									</ul>
								</li>
								<li class="dropdown js-dropdown">
									<a href="#" class="dropdown__trigger">Etics gevelisolatie</a>
									<ul class="dropdown__menu js-dropdown__menu">
										<li><a href="#">Etics gevelisolatie</a></li>
										<li><a href="#">EPS perimeter isolatie</a></li>
										<li><a href="#">Isolatiepluggen</a></li>
										<li><a href="#">Sokkelprofiel</a></li>
										<li><a href="#">Bevestigingsmateriaal</a></li>
										<li><a href="#">Gereedschap en toebehoren</a></li>
									</ul>
								</li>
								<li class="dropdown js-dropdown">
									<a href="#" class="dropdown__trigger">Etics buitenbepleistering</a>
									<ul class="dropdown__menu js-dropdown__menu">
										<li><a href="#">Wapening en profielen</a></li>
										<li><a href="#">Voorbehandeling</a></li>
										<li><a href="#">Tapes en afdekmaterialen</a></li>
										<li><a href="#">Uitvlakkingsmortel</a></li>
										<li><a href="#">Sierpleister / crepi</a></li>
										<li><a href="#">Gereedschap en toebehoren</a></li>
									</ul>
								</li>
								<li class="dropdown js-dropdown">
									<a href="#" class="dropdown__trigger">Tapes en afdekmaterialen</a>
									<ul class="dropdown__menu js-dropdown__menu">
										<li><a href="#">Tape en masking tape</a></li>
										<li><a href="#">Afdekfolies</a></li>
									</ul>
								</li>
								<li class="dropdown js-dropdown">
									<a href="#" class="dropdown__trigger">Voorbehandeling</a>
									<ul class="dropdown__menu js-dropdown__menu">
										<li><a href="#">Oude / slechte muren</a></li>
										<li><a href="#">Voorstrijk sierpleister / crepi</a></li>
									</ul>
								</li>
							</ul>
						</div>

						<div class="offer__content">
							<div class="offer__header">
								<div class="offer__tetle">
									<h2>Spuitkurk</h2>
								</div>
								<div class="offer__sort">
									<form action="" method="">
										<div class="offer__sort-row">
											<label for="offer-sort">Sorteren op:</label>
											<select name="offer-sort" id="offer-sort">
												<option value="populair">Populair</option>
												<option value="nieuw">Nieuw</option>
												<option value="prijs oplopend">Prijs oplopend</option>
												<option value="prijs aflopend">Prijs aflopend</option>
											</select>
										</div>
									</form>
								</div>
							</div>
							<div class="offer__list">

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

								<!-- NOTE for promo required class="--with-label --label-promo", and added blocks product-single__label, old-price -->
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
							<nav role="navigation" aria-label="Pagination Navigation">
								<ul class="pagination">
									<li class="prev"><a href="#" aria-label="Previous Page"><i class="far fa-chevron-left"></i></a></li>
									<li class="active"><a href="#" aria-current="true">1</a></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><span>...</span></li>
									<li><a href="#">6</a></li>
									<li><a href="#">7</a></li>
									<li><a href="#">8</a></li>
									<li class="next"><a href="#" aria-label="Next Page"><i class="far fa-chevron-right"></i></a></li>
								</ul>
							</nav>
						</div>

					</div>
				</div>
			</section>

			<section class="category-desc --light-blue-bg">
				<div class="container">
					<div class="category-desc__inner --content">
						<h3>Spuitkurk</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas quis fringilla leo. Phasellus vel sodales dolor, et posuere nisl. Donec eleifend, magna id ultricies tincidunt, tellus neque suscipit dolor, in feugiat nulla velit sit amet justo. Maecenas vel mauris eu dui lacinia tempus sed nec lectus.</p>
						<h3>Spuitkurk gereedschappen, toebehoren en materialen</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas quis fringilla leo. Phasellus vel sodales dolor, et posuere nisl. Donec eleifend, magna id ultricies tincidunt, tellus neque suscipit dolor, in feugiat nulla velit sit amet justo. Maecenas vel mauris eu dui lacinia tempus sed nec lectus. Pellentesque placerat varius dolor, ac pellentesque lectus suscipit nec.</p>
						<h3>Cleys webshop</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas quis fringilla leo. Phasellus vel sodales dolor, et posuere nisl. Donec eleifend, magna id ultricies tincidunt, tellus neque suscipit dolor, in feugiat nulla velit sit amet justo. Maecenas vel mauris eu dui lacinia tempus sed nec lectus. Pellentesque placerat varius dolor, ac pellentesque lectus suscipit nec.</p>
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
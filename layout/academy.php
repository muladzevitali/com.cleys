
<!DOCTYPE HTML>
<html lang="nl">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Academy</title>
	<meta name="description" content="">
	<!--font, css, js -->
	<?php include '_includes/head.html';?>
</head>

<body>
	<div class="wrapper academy-overzicht-page">

		<header id="header-menu">
			<?php include '_includes/header-menu.html';?>
		</header>
			
		<main>

			<section class="header-content">
				<div class="header-content__image">
					<img src="/images/header-text-img-1.jpg" alt="">
				</div>
				<div class="container">
					<div class="header-content__text">
						<h1 class="like-h2">Spuitkurk Academy</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas quis fringilla leo. Phasellus vel sodales dolor, et posuere nisl. Donec eleifend, magna id ultricies tincidunt, tellus neque suscipit dolor, in feugiat nulla velit sit amet justo. Maecenas vel mauris eu dui lacinia tempus sed nec lectus. Pellentesque placerat varius dolor, ac pellentesque lectus suscipit nec.</p>
						<a class="header-content__scrollto js-scroll-to" href="#academy">
							<i class="fal fa-angle-double-down"></i>
						</a>
					</div>
				</div>
				
			</section>

			<section class="academy" id="academy">
				<div class="container">
					<div class="academy__inner">
						<div class="category-list">
							<ul>
								<li class="active"><a href="#">alles</a></li>
								<li><a href="#">Tips & tricks</a></li>
								<li><a href="#">video’s</a></li>
								<li><a href="#">handleidingen</a></li>
							</ul>
						</div>
						<div class="academy__list">

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

							<a href="/academy-detail.php" class="academy-single">
								<div class="academy-single__img">
									<div class="academy-single__label">handleidingen</div>
									<img src="/images/academy-single__img-3.jpg" alt="">
								</div>
								<div class="academy-single__title">
									<h3>Hoe spuitkurk mengen?</h3>
								</div>
							</a>

							<a href="/academy-detail.php" class="academy-single">
								<div class="academy-single__img">
									<div class="academy-single__label">handleidingen</div>
									<img src="/images/academy-single__img-4.jpg" alt="">
								</div>
								<div class="academy-single__title">
									<h3>Voorbereiding gevel</h3>
								</div>
							</a>

							<a href="/academy-detail.php" class="academy-single">
								<div class="academy-single__img">
									<div class="academy-single__label">Tips & Tricks</div>
									<img src="/images/academy-single__img-5.jpg" alt="">
								</div>
								<div class="academy-single__title">
									<h3>Tips & Tricks</h3>
								</div>
							</a>

							<a href="/academy-detail.php" class="academy-single">
								<div class="academy-single__img">
									<div class="academy-single__label">handleidingen</div>
									<img src="/images/academy-single__img-6.jpg" alt="">
								</div>
								<div class="academy-single__title">
									<h3>Hoe spuitkurk mengen?</h3>
								</div>
							</a>

							<a href="/academy-detail.php" class="academy-single">
								<div class="academy-single__img">
									<div class="academy-single__label">handleidingen</div>
									<img src="/images/academy-single__img-7.jpg" alt="">
								</div>
								<div class="academy-single__title">
									<h3>Voorbereiding gevel</h3>
								</div>
							</a>

							<a href="/academy-detail.php" class="academy-single">
								<div class="academy-single__img">
									<div class="academy-single__label">Tips & Tricks</div>
									<img src="/images/academy-single__img-8.jpg" alt="">
								</div>
								<div class="academy-single__title">
									<h3>Tips & Tricks</h3>
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
			</section>

		</main>
			
		<footer id="footer-page">
			<?php include '_includes/footer.html';?>
		</footer>

	</div>
</body>
</html>
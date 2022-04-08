
<!DOCTYPE HTML>
<html lang="nl">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Academy – detail</title>
	<meta name="description" content="">
	<!--font, css, js -->
	<?php include '_includes/head.html';?>
</head>

<body>
	<div class="wrapper academy-detail-page">

		<header id="header-menu">
			<?php include '_includes/header-menu.html';?>
		</header>
			
		<main>

			<section class="header-img">
				<img src="/images/header-img-3.jpg" alt="">
			</section>

			<nav class="breadcrumbs" aria-label="Breadcrumb navigation">
				<div class="container">
					<ul aria-label="breadcrumbs">
						<li><a href="/academy.php">Spuitkurk Academy</a></li>
						<li><a href="#">Video’s</a></li>
						<li><a href="/academy-detail.php" aria-current="page">Hoe spuitkurk aanbrengen?</a></li>
					</ul>
				</div>
			</nav>

			<section class="academy-detail article-template --dark-title">
				<div class="container --grid">
					<div class="article-template__share">
						<span>share</span>
						<a href="https://www.facebook.com/sharer/sharer.php?u=https://example.com" target="_blank" rel="noopener noreferrer" aria-label="Share to Facebook">
							<i class="fab fa-facebook-f"></i>
						</a>
						<a href="https://www.linkedin.com/shareArticle?mini=true&amp;url=https://example.com" target="_blank" rel="noopener noreferrer" aria-label="Share to Linkedin">
							<i class="fab fa-linkedin-in"></i>
						</a>
						<a href="whatsapp://send?text=https://example.com" data-action="share/whatsapp/share" target="_blank" rel="noopener noreferrer" aria-label="Share to Whatsapp">
							<i class="fab fa-whatsapp"></i>
						</a>
						<a href="mailto:info@example.com?&amp;subject=&amp;cc=&amp;bcc=&amp;body=https://example.com%0A" target="_blank" rel="noopener noreferrer" aria-label="Share to mail">
							<i class="fal fa-envelope"></i>
						</a>
					</div>
					<article class="article-template__block">
						<header class="article-template__header">
							<h1 class="like-h2">Hoe spuitkurk aanbrengen?</h1>
							<div class="inteo">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas quis fringilla leo. Phasellus vel sodales dolor, et posuere nisl. Donec eleifend, magna id ultricies tincidunt, tellus neque suscipit dolor.</p>
							</div>
						</header>
						<section class="article-template__body --content js-article-body">
							<p>Lorem ipsum <i>dolor</i> sit amet, consectetur adipiscing elit. <strong>Maecenas quis</strong> fringilla leo. Phasellus vel sodales dolor, et posuere nisl. Donec <a href="#">eleifend</a>, magna id ultricies tincidunt, tellus neque suscipit dolor, in feugiat nulla velit sit amet justo.</p>
							<p>
								<video src="/media/files/video_example.mp4" width="900" controls=""></video>
							</p>
							<h6>Maecenas quis fringilla leo.</h6>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas quis fringilla leo. Phasellus vel sodales dolor, et posuere nisl. Donec eleifend, magna id ultricies tincidunt, tellus neque suscipit dolor, in feugiat nulla velit sit amet justo. </p>
							 <p>
								<img src="photos/academies/1/academy-single__img-1.jpg" alt="">
							</p>
							 <p>
								<iframe width="560" height="315" src="https://www.youtube.com/embed/Mxesac55Puo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
							</p>
						</section>
						<footer class="article-template__footer">
							<a href="/contact.php" class="btn --btn-orange">Contacteer ons</a>
						</footer>
					</article>
				</div>
				
			</section>

		</main>
			
		<footer id="footer-page">
			<?php include '_includes/footer.html';?>
		</footer>

	</div>
</body>
</html>
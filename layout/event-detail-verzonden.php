
<!DOCTYPE HTML>
<html lang="nl">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>event detail – verzonden</title>
	<meta name="description" content="">
	<!--font, css, js -->
	<?php include '_includes/head.html';?>
</head>

<body>
	<div class="wrapper event-detail-page">
		<!-- NOTE same structure as for event-detail.php except one block (see next NOTE in this file) -->

		<header id="header-menu">
			<?php include '_includes/header-menu.html';?>
		</header>
			
		<main>

			<section class="header-page">
				<div class="header-page__img">
					<img src="/images/header-page-img.jpg" alt="">
				</div>
				<div class="container">
					<a href="/" class="header-page__btn btn --btn-back">Terug</a>
				</div>
			</section>

			<section class="event-detail">
				<div class="container">
					<div class="event-detail__inner">

						<div class="event-detail__left">
							<div class="event-detail__header">
								<div class="event-detail__header-top">
									<div class="event-detail__date">vrijdag <span>11 februari</span></div>
								</div>
								<h1>That’s so 90’s Dinner & Dance ✨</h1>
								<p>Een Twix was nog gewoon een Raider. Flippo’s &Tamagotchi’s waren de ultieme gadgets. De Spice Girls en Backstreetboys maakten iedereen wild en feesten was op z’n best met Buffalo’s op de beats van Insomnia</p>
								<p>Alles was toch gewoon beter in de nineties?</p>
								<p>Laat je een hele avond lang door de Maekelhoeve onderdompelen in die zalige sfeer en feest er op los met Flügel en gogo-dansers.</p>
								<p>Because that’s so 90’s!</p>
								<div class="event-detail__price">€75 p.p.</div>
							</div>

							<div class="event-detail__body">
								<h2>Dinner & Dance</h2>
								<p>Beleef een gezellige avond met je vrienden, collega’s of familie. Eerst lekker dineren om daarna alles los te gooien op onze dansvloer.</p>
								<h3>Concept</h3>
								<ul class="music-list">
									<li><strong>Deuren open: 19u30</strong></li>
									<li><strong>Einde: 3u30</strong></li>
									<li>Tijdens het diner wijnen, cava & frisdranken</li>
									<li>Vanaf het dansfeest ook bieren van lage en hoge gisting</li>
									<li>Ambiancemuziek voor iedereen
										<ul>
											<li>Op bepaalde data organiseren wij een thema-Dinner & Dance, dit staat steeds aangegeven bij de desbetreffende datum.</li>
										</ul>
									</li>
									<li>De afrekening gebeurt voordien, lees hiervoor zeker onze <a href="#">voorwaarden</a> </li>
								</ul>
								<h3>Formule</h3>
								<ul class="check-list">
									<li>Ontvangst met <strong>bubbels</strong> en <strong>amuses</strong></li>
									<li>Een fijn <strong>visgerechtje</strong> aan tafel geserveerd</li>
									<li><strong>Buffet</strong> van vis- en vleesspecialiteiten</li>
									<li>Parade van <strong>dessertjes</strong> op buffet</li>
									<li><strong>Koffie</strong> of <strong>thee</strong></li>
									<li>Meesterlijke <strong>kaasplank</strong></li>
									<li>Late-night <strong>snack</strong></li>
								</ul>
							</div>
						</div>

						<div class="event-detail__right">
							<!-- NOTE <div class="reserve"> replaced to <div class="reserve-ok">-->
							<div class="reserve-ok">
								<h2>Reserveren</h2>
								<div class="reserve-ok__check">
									<p><strong>Het formulier is goed verzonden!</strong> <br>
									U ontvangt een bevestigingsmail met van uw reservatie. <br>
									<strong>Let op:</strong> de reservatie is pas definitief na volledige betaling.</p>
								</div>
							</div>
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
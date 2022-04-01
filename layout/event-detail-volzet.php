
<!DOCTYPE HTML>
<html lang="nl">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>event detail – volzet</title>
	<meta name="description" content="">
	<!--font, css, js -->
	<?php include '_includes/head.html';?>
</head>

<body>
	<div class="wrapper event-detail-page">
		<!-- NOTE same structure as for event-detail.php except one block (see NOTE below in this file) -->

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

			<!-- NOTE added class "--event-detail-fully-booked" -->
			<section class="event-detail --event-detail-fully-booked">
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
							<!-- NOTE <div class="reserve"> replace to <div class="reserve-fully-booked">-->
							<div class="reserve-fully-booked">
								<div class="reserve-fully-booked__form">
									<form action="" method="">
										
										<div class="reserve__header">
											<h2>Reservelijst</h2>
											<p>Dit evenement is helaas volzet. Vul dit formulier in om op onze reservelijst te komen, dan bent u als eerste op de hoogte als er plaatsen vrijkomen voor u en uw gezelschap.</p>
										</div>

										<div class="fieldset">
											<h3 class="legend">Contactgegevens</h3>
											<div class="form-row">
												<div class="col col-2 label-absolute">
													<input type="text" name="first-name" id="rfb-formfield1" placeholder="Voornaam" required="">
													<label for="rfb-formfield1">Voornaam</label>
												</div>
												<div class="col col-2 label-absolute">
													<input type="text" name="name" id="rfb-formfield2" placeholder="Naam" required="">
													<label for="rfb-formfield2">Naam</label>
												</div>
												<div class="col col-2 label-absolute">
													<input type="tel" name="tel" id="rfb-formfield3" placeholder="Telefoonnummer" required="">
													<label for="rfb-formfield3">Telefoonnummer</label>
												</div>
												<div class="col col-2 label-absolute">
													<input type="email" name="mail" id="rfb-formfield4" placeholder="E-mailadres" required="">
													<label for="rfb-formfield4">E-mailadres</label>
												</div>
												<div class="col col-2">
													<select name="aantal-volwassenen" id="rfb-formfield5" required="">
														<option value="" selected="" disabled="">Aantal volwassenen</option>
														<option value="1">1</option>
														<option value="2">2</option>
														<option value="3">3</option>
														<option value="4">4</option>
														<option value="5">5</option>
														<option value="6">6</option>
														<option value="7">7</option>
														<option value="8">8</option>
														<option value="9">9</option>
														<option value="10">10</option>
														<option value="11">11</option>
														<option value="12">12</option>
														<option value="13">13</option>
														<option value="14">14</option>
														<option value="15">15</option>
														<option value="16">16</option>
														<option value="17">17</option>
														<option value="18">18</option>
														<option value="19">19</option>
														<option value="20">20</option>
													</select>
												</div>
											</div>
										</div>

										<div class="fieldset">
											<h3 class="legend">Uw tafel en gezelschap</h3>
											<div class="form-row">
												<div class="col col-1 check-col">
													<input type="checkbox" name="schrijf-me" id="rfb-formfield6" value="" checked="">
													<label for="rfb-formfield6">Schrijf me in voor de Maekelhoeve nieuwsbrief.</label>
												</div>
												<div class="col col-1 check-col">
													<input type="checkbox" name="privacy" id="rfb-formfield7" value="" required="" checked="">
													<label for="rfb-formfield7">Ik geef toestemming deze gegevens te verzamelen en te verwerken. <a href="#">Privacyverklaring</a></label>
												</div>
												<div class="col col-1 check-col">
													<input type="checkbox" name="privacy" id="rfb-formfield8" value="" required="" checked="">
													<label for="rfb-formfield8">Ik ga akkoord met de <a href="#">reservatie voorwaarden</a> en de <a href="#">huisregels</a>.</label>
												</div>
											</div>
										</div>

										<div class="submit-fieldset">
											<button type="submit" class="btn --btn-yellow">Verzenden</button>
										</div>

									</form>
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
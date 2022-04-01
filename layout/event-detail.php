
<!DOCTYPE HTML>
<html lang="nl">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Event detail</title>
	<meta name="description" content="">
	<!--font, css, js -->
	<?php include '_includes/head.html';?>
</head>

<body>
	<div class="wrapper event-detail-page">

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

			<!-- NOTE Important! Pages event-detail-verzonden & event-detail-volzet based on this page. Difference you can find in NOTE's inside thus pages -->
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
							<div class="reserve">
								<div class="reserve__form">
									<form action="" method="">
										
										<div class="reserve__header">
											<h2>Reserveren</h2>
											<p>Vul het formulier volledig in om te reserveren.  Vervolgens ontvangt u een bevestigingsmail met betalingsinformatie. De reservatie is pas definitief na volledige betaling.</p>
										</div>

										<div class="fieldset">
											<h3 class="legend">Contactgegevens</h3>
											<div class="form-row">
												<div class="col col-2 label-absolute">
													<input type="text" name="first-name" id="r-formfield1" placeholder="Voornaam" required="">
													<label for="r-formfield1">Voornaam</label>
												</div>
												<div class="col col-2 label-absolute">
													<input type="text" name="name" id="r-formfield2" placeholder="Naam" required="">
													<label for="r-formfield2">Naam</label>
												</div>
												<div class="col col-2 label-absolute">
													<input type="tel" name="tel" id="r-formfield3" placeholder="Telefoonnummer" required="">
													<label for="r-formfield3">Telefoonnummer</label>
												</div>
												<div class="col col-2 label-absolute">
													<input type="email" name="mail" id="r-formfield4" placeholder="E-mailadres" required="">
													<label for="r-formfield4">E-mailadres</label>
												</div>
												<div class="col col-2 label-absolute">
													<input type="text" name="address" id="r-formfield5" placeholder="Straat en huisnummer" required="">
													<label for="r-formfield5">Straat en huisnummer</label>
												</div>
												<div class="col col-2 label-absolute">
													<input type="text" name="woonplaats" id="r-formfield6" placeholder="Woonplaats" required="">
													<label for="r-formfield6">Woonplaats</label>
												</div>

												<div class="col col-1 check-col">													
													<input type="checkbox" name="factuur" id="r-factuur" class="js-r-factuur" value="">
													<label for="r-factuur">Factuur?</label>
												</div>

											</div>
										</div>

										<!-- NOTE If some field should be required in this block, just add class "required" for input parent div (for example <div class="col col-2 label-absolute required">). -->
										<div class="fieldset js-factuur-fieldset js-hide-fieldset">
											<h3 class="legend">Facturatiegegevens</h3>
											<div class="form-row">
												<div class="col col-2 label-absolute required">
													<input type="text" name="bedrijfsnaam" id="r-formfield8" placeholder="Bedrijfsnaam">
													<label for="r-formfield8">Bedrijfsnaam</label>
												</div>
												<div class="col col-2 label-absolute required">
													<input type="text" name="ondernemingsnummer" id="r-formfield9" placeholder="Ondernemingsnummer">
													<label for="r-formfield9">Ondernemingsnummer</label>
												</div>
												<div class="col col-2 label-absolute required">
													<input type="tel" name="tel" id="r-formfield10" placeholder="Telefoonnummer">
													<label for="r-formfield10">Telefoonnummer</label>
												</div>
												<div class="col col-2 label-absolute required">
													<input type="email" name="mail" id="r-formfield11" placeholder="E-mailadres">
													<label for="r-formfield11">E-mailadres</label>
												</div>
												<div class="col col-2 label-absolute required">
													<input type="text" name="address" id="r-formfield12" placeholder="Straat en huisnummer">
													<label for="r-formfield12">Straat en huisnummer</label>
												</div>
												<div class="col col-2 label-absolute required">
													<input type="text" name="woonplaats" id="r-formfield13" placeholder="Woonplaats">
													<label for="r-formfield13">Woonplaats</label>
												</div>
												<div class="col col-2 label-absolute">
													<input type="text" name="po-nummer" id="r-formfield14" placeholder="PO-nummer (optioneel)">
													<label for="r-formfield14">PO-nummer (optioneel)</label>
												</div>
												<div class="col col-2 label-absolute required">
													<input type="text" name="contactpersoon" id="r-formfield15" placeholder="Contactpersoon">
													<label for="r-formfield15">Contactpersoon</label>
												</div>
											</div>
										</div>

										<div class="fieldset">
											<h3 class="legend">Uw tafel en gezelschap</h3>
											<div class="form-row">
												<div class="col col-2 label-absolute">
													<input type="text" name="tafelnaam" id="r-formfield16" placeholder="Tafelnaam (vb. Duikclub Diest)" required="">
													<label for="r-formfield16">Tafelnaam (vb. Duikclub Diest)</label>
												</div>
												<div class="col col-2">
													<select name="aantal-volwassenen" id="r-formfield17" required>
														<option value="" selected disabled>Aantal volwassenen</option>
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
													<p class="small">Volwassene: €75 per persoon</p>
												</div>
												<div class="col col-1">
													<p>Allergieën, intoleranties of vegetariërs in uw gezelschap?</p>
												</div>
												<div class="col col-2">
													<select name="allergieën" id="r-formfield18">
														<option value="" selected disabled>Allergieën, intoleranties,…</option>
														<option value="Gluten">Gluten</option>
														<option value="Melk">Melk</option>
														<option value="Gluten en melk">Gluten en melk</option>
														<option value="Noten">Noten</option>
														<option value="Geen vis">Geen vis</option>
														<option value="Zwanger">Zwanger</option>
														<option value="Veggie">Veggie</option>
														<option value="Vegan">Vegan</option>
													</select>
												</div>
												<div class="col col-2">
													<select name="aantal" id="r-formfield19" required>
														<option value="" selected disabled>Aantal</option>
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
												<div class="col col-1 label-absolute">
													<input type="text" name="namen-personen" id="r-formfield20" placeholder="Namen van de personen" required="">
													<label for="r-formfield20">Namen van de personen</label>
													<p class="small">Indien van toepassing op meerdere personen, de namen scheiden door een komma</p>
												</div>
												<div class="col col-1">
													<!-- NOTE this button adds the above 3 fields again, so the user can select another allergy -->
													<!-- TODO Add functionality for button according to backend requirements (or leave it to me and I'll add it later with JS) -->
													<button class="add-fields">Nog een allergie toevoegen</button>
												</div>
												<div class="col col-1">
													<p class="small form-info">Voor vragen of combinaties omtrent menu aanpassingen kan u steeds <a href="#">via mail</a> contact met ons opnemen.</p>
												</div>
											</div>
										</div>

										<div class="fieldset">
											<h3 class="legend">Uw tafel en gezelschap</h3>
											<div class="form-row">
												<div class="col col-2 label-absolute">
													<input type="text" name="kortingscode" id="r-formfield21" placeholder="Kortingscode" required="">
													<label for="r-formfield21">Kortingscode</label>
												</div>
												<div class="col col-1 check-col">
													<input type="checkbox" name="schrijf-me" id="r-formfield22" value="" checked>
													<label for="r-formfield22">Schrijf me in voor de Maekelhoeve nieuwsbrief.</label>
												</div>
												<div class="col col-1 check-col">
													<input type="checkbox" name="privacy" id="r-formfield23" value="" required checked>
													<label for="r-formfield23">Ik geef toestemming deze gegevens te verzamelen en te verwerken. <a href="#">Privacyverklaring</a></label>
												</div>
												<div class="col col-1 check-col">
													<input type="checkbox" name="privacy" id="r-formfield24" value="" required checked>
													<label for="r-formfield24">Ik ga akkoord met de <a href="#">reservatie voorwaarden</a> en de <a href="#">huisregels</a>.</label>
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
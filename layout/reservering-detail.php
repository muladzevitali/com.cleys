
<!DOCTYPE HTML>
<html lang="nl">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>MyMaekelhoeve - reservering detail</title>
	<meta name="description" content="">
	<!--font, css, js -->
	<?php include '_includes/head.html';?>
</head>

<body>
<div class="wrapper">

<header id="header-menu">
	<?php include '_includes/header-menu.html';?>
</header>
	
<main>

	<section class="overview">
		<div class="container">
			<div class="overview__content">
				<div class="overview__menu">
					<ul>
						<li class="active"><a href="/overzicht.php">Overzicht</a></li>
						<li><a href="/eerdere-reservaties.php">Eerdere reservaties</a></li>
						<li><a href="/mijn-gegevens.php">Mijn gegevens</a></li>
						<li><a href="#">Huishoudelijk reglement</a></li>
						<li><a href="#">Uitloggen</a></li>
					</ul>
				</div>
				<div class="reservering-detail">

					<a href="/overzicht.php" class="reservering-detail__btn-back btn --btn-back">Terug</a>

					<div class="reservering-detail__header">
						<div class="reservering-detail__date">vrijdag <span>11 februari</span></div>
						<h1>That’s so 90’s Dinner & Dance ✨</h1>
					</div>

					<div class="reservering-detail__block">
						<div class="reservering-detail__title">
							<h2>Uw reservering</h2>
						</div>
						<div class="reservering-detail__row">

							<div class="reservering-detail__row-inner">
								<div class="name">Reservatienummer</div>
								<div class="value">20220211-023</div>
							</div>
							
							<div class="reservering-detail__row-inner">
								<div class="name">Betaalstatus</div>
								<div class="value">
									<div class="sticker --red">Openstaande betaling</div>
									<span>De reservatie is pas definitief na volledige betaling</span>
								</div>
							</div>

							<div class="reservering-detail__row-inner">
								<div class="name">Totaal bedrag</div>
								<div class="value">
									<div>€ 375,00 &nbsp; <a href="#">Online betalen via mollie</a></div>
								</div>
							</div>

						</div>
					</div>

					<div class="reservering-detail__block">
						<div class="reservering-detail__title">
							<h2>Uw tafel en gezelschap</h2>
							<a href="#" class="edit-btn js-edit-r-details" data-toggleclass="js-reservering-detail-1">Wijzigen</a>
						</div>
						<div class="reservering-detail__row js-reservering-detail-1">

							<div class="reservering-detail__row-inner">
								<div class="name">Tafelnaam</div>
								<div class="value">Tafelnaam</div>
							</div>

							<div class="reservering-detail__row-inner">
								<div class="name">Allergieën</div>
								<div class="value">
									<ul>
										<li>Gluten
											<ul>
												<li>Aantal: 2</li>
												<li>Personen: Jan, Mia</li>
											</ul>
										</li>
										<li>Vegan
											<ul>
												<li>Aantal: 1</li>
												<li>Personen: Valerie</li>
											</ul>
										</li>
									</ul>
								</div>
							</div>

							<div class="reservering-detail__row-inner">
								<div class="name">Aantal personen</div>
								<div class="value">5 volwassenen</div>
							</div>

						</div>

						<form action="" method="" class="reservering-detail__row --form js-reservering-detail-1">

							<div class="reservering-detail__row-inner">
								<div class="name">Tafelnaam</div>
								<div class="value">
									<div class="form-row">
										<div class="col col-1">
											<input type="text" value="Tafelnaam">
										</div>
									</div>
								</div>
							</div>

							<div class="reservering-detail__row-inner">
								<div class="name">Allergieën</div>
								<div class="value">
									<div class="form-row">

										<div class="col col-1">
											<select name="allergieën">
												<option value="" disabled="">Allergieën, intoleranties,…</option>
												<option value="Gluten" selected="">Gluten</option>
												<option value="Melk">Melk</option>
												<option value="Gluten en melk">Gluten en melk</option>
												<option value="Noten">Noten</option>
												<option value="Geen vis">Geen vis</option>
												<option value="Zwanger">Zwanger</option>
												<option value="Veggie">Veggie</option>
												<option value="Vegan">Vegan</option>
											</select>
										</div>

										<div class="col col-1">
											<select name="aantal">
												<option value="" selected="" disabled="">Aantal</option>
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
											<input type="text" name="namen-personen" id="erd-formfield1" placeholder="Namen van de personen">
											<label for="erd-formfield1">Namen van de personen</label>
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
							</div>

							<div class="reservering-detail__row-inner">
								<div class="name">Aantal personen</div>
								<div class="value">
									<div class="form-row">
										<div class="col col-1">
											<select name="aantal-volwassenen" id="r-formfield17">
												<option value="" disabled="">Aantal volwassenen</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5" selected="">5</option>
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
										<div class="col col-1 submit">
											<button type="submit" class="btn --btn-yellow">Opslaan</button>
										</div>
									</div>
								</div>
							</div>

						</form>
					</div>

					<div class="reservering-detail__block">
						<div class="reservering-detail__title">
							<h2>Facturatiegegevens</h2>
							<a href="#" class="edit-btn js-edit-r-details" data-toggleclass="js-reservering-detail-2">Wijzigen</a>
						</div>
						<div class="reservering-detail__row js-reservering-detail-2">

							<div class="reservering-detail__row-inner">
								<div class="name">Bedrijfsnaam</div>
								<div class="value">Tafelnaam</div>
							</div>

							<div class="reservering-detail__row-inner">
								<div class="name">Ondernemingsnummer</div>
								<div class="value">BE0123456789</div>
							</div>

							<div class="reservering-detail__row-inner">
								<div class="name">Telefoonnummer</div>
								<div class="value">03 123 45 67</div>
							</div>

							<div class="reservering-detail__row-inner">
								<div class="name">E-mailadres</div>
								<div class="value">info@bedrijf.be</div>
							</div>

							<div class="reservering-detail__row-inner">
								<div class="name">Adres</div>
								<div class="value">Straat en huisnummer, woonplaats</div>
							</div>

							<div class="reservering-detail__row-inner">
								<div class="name">PO-nummer</div>
								<div class="value">PO-123456</div>
							</div>

							<div class="reservering-detail__row-inner">
								<div class="name">Contactpersoon</div>
								<div class="value">Mijn naam</div>
							</div>

						</div>

						<form action="" method="" class="reservering-detail__row --form js-reservering-detail-2">

							<div class="reservering-detail__row-inner">
								<div class="name">Bedrijfsnaam</div>
								<div class="value">
									<div class="form-row">
										<div class="col col-1 label-absolute">
											<input type="text" name="bedrijfsnaam" id="erd-formfield2" placeholder="Bedrijfsnaam">
											<label for="erd-formfield2">Bedrijfsnaam</label>
										</div>
									</div>
								</div>
							</div>

							<div class="reservering-detail__row-inner">
								<div class="name">Ondernemingsnummer</div>
								<div class="value">
									<div class="form-row">
										<div class="col col-1 label-absolute">
											<input type="text" name="ondernemingsnummer" id="erd-formfield3" placeholder="Ondernemingsnummer">
											<label for="erd-formfield3">Ondernemingsnummer</label>
										</div>
									</div>
								</div>
							</div>

							<div class="reservering-detail__row-inner">
								<div class="name">Telefoonnummer</div>
								<div class="value">
									<div class="form-row">
										<div class="col col-1 label-absolute">
											<input type="tel" name="tel" id="erd-formfield4" placeholder="Telefoonnummer">
											<label for="erd-formfield4">Telefoonnummer</label>
										</div>
									</div>
								</div>
							</div>

							<div class="reservering-detail__row-inner">
								<div class="name">E-mailadres</div>
								<div class="value">
									<div class="form-row">
										<div class="col col-1 label-absolute">
											<input type="email" name="mail" id="erd-formfield5" placeholder="E-mailadres">
											<label for="erd-formfield5">E-mailadres</label>
										</div>
									</div>
								</div>
							</div>

							<div class="reservering-detail__row-inner">
								<div class="name">Adres</div>
								<div class="value">
									<div class="form-row">
										<div class="col col-1 label-absolute">
											<input type="text" name="address" id="erd-formfield6" placeholder="Straat en huisnummer">
											<label for="erd-formfield6">Straat en huisnummer</label>
										</div>
										<div class="col col-1 label-absolute">
											<input type="text" name="woonplaats" id="erd-formfield7" placeholder="Woonplaats">
											<label for="erd-formfield7">Woonplaats</label>
										</div>
									</div>
								</div>
							</div>

							<div class="reservering-detail__row-inner">
								<div class="name">PO-nummer</div>
								<div class="value">
									<div class="form-row">
										<div class="col col-1 label-absolute">
											<input type="text" name="po-nummer" id="erd-formfield8" placeholder="PO-nummer (optioneel)">
											<label for="erd-formfield8">PO-nummer (optioneel)</label>
										</div>
									</div>
								</div>
							</div>

							<div class="reservering-detail__row-inner">
								<div class="name">Contactpersoon</div>
								<div class="value">
									<div class="form-row">
										<div class="col col-1 label-absolute">
											<input type="text" name="contactpersoon" id="erd-formfield9" placeholder="Contactpersoon">
											<label for="erd-formfield9">Contactpersoon</label>
										</div>
										<div class="col col-1 submit">
											<button type="submit" class="btn --btn-yellow">Opslaan</button>
										</div>
									</div>
								</div>
							</div>

						</form>
					</div>

					<div class="reservering-detail__block">

						<div class="reservering-detail__title">
							<h2>Historiek</h2>
						</div>

						<div class="reservering-detail__history">

							<div class="reservering-detail__history-inner --title">
								<div>Datum</div>
								<div>Wijziging door</div>
								<div>Actie</div>
							</div>

							<div class="reservering-detail__history-inner">
								<div>
									<div class="name">Datum</div>
									<div class="value">11.01.2022</div>
								</div>
								<div>
									<div class="name">Wijziging door</div>
									<div class="value">Maekelhoeve</div>
								</div>
								<div>
									<div class="name">Actie</div>
									<div class="value">Finale bevestiging</div>
								</div>
							</div>

							<div class="reservering-detail__history-inner">
								<div>
									<div class="name">Datum</div>
									<div class="value">02.01.2022</div>
								</div>
								<div>
									<div class="name">Wijziging</div>
									<div class="value">U</div>
								</div>
								<div>
									<div class="name">Actie</div>
									<div class="value">Online betaling</div>
								</div>
							</div>

							<div class="reservering-detail__history-inner">
								<div>
									<div class="name">Datum</div>
									<div class="value">23.12.2021</div>
								</div>
								<div>
									<div class="name">Wijziging</div>
									<div class="value">U</div>
								</div>
								<div>
									<div class="name">Actie</div>
									<div class="value">Wijziging reservering</div>
								</div>
							</div>

							<div class="reservering-detail__history-inner">
								<div>
									<div class="name">Datum</div>
									<div class="value">15.12.2021</div>
								</div>
								<div>
									<div class="name">Wijziging</div>
									<div class="value">U</div>
								</div>
								<div>
									<div class="name">Actie</div>
									<div class="value">Reservering</div>
								</div>
							</div>

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
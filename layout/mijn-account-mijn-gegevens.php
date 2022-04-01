
<!DOCTYPE HTML>
<html lang="nl">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Mijn account – Mijn gegevens</title>
	<meta name="description" content="">
	<!--font, css, js -->
	<?php include '_includes/head.html';?>
</head>

<body>
	<div class="wrapper account-pd-page in-login">

		<header id="header-menu">
			<?php include '_includes/header-menu-logged-in.html';?>
		</header>
			
		<main>
			
			<section class="account-header">
				<div class="account-header__inner">
					<div class="account-header__left">
						<h2>Welkom terug, Simmie!</h2>
						<ul class="account-header__menu">
							<li><a href="/mijn-account-overzicht.php">Overzicht</a></li>
							<li class="active"><a href="/mijn-account-mijn-bestellingen.php">Mijn bestellingen</a></li>
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

			<section class="personal-data">
				<div class="container">
					<div class="personal-data__inner">

						<div class="personal-data__block">
							
							<div class="personal-data__title">
								<h3>Je bedrijfsgegevens</h3>
								<a href="#" class="edit-btn js-edit-r-details" data-toggleclass="js-personal-data-1">Wijzigen</a>
							</div>

							<div class="personal-data__row js-personal-data-1">

								<div class="personal-data__row-inner">
									<div class="name">Bedrijfsnaam</div>
									<div class="value">Mijn bedrijf</div>
								</div>

								<div class="personal-data__row-inner">
									<div class="name">BTW nummer</div>
									<div class="value">BE00000000000</div>
								</div>
	
								<div class="personal-data__row-inner">
									<div class="name">Adres</div>
									<div class="value">
										<ul>
											<li>Straatnaam 000</li>
											<li>0000 Gemeente </li>
											<li>België</li>
										</ul>
									</div>
								</div>
	
							</div>

							<form action="" method="" class="personal-data__row --form js-personal-data-1">

								<div class="personal-data__row-inner">
									<div class="name">Bedrijfsnaam</div>
									<div class="value">
										<div class="form-row">
											<div class="col col-1">
												<input type="text" name="bedrijfsnaam" value="Mijn bedrijf">
											</div>
										</div>
									</div>
								</div>
	
								<div class="personal-data__row-inner">
									<div class="name">BTW nummer</div>
									<div class="value">
										<div class="form-row">
											<div class="col col-1">
												<input type="text" name="BTW-nummer" value="BE00000000000">
											</div>
										</div>
									</div>
								</div>
	
								<div class="personal-data__row-inner">
									<div class="name">Adres</div>
									<div class="value">
										<div class="form-row">
											<div class="col col-70">
												<input type="text" name="straatnaam" value="Straatnaam">
											</div>
											<div class="col col-30">
												<input type="text" name="huisnummer" value="000">
											</div>
											<div class="col col-30">
												<input type="text" name="postcode" value="0000">
											</div>
											<div class="col col-70">
												<input type="text" name="gemeente" value="0000">
											</div>
											<div class="col col-1">
												<select name="country">
													<option value="be" selected>België</option>
													<option value="nl">Netherland</option>
												</select>
											</div>
											<div class="col col-1 submit">
												<button type="submit" class="btn --btn-orange">Opslaan</button>
											</div>
										</div>
									</div>
								</div>
	
							</form>

						</div>

						<div class="personal-data__block">
							
							<div class="personal-data__title">
								<h3>Je contactgegevens</h3>
								<a href="#" class="edit-btn js-edit-r-details" data-toggleclass="js-personal-data-2">Wijzigen</a>
							</div>

							<div class="personal-data__row js-personal-data-2">

								<div class="personal-data__row-inner">
									<div class="name">Naam</div>
									<div class="value">Naam</div>
								</div>

								<div class="personal-data__row-inner">
									<div class="name">Voornaam</div>
									<div class="value">Voornaam</div>
								</div>

								<div class="personal-data__row-inner">
									<div class="name">Telefoonnummer</div>
									<div class="value">03 000 00 00</div>
								</div>
	
							</div>

							<form action="" method="" class="personal-data__row --form js-personal-data-2">

								<div class="personal-data__row-inner">
									<div class="name">Naam</div>
									<div class="value">
										<div class="form-row">
											<div class="col col-1">
												<input type="text" name="naam" value="Naam">
											</div>
										</div>
									</div>
								</div>
	
								<div class="personal-data__row-inner">
									<div class="name">Voornaam</div>
									<div class="value">
										<div class="form-row">
											<div class="col col-1">
												<input type="text" name="voornaam" value="Voornaam">
											</div>
										</div>
									</div>
								</div>
	
								<div class="personal-data__row-inner">
									<div class="name">Telefoonnummer</div>
									<div class="value">
										<div class="form-row">
											<div class="col col-1">
												<input type="tel" name="telefoonnummer" value="03 000 00 00">
											</div>
											<div class="col col-1 submit">
												<button type="submit" class="btn --btn-orange">Opslaan</button>
											</div>
										</div>
									</div>
								</div>

							</form>

						</div>

						<div class="personal-data__block">
							
							<div class="personal-data__title">
								<h3>Je logingegevens</h3>
								<a href="#" class="edit-btn js-edit-r-details" data-toggleclass="js-personal-data-3">Wijzigen</a>
							</div>

							<div class="personal-data__row js-personal-data-3">

								<div class="personal-data__row-inner">
									<div class="name">E-mailadres</div>
									<div class="value">info@mijnbedrijf.be</div>
								</div>

								<div class="personal-data__row-inner">
									<div class="name">Wachtwoord</div>
									<div class="value">**********</div>
								</div>
	
							</div>

							<form action="" method="" class="personal-data__row --form js-personal-data-3">

								<div class="personal-data__row-inner">
									<div class="name">E-mailadres</div>
									<div class="value">
										<div class="form-row">
											<div class="col col-1">
												<input type="text" name="mail" value="info@mijnbedrijf.be">
											</div>
										</div>
									</div>
								</div>
	
								<div class="personal-data__row-inner">
									<div class="name">Wachtwoord</div>
									<div class="value">
										<div class="form-row">
											<div class="col col-1">
												<input type="password" name="wachtwoord" value="**********">
											</div>
											<div class="col col-1 submit">
												<button type="submit" class="btn --btn-orange">Opslaan</button>
											</div>
										</div>
									</div>
								</div>

							</form>

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
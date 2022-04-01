
<!DOCTYPE HTML>
<html lang="nl">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>MyMaekelhoeve - mijn gegevens</title>
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
						<li><a href="/overzicht.php">Overzicht</a></li>
						<li><a href="/eerdere-reservaties.php">Eerdere reservaties</a></li>
						<li class="active"><a href="/mijn-gegevens.php">Mijn gegevens</a></li>
						<li><a href="#">Huishoudelijk reglement</a></li>
						<li><a href="#">Uitloggen</a></li>
					</ul>
				</div>
				<div class="overview__right">

					<div class="overview__header">
						<h1>Mijn gegevens</h1>
					</div>

					<div class="personal-info">
						
						<div class="personal-info__block">
							<div class="personal-info__title">
								<h2>Accountgegevens</h2>
								<a href="#" class="edit-btn js-edit-r-details" data-toggleclass="js-personal-info-1">Wijzigen</a>
							</div>
							<div class="personal-info__row js-personal-info-1">

								<div class="personal-info__row-inner">
									<div class="name">Naam</div>
									<div class="value">Leung</div>
								</div>

								<div class="personal-info__row-inner">
									<div class="name">Voornaam</div>
									<div class="value">Simmie</div>
								</div>

								<div class="personal-info__row-inner">
									<div class="name">Telefoonnummer</div>
									<div class="value">03 123 45 67</div>
								</div>

								<div class="personal-info__row-inner">
									<div class="name">Adres</div>
									<div class="value">Straat en huisnummer, woonplaats</div>
								</div>

							</div>

							<form action="" method="" class="personal-info__row --form js-personal-info-1">

								<div class="personal-info__row-inner">
									<div class="name">Naam</div>
									<div class="value">
										<div class="form-row">
											<div class="col col-1 label-absolute">
												<input type="text" name="name" id="pi-formfield1" placeholder="Naam" required="">
												<label for="pi-formfield1">Naam</label>
											</div>
										</div>
									</div>
								</div>

								<div class="personal-info__row-inner">
									<div class="name">Voornaam</div>
									<div class="value">
										<div class="form-row">
											<div class="col col-1 label-absolute">
												<input type="text" name="first-name" id="pi-formfield2" placeholder="Voornaam" required="">
												<label for="pi-formfield2">Voornaam</label>
											</div>
										</div>
									</div>
								</div>

								<div class="personal-info__row-inner">
									<div class="name">Telefoonnummer</div>
									<div class="value">
										<div class="form-row">
											<div class="col col-1 label-absolute">
												<input type="tel" name="tel" id="pi-formfield3" placeholder="Telefoonnummer" required="">
												<label for="pi-formfield3">Telefoonnummer</label>
											</div>
										</div>
									</div>
								</div>

								<div class="personal-info__row-inner">
									<div class="name">Adres</div>
									<div class="value">
										<div class="form-row">
											<div class="col col-1 label-absolute">
												<input type="text" name="address" id="pi-formfield4" placeholder="Straat en huisnummer" required="">
												<label for="pi-formfield4">Straat en huisnummer</label>
											</div>
											<div class="col col-1 label-absolute">
												<input type="text" name="woonplaats" id="pi-formfield5" placeholder="Woonplaats" required="">
												<label for="pi-formfield5">Woonplaats</label>
											</div>
											<div class="col col-1 submit">
												<button type="submit" class="btn --btn-yellow">Opslaan</button>
											</div>
										</div>
									</div>
								</div>

							</form>

						</div>
						
						<div class="personal-info__block">
							<div class="personal-info__title">
								<h2>Logingegevens</h2>
								<a href="#" class="edit-btn js-edit-r-details" data-toggleclass="js-personal-info-2">Wijzigen</a>
							</div>
							
							<div class="personal-info__row js-personal-info-2">

								<div class="personal-info__row-inner">
									<div class="name">E-mailadres</div>
									<div class="value">simmie@adbuddy.be</div>
								</div>

								<div class="personal-info__row-inner">
									<div class="name">Wachtwoord</div>
									<div class="value">**********</div>
								</div>

							</div>

							<form action="" method="" class="personal-info__row --form js-personal-info-2">

								<div class="personal-info__row-inner">
									<div class="name">E-mailadres</div>
									<div class="value">
										<div class="form-row">
											<div class="col col-1 label-absolute">
												<input type="text" name="email" id="pi-mail" placeholder="E-mailadres" required="" autocomplete="username">
												<label for="pi-mail">E-mailadres</label>
											</div>
										</div>
									</div>
								</div>

								<div class="personal-info__row-inner">
									<div class="name">Wachtwoord</div>
									<div class="value">
										<div class="form-row">
											<div class="col col-1 label-absolute">
												<input type="password" name="password" id="lsc-password" placeholder="Wachtwoord" autocomplete="current-password" required="">
												<label for="lsc-password">Wachtwoord</label>
											</div>
											<div class="col col-1 submit">
												<button type="submit" class="btn --btn-yellow">Opslaan</button>
											</div>
										</div>
									</div>
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
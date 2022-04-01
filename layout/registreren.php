
<!DOCTYPE HTML>
<html lang="nl">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Registreren</title>
	<meta name="description" content="">
	<!--font, css, js -->
	<?php include '_includes/head.html';?>
</head>

<body>
	<div class="wrapper registration-page">

		<header id="header-menu">
			<?php include '_includes/header-menu.html';?>
		</header>
			
		<main>

			<section class="header-img --small">
				<img src="/images/registration-header.jpg" alt="">
			</section>

			<section class="registration-section --logo-bg --bg-low">
				<div class="container">
					<h1 class="like-h2 --color-dark">Account maken</h1>
					
					<form action="" method="post" id="registration-form">
						<div class="registration__wrapper">
							<div class="registration__left">
								<p>Ben je een professional met een actief BTW nummer? <br>Registreer je dan via dit formulier om toegang te krijgen tot tal van voordelen voor jouw bedrijf.</p>
								<p class="--color-orange">Jouw voordelen!</p>
								<ul class="check-list">
									<li>Professionele prijzen</li>
									<li>Historiek van je bestellingen</li>
									<li>Snelle checkout</li>
									<li>Whatsapp ondersteuning</li>
									<li>Bespreekbare wensen op maat van jouw bedrijf</li>
								</ul>
							</div>
							<div class="registration__right">
								<div class="registration__form">

									<div class="fieldset">
										<h3 class="legend">Je bedrijfsgegevens</h3>
										<div class="form-row">
											
											<div class="col col-2">
												<label for="f_company" class="label">Bedrijfsnaam</label>
												<input type="text" name="f_company" placeholder="Bedrijfsnaam" id="f_company">
											</div>
											
											<div class="col col-2">
												<label for="f_btw" class="label">BTW-nummer</label>
												<input type="text" name="f_btw" placeholder="BTW-nummer" required="" id="f_btw">
											</div>
											
											<div class="col col-70">
												<label for="f_street" class="label">Straatnaam*</label>
												<input type="text" name="f_street" placeholder="Straatnaam" required="" id="f_street">
											</div>

											<div class="col col-30">
												<label for="f_housenr" class="label">Huisnummer*</label>
												<input type="text" name="f_housenr" placeholder="Huisnummer" required="" id="f_housenr">
											</div>

											<div class="col col-30">
												<label for="f_zip" class="label">Postcode*</label>
												<input type="text" name="f_zip" placeholder="Postcode" required="" id="f_zip">
											</div>

											<div class="col col-70">
												<label for="f_city" class="label">Gemeente*</label>
												<input type="text" name="f_city" placeholder="Gemeente" required="" id="f_city">
											</div>

											<div class="col col-1">
												<label for="f_country" class="label">Land*</label>
												<select name="f_country" id="f_country">
													<option value="be">België</option>
													<option value="nl">Netherland</option>
												</select>
											</div>

										</div>
									</div>

									<div class="fieldset">
										<h3 class="legend">Je contactgegevens</h3>
										<div class="form-row">
											
											<div class="col col-2">
												<label for="c_name" class="label">Naam*</label>
												<input type="text" name="c_name" placeholder="Naam" required="" id="c_name">
											</div>
											
											<div class="col col-2">
												<label for="c_surname" class="label">Voornaam*</label>
												<input type="text" name="c_surname" placeholder="Voornaam" required="" id="c_surname">
											</div>

											<div class="col col-2">
												<label for="c_phone" class="label">Telefoonnummer*</label>
												<input type="text" name="c_phone" placeholder="Telefoonnummer" required="" id="c_phone">
											</div>

										</div>
									</div>

									<div class="fieldset">
										<h3 class="legend">Je logingegevens</h3>
										<div class="form-row">

											<div class="col col-2">
												<label for="c_email" class="label">E-mailadres*</label>
												<input type="text" name="c_email" placeholder="E-mailadres" required="" id="c_email">
											</div>

											<div class="col col-2">
												<label for="c_password" class="label">Wachtwoord*</label>
												<input type="password" name="c_password" placeholder="Wachtwoord" required="" id="c_password">
											</div>

											<div class="col col-1 checkbox-col">
												<input type="checkbox" name="user_agr" id="user_agr" value="1">
												<label for="user_agr">Ik ga akkoord met de <a href="#" target="_blank">privacy policy</a>.*</label>
											</div>

											<div class="col col-1 submit-col">
												<button type="submit" class="btn --btn-orange">Registreer</button>
											</div>

										</div>
									</div>
									
								</div>
							</div>
						</div>
					</form>
					
				</div>
			</section>

		</main>
			
		<footer id="footer-page">
			<?php include '_includes/footer.html';?>
		</footer>

	</div>
</body>
</html>
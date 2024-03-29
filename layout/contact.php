
<!DOCTYPE HTML>
<html lang="nl">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Contact</title>
	<meta name="description" content="">
	<!--font, css, js -->
	<?php include '_includes/head.html';?>
</head>

<body>
	<div class="wrapper contact-page">

		<header id="header-menu">
			<?php include '_includes/header-menu.html';?>
		</header>
			
		<main>

			<section class="header-img --small">
				<img src="/images/header-contact.jpg" alt="">
			</section>

			<section class="contact --logo-bg --bg-low">
				<div class="container">
					<h1 class="like-h2 --color-dark">Hoe kunnen we jou helpen?</h1>
					
					<form action="" method="post" id="contact-form">
						<div class="contact__wrapper">
							<div class="contact__left">
								<h6>Veelgestelde vragen</h6>
								<p>Bezoek onze  digitale helpdesk voor verwerkingsvoorschriften, technische fiches en garantiedocumenten.<br> Download verwerkingsvoorschriften, technische fiches en garantiedocumenten. </p>
								<h6>Afhalingen en Verzendingen</h6>
								<p>maandag tot vrijdag: 7u tot 17u <br>Stuur een email naar <a href="mailto:shop@cleys.be">shop@cleys.be</a> of bel 03 877 93 23.</p>
								<h6>Account maken?</h6>
								<p>Ben je een professional met een actief BTW nummer? <br>Registreer je dan via <a href="#" target="_blank">deze pagina</a> om toegang te krijgen tot tal van voordelen voor jouw bedrijf.</p>
								<h6>Contactgegevens</h6>
								<address>
									Grote Baan 54<br>
									9250 Waasmunster<br>
									België								
								</address>
								<a href="tel:0032038779323" class="contact__link" >03 877 93 23</a>
								<a href="mailto:shop@cleys.be" class="contact__link" >shop@cleys.be</a>

									

								
							</div>
							<div class="contact__right">
								<div class="contact__form">

									<div class="fieldset">
										<h3 class="legend">Contacteer ons voor al je andere vragen</h3>
										<div class="form-row">
											
											<div class="col col-2">
												<label for="f_company" class="label">Bedrijfsnaam</label>
												<input type="text" name="f_company" placeholder="Naam" id="f_company">
											</div>
											
											<div class="col col-2">
												<label for="f_btw" class="label">BTW-nummer</label>
												<input type="text" name="f_btw" placeholder="BTW-nummer" required="" id="f_btw">
											</div>
											
											<div class="col col-2">
												<label for="c_name" class="label">Naam*</label>
												<input type="text" name="c_name" placeholder="Naam" required="" id="c_name">
											</div>
											
											<div class="col col-2">
												<label for="c_surname" class="label">Voornaam*</label>
												<input type="text" name="c_surname" placeholder="Voornaam" required="" id="c_surname">
											</div>

											<div class="col col-2">
												<label for="c_phone" class="label">Telefoonnummer</label>
												<input type="text" name="c_phone" placeholder="Telefoonnummer" id="c_phone">
											</div>

											<div class="col col-2">
												<label for="c_email" class="label">E-mailadres*</label>
												<input type="text" name="c_email" placeholder="E-mailadres" required="" id="c_email">
											</div>

											<div class="col col-1">
												<label for="c_theme" class="label">Onderwerp*</label>
												<select name="c_theme" id="c_theme">
													<option value="0" selected disabled>Selecteer onderwerp</option>
													<option value="1">Algemene vraag</option>
													<option value="2">Facturatie</option>
													<option value="3">Mijn bestelling</option>
													<option value="4">Andere</option>
												</select>
											</div>

											<div class="col col-1">
												<label for="c_message" class="label">Je vraag*</label>
												<textarea name="c_message" id="c_message" cols="30" rows="10" placeholder="Je vraag"></textarea>
											</div>

											<div class="col col-1 checkbox-col">
												<input type="checkbox" name="user_agr" id="user_agr" value="1">
												<label for="user_agr">Ik ga akkoord met de <a href="#" target="_blank">privacy policy</a>.*</label>
											</div>

											<div class="col col-1 submit-col">
												<button type="submit" class="btn --btn-orange">Versturen</button>
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
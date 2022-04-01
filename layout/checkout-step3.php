
<!DOCTYPE HTML>
<html lang="nl">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Checkout - 3. Overzicht</title>
	<meta name="description" content="">
	<!--font, css, js -->
	<?php include '_includes/head.html';?>
</head>

<body>
	<div class="wrapper checkout-step3-page">

		<header id="header-menu">
			<?php include '_includes/header-menu.html';?>
		</header>
			
		<main>

			<section class="step-nav">
				<div class="container">
					<ul class="step-nav__steps step-3">
						<li class="checked">Winkelwagen</li>
						<li class="checked">gegevens</li>
						<li class="active">Overzicht</li>
						<li>Bedankt!</li>
					</ul>
				</div>
			</section>

			<section class="checkout --step-3">
				<div class="container">
					<h1 class="like-h2">Overzicht</h1>
					
					<form action="" method="post" id="checkout-overview">
						<div class="checkout__wrapper">
							<div class="checkout__left">

								<div class="fieldset">
									<h3 class="legend">Betalingsmethode</h3>
									<div class="form-row">										
										<div class="col col-1 radio-col payment-method-input">
											<input type="radio" name="payment_method" id="payment_method" value="2" checked>
											<label for="payment_method">Online betalen 
												<div class="pay-option__list">
													<img src="/assets/images/pay-option-bancontact.svg" alt="bancontact">
													<img src="/assets/images/pay-option-paypal.svg" alt="paypal">
													<img src="/assets/images/pay-option-mastercard.svg" alt="mastercard">
													<img src="/assets/images/pay-option-visa.svg" alt="visa">
												</div>
											</label>
										</div>
									</div>
								</div>

								<div class="fieldset --ro">
									<h3 class="legend">Je contactgegevens</h3>
									<div class="form-row">		
										<div class="col col-2">
											<span class="label">Naam*</span>
											<span class="input-text">Naam</span>
										</div>
										
										<div class="col col-2">											
											<span class="label">Voornaam*</span>
											<span class="input-text">Voornaam</span>
										</div>
										
										<div class="col col-2">											
											<span class="label">E-mailadres*</span>
											<span class="input-text">info@mijnbedrijf.be</span>
										</div>
										
										<div class="col col-2">											
											<span class="label">Telefoonnummer*</span>
											<span class="input-text">03 000 00 00</span>
										</div>	

									</div>
								</div>

								<div class="fieldset --ro">
									<h3 class="legend">Je facturatiegegevens</h3>
									<div class="form-row">		
										<div class="col col-2">
											<span class="label">Bedrijfsnaam</span>
											<span class="input-text">Bedrijfsnaam</span>
										</div>
										
										<div class="col col-2">											
											<span class="label">BTW-nummer</span>
											<span class="input-text">BE0000000000</span>
										</div>
										
										<div class="col col-2">											
											<span class="label">E-Straatnaam*</span>
											<span class="input-text">Straatnaam</span>
										</div>
										
										<div class="col col-2">											
											<span class="label">Huisnummer*</span>
											<span class="input-text">000</span>
										</div>	
										
										<div class="col col-2">											
											<span class="label">Postcode*</span>
											<span class="input-text">0000</span>
										</div>
										
										<div class="col col-2">											
											<span class="label">Gemeente*</span>
											<span class="input-text">Gemeente</span>
										</div>	
										
										<div class="col col-2">											
											<span class="label">Land*</span>
											<span class="input-text">België</span>
										</div>	

									</div>
								</div>

								<div class="fieldset">
									<h3 class="legend">Je order:</h3>
									<div class="form-row">

										<div class="col col-1 radio-col">											
											<div class="input-text">Afhalen in ons magazijn in Waasmunster<br>
												 <span><i class="fas fa-check"></i> direct beschikbaar</span> tijdens openingsuren (07u00-17u00)
											</div>
										</div>		

									</div>
								</div>


							</div>
							<div class="checkout__right">
								<div class="checkout__right-inner --with-shadow">
									<div class="mini-cart">
										<h3>Winkelwagen</h3>
										<div class="mini-cart__items">

											<div class="mini-cart__row">
												<div class="mini-cart__col">
													<div class="mini-cart__product">
														<div class="img">
															<img src="/images/product-single__img-1.jpg" alt="">
														</div>
														<div class="content">
															<a href="/product-detail.php" class="title">
																<h5>Spuitkurk - Normale korrel - 20 kleuren</h5>
															</a>
															<div class="extra-option">Kleur #01</div>
															<div class="extra-option --qty">Aantal: 3</div>
															<div class="product-detail__stock stock --green"><i class="fas fa-check"></i> Op voorraad</div>											
														</div>
													</div>
												</div>
												<div class="mini-cart__col text-right">
													<div class="price">€ 255,00</div>
												</div>
											</div>

											<div class="mini-cart__row">
												<div class="mini-cart__col">
													<div class="mini-cart__product">
														<div class="img">
															<img src="/images/product-single__img-2.jpg" alt="">
														</div>
														<div class="content">
															<a href="/product-detail.php" class="title">
																<h5>Kleurboek - 20 kleuren</h5>
															</a>														
															<div class="extra-option --qty">Aantal: 3</div>
															<div class="product-detail__stock stock --orange"><i class="fas fa-exclamation-triangle"></i> Beperkte voorraad</div>										
														</div>
													</div>
												</div>
												<div class="mini-cart__col text-right">
													<div class="price">€ 255,00</div>
												</div>
											</div>

										</div>
									</div>

									<div class="subtotal">
										<div class="subtotal__row">
											<div class="subtotal__col">Subtotaal (excl. BTW)</div>
											<div class="subtotal__col">€ 343,95</div>
										</div>
										<div class="subtotal__row">
											<div class="subtotal__col">21% BTW</div>
											<div class="subtotal__col">€ 72,23</div>
										</div>
										<div class="subtotal__row --total">
											<div class="subtotal__col">Totaal (incl. BTW)</div>
											<div class="subtotal__col">€ 416,18</div>
										</div>
										<div class="subtotal__buttons">										
											<!-- TODO Link only for demo layout. Replace to submit button for production -->
											<a href="checkout-step4.php" class="btn --btn-orange">Naar checkout</a>
											<!-- <button type="submit" class="btn --btn-orange">Naar checkout</button> -->
										</div>
									</div>
								</div>
								<div class="checkout__right-inner">
									<a href="/checkout-step2.php" class="btn --btn-orange-border --btn-full">Vorige stap</a>
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
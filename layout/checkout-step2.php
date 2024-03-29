
<!DOCTYPE HTML>
<html lang="nl">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Checkout - 2. Gegevens</title>
	<meta name="description" content="">
	<!--font, css, js -->
	<?php include '_includes/head.html';?>
</head>

<body>
	<div class="wrapper checkout-step2-page">

		<header id="header-menu">
			<?php include '_includes/header-menu.html';?>
		</header>
			
		<main>

			<section class="step-nav">
				<div class="container">
					<ul class="step-nav__steps step-2">
						<li class="checked">Winkelwagen</li>
						<li class="active">gegevens</li>
						<li>Overzicht</li>
						<li>Bedankt!</li>
					</ul>
				</div>
			</section>

			<section class="checkout --step-2">
				<div class="container">
					<h1 class="like-h2">Gegevens</h1>
					
					<form action="" method="post" id="checkout-form">
						<div class="checkout__wrapper">
							<div class="checkout__left">

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
											<label for="c_email" class="label">E-mailadres*</label>
											<input type="text" name="c_email" placeholder="E-mailadres" required="" id="c_email">
										</div>

										<div class="col col-2">
											<label for="c_phone" class="label">Telefoonnummer*</label>
											<input type="text" name="c_phone" placeholder="Telefoonnummer" required="" id="c_phone">
										</div>

									</div>
								</div>

								<div class="fieldset">
									<h3 class="legend">Je facturatiegegevens</h3>
									<div class="form-row">
										
										<div class="col col-2">
											<label for="f_company" class="label">Bedrijfsnaam</label>
											<input type="text" name="f_company" placeholder="Naam" id="f_company">
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
									<h3 class="legend">Je order:</h3>
									<div class="form-row">
										<div class="col col-1 radio-col">
											<input type="radio" name="delivery_type" id="delivery_type1" value="1" required="" checked>
											<label for="delivery_type1">Afhalen in ons magazijn in Waasmunster<br>
												 <span><i class="fas fa-check"></i> direct beschikbaar</span> tijdens openingsuren (07u00-17u00)
											</label>
										</div>
										<div class="col col-1 radio-col">
											<input type="radio" name="delivery_type" id="delivery_type2" value="2">
											<label for="delivery_type2">Laten leveren (1-5 werkdagen)</label>
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
											<div class="form-row">
												<div class="col col-1 checkbox-col">
													<input type="checkbox" name="user_agr" id="user_agr" value="2">
													<label for="user_agr">Ik ga akkoord met de <a href="#" target="_blank">privacy policy</a>.*</label>
												</div>
											</div>
											<!-- TODO Link only for demo layout. Replace to submit button for production -->
											<a href="checkout-step3.php" class="btn --btn-orange">Naar checkout</a>
											<!-- <button type="submit" class="btn --btn-orange">Naar checkout</button> -->
										</div>
									</div>
								</div>
								<div class="checkout__right-inner">
									<a href="/checkout-step1.php" class="btn --btn-orange-border --btn-full">Vorige stap</a>
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
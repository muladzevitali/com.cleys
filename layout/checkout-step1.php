
<!DOCTYPE HTML>
<html lang="nl">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Checkout - 1. Winkelwagen</title>
	<meta name="description" content="">
	<!--font, css, js -->
	<?php include '_includes/head.html';?>
</head>

<body>
	<div class="wrapper checkout-step1-page">

		<header id="header-menu">
			<?php include '_includes/header-menu.html';?>
		</header>
			
		<main>

			<section class="step-nav">
				<div class="container">
					<ul class="step-nav__steps step-1">
						<li class="active">Winkelwagen</li>
						<li>gegevens</li>
						<li>Overzicht</li>
						<li>Bedankt!</li>
					</ul>
				</div>
			</section>

			<section class="checkout --step-1">
				<div class="container">
					<h1 class="like-h2">Winkelwagen</h1>
					
					<form action="" method="post" id="checkout-cart">
						<div class="checkout__wrapper">
							<div class="checkout__left">

								<div class="cart-items">

									<div class="cart-items__row --title">
										<div class="cart-items__col">Product</div>
										<div class="cart-items__col text-center">Aaantal</div>
										<div class="cart-items__col text-right">Prijs</div>
									</div>

									<div class="cart-items__row">
										<div class="cart-items__col">
											<div class="cart-items__mobiletitle">Product</div>
											<div class="cart-items__product">
												<div href="/product-detail.php"  class="img">
													<img src="/images/product-single__img-1.jpg" alt="">
												</div>
												<div class="content">
													<a href="/product-detail.php" class="title">
														<h5>Spuitkurk - Normale korrel - 20 kleuren</h5>
													</a>
													<div class="extra-option">Kleur #01</div>
													<div class="stock --green"><i class="fas fa-check"></i> Op voorraad</div>
												</div>
											</div>
										</div>
										<div class="cart-items__col text-center">
											<div class="cart-items__mobiletitle">Aaantal</div>
											<div class="js-like-number like-number">
												<div class="like-number__m" data-minval="0"><i class="far fa-minus"></i></div>
												<input type="text" name="amount" value="1" pattern="^[ 0-9]+$">
												<div class="like-number__p"><i class="far fa-plus"></i></div>
											</div>
											<a href="#" class="cart-item__remove js-cart-item-remove" data-cart-row="1">Verwijderen</a>
										</div>
										<div class="cart-items__col text-right">
											<div class="cart-items__mobiletitle">Prijs</div>
											<div class="price">€ 255,00</div>
										</div>
									</div>

									<div class="cart-items__row">
										<div class="cart-items__col">
											<div class="cart-items__mobiletitle">Product</div>
											<div class="cart-items__product">
												<div class="img">
													<img src="/images/product-single__img-2.jpg" alt="">
												</div>
												<div class="content">
													<a href="/product-detail.php" class="title">
														<h5>Kleurboek - 20 kleuren</h5>
													</a>					
													<div class="stock --orange"><i class="fas fa-exclamation-triangle"></i> Beperkte voorraad</div>										
												</div>
											</div>
										</div>
										<div class="cart-items__col text-center">
											<div class="cart-items__mobiletitle">Aaantal</div>
											<div class="js-like-number like-number">
												<div class="like-number__m" data-minval="0"><i class="far fa-minus"></i></div>
												<input type="text" name="amount" value="1" pattern="^[ 0-9]+$" aria-label="Qty">
												<div class="like-number__p"><i class="far fa-plus"></i></div>
											</div>
											<a href="#" class="cart-item__remove js-cart-item-remove" data-cart-row="1">Verwijderen</a>
										</div>
										<div class="cart-items__col text-right">
											<div class="cart-items__mobiletitle">Prijs</div>
											<div class="price">€ 88,95</div>
										</div>
									</div>
									
								</div>

								<div class="voucher-field">
									<h5>Kortingscode?</h5>
									<input type="text" class="voucher-field__input js-voucher-field-input" value="" aria-label="Kortingscode">
									<button type="submit" class="btn --btn-orange">Activeer</button>
								</div>

							</div>
							<div class="checkout__right">
								<div class="checkout__right-inner --with-shadow">
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
											<a href="#" class="btn --btn-orange-border">Opslaan als offerte</a>
											<!-- TODO Link only for demo layout. Replace to submit button for production -->
											<a href="checkout-step2.php" class="btn --btn-orange">Naar checkout</a>
											<!-- <button type="submit" class="btn --btn-orange">Naar checkout</button> -->
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
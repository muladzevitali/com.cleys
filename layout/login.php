
<!DOCTYPE HTML>
<html lang="nl">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>MyMaekelhoeve - login</title>
	<meta name="description" content="">
	<!--font, css, js -->
	<?php include '_includes/head.html';?>
</head>

<body>
	<div class="wrapper login-page">

		<header id="header-menu">
			<?php include '_includes/header-menu.html';?>
		</header>
			
		<main>

			<section class="login-section">
				<div class="container">
					<div class="login-section__content">
						<div class="login-section__left">
							<div class="login-section__header">
								<h2>Inloggen</h2>
							</div>
							<div class="login-section__form">
								<form action="" method="">
									<div class="form-row">
										<div class="col col-1 label-absolute">
											<input type="text" name="email" id="lsl-mail" placeholder="E-mailadres" required="" autocomplete="username">
											<label for="lsl-mail">E-mailadres</label>
										</div>
										<div class="col col-1 label-absolute">
											<input type="password" name="password" id="lsl-password" placeholder="Wachtwoord" autocomplete="current-password" required="">
											<label for="lsl-password">Wachtwoord</label>
											<p class="small text-right"><a href="#">Wachtwoord vergeten?</a></p>
										</div>
										<div class="col col-1 submit-col">
											<button type="submit" class="btn --btn-yellow --btn-full">Inloggen</button>
										</div>
									</div>
								</form>
							</div>
						</div>
						<div class="login-section__right">
							<div class="login-section__header">
								<h2>Account maken</h2>
								<p>Heeft u reeds een reservering gemaakt? <br>Maak hier uw account aan om al uw reserveringen te beheren.</p>
								<p>Belangrijk: gebruik hetzelfde e-mailadres waarmee u de reservering heeft gemaakt.</p>
							</div>
							<div class="login-section__form">
								<form action="" method="">
									<div class="form-row">
										<div class="col col-1 label-absolute">
											<input type="text" name="email" id="lsc-mail" placeholder="E-mailadres" required="" autocomplete="username">
											<label for="lsc-mail">E-mailadres</label>
										</div>
										<div class="col col-1 label-absolute">
											<input type="password" name="password" id="lsc-password" placeholder="Wachtwoord" autocomplete="current-password" required="">
											<label for="lsc-password">Wachtwoord</label>
										</div>
										<div class="col col-1 submit-col">
											<button type="submit" class="btn --btn-yellow --btn-full">Inloggen</button>
										</div>
									</div>
								</form>
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
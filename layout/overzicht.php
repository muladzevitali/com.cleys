
<!DOCTYPE HTML>
<html lang="nl">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>MyMaekelhoeve - overzicht</title>
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
				<div class="overview__right">

					<div class="overview__header">
						<h1>Hallo, Simmie</h1>
						<p>Welkom in uw MyMaekelhoeve account. Hier kan u al uw reserveringen en persoonlijke gegevens beheren.</p>
					</div>

					<div class="upcoming-events">
						<h2>Aankomende evenementen</h2>
						<div class="upcoming-events-list">

							<a href="/reservering-detail.php" class="upcoming-events-list__item">
								<div class="upcoming-events-list__date">vrijdag <span>11 februari</span></div>
								<div class="upcoming-events-list__title">
									<h3>That’s so 90’s Dinner & Dance ✨</h3>
									<div class="sticker --red">Openstaande betaling</div>
								</div>
								<div class="upcoming-events-list__row">

									<div class="col">
										<div class="name">Reservatienummer</div>
										<div class="value">20220211-023</div>
									</div>

									<div class="col">
										<div class="name">Tafelnaam</div>
										<div class="value">Tafelnaam</div>
									</div>

									<div class="col">
										<div class="name">Aantal personen</div>
										<div class="value">5 personen</div>
									</div>

									<div class="col">
										<div class="name">Totaal bedrag</div>
										<div class="value">€ 375,00</div>
									</div>

									<div class="col">
										<span class="upcoming-events-list__btn btn --btn-white">Reservatie wijzigen</span>
									</div>

								</div>
							</a>

							<a href="/reservering-detail.php" class="upcoming-events-list__item">
								<div class="upcoming-events-list__date">vrijdag <span>11 februari</span></div>
								<div class="upcoming-events-list__title">
									<h3>That’s so 90’s Dinner & Dance ✨</h3>
									<div class="sticker --red">Openstaande betaling</div>
								</div>
								<div class="upcoming-events-list__row">

									<div class="col">
										<div class="name">Reservatienummer</div>
										<div class="value">20220211-023</div>
									</div>

									<div class="col">
										<div class="name">Tafelnaam</div>
										<div class="value">Tafelnaam</div>
									</div>

									<div class="col">
										<div class="name">Aantal personen</div>
										<div class="value">5 personen</div>
									</div>

									<div class="col">
										<div class="name">Totaal bedrag</div>
										<div class="value">€ 375,00</div>
									</div>

									<div class="col">
										<span class="upcoming-events-list__btn btn --btn-white">Reservatie wijzigen</span>
									</div>

								</div>
							</a>

							<a href="/reservering-detail.php" class="upcoming-events-list__item">
								<div class="upcoming-events-list__date">vrijdag <span>11 februari</span></div>
								<div class="upcoming-events-list__title">
									<h3>That’s so 90’s Dinner & Dance ✨</h3>
									<div class="sticker --green">Betaald</div>
								</div>
								<div class="upcoming-events-list__row">

									<div class="col">
										<div class="name">Reservatienummer</div>
										<div class="value">20220211-023</div>
									</div>

									<div class="col">
										<div class="name">Tafelnaam</div>
										<div class="value">Tafelnaam</div>
									</div>

									<div class="col">
										<div class="name">Aantal personen</div>
										<div class="value">5 personen</div>
									</div>

									<div class="col">
										<div class="name">Totaal bedrag</div>
										<div class="value">€ 375,00</div>
									</div>

									<div class="col">
										<span class="upcoming-events-list__btn btn --btn-white">Reservatie wijzigen</span>
									</div>

								</div>
							</a>

						</div>
					</div>

					<div class="previous-reservations">
						<h2>Eerdere reservaties</h2>
						<div class="previous-reservations-list">

							<a href="/eerdere-reservaties-details.php" class="previous-reservations-list__item">
								<div class="previous-reservations-list__date">vrijdag <span>11 februari</span></div>
								<div class="previous-reservations-list__title">
									<h3>That’s so 90’s Dinner & Dance ✨</h3>
									<span class="previous-reservations-list__btn btn --btn-white">Details bekijken</span>
								</div>
							</a>

							<a href="/eerdere-reservaties-details.php" class="previous-reservations-list__item">
								<div class="previous-reservations-list__date">vrijdag <span>11 februari</span></div>
								<div class="previous-reservations-list__title">
									<h3>That’s so 90’s Dinner & Dance ✨</h3>
									<span class="previous-reservations-list__btn btn --btn-white">Details bekijken</span>
								</div>
							</a>

							<a href="/eerdere-reservaties-details.php" class="previous-reservations-list__item">
								<div class="previous-reservations-list__date">vrijdag <span>11 februari</span></div>
								<div class="previous-reservations-list__title">
									<h3>That’s so 90’s Dinner & Dance ✨</h3>
									<span class="previous-reservations-list__btn btn --btn-white">Details bekijken</span>
								</div>
							</a>

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
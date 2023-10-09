<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="index.css">
	<!--Bootstrap Files Links-->
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">

	<!--navbar links-->
	
	<!-- icon links -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<script src="timer.js"></script>

	<title>JTECH 2024</title>
</head>

<body>
	<div id="main">
		<!-- navigation  -->
		<div id="mainNavBar">
		<?php include 'nav.html' ?>
		</div>
		<div id="mainBottom">
			<div id="landingText">
				<h1>JTECH 2024</h1>
				<h2>Inspiring Women in Technology</h2>
				<div id="ticket">
					<p>Get Your Ticket</p>
				</div>
			</div>
			<div id="mainBottomBottom">
				<div id="location">
					<div id="locationIcon">
						<i class="material-icons"
							style="margin-left: 30px; margin-top: 45px; font-size: 40px; width: 30px;">place</i>
					</div>
					<div id="locationText">
						<p>5C, Block 5 Nazimabad, Karachi, Pakistan</p>
					</div>
				</div>
				<div id="date">
					<div id="dateIcon">

					</div>
					<div id="dateText">
						<p>30 Jan 2024</p>
					</div>
				</div>
				<div id="timer">
					<p id="timerP">00 00 00 00</p>
				</div>
			</div>
		</div>
	</div>

	<div id="Team">
		<?php include 'team.html' ?>
	</div>

	<div id="Review">
		<?php include 'reviews.html' ?>
	</div>

	<div id="Registeration">
		<?php include 'regestration.html' ?>
	</div>

	<div id="Contact">
		<?php include 'contact.html' ?>
	</div>

</body>

</html>
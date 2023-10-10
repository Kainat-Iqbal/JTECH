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
			<div id="landingText" style="width:auto;margin-top: 15vh;margin-bottom:7vh;">
				<h1 style="font-size: 5rem;">JTECH 2024</h1>
				<h2 style="font-size: 3.5rem;">Inspiring Women in Technology</h2>
				<h3 style="font-size: 2.5rem;">Department of Computer Science & Software Engineering</h3>
				<h4 style="font-size: 2rem;">Jinnah University for Women</h4>
				<a href="#Registeration" style="color:white;text-align:center;">
				<div id="ticket" style="border: 5px solid white;margin-top: 2vh;">
					<p>Get Your Ticket</p>
				</div></a>
			</div>
			<div id="mainBottomBottom">
			<div id="location">
					<div id="locationIcon">
						<i class="material-icons"
							style="margin-left: 30px; margin-top: 25px; font-size: 40px; width: 30px;">place</i>
					</div>
					<div id="locationText">
						<p>5C, Block 5 Nazimabad, Karachi, Pakistan</p>
					</div>
			</div>

				<div id="date">
					<div id="dateIcon">
					<i class="material-icons"
							style="margin-bottom: 35px; font-size: 40px; width: 30px;">calendar_month</i>
					</div>
					<div id="dateText"
					style="margin-left:15px;margin-bottom:26px">
						<p>01 Feburary 2024</p>
					</div>
					
				</div>

				<div id="timer" style="display:flex;">
					<i class="material-icons" style="margin-top:4vh;font-size: 40px; width: 30px;">schedule</i>
					<p id="timerP" style="margin-top:4vh;margin-left:15px;margin-bottom:32px">00 00 00 00</p>
				</div>
			</div>
		</div>
	</div>

	<div id="AboutUs">
		<?php include 'about.html' ?>
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

	<div id="Footer">
		<?php include 'footer.html' ?>
	</div>
</body>

</html>
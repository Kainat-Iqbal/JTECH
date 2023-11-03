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
	<style>
		#main{
			@media (0<width<600px) {
				height:auto;
				width:auto;
			}
		}

		#mainBottom{
			@media (0<width<600px) {
				flex-wrap: wrap;
			}
		}

		#landingText{
			margin-left: 5vw;
			display:flex;
			flex-direction:column;
			@media (0<width<600px) {
				margin-left: 0vw;
				/* flex-wrap:wrap; */
				height:auto;
				background-color:pink;
			}
		}

		#landingText h1{
			font-size: 5rem;
			@media (0<width<600px) {
				font-size: 2.5rem;
			}
		}

		#landingText h2{
			font-size: 3.5rem;
			@media (0<width<600px) {
				font-size: 2rem;
			}
		}

		#landingText h3{
			font-size: 2.5rem;
			@media (0<width<600px) {
				font-size: 2rem;
			}
		}

		#landingText h4{
			font-size: 2rem;
			@media (0<width<600px) {
				font-size: 1.5rem;
			}
		}

		#ticket{
			width: 20vw;
			height: 12vh;
			display: flex;
			align-items: center;
			justify-content: center;
			font-size: 1.7rem;
			border: 1px solid white;
			margin-top: 2vh;
			background-color:#601472 ;
			@media (0<width<600px) {
				width:40vw;
				background-color:yellow;
				flex-wrap:wrap;
			}
		}
		
		#mainBottomBottom{
			@media (0<width<600px) {
				flex-direction:column;
			}
		}

		#location {
			width: 30vw;
			height: 20vh;
			background-color:blue;
			display: flex;
			@media (0<width<600px) {
				width: 60vw;
			}
		}

		#locationIcon {
			width: 5vw;
			height: 20vh;
			/* 	background-color: palegreen; */
			margin-bottom: 20px;

		}

		#locationText {
			width: 25vw;
			height: 20vh;
			/* background-color: rebeccapurple; */
			font-size: 1.5rem;
			display: flex;
			align-items: center;
		}


	</style>
</head>

<body>
	<div id="main">
		<!-- navigation  -->
		<div id="mainNavBar">
		<?php include 'nav.html' ?>
		</div>
		<div id="mainBottom">
			<div id="landingText" style="width:auto;margin-top: 15vh;margin-bottom:7vh;">
				<h1>JTECH 2024</h1>
				<h2>Inspiring Women in Technology</h2>
				<h3>Department of Computer Science & Software Engineering</h3>
				<h4>Jinnah University for Women</h4>
				<a href="#Registeration" style="color:white;text-align:center;">
				<div id="ticket">
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
						<p>Feburary 2024</p>
					</div>
					
				</div>

				<div id="timer" style="display:flex;">
					<i class="material-icons" style="margin-top:-1.5vw;font-size: 40px; width: 30px;">schedule</i>
					<p id="timerP" style="margin-top:0.7vh;margin-left:15px;margin-bottom:32px">00 00 00 00</p>
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
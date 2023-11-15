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
    html,
    body {
        height: 100%;
        margin: 0;
        padding: 0;
        font-family: 'Times New Roman', Times, serif;
    }

    #main {
        height: 100%;
        width: 100%;
        background-image: url('images/mainBackground.jpg');
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        color: white;
        font-weight: 750;

        @media (0<width<600px) {
            height:120%;
            width: auto;
            background-size: cover;
        }
    }

    #mainBottom {
        width: 100vw;
        height: 80%;
        display: flex;
        flex-direction: column;
        justify-content: end;
        @media (0<width<600px) {
            flex-wrap: wrap;
        }
    }

    #landingText {
        margin-left: 5vw;
        height: 50vh;
        display: flex;
        flex-direction: column;
		width:auto;
		margin-top: 15vh;
		margin-bottom:7vh;
        @media (0<width<600px) {
            margin-left: 0vw;
            /* flex-wrap:wrap; */
            height: auto;
        }
    }

    #landingText h1 {
        font-size: 5rem;

        @media (0<width<600px) {
            font-size: 2.5rem;
        }
    }

    #landingText h2 {
        font-size: 3.5rem;

        @media (0<width<600px) {
            font-size: 2rem;
        }
    }

    #landingText h3 {
        font-size: 2.5rem;

        @media (0<width<600px) {
            font-size: 2rem;
        }
    }

    #landingText h4 {
        font-size: 2rem;

        @media (0<width<600px) {
            font-size: 1.5rem;
        }
    }

    #ticket {
        width: 20vw;
        height: 12vh;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.7rem;
        border: 1px solid white;
        margin-top: 2vh;
        background-color: #601472;

        @media (0<width<600px) {
            width: 70vw;
            flex-wrap: wrap;
            margin-left: 15vw;
        }
    }

    #mainBottomBottom {
        width: 90vw;
        height: 20vh;
        margin-left: 5vw;
        display: flex;
        margin-top: 2.5%;
        justify-content: space-between;
        column-gap: 10px;
        @media (0<width<600px) {
            flex-direction: column;
            height: 80vh;
			background: yellow;
            align-items: center;
        }
    }

    #location {
        width: 30vw;
        height: 20vh;
        display: flex;

        @media (0<width<600px) {
            width: 80vw;
            height: 10vh;
            border: 2px solid white;
            margin-top: 3vh;
        }
    }

    #locationIcon {
        width: 5vw;
        height: 20vh;
        margin-bottom: 20px;
    }

    #locationIcon i {
        margin-left: 30px;
        margin-top: 25px;
        font-size: 40px;
        width: 30px;

        @media (0<width<600px) {
            margin-top: 12px;
            margin-left: 10px;
        }
    }

    #locationText {
        width: 25vw;
        height: 20vh;
        font-size: 1.5rem;
        display: flex;
        align-items: center;

        @media (0<width<600px) {
            width: 80%;
            font-size: 1.5rem;
            flex-wrap: wrap;
            margin-left: 10vw;
            height: 9.5vh;
        }
    }

    #locationText p {
        @media (0<width<600px) {
            font-size: 1.2rem;
        }
    }

    #date {
        width: 20vw;
        height: 20vh;
        font-size: 1.5rem;
        display: flex;
        align-items: center;
        justify-content: center;
        @media (0<width<600px) {
			width: 80%;
            height: 10vh;
            border: 2px solid white;
            margin-top: 3vh;
			background: blue;
			flex-wrap:wrap;
        }
    }

    #dateIcon i {
        margin-bottom: 35px;
        font-size: 40px;
        width: 30px;
        @media (0<width<600px) {
            /* margin-top: 30px;
            margin-left: -17vw; */
			margin-top: 12px;
            margin-left: 10px;
			background: orange;
        }
    }

    #dateText {
        margin-left: 15px;
		margin-top: -3vh;
		@media (0<width<600px) {
            width: 80%;
            font-size: 1.5rem;
            flex-wrap: wrap;
            margin-left: 10vw;
            height: 9.5vh;
			background: black;
        }
    }

    #dateText p {
        @media (0<width<600px) {
            font-size: 1.2rem;
        }
    }

    #timer {
        width: 20vw;
        height: 20vh;
        font-size: 1.5rem;
        display: flex;
        align-items: center;
        justify-content: center;

        @media (0<width<600px) {
            width: 80vw;
            height: 10vh;
            border: 2px solid white;
            margin-top: 3vh;
			background: brown;
        }
    }

    #timer i {
        margin-top: -2vw;
        font-size: 40px;
        width: 30px;

        @media (0<width<600px) {
            margin-left: -17vw;
        }
    }

    #timerP {
        margin-top: -2vh;
        margin-left: 15px;
        margin-bottom:32px @media (0<width<600px) {
            width: 80%;
            font-size: 1.2rem;
            flex-wrap: wrap;
            margin-left: 10vw;
            height: 9.5vh;
        }
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
            <div id="landingText">
                <h1>JTECH 2024</h1>
                <h2>Inspiring Women in Technology</h2>
                <h3>Department of Computer Science & Software Engineering</h3>
                <h4>Jinnah University for Women</h4>
                <a href="#Registeration" style="color:white;text-align:center;">
                    <div id="ticket">
                        <p>Get Your Ticket</p>
                    </div>
                </a>
            </div>
            <div id="mainBottomBottom">
                <div id="location">
                    <div id="locationIcon">
                        <i class="material-icons">place</i>
                    </div>
                    <div id="locationText">
                        <p>5C, Block 5 Nazimabad, Karachi, Pakistan</p>
                    </div>
                </div>

                <div id="date">
                    <div id="dateIcon">
                        <i class="material-icons">calendar_month</i>
                    </div>
                    <div id="dateText">
                        <p>Feburary 2024</p>
                    </div>

                </div>

                <div id="timer">
                    <i class="material-icons">schedule</i>
                    <p id="timerP">00 00 00 00</p>
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
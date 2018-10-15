<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="CSS/Workshops.css">
    <script src="JS/js.js"></script>
    <meta charset="UTF-8">
    <meta name="description" content="Stagair local spot">
    <meta name="keywords" content="Technolab, Stagairs, Workshops">
    <meta name="author" content="Ravi Breugom, Alexander Wallaard, Natascha van Baal">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="60">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Technolab Stagairspot</title>

    <style>



    </style>
</head>
<div>
<header>
    <div class="custom=padding">
        <nav>
            <a href="../beveiligd.php"><img class="logo" src="../img/WhatsApp%20Image%202018-09-20%20at%2010.44.00.jpeg" alt="Logo"></a>
            <ul class="menu-area">
                <li><a href="#">Workshops</a></li>
                <li><a href="../agenda/agenda.php">Agenda</a></li>
                <li><a href="#">Leerdoelen</a></li>
                <li><a href="../Contact/Contact.php">Contact</a></li>
                <div class="dropdown">
                    <li><a class="dropbtn">&#9881;
                            <i class="fa fa-caret-down"></i>
                        </a></li>
                    <div class="dropdown-content">
                        <a href='../uitloggen.php'>Uitloggen</a>
                        <a><?php

                            session_start();
                            if($_SESSION['ingelogd'] == "ja"){
                                echo $_SESSION['username']."<br>";

                            }
                            else{
                                header("Location: ../login_form.php");
                            }

                            ?></a>
                    </div>
                </div>
    </div>

</header>

<div class="workshop-flex">
<div class="Workshopblok"><h1>Zintuigen</h1></br>
<a href="Zintuigen/Zintuigen.php">Klik hier</a></div>

<div class="Workshopblok"><h1>Praten met apparaten</h1></br>
<a href="praten-met-apparaten/PMA.php">Klik hier</a></div>

<div class="Workshopblok"><h1>Stroom geeft energie</h1></br>
<a href="stroom-geeft-energie/Stroom.php">Klik hier</a></div>
</div>

    <div class="workshop-flex">
        <div class="Workshopblok"><h1>Atonomie</h1></br>
            <a href="Atonomie/Atonomie.php">Klik hier</a></div>

        <div class="Workshopblok"><h1>Praten met apparaten</h1></br>
            <a href="stroom-geeft-energie/Stroom.php">Klik hier</a></div>

        <div class="Workshopblok"><h1>Stroom geeft energie</h1></br>
            <a href="stroom-geeft-energie/Stroom.php">Klik hier</a></div>
    </div>

    <div class="workshop-flex">
        <div class="Workshopblok"><h1>Zintuigen</h1></br>
            <a href="Zintuigen/Zintuigen.php">Klik hier</a></div>

        <div class="Workshopblok"><h1>Praten met apparaten</h1></br>
            <a href="stroom-geeft-energie/Stroom.php">Klik hier</a></div>

        <div class="Workshopblok"><h1>Stroom geeft energie</h1></br>
            <a href="stroom-geeft-energie/Stroom.php">Klik hier</a></div>
    </div>

<footer id="copyright">&copy; Technolab Leiden</footer>
</body>
</html>
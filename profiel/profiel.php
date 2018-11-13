<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/profiel.css">
    <script src="../JS/js.js"></script>
    <meta charset="UTF-8">
    <meta name="description" content="Stagair local spot">
    <meta name="keywords" content="Technolab, Stagairs, Workshops">
    <meta name="author" content="Ravi Breugom, Alexander Wallaard, Natascha van Baal">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Technolab Stagairspot</title>

    <style>



    </style>
</head>
<body>
<header>
    <div class="custom=padding">
        <nav>
            <a href="../beveiligd.php"><img class="logo" src="../img/WhatsApp%20Image%202018-09-20%20at%2010.44.00.jpeg" alt="Logo"></a>
            <ul class="menu-area">
                <li><a href="../Workshops/Workshop.php">Workshops</a></li>
                <li><a href="../agenda/agenda.php">Agenda</a></li>
                <li><a href="#">Leerdoelen</a></li>
                <li><a href="#">Contact</a></li>
                <div class="dropdown">
                    <li><a class="dropbtn">&#9881;
                            <i class="fa fa-caret-down"></i>
                        </a></li>
                    <div class="dropdown-content">
                        <a href='../uitloggen.php'>Uitloggen</a>
                        <a href="profiel.php"><?php

                            session_start();
                            if($_SESSION['ingelogd'] == "ja"){
                                echo $_SESSION['username']."<br>";

                            }
                            else{
                                header("Location: ../login_form.html");
                            }

                            ?>
                        </a>
                    </div>
                </div>
    </div>
</header>
<?php
include ("../config.php");
if (isset($_POST['submit'])) {
    $naam = $_POST['naam'];
    $gbdatum = $_POST['gbdatum'];
    $achternaam = $_POST['achternaam'];
    $email = $_POST['email'];
    $mnummer = $_POST['mnummer'];
    $adres = $_POST['adres'];
    $wplaats = $_POST['wplaats'];
    $hobby = $_POST['hobby'];
    $werk = $_POST['werk'];

<<<<<<< HEAD
    mysqli_query($con, "INSERT INTO persoonsgegevens(naam, gbdatum, achternaam, email, mnummer, adres, wplaats, hobby, werk) VALUES ('$naam', '$achternaam', '$gbdatum', '$email', '$mnummer', '$adres', '$wplaats', '$hobby', '$werk');
=======
    mysqli_query($con, "INSERT INTO persoonsgegevens(naam, gbdatum, achternaam, email, mnummer, adres, wplaats, hobby, werk) VALUES ('$naam', '$achternaam', '$gbdatum', '$email', '$mnummer', '$adres', '$wplaats', '$hobby', '$werk');");

    echo 'het is met succes opgeslagen';
>>>>>>> 03aee1f919e4b23fdd857b4e91d96ad387585be2
}
$con->close();
?>

<h2>Persoon gegevens</h2>

<form id="form-reg" method="POST" action="">
    Naam:<br>
    <input type="text" name="naam" id="naam">
    <br>
    Achternaam:<br>
    <input type="text" name="achternaam" id="achternaam">
    <br>
    Geboortedatum:<br>
    <input type="text" name="gbdatum" id="gbdatum">
    <br>
    E-mail:<br>
    <input type="text" name="email" id="email">
    <br>
    Mobiel nummer:<br>
    <input type="text" name="mnummer" id="mnummer">
    <br>
    Adres:<br>
    <input type="text" name="adres" id="adres">
    <br>
    Woonplaats:<br>
    <input type="text" name="wplaats" id="wplaats">
    <br>
    Hobby's:<br>
    <input type="text" name="hobby" id="hobby">
    <br>
    Werk:<br>
    <input type="text" name="werk" id="werk">
    <input type="submit" class="submit" name="submit" value="save"/>
</form>


<footer id="copyright">&copy; Technolab Leiden</footer>
</body>
</html>
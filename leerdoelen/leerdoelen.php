<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="CSS/Contact.css">
    <script src="js/js.js"></script>
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
<body onload="leerdoel1()">
<header>
    <div class="custom=padding">
        <nav>
            <a href="../beveiligd.php"><img class="logo" src="../img/WhatsApp%20Image%202018-09-20%20at%2010.44.00.jpeg" alt="Logo"></a>
            <ul class="menu-area">
                <li><a href="../Workshops/workshop.php">Workshops</a></li>
                <li><a href="../agenda/agenda.php">Agenda</a></li>
                <li><a href="#">Leerdoelen</a></li>
                <li><a href="#">Contact</a></li>
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
                                header("Location: ../login_form.html");
                            }
                            
                            ?>
                        </a>
                    </div>
                </div>
    </div>
</header>

<?php
include('../config.php');
?>
<div id="leerdoel">
<?php
    $sqli_query = "select leerdoel from account where SESSION_USER=24;"
?>
</div>
<div id="big-border"></div>
<section id="lange-border">
    <div id="block1" class="bordes"></div>
    <div id="block2" class="bordes"></div>
    <div id="block3" class="bordes"></div>
    <div id="block4" class="bordes"></div>
    <div id="block5" class="bordes"></div>
    <div id="block6" class="bordes"></div>
    <div id="block7" class="bordes"></div>
    <div id="block8" class="bordes"></div>
    <div id="block9" class="bordes"></div>
    <div id= "block10" class="bordes"></div>
</section>
<h1 id="meter">10-METER</h1>
<div id="box2"></div>

<div id="box3"></div>
<h1 id="boom">Boo!</h1>
<img id="trap" src="img/trap.gif"/>

<!--
<section id="rij1">
    <div class="rijen"></div>
    <div class="rijen"></div>
    <div class="rijen"></div>
</section>
<section id="rij2">
    <div class="rijen"></div>
    <div class="rijen"></div>
    <div class="rijen"></div>
</section>
<section id="rij3">
    <div class="rijen"></div>
    <div class="rijen"></div>
    <div class="rijen"></div>
</section>



</section>
-->

<form id="checkform" action="checkver.php">
<input type="checkbox" class="checkboxen" name="zintuigen" value="zintuigen">Zintuigen</br>
<input type="checkbox" class="checkboxen" name="praten met apparaten" value="praten met apparaten">Praten met apparaten</br>
<input type="checkbox" class="checkboxen" name="stroom geeft energie" value="stroom geeft energy">Stroom geeft energie</br>
<input type="checkbox" class="checkboxen" name="Atonomie" value="Atonomie">Atonomie</br>
<input type="checkbox" class="checkboxen" name="Droge voeten" value="Droge voeten">Droge voeten</br>
<input type="checkbox" class="checkboxen" name="stroom geeft energie" value="Stroom geeft energie">Stroom geeft energie</br>
<input type="checkbox" class="checkboxen "name="Atonomie" value="Atonomie">Atonomie</br>
<input type="checkbox" class="checkboxen" name="Bruggenbouwen" value="Bruggenbouwen">Bruggenbouwen</br>
<input type="checkbox" class="checkboxen"name="Stroom geeft energie" value="Stroom geeft energie">Stroom geeft energie</br>
<button class="checkboxen" type="submit">Geselecteerde toevoegen</button>
</form>
<footer id="copyright">&copy; Technolab Leiden</footer>
</body>
</html>
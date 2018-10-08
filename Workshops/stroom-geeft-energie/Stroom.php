<!DOCTYPE html>
<html>
<head>
    <script src="js/js.js"></script>
    <meta charset="UTF-8">
    <meta name="description" content="Stagair local spot">
    <meta name="keywords" content="Technolab, Stagairs, Workshops">
    <meta name="author" content="Ravi Breugom, Alexander Wallaard, Natascha van Baal">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="60">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="CSS/style.css" rel="stylesheet" type="text/css">
    <title>Technolab Stagairspot</title>
</head>
<body>
<header>
    <div class="custom=padding">
        <nav>
            <a href="../../beveiligd.php"><img class="logo" src="../../img/WhatsApp%20Image%202018-09-20%20at%2010.44.00.jpeg" alt="Logo"></a>
            <ul class="menu-area">
                <li><a href="#">Workshops</a></li>
                <li><a href="#">Agenda</a></li>
                <li><a href="#">Leerdoelen</a></li>
                <li><a href="../../Contact/Contact.php">Contact</a></li>
                <div class="dropdown">
                    <li><a class="dropbtn">&#9881;
                            <i class="fa fa-caret-down"></i>
                        </a></li>
                    <div class="dropdown-content">
                        <a href='../../uitloggen.php'>Uitloggen</a>
                        <a><?php

                            session_start();
                            if($_SESSION['ingelogd'] == "ja"){
                                echo $_SESSION['username']."<br>";

                            }
                            else{
                                header("Location: ../../login_form.php");
                            }

                            ?></a>
                    </div>
                </div>


    </div>

</header>
<div id="border-buiten">
    <h1 id="border-buiten-tekst1">Stroom Geeft energy game.</h1>
<p id="border-buiten-tekst2">het doel van dit spel is om het lampje van stroom te vorzien! lukt het jouw om het lampje te laten branden?</p>
 <section id="flex-container-pijlen">
     <img id="pijl-links" alt="pijl-links" src="img/pijl-links.png">
     <img id="pijl-rechts" alt="pijl-rechts" src="img/pijl-rechts.png">
 </section>

    <canvas id="border-spel">



    </canvas>

    <!--spel plaatjes-->
    <div id="gloeilamp">
        <img src="img/gloeilamp-uit.png"/>
        <img src="img/gloeilamp-aan.jpg" style="display:none;"/>
    </div>
<img id="schakkelaar" src="img/schakkelaar.png"/>
    <img id="schakkelaar2" src="img/schakkelaar.png"/>


</div>






<footer id="copyright">&copy; Technolab Leiden</footer>
</body>
</html>
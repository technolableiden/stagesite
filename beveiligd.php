<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="CSS/homecss.css">
    <script src="JS/js.js"></script>
    <meta charset="UTF-8">
    <meta name="description" content="Stagair local spot">
    <meta name="keywords" content="Technolab, Stagairs, Workshops">
    <meta name="author" content="Ravi Breugom, Alexander Wallaard, Natascha van Baal">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="60">
    <title>Technolab Stagairspot</title>
</head>
<body>
<header>
    <div class="custom=padding">
        <nav>
    <img class="logo" src="img/WhatsApp%20Image%202018-09-20%20at%2010.44.00.jpeg" alt="Logo">
            <ul class="menu-area">
                <li><a href="#">Workshops</a></li>
                <li><a href="#">Agenda</a></li>
                <li><a href="#">Leerdoelen</a></li>
                <li><a href="#"></a></li>
                <section id="slidedown">
                    <div class="topnav" id="myTopnav">
                        <a href='uitloggen.php'>Uitloggen</a>
                        <a><?php

                            session_start();
                            if($_SESSION['ingelogd'] == "ja"){
                                echo $_SESSION['username']."<br>";

                            }
                            else{
                                header("Location: login_form.html");
                            }

                            ?></a>
                        <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9881;</a>
                    </div>
            </ul>
        </nav>
    </div>

</header>
<img src="img/WhatsApp%20Image%202018-09-20%20at%2010.45.36.jpeg" alt="mieke" height="50">
<img src="img/WhatsApp%20Image%202018-09-20%20at%2010.40.55.jpeg" alt="mieke">
<img src="img/WhatsApp%20Image%202018-09-20%20at%2010.41.45.jpeg" alt="mieke">

<img src="img/WhatsApp%20Image%202018-09-20%20at%2010.45.59.jpeg" alt="mieke">
<p></p>

<footer id="copyright">&copy; Technolab Leiden</footer>
</body>
</html>

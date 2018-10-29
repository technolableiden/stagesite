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
    <link href="CSS/Atonomie.css" rel="stylesheet" type="text/css">
    <title>Technolab Stagairspot</title>
</head>
<body>
<header>
    <div class="custom=padding">
        <nav>
            <a href="../../beveiligd.php"><img class="logo" src="../../img/WhatsApp%20Image%202018-09-20%20at%2010.44.00.jpeg" alt="Logo"></a>
            <ul class="menu-area">
                <li><a href="../Workshop.php">Workshops</a></li>
                <li><a href="../../agenda/agenda.php">Agenda</a></li>
                <li><a href="../../leerdoelen/leerdoelen.php">Leerdoelen</a></li>
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

<img src="img/lichaam.jpg">
<h2>Drag and Drop</h2>
<p>Drag the image back and forth between the two div elements.</p>

<div class="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
    <img src="img/hart-cartoon.png" draggable="true" ondragstart="drag(event)" id="drag1">
</div>

<div class="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>

<div class="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
    <img src="img/nieren.jpg" draggable="true" ondragstart="drag(event)" id="drag1">
</div>

<div class="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>

<div class="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
    <img src="img/dikkedarm.png" draggable="true" ondragstart="drag(event)" id="drag1">
</div>

<div class="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>

<div class="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
    <img src="img/dunne-darm1.png" draggable="true" ondragstart="drag(event)" id="drag1">
</div>

<div class="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>

<div class="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
    <img src="img/longen.jpg" draggable="true" ondragstart="drag(event)" id="drag1">
</div>

<div class="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>



<footer id="copyright">&copy; Technolab Leiden</footer>
</body>
</html>
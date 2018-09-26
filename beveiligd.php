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
<header>
    <div class="custom=padding">
        <nav>
            <div class="logo"><img src="img/WhatsApp%20Image%202018-09-20%20at%2010.44.00.jpeg" alt="Logo" height="50vh" width="30vw" </div>
            <ul class="menu-area">
                <li><a href="#">Workshops</a></li>
                <li><a href="#">Agenda</a></li>
                <li><a href="#">Leerdoelen</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </div>

</header>
<body>




<?php

session_start();
if($_SESSION['ingelogd'] == "ja"){
    echo "hallo"." ".$_SESSION['username']."<br>";
    //tabel maken in sql
    echo "<a href='uitloggen.php'>Uitloggen</a>";
}
else{
    header("Location: login_form.html");
}

?>
</body>

<footer id="copyright">&copy; Technolab Leiden</footer>
</body>
</html>

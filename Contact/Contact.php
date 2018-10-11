<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="CSS/Contact.css">
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
<body>
<header>
    <div class="custom=padding">
        <nav>
            <a href="../beveiligd.php"><img class="logo" src="../img/WhatsApp%20Image%202018-09-20%20at%2010.44.00.jpeg" alt="Logo"></a>
            <ul class="menu-area">
                <li><a href="../Workshops/workshop.php">Workshops</a></li>
                <li><a href="#">Agenda</a></li>
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

                            ?></a>
                    </div>
                </div>










    </div>

</header>

<table style="width:100%">
    <tr>
        <td><i class="fa fa-phone" style="font-size:24px"></i></td>
        <td>071-5191324</td>
    </tr>
    <tr>
        <td><i class="fa fa-envelope-o" style="font-size:24px"></i></td>
        <td>info@technolableiden.nl</td>
    </tr>
    <tr>
        <td><i class="fa fa-map-marker" style="font-size:24px"></i></td>
        <td>Zweilandlaan 4 <br>
            2334 CS Leiden</td>
    </tr>
    <tr>
        <td><i class="fa fa-map-marker" style="font-size:24px"></i></td>
        <td>Lange Sint Agnietenstraat 10<br>
            2312 WC Leiden</td>
    </tr>
</table>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2446.8596116298677!2d4.483402715762222!3d52.17324587975001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c5c6c3d9cc79a9%3A0xac7435e685048c5d!2sZweilandlaan+4%2C+2334+CS+Leiden!5e0!3m2!1snl!2snl!4v1539163586723" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>





<footer id="copyright">&copy; Technolab Leiden</footer>
</body>
</html>
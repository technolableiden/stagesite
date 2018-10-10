<!DOCTYPE html>
<html>
<head>
    <script src="js/js.js"></script>
    <meta charset="UTF-8">
    <meta name="description" content="Stagair local spot">
    <meta name="keywords" content="Technolab, Stagairs, Workshops">
    <meta name="author" content="Ravi Breugom, Alexander Wallaard, Natascha van Baal">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="CSS/style.css" rel="stylesheet" type="text/css">
    <title>Technolab Stagairspot</title>
</head>
<body data-gr-c-s-loaded="true">
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
<img id="target" src="img/schakkelaar.png"/>
    <script src="./bl.ocks.org_files/rotate.js.download"></script>
    <img id="target2" src="img/schakkelaar.png"/>
    <script src="./bl.ocks.org_files/rotate2.js.download"></script>
<button id="zetaan-knop" onclick="activate()" >zet aan</button>









<footer id="copyright">&copy; Technolab Leiden</footer>
    <script>


</script>





<!--
    <script>















       var el2 = document.getElementById("target2");
       var st2 = window.getComputedStyle(el2, null);
       var tr2 = st2.getPropertyValue("-webkit-transform") ||
           st2.getPropertyValue("-moz-transform") ||
           st2.getPropertyValue("-ms-transform") ||
           st2.getPropertyValue("-o-transform") ||
           st2.getPropertyValue("transform") ||
           "FAIL";

       // With rotate(30deg)...
       // matrix(0.866025, 0.5, -0.5, 0.866025, 0px, 0px)
       //console.log('Matrix: ' + tr);

       // rotation matrix - http://en.wikipedia.org/wiki/Rotation_matrix

       var values2 = tr2.split('(')[1].split(')')[0].split(',');
       var a2 = values[0];
       var b2 = values[1];
       var c2 = values[2];
       var d2 = values[3];

       var scale2 = Math.sqrt(a2*a2 + b2*b2);

       //console.log('Scale: ' + scale);

       // arc sin, convert from radians to degrees, round
       var sin2 = b2/scale2;
       // next line works for 30deg but not 130deg (returns 50);
        var angle2 = Math.round(Math.asin(sin2) * (180/Math.PI));
      // var angle2 = Math.round(Math.atan2(b2, a2) * (180/Math.PI));

       console.log('Rotate: ' + angle2 + 'deg');





















    </script>
    -->
</body>
</html>
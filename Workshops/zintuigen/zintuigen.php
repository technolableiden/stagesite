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
    <link href="CSS/zintuigen.css" rel="stylesheet" type="text/css">
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



<div class="quiz-wrapper">
    <p class="question-description">Fill in the blanks by dragging the missing answer.</p>
    <ul class="options">
        <li class="title">Options</li>
        <li class="option" data-target="carraway">Nick Carraway</li>
        <li class="option" data-target="fitz">F. Scott Fitzgerald</li>
        <li class="option" data-target="westegg">West Egg</li>
        <li class="option" data-target="buchanan">Tom Buchanan</li>
        <li class="option" data-target="daisy">Daisy</li>
        <li class="option" data-target="ashes">Valley of Ashes</li>
    </ul>
    <div class="answers">
        <ol>
            <li><span class="target" data-accept="fitz">&nbsp;</span>, a native of St Paul, Minnesota, and also a member of the "Lost Generation" finished four novels including "This Side of Paradise".</li>
            <li><span class="target" data-accept="carraway">&nbsp;</span> attended Yale with the large and brooding<span class="target" data-accept="buchanan">&nbsp;</span>.</li>
            <li>George Wilson owns an unsuccessful garage in an area known as the <span class="target" data-accept="ashes">&nbsp;</span>, where Tom brings Nick for a party.</li>
            <li>Jay Gatsby, the Buchanans, and Nick himself all make<span class="target" data-accept="westegg">&nbsp;</span>their home.</li>
        </ol>
    </div>
    <button type="submit" value="submit">Submit</button>
    <div class="lightbox-bg"></div>
    <div class="status confirm">
        <p>All Answers Answered</p>
    </div>
    <div class="status deny">
        <p>Answers Remain</p>
    </div>
</div>



<footer id="copyright">&copy; Technolab Leiden</footer>
</body>
</html>
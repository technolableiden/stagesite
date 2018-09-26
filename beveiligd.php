<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
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

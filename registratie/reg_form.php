<html>
<head>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <meta charset="UTF-8">
    <meta name="description" content="Stagair local spot">
    <meta name="keywords" content="Technolab, Stagairs, Workshops">
    <meta name="author" content="Ravi Breugom, Alexander Wallaard, Natascha van Baal">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="60">
    <title>Technolab Stagairspot</title>
</head>
<header>
    <img id="logo" alt="Logo Technolab" src="img/WhatsApp%20Image%202018-09-20%20at%2010.44.00.jpeg">
    <button id="ga-terug" href="../login-form.html" alt="terug knop"><a href="../login_form.html" id="font5">Ga terug naar login page</a></button>
</header>
<body>
<?php
$servername = "185.114.157.172";
$username = "spelsalo";
$password = "klaas111";

//connection being created
$conn = mysqli_connect($servername, $username, $password);

//connection being checked
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>
<form id="form-reg" method="get" action="reg.php">
    <div id="font1">username</div> <input class="kleur-input" type="text" name="username"/><br>
    <div id="font2">password</div> <input class="kleur-input" type="password" name="password"/><br>
    <div id="font3">email</div> <input class="kleur-input" type="text" name="username"/><br>
    <div id="font4">activatie-code</div> <input class="kleur-input" type="password" name="activatie-code"/><br>
    <input type="submit" class="submit" name="registeren" value="register"/><br>
    <div id="bot-check" class="g-recaptcha" data-sitekey="6LcbP3IUAAAAAIemxhX68uF2OvoFyasjH9oTZrh9"></div>
</form>
</body>
<footer>

    <footer id="copyright">&copy; Technolab Leiden</footer>
</footer>


</html>
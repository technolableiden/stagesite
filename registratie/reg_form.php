<html>
<head>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<header>
    <img id="logo" alt="Logo Technolab" src="img/WhatsApp%20Image%202018-09-20%20at%2010.44.00.jpeg">
</header>
<body>
<?php
$servername = "https://web2.64ip.net";
$username = "spelsalo_2";
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

</footer>


</html>
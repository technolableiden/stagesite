

<?php
if(isset($_POST['submit'])){
    $dbHost = "185.114.157.172";        //Location Of Database usually its localhost
    $dbUser = "spelsalo";            //Database User Name
    $dbPass = "klaas111";            //Database Password
    $dbname = "spelsalo_2";    //Database Name

// Create connection
    $con = new mysqli($dbHost, $dbUser, $dbPass, $dbname);
// Check connection
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }


    $uname = mysqli_real_escape_string($con,$_POST['username']);
    $password = mysqli_real_escape_string($con,$_POST['password']);

    if ($uname != "" && $password != ""){

        $sql_query = "select count(*) as cntUser from account where username='".$uname."' and password='".$password."'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['uname'] = $uname;
            session_start();
            header('Location: beveiligd.php');
        }else{
            echo "Invalid username and password";
        }

    }

}
?>













































































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
        <button id="button-nieuw" href="registratie/reg_form.php"><a href="registratie/reg_form.php" id="font3">Ben je nieuw? klik hier</a></button>
        <img id="logo" alt="Logo Technolab" src="img/WhatsApp%20Image%202018-09-20%20at%2010.44.00.jpeg">
    </header>
    <body>


    <form id="form-login" method="POST" action="">
        <div id="font1">username</div> <input class="kleur-input" type="text" name="username"/><br>
        <div id="font2">password</div> <input class="kleur-input" type="password" name="password"/><br>
        <input type="submit" class="submit" name="submit" value="login"/><br>


    </form>
    
    </body>

        
 <footer id="copyright">&copy; Technolab Leiden</footer>
    </body>
</html> 
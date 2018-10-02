<?php
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
?>
<?php
$servername = "185.114.157.172";
$username = "spelsalo";
$password = "klaas111";
$dbname = "spelsalo_2";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?> 
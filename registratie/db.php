<?php
$servername = "localhost";
$username = "technola_1";
$password = "Klaas111@";
$dbname = "technola_1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?> 
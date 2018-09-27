<?php
$servername = "185.114.157.172";
$username = "spelsalo";
$password = "klaas111";
$db = "spelsalo_2";

//connection being created
$conn = mysqli_connect($servername, $username, $password, $db);

//connection being checked
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}




if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
    $uname = $_POST['name'];
    $email = $_POST['email'];
    $pname = $_POST['password'];
    if($name !=''||$email !=''){
//Insert Query of SQL
        $query = $mysqli_query("insert into account(id, username, password, email) values ('NULL', '$uname', '$pname', '$email')");
        echo "<br/><br/><span>Data Inserted successfully...!!</span>";
    }}

?> 
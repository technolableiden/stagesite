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
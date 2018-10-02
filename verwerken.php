<html>


</html>
<head>


</head>
<header>

</header>
<body>






<p>hi</p>



<?php

require("config.php");
session_start();

if (isset($_POST['submit']))
{

    $uname=$_POST['username'];
    $pass=$_POST['password'];

    mysqli_query($conn,"SELECT username FROM account WHERE username='$uname' and password='$pass');");
    if (mysqli_num_rows($conn) != 0


    )
    {
        echo 'nice';
        header('location beveiligd.php');
    }
    else
    {
        echo "fout in ingevoerde gegevens";
    }
}
?>










<footer>

</footer>
</body>
</html>

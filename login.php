<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    $juisteuser = "ravinator";
    $juistww = "password";
    
    $ingevoerdeuser = $_POST['username'];
    $ingevoerdeww = $_POST['password'];
    
    if($juisteuser == $ingevoerdeuser && $juistww == $ingevoerdeww){
        session_start();
        $_SESSION['ingelogd'] = "ja";
        $_SESSION['username'] = $ingevoerdeuser;
        
        header("Location: beveiligd.php");
        
        
    }
    else{
        header("Location: login_form.html");    
    }
    
}
    else{
        header("Location: login_form.html"); 
    }
?>
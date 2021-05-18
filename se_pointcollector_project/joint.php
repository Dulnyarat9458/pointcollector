<?php
    session_start();
        $idInput = $_GET['id'];      
        $_SESSION["positId"]  = $idInput;
        Header("refresh:0;url=edituser.php");
        die();
        
?>


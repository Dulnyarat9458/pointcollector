<?php
	session_start();
    if ($_SESSION["role"]!='m') {
		header("location:home.php");
		die();
	}else{        
        $conn = new PDO("mysql:host=localhost;dbname=pointcollector;charset=utf8", "root", "");
		    $sql="DELETE FROM promotion WHERE promotion_id=$_GET[id]";
		    $conn->exec($sql);
		    $conn=null;
		    header("location:del_promotion.php");
	}
?>

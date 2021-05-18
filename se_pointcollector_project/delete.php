<?php
	session_start();
    if (((isset($_SESSION["role"])) == false) || $_SESSION["role"] == 'c') {
        Header("refresh:0;url=home.php");
        die();
    }
    if ($_SESSION["role"]!='m') {
		header("location:home.php");
		die();
	}else{        
        $conn = new PDO("mysql:host=localhost;dbname=pointcollector;charset=utf8", "root", "");
        $sql = "SELECT role FROM user WHERE id=$_GET[id]";
        $result = $conn->query($sql);
        while ($row = $result->fetch()) {
            $fap = $row[0];
        }
        if($fap=='m'){
            $_SESSION["delAdmin"]=1;
            echo 'ลบอันนี้ไม่ได้นะ';
            Header("refresh:0;url=userinfo.php");
            die();
        }else
            echo 'ลบได้';
            Header("refresh:2;url=userinfo.php");
		    $sql="DELETE FROM user WHERE id=$_GET[id]";
		    $conn->exec($sql);
		    $conn=null;
		    header("location:userinfo.php");
	}

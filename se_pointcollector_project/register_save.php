<?php
session_start();

$name = $_POST['inputname'];
$lastname = $_POST['inputlast'];
$phonenumber = $_POST['inputnumber'];
$email = $_POST['inputemail'];
$username = $_POST['inputuser'];
$password = $_POST['password'];
$repass = $_POST['repassword'];

if (($name != null) &&  ($lastname  != null) &&  ($phonenumber != null) && ($email  != null) &&  ($username  != null) && ($password != null) && ($repass != null)) {
    if (($password == $repass)) {
        $ENpassword = sha1($password);

        $conn = new PDO("mysql:host=localhost;dbname=pointcollector;charset=utf8", "root", "");
        $sql = "SELECT * FROM user where username='$username'";
        $sql2 = "SELECT * FROM user where tel='$phonenumber'";
        $result = $conn->query($sql);
        $result2 = $conn->query($sql2);
        if ($result->rowCount() == 1) {
            $_SESSION['error'] = 3;
            header("location:register.php");
            die();
        }else if ($result2->rowCount() == 1){
            $_SESSION['error'] = 4;
            header("location:register.php");
            die();
        }
        else {
            $sql = "INSERT INTO user (username,password,tel,name,surname,email,role) VALUES ('$username','$ENpassword','$phonenumber','$name','$lastname','$email','c')";
            $conn->exec($sql);
            $conn = null;
            $_SESSION['error'] = 0;
            Header("refresh:0;url=register.php");
            die();
        }
    } else $_SESSION['error'] = 2;
    Header("refresh:0;url=register.php");
    die();
} else $_SESSION['error'] = 1;
Header("refresh:0;url=register.php");
die();

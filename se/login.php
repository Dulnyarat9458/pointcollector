<?php
session_start();
if (isset($_SESSION["username"])) {
    Header("refresh:0;url=home.php");
    die();
}
?>

<!DOCTYPE html>
<html lang="en">
<title>สะสมแต้ม</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<style>
    body {
        font-family: kanit;
    }
</style>

<body>
    <form action="verify.php" method="post">
        <!--top icon-->
        <div class="container">
            <img src="img\logo.png">
            <div style="float: right;">
                <br>
                <br>
                <a href="login.php"><button type="button" class="btn btn-light btn-lg" style="background-color: white;"><b>Login</b></button></a>
                <a href="register.php"><button type="button" class="btn btn-primary btn-lg" style="background-color: #2D4262;"><b>Sign Up</b></button></a>
            </div>
        </div>

        <!-- Navbar -->
        <div class="w3-center" style="background-color: #363237;">

            <div class="w3-bar w3-large w3-text-white">
                <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-large" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
                <a href="home.php" class="w3-bar-item w3-button w3-padding-large ">หน้าหลัก</a>
                <a href="pointcheck.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large ">ตรวจสอบคะแนน</a>
                <a href="product.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large ">สินค้า</a>
                <a href="contact.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large ">ติดต่อเรา</a>

            </div>';

            <!-- Navbar on small screens -->
            <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
                <a href="#" class="w3-bar-item w3-button w3-padding-large">ตรวจสอบคะแนน</a>
                <a href="#" class="w3-bar-item w3-button w3-padding-large">โปรโมชั่น</a>
                <a href="#" class="w3-bar-item w3-button w3-padding-large">ติดต่อเรา</a>
            </div>
        </div>

        <br>
        <br>
        <div class="col-md-2" style="background-color: #D09683; color: white; padding: 0.2%;">
            <center>
                <h2>Login</h2>
            </center>
        </div>


        <?php

        if (isset($_SESSION["error"])) {
            echo '<div class="alert alert-danger"><center><strong>Username หรือ PASSWORD ไม่ถูกต้อง!</strong> กรุณาลองอีกครั้ง</center></div>';
            unset($_SESSION["error"]);
            session_destroy();
        }
        ?>



        <!-- First Grid -->
        <div class="w3-row-padding w3-padding-64 w3-container">
            <div class="w3-content">
                <div class="center">
                    <div class="container">
                        <center>
                            <div class="panel-group" style="width: 70% ">
                                <div class="panel panel-default" style="    
                            border: 2px solid #2D4262;
                            border-radius: 20px; padding: 5%;">
                                    <div class="row mb-3">
                                        <label for="txt_name" class="col-sm-5 form-label">Username </label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="inputname" name="username" placeholder="">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="txt_name" class="col-sm-5 form-label">Password </label>
                                        <div class="col-sm-6">
                                            <input type="password" class="form-control" id="inputname" name="password" placeholder="">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-7" style="text-align: right">
                                            <button type="submit" class="btn btn-primary btn-lg" style="background-color: #2D4262;">เข้าสู่ระบบ</button>
                                        </div>
                                    </div>
                               
                        </center>
                    </div>
                    <br>

    </form>
    </div>



    </div>


    </div>
    </div>





</body>

</html>
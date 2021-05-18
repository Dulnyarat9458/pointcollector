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
<script src="javascripts/jquery.min.js"></script>
<script src="javascripts/jquery_validate.js"></script>

<style>
    body {
        font-family: 'Kanit', sans-serif;
    }

    .fa-anchor,
    .fa-coffee {
        font-size: 200px
    }
</style>

<style>
    box {
        width: 400px;
        height: 70px;
        left: -78px;
        top: 542px;
        font-size: 24px;
        font-family: kanit;
        color: white;
        font-weight: 570;
        background: #D09683;
        padding: 0.8%;
    }
</style>

<!--
<script language="Javascript">

        function check() {

        var pwd = (document.form1.password.value);
        var repwd =(document.form1.repassword.value);

            if(pwd != repwd){

            alert("รหัสผ่านไม่ตรงกัน");


            return false;

            }
        }

</script>
    -->


<body>

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
            <a href="promotion.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large ">โปรโมชั่น</a>
            <a href="contact.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large ">ติดต่อเรา</a>

        </div>

        <!-- Navbar on small screens -->
        <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
            <a href="#" class="w3-bar-item w3-button w3-padding-large">ตรวจสอบคะแนน</a>
            <a href="#" class="w3-bar-item w3-button w3-padding-large">โปรโมชั่น</a>
            <a href="#" class="w3-bar-item w3-button w3-padding-large">ติดต่อเรา</a>
        </div>
    </div>


    <!--Register-->
    <br>
    <br>
    <div class="col-md-3" style="background-color: #D09683; color: white; padding: 0.2%;">
        <center>
            <h2>Register</h2>
        </center>
    </div>

    <form name="form1" id="form1" action="register_save.php" method="post" class="form-horizontal">
        <div class='container'>
            <br>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <?php

                    if (isset($_SESSION['error'])) {
                        if ($_SESSION['error'] == 1) {
                            echo '<div class="alert alert-danger"><center><strong> ใส่ข้อมูลไม่ครบ </strong></center></div>';
                            unset($_SESSION['error']);
                        } elseif ($_SESSION['error'] == 2) {
                            echo '<div class="alert alert-danger"><center><strong> password ไม่ตรงกัน </strong></center></div>';
                            unset($_SESSION['error']);
                        } elseif ($_SESSION['error'] == 3) {
                            echo '<div class="alert alert-danger"><center><strong> มีคนใช้ Username นี้แล้ว </strong></center></div>';
                            unset($_SESSION['error']);
                        } elseif ($_SESSION['error'] == 4) {
                            echo '<div class="alert alert-danger"><center><strong> มีคนใช้ เบอร์โทรศัพท์ นี้แล้ว </strong></center></div>';
                            unset($_SESSION['error']);
                        } elseif ($_SESSION['error'] == 0) {
                            echo '<div class="alert alert-success"><center><strong> สมัครสมาชิกสำเร็จ </strong></center></div>';
                            unset($_SESSION['error']);
                        }
                    }

                    ?>

                    <div class="panel-group">
                        <div class="panel panel-default">
                            <div class="panel-body" style="border: 2px solid #2D4262;
                        border-radius: 20px; padding: 5%; ">

                                <div class="row mb-3">
                                    <label for="txt_name" class="col-sm-3 form-label">ชื่อ</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputname" name="inputname" placeholder="">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="txt_last" class="col-sm-3 form-label">นามสกุล</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputlast" name="inputlast" placeholder="">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="txt_number" class="col-sm-3 form-label">เบอร์โทรศัพท์</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputnumber" name="inputnumber" placeholder="">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="txt_email" class="col-sm-3 form-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" id="inputemail" name="inputemail" placeholder="">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="txt_user" class="col-sm-3 form-label">Username</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputuser" name="inputuser" placeholder="">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="txt_password" class="col-sm-3 form-label">Password</label>
                                    <div class="col-sm-9">
                                        <input type="password" class="form-control" id="password" name="password" placeholder="">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="txt_repassword" class="col-sm-3 form-label">Re-Password</label>
                                    <div class="col-sm-9">
                                        <input type="password" class="form-control" id="repassword" name="repassword" placeholder="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button type="button" class="btn btn-outline-secondary btn-lg">ยกเลิก</button>
                        <button type="submit" class="btn btn-success btn-lg" style="background-color: #02af5e;">ยืนยัน</button>
                    </div>
                </div>
                <div class="col-md-2"></div>
                <p></p>
                <br>
                <br>
                <br>
                <br>
            </div>
        </div>
    </form>
</body>
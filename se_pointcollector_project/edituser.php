<?php
session_start();
if (((isset($_SESSION["role"])) == false) || $_SESSION["role"] == 'c') {
    Header("refresh:0;url=home.php");
    die();
}
$ps = $_SESSION["positId"];

$conn2 = new PDO("mysql:host=localhost;dbname=pointcollector;charset=utf8", "root", "");
$sql2 = "SELECT role FROM user WHERE id=$ps";
$result2 = $conn2->query($sql2);
while ($row2 = $result2->fetch()) {
    $fap2 = $row2[0];
}if ($fap2 == 'm') {
    $_SESSION["editAdmin"] = 1;
     Header("refresh:0;url=userinfo.php");
    die();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
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
</head>
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
        width: 300px;
        height: 60px;
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

<body>


    <!--top icon-->
    <div class="container">

        <div class="row">
            <div class="col-md-3">
                <img src="img\logo.png">
            </div>
            <div class="col-md-3">
            </div>
            <div class="col-md-3">
            </div>
            <div class="col-md-3">
                <br>
                <br>

                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <?php

                if (isset($_SESSION["id"])) {
                    echo   '<a style="font-size: 24px;">Hello, </a>';
                    echo   '<div class="w3-dropdown-hover">';
                    echo        '<a style="font-size: 24px;">' . $_SESSION["username"] . '<img src="img\face_icon.png" style="width:28px;height:28px;"></a>';
                    echo        '<div class="w3-dropdown-content w3-bar-block w3-border">
                                <a href="logout.php" class="w3-bar-item w3-button"><img src="img\login_icon.png" style="width:28px;height:28px;">  Logout</a>
                            </div>
                        </div>';
                } else echo '<a href="login.php"><button type="button" class="btn btn-light btn-lg" style="background-color: white;"><b>Login</b></button></a>';
                echo ' <a href="register.php"><button type="button" class="btn btn-primary btn-lg" style="background-color: #2D4262;"><b>Sign Up</b></button></a><br>';
                ?>
            </div>

        </div>
    </div>


    <!-- Navbar -->
    <?php

    if (isset($_SESSION["id"]) && $_SESSION["role"] == 'm') {
        echo '<div class="w3-center" style="background-color: #363237;">
        <div class="w3-bar w3-large w3-text-white">
            <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-large" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
            <a href="home.php" class="w3-bar-item w3-button w3-padding-large ">หน้าหลัก</a>
            <a href="userinfo.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large ">ข้อมูลลูกค้า</a>
            <a href="product.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large ">ข้อมูลสินค้า</a>
            <a href="ad_product.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large ">เพิ่มข้อมูลสินค้า</a>
            <a href="del_product.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large ">ลบข้อมูลสินค้า</a>
            <a href="ad_promotion.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large ">เพิ่มข้อมูลโปรโมชั่น</a>
            <a href="del_promotion.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large ">ลบข้อมูลโปรโมชั่น</a>
            <a href="addpoint.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large ">เก็บแต้ม</a>
            <a href="usepoint.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large ">ใช้แต้ม</a>
        </div>';

        echo '   <!-- Navbar on small screens -->
        <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
            <a href="#" class="w3-bar-item w3-button w3-padding-large">ตรวจสอบคะแนน</a>
            <a href="#" class="w3-bar-item w3-button w3-padding-large">โปรโมชั่น</a>
            <a href="#" class="w3-bar-item w3-button w3-padding-large">ติดต่อเรา</a>
        </div>
    </div>';
    } else
        echo '<div class="w3-center" style="background-color: #363237;">
    <div class="w3-bar w3-large w3-text-white">
        <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-large" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
        <a href="home.php" class="w3-bar-item w3-button w3-padding-large ">หน้าหลัก</a>
        <a href="pointcheck.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large ">ตรวจสอบคะแนน</a>
        <a href="product.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large ">สินค้า</a>
        <a href="contact.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large ">ติดต่อเรา</a>

    </div>';

    echo '   <!-- Navbar on small screens -->
        <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
            <a href="#" class="w3-bar-item w3-button w3-padding-large">ตรวจสอบคะแนน</a>
            <a href="#" class="w3-bar-item w3-button w3-padding-large">โปรโมชั่น</a>
            <a href="#" class="w3-bar-item w3-button w3-padding-large">ติดต่อเรา</a>
        </div>
    </div>';
    ?>

    <!--Register-->
    <br>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-10" style="font-size: 40px;">แก้ไขข้อมูลลูกค้า</div>
        </div>
    </div>


    <!------------------------ตรงกลาง------------------------>
    <?php
 





    
    $conn = new PDO("mysql:host=localhost;dbname=pointcollector;charset=utf8", "root", "");
    $sql = "SELECT * FROM user WHERE id=$ps";
    $result = $conn->query($sql);
    while ($row = $result->fetch()) {
        $id = $row[0];
        $name = $row[3];
        $lastname = $row[4];
        $email = $row[5];
        $point = $row[7];
        $tel = $row[8];
    }
    $_SESSION["id"] = $id;
    ?>

    <div class='container'>
        <br>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="panel-group">
                    <div class="panel panel-default">
                        <div class="panel-group">
                            <div class="panel panel-default">
                                <div class="panel-body" style="border: 2px solid #2D4262;
                        border-radius: 20px; padding: 5%; ">
                                    <div class="row mb-3">
                                        <label for="txt_name" class="col-sm-3 form-label">ชื่อ: <?php echo $name; ?></label>
                                        <div class="col-sm-5">
                                            <form action="updatename.php" method="post">
                                                <input type="text" class="form-control" id="inputname" name="inputname">
                                                <button type="submit" class="btn btn-primary " style="background-color: #2D4262;">อัพเดท</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="txt_last" class="col-sm-3 form-label">นามสกุล: <?php echo $lastname; ?></label>
                                        <div class="col-sm-5">
                                            <form action="updatelastname.php" method="post">
                                                <input type="text" class="form-control" id="inputlastname" name="inputlastname">
                                                <button type="submit" class="btn btn-primary " style="background-color: #2D4262;">อัพเดท</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="txt_number" class="col-sm-3 form-label">อีเมล: <?php echo $email; ?></label>
                                        <div class="col-sm-5">
                                            <form action="updateemail.php" method="post">
                                                <input type="text" class="form-control" id="inputemail" name="inputemail">
                                                <button type="submit" class="btn btn-primary" style="background-color: #2D4262;">อัพเดท</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="txt_email" class="col-sm-3 form-label">แต้ม: <?php echo $point; ?></label>
                                        <div class="col-sm-5">
                                            <form action="updatepoint.php" method="post">
                                                <tr>
                                                    <input type="number" class="form-control" id="inputpoint" name="inputpoint">
                                                    <button type="submit" class="btn btn-primary" style="background-color: #2D4262;">อัพเดท</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="txt_email" class="col-sm-3 form-label">เบอร์: <?php echo $tel; ?></label>
                                        <div class="col-sm-5">
                                            <form action="updatetel.php" method="post">
                                                <tr>
                                                    <input type="number" class="form-control" id="inputtel" name="inputtel">
                                                    <button type="submit" class="btn btn-primary" style="background-color: #2D4262;">อัพเดท</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <br>
                <br>
            </div>
        </div>
    </div>
    </div>
<?php
session_start();
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
                } else {echo '<a href="login.php"><button type="button" class="btn btn-light btn-lg" style="background-color: white;"><b>Login</b></button></a>';
                echo ' <a href="register.php"><button type="button" class="btn btn-primary btn-lg" style="background-color: #2D4262;"><b>Sign Up</b></button></a><br>';}
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
    



    <br>
    <br>
    <div class="col-md-2" style="background-color: #D09683; color: white; padding: 0.2%;">
        <center>
            <h2>เพิ่มเติม</h2>
        </center>
    </div>
    <!-- First Grid -->
    <div class="w3-row-padding w3-padding-64 w3-container">
        <div class="w3-content">
            <div class="center">
                <div class="container">


                    <?php

                    $pm = $_GET['id'];
                    $conn = new PDO("mysql:host=localhost;dbname=pointcollector;charset=utf8", "root", "");
                    $sql = "SELECT * FROM promotion WHERE promotion_id=$pm";
                    $result = $conn->query($sql);
                    while ($row = $result->fetch()) {
                        $name = $row[1];
                        $des = $row[3];
                        $point = $row[2];
                        $img = $row[4];
                    }

                    ?>



                    <center>
                        <div class="panel-group" style="width: 70% ">
                            <div class="panel panel-default" style="    
                            border: 2px solid #2D4262;
                            border-radius: 20px; padding: 5%;">
                                <div class="row mb-3">
                                    <label for="txt_name" class="col-sm-5 form-label">ชื่อโปรโมชั่น </label>
                                    <div class="col-sm-6">
                                        <?php echo $name; ?>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="txt_name" class="col-sm-5 form-label">รายละเอียด </label>
                                    <div class="col-sm-6">
                                        <?php echo $des; ?>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="txt_name" class="col-sm-5 form-label">แต้มที่ใช้ </label>
                                    <div class="col-sm-6">
                                        <?php echo $point; ?>
                                    </div>แต้ม
                                </div>
                                <div class="row mb-3">
                                    <label for="txt_name" class="col-sm-5 form-label">รูปภาพประกอบ </label>
                                    <div class="col-sm-6">
                                        <img src="promotionImg/<?php echo $img; ?>" style="width:100%">
                                    </div>
                                </div>
                                <br>

                            </div>
                            <a href="home.php" class="w3-bar-item w3-button w3-padding-large ">กลับสู่หน้าหลัก</a>
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
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

        //<Login Logout Sing Up Button>
        if (isset($_SESSION["id"])) {

          echo   '<a style="font-size: 24px;">Hello, </a>';

          echo   '<div class="w3-dropdown-hover">';
          echo        '<a style="font-size: 24px;">' . $_SESSION["username"] . '<img src="img\face_icon.png" style="width:28px;height:28px;"></a>';
          echo        '<div class="w3-dropdown-content w3-bar-block w3-border">
                                <a href="logout.php" class="w3-bar-item w3-button"><img src="img\login_icon.png" style="width:28px;height:28px;">  Logout</a>
                            </div>
                        </div>';
        } 
        else{
          echo '<a href="login.php"><button type="button" class="btn btn-light btn-lg" style="background-color: white;"><b>Login</b></button></a>';
          echo ' <a href="register.php"><button type="button" class="btn btn-primary btn-lg" style="background-color: #2D4262;"><b>Sign Up</b></button></a><br>';
        } 
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
  <br><br>
  <h1 class="container" style="font-family: kanit; font-size: 100px">Product</h1>
  <h4 class="container" style="font-family: kanit; color: #909090;">ทุกบาทที่คุณเสียไป ให้เราคืนคุณด้วยคะแนน</h4>
  <br><br>
  <div class="container">
    <?php
    $conn = new PDO("mysql:host=localhost;dbname=pointcollector;charset=utf8", "root", "") or die("Error Connect to Database");
    $strSQL = "SELECT * FROM product";
    $objQuery = $conn->query($strSQL) or die("Error Query [" . $strSQL . "]");
    ?>


    <?php
    $count = 0;
    while ($objResult = $objQuery->fetch()) {
      if ((fmod($count, 3) == 0) && ($count > 0)) {
        echo '</div>';
      }
      if (fmod($count, 3) == 0) { ?>
        <div class="w3-row-padding w3-padding-16 w3-center" id="food">
        <?php
      }  ?>
        <div class="w3-third">
          <img src="productImg/<?php echo $objResult["product_pic"]; ?>" style="width:310px;height:310px">
          <h3><?php echo $objResult["product_name"]; ?></h3>
          <center><hr style="width:70%;height:2px;color:black"></center>
          <div class="row">
            <div class="col-md-6">
              <p style="font-size: 22px;"><?php echo $objResult["product_price"]; ?> บาท</p>
            </div>
            <div class="col-md-6">
              <p style="font-size: 22px;">ได้แต้ม <?php echo $objResult["product_point"]; ?> แต้ม</p>
            </div>
          </div>
        </div>

      <?php
      $count++;
    }
      ?>

      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      
      <?php
      $conn->exec($strSQL);
      $conn = null;
      ?>
        </div>
        <br><br><br><br>
        <center><a href="home.php" class="w3-bar-item w3-button w3-padding-large "><b>กลับสู่หน้าหลัก</b></a></center>
        <br><br>
        <!--Container-->
        <div class="w3-container w3-light-gray w3-center w3-padding-64">
          <h1 class="w3-margin w3-xlarge" style="color: #b6b6b6">Chomna-Chanom</h1>
        </div>

        <script>
          // Used to toggle the menu on small screens when clicking on the menu button
          function myFunction() {
            var x = document.getElementById("navDemo");
            if (x.className.indexOf("w3-show") == -1) {
              x.className += " w3-show";
            } else {
              x.className = x.className.replace(" w3-show", "");
            }
          }
        </script>

</body>

</html>
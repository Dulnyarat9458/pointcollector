<?php
session_start();
if (((isset($_SESSION["role"])) == false) || $_SESSION["role"] == 'c') {
  Header("refresh:0;url=home.php");
  die();
}
?>
<!DOCTYPE html>
<html lang="en">
<title>สะสมแต้ม</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style>
  body {
    font-family: 'Kanit', sans-serif;
  }

  .fa-anchor,
  .fa-coffee {
    font-size: 200px
  }
</style>

<script>
  function dropdwnTopic() {
    document.getElementById("myDropdown").classList.toggle("show");
  }
</script>


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
        } else {
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

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="#" class="w3-bar-item w3-button w3-padding-large">ตรวจสอบคะแนน</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">โปรโมชั่น</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">ติดต่อเรา</a>
  </div>
  </div>
  <br>
  <div class="col-md-2" style="background-color: #D09683; color: white; padding: 0.2%;">

    <center>
      <h2>เพิ่มแต้ม</h2>
    </center>
  </div>
  <!-----------------------------เขตก่อสร้าง ----------------------------------->

  <?php

  if (isset($_SESSION["notfound"])) {
    echo '<div class="alert alert-danger"><center><strong>ไม่พบผู้ใช่รายนี้</strong> กรุณาลองอีกครั้ง</center></div>';
    unset($_SESSION["notfound"]);
  }

  if (isset($_SESSION["noValue"])) {
    echo '<div class="alert alert-danger"><center><strong>กรุณาใส่จำนวนสินค้า หรือจำนวนที่มากกว่า 0</strong></center></div>';
    unset($_SESSION["noValue"]);
  }

  if (isset($_SESSION["noProd"])) {
    echo '<div class="alert alert-danger"><center><strong>กรุณาเลือกชนิดสินค้า</strong></center></div>';
    unset($_SESSION["noProd"]);
  }

  if (isset($_SESSION["found"])) {
    echo '<div class="alert alert-success"><center><strong>เพิ่มแต้มเรียบร้อยแล้ว</strong></center></div>';
    unset($_SESSION["found"]);
  }

  ?>
  <form action="adVerify.php" method="post">
    <div class="w3-row-padding w3-padding-64 w3-container">
      <div class="w3-content">
        <div class="center">
          <div class="container">
            <center>
              <div class="panel-group" style="width: 100% ">
                <div class="panel panel-default" style="    
                            border: 2px solid #2D4262;
                            border-radius: 20px; padding: 5%;">
                  <div class="row mb-3">
                    <label for="txt_name" class="col-sm-5 form-label">เบอร์ลูกค้า: </label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="number" name="number">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="txt_name" class="col-sm-5 form-label">สินค้า: </label>
                    <div class="col-sm-6">

                      

                      

                      <select name="productN" id="productN">
                        <?php $count = 0;
                        $conn = new PDO("mysql:host=localhost;dbname=pointcollector;charset=utf8", "root", "") or die("Error Connect to Database");
                        $strSQL = "SELECT * FROM product";
                        $objQuery = $conn->query($strSQL) or die("Error Query [" . $strSQL . "]");
                        ?>
                        <option value="-">-</option>
                        <?php while ($objResult = $objQuery->fetch()) { 
                        ?>
                          <option value="<?php echo $objResult["product_id"]; 
                                          ?>"><?php echo $objResult["product_name"]; 
                                                                                    ?></option>
                        <?php } 
                        ?>
                      </select>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="txt_name" class="col-sm-5 form-label">จำนวนสินค้า: </label>
                    <div class="col-sm-6">
                      <input type="number" class="form-control" id="value" name="value">
                      <br>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12" style="text-align: center">
                      <button type="submit" class="btn btn-primary btn-lg" style="background-color: #2D4262;">เพิ่มแต้ม</button>
                    </div>
                  </div>
                </div>
            </center>
          </div>
        </div>
      </div>
  </form>

  <!-----------------------------เขตก่อสร้าง ----------------------------------->
  <br>
  <br>
  <br>
  <br>
  </div>
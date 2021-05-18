<?php
session_start();
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
<style>
  body {
    font-family: 'Kanit', sans-serif;
  }

  .fa-anchor,
  .fa-coffee {
    font-size: 200px
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
        } else{
          echo '<a href="login.php"><button type="button" class="btn btn-light btn-lg" style="background-color: white;"><b>Login</b></button></a>';
          echo ' <a href="register.php"><button type="button" class="btn btn-primary btn-lg" style="background-color: #2D4262;"><b>Sign Up</b></button></a><br>';
        } 
        ?>
      </div>





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
  <div class="container">
    <div class="row">
      <div class="col-2"></div>
      <div class="col-10" style="font-size: 70px;">ติดต่อเรา</div>
    </div>
  </div>

  <div class='container'>
    <br>
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6">

        <div class="panel-group">
          <div class="panel panel-default">
            <div class="panel-body" style="border: 2px solid #2D4262;
                        border-radius: 20px; padding: 5%; ">


              <div class="row mb-3">
                <div class="col-md-2">
                  <img src="img\call.svg" style="height: 33px;width: 33px;">
                </div>
                <div class="col-md-10">
                  <h4 style="font-family: kanit;">เบอร์โทรศัพท์ : 099-999-9999 </h4>
                </div>
              </div>

              <div class="row mb-3">
                <div class="col-md-2">
                  <img src="img\mail.png" style="height: 24px;width: 33px;">
                </div>
                <div class="col-md-10">
                  <h4 style="font-family: kanit;">Email : Chomna-Chanom@gmail.com </h4>
                </div>
              </div>

              <div class="row mb-3">
                <div class="col-md-2">
                  <img src="img\facebook.svg" style="height: 33px;width: 33px;">
                </div>
                <div class="col-md-10">
                  <h4 style="font-family: kanit;">Facebook : Chomna-Chanom </h4>
                </div>
              </div>

              <div class="row mb-3">
                <div class="col-md-2">
                  <img src="img\line.svg" style="height: 33px;width: 33px;">
                </div>
                <div class="col-md-10">
                  <h4 style="font-family: kanit;">Line : @cncn168</h4>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

    </div>

    <div class="col-md-3"></div>
    <p></p>
    <br>
    <br>
    <br>
    <br>

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
  </div>
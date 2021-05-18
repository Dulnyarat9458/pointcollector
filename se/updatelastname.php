<?php
    session_start();
    




$targert = $_SESSION["id"];
$input = $_POST["inputlastname"];

try {$conn=new PDO("mysql:host=localhost; dbname=pointcollector; charset=utf8","root","");
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
    $sql = "UPDATE user SET surname='$input' WHERE id=$targert";
  
    // Prepare statement
    $stmt = $conn->prepare($sql);
  
    // execute the query
    $stmt->execute();
  
    // echo a message to say the UPDATE succeeded
    echo $stmt->rowCount() . " records UPDATED successfully";
    Header("refresh:0;url=edituser.php");
    die();
  } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }
  
  $conn = null;





?>




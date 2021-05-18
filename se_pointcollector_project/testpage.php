<?php
session_start();
$pnum = $_POST["number"];
$productId = $_POST["productN"];
$value = $_POST["value"];
if($value<=0){
    $_SESSION["noValue"] = 1 ;
    Header("refresh:0;url=addpoint.php");
        die();
}
echo $pnum;
echo "<br>";
$conn = new PDO("mysql:host=localhost; dbname=pointcollector; charset=utf8", "root", "");
$sql = "SELECT * FROM product WHERE product_id='$productId'";
$result = $conn->query($sql);
if ($result->rowcount() == 1) {
    $data = $result->fetch(PDO::FETCH_ASSOC);
    $productpoint = $data['product_point'];
    echo "ได้เพิ่ม ";
    echo $productpoint . " แต้ม";
}
echo "<br>";
$conn2 = new PDO("mysql:host=localhost; dbname=pointcollector; charset=utf8", "root", "");
$sql2 = "SELECT * FROM user WHERE tel='$pnum'";
$result2 = $conn2->query($sql2);
if ($result2->rowcount() == 1) {
    $data = $result2->fetch(PDO::FETCH_ASSOC);
    $userpoint = $data['point'];
    $sumpoint = ($productpoint * $value) + $userpoint;
    $conn3 = new PDO("mysql:host=localhost; dbname=pointcollector; charset=utf8", "root", "");
    $conn3->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql3 = "UPDATE user SET point='$sumpoint' WHERE tel=$pnum";
    $stmt3 = $conn3->prepare($sql3);
    $stmt3->execute();
    $_SESSION["found"] = 1 ;
    Header("refresh:0;url=addpoint.php");
            die();
} else {
    $_SESSION["notfound"] = 1 ;
    Header("refresh:0;url=addpoint.php");
            die();
}

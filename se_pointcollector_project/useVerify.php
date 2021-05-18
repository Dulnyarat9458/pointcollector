<?php
session_start();
$pnum = $_POST["number"];
$promotionId = $_POST["promotionN"];
if ($promotionId == "-") {
    $_SESSION["noPro"] = 1;
    Header("refresh:0;url=usepoint.php");
    die();
}
$value = $_POST["value"];
if ($value <= 0) {
    $_SESSION["noValue"] = 1;
    Header("refresh:0;url=usepoint.php");
    die();
}
echo $pnum;
echo "<br>";
$conn = new PDO("mysql:host=localhost; dbname=pointcollector; charset=utf8", "root", "");
$sql = "SELECT * FROM promotion WHERE promotion_id='$promotionId'";
$result = $conn->query($sql);
if ($result->rowcount() == 1) {
    $data = $result->fetch(PDO::FETCH_ASSOC);
    $promotionpoint = $data['promotion_point'];
    echo "ใช้แต้มไป ";
    echo $promotionpoint . " แต้ม";
}
echo "<br>";
$conn2 = new PDO("mysql:host=localhost; dbname=pointcollector; charset=utf8", "root", "");
$sql2 = "SELECT * FROM user WHERE tel='$pnum'";
$result2 = $conn2->query($sql2);
if ($result2->rowcount() == 1) {
    $data = $result2->fetch(PDO::FETCH_ASSOC);
    $userpoint = $data['point'];
    $sumpoint = $userpoint - ($promotionpoint * $value);
    if ($sumpoint < 0) {
        $_SESSION["notEnought"] = 1;
        Header("refresh:0;url=usepoint.php");
        die();
    } else {
        $conn3 = new PDO("mysql:host=localhost; dbname=pointcollector; charset=utf8", "root", "");
        $conn3->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql3 = "UPDATE user SET point='$sumpoint' WHERE tel=$pnum";
        $stmt3 = $conn3->prepare($sql3);
        $stmt3->execute();
        $_SESSION["found"] = 1;
        Header("refresh:0;url=usepoint.php");
        die();
    }
} else {
    $_SESSION["notfound"] = 1;
    Header("refresh:0;url=usepoint.php");
    die();
}

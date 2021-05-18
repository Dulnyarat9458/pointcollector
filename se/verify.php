<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Verify</title>
    <meta charset=utf-8>
</head>

<body>

    <?php
    $u = $_POST["username"];
    $p = $_POST["password"];

    $conn = new PDO("mysql:host=localhost; dbname=pointcollector; charset=utf8", "root", "");
    $p = sha1($p);
    $p = substr($p, 0, 15);

    $sql = "SELECT * FROM user where username ='$u'and password = '$p' ";
    $result = $conn->query($sql);

    if ($result->rowcount() == 1) {
        $data = $result->fetch(PDO::FETCH_ASSOC);
        $_SESSION["username"] = $data['username'];
        $_SESSION["role"] = $data['role'];
        $_SESSION["user_id"] = $data['id'];
        $_SESSION["id"] = session_id();
        Header("refresh:0;url=home.php");
        die();
    } else {
        $_SESSION['error'] = 2;
        Header("refresh:0;url=login.php");
        die();
    }
    ?>
</body>

</html>
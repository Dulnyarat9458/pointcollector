
	<?php
	session_start();
	if (move_uploaded_file($_FILES["filUpload"]["tmp_name"], "promotionImg/" . $_FILES["filUpload"]["name"])) {
		//*** Insert Record ***//
		$conn = new PDO("mysql:host=localhost;dbname=pointcollector;charset=utf8", "root", "") or die("Error Connect to Database");
		/*$objDB = select_db("mydatabase");*/
		$strSQL = "INSERT INTO promotion ";
		$strSQL .= "(promotion_name,promotion_point,description,promotion_pic) VALUES ('" . $_POST["proName"] . "','" . $_POST["proUsePoint"] . "','" . $_POST["proDes"] . "','" . $_FILES["filUpload"]["name"] . "')";
		$objQuery = $conn->query($strSQL);
		$_SESSION['success'] = 1;
		echo 'อัพโหลดสำเร็จ';
		Header("refresh:0;url=ad_promotion.php");
		die();
	} else $_SESSION['fail'] = 1;
	Header("refresh:0;url=ad_promotion.php");
	die();
	?>
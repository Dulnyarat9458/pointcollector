
	<?php
	session_start();
	if (move_uploaded_file($_FILES["filUpload"]["tmp_name"], "productImg/" . $_FILES["filUpload"]["name"])) {
		//*** Insert Record ***//
		$conn = new PDO("mysql:host=localhost;dbname=pointcollector;charset=utf8", "root", "") or die("Error Connect to Database");
		/*$objDB = select_db("mydatabase");*/
		$strSQL = "INSERT INTO product ";
		$strSQL .= "(product_name,product_price,product_point,product_pic) VALUES ('" . $_POST["proName"] . "','" . $_POST["proPrice"] . "','" . $_POST["proPoint"] . "','" . $_FILES["filUpload"]["name"] . "')";
		$objQuery = $conn->query($strSQL);
		$_SESSION['success'] = 1;
		Header("refresh:0;url=ad_product.php");
		die();
	} else $_SESSION['fail'] = 1;
	Header("refresh:0;url=ad_product.php");
	die();
	?>

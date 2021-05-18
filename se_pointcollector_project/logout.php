<?php
session_start();
?>
<!-- ////////////ออก////////////// -->
<?php
session_destroy();
Header("refresh:0;url=home.php");
?>
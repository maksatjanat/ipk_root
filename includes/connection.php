
<?php
require("constants.php");
$con = mysqli_connect(DB_SERVER,DB_USER, DB_PASS) or die(mysql_error());
mysqli_query($con,"SET GLOBAL general_log = 1");
mysqli_query($con,"SET NAMES utf8 COLLATE utf8_unicode_ci");
mysqli_select_db($con,DB_NAME) or die("Cannot select DB");
?>
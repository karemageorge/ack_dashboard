<?php
ob_start();
include('konek.php');

$id = stripslashes($_GET['id']);

$sql = mysql_query("DELETE FROM `members` WHERE `memberID` = ".$id);

if($sql){
	header("Location: index.php");
}else{
	echo "<font color='red'>Error deleting data</font>";
}

?>
 <a href="index.php"> Back </a>
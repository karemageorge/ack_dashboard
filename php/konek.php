<?php
//	die('Cannot connect to the Database');
error_reporting(0);
define("host", 		"localhost");
define("username", 	"username");
define("password", 	"password");
define("dbname", 	"ack");


$db = mysql_connect(host,username,password);
mysql_select_db(dbname,$db) or die("ERROR: ".mysql_error());
?>
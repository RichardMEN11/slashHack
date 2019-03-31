<?php
$host="localhost"; // Hostname 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="slashhack"; //Database name  
$connection = mysqli_connect($host,$username,$password);

	if (!$connection){
		print "<h1>Connection to server failed</h1>";
		exit;
	}

	$db = mysqli_select_db($connection,$db_name);

	// if (!$db){
	// 	print "Connection to server failed";
	// 	exit;
	// }
?>

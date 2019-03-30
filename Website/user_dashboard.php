<?php 
session_start();
include "connect.php";
if(!isset($_SESSION['user'])){
	header('location: user_login.php');
}
?>
<html>
	<body>
		Dashboard
	</body>
</html>
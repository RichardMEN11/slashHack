<?php 
session_start();
include "connect.php";
if(!isset($_SESSION['admin'])){
	header('location: admin_login.php');
}
?>
<html>
	<body>
		Dashboard
		<button>Add User</button>
		<button>Add Task</button>
	</body>
</html>
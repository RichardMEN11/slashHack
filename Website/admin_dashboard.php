<?php 
session_start();
include "connect.php";
// if(!isset($_SESSION['admin'])){
// 	header('location: admin_login.php');
// }
?>
<html>

<head>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.typekit.net/ith7fqq.css">
</head>

<body>
    <nav class="navbar navbar-light bg-light nav-white">
        <a class="navbar-brand nav-text" href="#">OPEN</a>
    </nav>
    <div class="card">
        <div class="card-body">
            <div class="row">
				<div class="col">
				<img src="./assets/share.png" alt="">
				</div>
				<div class="col-8">
				<h3 class="task-title">LEARNING</h3>
				<p class="task-subtitle">Level up your skills</p>
				</div>
				<div class="col">
				<img src="./assets/Group.png" alt="">
				</div>
			</div>
        </div>
    </div>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col"> <img src="./assets/003-checklist.png" alt=""></div>
                <div class="col"> <img src="./assets/004-badge.png" alt=""></div>
                <div class="col"><img src="./assets/002-assistant.png" alt=""></div>
                <div class="col"><img src="./assets/shopping-bag.png" alt=""></div>
            </div>
        </div>
    </footer>
    Dashboard
    <a href="./create_user.php"><button>Add User</button></a>
    <a href="./create_task.php"><button>Add Task</button></a>
    <?php
	$admin = $_SESSION['admin'];
	$query = "SELECT * FROM admin INNER JOIN task ON username=creator WHERE username='$admin' ";

	$result = mysqli_query($connection, $query);
	if (!$result) {
		print "Query failed";
		exit;
	}
	$num = mysqli_num_rows($result);

	echo "<div id=generalcontainer><center><br><br><br>";
	if ($num > 0) {
		$resultpresent = true;
		echo "<font size=6>Tasks</font><br><br><br><br><br>";
	} else {
		echo "<font size=6>There is no task</font>";
	}

	if ($resultpresent) {
		echo "<table border=0 width=80%>";
		$i = 0;
		while ($row = mysqli_fetch_object($result)) {
			echo "<tr>";
			echo "<td>";
			echo "<b>" . $row->title . "</b>";
			echo "<br>";
			echo $row->description;
			echo "<br>";
			echo $row->points;
			echo "<br></td>";
			echo "</tr>";
		}
		echo '</table></div>';
	}


	mysqli_close($connection);
	?>

</body>

</html> 
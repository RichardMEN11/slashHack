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
		<a href="./create_user.php"><button>Add User</button></a>
		<a href="./create_task.php"><button>Add Task</button></a>
<?php
		$admin=$_SESSION['admin'];
        $query="SELECT * FROM admin INNER JOIN task ON username=creator WHERE username='$admin' ";

        $result=mysqli_query($connection,$query);
        if(!$result){
            print "Query failed";
            exit;
        }
        $num=mysqli_num_rows($result);

        echo "<div id=generalcontainer><center><br><br><br>";
        if($num>0){
            $resultpresent=true;
            echo "<font size=6>Tasks</font><br><br><br><br><br>";
        }else{
            echo "<font size=6>There is no task</font>";
        }
    
    if($resultpresent){
        echo "<table border=0 width=80%>";
            $i=0;
            while ($row=mysqli_fetch_object($result)) {
            	echo "<tr>";
                	echo "<td>";
                	echo "<b>".$row->title."</b>";
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
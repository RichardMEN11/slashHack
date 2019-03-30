<?php
session_start();
include "connect.php";
include "anti_injection.php";

$title =anti_injection($_POST['title']); 
$description =anti_injection($_POST['description']); 
$points = anti_injection($_POST['points']);
$creator = $_SESSION['admin'];

    $query="INSERT INTO task (title, description, points, creator) VALUES ('$title', '$description', '$points', '$creator')";
    $result=mysqli_query($connection,$query) or die("<script type='text/javascript'>alert('Couldnt add task');</script><meta http-equiv='refresh' content='0;URL=create_task.php'>");

    if (!$result){
     print "Query failed";
     exit;
 }else{
   echo "Task created successfully!";
 }

mysqli_close($connection);
header("refresh:3;url=admin_dashboard.php");   
?>
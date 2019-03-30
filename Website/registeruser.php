<?php
session_start();
include "connect.php";
include "anti_injection.php";

$username =anti_injection($_POST['username']); 
$password =md5($_POST['password']); 
$name = anti_injection($_POST['name']);

    $query="INSERT INTO user (username, password, name) VALUES ('$username', '$password', '$name')";
    $result=mysqli_query($connection,$query) or die("<script type='text/javascript'>alert('User already existing');</script><meta http-equiv='refresh' content='0;URL=user_register.php'>");

    if (!$result){
     print "Query failed";
     exit;
 }else{
   echo "User created successfully!";
   $_SESSION['user']=$username; 
 }

mysqli_close($connection);
header("refresh:3;url=user_dashboard.php");   
?>
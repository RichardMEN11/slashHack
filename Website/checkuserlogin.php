<?php 
session_start();
include "connect.php";
if(isset($_SESSION['user'])){
	header('location: user_dashboard.php');
}

$origin=$_SERVER['HTTP_REFERER'];

$myusername=$_POST['username']; 
$mypassword=md5($_POST['password']); 
$sql="SELECT * FROM admin WHERE password='$mypassword' AND username='$myusername' "; 
$result=mysqli_query($connection,$sql); 

if (!$result){
	print "Query failed";
	exit;
}    

$count=mysqli_num_rows($result);


if($count==1){ 

	$row=mysqli_fetch_object($result);
	$_SESSION['user']=$row->username; 

}else { 
	echo "<script type='text/javascript'>alert('Wrong credentials!');</script>";
} 
header("location:$origin");
?>

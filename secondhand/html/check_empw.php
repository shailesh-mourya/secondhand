<?php
session_start();
$con=mysqli_connect('localhost','root','','secondhand');
if($con){
	echo "connection successful";
}
else{
	echo "no connection ";
}

if(isset($_POST['submit'])){
	$username =$_POST['email'];
	$Password =$_POST['password'];
	$sql = " select * from user where email= '$username' and password= '$Password'";
	$query = mysqli_query($con,$sql);
	$row = mysqli_num_rows($query);
		if($row == 1){
		
			$_SESSION['id'] = $username;
			header('location:admin.php');
		}else{
			echo "login failed";
			header('location:adminlogin.php');
		}
	}

?>
<?php

session_start();
$con=mysqli_connect('localhost','root','','secondhand');
if($con){
	echo "connection successful";
}
else{
	echo "no connection ";
}



?>
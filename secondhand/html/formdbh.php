<?php
//adding database connection file link
include_once 'dbh.php';
//storing form value in variable using $_POST['nameintag'];
$firstname = $_POST['first_name'];
$lastname = $_POST['last_name'];
$email = $_POST['email'];
$pass = $_POST['pass_name'];
$phone = $_POST['pn_name'];
//storing sql command in $ql variable (use exect name which use in dbtable for columb)
//giving form value to dbtable by using variable
$sql = "INSERT INTO registrationform(first_name,last_name,email_id,password,phone_no) VALUES ('$firstname','$lastname','$email','$pass','$phone')";
//runing sql command
mysqli_query($conn,$sql);
//redirect to same page(i think so)
header("Location: registration.html?signup=success");
?>
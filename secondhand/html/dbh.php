<?php
//store servername in variable
$dbservername = "localhost";
//store dbusername in variable
$dbUsername = "root";
//store password in variable
$dbPassword = "";
//store dbname in variable
$dbName = "secondhand";
//connecting to dbms which  store in variable
$conn = mysqli_connect($dbservername,$dbUsername,$dbPassword,$dbName);

?>
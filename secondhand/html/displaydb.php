<!DOCTYPE html>
<html lang="en">

<head>
	<title>home page</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<script src="bootstrap.bundle.min.js"></script>
</head>
<body class=" p-2 text-dark " style="background-color: FloralWhite;">
<table border="2"   cellspacing="4" class="table table-bordered border-info table-striped table-hover mt-4 ">        
<h1 class="h1" style="text-align:center">User registered data</h1>
<tr style="background-color: orange;">
    
    <th>First Name:</th>
    <th>Last Name:</th>
    <th>Email Id:</th>
    <th>Phone no:</th>
    <th colspan="2">Operation</th>

</tr>    
<?php
//adding database connection file link
include("dbh.php");
//selecting table in data base and store in variable
$query = "select * from registrationform";
//run sql using mysqli_query(); and store in variable 
$data =mysqli_query($conn,$query);
//counting the row in database and store in variable
$total =mysqli_num_rows($data);
//checking if row is more than 0 it's fetch data from db
if($total!=0)
{

 while($result=mysqli_fetch_assoc($data))
    {
        //accessing data from dbtable store into <td> tag
        //for deleting data by page using <a href='delete.php?del=$result[email_id]'>
        echo "
        <tr>
        <td>".$result['first_name']."</td>
        <td>".$result['last_name']."</td>
        <td>".$result['email_id']."</td>
        <td>".$result['phone_no']."</td>
        <td><a class='btn btn-sm btn-info' href='updatedb.php?upem=$result[email_id]&fn=$result[first_name]&ln=$result[last_name]&pn=$result[phone_no]'>Edit/Update</a></td>
        <td><a class='btn btn-sm btn-danger' href='deletedb.php?delem=$result[email_id]' & onclick='return checkfordel()'>Delete</a></td>
        </tr>
        ";
    }
}
//if condition is that, there is no data then else part excute
else
{
 echo "No records found"; 
}
?>
</table>
<script>
    function checkfordel()
        {
            return Confirm('Are you sure you want to delete this record');
        }
    
</script>
</body>
</html>
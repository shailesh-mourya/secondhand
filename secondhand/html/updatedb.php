<?php
include("dbh.php");
error_reporting(0);
$vrdbcfn =$_GET['fn'];
$vrdbcln =$_GET['ln'];
$vrdbcem =$_GET['upem'];
$vrdbcpn =$_GET['pn'];
?>
<html>
<head>
<title>Update form</title>  
<link rel="stylesheet" href="../css/formcss.css">  
</head>
<body  style="background-color: FloralWhite;">
<center>
<table border=5 bgcolor="green" bordercolor="red" width="400px" >
<tr>
<th>
    <form action=""  method="GET" >
    <h2>Name</h2>
<hr color="purple">
    <label>Firstname</label>
    <input type="text"  name="namefn" id="fnameid" value="<?php echo "$vrdbcfn" ?>"><br><br> 
    <label>Lastname</label>
    <input type="text" name="nameln" id="lnameid" value="<?php echo "$vrdbcln" ?>">
<hr color="purple">
    <h2>Email Address</h2>
<hr color="purple">
    <label>Email </label>
    <input  type="email" name="nameem" id="emailid" value="<?php echo "$vrdbcem" ?>">
<hr color="purple">
    <h2>Contact number</h2>
<hr color="purple">   
<label>Phone</label>
    <input  type="phonenumber" name="namepn" id="pnid" value="<?php echo "$vrdbcpn" ?>"> 
<hr color="purple">   
    <br><br>
    <input type="submit" name="submit" id="subid">
    </form>
</th>
</tr>
</table> 
</center> 
</body>
</html>
<?php
error_reporting(0);
if($_GET['submit'])
{
    $nwupfn =$_GET['namefn'];
    $nwupln =$_GET['nameln'];
    $nwupem =$_GET['nameem'];
    $nwuppn =$_GET['namepn'];
  $vrupdata ="update registrationform set first_name='$nwupfn',last_name='$nwupln',email_id='$nwupem',phone_no='$nwuppn' where email_id='$nwupem'";
  $data = mysqli_query($conn,$vrupdata);
  if($data)
  {
      echo "<script>alert('record updated')</script>";
      ?>
    <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/secondhand/html/displaydb.php">;
    <?php
  }
  else
  {
    echo "<script>alert('failed to updated')</script>";
  }
}

?>
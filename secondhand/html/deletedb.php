<?php
include("dbh.php");
//error_reporting(0);
$emailid =$_GET['delem'];
$delquery ="delete from registrationform where email_id ='$emailid'";
$data =mysqli_query($conn,$delquery);
if($data)
{
    echo "<script>alert('Record has deleted from db')</script>";
    ?>
    <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/secondhand/html/displaydb.php">;
    <?php
}
else
{
    echo "<script>alert('failed Record has deleted from db')</script>";

}


?>
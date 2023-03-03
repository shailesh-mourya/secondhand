
<?php
 include "connection.php";
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign in page</title>
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
	<script src="../bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>
<body style="background-color: FloralWhite;">
  
          <div class="   mt-5 " >
              
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post" style="max-width: 300px; margin: auto;">
                <h1 class="h3 ">Admin login</h1>
                <div class="form-group ">
                         <label for="email">Email</label>
                        <input type="email" name="email" class="form-control " id="email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                   <input type="password"  name="password" class="form-control " id="password">
           </div>
           <div class="form-group">
               <button class="btn btn-danger mt-2" value="submit" name="submit"> submit</button>
           </div>
            </form>
          </div>          

</body>
</html>
<?php
#creating function to filter the user input
function input_filter($data)
{
 $data=trim($data);
 $data=stripslashes($data);
 $data=htmlspecialchars($data);
 return $data;
}
if(isset($_POST['submit']))
{
    #filtering user input
    $AdminName=input_filter($_POST['email']);
    $AdminPass=input_filter($_POST['password']);

    #escaping special symbols using in sql statement
    $AdminName=mysqli_real_escape_string($con,$AdminName);
    $AdminPass=mysqli_real_escape_string($con,$AdminPass);

    #query template
    $query="SELECT * FROM `admin` WHERE `email`= ? AND `password`= ? ";

    #prepared statement
    if($stmt=mysqli_prepare($con,$query))
    {
        mysqli_stmt_bind_param($stmt,"ss",$AdminName,$AdminPass);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        if(mysqli_stmt_num_rows($stmt)==1)
        {
            session_start();
            $_SESSION['AdminLoginId']=$AdminName;
            header("location:admin.php");
        }
        else
        {
        echo "<script> alert('Invalid admin email or password');</script>";
        }
        mysqli_stmt_close($stmt);
    }
    else
    {
        echo "<script> alert('sql query cannot be prepared');</script>";
    }
}












?>
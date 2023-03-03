<?php
//This code shows how to Upload And Insert Image Into Mysql Database Using Php Html.
//connecting to uploadFile database.
$conn = mysqli_connect("localhost", "root", "", "secondhand");
if($conn){
//if connection has been established display connected.
echo "connected";
}
//if button with the name uploadfilesub has been clicked
if(isset($_POST['uploadfilesub'])){
//declaring variables
$filename = $_FILES['uploadfile']['name'];
$filetmpname = $_FILES['uploadfile']['tmp_name'];
$bookname = $_POST['bookname']; 
$originalrs = $_POST['original'];
$secondhandrs = $_POST['secondhand'];
$classname = $_POST['class'];
//folder where images will be uploaded
$folder = 'books_images/'; 
//function for saving the uploaded images in a specific folder
move_uploaded_file($filetmpname, $folder.$filename);
//inserting image details (ie image name) in the database
$sql = "INSERT INTO `home_page`(`group_id`, `id`, `imagename`, `book_name`, `original_price`, `secondhand_price`, `details`) VALUES ('$classname',UUID(),'$filename','$bookname','$originalrs','$secondhandrs','[value-7]')";
$qry = mysqli_query($conn,  $sql);
if( $qry) {
echo "</br><script> alert('image uploaded');</script>"; 
}
} 
?>  
<!DOCTYPE html>
<html>
<head>
	<title>choose</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<script src="bootstrap.bundle.min.js"></script>
</head>
<body class=" p-2 text-dark " style="background-color: FloralWhite;">
<!--Make sure to put "enctype="multipart/form-data" inside form tag when uploading files -->
<div class="form-group " >
<form action="" method="post" enctype="multipart/form-data" style="max-width: 300px; margin: auto;" >
<!--input tag for file types should have a "type" attribute with value "file"-->
<label for="class" class="label ">Select a class:</label>
  <select name="class" class="form-control-sm">
    <option value="home_page">home_page</option>
    <option value="class_twelve">class_twelve</option>
    <option value="class_ten">class_ten</option>
    <option value="7th">7th</option>
    <option value="8th">8th</option>
  </select><br>
<input type="file" name="uploadfile" class="form-control-file mt-3" /><br>
<label for="bookname" class="mt-3">Book name:</label>
<input type="text" name="bookname" class="form-control-sm mx-3"/><br>
<label for="original" class="label mt-3">Original price:</label>
<input type="number" name="original" placeholder="original price" class="form-control-sm " /><br>
<label for="original" class="lable mt-3">Selling price:</label>
<input type="number" name="secondhand" placeholder="selling price" class="form-control-sm mx-2" /><br>
<input type="submit" name="uploadfilesub" value="upload" class="btn btn-danger mt-3 "  />

</form>
</div>
</body>
</html> 

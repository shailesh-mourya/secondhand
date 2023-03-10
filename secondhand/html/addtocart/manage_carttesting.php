<?php
session_start();

if($_SERVER["REQUEST_METHOD"]=="POST")
{
   
    if(isset($_SESSION['customerLoginId']))
    {
        if(isset($_POST['Add_To_Cart']))
        {
            $conn = mysqli_connect("localhost", "root", "", "secondhand");
            $query = "SELECT*FROM `cart` where cart_email='$_SESSION[customerLoginId]' AND product_id='$_POST[book_id]'; ";
            $query_run = mysqli_query($conn, $query);
	       if (mysqli_num_rows($query_run) > 0)
           {
            echo "<script> alert('Already in Cart');</script>"; 
           }
           else
           {
            $conn = mysqli_connect("localhost", "root", "", "secondhand");
            $query = "INSERT INTO `cart`(`cart_email`, `product_id`, `product_name`, `original_price`, `secondhand_price`, `quantity`) VALUES ('$_SESSION[customerLoginId]','$_POST[book_id]','$_POST[book_n]','$_POST[original_rs]','$_POST[secondhand_rs]','1')";
            $query_run = mysqli_query($conn, $query);
            echo "<script> alert('Added to Cart');</script>"; 

           }

        }
        elseif (isset($_POST['Buy_To_Cart']))
         {
             $_SESSION['buyProductId']=$_POST['book_id'];
             $_SESSION['buyProductName']=$_POST['book_n'];
             $_SESSION['buyProductPrice']=$_POST['secondhand_rs'];
             
            echo "<script>
                window.location.href='paymentid.php';
                 </script>";   
        }
        if(isset($_POST['Buy_Item']))
        {
            $_SESSION['buyProductId']=$_POST['mcidkey'];
            $_SESSION['buyProductName']=$_POST['mcBUYnamekey'];
            $_SESSION['buyProductPrice']=$_POST['mcBUYpricekey'];
            
             
            echo "<script>
                window.location.href='../paymentid.php';
                 </script>"; 
        }
        if(isset($_POST['Remove_Item']))
        {
            $conn = mysqli_connect("localhost", "root", "", "secondhand");
            $query = "DELETE FROM `cart` WHERE cart_email='$_SESSION[customerLoginId]' AND product_id='$_POST[mcidkey]' ";
            $query_run = mysqli_query($conn, $query);
            echo "<script> alert('product remove');</script>";
            echo "<script>
        window.location.href='mycart.php';
         </script>";
        }
        
        
    
    }
    else
    {
        echo "<script>
        window.location.href='login.php';
         </script>"; 
    }
    
}


?>
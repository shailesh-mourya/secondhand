<?php
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST")
{
   
    if(isset($_SESSION['customerLoginId']))
    {
        if(isset($_POST['Add_To_Cart']))
        {
            if(isset($_SESSION['cart']))
            {
                $myitems=array_column($_SESSION['cart'],'idkey');
                if(in_array($_POST['book_id'],$myitems))
                {
                    echo "<script> alert('item already added');
                             
                          </script>";
                }
                else
                {
                    $count=count($_SESSION['cart']);
                    $_SESSION['cart'][$count]=array('idkey'=>$_POST['book_id'],'namekey'=>$_POST['book_n'],'originalkey'=>$_POST['original_rs'],'secondhandkey'=>$_POST['secondhand_rs'],'Quantity'=>1);
                    echo "<script>
                          alert('item added');
                                
                          </script>"; 
                    
                    //adding database connection file link
                    include_once 'dbh.php';
                    //storing form value in variable using $_POST['nameintag'];
                    $add_id = $_SESSION['customerLoginId'];
                    $add_productid = $_POST['book_id'];
                    //storing sql command in $ql variable (use exect name which use in dbtable for columb)
                    //giving form value to dbtable by using variable
                    $sql = "INSERT INTO `order_table`(`customer_email`, `product_id`) VALUES ('$add_id','$add_productid')";
                    //runing sql command
                    mysqli_query($conn,$sql);


                }
            }
            else
            {
                $_SESSION['cart'][0]=array('idkey'=>$_POST['book_id'],'namekey'=>$_POST['book_n'],'originalkey'=>$_POST['original_rs'],'secondhandkey'=>$_POST['secondhand_rs'],'Quantity'=>1);
                echo "<script>
                          alert('item added');
                               
                          </script>";

                //adding database connection file link
                include_once 'dbh.php';
                //storing form value in variable using $_POST['nameintag'];
                $add_id = $_SESSION['customerLoginId'];
                $add_productid = $_POST['book_id'];
                //storing sql command in $ql variable (use exect name which use in dbtable for columb)
                //giving form value to dbtable by using variable
                $sql = "INSERT INTO `order_table`(`customer_email`, `product_id`) VALUES ('$add_id','$add_productid')";
                //runing sql command
                mysqli_query($conn,$sql);          
            }
        }
        if(isset($_POST['Remove_Item']))
        {
            foreach($_SESSION['cart'] as $key=>$value)
            {
              
                if($value['idkey']==$_POST['mcidkey'])
                {
                    unset($_SESSION['cart'][$key]);
                    $_SESSION['cart']=array_values($_SESSION['cart']);
                    echo "<script>
                          alert('item remove');
                          window.location.href='mycart.php';
                          </script>";
                }
                else
                {
                    echo "key not match";
                }
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
        elseif (isset($_POST['Buy_Item']))
         {
            $_SESSION['buyProductId']=$_POST['mcidkey'];
            $_SESSION['buyProductName']=$_POST['mcBUYnamekey'];
            $_SESSION['buyProductPrice']=$_POST['mcBUYpricekey'];
            
             
            echo "<script>
                window.location.href='../paymentid.php';
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
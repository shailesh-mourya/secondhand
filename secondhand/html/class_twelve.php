<?php include 'addtocart/manage_cart.php';?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  <link href="../css/bootstrap.min.css" rel="stylesheet">
	<script src="bootstrap.bundle.min.js"></script>
</head>

<body class=" p-2 text-dark " style="background-color: FloralWhite;">
  
<?php include 'header.php'; ?>

    <?php
    $conn = mysqli_connect("localhost", "root", "", "secondhand");
    $query = "SELECT * FROM `home_page` WHERE group_id='class_twelve'";
    $query_run = mysqli_query($conn, $query);
    if (mysqli_num_rows($query_run) > 0) {
        foreach ($query_run as $row) {
    ?>

<figure class="figure m-2 " style="border: 1px solid #000">
    <div class="" style="background-color: AliceBlue; " >
           <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
            <img src="<?php echo "books_images/".$row['imagename'] ?>" alt="Cinque Terre" height="160px" width="150px"
                class=" figure-img m-1 ">
            <figcaption class="figure-caption px-2" style="color: black;"><?php echo $row['book_name']; ?></figcaption>
            <figcaption class="figure-caption px-2" style="color: black;">original price Rs
                <?php echo $row['original_price']; ?></figcaption>
            <figcaption class="figure-caption px-2" style="color: black;">Sell price Rs
                <?php echo $row['secondhand_price']; ?></figcaption>
            <button type="submit" name="Add_To_Cart" class="btn btn-sm  px-2 m-1" style="background-color: Green;">Add to cart</button> 
            <button type="submit" name="Buy_To_Cart" class="btn btn-sm" style="background-color: Gold;">Buy</button>
            <input type="hidden" name="book_id" value=" <?php echo $row['id']; ?>">
            <input type="hidden" name="book_n" value=" <?php echo $row['book_name']; ?>">
            <input type="hidden" name="original_rs" value=" <?php echo $row['original_price']; ?>">
            <input type="hidden" name="secondhand_rs" value=" <?php echo $row['secondhand_price']; ?>">
            </form>
    </div>
    </figure>

    <?php
        }
    } else {
        ?>

    <h3>no book is available</h3>

    <?php
    }
    ?>

</body>

</html>
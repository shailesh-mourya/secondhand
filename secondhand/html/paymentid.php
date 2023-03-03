<!DOCTYPE html>
<html lang="en">
<?php
session_start();

?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Document</title>
</head>

<body style="background-color: FloralWhite;">
    <div class=" container shadow-lg p-3 mt-3 bg-body rounded" style="max-width: 300px; margin: auto;">

        <form action="" method="post">
            <h1 class="h3 text-center text-light" style="background-color:blueviolet;">confirmation</h1>
            <div class="form-group ">
                <label for="email">Email Id:</label>
                <input type="email" name="email" class="form-control " id="email" value="<?php echo $_SESSION['customerLoginId']; ?>" disabled>
            </div>
            <div class="form-group">
                <label for="phone">Phone No:</label>
                <input type="number" name="phone" class="form-control " id="password" value="<?php echo $_SESSION['customerNumber']; ?>" disabled>
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <textarea  name="address" class="form-control " id="address"  disabled>
                <?php echo $_SESSION['customerAddress']; ?>
                    </textarea>

            </div>
            <div class="form-group">
                <label  for="productid">Product Name</label>
                <input type="text" name="productname" class="form-control " id="productname" value="<?php echo $_SESSION['buyProductName']; ?>" disabled>
            </div>
            <div class="form-group">
                <label  for="productid">Product Id</label>
                <input type="text" name="productid" class="form-control " id="productid" value="<?php echo $_SESSION['buyProductId']; ?>" disabled>
            </div>
            <div class="form-group ">
                <label  for="Price">Price:</label>
                <div class="text-center small">
                <h6 class="small fw-normal fst-italic">Product:______Rs&ensp;<?php echo $_SESSION['buyProductPrice']; ?></h6>
                <h6 class="small fw-normal fst-italic">GST:___________Rs&ensp;<?php echo "50"; ?></h6>
                <h6 class="small fw-normal fst-italic">Dilvary:_______Rs&ensp;<?php echo "50"; ?></h6>
                <h6 class="small fw-normal fst-italic">Total:_________Rs&ensp;<?php echo $_SESSION['buyProductPrice']+50+50; ?></h6>
            
                </div>    
            </div>
            <div class="form-group d-grid gap-2">
                <button class="btn btn-danger mt-2" value="submit" name="submit"> payment</button>
            </div>
        </form>
    </div>

</body>

</html>

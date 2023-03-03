<?php
  session_start(); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap.bundle.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar navbar-light" style="background-color: Gainsboro; border-radius: 5%;">
			<div class="container-fluid">
				<a class="navbar-brand" href="#">Secondhand.com</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
					data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
					aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse " id="navbarSupportedContent">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="#">Home</a>
						</li>
						<li class="nav-item dropdown ">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
								data-bs-toggle="dropdown" >
								class
							</a>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
								<li><a class="dropdown-item" href="class_ten.php">tenth</a></li>
								<li><a class="dropdown-item" href="class_twelve.php">twelveth</a></li>
							</ul>
						</li>
            <?php
            if (isset($_SESSION['customerLoginId'])) {
              ?>
            <li class="nav-item">
							<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
								<button class="btn nav-link" name="cLogout">Logout</button>
							</form>
						</li>
            <?php
            }
            ?>
						<li class="nav-item">
							<a class="nav-link " aria-current="page" href="form.html">Register</a>
						</li>

					</ul>
          <?php 
          $count=0;
          if(isset($_SESSION['cart']))
          {
            $count=count($_SESSION['cart']);
          }
          ?>
			<div class="px-2">	<a href=""  class="btn btn-sm btn-outline-danger">my cart(<?php echo $count; ?>)</a> </div>
				</div>
				</div>
			
	</nav>
  <div class="container-fluid">
    
        <table border="2" cellspacing="2" class="table table-bordered border-info table-striped table-hover mt-4 "> 
        
               <tr>
                   <th>No:</th>
                   <th>Book Name</th>
                   <th>original price</th>
                   <th>secondhand price</th>
                   <th>Quantity</th>
                   <th>Operation</th>
                   
               </tr>
               <?php
                 $total=0;
                 if(isset($_SESSION['cart']))
                 {
                     foreach($_SESSION['cart'] as $key=>$value)
                     {
                      
                         $total=$total+$value['secondhandkey'];
                         echo "
                               <tr>
                                 <td>1</td>
                                 <td>$value[namekey]</td>
                                 <td>$value[originalkey]</td>
                                 <td>$value[secondhandkey]</td>
                                 <td>$value[Quantity]</td>
                                 <td>
                                 <form action='manage_cart.php' method='POST'>
                                   <button type='submit' name='Buy_Item' class='btn btn-sm' style='background-color: Gold;'>Buy</button>
                                   <button type='submit' name='Remove_Item' class='btn btn-sm' style='background-color: red;'>Remove</button>
                                   <input type='hidden' name='mcBUYnamekey' value='$value[namekey]'>
                                   <input type='hidden' name='mcidkey' value='$value[idkey]'>
                                   <input type='hidden' name='mcBUYpricekey' value='$value[secondhandkey]'>
                                 </form>
                                 </td>
                               </tr>
                              ";
                     }
                 }               
                
               ?>     
            
                 
         
        </table>

    </div>
 
    <?php
						if (isset($_POST['cLogout'])) {

							session_destroy();
							header("location:../hpage.php");
						?>
							<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/secondhand/html/hpage.php">;
						<?php
						}


						?>
</body>
</html>
<?php 
   if(isset($_SESSION['customerLoginId'])){
	$con = mysqli_connect("localhost", "root", "", "secondhand");
	$quer = "SELECT*FROM registrationform where email_id='$_SESSION[customerLoginId]' ";
	$query_run = mysqli_query($con, $quer);
	if (mysqli_num_rows($query_run) > 0) {
		foreach ($query_run as $ro){
			$_SESSION['customerLoginName']=$ro['first_name'];
			$_SESSION['customerNumber']=$ro['phone_no'];
			$_SESSION['customerAddress']=$ro['cu_address'];

		}

   }
}
?>
<nav class="navbar navbar-expand-lg navbar navbar-light" style="background-color: Gainsboro; border-radius: 5%;">
		<div class="container-fluid">
			<a class="navbar-brand" href="#">Secondhand.com</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse " id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="hpage.php">Home</a>
					</li>
					<li class="nav-item dropdown ">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
							class
						</a>
						<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
							<li><a class="dropdown-item" href="class_ten.php">tenth</a></li>
							<li><a class="dropdown-item" href="class_twelve.php">twelveth</a></li>
						</ul>
					</li>
					<?php
					if (!isset($_SESSION['customerLoginId'])) {
					?>
						<li class="nav-item">
							<a class="nav-link " aria-current="page" href="login.php">Login</a>
						</li>
					<?php
					}
					if (!isset($_SESSION['customerLoginId'])) {
					?>
						<li class="nav-item">
							<a class="nav-link " aria-current="page" href="form.html">Register</a>
						</li>

					<?php
					}
					if (isset($_SESSION['customerLoginId'])) {
					?>
						<li class="nav-item">
							<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
								<button class="btn nav-link" name="cLogout">Logout</button>
							</form>
						</li>
						<?php
						if (isset($_POST['cLogout'])) {

							session_destroy();
							header("location:hpage.php");
						?>
							<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/secondhand/html/hpage.php">;
						<?php
						}


						?>
					<?php
					}
					
				if(isset($_SESSION['customerLoginId']))	{
					?>
                <li>
				<button class="btn nav-link" name="cLogout"><?php  echo $_SESSION['customerLoginName']; ?><img src="user-circle-solid.png"/></button>
				</li>
				<?php
				}
				?>

				</ul>
				<form class="d-flex ">
					<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
					<button class="btn btn-outline-success" type="submit" id="searchid">Search</button>
				</form>
				<?php
				$count = 0;
				if (isset($_SESSION['cart'])) {
					$count = count($_SESSION['cart']);
				}
				if (isset($_SESSION['customerLoginId'])) {
				?>
					<div class="px-2" id="shownmycart"> <a href="addtocart/mycart.php" class="btn btn-sm btn-outline-danger">my cart(<?php echo $count; ?>)</a> </div>
				<?php
				}
				?>



			</div>
		</div>

	</nav>
    

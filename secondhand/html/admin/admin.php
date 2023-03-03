<?php 
session_start();
if(!isset($_SESSION['AdminLoginId'])){
    header('location:adminlogin.php');
}


?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Drop Down Sidebar Menu | CodingLab </title>-->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="admincss.css">
    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar close">
    <div class="logo-details">
        <i class='bx bx-smile'></i>
      <span class="logo_name">secondhand</span>
    </div>
    <ul class="nav-links">
      <li>
        <a href="#">
          <i class='bx bx-grid-alt' ></i>
          <span class="link_name">Dashboard</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Category</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-book-reader'></i>
            <span class="link_name">class</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">class</a></li>
          <li><a href="../class_ten.php">tenth</a></li>
          <li><a href="../class_twelve.php">twelveth</a></li>
          <li><a href="#">other</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-upload' ></i>
            <span class="link_name">upload</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">upload</a></li>
          <li><a href="#">home books</a> </li>
          <li><a href="../class_book.php">class books</a></li>
          <li><a href="../displaydb.php">user data</a></li>
        </ul>
      </li>
      <li>
      <li>
        <a href="#">
          <i class='bx bxs-box'></i>
          <span class="link_name">Complaint</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Complaint</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-plug' ></i>
            <span class="link_name">Source file</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Source file</a></li>
          <li><a href="#">html</a></li>
          <li><a href="#">css</a></li>
          <li><a href="#">sql</a></li>
        </ul>
      </li>

      <li>
        <a href="#">
          <i class='bx bx-cog' ></i>
          <span class="link_name">Setting</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Setting</a></li>
        </ul>
      </li>
      <li>
    <div class="profile-details">
      <div class="profile-content">
        <!--<img src="image/profile.jpg" alt="profileImg">-->
      </div>
      <div class="name-job">
        <div class="profile_name" >shailesh</div>
        <div class="job">Web Desginer</div>
      </div>
      <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
      <button class="btn btn-danger btn-sm"  name="Logout"><i class='bx bx-log-out' ></i></button>
      </form>
    </div>
  </li>
</ul>
  </div>
  <section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu' ></i></a>
      <span class="text">wellcome</span>
     
    </div>
   <input type="search" class="" placeholder="text" style="margin-left: 20px; border-radius: 5px; text-align: center;">
   <button type="button" class="" value="submit" style="background-color: aquamarine; border-radius: 5px;">search</button>
  </section>
  <script>
  let arrow = document.querySelectorAll(".arrow");
  for (var i = 0; i < arrow.length; i++) {
    arrow[i].addEventListener("click", (e)=>{
   let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
   arrowParent.classList.toggle("showMenu");
    });
  }
  let sidebar = document.querySelector(".sidebar");
  let sidebarBtn = document.querySelector(".bx-menu");
  console.log(sidebarBtn);
  sidebarBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("close");
  });
  </script>

<?php
if(isset($_POST['Logout']))
{
  
  session_destroy();
  header("location:adminlogin.php");
  ?>
  <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/secondhand/html/admin/admin.php">;
  <?php
}


?>
</body>
</html>
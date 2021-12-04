<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin Panel</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">


  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/fontawesome/all.css" rel="stylesheet" />
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.1.1/bootstrap-social.min.css" integrity="sha256-rFMLRbqAytD9ic/37Rnzr2Ycy/RlpxE5QH52h7VoIZo=" crossorigin="anonymous" />

  <!-- Custom styles for this template -->
  <link href="css/shop-homepage.css" rel="stylesheet">
  <link href="css/menu.css" rel="stylesheet">

<!-- CSS -->
<link href='select2/dist/css/select2.min.css' rel='stylesheet' type='text/css'>
</head>

<body>
<nav class="navbar fixed-top navbar-light bg-white navbar-offcanvas">
<button class="navbar-toggler" type="button" id="navToggle"><span class="navbar-toggler-icon"></span> </button>

<a class="navbar-brand mr-auto ml-auto" href="#">Employee Admin Pannel</a>



<div class="navbar-collapse offcanvas-collapse" >
<ul class="navbar-nav mr-auto ml-2">

<li class="nav-item active">
<a class="nav-link text-white" href="index.php?clinic=clinic">Approve Clinic</a>
</li>
<div class="dropdown-divider"></div> 
<li class="nav-item">
<a class="nav-link text-white" href="index.php?doctor=doctor">Approve Doctor</a>
</li>
<li class="nav-item">
<a class="nav-link text-white" href="index.php?assigndoctor=assigndoctor">Assign Doctor</a>
</li>
</ul>
</div>
<span class="navbar-text order-sm-6 d-none d-sm-block">
	 <?php if (!isset($_SESSION['email'])) 
    { ?>
          <a href="login.php" style="text-decoration:none;">
              <span class="fa fa-sign-in-alt"></span> Login
          </a>
	<?php }else{ ?>
   <a href="logout.php" style="text-decoration:none;">
              <span class="glyphicon glyphicon-log-out"></span> Logout
          </a>

	<?php } ?>
      </span>
</nav>

   
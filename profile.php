<?php
if(isset($_POST["profile"])){
	$email = $_POST["email"];
	//$doctor = $_POST["doctor"];
	//$id = $_POST["id"];											
	//echo "$email";
	//die ();
	include_once "includes/connect.php";
	session_start();
	$query=mysqli_query($conn,"SELECT * FROM user where email='$email'")or die(mysqli_error());
	$row=mysqli_fetch_array($query);
}			 
?>  
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>QuicDoc</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.12.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/fontawesome/all.css" rel="stylesheet" />
		<link href='select2/dist/css/select2.min.css' rel='stylesheet' type='text/css'>
		<style>
		.desktop p {
			margin:0em;
		}
		</style>
    </head>
    <body id="page-top">
        <!-- Navigation-->
		<?php include_once("includes/header.php");?>
        <header class="masthead text-dark">
			<div class="container-fluid">
				<div class="ml-2 p-2 bg-white" style="margin-top:-80px;">
					<div class="row">
						<div class="container-fluid">
							<div class="content-panel">
								<div style="overflow-x:auto">
									<br>
									<center><h3><i class="fa fa-angle-right"></i>Dispensary Doctor Profile</h3></center>
									<hr>
										<div class="profile-input-field">
											<form method="post" action="#">
											  <div class="form-group">
												<label>Doctor Name</label>
												<center><input type="text" class="form-control" name="name" style="text-align: center;width:20em;" readonly value="<?php echo $row['name']; ?>" required /></center>
											  </div>
											  <div class="form-group">
												<label>Doctor Email</label>
												<center><input type="text" class="form-control" name="email" style="text-align: center;width:20em;" readonly required value="<?php echo $row['email']; ?>" /></center>
											  </div>
											  <div class="form-group">
												<center><label>Doctor Contact Number</label>
												<input type="text" class="form-control" name="mobile" style="text-align: center;width:20em;" readonly value="<?php echo $row['mobile']; ?>"></center>
											  </div>
											  <div class="form-group">
												<a href="index.php"><input type="button" value="Back"   class="btn btn-primary" style="text-align: center;width:20em;" onclick="index.php"></button>
												</a><br><br>
											  </div>
											</form>
										</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
        </header>
       <?php include_once("includes/footer.php");?>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
		<script src='select2/dist/js/select2.min.js' type='text/javascript'></script>
</html>
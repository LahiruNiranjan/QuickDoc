<?php    
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if ($_POST["doctorid"] == "") {
        array_push($errors, "Select a doctor");
    }
    if ($_POST["clinicid"] == "") {
        array_push($errors, "Select a clinic");
  }
  if (!isset($_POST["slot"])) {
    array_push($errors, "Enter slots");
}
    if (count($errors) == 0) {
        $stmt = $conn->prepare("INSERT INTO venue (doctorid,clinicid,slot,time, mon,tue,wed,thurs,fri,sat,sun) VALUES (?,?,?,?,?,?,?,?,?,?,?)");
        $stmt->bind_param("iiissssssss", $doctorid, $clinicid, $slot, $time, $monday, $tuesday, $wednesday, $thursday, $friday, $saturday, $sunday);
        $doctorid = test_input($_POST["doctorid"]);
        $clinicid = test_input($_POST["clinicid"]);
        $slot = test_input($_POST["slot"]);
        $time = test_input($_POST["time"]);
        if(isset($_POST["wednesday"]))
        $wednesday = test_input($_POST["wednesday"]);
        else
        $wednesday="";
        if(isset($_POST["thursday"]))
        $thursday = test_input($_POST["thursday"]);
        else
        $thursday="";
        if(isset($_POST["friday"]))
        $friday = test_input($_POST["friday"]);
        else
        $friday="";
        if(isset($_POST["monday"]))
        $monday = test_input($_POST["monday"]);
        else
        $monday="";
        if(isset($_POST["tuesday"]))
        $tuesday = test_input($_POST["tuesday"]);
        else
        $tuesday="";
        if(isset($_POST["saturday"]))
        $saturday = test_input($_POST["saturday"]);
        else
        $saturday="";
        if(isset($_POST["sunday"]))
        $sunday = test_input($_POST["sunday"]);
        else
        $sunday="";
        if($stmt->execute())
        $_SESSION['success']="Successfully Added";
        else
        array_push($errors, "Failed to set");
    }  
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>QuickDoc</title>
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

<form action="./index.php?assigndoctor=assigndoctor " method="POST">
<div class="container">
<?php include('errors.php'); ?>
<?php if (isset($_SESSION['success'])): ?>
        <div class="alert alert-success">
          <?php
            echo $_SESSION['success'];
            unset($_SESSION['success']);
          ?>
        </div>
 <?php endif;?>
<div class="row">
<div class="col-lg-1">&nbsp;
</div>
<div class="col-lg-10">		
	<div class="col-sm-12">
		<div class="form-group">
			<label>Select Hospital</label>
				<select class="form-control selUser" id="clinicid" name="clinicid" required >
					<option value="">Select Hospital</option>
					<?php
					$sql = "SELECT * FROM clinic ";
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) {
							?>
							<option value="<?php echo $row['id'];?>"><?php echo $row['clinicname'];?>(<?php echo $row['area'];?>)</option>
							<?php 
						}
					}
					?>
				</select>
		</div>
	</div>
	<div class="col-sm-12">
	<div class="form-group">
		<label>Select Doctor</label>
		<select class="form-control selUser" id="doctorid" name="doctorid" required >
			<option value="">Select Doctor</option>
			<?php
            $sql = "SELECT * FROM doctor";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    ?>
                    <option value="<?php echo $row['id'];?>"><?php echo $row['name'];?> : <?php echo $row['regno'];?>(<?php echo $row['specialization'];?>)</option>
                     <?php 
                }
            }
            ?>
		</select>
    </div>
	</div>
	<div class="col-sm-12">
        <div class="form-label-group">
			<label for="slot">Slots</label>
			<input type="number"  id="slot" class="form-control" placeholder="Enter number of Slots" name="slot" required>
        </div>
	</div>&nbsp;
	<div class="col-sm-12">
        <div class="form-label-group">
			<label for="slot">Time per patient</label>
			<input type="text"  id="slot" class="form-control" placeholder="Enter Time" name="time" required>                  
        </div>
	</div>&nbsp;
    <div class="row ">
				<div class="col" >&nbsp;&nbsp;
					<input type="checkbox" onclick="dynInput(this);" id="monday" />&nbsp;
					<label class="form-check-label" for="monday">Monday</label>
                </div>
                <div  class="col">&nbsp;&nbsp;
					<input type="checkbox"  onclick="dynInput(this);" id="tuesday" />&nbsp;
					<label class="form-check-label" for="tuesday">Tuesday</label>
                </div  >
                  <div  class="col">
					<input type="checkbox"  onclick="dynInput(this);" id="wednesday" />&nbsp;
					<label class="form-check-label" for="wednesday">Wednesday</label>
                </div>
                <div  class="col">&nbsp;&nbsp;&nbsp;
					<input type="checkbox"  onclick="dynInput(this);" id="thursday" />&nbsp;
					<label class="form-check-label" for="thursday">Thursday</label>
                </div>
                <div  class="col">&nbsp;&nbsp;
					<input type="checkbox" onclick="dynInput(this);" id="friday" />&nbsp;
					<label class="form-check-label" for="friday">Friday</label>
                </div >
                <div  class="col">&nbsp;&nbsp;
					<input type="checkbox"  onclick="dynInput(this);" id="saturday" />&nbsp;
					<label class="form-check-label" for="saturday">Saturday</label>
                </div>
                <div  class="col">&nbsp;&nbsp;
					<input type="checkbox" onclick="dynInput(this);" id="sunday" />&nbsp;
					<label class="form-check-label" for="sunday">Sunday</label>
                </div>&nbsp;&nbsp;
        <p id="insertinputs"></p>
        <p id="insertinputs"></p>           
            <div class="col-sm-12">	
				<center>			
                <div class="form-group">
                     <button type="submit" class="btn btn-secondary btn-lg btn-block" name="submit">Assign Doctor</button>
                </div>
				</center>
            </div> 
	</div>
	<div class="col-lg-1">&nbsp;</div>
</form>
</body>
</html>

<?php
include_once "includes/connect.php";
	//echo '<script>alert('$_POST['doctor']')</script>' ;
	if(isset($_POST["assign"])){
		//$doctor = $rows['doctor'];
		//echo $_POST['doctor'] ;
		$hospital = $_POST["hospital"];
		$doctor = $_POST["doctor"];
		$id = $_POST["id"];
		//echo "$hospital,$id,$doctor";
		//die ();
		$sql3="UPDATE book SET doctorid='$doctor',clinicid='$hospital' , status=1 WHERE id='$id'";
		//$sql = "SELECT * FROM book where date = '$date' and doctorid=$doctorid and clinicid = $clinicid and appointmentstatus!=0 order by tokenno desc";
		//$t = implode($result3);
		if($conn->query($sql3) === TRUE){
			echo '<script>alert("Assign Patient Successfully")</script>' ;
			echo("<script>location.href = 'viewpatient.php';</script>");
			//exit();
		}else{
			echo '<script>alert("Assign Patient Fail")</script>' ;
			echo("<script>location.href = 'viewpatient.php';</script>");
		}
	}														
?>
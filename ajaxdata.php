<?php 
include_once"includes/connect.php";

if (isset($_POST['clinicid'])) {
	//$query = "SELECT DISTINCT  doctor.name FROM venue, doctor WHERE venue.doctorid=doctor.id AND venue.clinicid=".$_POST['clinicid'];
	$query="SELECT DISTINCT doctor.id, doctor.name ,doctor.specialization  FROM venue, doctor  WHERE venue.doctorid=doctor.id  AND venue.clinicid=".$_POST['clinicid'];
	$result = $conn->query($query);
	if ($result->num_rows > 0 ) {
			echo '<option value="">Select Doctor</option>';
		 while ($row = $result->fetch_assoc()) {
		 	echo '<option value='.$row['id'].'>'.$row['name'].' - '.$row['specialization'].'</option>';
		 }
	}else{

		echo '<option>No Doctor Found!</option>';
	}

}

?>
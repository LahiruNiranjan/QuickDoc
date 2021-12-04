<?php
session_start();
include('includes/connect.php');
$approve_id = $_GET['approve'];
$approve_id = $conn->real_escape_string($approve_id);

$sql = "update book set status=2 where id = '$approve_id'";
// Prepare statement
$stmt = $conn->prepare($sql);
	
if($stmt->execute()){
	echo "<script>alert('Appoiment booking is Decline');</script>";
	echo "<script>window.open('patientlist.php?clinic==doctor','_self')</script>";
}else{
	echo "<script>alert('Failed to Appoiment Decline');</script>";
	echo "<script>window.open('index.php?doctor=doctor','_self')</script>";
}
?>
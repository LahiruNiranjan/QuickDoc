<?php
  session_start();  
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
include_once"includes/connect.php";

if (isset($_GET['id'])) {
	$id = $_GET['id'];
    $sql = "select * from book where id=".$id;
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_assoc($result);
	  $rows = $result->fetch_assoc();
      
    }else {
      $errorMsg = 'Could not Find Any Record';
    }
}

?>
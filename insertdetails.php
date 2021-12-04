<?php 
session_start();  
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  } 
  $errors= array();
  include_once"includes/connect.php";
if (!isset($_SESSION['email'])) {
   $_SESSION['msg'] = "You must log in first";
   header('location: login.php');
}else if(isset($_SESSION['email']) && $_SESSION['loginas'] == "doctor"){
	header('location: doctor.php');
}else  if(isset($_SESSION['email']) && $_SESSION['loginas'] == "clinic"){
	header('location: patientdetails.php');
}else{
   $email = $_SESSION['email'];
   
}

if (isset($_POST['generate'])) {
    $doctorid = test_input($_POST["doctorid"]);
    $clinicid = test_input($_POST["clinicid"]); 
   
    $doc_type = $_FILES['file']['type'];
	  $tmp = explode('.', $_FILES['file']['name']);
      $doc_ext=strtolower(end($tmp));
      $doc_tmp = $_FILES['file']['tmp_name'];
	
	if($doc_tmp){
      if( $doc_ext != "pdf"){
        echo '<script>alert("extension not allowed, please choose PDF file.")</script>' ; 
        echo("<script>location.href = 'book.php?doc=$doctorid&shop=$clinicid';</script>");	
      }
     $docname =  $email.$_POST["date"].$_POST["doctorid"].$_POST["name"].".pdf";
   if( !move_uploaded_file($doc_tmp,"assets/doc/patient/".$docname))
   
    {
   
        array_push($errors, "File is not uploaded");
   
    }
	}else{
		$doc_tmp = NULL;
		$docname = "No doc";
	}
   
    if (count($errors) == 0) {
   
    $stmt = $conn->prepare("INSERT INTO book (appointmentstatus, tokenno, userid, doctorid,clinicid, date, doc, name, age, problem, gender, relation, phone, purpose,status) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param("iiiiissssssssss",$appointmentstatus,$tokenno, $userid, $doctorid, $clinicid, $date, $docname, $name, $age, $problem, $gender, $relation, $phone, $purpose,$status );
    $appointmentstatus = 1;
    $date = test_input($_POST["date"]);
    $slot = test_input($_POST["slot"]);
    $sql = "SELECT * FROM book where date = '$date' and doctorid=$doctorid and clinicid = $clinicid and appointmentstatus!=0 order by tokenno desc";
                                    $result = $conn->query($sql);
                                    if(($result->num_rows) + 1 > $slot){
                                        echo '<script>alert("Slot is full, try another date.")</script>' ;
                                        echo("<script>location.href = 'index.php';</script>");
                                        exit();
                                    }
                                    if ($result->num_rows > 0 ) {
                                       $rows = $result->fetch_assoc();
                                        $tokenno = $rows['tokenno'];
                                        $tokenno = $tokenno+1;
										echo '<script>alert("Appoiment Success.Your token Number is = '.$tokenno.'")</script>' ;
                                        echo("<script>location.href = 'index.php';</script>");
                                    }else{
                                        $tokenno = 1;
                                }
                                
    $status=0;
	$name = test_input($_POST["name"]);
    $age = test_input($_POST["age"]);
    $problem = test_input($_POST["problem"]);
    $gender = test_input($_POST["gender"]);
    $relation = test_input($_POST["relation"]);
    $phone = test_input($_POST["phone"]);
    $sql1 = "SELECT * FROM user where email = '$email'";
                                    $result1 = $conn->query($sql1);
                                    if ($result1->num_rows > 0) {
                                       $rows1 = $result1->fetch_assoc();
                                        $userid = $rows1['id'];
                                        $username = $rows1['name'];
                                    }
   
    $doctorname = test_input($_POST["doctorname"]);
    $shopname = test_input($_POST["shopname"]);
    $price = test_input($_POST["price"]);
    
	
 //data is fetched                                   
$purpose = $name." is booking ".$doctorname." at ".$shopname." dated ".$date." with token no. ".$tokenno;

if($stmt->execute()){

//include 'src/instamojo.php';

//$api = new Instamojo\Instamojo('test_d0ca4f78fd4f5d0a6cd48c2bd9d', 'test_4945979da1bc72452f9b5c20d72','https://test.instamojo.com/api/1.1/');


try {
    $response = (array(
        "amount" => $price,
        "buyer_name" => $username,
        "purpose" => $purpose,
        "phone" => $phone,
        "send_email" => true,
        "send_sms" => true,
        "email" => $email,
        'allow_repeated_payments' => true
        //"redirect_url" => "http://wildwingsindia.in/medical/gettoken.php",
        //"webhook" => "http://wildwingsindia.in/medical/webhook.php"
        ));
  //  $pay_ulr = $response['longurl'];
    
    //Redirect($response['longurl'],302); //Go to Payment page

 //   header("Location: $pay_ulr");
	
    exit();
	

}
catch (Exception $e) {
    print('Error: ' . $e->getMessage());
}    
}
else{
    echo "not possible";
}
    }
} 
  ?>
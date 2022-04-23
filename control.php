<?php
$base_url = "http://localhost/poly";

	if (isset($_POST['submit'])) {
		$random = rand(000000,999999);
		$formnumber = "F$random";
		$surname = $_POST['surname'];
		$othernames = $_POST['othernames'];
		$dob = $_POST['dob'];
		$gender = $_POST['gender'];
		$address = $_POST['address'];
		$state = $_POST['state'];
		$lga = $_POST['lga'];
		$course = $_POST['course'];
		$program = $_POST['program'];
		$clas = $_POST['clas'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$fullname = $_POST['fullname'];
		$nokemail = $_POST['nokemail'];
		$nokaddress = $_POST['nokaddress'];
		$nokphone = $_POST['nokphone'];
		$relationship = $_POST['relationship'];
		$date = date('D M, Y. H:i:s');



		$fetch = $conn->query("SELECT * FROM registration WHERE email = '$email' AND phone = '$phone'");
		$result = $fetch->fetchAll(PDO::FETCH_OBJ);
		$count = $fetch->rowCount();
		if ($count > 0) {
		echo '<script language="javascript">';
		echo 'alert("User already exist")';
		echo '</script>';
	}else{
		 $in = array('formnumber' => $formnumber,
					'surname' => $surname,
					'othernames' => $othernames,
					'dob' => $dob,
					'gender' => $gender,
					'address' => $address,
					'state' => $state,
					'lga' => $lga,
					'course' => $course,
					'program' => $program,
					'clas' => $clas,
					'phone' => $phone,
					'email' => $email,
					'fullname' => $fullname,
					'nokemail' => $nokemail,
					'nokaddress' => $nokaddress,
					'nokphone' => $nokphone,
					'relationship' => $relationship,
					'date' => $date,
					);
		create('registration', $in);
		redirect('../webpay/index.php');
	}
		
	}


?>

<?php 
if (isset($_POST['pay'])) {
    header( "Location: response.php" );

}
?>


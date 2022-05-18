<?php
	include '../conn.php';

	$method = $_POST['method'];

if($method == 'generateBatchCode'){
		$prefix = "TC:";
		$dateCode = date('ymd');
		$randomCode = mt_rand(10000,50000);
		echo $prefix."".$dateCode."".$randomCode;
	}

if ($method == 'register_training_record') {
	$registration_code = $_POST['registration_code'];
	$batch_no = $_POST['batch_no'];
	$employee_num = $_POST['employee_num'];
	$gender = $_POST['gender'];
	$full_name = $_POST['full_name'];
	$department = $_POST['department'];
	$position = $_POST['position'];
	$theory_training = $_POST['theory_training'];
	$training_date = $_POST['training_date'];
	$date_hired = $_POST['date_hired'];
	$theory_remarks = $_POST['theory_remarks'];
	$training_end_date = $_POST['training_end_date'];
	$provider = $_POST['provider'];

	$check = "SELECT id FROM etrs_training_record WHERE employee_num = '$employee_num'";

	$stmt = $conn->prepare($check);
	$stmt->execute();
	if ($stmt->rowCount() > 0) {

		echo 'Training Record Already Exist!';
	
	}else{
		$insert = "INSERT INTO etrs_training_record (`batch_no`,`employee_num`,`gender`,`full_name`,`department`,`position`,`theory_training`,`training_date`,`theory_remarks`,`registration_code`,`date_hired`,`training_end_date`,`provider`) VALUES ('$batch_no','$employee_num','$gender','$full_name','$department','$position','$theory_training','$training_date','$theory_remarks','$registration_code','$date_hired','$training_end_date','$provider')";
		$stmt= $conn->prepare($insert);
		if ($stmt->execute()) {

			echo 'Successfully Registered';
		
		}else{
			
			echo 'Error';
		
		}
	}

}

if ($method == 'preview_training_record_data') {
	$c =0;
	$registration_code = trim($_POST['registration_code']);
	$query = "SELECT * FROM etrs_training_record WHERE registration_code LIKE '$registration_code%' ORDER BY id ASC";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	foreach($stmt->fetchALL() as $x){
		$c++;
		echo '<tr>';
			echo '<td><b>'.$c.'</b></td>';
			echo '<td><b>'.$x['batch_no'].'</b></td>';
			echo '<td><b>'.$x['employee_num'].'</b></td>';
			echo '<td><b>'.$x['provider'].'</b></td>';
			echo '<td><b>'.$x['full_name'].'</b></td>';
			echo '<td><b>'.$x['gender'].'</b></td>';
			echo '<td><b>'.$x['department'].'</b></td>';
			echo '<td><b>'.$x['position'].'</b></td>';
		    echo '<td><b>'.$x['date_hired'].'</b></td>';
			echo '<td><b>'.$x['theory_training'].'</b></td>';
			echo '<td><b>'.$x['training_date'].'</b></td>';
			echo '<td><b>'.$x['training_end_date'].'</b></td>';
			echo '<td><b>'.$x['theory_remarks'].'</b></td>';
		echo '</tr>';
	}
}
$conn = NULL;
?>
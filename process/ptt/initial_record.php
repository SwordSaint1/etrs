<?php
	include '../conn.php';

	$method = $_POST['method'];
if($method == 'generateBatchCode'){
		$prefix = "ITC:";
		$dateCode = date('ymd');
		$randomCode = mt_rand(10000,50000);
		echo $prefix."".$dateCode."".$randomCode;
	}

if ($method == 'fetch_for_update') {
	$batch_no = $_POST['batch_no'];
	$employee_num = $_POST['employee_num'];
	$full_name = $_POST['full_name'];
	$c = 0;

	$select = "SELECT * FROM etrs_training_record WHERE batch_no LIKE '$batch_no%' AND employee_num LIKE '$employee_num%' AND full_name LIKE '$full_name%'";
	$stmt = $conn->prepare($select);
	$stmt->execute();
	if ($stmt->rowCount() > 0) {
		foreach($stmt->fetchALL() as $j){
			$c++;

			echo '<tr style="cursor:pointer;" class="modal-trigger" data-toggle="modal" data-target="#update_record" onclick="get_training_record(&quot;'.$j['id'].'~!~'.$j['batch_no'].'~!~'.$j['employee_num'].'~!~'.$j['gender'].'~!~'.$j['full_name'].'~!~'.$j['department'].'~!~'.$j['position'].'~!~'.$j['date_hired'].'&quot;)">';
				echo '<td>'.$c.'</td>';
				echo '<td>'.$j['batch_no'].'</td>';
				echo '<td>'.$j['employee_num'].'</td>';
				echo '<td>'.$j['full_name'].'</td>';
				echo '<td>'.$j['gender'].'</td>';
				echo '<td>'.$j['department'].'</td>';
				echo '<td>'.$j['position'].'</td>';		
			
			echo '</tr>';
		}
	}else{
		echo '<tr>';
			echo '<td colspan="11" style="text-align:center;">NO RESULT</td>';
			echo '</tr>';
			}
}


if ($method == 'update_initial_record_data') {
	$initial_registration_code = $_POST['initial_registration_code'];
	$emp_id = $_POST['emp_id'];
	$initial_process = $_POST['initial_process'];
	$initial_status = $_POST['initial_status'];
	$initial_training_date = $_POST['initial_training_date'];

	$check = "SELECT id FROM etrs_initial WHERE emp_id = '$emp_id' AND initial_process = '$initial_process' AND initial_status = 'Passed'";

	$stmt = $conn->prepare($check);
	$stmt->execute();
	if ($stmt->rowCount() > 0) {

		echo 'Training Record Already Exist!';
	
	}else{
		$insert = "INSERT INTO etrs_initial (`emp_id`,`initial_process`,`initial_status`,`initial_training_date`,`initial_registration_code`) VALUES ('$emp_id','$initial_process','$initial_status','$initial_training_date','$initial_registration_code')";
		$stmt= $conn->prepare($insert);
		if ($stmt->execute()) {

			echo 'Successfully Updated';
		
		}else{
			
			echo 'Error';
		
		}
	}

}


if ($method == 'fetch_intial') {
	$batch_no = $_POST['batch_no'];
	$emp_id = $_POST['emp_id'];
	$full_name = $_POST['full_name'];
	$eprocess = $_POST['eprocess'];
	$c = 0;

	$select = "SELECT etrs_training_record.date_hired,etrs_initial.id,etrs_training_record.batch_no,etrs_training_record.employee_num,etrs_training_record.full_name,etrs_training_record.gender,etrs_training_record.department,etrs_training_record.position,etrs_initial.initial_process,etrs_initial.initial_status,etrs_initial.initial_training_date FROM etrs_training_record LEFT JOIN etrs_initial ON etrs_training_record.employee_num = etrs_initial.emp_id WHERE etrs_initial.initial_process != '' AND etrs_training_record.batch_no LIKE '$batch_no%' AND etrs_initial.emp_id LIKE '$emp_id%' AND etrs_training_record.full_name LIKE '$full_name%' AND etrs_initial.initial_process LIKE '$eprocess%'";
	$stmt = $conn->prepare($select);
	$stmt->execute();
	if ($stmt->rowCount() > 0) {
		foreach($stmt->fetchALL() as $j){
			$c++;

			echo '<tr style="cursor:pointer;" class="modal-trigger" data-toggle="modal" data-target="#reupdate_record" onclick="get_for_update(&quot;'.$j['id'].'~!~'.$j['batch_no'].'~!~'.$j['employee_num'].'~!~'.$j['gender'].'~!~'.$j['full_name'].'~!~'.$j['department'].'~!~'.$j['position'].'~!~'.$j['date_hired'].'~!~'.$j['initial_process'].'~!~'.$j['initial_status'].'~!~'.$j['initial_training_date'].'&quot;)" >';
				echo '<td>'.$c.'</td>';
				echo '<td>'.$j['batch_no'].'</td>';
				echo '<td>'.$j['employee_num'].'</td>';
				echo '<td>'.$j['full_name'].'</td>';
				echo '<td>'.$j['gender'].'</td>';
				echo '<td>'.$j['department'].'</td>';
				echo '<td>'.$j['position'].'</td>';
				echo '<td>'.$j['initial_process'].'</td>';	
				echo '<td>'.$j['initial_status'].'</td>';		
				echo '<td>'.$j['initial_training_date'].'</td>';	
			echo '</tr>';
		}
	}else{
		echo '<tr>';
			echo '<td colspan="11" style="text-align:center;">NO RESULT</td>';
			echo '</tr>';
			}
}

if ($method == 'update_initial') {
	$id = $_POST['id'];
	$emp_id = $_POST['emp_id'];
	$initial_process = $_POST['initial_process'];
	$initial_status = $_POST['initial_status'];
	$initial_training_date = $_POST['initial_training_date'];

	$check = "SELECT id FROM etrs_initial WHERE emp_id = '$emp_id' AND initial_process = '$initial_process' AND initial_status = '$initial_status' AND initial_training_date = '$initial_training_date'";
	$stmt = $conn->prepare($check);
	$stmt->execute();
	if($stmt->rowCount() > 0) {
		echo 'Duplicate Record';
	}else{

	$update ="UPDATE etrs_initial SET initial_process = '$initial_process', initial_status = '$initial_status', initial_training_date = '$initial_training_date' WHERE id = '$id'";
	$stmt = $conn->prepare($update);
	if($stmt->execute()){
		echo 'success';
	}else{
		echo 'error';
	}
}
}
$conn = NULL;
?>
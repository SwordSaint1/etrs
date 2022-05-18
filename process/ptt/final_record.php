<?php
	include '../conn.php';

	$method = $_POST['method'];
if($method == 'generateBatchCode'){
		$prefix = "FTC:";
		$dateCode = date('ymd');
		$randomCode = mt_rand(10000,50000);
		echo $prefix."".$dateCode."".$randomCode;
	}

if ($method == 'fetch_for_update_final') {
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

			echo '<tr style="cursor:pointer;" class="modal-trigger" data-toggle="modal" data-target="#update_final_record" onclick="get_training_final_record(&quot;'.$j['id'].'~!~'.$j['batch_no'].'~!~'.$j['employee_num'].'~!~'.$j['gender'].'~!~'.$j['full_name'].'~!~'.$j['department'].'~!~'.$j['position'].'~!~'.$j['date_hired'].'&quot;)">';
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


if ($method == 'update_final_record_data') {
	$final_registration_code = $_POST['final_registration_code'];
	$emp_id = $_POST['emp_id'];
	$final_process = $_POST['final_process'];
	$final_status = $_POST['final_status'];
	$final_training_date = $_POST['final_training_date'];
	$final_training_end_date_updates = $_POST['final_training_end_date_updates'];

	$check = "SELECT id FROM etrs_final WHERE emp_id = '$emp_id' AND final_process = '$final_process' AND final_status = 'Passed'";

	$stmt = $conn->prepare($check);
	$stmt->execute();
	if ($stmt->rowCount() > 0) {

		echo 'Training Record Already Exist!';
	
	}else{
		$insert = "INSERT INTO etrs_final (`emp_id`,`final_process`,`final_status`,`final_training_date`,`final_registration_code`,`final_training_ends_dates`) VALUES ('$emp_id','$final_process','$final_status','$final_training_date','$final_registration_code','$final_training_end_date_updates')";
		$stmt= $conn->prepare($insert);
		if ($stmt->execute()) {

			echo 'Successfully Updated';
		
		}else{
			
			echo 'Error';
		
		}
	}

}

if ($method == 'fetch_final') {
	$batch_no = $_POST['batch_no'];
	$emp_id = $_POST['emp_id'];
	$full_name = $_POST['full_name'];
	$eprocess = $_POST['eprocess'];
	$c = 0;

	$select = "SELECT etrs_training_record.date_hired,etrs_final.id,etrs_training_record.batch_no,etrs_training_record.employee_num,etrs_training_record.full_name,etrs_training_record.gender,etrs_training_record.department,etrs_training_record.position,etrs_final.final_process,etrs_final.final_status,etrs_final.final_training_date,etrs_final.final_training_ends_dates FROM etrs_training_record LEFT JOIN etrs_final ON etrs_training_record.employee_num = etrs_final.emp_id WHERE etrs_final.final_process != '' AND etrs_training_record.batch_no LIKE '$batch_no%' AND etrs_final.emp_id LIKE '$emp_id%' AND etrs_training_record.full_name LIKE '$full_name%' AND etrs_final.final_process LIKE '$eprocess%'";
	$stmt = $conn->prepare($select);
	$stmt->execute();
	if ($stmt->rowCount() > 0) {
		foreach($stmt->fetchALL() as $j){
			$c++;

			echo '<tr style="cursor:pointer;" class="modal-trigger" data-toggle="modal" data-target="#final_for_update" onclick="get_for_update_final(&quot;'.$j['id'].'~!~'.$j['batch_no'].'~!~'.$j['employee_num'].'~!~'.$j['gender'].'~!~'.$j['full_name'].'~!~'.$j['department'].'~!~'.$j['position'].'~!~'.$j['date_hired'].'~!~'.$j['final_process'].'~!~'.$j['final_status'].'~!~'.$j['final_training_date'].'~!~'.$j['final_training_ends_dates'].'&quot;)" >';
				echo '<td>'.$c.'</td>';
				echo '<td>'.$j['batch_no'].'</td>';
				echo '<td>'.$j['employee_num'].'</td>';
				echo '<td>'.$j['full_name'].'</td>';
				echo '<td>'.$j['gender'].'</td>';
				echo '<td>'.$j['department'].'</td>';
				echo '<td>'.$j['position'].'</td>';
				echo '<td>'.$j['final_process'].'</td>';	
				echo '<td>'.$j['final_status'].'</td>';	
				echo '<td>'.$j['final_training_date'].'</td>';		
				echo '<td>'.$j['final_training_ends_dates'].'</td>';	
			echo '</tr>';
		}
	}else{
		echo '<tr>';
			echo '<td colspan="11" style="text-align:center;">NO RESULT</td>';
			echo '</tr>';
			}
}

if ($method == 'update_final') {
	$id = $_POST['id'];
	$emp_id = $_POST['emp_id'];
	$final_process = $_POST['final_process'];
	$final_status = $_POST['final_status'];
	$final_training_date = $_POST['final_training_date'];
	$final_training_ends_dates = $_POST['final_training_ends_dates'];

	$check = "SELECT id FROM etrs_final WHERE emp_id = '$emp_id' AND final_process = '$final_process' AND final_status = '$final_status' ";
	$stmt = $conn->prepare($check);
	$stmt->execute();
	if ($stmt->rowCount() > 0) {
		echo 'Duplicate Record';
	}else{
		$update = "UPDATE etrs_final SET final_process = '$final_process', final_status = '$final_status', final_training_date = '$final_training_date', final_training_ends_dates = '$final_training_ends_dates' WHERE id = '$id'";
		$stmt2 = $conn->prepare($update);
		if($stmt2->execute()){
			echo 'success';
		}else{
			echo 'error';
		}
	}
}


$conn = NULL;
?>
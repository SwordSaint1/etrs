<?php
	include '../conn.php';

	$method = $_POST['method'];
if ($method == 'fetch_training_record') {
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

			echo '<tr style="cursor:pointer;" class="modal-trigger" data-toggle="modal" data-target="#update_record_ptt" onclick="get_training_record_ptt(&quot;'.$j['id'].'~!~'.$j['batch_no'].'~!~'.$j['provider'].'~!~'.$j['employee_num'].'~!~'.$j['maiden_name'].'~!~'.$j['full_name'].'~!~'.$j['gender'].'~!~'.$j['department'].'~!~'.$j['position'].'~!~'.$j['date_hired'].'~!~'.$j['theory_training'].'~!~'.$j['training_date'].'~!~'.$j['training_end_date'].'~!~'.$j['theory_remarks'].'~!~'.$j['spdate_hired'].'&quot;)">';
				echo '<td>'.$c.'</td>';
				echo '<td>'.$j['batch_no'].'</td>';
				echo '<td>'.$j['provider'].'</td>';
				echo '<td>'.$j['employee_num'].'</td>';
				echo '<td>'.$j['maiden_name'].'</td>';
				echo '<td>'.$j['full_name'].'</td>';
				echo '<td>'.$j['gender'].'</td>';
				echo '<td>'.$j['department'].'</td>';	
				echo '<td>'.$j['position'].'</td>';
				echo '<td>'.$j['spdate_hired'].'</td>';
				echo '<td>'.$j['date_hired'].'</td>';
				echo '<td>'.$j['theory_training'].'</td>';
				echo '<td>'.$j['training_date'].'</td>';
				echo '<td>'.$j['training_end_date'].'</td>';
				echo '<td>'.$j['theory_remarks'].'</td>';
			
			echo '</tr>';
		}
	}else{
		echo '<tr>';
			echo '<td colspan="11" style="text-align:center;">NO RESULT</td>';
			echo '</tr>';
			}
}


if ($method == 'update_ptt_record') {
	$id  = $_POST['id'];
	$batch_no  = $_POST['batch_no'];
	$provider  = $_POST['provider'];
	$employee_num  = $_POST['employee_num'];
	$maiden_name  = $_POST['maiden_name'];
	$full_name  = $_POST['full_name'];
	$gender  = $_POST['gender'];
	$department  = $_POST['department'];
	$position  = $_POST['position'];
	$date_hired  = $_POST['date_hired'];
	$theory_training  = $_POST['theory_training'];
	$training_date  = $_POST['training_date'];
	$training_end_date  = $_POST['training_end_date'];
	$theory_remarks  = $_POST['theory_remarks'];
	$spdate_hired = $_POST['spdate_hired'];

	$update = "UPDATE etrs_training_record SET batch_no = '$batch_no', provider = '$provider', employee_num = '$employee_num', maiden_name = '$maiden_name', full_name = '$full_name', gender = '$gender', department = '$department', position = '$position', date_hired = '$date_hired' , theory_training = '$theory_training', training_date = '$training_date', training_end_date = '$training_end_date', theory_remarks = '$theory_remarks', spdate_hired = '$spdate_hired' WHERE id = '$id'";
	$stmt = $conn->prepare($update);
	if ($stmt->execute()) {
		echo 'success';
	}else{
		echo 'error';
	}
}
$conn = NULL;
?>
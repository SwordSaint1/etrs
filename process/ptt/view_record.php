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

			echo '<tr>';
				echo '<td>'.$c.'</td>';
				echo '<td>'.$j['batch_no'].'</td>';
				echo '<td>'.$j['employee_num'].'</td>';
				echo '<td>'.$j['full_name'].'</td>';
				echo '<td>'.$j['gender'].'</td>';
				echo '<td>'.$j['department'].'</td>';
				echo '<td>'.$j['position'].'</td>';
				echo '<td>'.$j['theory_training'].'</td>';
				echo '<td>'.$j['training_date'].'</td>';
				echo '<td>'.$j['date_hired'].'</td>';
				echo '<td>'.$j['theory_remarks'].'</td>';
			
			echo '</tr>';
		}
	}else{
		echo '<tr>';
			echo '<td colspan="11" style="text-align:center;">NO RESULT</td>';
			echo '</tr>';
			}
}
$conn = NULL;
?>
<?
SELECT etrs_training_record.id,etrs_training_record.employee_num,etrs_final_practice.initial_practice_process
FROM etrs_training_record
 LEFT JOIN etrs_final_practice ON etrs_training_record.employee_num = etrs_final_practice.emp_id WHERE etrs_training_record.employee_num = '$employee_num'


?>
<script type="text/javascript">
	
 const load_view_final_practice_training_records =()=>{
  var batch_no = document.getElementById('batch_no_final_practice_view').value;
  var emp_id = document.getElementById('employee_num_final_practice_view').value;
  var full_name = document.getElementById('full_name_final_practice_view').value;
  var eprocess = document.getElementById('eprocess_final_practice_view').value;
   $('#spinner').css('display','block');
   $.ajax({
      url: '../../process/ptt/final_practice.php',
                type: 'POST',
                cache: false,
                data:{
                    method: 'fetch_final_practice_view',
                    batch_no:batch_no,
                    emp_id:emp_id,
                    full_name:full_name,
                    eprocess:eprocess
                },success:function(response){
                   document.getElementById('view_data_final_practice_training_records').innerHTML = response;
                      $('#spinner').fadeOut(function(){                       
                   });
                }
   });
}

const get_for_update_final_practice =(param)=>{

    var string = param.split('~!~');
    var id = string[0];
    var batch_no = string[1];
    var employee_num = string[2];
    var gender = string[3];
    var full_name = string[4];
    var department = string[5];
    var position = string[6];
    var date_hired = string[7];
    var final_practice_process = string[8];
    var final_practice_status = string[9];
    var final_practice_training_date = string[10];
    var final_practice_training_end_date = string[11];

document.getElementById('final_practice_id_reupdate').value = id;
document.getElementById('final_practice_batch_no_reupdate').value = batch_no;
document.getElementById('emp_id_reupdate_final_practice').value = employee_num;
document.getElementById('final_practice_gender_reupdate').value = gender;
document.getElementById('final_practice_full_name_reupdate').value = full_name;
document.getElementById('final_practice_department_reupdate').value = department;
document.getElementById('final_practice_position_reupdate').value = position;
document.getElementById('final_practice_date_hired_reupdate').value = date_hired;
document.getElementById('final_practice_process_reupdate').value = final_practice_process;
document.getElementById('final_practice_status_reupdate').value = final_practice_status;
document.getElementById('final_practice_training_date_reupdate').value = final_practice_training_date;
document.getElementById('final_practice_training_end_date_reupdate').value = final_practice_training_end_date;

}


const reupdate_final_practice_record =()=>{
    var id = document.getElementById('final_practice_id_reupdate').value;
    var emp_id = document.getElementById('emp_id_reupdate_final_practice').value;
    var final_practice_process = document.getElementById('final_practice_process_reupdate').value;
    var final_practice_status = document.getElementById('final_practice_status_reupdate').value;
    var final_practice_training_date = document.getElementById('final_practice_training_date_reupdate').value;
    var final_practice_training_end_date = document.getElementById('final_practice_training_end_date_reupdate').value;
     $.ajax({
        url: '../../process/ptt/final_practice.php',
        type: 'POST', 
        cache: false,
        data:{
            method: 'update_final_practice',
            id:id,
            emp_id:emp_id,
            final_practice_process:final_practice_process,
            final_practice_status:final_practice_status,
            final_practice_training_date:final_practice_training_date,
            final_practice_training_end_date:final_practice_training_end_date
        },success:function(x){
            if (x == 'success') {
               swal('Success',x,'success');
               load_view_final_practice_training_records();
            }else{
               swal('Error',x,'error');
               load_view_final_practice_training_records();
            }
        }
    });

}
</script>
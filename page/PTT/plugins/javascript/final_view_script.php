<script type="text/javascript">	
 const load_view_final_training_records =()=>{
  var batch_no = document.getElementById('batch_no_final').value;
  var emp_id = document.getElementById('employee_num_final').value;
  var full_name = document.getElementById('full_name_final').value;
  var eprocess = document.getElementById('eprocess_final_view').value;
   $('#spinner').css('display','block');
   $.ajax({
      url: '../../process/ptt/final_record.php',
                type: 'POST',
                cache: false,
                data:{
                    method: 'fetch_final',
                    batch_no:batch_no,
                    emp_id:emp_id,
                    full_name:full_name,
                    eprocess:eprocess
                },success:function(response){
                   document.getElementById('view_data_final_training_records').innerHTML = response;
                      $('#spinner').fadeOut(function(){                       
                   });
                }
   });
}


const get_for_update_final =(param)=>{

    var string = param.split('~!~');
    var id = string[0];
    var batch_no = string[1];
    var employee_num = string[2];
    var gender = string[3];
    var full_name = string[4];
    var department = string[5];
    var position = string[6];
    var date_hired = string[7];
    var final_process = string[8];
    var final_status = string[9];
    var final_training_date = string[10];
    var final_training_ends_dates = string[11];

document.getElementById('final_id_reupdate').value = id;
document.getElementById('final_batch_no_reupdate').value = batch_no;
document.getElementById('emp_id_reupdates').value = employee_num;
document.getElementById('final_gender_reupdate').value = gender;
document.getElementById('final_full_name_reupdate').value = full_name;
document.getElementById('final_department_reupdate').value = department;
document.getElementById('final_position_reupdate').value = position;
document.getElementById('final_date_hired_reupdate').value = date_hired;
document.getElementById('final_process_reupdate').value = final_process;
document.getElementById('final_status_reupdate').value = final_status;
document.getElementById('final_training_date_reupdate').value = final_training_date;
document.getElementById('final_training_end_dates_reupdatess').value = final_training_ends_dates;
}


const reupdate_final_record =()=>{
    var id = document.getElementById('final_id_reupdate').value;
    var emp_id = document.getElementById('emp_id_reupdates').value;
    var final_process = document.getElementById('final_process_reupdate').value;
    var final_status = document.getElementById('final_status_reupdate').value;
    var final_training_date = document.getElementById('final_training_date_reupdate').value;
    var final_training_ends_dates = document.getElementById('final_training_end_dates_reupdatess').value;
     $.ajax({
        url: '../../process/ptt/final_record.php',
        type: 'POST', 
        cache: false,
        data:{
            method: 'update_final',
            id:id,
            emp_id:emp_id,
            final_process:final_process,
            final_status:final_status,
            final_training_date:final_training_date,
            final_training_ends_dates:final_training_ends_dates
        },success:function(x){
            // console.log(x);

            if (x == 'success') {
               swal('Success',x,'success');
               load_view_final_training_records();
            }else{
               swal('Error',x,'error');
               load_view_final_training_records();
            }
        }
    });

}
</script>
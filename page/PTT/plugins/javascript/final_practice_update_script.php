<script type="text/javascript">
	
 const register_training =()=> {    
    setTimeout(generateBatchID,100); 
} 

// GENERATE BATCH ID
const generateBatchID =()=>{
    $.ajax({
        url: '../../process/ptt/final_practice.php',
        type: 'POST',
        cache: false,
        data:{
            method: 'generateBatchCode'
        },success:function(response){
            $('#final_practice_registration_code').html(response);
        }
    });
}

const load_final_practice_training_records =()=>{
   var batch_no  = document.getElementById('batch_final_practice').value;
   var employee_num = document.getElementById('employee_num_final_practice').value;
   var full_name = document.getElementById('full_name_final_practice').value;


	$('#spinner').css('display','block');
	$.ajax({
		url: '../../process/ptt/final_practice.php',
                type: 'POST',
                cache: false,
                data:{
                    method: 'fetch_for_update_final_practice',
                    batch_no:batch_no,
                    employee_num:employee_num,
                    full_name:full_name
                },success:function(response){
                   document.getElementById('view_data_final_practice_training_record').innerHTML = response;
                      $('#spinner').fadeOut(function(){                       
                   });
                }
	});
}	

const get_training_record_final_practice =(param)=>{
   register_training();
    var string = param.split('~!~');
    var id = string[0];
    var batch_no = string[1];
    var employee_num = string[2];
    var gender = string[3];
    var full_name = string[4];
    var department = string[5];
    var position = string[6];
    var date_hired = string[7];

document.getElementById('final_practice_id').value = id;
document.getElementById('final_practice_batch_no_update').value = batch_no;
document.getElementById('emp_id_update_final_practice').value = employee_num;
document.getElementById('final_practice_gender_update').value = gender;
document.getElementById('final_practice_full_name_update').value = full_name;
document.getElementById('final_practice_department_update').value = department;
document.getElementById('final_practice_position_update').value = position;
document.getElementById('final_practice_date_hired_update').value = date_hired;
}

const update_final_practice_record =()=>{
    var final_practice_registration_code = document.querySelector('#final_practice_registration_code').innerHTML;
    var emp_id = document.getElementById('emp_id_update_final_practice').value;
    var final_practice_process = document.getElementById('final_practice_process_update').value;
    var final_practice_status = document.getElementById('final_practice_status_update').value;
    var final_practice_training_date = document.getElementById('final_practice_training_date_update').value;
    var final_practice_training_end_date = document.getElementById('final_practice_training_end_date_update').value;
    var final_practice_remarks = document.getElementById('final_practice_remarks').value;

     $.ajax({
        url: '../../process/ptt/final_practice.php',
        type: 'POST', 
        cache: false,
        data:{
            method: 'update_final_practice_record_data',
            final_practice_registration_code:final_practice_registration_code,
            emp_id:emp_id,
            final_practice_process:final_practice_process,
            final_practice_status:final_practice_status,
            final_practice_training_date:final_practice_training_date,
            final_practice_training_end_date:final_practice_training_end_date,
            final_practice_remarks:final_practice_remarks
        },success:function(x){

        if (x == 'Training Record Already Exist!') {
             swal('Notification',x,'info');
                
            }else{
                load_final_practice_training_records();
                swal('Success!', 'Successfully', 'success');
            }
                 
        }
    });

}

</script>
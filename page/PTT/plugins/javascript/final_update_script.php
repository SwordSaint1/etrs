<script type="text/javascript">
 
 const register_training =()=> {    
    setTimeout(generateBatchID,100); 
} 

// GENERATE BATCH ID
const generateBatchID =()=>{
    $.ajax({
        url: '../../process/ptt/final_record.php',
        type: 'POST',
        cache: false,
        data:{
            method: 'generateBatchCode'
        },success:function(response){
            $('#final_registration_code').html(response);
        }
    });
}


const load_final_training_records =()=>{
	var batch_no  = document.getElementById('batch_no_final').value;
    var employee_num = document.getElementById('employee_num_final').value;
    var full_name = document.getElementById('full_name_final').value;


	$('#spinner').css('display','block');
	$.ajax({
		url: '../../process/ptt/final_record.php',
                type: 'POST',
                cache: false,
                data:{
                    method: 'fetch_for_update_final',
                    batch_no:batch_no,
                    employee_num:employee_num,
                    full_name:full_name
                },success:function(response){
                   document.getElementById('view_data_final_training_record').innerHTML = response;
                      $('#spinner').fadeOut(function(){                       
                   });
                }
	});
}

const get_training_final_record =(param)=>{
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

document.getElementById('final_id').value = id;
document.getElementById('final_batch_no_update').value = batch_no;
document.getElementById('emp_id_final_update').value = employee_num;
document.getElementById('final_gender_update').value = gender;
document.getElementById('final_full_name_update').value = full_name;
document.getElementById('final_department_update').value = department;
document.getElementById('final_position_update').value = position;
document.getElementById('final_date_hired_update').value = date_hired;

}


const update_final_record =()=>{
    var final_registration_code = document.querySelector('#final_registration_code').innerHTML;
    var emp_id = document.getElementById('emp_id_final_update').value;
    var final_process = document.getElementById('final_process_update').value;
    var final_status = document.getElementById('final_status_update').value;
    var final_training_date = document.getElementById('final_training_date_update').value;
    var final_training_end_date_updates = document.getElementById('final_training_ends_date_updates').value;
    var final_remarks = document.getElementById('final_remarks').value;
     $.ajax({
        url: '../../process/ptt/final_record.php',
        type: 'POST', 
        cache: false,
        data:{
            method: 'update_final_record_data',
            final_registration_code:final_registration_code,
            emp_id:emp_id,
            final_process:final_process,
            final_status:final_status,
            final_training_date:final_training_date,
            final_training_end_date_updates:final_training_end_date_updates,
            final_remarks:final_remarks
        },success:function(x){

        if (x == 'Training Record Already Exist!') {
        	    swal('Notification',x,'info');
                
            }else{
                load_final_training_records();
                swal('Success!', 'Successfully', 'success');
            }
                 
        }
    });

}

</script>
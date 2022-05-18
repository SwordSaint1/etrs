<script type="text/javascript">

 const register_training =()=> {    
    setTimeout(generateBatchID,100); 
} 

// GENERATE BATCH ID
const generateBatchID =()=>{
    $.ajax({
        url: '../../process/ptt/initial_practice.php',
        type: 'POST',
        cache: false,
        data:{
            method: 'generateBatchCode'
        },success:function(response){
            $('#initial_practice_registration_code').html(response);
        }
    });
}
	 
const load_initial_practice_training_records =()=>{
	var batch_no  = document.getElementById('batch_initial_practice').value;
   var employee_num = document.getElementById('employee_num_initial_practice').value;
   var full_name = document.getElementById('full_name_initial_practice').value;


	$('#spinner').css('display','block');
	$.ajax({
		url: '../../process/ptt/initial_practice.php',
                type: 'POST',
                cache: false,
                data:{
                    method: 'fetch_for_update_initial_practice',
                    batch_no:batch_no,
                    employee_num:employee_num,
                    full_name:full_name
                },success:function(response){
                   document.getElementById('view_data_initial_practice_training_record').innerHTML = response;
                      $('#spinner').fadeOut(function(){                       
                   });
                }
	});
}	

const get_training_record_initial_practice =(param)=>{
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

document.getElementById('initial_practice_id').value = id;
document.getElementById('initial_practice_batch_no_update').value = batch_no;
document.getElementById('emp_id_update_initial_practice').value = employee_num;
document.getElementById('initial_practice_gender_update').value = gender;
document.getElementById('initial_practice_full_name_update').value = full_name;
document.getElementById('initial_practice_department_update').value = department;
document.getElementById('initial_practice_position_update').value = position;
document.getElementById('initial_practice_date_hired_update').value = date_hired;
}

const update_initial_practice_record =()=>{
    var initial_practice_registration_code = document.querySelector('#initial_practice_registration_code').innerHTML;
    var emp_id = document.getElementById('emp_id_update_initial_practice').value;
    var initial_practice_process = document.getElementById('initial_practice_process_update').value;
    var initial_practice_status = document.getElementById('initial_practice_status_update').value;
    var initial_practice_training_date = document.getElementById('initial_practice_training_date_update').value;
    var initial_practice_training_end_date = document.getElementById('initial_practice_training_end_date_update').value;
     $.ajax({
        url: '../../process/ptt/initial_practice.php',
        type: 'POST', 
        cache: false,
        data:{
            method: 'update_initial_practice_record_data',
            initial_practice_registration_code:initial_practice_registration_code,
            emp_id:emp_id,
            initial_practice_process:initial_practice_process,
            initial_practice_status:initial_practice_status,
            initial_practice_training_date:initial_practice_training_date,
            initial_practice_training_end_date:initial_practice_training_end_date
        },success:function(x){

        if (x == 'Training Record Already Exist!') {
             swal('Notification',x,'info');
                
            }else{
                load_initial_practice_training_records();
                swal('Success!', 'Successfully', 'success');
            }
                 
        }
    });

}

</script>
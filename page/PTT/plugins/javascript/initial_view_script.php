<script type="text/javascript">
    
 const load_view_initial_training_records =()=>{
  var batch_no = document.getElementById('batch_no_initial').value;
  var emp_id = document.getElementById('employee_num_initial').value;
  var full_name = document.getElementById('full_name_initial').value;
  var eprocess = document.getElementById('eprocess_initial_view').value;
   $('#spinner').css('display','block');
   $.ajax({
      url: '../../process/ptt/initial_record.php',
                type: 'POST',
                cache: false,
                data:{
                    method: 'fetch_intial',
                    batch_no:batch_no,
                    emp_id:emp_id,
                    full_name:full_name,
                    eprocess:eprocess
                },success:function(response){
                   document.getElementById('view_data_initial_training_records').innerHTML = response;
                      $('#spinner').fadeOut(function(){                       
                   });
                }
   });
}
  
const get_for_update =(param)=>{

    var string = param.split('~!~');
    var id = string[0];
    var batch_no = string[1];
    var employee_num = string[2];
    var gender = string[3];
    var full_name = string[4];
    var department = string[5];
    var position = string[6];
    var date_hired = string[7];
    var initial_process = string[8];
    var initial_status = string[9];
    var initial_training_date = string[10];

document.getElementById('initial_id_reupdate').value = id;
document.getElementById('initial_batch_no_reupdate').value = batch_no;
document.getElementById('emp_id_reupdate').value = employee_num;
document.getElementById('initial_gender_reupdate').value = gender;
document.getElementById('initial_full_name_reupdate').value = full_name;
document.getElementById('initial_department_reupdate').value = department;
document.getElementById('initial_position_reupdate').value = position;
document.getElementById('initial_date_hired_reupdate').value = date_hired;
document.getElementById('initial_process_reupdate').value = initial_process;
document.getElementById('initial_status_reupdate').value = initial_status;
document.getElementById('initial_training_date_reupdate').value = initial_training_date;

}


const reupdate_initial_record =()=>{
    var id = document.getElementById('initial_id_reupdate').value;
    var emp_id = document.getElementById('emp_id_reupdate').value;
    var initial_process = document.getElementById('initial_process_reupdate').value;
    var initial_status = document.getElementById('initial_status_reupdate').value;
    var initial_training_date = document.getElementById('initial_training_date_reupdate').value;
    console.log(id);
     $.ajax({
        url: '../../process/ptt/initial_record.php',
        type: 'POST', 
        cache: false,
        data:{
            method: 'update_initial',
            id:id,
            emp_id:emp_id,
            initial_process:initial_process,
            initial_status:initial_status,
            initial_training_date:initial_training_date
        },success:function(x){
            if (x == 'success') {
               swal('Success',x,'success');
               load_view_initial_training_records();
            }else{
               swal('Error',x,'error');
               load_view_initial_training_records();
            }
        }
    });

}


</script>
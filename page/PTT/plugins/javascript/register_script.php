<script type="text/javascript">
	
 const register_training =()=> {    
    setTimeout(generateBatchID,100); 
} 

// GENERATE BATCH ID
const generateBatchID =()=>{
    $.ajax({
        url: '../../process/ptt/register.php',
        type: 'POST',
        cache: false,
        data:{
            method: 'generateBatchCode'
        },success:function(response){
            $('#registration_code').html(response);
        }
    });
} 

const save_training_record =()=> {
    var registration_code = document.querySelector('#registration_code').innerHTML;
    var batch_no = document.getElementById('batch_no').value;
    var employee_num = document.getElementById('employee_num').value;
    var gender = document.getElementById('gender').value;
    var full_name = document.getElementById('full_name').value;
    var department = document.getElementById('department').value;
    var position = document.getElementById('position').value;
    var theory_training = document.getElementById('theory_training').value;
    var training_date = document.getElementById('training_date').value;
	var date_hired = document.getElementById('date_hired').value;
    var theory_remarks = document.getElementById('theory_remarks').value;


   
        if(batch_no == ''){  
        swal('Notification', 'Please Enter Batch No', 'info');
        }else if(employee_num == ''){
         swal('Notification', 'Please Enter Employee No', 'info');   
        }else if(gender == ''){
         swal('Notification', 'Please Select Gender', 'info');   
        }else if(full_name == ''){
         swal('Notification', 'Please Enter Full Name', 'info');   
        }else if(department == ''){
         swal('Notification', 'Please Enter Department', 'info');   
        }else if(position == ''){
         swal('Notification', 'Please Enter Position', 'info');   
        }else if(theory_training == ''){
         swal('Notification', 'Please Select Theory Training Status', 'info');   
        }else if(training_date == ''){
         swal('Notification', 'Please Enter Training Date', 'info');   
        }else if(date_hired == ''){
         swal('Notification', 'Please Enter Date Hired', 'info');   
        }
        // else if(theory_remarks == ''){
        //  swal('Notification', 'Please Enter ', 'info');   
        // }
else{


    $.ajax({
        url: '../../process/ptt/register.php',
        type: 'POST',
        cache: false,
        data:{
            method: 'register_training_record',
            registration_code:registration_code,
            batch_no:batch_no,
            employee_num:employee_num,
            gender:gender,
            full_name:full_name,
            department:department,
            position:position,
            theory_training:theory_training,
            training_date:training_date,
            date_hired:date_hired,
            theory_remarks:theory_remarks
        },success:function(x){

        if (x == 'Training Record Already Exist!') {
           swal('Notification',x,'info');
           $('#batch_no').val('');
           $('#employee_num').val('');
           $('#gender').val('');
           $('#full_name').val('');
           $('#department').val('');
           $('#position').val('');
           $('#theory_training').val('');
           $('#training_date').val('');
           $('#date_hired').val('');
           $('#theory_remarks').val('');
            }else{
           
           swal('SUCCESS',x,'success');
          
         }
           $('#batch_no').val('');
           $('#employee_num').val('');
           $('#gender').val('');
           $('#full_name').val('');
           $('#department').val('');
           $('#position').val('');
           $('#theory_training').val('');
           $('#training_date').val('');
           $('#date_hired').val('');
           $('#theory_remarks').val('');
           load_prev();         
        }
    });

 }
}

const load_prev =()=>{
     var registration_code = $('#registration_code').html();

    $.ajax({
        url:'../../process/ptt/register.php',
        type:'POST',
        cache:false,
        data:{
            method:'preview_training_record_data',
            registration_code:registration_code
        },success:function(response){
            $('#preview_training_record').html(response);
        }
    });
}
</script>
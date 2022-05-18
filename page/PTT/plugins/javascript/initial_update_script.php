<script type="text/javascript">
 const register_training =()=> {    
    setTimeout(generateBatchID,100); 
} 

// GENERATE BATCH ID
const generateBatchID =()=>{
    $.ajax({
        url: '../../process/ptt/initial_record.php',
        type: 'POST',
        cache: false,
        data:{
            method: 'generateBatchCode'
        },success:function(response){
            $('#initial_registration_code').html(response);
        }
    });
}


const load_initial_training_records =()=>{
	var batch_no  = document.getElementById('batch_no_initial').value;
    var employee_num = document.getElementById('employee_num_initial').value;
    var full_name = document.getElementById('full_name_initial').value;


	$('#spinner').css('display','block');
	$.ajax({
		url: '../../process/ptt/initial_record.php',
                type: 'POST',
                cache: false,
                data:{
                    method: 'fetch_for_update',
                    batch_no:batch_no,
                    employee_num:employee_num,
                    full_name:full_name
                },success:function(response){
                   document.getElementById('view_data_initial_training_record').innerHTML = response;
                      $('#spinner').fadeOut(function(){                       
                   });
                }
	});
}

const get_training_record =(param)=>{
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

document.getElementById('initial_id').value = id;
document.getElementById('initial_batch_no_update').value = batch_no;
document.getElementById('emp_id_update').value = employee_num;
document.getElementById('initial_gender_update').value = gender;
document.getElementById('initial_full_name_update').value = full_name;
document.getElementById('initial_department_update').value = department;
document.getElementById('initial_position_update').value = position;
document.getElementById('initial_date_hired_update').value = date_hired;

} 

const update_initial_record =()=>{
    var initial_registration_code = document.querySelector('#initial_registration_code').innerHTML;
    var emp_id = document.getElementById('emp_id_update').value;
    var initial_process = document.getElementById('initial_process_update').value;
    var initial_status = document.getElementById('initial_status_update').value;
    var initial_training_date = document.getElementById('initial_training_date_update').value;
    var initial_training_end_date_updates = document.getElementById('initial_training_ends_date_updates').value;
     $.ajax({
        url: '../../process/ptt/initial_record.php',
        type: 'POST', 
        cache: false,
        data:{
            method: 'update_initial_record_data',
            initial_registration_code:initial_registration_code,
            emp_id:emp_id,
            initial_process:initial_process,
            initial_status:initial_status,
            initial_training_date:initial_training_date,
            initial_training_end_date_updates:initial_training_end_date_updates
        },success:function(x){

        if (x == 'Training Record Already Exist!') {
        	    swal('Notification',x,'info');
                
            }else{
                load_initial_training_records();
                swal('Success!', 'Successfully', 'success');
            }
                 
        }
    });

}

function export_initial_training_records(table_id, separator = ',') {
    // Select rows from table_id
    var rows = document.querySelectorAll('table#' + table_id + ' tr');
    // Construct csv
    var csv = [];
    for (var i = 0; i < rows.length; i++) {
        var row = [], cols = rows[i].querySelectorAll('td, th');
        for (var j = 0; j < cols.length; j++) {
            var data = cols[j].innerText.replace(/(\r\n|\n|\r)/gm, '').replace(/(\s\s)/gm, ' ')
            data = data.replace(/"/g, '""');
            // Push escaped string
            row.push('"' + data + '"');
        }
        csv.push(row.join(separator));
    }
    var csv_string = csv.join('\n');
    // Download it
    var filename = 'List of Training Records'+ '_' + new Date().toLocaleDateString() + '.csv';
    var link = document.createElement('a');
    link.style.display = 'none';
    link.setAttribute('target', '_blank');
    link.setAttribute('href', 'data:text/csv;charset=utf-8,' + encodeURIComponent(csv_string));
    link.setAttribute('download', filename);
    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);
}		
</script>
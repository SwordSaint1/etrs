<script type="text/javascript">

const load_theory_training_records =()=>{
    var batch_no  = document.getElementById('batch_no').value;
    var employee_num = document.getElementById('employee_num').value;
    var full_name = document.getElementById('full_name').value;

     $('#spinner').css('display','block');

     $.ajax({
         url: '../../process/ptt/view_record.php',
                type: 'POST',
                cache: false,
                data:{
                    method: 'fetch_training_record',
                    batch_no:batch_no,
                    employee_num:employee_num,
                    full_name:full_name
                },success:function(response){
                     document.getElementById('view_data_training_record').innerHTML = response;
                      $('#spinner').fadeOut(function(){                       
                   });
                }
    });
}

function export_training_records(table_id, separator = ',') {
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


const get_training_record_ptt =(param)=>{
    var string = param.split('~!~');
    var id = string[0];
    var batch_no = string[1];
    var provider = string[2];
    var employee_num = string[3];
    var maiden_name = string[4];
    var full_name = string[5];
    var gender = string[6];
    var department = string[7];
    var position = string[8];
    var date_hired = string[9];
    var theory_training = string[10];
    var training_date = string[11];
    var training_end_date = string[12];
    var theory_remarks = string[13];

document.getElementById('id_ptt_update').value = id;
document.getElementById('batch_no_ptt_update').value = batch_no;
document.getElementById('provider_ptt_update').value = provider;
document.getElementById('employee_num_ptt_update').value = employee_num;
document.getElementById('maiden_name_ptt_update').value = maiden_name;
document.getElementById('full_name_ptt_update').value = full_name;
document.getElementById('gender_ptt_update').value = gender;
document.getElementById('department_ptt_update').value = department;
document.getElementById('position_ptt_update').value = position;
document.getElementById('date_hired_ptt_update').value = date_hired;
document.getElementById('theory_training_ptt_update').value = theory_training;
document.getElementById('training_date_ptt_update').value = training_date;
document.getElementById('training_end_date_ptt_update').value = training_end_date;
document.getElementById('theory_remarks_ptt_update').value = theory_remarks;
}	

const ptt_update =()=>{

var id = document.getElementById('id_ptt_update').value;
var batch_no = document.getElementById('batch_no_ptt_update').value;
var provider = document.getElementById('provider_ptt_update').value;
var employee_num = document.getElementById('employee_num_ptt_update').value;
var maiden_name = document.getElementById('maiden_name_ptt_update').value;
var full_name = document.getElementById('full_name_ptt_update').value;
var gender = document.getElementById('gender_ptt_update').value;
var department = document.getElementById('department_ptt_update').value;
var position = document.getElementById('position_ptt_update').value;
var date_hired = document.getElementById('date_hired_ptt_update').value;
var theory_training = document.getElementById('theory_training_ptt_update').value;
var training_date = document.getElementById('training_date_ptt_update').value;
var training_end_date = document.getElementById('training_end_date_ptt_update').value;
var theory_remarks = document.getElementById('theory_remarks_ptt_update').value;

    $.ajax({
          url: '../../process/ptt/view_record.php',
                type: 'POST',
                cache: false,
                data:{
                    method: 'update_ptt_record',
                    id:id,
                    batch_no:batch_no,
                    provider:provider,
                    employee_num:employee_num,
                    maiden_name:maiden_name,
                    full_name:full_name,
                    gender:gender,
                    department:department,
                    position:position,
                    date_hired:date_hired,
                    theory_training:theory_training,
                    training_date:training_date,
                    training_end_date:training_end_date,
                    theory_remarks:theory_remarks
                },success:function(response){
                     
                    if (response == 'success') {
                    swal('SUCCESS','Data Updated','success');
                    load_theory_training_records();
                    }else{
                        swal('Error','Error','error');
                    load_theory_training_records();
                    }
                }
    });

}
</script>
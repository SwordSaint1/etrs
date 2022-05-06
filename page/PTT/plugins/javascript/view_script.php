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
</script>
<?php
    // error_reporting(0);
    require '../conn.php';
    if(isset($_POST['upload'])){
        $csvMimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain');
        
        if(!empty($_FILES['file']['name']) && in_array($_FILES['file']['type'],$csvMimes)){
            if(is_uploaded_file($_FILES['file']['tmp_name'])){
                //READ FILE
                $csvFile = fopen($_FILES['file']['tmp_name'],'r');
                // SKIP FIRST LINE
                fgetcsv($csvFile);
                // PARSE
                $error = 0;
                while(($line = fgetcsv($csvFile)) !== false){
                    $emp_id = $line[0];
                    $initial_process = $line[1];
                    $initial_status = $line[2];
                    $initial_training_date = $line[3];
                    $initial_training_end_dates = $line[4];
                    
                    // CHECK IF BLANK DATA
                    if($line[0] == '' || $line[1] == '' || $line[2] == '' || $line[3] == '' || $line[4] == ''){
                        // IF BLANK DETECTED ERROR += 1
                        $error = $error + 1;
                    }else{
                        // CHECK DATA
                    $prevQuery = "SELECT id,emp_id,initial_process,initial_training_date FROM etrs_initial WHERE emp_id = '$line[0]' AND initial_process = '$line[1]'  ";
                    $res = $conn->prepare($prevQuery);
                    $res->execute();
                    if($res->rowCount() > 0){
                        foreach($res->fetchALL() as $x){
                            $id = $x['id'];
                            $initial_process = $x['initial_process'];
                        }

                         $dates = new DateTime($initial_training_date);
                        $training_dates = date_format($dates, "Y-m-d");
                         $datess = new DateTime($initial_training_end_dates);
                        $training_end_dates = date_format($datess, "Y-m-d");
                          $initial_process = str_replace(' ', '_', $initial_process);
                        
                        $update = "UPDATE etrs_initial SET emp_id = '$emp_id', initial_process = '$initial_process', initial_status = '$initial_status', initial_training_date = '$training_dates', initial_registration_code = '$itc', initial_training_end_dates = '$training_end_dates' WHERE id ='$id' AND initial_process = '$initial_process'";
                        $stmt = $conn->prepare($update);
                        if($stmt->execute()){
                            $error = 0;
                        }else{
                            $error = $error + 1;
                        }
                        
                    }else{
                        $dates = new DateTime($initial_training_date);
                        $training_dates = date_format($dates, "Y-m-d");
                        $datess = new DateTime($initial_training_end_dates);
                        $training_end_dates = date_format($datess, "Y-m-d");

                         $initial_process = str_replace(' ', '_', $initial_process);
                        $insert = "INSERT INTO etrs_initial (`emp_id`,`initial_process`,`initial_status`,`initial_training_date`,`initial_registration_code`,`initial_training_end_dates`) VALUES ('$emp_id','$initial_process','$initial_status','$training_dates','$itc','$training_end_dates')";
                        $stmt = $conn->prepare($insert);
                        if($stmt->execute()){
                            $error = 0;
                        }else{
                            $error = $error + 1;
                        }
                    }
                    }
                }
                
                fclose($csvFile);
               if($error == 0){
                    echo '<script>
                    var x = confirm("SUCCESS! # OF ERRORS '.$error.' ");
                    if(x == true){
                        location.replace("../../page/ptt/initial_import.php");
                    }else{
                        location.replace("../../page/ptt/initial_import.php");
                    }
                </script>'; 
               }else{
                    echo '<script>
                    var x = confirm("WITH ERROR! # OF ERRORS '.$error.' ");
                    if(x == true){
                        location.replace("../../page/ptt/initial_import.php");
                    }else{
                        location.replace("../../page/ptt/initial_import.php");
                    }
                </script>'; 
               }
            }else{
                echo '<script>
                        var x = confirm("CSV FILE NOT UPLOADED! # OF ERRORS '.$error.' ");
                        if(x == true){
                            location.replace("../../page/ptt/initial_import.php");
                        }else{
                            location.replace("../../page/ptt/initial_import.php");
                        }
                    </script>';
            }
        }else{
            echo '<script>
                        var x = confirm("INVALID FILE FORMAT! # OF ERRORS '.$error.' ");
                        if(x == true){
                            location.replace("../../page/ptt/initial_import.php");
                        }else{
                            location.replace("../../page/ptt/initial_import.php");
                        }
                    </script>';
        }
        
    }

    // KILL CONNECTION
    $conn = null;
?>
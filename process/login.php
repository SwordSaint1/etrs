<?php
 include 'conn.php';
 session_start();
 if (isset($_POST['login_btn'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    // $role = $_POST['role'];
    $section_acc = $_POST['section_acc'];
    if (empty($username)) {
        echo 'Please Enter Username';
    }else if(empty($password)){
        echo 'Please Enter Password';
    }else if(empty($section_acc)){
        echo 'Please Select Section';
    }else{

        $check = "SELECT id,role,section FROM etrs_account WHERE BINARY username = '$username' AND BINARY password = '$password' AND section = '$section_acc'";
        $stmt = $conn->prepare($check);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            foreach($stmt->fetchALL() as $x){
                $role = $x['role'];
                $section = $x['section'];
            }
            if($section == 'PTT'){
                $_SESSION['username'] = $username;
                header('location: page/PTT/dashboard.php');
            }else if($section == 'MNTT'){
                $_SESSION['username'] = $username;
                header('location: page/MNTT/dashboard.php');    
            }else if($section == 'SEP'){               
                $_SESSION['username'] = $username;
                header('location: page/SEP/dashboard.php'); 

            }
        }else{
            echo 'Wrong Username, Password or Section';
        }
    }
 }
 if (isset($_POST['Logout'])) {
    session_unset();
    session_destroy();
    header('location: ../index.php');
 }


?>
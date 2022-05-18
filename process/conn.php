<?php
    $servername = 'localhost';
    $username = 'root';
    $pass = 'trspassword2022';
    date_default_timezone_set('Asia/Manila');
    $server_date_time = date('Y-m-d H:i:s');
    $server_date_only = date('Y-m-d');
     $server_time = date('H:i:s');
     $server_year = date('Y');


     $prefix = "TC:";
        $dateCode = date('ymd');
        $randomCode = mt_rand(10000,50000);
        $tc = $prefix."".$dateCode."".$randomCode;

      $iprefix = "ITC:";
        $idateCode = date('ymd');
        $irandomCode = mt_rand(10000,50000);
        $itc = $iprefix."".$idateCode."".$irandomCode;

         $fprefix = "FTC:";
        $fdateCode = date('ymd');
        $frandomCode = mt_rand(10000,50000);
        $ftc = $fprefix."".$fdateCode."".$frandomCode;

            $ipprefix = "IPTC:";
        $ipdateCode = date('ymd');
        $iprandomCode = mt_rand(10000,50000);
        $iptc = $ipprefix."".$ipdateCode."".$iprandomCode;

        $fpprefix = "FPTC:";
        $fpdateCode = date('ymd');
        $fprandomCode = mt_rand(10000,50000);
        $fptc = $fpprefix."".$fpdateCode."".$fprandomCode;

    try {
        $conn = new PDO ("mysql:host=$servername;dbname=etrs_db",$username,$pass);

  //        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // echo "Connected successfully";
  
    }catch(PDOException $e){
        echo 'NO CONNECTION'.$e->getMessage();
    }
?>
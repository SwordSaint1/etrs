
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ETRS | Viewer</title>
  <link rel="icon" href="dist/img/ETRS.png" type="image/x-icon" />
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/ETRS.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
     
    </ul>

    <!-- Right navbar links -->
   
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/ETRS.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">VIEWER</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-file-alt"></i>
              <p>
                View Training Records

              </p>
            </a>
          </li>
        </ul>
      
      
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <section class="content">
      <div class="container-fluid">
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">View Training Records</h1>
            <br>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">ViewTraining Records</li>
            </ol>
          </div><!-- /.col -->         
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
       <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">

                     <div class="row">
                <table>
                  <tr>
                  <th><label>Batch  No:</label><input type="text" name="batch_no_viewer"  id="batch_no_viewer" class="form-control"></th>
                    <th></th>
                  <th><label>Employee No:</label><input type="text" name="emp_num_view" id="emp_num_view"  class="form-control"></th>
                    <th></th>
                  <th><label>Full Name:</label><input type="text" name="fname_view" id="fname_view"  class="form-control"></th>
                  <th><label>Department:</label><input type="text" name="dept_view" id="dept_view"  class="form-control"></th>
                  </tr>
                </table>
                  
                  </div>

                </h3> 
                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 100px;">
                    <button class="btn btn-primary" id="searchReqBtn" onclick="viewer_training_record()">Search <i class="fas fa-search"></i></button> 
                  </div>
                </div>
              </div>
                <div class="row">
                    <div class="col-sm-6">
                    <!--   &nbsp;<button class="btn btn-success " onclick="export_final_view_training_records('final_view_training_data')">Export</button> -->
                    </div>
                  </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 500px;">
                <table class="table table-head-fixed text-nowrap table-hover" id="final_view_training_data">
                <thead style="text-align:center;">
                     <th>#</th>
                    <th>Batch No </th>
                    <th>SP ID Number </th>
                    <th>FALP ID Number </th>
                    <th>Maiden Name </th>
                    <th>Full Name </th>
                    <th>Gender </th>
                    <th>Department </th>
                    <th>Position </th>
                    <th>SP Date Hired</th>
                    <th>FALP Date Hired</th>
                    <th>Theory Training Status</th>
                    <th>Training Start Date </th>
                    <th>Training End Date </th>
                    <th>Remarks</th>
            </thead>
            <tbody id="viewer_training_records" style="text-align:center;"></tbody>
                </table>
                 <div class="row">
                  <div class="col-6">
                    
                  </div>
                  <div class="col-6">
                      <input type="hidden" name="" id="audit_data">
   
                    <div class="spinner" id="spinner" style="display:none;">
                        
                        <div class="loader float-sm-center"></div>    
                    </div>
             
                  </div>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
</div>
</div>
</section>
  <!-- /.content-wrapper -->
 <footer class="main-footer">
    <strong>Copyright &copy; 2022. Developed by: JJ Buendia</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0.0
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<?php 
include 'modals/viewer/status.php';

?>
<!-- jQuery -->
<script src="node_modules/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<!-- toastr -->
<script type="text/javascript" src="node_modules/sweetalert/dist/sweetalert.min.js"></script>
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>

<script type="text/javascript">

  const viewer_training_record =()=>{
    var employee_num = document.getElementById('emp_num_view').value;
  var full_name = document.getElementById('fname_view').value;
  var batch_no = document.getElementById('batch_no_viewer').value;
  var department = document.getElementById('dept_view').value;
     $.ajax({
      url: 'process/viewer.php',
                type: 'POST',
                cache: false,
                data:{
                    method: 'fetch_viewer',
                    employee_num:employee_num,
                    full_name:full_name,
                    batch_no:batch_no,
                    department:department
                },success:function(response){
                   document.getElementById('viewer_training_records').innerHTML = response;
                      
                }
              });
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
  
 console.log(batch_no);
document.getElementById('id_viewer').value = id;
document.getElementById('batch_no_viewers').value = batch_no;
document.getElementById('provider_viewer').value = provider;
document.getElementById('employee_num_viewer').value = employee_num;
document.getElementById('maiden_name_viewer').value = maiden_name;
document.getElementById('full_name_viewer').value = full_name;
document.getElementById('gender_viewer').value = gender;
document.getElementById('department_viewer').value = department;
document.getElementById('position_viewer').value = position;

training_taken_initial();
// training_needs_initial();
training_taken_final();
// training_needs_final();
training_taken_sb_initial();
// training_needs_sb_initial();
training_taken_sb_final();
// training_needs_sb_final();
} 

const training_taken_initial =()=>{
  var id = document.getElementById('id_viewer').value;
  var batch_no = document.getElementById('batch_no_viewers').value;
  var provider = document.getElementById('provider_viewer').value;
  var employee_num = document.getElementById('employee_num_viewer').value;
  var maiden_name = document.getElementById('maiden_name_viewer').value;
  var full_name = document.getElementById('full_name_viewer').value;
  var gender = document.getElementById('gender_viewer').value;
  var department = document.getElementById('department_viewer').value;
  var position = document.getElementById('position_viewer').value;
   $.ajax({
      url: 'process/viewer.php',
                type: 'POST',
                cache: false,
                data:{
                    method: 'fetch_training_taken',
                    id:id,
                    batch_no:batch_no,
                    provider:provider,
                    employee_num:employee_num,
                    maiden_name:maiden_name,
                    full_name:full_name,
                    gender:gender,
                    department:department,
                    position:position
                },success:function(response){
                   document.getElementById('initial_taken').innerHTML = response;
                      
                }
              });
}

// const training_needs_initial =()=>{
//   var id = document.getElementById('id_viewer').value;
//   var batch_no = document.getElementById('batch_no_viewer').value;
//   var provider = document.getElementById('provider_viewer').value;
//   var employee_num = document.getElementById('employee_num_viewer').value;
//   var maiden_name = document.getElementById('maiden_name_viewer').value;
//   var full_name = document.getElementById('full_name_viewer').value;
//   var gender = document.getElementById('gender_viewer').value;
//   var department = document.getElementById('department_viewer').value;
//   var position = document.getElementById('position_viewer').value;
//    $.ajax({
//       url: 'process/viewer.php',
//                 type: 'POST',
//                 cache: false,
//                 data:{
//                     method: 'fetch_needs_initial',
//                     id:id,
//                     batch_no:batch_no,
//                     provider:provider,
//                     employee_num:employee_num,
//                     maiden_name:maiden_name,
//                     full_name:full_name,
//                     gender:gender,
//                     department:department,
//                     position:position
//                 },success:function(response){
//                    document.getElementById('initial_needs').innerHTML = response;
                      
//                 }
//               });
// }


const training_taken_final =()=>{
  var id = document.getElementById('id_viewer').value;
  var batch_no = document.getElementById('batch_no_viewers').value;
  var provider = document.getElementById('provider_viewer').value;
  var employee_num = document.getElementById('employee_num_viewer').value;
  var maiden_name = document.getElementById('maiden_name_viewer').value;
  var full_name = document.getElementById('full_name_viewer').value;
  var gender = document.getElementById('gender_viewer').value;
  var department = document.getElementById('department_viewer').value;
  var position = document.getElementById('position_viewer').value;
   $.ajax({
      url: 'process/viewer.php',
                type: 'POST',
                cache: false,
                data:{
                    method: 'fetch_training_taken_final',
                    id:id,
                    batch_no:batch_no,
                    provider:provider,
                    employee_num:employee_num,
                    maiden_name:maiden_name,
                    full_name:full_name,
                    gender:gender,
                    department:department,
                    position:position
                },success:function(response){
                   document.getElementById('final_taken').innerHTML = response;
                      
                }
              });
}

// const training_needs_final =()=>{
//   var id = document.getElementById('id_viewer').value;
//   var batch_no = document.getElementById('batch_no_viewer').value;
//   var provider = document.getElementById('provider_viewer').value;
//   var employee_num = document.getElementById('employee_num_viewer').value;
//   var maiden_name = document.getElementById('maiden_name_viewer').value;
//   var full_name = document.getElementById('full_name_viewer').value;
//   var gender = document.getElementById('gender_viewer').value;
//   var department = document.getElementById('department_viewer').value;
//   var position = document.getElementById('position_viewer').value;
//    $.ajax({
//       url: 'process/viewer.php',
//                 type: 'POST',
//                 cache: false,
//                 data:{
//                     method: 'fetch_needs_final',
//                     id:id,
//                     batch_no:batch_no,
//                     provider:provider,
//                     employee_num:employee_num,
//                     maiden_name:maiden_name,
//                     full_name:full_name,
//                     gender:gender,
//                     department:department,
//                     position:position
//                 },success:function(response){
//                    document.getElementById('final_needs').innerHTML = response;
                      
//                 }
//               });
// }

const training_taken_sb_initial =()=>{
  var id = document.getElementById('id_viewer').value;
  var batch_no = document.getElementById('batch_no_viewers').value;
  var provider = document.getElementById('provider_viewer').value;
  var employee_num = document.getElementById('employee_num_viewer').value;
  var maiden_name = document.getElementById('maiden_name_viewer').value;
  var full_name = document.getElementById('full_name_viewer').value;
  var gender = document.getElementById('gender_viewer').value;
  var department = document.getElementById('department_viewer').value;
  var position = document.getElementById('position_viewer').value;
   $.ajax({
      url: 'process/viewer.php',
                type: 'POST',
                cache: false,
                data:{
                    method: 'fetch_training_taken_sb_initial',
                    id:id,
                    batch_no:batch_no,
                    provider:provider,
                    employee_num:employee_num,
                    maiden_name:maiden_name,
                    full_name:full_name,
                    gender:gender,
                    department:department,
                    position:position
                },success:function(response){
                  console
                   document.getElementById('sb_initial_taken').innerHTML = response;
                      
                }
              });
}

// const training_needs_sb_initial =()=>{
//   var id = document.getElementById('id_viewer').value;
//   var batch_no = document.getElementById('batch_no_viewer').value;
//   var provider = document.getElementById('provider_viewer').value;
//   var employee_num = document.getElementById('employee_num_viewer').value;
//   var maiden_name = document.getElementById('maiden_name_viewer').value;
//   var full_name = document.getElementById('full_name_viewer').value;
//   var gender = document.getElementById('gender_viewer').value;
//   var department = document.getElementById('department_viewer').value;
//   var position = document.getElementById('position_viewer').value;
//    $.ajax({
//       url: 'process/viewer.php',
//                 type: 'POST',
//                 cache: false,
//                 data:{
//                     method: 'fetch_needs_sb_initial',
//                     id:id,
//                     batch_no:batch_no,
//                     provider:provider,
//                     employee_num:employee_num,
//                     maiden_name:maiden_name,
//                     full_name:full_name,
//                     gender:gender,
//                     department:department,
//                     position:position
//                 },success:function(response){
//                    document.getElementById('sb_initial_needs').innerHTML = response;
                      
//                 }
//               });
// }


const training_taken_sb_final =()=>{
  var id = document.getElementById('id_viewer').value;
  var batch_no = document.getElementById('batch_no_viewers').value;
  var provider = document.getElementById('provider_viewer').value;
  var employee_num = document.getElementById('employee_num_viewer').value;
  var maiden_name = document.getElementById('maiden_name_viewer').value;
  var full_name = document.getElementById('full_name_viewer').value;
  var gender = document.getElementById('gender_viewer').value;
  var department = document.getElementById('department_viewer').value;
  var position = document.getElementById('position_viewer').value;
   $.ajax({
      url: 'process/viewer.php',
                type: 'POST',
                cache: false,
                data:{
                    method: 'fetch_training_taken_sb_final',
                    id:id,
                    batch_no:batch_no,
                    provider:provider,
                    employee_num:employee_num,
                    maiden_name:maiden_name,
                    full_name:full_name,
                    gender:gender,
                    department:department,
                    position:position
                },success:function(response){
                   document.getElementById('sb_final_taken').innerHTML = response;
                      
                }
              });
}

// const training_needs_sb_final =()=>{
//   var id = document.getElementById('id_viewer').value;
//   var batch_no = document.getElementById('batch_no_viewer').value;
//   var provider = document.getElementById('provider_viewer').value;
//   var employee_num = document.getElementById('employee_num_viewer').value;
//   var maiden_name = document.getElementById('maiden_name_viewer').value;
//   var full_name = document.getElementById('full_name_viewer').value;
//   var gender = document.getElementById('gender_viewer').value;
//   var department = document.getElementById('department_viewer').value;
//   var position = document.getElementById('position_viewer').value;
//    $.ajax({
//       url: 'process/viewer.php',
//                 type: 'POST',
//                 cache: false,
//                 data:{
//                     method: 'fetch_needs_sb_final',
//                     id:id,
//                     batch_no:batch_no,
//                     provider:provider,
//                     employee_num:employee_num,
//                     maiden_name:maiden_name,
//                     full_name:full_name,
//                     gender:gender,
//                     department:department,
//                     position:position
//                 },success:function(response){
//                    document.getElementById('sb_final_needs').innerHTML = response;
                      
//                 }
//               });
// }


</script>
</body>
</html>

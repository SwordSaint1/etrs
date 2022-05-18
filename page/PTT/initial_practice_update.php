<?php include 'plugins/navbar.php'; ?>
<?php include 'plugins/sidebar/initial_practice_updatebar.php'; ?>

  <section class="content">
      <div class="container-fluid">
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Update Initial Practice Training Records</h1>
            <br>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Update Initial Practice Training Records</li>
            </ol>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <div class="row">
             
            </div>
          </div>
        </div><!-- /.row -->
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
                  <th><label>Batch  No:</label><input type="text" name="batch_no"  id="batch_initial_practice" class="form-control"></th>
                    <th></th>
                  <th><label>Employee No:</label><input type="text" name="employee_num_initial" id="employee_num_initial_practice"  class="form-control"></th>
                    <th></th>
                  <th><label>Full Name:</label><input type="text" name="full_name_initial" id="full_name_initial_practice"  class="form-control"></th>
                  </tr>
                </table>
                  </div>
                </h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 100px;">
                    <button class="btn btn-primary" id="searchReqBtn" onclick="load_initial_practice_training_records()">Search <i class="fas fa-search"></i></button> 
                  </div>
                </div>
              </div>
                <div class="row">
                    <div class="col-sm-6">
                      &nbsp;<button class="btn btn-success " onclick="export_initial_practice_training_records('initial_practice_training_data')">Export</button>
                    </div>
                  </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 420px;">
                <table class="table table-head-fixed text-nowrap table-hover" id="initial_practice_training_data">
                <thead style="text-align:center;">
                    <th>#</th>
                    <th>Batch No</th>
                    <th>Employee No</th>
                    <th>Full Name</th>
                    <th>Gender</th>
                    <th>Department</th>
                    <th>Position</th>
                    
            </thead>
            <tbody id="view_data_initial_practice_training_record" style="text-align:center;"></tbody>
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

<?php include 'plugins/footer.php'; ?>
<?php include 'plugins/javascript/initial_practice_update_script.php'; ?>
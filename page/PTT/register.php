
<?php include 'plugins/navbar.php';?>
<?php include 'plugins/sidebar/registerbar.php';?>
  <!-- Main Sidebar Container -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Register Training Records
            </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Register Training Records</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                   <div class="row">
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <a href="" style="color:white;" data-toggle="modal" data-target="#register" onclick="register_training()">
                <h5>Add Training Record</h5>
                <br>
                <br>
               
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
               </a>
              <a href="#" class="small-box-footer" data-toggle="modal" data-target="#register" onclick="register_training()">Proceed <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div> 
 
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-secondary">
              <div class="inner">
                 <a href="" style="color:white;" data-toggle="modal" data-target="#import_training_records">
                <h5>Import <br>Training Records</h5>
                <br>
              </div>
              <div class="icon">
                <i class="fas fa-upload"></i>
              </div>
              </a>
              <a href="#" class="small-box-footer" data-toggle="modal" data-target="#import_training_records">Proceed <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
                <a href="../../template/ptt_template.csv" style="color:white;">
                <h5>Download Template <br> Training Records</h5>
                <br>
              </div>
              <div class="icon">
                <i class="fas fa-download"></i>
              </div>
              </a>
              <a href="../../template/ptt_template.csv" class="small-box-footer">Proceed <i class="fas fa-arrow-circle-right"></i></a>
              
            </div>
          </div>
        
        </div>
      
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
               
                </div>
              </form>
            </div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
</div>



<?php include 'plugins/footer.php';?>
<?php include 'plugins/javascript/register_script.php'; ?>
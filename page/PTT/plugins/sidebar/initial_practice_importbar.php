  <aside class="main-sidebar sidebar-dark-info elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="../../dist/img/ETRS.png" alt="ETRS Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light"><?=$section;?></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../dist/img/user.png" class="img-circle elevation-2" alt="User Image">

        </div>
        <div class="info">
          <a href="#" class="d-block"><?=$name;?></a>
        </div>
      </div>



      <!-- Sidebar Menu -->
      <nav class="mt-2">

        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
            <a href="dashboard.php" class="nav-link">
              <i class="fas fa-chalkboard"></i>
              <p>
                Dashboard
               
              </p>
            </a>
          </li>
          <li class="nav-item menu-close">
            
            <a href="#" class="nav-link">
              <i class="  fa fa-edit"></i>
              <p>
               TT Training Records
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="register.php" class="nav-link ">
                  <i class="far fa-dot-circle nav-icon"></i>
                  <p>Register Training Records</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="view.php" class="nav-link">
                  <i class="far fa-dot-circle nav-icon"></i>
                  <p>View Training Records</p>
                </a>
              </li>
            </ul>
          </li>

            <li class="nav-item menu-close">
            
            <a href="#" class="nav-link">
              <i class="fa fa-edit"></i>
              <p>
               Initial Training Records
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="initial_import.php" class="nav-link ">
                  <i class="far fa-dot-circle nav-icon"></i>
                  <p>Import Training Records</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="initial_update.php" class="nav-link ">
                  <i class="far fa-dot-circle nav-icon"></i>
                  <p>Update Training Records</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="initial_view.php" class="nav-link">
                  <i class="far fa-dot-circle nav-icon"></i>
                  <p>View Training Records</p>
                </a>
              </li>
            </ul>
          </li>
            
              <li class="nav-item menu-close">
            
            <a href="#" class="nav-link">
              <i class="  fa fa-edit"></i>
              <p>
               Final Training Records
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="final_import.php" class="nav-link ">
                  <i class="far fa-dot-circle nav-icon"></i>
                  <p>Import Training Records</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="final_update.php" class="nav-link ">
                  <i class="far fa-dot-circle"></i>
                  <p>Update Training Records</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="final_view.php" class="nav-link">
                  <i class="far fa-dot-circle nav-icon"></i>
                  <p>View Training Records</p>
                </a>
              </li>
            </ul>
          </li>
            <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon  fas fa-book nav-icon"></i>
              <p>
                Special Process
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">        
              <li class="nav-item menu-open">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Initial Practice Training
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="initial_practice_import.php" class="nav-link active">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Import Training Records</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="initial_practice_update.php" class="nav-link ">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Update Training Records</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="initial_practice_view.php" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>View Training Records</p>
                    </a>
                  </li>
                </ul>
              </li>
              
            </ul>
            <ul class="nav nav-treeview">        
              <li class="nav-item menu-close">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Final Practice Training
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="final_practice_import.php" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Import Training Records</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="final_practice_update.php" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Update Training Records</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="final_practice_view.php" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>View Training Records</p>
                    </a>
                  </li>
                </ul>
              </li>
              
            </ul>
          </li>
           
          </li>  
         <?php include 'logout.php' ;?>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

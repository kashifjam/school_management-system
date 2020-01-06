<?php
//for login page.by coding this check only admin can login .
session_start();
if(!isset($_SESSION['email']))
{
  header('location:login.php?please_login_first');
  exit();
}
?>
<?php include('includes/header.php'); ?>
<?php include('includes/navbar.php');?>


    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>
            <li>
             <form action="logout.php" method="post">
              <button class="btn btn-danger" name="logout" type="submit">Logout</button>
              </form>
            </li>

     

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">

            <h1 class="h3 mb-0 text-gray-800">Welcome to School Management System</h1>
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Students</div>
                     <?php 
                      $con = mysqli_connect('localhost','root','','practice');
                      $query = "SELECT count(id) AS total FROM students";
                      $run = mysqli_query($con,$query);
                      $result = mysqli_fetch_assoc($run);
                      $num_rows = $result['total'];
                      echo $num_rows;
                     ?>
                    </div>
                    <div class="col-auto">
                    
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Classes</div><?php 
                      $con = mysqli_connect('localhost','root','','practice');
                      $query = "SELECT count(id) AS total FROM classes";
                      $run = mysqli_query($con,$query);
                      $result = mysqli_fetch_assoc($run);
                      $num_rows = $result['total'];
                      echo $num_rows;
                     ?>
                    </div>
                    <div class="col-auto">
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Sections</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <?php 
                      $con = mysqli_connect('localhost','root','','practice');
                      $query = "SELECT count(id) AS total FROM sections";
                      $run = mysqli_query($con,$query);
                      $result = mysqli_fetch_assoc($run);
                      $num_rows = $result['total'];
                      echo $num_rows;
                     ?>
                        </div>
                        <div class="col">
                          
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                     
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Total Departments</div>
                      <?php 
                      $con = mysqli_connect('localhost','root','','practice');
                      $query = "SELECT count(*) AS total FROM departments";
                      $run = mysqli_query($con,$query);
                      $result = mysqli_fetch_assoc($run);
                      $num_rows = $result['total'];
                      echo $num_rows;
                     ?>
                    </div>
                  
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <img src="pic2.jpg" class="img-fluid img-responsive" style="" >
          </div>

          <!-- Content Row -->


  </div>
  <!-- End of Page Wrapper -->
 <?php include('includes/scripts.php'); ?>
 <?php include('includes/footer.php'); ?>
<?php include 'includes/header.php'; 
include 'includes/navbar.php'; ?>



<!-- Begin Page Content -->
<div class="container-fluid" style="margin-top: 55px;">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Classes Details</h1>


  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3 row">
      <div class="col-md-4">
        <h6 class="m-0 font-weight-bold text-primary">Classes Details </h6>
      </div>
      <div class="col-md-4"></div>
      <div class="col-md-4 pull-right">
        <form method="POST" action="class_detail.php">
          <select class="form-control validate" name="dept_fk_id" style="border: none;border-bottom: 1px solid gray;">

            <option>Select Department</option> 
            <?php 
            $con = mysqli_connect('localhost','root','','practice');
            $query = "SELECT * FROM departments;";
            $run = mysqli_query($con,$query);
            $data = mysqli_num_rows($run);
            if($data != 0){
              ?>
              <?php 
              while( $result = mysqli_fetch_assoc($run))
              {
                ?>

                <option value="<?php echo $result['id']; ?>"> <?php echo $result['department_name']; ?> </option> 
              <?php }
            }
            
            ?>
          </select>
          <button type="submit" class="btn btn-primary" style="float: right;" name="search">Search</button>
        </form>
      </div>
    </div>
    <?php 
    if (isset($_POST['search'])) {
      
    
              $dept_id=$_POST['dept_fk_id'];
              $con = mysqli_connect('localhost','root','','practice');
              $query = "SELECT classes.id as classID,classes.class_name as className,departments.department_name as deptName  FROM `classes` INNER JOIN departments ON departments.id=classes.dept_fk_id WHERE classes.dept_fk_id='$dept_id'";
              $run = mysqli_query($con,$query);
              $data = mysqli_num_rows($run);
              if($data != 0){
             ?>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th><strong>Class</strong></th>
                      <th><strong>Department</strong></th>
                      <th><strong>Action</strong></th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                     
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php 
                     while( $result = mysqli_fetch_assoc($run))
                    {
                    ?>      
                    <tr>
                      <td><?php echo $result['className']; ?></td>
                      <td><?php echo $result['deptName']; ?></td>
                      <td><a href="update_class.php?id=<?php echo $result['classID']?>" class="btn btn-primary ">Edit</a>
                    <a href="delete_class.php?id=<?php echo $result['classID']?>" class="btn btn-danger " >Delete</a></td>
                    </tr>
                  <?php }
                }
              }
                ?>

                  </tbody>
                </table>
              </div>
            </div>
  </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Footer -->


</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->





</body>

</html>
<?php include('includes/scripts.php'); ?>
<?php include('includes/footer.php'); ?>
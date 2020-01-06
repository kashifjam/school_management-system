
<?php include 'includes/header.php'; 
 include 'includes/navbar.php'; ?>



        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Teacher Details</h1>
          

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Teacher Details </h6>
            </div>
            <?php 
            // teachers ka data show kerny kaliye coding
              $con = mysqli_connect('localhost','root','','practice');
              $query = "SELECT * FROM `teachers`";
              $run = mysqli_query($con,$query);
              $data = mysqli_num_rows($run);
              if($data != 0){
             ?>
            <div class="card-body">
              <div class="table-responsive text-success">
                <table class="table table-bordered text-success" id="dataTable" width="100%" cellspacing="0">
                  <thead class="text-danger">
                    <tr>
                      <th><strong>Teacher Name</strong></th>
                      <th><strong>Qualification</strong></th>
                      <th><strong>Action</strong></th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                     
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php 
                     while( $result = mysqli_fetch_assoc($run)) // fetch kerny kaliye yeh bhut zroori hai
                    {
                    ?>      
                    <tr>
                      <td><?php echo $result['teacher_name']; ?></td>
                      <td><?php echo $result['qualification']; ?></td>
                      <td><a href="update_teacher.php?id=<?php echo $result['id']?>" class="btn btn-primary ">Edit</a>
                    <a href="delete_teacher.php?id=<?php echo $result['id']?>" class="btn btn-danger " >Delete</a></td>
                    </tr>
                  <?php }
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
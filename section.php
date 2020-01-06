
<?php include 'includes/header.php'; 
 include 'includes/navbar.php'; ?>



        <!-- Begin Page Content -->
        <div class="container">
 <div class="modal-body mx-3">
       
       <div class="row">
        <div class="col-md-4 col-lg-4 col-xs-4"></div>
        <div class="md-form mb-4 col-md-4 col-lg-4 col-xs-4 bg-warning" style="padding: 25px;padding-bottom: 25px;color: black;">
          <form method="post" action="section.php">
                        <?php 

                        // for getting classes foreign key id for the purpose of joining tables.
                         $con = mysqli_connect('localhost','root','','practice');
                         $query = "SELECT * FROM `classes`"; 
                         $run = mysqli_query($con,$query);
                         $data = mysqli_num_rows($run);
                         if($data != 0){
                         ?>
          <div style="background-color: grey;padding: 25px;"><strong style="color: black;font-size: 18px;">Search Class-Wise Sections</strong></div><br>
          
          <select class="form-control validate" name="class_fk_id" style="border: none;border-bottom: 2px solid black;color: black;font-size: 19px;">   
            <option>Select Class</option>
            <?php 
                     while( $result = mysqli_fetch_assoc($run))
                    {
                    ?>

            <option value="<?php echo $result['id']; ?>"><?php echo $result['class_name']; ?></option>
          <?php }
                }
                ?>
          </select>
            <div class=" d-flex justify-content-center">
        <button class="btn btn-primary" name="submit">Search</button>
        </form>
      </div>
      <div class="col-md-4 col-lg-4 col-xs-4"></div>
      </div>
</div>
<br>
          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Section Details</h1>
          

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Section Details </h6>
            </div>
            <?php 
            // student ka data show kerny kalye coding..
              $class_id=$_POST['class_fk_id'];
              $con = mysqli_connect('localhost','root','','practice');
              $query = "SELECT * FROM `sections` INNER JOIN `classes` ON classes.id=sections.class_fk_id WHERE sections.class_fk_id='$class_id'";
              $run = mysqli_query($con,$query);
              $data = mysqli_num_rows($run);
              if($data != 0){
             ?>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered text-success" id="dataTable" width="100%" cellspacing="0">
                  <thead class="text-danger">
                    <tr>
                      <th><strong>Class</strong></th>
                      <th><strong>Section</strong></th>
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
                      <td><?php echo $result['class_name']; ?></td>
                      <td><?php echo $result['section_name']; ?></td>
                      <?php // yeh neechay edit aur delete kerny kaliye id echo ki hai aur bht zroori hai ?>
                      <td><a href="update_section.php?id=<?php echo $result['id']?>" class="btn btn-primary ">Edit</a>
                    <a href="delete_section.php?id=<?php echo $result['id']?>" class="btn btn-danger " >Delete</a></td>
                    </tr>
                  <?php }
                }
                else
                {
                	echo "<i> Section  Not   Found .  Please   try  again!</i>";
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
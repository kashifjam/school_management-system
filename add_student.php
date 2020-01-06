
<?php  include('includes/header.php'); ?>
<?php  include('includes/navbar.php'); ?>
  <div class="container">

    <div class="" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Add Student</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <form style="font-size: 11px;" action="insert_student.php" method="post">
          <i class="fas fa-user prefix grey-text"></i>
          <input type="text" id="orangeForm-name" class="form-control validate" name="student_name">
          <label data-error="wrong" data-success="right" for="orangeForm-name">Student Name</label>
        </div>
        <div class="md-form mb-5">
          <i class="fas fa-user prefix grey-text"></i>
          <input type="text" id="orangeForm-name" class="form-control validate" name="father_name">
          <label data-error="wrong" data-success="right" for="orangeForm-name">Father Name</label>
        </div>
        <div class="md-form mb-5">
          <i class="fas fa-envelope prefix grey-text"></i>
          <input type="email" id="orangeForm-email" class="form-control validate" name="email">
          <label data-error="wrong" data-success="right" for="orangeForm-email">Email Address</label>
        </div>


        <div class="md-form mb-4">
                        <?php 
                        // for getting classes foreign key id for the purpose of joining tables.
                         $con = mysqli_connect('localhost','root','','practice');
                         $query = "SELECT * FROM `classes`"; 
                         $run = mysqli_query($con,$query);
                         $data = mysqli_num_rows($run);
                         if($data != 0){
                         ?>
          <i class="fas fa-graduation-cap grey-text"></i>
          <select class="form-control validate" name="class_fk_id" style="border: none;border-bottom: 1px solid gray;">   
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
          
        </div>
        <div class="md-form mb-5">
          <i class="fas fa-info-circle prefix grey-text"></i>
          <input type="number" id="orangeForm-name" class="form-control validate" name="age">
          <label data-error="wrong" data-success="right" for="orangeForm-name">Age</label>
        </div>
        <div class="md-form mb-5">
          <i class="fas fa-tty prefix grey-text"></i>
          <input type="text" id="orangeForm-name" class="form-control validate" name="phone_number">
          <label data-error="wrong" data-success="right" for="orangeForm-name">Phone Number</label>
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-primary">Submit</button>
      </div>
    </div>
  </div>
</form>
</div>



  </div>



<?php  include('includes/scripts.php'); ?>
<?php  include('includes/footer.php'); ?>
<?php
session_start();
if(!isset($_SESSION['email']))
{
  header('location:login.php?please_login_first');
  exit();
}
?>
<?php  include('includes/header.php'); ?>
<?php  include('includes/navbar.php'); ?>

<?php $id = $_GET['id'];
$con = mysqli_connect('localhost','root','','practice');
$query = "SELECT * FROM `students` WHERE `id`='$id'";
$run = mysqli_query($con,$query);
$data = mysqli_fetch_assoc($run);
 ?>
  <div class="container">

    <div class="" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Edit Student</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <form style="font-size: 11px;" action="edit_student.php" method="post">
          <i class="fas fa-user prefix grey-text"></i>
          <input type="text" id="orangeForm-name" class="form-control validate" name="student_name"
          value="<?php echo $data['student_name'] ?>">
          <label data-error="wrong" data-success="right" for="orangeForm-name">Student Name</label>
        </div>
        <div class="md-form mb-5">
          <i class="fas fa-user prefix grey-text"></i>
          <input type="text" id="orangeForm-name" class="form-control validate" name="father_name" value="<?php echo $data['father_name'] ?>">
          <label data-error="wrong" data-success="right" for="orangeForm-name">Father Name</label>
        </div>
        <div class="md-form mb-5">
          <i class="fas fa-envelope prefix grey-text"></i>
          <input type="email" id="orangeForm-email" class="form-control validate" name="email" value="<?php echo $data['email'] ?>">
          <label data-error="wrong" data-success="right" for="orangeForm-email">Email Address</label>
        </div>

        <div class="md-form mb-4">
          <?php
          // for the purpose of ovtaining class data from classes used in joins..
                         $con = mysqli_connect('localhost','root','','practice');
                         $query = "SELECT * FROM `classes`"; 
                         $run = mysqli_query($con,$query);
                         $data = mysqli_num_rows($run);
                         if($data != 0){
                         ?>
          <i class="fas fa-graduation-cap prefix grey-text"></i>
          <select class="form-control validate" name="class" style="border: none;border-bottom: 1px solid gray;">   
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
          <input type="number" id="orangeForm-name" class="form-control validate" name="age" value="<?php echo $data['age'] ?>">
          <label data-error="wrong" data-success="right" for="orangeForm-name">Age</label>
        </div>
        <div class="md-form mb-5">
          <i class="fas fa-tty prefix grey-text"></i>
          <input type="text" id="orangeForm-name" class="form-control validate" name="phone_number" value="<?php echo $data['phone_number'] ?>">
          <label data-error="wrong" data-success="right" for="orangeForm-name">Phone Number</label>
        </div>

      </div>

      <!-- hidden student id -->
      <input type="hidden" name="id" value="<?php echo $id;?>">
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-primary" value="<?php echo $id; ?>">Update</button>
      </div>
    </div>
  </div>
</form>
</div>



  </div>



<?php  include('includes/scripts.php'); ?>
<?php  include('includes/footer.php'); ?>
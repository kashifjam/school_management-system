
<?php  include('includes/header.php'); ?>
<?php  include('includes/navbar.php'); ?>

<?php $id = $_GET['id'];
$con = mysqli_connect('localhost','root','','practice');
$query = "SELECT * FROM `departments` WHERE `id`='$id'";
$run = mysqli_query($con,$query);
$data = mysqli_fetch_assoc($run);
 ?>
  <div class="container">

    <div class="" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Edit Departments</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <form style="font-size: 11px;" action="edit_department.php" method="post">
          <i class="fas fa-user prefix grey-text"></i>
          <input type="text" id="orangeForm-name" class="form-control validate" name="department_name"
          value="<?php echo $data['department_name'] ?>">
          <label data-error="wrong" data-success="right" for="orangeForm-name">Edit Departments</label>
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
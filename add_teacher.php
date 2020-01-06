
<?php  include('includes/header.php'); ?>
<?php  include('includes/navbar.php'); ?>
  <div class="container">

    <div class="" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Add Teacher</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <form style="font-size: 11px;" action="insert_teacher.php" method="post">
          <i class="fas fa-user prefix grey-text"></i>
          <input type="text" id="orangeForm-name" class="form-control validate" name="teacher_name">
          <label data-error="wrong" data-success="right" for="orangeForm-name">Teacher Name</label>
        </div>
        <div class="md-form mb-5">
          <i class="fas fa-user prefix grey-text"></i>
          <input type="text" id="orangeForm-name" class="form-control validate" name="qualification">
          <label data-error="wrong" data-success="right" for="orangeForm-name">Qualification</label>
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
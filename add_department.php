
<?php include 'includes/header.php'; 
 include 'includes/navbar.php'; ?>

 <div class="container">
 <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <form style="font-size: 11px;" action="insert_department.php" method="post">
          <i class="fas fa-user prefix grey-text"></i>
          <input type="text" id="orangeForm-name" class="form-control validate" name="department_name">
          <label data-error="wrong" data-success="right" for="orangeForm-name">Add Department</label>
                <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-primary">Submit</button>
      </div>
        </div>

 <?php include('includes/scripts.php'); ?>
 <?php include('includes/footer.php'); ?>

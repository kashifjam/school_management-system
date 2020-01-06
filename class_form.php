
<?php include 'includes/header.php'; 
 include 'includes/navbar.php'; ?>

 <div class="container">
 <div class="modal-body mx-3">
        <div class="md-form mb-5">
        	<?php 
        	  $con = mysqli_connect('localhost','root','','practice');
                         $query = "SELECT * FROM `departments`"; 
                         $run = mysqli_query($con,$query);
                         $data = mysqli_num_rows($run);
                         if($data != 0){
                         ?>
          <form style="font-size: 11px;" action="add_class.php" method="post">
          <i class="fas fa-user prefix grey-text"></i>
          <input type="text" id="orangeForm-name" class="form-control validate" name="class_name">
          <label data-error="wrong" data-success="right" for="orangeForm-name">Add Class</label>
           <select class="form-control validate" name="dept_fk_id" style="border: none;border-bottom: 1px solid gray;">   
            <option>Select Department</option>
            <?php 
                     while( $result = mysqli_fetch_assoc($run))
                    {
                    ?>

            <option value="<?php echo $result['id']; ?>"><?php echo $result['department_name']; ?></option>
          <?php }
                }
                ?>
          </select>

                <div class="d-flex justify-content-center">
        <button class="btn btn-primary">Submit</button>
      </div>
        </div>

 <?php include('includes/scripts.php'); ?>
 <?php include('includes/footer.php'); ?>

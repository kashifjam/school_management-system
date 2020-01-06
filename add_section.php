
<?php include 'includes/header.php'; 
 include 'includes/navbar.php'; ?>

 <div class="container">
 <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <form style="font-size: 11px;" action="insert_section.php" method="post">
          <i class="fas fa-user prefix grey-text"></i>
          <input type="text" id="orangeForm-name" class="form-control validate" name="section_name">
          <label data-error="wrong" data-success="right" for="orangeForm-name">Add Section</label>
          <div class="md-form mb-4">
                        <?php
                        //for getting class id from classes
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
                <div class="modal-footer d-flex justify-content-center">

        <button class="btn btn-primary">Submit</button>
      </div>
        </div>

 <?php include('includes/scripts.php'); ?>
 <?php include('includes/footer.php'); ?>

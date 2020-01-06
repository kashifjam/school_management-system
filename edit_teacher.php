<?php 
$teacher_name = $_POST['teacher_name'];
$qualification = $_POST['qualification'];
$id = $_POST['id'];
$con = mysqli_connect('localhost','root','','practice');
$query = "UPDATE `teachers` SET `teacher_name`='$teacher_name',`qualification`='$qualification' WHERE `id`='$id'";
$run = mysqli_query($con,$query);
if ($run == TRUE) {
	header('location:teacher_detail.php?updated=success');
	exit();
}
else
    echo "sorry something went wrong";
exit();
 ?> 
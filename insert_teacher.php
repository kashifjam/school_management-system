<?php 
$teacher_name = $_POST['teacher_name'];
$qualification = $_POST['qualification'];
$con = mysqli_connect('localhost','root','','practice');
$query = "INSERT INTO `teachers`(`teacher_name`, `qualification`) VALUES ('$teacher_name','$qualification')";
$run = mysqli_query($con,$query);
if ($run == TRUE) {
	header('location:teacher_detail.php?inserted_successfully');
	exit();
}
 ?>
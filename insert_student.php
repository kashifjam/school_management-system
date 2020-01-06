<?php 
$student_name = $_POST['student_name'];
$father_name = $_POST['father_name'];
$email = $_POST['email'];
$class_fk_id = $_POST['class_fk_id'];
$age = $_POST['age'];
$phone_number = $_POST['phone_number'];
$con = mysqli_connect('localhost','root','','practice');
$query = "INSERT INTO `students`(`student_name`, `father_name`, `email`, `class_fk_id`, `age`, `phone_number`) VALUES ('$student_name','$father_name','$email','$class_fk_id','$age','$phone_number')";
$run = mysqli_query($con,$query);
if ($run == TRUE) {
	header('location:student_details.php?insertion=successful');
	exit();
}
?>

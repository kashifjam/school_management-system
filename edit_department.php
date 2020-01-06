<?php  
$department_name = $_POST['department_name'];
$id = $_POST['id'];
$con = mysqli_connect('localhost','root','','practice');
$query = "UPDATE `departments` SET `department_name`='$department_name' WHERE `id`='$id'"; 
$run = mysqli_query($con,$query);
if ($run == TRUE) {
	header('location:department_detail.php');
	exit();
}
?>
<?php
$class_name = $_POST['class_name'];
$dept_fk_id = $_POST['dept_fk_id'];
$con = mysqli_connect('localhost','root','','practice');
$query = "INSERT INTO `classes`(`class_name` , `dept_fk_id`) VALUES ('$class_name' , '$dept_fk_id')";
$run = mysqli_query($con,$query);
if ($run == TRUE) {
	header('location:class_detail.php?success');
	exit();
}
else
{
	echo "Sorry something went wrong";
}
?>
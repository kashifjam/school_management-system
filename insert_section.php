<?php
$section_name = $_POST['section_name'];
$class_fk_id = $_POST['class_fk_id'];
$con = mysqli_connect('localhost','root','','practice');
$query = "INSERT INTO `sections`(`section_name`,`class_fk_id`) VALUES ('$section_name','$class_fk_id')";
$run = mysqli_query($con,$query);
if ($run == TRUE) {
	header('location:section_detail.php?insert=sucess');
	exit();
}
else
{
	echo "sorry something went wrong";
	exit();
}
?>
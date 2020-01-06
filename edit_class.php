<?php  
$class_name = $_POST['class_name'];
$dept_fk_id = $_POST['dept_fk_id'];
$id = $_POST['id'];
$con = mysqli_connect('localhost','root','','practice');
$query = "UPDATE `classes` SET `class_name`='$class_name',`dept_fk_id`='$dept_fk_id' WHERE `id`='$id'"; 
$run = mysqli_query($con,$query);
if ($run == TRUE) {
	header('location:class_detail.php');
	exit();
}
else
{
	echo "sorry something went wrong";
	exit();
}
?>
<?php
$id = $_GET['id'];
$con = mysqli_connect('localhost','root','','practice');
$query = "DELETE FROM `teachers` WHERE `id`='$id'";
$run = mysqli_query($con,$query);
if ($run == TRUE) {
	header('location:teacher_detail.php?deleted=success');
	exit();
}
else
{
	echo "sorry something went wrong";
	exit();
}

 ?>
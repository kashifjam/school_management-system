<?php
$id = $_GET['id'];
$con = mysqli_connect('localhost','root','','practice');
$query = "DELETE FROM `classes` WHERE id='$id'";
$run = mysqli_query($con,$query);
if ($run == TRUE) {
	header("location:class_detail.php?deleted=successfully");
	exit();
}
else
{
	echo "sorry something went wrong !";
	exit();
}
?>
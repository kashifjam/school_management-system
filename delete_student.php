<?php
$id = $_GET['id'];
$con = mysqli_connect('localhost','root','','practice');
$query = "DELETE FROM `students` WHERE id='$id'";
$run = mysqli_query($con,$query);
if ($run == TRUE) {
	header("location:student_details.php?deleted=successfully");
	exit();
}
else
{
	echo "sorry something went wrong !";
	exit();
}
?>
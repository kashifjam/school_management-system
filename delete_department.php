<?php
$id = $_GET['id'];
$con = mysqli_connect('localhost','root','','practice');
$query = "DELETE FROM `departments` WHERE `id`='$id'";
$run = mysqli_query($con,$query);
if ($run == TRUE) {
	header('location:department_detail.php?deleted=success');
	exit();
}
else
{
	echo "sorry data not deleted!";
	exit();
}
?>

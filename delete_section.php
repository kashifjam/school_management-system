<?php
$id = $_GET['id'];
$con = mysqli_connect('localhost','root','','practice');
$query = "DELETE FROM `sections` WHERE `id`='$id'";
$run = mysqli_query($con,$query);
if ($run == TRUE) {
	header('location:section_detail.php?deleted=success');
	exit();
}
else
{
	echo "sorry data not deleted!";
	exit();
}
?>

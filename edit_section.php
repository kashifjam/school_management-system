<?php
$section_name = $_POST['section_name'];
$id = $_POST['id'];
$con = mysqli_connect('localhost','root','','practice');
$query = "UPDATE `sections` SET `section_name`='$section_name' WHERE `id`='$id'";
$run = mysqli_query($con,$query);
if ($run == TRUE) {
	header('location:section_detail.php');
	exit();
}
else
{
	echo "sorry data not updated";
	exit();
}
?>
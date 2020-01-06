<?php
$department_name = $_POST['department_name'];
$con = mysqli_connect('localhost','root','','practice');
$query = "INSERT INTO `departments`(`department_name`) VALUES ('$department_name')";
$run = mysqli_query($con,$query);
if ($run == TRUE) {
	header('location:department_detail.php');
	exit();
}
else
{
	echo "sorry something went wrong!";
	exit();
}
?>
<?php session_start(); ?>
<?php
$con = mysqli_connect('localhost','root','','practice');
?>
<?php include('header.php'); ?>
<br><br>
<?php 

	echo $_SESSION['first_name'];
	echo $_SESSION['last_name'];

 ?>


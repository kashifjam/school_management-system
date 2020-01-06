<?php session_start();
 ?>
<?php // first name aur last name show kranay kaliye session use kiye  hain agar session use na kerty to poora code dobara likhna partaa..
$con = mysqli_connect('localhost','root','','practice');
?>
<?php include('header.php'); ?>
<br><br>
<?php 
	
	echo "<strong>You are a Bloody User</strong>"." ";

	echo $_SESSION['first_name'];
	echo $_SESSION['last_name'];

 ?>
 <br><br>
 <body style="background-color: gray;">
<form action="logout.php" method="post" class="text-center">
              <button type="submit" name="logout" class="btn btn-danger">Logout</button>
              </form></body>

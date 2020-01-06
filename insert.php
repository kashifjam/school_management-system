<?php 
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$phone_number = $_POST['phone_number'];
$address = $_POST['address'];
$gender = $_POST['gender'];
$con = mysqli_connect('localhost','root','','practice');

$sql = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($con,$sql);
// $log = mysqli_fetch_array($result);
$resultcheck = mysqli_num_rows($result);
if ($resultcheck>0) {
	// echo "Email";
	// echo $email;
	// echo $log['email'];
	// die();
	header("Location:signup.php?emailexist");
	exit();
}else{

$query = "INSERT INTO `users`( `first_name`, `last_name`, `email`, `password`, `phone_number`, `address`, `gender`,`user_type`) VALUES ('$first_name','$last_name','$email','$password','$phone_number','$address','$gender','0')";
 $run = mysqli_query($con,$query);
 if($run == TRUE){
 	header('location:signup.php?success');
				exit();
 }
 else
 {
 	echo "Data is not inserted!";
 	exit();
 }
 }

?>

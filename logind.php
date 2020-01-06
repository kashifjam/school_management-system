<?php
//login check kerny kaliye session use kya hai..
session_start();
$email = $_POST['email'];
$password = $_POST['password'];
$con = mysqli_connect('localhost','root','','practice');
$query = "SELECT * FROM users WHERE email='$email'";
$run = mysqli_query($con,$query);
$resultCheck = mysqli_num_rows($run);
if($resultCheck < 1)
{
	header("location:login.php?usernotexist");
	exit();
}
else
{
	if($row = mysqli_fetch_assoc($run))
	{
		if($password == $row['password'])
		{
			$_SESSION['first_name'] = $row['first_name'];
			$_SESSION['last_name'] = $row['last_name'];
			$_SESSION['email'] = $row['email'];
			$_SESSION['phone_number'] = $row['phone_number'];
            $_SESSION['address'] = $row['address'];
            $_SESSION['gender'] = $row['gender'];
            $_SESSION['user_type'] = $row['user_type']; // sirf admin login ho islye usertype 1 rakhi hai.

            if ($_SESSION['user_type'] == '1') {
            	header('location:admin.php?login=success');
			exit();
            }
            else
            {
			header('location:welcome.php?login=success');
			exit();
			}
		}
		else{
			header('location:login.php?login=error');
			exit();
		}
	}
}

?>
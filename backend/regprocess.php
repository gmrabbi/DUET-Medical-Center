<?php
require "dbcon.php";
if(isset($_POST['reg']))
{
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$cpassword = $_POST['cpassword'];

	$q = "SELECT * FROM patient_info 
		WHERE firstname='$firstname' 
		AND lastname='$lastname' 
		AND email='$email' 
		AND password='$password' 
		AND cpassword='$cpassword'";

	$result = mysqli_query($con, $q);

	if(mysqli_num_rows($result)>=1)
	{
		echo "Try Another Email.";
	}
	else
	{
		mysqli_query($con,"INSERT INTO patient_info (firstname,lastname,email,password,cpassword) 
		VALUES ('$firstname','$lastname','$email','$password','$cpassword')") or die("".mysqli_error());
		
		echo "<script>
        alert('Welcome, $firstname $lastname');
        window.location.href = '../login.php'; // Redirect to login page
    </script>";

	}
}
?>
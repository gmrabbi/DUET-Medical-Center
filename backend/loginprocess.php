<?php
require "dbcon.php";
if(isset($_POST['login']))
{
	$email=$_POST['email'];
	$password=$_POST['password'];
	
	$q= "select * from patient_info where email='$email' AND password='$password'";
	$result=mysqli_query($con,$q);
	if(mysqli_num_rows($result)==1)
	{
		header("Location: ../appointment.html");
	}
	else
	{
		echo "Email and Password is wrong";
	}
	
}
?>
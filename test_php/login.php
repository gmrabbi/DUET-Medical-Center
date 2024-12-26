<?php
session_start();
require "../backend/dbcon.php";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['username'];
    $password = $_POST['password'];

    $q= "select * from patient_info where email='$email' AND password='$password'";
	$result=mysqli_query($con,$q);
	if(mysqli_num_rows($result)==1)
	{
        // Set session variables
        $_SESSION['loggedin'] = true;
        $_SESSION['email'] = $email;

        // Redirect to the appointment page
        header("Location: appointment.php");
        exit();
		// header("Location: ../appointment.html");
	}
	else
	{
		echo "Email and Password is wrong";
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login Page</h2>
    <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
    <form method="POST" action="">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <button type="submit">Login</button>
    </form>
</body>
</html>

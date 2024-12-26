<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    // Redirect to the login page if not logged in
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Page</title>
</head>
<body>
    <h2>Welcome to the Appointment Page</h2>
    <p>You can only view this page if you're logged in.</p>
    <p>You are logged in as <strong><?php echo htmlspecialchars($_SESSION['email']); ?></strong>.</p>
    <a href="logout.php">Logout</a>
</body>
</html>

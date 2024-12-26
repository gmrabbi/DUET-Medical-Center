<?php
require "dbcon.php";

if(isset($_POST['book'])) {
    // Sanitize and validate user input
    $doctor = trim($_POST['doctor_name']);
    $number = trim($_POST['number']);
    $dept = trim($_POST['Department']);
    $date = trim($_POST['Date']);
    $time = trim($_POST['Time']);
    $comment = trim($_POST['Comment']);
    
    // Initialize error array
    $errors = [];

    // Validate required fields
    if (empty($doctor)) {
        $errors[] = 'Please fill in the doctor field.';
    }
    if (empty($number)) {
        $errors[] = 'Please fill in the number field.';
    }
    if (empty($dept)) {
        $errors[] = 'Please fill in the department field.';
    }
    if (empty($date)) {
        $errors[] = 'Please fill in the date field.';
    }
    if (empty($time)) {
        $errors[] = 'Please fill in the time field.';
    }

    // If there are any errors, display them
    if (!empty($errors)) {
        echo '<div class="alert alert-danger"><strong>Error!</strong><ul>';
        foreach ($errors as $error) {
            echo '<li>' . $error . '</li>';
        }
        echo '</ul></div>';
        exit;
    }

    // Prepare the SQL query
    $stmt = $con->prepare("INSERT INTO appointment_form (Doctor, number, Department, Date, Time, Comment) 
                           VALUES (?, ?, ?, ?, ?, ?)");
    if ($stmt) {
        $stmt->bind_param("ssssss", $doctor, $number, $dept, $date, $time, $comment);
        
        // Execute and check success
        if ($stmt->execute()) {
            header("Location: appointed_list.php");
            exit;
        } else {
            echo '<div class="alert alert-danger">
                <strong>Error!</strong> Unable to book your appointment. Please try again.
            </div>';
        }
        $stmt->close();
    } else {
        echo '<div class="alert alert-danger">
            <strong>Error!</strong> Failed to prepare the database query.
        </div>';
    }
}

// Close the database connection
$con->close();
?>

<?php
// Database connection
$servername = "localhost";
$username = "root"; // Change this to your database username
$password = "";     // Change this to your database password
$dbname = "duet_medical_database";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data
$sql = "SELECT doc_name, doc_dep, doc_timeslot FROM doctor_info";
$result = $conn->query($sql);

$data = array();

if ($result) {
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    }
} else {
    // Log or show error
    $data = ["error" => "Query failed: " . $conn->error];
}

// Return data as JSON
header('Content-Type: application/json');
echo json_encode($data);

$conn->close();
?>

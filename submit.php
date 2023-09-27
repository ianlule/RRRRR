<?php
// Replace these with your own database credentials
$host = 'localhost';
$username = 'name';
$password = 'password';
$database = 'suggestion box real';

// Create a database connection
$conn = new mysqli($host, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get user input from the form
$suggestion = $_POST['suggestion'];
$name = $_POST['name'];
$timestamp = date('Y-m-d H:i:s'); // Get current timestamp

// Prepare and execute the SQL query to insert data
$sql = "INSERT INTO suggestions (content, s_name, submission_time) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $suggestion, $name, $timestamp);

if ($stmt->execute()) {
    echo "Suggestion submitted successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$stmt->close();
$conn->close();
?>

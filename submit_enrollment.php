<?php
// Error reporting for debugging
ini_set('display_errors', 1);
error_reporting(E_ALL);

// DB connection
$conn = new mysqli("localhost", "root", "", "techfusion_db");

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Fetch POST data
$full_name = $_POST['full_name'] ?? '';
$email_address = $_POST['email_address'] ?? '';
$phone_number = $_POST['phone_number'] ?? '';
$course = $_POST['course'] ?? '';
$learning_mode = $_POST['learning_mode'] ?? '';
$additional_message = $_POST['additional_message'] ?? '';

// Insert into DB
$sql = "INSERT INTO enrollments (full_name, email_address, phone_number, course, learning_mode, additional_message)
        VALUES ('$full_name', '$email_address', '$phone_number', '$course', '$learning_mode', '$additional_message')";

if ($conn->query($sql) === TRUE) {
  echo "Enrollment submitted successfully!";
} else {
  echo "Error: " . $conn->error;
}

$conn->close();
?>

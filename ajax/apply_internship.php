<?php
include("../config/db.php");

$name = $_POST['name'];
$email = $_POST['email'];
$university = $_POST['university'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$stmt = $conn->prepare("INSERT INTO internship_applications (name, email, university, phone, message) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $name, $email, $university, $phone, $message);

if ($stmt->execute()) {
  echo "✅ Application submitted successfully!";
} else {
  echo "❌ Failed to submit application. Please try again.";
}

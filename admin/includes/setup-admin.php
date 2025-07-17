<?php
include("../config/db.php");

// Only run once to insert default user
$username = "admin";
$password = password_hash("admin123", PASSWORD_DEFAULT);

// Check if user already exists
$check = $conn->prepare("SELECT * FROM admin_users WHERE username = ?");
$check->bind_param("s", $username);
$check->execute();
$result = $check->get_result();

if ($result->num_rows > 0) {
  echo "Admin user already exists.";
} else {
  $stmt = $conn->prepare("INSERT INTO admin_users (username, password) VALUES (?, ?)");
  $stmt->bind_param("ss", $username, $password);

  if ($stmt->execute()) {
    echo "✅ Default admin user created (username: admin, password: admin123)";
  } else {
    echo "❌ Error inserting admin user: " . $conn->error;
  }
}

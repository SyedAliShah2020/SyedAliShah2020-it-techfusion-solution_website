<?php
$host = "localhost";
$user = "root";      // default in XAMPP
$pass = "";          // default in XAMPP
$dbname = "techfusion_db";

$conn = new mysqli($host, $user, $pass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

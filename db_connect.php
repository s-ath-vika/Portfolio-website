<?php
$host = "localhost";
$username = "root";
$password = ""; // Default XAMPP installation has no password set
$database = "portfolio_db";

// Establishing connection using mysqli_connect
$conn = mysqli_connect($host, $username, $password, $database);

// Verify link health
if (!$conn) {
    die("Database Connection failed: " . mysqli_connect_error());
}
?>
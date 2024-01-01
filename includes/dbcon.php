<?php
// Database configuration
$dbHost = '127.0.0.1:3308'; // Change to your MySQL host if different
$dbUsername = 'root'; // Change to your MySQL username
$dbPassword = '12345678'; // Change to your MySQL password if set
$dbName = 'herbal'; // Change to the name of your database

// Create a database connections
$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


?>

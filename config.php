<?php
$dbHost = 'localhost'; // Replace with your database host
$dbUsername = 'root';  // Replace with your database username
$dbPassword = '';      // Replace with your database password
$dbName = 'hotel_reservation'; // Replace with your database name

// Create database connection
$connection = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
?>

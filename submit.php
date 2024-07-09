<?php
// Database configuration
$dbHost = 'localhost';  // Replace with your database host
$dbUsername = 'root';   // Replace with your database username
$dbPassword = '';       // Replace with your database password
$dbName = 'hotel_reservation'; // Replace with your database name

// Create database connection
$connection = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$reason = $_POST['reason'];
$message = $_POST['message'];

// Prepare SQL statement to insert data into the database
$sql = "INSERT INTO contact_messages (name, email, reason, message) VALUES (?, ?, ?, ?)";
$stmt = $connection->prepare($sql);

// Bind parameters and execute statement
$stmt->bind_param("ssss", $name, $email, $reason, $message);
$stmt->execute();

// Check if insertion was successful
if ($stmt->affected_rows > 0) {
    // Redirect back to contact page with success message
    header("Location: contact.php?status=success&message=Your+message+has+been+received.");
} else {
    // Redirect back to contact page with error message
    header("Location: contact.html?status=error&message=Failed+to+send+message.+Please+try+again.");
}

// Close statement and connection
$stmt->close();
$connection->close();
?>

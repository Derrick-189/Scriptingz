<?php
// Database configuration
$servername = "localhost"; // Usually 'localhost'
$username = "root";        // Your MySQL username
$password = "";            // Your MySQL password (leave empty if none)
$dbname = "hospital_management"; // The name of your database

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

// Optionally, you can set the character set for the connection
$conn->set_charset("utf8");

// Function to close the connection
function closeConnection($conn)
{
	$conn->close();
}

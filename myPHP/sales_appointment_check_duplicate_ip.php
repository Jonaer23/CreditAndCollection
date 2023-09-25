<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// sales_appointment_check_duplicate_ip.php
require 'connection.php';

// Check if the connection was successful
if ($connection->connect_errno) {
    http_response_code(500);
    echo 'Database connection error: ' . $connection->connect_error;
    exit;
}

// Get the client's IP address (sanitize it to prevent potential issues)
$clientIP = filter_var($_SERVER['REMOTE_ADDR'], FILTER_VALIDATE_IP) ?: '';

// Check if the IP address is valid
if (empty($clientIP)) {
    http_response_code(400);
    echo 'Invalid IP address';
    exit;
}

// Check if the IP address already exists for today's date
$query = "SELECT COUNT(*) FROM tbl_salesappointment WHERE ipAddress = ? AND DATE(dateCreated) = CURDATE()";
$stmt = $connection->prepare($query);
$stmt->bind_param('s', $clientIP);
$stmt->execute();
$stmt->bind_result($count);
$stmt->fetch();
$stmt->close();

// Close the database connection (not necessary in this case as the script terminates afterward)
$connection->close();

// Check if a record with the client's IP address already exists for today
if ($count > 0) {
    // IP address is a duplicate
    echo 'duplicate';
} else {
    // IP address is not a duplicate
    echo 'not_duplicate';
}
?>

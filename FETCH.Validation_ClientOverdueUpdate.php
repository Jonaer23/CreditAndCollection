<?php
// sales_fetch_appointment.php
session_start();
ini_set('display_errors', 1);
error_reporting(E_ALL);
include 'client_session.php';

// Access the stored session variables
$username = $_SESSION['username'];

// Establish a secure database connection (modify the connection details accordingly)
$mysqli = new mysqli('localhost', 'centenn1_sedge', '@Hanabi16', 'centenn1_sedge_accountingsoftware');

// Check if the connection was successful
if ($mysqli->connect_errno) {
    die('Database connection error: ' . $mysqli->connect_error);
}

function updateStatusToOverdue($conn) {
    // Prepare the update query
    $updateQuery = $conn->prepare("UPDATE tbl_flatinterest SET status = 'Overdue' WHERE paymentDueDate < CURDATE() AND status != 'Paid'");

    // Execute the update query
    $updateQuery->execute();
}

// Call the updateStatusToOverdue function
updateStatusToOverdue($mysqli);

// Close the database connection
$mysqli->close();
?>

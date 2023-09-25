<?php
// sales_fetch_appointment.php
session_start();
ini_set('display_errors', 0);
error_reporting(0);
include 'client_session.php';

// Access the stored session variables
$username = $_SESSION['username'];

// Establish a secure database connection (modify the connection details accordingly)
$mysqli = new mysqli('localhost', 'sedge', '@Hanabi16', 'sedge_accountingsoftware');

// Check if the connection was successful
if ($mysqli->connect_errno) {
    die('Database connection error');
}

function updateStatusToPurchased($conn, $username) {
    // Prepare and bind parameters to prevent SQL injection
    $updateQuery = $conn->prepare("UPDATE tbl_ledger 
                                  SET status = 'Purchased' 
                                  WHERE costumerCode = ? AND EXISTS 
                                      (SELECT 1 
                                       FROM tbl_flatinterest 
                                       WHERE userAccount = ? AND status = 'paid')");
    $updateQuery->bind_param("ss", $username, $username);

    // Execute the update query
    $updateQuery->execute();

    // Check if any rows were affected
    if ($updateQuery->affected_rows > 0) {
        echo "Ledger status updated to 'Purchased'.";
    } else {
        echo "Not all installment terms have been paid yet.";
    }

    // Close the prepared statement
    $updateQuery->close();
}

// Call the updateStatusToPurchased function
updateStatusToPurchased($mysqli, $username);

// Close the database connection
$mysqli->close();
?>
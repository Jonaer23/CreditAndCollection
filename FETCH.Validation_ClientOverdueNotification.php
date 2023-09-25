<?php
// Replace these variables with your actual database connection details
$servername = "localhost";
$username = "centenn1_sedge";
$password = "@Hanabi16";
$dbname = "centenn1_sedge_accountingsoftware";

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to retrieve the status from the database
$sql = "SELECT status FROM tbl_flatinterest";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Assuming you only have one row for the account status in this example
    $row = $result->fetch_assoc();
    $accountStatus = $row['status'];

    // Close the database connection
    $conn->close();

    // Return the account status as JSON response
    header('Content-Type: application/json');
    echo json_encode(array('status' => $accountStatus));
} else {
    $conn->close();
    // Return an error message as JSON response if no data found
    header('Content-Type: application/json');
    echo json_encode(array('error' => 'No data found in the table.'));
}
?>
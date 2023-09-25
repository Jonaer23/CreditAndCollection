<?php
// sales_fetch_appointment.php
session_start();
ini_set('display_errors', 1);
error_reporting(E_ALL);



// Establish a secure database connection (modify the connection details accordingly)
$mysqli = new mysqli('localhost', 'sedge', '@Hanabi16', 'sedge_accountingsoftware');

// Check if the connection was successful
if ($mysqli->connect_errno) {
    die('Database connection error: ' . $mysqli->connect_error);
}

$query = "SELECT id, Tracking_Number, RequestedBy, Department, Position, status
FROM tbl_purchase  
WHERE status = ?";
$stmt = $mysqli->prepare($query);
$stmt->bind_param('s', 'Pending');

// Execute the prepared statement
if ($stmt->execute()) {
    // Bind the result to variables
    $stmt->bind_result($id, $TrackingNumber, $RequestedBy, $Department, $Position, $status);

    // Fetch the data and store it in an array
    $data = array();
    while ($stmt->fetch()) {
        $row = array(
            'id' => $id,
            'trackingNumber' => $TrackingNumber,
            'requestedBy' => $RequestedBy,
            'Department' => $Department,
            'Position' => $Position,
            'status' => $status
        );
        $data[] = $row;
    }

    // Close the prepared statement
    $stmt->close();

    // Close the database connection
    $mysqli->close();

    // Set the response header as JSON
    header('FORM.Validation_CientDashboard.php');

    // Convert the data to JSON and send it as the response
    echo json_encode($data);
    exit; // Terminate the script
} else {
    // Handle any error that occurred during the query
    header('HTTP/1.1 500 Internal Server Error');
    echo json_encode(array('error' => 'Error executing query: ' . $stmt->error));
    exit; // Terminate the script
}
?>

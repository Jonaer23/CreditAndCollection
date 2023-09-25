<?php
// Establish a secure database connection (modify the connection details accordingly)
$mysqli = new mysqli('localhost', 'centenn1_sedge', '@Hanabi16', 'centenn1_sedge_accountingsoftware');

// Check if the connection was successful
if ($mysqli->connect_errno) {
    die('Database connection error: ' . $mysqli->connect_error);
}
function generateTrackingNumber($length = 10) {
    $characters = '0123456789';
    $trackingNumber = '';
    $max = strlen($characters) - 1;
    for ($i = 0; $i < $length; $i++) {
        $trackingNumber .= $characters[random_int(0, $max)];
    }
    return $trackingNumber;
}

// Generate the tracking number
$trackingNumber = 'SSDC-TR-' . generateTrackingNumber(10);

// Retrieve form data
$requestType = isset($_POST['requestType']) ? $_POST['requestType'] : '';
$useraccount = isset($_POST['useraccount']) ? $_POST['useraccount'] : '';
$requestBy = isset($_POST['requestBy']) ? $_POST['requestBy'] : '';
$category = isset($_POST['category']) ? $_POST['category'] : '';
$department = isset($_POST['department']) ? $_POST['department'] : '';
$reasonforRequest = isset($_POST['reasonforRequest']) ? $_POST['reasonforRequest'] : '';
$position = isset($_POST['position']) ? $_POST['position'] : '';
$itemDescription = isset($_POST['itemDescription']) ? $_POST['itemDescription'] : '';
$status = isset($_POST['status']) ? $_POST['status'] : '';
$Status1 = isset($_POST['Status1']) ? $_POST['Status1'] : '';


// Prepare and bind the SQL query with a prepared statement
$query = "INSERT INTO tbl_purchase (Position, TrackingNumber, requesttype, useraccount, Category, RequestedBy, Department, ReasonforRequest, ItemDescription, status, Status1) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $mysqli->prepare($query);        
$stmt->bind_param('sssssssssss',$position, $trackingNumber, $requestType, $useraccount, $category, $requestBy, $department, $reasonforRequest, $itemDescription, $status, $Status1); // Use 'ssssssss' as the parameter type specifier for eight string parameters

// Execute the prepared statement
if ($stmt->execute()) {
    // Close the prepared statement
    $stmt->close();

    // Close the database connection
    $mysqli->close();

    // Return success response
    echo json_encode(array('success' => 'Appointment submitted successfully.'));
    exit;
} else {
    // Handle any error that occurred during the query
    header('HTTP/1.1 500 Internal Server Error');
    echo json_encode(array('error' => 'Error submitting appointment: ' . $stmt->error));
    exit;
}
?>

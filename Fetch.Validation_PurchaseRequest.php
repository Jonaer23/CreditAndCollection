<?php
// sales_fetch_appointment.php

// Establish a secure database connection (modify the connection details accordingly)
$mysqli = new mysqli('localhost', 'sedge', '@Hanabi16', 'sedge_accountingsoftware');

// Check if the connection was successful
if ($mysqli->connect_errno) {
    die('Database connection error: ' . $mysqli->connect_error);
}

$accountId = isset($_POST['accountId']) ? $_POST['accountId'] : '';

$query = "SELECT Tracking_Number, RequestedBy, Department, Position, status, Department_Budget, Request_Number, PO_Number, DateIssue, Date_Approved, Date_Received, Vendor_Name, ItemDescription,  TypeofRequest, Category,  ReasonforRequest, Reasonfordecline
FROM tbl_purchase";
$stmt = $mysqli->prepare($query);

// Execute the prepared statement
if ($stmt->execute()) {
    // Bind the result to variables
    $stmt->bind_result( $TrackingNumber, $RequestedBy, $Department, $Position, $status, $departmentBudget, $requestNumber, $PO_Number, $dateIssue, $dateApproved, $dateReceived, $vendorName, $itemDescription, $typeofRequest, $category, $reasonforRequesting, $reasonforDecline );

    // Fetch the data and store it in an array
    $data = array();
    while ($stmt->fetch()) {
        $row = array(
            'trackingNumber' => $TrackingNumber,
            'requestedBy' => $RequestedBy,
            'Department' => $Department,
            'Position' => $Position,
            'status' => $status,
            'departmentBudget' => $departmentBudget,
            'requestNumber' => $requestNumber,
            'PO_Number' => $PO_Number,
            'dateIssue' => $dateIssue,
            'dateApproved' => $dateApproved,
            'dateReceived' => $dateReceived,
            'vendorName' => $vendorName,
            'itemDescription' => $itemDescription,
            'typeofRequest' => $typeofRequest,
            'category' => $category,
            'reasonforRequesting' => $reasonforRequesting,
            'reasonforDecline' => $reasonforDecline,
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

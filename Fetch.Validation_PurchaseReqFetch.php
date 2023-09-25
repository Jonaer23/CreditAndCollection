<?php
// sales_fetch_appointment.php
session_start();

// Function to sanitize user input for database queries
function sanitizeInput($input)
{
    return htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
}

// Check if the required parameters are provided through POST
if (!isset($_POST['status']) || !isset($_POST['userAccount'])) {
    http_response_code(400);
    echo json_encode(array('error' => 'Missing parameters'));
    exit;
}

// Sanitize and retrieve the status and userAccount values
$status = sanitizeInput($_POST['status']);
$userAccount = sanitizeInput($_POST['userAccount']);

// Establish a secure database connection (modify the connection details accordingly)
$mysqli = new mysqli('localhost', 'centenn1_sedge', '@Hanabi16', 'centenn1_sedge_accountingsoftware');

// Check if the connection was successful
if ($mysqli->connect_errno) {
    http_response_code(500);
    echo json_encode(array('error' => 'Database connection error: ' . $mysqli->connect_error));
    exit;
}
function sanitizeArray($array)
{
    foreach ($array as $key => $value) {
        $array[$key] = sanitizeInput($value);
    }
    return $array;
}
// Define the SQL query with placeholders for status and userAccount
$query = "SELECT id, TrackingNumber, ItemDescription, requesttype, Department_Budget,  status, DateIssue
          FROM tbl_purchase
          WHERE status = ? AND useraccount = ?";

// Prepare the SQL query
$stmt = $mysqli->prepare($query);

// Bind the parameters to the prepared statement
$stmt->bind_param('ss', $status, $userAccount);

// Execute the prepared statement
if ($stmt->execute()) {
    // Bind the result to variables
    $stmt->bind_result($id, $trackingNumber, $ItemDescription,  $requestedType, $DepartmentBudget, $status , $DateIssue);

    // Fetch the data and store it in an array
   $data = array();
    while ($stmt->fetch()) {
    $row = array(
        'id' => $id,
        'trackingNumber' => $trackingNumber,
        'ItemDescription' => $ItemDescription,
        'requestedType' => $requestedType,
        'DepartmentBudget' => $DepartmentBudget,
        'status' => $status,
        'DateIssue' => $DateIssue
    );
    // Sanitize the row data before adding it to the array
    $data[] = sanitizeArray($row);
}

    // Close the prepared statement
    $stmt->close();

    // Close the database connection
    $mysqli->close();

    // Set the response header as JSON
    header('Content-Type: application/json');

    // Convert the data to JSON and send it as the response
    echo json_encode($data);
    exit; // Terminate the script
} else {
    // Handle any error that occurred during the query
    http_response_code(500);
    echo json_encode(array('error' => 'Error executing query: ' . $stmt->error));
    exit; // Terminate the script
}
?>

<?php
session_start(); // Start a session if needed

// Establish a secure database connection (modify the connection details accordingly)
$mysqli = new mysqli('localhost', 'centenn1_sedge', '@Hanabi16', 'centenn1_sedge_accountingsoftware');

// Check if the connection was successful
if ($mysqli->connect_errno) {
    http_response_code(500);
    echo json_encode(array('error' => 'Database connection error: ' . $mysqli->connect_error));
    exit;
}

// Function to sanitize user input for database queries
function sanitizeInput($input)
{
    global $mysqli;
    return $mysqli->real_escape_string($input);
}

$accountId = isset($_POST['accountId']) ? sanitizeInput($_POST['accountId']) : null;

if ($accountId === null) {
    http_response_code(400);
    echo json_encode(array('error' => 'Missing or invalid accountId parameter'));
    exit;
}

$query = "SELECT COUNT(*) AS totalSales FROM tbl_flatinterest WHERE remarks = 'Monthly Payment' AND status = 'Unpaid' AND userAccount = ?";

// Prepare the SQL query
$stmt = $mysqli->prepare($query);

if (!$stmt) {
    http_response_code(500);
    echo json_encode(array('error' => 'Error preparing query: ' . $mysqli->error));
    exit;
}

// Bind the parameter
$stmt->bind_param("s", $accountId);

// Execute the prepared statement
if ($stmt->execute()) {
    // Fetch the result
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    $data = array('salesRevenue' => $row['totalSales']);

    // Close the prepared statement
    $stmt->close();

    // Close the database connection
    $mysqli->close();

    // Set the response header as JSON
    header('Content-Type: application/json; charset=UTF-8');

    // Convert the data to JSON and send it as the response
    echo json_encode($data);
    exit;
} else {
    // Handle any error that occurred during the query
    http_response_code(500);
    echo json_encode(array('error' => 'Error executing query: ' . $stmt->error));
    exit;
}

?>

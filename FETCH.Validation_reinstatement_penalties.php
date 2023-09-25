<?php
// sales_fetch_appointment.php

// Establish a secure database connection (modify the connection details accordingly)
$mysqli = new mysqli('localhost', 'centenn1_sedge', '@Hanabi16', 'centenn1_sedge_accountingsoftware');

// Check if the connection was successful
if ($mysqli->connect_errno) {
    header('HTTP/1.1 500 Internal Server Error');
    echo json_encode(array('error' => 'Database connection error: ' . $mysqli->connect_error));
    exit; // Terminate the script
}

$accountId = isset($_POST['accountId']) ? $_POST['accountId'] : '';
$status = 'Overdue'; // Set the status value

$query = "SELECT SUM(penalty) as penalty
FROM tbl_flatinterest
WHERE userAccount = ? AND status = ?"; // Move WHERE clause inside the query

$stmt = $mysqli->prepare($query);
$stmt->bind_param('ss', $accountId, $status); // Bind both parameters

// Execute the prepared statement
if ($stmt->execute()) {
    // Bind the result to variables
    $stmt->bind_result($penalty);

    // Fetch the data and store it in an array
    $data = array();
    while ($stmt->fetch()) {
        $row = array(
            'penalty' => $penalty,
        );
        $data[] = $row;
    }

    // Close the prepared statement
    $stmt->close();

    // Close the database connection
    $mysqli->close();

    // Set the response header as JSON
    header('Content-Type: application/json');

    if (empty($data)) {
        echo json_encode(array('message' => 'No results found.'));
    } else {
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
    }
    exit; // Terminate the script
} else {
    // Handle any error that occurred during the query
    header('HTTP/1.1 500 Internal Server Error');
    echo json_encode(array('error' => 'Error executing query: ' . $stmt->error));
    exit; // Terminate the script
}
?>

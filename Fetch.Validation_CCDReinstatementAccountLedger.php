<?php
// sales_fetch_appointment.php

// Establish a secure database connection (modify the connection details accordingly)
$mysqli = new mysqli('localhost', 'centenn1_sedge', '@Hanabi16', 'centenn1_sedge_accountingsoftware');

// Check if the connection was successful
if ($mysqli->connect_errno) {
    die('Database connection error: ' . $mysqli->connect_error);
}

$accountId = isset($_POST['accountId']) ? $_POST['accountId'] : '';

$query = "SELECT id, dateCreated
FROM tbl_reinstatement
WHERE accountNumber = ?";
$stmt = $mysqli->prepare($query);
$stmt->bind_param('s', $accountId);

// Execute the prepared statement
if ($stmt->execute()) {
    // Bind the result to variables
    $stmt->bind_result($id, $dateCreated);

    $data = array();
    $increment = 1; // Initialize the increment number
    while ($stmt->fetch()) {
        $row = array(
            'id' => $id,
            'increment' => $increment,
            'dateCreated' => $dateCreated
        );
        $data[] = $row;
        $increment++;
    }

    // Close the prepared statement
    $stmt->close();

    // Close the database connection
    $mysqli->close();

    // Set the response header as JSON
   // header('Content-Type: application/json');
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
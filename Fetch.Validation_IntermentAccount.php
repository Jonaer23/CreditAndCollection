<?php
// sales_fetch_appointment.php

// Establish a secure database connection (modify the connection details accordingly)
$mysqli = new mysqli('localhost', 'centenn1_sedge', '@Hanabi16', 'centenn1_sedge_accountingsoftware');

// Check if the connection was successful
if ($mysqli->connect_errno) {
    die('Database connection error: ' . $mysqli->connect_error);
}

$ISSNumber = isset($_POST['ISSCode']) ? $_POST['ISSCode'] : '';

$query = "SELECT  lessIntermentPriviledge, addIntermentPriviledge, totalIntermentfee
FROM tbl_Interment
WHERE ISS_no = ?"; // Move WHERE clause inside the query
$stmt = $mysqli->prepare($query);
$stmt->bind_param('s', $ISSNumber);


// Execute the prepared statement
if ($stmt->execute()) {
    // Bind the result to variables
    $stmt->bind_result($lessIntermentPriviledge, $addIntermentPriviledge, $totalIntermentfee  );

    // Fetch the data and store it in an array
    $data = array();
    while ($stmt->fetch()) {
        $row = array(
            
            'lessIntermentPriviledge' => $lessIntermentPriviledge,
            'addIntermentPriviledge' => $addIntermentPriviledge,
            'totalIntermentfee' => $totalIntermentfee,
            
        );
        $data[] = $row;
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
}
 else {
    // Handle any error that occurred during the query
    header('HTTP/1.1 500 Internal Server Error');
    echo json_encode(array('error' => 'Error executing query: ' . $stmt->error));
    exit; // Terminate the script
}
?>
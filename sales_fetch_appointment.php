<?php
require 'connection.php';

// Check if the connection was successful
if ($connection->connect_errno) {
    http_response_code(500);
    echo json_encode(array('error' => 'Database connection error'));
    exit;
}

// Validate and sanitize input data
$status = filter_input(INPUT_POST, 'status', FILTER_SANITIZE_STRING);
$currentDate = filter_input(INPUT_POST, 'currentDate', FILTER_SANITIZE_STRING);
$fiveDaysAfter = date('Y-m-d', strtotime('+5 days', strtotime($currentDate)));

// Check if input data is valid
if ($status === null || $currentDate === null) {
    http_response_code(400);
    echo json_encode(array('error' => 'Invalid input data'));
    exit;
}

try {
    // Prepare and bind the SQL query with a prepared statement
    $query = "SELECT id, fullname, email, AppointmentDate, AppointmenTime, message 
              FROM tbl_salesappointment 
              WHERE status = ? AND AppointmentDate BETWEEN ? AND ?";
    $stmt = $connection->prepare($query);
    $stmt->bind_param('sss', $status, $currentDate, $fiveDaysAfter);

    // Execute the prepared statement
    if ($stmt->execute()) {
        // Bind the result to variables
        $stmt->bind_result($id, $fullname, $email, $AppointmentDate, $AppointmenTime, $message);

        // Fetch the data and store it in an array
        $data = array();
        while ($stmt->fetch()) {
            $row = array(
                'id' => $id,
                'fullname' => htmlspecialchars($fullname, ENT_QUOTES, 'UTF-8'),
                'email' => htmlspecialchars($email, ENT_QUOTES, 'UTF-8'),
                'AppointmentDate' => $AppointmentDate,
                'AppointmenTime' => $AppointmenTime,
                'message' => htmlspecialchars($message, ENT_QUOTES, 'UTF-8')
            );
            $data[] = $row;
        }

        // Close the prepared statement
        $stmt->close();

        // Close the database connection
        $connection->close();

        // Set the response header as JSON
        header('Content-Type: application/json');

        // Convert the data to JSON and send it as the response
        echo json_encode($data);
        exit; // Terminate the script
    } else {
        // Handle any error that occurred during the query
        http_response_code(500);
        echo json_encode(array('error' => 'Error executing query'));
        exit; // Terminate the script
    }
} catch (Exception $e) {
    // Handle any exceptions that occurred during the execution
    http_response_code(500);
    echo json_encode(array('error' => 'An unexpected error occurred'));
    exit; // Terminate the script
}
?>

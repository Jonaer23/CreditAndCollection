<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Establish a secure database connection using connection.php
require 'connection.php';

// Function to validate and sanitize input data
function sanitizeInput($data)
{
    return htmlspecialchars(trim($data), ENT_QUOTES, 'UTF-8');
}

// Retrieve form data and sanitize them
$name = isset($_POST['name']) ? sanitizeInput($_POST['name']) : '';
$email = isset($_POST['email']) ? sanitizeInput($_POST['email']) : '';
$date = isset($_POST['date']) ? sanitizeInput($_POST['date']) : '';
$time = isset($_POST['time']) ? sanitizeInput($_POST['time']) : '';
$message = isset($_POST['message']) ? sanitizeInput($_POST['message']) : '';
$status = isset($_POST['status']) ? sanitizeInput($_POST['status']) : '';
$dateCreated = date('Y-m-d H:i:s'); // Use the server-side current date and time
$ipAddress = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '';

// Input validation
if (empty($name) || empty($email) || empty($date) || empty($time) || empty($message) || empty($status)) {
    http_response_code(400);
    echo json_encode(array('error' => 'All form fields are required'));
    exit;
}

try {
    // Prepare and bind the SQL query with a prepared statement
    $query = "INSERT INTO tbl_salesappointment (fullname, email, AppointmentDate, AppointmenTime, message, status, dateCreated, ipAddress) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $connection->prepare($query);
    $stmt->bind_param('ssssssss', $name, $email, $date, $time, $message, $status, $dateCreated, $ipAddress); // Use 'ssssssss' as the parameter type specifier for eight string parameters

    // Log the SQL query and its parameters
    error_log('SQL Query: ' . $query);
    error_log('Parameters: ' . print_r([$name, $email, $date, $time, $message, $status, $dateCreated, $ipAddress], true));

    // Execute the prepared statement
    if ($stmt->execute()) {
        // Log success message
        echo json_encode(array('success' => 'Appointment submitted successfully.'));
        exit;
    } else {
        // Handle any error that occurred during the query
        http_response_code(500);
        error_log('Error submitting appointment: ' . $stmt->error);
        echo json_encode(array('error' => 'Error submitting appointment: ' . $stmt->error));
        exit;
    }
} catch (Exception $e) {
    // Handle exceptions (if any)
    http_response_code(500);
    error_log('Exception occurred: ' . $e->getMessage());
    echo json_encode(array('error' => 'Exception occurred: ' . $e->getMessage()));
    exit;
} finally {
    // Close the prepared statement and the database connection
    if (isset($stmt)) {
        $stmt->close();
    }
    $connection->close();
}
?>

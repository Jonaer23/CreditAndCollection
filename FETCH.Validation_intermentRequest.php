<?php
// sales_fetch_appointment.php
session_start();

// Function to sanitize user input for database queries
function sanitizeInput($input)
{
    return htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
}


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


// Define the SQL query
$query = "
    SELECT id, userAccount, nameOfInterviewee, totalIntermentfee, PaymentDuedate
    FROM tbl_Interment ;";
// Prepare the SQL query
$stmt = $mysqli->prepare($query);


// Execute the prepared statement
if ($stmt->execute()) {
    // Bind the result to variables
    $stmt->bind_result($id, $customerCode, $nameOfInterviewee,  $totalIntermentfee, $PaymentDuedate);

    // Fetch the data and store it in an array
   $data = array();
    while ($stmt->fetch()) {
    $row = array(
        'id' => $id,
        'customerCode' => $customerCode,
        'nameOfInterviewee' => $nameOfInterviewee,
        'totalIntermentfee' => $totalIntermentfee,
        'PaymentDuedate' => $PaymentDuedate
        
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

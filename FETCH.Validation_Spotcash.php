<?php
// sales_fetch_appointment.php
session_start(); // Start a session if needed

// Function to sanitize user input for database queries
function sanitizeInput($input)
{
    return htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
}

// Function to sanitize an array of values
function sanitizeArray($array)
{
    foreach ($array as $key => $value) {
        $array[$key] = sanitizeInput($value);
    }
    return $array;
}

// Establish a secure database connection (modify the connection details accordingly)
$mysqli = new mysqli('localhost', 'centenn1_sedge', '@Hanabi16', 'centenn1_sedge_accountingsoftware');

// Check if the connection was successful
if ($mysqli->connect_errno) {
    http_response_code(500);
    echo json_encode(array('error' => 'Database connection error: ' . $mysqli->connect_error));
    exit;
}
$fromDate = $_POST['salesRevenueFrom'];
$toDate = $_POST['salesRevenueTo'];
$query = "SELECT 
    SUM(fi.monthlyInstallment) AS totalSales
FROM 
    tbl_ledger AS l
INNER JOIN 
    tbl_flatinterest AS fi ON l.customerCode = fi.userAccount
WHERE
    fi.status = 'Paid' AND
    l.lotdescTerms = 'SpotCash' AND
    fi.dateModified BETWEEN '$fromDate' AND DATE_ADD('$toDate', INTERVAL 1 DAY);";
// Prepare the SQL query
$stmt = $mysqli->prepare($query);

// Check if the preparation was successful
if (!$stmt) {
    http_response_code(500);
    echo json_encode(array('error' => 'Error preparing query: ' . $mysqli->error));
    exit;
}

// Execute the prepared statement
if ($stmt->execute()) {
    // Bind the result to variables
    $stmt->bind_result($salesRevenue);

    // Fetch the data and store it in an array
   $data = array();
    while ($stmt->fetch()) {
        $row = array(
            'salesRevenue' => $salesRevenue
        );
        $data[] = $row; // No need for sanitizeArray() here
    }

    // Close the prepared statement
    $stmt->close();

    // Close the database connection
    $mysqli->close();

    // Set the response header as JSON
    header('Content-Type: application/json; charset=UTF-8');

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

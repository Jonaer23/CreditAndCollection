<?php
// Database connection details
$servername = "localhost";
$username = "centenn1_sedge";
$password = "@Hanabi16";
$dbname = "centenn1_sedge_accountingsoftware";

// Get the data from the AJAX request
$phase = sanitizeInput($_POST["block"]);
$level = sanitizeInput($_POST["section"]);
$area = sanitizeInput($_POST["noLots"]);
$section = sanitizeInput($_POST["area"]);
$column = sanitizeInput($_POST["phase"]);
$classification = sanitizeInput($_POST["classification"]);
$type = sanitizeInput($_POST["type"]);
$status = sanitizeInput($_POST["status"]);
$listprice = str_replace(['₱', ','], '', filter_input(INPUT_POST, 'listprice', FILTER_SANITIZE_STRING));
// Sanitize user input to prevent SQL injection
function sanitizeInput($data) {
    // Remove leading and trailing whitespaces
    $data = trim($data);
    // Remove backslashes
    $data = stripslashes($data);
    // Convert special characters to HTML entities
    $data = htmlspecialchars($data);
    return $data;
}

try {
    // Create a new connection
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Prepare the SQL statement to insert data into the database
    $stmt = $conn->prepare("INSERT INTO tbl_lotdescription (block, section, lot_no, area, phase, classification, type, ListPrice, status) 
                           VALUES (:phase, :level, :area, :section, :column, :classification, :type, :listprice, :status)");
 
    // Bind parameters to the prepared statement
    $stmt->bindParam(':phase', $phase);
    $stmt->bindParam(':level', $level);
    $stmt->bindParam(':area', $area);
    $stmt->bindParam(':section', $section);
    $stmt->bindParam(':column', $column);
    $stmt->bindParam(':classification', $classification);
    $stmt->bindParam(':type', $type);
    $stmt->bindParam(':listprice', $listprice);
    $stmt->bindParam(':status', $status);

    // Execute the prepared statement
    $stmt->execute();

    // Send a JSON response back to the AJAX request
    $response = array('status' => 'success', 'message' => 'Data saved successfully!');
    echo json_encode($response);
}
catch(PDOException $e) {
    // If there is an error, send an error response back to the AJAX request
    $response = array('status' => 'error', 'message' => 'Error saving data!');
    echo json_encode($response);
}
finally {
    // Close the database connection
    $conn = null;
}
?>

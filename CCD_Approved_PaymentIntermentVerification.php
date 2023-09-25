<?php
// Error reporting and display errors
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Assuming you have a database connection established (consider using environment variables or configuration file for credentials)
$conn = new PDO('mysql:host=localhost;dbname=centenn1_sedge_accountingsoftware', 'centenn1_sedge', '@Hanabi16');

// Custom exception handler function
function customExceptionHandler($exception) {
    $response = [
        'success' => false,
        'message' => 'An error occurred: ' . $exception->getMessage()
    ];

    // Send the JSON response back to the client
    header('Content-Type: application/json');
    echo json_encode($response);
    exit;
}

// Set the custom exception handler
set_exception_handler('customExceptionHandler');

// Check if the request is a POST request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the item ID from the POST data
    $accountUser = $_POST['accountUser'];
    $ISS_no = $_POST['ISS_no'];
     $id = $_POST['id'];
    $ORPR = $_POST['ORPR'];

    try {
        // Update the tbl_ledger table
        $updateStmt = $conn->prepare("UPDATE tbl_Interment SET status=:status, ORPR=:ORPR WHERE id=:id");
        $updateStmt->bindValue(':status', 'ACTIVE');
        $updateStmt->bindValue(':ORPR', $ORPR);
        $updateStmt->bindParam(':id', $id);
        $updateStmt->execute();

        // Update the tbl_ledger table
        $updatedeceasedStmt = $conn->prepare("UPDATE tbl_deceased SET status=:status WHERE ISS_no=:ISS_no");
        $updatedeceasedStmt->bindValue(':status', 'ACTIVE');
        $updatedeceasedStmt->bindParam(':ISS_no', $ISS_no);
        $updatedeceasedStmt->execute();
        
        // Update the tbl_proofofpayment table
        $updatePaymentStmt = $conn->prepare("UPDATE tbl_proofofpayment SET paymentStatus=:status WHERE userAccount=:accountUser");
        $updatePaymentStmt->bindValue(':status', 'Confirmed');
        $updatePaymentStmt->bindParam(':accountUser', $accountUser);
        $updatePaymentStmt->execute();

      
        // Success response
        $response = [
            'success' => true,
            'message' => $message
        ];
    } catch (PDOException $e) {
        // Error response handled by custom exception handler
        throw new Exception('Failed to update the item.');
    }
} else {
    // Invalid request method response
    $response = [
        'success' => false,
        'message' => 'Invalid request method.'
    ];
}

// Send the JSON response back to the client
header('Content-Type: application/json');
echo json_encode($response);
exit;
?>

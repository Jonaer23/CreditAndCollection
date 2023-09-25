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
     $id = $_POST['id'];
    $ORPR = $_POST['ORPR'];

    try {
        // Update the tbl_ledger table
        $updateStmt = $conn->prepare("UPDATE tbl_ledger SET status=:status WHERE customerCode=:accountUser");
        $updateStmt->bindValue(':status', 'Active');
        $updateStmt->bindParam(':accountUser', $accountUser);
        $updateStmt->execute();

        // Update the tbl_proofofpayment table
        $updatePaymentStmt = $conn->prepare("UPDATE tbl_proofofpayment SET paymentStatus=:status WHERE userAccount=:accountUser");
        $updatePaymentStmt->bindValue(':status', 'Confirmed');
        $updatePaymentStmt->bindParam(':accountUser', $accountUser);
        $updatePaymentStmt->execute();

        // Update installment terms status to 'Paid' if all terms are paid
        $updateledgerStmt = $conn->prepare("UPDATE tbl_flatinterest  
                                           SET status=:status, ORPR=:ORPR
                                           WHERE userAccount=:accountUser 
                                           AND (status=:unpaidStatus OR status=:overDueStatus)
                                           AND id=:id
                                           LIMIT 1");
        $updateledgerStmt->bindValue(':status', 'Paid');
        $updateledgerStmt->bindParam(':accountUser', $accountUser);
        $updateledgerStmt->bindParam(':id', $id);
        $updateledgerStmt->bindValue(':unpaidStatus', 'Unpaid');
        $updateledgerStmt->bindValue(':overDueStatus', 'Overdue');
        $updateledgerStmt->bindParam(':ORPR', $ORPR);
        $updateledgerStmt->execute();

           // Check if all installment terms are paid
        $checkPaymentStmt = $conn->prepare("SELECT COUNT(*) AS unpaidCount 
                                            FROM tbl_flatinterest 
                                            WHERE userAccount=:accountUser 
                                            AND status=:unpaidStatus");
        $checkPaymentStmt->bindParam(':accountUser', $accountUser);
        $checkPaymentStmt->bindValue(':unpaidStatus', 'Unpaid');
        $checkPaymentStmt->execute();
        $result = $checkPaymentStmt->fetch(PDO::FETCH_ASSOC);
        $unpaidCount = $result['unpaidCount'];
        
        if ($unpaidCount == 0) {
            // All installment terms are paid, update the ledger status
            $updateLedgerStatusStmt = $conn->prepare("UPDATE tbl_ledger SET status=:status WHERE customerCode=:accountUser");
            $updateLedgerStatusStmt->bindValue(':status', 'Purchased');
            $updateLedgerStatusStmt->bindParam(':accountUser', $accountUser);
            $updateLedgerStatusStmt->execute();
        }
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

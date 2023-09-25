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
    $itemId = $_POST['id'];
    $accountUser = $_POST['accountUser'];
    $penalty = $_POST['penalty'];

    try {
        // Fetch data from the tbl_flatinterest table using prepared statement
        $sql = "SELECT `monthlyInstallment` FROM `tbl_flatinterest` WHERE userAccount=:accountUser AND id=:id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':accountUser', $accountUser);
        $stmt->bindParam(':id', $itemId);
        $stmt->execute();
        
        if ($stmt->rowCount() > 0) {
            // Output data for each row
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $monthlyInstallment = $row['monthlyInstallment'];
                $amountPaid = $monthlyInstallment + $penalty;

                // Update the payment details using prepared statement
                $updatePaymentStmt = $conn->prepare("UPDATE tbl_flatinterest SET penalty=:penalty, monthlyInstallment=:amountPaid WHERE userAccount=:accountUser AND id=:id");
                $updatePaymentStmt->bindParam(':penalty', $penalty);
                $updatePaymentStmt->bindParam(':amountPaid', $amountPaid);
                $updatePaymentStmt->bindParam(':accountUser', $accountUser);
                $updatePaymentStmt->bindParam(':id', $itemId);
                $updatePaymentStmt->execute();
            }
        } else {
            // No records found with the 'Unpaid' status.
            $response = [
                'success' => false,
                'message' => 'No records found with the "Unpaid" status.'
            ];
        }

        // Success response
        $response = [
            'success' => true,
            'message' => 'Payment updated successfully.'
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

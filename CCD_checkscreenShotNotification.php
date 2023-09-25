<?php
// Implement your logic to check for the specific customer's proofOfPayment update
$customerCode = $_GET['customerCode']; // Provide the customer name to monitor
$hasNotification = false;

// Assuming you have a database connection established
// Perform a query to check if the customer's proofOfPayment field was updated
$query = "SELECT proofOfPayment FROM tbl_ledger WHERE customerCode = ?";
$stmt = $pdo->prepare($query);
$stmt->execute([$customerCode]);
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if ($row && $row['proofOfPayment'] !== null) {
  $hasNotification = true;
}

// Return the notification status as a JSON response
$response = ['hasNotification' => $hasNotification];
header('Content-Type: application/json');
echo json_encode($response);
?>
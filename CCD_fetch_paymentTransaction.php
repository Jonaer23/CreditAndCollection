<?php
// sales_fetch_appointment.php

// Establish a secure database connection (modify the connection details accordingly)
$mysqli = new mysqli('localhost', 'centenn1_sedge', '@Hanabi16', 'centenn1_sedge_accountingsoftware');

// Check if the connection was successful
if ($mysqli->connect_errno) {
    die('Database connection error: ' . $mysqli->connect_error);
}

$status = isset($_POST['status']) ? $_POST['status'] : '';

$query = "SELECT tbl_proofofpayment.id, tbl_clientaccount.username, tbl_clientaccount.name, tbl_proofofpayment.transactionNumber,
tbl_proofofpayment.paymentMethod, tbl_proofofpayment.referenceNumber, tbl_proofofpayment.payersAccountNumber,
tbl_proofofpayment.proofOfPayment, tbl_proofofpayment.paymentDueDate, tbl_proofofpayment.dateCreated, tbl_proofofpayment.amount, tbl_proofofpayment.dateCreated,
tbl_proofofpayment.paymentDetails_bankName, tbl_proofofpayment.paymentDetails_accountNumber, tbl_proofofpayment.bankName, tbl_proofofpayment.accountNumber
FROM tbl_clientaccount 
LEFT JOIN tbl_proofofpayment ON tbl_clientaccount.username = tbl_proofofpayment.userAccount
WHERE tbl_proofofpayment.paymentStatus = ?";
$stmt = $mysqli->prepare($query);
$stmt->bind_param('s', $status);
// Execute the prepared statement
if ($stmt->execute()) {
    // Bind the result to variables
    $stmt->bind_result($id, $username, $name, $transactionNumber, $paymentMethod,$referenceNumber, $payersAccountNumber, $proofOfPayment, $paymentdueDate, $dateCreated,  $amount,  $created_at,  $paymentDetailsbankName,  $paymentDetailsaccountNumber,  $bankName,  $accountNumber);

    // Fetch the data and store it in an array
    $data = array();
    while ($stmt->fetch()) {
        $row = array(
            'id' => $id,
            'username' => htmlspecialchars($username, ENT_QUOTES, 'UTF-8'),
            'name' => htmlspecialchars($name,ENT_QUOTES, 'UTF-8'),
            'transactionNumber' =>  htmlspecialchars($transactionNumber,ENT_QUOTES, 'UTF-8'),
            'paymentMethod' => htmlspecialchars($paymentMethod, ENT_QUOTES, 'UTF-8'),
            'referenceNumber' => htmlspecialchars($referenceNumber, ENT_QUOTES, 'UTF-8'),
            'payersAccountNumber' => htmlspecialchars($payersAccountNumber,ENT_QUOTES, 'UTF-8'),
            'proofOfPayment' => htmlspecialchars($proofOfPayment,ENT_QUOTES, 'UTF-8'),
            'paymentdueDate' => htmlspecialchars($paymentdueDate,ENT_QUOTES, 'UTF-8'),
            'dateCreated' => htmlspecialchars($dateCreated,ENT_QUOTES, 'UTF-8'),
            'amount' => htmlspecialchars($amount,ENT_QUOTES, 'UTF-8'),
            'created_at' => htmlspecialchars($created_at,ENT_QUOTES, 'UTF-8'),
            'paymentDetailsbankName' => htmlspecialchars($paymentDetailsbankName,ENT_QUOTES, 'UTF-8'),
            'paymentDetailsaccountNumber' => htmlspecialchars($paymentDetailsaccountNumber,ENT_QUOTES, 'UTF-8'),
            'bankName' => htmlspecialchars($bankName,ENT_QUOTES, 'UTF-8'),
            'accountNumber' => htmlspecialchars($accountNumber,ENT_QUOTES, 'UTF-8')
            
        );
        $data[] = $row;
    }

    // Close the prepared statement
    $stmt->close();

    // Close the database connection
    $mysqli->close();

    // Set the response header as JSON
    header('CCD_paymentTransaction.php');

    // Convert the data to JSON and send it as the response
    echo json_encode($data);
    exit; // Terminate the script
} else {
    // Handle any error that occurred during the query
    header('HTTP/1.1 500 Internal Server Error');
    echo json_encode(array('error' => 'Error executing query: ' . $stmt->error));
    exit; // Terminate the script
}
?>
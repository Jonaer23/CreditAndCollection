<?php
// sales_fetch_appointment.php

// Establish a secure database connection (modify the connection details accordingly)
$mysqli = new mysqli('localhost', 'centenn1_sedge', '@Hanabi16', 'centenn1_sedge_accountingsoftware');

// Check if the connection was successful
if ($mysqli->connect_errno) {
    die('Database connection error: ' . $mysqli->connect_error);
}

$accountId = isset($_POST['accountId']) ? $_POST['accountId'] : '';

$query = "SELECT tbl_ledger.contractCode, tbl_ledger.customerName, tbl_ledger.timeStamp, tbl_ledger.area,
tbl_ledger.section, tbl_ledger.lotID, tbl_ledger.type, tbl_ledger.block, tbl_ledger.lotNo,
tbl_ledger.cryptlevel, tbl_ledger.cryptarea, tbl_ledger.cryptsection, tbl_ledger.crypt_column, tbl_ledger.cryptunit_no, tbl_ledger.cryptclassification, tbl_ledger.crypt_id1,
tbl_ledger.lotdescTerms, tbl_ledger.lotListPrice, tbl_ledger.VAT, tbl_ledger.subtotaltax, tbl_ledger.discount,
tbl_ledger.subtotalDiscount, tbl_ledger.PCF, tbl_ledger.totalContractPrice, tbl_ledger.downpayment,
tbl_ledger.dpPercentage, tbl_ledger.balance, tbl_ledger.NoOfMonths, buyersinformationsheet.dateCreated, tbl_ledger.paymentDueDate,
buyersinformationsheet.companyAddress, 
buyersinformationsheet.r_Address, 
buyersinformationsheet.b_Address, buyersinformationsheet.Residential_Phone, buyersinformationsheet.PositionInCompany,
buyersinformationsheet.companyTellNo, buyersinformationsheet.SpouseName
FROM tbl_ledger
LEFT JOIN buyersinformationsheet ON tbl_ledger.customerCode = buyersinformationsheet.customerCode
WHERE tbl_ledger.customerCode = ?";
$stmt = $mysqli->prepare($query);
$stmt->bind_param('s', $accountId);

$query1 = "SELECT paymentDueDate
FROM tbl_flatinterest
WHERE contractCode = ? ORDER BY `paymentDueDate` DESC LIMIT 1";
$stmt1 = $mysqli->prepare($query1);
$stmt1->bind_param('s', $accountId);

// Execute the prepared statement
if ($stmt->execute()) {
    // Bind the result to variables
    $stmt->bind_result($contractCode, $customerName, $dateOfContract, $area, $section, $lotID, $type, $block, $lotNo,
     $cryptlevel, $cryptarea, $cryptsection, $crypt_column, $cryptunit_no, $cryptclassification, $crypt_id1, 
     $lotdescTerms, $lotListPrice, $VAT, $subtotaltax,$discount,$subtotalDiscount, $PCF, $totalContractPrice, $dpPercentage2,
    $dpPercentage, $balance, $NoOfMonths, $reservedDate, $paymentDueDate, $companyAddress, $residentAddress, $billingAddress, $Residential_Phone, $PositionInCompany, $companyTellNo,
     $SpouseName);

    // Fetch the data and store it in an array
    $data = array();
    while ($stmt->fetch()) {
        $row = array(
            'contractCode' => $contractCode,
            'customerName' => $customerName,
            'dateOfContract' => $dateOfContract,
            'area' => $area,
            'section' => $section,
            'lotID' => $lotID,
            'type' => $type,
            'block' => $block,
            'lotNo' => $lotNo,
            'cryptlevel' => $cryptlevel,
            'cryptarea' => $cryptarea,
            'cryptsection' => $cryptsection,
            'crypt_column' => $crypt_column,
            'cryptunit_no' => $cryptunit_no,
            'cryptclassification' => $cryptclassification,
            'crypt_id1' => $crypt_id1,
            'lotdescTerms' => $lotdescTerms,
            'lotListPrice' => $lotListPrice,
            'VAT' => $VAT,
            'discount' => $discount,
            'subtotalVAT' => $subtotaltax,
            'subtotalDiscount' => $subtotalDiscount,
            'PCF' => $PCF,
            'totalContractPrice' => $totalContractPrice,
            'dpPercentage2' => $dpPercentage2,
            'dpPercentage' => $dpPercentage,
            'balance' => $balance,
            'NoOfMonths' => $NoOfMonths,
            'reservedDate' => $reservedDate,
            'paymentDueDate' => $paymentDueDate,
            'companyAddress' => $companyAddress,
            'Residential_Phone' => $Residential_Phone,
            'PositionInCompany' => $PositionInCompany,
            'SpouseName' => $SpouseName,
            'residentAddress' => $residentAddress,
            'billingAddress' => $billingAddress,
            'companyTellNo' => $companyTellNo
        );
        $data[] = $row;
    }

    // Close the prepared statement
    $stmt->close();

    // Close the database connection
    $mysqli->close();

    // Set the response header as JSON
    header('Fetch.Validation_CCDLedgerAccount.php');

    // Convert the data to JSON and send it as the response
    echo json_encode($data);
    exit; // Terminate the script
}
if ($stmt1->execute()) {
    // Bind the result to a variable
    $stmt1->bind_result($lastPaymentDueDate);

    // Fetch the last payment due date
    $stmt1->fetch();

    // Add the last payment due date to the data array
    $data[0]['lastPaymentDueDate'] = $lastPaymentDueDate;

    // Close the second prepared statement
    $stmt1->close();
}
 else {
    // Handle any error that occurred during the query
    header('HTTP/1.1 500 Internal Server Error');
    echo json_encode(array('error' => 'Error executing query: ' . $stmt->error));
    exit; // Terminate the script
}
?>
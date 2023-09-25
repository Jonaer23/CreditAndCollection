<?php
// sales_fetch_appointment.php

// Establish a secure database connection (modify the connection details accordingly)
$mysqli = new mysqli('localhost', 'centenn1_sedge', '@Hanabi16', 'centenn1_sedge_accountingsoftware');

// Check if the connection was successful
if ($mysqli->connect_errno) {
    die('Database connection error: ' . $mysqli->connect_error);
}

$status = isset($_POST['status']) ? $_POST['status'] : '';

$query = "SELECT tbl_ledger.id, tbl_ledger.customerCode, tbl_ledger.customerName, tbl_ledger.totalContractPrice, tbl_ledger.status,
tbl_ledger.reservedDate, tbl_ledger.lotdescTerms, tbl_ledger.lotListPrice, tbl_ledger.VAT, tbl_ledger.subtotaltax, 
tbl_ledger.PCF, tbl_ledger.discount, tbl_ledger.subtotalDiscount, tbl_ledger.dpPercentage2, tbl_ledger.balance, 
tbl_ledger.lotID, tbl_ledger.block, tbl_ledger.section, tbl_ledger.lotNo, tbl_ledger.area, tbl_ledger.phase, tbl_ledger.type, 
buyersinformationsheet.r_Address, buyersinformationsheet.b_Address,
buyersinformationsheet.Residential_Phone, buyersinformationsheet.Mobile_Phone, buyersinformationsheet.issuedAt, buyersinformationsheet.ResidentSince, buyersinformationsheet.issuedOn, 
tbl_ledger.cryptphase, tbl_ledger.cryptlevel, tbl_ledger.cryptarea, tbl_ledger.cryptsection, tbl_ledger.crypt_column, tbl_ledger.cryptunit_no, tbl_ledger.cryptclassification
FROM tbl_ledger
LEFT JOIN buyersinformationsheet ON tbl_ledger.customerCode = buyersinformationsheet.customerCode
WHERE tbl_ledger.status = ?";
$stmt = $mysqli->prepare($query);
$stmt->bind_param('s', $status);
// Execute the prepared statement
if ($stmt->execute()) {
    // Bind the result to variables
    $stmt->bind_result($id, $customerCode, $customerName, $totalContractPrice, $status,$reservedDate, $lotdescTerms, $lotListPrice, $VAT, $subtotaltax, $PCF, $discount, $subtotalDiscount, $downpayment, $balance, $lotID, $block, $section, $lotNo, $area, $phase, $type,$R_BlkLot, $B_BlkLot, $RphoneNo, $MphoneNo, $issuedAt, $residenceSince, $issuedOn, $cryptPhase, $cryptLevel, $cryptArea, $cryptSection, $cryptColumn, $cryptUnitNumber, $cryptClassification);

    // Fetch the data and store it in an array
    $data = array();
    while ($stmt->fetch()) {
        $row = array(
            'id' => $id,
            'customerCode' => htmlspecialchars($customerCode, ENT_QUOTES, 'UTF-8'),
            'customerName' => htmlspecialchars($customerName,ENT_QUOTES, 'UTF-8'),
            'totalContractPrice' =>  htmlspecialchars($totalContractPrice,ENT_QUOTES, 'UTF-8'),
            'status' => htmlspecialchars($status, ENT_QUOTES, 'UTF-8'),
            'reservedDate' => htmlspecialchars($reservedDate, ENT_QUOTES, 'UTF-8'),
            'lotdescTerms' => htmlspecialchars($lotdescTerms,ENT_QUOTES, 'UTF-8'),
            'lotListPrice' =>  htmlspecialchars($lotListPrice,ENT_QUOTES, 'UTF-8'),
            'VAT' => htmlspecialchars($VAT, ENT_QUOTES, 'UTF-8'),
            'subtotaltax' => htmlspecialchars($subtotaltax, ENT_QUOTES, 'UTF-8'),
            'PCF' => htmlspecialchars($PCF,ENT_QUOTES, 'UTF-8'),
            'discount' =>  htmlspecialchars($discount,ENT_QUOTES, 'UTF-8'),
            'subtotalDiscount' => htmlspecialchars($subtotalDiscount, ENT_QUOTES, 'UTF-8'),
            'downpayment' => htmlspecialchars($downpayment, ENT_QUOTES, 'UTF-8'),
            'balance' => htmlspecialchars($balance,ENT_QUOTES, 'UTF-8'),
            'lotID' =>  htmlspecialchars($lotID,ENT_QUOTES, 'UTF-8'),
            'block' => htmlspecialchars($block, ENT_QUOTES, 'UTF-8'),
            'section' => htmlspecialchars($section, ENT_QUOTES, 'UTF-8'),
            'lotNo' => htmlspecialchars($lotNo,ENT_QUOTES, 'UTF-8'),
            'area' =>  htmlspecialchars($area,ENT_QUOTES, 'UTF-8'),
            'phase' => htmlspecialchars($phase, ENT_QUOTES, 'UTF-8'),
            'type' => htmlspecialchars($type, ENT_QUOTES, 'UTF-8'),
            'R_Address' => htmlspecialchars($R_BlkLot,ENT_QUOTES, 'UTF-8'),
            'B_Address' =>  htmlspecialchars($B_BlkLot,ENT_QUOTES, 'UTF-8'),
            'RphoneNo' =>  htmlspecialchars($RphoneNo,ENT_QUOTES, 'UTF-8'),
            'MphoneNo' => htmlspecialchars($MphoneNo, ENT_QUOTES, 'UTF-8'),
            'issuedAt' => htmlspecialchars($issuedAt, ENT_QUOTES, 'UTF-8'),
            'residenceSince' => htmlspecialchars($residenceSince,ENT_QUOTES, 'UTF-8'),
            'issuedOn' =>  htmlspecialchars($issuedOn,ENT_QUOTES, 'UTF-8'),
            'cryptPhase' => htmlspecialchars($cryptPhase,ENT_QUOTES, 'UTF-8'),
            'cryptLevel' => htmlspecialchars($cryptLevel,ENT_QUOTES, 'UTF-8'),
            'cryptArea' => htmlspecialchars($cryptArea,ENT_QUOTES, 'UTF-8'),
            'cryptSection' => htmlspecialchars($cryptSection,ENT_QUOTES, 'UTF-8'),
            'cryptColumn' => htmlspecialchars($cryptColumn,ENT_QUOTES, 'UTF-8'),
            'cryptUnitNumber' => htmlspecialchars($cryptUnitNumber,ENT_QUOTES, 'UTF-8'),
            'cryptClassification' => htmlspecialchars($cryptClassification,ENT_QUOTES, 'UTF-8')
        );
        $data[] = $row;
    }

    // Close the prepared statement
    $stmt->close();

    // Close the database connection
    $mysqli->close();

    // Set the response header as JSON
    header('CCD_paymentVerification.php');

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
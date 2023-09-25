<?php
// sales_fetch_appointment.php

// Establish a secure database connection (modify the connection details accordingly)
$mysqli = new mysqli('localhost', 'centenn1_sedge', '@Hanabi16', 'centenn1_sedge_accountingsoftware');

// Check if the connection was successful
if ($mysqli->connect_errno) {
    die('Database connection error: ' . $mysqli->connect_error);
}

$status = isset($_POST['status']) ? $_POST['status'] : '';

$query = "SELECT id, customerName, contractCode, customerCode, date_column, lotID, block, Lot, section, lotNo, area, phase,
type, totalContractPrice, lotdescTerms, lotListPrice, VAT, discount, PCF, modeOfpayment, subtotaltax, subtotalDiscount, dpPercentage, dpPercentage2,
balance, MI1, NoOfMonths, MI2, cryptarea, cryptclassification
FROM tbl_ledger
WHERE status = ?";
$stmt = $mysqli->prepare($query);
$stmt->bind_param('s', $status);
// Execute the prepared statement
if ($stmt->execute()) {
    // Bind the result to variables
    $stmt->bind_result($id, $customerName, $contractCode, $customerCode, $date_column,$lotID, $block, $Lot, 
    $section, $lotNo,  $area,  $phase,  $type, $totalContractPrice,  $lotdescTerms,  $lotListPrice, $VAT,  $discount,  $PCF, $modeOfpayment,
    $subtotaltax,  $subtotalDiscount,  $dpPercentage,  $dpPercentage2,  $balance,  $MI1,  $NoOfMonths,  $MI2,  $Cryptarea,  $Crypttype);

    // Fetch the data and store it in an array
    $data = array();
    while ($stmt->fetch()) {
        $row = array(
            'id' => $id,
            'customerName' => htmlspecialchars($customerName, ENT_QUOTES, 'UTF-8'),
            'contractCode' => htmlspecialchars($contractCode,ENT_QUOTES, 'UTF-8'),
            'customerCode' =>  htmlspecialchars($customerCode,ENT_QUOTES, 'UTF-8'),
            'date_column' => htmlspecialchars($date_column, ENT_QUOTES, 'UTF-8'), 
            'lotID' => htmlspecialchars($lotID, ENT_QUOTES, 'UTF-8'),
            'block' => htmlspecialchars($block,ENT_QUOTES, 'UTF-8'),
            'Lot' => htmlspecialchars($Lot,ENT_QUOTES, 'UTF-8'),
            'section' => htmlspecialchars($section,ENT_QUOTES, 'UTF-8'),
            'lotNo' => htmlspecialchars($lotNo,ENT_QUOTES, 'UTF-8'),
            'area' => htmlspecialchars($area,ENT_QUOTES, 'UTF-8'),
            'phase' => htmlspecialchars($phase,ENT_QUOTES, 'UTF-8'),
            'type' => htmlspecialchars($type,ENT_QUOTES, 'UTF-8'),
            'Cryptarea' => htmlspecialchars($Cryptarea,ENT_QUOTES, 'UTF-8'),
            'Crypttype' => htmlspecialchars($Crypttype,ENT_QUOTES, 'UTF-8'),
            'totalContractPrice' => htmlspecialchars($totalContractPrice, ENT_QUOTES, 'UTF-8'),
            'lotdescTerms' => htmlspecialchars($lotdescTerms,ENT_QUOTES, 'UTF-8'),
            'lotListPrice' =>  htmlspecialchars($lotListPrice,ENT_QUOTES, 'UTF-8'),
            'VAT' => htmlspecialchars($VAT, ENT_QUOTES, 'UTF-8'),
            'discount' => htmlspecialchars($discount, ENT_QUOTES, 'UTF-8'),
            'PCF' => htmlspecialchars($PCF,ENT_QUOTES, 'UTF-8'),
            'modeOfpayment' => htmlspecialchars($modeOfpayment,ENT_QUOTES, 'UTF-8'),
            'subtotaltax' => htmlspecialchars($subtotaltax,ENT_QUOTES, 'UTF-8'),
            'subtotalDiscount' => htmlspecialchars($subtotalDiscount,ENT_QUOTES, 'UTF-8'),
            'dpPercentage' => htmlspecialchars($dpPercentage,ENT_QUOTES, 'UTF-8'),
            'dpPercentage2' => htmlspecialchars($dpPercentage2,ENT_QUOTES, 'UTF-8'),
            
            'balance' => htmlspecialchars($balance,ENT_QUOTES, 'UTF-8'),
            'MI1' => htmlspecialchars($MI1,ENT_QUOTES, 'UTF-8'),
            'NoOfMonths' => htmlspecialchars($NoOfMonths,ENT_QUOTES, 'UTF-8'),
            'MI2' => htmlspecialchars($MI2,ENT_QUOTES, 'UTF-8')
            
        );
        $data[] = $row;
    }

    // Close the prepared statement
    $stmt->close();

    // Close the database connection
    $mysqli->close();
    //Content-Type: application/json
    // Set the response header as JSON
    // header('Content-Type: application/json');

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
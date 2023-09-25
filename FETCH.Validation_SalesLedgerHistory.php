<?php
// sales_fetch_appointment.php

// Establish a secure database connection (modify the connection details accordingly)
$mysqli = new mysqli('localhost', 'centenn1_sedge', '@Hanabi16', 'centenn1_sedge_accountingsoftware');

// Check if the connection was successful
if ($mysqli->connect_errno) {
    die('Database connection error: ' . $mysqli->connect_error);
}

$accountId = isset($_POST['accountId']) ? $_POST['accountId'] : '';

$query = "SELECT tbl_ledger.customerName, tbl_ledger.paymentDueDate, tbl_ledger.lotdescTerms, tbl_ledger.lotListPrice, tbl_ledger.VAT, tbl_ledger.subtotaltax, tbl_ledger.PCF, tbl_ledger.discount, tbl_ledger.subtotalDiscount, tbl_ledger.totalContractPrice, 
tbl_ledger.downpayment, tbl_ledger.balance, tbl_ledger.block, tbl_ledger.section, tbl_ledger.lotNo, tbl_ledger.area, tbl_ledger.phase, tbl_ledger.type, tbl_ledger.classification, tbl_ledger.contractCode,
tbl_ledger.customerCode, buyersinformationsheet.r_Address, buyersinformationsheet.b_Address, buyersinformationsheet.IssuedAt, buyersinformationsheet.IssuedOn, buyersinformationsheet.Sex, buyersinformationsheet.DOB, buyersinformationsheet.Citizenship, buyersinformationsheet.Height, buyersinformationsheet.Weight,
buyersinformationsheet.SSS_No, buyersinformationsheet.HDMF_No, buyersinformationsheet.TIN, buyersinformationsheet.NBI, buyersinformationsheet.MaritalStatus, buyersinformationsheet.Pre_Nuptial, buyersinformationsheet.Residential_Phone, buyersinformationsheet.Mobile_Phone, buyersinformationsheet.BusinessPhone, buyersinformationsheet.EmailAddress,
buyersinformationsheet.SpouseName, buyersinformationsheet.SpouseOccupation, buyersinformationsheet.FatherName, buyersinformationsheet.FatherOccupation, buyersinformationsheet.MotherName, buyersinformationsheet.MotherOccupation, buyersinformationsheet.ChildrensName, buyersinformationsheet.C_DOB, buyersinformationsheet.C_Age, buyersinformationsheet.Employment_Status, 
buyersinformationsheet.SourceOfIncome, buyersinformationsheet.EmployerBusinessName, buyersinformationsheet.NatureOfEmployeerBusiness, buyersinformationsheet.PositionInCompany, buyersinformationsheet.EmployementDate, buyersinformationsheet.NameOfMemorialPark, buyersinformationsheet.Since, buyersinformationsheet.Location, tbl_ledger.lotdescTerms, tbl_ledger.crypt_id1, 
tbl_ledger.cryptphase, tbl_ledger.cryptarea, tbl_ledger.cryptsection, tbl_ledger.crypt_column, tbl_ledger.cryptunit_no, tbl_ledger.cryptclassification, tbl_ledger.lotdescTerms, tbl_ledger.cryptlevel, buyersinformationsheet.ResidentSince, tbl_ledger.timeStamp, tbl_ledger.COO
FROM tbl_ledger
LEFT JOIN buyersinformationsheet ON tbl_ledger.customerCode = buyersinformationsheet.customerCode
WHERE tbl_ledger.customerCode = ?"; // Move WHERE clause inside the query
$stmt = $mysqli->prepare($query);
$stmt->bind_param('s', $accountId);


// Execute the prepared statement
if ($stmt->execute()) {
    // Bind the result to variables
    $stmt->bind_result($customerName, $paymentDueDate, $terms, $listprice, $VAT, $vatSubtotal, $PCF, $discount, $subtotalDiscount, $TCP,
    $downpayment, $fullDownpayment, $lotID, $section, $numberoflots, $area, $phase, $type, $classification, $contractCode,
    $customerCode, $residenceAddress, $billingAddress, $issuedAt, $issuedOn, $sex, $dateofBirth, $citizenship, $height, $weight,
    $sss, $HFMF, $TIN, $NBI, $maritalStatus, $preNuptial, $residentialPhone, $mobilePhone, $businessPhone, $emailAddress,
    $spouseName, $spouseOccupation, $fatherName, $fatherOccupation, $motherName, $motherOccupation, $childrenName, $dateOfBirthChildren, $age, $employmentStatus, 
    $sourceOfIncome, $employerBusinessName, $natureBusiness, $positionInCompany, $employmentDate, $namememorialPlot, $sincememorialPlot, $locationmemorialPlot, $lotTerms,
    $cryptID, $cryptPhase, $cryptArea, $cryptSection, $cryptColumn, $unitNo, $cryptClass, $cryptTerms, $cryptLevel, $residenceSince, $dateCreated, $COO);

    // Fetch the data and store it in an array
    $data = array();
    while ($stmt->fetch()) {
        $row = array(
            'customerName' => $customerName,
            'paymentDueDate' => $paymentDueDate,
            'terms' => $terms,
            'listprice' => $listprice,
            'VAT' => $VAT,
            'vatSubtotal' => $vatSubtotal,
            'PCF' => $PCF,
            'discount' => $discount,
            'subtotalDiscount' => $subtotalDiscount,
            'TCP' => $TCP,
            'downpayment' => $downpayment,
            'fullDownpayment' => $fullDownpayment,
            
            'COO' => $COO,
            'lotID' => $lotID,
            'section' => $section,
            'numberoflots' => $numberoflots,
            'area' => $area,
            'phase' => $phase,
            'type' => $type,
            'classification' => $classification,
            
            'contractCode' => $contractCode,
            'customerCode' => $customerCode,
            'residenceAddress' => $residenceAddress,
            'billingAddress' => $billingAddress,
            'issuedAt' => $issuedAt,
            'issuedOn' => $issuedOn,
            'sex' => $sex,
            'dateofBirth' => $dateofBirth,
            'citizenship' => $citizenship,
            'height' => $height,
            'weight' => $weight,
            'sss' => $sss,
            'HFMF' => $HFMF,
            'TIN' => $TIN,
            'NBI' => $NBI,
            'maritalStatus' => $maritalStatus,
            'preNuptial' => $preNuptial,
            'residentialPhone' => $residentialPhone,
            'mobilePhone' => $mobilePhone,
            'businessPhone' => $businessPhone,
            'emailAddress' => $emailAddress,
            'spouseName' => $spouseName,
            'spouseOccupation' => $spouseOccupation,
            'fatherName' => $fatherName,
            'fatherOccupation' => $fatherOccupation,
            'motherName' => $motherName,
            'motherOccupation' => $motherOccupation,
            'childrenName' => $childrenName,
            'dateOfBirthChildren' => $dateOfBirthChildren,
            'age' => $age,
            'employmentStatus' => $employmentStatus,
            'sourceOfIncome' => $sourceOfIncome,
            'employerBusinessName' => $employerBusinessName,
            'natureBusiness' => $natureBusiness,
            'positionInCompany' => $positionInCompany,
            'employmentDate' => $employmentDate,
            'namememorialPlot' => $namememorialPlot,
            'sincememorialPlot' => $sincememorialPlot,
            'locationmemorialPlot' => $locationmemorialPlot,
            'lotTerms' => $lotTerms,
            'cryptID' => $cryptID,
            'cryptPhase' => $cryptPhase,
            'cryptLevel' => $cryptLevel,
            'cryptArea' => $cryptArea,
            'cryptSection' => $cryptSection,
            'cryptColumn' => $cryptColumn,
            'unitNo' => $unitNo,
            'cryptClass' => $cryptClass,
            'cryptTerms' => $cryptTerms,
            'residenceSince' => $residenceSince,
            'dateCreated' => $dateCreated,
            
        );
        $data[] = $row;
    }

    // Close the prepared statement
    $stmt->close();

    // Close the database connection
    $mysqli->close();

    // Set the response header as JSON
    header('Content-Type: application/json');

    // Convert the data to JSON and send it as the response
    echo json_encode($data);
    exit; // Terminate the script
}
 else {
    // Handle any error that occurred during the query
    header('HTTP/1.1 500 Internal Server Error');
    echo json_encode(array('error' => 'Error executing query: ' . $stmt->error));
    exit; // Terminate the script
}
?>
<?php
// sales_fetch_appointment.php

// Establish a secure database connection (modify the connection details accordingly)
$mysqli = new mysqli('localhost', 'centenn1_sedge', '@Hanabi16', 'centenn1_sedge_accountingsoftware');

// Check if the connection was successful
if ($mysqli->connect_errno) {
    die('Database connection error: ' . $mysqli->connect_error);
}

$accountId = isset($_POST['accountId']) ? $_POST['accountId'] : '';

$query = "SELECT fullname, contractCode, customerCode, r_Address, b_Address, IssuedAt, IssuedOn, Sex, DOB, Citizenship, Height, Weight,
SSS_No, HDMF_No, TIN, NBI, MaritalStatus, Pre_Nuptial, Residential_Phone, Mobile_Phone, BusinessPhone, EmailAddress,
SpouseName, SpouseOccupation, FatherName, FatherOccupation, MotherName, MotherOccupation, ChildrensName, C_DOB, C_Age, Employment_Status, 
SourceOfIncome, EmployerBusinessName, NatureOfEmployeerBusiness, PositionInCompany, EmployementDate, NameOfMemorialPark, Since, Location, ResidentSince, dateCreated
FROM buyersinformationsheet
WHERE customerCode = ?"; // Move WHERE clause inside the query
$stmt = $mysqli->prepare($query);
$stmt->bind_param('s', $accountId);


// Execute the prepared statement
if ($stmt->execute()) {
    // Bind the result to variables
    $stmt->bind_result($customerName, $contractCode, $customerCode, $residenceAddress, $billingAddress, $issuedAt, $issuedOn, $sex, $dateofBirth, $citizenship, $height, $weight,
    $sss, $HFMF, $TIN, $NBI, $maritalStatus, $preNuptial, $residentialPhone, $mobilePhone, $businessPhone, $emailAddress,
    $spouseName, $spouseOccupation, $fatherName, $fatherOccupation, $motherName, $motherOccupation, $childrenName, $dateOfBirthChildren, $age, $employmentStatus, 
    $sourceOfIncome, $employerBusinessName, $natureBusiness, $positionInCompany, $employmentDate, $namememorialPlot, $sincememorialPlot, $locationmemorialPlot, $residenceSince, $dateCreated);

    // Fetch the data and store it in an array
    $data = array();
    while ($stmt->fetch()) {
        $row = array(
            'customerName' => $customerName,
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
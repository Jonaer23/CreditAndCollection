<?php
// sales_fetch_appointment.php

// Establish a secure database connection (modify the connection details accordingly)
$mysqli = new mysqli('localhost', 'centenn1_sedge', '@Hanabi16', 'centenn1_sedge_accountingsoftware');

// Check if the connection was successful
if ($mysqli->connect_errno) {
    die('Database connection error: ' . $mysqli->connect_error);
}

$accountId = isset($_POST['accountId']) ? $_POST['accountId'] : '';

$query = "SELECT customerCode, B_Date, fullname,  ResidentSince, IssuedAt, IssuedOn, Sex, DOB, Citizenship, Height, Weight, 
SSS_No, HDMF_No, TIN, NBI, MaritalStatus, Residential_Phone, Mobile_Phone, BusinessPhone, EmailAddress, SpouseName, 
FatherName, MotherName, SpouseOccupation, FatherOccupation, MotherOccupation, ChildrensName, C_DOB, C_Age, Employment_Status, SourceOfIncome, 
EmployerBusinessName, NatureOfEmployeerBusiness, PositionInCompany, EmployementDate, PersonalMonthlyIncome, r_Address, b_Address, dateCreated 
FROM buyersinformationsheet
WHERE customerCode = ?";
$stmt = $mysqli->prepare($query);
$stmt->bind_param('s', $accountId);


// Execute the prepared statement
if ($stmt->execute()) {
    // Bind the result to variables
    $stmt->bind_result($customerCode, $B_Date, $fullname, $ResidentSince, $IssuedAt, $IssuedOn, $Sex, $DOB, $Citizenship, $Height, $Weight,
     $SSS_No, $HDMF_No, $TIN, $NBI, $MaritalStatus, $Residential_Phone, $Mobile_Phone, $BusinessPhone, $EmailAddress, $SpouseName, 
     $FatherName, $MotherName, $SpouseOccupation, $FatherOccupation, $MotherOccupation, $ChildrensName, $C_DOB, $C_Age, $Employment_Status, $SourceOfIncome, 
    $EmployerBusinessName, $NatureOfEmployeerBusiness, $PositionInCompany, $EmployementDate, $PersonalMonthlyIncome, $r_Address, $b_Address, $dateCreated);

    // Fetch the data and store it in an array
    $data = array();
    while ($stmt->fetch()) {
        $row = array(
            'customerCode' => $customerCode,
            'B_Date' => $B_Date,
            'fullname' => $fullname,
            'ResidentSince' => $ResidentSince,
            'IssuedAt' => $IssuedAt,
            'IssuedOn' => $IssuedOn,
            'Sex' => $Sex,
            'DOB' => $DOB,
            'Citizenship' => $Citizenship,
            'Height' => $Height,
            'Weight' => $Weight,
            'SSS_No' => $SSS_No,
            'HDMF_No' => $HDMF_No,
            'TIN' => $TIN,
            'NBI' => $NBI,
            'MaritalStatus' => $MaritalStatus,
            'Residential_Phone' => $Residential_Phone,
            'Mobile_Phone' => $Mobile_Phone,
            'BusinessPhone' => $BusinessPhone,
            'EmailAddres' => $EmailAddress,
            'SpouseName' => $SpouseName,
            'FatherName' => $FatherName,
            'MotherName' => $MotherName,
            'SpouseOccupation' => $SpouseOccupation,
            'FatherOccupation' => $FatherOccupation,
            'MotherOccupation' => $MotherOccupation,
            'ChildrensName' => $ChildrensName,
            'C_DOB' => $C_DOB,
            'C_Age' => $C_Age,
            'Employment_Statu' => $Employment_Status,
            'SourceOfIncome' => $SourceOfIncome,
            'EmployerBusinessName' => $EmployerBusinessName,
            'NatureOfEmployeerBusiness' => $NatureOfEmployeerBusiness,
            'PositionInCompany' => $PositionInCompany,
            'EmployementDate' => $EmployementDate,
            'PersonalMonthlyIncome' => $PersonalMonthlyIncome,
            'r_Address' => $r_Address,
            'b_Address' => $b_Address,
            'dateCreated' => $dateCreated
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

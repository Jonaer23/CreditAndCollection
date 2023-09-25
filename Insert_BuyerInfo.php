<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include 'connection.php';

// Function to generate a random string
function generateRandomString($length = 10) {
    $characters = '0123456789';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;
}

$token = generateRandomString(10); // Generate a random token
$B_Date = strtoupper($_POST['B_Date']);
$Fullname = strtoupper($_POST['Firstname'] . ' ' . $_POST['Middlename'] . ' ' . $_POST['Lastname']);
$R_Address = strtoupper($_POST['R_Blk'] . ', ' . $_POST['R_City'] . ', ' . $_POST['R_Province'] . ', ' . $_POST['R_Country'] . ', ' . $_POST['R_Zipcode']);
$B_Address = strtoupper($_POST['B_Blk'] . ', ' . $_POST['C_City'] . ', ' . $_POST['C_Province'] . ', ' . $_POST['C_Country'] . ', ' . $_POST['C_Zipcode']);
$IssuedAt = strtoupper($_POST['IssuedAt']);
$IssuedOn = strtoupper($_POST['IssuedOn']);
$R_Since = strtoupper($_POST['R_Since']);
$Sex = strtoupper($_POST['Sex']);
$DOB = strtoupper($_POST['DOB']);
$Citizenship = strtoupper($_POST['Citizenship']);
$Height = strtoupper($_POST['Height']);
$Weight = strtoupper($_POST['Weight']);
$GSIS = strtoupper($_POST['GSIS']);
$HDMF = strtoupper($_POST['HDMF']);
$TIN = strtoupper($_POST['TIN']);
$NBI = strtoupper($_POST['NBI']);
$MaritalStatus = strtoupper($_POST['MaritalStatus']);
$pre_nupital = strtoupper($_POST['pre_nupital']);
$R_Phone = strtoupper($_POST['R_Phone']);
$M_Phone = strtoupper($_POST['M_Phone']);
$B_Phone = strtoupper($_POST['B_Phone']);
$Email = strtoupper($_POST['Email']);
$MotherName = strtoupper($_POST['MotherName']);
$M_Occupation = strtoupper($_POST['M_Occupation']);
$FatherName = strtoupper($_POST['FatherName']);
$F_Occupation = strtoupper($_POST['F_Occupation']);
$SpouseName = strtoupper($_POST['SpouseName']);
$S_Occupation = strtoupper($_POST['S_Occupation']);
$ChildrenName = strtoupper($_POST['ChildrenName']);
$EmploymentStatus = strtoupper($_POST['EmploymentStatus']);
$PersonalMonthlyIncome = strtoupper($_POST['PersonalMonthlyIncome']);
$SourceOfIncome = strtoupper($_POST['SourceOfIncome']);
$Business_Name = strtoupper($_POST['Business_Name']);
$Employer_Name = strtoupper($_POST['Employer_Name']);
$PositionCompany = strtoupper($_POST['PositionCompany']);
$EmploymentDate = strtoupper($_POST['EmploymentDate']);
$Name_MemorialPark = strtoupper($_POST['Name_MemorialPark']);
$Since = strtoupper($_POST['Since']);
$Location = strtoupper($_POST['Location']);
$uniqueToken = 'SSDC-CC-' . $token;

// Prepare the SQL statement with parameterized query
$stmt = $connection->prepare("INSERT INTO `buyersinformationsheet`(`contractCode`,`dateCreated`,`customerCode`,`Status`,`B_Date`, `fullname`, `r_Address`, `b_Address`, `ResidentSince`, `IssuedAt`,
`IssuedOn`, `Sex`, `DOB`, `Citizenship`, `Height`, `Weight`, `SSS_No`, `HDMF_No`, `TIN`, `NBI`,
`MaritalStatus`, `Pre_Nuptial`, `Residential_Phone`, `Mobile_Phone`, `BusinessPhone`,`EmailAddress`, `SpouseName`, `FatherName`, `MotherName`,`SpouseOccupation`,
`FatherOccupation`, `MotherOccupation`, `ChildrensName`, `Employment_Status`, `SourceOfIncome`, `EmployerBusinessName`, `NatureOfEmployeerBusiness`, `PositionInCompany`, `EmployementDate`,`PersonalMonthlyIncome`,
`NameOfMemorialPark`, `Since`, `Location`) VALUES (?, now(), ?, 'Appointment', ?, ?, ?, ?, ?, ?,
?, ?, ?, ?, ?, ?, ?, ?, ?, ?,
?, ?, ?, ?, ?, ?, ?, ?, ?, ?, 
?, ?, ?, ?, ?, ?, ?, ?, ?, ?,
?, ?, ?)");

// Bind the parameters to prevent SQL injection
$stmt->bind_param("sssssssssssssssssssssssssssssssssssssssss", $uniqueToken, $uniqueToken, $B_Date, $Fullname, $R_Address, $B_Address, $R_Since, $IssuedAt, $IssuedOn, $Sex, $DOB, $Citizenship, $Height, $Weight, $GSIS, $HDMF, $TIN, $NBI, $MaritalStatus, $pre_nupital, $R_Phone, $M_Phone, $B_Phone, $Email, $SpouseName, $FatherName, $MotherName, $S_Occupation, $F_Occupation, $M_Occupation, $ChildrenName, $EmploymentStatus, $SourceOfIncome, $Business_Name, $Employer_Name, $PositionCompany, $EmploymentDate, $PersonalMonthlyIncome, $Name_MemorialPark, $Since, $Location);

// Execute the prepared statement
if ($stmt->execute()) {
    echo ("<script LANGUAGE='JavaScript'>
        window.location.href='BuyerInfo.php';
        </script>");
} else {
    echo ("<script LANGUAGE='JavaScript'>
        window.alert('Error occurred while inserting data.');
        window.location.href='BuyerInfo.php';
        </script>");
}

// Close the statement and connection
$stmt->close();
$connection->close();
?>

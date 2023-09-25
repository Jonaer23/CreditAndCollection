<?php
// Check if the request is made using POST method and contains valid CSRF token (this part is not included here)

// Retrieve the form data and sanitize inputs
$Fullname = filter_input(INPUT_POST, "Fullname", FILTER_SANITIZE_STRING);
$Residenceadd = filter_input(INPUT_POST, "Residenceaddress", FILTER_SANITIZE_STRING);
$Billingaddress = filter_input(INPUT_POST, "Billingaddress", FILTER_SANITIZE_STRING);
$Issuedat = filter_input(INPUT_POST, "IssuedAt", FILTER_SANITIZE_STRING);
$Issuedon = filter_input(INPUT_POST, "IssuedOn", FILTER_SANITIZE_STRING);
$Rsince = filter_input(INPUT_POST, "RSince", FILTER_SANITIZE_STRING);
$Dob = filter_input(INPUT_POST, "DoB", FILTER_SANITIZE_STRING);
$Citizenship = filter_input(INPUT_POST, "Citizenship", FILTER_SANITIZE_STRING);
$Height = filter_input(INPUT_POST, "Height", FILTER_SANITIZE_STRING);
$Weight = filter_input(INPUT_POST, "Weight", FILTER_SANITIZE_STRING);
$Gsis = filter_input(INPUT_POST, "GSIS", FILTER_SANITIZE_STRING);
$Hdmf = filter_input(INPUT_POST, "HDMF", FILTER_SANITIZE_STRING);
$Tin = filter_input(INPUT_POST, "Tin", FILTER_SANITIZE_STRING);
$Nbi = filter_input(INPUT_POST, "Nbi", FILTER_SANITIZE_STRING);
$Rphone = filter_input(INPUT_POST, "RPhone", FILTER_SANITIZE_STRING);
$Mphone = filter_input(INPUT_POST, "MPhone", FILTER_SANITIZE_STRING);
$Bphone = filter_input(INPUT_POST, "BPhone", FILTER_SANITIZE_STRING);
$Email = filter_input(INPUT_POST, "Email", FILTER_VALIDATE_EMAIL);
$Mothername = filter_input(INPUT_POST, "MotherName", FILTER_SANITIZE_STRING);
$Moccupation = filter_input(INPUT_POST, "MOccupation", FILTER_SANITIZE_STRING);
$Fathername = filter_input(INPUT_POST, "FatherName", FILTER_SANITIZE_STRING);
$Foccupation = filter_input(INPUT_POST, "FOccupation", FILTER_SANITIZE_STRING);
$Spousename = filter_input(INPUT_POST, "SpouseName", FILTER_SANITIZE_STRING);
$Soccupation = filter_input(INPUT_POST, "SOccupation", FILTER_SANITIZE_STRING);
$Childrenname = filter_input(INPUT_POST, "ChildrenName", FILTER_SANITIZE_STRING);
$Businessname = filter_input(INPUT_POST, "BusinessName", FILTER_SANITIZE_STRING);
$Employername = filter_input(INPUT_POST, "EmployerName", FILTER_SANITIZE_STRING);
$Positioncompany = filter_input(INPUT_POST, "PositionCompany", FILTER_SANITIZE_STRING);
$Employmentdate = filter_input(INPUT_POST, "EmploymentDate", FILTER_SANITIZE_STRING);
$Namememorialpark = filter_input(INPUT_POST, "NameMemorialpark", FILTER_SANITIZE_STRING);
$Since = filter_input(INPUT_POST, "Since", FILTER_SANITIZE_STRING);
$Location = filter_input(INPUT_POST, "Location", FILTER_SANITIZE_STRING);
$customerCode = filter_input(INPUT_POST, "customerCode", FILTER_SANITIZE_STRING);
$B_Date = filter_input(INPUT_POST, "B_Date", FILTER_SANITIZE_STRING);

// Validate the data (you can add more validation as needed)
if (empty($Fullname)) {
    http_response_code(400); // Bad Request
    echo "Invalid data format.";
    exit();
}

// Database configuration (replace with your actual database credentials)
 $db_host = "localhost";
    $db_user = "centenn1_sedge";
    $db_pass = "@Hanabi16";
    $db_name = "centenn1_sedge_accountingsoftware";
try {
    // Create a database connection using PDO (more secure than mysqli)
    $conn = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Prepare the SQL query to insert data into the "buyersinformationsheet" table with named placeholders
    $sql = "INSERT INTO buyersinformationsheet (B_Date, customerCode, contractCode, Status, fullname, r_Address, b_Address, IssuedAt, IssuedOn, ResidentSince, DOB, Citizenship, Height, Weight, SSS_No, HDMF_No, TIN, NBI, Residential_Phone, Mobile_Phone, BusinessPhone, EmailAddress, MotherName, MotherOccupation, FatherName, FatherOccupation, SpouseName, SpouseOccupation, ChildrensName, EmployerBusinessName, NatureOfEmployeerBusiness, PositionInCompany, EmployementDate, NameOfMemorialPark, Since, Location)
            VALUES (:B_Date, :CustomerCode, :ContractCode, :Status, :Fullname, :Residenceaddress, :Billingaddress, :IssuedAt, :IssuedOn, :RSince, :DoB, :Citizenship, :Height, :Weight, :GSIS, :HDMF, :Tin, :Nbi, :RPhone, :MPhone, :BPhone, :Email, :MotherName, :MOccupation, :FatherName, :FOccupation, :SpouseName, :SOccupation, :ChildrenName, :BusinessName, :EmployerName, :PositionCompany, :EmploymentDate, :NameMemorialpark, :Since, :Location)";
    $stmt = $conn->prepare($sql);

    // Bind the sanitized data to the named placeholders
     $stmt->bindParam(":CustomerCode", $customerCode);
     $stmt->bindParam(":ContractCode", $customerCode);
     $stmt->bindValue(":Status", 'APPOINTMENT');
     $stmt->bindParam(":B_Date", $B_Date);
    $stmt->bindParam(":Fullname", $Fullname);
    $stmt->bindParam(":Residenceaddress", $Residenceadd);
    $stmt->bindParam(":Billingaddress", $Billingaddress);
    $stmt->bindParam(":IssuedAt", $Issuedat);
    $stmt->bindParam(":IssuedOn", $Issuedon);
    $stmt->bindParam(":RSince", $Rsince);
    $stmt->bindParam(":DoB", $Dob);
    $stmt->bindParam(":Citizenship", $Citizenship);
    $stmt->bindParam(":Height", $Height);
    $stmt->bindParam(":Weight", $Weight);
    $stmt->bindParam(":GSIS", $Gsis);
    $stmt->bindParam(":HDMF", $Hdmf);
    $stmt->bindParam(":Tin", $Tin);
    $stmt->bindParam(":Nbi", $Nbi);
    $stmt->bindParam(":RPhone", $Rphone);
    $stmt->bindParam(":MPhone", $Mphone);
    $stmt->bindParam(":BPhone", $Bphone);
    $stmt->bindParam(":Email", $Email);
    $stmt->bindParam(":MotherName", $Mothername);
    $stmt->bindParam(":MOccupation", $Moccupation);
    $stmt->bindParam(":FatherName", $Fathername);
    $stmt->bindParam(":FOccupation", $Foccupation);
    $stmt->bindParam(":SpouseName", $Spousename);
    $stmt->bindParam(":SOccupation", $Soccupation);
    $stmt->bindParam(":ChildrenName", $Childrenname);
    $stmt->bindParam(":BusinessName", $Businessname);
    $stmt->bindParam(":EmployerName", $Employername);
    $stmt->bindParam(":PositionCompany", $Positioncompany);
    $stmt->bindParam(":EmploymentDate", $Employmentdate);
    $stmt->bindParam(":NameMemorialpark", $Namememorialpark);
    $stmt->bindParam(":Since", $Since);
    $stmt->bindParam(":Location", $Location);

    // Execute the query
    $stmt->execute();

    // Data insertion successful
    echo "Data inserted successfully!";
} catch (PDOException $e) {
    http_response_code(500); // Internal Server Error
    echo "Error occurred while inserting data: " . $e->getMessage();
}

// Close the database connection
$conn = null;
?>


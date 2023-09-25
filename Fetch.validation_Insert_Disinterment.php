<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
// Replace these variables with your database credentials
$host = 'localhost';
$dbname = 'centenn1_sedge_accountingsoftware';
$username123 = 'centenn1_sedge';
$password0998 = '@Hanabi16';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username123, $password0998);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $contractCode = filter_var($_POST['contractCode'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $date = filter_var($_POST['date'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $disintermentNumber = filter_var($_POST['disintermentNumber'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $customerName = filter_var($_POST['customerName'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $PaSeriesNumber = filter_var($_POST['PaSeriesNumber'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $cooNumber = filter_var($_POST['cooNumber'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $nameofDisinterred = filter_var($_POST['nameofDisinterred'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $issNumber = filter_var($_POST['issNumber'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $classification = filter_var($_POST['classification'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $dateofDisinterment = filter_var($_POST['dateofDisinterment'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $status = filter_var($_POST['status'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $user = filter_var($_POST['user'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $dateofDisintermentTime = filter_var($_POST['dateofDisintermentTime'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $intermentSite = filter_var($_POST['intermentSite'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $disintermentPhase = filter_var($_POST['disintermentPhase'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $disintermentArea = filter_var($_POST['disintermentArea'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $disintermentSection = filter_var($_POST['disintermentSection'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $disintermentLotid = filter_var($_POST['disintermentLotid'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $disintermentTypeClass = filter_var($_POST['disintermentTypeClass'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $disintermentblock = filter_var($_POST['disintermentblock'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $disintermentLotNumber = filter_var($_POST['disintermentLotNumber'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $disintermentCryptPhase = filter_var($_POST['disintermentCryptPhase'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $disintermentCryptLevel = filter_var($_POST['disintermentCryptLevel'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $disintermentCryptArea = filter_var($_POST['disintermentCryptArea'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $disintermentCryptSection = filter_var($_POST['disintermentCryptSection'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $disintermentCryptColumn = filter_var($_POST['disintermentCryptColumn'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $disintermentCryptUnitNumber = filter_var($_POST['disintermentCryptUnitNumber'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $Disinterment_crypt_classification = filter_var($_POST['Disinterment_crypt_classification'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $Disinterment_crypt_Id = filter_var($_POST['Disinterment_crypt_Id'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $Reinterment_Date = filter_var($_POST['Reinterment_Date'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $Reinterment_time = filter_var($_POST['Reinterment_time'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $Reinterment_phase = filter_var($_POST['Reinterment_phase'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $Reinterment_area = filter_var($_POST['Reinterment_area'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $Reinterment_section= filter_var($_POST['Reinterment_section'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $Reinterment_LotId = filter_var($_POST['Reinterment_LotId'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $Reinterment_typeclass = filter_var($_POST['Reinterment_typeclass'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $Reinterment_block = filter_var($_POST['Reinterment_block'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $Reinterment_lotnumber = filter_var($_POST['Reinterment_lotnumber'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $Reinterment_crypt_phase = filter_var($_POST['Reinterment_crypt_phase'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $Reinterment_crypt_level = filter_var($_POST['Reinterment_crypt_level'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $Reinterment_crypt_area = filter_var($_POST['Reinterment_crypt_area'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);  
    $Reinterment_crypt_section = filter_var($_POST['Reinterment_crypt_section'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $Reinterment_crypt_column = filter_var($_POST['Reinterment_crypt_column'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $Reinterment_crypt_unitnumber = filter_var($_POST['Reinterment_crypt_unitnumber'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $Reinterment_crypt_classification = filter_var($_POST['Reinterment_crypt_classification'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $Reinterment_crypt_id = filter_var($_POST['Reinterment_crypt_id'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        function sanitizeIntermentFee($value) {
        // Remove '₱' and commas from the value
        $cleanedValue = str_replace(['₱', ','], '', $value);
        return $cleanedValue;
    }
    // $totalIntermentfee = filter_input(INPUT_POST, 'intermentPriviledge', FILTER_CALLBACK, ['options' => 'sanitizeIntermentFee']);
    // $addIntermentPriviledge = filter_input(INPUT_POST, 'intermentMarkup', FILTER_CALLBACK, ['options' => 'sanitizeIntermentFee']);
    // $lessIntermentPriviledge = filter_input(INPUT_POST, 'amountPaid', FILTER_CALLBACK, ['options' => 'sanitizeIntermentFee']);
    
    // Need to revise 
    $encoderName = filter_var($_POST['userAccount123'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $dateCreated = date('Y-m-d H:i:s');
    $status = 'PENDING';

    $insertQuery = "INSERT INTO tbl_disinterment (Contract_code, Date, Disinterment_number, Customer_name, PA_Series_Number, Coo_number, Name_of_disinterred, Iss_number,
                                                Classification, Date_of_disintermen`, date_created, status, user, Date_of_disinterment_time, Interment_site, Disinterment_phase, Disinterment_area,  Disinterment_section,
                                                Disinterment_LotId, Disinterment_typeClass, Disinterment_Block, Disinterment_lotNumber, Disinterment_crypt_phase, Disinterment_crypt_level, Disinterment_crypt_area, Disinterment_crypt_section,
                                                Disinterment_crypt_column, Disinterment_crypt_Unitnumber, Disinterment_crypt_classification, Disinterment_crypt_Id, Reinterment_Date, Reinterment_time, Reinterment_phase, Reinterment_area,
                                                Reinterment_section, Reinterment_LotId, Reinterment_typeclass, Reinterment_block, Reinterment_lotnumber, Reinterment_crypt_phase, Reinterment_crypt_level, Reinterment_crypt_area, Reinterment_crypt_section, Reinterment_crypt_column,
                                                Reinterment_crypt_unitnumber, Reinterment_crypt_classification, Reinterment_crypt_id) 
                                                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,
                                                        ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,
                                                        ?, ?, ?, ?, ?, ?, ?)";
    
    $stmt = $pdo->prepare($insertQuery);
    $paymentStatus = 'Paid';
    $stmt->execute([$contractCode , $date , $disintermentNumber , $customerName , $PaSeriesNumber , $cooNumber , $nameofDisinterred , $issNumber , $classification , $dateofDisinterment ,
     $dateCreated , $status , $user , $dateofDisintermentTime , $intermentSite , $disintermentPhase , $disintermentArea , $disintermentSection , $disintermentLotid , $disintermentTypeClass ,
      $disintermentblock , $disintermentLotNumber , $disintermentCryptPhase , $disintermentCryptLevel , $disintermentCryptArea , $disintermentCryptSection , $disintermentCryptColumn , $disintermentCryptUnitNumber , $Disinterment_crypt_classification , $Disinterment_crypt_Id ,
       $Reinterment_Date , $Reinterment_time , $Reinterment_phase , $Reinterment_area , $Reinterment_section , $Reinterment_LotId , $Reinterment_typeclass , $Reinterment_block , $Reinterment_lotnumber , $Reinterment_crypt_phase ,
        $Reinterment_crypt_level , $Reinterment_crypt_area , $Reinterment_crypt_section , $Reinterment_crypt_column , $Reinterment_crypt_unitnumber , $Reinterment_crypt_classification , $Reinterment_crypt_id  ]);

    echo "Data inserted successfully!";
   
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>

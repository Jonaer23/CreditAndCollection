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

    $accountNumber1 = filter_var($_POST['costumerCode'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $name = filter_var($_POST['costumername'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $transactionNumber = filter_var($_POST['transactionNumber'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    // Sanitize input data
    $bankNamedisplay = filter_var($_POST['bankNamedisplay'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $accountHolderdisplay = filter_var($_POST['accountHolderdisplay'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $accountNumberdisplay = filter_var($_POST['accountNumberdisplay'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $bankName = filter_var($_POST['bankName'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $referenceNumber = filter_var($_POST['referenceNumber'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $accountNumber = filter_var($_POST['accountNumber'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $amount = str_replace(['₱', ','], '', filter_input(INPUT_POST, 'amount', FILTER_SANITIZE_STRING));


    // Secure file upload handling
    if (isset($_FILES['attachment']) && $_FILES['attachment']['error'] === UPLOAD_ERR_OK) {
        $fileName = basename($_FILES['attachment']['name']);
        $targetPath = "img/" . $fileName;
        $fileExtension = strtolower(pathinfo($targetPath, PATHINFO_EXTENSION));

        $allowedExtensions = array("jpg", "jpeg", "png");
        $maxFileSize = 5 * 1024 * 1024; // 5MB

        if (!in_array($fileExtension, $allowedExtensions)) {
            throw new Exception("Invalid file extension. Only JPG, JPEG, and PNG files are allowed.");
        }

        if ($_FILES['attachment']['size'] > $maxFileSize) {
            throw new Exception("File size exceeds the maximum limit of 5MB.");
        }

        if (!move_uploaded_file($_FILES['attachment']['tmp_name'], $targetPath)) {
            throw new Exception("Error uploading the file.");
        }

      $dateCreated = date('Y-m-d H:i:s');

        $insertQuery = "INSERT INTO tbl_proofofpayment (transactionNumber, bankName, accountHolderName, accountNumber, paymentDetails_bankName, referenceNumber, paymentDetails_accountNumber, amount, proofOfPayment, paymentStatus, userAccount, customerName, dateCreated) 
                        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        
        $stmt = $pdo->prepare($insertQuery);
        $paymentStatus = 'Paid';
        $stmt->execute([$transactionNumber, $bankName , $accountHolderdisplay, $accountNumber, $bankNamedisplay, $referenceNumber,  $accountNumberdisplay , $amount, $targetPath, $paymentStatus, $accountNumber1, $name, $dateCreated]);

        echo "Data inserted successfully!";
    } else {
        throw new Exception("No valid file was uploaded.");
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>

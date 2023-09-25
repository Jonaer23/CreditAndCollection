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
    $noDaysOfPenalties = filter_var($_POST['noMonthspenalty'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $frequencyNumber = filter_var($_POST['frequencyrequest'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $nameOfInterviewee = filter_var($_POST['IntervieweeName'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $paymentDuedate = filter_var($_POST['paymentDuedate'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
   
    
        function sanitizeIntermentFee($value) {
        // Remove '₱' and commas from the value
        $cleanedValue = str_replace(['₱', ','], '', $value);
        return $cleanedValue;
    }
    $penaltyamount = filter_input(INPUT_POST, 'penaltyamount', FILTER_CALLBACK, ['options' => 'sanitizeIntermentFee']);
    $reinstatementFee = filter_input(INPUT_POST, 'reinstatementfee', FILTER_CALLBACK, ['options' => 'sanitizeIntermentFee']);
    $amountPaid = filter_input(INPUT_POST, 'amountPaid1', FILTER_CALLBACK, ['options' => 'sanitizeIntermentFee']);
    
    // Need to revise 
    $accountNumber = filter_var($_POST['customerCode'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $clientName = filter_var($_POST['clientName'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $encoderName = filter_var($_POST['userAccount123'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $dateCreated = date('Y-m-d H:i:s');
    $status = 'PENDING';

    $timestamp = round(microtime(true) * 1000);
    
    // Generate a unique identifier using the timestamp
    $IIS = "SSDC-RI-" . substr(strval($timestamp), -8);
    

    $insertQuery = "INSERT INTO tbl_reinstatement (noDaysOfPenalties, frequencyNumber,penaltyAmount, amountPaid, reinstatementFee, paymentDuedate, nameOfInterviewee, clientName, encoderName, accountNumber, dateCreated, status, reinstatement_Code) 
                                                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($insertQuery);
    $stmt->execute([$noDaysOfPenalties, $frequencyNumber, $penaltyamount, $amountPaid, $reinstatementFee, $paymentDuedate, $nameOfInterviewee, $clientName, $encoderName, $accountNumber, $dateCreated, $status, $IIS]);
    // If no errors occurred, commit the transaction for deceased records
    $pdo->commit();
    
    echo "Data inserted successfully!";
   
    } catch (PDOException $e) {
        // Handle the exception
        $pdo->rollBack(); // Roll back the transaction for interment record on exception
      
        die(); // Terminate the script
    } catch (Exception $ex) {
        // Handle other exceptions
        $pdo->rollBack(); // Roll back the transaction for other exceptions
        echo "Exception: " . $ex->getMessage() . "<br>";
        die(); // Terminate the script
    }
    ?>

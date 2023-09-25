<?php
session_start();
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Your database connection details
$host = 'localhost';
$db_username = 'sedge'; // Use a different variable name for the database username
$password = '@Hanabi16';
$dbname = 'sedge_accountingsoftware';

// Create a connection to the database using PDO (instead of mysqli)
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $db_username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

// Fetch data from the tbl_flatinterest table using prepared statement
$sql = "SELECT `id`, `userAccount`, `monthlyInstallment`, `paymentDueDate`, `status`, `penalty` FROM `tbl_flatinterest`";
$result = $conn->query($sql);

if ($result) {
    if ($result->rowCount() > 0) {
        // Output data for each row
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $id = $row['id'];
            $userAccount = $row['userAccount'];
            $monthlyInstallment = $row['monthlyInstallment'];
            $penaltyRate = 0.03; // 3% penalty rate
            $now = new DateTime();
            $paymentDueDate = new DateTime($row['paymentDueDate']);
            
            // Calculate the number of days delayed, excluding the 7-day extension
            $daysDelayed = $now->diff($paymentDueDate)->days;

            // Check if payment is overdue (one day after the payment due date has passed)
            if ($daysDelayed > 1 && $row['status'] === 'Unpaid') {
                // Update the status to "Overdue" in the database using prepared statement
                $updateStatusSql = "UPDATE `tbl_flatinterest` SET `status` = 'Overdue' WHERE `id` = :id";
                $stmt = $conn->prepare($updateStatusSql);
                $stmt->bindParam(':id', $id, PDO::PARAM_INT);
                $stmt->execute();
                echo "Status updated to Overdue for ID: $id <br>";
            }

            if ($daysDelayed > 60 && $row['status'] === 'Overdue') {
                // Insert into tbl_cancelaccount using prepared statement
                $insertCancelAccount = "INSERT INTO `tbl_cancelaccount` (`accountNumber`) VALUES (:accountNumber)";
                $stmt = $conn->prepare($insertCancelAccount);
                $stmt->bindParam(':accountNumber', $userAccount, PDO::PARAM_STR);
                $stmt->execute();

                // Update the status to "Cancelled" in the database using prepared statement
                $updateStatusSql = "UPDATE `tbl_flatinterest` SET `status` = 'Cancelled' WHERE `id` = :id";
                $stmt = $conn->prepare($updateStatusSql);
                $stmt->bindParam(':id', $id, PDO::PARAM_INT);
                $stmt->execute();

                 // Check and update the status in the related tables (tbl_lotdescription and tbl_cryptdescription)
                 $ledgerQuery = "SELECT `id`, `customerCode`, `lotID`, `crypt_id1` FROM `tbl_ledger` WHERE `customerCode` = :userAccount";
                 $stmt = $conn->prepare($ledgerQuery);
                 $stmt->bindParam(':userAccount', $userAccount, PDO::PARAM_STR);
                 $stmt->execute();
 
                while ($ledgerRow = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    $lotID = $ledgerRow['lotID'];
                    $crypt_id1 = $ledgerRow['crypt_id1'];
                    if ($lotID != null && $lotID != 0) {
                    // Update the status to "Cancelled" in the database using prepared statement
                    $updateStatusInventoryLot = "UPDATE `tbl_lotdescription` SET `status` = 'Available' WHERE `id` = :id";
                    $stmt = $conn->prepare($updateStatusInventoryLot);
                    $stmt->bindParam(':id', $lotID, PDO::PARAM_INT);
                    $stmt->execute();
                    echo "Lot Account cancellation request has been submitted successfully.";
                    } elseif ($crypt_id1 != null && $crypt_id1 != 0) {
                    // Update the status to "Cancelled" in the database using prepared statement
                    $updateStatusInventoryCrypt = "UPDATE `tbl_cryptdescription` SET `status` = 'Available' WHERE `id` = :id";
                    $stmt = $conn->prepare($updateStatusInventoryCrypt);
                    $stmt->bindParam(':id', $crypt_id1, PDO::PARAM_INT);
                    $stmt->execute();
                    echo "Crypt Account cancellation request has been submitted successfully.";
                    }
                }
                echo "Account cancellation request has been submitted successfully.";
            } elseif ($daysDelayed > 7 && $row['status'] === 'Overdue') {
                // Calculate the penalty if payment is overdue after 7 days from the payment due date
                $penalty = ($monthlyInstallment * $penaltyRate * ($daysDelayed - 7)) / 30;
                $penalty = intval($penalty);

                // Update the penalty in the database using prepared statement
                $updatePenaltySql = "UPDATE `tbl_flatinterest` SET `penalty` = :penalty WHERE `id` = :id";
                $stmt = $conn->prepare($updatePenaltySql);
                $stmt->bindParam(':penalty', $penalty, PDO::PARAM_INT);
                $stmt->bindParam(':id', $id, PDO::PARAM_INT);
                $stmt->execute();

                echo "Penalty updated for ID: $id <br>";

                // Update the monthlyInstallment in the database by adding the penalty
                $updatedMonthlyInstallment = $monthlyInstallment + $penalty;
                $updatedMonthlyInstallment = intval($updatedMonthlyInstallment);

                // Update the monthlyInstallment in the database using prepared statement
                $updateMonthlyInstallmentSql = "UPDATE `tbl_flatinterest` SET `monthlyInstallment` = :monthlyInstallment WHERE `id` = :id";
                $stmt = $conn->prepare($updateMonthlyInstallmentSql);
                $stmt->bindParam(':monthlyInstallment', $updatedMonthlyInstallment, PDO::PARAM_INT);
                $stmt->bindParam(':id', $id, PDO::PARAM_INT);
                $stmt->execute();

                echo "Monthly Installment updated to $updatedMonthlyInstallment for ID: $id <br>";
            }
        }
    } else {
        echo "No records found with the 'Unpaid' status.";
    }
    $result->closeCursor();
} else {
    // Handle query errors if necessary
    // For example, you can log the error or return an error response to the client
    echo "Query error: " . $conn->errorInfo()[2];
}

// Close the database connection
$conn = null;
?>

<?php
session_start();
require 'connection.php';

function redirectTo($location) {
    header("Location: $location");
    exit;
}

if (isset($_POST['submit']) && !empty($_POST['username']) && !empty($_POST['password'])) {

    $Username = $_POST['username'];
    $Password = $_POST['password'];

    // Validate and sanitize user input (optional but recommended)
    $Username = mysqli_real_escape_string($connection, $Username);
    // For the password, you might consider stricter validation or use a password validation library

    $query = "SELECT * FROM tbl_authorization WHERE Username = ? AND (AS_Status = 'SedgeActivated' OR AS_Status = 'Activated') ";
    $stmt = mysqli_prepare($connection, $query);

    if ($stmt === false) {
        // Error handling for failed query preparation
        die("Error preparing query: " . mysqli_error($connection));
    }

    mysqli_stmt_bind_param($stmt, "s", $Username);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($result === false) {
        // Error handling for failed query execution
        die("Error executing query: " . mysqli_error($connection));
    }

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $storedPasswordHash = $row['password_hash'];
        $salt = $row['password_salt']; // Retrieve the salt from the database
    
        // Combine the provided password with the salt
        $saltedPassword = $Password . $salt;
    
        // Verify the password using password_verify() with the salted password and stored hashed password
        if (password_verify($saltedPassword, $storedPasswordHash)) {
            // Clear the storedPasswordHash and salt variables from memory to minimize exposure
            unset($storedPasswordHash, $salt);

            // Set session variables (use validated and sanitized data)
            $_SESSION['Username'] =  $row['Username'];
            $_SESSION['Fullname'] = $row['Fullname'];
            $_SESSION['Access'] = $row['Access'];
            $_SESSION['AS_Status'] = $row['AS_Status'];
            $_SESSION['Department'] = $row['Department'];
            $_SESSION['Position'] = $row['Position'];
            $_SESSION['Employee_Id'] = $row['Employee_Id'];
            $_SESSION['authenticated'] = true;
            // Perform additional criteria checks before redirecting
            if ($_SESSION['Access'] == "Admin" && $_SESSION['Department'] == "SedgeAdmin" && $_SESSION['Position'] == "Programmer" && $_SESSION['AS_Status'] == "SedgeActivated") {
                redirectTo("FORM.Validation_HR_EmployeeInformation.php");
            } elseif ($_SESSION['Access'] == "Admin" && $_SESSION['Position'] == "Programmer" && $_SESSION['Department'] == "SedgeMIS" && $_SESSION['AS_Status'] == "SedgeActivated") {
                redirectTo("AdminUser.php");
            } elseif ($_SESSION['Access'] == "Admin" && $_SESSION['Position'] == "Programmer" && $_SESSION['Department'] == "SedgeMarketing" && $_SESSION['AS_Status'] == "SedgeActivated") {
                redirectTo("SalesDashboard.php");
            } elseif ($_SESSION['Access'] == "Admin" && $_SESSION['Position'] == "Programmer" && $_SESSION['Department'] == "SedgeCCD" && $_SESSION['AS_Status'] == "SedgeActivated") {
                redirectTo("CCD_paymentVerification.php");
            } elseif ($_SESSION['Access'] == "Admin" && $_SESSION['Position'] == "Programmer" && $_SESSION['Department'] == "SedgeInventory" && $_SESSION['AS_Status'] == "SedgeActivated") {
                redirectTo("CCD_Setting.php");
            } elseif ($_SESSION['Access'] == "Admin" && $_SESSION['Position'] == "Programmer" && $_SESSION['Department'] == "SedgePurchasing" && $_SESSION['AS_Status'] == "SedgeActivated") {
                redirectTo("FORM.Validation_PurchasingRequest.php");
            } elseif ($_SESSION['Access'] == "Admin" && $_SESSION['Position'] == "Programmer" && $_SESSION['Department'] == "SedgeManualCCD" && $_SESSION['AS_Status'] == "SedgeActivated") {
                redirectTo("FORM.Validation_ManualCCDLedger.php");
            } elseif ($_SESSION['Access'] == "Admin" && $_SESSION['Position'] == "Receptionist" && $_SESSION['Department'] == "Salesmarketing" && $_SESSION['AS_Status'] == "Activated") {
                redirectTo("BuyerInfo.php");
            } else {
                redirectTo("index.php?error=1"); // Invalid access or position
            }
        } else {
            redirectTo("index.php?error=2"); // Incorrect Username and Password
        }
    } else {
        // Clear the storedPasswordHash and salt variables from memory to minimize exposure
        unset($storedPasswordHash, $salt);
        redirectTo("index.php?error=3"); // Incorrect Username and Password
    }
} else {
    redirectTo("index.php?error=4"); // Please enter both Username and Password
}
?>

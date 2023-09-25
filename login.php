<?php

session_start();
require 'connection.php';

if (isset($_POST['submit']) && !empty($_POST['Username']) && !empty($_POST['Password'])) {

    $Username = $_POST['Username'];
    $Password = $_POST['Password'];

    // Using prepared statements to prevent SQL injection
    $query = "SELECT * FROM tbl_authorization WHERE Username = ? AND AS_Password = ? AND AS_Status = 'Activated'";
    $stmt = mysqli_prepare($connection, $query);
    mysqli_stmt_bind_param($stmt, "ss", $Username, $Password);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {

            // Set session variables after proper validation
            $Username = htmlspecialchars($row['Username']);
            $Fullname = htmlspecialchars($row['Fullname']);
            $Access = htmlspecialchars($row['Access']);
            $Status = htmlspecialchars($row['AS_Status']);
            $Department = htmlspecialchars($row['Department']);
            $Position = htmlspecialchars($row['Position']);
            $Employee_ID = htmlspecialchars($row['Employee_Id']);

            // You may also hash the password before storing it in the session
            $_SESSION['Username'] = $Username;
            $_SESSION['Fullname'] = $Fullname;
            $_SESSION['Access'] = $Access;
            $_SESSION['AS_Status'] = $Status;
            $_SESSION['Department'] = $Department;
            $_SESSION['Position'] = $Position;
            $_SESSION['Employee_Id'] = $Employee_ID;

            if ($Access == "Admin" && $Department == "Admin" && $Position == "Admin" && $Status == "Activated") {
                header("Location: hris.php");
                exit;
            } elseif ($Access == "Admin" && $Position == "MIS" && $Department == "MIS" && $Status == "Activated") {
                header("Location: AdminUser.php");
                exit;
            } elseif ($Access == "Admin" && $Position == "SalesCoordinator" && $Department == "Marketing" && $Status == "Activated") {
                header("Location: SalesDashboard.php");
                exit;
            } elseif ($Access == "Admin" && $Position == "CCCoordinator" && $Department == "Finance" && $Status == "Activated") {
                header("Location: CCD_paymentVerification.php");
                exit;
            } else {
                echo ("<script LANGUAGE='JavaScript'>
                        window.alert('Incorrect Username and Password.');
                        window.location.href='FORM.Authorization_ClientLoginPage.php';
                      </script>");
                exit;
            }
        }
    } else {
        echo ("<script LANGUAGE='JavaScript'>
                window.alert('Incorrect Username and Password.');
                window.location.href='FORM.Authorization_ClientLoginPage.php';
              </script>");
        exit;
    }
} else {
    echo ("<script LANGUAGE='JavaScript'>
            window.alert('Please provide both Username and Password.');
            window.location.href='FORM.Authorization_ClientLoginPage.php';
          </script>");
    exit;
}


<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
// process_form.php

// Connect to the database (Replace these values with your actual database credentials)
$db_host = 'localhost';
$db_user = 'centenn1_sedge';
$db_pass = '@Hanabi16';
$db_name = 'centenn1_sedge_accountingsoftware';

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to generate a secure random password
function generateRandomPassword($length = 10) {
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_=+[{]}|;:,.<>?';
    $password = '';
    $char_count = strlen($characters);

    for ($i = 0; $i < $length; $i++) {
        $password .= $characters[random_int(0, $char_count - 1)];
    }

    return $password;
}

// Process form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Generate random password
    $password = generateRandomPassword();

    // Hash the password securely
    $password_salt = bin2hex(random_bytes(16));
    $password_hash = password_hash($password . $password_salt, PASSWORD_ARGON2ID);

    // Set user details manually (Replace these with your desired values)
    $username = 'SouthSpringBIS';
    $email = 'jcasundo.sedge@gmail.com';
    $department = 'Salesmarketing';
    $position = 'Receptionist';

    // Insert account into the database using prepared statement
    $stmt = $conn->prepare("INSERT INTO tbl_authorization (Username, Email, Department, Position, AS_Status, Access, password_hash, password_salt) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

    if ($stmt) {
        $status = 'Activated'; // Set the status here (you can adjust it based on your requirements)
        $access = 'Admin'; // Set the access level here (you can adjust it based on your requirements)

        $stmt->bind_param("ssssssss", $username, $email, $department, $position, $status, $access, $password_hash, $password_salt);
        if ($stmt->execute()) {
            // Account created successfully, send email
            $to = $email;
            $subject = 'Account Information';
            $message = "Username: $username\nPassword: $password";
            $headers = "From: southspringuserAccount@centennialgarden.ph";

            if (mail($to, $subject, $message, $headers)) {
                echo "Account created successfully. An email with login information has been sent to $email.";
            } else {
                echo "Account created, but failed to send email. Please check your email configuration.";
            }
        } else {
            echo "Error creating account. Please try again later?";
             echo "Error preparing statement: " . mysqli_error($conn);
        }
        $stmt->close();
    } else {
        echo "Error creating account. Please try again later!";
    }

    $conn->close();
}
?>

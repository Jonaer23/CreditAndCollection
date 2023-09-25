<?php
// Connect to your database (replace with your own database credentials)
$servername = "localhost";
$dbUsername = "sedge";
$dbPassword = "@Hanabi16";
$dbName = "sedge_accountingsoftware";

$conn = new mysqli($servername, $dbUsername, $dbPassword, $dbName);

// Check for a database connection error
if ($conn->connect_error) {
    die("Database connection error: " . $conn->connect_error);
}

// Query the database to retrieve the user record
$sql = "SELECT `password_hash`, `password_salt` FROM `tbl_clientaccount` WHERE `username` = 'SSCD-CC-1685605231'";
$result = $conn->query($sql);

if ($result->num_rows === 1) {
    $row = $result->fetch_assoc();
    $hashedPassword = $row['password_hash'];
    $passwordSalt = $row['password_salt'];

    // Generate a temporary plain-text password for debugging
    $tempPassword = "your_temp_password";

    // Hash the temporary password with the stored salt
    $hashedTempPassword = hash('sha256', $passwordSalt . $tempPassword);

    // Display the temporary plain-text password and the corresponding hashed value
    echo "Temporary Password: " . $tempPassword . "<br>";
    echo "Hashed Temporary Password: " . $hashedTempPassword . "<br>";
} else {
    echo "User not found.";
}

// Close the database connection
$conn->close();
?>
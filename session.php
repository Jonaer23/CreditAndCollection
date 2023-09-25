<?php
// Start the session (if not already started)
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require 'connection.php';

// Check if the 'username' key exists in the session
if (!isset($_SESSION['Username'])) {
    header("Location: index.php"); // Redirect to the login page if the user is not logged in
    exit();
}

$user_check = $_SESSION['Username'];

// Prepare and execute the database query
$stmt = $connection->prepare("SELECT Username, Fullname, Email, Department, Position FROM tbl_authorization WHERE Username = ?");
if (!$stmt) {
    error_log("Prepare statement error: " . $connection->error);
    echo "Oops! Something went wrong on our end. Please try again later.";
    exit();
}

$stmt->bind_param("s", $user_check);
if (!$stmt->execute()) {
    error_log("Execute statement error: " . $stmt->error);
    echo "Oops! Something went wrong on our end. Please try again later.";
    $stmt->close();
    exit();
}

$result = $stmt->get_result();

// Check if the user exists in the database
if ($result->num_rows === 0) {
    header("Location: 404.php"); // Redirect to a 404 page if the user is not found
    exit();
}

// Fetch user information
$row = $result->fetch_assoc();
$username = $row['Username'];
$name = $row['Fullname'];
$email = $row['Email'];
$department = $row['Department'];
$position = $row['Position'];
$stmt->close();
$connection->close();
?>

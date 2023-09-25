<?php
include('connection.php');

$user_check = $_SESSION['username'];

$stmt = $connection->prepare("SELECT username, name, email FROM tbl_clientaccount WHERE username = ?");
$stmt->bind_param("s", $user_check);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
   header("Location: 404.php");
    exit;
}

$row = $result->fetch_assoc();
$username = $row['username'];
$name = $row['name'];
$email = $row['email'];

$stmt->close();
?> 
    
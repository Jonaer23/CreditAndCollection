<?php
session_start();
ini_set('display_errors', 1);
error_reporting(E_ALL);
include 'client_session.php';

// Access the stored session variables
$username = $_SESSION['username'];
// Replace the following credentials with your database details
$host = 'localhost';
$username1 = 'centenn1_sedge';
$password = '@Hanabi16';
$dbname = 'centenn1_sedge_accountingsoftware';

try {

  $conn = new PDO("mysql:host=$host;dbname=$dbname", $username1, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $stmt = $conn->prepare("SELECT id, paymentDueDate, monthlyInstallment, interest, principal, balance, status FROM tbl_flatinterest WHERE userAccount = :username");
  $stmt->bindParam(':username', $username);
  $stmt->execute();

  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
  echo json_encode($result);
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}

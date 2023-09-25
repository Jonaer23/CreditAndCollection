<?php
session_start();
ini_set('display_errors', 1);
error_reporting(E_ALL);
include 'session.php';

// Access the stored session variables
$username = $_SESSION['Username'];
// Replace the following credentials with your database details
$host = 'localhost';
$username1 = 'centenn1_sedge';
$password = '@Hanabi16';
$dbname = 'centenn1_sedge_accountingsoftware';

try {

  $conn = new PDO("mysql:host=$host;dbname=$dbname", $username1, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $stmt = $conn->prepare("SELECT id, TrackingNumber	, Request_Number, PO_Number, RequestedBy, Position, Department, ItemDescription, TypeofRequest, Category, Vendor_Name, OR_Number, Department_Budget, DateIssue, Date_Received, status FROM  tbl_purchase WHERE userAccount = :username");
  $stmt->bindParam(':username', $username);
  $stmt->execute();

  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
  echo json_encode($result);
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}

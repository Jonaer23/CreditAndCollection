
<?php
// Assuming you have a MySQL database
$servername = 'localhost';
$username = 'centenn1_sedge';
$password = '@Hanabi16';
$dbname = 'centenn1_sedge_accountingsoftware';

// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check for connection errors
if ($conn->connect_error) {
  die('Connection failed: ' . $conn->connect_error);
}

$voucherCode = $_POST['voucher'];
$promoterms = $_POST['promo'];
$discount = 0; // Default discount value

// Query the database to retrieve the discount value for the voucher code
$sql = "SELECT discount FROM tbl_promovoucher WHERE promoCode = '$voucherCode' AND promo = '$promoterms'";
$result = $conn->query($sql);

// Check if the voucher code exists in the database
if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();
  $discount = $row['discount'];
  echo $discount;
} else {
  echo 0;
}

// Close the database connection
$conn->close();
?>
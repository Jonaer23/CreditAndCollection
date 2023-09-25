<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);


$connection = new mysqli("localhost","centenn1_sedge","@Hanabi16","centenn1_sedge_accountingsoftware");
$connection->set_charset('utf8mb4');
if ($connection -> connect_errno) {
  echo "Failed to connect to MySQL: " . $connection -> connect_error;
  exit();
}
?>




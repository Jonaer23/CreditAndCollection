<?php
// Enable error reporting and strict mode for mysqli
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

// Define database credentials
$db_host = "localhost";
$db_user = "centenn1_sedge";
$db_password = "@Hanabi16";
$db_name = "centenn1_sedge_accountingsoftware";

try {
  // Establish a secure database connection using prepared statements
  $connection = new mysqli($db_host, $db_user, $db_password, $db_name);
  $connection->set_charset('utf8mb4');

  // Check for connection errors
  if ($connection->connect_errno) {
    // Log the error instead of displaying it directly to the user
    error_log("Failed to connect to MySQL: " . $connection->connect_error);
    // Display a generic error message to the user
    echo "Oops! Something went wrong on our end. Please try again later.";
    exit();
  }
} catch (Exception $e) {
  // Log the exception instead of displaying it directly to the user
  error_log("Exception occurred: " . $e->getMessage());
  // Display a generic error message to the user
  echo "Oops! Something went wrong on our end. Please try again later.";
  exit();
}
?>

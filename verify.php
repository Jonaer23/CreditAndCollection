<?php
// verify.php

// Assuming you have a database connection established
// ...

// Retrieve the token from the URL parameter
$token = $_GET['token'];

// Find the user account with the matching token
$query = "SELECT * FROM users WHERE verification_token = '$token'";
$result = mysqli_query($conn, $query);
$user = mysqli_fetch_assoc($result);

if ($user) {
  // Update the user's account to mark it as verified
  $userId = $user['id'];
  $updateQuery = "UPDATE users SET verified = 1 WHERE id = $userId";
  mysqli_query($conn, $updateQuery);

  // Log in the user automatically or display a success message
  // ...
} else {
  // Invalid or expired token, display an error message
  // ...
}
?>
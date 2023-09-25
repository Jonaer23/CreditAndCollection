<?php
// secure_logout.php

// Initialize the session
session_start();

// Unset all session variables
$_SESSION = array();

// Destroy the session data on the server-side
session_destroy();

// Ensure that the session cookie is deleted from the client-side
setcookie(session_name(), '', time() - 3600, '/');

// Clear session data from the PHP runtime
session_unset();
session_write_close();

// Redirect to the index page (you can modify the URL accordingly)
$url = "index.php";
header("Location: $url");
exit();
?>

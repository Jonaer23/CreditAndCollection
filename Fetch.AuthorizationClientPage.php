<?php
session_start();
// Retrieve the username and password from the AJAX request
$username = $_POST['username'];
$password = $_POST['password'];

// Validate and sanitize user inputs
$username = filter_var($username, FILTER_SANITIZE_STRING);

// Connect to your database (replace with your own database credentials)
$servername = "localhost";
$dbUsername = "centenn1_sedge";
$dbPassword = "@Hanabi16";
$dbName = "centenn1_sedge_accountingsoftware";

$conn = new mysqli($servername, $dbUsername, $dbPassword, $dbName);

// Check for a database connection error
if ($conn->connect_error) {
    // Return an error response
    $response = [
        'success' => false,
        'message' => 'Database connection error.'
    ];
    die(json_encode($response));
}

// Prepare the SQL statement using a prepared statement to prevent SQL injection
$stmt = $conn->prepare("SELECT * FROM tbl_clientaccount WHERE username = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

// Check if the username exists in the database
if ($result->num_rows === 1) {
    $row = $result->fetch_assoc();
    $hashedPassword = $row['password_hash'];
    $passwordSalt = $row['password_salt'];
    // Set values in the $_SESSION array
    // Verify the password using password_verify() and the stored salt
    if (password_verify($password . $passwordSalt, $hashedPassword)) {
        // Authentication successful
        // Retrieve the department and position from the database

        $username = $row['username'];
        $name = $row['name'];
        $email = $row['email'];
        $_SESSION['username'] = $username;
        $_SESSION['name'] =  $name;
        $_SESSION['email'] = $email;
        // Construct the response
        $response = [
            'success' => true,
        ];
    } else {
        // Invalid password
        $response = [
            'success' => false,
            'message' => 'Invalid username or password.'
        ];
    }
} else {
    // Username does not exist
    $response = [
        'success' => false,
        'message' => 'Invalid username or password.'
    ];
}

// Close the database connection
$stmt->close();
$conn->close();

// Send the JSON response back to the AJAX request
echo json_encode($response);
?>

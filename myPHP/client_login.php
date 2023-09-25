<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the submitted username and password
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate the submitted data
    if (!empty($username) && !empty($password)) {
        // Connect to the database (replace with your database credentials)
        $host = 'localhost';
        $dbUsername = 'sedge';
        $dbPassword = '@Hanabi16';
        $dbName = 'sedge_accountingsoftware';

        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

        if ($conn->connect_error) {
            die('Connection failed: ' . $conn->connect_error);
        }

        // Prepare the SQL statement to retrieve the user's password hash and salt
        $sql = 'SELECT password_hash, password_salt FROM tbl_clientaccount WHERE username = ? LIMIT 1';
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('s', $username);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows === 1) {
            // Bind the result variables
            $stmt->bind_result($passwordHash, $passwordSalt);
            $stmt->fetch();

            // Verify the password
            $submittedPasswordHash = hash('sha256', $password . $passwordSalt);

            if ($passwordHash === $submittedPasswordHash) {
                // Successful login
                $_SESSION['username'] = $username;
                $response = ['success' => true];
            } else {
                // Invalid credentials
                $response = ['success' => false, 'message' => 'Invalid username or password.'];
            }
        } else {
            // Invalid credentials
            $response = ['success' => false, 'message' => 'Invalid username or password.'];
        }

        $stmt->close();
        $conn->close();
    } else {
        // Missing username or password
        $response = ['success' => false, 'message' => 'Please enter a username and password.'];
    }
} else {
    // Invalid request method
    $response = ['success' => false, 'message' => 'Invalid request.'];
}

header('Content-Type: application/json');
echo json_encode($response);
?>

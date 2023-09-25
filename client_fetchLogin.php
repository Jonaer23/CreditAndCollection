<?php

session_start();
require 'connection.php';

if (isset($_POST['submit']) && !empty($_POST['username']) && !empty($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM tbl_clientaccount WHERE username = '".$username."' AND status = 'client'";
    $result = mysqli_query($connection, $query);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $storedPasswordHash = $row['password_hash'];
        $storedPasswordSalt = $row['password_salt'];

        if (password_verify($password . $storedPasswordSalt, $storedPasswordHash)) {
            $_SESSION['username'] = $row['username'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['status'] = $row['status'];
            $_SESSION['Access'] = $row['Access'];
            $_SESSION['is_verified'] = $row['is_verified'];
            $_SESSION['created_at'] = $row['created_at'];
            $_SESSION['updated_at'] = $row['updated_at'];

            // Redirect the user based on their access and status
            if ($_SESSION['Access'] == "Activated" && $_SESSION['status'] == "client") {
                header("location: client_dashboard.php");
                exit();
            } else {
                echo ("<script LANGUAGE='JavaScript'>
                window.alert('Incorrect username or password.');
                window.location.href='client_login.php';
                </script>");
                exit();
            }
        }
    }

    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Incorrect username or password.');
    window.location.href='client_login.php';
    </script>");
    exit();
} else {
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Incorrect username or password.');
    window.location.href='client_login.php';
    </script>");
    exit();
}
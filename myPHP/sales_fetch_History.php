<?php
    // Database connection
    $servername = "localhost";
    $username = "sedge";
    $password = "@Hanabi16";
    $dbname = "sedge_accountingsoftware";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Fetching data from the database
    $sql = "SELECT * FROM tbl_ledger LEFT JOIN buyersinformationsheet ON tbl_ledger.customerCode =  buyersinformationsheet.customerCode WHERE tbl_ledger.status='Active' OR tbl_ledger.status='Pending';";
    $result = mysqli_query($conn, $sql);

    $data = array();
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
    }

    mysqli_close($conn);

    // Sending the response as JSON
    header('ViewRecordBuyer.php');
    echo json_encode($data);
?>

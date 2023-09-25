<?php
// Fetch the record data based on the provided ID (replace this with your actual implementation)
include 'connection.php';
$id = $_POST['id'];
$record_query = "SELECT * FROM buyersinformationsheet WHERE `id1` = $id";
$record_result = mysqli_query($connection, $record_query);
$record = mysqli_fetch_assoc($record_result);

// Send the record data as a JSON response
header('Content-Type: application/json');
echo json_encode($record);
?>

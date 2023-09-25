<?php
// Assuming you have a database connection established
$conn = new PDO('mysql:host=localhost;dbname=centenn1_sedge_accountingsoftware', 'centenn1_sedge', '@Hanabi16');

// Check if the request is a POST request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Retrieve the item ID from the POST data
  $itemId = $_POST['id'];
  $lotID = $_POST['lotID'];

          // Update the buyersinformationsheet table
  $updateStmt = $conn->prepare("UPDATE tbl_ledger SET status=:status WHERE customerCode=:id");
  $updateStmt->bindValue(':status', 'Declined');
  $updateStmt->bindParam(':id', $itemId);
  $updateStmt->execute();
  
            // Update the buyersinformationsheet table
  $updateStmt1 = $conn->prepare("UPDATE tbl_lotdescription SET status=:status WHERE block=:id");
  $updateStmt1->bindValue(':status', 'AVAILABLE');
  $updateStmt1->bindParam(':id', $lotID);
  $updateStmt1->execute();
  // Execute the update statement
  if ($updateStmt->execute()) {
    // Update successful
    $response = [
      'success' => true,
      'message' => 'Item updated successfully.'
    ];
  } else {
    // Failed to update the item
    $response = [
      'success' => false,
      'message' => 'Failed to update the item.'
    ];
  }

  // Send the JSON response back to the client
  header('Content-Type: application/json');
  echo json_encode($response);
  exit;
}

// If the request is not a POST request, return an error response
$response = [
  'success' => false,
  'message' => 'Invalid request method.'
];

header('Content-Type: application/json');
echo json_encode($response);
exit;
?>

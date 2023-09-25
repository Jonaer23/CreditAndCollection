<?php
// Assuming you have a database connection established
$conn = new PDO('mysql:host=localhost;dbname=centenn1_sedge_accountingsoftware', 'centenn1_sedge', '@Hanabi16');

// Check if the request is a POST request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Retrieve the item ID from the POST data
  $itemId = $_POST['id'];

  // Prepare the delete statement using a parameterized query
  $deleteQuery = "DELETE FROM buyersinformationsheet WHERE id1 = :id";
  $deleteStmt = $conn->prepare($deleteQuery);
  $deleteStmt->bindParam(':id', $itemId, PDO::PARAM_INT);

  // Execute the delete statement
  if ($deleteStmt->execute()) {
    // Deletion successful
    $response = [
      'success' => true,
      'message' => 'Item deleted successfully.'
    ];
  } else {
    // Failed to delete the item
    $response = [
      'success' => false,
      'message' => 'Failed to delete the item.'
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

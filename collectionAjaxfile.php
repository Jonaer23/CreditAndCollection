<?php
include 'connection.php';

## Read value
$draw = $_POST['draw'];
$row = $_POST['start'];

## Custom Field value
$searchByName = $_POST['searchByName'];

## Search 
$searchQuery = " ";
if($searchByName != ''){
   $searchQuery .= " and (contractCode like '%".$searchByName."%' ) ";
}

## Fetch records

$empQuery = "select SUM(balance) from tbl_flatinterestledger WHERE 1 ".$searchQuery.",";
$empRecords = mysqli_query($connection, $empQuery);
$data = array();
while ($row = mysqli_fetch_assoc($empRecords)) {
  
   $data[] = array(
    "balance"=>$row['balance'],
   );
  

  
}

## Response
$response1 = array(
  "val" => intval($draw),
  "aaData" => $data
);

echo json_encode($response1);


?>
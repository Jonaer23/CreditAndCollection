<?php
include 'connection.php';

## Read value
$draw = $_POST['draw'];
$row = $_POST['start'];
$rowperpage = $_POST['length']; // Rows display per page
$columnIndex = $_POST['order'][0]['column']; // Column index
$columnName = $_POST['columns'][$columnIndex]['data']; // Column name
$columnSortOrder = $_POST['order'][0]['dir']; // asc or desc
$searchValue = $_POST['search']['value']; // Search value

## Custom Field value
$searchByName = $_POST['searchByName'];
$searchByGender = $_POST['searchByGender'];

## Search 
$searchQuery = " ";
if($searchByName != ''){
   $searchQuery .= " and (contractCode like '%".$searchByName."%' ) ";
}
if($searchByGender != ''){
   $searchQuery .= " and (id='".$searchByGender."') ";
}
if($searchValue != ''){
   $searchQuery .= " and (date like '%".$searchValue."%' or ORPR like '%".$searchValue."%') ";
  

}

## Total number of records without filtering
$sel = mysqli_query($connection,"select count(*) as allcount from tbl_flatinterestledger WHERE 1".$searchQuery);
$records = mysqli_fetch_assoc($sel);
$totalRecords = $records['allcount'];

## Total number of records with filtering
$sel = mysqli_query($connection,"select count(*) as allcount from tbl_flatinterestledger WHERE 1 ".$searchQuery);
$records = mysqli_fetch_assoc($sel);
$totalRecordwithFilter = $records['allcount'];

## Fetch records

$empQuery = "select * from tbl_flatinterestledger WHERE 1 ".$searchQuery." order by ".$columnName." ".$columnSortOrder." limit ".$row.",".$rowperpage;
$empRecords = mysqli_query($connection, $empQuery);
$data = array();
$total_order = 0;

while ($row = mysqli_fetch_assoc($empRecords)) {
  
   $data[] = array(
    "date"=>$row['date'],
    "TCP"=>$row['TCP'],
    "ORPR"=>$row['ORPR'],
    "amountPaid"=>$row['amountPaid'],
    "interest"=>$row['interest'],
    "principal"=>$row['principal'],
    "balance"=>$row['balance'],
    "VAT"=>$row['VAT'],
    "PCF"=>$row['PCF']
   );
  
}

## Response
$response = array(
  "draw" => intval($draw),
  "iTotalRecords" => $totalRecords,
  "iTotalDisplayRecords" => $totalRecordwithFilter,
  "aaData" => $data,
  'total'    => number_format($total_order, 2),
);

echo json_encode($response);


?>
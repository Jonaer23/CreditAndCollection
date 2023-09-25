
<?php
$draw = $_POST['draw'];
$row = $_POST['start'];
## Custom Field value
$searchByName = $_POST['searchByName'];
$searchByGender = $_POST['searchByGender'];

//fetch.php
$connect = new PDO("mysql:host=localhost;dbname=sedge_accountingsoftware", "sedge", "@Hanabi16");

$column = array('date', 'TCP', 'ORPR', 'amountPaid', 'interest', 'principal', 'balance', 'penalties', 'VAT', 'PCF');

$query = '
SELECT * FROM tbl_flatinterestledger 
WHERE contractCode LIKE "%'.$searchByName.'%"
AND date LIKE "%'.$_POST["search"]["value"].'%" 
OR ORPR LIKE "%'.$_POST["search"]["value"].'%" 
';
if($searchByName != '')
{
 $query .= " and (contractCode like '%".$searchByName."%' ) ";
}
if(isset($_POST["order"]))
{
 $query .= 'ORDER BY '.$column[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' ';
}
else
{
 $query .= 'ORDER BY id ASC ';
}

$query1 = '';

if($_POST["length"] != -1)
{
 $query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

$statement = $connect->prepare($query);

$statement->execute();

$number_filter_row = $statement->rowCount();

$statement = $connect->prepare($query . $query1);

$statement->execute();

$result = $statement->fetchAll();

$data = array();

$total_order = 0;
foreach($result as $row)
{
    $sub_array = array();
    $sub_array[] = $row["date"];
    $sub_array[] = $row["TCP"];
    $sub_array[] = $row["ORPR"];
    $sub_array[] = $row["amountPaid"];
    $sub_array[] = $row["interest"];
    $sub_array[] = $row["principal"];
    $sub_array[] = $row["balance"];
    $sub_array[] = $row["penalties"];
    $sub_array[] = $row["VAT"];
    $sub_array[] = $row["PCF"];
   
    
    $total_order = $total_order + floatval(preg_replace('/[^\d\.]/', '',$row["amountPaid"]));
    $data[] = $sub_array;
}



$output = array(
 'draw'    => intval($_POST["draw"]),
 'recordsFiltered' => $number_filter_row,
 'data'    => $data,
 'total'    => number_format($total_order, 2)
);

echo json_encode($output);


?>

<?php 
include('connection.php');
    $query ="SELECT * FROM tbl_lotintermentdescription";
    $result = $connection->query($query);
    if($result->num_rows> 0){
      $rows= mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
    $query1 ="SELECT * FROM tbl_additionalchargefordepth";
    $result1 = $connection->query($query1);
    if($result1->num_rows> 0){
      $rows1= mysqli_fetch_all($result1, MYSQLI_ASSOC);
    }
 
?>
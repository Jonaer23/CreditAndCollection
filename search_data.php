<?php
include 'Search.php';
$search = new Search();
$sqlConditions = array();
$orders = $search->searchResult($sqlConditions);
if(!empty($orders)){    
	foreach($orders as $order){
		echo '<tr>';
		echo '<td>'.$order['id'].'</td>';
		echo '<td>'.$order['date'].'</td>';
		echo '<td>'.$order['TCP'].'</td>';
		echo '<td>'.$order['ORPR'].'</td>';
		echo '<td>'.$order['amountPaid'].'</td>';
        echo '<td>'.$order['interest'].'</td>';
        echo '<td>'.$order['principal'].'</td>';
        echo '<td>'.$order['balance'].'</td>';
        echo '<td>'.$order['VAT'].'</td>';
        echo '<td>'.$order['PCF'].'</td>';
        echo '<td>'.$order['remarks'].'</td>';
		echo '</tr>';
	}
}else{
    echo '<tr><td colspan="5">No user(s) found...</td></tr>';
}
exit;
?>
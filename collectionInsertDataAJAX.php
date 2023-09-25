
<?php
	include('connection.php');
    $user=$_POST['user'];
	$date1=$_POST['date1'];
	$collectionPrincipal=$_POST['collectionPrincipal'];
	$collectionInterest=$_POST['collectionInterest'];
	$collectionbalance=$_POST['collectionbalance'];
	$collectionPenalties=$_POST['collectionPenalties'];

    $collectionAmmountPaid=$_POST['collectionAmmountPaid'];
	$collectionTCP=$_POST['collectionTCP'];
	$collectionORPR=$_POST['collectionORPR'];
	$collectionVAT=$_POST['collectionVAT'];
	$collectionPCF=$_POST['collectionPCF'];
	$collectionContractCode=$_POST['collectionContractCode'];

	$sql = "INSERT INTO `tbl_flatinterestledger`( `date`, `user`, `dateModified`, `principal`, `interest`, `balance`, `penalties`, `amountPaid`, `TCP`, `ORPR`, `contractCode`, `PCF`, `VAT`) VALUES ('$date1','$user',now(),'$collectionPrincipal','$collectionInterest','$collectionbalance','$collectionPenalties','$collectionAmmountPaid','$collectionTCP','$collectionORPR','$collectionContractCode','$collectionPCF','$collectionVAT')";
	if (mysqli_query($connection, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($conn);
?>
 
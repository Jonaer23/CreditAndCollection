<?php
	include 'connection.php';
        include 'session.php';
$token1 = time();

if(isset($_POST['lotLedger1']))
{
        
    $customerName = $_POST['Fullname1'];
    $customerCode1 = $_POST['customerCode1'];
    $date1 = $_POST['date1'];
    $lot_id1 = $_POST['lot_id1'];
    $lot_block1 = $_POST['lot_block1'];
    $lot_section1 = $_POST['lot_section1'];
    $lot_no1 = $_POST['lot_no1'];
    $lot_area1 = $_POST['lot_area1'];
    $lot_phase1 = $_POST['lot_phase1'];
    $lot_type1 = $_POST['lot_type1'];

    $terms = $_POST['terms'];
    $lotListPrice = $_POST['lotListPrice'];
    $taxs1 = $_POST['taxs1'];
    $subtotaltax = $_POST['subtotaltax'];
    $discounts1 = $_POST['discounts1'];
    $subtotalDiscount = $_POST['subtotalDiscount'];
    $pcf = $_POST['pcf'];
    $totalContractPrice3 = $_POST['totalContractPrice3'];
    $dpPercentage2 = $_POST['dpPercentage2'];
    $dpPercentage = $_POST['dpPercentage'];
    $balance = $_POST['balance'];
    $MI1 = $_POST['MI1'];
    $MI2 = $_POST['MI2'];
    $factorratePercentage = $_POST['factorratePercentage'];
    $factorrate = $_POST['factorrate'];
    $NoOfMonths = $_POST['NoOfMonths'];
    $PaymentDueDate = $_POST['PaymentDueDate'];
    $paymentMethod = $_POST['paymentMethod'];
    $totalBalance = $_POST['totalBalance'];
          
        mysqli_query($connection,"UPDATE `buyersinformationsheet` SET `contractCode`='SSDC-CG$token1', `Status`='Verified' WHERE  `customerCode`='$customerCode1'");
        mysqli_query($connection,"INSERT INTO `tbl_ledger` (`date_column`,`lotOrCryptDescription`, `status1`,`status`,`contractCode`,`customerName`, `customerCode`,`accreditedDate`,`lotID`, `block`, `section`, `lotNo`, `area`, `phase`, `type`, `totalContractPrice`, `lotdescTerms`,  `lotListPrice`,  `VAT`,`subtotaltax`, `discount`,  `subtotalDiscount`,  `PCF`, `dpPercentage`, `dpPercentage2`, `balance`, `MI1`, `MI2`,  `factorratePercentage`, `factorRate`, `NoOfMonths`, `paymentMethod`, `reservedDate`, `user`) VALUES (now(),'Lot','Active','Verified','SSDC-CG$token1','$customerName','$customerCode1','$date1','$lot_id1','$lot_block1','$lot_section1','$lot_no1','$lot_area1','$lot_phase1','$lot_type1','$totalContractPrice3','$lotDescTerms','$lotListPrice','$taxs1','$subtotaltax','$discounts1','$subtotalDiscount','$pcf','$dpPercentage2','$dpPercentage','$balance','$MI1','$MI2','$factorratePercentage','$factorrate','$NoOfMonths','$paymentMethod', now(),'$user');");
        header('location:sales_reservation.php');
        
        }
   
if(isset($_POST['Tax']))
{	
    $tax = $_POST['tax'];
    $id = $_POST['taxID'];
    mysqli_query($connection,"UPDATE `tbl_tax` SET  `tax`='$tax' WHERE  `id`='$id'");
    header('location:CCD_Ledger.php');
}
if(isset($_POST['Discount']))
{	
    $tax = $_POST['discount'];
    $id = $_POST['discountID'];
    mysqli_query($connection,"UPDATE `tbl_discount` SET  `discount`='$tax' WHERE  `id`='$id'");
    header('location:CCD_Ledger.php');
}
if(isset($_POST['PCF']))
{	
    $PCF = $_POST['PCF1'];
    $PCFID = $_POST['PCFID'];
    mysqli_query($connection,"UPDATE `tbl_pcf` SET  `PCF`='$PCF' WHERE  `id`='$PCFID'");
    header('location:CCD_Ledger.php');
}
if(isset($_POST['markup']))
{	
    $PCF = $_POST['markup1'];
    $PCFID = $_POST['markupID'];
    mysqli_query($connection,"UPDATE `tbl_markup` SET  `markup`='$PCF' WHERE  `id`='$PCFID'");
    header('location:CCD_Ledger.php');
}

if(isset($_POST['firstMonthMIbutton']))
{	
    $inputInterest1 = $_POST['inputInterest1'];
    $inputPrincipal1 = $_POST['inputPrincipal1'];
    $inputPercentage1 = $_POST['inputPercentage1'];
    $inputfirstmonthMIID = $_POST['inputfirstmonthMIID'];
    mysqli_query($connection,"UPDATE `diminishingratefirsthalf` SET  `interest`='$inputInterest1', `principal`='$inputPrincipal1', `deminishingPercentage`='$inputPercentage1' WHERE  `id`='$inputfirstmonthMIID'");
    mysqli_query($connection,"UPDATE `diminishingratesecondhalf` SET  `interest`='$inputPrincipal1', `principal`='$inputInterest1' WHERE  `id`='$inputfirstmonthMIID'");
   
    header('location:CCD_ledgerDeminishingRate.php');
}
if(isset($_POST['secondMonthMI']))
{	
    $inputInterest1 = $_POST['inputInterest2'];
    $inputPrincipal1 = $_POST['inputPrincipal2'];
    $inputPercentage1 = $_POST['inputPercentage2'];
    $inputfirstmonthMIID = $_POST['inputsecondmonthMIID'];
    mysqli_query($connection,"UPDATE `diminishingratesecondhalf` SET  `interest`='$inputInterest1', `principal`='$inputPrincipal1', `deminishingPercentage`='$inputPercentage1' WHERE  `id`='$inputfirstmonthMIID'");
    mysqli_query($connection,"UPDATE `diminishingratefirsthalf` SET  `interest`='$inputPrincipal1', `principal`='$inputInterest1' WHERE  `id`='$inputfirstmonthMIID'");
    
    header('location:CCD_ledgerDeminishingRate.php');
}
if(isset($_POST['btnSaveLedger']))
{	
    $contractCode = $_POST['contractCode'];
    $ORPR = $_POST['ORPR'];
    $price = $_POST['price'];
    $b_Date = $_POST['b_Date'];
    $cutOff = $_POST['cutOff'];
    $costumerName = $_POST['costumerName'];
    $spouseName = $_POST['spouseName'];
    $companyName = $_POST['companyName'];
    
    $residentAddress = $_POST['residentAddress'];
    $billingAddress = $_POST['billingAddress'];
    $companyAddress = $_POST['companyAddress'];
    $residentialPhoneno = $_POST['residentialPhoneno'];
    $spouseOccupation = $_POST['spouseOccupation'];
    $companyTellNo = $_POST['companyTellNo'];
    $LDblock = $_POST['LDblock'];
    $LDsection = $_POST['LDsection'];


    $LDarea = $_POST['LDarea'];
    $LDphase = $_POST['LDphase'];
    $LDtype = $_POST['LDtype'];
    $terms = $_POST['terms'];
    $modeOfpayment = $_POST['modeOfpayment'];
    $lotListPrice = $_POST['lotListPrice'];
    $taxs1 = $_POST['taxs1'];
    $subtotaltax = $_POST['subtotaltax'];
    
    $discounts1 = $_POST['discounts1'];
    $subtotalDiscount = $_POST['subtotalDiscount'];
    $pcf = $_POST['pcf'];
    $totalContractPrice3 = $_POST['totalContractPrice3'];
    $markup1 = $_POST['markup1'];
    $atNeedTCP = $_POST['atNeedTCP'];
    $dpPercentage = $_POST['dpPercentage'];
    $dpPercentage2 = $_POST['dpPercentage2'];
    
    $balance = $_POST['balance'];
    $MI1 = $_POST['MI'];
    $MIInterestPercentage1 = $_POST['MIInterestPercentage'];
    $MIPrincipalPercentage1 = $_POST['MIPrincipalPercentage'];
    $Interest = $_POST['Interest'];
    $Principal = $_POST['Principal'];
  
    $NoOfMonths = $_POST['NoOfMonths'];
    $user = $_POST['user'];
    
    mysqli_query($connection,"INSERT INTO `tbl_ledger` (`status1`,`status`,`lotOrCryptDescription`,`contractCode`, `ORPR`, `totalContractPrice`, `date`, `cutOff`, `customerName`, `block`, `section`, `area`, `phase`,`type`,`lotdescTerms`, `modeOfpayment`, `lotListPrice`, `VAT`, `subtotaltax`, `discount`, `subtotalDiscount`, `PCF`, `addMarkup`, `atNeedTCP`, `dpPercentage`, `dpPercentage2`, `balance`, `MI1`, `MIInterestPercentage1`, `MIPrincipalPercentage1`, `NoOfMonths`, `user`,`InterestAccountRate`, `dateCreated`) VALUES ('Monitoring','Verified','Lot','$contractCode','$ORPR','$totalContractPrice3','$b_Date','$cutOff','$costumerName','$LDblock','$LDsection','$LDarea','$LDphase','$LDtype','$terms','$modeOfpayment','$lotListPrice','$taxs1','$subtotaltax','$discounts1','$subtotalDiscount','$pcf','$markup1','$atNeedTCP','$dpPercentage','$dpPercentage2','$balance','$MI1','$MIInterestPercentage1','$MIPrincipalPercentage1','$NoOfMonths','$user','Flat_Interest',now())");
    mysqli_query($connection,"INSERT INTO `buyersinformationsheet` (`customerCode`,`contractCode`, `SpouseName`,`EmployerBusinessName`,`r_Address`,`b_Address`,`companyAddress`, `companyTellNo`, `Residential_Phone`, `SpouseOccupation`) VALUES ('SSCD-CC-$token1','$contractCode','$spouseName','$companyName','$residentAddress','$billingAddress','$companyAddress','$companyTellNo','$residentialPhoneno','$spouseOccupation' )");
    mysqli_query($connection,"INSERT INTO `tbl_flatinterestledger` (`contractCode`, `date`, `TCP`, `ORPR`, `amountPaid`, `interest`, `principal`, `balance`, `VAT`, `PCF`,`user`, `dateModified`) VALUES ('$contractCode','$b_Date','$totalContractPrice3','$ORPR','$dpPercentage2','$Interest','$Principal','$balance','$subtotaltax','$pcf','$user',now() )");
    
    
    header('location:CCD_ledger.php');
}
if(isset($_POST['btnSaveDiminishingRate']))
{	
    $contractCode = $_POST['contractCode'];
    $ORPR = $_POST['ORPR'];
    $price = $_POST['price'];
    $b_Date = $_POST['b_Date'];
    $cutOff = $_POST['cutOff'];
    $costumerName = $_POST['costumerName'];
    $spouseName = $_POST['spouseName'];
    $companyName = $_POST['companyName'];
    
    $residentAddress = $_POST['residentAddress'];
    $billingAddress = $_POST['billingAddress'];
    $companyAddress = $_POST['companyAddress'];
    $residentialPhoneno = $_POST['residentialPhoneno'];
    $spouseOccupation = $_POST['spouseOccupation'];
    $companyTellNo = $_POST['companyTellNo'];
    $LDblock = $_POST['LDblock'];
    $LDsection = $_POST['LDsection'];
    
    $LDarea = $_POST['LDarea'];
    $LDphase = $_POST['LDphase'];
    $LDtype = $_POST['LDtype'];
    $terms = $_POST['terms'];
    $modeOfpayment = $_POST['modeOfpayment'];
    $lotListPrice = $_POST['lotListPrice'];
    $taxs1 = $_POST['taxs1'];
    $subtotaltax = $_POST['subtotaltax'];
    
    $discounts1 = $_POST['discounts1'];
    $subtotalDiscount = $_POST['subtotalDiscount'];
    $pcf = $_POST['pcf'];
    $totalContractPrice3 = $_POST['totalContractPrice3'];
    $markup1 = $_POST['markup1'];
    $atNeedTCP = $_POST['atNeedTCP'];
    $dpPercentage = $_POST['dpPercentage'];
    $dpPercentage2 = $_POST['dpPercentage2'];
    
    $balance = $_POST['balance'];
    $MI1 = $_POST['MI1'];
    $MIInterestPercentage1 = $_POST['MIInterestPercentage1'];
    $MIPrincipalPercentage1 = $_POST['MIPrincipalPercentage1'];
    $MIPercentage1 = $_POST['MIPercentage1'];
    $MI2 = $_POST['MI2'];
    $MIInterestPercentage2 = $_POST['MIInterestPercentage2'];
    $MIPrincipalPercentage2 = $_POST['MIPrincipalPercentage2'];
    $MIPercentage2 = $_POST['MIPercentage2'];   
    $NoOfMonths = $_POST['NoOfMonths'];
    $user = $_POST['user'];
   
    $Interest = $_POST['Interest'];
    $Principal = $_POST['Principal'];
    
    mysqli_query($connection,"INSERT INTO `buyersinformationsheet` (`customerCode`,`contractCode`, `SpouseName`,`EmployerBusinessName`,`r_Address`,`b_Address`,`companyAddress`, `companyTellNo`, `Residential_Phone`, `SpouseOccupation`) VALUES ('SSCD-CC-$token1','$contractCode','$spouseName','$companyName','$residentAddress','$billingAddress','$companyAddress','$companyTellNo','$residentialPhoneno','$spouseOccupation' );");
    mysqli_query($connection,"INSERT INTO `tbl_ledger` ( `status1`,`status`,`lotOrCryptDescription`,`contractCode`, `ORPR`, `totalContractPrice`, `date`, `cutOff`, `customerName`, `block`, `section`, `area`, `phase`,`type`,`lotdescTerms`, `modeOfpayment`, `lotListPrice`, `VAT`, `subtotaltax`, `discount`, `subtotalDiscount`, `PCF`, `addMarkup`, `atNeedTCP`, `dpPercentage`, `dpPercentage2`, `balance`, `MI1`, `MIInterestPercentage1`, `MIPrincipalPercentage1`, `MIPercentage1`, `MI2`, `MIInterestPercentage2`, `MIPrincipalPercentage2`, `MIPercentage2`, `NoOfMonths`, `user`,`InterestAccountRate`, `dateCreated`) VALUES ('Monitoring','Verified','Lot','$contractCode','$ORPR','$totalContractPrice3','$b_Date','$cutOff','$costumerName','$LDblock','$LDsection','$LDarea','$LDphase','$LDtype','$terms','$modeOfpayment','$lotListPrice','$taxs1','$subtotaltax','$discounts1','$subtotalDiscount','$pcf','$markup1','$atNeedTCP','$dpPercentage','$dpPercentage2','$balance','$MI1','$MIInterestPercentage1','$MIPrincipalPercentage1','$MIPercentage1','$MI2','$MIInterestPercentage2','$MIPrincipalPercentage2','$MIPercentage2','$NoOfMonths','$user','Diminishing_Rate',now());");
    mysqli_query($connection,"INSERT INTO `tbl_flatinterestledger` (`contractCode`, `date`, `TCP`, `ORPR`, `amountPaid`, `interest`, `principal`, `balance`, `VAT`, `PCF`,`user`, `dateModified`) VALUES ('$contractCode','$b_Date','$totalContractPrice3','$ORPR','$dpPercentage2','$Interest','$Principal','$balance','$subtotaltax','$pcf','$user',now() )");
    
    header('location:CCD_ledgerDeminishingRate.php');
}
if(isset($_POST['btnSavecryptDiminishingRate']))
{	
    $contractCode = $_POST['contractCode'];
    $ORPR = $_POST['ORPR'];
    $price = $_POST['price'];
    $b_Date = $_POST['b_Date'];
    $cutOff = $_POST['cutOff'];
    $costumerName = $_POST['costumerName'];
    $spouseName = $_POST['spouseName'];
    $companyName = $_POST['companyName'];
    
    $residentAddress = $_POST['residentAddress'];
    $billingAddress = $_POST['billingAddress'];
    $companyAddress = $_POST['companyAddress'];
    $residentialPhoneno = $_POST['residentialPhoneno'];
    $spouseOccupation = $_POST['spouseOccupation'];
    $companyTellNo = $_POST['companyTellNo'];
    $phase = $_POST['phase'];
    $level = $_POST['level'];
    $area = $_POST['area'];
    $section = $_POST['section'];
    $crypt_column = $_POST['crypt_column'];
    $unit_no = $_POST['unit_no'];
    $noLots = $_POST['noLots'];
    $classification = $_POST['classification'];
    $terms = $_POST['terms'];
    $modeOfpayment = $_POST['modeOfpayment'];
    $lotListPrice = $_POST['lotListPrice'];
    $taxs1 = $_POST['taxs1'];
    $subtotaltax = $_POST['subtotaltax'];
    
    $discounts1 = $_POST['discounts1'];
    $subtotalDiscount = $_POST['subtotalDiscount'];
    $pcf = $_POST['pcf'];
    $totalContractPrice3 = $_POST['totalContractPrice3'];
    $markup1 = $_POST['markup1'];
    $atNeedTCP = $_POST['atNeedTCP'];
    $dpPercentage = $_POST['dpPercentage'];
    $dpPercentage2 = $_POST['dpPercentage2'];
    
    $balance = $_POST['balance'];
    $MI1 = $_POST['MI1'];
    $MIInterestPercentage1 = $_POST['MIInterestPercentage1'];
    $MIPrincipalPercentage1 = $_POST['MIPrincipalPercentage1'];
    $MIPercentage1 = $_POST['MIPercentage1'];
    $MI2 = $_POST['MI2'];
    $MIInterestPercentage2 = $_POST['MIInterestPercentage2'];
    $MIPrincipalPercentage2 = $_POST['MIPrincipalPercentage2'];
    $MIPercentage2 = $_POST['MIPercentage2'];   
    $NoOfMonths = $_POST['NoOfMonths'];
    $user = $_POST['user'];
   
    $Interest = $_POST['Interest'];
    $Principal = $_POST['Principal'];
  
    mysqli_query($connection,"INSERT INTO `buyersinformationsheet` (`customerCode`,`contractCode`, `SpouseName`,`EmployerBusinessName`,`r_Address`,`b_Address`,`companyAddress`, `companyTellNo`, `Residential_Phone`, `SpouseOccupation`) VALUES ('SSCD-CC-$token1','$contractCode','$spouseName','$companyName','$residentAddress','$billingAddress','$companyAddress','$companyTellNo','$residentialPhoneno','$spouseOccupation' );");
    mysqli_query($connection,"INSERT INTO `tbl_ledger` (`status1`,`status`,`lotOrCryptDescription`,`contractCode`, `ORPR`, `totalContractPrice`, `date`, `cutOff`, `customerName`, `cryptphase`, `cryptlevel`, `cryptarea`, `cryptsection`, `crypt_column`, `cryptunit_no_no`, `cryptnoLots`, `cryptclassification`,`lotdescTerms`, `modeOfpayment`, `lotListPrice`, `VAT`, `subtotaltax`, `discount`, `subtotalDiscount`, `PCF`, `addMarkup`, `atNeedTCP`, `dpPercentage`, `dpPercentage2`, `balance`, `MI1`, `MIInterestPercentage1`, `MIPrincipalPercentage1`, `MIPercentage1`, `MI2`, `MIInterestPercentage2`, `MIPrincipalPercentage2`, `MIPercentage2`, `NoOfMonths`, `user`,`InterestAccountRate`, `dateCreated`) VALUES ('Monitoring','Verified','Crypt','$contractCode','$ORPR','$totalContractPrice3','$b_Date','$cutOff','$costumerName','$phase','$level','$area','$section','$crypt_column','$unit_no','$noLots','$classification','$terms','$modeOfpayment','$lotListPrice','$taxs1','$subtotaltax','$discounts1','$subtotalDiscount','$pcf','$markup1','$atNeedTCP','$dpPercentage','$dpPercentage2','$balance','$MI1','$MIInterestPercentage1','$MIPrincipalPercentage1','$MIPercentage1','$MI2','$MIInterestPercentage2','$MIPrincipalPercentage2','$MIPercentage2','$NoOfMonths','$user','Diminishing_Rate',now());");
    mysqli_query($connection,"INSERT INTO `tbl_flatinterestledger` (`contractCode`, `date`, `TCP`, `ORPR`, `amountPaid`, `interest`, `principal`, `balance`, `VAT`, `PCF`,`user`, `dateModified`) VALUES ('$contractCode','$b_Date','$totalContractPrice3','$ORPR','$dpPercentage2','$Interest','$Principal','$balance','$subtotaltax','$pcf','$user',now() )");
    
    header('location:CCD_ledgerDeminishingRateCrypt.php');
}
if(isset($_POST['btnSaveCryptLedger']))
{	
    $contractCode = $_POST['contractCode'];
    $ORPR = $_POST['ORPR'];
    $price = $_POST['price'];
    $b_Date = $_POST['b_Date'];
    $cutOff = $_POST['cutOff'];
    $costumerName = $_POST['costumerName'];
    $spouseName = $_POST['spouseName'];
    $companyName = $_POST['companyName'];
    
    $residentAddress = $_POST['residentAddress'];
    $billingAddress = $_POST['billingAddress'];
    $companyAddress = $_POST['companyAddress'];
    $residentialPhoneno = $_POST['residentialPhoneno'];
    $spouseOccupation = $_POST['spouseOccupation'];
    $companyTellNo = $_POST['companyTellNo'];
    $phase = $_POST['phase'];
    $level = $_POST['level'];
    $area = $_POST['area'];
    $section = $_POST['section'];
    $crypt_column = $_POST['crypt_column'];
    $unit_no = $_POST['unit_no'];
    $noLots = $_POST['noLots'];
    $classification = $_POST['classification'];
    $terms = $_POST['terms'];
    $modeOfpayment = $_POST['modeOfpayment'];
    $lotListPrice = $_POST['lotListPrice'];
    $taxs1 = $_POST['taxs1'];
    $subtotaltax = $_POST['subtotaltax'];
    
    $discounts1 = $_POST['discounts1'];
    $subtotalDiscount = $_POST['subtotalDiscount'];
    $pcf = $_POST['pcf'];
    $totalContractPrice3 = $_POST['totalContractPrice3'];
    $markup1 = $_POST['markup1'];
    $atNeedTCP = $_POST['atNeedTCP'];
    $dpPercentage = $_POST['dpPercentage'];
    $dpPercentage2 = $_POST['dpPercentage2'];
    
    $balance = $_POST['balance'];
    $MI1 = $_POST['MI'];
    $MIInterestPercentage1 = $_POST['MIInterestPercentage'];
    $MIPrincipalPercentage1 = $_POST['MIPrincipalPercentage'];
  
    $NoOfMonths = $_POST['NoOfMonths'];
    $user = $_POST['user'];
   
    $Interest = $_POST['Interest'];
    $Principal = $_POST['Principal'];
    
    mysqli_query($connection,"INSERT INTO `tbl_ledger` ( `status1`,`status`,`lotOrCryptDescription`,`contractCode`, `ORPR`, `totalContractPrice`, `date`, `cutOff`, `customerName`, `cryptphase`, `cryptlevel`, `cryptarea`, `cryptsection`, `crypt_column`, `cryptunit_no_no`, `cryptnoLots`, `cryptclassification`,`lotdescTerms`, `modeOfpayment`, `lotListPrice`, `VAT`, `subtotaltax`, `discount`, `subtotalDiscount`, `PCF`, `addMarkup`, `atNeedTCP`, `dpPercentage`, `dpPercentage2`, `balance`, `MI1`, `MIInterestPercentage1`, `MIPrincipalPercentage1`, `NoOfMonths`, `user`,`InterestAccountRate`, `dateCreated`) VALUES ('Monitoring','Verified','Crypt','$contractCode','$ORPR','$totalContractPrice3','$b_Date','$cutOff','$costumerName','$phase','$level','$area','$section','$crypt_column','$unit_no','$noLots','$classification','$terms','$modeOfpayment','$lotListPrice','$taxs1','$subtotaltax','$discounts1','$subtotalDiscount','$pcf','$markup1','$atNeedTCP','$dpPercentage','$dpPercentage2','$balance','$MI1','$MIInterestPercentage1','$MIPrincipalPercentage1','$NoOfMonths','$user','Flat_Interest',now())");
    mysqli_query($connection,"INSERT INTO `buyersinformationsheet` (`customerCode`,`contractCode`, `SpouseName`,`EmployerBusinessName`,`r_Address`,`b_Address`,`companyAddress`, `companyTellNo`, `Residential_Phone`, `SpouseOccupation`) VALUES ('SSCD-CC-$token1','$contractCode','$spouseName','$companyName','$residentAddress','$billingAddress','$companyAddress','$companyTellNo','$residentialPhoneno','$spouseOccupation' )");
    mysqli_query($connection,"INSERT INTO `tbl_flatinterestledger` (`contractCode`, `date`, `TCP`, `ORPR`, `amountPaid`, `interest`, `principal`, `balance`, `VAT`, `PCF`,`user`, `dateModified`) VALUES ('$contractCode','$b_Date','$totalContractPrice3','$ORPR','$dpPercentage2','$Interest','$Principal','$balance','$subtotaltax','$pcf','$user',now() )");
     
    header('location:CCD_ledgerCrypt.php');
}
?>
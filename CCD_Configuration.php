<?php
	include('connection.php');
	$userDropdown = $_POST['userName'];
	$date = date('Y-m-d H:i:s');
	if(isset($_POST['lotDescriptionEdit_button']) )
{	 
	 $lotBlock_input = $_POST['lotBlock_input'];
	 $lotBlock_ID = $_POST['lotBlock_ID'];
	mysqli_query($connection,"UPDATE `block_setting` SET  `block`='$lotBlock_input' WHERE  `id`='$lotBlock_ID'");
	header('location:CCD_Setting.php');
	
	

}




	if(isset($_POST['lotDescriptionBlockAdd_button']))
{	 
	 $addlotBlock_input = $_POST['addlotBlock_input'];	
	 mysqli_query($connection,"INSERT INTO `block_setting`(`block`) VALUES ('$addlotBlock_input');");
	 header('location:CCD_Setting.php');
}

if(isset($_POST['lotDescriptionBlockDelete_button']))
{	 $deleteID_input = $_POST['lotBlock_ID'];	
	 mysqli_query($connection,"DELETE FROM `block_setting` WHERE id='$deleteID_input'");
	 header('location:CCD_Setting.php');
}

if(isset($_POST['lotDescriptionSectionAdd_button']))
{	 
	 $addlotsection_input = $_POST['lotDescriptionSectionAdd_input'];	
	 mysqli_query($connection,"INSERT INTO `tbl_lotsectionsetting`(`section`) VALUES ('$addlotsection_input');");
	 header('location:CCD_Setting.php');
}

if(isset($_POST['lotDescriptionSectionDelete_button']))
{	 $deleteID_input = $_POST['lotSection_ID'];	
	 mysqli_query($connection,"DELETE FROM `tbl_lotsectionsetting` WHERE id='$deleteID_input'");
	 header('location:CCD_Setting.php');
}



if(isset($_POST['lotDescriptionAreaAdd_button']))
{	 
	 $addlotarea_input = $_POST['addlotArea_input'];	
	 mysqli_query($connection,"INSERT INTO `tbl_lotareasetting`(`area`) VALUES ('$addlotarea_input');");
	 header('location:CCD_Setting.php');
}

if(isset($_POST['lotDescriptionAreaDelete_button']))
{	 $lotArea_ID = $_POST['lotArea_ID'];	
	 mysqli_query($connection,"DELETE FROM `tbl_LotAreaSetting` WHERE id='$lotArea_ID'");
	 header('location:CCD_Setting.php');
}

if(isset($_POST['lotDescriptionPhaseAdd_button']))
{	 
	 $addlotPhase_input = $_POST['addlotPhase_input'];	
	 mysqli_query($connection,"INSERT INTO `tbl_lotphasesetting`(`phase`) VALUES ('$addlotPhase_input');");
	 header('location:CCD_Setting.php');
}

if(isset($_POST['lotDescriptionPhaseDelete_button']))
{	 $lotPhase_ID = $_POST['lotPhase_ID'];	
	 mysqli_query($connection,"DELETE FROM `tbl_LotPhaseSetting` WHERE id='$lotPhase_ID'");
	 header('location:CCD_Setting.php');
}

if(isset($_POST['lotDescriptionTypeAdd_button']))
{	 
	 $addlotType_input = $_POST['addlotType_input'];	
	 mysqli_query($connection,"INSERT INTO `tbl_lottypesetting`(`type`) VALUES ('$addlotType_input');");
	 header('location:CCD_Setting.php');
}

if(isset($_POST['lotDescriptionTypeDelete_button']))
{	 $lotType_ID = $_POST['lotType_ID'];	
	 mysqli_query($connection,"DELETE FROM `tbl_LotTypeSetting` WHERE id='$lotType_ID'");
	 header('location:CCD_Setting.php');
}

if(isset($_POST['cryptDescriptionPhaseAdd_button']))
{	 
	 $addcryptPhase_input = $_POST['addcryptPhase_input'];	
	 mysqli_query($connection,"INSERT INTO `tbl_cryptphasesetting`(`phase`) VALUES ('$addcryptPhase_input');");
	 header('location:CCD_Setting.php');
}

if(isset($_POST['CryptDescriptionPhaseDelete_button']))
{	 $cryptLevel_ID = $_POST['cryptLevel_ID'];	
	 mysqli_query($connection,"DELETE FROM `tbl_CryptPhaseSetting` WHERE id='$cryptLevel_ID'");
	 header('location:CCD_Setting.php');
}

if(isset($_POST['cryptDescriptionLevelAdd_button']))
{	 
	 $addCryptLevel_input = $_POST['addCryptLevel_input'];	
	 mysqli_query($connection,"INSERT INTO `tbl_cryptlevelsetting`(`level`) VALUES ('$addCryptLevel_input');");
	 header('location:CCD_Setting.php');
}

if(isset($_POST['CryptDescriptionLevelDelete_button']))
{	 $cryptLevel_ID = $_POST['cryptLevel_ID'];	
	 mysqli_query($connection,"DELETE FROM `tbl_CryptLevelSetting` WHERE id='$cryptLevel_ID'");
	 header('location:CCD_Setting.php');
}

if(isset($_POST['cryptDescriptionAreaAdd_button']))
{	 
	 $addCryptArea_input = $_POST['addCryptArea_input'];	
	 mysqli_query($connection,"INSERT INTO `tbl_cryptareasetting`(`area`) VALUES ('$addCryptArea_input');");
	 header('location:CCD_Setting.php');
}

if(isset($_POST['CryptDescriptionAreaDelete_button']))
{	 $cryptArea_ID = $_POST['cryptArea_ID'];	
	 mysqli_query($connection,"DELETE FROM `tbl_CryptAreaSetting` WHERE id='$cryptArea_ID'");
	 header('location:CCD_Setting.php');
}

if(isset($_POST['cryptDescriptionSectionAdd_button']))
{	 
	 $addCryptSection_input = $_POST['addCryptSection_input'];	
	 mysqli_query($connection,"INSERT INTO `tbl_cryptsectionsetting`(`section`) VALUES ('$addCryptSection_input');");
	 header('location:CCD_Setting.php');
}

if(isset($_POST['CryptDescriptionSectionDelete_button']))
{	 $cryptSection_ID = $_POST['cryptSection_ID'];	
	 mysqli_query($connection,"DELETE FROM `tbl_CryptSectionSetting` WHERE id='$cryptSection_ID'");
	 header('location:CCD_Setting.php');
}

if(isset($_POST['cryptDescriptionColumnAdd_button']))
{	 
	 $addcryptColumn_input = $_POST['addcryptColumn_input'];	
	 mysqli_query($connection,"INSERT INTO `tbl_cryptcolumnsetting`(`cryptcolumn`) VALUES ('$addcryptColumn_input');");
	 header('location:CCD_Setting.php');
}

if(isset($_POST['cryptDescriptionColumnDelete_button']))
{	 $cryptColumn_ID = $_POST['cryptColumn_ID'];	
	 mysqli_query($connection,"DELETE FROM `tbl_CryptColumnSetting` WHERE id='$cryptColumn_ID'");
	 header('location:CCD_Setting.php');
}

if(isset($_POST['cryptDescriptionUnitAdd_button']))
{	 
	 $addCryptUnit_input = $_POST['addCryptUnit_input'];	
	 mysqli_query($connection,"INSERT INTO `tbl_CryptUnitNoSetting`(`unitNo`) VALUES ('$addCryptUnit_input');");
	 header('location:CCD_Setting.php');
}

if(isset($_POST['cryptDescriptionUnitDelete_button']))
{	 $cryptUnit_ID = $_POST['cryptUnit_ID'];	
	 mysqli_query($connection,"DELETE FROM `tbl_CryptUnitNoSetting` WHERE id='$cryptUnit_ID'");
	 header('location:CCD_Setting.php');
}

if(isset($_POST['cryptDescriptionClassificationAdd_button']))
{	 
	 $cryptlotClassification_input = $_POST['cryptlotClassification_input'];	
	 mysqli_query($connection,"INSERT INTO `tbl_CryptClassificationSetting`(`classification`) VALUES ('$cryptlotClassification_input');");
	 header('location:CCD_Setting.php');
}

if(isset($_POST['cryptDescriptionClassificationDelete_button']))
{	 $cryptClassification_ID = $_POST['cryptClassification_ID'];	
	 mysqli_query($connection,"DELETE FROM `tbl_CryptClassificationSetting` WHERE id='$cryptClassification_ID'");
	 header('location:CCD_Setting.php');
}

if(isset($_POST['LI_IntermentAdd_button']))
{	 
	 $addLI_lotInterment_input = $_POST['addLI_lotInterment_input'];	
	 mysqli_query($connection,"INSERT INTO `tbl_LILotIntermentSetting`(`lotInterment`) VALUES ('$addLI_lotInterment_input');");
	 header('location:CCD_Setting.php');
}

if(isset($_POST['LI_IntermentDelete_button']))
{	 $LI_lotInterment_ID = $_POST['LI_lotInterment_ID'];	
	 mysqli_query($connection,"DELETE FROM `tbl_LILotIntermentSetting` WHERE id='$LI_lotInterment_ID'");
	 header('location:CCD_Setting.php');
}

if(isset($_POST['LI_LocationAdd_button']))
{	 
	 $addLI_location_input = $_POST['addLI_location_input'];	
	 mysqli_query($connection,"INSERT INTO `tbl_LILocationSetting`(`location`) VALUES ('$addLI_location_input');");
	 header('location:CCD_Setting.php');
}

if(isset($_POST['LI_LocationDelete_button']))
{	 $LI_location_ID = $_POST['LI_location_ID'];	
	 mysqli_query($connection,"DELETE FROM `tbl_LILocationSetting` WHERE id='$LI_location_ID'");
	 header('location:CCD_Setting.php');
}

if(isset($_POST['LI_IntermentSpecialAdd_button']))
{	 
	 $addLI_lotIntermentSpecial_input = $_POST['addLI_lotIntermentSpecial_input'];	
	 mysqli_query($connection,"INSERT INTO `tbl_LILotIntermentSpecialSetting`(`lotInterment`) VALUES ('$addLI_lotIntermentSpecial_input');");
	 header('location:CCD_Setting.php');
}

if(isset($_POST['LI_IntermentSpecialDelete_button']))
{	 $LI_lotIntermentSpecial_ID = $_POST['LI_lotIntermentSpecial_ID'];	
	 mysqli_query($connection,"DELETE FROM `tbl_LILotIntermentSpecialSetting` WHERE id='$LI_lotIntermentSpecial_ID'");
	 header('location:CCD_Setting.php');
}

if(isset($_POST['LI_LocationSpecialAdd_button']))
{	 
	 $addLI_LocationSpecial_input = $_POST['addLI_LocationSpecial_input'];	
	 mysqli_query($connection,"INSERT INTO `tbl_LILocationSpecialSetting`(`location`) VALUES ('$addLI_LocationSpecial_input');");
	 header('location:CCD_Setting.php');
}

if(isset($_POST['LI_LocationSpecialDelete_button']))
{	 $LI_locationSpecial_ID = $_POST['LI_locationSpecial_ID'];	
	 mysqli_query($connection,"DELETE FROM `tbl_LILocationSpecialSetting` WHERE id='$LI_locationSpecial_ID'");
	 header('location:CCD_Setting.php');
}

if(isset($_POST['AC_LevelDepthAdd_button']))
{	 
	 $addAC_levelDepth_input = $_POST['addAC_levelDepth_input'];	
	 mysqli_query($connection,"INSERT INTO `tbl_ACLevelDepthSetting`(`levelDepth`) VALUES ('$addAC_levelDepth_input');");
	 header('location:CCD_Setting.php');
}

if(isset($_POST['AC_LevelDepthDelete_button']))
{	 $AC_LevelDepth_ID = $_POST['AC_LevelDepth_ID'];	
	 mysqli_query($connection,"DELETE FROM `tbl_ACLevelDepthSetting` WHERE id='$AC_LevelDepth_ID'");
	 header('location:CCD_Setting.php');
}

if(isset($_POST['AC_DepthAdd_button']))
{	 
	 $addDepth_input = $_POST['addDepth_input'];	
	 mysqli_query($connection,"INSERT INTO `tbl_ACDepthSetting`(`depth`) VALUES ('$addDepth_input');");
	 header('location:CCD_Setting.php');
}

if(isset($_POST['AC_DepthDelete_button']))
{	 $AC_Depth_ID = $_POST['AC_Depth_ID'];	
	 mysqli_query($connection,"DELETE FROM `tbl_ACDepthSetting` WHERE id='$AC_Depth_ID'");
	 header('location:CCD_Setting.php');
}



if(isset($_POST['BU_IntermentAdd_button']))
{	 
	 $addBU_Interment_input = $_POST['addBU_Interment_input'];	
	 mysqli_query($connection,"INSERT INTO `tbl_BUIBoneUrnIntermentSetting`(`boneUrnInterment`) VALUES ('$addBU_Interment_input');");
	 header('location:CCD_Setting.php');
}

if(isset($_POST['BU_IntermentDelete_button']))
{	 $BUInterment_ID = $_POST['BUInterment_ID'];	
	 mysqli_query($connection,"DELETE FROM `tbl_BUIBoneUrnIntermentSetting` WHERE id='$BUInterment_ID'");
	 header('location:CCD_Setting.php');
}

if(isset($_POST['BU_LocationAdd_button']))
{	 
	 $addBU_Location_input = $_POST['addBU_Location_input'];	
	 mysqli_query($connection,"INSERT INTO `tbl_BUILocationSetting`(`location`) VALUES ('$addBU_Location_input');");
	 header('location:CCD_Setting.php');
}

if(isset($_POST['BU_LocationDelete_button']))
{	 $BU_Location_ID = $_POST['BU_Location_ID'];	
	 mysqli_query($connection,"DELETE FROM `tbl_BUILocationSetting` WHERE id='$BU_Location_ID'");
	 header('location:CCD_Setting.php');
}

if(isset($_POST['BU_IntermentSpecialAdd_button']))
{	 
	 $addBUIntermentSpecial_input = $_POST['addBUIntermentSpecial_input'];	
	 mysqli_query($connection,"INSERT INTO `tbl_BUIBoneUrnIntermentSpecialSetting`(`boneUrnInterment`) VALUES ('$addBUIntermentSpecial_input');");
	 header('location:CCD_Setting.php');
}

if(isset($_POST['BU_IntermentSpecialDelete_button']))
{	 $BUIntermentSpecial_ID = $_POST['BUIntermentSpecial_ID'];	
	 mysqli_query($connection,"DELETE FROM `tbl_BUIBoneUrnIntermentSpecialSetting` WHERE id='$BUIntermentSpecial_ID'");
	 header('location:CCD_Setting.php');
}

if(isset($_POST['BU_LocationSpecialAdd_button']))
{	 
	 $addBULocationSpecial_input = $_POST['addBULocationSpecial_input'];	
	 mysqli_query($connection,"INSERT INTO `tbl_BUILocationSpecialSetting`(`location`) VALUES ('$addBULocationSpecial_input');");
	 header('location:CCD_Setting.php');
}

if(isset($_POST['BU_LocationSpecialDelete_button']))
{	 $BULocationSpecial_ID = $_POST['BULocationSpecial_ID'];	
	 mysqli_query($connection,"DELETE FROM `tbl_BUILocationSpecialSetting` WHERE id='$BULocationSpecial_ID'");
	 header('location:CCD_Setting.php');
}

if(isset($_POST['nicheIntermentAdd_button']))
{	 
	 $addNicheInterment_input = $_POST['addNicheInterment_input'];	
	 mysqli_query($connection,"INSERT INTO `tbl_NINicheIntermentSetting`(`nicheInterment`) VALUES ('$addNicheInterment_input');");
	 header('location:CCD_Setting.php');
}

if(isset($_POST['nicheLocationDelete_button']))
{	 $NicheInterment_ID = $_POST['NicheInterment_ID'];	
	 mysqli_query($connection,"DELETE FROM `tbl_NINicheIntermentSetting` WHERE id='$NicheInterment_ID'");
	 header('location:CCD_Setting.php');
}

if(isset($_POST['nicheLocationAdd_button']))
{	 
	 $addNicheLocation_input = $_POST['addNicheLocation_input'];	
	 mysqli_query($connection,"INSERT INTO `tbl_NILocationSetting`(`location`) VALUES ('$addNicheLocation_input');");
	 header('location:CCD_Setting.php');
}

if(isset($_POST['nicheIntermentSpecialDelete_button']))
{	 $NicheIntermentLocation_ID = $_POST['NicheIntermentLocation_ID'];	
	 mysqli_query($connection,"DELETE FROM `tbl_NILocationSetting` WHERE id='$NicheIntermentLocation_ID'");
	 header('location:CCD_Setting.php');
}

if(isset($_POST['nicheIntermentSpecialAdd_button']))
{	 
	 $addNicheIntermentSpecial_input = $_POST['addNicheIntermentSpecial_input'];	
	 mysqli_query($connection,"INSERT INTO `tbl_NINicheIntermentSpecialSetting`(`nicheInterment`) VALUES ('$addNicheIntermentSpecial_input');");
	 header('location:CCD_Setting.php');
}

if(isset($_POST['nicheIntermentSpecialDelete_button']))
{	 $NicheIntermentSpecial_ID = $_POST['NicheIntermentSpecial_ID'];	
	 mysqli_query($connection,"DELETE FROM `tbl_NINicheIntermentSpecialSetting` WHERE id='$NicheIntermentSpecial_ID'");
	 header('location:CCD_Setting.php');
}

if(isset($_POST['nicheLocationSpecialAdd_button']))
{	 
	 $addNicheLocationSpecial_input = $_POST['addNicheLocationSpecial_input'];	
	 mysqli_query($connection,"INSERT INTO `tbl_NILocationSpecialSetting`(`location`) VALUES ('$addNicheLocationSpecial_input');");
	 header('location:CCD_Setting.php');
}

if(isset($_POST['nicheLocationSpecialDelete_button']))
{	 $NicheIntermentSpecialLocation_ID = $_POST['NicheIntermentSpecialLocation_ID'];	
	 mysqli_query($connection,"DELETE FROM `tbl_NILocationSpecialSetting` WHERE id='$NicheIntermentSpecialLocation_ID'");
	 header('location:CCD_Setting.php');
}

if(isset($_POST['lotDescriptionSave_button']))
{	$lotblock_input = $_POST['lotblock_input'];	
	$lotsection_input = $_POST['lotsection_input'];	
	$lotNo_input = $_POST['lotNo_input'];	
	$lotarea_input = $_POST['lotarea_input'];	
	$lotphase_input = $_POST['lotphase_input'];	
	$lottype_input = $_POST['lottype_input'];	
	$lotTCP_input = $_POST['lotTCP_input'];
	$lotTCP_input = str_replace(['₱', ','], '', $lotTCP_input);	
	$DaysCashPrice_input = $_POST['30DaysCashPrice_input'];	
	$spotCash_input = $_POST['spotCash_input'];	
	$spotDP_input = $_POST['spotDP_input'];	
	$downPayment_input = $_POST['downPayment_input'];	
	$monthsDP_input = $_POST['3monthsDP_input'];	
	$lot6months_input = $_POST['6months_input'];	
	$lot1year_input = $_POST['1year_input'];	
	$lot3years_input = $_POST['3years_input'];	
	$lot5years_input = $_POST['5years_input'];	
	$lot7years_input = $_POST['7years_input'];	
	$lot10years_input = $_POST['10years_input'];	
	
	mysqli_query($connection,"INSERT INTO `tbl_lotdescription`(`status`, `block`, `section`, `lot_no`, `area`, `phase`, `type`, `ListPrice`, `30_days_cash_price`, `spot_cash`, `spot_dp`, `downpayment`, `downpayment_payable_in_3_months`, `6_months`, `1_year`, `3_years`, `5_years`, `7_years`, `10_years`, `user`, `dateCreated`) VALUES ('Available','$lotblock_input','$lotsection_input','$lotNo_input','$lotarea_input','$lotphase_input','$lottype_input','$lotTCP_input','$DaysCashPrice_input','$spotCash_input','$spotDP_input','$downPayment_input','$monthsDP_input','$lot6months_input','$lot1year_input','$lot3years_input','$lot5years_input','$lot7years_input','$lot10years_input','$userDropdown','$date');");
	header('location:CCD_Setting.php');
}
if(isset($_POST['cryptDescriptionSave_button']))
{	$cryptphase_input = $_POST['cryptphase_input'];	
	$no_Lots = $_POST['no_Lots'];	
	$cryptlevel_input = $_POST['cryptlevel_input'];	
	$cryptarea_input = $_POST['cryptarea_input'];	
	$cryptsection_input = $_POST['cryptsection_input'];	
	$cryptcolumn_input = $_POST['cryptcolumn_input'];	
	$cryptunitno_input = $_POST['cryptunitno_input'];	
	$cryptclassification_input = $_POST['cryptclassification_input'];	
	$cryptTCP = $_POST['cryptTCP'];	
	
	$cryptTCP = str_replace(['₱', ','], '', $cryptTCP);	
	$crypt30dayscashprice = $_POST['crypt30dayscashprice'];	
	$cryptspotcash = $_POST['cryptspotcash'];	
	$cryptspotDP_input = $_POST['cryptspotDP_input'];	
	$cryptdownPayment_input = $_POST['cryptdownPayment_input'];	
	$crypt3monthsDP_input = $_POST['crypt3monthsDP_input'];	
	$crypt6months_input = $_POST['crypt6months_input'];	
	$crypt1year_input = $_POST['crypt1year_input'];	
	$crypt3years_input = $_POST['crypt3years_input'];	
	$crypt5years_input = $_POST['crypt5years_input'];	
	$crypt7years_input = $_POST['crypt7years_input'];	
	$crypt10years_input = $_POST['crypt10years_input'];
	
	mysqli_query($connection,"INSERT INTO `tbl_cryptdescription`(`noLots`,`status`, `phase`, `level`, `area`, `section`, `crypt_column`, `unit_no`, `classification`, `listPrice`, `30_days_cash_price`, `spot_cash`, `spot_dp`, `downpayment`, `downpayment_payable_in_3_months`, `6_months`, `1_year`, `3_years`, `5_years`, `7_years`, `10_years`, `user`, `dateCreated`) VALUES ('$no_Lots','Available','$cryptphase_input','$cryptlevel_input','$cryptarea_input','$cryptsection_input','$cryptcolumn_input','$cryptunitno_input','$cryptclassification_input','$cryptTCP','$crypt30dayscashprice','$cryptspotcash','$cryptspotDP_input','$cryptdownPayment_input','$crypt3monthsDP_input','$crypt6months_input','$crypt1year_input','$crypt3years_input','$crypt5years_input','$crypt7years_input','$crypt10years_input','$userDropdown','$date');");
	header('location:CCD_Setting.php');
}
if(isset($_POST['lotIntermentDescriptionSave_button']))
{	$li_lotInterment_input = $_POST['li_lotInterment_input'];	
	$li_location_input = $_POST['li_location_input'];	
	$li_regular_input = $_POST['li_regular_input'];	
	$li_PreNeed_input = $_POST['li_PreNeed_input'];	
	$li_AtNeed_input = $_POST['li_AtNeed_input'];	
	$li_Night_input = $_POST['li_Night_input'];	
	$li_Specialdays_input = $_POST['li_Specialdays_input'];	
	
	mysqli_query($connection,"INSERT INTO `tbl_lotintermentdescription`(`lotInterment`, `location`, `regularIntermentFee`, `preNeed`, `atNeed`, `night`, `specialDays`, `user`, `dateCreated`)VALUES ('$li_lotInterment_input','$li_location_input','$li_regular_input','$li_PreNeed_input','$li_AtNeed_input','$li_Night_input','$li_Specialdays_input','$userDropdown','$date');");
	header('location:CCD_Setting.php');
}
if(isset($_POST['lotIntermentSpecialDescriptionSave_button']))
{	$liSpecial_lotInterment_input = $_POST['liSpecial_lotInterment_input'];	
	$liSpecial_location_input = $_POST['liSpecial_location_input'];	
	$liSpecial_preNeed_input = $_POST['liSpecial_preNeed_input'];	
	$liSpecial_atNeed_input = $_POST['liSpecial_atNeed_input'];	
	$liSpecial_specialDaysnight_input = $_POST['liSpecial_specialDaysnight_input'];	
	$liSpecial_specialDayspreNeed_input = $_POST['liSpecial_specialDayspreNeed_input'];	
	$liSpecial_specialDaysatNeed_input = $_POST['liSpecial_specialDaysatNeed_input'];	
	
	mysqli_query($connection,"INSERT INTO `tbl_special_lotintermentdescription`(`lotInterment`, `location`, `preNeed`, `atNeed`, `specialDaysNightDawn`, `specialDaysPreNeed`, `specialDaysAtNeed`,`user`, `dateCreated`) VALUES ('$liSpecial_lotInterment_input','$liSpecial_location_input','$liSpecial_preNeed_input','$liSpecial_atNeed_input','$liSpecial_specialDaysnight_input','$liSpecial_specialDayspreNeed_input','$liSpecial_specialDaysatNeed_input','$userDropdown','$date');");
	header('location:CCD_Setting.php');
}
if(isset($_POST['ACDescriptionSave_button']))
{	$AC_levelDepth_input = $_POST['AC_levelDepth_input'];	
	$AC_Depth_input = $_POST['AC_Depth_input'];	
	$AC_charges_input = $_POST['AC_charges_input'];	
	
	mysqli_query($connection,"INSERT INTO `tbl_additionalchargefordepth`(`levelDepth`, `depth`, `charges`, `user`, `dateCreated`) VALUES ('$AC_levelDepth_input','$AC_Depth_input','$AC_charges_input','$userDropdown','$date');");
	header('location:CCD_Setting.php');
}
if(isset($_POST['BUIdescription_button']))
{	$BUI_Interment_input = $_POST['BUI_Interment_input'];	
	$BUI_location_input = $_POST['BUI_location_input'];	
	$BUI_regular_input = $_POST['BUI_regular_input'];	
	$BUI_preNeed_input = $_POST['BUI_preNeed_input'];	
	$BUI_AtNeed_input = $_POST['BUI_AtNeed_input'];	
	$BUI_night_input = $_POST['BUI_night_input'];	
	$BUI_specialDays_input = $_POST['BUI_specialDays_input'];	
	
	mysqli_query($connection,"INSERT INTO `tbl_boneurnintermentdescription`(`bone_urnInterment`, `location`, `regularIntermentFee`, `preNeed`, `atNeed`, `night`, `specialDays`,`user`, `dateCreated`)
	 VALUES ('$BUI_Interment_input','$BUI_location_input','$BUI_regular_input','$BUI_preNeed_input','$BUI_AtNeed_input','$BUI_night_input','$BUI_specialDays_input','$userDropdown','$date');");
	header('location:CCD_Setting.php');
}
if(isset($_POST['BUISpecial_button']))
{	$BUISpecial_interment_input = $_POST['BUISpecial_interment_input'];	
	$BUISpecial_location_input = $_POST['BUISpecial_location_input'];	
	$BUISpecial_preNeed_input = $_POST['BUISpecial_preNeed_input'];	
	$BUISpecial_atNeed_input = $_POST['BUISpecial_atNeed_input'];	
	$BUISpecial_specialNight_input = $_POST['BUISpecial_specialNight_input'];	
	$BUISpecial_SpecialpreNeed_input = $_POST['BUISpecial_SpecialpreNeed_input'];	
	$BUISpecial_SpecialatNeed_input = $_POST['BUISpecial_SpecialatNeed_input'];	
	
	mysqli_query($connection,"INSERT INTO `tbl_specialboneinterment`(`bone_urnInterment`, `location`, `preNeed`, `atNeed`, `specialDaysNightDawn`, `specialDaysPreNeed`, `specialDaysAtNeed`,`user`, `dateCreated`) VALUES ('$BUISpecial_interment_input','$BUISpecial_location_input','$BUISpecial_preNeed_input','$BUISpecial_atNeed_input','$BUISpecial_specialNight_input','$BUISpecial_SpecialpreNeed_input','$BUISpecial_SpecialatNeed_input','$userDropdown','$date');");
	header('location:CCD_Setting.php');
}
if(isset($_POST['nicheInterment_button']))
{	$NI_interment_input = $_POST['NI_interment_input'];	
	$NI_location_input = $_POST['NI_location_input'];	
	$NI_regular_input = $_POST['NI_regular_input'];	
	$NI_preNeed_input = $_POST['NI_preNeed_input'];	
	$NI_atNeed_input = $_POST['NI_atNeed_input'];	
	$NI_nightDawn_input = $_POST['NI_nightDawn_input'];	
	$NI_specialDays_input = $_POST['NI_specialDays_input'];	
	
	mysqli_query($connection,"INSERT INTO `tbl_nicheintermentdescription`(`nicheInterment`, `location`, `regularIntermentFee`, `preNeed`, `atNeed`, `night`, `specialDays`, `user`, `dateCreated`) VALUES ('$NI_interment_input','$NI_location_input','$NI_regular_input','$NI_preNeed_input','$NI_atNeed_input','$NI_nightDawn_input','$NI_specialDays_input','$userDropdown','$date');");
	header('location:CCD_Setting.php');
}
if(isset($_POST['nicheIntermentSpecial_button']))
{	$NiSpecial_Interment_input = $_POST['NiSpecial_Interment_input'];	
	$NiSpecial_location_input = $_POST['NiSpecial_location_input'];	
	$NiSpecial_preNeed_input = $_POST['NiSpecial_preNeed_input'];	
	$NiSpecial_atNeed_input = $_POST['NiSpecial_atNeed_input'];	
	$NiSpecial_specialNight_input = $_POST['NiSpecial_specialNight_input'];	
	$NiSpecial_specialpreNeed_input = $_POST['NiSpecial_specialpreNeed_input'];	
	$NiSpecial_specialatNeed_input = $_POST['NiSpecial_specialatNeed_input'];	
	
	mysqli_query($connection,"INSERT INTO `tbl_specialnicheintermentdescription`(`bone_urnInterment`, `location`, `preNeed`, `atNeed`, `specialDaysNightDawn`, `specialDaysPreNeed`, `specialDaysAtNeed`, `name`, `dateCreated`) VALUES ('$NiSpecial_Interment_input','$NiSpecial_location_input','$NiSpecial_preNeed_input','$NiSpecial_atNeed_input','$NiSpecial_specialNight_input','$NiSpecial_specialpreNeed_input','$NiSpecial_specialatNeed_input','$userDropdown','$date');");
	header('location:CCD_Setting.php');
}
?>

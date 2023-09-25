<?php
	include 'connection.php';
	$targetDir = "uploads/";
	$fileName = basename($_FILES["file"]["name"]);
	$targetFilePath = $targetDir . $fileName;
	$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
	if(isset($_POST['save']) && !empty($_FILES["file"]["name"]))
{	 
	

	 $empId = $_POST['Employee_Id'];
	 $Position = $_POST['Position'];
	 $Department = $_POST['Department'];
	 $Date_Hired = $_POST['Date_Hired'];
	 $Surname = $_POST['Lastname'];
	 $Firstname = $_POST['Firstname'];
	 $Middlename = $_POST['Middlename'];

	 $CA_Rm_Flr_UnitNo_Bldgname = $_POST['HouseNumber'];
	 $CA_House_Lot_BlkNo = $_POST['BL'];
	 $CA_Street_Name = $_POST['ST'];
	 $CA_Subdivision = $_POST['Subdivision'];
	 $A_Barangay_District_Locality = $_POST['District'];
	 $CA_City_Municipality = $_POST['City'];
	 $CA_Province = $_POST['Province'];
	 $CA_Country = $_POST['Country'];
	 $CA_Postal_Code = $_POST['Zipcode'];

	 $CA_Tel_MobileNo = $_POST['CP_no'];
	 $PA_Rm_Flr_UnitNo_Bldgname = $_POST['PA_HouseNumber'];
	 $PA_House_Lot_BlkNo = $_POST['PA_BL'];
	 $PA_Street_Name = $_POST['PA_St'];
	 $PA_Subdivision = $_POST['PA_Subdivision'];
	 $PA_Barangay_District_Locality = $_POST['PA_District'];
	 $PA_City_Municipality = $_POST['PA_City'];
	 $PA_Province = $_POST['PA_Province'];
	 $PA_Country = $_POST['PA_Country'];
	 $PA_Postal_Code = $_POST['PA_Zipcode'];

	 $Date_Of_Birth = $_POST['DOB'];
	
	 $Place_Of_Birth = $_POST['PlaceOfBirth'];
	 $Civil_Status = $_POST['Civil_Status'];
	 $AS_Height = $_POST['Height'];
	 $AS_Weight = $_POST['Weight'];

	 $Nationality = $_POST['Nationality'];
	 $Fathers_Name = $_POST['Father_Name'];
	 $FN_Occupation = $_POST['FT_Occupation'];
	 $Spouse_Name = $_POST['SpouseName'];
	 $SN_Occupation = $_POST['SN_Occupation'];
	 $Mothers_Name = $_POST['Mothers_Name'];
	 $MN_Occupation = $_POST['M_Occupation'];
	 $Religion = $_POST['Religion'];
	
	 $PG_Course = $_POST['PG_Course'];
	 $PG_To = $_POST['PG_To'];
	 $PG_From = $_POST['PG_From'];
	 $PG_School = $_POST['PG_School'];
	 $COL_Course = $_POST['COL_Course'];
	 $COL_From = $_POST['COL_From'];
	 $COL_To = $_POST['COL_To'];
	 $COL_School = $_POST['COL_School'];
	 $VOC_Course = $_POST['VOC_Course'];
	 $VOC_From = $_POST['VOC_From'];

	 $VOC_To = $_POST['VOC_To'];
	 $VOC_School = $_POST['VOC_School'];
	 $SEC_Course = $_POST['SEC_Course'];
	 $SEC_From = $_POST['SEC_From'];
	 $SEC_To = $_POST['SEC_To'];
	 $SEC_School = $_POST['SEC_School'];
	 $ELEM_Course = $_POST['ELEM_Course'];
	 $ELEM_From = $_POST['ELEM_From'];
	 $ELEM_To = $_POST['ELEM_To'];
	 $ELEM_School = $_POST['ELEM_School'];

	 $SSS = $_POST['SSS'];
	 $Philhealth = $_POST['Philhealth'];
	 $TIN = $_POST['TIN'];
	 $HDMF = $_POST['HDMF'];

	
	$allowTypes = array('jpg','png','jpeg','gif','pdf');

	
	if(in_array($fileType, $allowTypes)){
		 // Upload file to server
	if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){

	mysqli_query($connection,"INSERT INTO `as_edbackground`(`Employee_Id`, `PG_Course`, `PG_From`, `PG_To`, `PG_School`, `COL_Course`, `COL_From`, `COL_To`, `COL_School`, `VOC_Course`, `VOC_From`, `VOC_To`, `VOC_School`, `SEC_Course`, `SEC_From`, `SEC_To`, `SEC_School`, `ELEM_Course`, `ELEM_From`, `ELEM_To`, `ELEM_School`) VALUES ('$empId','$PG_Course','$PG_To','$PG_From',' $PG_School','$COL_Course','$COL_From','$COL_To','$COL_School','$VOC_Course','$VOC_From','$VOC_To','$VOC_School',' $SEC_Course','$SEC_From','$SEC_To','$SEC_School','$ELEM_Course','$ELEM_From','$ELEM_To','$ELEM_School');");
	mysqli_query($connection,"INSERT INTO `as_pendingaccessuser`(`Employee_Id`, `Firstname`, `MiddleName`,`Lastname`, `Department`, `Position`) VALUES ('$empId','$Firstname','$Middlename','$Surname','$Department','$Position');");
	mysqli_query($connection,"INSERT INTO `sedge_tablehris`(`Status`,`SSS_No`,`Philhealth_No`,`HDMF_No`,`TIN_No`,`Employee_Id`, `Position`, `Department`, `Date_Hired`, `Surname`, `Firstname`, `Middlename`, `Filename`, `CA_Rm_Flr_UnitNo_Bldgname`, `CA_House_Lot_BlkNo`, `CA_Street_Name`, `CA_Subdivision`, `A_Barangay_District_Locality`, `CA_City_Municipality`, `CA_Province`, `CA_Country`, `CA_Postal_Code`, `CA_Tel_MobileNo`, `PA_Rm_Flr_UnitNo_Bldgname`, `PA_House_Lot_BlkNo`, `PA_Street_Name`, `PA_Subdivision`, `PA_Barangay_District_Locality`, `PA_City_Municipality`, `PA_Province`, `PA_Country`, `PA_Postal_Code`, `Date_Of_Birth`, `Place_Of_Birth`, `Civil_Status`, `AS_Height`, `AS_Weight`, `Nationality`, `Fathers_Name`, `FN_Occupation`, `Spouse_Name`, `SN_Occupation`, `Mothers_Name`, `MN_Occupation`, `Religion`) VALUES ('Hired','$SSS','$Philhealth','$TIN','$HDMF','$empId','$Position','$Department','$Date_Hired','$Surname','$Firstname','$Middlename','$fileName','$CA_Rm_Flr_UnitNo_Bldgname','$CA_House_Lot_BlkNo','$CA_Street_Name','$CA_Subdivision','$A_Barangay_District_Locality','$CA_City_Municipality','$CA_Province','$CA_Country','$CA_Postal_Code','$CA_Tel_MobileNo','$PA_Rm_Flr_UnitNo_Bldgname','$PA_House_Lot_BlkNo','$PA_Street_Name','$PA_Subdivision','$PA_Barangay_District_Locality','$PA_City_Municipality','$PA_Province','$PA_Country','$PA_Postal_Code','$Date_Of_Birth','$Place_Of_Birth','$Civil_Status','$AS_Height','$AS_Weight','$Nationality','$Fathers_Name','$FN_Occupation','$Spouse_Name','$SN_Occupation','$Mothers_Name','$MN_Occupation','$Religion')");
	header('location:hris.php');

}else{
	$statusMsg = "Sorry, there was an error uploading your file.";
}
}else{
$statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
}
}else{
$statusMsg = 'Please select a file to upload.';
}







?>


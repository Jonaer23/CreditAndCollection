<?php
	include 'connection.php';
 
	 
	if(isset($_POST['save']) )
{	
	$filename = $_FILES["file"]["name"];
    $tempname = $_FILES["file"]["tmp_name"];  
    $folder = "uploads/".$filename; 
	
	 $empId = $_POST['Employee_Id'];
	 $Position = $_POST['Position'];
	 $Department = $_POST['Department'];
	 $Date_Hired = $_POST['Date_Hired'];
	 $Surname = $_POST['Surname'];
	 $Firstname = $_POST['Firstname'];
	 $Middlename = $_POST['Middlename'];
	 $CA_Rm_Flr_UnitNo_Bldgname = $_POST['CA_Rm_Flr_UnitNo_Bldgname'];
	 $CA_House_Lot_BlkNo = $_POST['CA_House_Lot_BlkNo'];
	 $CA_Street_Name = $_POST['CA_Street_Name'];
	 $CA_Subdivision = $_POST['CA_Subdivision'];
	 $A_Barangay_District_Locality = $_POST['A_Barangay_District_Locality'];
	 $CA_City_Municipality = $_POST['CA_City_Municipality'];
	 $CA_Province = $_POST['CA_Province'];
	 $CA_Country = $_POST['CA_Country'];
	 $CA_Postal_Code = $_POST['CA_Postal_Code'];

	 $CA_Tel_MobileNo = $_POST['CA_Tel_MobileNo'];
	 $PA_Rm_Flr_UnitNo_Bldgname = $_POST['PA_Rm_Flr_UnitNo_Bldgname'];
	 $PA_House_Lot_BlkNo = $_POST['PA_House_Lot_BlkNo'];
	 $PA_Street_Name = $_POST['PA_Street_Name'];
	 $PA_Subdivision = $_POST['PA_Subdivision'];
	 $PA_Barangay_District_Locality = $_POST['PA_Barangay_District_Locality'];
	 $PA_City_Municipality = $_POST['PA_City_Municipality'];
	 $PA_Province = $_POST['PA_Province'];
	 $PA_Country = $_POST['PA_Country'];
	 $PA_Postal_Code = $_POST['PA_Postal_Code'];

	 $Date_Of_Birth = $_POST['Date_Of_Birth'];
	
	 $Place_Of_Birth = $_POST['Place_Of_Birth'];
	 $Civil_Status = $_POST['Civil_Status'];
	 $AS_Height = $_POST['Height'];
	 $AS_Weight = $_POST['Weight'];

	 $Nationality = $_POST['Nationality'];
	 $Fathers_Name = $_POST['Fathers_Name'];
	 $FN_Occupation = $_POST['FN_Occupation'];
	 $Spouse_Name = $_POST['Spouse_Name'];
	
	 $Mothers_Name = $_POST['Mothers_Name'];
	 $MN_Occupation = $_POST['MN_Occupation'];
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

	 $SSS = $_POST['SSS_No'];
	 $Philhealth = $_POST['Philhealth_No'];
	 $TIN = $_POST['TIN_No'];
	 $HDMF = $_POST['HDMF_No'];


	
	mysqli_query($connection,"UPDATE `sedge_tablehris` SET  `Employee_Id`='$empId',`Position`='$Position',`Department`='$Department',`Date_Hired`='$Date_Hired',`Surname`='$Surname',`Firstname`='$Firstname',`Middlename`='$Middlename',`Filename`='$filename',`CA_Rm_Flr_UnitNo_Bldgname`='$CA_Rm_Flr_UnitNo_Bldgname',`CA_House_Lot_BlkNo`='$CA_House_Lot_BlkNo',`CA_Street_Name`='$CA_Street_Name',`CA_Subdivision`='$CA_Subdivision',`A_Barangay_District_Locality`='$A_Barangay_District_Locality',`CA_City_Municipality`='$CA_City_Municipality',`CA_Province`='$CA_Province',`CA_Country`='$CA_Country',`CA_Postal_Code`='$CA_Postal_Code',`CA_Tel_MobileNo`='$CA_Tel_MobileNo',`PA_Rm_Flr_UnitNo_Bldgname`='$PA_Rm_Flr_UnitNo_Bldgname ',`PA_House_Lot_BlkNo`='$PA_House_Lot_BlkNo ',`PA_Street_Name`='$PA_Street_Name',`PA_Subdivision`='$PA_Subdivision',`PA_Barangay_District_Locality`='$PA_Barangay_District_Locality ',`PA_City_Municipality`='$PA_City_Municipality',`PA_Province`='$PA_Province',`PA_Country`='$PA_Country',`PA_Postal_Code`='$PA_Postal_Code',`Date_Of_Birth`='$Date_Of_Birth',`Place_Of_Birth`='$Place_Of_Birth ',`Civil_Status`='$Civil_Status',`AS_Height`='$AS_Height',`AS_Weight`='$AS_Weight',`Nationality`='$Nationality',`Fathers_Name`='$Fathers_Name',`FN_Occupation`='$FN_Occupation',`Spouse_Name`='$Spouse_Name',`Mothers_Name`='$Mothers_Name',`MN_Occupation`='$MN_Occupation',`SSS_No`='$SSS',`Philhealth_No`='$Philhealth',`HDMF_No`='$HDMF',`TIN_No`='$TIN' WHERE  `Employee_Id`='$empId'");
	if (move_uploaded_file($tempname, $folder)) {
	header('location:EmployeeRecord.php');
	 }
	 header('location:EmployeeRecord.php');
}



?>
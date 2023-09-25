<?php
	include 'connection.php';
 
	if(isset($_POST['save']))
{	 
	
	 $Name_Of_Company = $_POST['Name_of_Company'];
	 $Position1 = $_POST['Position1'];
	 $Period_Covered = $_POST['PeriodCovered'];
	 $Address1 = $_POST['Address1'];
	 $TelNo1 = $_POST['TelNo1'];
	 $EH_EmployeeID1 = $_POST['EH_EmployeeID1'];
		foreach($EH_EmployeeID1 as $index => $EH_EmployeeID){
		 $s_EH_EmployeeID = $EH_EmployeeID;
		 $s_Name_Of_Company = $Name_Of_Company[$index];
		 $s_Position1 = $Position1[$index];
		 $s_Period_Covered = $Period_Covered[$index];
		 $s_Address1 = $Address1[$index];
		 $s_TelNo1 = $TelNo1[$index];
		 mysqli_query($connection,"INSERT INTO `employment_history`(`Employee_ID`, `Name_of_Company`, `Position1`, `Period_Covered`, `Address`, `TelephoneNumber`) VALUES ('$s_EH_EmployeeID','$s_Name_Of_Company','$s_Position1','$s_Period_Covered','$s_Address1','$TelNo1')");
		  header('location:SeminarCertificate.php');
	 }
	}
?>


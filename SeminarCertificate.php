<?php
	include 'connection.php';
 
	if(isset($_POST['save']))
{	 
	 $Seminar = $_POST['Seminar'];
	 $Trained_by = $_POST['Trained_by'];
	 $Date_Of_Training = $_POST['Date_Of_Training'];
	 $Remarks = $_POST['Remarks'];
	 $EH_EmployeeID1 = $_POST['EH_EmployeeID1'];
	
	 foreach($EH_EmployeeID1 as $index => $EH_EmployeeID) {
		 
		 $s_SC_EmployeeID = $SC_EmployeeID1;
		 $s_Date_Of_Training = $Date_Of_Training[$index];
		 $s_Remarks = $Remarks[$index];
		 $s_Seminar = $Seminar[$index];
		 $s_Trained_by = $Trained_by[$index];
		 mysqli_query($connection,"INSERT INTO `seminar_certificate`(`SC_EmployeeID`, `Date_Of_Training`, `Remarks`, `Seminar`, `Trained_by`) VALUES ('$s_SC_EmployeeID','$s_Date_Of_Training','$s_Remarks','$s_Seminar','$s_Trained_by')");
				 header('location:OtherSkills.php');
	 }
	}
?>


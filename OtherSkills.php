<?php
	include 'connection.php';
 
	if(isset($_POST['save']))
{	 
	 $Other_Skills = $_POST['Other_Skills'];
	 $Skill_EmployeeID = $_POST['Skill_EmployeeID'];

			foreach($Skill_EmployeeID as $index => $Skill_EmployeeID1){

		  $s_Skill_EmployeeID = $Skill_EmployeeID1[$index];
		 $s_Other_Skills = $Other_Skills[$index];
		 mysqli_query($connection,"INSERT INTO `skills`(`Skill_EmployeeID`,`Skills`) VALUES ('$s_SC_EmployeeID', '$s_Other_Skills')");
		 header('location:hris.php');
	 }
	}
?>


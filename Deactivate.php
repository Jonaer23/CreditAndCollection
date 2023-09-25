<?php
	include 'connection.php';
 
	if(isset($_POST['Deactivate']))
{	 
	 $empId = $_POST['Employee_Id'];
	 $fullname = $_POST['Fullname'];
	 $Username = $_POST['Username'];
	 $Status = $_POST['AS_Status'];
     $Department = $_POST['Department'];
     $Position = $_POST['Position'];
     $access = $_POST['Access'];
 
	mysqli_query($connection,"INSERT INTO `as_pendingaccessuser` (Employee_Id,Fullname,Department,Position) VALUES ('$empId','$fullname','$Department','$Position')");
	mysqli_query($connection,"DELETE FROM `as_loginform` WHERE Employee_Id='$empId'");
	header('location:AdminUser.php');
}
?>


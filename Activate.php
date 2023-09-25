<?php
	include 'connection.php';
 
	if(isset($_POST['save']))
{	 
	 $empId = $_POST['Employee_Id'];
	 $fullname = $_POST['Fullname'];
	 $Username = $_POST['Username'];
	 $Status = $_POST['AS_Status'];
     $Department = $_POST['Department'];
     $Position = $_POST['Position'];
     $access = $_POST['Access'];
	

	 $duplicate=mysqli_query($connection,"select * from as_loginform where Username='$Username'");
	if (mysqli_num_rows($duplicate)>0)
	{
	header("Location: AddUser.php?message=User name or Email id already exists.");
	
	}
	else{
	mysqli_query($connection,"INSERT INTO `as_loginform` (Employee_Id,Fullname,Username,AS_Status,Department,Position,Access,AS_Password) VALUES ('$empId','$fullname','$Username','$Status','$Department','$Position','$access','Admin')");
	mysqli_query($connection,"DELETE FROM `as_pendingaccessuser` WHERE Employee_Id='$empId'");
	header('location:AddUser.php');

}




  

}
?>


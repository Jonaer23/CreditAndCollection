<?php
	include('connection.php');
	if(isset($_POST['manage']))
{	 
	 $empId1 = $_POST['Employee_Id1'];
	 $fullname1 = $_POST['Fullname1'];
	 $Username1 = $_POST['Username'];
	 $Status1 = $_POST['AS_Status1'];
     $access1 = $_POST['Access1'];
	 $Pword1 = $_POST['pword'];

	
	mysqli_query($connection,"UPDATE `as_loginform` SET  `Fullname`='$fullname1',`Username`='$Username1',`AS_Password`='$Pword1',`Access`='$access1',`AS_Status`='$Status1' WHERE  `Employee_Id`='$empId1'");
	header('location:AdminUser.php');

}
	if(isset($_POST['save']))
{	 
	 $empId = $_POST['Employee_Id'];
	 $fullname = $_POST['Fullname'];
	 $Username = $_POST['Username'];
	 $Status = $_POST['AS_Status'];
     $Department = $_POST['Department'];
     $Position = $_POST['Position'];
     $access = $_POST['Access'];

	
	mysqli_query($connection,"UPDATE `as_loginform` SET  `Fullname`='$fullname',`Department`='$Department',`Position`='$Position',`Access`='$access',`AS_Status`='$Status' WHERE  `Employee_Id`='$empId'");
	header('location:AdminUser.php');

}
if(isset($_POST['Changepass']))
{	 
	$id = $_POST["exampleInputEmail"];/* userid of the user */
	$OldPass = $_POST["CurrentPassword"];
	$NewPass = $_POST["newPassword"];
	if(count($_POST)>0) {
	$result = mysqli_query($connection,"SELECT * from as_loginform WHERE Username='" . $id . "'");
	$row=mysqli_fetch_array($result);
	if($OldPass == $row["AS_Password"]) {
	mysqli_query($connection,"UPDATE as_loginform set AS_Password='" . $NewPass . "' WHERE Username='" . $id . "'");
	$message = "Password Changed Sucessfully";
	header('location:AdminUser.php');
	} else{
	
	$message = "Password is not correct";
		}
	}

}
?>
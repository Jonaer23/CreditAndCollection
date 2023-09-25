<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Start the session (if not already started)
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

include 'connection.php';

// Check if the user is authenticated (you may have your own authentication logic)
if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true) {
    // Redirect the user to the login page if not authenticated
    header("Location: index.php");
    exit;
}

// You can now safely use the session variables
$username = $_SESSION['Username'];
$Name = $_SESSION['Fullname'];
?>

<!DOCTYPE html>
<html lang="en">

<head>

    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin User</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="css/Sedge-Dashboard.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  
    <style>
    .table-sm {
     width: 100%;
     vertical-align: top;
     border-top: 1px solid #e3e6f0;
     }

     .table-sm thead th {
     vertical-align: bottom;
     border-bottom: 2px solid #e3e6f0;
    }
    .table-sm tbody + tbody {
     border-top: 2px solid #e3e6f0;
    }
    input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}


    .modal1 {
    position: fixed;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    opacity: 0;
    visibility: hidden;
    transform: scale(1.1);
    transition: visibility 0s linear 0.25s, opacity 0.25s 0s, transform 0.25s;
}

.modal-content1 {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: white;
    padding: 1rem 1.5rem;
    width: 24rem;
    border-radius: 0.5rem;
}

.close-button1 {
    float: right;
    width: 1.5rem;
    line-height: 1.5rem;
    text-align: center;
    cursor: pointer;
    border-radius: 0.25rem;
    background-color: lightgray;
}

.close-button1:hover {
    background-color: darkgray;
}

.show-modal1 {
    opacity: 1;
    visibility: visible;
    transform: scale(1.0);
    transition: visibility 0s linear 0s, opacity 0.25s 0s, transform 0.25s;
}




 
 div.Image-Alsgro{
     width: 60%;
     float: left;
 }
 div.Image-Sedge{
    float: right;
    content: right;
 }
 div.container-sedge{
    width:100%;
 }
 img.Image-alignment1{
    height: 70px;
    width: 75px;
    margin-left: 10%;
    float: center; 
 }
  label.Labelsedge{
    color: #FFFFFF;
    font-family: 'Calibri';
    font-size: 26px;
    font-weight: bold;
    margin-left: 10px;
    margin-top: 10px;
    
  
 }
 p.Fontp{
    color: #000000;
    font-family: 'Calibri';
    font-size: 10px;
    
    margin-left: 10px;
    margin-top: 0px;
    position: block;
    
 }
input[type=text].form-control-password{
    padding-left: 5px; font-size: 14px; margin-top: -5px; 
}
input[type=password].form-control-password{
    padding-left: 5px; font-size: 14px; margin-top: -5px; 
}


@import url('https://fonts.googleapis.com/css?family=Raleway:400,700');

* {
	box-sizing: border-box;
	margin: 0;
	padding: 0;	
	font-family: Raleway, sans-serif;
}

body {
	background: linear-gradient(90deg, #C7C5F4, #776BCC);		
}


.screen {		
	background: linear-gradient(90deg, #5D54A4, #7C78B8);		
	position: relative;	
	height: 600px;
	width: 360px;	
	box-shadow: 0px 0px 24px #5C5696;
}

.screen__content {
	z-index: 1;
	position: relative;	
	height: 100%;
}

.screen__background {		
	position: absolute;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
	z-index: 0;
	-webkit-clip-path: inset(0 0 0 0);
	clip-path: inset(0 0 0 0);	
}

.screen__background__shape {
	transform: rotate(45deg);
	position: absolute;
}

.screen__background__shape1 {
	height: 520px;
	width: 520px;
	background: #FFF;	
	top: -50px;
	right: 120px;	
	border-radius: 0 72px 0 0;
}

.screen__background__shape2 {
	height: 220px;
	width: 220px;
	background: #6C63AC;	
	top: -172px;
	right: 0;	
	border-radius: 32px;
}

.screen__background__shape3 {
	height: 540px;
	width: 190px;
	background: linear-gradient(270deg, #5D54A4, #6A679E);
	top: -24px;
	right: 0;	
	border-radius: 32px;
}

.screen__background__shape4 {
	height: 400px;
	width: 200px;
	background: #7E7BB9;	
	top: 420px;
	right: 50px;	
	border-radius: 60px;
}

.login {
	width: 320px;
	padding: 30px;
	padding-top: 156px;
}

.login__field {
	padding: 20px 0px;	
	position: relative;	
}

.login__icon {
	position: absolute;
	top: 30px;
	color: #7875B5;
}

.login__input {
	border: none;
	border-bottom: 2px solid #D1D1D4;
	background: none;
	padding: 10px;
	padding-left: 24px;
	font-weight: 700;
	width: 75%;
	transition: .2s;
}

.login__input:active,
.login__input:focus,
.login__input:hover {
	outline: none;
	border-bottom-color: #6A679E;
}

.login__submit {
	background: #fff;
	font-size: 14px;
	margin-top: 30px;
	padding: 16px 20px;
	border-radius: 26px;
	border: 1px solid #D4D3E8;
	text-transform: uppercase;
	font-weight: 700;
	display: flex;
	align-items: center;
	width: 100%;
	color: #4C489D;
	box-shadow: 0px 2px 2px #5C5696;
	cursor: pointer;
	transition: .2s;
}

.login__submit:active,
.login__submit:focus,
.login__submit:hover {
	border-color: #6A679E;
	outline: none;
}

.button__icon {
	font-size: 24px;
	margin-left: auto;
	color: #7875B5;
}

.social-login {	
	position: absolute;
	height: 140px;
	width: 160px;
	text-align: center;
	bottom: 0px;
	right: 0px;
	color: #fff;
}

.social-icons {
	display: flex;
	align-items: center;
	justify-content: center;
}

.social-login__icon {
	padding: 20px 10px;
	color: #fff;
	text-decoration: none;	
	text-shadow: 0px 0px 8px #7875B5;
}

.social-login__icon:hover {
	transform: scale(1.5);	
}

.bg-sedge-primary-color{
        background-color: #003459;
    }


    </style>


</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-sedge-primary-color sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
        <a>
                <div class="SedgeFont" ></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fas fa-user-tie"></i>
                    <span>Admin</span></a>
                  
            </li>
    
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Standard Software for Accounting System
            </div>

       
             <!-- Nav Borrowers - Charts -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fas fa-user-tie"></i>
                    <span>Admin</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="FORM.validation_MIS_UserActivation.php">Add User(s)</a>
                        <a class="collapse-item" href="AdminUser.php">View User(s)</a>
                    
                    </div>
                </div>
            </li>
           


        

            <!-- Nav Item - Tables -->
            

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
            <div class="sidebar-card d-none d-lg-flex">
                <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="...">
                <p class="text-center mb-2"><strong>SEDGE</strong> is packed with premium features, components, and more!</p>
               
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>

                    <!-- Topbar Search -->
                    <div class="container-sedge">
                            
                            <div class="Image-Alsgro">
                            <img src="img\SouthSpring.png"  width="150" height="60"></img>
                            </div>
                        
                                             
                    </div>

                
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">         
                        
                     <!-- Nav Item - Alerts -->
                     <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_2.svg"
                                            alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_3.svg"
                                            alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>
                                
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #00171f ">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small" ><?php echo $Name; ?></span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item " data-toggle="modal" data-target=".bd-example-modal-lg2" data-controls-modal="myModal" data-backdrop="static" data-keyboard="false" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Change Password
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
               
                <!-- Begin Page Content -->
                <div class="container-fluid">

                  
            <div class="card-body">
         <!-- Page Heading -->
            
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3" style="background-color: #003459 ; color: #ffffff;">
                            <h6 class="m-0 font-weight-bold " style="color: #ffffff;">Admin</h6> 
                        </div>
                      
                        <div class="card-body">
                            <div class="table-responsive" style="color: #2F4F4F" >
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" >
                                    <thead>
                                        <tr style="background-color: #007ea7 ; color: #ffffff; font-size:13px;">
                                            <th scope="col" style="color: #ffffff">Employee ID</th>
                                            <th scope="col" style="color: #ffffff">Name</th>
                                            <th scope="col" style="color: #ffffff">Username</th>
                                            <th scope="col" style="color: #ffffff">Department</th>
                                            <th scope="col" style="color: #ffffff">Position</th>
                                            <th scope="col" style="color: #ffffff">Status</th>
                                            <th scope="col" style="color: #ffffff">Access</th>
                                            <th scope="col" style="width: 13%; color: #ffffff">Tools</th>
                                            
                                            <th scope="col" hidden>Tools</th>
                                    
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr style="background-color: #007ea7; font-size:13px; color: #ffffff">
                                            <th scope="col" style="color: #ffffff">Employee ID</th>
                                            <th scope="col" style="color: #ffffff">Name</th>
                                            <th scope="col" style="color: #ffffff">Username</th>
                                            <th scope="col" style="color: #ffffff">Department</th>
                                            <th scope="col" style="color: #ffffff">Position</th>
                                            <th scope="col" style="color: #ffffff">Status</th>
                                            <th scope="col" style="color: #ffffff">Access</th>
                                            <th scope="col" style="color: #ffffff">Tools</th>
                                            <th scope="col" hidden style="color: #ffffff">Tools</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php
                                      $sales_query = "SELECT * from tbl_authorization ";
                                      $sales_result = mysqli_query($connection, $sales_query);
                                    if (mysqli_num_rows($sales_result) > 0) {
                                       while ($row = mysqli_fetch_assoc($sales_result)) {
                                    ?>
                                        <tr >
                                           
                                            <td class="Employee_Id" name="Employee_Id" style=" font-size: 13px; color: #2F4F4F"><?=$row['Employee_Id']?></td>
                                            <td class="Fullname" name="Fullname" style=" font-size: 13px; color: #2F4F4F"><?=$row['Fullname']?></td>
                                            <td class="Username" name="Username" style=" font-size: 13px; color: #2F4F4F"><?=$row['Username']?></td>
                                            <td class="Department" name="Department" style=" font-size: 13px; color: #2F4F4F"><?=$row['Department']?></td>
                                            <td class="Position" name="Position" style=" font-size: 13px; color: #2F4F4F"><?=$row['Position']?></td>
                                            <td class="AS_Status" name="AS_Status" style=" font-size: 13px; color: #2F4F4F"><?=$row['AS_Status']?></td>
                                            <td class="Access" name="Access" style=" font-size: 13px;  color: #2F4F4F"><?=$row['Access']?></td>
                                            <td class="pword" name="pword" style=" font-size: 13px" hidden><?=$row['AS_Password']?></td>
                                            <td>  
                                                <script>
                                                    let tableRowElement;
                                                    function toggleModal(element) {
                                                    tableRowElement = element.parentElement.parentElement;
                                                    const EmpID = tableRowElement.getElementsByClassName('Employee_Id')[0].innerHTML;
                                                    document.getElementById('Employee_Id').value = EmpID;
                                                    const name = tableRowElement.getElementsByClassName('Fullname')[0].innerHTML;
                                                    document.getElementById('Fullname').value = name;
                                                    const EmpID1 = tableRowElement.getElementsByClassName('Employee_Id')[0].innerHTML;
                                                    document.getElementById('Employee_Id1').value = EmpID1;
                                                    const name1 = tableRowElement.getElementsByClassName('Fullname')[0].innerHTML;
                                                    document.getElementById('Fullname1').value = name1;
                                                    const Username = tableRowElement.getElementsByClassName('Username')[0].innerHTML;
                                                    document.getElementById('Username').value = Username;
                                                    const Department = tableRowElement.getElementsByClassName('Department')[0].innerHTML;
                                                    document.getElementById('Department').value = Department;
                                                    const Position = tableRowElement.getElementsByClassName('Position')[0].innerHTML;
                                                    document.getElementById('Position').value = Position;
                                                    const Status = tableRowElement.getElementsByClassName('AS_Status')[0].innerHTML;
                                                    document.getElementById('AS_Status').value = Status;
                                                    const Access = tableRowElement.getElementsByClassName('Access')[0].innerHTML;
                                                    document.getElementById('Access').value = Access;
                                                    const Status1 = tableRowElement.getElementsByClassName('AS_Status')[0].innerHTML;
                                                    document.getElementById('AS_Status1').value = Status1;
                                                    const Access1 = tableRowElement.getElementsByClassName('Access')[0].innerHTML;
                                                    document.getElementById('Access1').value = Access1;
                                                    const pword = tableRowElement.getElementsByClassName('pword')[0].innerHTML;
                                                    document.getElementById('pword').value = pword;
                                                }     
                                                </script>                                           
                                               <a href="#" onclick="toggleModal(this, 1)" data-toggle="modal" data-target=".bd-example-modal-lg"style=" font-size: 12px" >Edit</a> <a> ||</a> <a href="#" onclick="toggleModal(this, 1)" data-toggle="modal" data-target=".bd-example-modal-lg1" style=" font-size: 12px"><i class='fas fa-wrench' style='font-size:12px;color:	#0000FF'></i> Manage</a> 
                                               
                                            </td>
                                            
                                        </tr>
                                        <?php
                                        }
                                    }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
       
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Sedge 2022</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->
       </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

<form method="Post" action="Edit_Access.php">
<!-- Edit Modal -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-xl" >
    <div class="modal-content" >
      <div class="modal-header" >
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
                            <div class="modal-body">
                                    <table  class="table-sm" id="dataTable"  cellspacing="0" >
                                    <thead>
                                        <tr style="background-color: #007ea7; color: #ffffff; font-size: 13px; border: 2px solid #ffffff">
                                            <th style="width: 15%; color: #ffffff; border: 2px ridge #ffffff">Employee ID</th>
                                            <th style="color: #ffffff; border: 2px ridge #ffffff">Name</th>
                                            <th style="color: #ffffff; border: 2px ridge #ffffff">Department</th>
                                            <th style="color: #ffffff; border: 2px ridge #ffffff">Position</th>
                                            <th style="color: #ffffff; border: 2px ridge #ffffff">Status</th>
                                            <th style="color: #ffffff; border: 2px ridge #ffffff">Access</th>
                                           
                                    
                                        </tr>
                                    </thead>
                                    <tbody>
                                    
                                        <tr>
                                            <td><input type="text"  class="form-control" id="Employee_Id"  name="Employee_Id" readonly style="padding-left: 5px; font-size: 13px; color: #00171f"></input></td>
                                            <td><input type="text" class="form-control" id="Fullname" name="Fullname" readonly style="padding-left: 5px; font-size: 13px; color: #00171f"></td>
                                            <td><select name="Department"  class="form-control"  id="Department"class="Sedge_Select" style="padding-left: 5px; font-size: 13px; color: #00171f">
                                            <option  value="" ></option>    
                                            <option value="MIS" > MIS Department </option>
                                                <option value="Admin"> Administrative Officer </option>
                                                <option value="Marketing" > Marketing Department &nbsp;&nbsp;</option>
                                                <option value="Finance"> Finance Department </option>
                                                <option value="Operation"> Operation Department </option>
                                                </select></td>
                                            <td><select class="form-control" id="Position"  name="Position" required style="padding-left: 5px; font-size: 13px; color: #00171f ">
                                            <option  value="" ></option> 
                                            <option value="ComplianceOfficer"> Compliance Officer </option>
                                            <option value="Admin"> Administrative Officer </option>
                                            <option value="MIS"> MIS </option> 
                                            <option value="MarketingHead"> Marketing Head </option>
                                            <option value="FinancialHead"> Financial Head </option>
                                            <option value="OperationManager"> Operation Manager </option>
                                            <option value="AccountingAssistant"> Accounting Assistant </option>
                                            <option value="CCCoordinator"> C&C Coordinator </option>
                                            <option value="SalesCoordinator"> Sales Coordinator </option>
                                            <option value="AdminOfficer"> Admin Officer </option>
                                            <option value="DocumentAnalyst"> Document Analyst </option>
                                            <option value="CivilEngineer"> Civil Engineer </option>

                                            <option value="GeodeticEngineer"> Geodetic Engineer </option>
                                            <option value="EngraverCrew"> Engraver Crew </option>
                                            <option value="VaultFabricator"> Vault Fabricator </option>
                                            <option value="FormanCrew"> Forman Crew </option>
                                            <option value="PumblerCrew"> Pumbler Crew </option>
                                            <option value="landscaperCrew"> landscaper Crew </option>
                                            <option value="UtilityCrew"> Utility Crew </option>

                                <option value="HeavyEquipmentOperator"> Heavy Equipment Operator &nbsp;&nbsp; </option>
                                <option value="TractorDriver"> Tractor Driver </option>
                                <option value="LawnMowerOperator"> Lawn Mower Operator </option>
                                <option value="InternetCrew"> Internet Crew </option>
                               
                                                </select></td>
                                             <td><select class="form-control" id="AS_Status"  name="AS_Status" style="padding-left: 5px; font-size: 13px; color: #00171f ;" required>
                                             <option  value="" ></option>    
                                             <option  value="Activated">Activated</option>
                                                <option value="Deactivated">Deactivated &nbsp;&nbsp;</option>
                                                </select></td>
                                            <td><select  class="form-control" id="Access" name="Access" style="padding-left: 5px; font-size: 13px; color: #00171f ;" required>
                                                 <option  value="" ></option>     
                                                <option value="Admin">Admin</option>
                                                <option value="User">User</option>
                                                </select></td>
                                            
                                        </tr>
                                       
                                    </tbody>
                                    </table>  
                                   
                                                             
                             </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" style="font-size: 13px;">Close</button>
        <button type="submit" class="btn btn-primary" name="save" style="font-size: 13px;">Save changes</button>
      </div>
    </div>
  </div>
</div>
</form>
<form method="Post" action="Edit_Access.php">
<!-- Manage -->
<div class="modal fade bd-example-modal-lg1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-xl" style="width: 40%; float: center;" center>
    <div class="modal-content" >
      <div class="modal-header" style="background-color: #003459">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: #ffffff">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
                            <div class="modal-body">
                                    <table  class="table-sm" id="dataTable"  cellspacing="0">
                                    
                                    <tbody>
                                    
                                        <tr >
                                            <td style="color: #00171f ">Employee ID<input type="text"  class="form-control" id="Employee_Id1"  name="Employee_Id1"  style="padding-left: 5px; font-size: 14px; color: #00171f "></input></td>
                                            <td style="color: #00171f "> Name<input type="text" class="form-control" id="Fullname1" name="Fullname1" style="padding-left: 5px; font-size: 14px;color: #00171f "></td>
                                            </tr>
                                            <tr>
                                            <td style="color: #00171f "> <div style="">Username<input type="text" class="form-control" id="Username" name="Username"  style="padding-left: 5px; font-size: 14px; color: #00171f "></div></td>
                                            <td style="color: #00171f "> <p style="margin-top: 20px;"> Password </p> <div style="position: absolute; margin-top: -12px; width: 46%" ><input type="password" class="form-control form-control-password" id="pword" name="pword" style="padding-left: 5px; font-size: 14px; color: #00171f; width: 92%"></input></div>
                                           <div style="position: relative"> <input type="checkbox" onclick="myFunction()" style="float: left; small ; margin-top: 22px; "> </div> </td>
                                            </tr>
                                            <tr>
                                            <td style="color: #00171f "> Status<select class="form-control" id="AS_Status1"  name="AS_Status1" style="padding-left: 5px; font-size: 14px; color: #00171f " required>
                                                <option  value="" ></option>   
                                                <option  value="Activated">Activated</option>
                                                <option value="Deactivated">Deactivated &nbsp;&nbsp;</option>
                                                </select></td>
                                            <td style="color: #00171f ">Access<select  class="form-control" id="Access1" name="Access1" style="padding-left: 5px; font-size: 14px; color: #00171f " required>
                                               
                                                <option  value="" ></option>   
                                                <option value="Admin">Admin</option>
                                                <option value="User">User</option>
                                                </select></td>
                                            
                                        </tr>
                                       
                                    </tbody>
                                    </table>  
                                   
                                                             
                             </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="manage">Save changes</button>
      </div>
    </div>
  </div>
</div>
</form>

<!-- Change Password -->
<div class="modal fade bd-example-modal-lg2" tabindex="-1" role="dialog" aria-hidden="true" id="myModal">
  <div class="modal-dialog modal-xl" style="width: 40%; float: center;"  >
    <div class="modal-content" >
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
                                    
                       
                            <div class="modal-body">
                           

                           
                        <!-- Nested Row within Card Body -->
                        <div style="width: 50%; float: left;">         
                               <div class="col-lg-6">                             
                                    <div class="text-center">
                                       <div style="padding-bottom: 50px;"> <img src="\AccountingSoftwareProposal\startbootstrap-sb-admin-2-gh-pages\startbootstrap-sb-admin-2-gh-pages\img\Red & Blue Modern Lock Shield Logo Template (2).png" style="height:100%; margin-bottom: -40px"></div>
                                   
                                    </div>
                                </div>
                            </div>
                                              
					                      
                            <div style="width: 50%; float: right; border: solid 1px; padding-left: 20px;padding-right: 20px" class="login__field">                               
                                   
                                     <!-- Username Password input -->
                                    <form class="user" method="Post" action=""> 
                                    <div><?php 
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
                                        
                                        } else{
                                        
                                        $message = "Password is not correct";
                                            }
                                        }
                                    }
                                    if(isset($message)) { echo $message; } ?></div>
                                              
                                                <div class="login__field" >
					                                <i class="login__icon fas fa-user"></i>
					                                <input class="login__input" id="exampleInputEmail" name="exampleInputEmail" placeholder="Username / Email" style=" font-size: 12px; font-weight: normal; width: 100%" readonly value="<?php echo $loggedin_session; ?>"> 
				                                </div>
				                                <div class="login__field">
					                                <i class="login__icon fas fa-lock"></i>
					                                <input type="password" class="login__input" id="CurrentPassword" placeholder="Password" Name="CurrentPassword" style=" font-size: 12px; font-weight: normal; width: 100%" required >
				                                </div>
				                                <div class="login__field">
					                                <i class="login__icon fas fa-lock"></i>
					                                <input type="password" class="login__input" id="newPassword" placeholder="New Password" Name="newPassword" style=" font-size: 12px; font-weight: normal; width: 100%" required>
				                                </div>
                                                <center>
				                                <div class="login__field" >
                                                 <button type="submit" name= "Changepass" class="btn btn-primary" style="font-size: 12px;" id="myInput" data-toggle=" myModal">Save changes</button>
                                                </div>
                                                </center>
                                    </form>
                                </div>
                            </div>                         
                           
      
    </div>
  </div>
</div>






    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

   <script>function myFunction() {
  var x = document.getElementById("pword");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}</script>
<script>function changepass() {
  var x = document.getElementById("pword1");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}</script>
<script>
        $('#exampleModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var recipient = button.data('whatever') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        modal.find('.modal-title').text('New message to ' + recipient)
        modal.find('.modal-body input').val(recipient)
        })


        let tableRowElement;
        function toggleModal(element) {
            tableRowElement = element.parentElement.parentElement;
            const EmpID = tableRowElement.getElementsByClassName('Employee_Id')[0].innerHTML;
            document.getElementById('Employee_Id').value = EmpID;
            const name = tableRowElement.getElementsByClassName('Fullname')[0].innerHTML;
            document.getElementById('Fullname').value = name;
            const Username = tableRowElement.getElementsByClassName('Username')[0].innerHTML;
            document.getElementById('Username').value = Username;
            const Department = tableRowElement.getElementsByClassName('Department')[0].innerHTML;
            document.getElementById('Department').value = Department;
            const Position = tableRowElement.getElementsByClassName('Position')[0].innerHTML;
            document.getElementById('Position').value = Position;
            const Status = tableRowElement.getElementsByClassName('AS_Status')[0].innerHTML;
            document.getElementById('AS_Status').value = Status;
            const Access = tableRowElement.getElementsByClassName('Access')[0].innerHTML;
            document.getElementById('Access').value = Access;

        

        openModal();
        }
        
    </script>

<script>
$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})
</script>
</body>

</html>


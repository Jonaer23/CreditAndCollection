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
    <link
     rel="stylesheet"
     href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"
   />
    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="css/Sedge-Dashboard.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
    <style>
       div.employeeData{
    width: 29%;
    float: left;
    padding-right:20px;
 }

 div.uploadPhoto{
     width: 13%;
     float: left;
   
     text-align: left;
 }
 div.ChildrenTable{
     width: 100%;
     float: left;
     margin-right: 50px;
 }
 p.category{
   Font-size: 15px;
   padding-top: -10;
 }
 div.container-sedge{
    width:100%;
 }

 img.Image-alignment1{
    height: 60px;
    width: 100px;

 }
 div.viewRecords{
    margin: 30px;
 }
 div.viewRecords1{
  width:85%;

 }

 input.viewRecord{
    border: none;
    border-bottom: 1px solid gray;
    height: 20px;
    border-radius: 0px;
    width:100%;
 }
    .Sedge_Date {
              width: 100%;
              padding: 12px;
              margin: 5px 0;
              display: inline-block;
              border: 1px solid #ccc;
              border-radius: 15px;
              box-sizing: border-box;
    }
       .Sedge_Input {
              width: 100%;
              padding: 6px;
              padding-left: 15px;
             
              display: inline-block;
              border: 1px solid #ccc;
              border-radius: 5px;
              box-sizing: border-box;
           
              
    }

     .Sedge_Input1 {
              width: 100%;
              padding: 6px;
              padding-left: 15px;
             
              display: inline-block;
              border: 1px solid #ccc;
              border-radius: 5px;
              box-sizing: border-box;
           
              
    }
     .Sedge_Select {
              width: 100%;
              padding: 6px;
              padding-left: 15px;
              margin: 0px;
              display: inline-block;
              border: 1px solid #ccc;
              border-radius: 5px;
              box-sizing: border-box;
              color: #808080;
           
              
    }
     .Sedge_Date {
              width: 100%;
              padding: 5px;
              padding-left: 15px;
              margin: 0px;
              display: inline-block;
              border: 1px solid #ccc;
              border-radius: 5px;
              box-sizing: border-box;
           
              
    }

    .Sedge_p {
                font-size : 15px;
                color: #4a4949;  
    }
    img.profilepic{
      border:1px solid #ddd;
      border-radius:8px;
      margin-bottom: 10px;
    }
 
    .Sedge_column {
        float: left;
        width: 25%;
        padding: 10px;
        color: #4a4949;
      
        }
        .Sedge_column1 {
        float: left;
        width: 25%;
        padding: 10px;
       color: #4a4949;
        }
         .Sedge_column2 {
        float: left;
        width: 25%;
        padding: 10px;
       color: #4a4949;
        }

        .Sedge_1column {
        float: left;
        width: 100%;
        color: #4a4949;

        }
         .Sedge_Button {
        float: right;
        width: 100px;
        margin-right: 100px;

        }
        .Sedge_modal_div1 {
        float: left;
        width: 75%;
        color: #4a4949;
        padding: 15px;
        }
        .Sedge_modal_div2 {
        float: left;
        width: 25%;
        color: #4a4949;
        padding: 15px;
        align: center;
        }
 

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
     select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
 }
 input[type=file]{
 width:100%;
 font-size:13px;
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

 .Sedge_Button {
  width: 100px;
  background-color: #4169E1;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
    margin-right: 10px;
  
 }
 .Sedge_Button:hover {
  background-color: #B0C4DE;
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
 .Button-ChildrensADD {
   float: right;
  
  
   
 }
 .Button-ChildrensADD:hover {
  color: #0000FF;

   
   
 }
 input.Javaclass {
  
    width:100%;
    height: 30px;
    margin-top: -0px;
   
   
 }
 .HEader {
   float: center;
   
 }
 div.Autorow{
    float:left;
    width:18%;
 }
 div.Autorow1{
    float:left;
    width:10%;
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
                <a><div class="SedgeFont" ></div></a>
            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>HRIS</span></a>                 
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
                    <i class="fas fa-fw fas fa-users"></i>
                    <span>Employee</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="hris.php">Add Employee(s)</a>
                        <a class="collapse-item" href="EmployeeRecord.php">Employee record(s)</a>                   
                    </div>
                </div>
            </li>
           


            <!-- Nav Item - Charts -->
        
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
                    <form
                     class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">      
                     <img src="img\SouthSpring.png"  width="150" height="60"></img>
                    </form>
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
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $Name; ?></span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                          
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                               
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target=".bd-example-modal-lg2">
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
                    <!-- Page Heading -->
                     <form method="Post" Action="HrisInsertTable.php" enctype="multipart/form-data"> 
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                           <h6 class="m-0 font-weight-bold text-primary"> DATA SHEET</h6>                       
                            <div class="SedgeInput Sedge_column1" >
                                <p class="Sedge_p" >Position
                               <select class="form-control" Id="Position" name="Position" style="background-color: #ebf5ff;color: DarkSlateGray; font-size: 14px;">
                                <option value="ComplianceOfficer">Compliance Officer</option>
                                <option value="Admin">Administrative Officer </option>
                                <option value="MIS">MIS</option> 
                                <option value="MarketingHead">Marketing Head</option>
                                <option value="FinancialHead">Financial Head</option>
                                <option value="OperationManager">Operation Manager</option>
                                <option value="AccountingAssistant">Accounting Assistant</option>
                                <option value="CCCoordinator">C&C Coordinator</option>
                                <option value="SalesCoordinator">Sales Coordinator</option>
                                <option value="AdminOfficer">Admin Officer</option>
                                <option value="DocumentAnalyst">Document Analyst</option>
                                <option value="CivilEngineer">Civil Engineer</option>

                                <option value="GeodeticEngineer">Geodetic Engineer</option>
                                <option value="EngraverCrew">Engraver Crew</option>
                                <option value="VaultFabricator">Vault Fabricator</option>
                                <option value="FormanCrew">Forman Crew</option>
                                <option value="PumblerCrew">Pumbler Crew</option>
                                <option value="landscaperCrew">landscaper Crew</option>
                                <option value="UtilityCrew">Utility Crew</option>

                                <option value="HeavyEquipmentOperator">Heavy Equipment Operator</option>
                                <option value="TractorDriver">Tractor Driver</option>
                                <option value="LawnMowerOperator">Lawn Mower Operator</option>
                                <option value="InternetCrew">Internet Crew</option>
                               
                               </select>
                            </div>       
                            <div class="SedgeInput Sedge_column1" >
                             <p class="Sedge_p"> Employee ID
                             <input placeholder="Text"class="form-control" Id="Employee_Id" name="Employee_Id" style="margin-top: 8px; background-color: #ebf5ff;color: DarkSlateGray; font-size: 14px;" >
                            </div>
                            <div class="SedgeInput Sedge_column1" >
                             <p class="Sedge_p"> Department
                              <select name="Department" id="Department"class="form-control" style="background-color: #ebf5ff;color: DarkSlateGray; font-size: 14px;">
                               <option value="MIS">MIS Department</option>
                               <option value="Admin">Administrative Officer</option>
                                 <option value="Marketing">Marketing Department</option>
                                   <option value="Finance">Finance Department</option>
                                     <option value="Operation">Operation Department</option>
                              </select>
                            </div>
                            <div class="SedgeInput Sedge_column1" >
                             <p class="Sedge_p"> Date Hired
                             <input type="Date" class="form-control" id="Date_Hired" name="Date_Hired" class="form-control" style="margin-top: 8px;background-color: #ebf5ff;color: DarkSlateGray; font-size: 14px;">
                            </div>                      
                                        <div class="SedgeInput Sedge_column" >

                                          <p class="Sedge_p"> First Name
                                       
                                         <input placeholder="Text"class="form-control" id="Firstname" name="Firstname" required style="margin-top: 8px; background-color: #ebf5ff;color: DarkSlateGray; font-size: 14px;"><br>
                                       
                                         
                                         <br>


                                        </div>

                                        <div class="SedgeInput Sedge_column" >

                                          <p class="Sedge_p"> Last Name
                                        
                                         <input placeholder="Text"class="form-control" id="Lastname" name="Lastname" required style="margin-top: 8px; background-color: #ebf5ff;color: DarkSlateGray; font-size: 14px;"><br>

                                        

                                        </div>

                                        <div class="SedgeInput Sedge_column" >

                                          <p class="Sedge_p"> Middle Name
                                         
                                         <input placeholder="Text"class="form-control" id="Middlename" name="Middlename" required style="margin-top: 8px; background-color: #ebf5ff;color: DarkSlateGray; font-size: 14px;"> <br>
                                        </div>

                                        <div class="SedgeInput Sedge_column" >

                                          <p class="Sedge_p"> Suffix Name
                                         
                                         <input placeholder="Text"class="form-control" id="Suffixname" name="Suffixname" style="margin-top: 8px; background-color: #ebf5ff;color: DarkSlateGray; font-size: 14px;">
                                        </div>

                                          
                                 
                            <div class="SedgeInput Sedge_1column" >       
                             &nbsp;&nbsp;&nbsp;Present Address 
                            </div>

                            <div class="SedgeInput Sedge_column" >
                             <input placeholder="Rm/Flr/unit#/Bldg"class="form-control" id="HouseNumber" name="HouseNumber" style="background-color: #ebf5ff;color: DarkSlateGray; font-size: 14px;">
                            </div>
                            
                            <div class="SedgeInput Sedge_column" >
                             <input placeholder="House Lot & Blk No."class="form-control" id="BL" name="BL" style="background-color: #ebf5ff;color: DarkSlateGray; font-size: 14px;">
                            </div>

                            <div class="SedgeInput Sedge_column" >
                             <input placeholder="Street"class="form-control" id="ST" name="ST" style="background-color: #ebf5ff;color: DarkSlateGray; font-size: 14px;">
                            </div>

                            <div class="SedgeInput Sedge_column" >
                             <input placeholder="Subdivision"class="form-control" id="Subdivision" name="Subdivision" style="background-color: #ebf5ff;color: DarkSlateGray; font-size: 14px;">
                            </div>

                            <div class="SedgeInput Sedge_column" >
                             <input placeholder="Brgy / District"class="form-control" id="District" name="District" style="background-color: #ebf5ff;color: DarkSlateGray; font-size: 14px;">
                            </div>
                            <div class="SedgeInput Sedge_column" >
                             <input placeholder="City"class="form-control" id="City" name="City" style="background-color: #ebf5ff;color: DarkSlateGray; font-size: 14px;">
                            </div>

                            <div class="SedgeInput Sedge_column" >
                             <input placeholder="Province"class="form-control" id="Province" name="Province" style="background-color: #ebf5ff;color: DarkSlateGray; font-size: 14px;">
                            </div>

                            <div class="SedgeInput Sedge_column" >
                            
                             <select class="form-control" id="Country" name="Country" style="margin-top:-1px; background-color: #ebf5ff;color: DarkSlateGray; font-size: 14px;">
                                <option value="">Select Country</option>
                                <option value="Nigeria">Nigeria</option>
                                <option value="Afghanistan">Afghanistan</option>
                                <option value="Ãƒâ€¦land Islands">Ãƒâ€¦land Islands</option>
                                <option value="Albania">Albania</option>
                                <option value="Algeria">Algeria</option>
                                <option value="American Samoa">American Samoa</option>
                                <option value="Andorra">Andorra</option>
                                <option value="Angola">Angola</option>
                                <option value="Anguilla">Anguilla</option>
                                <option value="Antarctica">Antarctica</option>
                                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                <option value="Argentina">Argentina</option>
                                <option value="Armenia">Armenia</option>
                                <option value="Aruba">Aruba</option>
                                <option value="Australia">Australia</option>
                                <option value="Austria">Austria</option>
                                <option value="Azerbaijan">Azerbaijan</option>
                                <option value="Bahamas">Bahamas</option>
                                <option value="Bahrain">Bahrain</option>
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="Barbados">Barbados</option>
                                <option value="Belarus">Belarus</option>
                                <option value="Belgium">Belgium</option>
                                <option value="Belize">Belize</option>
                                <option value="Benin">Benin</option>
                                <option value="Bermuda">Bermuda</option>
                                <option value="Bhutan">Bhutan</option>
                                <option value="Bolivia">Bolivia</option>
                                <option value="Bonaire">Bonaire</option>
                                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                <option value="Botswana">Botswana</option>
                                <option value="Bouvet Island]">Bouvet Island</option>
                                <option value="Brazil">Brazil</option>
                                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                <option value="Brunei Darussalam">Brunei Darussalam</option>
                                <option value="Bulgaria">Bulgaria</option>
                                <option value="Burkina Faso">Burkina Faso</option>
<option value="Burundi">Burundi</option>
<option value="Cambodia">Cambodia</option>
<option value="Cameroon">Cameroon</option>
<option value="Canada">Canada</option>
<option value="Cape Verde">Cape Verde</option>
<option value="Cayman Islands">Cayman Islands</option>
<option value="Central African Republic">Central African Republic</option>
<option value="Chad">Chad</option>
<option value="Chile">Chile</option>
<option value="China">China</option>
<option value="Christmas Island">Christmas Island</option>
<option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
<option value="Colombia">Colombia</option>
<option value="Comoros">Comoros</option>
<option value="Congo">Congo</option>
<option value="Congo, the Democratic Republic of the">"Congo, the Democratic Republic of the"</option>
<option value="Cook Islands">Cook Islands</option>
<option value="Costa Rica">Costa Rica</option>
<option value="CÃƒÂ´te d'Ivoire">CÃƒÂ´te d'Ivoire</option>
<option value="Croatia">Croatia</option>
<option value="Cuba">Cuba</option>
<option value="CuraÃƒÂ§ao">CuraÃƒÂ§ao</option>
<option value="Cyprus">Cyprus</option>
<option value="Czech Republic">Czech Republic</option>
<option value="Denmark">Denmark</option>
<option value="Djibouti">Djibouti</option>
<option value="Dominica">Dominica</option>
<option value="Dominican Republic">Dominican Republic</option>
<option value="Ecuador">Ecuador</option>
<option value="Egypt">Egypt</option>
<option value="El Salvador">El Salvador</option>
<option value="Equatorial Guinea">Equatorial Guinea</option>
<option value="Eritrea">Eritrea</option>
<option value="Estonia">Estonia</option>
<option value="Ethiopia">Ethiopia</option>
<option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
<option value="Faroe Islands">Faroe Islands</option>
<option value="Fiji">Fiji</option>
<option value="Finland">Finland</option>
<option value="France">France</option>
<option value="French Guiana">French Guiana</option>
<option value="French Polynesia">French Polynesia</option>
<option value="French Southern Territories">French Southern Territories</option>
<option value="Gabon">Gabon</option>
<option value="Gambia">Gambia</option>
<option value="Georgia">Georgia</option>
<option value="Germany">Germany</option>
<option value="Ghana">Ghana</option>
<option value="Gibraltar">Gibraltar</option>
<option value="Greece">Greece</option>
<option value="Greenland">Greenland</option>
<option value="Grenada">Grenada</option>
<option value="Guadeloupe">Guadeloupe</option>
<option value="Guam">Guam</option>
<option value="Guatemala">Guatemala</option>
<option value="Guernsey">Guernsey</option>
<option value="Guinea">Guinea</option>
<option value="Guinea-Bissau">Guinea-Bissau</option>
<option value="Guyana">Guyana</option>
<option value="Haiti">Haiti</option>
<option value="Heard Island and McDonald Islands">Heard Island and McDonald Islands</option>
<option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
<option value="Honduras">Honduras</option>
<option value="Hong Kong">Hong Kong</option>
<option value="Hungary">Hungary</option>
<option value="Iceland">Iceland</option>
<option value="India">India</option>
<option value="Indonesia">Indonesia</option>
<option value="Iran">"Iran, Islamic Republic of"</option>
<option value="Iraq">Iraq</option>
<option value="Ireland">Ireland</option>
<option value="Isle of Man">Isle of Man</option>
<option value="Israel">Israel</option>
<option value="Italy">Italy</option>
<option value="Jamaica">Jamaica</option>
<option value="Japan">Japan</option>
<option value="Jersey">Jersey</option>
<option value="Jordan">Jordan</option>
<option value="Kazakhstan">Kazakhstan</option>
<option value="Kenya">Kenya</option>
<option value="Kiribati">Kiribati</option>
<option value="Korea, Democratic People's Republic of">"Korea, Democratic People's Republic of"</option>
<option value="Korea">"Korea, Republic of"</option>
<option value="Kuwait">Kuwait</option>
<option value="Kyrgyzstan">yrgyzstan</option>
<option value="Lao People`s Democratic Republic">Lao People's Democratic Republic</option>
<option value="Latvia">Latvia</option>
<option value="Lebanon">Lebanon</option>
<option value="Lesotho">Lesotho</option>
<option value="Liberia">Liberia</option>
<option value="Libya">Libya</option>
<option value="Liechtenstein">Liechtenstein</option>
<option value="Lithuania">Lithuania</option>
<option value="Luxembourg">Luxembourg</option>
<option value="Macao">Macao</option>
<option value="Macedonia">"Macedonia, the Former Yugoslav Republic of"</option>
<option value="Madagascar">Madagascar</option>
<option value="Malawi">Malawi</option>
<option value="Malaysia">Malaysia</option>
<option value="Maldives">Maldives</option>
<option value="Mali">Mali</option>
<option value="Malta">Malta</option>
<option value="Marshall Islands">Marshall Islands</option>
<option value="Martinique">Martinique</option>
<option value="Mauritania">Mauritania</option>
<option value="Mauritius">Mauritius</option>
<option value="Mayotte">Mayotte</option>
<option value="Mexico">Mexico</option>
<option value="Micronesia, Federated States of">"Micronesia, Federated States of</option>
<option value="Moldova, Republic of">"Moldova, Republic of"</option>
<option value="Monaco">Monaco</option>
<option value="Mongolia">Mongolia</option>
<option value="Montenegro">Montenegro</option>
<option value="Montserrat">Montserrat</option>
<option value="Morocco">Morocco</option>
<option value="Mozambique">Mozambique</option>
<option value="Myanmar">Myanmar</option>
<option value="Namibia">Namibia</option>
<option value="Nauru">Nauru</option>
<option value="Nepal">Nepal</option>
<option value="Netherlands">Netherlands</option>
<option value="New Caledonia">New Caledonia</option>
<option value="New Zealand">New Zealand</option>
<option value="Nicaragua">Nicaragua</option>
<option value="Niger">Niger</option>
<option value="Niue">Niue</option>
<option value="Norfolk Island">Norfolk Island</option>
<option value="Northern Mariana Islands">Northern Mariana Islands</option>
<option value="Norway">Norway</option>
<option value="Oman">Oman</option>
<option value="Pakistan">Pakistan</option>
<option value="Palau">Palau</option>
<option value="Palestine, State of">"Palestine, State of"</option>
<option value="Panama">Panama</option>
<option value="Papua New Guinea">Papua New Guinea</option>
<option value="Paraguay">Paraguay</option>
<option value="Peru">Peru</option>
<option value="Philippines">Philippines</option>
<option value="Pitcairn">Pitcairn</option>
<option value="Poland">Poland</option>
<option value="Portugal">Portugal</option>
<option value="Puerto Rico">Puerto Rico</option>
<option value="Qatar">Qatar</option>
<option value="RÃƒÂ©union">RÃƒÂ©union</option>
<option value="Romania">Romania</option>
<option value="Russian Federation">Russian Federation</option>
<option value="Rwanda">Rwanda</option>
<option value="Saint BarthÃƒÂ©lemy">Saint BarthÃƒÂ©lemy</option>
<option value="Saint Helena, Ascension and Tristan da Cunha">"Saint Helena, Ascension and Tristan da Cunha"</option>
<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
<option value="Saint Lucia">Saint Lucia</option>
<option value="Saint Martin (French part)">Saint Martin (French part)</option>
<option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
<option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
<option value="Samoa">Samoa</option>
<option value="San Marino">San Marino</option>
<option value="Sao Tome and Principe">Sao Tome and Principe</option>
<option value="Saudi Arabia">Saudi Arabia</option>
<option value="Senegal">Senegal</option>
<option value="Serbia">Serbia</option>
<option value="Seychelles">Seychelles</option>
<option value="Sierra Leone">Sierra Leone</option>
<option value="Singapore">Singapore</option>
<option value="Sint Maarten (Dutch part)">Sint Maarten (Dutch part)</option>
<option value="Slovakia">Slovakia</option>
<option value="Slovenia">Slovenia</option>
<option value="Solomon Islands">Solomon Islands</option>
<option value="Somalia">Somalia</option>
<option value="South Africa">South Africa</option>
<option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
<option value="South Sudan">South Sudan</option>
<option value="Spain">Spain</option>
<option value="Sri Lanka">Sri Lanka</option>
<option value="Sudan">Sudan</option>
<option value="Suriname">Suriname</option>
<option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
<option value="Swaziland">Swaziland</option>
<option value="Sweden">Sweden</option>
<option value="Switzerland">Switzerland</option>
<option value="Syrian Arab Republic">Syrian Arab Republic</option>
<option value="Taiwan, Province of China">"Taiwan, Province of China"</option>
<option value="Tajikistan">Tajikistan</option>
<option value="Tanzania, United Republic of">"Tanzania, United Republic of"</option>
<option value="Thailand">Thailand</option>
<option value="Timor-Leste">Timor-Leste</option>
<option value="Togo">Togo</option>
<option value="Tokelau">Tokelau</option>
<option value="Tonga">Tonga</option>
<option value="Trinidad and Tobago">Trinidad and Tobago</option>
<option value="Tunisia">Tunisia</option>
<option value="Turkey">Turkey</option>
<option value="Turkmenistan">Turkmenistan</option>
<option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
<option value="Tuvalu">Tuvalu</option>
<option value="Uganda">Uganda</option>
<option value="Ukraine">Ukraine</option>
<option value="United Arab Emirates">United Arab Emirates</option>
<option value="United Kingdom">United Kingdom</option>
<option value="United States">United States</option>
<option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
<option value="Uruguay">Uruguay</option>
<option value="Uzbekistan">Uzbekistan</option>
<option value="Vanuatu">Vanuatu</option>
<option value="Venezuela, Bolivarian Republic">"Venezuela, Bolivarian Republic of"</option>
<option value="['Viet Nam','VN']">Viet Nam</option>
<option value="Virgin Islands, British">"Virgin Islands, British"</option>
<option value="Virgin Islands, US">"Virgin Islands, U.S."</option>
<option value="Wallis and Futuna">Wallis and Futuna</option>
<option value="Western Sahara">Western Sahara</option>
<option value="Yemen">Yemen</option>
<option value="Zambia">Zambia</option>
<option value="Zimbabwe">Zimbabwe</option>
</select>
                            </div>

                            <div class="SedgeInput Sedge_column" >
                             <input placeholder="Zipcode"class="form-control" id="Zipcode" name="Zipcode"  onkeypress="return onlyNumberKey(event)" style="background-color: #ebf5ff;color: DarkSlateGray; font-size: 14px;">
                            </div>
                             
                            
                                <div class="SedgeInput Sedge_1column" >       
                                 &nbsp;&nbsp; Permanent Address </div><div class="SedgeInput Sedge_1column"  style="font-size: 10px; margin-left: 20px;">   <input type="checkbox" id="same" name="same" onchange="addressFunction()" style="width:20px;"> <label for="same"> Same as present address</label>
                            
                                </div>
                           
                                                    <div class="SedgeInput Sedge_column" >
                                                     <input placeholder="Rm/Flr/unit#/Bldg"class="form-control" id="PA_HouseNumber" name="PA_HouseNumber" style="background-color: #ebf5ff;color: DarkSlateGray; font-size: 14px;">
                                                    </div>
                            
                                                    <div class="SedgeInput Sedge_column" >
                                                     <input placeholder="House Lot & Blk No."class="form-control" id="PA_BL" name="PA_BL" style="background-color: #ebf5ff;color: DarkSlateGray; font-size: 14px;">
                                                    </div>

                                                    <div class="SedgeInput Sedge_column" >
                                                     <input placeholder="Street"class="form-control" id="PA_St" name="PA_St" style="background-color: #ebf5ff;color: DarkSlateGray; font-size: 14px;">
                                                    </div>

                                                   <div class="SedgeInput Sedge_column" >
                           
                                                    <input placeholder="Subdivision"class="form-control" id="PA_Subdivision" name="PA_Subdivision" style="background-color: #ebf5ff;color: DarkSlateGray; font-size: 14px;">
                            
                                                    </div>

                                                     <div class="SedgeInput Sedge_column" >
                           
                                                    <input placeholder="Brgy / District"class="form-control" id="PA_District" name="PA_District" style="background-color: #ebf5ff;color: DarkSlateGray; font-size: 14px;">
                            
                                                    </div>

                                                     <div class="SedgeInput Sedge_column" >
                           
                                                    <input placeholder="City"class="form-control" id="PA_City" name="PA_City" style="background-color: #ebf5ff;color: DarkSlateGray; font-size: 14px;">
                            
                                                    </div>

                                                     <div class="SedgeInput Sedge_column" >
                           
                                                    <input placeholder="Province"class="form-control" id="PA_Province" name="PA_Province" style="background-color: #ebf5ff;color: DarkSlateGray; font-size: 14px;">
                            
                                                    </div>

                                                     <div class="SedgeInput Sedge_column" >
                           
                                                    <select class="form-control" id="PA_Country" name="PA_Country" style="margin-top:-1px; background-color: #ebf5ff;color: DarkSlateGray; font-size: 14px;">
                                <option value="">Select Country</option>
                                <option value="">Select Country</option>
                                <option value="Nigeria">Nigeria</option>
                                <option value="Afghanistan">Afghanistan</option>
                                <option value="Ãƒâ€¦land Islands">Ãƒâ€¦land Islands</option>
                                <option value="Albania">Albania</option>
                                <option value="Algeria">Algeria</option>
                                <option value="American Samoa">American Samoa</option>
                                <option value="Andorra">Andorra</option>
                                <option value="Angola">Angola</option>
                                <option value="Anguilla">Anguilla</option>
                                <option value="Antarctica">Antarctica</option>
                                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                <option value="Argentina">Argentina</option>
                                <option value="Armenia">Armenia</option>
                                <option value="Aruba">Aruba</option>
                                <option value="Australia">Australia</option>
                                <option value="Austria">Austria</option>
                                <option value="Azerbaijan">Azerbaijan</option>
                                <option value="Bahamas">Bahamas</option>
                                <option value="Bahrain">Bahrain</option>
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="Barbados">Barbados</option>
                                <option value="Belarus">Belarus</option>
                                <option value="Belgium">Belgium</option>
                                <option value="Belize">Belize</option>
                                <option value="Benin">Benin</option>
                                <option value="Bermuda">Bermuda</option>
                                <option value="Bhutan">Bhutan</option>
                                <option value="Bolivia">Bolivia</option>
                                <option value="Bonaire">Bonaire</option>
                                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                <option value="Botswana">Botswana</option>
                                <option value="Bouvet Island]">Bouvet Island</option>
                                <option value="Brazil">Brazil</option>
                                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                <option value="Brunei Darussalam">Brunei Darussalam</option>
                                <option value="Bulgaria">Bulgaria</option>
                                <option value="Burkina Faso">Burkina Faso</option>
<option value="Burundi">Burundi</option>
<option value="Cambodia">Cambodia</option>
<option value="Cameroon">Cameroon</option>
<option value="Canada">Canada</option>
<option value="Cape Verde">Cape Verde</option>
<option value="Cayman Islands">Cayman Islands</option>
<option value="Central African Republic">Central African Republic</option>
<option value="Chad">Chad</option>
<option value="Chile">Chile</option>
<option value="China">China</option>
<option value="Christmas Island">Christmas Island</option>
<option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
<option value="Colombia">Colombia</option>
<option value="Comoros">Comoros</option>
<option value="Congo">Congo</option>
<option value="Congo, the Democratic Republic of the">"Congo, the Democratic Republic of the"</option>
<option value="Cook Islands">Cook Islands</option>
<option value="Costa Rica">Costa Rica</option>
<option value="CÃƒÂ´te d'Ivoire">CÃƒÂ´te d'Ivoire</option>
<option value="Croatia">Croatia</option>
<option value="Cuba">Cuba</option>
<option value="CuraÃƒÂ§ao">CuraÃƒÂ§ao</option>
<option value="Cyprus">Cyprus</option>
<option value="Czech Republic">Czech Republic</option>
<option value="Denmark">Denmark</option>
<option value="Djibouti">Djibouti</option>
<option value="Dominica">Dominica</option>
<option value="Dominican Republic">Dominican Republic</option>
<option value="Ecuador">Ecuador</option>
<option value="Egypt">Egypt</option>
<option value="El Salvador">El Salvador</option>
<option value="Equatorial Guinea">Equatorial Guinea</option>
<option value="Eritrea">Eritrea</option>
<option value="Estonia">Estonia</option>
<option value="Ethiopia">Ethiopia</option>
<option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
<option value="Faroe Islands">Faroe Islands</option>
<option value="Fiji">Fiji</option>
<option value="Finland">Finland</option>
<option value="France">France</option>
<option value="French Guiana">French Guiana</option>
<option value="French Polynesia">French Polynesia</option>
<option value="French Southern Territories">French Southern Territories</option>
<option value="Gabon">Gabon</option>
<option value="Gambia">Gambia</option>
<option value="Georgia">Georgia</option>
<option value="Germany">Germany</option>
<option value="Ghana">Ghana</option>
<option value="Gibraltar">Gibraltar</option>
<option value="Greece">Greece</option>
<option value="Greenland">Greenland</option>
<option value="Grenada">Grenada</option>
<option value="Guadeloupe">Guadeloupe</option>
<option value="Guam">Guam</option>
<option value="Guatemala">Guatemala</option>
<option value="Guernsey">Guernsey</option>
<option value="Guinea">Guinea</option>
<option value="Guinea-Bissau">Guinea-Bissau</option>
<option value="Guyana">Guyana</option>
<option value="Haiti">Haiti</option>
<option value="Heard Island and McDonald Islands">Heard Island and McDonald Islands</option>
<option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
<option value="Honduras">Honduras</option>
<option value="Hong Kong">Hong Kong</option>
<option value="Hungary">Hungary</option>
<option value="Iceland">Iceland</option>
<option value="India">India</option>
<option value="Indonesia">Indonesia</option>
<option value="Iran">"Iran, Islamic Republic of"</option>
<option value="Iraq">Iraq</option>
<option value="Ireland">Ireland</option>
<option value="Isle of Man">Isle of Man</option>
<option value="Israel">Israel</option>
<option value="Italy">Italy</option>
<option value="Jamaica">Jamaica</option>
<option value="Japan">Japan</option>
<option value="Jersey">Jersey</option>
<option value="Jordan">Jordan</option>
<option value="Kazakhstan">Kazakhstan</option>
<option value="Kenya">Kenya</option>
<option value="Kiribati">Kiribati</option>
<option value="Korea, Democratic People's Republic of">"Korea, Democratic People's Republic of"</option>
<option value="Korea">"Korea, Republic of"</option>
<option value="Kuwait">Kuwait</option>
<option value="Kyrgyzstan">yrgyzstan</option>
<option value="Lao People`s Democratic Republic">Lao People's Democratic Republic</option>
<option value="Latvia">Latvia</option>
<option value="Lebanon">Lebanon</option>
<option value="Lesotho">Lesotho</option>
<option value="Liberia">Liberia</option>
<option value="Libya">Libya</option>
<option value="Liechtenstein">Liechtenstein</option>
<option value="Lithuania">Lithuania</option>
<option value="Luxembourg">Luxembourg</option>
<option value="Macao">Macao</option>
<option value="Macedonia">"Macedonia, the Former Yugoslav Republic of"</option>
<option value="Madagascar">Madagascar</option>
<option value="Malawi">Malawi</option>
<option value="Malaysia">Malaysia</option>
<option value="Maldives">Maldives</option>
<option value="Mali">Mali</option>
<option value="Malta">Malta</option>
<option value="Marshall Islands">Marshall Islands</option>
<option value="Martinique">Martinique</option>
<option value="Mauritania">Mauritania</option>
<option value="Mauritius">Mauritius</option>
<option value="Mayotte">Mayotte</option>
<option value="Mexico">Mexico</option>
<option value="Micronesia, Federated States of">"Micronesia, Federated States of</option>
<option value="Moldova, Republic of">"Moldova, Republic of"</option>
<option value="Monaco">Monaco</option>
<option value="Mongolia">Mongolia</option>
<option value="Montenegro">Montenegro</option>
<option value="Montserrat">Montserrat</option>
<option value="Morocco">Morocco</option>
<option value="Mozambique">Mozambique</option>
<option value="Myanmar">Myanmar</option>
<option value="Namibia">Namibia</option>
<option value="Nauru">Nauru</option>
<option value="Nepal">Nepal</option>
<option value="Netherlands">Netherlands</option>
<option value="New Caledonia">New Caledonia</option>
<option value="New Zealand">New Zealand</option>
<option value="Nicaragua">Nicaragua</option>
<option value="Niger">Niger</option>
<option value="Niue">Niue</option>
<option value="Norfolk Island">Norfolk Island</option>
<option value="Northern Mariana Islands">Northern Mariana Islands</option>
<option value="Norway">Norway</option>
<option value="Oman">Oman</option>
<option value="Pakistan">Pakistan</option>
<option value="Palau">Palau</option>
<option value="Palestine, State of">"Palestine, State of"</option>
<option value="Panama">Panama</option>
<option value="Papua New Guinea">Papua New Guinea</option>
<option value="Paraguay">Paraguay</option>
<option value="Peru">Peru</option>
<option value="Philippines">Philippines</option>
<option value="Pitcairn">Pitcairn</option>
<option value="Poland">Poland</option>
<option value="Portugal">Portugal</option>
<option value="Puerto Rico">Puerto Rico</option>
<option value="Qatar">Qatar</option>
<option value="RÃƒÂ©union">RÃƒÂ©union</option>
<option value="Romania">Romania</option>
<option value="Russian Federation">Russian Federation</option>
<option value="Rwanda">Rwanda</option>
<option value="Saint BarthÃƒÂ©lemy">Saint BarthÃƒÂ©lemy</option>
<option value="Saint Helena, Ascension and Tristan da Cunha">"Saint Helena, Ascension and Tristan da Cunha"</option>
<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
<option value="Saint Lucia">Saint Lucia</option>
<option value="Saint Martin (French part)">Saint Martin (French part)</option>
<option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
<option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
<option value="Samoa">Samoa</option>
<option value="San Marino">San Marino</option>
<option value="Sao Tome and Principe">Sao Tome and Principe</option>
<option value="Saudi Arabia">Saudi Arabia</option>
<option value="Senegal">Senegal</option>
<option value="Serbia">Serbia</option>
<option value="Seychelles">Seychelles</option>
<option value="Sierra Leone">Sierra Leone</option>
<option value="Singapore">Singapore</option>
<option value="Sint Maarten (Dutch part)">Sint Maarten (Dutch part)</option>
<option value="Slovakia">Slovakia</option>
<option value="Slovenia">Slovenia</option>
<option value="Solomon Islands">Solomon Islands</option>
<option value="Somalia">Somalia</option>
<option value="South Africa">South Africa</option>
<option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
<option value="South Sudan">South Sudan</option>
<option value="Spain">Spain</option>
<option value="Sri Lanka">Sri Lanka</option>
<option value="Sudan">Sudan</option>
<option value="Suriname">Suriname</option>
<option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
<option value="Swaziland">Swaziland</option>
<option value="Sweden">Sweden</option>
<option value="Switzerland">Switzerland</option>
<option value="Syrian Arab Republic">Syrian Arab Republic</option>
<option value="Taiwan, Province of China">"Taiwan, Province of China"</option>
<option value="Tajikistan">Tajikistan</option>
<option value="Tanzania, United Republic of">"Tanzania, United Republic of"</option>
<option value="Thailand">Thailand</option>
<option value="Timor-Leste">Timor-Leste</option>
<option value="Togo">Togo</option>
<option value="Tokelau">Tokelau</option>
<option value="Tonga">Tonga</option>
<option value="Trinidad and Tobago">Trinidad and Tobago</option>
<option value="Tunisia">Tunisia</option>
<option value="Turkey">Turkey</option>
<option value="Turkmenistan">Turkmenistan</option>
<option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
<option value="Tuvalu">Tuvalu</option>
<option value="Uganda">Uganda</option>
<option value="Ukraine">Ukraine</option>
<option value="United Arab Emirates">United Arab Emirates</option>
<option value="United Kingdom">United Kingdom</option>
<option value="United States">United States</option>
<option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
<option value="Uruguay">Uruguay</option>
<option value="Uzbekistan">Uzbekistan</option>
<option value="Vanuatu">Vanuatu</option>
<option value="Venezuela, Bolivarian Republic">"Venezuela, Bolivarian Republic of"</option>
<option value="['Viet Nam','VN']">Viet Nam</option>
<option value="Virgin Islands, British">"Virgin Islands, British"</option>
<option value="Virgin Islands, US">"Virgin Islands, U.S."</option>
<option value="Wallis and Futuna">Wallis and Futuna</option>
<option value="Western Sahara">Western Sahara</option>
<option value="Yemen">Yemen</option>
<option value="Zambia">Zambia</option>
<option value="Zimbabwe">Zimbabwe</option>
</select>
                                                    </div>

                                                     <div class="SedgeInput Sedge_column" >
                           
                                                     <input placeholder="Zipcode"class="form-control" id="PA_Zipcode" name="PA_Zipcode"  onkeypress="return onlyNumberKey(event)" style="background-color: #ebf5ff;color: DarkSlateGray; font-size: 14px;">
                            
                                                    </div>
                                               
                                               
                                                    
                                   <div class="SedgeInput Sedge_1column" >       
                                   </div>
                                
                                    <div class="SedgeInput Sedge_column" >
                                     <p class="Sedge_p"> Date of Birth
                                     <input type="Date" class="Sedge_Input" id="DOB" name="DOB" style="background-color: #ebf5ff;color: DarkSlateGray; font-size: 14px;">
                                     <p class="Sedge_p"> Religion
                                     <input placeholder="Text"class="form-control" id="Religion" name="Religion" style="background-color: #ebf5ff;color: DarkSlateGray; font-size: 14px;">
                                                <p class="Sedge_p"> Spouse Name
                                                <input placeholder="Text"class="form-control" id="SpouseName" name="SpouseName" style="background-color: #ebf5ff;color: DarkSlateGray; font-size: 14px;">
                                                <p class="Sedge_p"> Father's Name
                                                <input placeholder="Text"class="form-control" id="Father_Name" name="Father_Name" style="background-color: #ebf5ff;color: DarkSlateGray; font-size: 14px;">
                                               
                                    </div>   

                                    <div class="SedgeInput Sedge_column" >
                                      <p class="Sedge_p"> Place of Birth
                                      <input placeholder="Text"class="form-control" id="PlaceOfBirth" name="PlaceOfBirth" style="background-color: #ebf5ff;color: DarkSlateGray; font-size: 14px;">

                                               <p class="Sedge_p"> Height  
                                               <input placeholder="Text"class="form-control" id="Height" name="Height" style="background-color: #ebf5ff;color: DarkSlateGray; font-size: 14px;">
                                                 <p class="Sedge_p"> Occupation
                                                <input placeholder="Text"class="form-control" id="SN_Occupation" name="SN_Occupation" style="background-color: #ebf5ff;color: DarkSlateGray; font-size: 14px;">
                                                <p class="Sedge_p"> Occupation
                                                <input placeholder="Text"class="form-control" id="FT_Occupation" name="FT_Occupation" style="background-color: #ebf5ff;color: DarkSlateGray; font-size: 14px;">
                                    </div>   

                                   <div class="SedgeInput Sedge_column" >

                                      <p class="Sedge_p"> Civil Status    
                                      <select name="Civil_Status" id="Civil_Status"class="Sedge_Select" style="background-color: #ebf5ff;color: DarkSlateGray; font-size: 14px;">
                                         <option value="Single">Single</option>
                                            <option value="Married">Married</option>
                                               <option value="Widowed">Widowed</option>
                                                  <option value="Divorced">Divorced</option>
                                       </select>
                                                 <p class="Sedge_p"> Weight
                                                  <input placeholder="Text"class="form-control" name="Weight" id="Weight" style="background-color: #ebf5ff;color: DarkSlateGray; font-size: 14px;">
                                                 <p class="Sedge_p"> Mother's Name
                                                 <input placeholder="Text"class="form-control" id="Mothers_Name" name="Mothers_Name" style="background-color: #ebf5ff;color: DarkSlateGray; font-size: 14px;">
                                   </div>   

                                    <div class="SedgeInput Sedge_column" >
                                                <p class="Sedge_p"> Tel/Phone No. <br>
                                                <input type="tel" placeholder="Phone Number"class="form-control" id="CP_no" name="CP_no" onkeypress="return onlyNumberKey(event)" style="background-color: #ebf5ff;color: DarkSlateGray; font-size: 14px;">
                                                <p class="Sedge_p"> Nationality
                                                <input placeholder="Text"class="form-control" id="Nationality" name="Nationality" style="background-color: #ebf5ff;color: DarkSlateGray; font-size: 14px;">
                                                <p class="Sedge_p"> Occupation
                                                <input placeholder="Text"class="form-control" id="M_Occupation" name="M_Occupation" style="background-color: #ebf5ff;color: DarkSlateGray; font-size: 14px;">
                                    </div>   
                                    


                                <div class="SedgeInput" >
                                 <input type = "button" class="Sedge_Button" onclick="toggleModal(this, 1)" data-toggle="modal" data-target=".bd-example-modal-lg" value="Next">
                               
                                </div>
                        </div>  
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
         


           
 <!-- Modal  -->
 <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    
        <div class="ChildrenTable">
                 
            <div class="card-body">
            <div style="margin-bottom:10px;">

                    <img center id="blah" class="profilepic" src="\AccountingSoftwareProposal\startbootstrap-sb-admin-2-gh-pages\startbootstrap-sb-admin-2-gh-pages\img\Minimal Aesthetic Photography Logo (1).png" alt="your image" width="150px" height="150px"/>
                    <input type="file" id="file" accept="image/jpeg, image/png, image/jpg" name="file"  onchange="readURL(this); " class="upload" required/>
                    
                </div> 
                <div>
                                    <table class="table " cellspacing="0" >
                                        <tr> 
                                            <th colspan="5" style="color:#00008B">EDUCATIONAL BACKGROUND</th>
                                        </tr>
                                        <tr> 
                                            <th style="text-align:center; color:#282828;"> Training</th>
                                            <th style="text-align:center; color:#282828;">Course/Degree</th>
                                            <th style="text-align:center; color:#282828;" >From</th>
                                            <th style="text-align:center; color:#282828;">To</th>
                                            <th style="text-align:center; color:#282828;" >School / University</th>
                                        </tr>
                                        <tr> 
                                            <td style="color:#282828">Post Graduate</td>
                                            <td><input id="PG_Course" name="PG_Course" class="form-control" style="background-color: #ebf5ff;color: DarkSlateGray; font-size: 14px;"></td>
                                            <td><input type="date" id="PG_From" name="PG_From" class="form-control" style="background-color: #ebf5ff;color: DarkSlateGray; font-size: 14px;"></td>
                                            <td><input type="date" id="PG_To" name="PG_To" class="form-control" style="background-color: #ebf5ff;color: DarkSlateGray; font-size: 14px;"></td>
                                            <td><input id="PG_School" name="PG_School" class="form-control" style="background-color: #ebf5ff;color: DarkSlateGray; font-size: 14px;"></td>
                                        </tr>
                                        <tr> 
                                            <td style="color:#282828">College</td>
                                            <td><input id="COL_Course" name="COL_Course" class="form-control" style="background-color: #ebf5ff;color: DarkSlateGray; font-size: 14px;"></td>
                                            <td><input type="date" id="COL_From" name="COL_From" class="form-control" style="background-color: #ebf5ff;color: DarkSlateGray; font-size: 14px;"></td>
                                            <td><input type="date" id="COL_To" name="COL_To" class="form-control" style="background-color: #ebf5ff;color: DarkSlateGray; font-size: 14px;"></td>
                                            <td><input id="COL_School" name="COL_School" class="form-control" style="background-color: #ebf5ff;color: DarkSlateGray; font-size: 14px;"></td>
                                        </tr>
                                        <tr> 
                                            <td style="color:#282828">Vocational</td>
                                            <td><input id="VOC_Course" name="VOC_Course" class="form-control" style="background-color: #ebf5ff;color: DarkSlateGray; font-size: 14px;"></td>
                                            <td><input type="date" id="VOC_From" name="VOC_From" class="form-control" style="background-color: #ebf5ff;color: DarkSlateGray; font-size: 14px;"></td>
                                            <td><input type="date" id="VOC_To" name="VOC_To" class="form-control" style="background-color: #ebf5ff;color: DarkSlateGray; font-size: 14px;"></td>
                                            <td><input  id="VOC_School" name="VOC_School" class="form-control" style="background-color: #ebf5ff;color: DarkSlateGray; font-size: 14px;"></td>
                                           
                                        </tr>
                                        <tr> 
                                            <td style="color:#282828">Secondary</td>
                                            <td><input id="SEC_Course" name="SEC_Course" class="form-control" style="background-color: #ebf5ff;color: DarkSlateGray; font-size: 14px;"></td>
                                            <td><input type="date" id="SEC_From" name="SEC_From" class="form-control" style="background-color: #ebf5ff;color: DarkSlateGray; font-size: 14px;"></td>
                                            <td><input type="date" id="SEC_To" name="SEC_To" class="form-control" style="background-color: #ebf5ff;color: DarkSlateGray; font-size: 14px;"></td>
                                            <td><input id="SEC_School" name="SEC_School" class="form-control" style="background-color: #ebf5ff;color: DarkSlateGray; font-size: 14px;"></td>
                                        </tr>
                                        <tr> 
                                            <td style="color:#282828">Elementary</td>
                                            <td><input id="ELEM_Course" name="ELEM_Course" class="form-control" style="background-color: #ebf5ff;color: DarkSlateGray; font-size: 14px;"></td>
                                            <td><input type="date" id="ELEM_From" name="ELEM_From" class="form-control" style="background-color: #ebf5ff;color: DarkSlateGray; font-size: 14px;"></td>
                                            <td><input type="date" id="ELEM_To" name="ELEM_To" class="form-control" style="background-color: #ebf5ff;color: DarkSlateGray; font-size: 14px;"></td>
                                            <td><input  id="ELEM_School" name="ELEM_School" class="form-control" style="background-color: #ebf5ff;color: DarkSlateGray; font-size: 14px;"></td>
                                           
                                        </tr>
                                        
                                    </table>

                                    <table class="table " cellspacing="0" >
                                        <tr> 
                                            <th colspan="5" style="color:#00008B">GOVERNMENT BENEFITS</th>
                                        </tr>
                                        <tr> 
                                            <th style="text-align:left; color:#282828"> SSS No.</th>
                                            <th style="text-align:left; color:#282828"> Philhealth No.</th>
                                            <th style="text-align:left; color:#282828"> T.I.N No.</th>
                                            <th style="text-align:left; color:#282828; "> HDMF No.</th>
                                            </tr>
                                        <tr> 
                                            <td><input id="SSS" name="SSS"  class="form-control" style="background-color: #ebf5ff;color: DarkSlateGray; font-size: 14px;"></td>
                                            <td><input id="Philhealth" name="Philhealth"  class="form-control" style="background-color: #ebf5ff;color: DarkSlateGray; font-size: 14px;"></td>
                                            <td><input id="TIN" name="TIN"  class="form-control" style="background-color: #ebf5ff;color: DarkSlateGray; font-size: 14px;"></td>
                                            <td><input id="HDMF" name="HDMF"  class="form-control" style="background-color: #ebf5ff;color: DarkSlateGray; font-size: 14px;"></td>
                                        </tr>
                                    </table>
                </div>         
             <!-- Ben -->
            
                     
            </div>       
        </div>            
   
     <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="save" class="btn btn-primary">save</button>
     </div>
    </div>
  </div>
 </div>



 <form method="Post" action="">
<!-- Change Password -->
<div class="modal fade bd-example-modal-lg2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-xl" style="width: 40%; float: center;"  >
    <div class="modal-content" >
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
                                    
                       
                            <div class="modal-body">
                           

                            <div><?php if(isset($message)) { echo $message; } ?></div>
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
                                    <form class="user" method="Post" action="Edit_Access.php"> 
                                        
                                              
                                                <div class="login__field" >
					                                <i class="login__icon fas fa-user"></i>
					                                <input class="login__input" id="exampleInputEmail" name="Username" placeholder="Username / Email" style=" font-size: 12px; font-weight: normal; width: 100%" readonly value="<?php echo $loggedin_session; ?>"> 
				                                </div>
				                                <div class="login__field">
					                                <i class="login__icon fas fa-lock"></i>
					                                <input type="password" class="login__input" id="CurrentPassword" placeholder="Password" Name="CurrentPassword" style=" font-size: 12px; font-weight: normal; width: 100%" >
				                                </div>
				                                <div class="login__field">
					                                <i class="login__icon fas fa-lock"></i>
					                                <input type="password" class="login__input" id="newPassword" placeholder="New Password" Name="newPassword" style=" font-size: 12px; font-weight: normal; width: 100%" >
				                                </div>
                                                <center>
				                                <div class="login__field" >
                                                 <button type="submit" name= "Changepass" class="btn btn-primary" style="font-size: 12px;" >Save changes</button>
                                                </div>
                                                </center>
                                               
                                                
                                               
                                    </form>
                                </div>
                            </div>                         
                           
      
    </div>
  </div>
</div>
</form>
 
 </form>


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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        $(document).ready(function () {

            $(document).on('click', '.remove-btn', function () {
                $(this).closest('.main-form').remove();
            });
            
            $(document).on('click', '.add-more-form1', function () {
                $('.paste-new-forms').append('<div class="main-form mt-3">\
                               <div >\
                                   <input type="text" hidden name="EH_EmployeeID1[]" class="form-control" required placeholder="Enter Name">\
                               </div>\
                               <div class="Autorow">\
                                   <input type="text" name="Name_of_Company[]" class="form-control" required placeholder="Enter Name">\
                               </div>\
                               <div class="Autorow">\
                                   <input type="text" name="Position1[]" class="form-control" required placeholder="Enter Name">\
                               </div>\
                               <div class="Autorow">\
                                   <input type="text" name="PeriodCovered[]" class="form-control" required placeholder="Enter Name">\
                               </div>\
                               <div class="Autorow">\
                                   <input type="text" name="Address1[]" class="form-control" required placeholder="Enter Name">\
                               </div>\
                               <div class="Autorow">\
                                   <input type="text" name="TelNo1[]" class="form-control" required placeholder="Enter Name">\
                               </div>\
                                        <div class="Autorow1">\
                                            <button type="button" style="font-size: 10px; margin:10px; 15px;" class="remove-btn btn btn-danger">Remove</button>\
                                        </div>\
                            </div>');
            });

        });
    </script> 

 
 <script>
    const phoneInputField = document.querySelector("#CP_no");
    const phoneInput = window.intlTelInput(phoneInputField, {
      utilsScript:
        "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
    });

    const info = document.querySelector(".alert-info");
    const error = document.querySelector(".alert-error");

    function onlyNumberKey(evt) {
          
          // Only ASCII character in that range allowed
          var ASCIICode = (evt.which) ? evt.which : evt.keyCode
          if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
              return false;
          return true;
      }

  </script>

            <script>
          
              function AllowOnlyNumbers(e) {

 e = (e) ? e : window.event;
 var clipboardData = e.clipboardData ? e.clipboardData : window.clipboardData;
 var key = e.keyCode ? e.keyCode : e.which ? e.which : e.charCode;
 var str = (e.type && e.type == "paste") ? clipboardData.getData('Text') : String.fromCharCode(key);

 return (/^\d+$/.test(str));
 }
 function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }


        $("#submit").click(function () {
            var name = $("#Employee_Id").val();
            var str = name;
            $("#Employee_Id").html(str);
        });

                 </script>

 <script>
            function addressFunction() {
                if (document.getElementById("same").checked) {

                    document.getElementById("PA_HouseNumber").value = document.getElementById("HouseNumber").value;
                    document.getElementById("PA_BL").value = document.getElementById("BL").value;
                    document.getElementById("PA_St").value = document.getElementById("ST").value;
                    document.getElementById("PA_Subdivision").value = document.getElementById("Subdivision").value;
                    document.getElementById("PA_District").value = document.getElementById("District").value ;
                    document.getElementById("PA_City").value = document.getElementById("City").value ;
                    document.getElementById("PA_Province").value = document.getElementById("Province").value ;
                    document.getElementById("PA_Country").value = document.getElementById("Country").value ;
                    document.getElementById("PA_Zipcode").value = document.getElementById("Zipcode").value;
                } else {
                    document.getElementById("PA_HouseNumber").value = "";
                    document.getElementById("PA_BL").value = "";
                    document.getElementById("PA_St").value = "";
                    document.getElementById("PA_Subdivision").value = "";
                    document.getElementById("PA_District").value = "";
                    document.getElementById("PA_City").value = "";
                    document.getElementById("PA_Province").value = "";
                    document.getElementById("PA_Country").value = "";
                    document.getElementById("PA_Zipcode").value = "";
                }
            }
        </script>
</body>
</html>





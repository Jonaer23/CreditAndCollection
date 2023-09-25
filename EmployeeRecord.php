<?php
session_start();
include 'connection.php';
include 'session.php';
$results = mysqli_query($connection, "SELECT * FROM sedge_tablehris");
$users = mysqli_fetch_all($results, MYSQLI_ASSOC);

if(isset($_SESSION['Access']) && $_SESSION['Access'] == "Admin" && $_SESSION['Department'] == "Admin" && $_SESSION['Position'] == "Admin"){

?>

<!DOCTYPE html>
<html lang="en">

<head>

    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Employee Record</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
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
    div.viewRecords1{
  width:85%;

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

div.viewRecords{
    margin: 30px;
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
 div.employeeData{
    width: 29%;
    float: left;
    padding-right:20px;
    
 }
 div.category{
     width: 1%;
     float: left;
     
     text-align: left;
 }
 div.uploadPhoto{
     width: 13%;
     float: left;
   
     text-align: left;
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
 input.viewRecord{
    border: none;
    border-bottom: 1px solid gray;
    height: 5px;
    border-radius: 0px;
    
    
 }
 input.viewRecord01{
    border: none;
    border-bottom: 1px solid gray;
    height: 5px;
    border-radius: 0px;
    margin-top: -20px;
    width: 33.33%;
 }
 table, td, th {
  border: 1px solid black;
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
                <a class="nav-link" >
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
                    <i class="fas fa-fw fa-users"></i>
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
        
                        <img src="\AccountingSoftwareProposal\startbootstrap-sb-admin-2-gh-pages\startbootstrap-sb-admin-2-gh-pages\img\SouthSpring.png"  width="150" height="60"></img>
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
                                <a class="dropdown-item" data-toggle="modal" data-target=".bd-example-modal-lg2">
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
                    <div class="row">

                      
                        <!-- Tasks Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Pending Requests</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3" style="background-color: #003459">
                            <h6 class="m-0 font-weight-bold " style="color: #ffffff">Admin</h6> 
                        </div>
                      
                        <div class="card-body">
                            <div class="table-responsive" style="color: #4a4949">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr style="background-color: #007ea7; font-size: 14px;">
                                            <th scope="col" style="color: #ffffff">Employee ID</th>
                                            <th scope="col" style="color: #ffffff">Name</th>
                                           
                                            <th scope="col" style="color: #ffffff">Department</th>
                                            <th scope="col" style="color: #ffffff">Position</th>
                                            <th scope="col" style="color: #ffffff">Date Hired</th>
                                            <th scope="col" style="color: #ffffff">Status</th>
                                            
                                            <th scope="col" style="color: #ffffff">Tools</th>
                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>

                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>


                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>


                                    
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th scope="col" style="color: #ffffff">Employee ID</th>
                                            <th scope="col" style="color: #ffffff">Name</th>                           
                                            <th scope="col" style="color: #ffffff">Department</th>
                                            <th scope="col" style="color: #ffffff">Position</th>
                                            <th scope="col" style="color: #ffffff">Date Hired</th>
                                            <th scope="col" style="color: #ffffff">Status</th>
                                          
                                            <th scope="col" style="color: #ffffff">Tools</th>
                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>

                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>


                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>
                                            <th scope="col" style="color: #ffffff" hidden></th>

                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php
                                     $sales_query = "SELECT * from sedge_tablehris LEFT JOIN as_edbackground ON sedge_tablehris.Employee_Id = as_edbackground.Employee_Id;";
                                      
                                      $sales_result = mysqli_query($connection, $sales_query);
                                    
                                    if (mysqli_num_rows($sales_result) > 0) {
                                       while ($row = mysqli_fetch_assoc($sales_result)) {
                                      
                                    ?>
                                        <tr style="font-size: 14px;">
                                        <td class="SN_Occupation" name="SN_Occupation" hidden><?=$row['SN_Occupation']?></td>
                                            <td class="Employee_Id" name="Employee_Id" style="color: #4a4949"><?=$row['Employee_Id']?></td>
                                            <td class="Fullname" name="Fullname" style="color: #4a4949"><?=$row['Firstname']?> <?=$row['Middlename']?> <?=$row['Surname']?></td>
                                            <td class="Firstname" name="Firstname" style="color: #4a4949" hidden><?=$row['Firstname']?></td>
                                            <td class="Middlename" name="Middlename" style="color: #4a4949" hidden><?=$row['Middlename']?></td>
                                            <td class="Surname" name="Surname" style="color: #4a4949" hidden><?=$row['Surname']?></td>
                                            <td class="Date_Of_Birth" style="color: #4a4949" name="Date_Of_Birth" hidden><?=$row['Date_Of_Birth']?></td>
                                            <td class="Department" style="color: #4a4949" name="Department"><?=$row['Department']?></td>
                                            <td class="Position" style="color: #4a4949" name="Position" ><?=$row['Position']?></td>
                                            <td class="Department" style="color: #4a4949" name="Date_Hired" ><?=$row['Date_Hired']?></td>
                                            <td class="Status" style="color: #4a4949" name="Status" ><?=$row['Status']?></td>

                                            <td class="Place_Of_Birth" name="Place_Of_Birth" hidden><?=$row['Place_Of_Birth']?></td>
                                            <td class="Nationality" name="Nationality" hidden><?=$row['Nationality']?></td>
                                            <td class="Civil_Status" name="Civil_Status" hidden><?=$row['Civil_Status']?></td>

                                            <td class="Height" name="Height" hidden><?=$row['AS_Height']?></td>
                                            <td class="Weight" name="Weight" hidden><?=$row['AS_Weight']?></td>
                                           
                                            <td class="Place_Of_Birth" name="Place_Of_Birth" hidden><?=$row['Place_Of_Birth']?></td>
                                            <td class="Religion" name="Religion" hidden><?=$row['Religion']?></td>

                                            <td class="CA_Rm_Flr_UnitNo_Bldgname" name="CA_Rm_Flr_UnitNo_Bldgname" hidden><?=$row['CA_House_Lot_BlkNo']?></td>
                                            <td class="CA_House_Lot_BlkNo" name="CA_House_Lot_BlkNo" hidden><?=$row['CA_House_Lot_BlkNo']?></td>
                                            <td class="CA_Street_Name" name="CA_Street_Name" hidden><?=$row['CA_Street_Name']?></td>
                                            <td class="CA_Subdivision" name="CA_Subdivision" hidden> <?=$row['CA_Subdivision']?> </td>
                                            <td class="A_Barangay_District_Locality" name="A_Barangay_District_Locality" hidden><?=$row['A_Barangay_District_Locality']?></td>
                                            <td class="CA_City_Municipality" name="CA_City_Municipality" hidden> <?=$row['CA_City_Municipality']?> </td>
                                            <td class="CA_Province" name="CA_Province" hidden> <?=$row['CA_Province']?> </td>
                                            <td class="CA_Country" name="CA_Country" hidden> <?=$row['CA_Country']?> </td>
                                            <td class="CA_Postal_Code" name="CA_Postal_Code" hidden> <?=$row['CA_Postal_Code']?></td>
                                            
                                            <td class="PA_Rm_Flr_UnitNo_Bldgname" name="PA_Rm_Flr_UnitNo_Bldgname" hidden> <?=$row['PA_Rm_Flr_UnitNo_Bldgname']?> </td>
                                            <td class="PA_House_Lot_BlkNo" name="PA_House_Lot_BlkNo" hidden><?=$row['PA_House_Lot_BlkNo']?> </td>
                                            <td class="PA_Street_Name" name="PA_Street_Name" hidden><?=$row['PA_Street_Name']?> </td>
                                            <td class="PA_Subdivision" name="PA_Subdivision" hidden><?=$row['PA_Subdivision']?></td>
                                            <td class="PA_Barangay_District_Locality" name="PA_Barangay_District_Locality" hidden><?=$row['PA_Barangay_District_Locality']?> </td>
                                            <td class="PA_City_Municipality" name="PA_City_Municipality" hidden><?=$row['PA_City_Municipality']?> </td>
                                            <td class="PA_Province" name="PA_Province" hidden><?=$row['PA_Province']?></td>
                                            <td class="PA_Country" name="PA_Country" hidden><?=$row['PA_Country']?> </td>
                                            <td class="PA_Postal_Code" name="PA_Postal_Code" hidden><?=$row['PA_Postal_Code']?></td>
                                            
                                            <td class="Fathers_Name" name="Fathers_Name" hidden><?=$row['Fathers_Name']?></td>
                                            <td class="Mothers_Name" name="Mothers_Name" hidden><?=$row['Mothers_Name']?></td>
                                            <td class="Spouse_Name" name="Spouse_Name" hidden><?=$row['Spouse_Name']?></td>
                                          

                                            <td class="MN_Occupation" name="MN_Occupation" hidden><?=$row['MN_Occupation']?></td>
                                            <td class="FN_Occupation" name="FN_Occupation" hidden><?=$row['FN_Occupation']?></td>
                                           
                                            
                                          

                                            <td class="SSS_No" name="SSS_No" hidden><?=$row['SSS_No']?></td>
                                            <td class="Philhealth_No" name="Philhealth_No" hidden><?=$row['Philhealth_No']?></td>
                                            <td class="TIN_No" name="TIN_No" hidden><?=$row['TIN_No']?></td>
                                            <td class="HDMF_No" name="HDMF_No" hidden><?=$row['HDMF_No']?></td>
                                            <td class="CA_Tel_MobileNo" name="CA_Tel_MobileNo" hidden><?=$row['CA_Tel_MobileNo']?></td>
                                            
                                            <td class="PG_Course" name="PG_Course" hidden><?=$row['PG_Course']?></td>
                                            <td class="PG_From" name="PG_From" hidden><?=$row['PG_From']?></td>
                                            <td class="PG_To" name="PG_To" hidden><?=$row['PG_To']?></td>
                                            <td class="PG_School" name="PG_School" hidden><?=$row['PG_School']?></td>

                                            <td class="COL_Course" name="COL_Course" hidden><?=$row['COL_Course']?></td>
                                            <td class="COL_From" name="COL_From" hidden><?=$row['COL_From']?></td>
                                            <td class="COL_To" name="COL_To" hidden><?=$row['COL_To']?></td>
                                            <td class="COL_School" name="COL_School" hidden><?=$row['COL_School']?></td>

                                            <td class="VOC_Course" name="VOC_Course" hidden><?=$row['VOC_Course']?></td>
                                            <td class="VOC_From" name="VOC_From" hidden><?=$row['VOC_From']?></td>
                                            <td class="VOC_To" name="VOC_To" hidden><?=$row['VOC_To']?></td>
                                            <td class="VOC_School" name="VOC_School" hidden><?=$row['VOC_School']?></td>

                                            <td class="SEC_Course" name="SEC_Course" hidden><?=$row['SEC_Course']?></td>
                                            <td class="SEC_From" name="SEC_From" hidden><?=$row['SEC_From']?></td>
                                            <td class="SEC_To" name="SEC_To" hidden><?=$row['SEC_To']?></td>
                                            <td class="SEC_School" name="SEC_School" hidden><?=$row['SEC_School']?></td>

                                            <td class="ELEM_Course" name="ELEM_Course" hidden><?=$row['ELEM_Course']?></td>
                                            <td class="ELEM_From" name="ELEM_From" hidden><?=$row['ELEM_From']?></td>
                                            <td class="ELEM_To" name="ELEM_To" hidden><?=$row['ELEM_To']?></td>
                                            <td class="ELEM_School" name="ELEM_School" hidden><?=$row['ELEM_School']?></td>
                                            <td class="Date_Hired" name="Date_Hired" hidden><?=$row['Date_Hired']?></td>
                                            
                                            <td class="filename" name="filename" hidden><?php echo 'uploads/' .$row['Filename'] ?></td>
                                            

                                            
                                            
                                            

                                            
                                            
                                         
                            
                                            <td>  
                                                <script>
                                                    let tableRowElement;
                                                    function toggleModal(element) {
                                                    tableRowElement = element.parentElement.parentElement;
                                                    
                                                    
                                                    const EmpID = tableRowElement.getElementsByClassName('Employee_Id')[0].innerHTML;
                                                    document.getElementById('Employee_Id').value = EmpID;
                                                    const Firstname = tableRowElement.getElementsByClassName('Firstname')[0].innerHTML;
                                                    document.getElementById('Firstname').value = Firstname;
                                                    const Middlename = tableRowElement.getElementsByClassName('Middlename')[0].innerHTML;
                                                    document.getElementById('Middlename').value = Middlename;
                                                    const Surname = tableRowElement.getElementsByClassName('Surname')[0].innerHTML;
                                                    document.getElementById('Surname').value = Surname;
                                                    const Department = tableRowElement.getElementsByClassName('Department')[0].innerHTML;
                                                    document.getElementById('Department').value = Department;
                                                    const Position = tableRowElement.getElementsByClassName('Position')[0].innerHTML;
                                                    document.getElementById('Position').value = Position;
                                                    const DateOfBirth = tableRowElement.getElementsByClassName('Date_Of_Birth')[0].innerHTML;
                                                    document.getElementById('Date_Of_Birth').value = DateOfBirth;

                                                    const Place_Of_Birth = tableRowElement.getElementsByClassName('Place_Of_Birth')[0].innerHTML;
                                                    document.getElementById('Place_Of_Birth').value = Place_Of_Birth;
                                                    const Nationality = tableRowElement.getElementsByClassName('Nationality')[0].innerHTML;
                                                    document.getElementById('Nationality').value = Nationality;
                                                    const Civil_Status = tableRowElement.getElementsByClassName('Civil_Status')[0].innerHTML;
                                                    document.getElementById('Civil_Status').value = Civil_Status;
                                                    const Religion = tableRowElement.getElementsByClassName('Religion')[0].innerHTML;
                                                    document.getElementById('Religion').value = Religion;
                                                    const CA_Tel_MobileNo = tableRowElement.getElementsByClassName('CA_Tel_MobileNo')[0].innerHTML;
                                                    document.getElementById('CA_Tel_MobileNo').value = CA_Tel_MobileNo;
                                                    
                                                    
                                                   

                                                    const Height = tableRowElement.getElementsByClassName('Height')[0].innerHTML;
                                                    document.getElementById('Height').value = Height;
                                                    const Weight = tableRowElement.getElementsByClassName('Weight')[0].innerHTML;
                                                    document.getElementById('Weight').value = Weight;
                                                    
                                                    const Date_Hired = tableRowElement.getElementsByClassName('Date_Hired')[0].innerHTML;
                                                    document.getElementById('Date_Hired').value = Date_Hired;
                                                    
                                                   
                                                   

                                                    const CA_Rm_Flr_UnitNo_Bldgname = tableRowElement.getElementsByClassName('CA_Rm_Flr_UnitNo_Bldgname')[0].innerHTML;
                                                    document.getElementById('CA_Rm_Flr_UnitNo_Bldgname').value = CA_Rm_Flr_UnitNo_Bldgname;

                                                    
                                                    const CA_House_Lot_BlkNo = tableRowElement.getElementsByClassName('CA_House_Lot_BlkNo')[0].innerHTML;
                                                    document.getElementById('CA_House_Lot_BlkNo').value = CA_House_Lot_BlkNo;
                                                    const CA_Street_Name = tableRowElement.getElementsByClassName('CA_Street_Name')[0].innerHTML;
                                                    document.getElementById('CA_Street_Name').value = CA_Street_Name;
                                                    const CA_Subdivision = tableRowElement.getElementsByClassName('CA_Subdivision')[0].innerHTML;
                                                    document.getElementById('CA_Subdivision').value = CA_Subdivision;
                                                    const A_Barangay_District_Locality = tableRowElement.getElementsByClassName('A_Barangay_District_Locality')[0].innerHTML;
                                                    document.getElementById('A_Barangay_District_Locality').value = A_Barangay_District_Locality;
                                                    const CA_City_Municipality = tableRowElement.getElementsByClassName('CA_City_Municipality')[0].innerHTML;
                                                    document.getElementById('CA_City_Municipality').value = CA_City_Municipality;
                                                    const CA_Province = tableRowElement.getElementsByClassName('CA_Province')[0].innerHTML;
                                                    document.getElementById('CA_Province').value = CA_Province;
                                                    const CA_Country = tableRowElement.getElementsByClassName('CA_Country')[0].innerHTML;
                                                    document.getElementById('CA_Country').value = CA_Country;
                                                    const CA_Postal_Code = tableRowElement.getElementsByClassName('CA_Postal_Code')[0].innerHTML;
                                                    document.getElementById('CA_Postal_Code').value = CA_Postal_Code;
                                                    
                                                    
                                                    
                                                    
                                                    const PA_Rm_Flr_UnitNo_Bldgname = tableRowElement.getElementsByClassName('PA_Rm_Flr_UnitNo_Bldgname')[0].innerHTML;
                                                    document.getElementById('PA_Rm_Flr_UnitNo_Bldgname').value = PA_Rm_Flr_UnitNo_Bldgname;
                                                    const PA_House_Lot_BlkNo = tableRowElement.getElementsByClassName('PA_House_Lot_BlkNo')[0].innerHTML;
                                                    document.getElementById('PA_House_Lot_BlkNo').value = PA_House_Lot_BlkNo;
                                                    const PA_Street_Name = tableRowElement.getElementsByClassName('PA_Street_Name')[0].innerHTML;
                                                    document.getElementById('PA_Street_Name').value = PA_Street_Name;
                                                    const PA_Subdivision = tableRowElement.getElementsByClassName('PA_Subdivision')[0].innerHTML;
                                                    document.getElementById('PA_Subdivision').value = PA_Subdivision;
                                                    const PA_Barangay_District_Locality = tableRowElement.getElementsByClassName('PA_Barangay_District_Locality')[0].innerHTML;
                                                    document.getElementById('PA_Barangay_District_Locality').value = PA_Barangay_District_Locality;
                                                    const PA_City_Municipality = tableRowElement.getElementsByClassName('PA_City_Municipality')[0].innerHTML;
                                                    document.getElementById('PA_City_Municipality').value = PA_City_Municipality;
                                                    const PA_Province = tableRowElement.getElementsByClassName('PA_Province')[0].innerHTML;
                                                    document.getElementById('PA_Province').value = PA_Province;
                                                    const PA_Country = tableRowElement.getElementsByClassName('PA_Country')[0].innerHTML;
                                                    document.getElementById('PA_Country').value = PA_Country;
                                                    const PA_Postal_Code = tableRowElement.getElementsByClassName('PA_Postal_Code')[0].innerHTML;
                                                    document.getElementById('PA_Postal_Code').value = PA_Postal_Code;



                                                    const Fathers_Name = tableRowElement.getElementsByClassName('Fathers_Name')[0].innerHTML;
                                                    document.getElementById('Fathers_Name').value = Fathers_Name;



                                                    const Mothers_Name = tableRowElement.getElementsByClassName('Mothers_Name')[0].innerHTML;
                                                    document.getElementById('Mothers_Name').value = Mothers_Name;



                                                    const Spouse_Name = tableRowElement.getElementsByClassName('Spouse_Name')[0].innerHTML;
                                                    document.getElementById('Spouse_Name').value = Spouse_Name;



                                                    const MN_Occupation = tableRowElement.getElementsByClassName('MN_Occupation')[0].innerHTML;
                                                    document.getElementById('MN_Occupation').value = MN_Occupation;
                                                    const FN_Occupation = tableRowElement.getElementsByClassName('FN_Occupation')[0].innerHTML;
                                                    document.getElementById('FN_Occupation').value = FN_Occupation;
                                                    
                                                    const SSS_No = tableRowElement.getElementsByClassName('SSS_No')[0].innerHTML;
                                                    document.getElementById('SSS_No').value =SSS_No;
                                                    const Philhealth_No = tableRowElement.getElementsByClassName('Philhealth_No')[0].innerHTML;
                                                    document.getElementById('Philhealth_No').value = Philhealth_No;
                                                    const TIN_No = tableRowElement.getElementsByClassName('TIN_No')[0].innerHTML;
                                                    document.getElementById('TIN_No').value = TIN_No;
                                                    const HDMF_No = tableRowElement.getElementsByClassName('HDMF_No')[0].innerHTML;
                                                    document.getElementById('HDMF_No').value = HDMF_No;

                                                        

                                                    const PG_Course = tableRowElement.getElementsByClassName('PG_Course')[0].innerHTML;
                                                    document.getElementById('PG_Course').value =PG_Course;

                                                    const PG_From = tableRowElement.getElementsByClassName('PG_From')[0].innerHTML;
                                                    document.getElementById('PG_From').value = PG_From;

                                                    const PG_To = tableRowElement.getElementsByClassName('PG_To')[0].innerHTML;
                                                    document.getElementById('PG_To').value = PG_To;

                                                    const PG_School = tableRowElement.getElementsByClassName('PG_School')[0].innerHTML;
                                                    document.getElementById('PG_School').value = PG_School;




                                                    const COL_Course = tableRowElement.getElementsByClassName('COL_Course')[0].innerHTML;
                                                    document.getElementById('COL_Course').value = COL_Course;

                                                    const COL_From = tableRowElement.getElementsByClassName('COL_From')[0].innerHTML;
                                                    document.getElementById('COL_From').value = COL_From;

                                                    const COL_To = tableRowElement.getElementsByClassName('COL_To')[0].innerHTML;
                                                    document.getElementById('COL_To').value = COL_To;

                                                    const COL_School = tableRowElement.getElementsByClassName('COL_School')[0].innerHTML;
                                                    document.getElementById('COL_School').value = COL_School;




                                                    const VOC_Course = tableRowElement.getElementsByClassName('VOC_Course')[0].innerHTML;
                                                    document.getElementById('VOC_Course').value = VOC_Course;

                                                    const VOC_From = tableRowElement.getElementsByClassName('VOC_From')[0].innerHTML;
                                                    document.getElementById('VOC_From').value = VOC_From;

                                                    const VOC_To = tableRowElement.getElementsByClassName('VOC_To')[0].innerHTML;
                                                    document.getElementById('VOC_To').value = VOC_To;

                                                    const VOC_School = tableRowElement.getElementsByClassName('VOC_School')[0].innerHTML;
                                                    document.getElementById('VOC_School').value = VOC_School;




                                                    const SEC_Course = tableRowElement.getElementsByClassName('SEC_Course')[0].innerHTML;
                                                    document.getElementById('SEC_Course').value = SEC_Course;

                                                    const SEC_From = tableRowElement.getElementsByClassName('SEC_From')[0].innerHTML;
                                                    document.getElementById('SEC_From').value = SEC_From;

                                                    const SEC_To = tableRowElement.getElementsByClassName('SEC_To')[0].innerHTML;
                                                    document.getElementById('SEC_To').value = SEC_To;

                                                    const SEC_School = tableRowElement.getElementsByClassName('SEC_School')[0].innerHTML;
                                                    document.getElementById('SEC_School').value = SEC_School;




                                                    const ELEM_Course = tableRowElement.getElementsByClassName('ELEM_Course')[0].innerHTML;
                                                    document.getElementById('ELEM_Course').value = ELEM_Course;

                                                    const ELEM_From = tableRowElement.getElementsByClassName('ELEM_From')[0].innerHTML;
                                                    document.getElementById('ELEM_From').value = ELEM_From;

                                                    const ELEM_To = tableRowElement.getElementsByClassName('ELEM_To')[0].innerHTML;
                                                    document.getElementById('ELEM_To').value = ELEM_To;

                                                
                                                    const ELEM_School = tableRowElement.getElementsByClassName('ELEM_School')[0].innerHTML;
                                                    document.getElementById('ELEM_School').value = ELEM_School;

                                                    const filename = tableRowElement.getElementsByClassName('filename')[0].innerHTML;
                                                    document.getElementById('blah').src = filename;
                                                    

                                                }     
                                                </script>                                           
                                               <a href="#" name="edit" onclick="toggleModal(this, 1)" data-toggle="modal" data-target=".bd-example-modal-lg" >View Record</a> ||
                                               <a href="#" name="edit" onclick="toggleModal(this, 1)" data-toggle="modal" data-target=".bd-example-modal-lg" style="color:red">Fired</a> 
                                               
                                               
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
   
    <form method="Post" action="Edit_EmployeeRecord.php" enctype="multipart/form-data">
<!-- Edit Modal -->

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div>
    
      <div class="card shadow mb-4">
        <div class="card-header py-3">    
        <div class="ChildrenTable">
           
          <div class="card-body">
            <div style="margin-bottom:10px;">
                    <img center id="blah" style="margin-left: 12px;" class="profilepic" src="" alt="" width="150px" height="150px"/>
                    <br><input type="file" id="file" accept="image/jpeg, image/png, image/jpg"   name="file"  onchange="readURL(this); " class="form-control" style="width: 300px; border: none;"/>
                    
                </div> 
                
                <div>
                                    <table class="table" style="border: 2px solid #e3e6f0; color:#4a4949; font-weight: bold"  cellspacing="0" >
                                        <tr style="border: 2px solid #e3e6f0; background-color: #003459"> 
                                            <th colspan="5" style="color:#ffffff">Personal Information</th>
                                        </tr>
                                        <tr style="border: none">
                                          <td style="border: none" >Employee ID 
                                           <input type="text" class="form-control" style="color:#4a4949; border:none; padding-left: 10px;  background-color: #E0F1FD; " id="Employee_Id" name="Employee_Id">  
                                           Firstname 
                                           <input type="text" class="form-control" style="color:#4a4949; border:none; padding-left: 10px;  background-color: #E0F1FD; " id="Firstname" name="Firstname">
                                           Place of Birth 
                                           <input type="text" class="form-control" style="color:#4a4949; border:none; padding-left: 10px;  background-color: #E0F1FD; " id="Place_Of_Birth" name="Place_Of_Birth">
                                           Father's Name 
                                           <input type="text" class="form-control" style="color:#4a4949; border:none; padding-left: 10px;  background-color: #E0F1FD; " id="Fathers_Name" name="Fathers_Name">
                                           Mother's Name 
                                           <input type="text" class="form-control" style="color:#4a4949; border:none; padding-left: 10px;  background-color: #E0F1FD; " id="Mothers_Name" name="Mothers_Name">

                                          </td>
                                          <td style="border: none" >
                                            Position 
                                            <br> <input type="text" class="form-control" style="color:#4a4949; border:none; padding-left: 10px;  background-color: #E0F1FD; " id="Position" name="Position" > 
                                           Middlename 
                                           <input type="text" class="form-control" style="color:#4a4949; border:none; padding-left: 10px;  background-color: #E0F1FD; " id="Middlename" name="Middlename">
                                           Religion
                                           <input type="text" class="form-control" style="color:#4a4949; border:none; padding-left: 10px;  background-color: #E0F1FD; " id="Religion" name="Religion">
                                           Occupation 
                                           <input type="text" class="form-control" style="color:#4a4949; border:none; padding-left: 10px;  background-color: #E0F1FD; " id="FN_Occupation" name="FN_Occupation">
                                           Occupation
                                           <input type="text" class="form-control" style="color:#4a4949; border:none; padding-left: 10px;  background-color: #E0F1FD; " id="MN_Occupation" name="MN_Occupation">
                                           
                                          </td>
                                          <td style="border: none" >
                                           Department 
                                            <br> <input type="text" class="form-control" style="color:#4a4949; border:none; padding-left: 10px;  background-color: #E0F1FD; " id="Department" name="Department" >
                                           Surname 
                                           <input type="text" class="form-control" style="color:#4a4949; border:none; padding-left: 10px;  background-color: #E0F1FD; " id="Surname" name="Surname">
                                           Nationality 
                                           <input type="text" class="form-control" style="color:#4a4949; border:none; padding-left: 10px;  background-color: #E0F1FD; " id="Nationality" name="Nationality">
                                           Civil Status 
                                           <input type="text" class="form-control" style="color:#4a4949; border:none; padding-left: 10px;  background-color: #E0F1FD; " id="Civil_Status" name="Civil_Status">
                                           Spouse Name
                                           <input type="text" class="form-control" style="color:#4a4949; border:none; padding-left: 10px;  background-color: #E0F1FD; " id="Spouse_Name" name="Spouse_Name">
                                           
                                          </td>
                                          <td style="border: none; width: 190px" >
                                            Date Hired
                                            <br> <input type="text" class="form-control" style="color:#4a4949; border:none; padding-left: 10px;  background-color: #E0F1FD; " id="Date_Hired" name="Date_Hired" >
                                           
                                            Tel / Mobile No. 
                                            <br> <input type="text" class="form-control" style="color:#4a4949; border:none; padding-left: 10px;  background-color: #E0F1FD; " id="CA_Tel_MobileNo" name="CA_Tel_MobileNo" >
                                            Date of Birth 
                                           <input type="text" class="form-control" style="color:#4a4949; border:none; padding-left: 10px;  background-color: #E0F1FD; " id="Date_Of_Birth" name="Date_Of_Birth">
                                            Height 
                                           <input type="text" class="form-control" style="color:#4a4949; border:none; padding-left: 10px;  background-color: #E0F1FD; " id="Height" name="Height">
                                            Weight
                                           <input type="text" class="form-control" style="color:#4a4949; border:none; padding-left: 10px;  background-color: #E0F1FD; " id="Weight" name="Weight">
                                           
                                        </td>
                                        </tr>
                                       
                                    </table>
                                    <table class="table" style="border: 2px solid #e3e6f0; color:#4a4949; font-weight: bold" cellspacing="0" >
                                        <tr style="border: 2px solid #e3e6f0"> 
                                            <th colspan="5" style="color:#ffffff; background-color: #003459">Current Address</th>
                                        </tr>
                                        <tr style="border: none">
                                          <td style="border: none" >Rm/Flr/unit#/Bldg 
                                           <input type="text" class="form-control" style="border:none; padding-left: 10px;  background-color: #E0F1FD; " id="CA_Rm_Flr_UnitNo_Bldgname" name="CA_Rm_Flr_UnitNo_Bldgname">  
                                           Brgy / District 
                                           <input type="text" class="form-control" style="color:#4a4949; border:none; padding-left: 10px;  background-color: #E0F1FD; " id="A_Barangay_District_Locality" name="A_Barangay_District_Locality">
                                           Zipcode 
                                           <input type="text" class="form-control" style="color:#4a4949; border:none; padding-left: 10px;  background-color: #E0F1FD; " id="CA_Postal_Code" name="CA_Postal_Code">
                                         
                                          </td>
                                          <td style="border: none" >
                                          House Lot & Blk No. 
                                            <br> <input type="text" class="form-control" style="color:#4a4949; border:none; padding-left: 10px;  background-color: #E0F1FD; " id="CA_House_Lot_BlkNo" name="CA_House_Lot_BlkNo" > 
                                            City 
                                           <input type="text" class="form-control" style="color:#4a4949; border:none; padding-left: 10px;  background-color: #E0F1FD; " id="CA_City_Municipality" name="CA_City_Municipality">
                                         
                                          </td>
                                          <td style="border: none" >
                                          Street 
                                            <br> <input type="text" class="form-control" style="color:#4a4949; border:none; padding-left: 10px;  background-color: #E0F1FD; " id="CA_Street_Name" name="CA_Street_Name" >
                                            Province 
                                           <input type="text" class="form-control" style="color:#4a4949; border:none; padding-left: 10px;  background-color: #E0F1FD; " id="CA_Province" name="CA_Province">
                                         
                                          </td>
                                          <td style="border: none; width: 190px" >
                                          Subdivision 
                                            <br> <input type="text" class="form-control" style="color:#4a4949; border:none; padding-left: 10px;  background-color: #E0F1FD; " id="CA_Subdivision" name="CA_Subdivision" >
                                            Country 
                                           <input type="text" class="form-control" style="color:#4a4949; border:none; padding-left: 10px;  background-color: #E0F1FD; " id="CA_Country" name="CA_Country">
                                          
                                        </td>
                                        </tr>
                                       
                                    </table>
                                    <table class="table" style="border: 2px solid #e3e6f0; color:#4a4949; font-weight: bold" cellspacing="0" >
                                        <tr style="border: 2px solid #e3e6f0"> 
                                            <th colspan="5" style="color:#ffffff; background-color: #003459">Permanent Address</th>
                                        </tr>
                                        <tr style="border: none">
                                          <td style="border: none" >Rm/Flr/unit#/Bldg 
                                           <input type="text" class="form-control" style="border:none; padding-left: 10px;  background-color: #E0F1FD; " id="PA_Rm_Flr_UnitNo_Bldgname" name="PA_Rm_Flr_UnitNo_Bldgname">  
                                           Brgy / District 
                                           <input type="text" class="form-control" style="color:#4a4949; border:none; padding-left: 10px;  background-color: #E0F1FD; " id="PA_Barangay_District_Locality" name="PA_Barangay_District_Locality">
                                           Zipcode 
                                           <input type="text" class="form-control" style="color:#4a4949; border:none; padding-left: 10px;  background-color: #E0F1FD; " id="PA_Postal_Code" name="PA_Postal_Code">
                                         
                                          </td>
                                          <td style="border: none" >
                                          House Lot & Blk No. 
                                            <br> <input type="text" class="form-control" style="color:#4a4949; border:none; padding-left: 10px;  background-color: #E0F1FD; " id="PA_House_Lot_BlkNo" name="PA_House_Lot_BlkNo" > 
                                            City 
                                           <input type="text" class="form-control" style="color:#4a4949; border:none; padding-left: 10px;  background-color: #E0F1FD; " id="PA_City_Municipality" name="PA_City_Municipality">
                                         
                                          </td>
                                          <td style="border: none" >
                                          Street 
                                            <br> <input type="text" class="form-control" style="color:#4a4949; border:none; padding-left: 10px;  background-color: #E0F1FD; " id="PA_Street_Name" name="PA_Street_Name" >
                                            Province 
                                           <input type="text" class="form-control" style="color:#4a4949; border:none; padding-left: 10px;  background-color: #E0F1FD; " id="PA_Province" name="PA_Province">
                                         
                                          </td>
                                          <td style="border: none; width: 190px" >
                                          Subdivision 
                                            <br> <input type="text" class="form-control" style="color:#4a4949; border:none; padding-left: 10px;  background-color: #E0F1FD; " id="PA_Subdivision" name="PA_Subdivision" >
                                            Country 
                                           <input type="text" class="form-control" style="color:#4a4949; border:none; padding-left: 10px;  background-color: #E0F1FD; " id="PA_Country" name="PA_Country">
                                          
                                        </td>
                                        </tr>
                                       
                                    </table>
                                    <table class="table" style="border: 2px solid #e3e6f0; color:#4a4949; font-weight: bold" cellspacing="0" >
                                        <tr style="border: 2px solid #e3e6f0"> 
                                            <th colspan="5" style="color:#ffffff; background-color: #003459">Benefits </th>
                                        </tr>
                                        <tr style="border: none">
                                          <td style="border: none" >SSS No.
                                           <input type="text" class="form-control" style="color:#4a4949; border:none; padding-left: 10px;  background-color: #E0F1FD; "  id="SSS_No" name="SSS_No">  
                                          
                                          </td>
                                          <td style="border: none" >
                                          Philhealth No. 
                                            <br> <input type="text" class="form-control" style="color:#4a4949; border:none; padding-left: 10px;  background-color: #E0F1FD; " id="Philhealth_No" name="Philhealth_No" > 
                                           
                                          </td>
                                          <td style="border: none" >
                                          T.I.N No.
                                            <br> <input type="text" class="form-control" style="color:#4a4949; border:none; padding-left: 10px;  background-color: #E0F1FD; " id="TIN_No" name="TIN_No" >
                                           
                                          </td>
                                          <td style="border: none; width: 190px" >
                                          HDMF No.
                                            <br> <input type="text" class="form-control" style="color:#4a4949; border:none; padding-left: 10px;  background-color: #E0F1FD; " id="HDMF_No" name="HDMF_No" >
                                           
                                        </td>
                                        </tr>
                                       
                                    </table>
                                    <table class="table" style="border: 2px solid #e3e6f0; color:#4a4949; font-weight: bold" cellspacing="0" >
                                        <tr style="border: 2px solid #e3e6f0"> 
                                            <th colspan="5" style="color:#ffffff; background-color: #003459">Educational Background</th>
                                        </tr>
                                        <tr style="border: none">
                                            <th style="text-align:center; border: none; "> TRAINING</th>
                                            <th style="text-align:center; border: none "> COURSE / DEGREE</th>
                                            <th style="text-align:center; border: none "> FROM</th>
                                            <th style="text-align:center; border: none "> TO</th>
                                            <th style="text-align:center; border: none "> SCHOOL / UNIVERSITY</th>
                                        </tr>
                                        
                                     <tr>
                                         <td style="border: none">POST GRADUTE</td>
                                         <td style="border: none"><input class="form-control" style="color:#4a4949; border:none; padding-left: 10px;  background-color: #E0F1FD; "  id="PG_Course" name="PG_Course" type="text" class="viewRecord" ></td>
                                         <td style="border: none"><input class="form-control" style="color:#4a4949; border:none; padding-left: 10px;  background-color: #E0F1FD; "  id="PG_From" name="PG_From" type="date" class="viewRecord" ></td>
                                         <td style="border: none"><input class="form-control"  style="color:#4a4949; border:none; padding-left: 10px;  background-color: #E0F1FD; " id="PG_To" name="PG_To" type="date" class="viewRecord" ></td>
                                         <td style="border: none"><input class="form-control"  style="color:#4a4949; border:none; padding-left: 10px;  background-color: #E0F1FD; " id="PG_School" name="PG_School" type="text" class="viewRecord" ></td>
                                     </tr>

                                     <tr>
                                         <td style="border: none">COLLEGE</td>
                                         <td style="border: none"><input class="form-control" style="color:#4a4949; border:none; padding-left: 10px;  background-color: #E0F1FD; " id="COL_Course" name="COL_Course" type="text" class="viewRecord" ></td>
                                         <td style="border: none"><input class="form-control" style="color:#4a4949; border:none; padding-left: 10px;  background-color: #E0F1FD; " id="COL_From" name="COL_From" type="date" class="viewRecord"></td>
                                         <td style="border: none"><input class="form-control" style="color:#4a4949; border:none; padding-left: 10px;  background-color: #E0F1FD; " id="COL_To" name="COL_To" type="date" class="viewRecord" ></td>
                                         <td style="border: none"><input class="form-control" style="color:#4a4949; border:none; padding-left: 10px;  background-color: #E0F1FD; " id="COL_School" name="COL_School" type="text" class="viewRecord" ></td>
                                     </tr>

                                     <tr>
                                         <td style="border: none">VOCATIONAL</td>
                                         <td style="border: none"><input class="form-control" style="color:#4a4949; border:none; padding-left: 10px;  background-color: #E0F1FD; " id="VOC_Course" name="VOC_Course" type="text" class="viewRecord" ></td>
                                         <td style="border: none"><input class="form-control" style="color:#4a4949; border:none; padding-left: 10px;  background-color: #E0F1FD; " id="VOC_From" name="VOC_From" type="date" class="viewRecord" ></td>
                                         <td style="border: none"><input class="form-control" style="color:#4a4949; border:none; padding-left: 10px;  background-color: #E0F1FD; " id="VOC_To" name="VOC_To" type="date" class="viewRecord" ></td>
                                         <td style="border: none"><input class="form-control" style="color:#4a4949; border:none; padding-left: 10px;  background-color: #E0F1FD; " id="VOC_School" name="VOC_School" type="text" class="viewRecord" ></td>
                                     </tr>

                                     <tr>
                                         <td style="border: none">SECONDARY</td>
                                         <td style="border: none"><input class="form-control" style="color:#4a4949; border:none; padding-left: 10px;  background-color: #E0F1FD; " id="SEC_Course" name="SEC_Course" type="text" class="viewRecord" ></td>
                                         <td style="border: none"><input class="form-control" style="color:#4a4949; border:none; padding-left: 10px;  background-color: #E0F1FD; " id="SEC_From" name="SEC_From" type="date" class="viewRecord" ></td>
                                         <td style="border: none"><input class="form-control" style="color:#4a4949; border:none; padding-left: 10px;  background-color: #E0F1FD; " id="SEC_To" name="SEC_To" type="date" class="viewRecord" ></td>
                                         <td style="border: none"><input class="form-control" style="color:#4a4949; border:none; padding-left: 10px;  background-color: #E0F1FD; " id="SEC_School" name="SEC_School" type="text" class="viewRecord" ></td>
                                     </tr>

                                     <tr>
                                         <td style="border: none">ELEMENTARY</td>
                                         <td style="border: none"><input class="form-control"style="color:#4a4949; border:none; padding-left: 10px;  background-color: #E0F1FD; "  id="ELEM_Course" name="ELEM_Course" type="text" class="viewRecord" ></td>
                                         <td style="border: none"><input class="form-control" style="color:#4a4949; border:none; padding-left: 10px;  background-color: #E0F1FD; " id="ELEM_From" name="ELEM_From" type="date" class="viewRecord" ></td>
                                         <td style="border: none"><input class="form-control" style="color:#4a4949; border:none; padding-left: 10px;  background-color: #E0F1FD; " id="ELEM_To" name="ELEM_To" type="date" class="viewRecord" ></td>
                                         <td style="border: none"><input class="form-control" style="color:#4a4949; border:none; padding-left: 10px;  background-color: #E0F1FD; " id="ELEM_School" name="ELEM_School" type="text" class="viewRecord" ></td>
                                     </tr>
                                    </table>
                </div>         
             <!-- Ben -->
               
          </div>       
        </div>   

            </div> 
      
                    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="save">Save changes</button>
      </div>
    </div>
  </div>
</div>

</form>

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
                                                    const Department = tableRowElement.getElementsByClassName('Department')[0].innerHTML;
                                                    document.getElementById('Department').value = Department;
                                                    const Position = tableRowElement.getElementsByClassName('Position')[0].innerHTML;
                                                    document.getElementById('Position').value = Position;
                                                    const DateOfBirth = tableRowElement.getElementsByClassName('Date_Of_Birth')[0].innerHTML;
                                                    document.getElementById('Date_Of_Birth').value = DateOfBirth;

                                                    const Place_Of_Birth = tableRowElement.getElementsByClassName('Place_Of_Birth')[0].innerHTML;
                                                    document.getElementById('Place_Of_Birth').value = Place_Of_Birth;
                                                    const Nationality = tableRowElement.getElementsByClassName('Nationality')[0].innerHTML;
                                                    document.getElementById('Nationality').value = Nationality;
                                                    const Civil_Status = tableRowElement.getElementsByClassName('Civil_Status')[0].innerHTML;
                                                    document.getElementById('Civil_Status').value = Civil_Status;

                                                    const Height = tableRowElement.getElementsByClassName('Height')[0].innerHTML;
                                                    document.getElementById('Height').value = Height;
                                                    const Weight = tableRowElement.getElementsByClassName('Weight')[0].innerHTML;
                                                    document.getElementById('Weight').value = Weight;
                                                  
                                                    
           

        

        openModal();
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
    </script>
</body>

</html>
<?php } else {
  
  header("location: index.php");
 
}?>

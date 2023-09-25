<?php
session_start();
include 'connection.php';
include 'session.php';
include 'fetch-data.php';

if(isset($_SESSION['Access']) && $_SESSION['Access'] == "Admin"  && $_SESSION['Department'] == "Marketing" && $_SESSION['Position'] == "SalesCoordinator") {

?>
<!DOCTYPE html>
<html lang="en">

<head>

    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>South Spring</title>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">
   var table2_Props = {
    col_0: "select",
    col_4: "none",
    display_all_text: " [ Show all ] ",
    sort_select: true
};
var tf2 = setFilterGrid("tableData", table2_Props);
</script>
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
  width:95%;

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
                color: #000000;  
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
        color: #000000;
      
        }
        .Sedge_column1 {
        float: left;
        width: 25%;
        padding: 10px;
       color: #000000;
        }
         .Sedge_column2 {
        float: left;
        width: 25%;
        padding: 10px;
       color: #000000;
        }

        .Sedge_1column {
        float: left;
        width: 100%;
        color: #000000;

        }
         .Sedge_Button {
        float: right;
        width: 100px;
        margin-right: 100px;

        }
        .Sedge_modal_div1 {
        float: left;
        width: 75%;
        color: #000000;
        padding: 15px;
        }
        .Sedge_modal_div2 {
        float: left;
        width: 25%;
        color: #000000;
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
 .bg-sedge-primary-color{
        background-color: #003459;
    }
    table.dataTable thead .sorting:after,
    table.dataTable thead .sorting:before,
    table.dataTable thead .sorting_asc:after,
    table.dataTable thead .sorting_asc:before,
    table.dataTable thead .sorting_asc_disabled:after,
    table.dataTable thead .sorting_asc_disabled:before,
    table.dataTable thead .sorting_desc:after,
    table.dataTable thead .sorting_desc:before,
    table.dataTable thead .sorting_desc_disabled:after,
    table.dataTable thead .sorting_desc_disabled:before {
  bottom: .5em;
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
.bg-sedge-primary-color{
        background-color: #003459;
    }
.show-modal1 {
    opacity: 1;
    visibility: visible;
    transform: scale(1.0);
    transition: visibility 0s linear 0s, opacity 0.25s 0s, transform 0.25s;
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
.print-button {
  background-color: green;
  color: #fff;
  border: none;
  padding: 10px 20px;
  font-size: 16px;
  cursor: pointer;
}

.print-button:hover {
  background-color: darkgreen;
}

.print-button:focus {
  outline: none;
}
.voucher-button {
  background-color: maroon;
  color: #fff;
  border: none;
  padding: 10px 20px;
  font-size: 16px;
  cursor: pointer;
}

.voucher-button:hover {
  background-color: darkred;
}

.voucher-button:focus {
  outline: none;
}
.paymentButton {
  background-color: green;
  color: #fff;
  border: none;
  padding: 5px 10px;
  font-size: 12px;
  cursor: pointer;
  display: flex;
  align-items: center;
}

.icon {
  margin-right: 5px;
}

.fa {
  font-size: 12px;
}

.save-button {
  background-color: #007bff;
  color: #fff;
  border: none;
  padding: 10px 20px;
  font-size: 16px;
  cursor: pointer;
}

.save-button:hover {
  background-color: #0056b3;
}

.save-button:focus {
  outline: none;
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
.table-cell {
  white-space: nowrap;
}
.view-record-button {
  background-color: #007bff;
  color: #fff;
  border: none;
  padding: 5px 10px;
  font-size: 12px;
  cursor: pointer;
  display: flex;
  align-items: center;
}

.view-record-button i {
  margin-right: 5px;
}

    </style>
<link rel="stylesheet"
href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"/>
    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <style type="text/css">
		.error {
			color:red;
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
            <span>Marketing Department</span></a>                 
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
     
     <li class="nav-item ">
            <a class="nav-link" href="SalesDashboard.php">
            <i class="fas fa-fw fa-tachometer-alt"></i></i>
                <span>Dashboard</span></a>
        </li>
        <li class="nav-item ">
            <a class="nav-link" href="sales_reservation.php">
            <i class="fas fa fa-ticket"></i></i>
                <span>Reservation</span></a>
        </li>
    
    <li class="nav-item ">
            <a class="nav-link" href="LotCryptDescription.php">
            <i class="fas far fa-calendar-check"></i></i>
                <span>Buyer Validation Process</span></a>
        </li>
        <li class="nav-item ">
            <a class="nav-link" href="ViewRecordBuyer.php">
            <i class="fas fa-file-alt"></i></i>
                <span>History</span></a>
        </li>
    <li class="nav-item ">
            <a class="nav-link" href="Inventory.php">
            <i class="fas fa-fw fas fa-database"></i></i>
                <span>Inventory</span></a>
        </li>

        <li class="nav-item ">
            <a class="nav-link" href="ChartSales.php">
            <i class="fas fa-fw fa fa-area-chart"></i></i>
                <span>Chart</span></a>
        </li>
        
        <li class="nav-item ">
            <a class="nav-link" href="AboutUs.php">
            <i class="fas fa-fw fas fa-user-tie"></i></i>
                <span>About Us</span></a>
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
                <div class="container-sedge">
                        
                        <div class="Image-Alsgro">
                        <img src="\AccountingSoftwareProposal\startbootstrap-sb-admin-2-gh-pages\startbootstrap-sb-admin-2-gh-pages\img\SouthSpring.png"  width="150" height="60"></img>
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
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $Name; ?></span>
                            <img class="img-profile rounded-circle"
                                src="img/undraw_profile.svg">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                            aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="#">
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

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Earnings (Monthly)</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Earnings (Annual) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                        Earnings (Annual)</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

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
                    <div class="card-header py-3" style="background-color: #003459;">
                        <h6 class="m-0 font-weight-bold " style=" color: #ffffff;">Admin</h6> 
                    </div>
                  
                    <div class="card-body">
                        <div class="table-responsive" style="color: #4a4949 ">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead> 
                                        <tr class="header" style="color: #ffffff; background-color: #007ea7; font-size: 14px">
                                            <th scope="col" hidden></th>
                                            <th scope="col">Customer Code</th>
                                            <th scope="col" >Name</th>
                                            <th scope="col"  hidden>Status</th>
                                            <th scope="col" >Phone</th>
                                            <th scope="col" >Reservation Date & Time</th>  
                                            <th scope="col"  >Tools</th>

                                            <th scope="col" style= "width: 15%" hidden></th>
                                            <th scope="col" style= "width: 15%" hidden></th>
                                            <th scope="col" style= "width: 15%" hidden></th>
                                            <th scope="col" style= "width: 15%" hidden></th>
                                            <th scope="col" style= "width: 15%" hidden></th>
                                            <th scope="col" style= "width: 15%" hidden></th>
                                            <th scope="col" style= "width: 15%" hidden></th>
                                            <th scope="col" style= "width: 15%" hidden></th>
                                            <th scope="col" style= "width: 15%" hidden></th>
                                            <th scope="col" style= "width: 15%" hidden></th>
                                            <th scope="col" style= "width: 15%" hidden></th>
                                            <th scope="col" style= "width: 15%" hidden></th>
                                            <th scope="col" style= "width: 15%" hidden></th>
                                            <th scope="col" style= "width: 15%" hidden></th>
                                            <th scope="col" style= "width: 15%" hidden></th>
                                            <th scope="col" style= "width: 15%" hidden></th>
                                            <th scope="col" style= "width: 15%" hidden></th>
                                            <th scope="col" style= "width: 15%" hidden></th>
                                            <th scope="col" style= "width: 15%" hidden></th>
                                            <th scope="col" style= "width: 15%" hidden></th>
                                            <th scope="col" style= "width: 15%" hidden></th>
                                            <th scope="col" style= "width: 15%" hidden></th>
                                            <th scope="col" style= "width: 15%" hidden></th>
                                            <th scope="col" style= "width: 15%" hidden></th>
                                            <th scope="col" style= "width: 15%" hidden></th>
                                            <th scope="col" style= "width: 15%" hidden></th>
                                            <th scope="col" style= "width: 15%" hidden></th>
                                            <th scope="col" style= "width: 15%" hidden></th>
                                            <th scope="col" style= "width: 15%" hidden></th>
                                            <th scope="col" style= "width: 15%" hidden></th>
                                            <th scope="col" style= "width: 15%" hidden></th>
                                            <th scope="col" style= "width: 15%" hidden></th>
                                            <th scope="col" style= "width: 15%" hidden></th>
                                            <th scope="col" style= "width: 15%" hidden></th>


                                        </tr>
                                </thead>
                                <tfoot>  
                                        <tr style="color: #ffffff; background-color: #007ea7; font-size: 14px">
                                            <th class="th-sm" hidden></th>
                                            <th class="th-sm">Customer Code</th>                        
                                            <th class="th-sm">Name</th>
                                            <th class="th-sm" hidden>Status</th>
                                            <th class="th-sm">Phone</th>
                                            <th class="th-sm">Reservation Date & Time</th>
                                            <th class="th-sm">Tools</th>

                                            
                                            <th scope="col" style= "width: 15%" hidden></th>
                                            <th scope="col" style= "width: 15%" hidden></th>
                                            <th scope="col" style= "width: 15%" hidden></th>
                                            <th scope="col" style= "width: 15%" hidden></th>
                                            <th scope="col" style= "width: 15%" hidden></th>
                                            <th scope="col" style= "width: 15%" hidden></th>
                                            <th scope="col" style= "width: 15%" hidden></th>
                                            <th scope="col" style= "width: 15%" hidden></th>
                                            <th scope="col" style= "width: 15%" hidden></th>
                                            <th scope="col" style= "width: 15%" hidden></th>
                                            <th scope="col" style= "width: 15%" hidden></th>
                                            <th scope="col" style= "width: 15%" hidden></th>
                                            <th scope="col" style= "width: 15%" hidden></th>
                                            <th scope="col" style= "width: 15%" hidden></th>
                                            <th scope="col" style= "width: 15%" hidden></th>
                                            <th scope="col" style= "width: 15%" hidden></th>
                                            <th scope="col" style= "width: 15%" hidden></th>
                                            <th scope="col" style= "width: 15%" hidden></th>
                                            <th scope="col" style= "width: 15%" hidden></th>
                                            <th scope="col" style= "width: 15%" hidden></th>
                                            <th scope="col" style= "width: 15%" hidden></th>
                                            <th scope="col" style= "width: 15%" hidden></th>
                                            <th scope="col" style= "width: 15%" hidden></th>
                                            <th scope="col" style= "width: 15%" hidden></th>
                                            <th scope="col" style= "width: 15%" hidden></th>
                                            <th scope="col" style= "width: 15%" hidden></th>
                                            <th scope="col" style= "width: 15%" hidden></th>
                                            <th scope="col" style= "width: 15%" hidden></th>
                                            <th scope="col" style= "width: 15%" hidden></th>
                                            <th scope="col" style= "width: 15%" hidden></th>
                                            <th scope="col" style= "width: 15%" hidden></th>
                                            <th scope="col" style= "width: 15%" hidden></th>
                                            <th scope="col" style= "width: 15%" hidden></th>
                                            <th scope="col" style= "width: 15%" hidden></th>

                                        </tr>  
                                </tfoot>
                                <tbody>
                                    <?php
                                    $sales_query = "SELECT * FROM buyersinformationsheet WHERE `Status` = 'Reserved'";
                                    $sales_result = mysqli_query($connection, $sales_query);
                                    if (mysqli_num_rows($sales_result) > 0) {
                                       while ($row = mysqli_fetch_assoc($sales_result)) {
                                      
                                    ?>
                                    <tr style="color: #4a4949; font-size: 13px">
                                       <td class="id table-cell" name="id" hidden><?=$row['id1']?></td>
                                       <td class="customerCode table-cell" name="customerCode" style="font-size: 14px;"><?=$row['customerCode']?> <a href="#" style="float: right" onclick="toggleModal(this, 1)" data-toggle="modal" data-target="#viewBuyer"><i class="fas fa-eye"></i></a></td>
                                       <td class="Fullname table-cell" name="Fullname" style="font-size: 14px;"><?=$row['Firstname']?> <?=$row['Middlename']?> <?=$row['Lastname']?> </td>
                                       <td class="Status table-cell" name="Status" style="font-size: 14px;" hidden><?=$row['Status']?></td>
                                       <td class="M_Phone table-cell" name="M_Phone" style="font-size: 14px;"><?=$row['Mobile_Phone']?></td> 
                                       <td class="B_Date table-cell" name="B_Date" ><?=$row['dateCreated']?></td>  

                                       <td class="Sex" name="Sex" hidden><?=$row['Sex']?></td>  
                                       <td class="BusinessPhone" name="BusinessPhone" hidden><?=$row['BusinessPhone']?></td>  
                                       <td class="DOB" name="DOB" hidden><?=$row['DOB']?></td>  
                                       <td class="MaritalStatus" name="MaritalStatus" hidden><?=$row['MaritalStatus']?></td>  
                                       <td class="EmailAddress" name="EmailAddress" hidden><?=$row['EmailAddress']?></td>  
                                       <td class="Height" name="Height" hidden><?=$row['Height']?></td>  
                                       <td class="Weight" name="Weight" hidden><?=$row['Weight']?></td>  
                                       <td class="R_Address" name="R_Address" hidden><?=$row['R_BlkLot']?> <?=$row['R_City']?> <?=$row['R_Province']?> <?=$row['R_Country']?> <?=$row['R_Zipcode']?></td>  
                                       <td class="B_Address" name="B_Address" hidden><?=$row['B_BlkLot']?> <?=$row['B_City']?> <?=$row['B_Province']?> <?=$row['B_Zipcode']?></td>  
                                       <td class="Mobile_Phone" name="Mobile_Phone" hidden><?=$row['Mobile_Phone']?></td>  
                                       <td class="Residential_Phone" name="Residential_Phone"hidden><?=$row['Residential_Phone']?></td>  
                                       <td class="IssuedAt" name="IssuedAt" hidden><?=$row['IssuedAt']?></td>  
                                       <td class="IssuedOn" name="IssuedOn" hidden><?=$row['IssuedOn']?></td>  
                                       <td class="ResidentSince" name="ResidentSince" hidden><?=$row['ResidentSince']?></td>  
                                       <td class="SSS_No" name="SSS_No" hidden><?=$row['SSS_No']?></td>  
                                       <td class="HDMF_No" name="HDMF_No" hidden><?=$row['HDMF_No']?></td>  
                                       <td class="TIN" name="TIN" hidden><?=$row['TIN']?></td>  
                                       <td class="NBI" name="NBI" hidden><?=$row['NBI']?></td>  
                                       <td class="MotherName" name="MotherName" hidden><?=$row['MotherName']?></td>  
                                       <td class="FatherName" name="FatherName" hidden><?=$row['FatherName']?></td>  
                                       <td class="SpouseName" name="SpouseName" hidden><?=$row['SpouseName']?></td>  
                                       
                                       <td class="ChildrensName" name="ChildrensName" hidden><?=$row['ChildrensName']?></td>  
                                       <td class="MotherOccupation" name="MotherOccupation" hidden><?=$row['MotherOccupation']?></td>  
                                       <td class="FatherOccupation" name="FatherOccupation" hidden><?=$row['FatherOccupation']?></td>  
                                       <td class="SpouseOccupation" name="SpouseOccupation" hidden><?=$row['SpouseOccupation']?></td>  
                                       <td class="Employment_Status" name="Employment_Status" hidden><?=$row['Employment_Status']?></td>  
                                       <td class="SourceOfIncome" name="SourceOfIncome" hidden><?=$row['SourceOfIncome']?></td>  
                                       <td class="EmployerBusinessName" name="EmployerBusinessName" hidden><?=$row['EmployerBusinessName']?></td>  
                                       <td class="NatureOfEmployeerBusiness" name="NatureOfEmployeerBusiness" hidden><?=$row['NatureOfEmployeerBusiness']?></td>  
                                       
                                       <td class="PositionInCompany" name="PositionInCompany" hidden><?=$row['PositionInCompany']?></td>  
                                       <td class="PersonalMonthlyIncome" name="PersonalMonthlyIncome" hidden><?=$row['PersonalMonthlyIncome']?></td>  
                                       <td class="EmployementDate" name="EmployementDate" hidden><?=$row['EmployementDate']?></td>  
                                       <td class="Citizenship" name="Citizenship" hidden><?=$row['Citizenship']?></td>  
                                       <td class="Filename" name="Filename" hidden><?php echo 'uploads/' .$row['Filename'] ?></td>
                                       
                                       <td class="table-cell">  
                                               <script>
                                                   let tableRowElement;
                                                   function toggleModal(element) {
                                                   tableRowElement = element.parentElement.parentElement;
                                                   
                                                   
                                                   const Filename12 = tableRowElement.getElementsByClassName('Filename')[0].innerHTML;
                                                   document.getElementById('blah').src = Filename12;

                                                   const id = tableRowElement.getElementsByClassName('id')[0].innerHTML;
                                                   document.getElementById('id1').value = id;

                                                   const customerCode = tableRowElement.getElementsByClassName('customerCode')[0].innerHTML;
                                                   document.getElementById('customerCode1').value = customerCode;

                                                   const Fullname = tableRowElement.getElementsByClassName('Fullname')[0].innerHTML;
                                                   document.getElementById('Fullname1').value = Fullname;

                                                   const B_Date = tableRowElement.getElementsByClassName('B_Date')[0].innerHTML;
                                                   document.getElementById('date1').value = B_Date;

                                                   const Fullname123 = tableRowElement.getElementsByClassName('Fullname')[0].innerHTML;
                                                   document.getElementById('Fullname2').value = Fullname123;

                                                   const customerCode123 = tableRowElement.getElementsByClassName('customerCode')[0].innerHTML;
                                                   document.getElementById('CustomerCode123').value = customerCode123;
                                                   
                                                   const date23 = tableRowElement.getElementsByClassName('B_Date')[0].innerHTML;
                                                   document.getElementById('date23').value = date23;
                                                   

                                                   const customerCode12 = tableRowElement.getElementsByClassName('customerCode')[0].innerHTML;
                                                   document.getElementById('CustomerCode').value = customerCode12;

                                                   const Sex12 = tableRowElement.getElementsByClassName('Sex')[0].innerHTML;
                                                   document.getElementById('Sex').value = Sex12;

                                                   const BusinessPhone12 = tableRowElement.getElementsByClassName('BusinessPhone')[0].innerHTML;
                                                   document.getElementById('BusinessPhoneFax').value = BusinessPhone12;

                                                   
                                                   const B_Date12 = tableRowElement.getElementsByClassName('B_Date')[0].innerHTML;
                                                   document.getElementById('Date').value = B_Date12;
                                                   
                                                   const Fullname12 = tableRowElement.getElementsByClassName('Fullname')[0].innerHTML;
                                                   document.getElementById('Name').value = Fullname12;


                                                   
                                                   const DOB12 = tableRowElement.getElementsByClassName('DOB')[0].innerHTML;
                                                   document.getElementById('DateBirth').value = DOB12;
                                                   
                                                   const MaritalStatus12 = tableRowElement.getElementsByClassName('MaritalStatus')[0].innerHTML;
                                                   document.getElementById('MaritalStatus').value = MaritalStatus12;
                                                   
                                                   
                                                   const EmailAddress = tableRowElement.getElementsByClassName('EmailAddress')[0].innerHTML;
                                                   document.getElementById('Email').value = EmailAddress;
                                                   
                                                   
                                                   const Height12 = tableRowElement.getElementsByClassName('Height')[0].innerHTML;
                                                   document.getElementById('Height').value = Height12;
                                                   
                                                   const Weight12 = tableRowElement.getElementsByClassName('Weight')[0].innerHTML;
                                                   document.getElementById('Weight').value = Weight12;
                                                   
                                                   const R_Address12 = tableRowElement.getElementsByClassName('R_Address')[0].innerHTML;
                                                   document.getElementById('ResidentAddress').value = R_Address12;
                                                   
                                                   const Residential_Phone12 = tableRowElement.getElementsByClassName('Residential_Phone')[0].innerHTML;
                                                   document.getElementById('ResidentialPhoneno').value = Residential_Phone12;
                                                   
                                                   const B_Address12 = tableRowElement.getElementsByClassName('B_Address')[0].innerHTML;
                                                   document.getElementById('BillingAddress').value = B_Address12;
                                                   
                                                   const Mobile_Phone12 = tableRowElement.getElementsByClassName('Mobile_Phone')[0].innerHTML;
                                                   document.getElementById('MobilePhoneno').value = Mobile_Phone12;
                                                   
                                                   const IssuedAt12 = tableRowElement.getElementsByClassName('IssuedAt')[0].innerHTML;
                                                   document.getElementById('IssuedAt').value = IssuedAt12;
                                                   
                                                   const IssuedOn12 = tableRowElement.getElementsByClassName('IssuedOn')[0].innerHTML;
                                                   document.getElementById('IssuedOn').value = IssuedOn12;
                                                   
                                                   const ResidentSince12 = tableRowElement.getElementsByClassName('ResidentSince')[0].innerHTML;
                                                   document.getElementById('ResidentSince').value = ResidentSince12;
                                                   
                                                   const SSS_No12 = tableRowElement.getElementsByClassName('SSS_No')[0].innerHTML;
                                                   document.getElementById('GSIS').value = SSS_No12;
                                                   
                                                   const HDMF_No12 = tableRowElement.getElementsByClassName('HDMF_No')[0].innerHTML;
                                                   document.getElementById('HDMF').value = HDMF_No12;
                                                   
                                                   const TIN12 = tableRowElement.getElementsByClassName('TIN')[0].innerHTML;
                                                   document.getElementById('TIN').value = TIN12;
                                                   
                                                   const  NBI12= tableRowElement.getElementsByClassName('NBI')[0].innerHTML;
                                                   document.getElementById('NBI').value = NBI12;
                                                   
                                                   const MotherName12 = tableRowElement.getElementsByClassName('MotherName')[0].innerHTML;
                                                   document.getElementById('MotherName').value = MotherName12;

                                                   const FatherName12 = tableRowElement.getElementsByClassName('FatherName')[0].innerHTML;
                                                   document.getElementById('FatherName').value = FatherName12;
                                                   
                                                   const SpouseName12 = tableRowElement.getElementsByClassName('SpouseName')[0].innerHTML;
                                                   document.getElementById('SpouseName').value = SpouseName12;
                                                   
                                                   const ChildrensName12 = tableRowElement.getElementsByClassName('ChildrensName')[0].innerHTML;
                                                   document.getElementById('ChildrenName').value = ChildrensName12;
                                                   
                                                   const MotherOccupation12 = tableRowElement.getElementsByClassName('MotherOccupation')[0].innerHTML;
                                                   document.getElementById('MotherOccupation').value = MotherOccupation12;

                                                   const FatherOccupation12 = tableRowElement.getElementsByClassName('FatherOccupation')[0].innerHTML;
                                                   document.getElementById('FatherOccupation').value = FatherOccupation12;

                                                   const SpouseOccupation12 = tableRowElement.getElementsByClassName('SpouseOccupation')[0].innerHTML;
                                                   document.getElementById('SpouseOccupation').value = SpouseOccupation12;

                                                   const Employment_Status12 = tableRowElement.getElementsByClassName('Employment_Status')[0].innerHTML;
                                                   document.getElementById('Employment').value = Employment_Status12;

                                                   const SourceOfIncome12 = tableRowElement.getElementsByClassName('SourceOfIncome')[0].innerHTML;
                                                   document.getElementById('Source').value = SourceOfIncome12;

                                                   const EmployerBusinessName12 = tableRowElement.getElementsByClassName('EmployerBusinessName')[0].innerHTML;
                                                   document.getElementById('Employer').value = EmployerBusinessName12;

                                                   const NatureOfEmployeerBusiness12 = tableRowElement.getElementsByClassName('NatureOfEmployeerBusiness')[0].innerHTML;
                                                   document.getElementById('Nature').value = NatureOfEmployeerBusiness12;

                                                   const PositionInCompany12 = tableRowElement.getElementsByClassName('PositionInCompany')[0].innerHTML;
                                                   document.getElementById('PositionCompany').value = PositionInCompany12;

                                                   const PersonalMonthlyIncome12 = tableRowElement.getElementsByClassName('PersonalMonthlyIncome')[0].innerHTML;
                                                   document.getElementById('PersonalMonthlyIncome').value = PersonalMonthlyIncome12;

                                                   const EmployementDate12 = tableRowElement.getElementsByClassName('EmployementDate')[0].innerHTML;
                                                   document.getElementById('EmploymentbusinessEstablished').value = EmployementDate12;

                                                   const Citizenship12 = tableRowElement.getElementsByClassName('Citizenship')[0].innerHTML;
                                                   document.getElementById('Citizenship').value = Citizenship12;
                                                   


                                                   
                                               }     
                                               </script>   
                                               <button  onclick="toggleModal(this, 1)" data-toggle="modal" data-target="#verify" class="paymentButton"> <span class="icon"> <i class="fa fa-credit-card"></i></span> Pay Now </button>

                              
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
            <!--container fluid -->

     
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



<!-- viewmodal-->
<div class="modal fade bd-example-modal-lg" id="viewBuyer" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-xl" >
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                
            </div>
            <div class="modal-body">
                    
      <div class="card shadow mb-4">
        <div class="card-header py-3">    
        <div class="ChildrenTable">
           
          <div class="card-body">
            <div style="margin-bottom:10px;">
                <img center id="blah" style="margin-left: 12px;" class="profilepic" src="" alt="" width="150px" height="150px"/>
            </div> 
                
                <div>
                                    <table class="table" style="border: 2px solid #e3e6f0"  cellspacing="0" >
                                        <tr style="border: 2px solid #e3e6f0"> 
                                            <th colspan="5" style="color:#ffffff; background-color: #003459;   ">Personal Information</th> 
                                        </tr>
                                        <tr style="border: none">
                                          <td style="border: none; color:#4a4949;font-weight: bold" >Customer Code
                                           <input type="text" class="form-control" style="color:#4a4949;border:none; padding-left: 10px; background-color: #E0F1FD; " id="CustomerCode" name="CustomerCode" readonly>  
                                           Name <br> <input type="text" class="form-control" style="color:#4a4949;border:none; padding: 10px; background-color: #E0F1FD;" id="Name" name="Name" readonly>
                                          Email Address
                                            <br> <input type="text" class="form-control" style="color:#4a4949;border:none; padding: 10px; background-color: #E0F1FD;" id="Email" name="Email" readonly>
                                           
                                          </td>
                                          <td style="border: none; color:#4a4949;font-weight: bold" >
                                            Date Birth 
                                            <br> <input type="text" class="form-control" style="color:#4a4949;border:none; padding: 10px; background-color: #E0F1FD; " id="DateBirth" name="DateBirth" readonly> 
                                            Marital Status
                                            <br> <input type="text" class="form-control" style="color:#4a4949;border:none; padding: 10px; background-color: #E0F1FD;" id="MaritalStatus" name="MaritalStatus" readonly> 
                                            Business Phone Fax
                                            <br> <input type="text" class="form-control" style="color:#4a4949;border:none; padding: 10px; background-color: #E0F1FD;" id="BusinessPhoneFax" name="BusinessPhoneFax" readonly> 
                                          
                                          </td>
                                          <td style="border: none; color:#4a4949;font-weight: bold" >
                                          Sex
                                           <input type="text" class="form-control" style="color:#4a4949;border:none; padding-left: 10px; background-color: #E0F1FD; " id="Sex" name="Sex" readonly>  
                                          Citizenship <br> <input type="text" class="form-control" style="color:#4a4949;border:none; padding: 10px; background-color: #E0F1FD;" id="Citizenship" name="Citizenship" readonly>
                                           Weight
                                            <br> <input type="text" class="form-control" style="color:#4a4949;border:none; padding: 10px; background-color: #E0F1FD;" id="Weight" name="Weight" readonly>
                                            
                                        </td>
                                          <td style="border: none; width: 190px; color:#4a4949;font-weight: bold" >
                                            Reserve Date
                                            <br> <input type="text" class="form-control" style="color:#4a4949;border:none; padding: 10px; background-color: #E0F1FD;" id="Date" name="Date" readonly>
                                            Height
                                            <br> <input type="text" class="form-control" style="color:#4a4949;border:none; padding: 10px; background-color: #E0F1FD;" id="Height" name="Height" readonly>
                                          
                                        </td>
                                        </tr>

                                        <tr style="border: none; color:#4a4949;font-weight: bold" >
                                        <td colspan="3" >
                                          Resident Address
                                          <input type="text" class="form-control" style="color:#4a4949;border:none; padding: 10px; background-color: #E0F1FD;" id="ResidentAddress" name="ResidentAddress" readonly>
                                        </td>
                                        <td>
                                          Residential Phone no.
                                          <input type="text" class="form-control" style="color:#4a4949;border:none; padding: 10px; background-color: #E0F1FD;" id="ResidentialPhoneno" name="ResidentialPhoneno" readonly>
                                         </td>
                                        </tr>

                                        <tr style="border: none ; color:#4a4949;font-weight: bold" >
                                        <td colspan="3" >
                                          Billing Address
                                          <input type="text" class="form-control" style="color:#4a4949;border:none; padding: 10px; background-color: #E0F1FD;" id="BillingAddress" name="BillingAddress" readonly>
                                        </td>
                                        <td>
                                          Mobile Phone no.
                                          <input type="text" class="form-control" style="color:#4a4949;border:none; padding: 10px; background-color: #E0F1FD;" id="MobilePhoneno" name="MobilePhoneno" readonly>
                                         </td>
                                        </tr>
                                    </table>
                                    <table class="table" style="border: 2px solid #e3e6f0; color:#4a4949;font-weight: bold"  cellspacing="0" >
                                        <tr style="border: 2px solid #e3e6f0"> 
                                            <th colspan="5" style="color:#ffffff; background-color: #003459 ">Community Tax Certificate No.</th>
                                        </tr>
                                        <tr style="border: none">
                                          <td style="border: none" >Issued At
                                           <input type="date" class="form-control" style="color:#4a4949;border:none; padding-left: 10px; background-color: #E0F1FD; " id="IssuedAt" name="IssuedAt" readonly>  
                                          </td>
                                          <td style="border: none" >
                                          Issued On 
                                            <br> <input type="date" class="form-control" style="color:#4a4949;border:none; padding: 10px; background-color: #E0F1FD;" id="IssuedOn" name="IssuedOn" readonly> 
                                          </td>
                                          <td style="border: none" >
                                          Resident Since 
                                            <br> <input type="date" class="form-control" style="color:#4a4949;border:none; padding: 10px; background-color: #E0F1FD;" id="ResidentSince" name="ResidentSince" readonly>
                                          </td>
                                          
                                        </tr>
                                       
                                    </table>
                                    <table class="table" style="border: 2px solid #e3e6f0; color:#4a4949;font-weight: bold"  cellspacing="0" >
                                        <tr style="border: 2px solid #e3e6f0"> 
                                            <th colspan="5" style="color:#ffffff; background-color: #003459 ">Government Benefits</th>
                                        </tr>
                                        <tr style="border: none">
                                          <td style="border: none" >GSIS No. 
                                           <input type="text" class="form-control" style="color:#4a4949;border:none; padding-left: 10px; background-color: #E0F1FD; " id="GSIS" name="GSIS" readonly>  
                                          
                                          </td>
                                          <td style="border: none" >
                                          HDMF No. 
                                            <br> <input type="text" class="form-control" style="color:#4a4949;border:none; padding: 10px; background-color: #E0F1FD;" id="HDMF" name="HDMF" readonly> 
                                           
                                          </td>
                                          <td style="border: none" >
                                          TIN No.
                                            <br> <input type="text" class="form-control" style="color:#4a4949;border:none; padding: 10px; background-color: #E0F1FD;" id="TIN" name="TIN" readonly>
                                           
                                          </td>
                                          <td style="border: none; width: 190px" >
                                          NBI No.
                                            <br> <input type="text" class="form-control" style="color:#4a4949;border:none; padding: 10px; background-color: #E0F1FD;" id="NBI" name="NBI" readonly>
                                            
                                        </td>
                                        </tr>
                                       
                                    </table>
                                    <table class="table" style="border: 2px solid #e3e6f0; color:#4a4949;font-weight: bold"  cellspacing="0" >
                                        <tr style="border: 2px solid #e3e6f0"> 
                                            <th colspan="5" style="color:#ffffff; background-color: #003459 ">Information of Immediate Family </th>
                                        </tr>
                                        <tr style="border: none">
                                          <td style="border: none" >Mother's Name
                                           <input type="text" class="form-control" style="color:#4a4949;border:none; padding-left: 10px; background-color: #E0F1FD; " id="MotherName" name="MotherName" readonly>  
                                           Father's Name
                                           <input type="text" class="form-control" style="color:#4a4949;border:none; padding-left: 10px; background-color: #E0F1FD; " id="FatherName" name="FatherName" readonly>  
                                           Spouse Name
                                           <input type="text" class="form-control" style="color:#4a4949;border:none; padding-left: 10px; background-color: #E0F1FD; " id="SpouseName" name="SpouseName" readonly>  
                                           Children's Name
                                           <textarea rows="4" cols="50" class="form-control" style="color:#4a4949;border:none; padding-left: 10px; background-color: #E0F1FD; " id="ChildrenName" name="ChildrenName" readonly>  
                                        </textarea>
                                          </td>
                                          <td style="border: none" >
                                         Occupation
                                            <br> <input type="text" class="form-control" style="color:#4a4949;border:none; padding: 10px; background-color: #E0F1FD;" id="MotherOccupation" name="MotherOccupation" readonly> 
                                            Occupation
                                            <br> <input type="text" class="form-control" style="color:#4a4949;border:none; padding: 10px; background-color: #E0F1FD;" id="FatherOccupation" name="FatherOccupation" readonly> 
                                            Occupation
                                            <br> <input type="text" class="form-control" style="color:#4a4949;border:none; padding: 10px; background-color: #E0F1FD;" id="SpouseOccupation" name="SpouseOccupation" readonly> 
                                           
                                          </td>
                                          
                                        </tr>
                                       
                                    </table>
                                    <table class="table" style="border: 2px solid #e3e6f0; color:#4a4949;font-weight: bold"  cellspacing="0" >
                                        <tr style="border: 2px solid #e3e6f0"> 
                                            <th colspan="5" style="color:#ffffff; background-color: #003459 ">Financial Information</th>
                                        </tr>
                                        <tr style="border: none">
                                          <td style="border: none" >
                                          Employment Status
                                           <input type="text" class="form-control" style="color:#4a4949;border:none; padding-left: 10px; background-color: #E0F1FD; " id="Employment" name="Employment" readonly>  
                                           Source Income
                                           <input type="text" class="form-control" style="color:#4a4949;border:none; padding-left: 10px; background-color: #E0F1FD; " id="Source" name="Source" readonly>  
                                           Employer or Business Name (if Self-Employed)
                                           <input type="text" class="form-control" style="color:#4a4949;border:none; padding-left: 10px; background-color: #E0F1FD; " id="Employer" name="Employer" readonly>  
                                           Nature of Employer's Business / Your Business
                                           <input type="text"  class="form-control" style="color:#4a4949;border:none; padding-left: 10px; background-color: #E0F1FD; " id="Nature" name="Nature" readonly>  
                                          </textarea>
                                          </td>
                                          <td style="border: none" >
                                         Position in Company
                                            <br> <input type="text" class="form-control" style="color:#4a4949;border:none; padding: 10px; background-color: #E0F1FD;" id="PositionCompany" name="PositionCompany" readonly> 
                                            Personal Monthly Income
                                            <br> <input type="text" class="form-control" style="color:#4a4949;border:none; padding: 10px; background-color: #E0F1FD;" id="PersonalMonthlyIncome" name="PersonalMonthlyIncome" readonly> 
                                            Employment Date/Date when business was Established
                                            <br> <input type="text" class="form-control" style="color:#4a4949;border:none; padding: 10px; background-color: #E0F1FD;" id="EmploymentbusinessEstablished" name="EmploymentbusinessEstablished" readonly> 
                                           
                                          </td>
                                          
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
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a href="#" class="btn btn-primary" onclick="toggleModal(this, 1)" data-toggle="modal" data-target="#verify">Verify</a>
            </div>
        </div>
    </div>
</div>

<!-- Modal  -->
<form method="POST" Action="Insert_LotCryptDescription.php" enctype="multipart/form-data"> 
<div class="modal fade bd-example-modal-lg" id="verify" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
 <div class="modal-dialog modal-xl">
 <div class="modal-content">
  <div class="modal-header">
    
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>

                    <div class="ChildrenTable">  
                        
                    <div style="font-size: 14px; padding: 8px; color:#4a4949">
                    <input type="radio" style="color:#4a4949; margin-right: 5px;" name="Description" onclick="showlot();" checked> Lot 
                    <input type="radio" style="color:#4a4949; margin-right: 5px; margin-left: 30px;" onclick="showcrypt();"  name="Description"> Crypt
                    </div> 
                            <div id="showlotdiv1" style="color:#ffffff; background-color:#007ea7; font-size: 15px; padding: 8px">Lot Description</div>
                            <div class="card-body" style= "color:#4a4949; " id="showlotdiv" >

                           
                            <div class="table-responsive" style="" id="showlotdescdiv" >
                                <table id="dtlotDescRecord" class="table table-striped table-bordered table-sm" style= "width: 100%;color:#4a4949; white-space: nowrap;" cellspacing="0" width="100%">
                                    <thead>
                                    
                                         <tr style="background-color: #00a8e8">
                                            <th class="th-sm" style= "font-size: 14px; color:#ffffff ">ID</th>
                                            <th class="th-sm" style= "font-size: 14px; color:#ffffff ">Block</th>
                                            <th class="th-sm" style= "font-size: 14px; color:#ffffff ">Section</th>
                                            <th class="th-sm" style= "font-size: 14px; color:#ffffff ">Lot No.</th>
                                            <th class="th-sm" style= "font-size: 14px; color:#ffffff ">Area</th>
                                            <th class="th-sm" style= " font-size: 14px; color:#ffffff ">Phase</th>
                                            <th class="th-sm" style= " font-size: 14px; color:#ffffff ">Type/ Class</th>
                                            <th class="th-sm" style= "font-size: 14px; color:#ffffff ">List Price</th>
                                            <th class="th-sm" style= "font-size: 14px; color:#ffffff ">Tools</th>
                                            <th class="th-sm" style= "width: 6%; font-size: 14px; color:#ffffff" hidden></th>
                                            <th class="th-sm" style= "width: 6%; font-size: 14px; color:#ffffff" hidden></th>
                                            <th class="th-sm" style= "width: 6%; font-size: 14px; color:#ffffff" hidden></th>
                                            <th class="th-sm" style= "width: 6%; font-size: 14px; color:#ffffff" hidden></th>

                                            <th class="th-sm" style= "width: 6%; font-size: 14px; color:#ffffff" hidden></th>
                                            <th class="th-sm" style= "width: 6%; font-size: 14px; color:#ffffff" hidden></th>
                                            <th class="th-sm" style= "width: 6%; font-size: 14px; color:#ffffff" hidden></th>
                                            <th class="th-sm" style= "width: 6%; font-size: 14px; color:#ffffff" hidden></th>
                                            <th class="th-sm" style= "width: 6%; font-size: 14px; color:#ffffff" hidden></th>
                                            <th class="th-sm" style= "width: 6%; font-size: 14px; color:#ffffff" hidden></th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody style="border: 2px solid #e3e6f0;">  
                                     <?php
                                        $sales_query = "SELECT * from tbl_lotdescription ";
                                        $sales_result = mysqli_query($connection, $sales_query);
                                        if (mysqli_num_rows($sales_result) > 0) {
                                        while ($row = mysqli_fetch_assoc($sales_result)) {
                                    ?>
                                            <tr style="border: 2px solid #e3e6f0">
                                            <td  style= "font-size: 14px; color:#4a4949 " class="lot_id table-cell"><?=$row['id']?></td>
                                            <td  style= "font-size: 14px; color:#4a4949 " class="lot_block table-cell"><?=$row['block']?></td>
                                            <td  style= "font-size: 14px; color:#4a4949 " class="lot_section table-cell"><?=$row['section']?></td>
                                            <td  style= "font-size: 14px; color:#4a4949 " class="lot_no table-cell"><?=$row['lot_no']?></td>
                                            <td  style= "font-size: 14px; color:#4a4949 " class="lot_area table-cell"><?=$row['area']?></td>
                                            <td  style= "font-size: 14px; color:#4a4949 " class="lot_phase table-cell"><?=$row['phase']?></td>
                                            <td  style= "font-size: 14px; color:#4a4949 " class="lot_type table-cell"><?=$row['type']?></td>
                                            <td  style= "font-size: 14px; color:#4a4949 " class="lot_TCP table-cell "><?=$row['ListPrice']?></td>
                                            <td  style= "font-size: 14px; color:#4a4949 " hidden><?=$row['spot_cash']?></td>
                                            <td  style= "font-size: 14px; color:#4a4949 " hidden><?=$row['30_days_cash_price']?></td>
                                            <td  style= "font-size: 14px; color:#4a4949 " hidden><?=$row['spot_dp']?></td>
                                            <td  style= "font-size: 14px; color:#4a4949 " hidden><?=$row['downpayment']?></td>

                                            <td  style= "font-size: 14px; color:#4a4949 " hidden><?=$row['6_months']?></td>
                                            <td  style= "font-size: 14px; color:#4a4949 " hidden><?=$row['1_year']?></td>
                                            <td  style= "font-size: 14px; color:#4a4949 " hidden><?=$row['3_years']?></td>
                                            <td  style= "font-size: 14px; color:#4a4949 " hidden><?=$row['5_years']?></td>
                                            <td  style= "font-size: 14px; color:#4a4949 " hidden><?=$row['7_years']?></td>
                                            <td  style= "font-size: 14px; color:#4a4949 " hidden><?=$row['10_years']?></td>
                                            <td  style= "font-size: 14px; color:#4a4949 " class="table-cell ">
                                            
                                                <a href="#" onclick="toggleModal(this, 1)" data-toggle="modal" data-target=".lotdesc" style="color:#ffffff; font-size:12px; padding: 5px;width: 100%; background-color: #ef476f" class="btn btn-primary"  data-controls-modal="myModal" data-backdrop="static" data-keyboard="false"><i class="fas fa-cart-plus"></i> Get Reservation</a></th>
                              
                                            </td>
                                            </tr>
                                    <?php
                                        }
                                        }
                                    ?>   
                                            
                                            
                                    </tbody>       
                                </table>     
                            </div> 
                            <div style="width: 100%; display:none" id="showlotintermentdescdiv">
                                <div class="showRegularClass_div table-responsive">
                                <table id="dtlotInterment" class="table table-striped table-bordered table-sm" style= "color:#4a4949 " cellspacing="0" width="100%">
                                    <thead>
                                    
                                         <tr style="background-color: #00a8e8">
                                            <th class="th-sm" style= "width: 2%; font-size: 14px; color:#ffffff ">ID</th>
                                            <th class="th-sm" style= "width: 10%;font-size: 14px; color:#ffffff ">Lot Interment</th>
                                            <th class="th-sm" style= "width: 10%; font-size: 14px; color:#ffffff ">Location</th>
                                            <th class="th-sm" style= "width: 5%; font-size: 14px; color:#ffffff ">Regular Fee</th>
                                            <th class="th-sm" style= "width: 10%; font-size: 14px; color:#ffffff ">Pre Need Fee</th>
                                            <th class="th-sm" style= "width: 10%; font-size: 14px; color:#ffffff ">At Need Fee</th>
                                            <th class="th-sm" style= "width: 10%; font-size: 14px; color:#ffffff ">Night/ Dawn Fee</th>
                                            <th class="th-sm" style= "width: 10%; font-size: 14px; color:#ffffff ">Special days Fee</th>
                                            <th class="th-sm" style= "width: 6%; font-size: 14px; color:#ffffff ">Tools</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody style="border: 2px solid #e3e6f0;">  
                                     <?php
                                        $sales_query = "SELECT * from tbl_lotintermentdescription ";
                                        $sales_result = mysqli_query($connection, $sales_query);
                                        if (mysqli_num_rows($sales_result) > 0) {
                                        while ($row = mysqli_fetch_assoc($sales_result)) {
                                    ?>
                                            <tr style="border: 2px solid #e3e6f0">
                                            <td  style= "width: 2%;font-size: 14px; color:#4a4949 " class="lotInterment_id"><?=$row['id']?></td>
                                            <td  style= "width: 10%;font-size: 14px; color:#4a4949 " class="lotInterment"><?=$row['lotInterment']?></td>
                                            <td  style= "width: 10%;font-size: 14px; color:#4a4949 " class="lotInterment_location"><?=$row['location']?></td>
                                            <td  style= "width: 10%;font-size: 14px; color:#4a4949 " class="lotInterment_Regularfee"><?=$row['regularIntermentFee']?></td>
                                            <td  style= "width: 10%;font-size: 14px; color:#4a4949 " class="lotInterment_preNeedfee"><?=$row['preNeed']?></td>
                                            <td  style= "width: 10%;font-size: 14px; color:#4a4949 " class="lotInterment_atNeedFee"><?=$row['atNeed']?></td>
                                            <td  style= "width: 10%;font-size: 14px; color:#4a4949 " class="lotInterment_Night"><?=$row['night']?></td>
                                            <td  style= "width: 10%;font-size: 14px; color:#4a4949 " class="lotInterment_specialdaysfee"><?=$row['specialDays']?></td>
                                            <td  style= "width: 6%;font-size: 14px; color:#4a4949 ">
                                            
                                                <a href="#" onclick="toggleModal(this, 1)" data-toggle="modal" data-target=".lotdesc" style="color:#ffffff; font-size:12px; padding: 5px;width: 100%; background-color: #ef476f" class="btn btn-primary"  data-controls-modal="myModal" data-backdrop="static" data-keyboard="false"><i class="fas fa-cart-plus"></i> Get Reservation</a></th>
                              
                                            </td>
                                            </tr>
                                    <?php
                                        }
                                        }
                                    ?>   
                                            
                                            
                                    </tbody>       
                                </table> 
                                </div>     
                                <div class="showSpecialClass_div table-responsive">
                                <table id="dtspecial_lotintermentdescription" class="table table-striped table-bordered table-sm" style= "color:#4a4949 " cellspacing="0" width="100%">
                                    <thead>
                                    
                                         <tr style="background-color: #00a8e8">
                                            <th class="th-sm" style= "width: 2%; font-size: 14px; color:#ffffff ">ID</th>
                                            <th class="th-sm" style= "width: 10%;font-size: 14px; color:#ffffff ">Lot Interment</th>
                                            <th class="th-sm" style= "width: 10%; font-size: 14px; color:#ffffff ">Location</th>
                                            <th class="th-sm" style= "width: 5%; font-size: 14px; color:#ffffff ">Pre-Need Fee</th>
                                            <th class="th-sm" style= "width: 10%; font-size: 14px; color:#ffffff ">At-Need Fee</th>
                                            <th class="th-sm" style= "width: 10%; font-size: 14px; color:#ffffff ">Special Days <br> Night/Dawn Fee</th>
                                            <th class="th-sm" style= "width: 10%; font-size: 14px; color:#ffffff ">Special Days <br> Pre-Need Fee</th>
                                            <th class="th-sm" style= "width: 10%; font-size: 14px; color:#ffffff ">Special Days <br> At-Need Fee</th>
                                            <th class="th-sm" style= "width: 6%; font-size: 14px; color:#ffffff ">Tools</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody style="border: 2px solid #e3e6f0;">  
                                     <?php
                                        $sales_query = "SELECT * from tbl_special_lotintermentdescription ";
                                        $sales_result = mysqli_query($connection, $sales_query);
                                        if (mysqli_num_rows($sales_result) > 0) {
                                        while ($row = mysqli_fetch_assoc($sales_result)) {
                                    ?>
                                            <tr style="border: 2px solid #e3e6f0">
                                            <td  style= "width: 2%;font-size: 14px; color:#4a4949 " class="lotInterment_id"><?=$row['id']?></td>
                                            <td  style= "width: 10%;font-size: 14px; color:#4a4949 " class="lotInterment"><?=$row['lotInterment']?></td>
                                            <td  style= "width: 10%;font-size: 14px; color:#4a4949 " class="lotInterment_location"><?=$row['location']?></td>
                                            <td  style= "width: 10%;font-size: 14px; color:#4a4949 " class="lotInterment_Regularfee"><?=$row['preNeed']?></td>
                                            <td  style= "width: 10%;font-size: 14px; color:#4a4949 " class="lotInterment_preNeedfee"><?=$row['atNeed']?></td>
                                            <td  style= "width: 10%;font-size: 14px; color:#4a4949 " class="lotInterment_atNeedFee"><?=$row['specialDaysNightDawn']?></td>
                                            <td  style= "width: 10%;font-size: 14px; color:#4a4949 " class="lotInterment_Night"><?=$row['specialDaysPreNeed']?></td>
                                            <td  style= "width: 10%;font-size: 14px; color:#4a4949 " class="lotInterment_specialdaysfee"><?=$row['specialDaysAtNeed']?></td>
                                            <td  style= "width: 6%;font-size: 14px; color:#4a4949 ">
                                            
                                                <a href="#" onclick="toggleModal(this, 1)" data-toggle="modal" data-target=".lotdesc" style="color:#ffffff; font-size:12px; padding: 5px;width: 100%; background-color: #ef476f" class="btn btn-primary"  data-controls-modal="myModal" data-backdrop="static" data-keyboard="false"><i class="fas fa-cart-plus"></i> Get Reservation</a></th>
                              
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
                            <div class="table-responsive" style="width: 100%; display:none" id="showAddictionalChargedescdiv">
                                <table id="dtAddCharge" class="table table-striped table-bordered table-sm" style= "color:#4a4949 " cellspacing="0" width="100%">
                                    <thead>
                                    
                                         <tr style="background-color: #00a8e8">
                                            <th class="th-sm" style= "width: 2%; font-size: 14px; color:#ffffff ">ID</th>
                                            <th class="th-sm" style= "width: 10%;font-size: 14px; color:#ffffff ">Level of Depth</th>
                                            <th class="th-sm" style= "width: 10%; font-size: 14px; color:#ffffff ">Depth</th>
                                            <th class="th-sm" style= "width: 5%; font-size: 14px; color:#ffffff ">Charges</th>
                                            <th class="th-sm" style= "width: 6%; font-size: 14px; color:#ffffff ">Tools</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody style="border: 2px solid #e3e6f0;">  
                                     <?php
                                        $sales_query = "SELECT * from tbl_additionalchargefordepth ";
                                        $sales_result = mysqli_query($connection, $sales_query);
                                        if (mysqli_num_rows($sales_result) > 0) {
                                        while ($row = mysqli_fetch_assoc($sales_result)) {
                                    ?>
                                            <tr style="border: 2px solid #e3e6f0">
                                            <td  style= "width: 2%;font-size: 14px; color:#4a4949 " class="depth_id"><?=$row['id']?></td>
                                            <td  style= "width: 10%;font-size: 14px; color:#4a4949 " class="levelDepth"><?=$row['levelDepth']?></td>
                                            <td  style= "width: 10%;font-size: 14px; color:#4a4949 " class="depth"><?=$row['depth']?></td>
                                            <td  style= "width: 10%;font-size: 14px; color:#4a4949 " class="charges"><?=$row['charges']?></td>
                                            <td  style= "width: 6%;font-size: 14px; color:#4a4949 ">
                                            
                                                <a href="#" onclick="toggleModal(this, 1)" data-toggle="modal" data-target=".lotdesc" style="color:#ffffff; font-size:12px; padding: 5px;width: 100%; background-color: #ef476f" class="btn btn-primary"  data-controls-modal="myModal" data-backdrop="static" data-keyboard="false"><i class="fas fa-cart-plus"></i> Get Reservation</a></th>
                              
                                            </td>
                                            </tr>
                                    <?php
                                        }
                                        }
                                    ?>   
                                            
                                            
                                    </tbody>       
                                </table>     
                            </div> 
                            <br>
                            <center>
                            
                            <div style=" width: 100%; text-align: left; ">
                                 

                            
                                <div style="float: left; width: 50%; height: 500px; padding: 40px 40px; margin-bottom: 5px; color:#4a4949; font-size: 14px; font-weight: bold;background-color: #fcd8b6;" >
                                <table style="width:100%; color:#4a4949; font-size: 14px; font-weight: bold;">
                                <tr>
                                    <td  style="width:40%">Customer Name:</td><td><input type="text"  id="Fullname1" name="Fullname1" style="color:#4a4949;border:none; background-color: transparent;padding:0px; font-size: 14px"  readonly></td>
                                </tr>
                                <tr>
                                <td  style="width:40%"> Customer Code:</td><td><input type="text"  id="customerCode1" name="customerCode1"style="color:#4a4949;border:none; background-color: transparent;padding:0px; font-size: 14px"   readonly></td>
                                    <input type="text" id="id1" name="id1"  class="form-control" style="color:#4a4949;border:none; width: 95%;background-color: transparent; padding-left: 30px; font-size: 14px" hidden  readonly>
                              
                                </tr>
                                <tr>
                                <td  style="width:40%"> Reserve Date:</td><td><input type="text" id="date1"  name="date1" style="color:#4a4949;border:none; background-color: transparent;padding:0px; font-size: 14px"  readonly></td>
                                </tr>
                                <tr>
                                    <td  style="width:40%">Lot ID:</td><td><input type="text"   style="color:#4a4949;border:none; background-color: transparent;padding:0px; font-size: 14px" id="lot_id1" name="lot_id1"  readonly></td>
                                </tr>
                                <tr>
                                    <td  style="width:40%">Block:</td><td><input type="text"   style="color:#4a4949;border:none; background-color: transparent;padding:0px; font-size: 14px" id="lot_block1" name="lot_block1"  readonly></td>
                                </tr>
                                <tr>
                                    <td  style="width:40%">Section:</td><td><input type="text"  style="color:#4a4949;border:none; background-color: transparent;padding:0px; font-size: 14px" id="lot_section1" name="lot_section1"  readonly></td>
                                </tr>
                                <tr>
                                    <td  style="width:40%">Lot No:</td><td><input type="text"  style="color:#4a4949;border:none; background-color: transparent;padding:0px; font-size: 14px" id="lot_no1" name="lot_no1"  readonly></td>
                                </tr>
                                <tr>
                                    <td  style="width:40%">Area:</td><td><input type="text"  style="color:#4a4949;border:none; background-color: transparent;padding:0px; font-size: 14px" id="lot_area1" name="lot_area1"  readonly></td>
                                </tr>
                                <tr>
                                    <td  style="width:40%">Phase:</td><td><input type="text"  style="color:#4a4949;border:none; background-color: transparent;padding:0px; font-size: 14px" id="lot_phase1" name="lot_phase1"  readonly></td>
                                </tr>
                                <tr>
                                    <td  style="width:40%">Type / Class:</td><td><input type="text"  style="color:#4a4949;border:none; background-color: transparent;padding:0px; font-size: 14px" id="lot_type1" name="lot_type1"  readonly></td>
                                </tr>
                            </table>
                                
                            </div>
                           
                                <div style="float: right; width: 50%; height: 500px; margin-bottom: 30px;  padding: 40px 40px;  color:#4a4949; font-size: 14px; font-weight: bold;background-color: #fcd8b6;" >
                                
                              
                                <tr style="border: none;">
                                            <td style="border: none; width: 50%; color:#4a4949; font-size: 13px;background-color: Transparent;padding-left:15px;padding-right:0px;padding-bottom:0px;padding-top:15px;margin:0px; font-weight: bold" >
                                           <p style="padding-top: 5px;"> Terms :</p>
                                            </td>
                                            <td style="border: none;background-color: transparent;;padding-left:15px;padding-right:15px;padding-bottom:0px;margin:0px; font-weight: bold;" >
                                            <select  type="text"  class="form-control" style="padding: 8px; color:#4a4949; font-size: 13px; " disabled id="terms" name="terms">
                                                    <option style="color:#4a4949"  name="preNeedPrice" value="PreNeedPrice"> Pre-Need Price</option> 
                                                    <option style="color:#4a4949" name="AtNeedPrice" value="AtNeedPrice"> AT-Need Price</option> 
                                                    <option style="color:#4a4949" name="SpotCash" value="SpotCash">Spot Cash</option> 
                                                    <option style="color:#4a4949" name="mCash" value="M_Cash">M-Cash 30 Days</option> 
                                                    <option style="color:#4a4949" name="Installment" value="Installment">Installment</option> 
                                                    </select>
                                            </td>
                                            </tr>
                                <div  style="width: 100%;  border-color: #5B7EDE">
                                
                                        <table class="table"   cellspacing="0"   >
                                            <tr  > 
                                               
                                            </tr>
                                            <tr style="border: none;">
                                            <td style="border: none; width: 50%; color:white; font-size: 13px;background-color: #5B7EDE;padding-left:15px;padding-right:0px;padding-bottom:0px;padding-top:15px;margin:0px; font-weight: bold" >
                                            Lot List Price :
                                            </td>
                                            <td style="border: none;background-color: #5B7EDE;color:#4a4949;padding-left:15px;padding-right:15px;padding-bottom:0px;padding-top:15px;margin:0px; font-weight: bold;" >
                                           
                                            <input readonly placeholder="₱ 0.00" pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency"  oninput="compute()" style="padding:0px 15px; width: 95%; font-size: 13px; margin:0px; background-color: #FDFDFD ;border: none;color:#4a4949" id ="lotListPrice" name="lotListPrice"  ></input>
                                            </td>
                                            </tr>
                                            
                                            <tr style="border: none">
                                            <td style="border: none; width: 50%; color:white;font-size: 13px; background-color: #5B7EDE;padding:0px 15px;margin:0px; font-weight: bold;" >
                                             Value Added Tax (_)% :
                                            </td>
                                            <?php
                                                $sales_query = "SELECT * from tbl_tax";
                                                $sales_result = mysqli_query($connection, $sales_query);
                                                    if (mysqli_num_rows($sales_result) > 0) {
                                                    while ($row = mysqli_fetch_assoc($sales_result)) {
                                                ?>
                                                 <td class="taxID" name="taxID" hidden><?=$row['id']?></td>
                                                 
                                            <td style="border: none;background-color: #5B7EDE;color:#4a4949;padding:0px 15px;margin:0px;" >
                                          
                                            <input placeholder="₱ 0.00" style="padding:0px 15px; font-size: 13px; margin:0px; background-color: #e8e4c9 ;border: none;color:#4a4949; width:  95%" id="taxs" name="taxs" value ="<?=$row['tax']?>" hidden></input>
                                          
                                            <input placeholder="₱ 0.00" style="padding:0px 15px; font-size: 13px;  margin:0px; background-color: #e8e4c9 ;border: none;color:#4a4949; width:  95%" id="taxs1" name="taxs1"  readonly   ></input>
                                          
                                                <script>
                                                   let tableRowElement1;
                                                   function toggleModal1(element1) {
                                                    tableRowElement1 = element1.parentElement.parentElement;

                                                   const taxID1 = tableRowElement1.getElementsByClassName('taxID')[0].innerHTML;
                                                   document.getElementById('taxID').value = taxID1;
                                                    }     
                                                    </script>  
                                                    <sup hidden> <a href="#" onclick="toggleModal1(this, 1)" data-toggle="modal" data-target="#tax" ><i class="fa fa-gears" style="font-size: 11px; color:white;"></i></a></sup>  
                                                    
                                                </td>
                                                <?php
                                                 }
                                                    }
                                                ?>   
                                            </tr>
                                            <tr style="border: none">
                                           <td style="border: none;background-color: #5B7EDE;font-size: 13px;color:white;padding:0px 15px;margin:0px; font-weight: bold;" >
                                            Subtotal :
                                            </td>
                                             <td style="border: none;background-color: #5B7EDE;color:#4a4949;padding:0px 15px;margin:0px;" >
                                            <input placeholder="₱ 0.00" readonly pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency"  style="padding:0px 15px; width:  95%; font-size: 13px; margin:0px; background-color: #e8e4c9 ;border: none;color:#4a4949" id="subtotaltax" name="subtotaltax"></input>
                                            </td>
                                            </tr>
                                            
                                            <tr style="border: none">
                                            
                                           <td style="border: none;background-color: #5B7EDE;font-size: 13px;color:white;padding:0px 15px;margin:0px; font-weight: bold;" >
                                            Perpetual Care Funds :
                                            </td>
                                            <?php
                                                    $sales_query1 = "SELECT * from tbl_PCF";
                                                    $sales_result1 = mysqli_query($connection, $sales_query1);
                                                    if (mysqli_num_rows($sales_result1) > 0) {
                                                    while ($row = mysqli_fetch_assoc($sales_result1)) {
                                                    ?>
                                                                                             
                                                    <td class="PCFID" name="PCFID" hidden><?=$row['id']?></td>
                                                    
                                             <td style="border: none;background-color: #5B7EDE;color:#4a4949;padding:0px 15px;margin:0px;" >
                                             
                                            
                                                <input placeholder="₱ 0.00" readonly pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency"  style="padding:0px 15px; width:  95%; font-size: 13px; margin:0px; background-color: #e8e4c9 ;border: none;color:#4a4949; width: 95%" id="pcf" name="pcf" value="₱ <?=$row['PCF']?>"  ></input>
                                               
                                               <script>
                                                    let tableRowElement1;
                                                   function toggleModal1(element1) {
                                                    tableRowElement1 = element1.parentElement.parentElement;

                                                   const PCFID1 = tableRowElement1.getElementsByClassName('PCFID')[0].innerHTML;
                                                   document.getElementById('PCFID').value = PCFID1;
                                                    }     

                                                    </script>  
                                                    <sup hidden> <a href="#" onclick="toggleModal1(this, 1)" data-toggle="modal" data-target="#PCF" ><i class="fa fa-gears" style="font-size: 11px; color:white;"></i></a></sup>  
                                                    
                                                </td>
                                                <?php
                                                 }
                                                    }
                                                ?>   
                                                </td>
                                            </tr>
                                            <tr style="border: none">
                                                <td style="border: none;background-color: #5B7EDE;font-size: 13px;color:white;padding:0px 15px;margin:0px; font-weight: bold;" >
                                                Less Discount :
                                                </td>
                                                    <?php
                                                    $sales_query1 = "SELECT * from tbl_discount";
                                                    $sales_result1 = mysqli_query($connection, $sales_query1);
                                                    if (mysqli_num_rows($sales_result1) > 0) {
                                                    while ($row = mysqli_fetch_assoc($sales_result1)) {
                                                    ?>
                                                                                             
                                                    <td class="discountID" name="discountID" hidden><?=$row['id']?></td>
                                                    <td style="border: none;background-color: #5B7EDE;color:#4a4949;padding:0px 15px;margin:0px;" > 
                                                    <input placeholder="₱ 0.00" style="padding:0px 15px; font-size: 13px; width:  95%%; margin:0px; background-color: #e8e4c9 ;border: none;color:#4a4949;width: 95%"  id="discounts" name="discounts" value ="<?=$row['discount']?>" hidden ></input>
                                                  
                                                    <input placeholder="₱ 0.00" style="padding:0px 15px; font-size: 13px; width:  95%%; margin:0px; background-color: #e8e4c9 ;border: none;color:#4a4949;width: 95%"  id="discounts1" name="discounts1" readonly></input>
                                                   <script>
                                                    let tableRowElement1;
                                                   function toggleModal1(element1) {
                                                    tableRowElement1 = element1.parentElement.parentElement;

                                                   const taxID1 = tableRowElement1.getElementsByClassName('discountID')[0].innerHTML;
                                                   document.getElementById('discountID').value = taxID1;
                                                    }     

                                                    </script>  
                                                    <sup hidden> <a href="#" onclick="toggleModal1(this, 1)" data-toggle="modal" data-target="#discount" ><i class="fa fa-gears" style="font-size: 11px; color:white;"></i></a></sup>  
                                                    
                                                </td>
                                                <?php
                                                 }
                                                    }
                                                ?>   
                                                </td>
                                           
                                            </tr>
                                            <tr style="border: none">
                                           <td style="border: none;background-color: #5B7EDE;font-size: 13px;color:white;padding:0px 15px;margin:0px; font-weight: bold;" >
                                            Subtotal :
                                            </td>
                                             <td style="border: none;background-color: #5B7EDE;color:#4a4949;padding:0px 15px;margin:0px;" >
                                            <input placeholder="₱ 0.00" readonly pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency"  style="padding:0px 15px; width:   95%; font-size: 13px; margin:0px; background-color: #e8e4c9 ;border: none;color:#4a4949" id="subtotalDiscount" name="subtotalDiscount"  ></input>
                                            </td>
                                            </tr>
                                            <tr style="border: none">
                                           <td id="PreNeedPrice" style="border: none;background-color: #5B7EDE;font-size: 13px;color:white;padding:0px 15px;margin:0px; font-weight: bold;" >
                                            Total Contract Price :
                                            </td>
                                             <td style="border: none;background-color: #5B7EDE;color:#4a4949;padding:0px 15px;margin:0px;" >
                                            <input placeholder="₱ 0.00"  readonly pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency" oninput="computedp()" style="padding:0px 15px; width:  95%; font-size: 13px; margin:0px; background-color: #FDFDFD ;border: none;color:#4a4949" id ="totalContractPrice3" name ="totalContractPrice3"></input>
                                            </td>
                                            </tr>
                                            <tr hidden style="border: none">
                                           <td hidden style="border: none;background-color: #5B7EDE;font-size: 13px;color:white;padding:0px 15px;margin:0px; font-weight: bold;" >
                                            Add_% Mark-up :
                                            </td>
                                            <?php
                                                    $sales_query1 = "SELECT * from tbl_Markup";
                                                    $sales_result1 = mysqli_query($connection, $sales_query1);
                                                    if (mysqli_num_rows($sales_result1) > 0) {
                                                    while ($row = mysqli_fetch_assoc($sales_result1)) {
                                                    ?>
                                                                                             
                                                    <td hidden class="MarkupID" name="MarkupID" hidden><?=$row['id']?></td>
                                             <td hidden style="border: none;background-color: #5B7EDE;color:#4a4949;padding:0px 15px;margin:0px;" >
                                            <input  placeholder="₱ 0.00"  readonly style="padding:0px 15px; font-size: 13px; margin:0px; background-color: #e8e4c9; width: 95% ;border: none;color:#4a4949;width: 95%" id ="markup" name ="markup" value ="<?=$row['markup']?>" hidden></input>
                                            <input  placeholder="₱ 0.00" readonly style="padding:0px 15px; font-size: 13px; margin:0px; background-color: #e8e4c9 ; width: 95%;border: none;color:#4a4949;width: 95%" id ="markup1" name ="markup1" ></input>
                                           
                                            <script>
                                                    let tableRowElement1;
                                                    function toggleModal1(element1) {
                                                    tableRowElement1 = element1.parentElement.parentElement;

                                                    const MarkupID1 = tableRowElement1.getElementsByClassName('MarkupID')[0].innerHTML;
                                                    document.getElementById('MarkupID').value = MarkupID1;
                                                    }     

                                                    </script>  
                                                    <sup hidden> <a href="#" onclick="toggleModal1(this, 1)" data-toggle="modal" data-target="#Markup" ><i class="fa fa-gears" style="font-size: 11px; color:white;"></i></a></sup>  
                                                    
                                                </td>
                                                <?php
                                                 }
                                                    }
                                                ?>   
                                            </td>
                                            </tr>
                                            <tr style="border: none" hidden>
                                           <td style="border: none;background-color: #5B7EDE;font-size: 13px;color:white;padding:0px 15px;margin:0px; font-weight: bold;" >
                                            At-Needs TCP :
                                            </td>
                                             <td style="border: none;background-color: #5B7EDE;color:#4a4949;padding:0px 15px;margin:0px;" >
                                            <input id="atNeedTCP" name="atNeedTCP"  placeholder="₱ 0.00" style="padding:0px 15px; font-size: 13px; margin:0px; background-color: #e8e4c9 ; width:  95%;border: none;color:#4a4949"></input>
                                            </td>
                                            </tr>
                                            <tr id="downpaymenttr" style="border: none">
                                           <td style="border: none;background-color: #5B7EDE;font-size: 13px;color:white;padding:0px 15px;margin:0px; font-weight: bold;" >
                                            Downpayment : <input placeholder="0.00" readonly oninput="computedp()" pattern="^\%\d{1,3}(,\d{3})*(\.\d+)?%"    type="number" style="float: right; padding:0px 5px; font-size: 13px; margin:0px; background-color: #e8e4c9 ;border: none;color:#4a4949;width: 25%"  id="dpPercentage" name="dpPercentage"   ></input> <a style= "float: right; font-size: 13px; margin-right:5px; border: none;color:#fffff;width: 5%">% </a>
                                            </td>
                                           
                                             <td style="border: none;background-color: #5B7EDE;color:#4a4949;padding:0px 15px;margin:0px;" >
                                             <?php
                                                    $sales_query1 = "SELECT * from tbl_minimumdppercentage";
                                                    $sales_result1 = mysqli_query($connection, $sales_query1);
                                                    if (mysqli_num_rows($sales_result1) > 0) {
                                                    while ($row = mysqli_fetch_assoc($sales_result1)) {
                                                    ?>
                                                             
                                             <input hidden value ="<?=$row['minimumDPPercentage']?>" placeholder="0.00" readonly  oninput="computedp()" pattern="^\%\d{1,3}(,\d{3})*(\.\d+)?%"    type="number" style="float: right; padding:0px 5px; font-size: 13px; margin:0px; background-color: #e8e4c9 ;border: none;color:#4a4949;width: 25%"  id="minimumdpPercentage" name="minimumdpPercentage"   ></input>
                                             <?php
                                                 }
                                                    }
                                                ?>   
                                             <input placeholder="₱ 0.00" pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" oninput="computedownpaymentPercentage()" data-type="currency" style="padding:0px 15px; width:  95%; font-size: 13px; margin:0px; background-color: #FDFDFD ;border: none;color:#4a4949" id="dpPercentage2" name="dpPercentage2" ></input>
                                             <div id="warningMessage" style="display: none; color: red;">Minimum downpayment required is 20%.</div>
                                            </td>
                                            </tr>
                                            <tr id="balancetr" style="border: none;">
                                           <td style="border: none;background-color: #5B7EDE;font-size: 13px;color:white;padding:0px 15px;margin:0px; font-weight: bold;" >
                                            Full downpayment :
                                            </td>
                                             <td style="border: none;background-color: #5B7EDE;color:#4a4949;padding:0px 15px;margin:0px;" >
                                            <input placeholder="₱ 0.00" readonly pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency"  style="padding:0px 15px; width:  95%; font-size: 13px; margin:0px; background-color: #e8e4c9 ;border: none;color:#4a4949" hidden id="balance1" name="balance1"  ></input>
                                            
                                            <input placeholder="₱ 0.00" readonly pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency"  style="padding:0px 15px; width:  95%; font-size: 13px; margin:0px; background-color: #e8e4c9 ;border: none;color:#4a4949" id="balance" name="balance"  ></input>
                                            <input placeholder="₱ 0.00"hidden readonly pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency"  style="padding:0px 15px; width:  95%; font-size: 13px; margin:0px; background-color: #e8e4c9 ;border: none;color:#4a4949" id="Interest" name="Interest"  ></input>
                                            <input placeholder="₱ 0.00"hidden readonly pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency"  style="padding:0px 15px; width:  95%; font-size: 13px; margin:0px; background-color: #e8e4c9 ;border: none;color:#4a4949" id="Principal" name="Principal"  ></input>
                                              
                                        </td>
                                            </tr>
                                            <tr hidden id="monthlyInstallmenttr" style="border: none; display: none">
                                           <td style="border: none;background-color: #5B7EDE;font-size: 13px;color:white;padding:0px 15px;margin:0px; font-weight: bold;" >
                                            1<sup hidden> st</sup> Monthly Installment :
                                            </td>
                                            <?php
                                                $sales_query = "SELECT * from diminishingratefirsthalf";
                                                $sales_result = mysqli_query($connection, $sales_query);
                                                    if (mysqli_num_rows($sales_result) > 0) {
                                                    while ($row = mysqli_fetch_assoc($sales_result)) {
                                                ?>
                                                 <td class="diminishingrateID1" name="diminishingrateID1" hidden><?=$row['id']?></td>

                                             <td style="border: none;background-color: #5B7EDE;color:#4a4949;padding:0px 15px;margin:0px;" >
                                                <input placeholder="₱ 0.00" id="MI1" name="MI1" readonly  pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency"  style="padding:0px 15px; width:  95%; font-size: 13px; margin:0px; background-color: #FDFDFD ;border: none;color:#4a4949" ></input>
                                                <input placeholder="₱ 0.00" hidden id="MIInterestPercentage1" value="<?=$row['interest']?>" name="MIInterestPercentage1" readonly  pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency"  style="padding:0px 15px; width:   95%; font-size: 13px; margin:0px; background-color: #FDFDFD ;border: none;color:#4a4949" ></input>
                                                <input placeholder="₱ 0.00" hidden id="MIPrincipalPercentage1" value="<?=$row['principal']?>" name="MIPrincipalPercentage1" readonly  pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency"  style="padding:0px 15px; width:  95%; font-size: 13px; margin:0px; background-color: #FDFDFD ;border: none;color:#4a4949" ></input>
                                                 <input placeholder="₱ 0.00" hidden id="MIPercentage1" value="<?=$row['deminishingPercentage']?>" name="MIPercentage1" readonly  pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency"  style="padding:0px 15px; width:  95%; font-size: 13px; margin:0px; background-color: #FDFDFD ;border: none;color:#4a4949" ></input>
                                                
                                          
                                                    <sup hidden> <a href="#" onclick="toggleModal1(this, 1)" data-toggle="modal" data-target="#firstMonthMIDiv" ><i class="fa fa-gears" style="font-size: 11px; color:white;"></i></a></sup>  
                                                    
                                                </td>
                                                <?php
                                                 }
                                                    }
                                                ?>      
                                        </td>
                                        </tr>
                                            <tr hidden id="monthlyInstallmenttr2" style="border: none; display: none">
                                           <td style="border: none;background-color: #5B7EDE;font-size: 13px;color:white;padding:0px 15px;margin:0px; font-weight: bold;" >
                                           2<sup hidden> nd</sup> Monthly Installment :
                                            </td>
                                            <?php
                                                $sales_query = "SELECT * from diminishingratesecondhalf";
                                                $sales_result = mysqli_query($connection, $sales_query);
                                                    if (mysqli_num_rows($sales_result) > 0) {
                                                    while ($row = mysqli_fetch_assoc($sales_result)) {
                                                ?>
                                                 <td class="taxID" name="taxID" hidden><?=$row['id']?></td>
                                             <td style="border: none;background-color: #5B7EDE;color:#4a4949;padding:0px 15px;margin:0px;" >
                                            <input placeholder="₱ 0.00" id="MI2" name="MI2" readonly  pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency"  style="padding:0px 15px; width: 95%; font-size: 13px; margin:0px; background-color: #FDFDFD ;border: none;color:#4a4949" ></input>
                                            
                                            <input placeholder="₱ 0.00" hidden value="<?=$row['interest']?>" id="MIInterestPercentage2" name="MIInterestPercentage2" readonly  pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency"  style="padding:0px 15px; width:  95%; font-size: 13px; margin:0px; background-color: #FDFDFD ;border: none;color:#4a4949" ></input>
                                            <input placeholder="₱ 0.00" hidden id="MIPrincipalPercentage2" value="<?=$row['principal']?>" name="MIPrincipalPercentage2" readonly  pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency"  style="padding:0px 15px; width:  95%; font-size: 13px; margin:0px; background-color: #FDFDFD ;border: none;color:#4a4949" ></input>
                                            <input placeholder="₱ 0.00" hidden id="MIPercentage2" value="<?=$row['deminishingPercentage']?>" name="MIPercentage2" readonly  pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency"  style="padding:0px 15px; width:  95%; font-size: 13px; margin:0px; background-color: #FDFDFD ;border: none;color:#4a4949" ></input>
                                                  
                                                    <sup hidden> <a href="#" onclick="toggleModal1(this, 1)" data-toggle="modal" data-target="#secondMonthMIDiv" ><i class="fa fa-gears" style="font-size: 11px; color:white;"></i></a></sup>  
                                                    
                                                </td>
                                                <?php
                                                 }
                                                    }
                                                ?>      
                                        </td>
                                            
                                            </tr>
                                            
                                            <tr hidden id="factorRatetr" style="border: none; display: none">
                                            <td style="border: none;background-color: #5B7EDE;font-size: 13px;color:white;padding:0px 15px;margin:0px; font-weight: bold;" >
                                            Factor rate : <input  placeholder="0.00"  pattern="^\%\d{1,3}(,\d{3})*(\.\d+)?%"    type="number" style="float: right; padding:0px 5px; font-size: 13px; margin:0px; background-color: #e8e4c9 ;border: none;color:#4a4949;width: 28%"  id="factorratePercentage" name="factorratePercentage"  readonly ></input> <a style= "float: right; font-size: 13px; margin-right:5px; border: none;color:#fffff;width: 5%">% </a>
                                            </td>
                                             <td style="border: none;background-color: #5B7EDE;color:#4a4949;padding:0px 15px;margin:0px;" >
                                            <input placeholder="₱ 0.00" id="factorrate" name="factorrate" readonly  pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency"  style="padding:0px 15px; width:   95%; font-size: 13px; margin:0px; background-color: #e8e4c9 ;border: none;color:#4a4949" ></input> 
                                            </td>
                                            </tr>
                                            
                                            <tr id="noYearstr" style="border: none; padding-bottom:30px; display:none ">
                                           <td style="border: none;background-color: #5B7EDE;color:white;font-size: 13px;padding:0px 15px;margin:0px; font-weight: bold;" >
                                            No. of Years :
                                            
                                            </td>
                                            
                                             <td style="border: none;background-color: #5B7EDE;color:#4a4949;padding:0px 15px;margin:0px;" >
                                             <select  type="number" oninput="MA()"  style="padding:0px 15px; font-size: 13px; margin:0px; background-color: #FDFDFD ; width:  95%;border: none;color:#4a4949" placeholder="₱ 0.00" id="NoOfMonths" name="NoOfMonths">
                                                    <option > --- SELECT TERMS ---</option> 
                                                    <option name="12" value="12"> 1 Year (12 Months)</option> 
                                                    <option name="24" value="24"> 2 Years  (24 Months)</option> 
                                                    <option name="36" value="36"> 3 Years  (36 Months)</option> 
                                                    <option name="48" value="48"> 4 Years (48 Months)</option> 
                                                    <option name="60" value="60"> 5 Years (60 Months)</option> 
                                                    <option name="72" value="72"> 6 Years (72 Months)</option> 
                                                    <option name="84" value="84"> 7 Years (84 Months)</option> 
                                                    <option name="96" value="96"> 8 Years (96 Months)</option> 
                                                    <option name="108" value="108"> 9 Years (108 Months)</option> 
                                                    <option name="120" value="120"> 10 Years (120 Months)</option> 
                                                    </select>
                                            </td>
                                            </tr>
                                            <tr style="border: none; padding-bottom: 30px; ">
                                            <td style="border: none;background-color: #5B7EDE;color:#5B7EDE;padding:0px 15px;margin:0px;" >
                                            .
                                            </td>
                                            <td style="border: none;background-color: #5B7EDE;color:#5B7EDE;padding:0px 15px;margin:0px;" >
                                            .
                                            </td>
                                            </tr>
                                           
                                            <input value="<?php echo $Name; ?>" id="user" name="user" hidden>
                                            
                                        </table>
                                    </div>
                                
                            <div class="card-body myDiv"   style= "color:#4a4949; background-color:#f5cc98; display:none;" id="showSpotcash">
                                Cash Price:  <input type="text"  id= "spotCashInput" name="spotCashInput" class="form-control" style="color:#4a4949;border:none; width: 95%;background-color: transparent; padding-left: 30px; font-size: 14px" readonly><br>
                            </div>       
                            <div class="card-body myDiv" style= "color:#4a4949; background-color:#f5cc98; display:none; " id="showThirtydayscash">
                                Cash Price:  <input type="text" id= "ThirtydayscashInput" name="ThirtydayscashInput" class="form-control" style="color:#4a4949;border:none; width: 95%;background-color: transparent; padding-left: 30px; font-size: 14px"  readonly><br>
                                Spot DP:  <input type="text" id= "ThirtydaysDPcashInput" name="ThirtydaysDPcashInput" class="form-control" style="color:#4a4949;border:none; width: 95%;background-color: transparent; padding-left: 30px; font-size: 14px"  readonly><br>
                           
                            </div>            
                            <div class="card-body myDiv" style= "color:#4a4949; background-color:#f5cc98; display:none;" id="showInstallment">
                                Downpayment: <input type="text" id= "InstallmentDPInput" name="InstallmentDPInput" class="form-control" style="color:#4a4949;border:none; width: 95%;background-color: transparent; padding-left: 30px; font-size: 14px" readonly><br>
                                Installment base-monthly amortization:   
                                <select class="form-control" id="MASelect" name="MASelect" style="color:#4a4949; width: 95%; font-size: 14px; background-color: #f5ebe1;"  ><br>
                                    <option value="">------Select amortization------</option>
                                    <option value="sixmonths" name="sixmonths">6 Months</option>
                                    <option value="oneyear" name="oneyear">1 Year</option>
                                    <option value="threeyears" name="threeyears">3 Years</option>
                                    <option value="fiveyears" name="fiveyears">5 Years</option>
                                    <option value="sevenyears" name="sevenyears">7 Years</option>
                                    <option value="tenyears" name="tenyears">10 Years</option>
                                </select>
                                <div class=" myDiv1" style= "color:#4a4949; background-color:#f5cc98; display:none; " id="showsixmonths">
                                Monthly Amortization: <input type="text" id= "MAsixmonthsInput" name="MAsixmonthsInput"  class="form-control" style="color:#4a4949;border:none; width: 95%;background-color: transparent; padding-left: 30px; font-size: 14px" readonly><br>
                                </div>      
                                <div class=" myDiv1" style= "color:#4a4949; background-color:#f5cc98; display:none; " id="showoneyear">
                                Monthly Amortization: <input type="text" id= "MAoneyearInput"  name="MAoneyearInput"  class="form-control" style="color:#4a4949;border:none; width: 95%;background-color: transparent; padding-left: 30px; font-size: 14px"  readonly><br>
                                </div>    
                                <div class=" myDiv1" style= "color:#4a4949; background-color:#f5cc98; display:none; " id="showthreeyears">
                                Monthly Amortization: <input type="text" id= "MAthreeyearsInput"  name="MAthreeyearsInput"  class="form-control" style="color:#4a4949;border:none; width: 95%;background-color: transparent; padding-left: 30px; font-size: 14px" readonly><br>
                                </div>    
                                <div class=" myDiv1" style= "color:#4a4949; background-color:#f5cc98; display:none; " id="showfiveyears">
                                Monthly Amortization: <input type="text" id= "MAfiveyearsInput"  name="MAfiveyearsInput"  class="form-control" style="color:#4a4949;border:none; width: 95%;background-color: transparent; padding-left: 30px; font-size: 14px" readonly><br>
                                </div>    
                                <div class=" myDiv1" style= "color:#4a4949; background-color:#f5cc98; display:none; " id="showsevenyears">
                                Monthly Amortization: <input type="text" id= "MAsevenyearsInput"  name="MAsevenyearsInput"  class="form-control" style="color:#4a4949;border:none; width: 95%;background-color: transparent; padding-left: 30px; font-size: 14px"  readonly><br>
                                </div>    
                                <div class=" myDiv1" style= "color:#4a4949; background-color:#f5cc98; display:none; " id="showtenyears">
                                Monthly Amortization: <input type="text" id= "MAtenyearsInput"  name="MAtenyearsInput"  class="form-control" style="color:#4a4949;border:none; width: 95%;background-color: transparent; padding-left: 30px; font-size: 14px"  readonly><br>
                                </div>         
                            </div>            
                           
                            </div>
                            <div hidden style="float: left; width: 0%; height: 640px; margin-bottom: 30px; padding: 40px 10px;  color:#4a4949; font-size: 14px; font-weight: bold;background-color: #fcd8b6;" >
                           
                                lot Interment:   <sub><input type="checkbox"  class = "showSpecialClass_checkedbox" name="showSpecialClass_checkedbox" value="1"></sub><a style="font-size: 11px;" > Special Cases</a>
                                <input type="text" id="LIInput"  name="LIInput"   class="form-control" style="background-color:#f7efe4;color:#4a4949;border:none; width: 95%; padding-left: 30px; font-size: 14px"  readonly>
                                Location: <input type="text"  id="location"   name="location"  value="" class="form-control" style="color:#4a4949;border:none; width: 95%;background-color:#f7efe4; padding-left: 30px; font-size: 14px"  readonly>
                                Terms: 
                                <div class="specialPreNeed" >
                                <select class="form-control "  id="SpecialIntermentTermsSelect" name="SpecialIntermentTermsSelect" style="color:#4a4949; background-color:#f7efe4;width: 95%; font-size: 14px; background-color: #f5ebe1;" ><br>
                                    <option value="">------Select terms------</option>    
                                    <option value="Special_Cases_Pre_Need" >Pre-Need</option>
                                    <option value="Special_Cases_At_Need" >At-Need</option>
                                    <option value="Special_Cases_Special_Days_Night_And_Dawn" >Special Days Night/Dawn</option>
                                    <option value="Special_Cases_Special_Days_Pre_Need">Special Days Pre-Need </option>
                                    <option value="Special_Cases_Special_Days_At_Need">Special Days At-Need</option>
                                </select>
                                </div>
                                <div class="regularPreNeed" >
                                <select class="form-control"  id="IntermentTermsSelect" name="IntermentTermsSelect" style="color:#4a4949; background-color:#f7efe4;width: 95%; font-size: 14px; background-color: #f5ebe1;" ><br>
                                    <option value="">------Select terms------</option>
                                    <option value="Regular">Regular Interment</option>
                                    <option value="Pre_need">Pre-Need</option>
                                    <option value="At_Need">At-Need</option>
                                    <option value="Night_Dawn">Night/ Dawn</option>
                                    <option value="Special_Days">Special Days</option>
                                </select>
                                </div>
                               
                                
                            <div class="card-body myDiv2" style= "color:#4a4949; background-color:#f5cc98; margin-left: 1px;display:none;" id="showRegular">
                            Regular Fee :
                            <input type="text" name="Regular_interment" id="Regular_interment" value="" class="form-control" style="color:#4a4949;border:none; width: 95%;background-color: transparent; padding-left: 30px; font-size: 14px"  readonly><br>
                            </div>    
                            <div class="card-body myDiv2" style= "color:#4a4949; background-color:#f5cc98; margin-left: 1px; display:none;" id="showPre_need">
                             Pre-Need (24 - 72 hrs) <br>Interment Fee: <input type="text" id="preneed" name="preneed"  value="" class="form-control" style="color:#4a4949;border:none; width: 95%;background-color: transparent; padding-left: 30px; font-size: 14px"  readonly><br>
                            </div>       
                            <div class="card-body myDiv2" style= "color:#4a4949; background-color:#f5cc98; margin-left: 1px; display:none;" id="showAt_Need">
                             At Need (24 - 72 hrs) <br>Interment Fee: <input type="text" id="atneed" name="atneed"  class="form-control" style="color:#4a4949;border:none; width: 95%;background-color: transparent; padding-left: 30px; font-size: 14px"  readonly><br>
                            </div>      
                            <div class="card-body myDiv2" style= "color:#4a4949; background-color:#f5cc98; margin-left: 1px; display:none;" id="showNight_Dawn">
                            Night (6PM - 4AM) <br>Dawn (4:01AM - 8AM) <br>Interment Fee: <input type="text" id="night" name="night"  class="form-control" style="color:#4a4949;border:none; width: 95%;background-color: transparent; padding-left: 30px; font-size: 14px"  readonly><br>
                            </div>       
                            <div class="card-body myDiv2" style= "color:#4a4949; background-color:#f5cc98; margin-left: 1px; display:none; " id="showSpecial_Days">
                            Special Days <br>(Weekends/ Holidays)<br>Interment Fee: <input type="text" id="specialdays" name="specialdays"  class="form-control" style="color:#4a4949;border:none; width: 95%;background-color: transparent; padding-left: 30px; font-size: 14px"  readonly><br>
                            </div>   
                                 
                            <div class="card-body myDiv2" style= "color:#4a4949; background-color:#f5cc98; margin-left: 1px;display:none;" id="showSpecial_Cases_Pre_Need">
                            Pre-Need Night/Dawn<br> (24 - 72 hrs) Fee :
                            <input type="text" name="SpecialRegular_interment" id="SpecialRegular_interment" value="" class="form-control" style="color:#4a4949;border:none; width: 95%;background-color: transparent; padding-left: 30px; font-size: 14px"  readonly><br>
                            </div>    
                            <div class="card-body myDiv2" style= "color:#4a4949; background-color:#f5cc98; margin-left: 1px; display:none;" id="showSpecial_Cases_At_Need">
                            At-Need Night/Dawn<br> (24 - 72 hrs) Fee: <input type="text" id="Specialpreneed" name="Specialpreneed"  value="" class="form-control" style="color:#4a4949;border:none; width: 95%;background-color: transparent; padding-left: 30px; font-size: 14px"  readonly><br>
                            </div>       
                            <div class="card-body myDiv2" style= "color:#4a4949; background-color:#f5cc98; margin-left: 1px; display:none;" id="showSpecial_Cases_Special_Days_Night_And_Dawn">
                            Special Days (weekends/ Holidays) <br> Night/Dawn Fee:<input type="text" id="Specialatneed" name="Specialatneed"  class="form-control" style="color:#4a4949;border:none; width: 95%;background-color: transparent; padding-left: 30px; font-size: 14px"  readonly><br>
                            </div>      
                            <div class="card-body myDiv2" style= "color:#4a4949; background-color:#f5cc98; margin-left: 1px; display:none;" id="showSpecial_Cases_Special_Days_Pre_Need">
                            Special Days (weekends/ Holidays) <br> Pre-Need Fee: <input type="text" id="Specialnight" name="Specialnight"  class="form-control" style="color:#4a4949;border:none; width: 95%;background-color: transparent; padding-left: 30px; font-size: 14px"  readonly><br>
                            </div>       
                            <div class="card-body myDiv2" style= "color:#4a4949; background-color:#f5cc98; margin-left: 1px; display:none; " id="showSpecial_Cases_Special_Days_At_Need">
                            Special Days (weekends/ Holidays) <br> At-Need Fee: <input type="text" id="Specialspecialdays" name="Specialspecialdays"  class="form-control" style="color:#4a4949;border:none; width: 95%;background-color: transparent; padding-left: 30px; font-size: 14px"  readonly><br>
                            </div>   

                            Additional Charges: <input type="text" id="LevelDepth" name="LevelDepth" value="None" class="form-control" style="color:#4a4949;border:none; width: 95%;background-color: #f5ebe1; padding-left: 30px; font-size: 14px"  readonly><br>
                            Depth (ft): <input type="text" id="depthftinput" name="depthftinput"  class="form-control" style="color:#4a4949;border:none; width: 95%;background-color: #f5ebe1; padding-left: 30px; font-size: 14px"  readonly><br>
                            Charges: <input type="text" id="charges" name="charges"  class="form-control" style="color:#4a4949;border:none; width: 95%;background-color: #f5ebe1; padding-left: 30px; font-size: 14px"  readonly><br>
                           
                            </div>
                          

                            </div>       
                           
                        </center>   
                        
                                    <table class="table " cellspacing="0" >
                                        <tr> 
                                            <th colspan="5" style="color:#ffffff; background-color:#007ea7; font-size: 14px">Payment Method</th>
                                        </tr>
                                        <tr style="color:#4a4949"> 
                                            <td>Initial Payment<br><input type="date" class="form-control" id="PaymentDueDate" name="PaymentDueDate" style="color:#4a4949; font-size: 14px; margin-top: 7px" >
                                            <td>Payment Method<br>
                                            <select class="form-control" id="paymentMethod" name="paymentMethod" style="color:#4a4949; width: 95%; font-size: 14px"  ><br>
                                                <option value="">----Select Payment Method----</option>
                                                <option value="Cash" name="Cash">Cash</option>
                                                <option value="Online" name="Online">Online</option>
                                            </select>
                                        </td>
                                            <td>Full downpayment<br><input type="text" class="form-control" id="totalBalance" name="totalBalance"  style="color:#4a4949; font-size: 14px;" >
                                            </td>
                                            </tr>
                                            
                                      
                                    </table>
                                    <div style="float:right; margin-bottom:10px;"> 
                                        <button name="promoVoucher" id="promoVoucher" class="voucher-button">Promo</button> 
                                        <button class="print-button">Print</button>
                                        <button type="submit" name="lotLedger1" id="lotLedger1" class="save-button">Save</button> 
                                       
                                    </div>  
                                 </form>
                                </div>    
                            
                            



                            <div id="showcryptdiv1" style="color:#ffffff; background-color:#007ea7; font-size: 15px; padding: 8px; display:none">Crypt Description</div>
                             <div class="card-body" style= "color:#4a4949; display:none" id="showcryptdiv">
                             <form method="POST" Action="Insert_LotCryptDescription.php" enctype="multipart/form-data"> 
                             <div class="table-responsive" style="width: 100%;" id="showcryptdescdiv" >
                                <table id="dtcryptDescRecord" class="table table-striped table-bordered table-sm" style= "color:#4a4949 " cellspacing="0" width="100%">
                                    <thead>
                                    
                                         <tr style="background-color: #00a8e8">
                                            <th class="th-sm" style= "width: 2%; font-size: 14px; color:#ffffff ">ID</th>
                                            <th class="th-sm" style= "width: 10%;font-size: 14px; color:#ffffff ">Phase</th>
                                            <th class="th-sm" style= "width: 10%; font-size: 14px; color:#ffffff ">Level</th>
                                            <th class="th-sm" style= "width: 10%; font-size: 14px; color:#ffffff ">Area</th>
                                            <th class="th-sm" style= "width: 10%; font-size: 14px; color:#ffffff ">Section</th>
                                            <th class="th-sm" style= "width: 10%; font-size: 14px; color:#ffffff ">Column</th>
                                            <th class="th-sm" style= "width: 10%; font-size: 14px; color:#ffffff ">Unit no</th>
                                            <th class="th-sm" style= "width: 10%; font-size: 14px; color:#ffffff ">Classification</th>
                                            <th class="th-sm" style= "width: 10%; font-size: 14px; color:#ffffff ">List Price</th>
                                            <th class="th-sm" style= "width: 6%; font-size: 14px; color:#ffffff ">Tools</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody style="border: 2px solid #e3e6f0;">  
                                     <?php
                                        $sales_query = "SELECT * from tbl_cryptdescription ";
                                        $sales_result = mysqli_query($connection, $sales_query);
                                        if (mysqli_num_rows($sales_result) > 0) {
                                        while ($row = mysqli_fetch_assoc($sales_result)) {
                                    ?>
                                            <tr style="border: 2px solid #e3e6f0">
                                            <td  style= "width: 2%;font-size: 14px; color:#4a4949 " class="table-cell"><?=$row['id']?></td>
                                            <td  style= "width: 10%;font-size: 14px; color:#4a4949 " class="table-cell"><?=$row['phase']?></td>
                                            <td  style= "width: 10%;font-size: 14px; color:#4a4949 " class="table-cell"><?=$row['level']?></td>
                                            <td  style= "width: 10%;font-size: 14px; color:#4a4949 " class="table-cell"><?=$row['area']?></td>
                                            <td  style= "width: 10%;font-size: 14px; color:#4a4949 " class="table-cell"><?=$row['section']?></td>
                                            <td  style= "width: 10%;font-size: 14px; color:#4a4949 " class="table-cell"><?=$row['crypt_column']?></td>
                                            <td  style= "width: 10%;font-size: 14px; color:#4a4949 " class="table-cell"><?=$row['unit_no']?></td>
                                            <td  style= "width: 10%;font-size: 14px; color:#4a4949 " class="table-cell"><?=$row['classification']?></td>
                                            <td  style= "width: 10%;font-size: 14px; color:#4a4949 " class="table-cell"><?=$row['listPrice']?></td>
                                            <td  style= "width: 6%;font-size: 14px; color:#4a4949 " class="table-cell">
                                            <button style="color:#ffffff; font-size:12px; padding: 5px;width: 100%; background-color: #ef476f" type="button" class="btn btn-primary"  id="cryptlotDescriptionTypeAdd_button" name="cryptlotDescriptionTypeAdd_button" data-controls-modal="myModal" data-backdrop="static" data-keyboard="false"><i class="fas fa-cart-plus"></i> Get Reservation</button>
                                </td>
                                    <?php
                                        }
                                        }
                                    ?>   
                                            </tr>
                                            
                                    </tbody>       
                                </table> 
                            </div> 
                            <div style="width: 100%; display:none" id="showcryptintementdiv" >
                             <div class="table-responsive showcryptRegularCases_div"  >
                                <table id="dtcryptinternment" class="table table-striped table-bordered table-sm" style= "color:#4a4949 " cellspacing="0" width="100%">
                                    <thead>
                                         <tr style="background-color: #00a8e8">
                                            <th class="th-sm" style= "width: 2%; font-size: 14px; color:#ffffff ">ID</th>
                                            <th class="th-sm" style= "width: 10%;font-size: 14px; color:#ffffff ">Bone/Urn Interment</th>
                                            <th class="th-sm" style= "width: 8%; font-size: 14px; color:#ffffff ">Location</th>
                                            <th class="th-sm" style= "width: 10%; font-size: 14px; color:#ffffff ">Regular Fee</th>
                                            <th class="th-sm" style= "width: 13%; font-size: 14px; color:#ffffff ">Pre-Need Fee</th>
                                            <th class="th-sm" style= "width: 10%; font-size: 14px; color:#ffffff ">At-Need Fee</th>
                                            <th class="th-sm" style= "width: 10%; font-size: 14px; color:#ffffff ">Night/Dawn Fee</th>
                                            <th class="th-sm" style= "width: 10%; font-size: 14px; color:#ffffff ">Special Days</th>
                                            <th class="th-sm" style= "width: 6%; font-size: 14px; color:#ffffff ">Tools</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody style="border: 2px solid #e3e6f0;">  
                                     <?php
                                        $sales_query = "SELECT * from tbl_boneurnintermentdescription ";
                                        $sales_result = mysqli_query($connection, $sales_query);
                                        if (mysqli_num_rows($sales_result) > 0) {
                                        while ($row = mysqli_fetch_assoc($sales_result)) {
                                    ?>
                                            <tr style="border: 2px solid #e3e6f0">
                                            <td  style= "width: 2%;font-size: 14px; color:#4a4949 "><?=$row['id']?></td>
                                            <td  style= "width: 10%;font-size: 14px; color:#4a4949 "><?=$row['bone_urnInterment']?></td>
                                            <td  style= "width: 8%;font-size: 14px; color:#4a4949 "><?=$row['location']?></td>
                                            <td  style= "width: 10%;font-size: 14px; color:#4a4949 "><?=$row['regularIntermentFee']?></td>
                                            <td  style= "width: 13%;font-size: 14px; color:#4a4949 "><?=$row['preNeed']?></td>
                                            <td  style= "width: 10%;font-size: 14px; color:#4a4949 "><?=$row['atNeed']?></td>
                                            <td  style= "width: 10%;font-size: 14px; color:#4a4949 "><?=$row['night']?></td>
                                            <td  style= "width: 10%;font-size: 14px; color:#4a4949 "><?=$row['specialDays']?></td>
                                            <td  style= "width: 6%;font-size: 14px; color:#4a4949 ">
                                                <button style="color:#ffffff; font-size:12px; padding: 5px;width: 100%; background-color: #ef476f" type="button" class="btn btn-primary"  id="lotDescriptionTypeAdd_button" name="lotDescriptionTypeAdd_button" data-controls-modal="myModal" data-backdrop="static" data-keyboard="false"><i class="fas fa-cart-plus"></i> Get Reservation</button></th>
                                            </td>
                                    <?php
                                        }
                                        }
                                    ?>   
                                            </tr>
                                            
                                    </tbody>       
                                </table> 
                            </div>
                            <div class="table-responsive showcryptSpecialCases_div" style="width: 100%; display:none"  >
                                <table id="dtspecial_cryptintermentdescription" class="table table-striped table-bordered table-sm" style= "color:#4a4949 " cellspacing="0" width="100%">
                                    <thead>
                                      
                                           
                                         <tr style="background-color: #00a8e8">
                                            <th class="th-sm" style= "width: 2%; font-size: 14px; color:#ffffff ">ID</th>
                                            <th class="th-sm" style= "width: 10%;font-size: 14px; color:#ffffff ">Lot Interment</th>
                                            <th class="th-sm" style= "width: 10%; font-size: 14px; color:#ffffff ">Location</th>
                                            <th class="th-sm" style= "width: 5%; font-size: 14px; color:#ffffff ">Pre-Need Fee</th>
                                            <th class="th-sm" style= "width: 10%; font-size: 14px; color:#ffffff ">At-Need Fee</th>
                                            <th class="th-sm" style= "width: 10%; font-size: 14px; color:#ffffff ">Special Days <br> Night/Dawn Fee</th>
                                            <th class="th-sm" style= "width: 10%; font-size: 14px; color:#ffffff ">Special Days <br> Pre-Need Fee</th>
                                            <th class="th-sm" style= "width: 10%; font-size: 14px; color:#ffffff ">Special Days <br> At-Need Fee</th>
                                            <th class="th-sm" style= "width: 6%; font-size: 14px; color:#ffffff ">Tools</th>
                                        </tr>
                                      
                                    </thead>
                                    
                                    <tbody style="border: 2px solid #e3e6f0;">  
                                     <?php
                                        $sales_query = "SELECT * from tbl_specialboneinterment ";
                                        $sales_result = mysqli_query($connection, $sales_query);
                                        if (mysqli_num_rows($sales_result) > 0) {
                                        while ($row = mysqli_fetch_assoc($sales_result)) {
                                        ?>
                                            <tr style="border: 2px solid #e3e6f0">
                                            <td  style= "width: 2%;font-size: 14px; color:#4a4949 "><?=$row['id']?></td>
                                            <td  style= "width: 10%;font-size: 14px; color:#4a4949 "><?=$row['bone_urnInterment']?></td>
                                            <td  style= "width: 8%;font-size: 14px; color:#4a4949 "><?=$row['location']?></td>
                                            <td  style= "width: 10%;font-size: 14px; color:#4a4949 "><?=$row['preNeed']?></td>
                                            <td  style= "width: 13%;font-size: 14px; color:#4a4949 "><?=$row['atNeed']?></td>
                                            <td  style= "width: 10%;font-size: 14px; color:#4a4949 "><?=$row['specialDaysNightDawn']?></td>
                                            <td  style= "width: 10%;font-size: 14px; color:#4a4949 "><?=$row['specialDaysPreNeed']?></td>
                                            <td  style= "width: 10%;font-size: 14px; color:#4a4949 "><?=$row['specialDaysAtNeed']?></td>
                                            <td  style= "width: 6%;font-size: 14px; color:#4a4949 ">
                                            <button style="color:#ffffff; font-size:12px; padding: 5px;width: 100%; background-color: #ef476f" type="button" class="btn btn-primary"  id="lotDescriptionTypeAdd_button" name="lotDescriptionTypeAdd_button" data-controls-modal="myModal" data-backdrop="static" data-keyboard="false"><i class="fas fa-cart-plus"></i> Get Reservation</button></th>
                                    </td>
                                        <?php
                                            }
                                            }
                                        ?>   
                                            </tr>
                                            
                                    </tbody>       
                                </table> 
                            </div>
                            </div>
                                <div style=" text-align: left; font-size: 15px; color:#4a4949 ">
                                <input type="radio" style="color:#4a4949; margin-right: 5px;" name="cryptDescription" onclick="showcryptdesc();"  checked> Crypt
                                <input type="radio" style="color:#4a4949; margin-right: 5px; margin-left: 30px;" onclick="showcryptIntermentdesc();"  name="cryptDescription"> Crypt Interment
                                 </div>
                            <center>
                            <div style=" width: 100%; text-align: left; ">
                                 
                                <div style="float: left; width: 30%; height: 640px; padding: 25px 40px; margin-bottom: 30px; color:#4a4949; font-size: 14px; font-weight: bold;background-color: #fcd8b6;" >
                                <table style="width:100%; color:#4a4949; font-size: 14px; font-weight: bold;">
                                
                                <tr>
                                <td  style="width:100%"> Reservation Date:<input type="text" id="date23" name="date23" class="form-control" style="color:#4a4949;border:none; width: 95%;background-color: transparent; padding-left: 30px; font-size: 14px" readonly></td>
                                </tr>
                                <tr>
                                    <td  style="width:100%">Customer Code:<input type="text" id="CustomerCode123" name="CustomerCode123" class="form-control" style="color:#4a4949;border:none; width: 100%;background-color: transparent; padding-left: 30px; font-size: 14px"  readonly></td>
                                </tr>
                                <tr>
                                    <td  style="width:100%">Customer Name:<input type="text"  id="Fullname2" name="Fullname2"  class="form-control" style="color:#4a4949;border:none; width: 100%;background-color: transparent; padding-left: 30px; font-size: 14px" readonly></td>
                                </tr>

                                <tr>
                                    <td  style="width:100%">Crypt ID:<input type="text"  style="width: 50%; float: right;color:#4a4949;border:none; background-color: transparent;padding:0px; font-size: 14px" id="crypt_id1" name="crypt_id1"  readonly></td>
                                </tr>
                                <tr>
                                    <td  style="width:100%">Phase:<input type="text"  style="width: 50%; float: right;color:#4a4949;border:none; background-color: transparent;padding:0px; font-size: 14px" id="cryptphase" name="cryptphase"  readonly></td>
                                </tr>
                                <tr>
                                    <td  style="width:100%">Level:<input type="text"  style="width: 50%; float: right;color:#4a4949;border:none; background-color: transparent;padding:0px; font-size: 14px" id="cryptlevel" name="cryptlevel"  readonly></td>
                                </tr>
                                <tr>
                                    <td  style="width:100%">Area:<input type="text"  style="width: 50%; float: right;color:#4a4949;border:none; background-color: transparent;padding:0px; font-size: 14px" id="cryptArea" name="cryptArea"  readonly></td>
                                </tr>
                                <tr>
                                    <td  style="width:100%">Section:<input type="text"  style="width: 50%; float: right;color:#4a4949;border:none; background-color: transparent;padding:0px; font-size: 14px" id="cryptSection" name="cryptSection"  readonly></td>
                                </tr>
                                <tr>
                                    <td  style="width:100%">Column:<input type="text"  style="width: 50%; float: right;color:#4a4949;border:none; background-color: transparent;padding:0px; font-size: 14px" id="cryptColumn" name="cryptColumn"  readonly></td>
                                </tr>
                                <tr>
                                    <td  style="width:100%">Unit no:<input type="text"  style="width: 50%; float: right;color:#4a4949;border:none; background-color: transparent;padding:0px; font-size: 14px" id="cryptUnit" name="cryptUnit"  readonly></td>
                                </tr>
                                <tr>
                                    <td  style="width:100%">Classification:<input type="text"   style="width: 50%; float: right;color:#4a4949;border:none; background-color: transparent;padding:0px; font-size: 14px" id="cryptClassification" name="cryptClassification"  readonly></td>
                                </tr>

                            </table>
                                
                            </div>
                                    
                                <div style="float: left; width: 40%; height: 640px; margin-bottom: 30px;  padding: 40px 10px;  color:#4a4949; font-size: 14px; font-weight: bold;background-color: #fcd8b6;" >
                            
                               <input type="text" id="id1" name="id1" class="form-control" style="color:#4a4949;border:none; width: 95%;background-color: transparent; padding-left: 30px; font-size: 14px" hidden  readonly>
                              
                               <tr style="border: none;">
                                            <td style="border: none; width: 50%; color:#4a4949; font-size: 13px;background-color: Transparent;padding-left:15px;padding-right:0px;padding-bottom:0px;padding-top:15px;margin:0px; font-weight: bold" >
                                           <p style="padding-top: 5px;"> Terms :</p>
                                            </td>
                                            <td style="border: none;background-color: transparent;;padding-left:15px;padding-right:15px;padding-bottom:0px;margin:0px; font-weight: bold;" >
                                            <select  type="text"  class="form-control" style="padding: 8px; color:#4a4949; font-size: 13px;" id="cryptterms" name="cryptterms">
                                                    <option > --- SELECT TERMS ---</option> 
                                                    <option style="color:#4a4949"  name="cryptPreNeedPrice" value="cryptPreNeedPrice"> Pre-Need Price</option> 
                                                    <option style="color:#4a4949" name="cryptAtNeedPrice" value="cryptAtNeedPrice"> AT-Need Price</option> 
                                                    <option style="color:#4a4949" name="cryptSpotCash" value="cryptSpotCash">Spot Cash</option> 
                                                    <option style="color:#4a4949" name="cryptM_Cash" value="cryptM_Cash">M-Cash 30 Days</option> 
                                                    <option style="color:#4a4949" name="cryptInstallment" value="cryptInstallment">Installment</option> 
                                                    </select>
                                            </td>
                                            </tr>
                                            
                                            <div  style="width: 100%;  border-color: #5B7EDE">
                                        <table class="table"   cellspacing="0"   >
                                            <tr  > 
                                               
                                            </tr>
                                            <tr style="border: none;">
                                            <td style="border: none; width: 50%; color:white; font-size: 13px;background-color: #5B7EDE;padding-left:15px;padding-right:0px;padding-bottom:0px;padding-top:15px;margin:0px; font-weight: bold" >
                                            Lot List Price :
                                            </td>
                                            <td style="border: none;background-color: #5B7EDE;color:#4a4949;padding-left:15px;padding-right:15px;padding-bottom:0px;padding-top:15px;margin:0px; font-weight: bold;" >
                                           
                                            <input readonly placeholder="₱ 0.00" pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency"  oninput="cryptcompute()" style="padding:0px 15px; width: 95%; font-size: 13px; margin:0px; background-color: #FDFDFD ;border: none;color:#4a4949" id ="cryptlotListPrice" name="cryptlotListPrice"  ></input>
                                            </td>
                                            </tr>
                                            
                                            <tr style="border: none">
                                            <td style="border: none; width: 50%; color:white;font-size: 13px; background-color: #5B7EDE;padding:0px 15px;margin:0px; font-weight: bold;" >
                                             Value Added Tax (_)% :
                                            </td>
                                            <?php
                                                $sales_query = "SELECT * from tbl_tax";
                                                $sales_result = mysqli_query($connection, $sales_query);
                                                    if (mysqli_num_rows($sales_result) > 0) {
                                                    while ($row = mysqli_fetch_assoc($sales_result)) {
                                                ?>
                                                 <td class="crypttaxID" name="crypttaxID" hidden><?=$row['id']?></td>
                                                 
                                            <td style="border: none;background-color: #5B7EDE;color:#4a4949;padding:0px 15px;margin:0px;" >
                                          
                                            <input placeholder="₱ 0.00" style="padding:0px 15px; font-size: 13px; margin:0px; background-color: #e8e4c9 ;border: none;color:#4a4949; width: 95%" id="crypttaxs" name="crypttaxs" value ="<?=$row['tax']?>" hidden></input>
                                          
                                            <input placeholder="₱ 0.00" style="padding:0px 15px; font-size: 13px; width: 95%; margin:0px; background-color: #e8e4c9 ;border: none;color:#4a4949; width: 95%" id="crypttaxs1" name="crypttaxs1"  readonly   ></input>
                                          
                                                <script>
                                                   let tableRowElement1;
                                                   function toggleModal1(element1) {
                                                    tableRowElement1 = element1.parentElement.parentElement;

                                                   const taxID123 = tableRowElement1.getElementsByClassName('crypttaxID')[0].innerHTML;
                                                   document.getElementById('crypttaxID').value = taxID123;
                                                    }     
                                                    </script>  
                                                    <sup hidden> <a href="#" onclick="toggleModal1(this, 1)" data-toggle="modal" data-target="#tax" ><i class="fa fa-gears" style="font-size: 11px; color:white;"></i></a></sup>  
                                                    
                                                </td>
                                                <?php
                                                 }
                                                    }
                                                ?>   
                                            </tr>
                                            <tr style="border: none">
                                           <td style="border: none;background-color: #5B7EDE;font-size: 13px;color:white;padding:0px 15px;margin:0px; font-weight: bold;" >
                                            Subtotal :
                                            </td>
                                             <td style="border: none;background-color: #5B7EDE;color:#4a4949;padding:0px 15px;margin:0px;" >
                                            <input placeholder="₱ 0.00" readonly pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency"  style="padding:0px 15px; width: 95%; font-size: 13px; margin:0px; background-color: #e8e4c9 ;border: none;color:#4a4949" id="cryptsubtotaltax" name="cryptsubtotaltax"></input>
                                            </td>
                                            </tr>
                                            
                                            <tr style="border: none">
                                            
                                           <td style="border: none;background-color: #5B7EDE;font-size: 13px;color:white;padding:0px 15px;margin:0px; font-weight: bold;" >
                                            Perpetual Care Funds :
                                            </td>
                                            <?php
                                                    $sales_query1 = "SELECT * from tbl_PCF";
                                                    $sales_result1 = mysqli_query($connection, $sales_query1);
                                                    if (mysqli_num_rows($sales_result1) > 0) {
                                                    while ($row = mysqli_fetch_assoc($sales_result1)) {
                                                    ?>
                                                                                             
                                                    <td class="cryptPCFID" name="cryptPCFID" hidden><?=$row['id']?></td>
                                                    
                                             <td style="border: none;background-color: #5B7EDE;color:#4a4949;padding:0px 15px;margin:0px;" >
                                             
                                            
                                                <input placeholder="₱ 0.00" readonly pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency"  style="padding:0px 15px; width: 95%; font-size: 13px; margin:0px; background-color: #e8e4c9 ;border: none;color:#4a4949; width: 95%" id="cryptpcf" name="cryptpcf" value="₱ <?=$row['PCF']?>"  ></input>
                                               
                                               <script>
                                                    let tableRowElement1;
                                                   function toggleModal1(element1) {
                                                    tableRowElement1 = element1.parentElement.parentElement;

                                                   const cryptPCFID1 = tableRowElement1.getElementsByClassName('cryptPCFID')[0].innerHTML;
                                                   document.getElementById('cryptPCFID').value = cryptPCFID1;
                                                    }     

                                                    </script>  
                                                    <sup hidden><a href="#" onclick="toggleModal1(this, 1)" data-toggle="modal" data-target="#PCF" ><i class="fa fa-gears" style="font-size: 11px; color:white;"></i></a></sup>  
                                                    
                                                </td>
                                                <?php
                                                 }
                                                    }
                                                ?>   
                                                </td>
                                            </tr>
                                            <tr style="border: none">
                                                <td style="border: none;background-color: #5B7EDE;font-size: 13px;color:white;padding:0px 15px;margin:0px; font-weight: bold;" >
                                                Less Discount :
                                                </td>
                                                    <?php
                                                    $sales_query1 = "SELECT * from tbl_discount";
                                                    $sales_result1 = mysqli_query($connection, $sales_query1);
                                                    if (mysqli_num_rows($sales_result1) > 0) {
                                                    while ($row = mysqli_fetch_assoc($sales_result1)) {
                                                    ?>
                                                                                             
                                                    <td class="cryptdiscountID" name="cryptdiscountID" hidden><?=$row['id']?></td>
                                                    <td style="border: none;background-color: #5B7EDE;color:#4a4949;padding:0px 15px;margin:0px;" > 
                                                    <input placeholder="₱ 0.00" style="padding:0px 15px; font-size: 13px; width: 95%; margin:0px; background-color: #e8e4c9 ;border: none;color:#4a4949;width: 95%"  id="cryptdiscounts" name="cryptdiscounts" value ="<?=$row['discount']?>" hidden ></input>
                                                  
                                                    <input placeholder="₱ 0.00" style="padding:0px 15px; font-size: 13px; width: 95%; margin:0px; background-color: #e8e4c9 ;border: none;color:#4a4949;width: 95%"  id="cryptdiscounts1" name="cryptdiscounts1" readonly></input>
                                                   <script>
                                                    let tableRowElement1;
                                                   function toggleModal1(element1) {
                                                    tableRowElement1 = element1.parentElement.parentElement;

                                                   const crypttaxID1 = tableRowElement1.getElementsByClassName('cryptdiscountID')[0].innerHTML;
                                                   document.getElementById('cryptdiscountID').value = crypttaxID1;
                                                    }     

                                                    </script>  
                                                    <sup hidden><a href="#" onclick="toggleModal1(this, 1)" data-toggle="modal" data-target="#discount" ><i class="fa fa-gears" style="font-size: 11px; color:white;"></i></a></sup>  
                                                    
                                                </td>
                                                <?php
                                                 }
                                                    }
                                                ?>   
                                                </td>
                                           
                                            </tr>
                                            <tr style="border: none">
                                           <td style="border: none;background-color: #5B7EDE;font-size: 13px;color:white;padding:0px 15px;margin:0px; font-weight: bold;" >
                                            Subtotal :
                                            </td>
                                             <td style="border: none;background-color: #5B7EDE;color:#4a4949;padding:0px 15px;margin:0px;" >
                                            <input placeholder="₱ 0.00" readonly pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency"  style="padding:0px 15px; width: 95%; font-size: 13px; margin:0px; background-color: #e8e4c9 ;border: none;color:#4a4949" id="cryptsubtotalDiscount" name="cryptsubtotalDiscount"  ></input>
                                            </td>
                                            </tr>
                                            <tr style="border: none">
                                           <td id="cryptPreNeedPrice" style="border: none;background-color: #5B7EDE;font-size: 13px;color:white;padding:0px 15px;margin:0px; font-weight: bold;" >
                                            Total Contract Price :
                                            </td>
                                             <td style="border: none;background-color: #5B7EDE;color:#4a4949;padding:0px 15px;margin:0px;" >
                                            <input placeholder="₱ 0.00"  readonly pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency" oninput="computedp()" style="padding:0px 15px; width: 95%; font-size: 13px; margin:0px; background-color: #FDFDFD ;border: none;color:#4a4949" id ="crypttotalContractPrice3" name ="crypttotalContractPrice3"></input>
                                            </td>
                                            </tr>
                                            <tr hidden style="border: none">
                                           <td hidden style="border: none;background-color: #5B7EDE;font-size: 13px;color:white;padding:0px 15px;margin:0px; font-weight: bold;" >
                                            Add_% Mark-up :
                                            </td>
                                            <?php
                                                    $sales_query1 = "SELECT * from tbl_Markup";
                                                    $sales_result1 = mysqli_query($connection, $sales_query1);
                                                    if (mysqli_num_rows($sales_result1) > 0) {
                                                    while ($row = mysqli_fetch_assoc($sales_result1)) {
                                                    ?>
                                                                                             
                                                    <td hidden class="MarkupID" name="MarkupID" hidden><?=$row['id']?></td>
                                             <td hidden style="border: none;background-color: #5B7EDE;color:#4a4949;padding:0px 15px;margin:0px;" >
                                            <input  placeholder="₱ 0.00"  readonly style="padding:0px 15px; font-size: 13px; margin:0px; background-color: #e8e4c9; width: 95% ;border: none;color:#4a4949;width: 95%" id ="cryptmarkup" name ="cryptmarkup" value ="<?=$row['markup']?>" hidden></input>
                                            <input  placeholder="₱ 0.00" readonly style="padding:0px 15px; font-size: 13px; margin:0px; background-color: #e8e4c9 ; width: 95%;border: none;color:#4a4949;width: 95%" id ="cryptmarkup1" name ="cryptmarkup1" ></input>
                                           
                                            <script>
                                                    let tableRowElement1;
                                                    function toggleModal1(element1) {
                                                    tableRowElement1 = element1.parentElement.parentElement;

                                                    const MarkupID1 = tableRowElement1.getElementsByClassName('MarkupID')[0].innerHTML;
                                                    document.getElementById('MarkupID').value = MarkupID1;
                                                    }     

                                                    </script>  
                                                    <sup hidden><a href="#" onclick="toggleModal1(this, 1)" data-toggle="modal" data-target="#Markup" ><i class="fa fa-gears" style="font-size: 11px; color:white;"></i></a></sup>  
                                                    
                                                </td>
                                                <?php
                                                 }
                                                    }
                                                ?>   
                                            </td>
                                            </tr>
                                            <tr style="border: none" hidden>
                                           <td style="border: none;background-color: #5B7EDE;font-size: 13px;color:white;padding:0px 15px;margin:0px; font-weight: bold;" >
                                            At-Needs TCP :
                                            </td>
                                             <td style="border: none;background-color: #5B7EDE;color:#4a4949;padding:0px 15px;margin:0px;" >
                                            <input id="cryptatNeedTCP" name="cryptatNeedTCP"  placeholder="₱ 0.00" style="padding:0px 15px; font-size: 13px; margin:0px; background-color: #e8e4c9 ; width: 95%;border: none;color:#4a4949"></input>
                                            </td>
                                            </tr>
                                            <tr id="cryptdownpaymenttr" style="border: none">
                                           <td style="border: none;background-color: #5B7EDE;font-size: 13px;color:white;padding:0px 15px;margin:0px; font-weight: bold;" >
                                            Downpayment : <input placeholder="0.00"  oninput="cryptcomputedp()" pattern="^\%\d{1,3}(,\d{3})*(\.\d+)?%"    type="number" style="float: right; padding:0px 5px; font-size: 13px; margin:0px; background-color: #e8e4c9 ;border: none;color:#4a4949;width: 25%"  id="cryptdpPercentage" name="cryptdpPercentage"   ></input> <a style= "float: right; font-size: 13px; margin-right:5px; border: none;color:#fffff;width: 5%">% </a>
                                            </td>
                                             <td style="border: none;background-color: #5B7EDE;color:#4a4949;padding:0px 15px;margin:0px;" >
                                            <input placeholder="₱ 0.00" pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" oninput="cryptcomputedownpaymentPercentage()" data-type="currency" style="padding:0px 15px; width: 95%; font-size: 13px; margin:0px; background-color: #FDFDFD ;border: none;color:#4a4949" id="cryptdpPercentage2" name="cryptdpPercentage2" ></input>
                                            </td>
                                            </tr>
                                            <tr id="cryptbalancetr" style="border: none;">
                                           <td style="border: none;background-color: #5B7EDE;font-size: 13px;color:white;padding:0px 15px;margin:0px; font-weight: bold;" >
                                            Full downpayment :
                                            </td>
                                             <td style="border: none;background-color: #5B7EDE;color:#4a4949;padding:0px 15px;margin:0px;" >
                                            <input placeholder="₱ 0.00" readonly pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency"  style="padding:0px 15px; width: 95%; font-size: 13px; margin:0px; background-color: #e8e4c9 ;border: none;color:#4a4949" hidden id="cryptbalance1" name="cryptbalance1"  ></input>
                                            
                                            <input placeholder="₱ 0.00" readonly pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency"  style="padding:0px 15px; width: 95%; font-size: 13px; margin:0px; background-color: #e8e4c9 ;border: none;color:#4a4949" id="cryptbalance" name="cryptbalance"  ></input>
                                            <input placeholder="₱ 0.00"hidden readonly pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency"  style="padding:0px 15px; width: 95%; font-size: 13px; margin:0px; background-color: #e8e4c9 ;border: none;color:#4a4949" id="cryptInterest" name="cryptInterest"  ></input>
                                            <input placeholder="₱ 0.00"hidden readonly pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency"  style="padding:0px 15px; width: 95%; font-size: 13px; margin:0px; background-color: #e8e4c9 ;border: none;color:#4a4949" id="cryptPrincipal" name="cryptPrincipal"  ></input>
                                              
                                        </td>
                                            </tr>
                                            <tr hidden id="cryptmonthlyInstallmenttr" style="border: none; display: none">
                                           <td style="border: none;background-color: #5B7EDE;font-size: 13px;color:white;padding:0px 15px;margin:0px; font-weight: bold;" >
                                            1<sup hidden> st</sup> Monthly Installment:
                                            </td>
                                            <?php
                                                $sales_query = "SELECT * from diminishingratefirsthalf";
                                                $sales_result = mysqli_query($connection, $sales_query);
                                                    if (mysqli_num_rows($sales_result) > 0) {
                                                    while ($row = mysqli_fetch_assoc($sales_result)) {
                                                ?>
                                                 <td class="diminishingrateID1" name="diminishingrateID1" hidden><?=$row['id']?></td>

                                             <td style="border: none;background-color: #5B7EDE;color:#4a4949;padding:0px 15px;margin:0px;" >
                                                <input placeholder="₱ 0.00" id="cryptMI1" name="cryptMI1" readonly  pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency"  style="padding:0px 15px; width: 95%; font-size: 13px; margin:0px; background-color: #FDFDFD ;border: none;color:#4a4949" ></input>
                                                <input placeholder="₱ 0.00" hidden id="cryptMIInterestPercentage1" value="<?=$row['interest']?>" name="cryptMIInterestPercentage1" readonly  pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency"  style="padding:0px 15px; width: 95%; font-size: 13px; margin:0px; background-color: #FDFDFD ;border: none;color:#4a4949" ></input>
                                                <input placeholder="₱ 0.00" hidden id="cryptMIPrincipalPercentage1" value="<?=$row['principal']?>" name="cryptMIPrincipalPercentage1" readonly  pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency"  style="padding:0px 15px; width: 95%; font-size: 13px; margin:0px; background-color: #FDFDFD ;border: none;color:#4a4949" ></input>
                                                 <input placeholder="₱ 0.00" hidden id="cryptMIPercentage1" value="<?=$row['deminishingPercentage']?>" name="cryptMIPercentage1" readonly  pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency"  style="padding:0px 15px; width: 95%; font-size: 13px; margin:0px; background-color: #FDFDFD ;border: none;color:#4a4949" ></input>
                                                
                                          
                                                    <sup hidden> <a href="#" onclick="toggleModal1(this, 1)" data-toggle="modal" data-target="#firstMonthMIDiv" ><i class="fa fa-gears" style="font-size: 11px; color:white;"></i></a></sup>  
                                                    
                                                </td>
                                                <?php
                                                 }
                                                    }
                                                ?>      
                                        </td>
                                        </tr>
                                            <tr hidden id="cryptmonthlyInstallmenttr2" style="border: none; display: none">
                                           <td style="border: none;background-color: #5B7EDE;font-size: 13px;color:white;padding:0px 15px;margin:0px; font-weight: bold;" >
                                           2<sup hidden> nd</sup> Monthly Installment:
                                            </td>
                                            <?php
                                                $sales_query = "SELECT * from diminishingratesecondhalf";
                                                $sales_result = mysqli_query($connection, $sales_query);
                                                    if (mysqli_num_rows($sales_result) > 0) {
                                                    while ($row = mysqli_fetch_assoc($sales_result)) {
                                                ?>
                                                 <td class="taxID" name="taxID" hidden><?=$row['id']?></td>
                                             <td style="border: none;background-color: #5B7EDE;color:#4a4949;padding:0px 15px;margin:0px;" >
                                            <input placeholder="₱ 0.00" id="cryptMI2" name="cryptMI2" readonly  pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency"  style="padding:0px 15px; width: 95%; font-size: 13px; margin:0px; background-color: #FDFDFD ;border: none;color:#4a4949" ></input>
                                            
                                            <input placeholder="₱ 0.00" hidden value="<?=$row['interest']?>" id="cryptMIInterestPercentage2" name="cryptMIInterestPercentage2" readonly  pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency"  style="padding:0px 15px; width: 95%; font-size: 13px; margin:0px; background-color: #FDFDFD ;border: none;color:#4a4949" ></input>
                                            <input placeholder="₱ 0.00" hidden id="cryptMIPrincipalPercentage2" value="<?=$row['principal']?>" name="cryptMIPrincipalPercentage2" readonly  pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency"  style="padding:0px 15px; width: 95%; font-size: 13px; margin:0px; background-color: #FDFDFD ;border: none;color:#4a4949" ></input>
                                            <input placeholder="₱ 0.00" hidden id="cryptMIPercentage2" value="<?=$row['deminishingPercentage']?>" name="cryptMIPercentage2" readonly  pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency"  style="padding:0px 15px; width: 95%; font-size: 13px; margin:0px; background-color: #FDFDFD ;border: none;color:#4a4949" ></input>
                                                  
                                                    <sup hidden><a href="#" onclick="toggleModal1(this, 1)" data-toggle="modal" data-target="#secondMonthMIDiv" ><i class="fa fa-gears" style="font-size: 11px; color:white;"></i></a></sup>  
                                                    
                                                </td>
                                                <?php
                                                 }
                                                    }
                                                ?>      
                                        </td>
                                            
                                            </tr>
                                            
                                            <tr hidden id="cryptfactorRatetr" style="border: none; display: none">
                                            <td style="border: none;background-color: #5B7EDE;font-size: 13px;color:white;padding:0px 15px;margin:0px; font-weight: bold;" >
                                            Factor rate : <input hidden placeholder="0.00"  pattern="^\%\d{1,3}(,\d{3})*(\.\d+)?%"    type="number" style="float: right; padding:0px 5px; font-size: 13px; margin:0px; background-color: #e8e4c9 ;border: none;color:#4a4949;width: 25%"  id="cryptfactorratePercentage" name="cryptfactorratePercentage"  readonly ></input> <a style= "float: right; font-size: 13px; margin-right:5px; border: none;color:#fffff;width: 5%">% </a>
                                            </td>
                                             <td style="border: none;background-color: #5B7EDE;color:#4a4949;padding:0px 15px;margin:0px;" >
                                            <input placeholder="₱ 0.00" id="cryptfactorrate" name="cryptfactorrate" readonly  pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency"  style="padding:0px 15px; width: 95%; font-size: 13px; margin:0px; background-color: #e8e4c9 ;border: none;color:#4a4949" ></input> 
                                            </td>
                                            </tr>
                                            
                                            <tr id="cryptnoYearstr" style="border: none; padding-bottom:30px; display:none ">
                                           <td style="border: none;background-color: #5B7EDE;color:white;font-size: 13px;padding:0px 15px;margin:0px; font-weight: bold;" >
                                            No. of Years :
                                            
                                            </td>
                                            
                                             <td style="border: none;background-color: #5B7EDE;color:#4a4949;padding:0px 15px;margin:0px;" >
                                             <select  type="number" oninput="cryptMA()" id="cryptNoOfMonths" name="cryptNoOfMonths" style="padding:0px 15px; font-size: 13px; margin:0px; background-color: #FDFDFD ; width: 95%;border: none;color:#4a4949" placeholder="₱ 0.00" >
                                                    <option > --- SELECT TERMS ---</option> 
                                                    <option name="121" value="121"> 1 Year (12 Months)</option> 
                                                    <option name="241" value="241"> 2 Years  (24 Months)</option> 
                                                    <option name="361" value="361"> 3 Years  (36 Months)</option> 
                                                    <option name="481" value="481"> 4 Years (48 Months)</option> 
                                                    <option name="601" value="601"> 5 Years (60 Months)</option> 
                                                    <option name="721" value="721"> 6 Years (72 Months)</option> 
                                                    <option name="841" value="841"> 7 Years (84 Months)</option> 
                                                    <option name="961" value="961"> 8 Years (96 Months)</option> 
                                                    <option name="1081" value="1081"> 9 Years (108 Months)</option> 
                                                    <option name="1201" value="1201"> 10 Years (120 Months)</option> 
                                                    </select>
                                            </td>
                                            </tr>
                                            <tr style="border: none; padding-bottom: 30px; ">
                                            <td style="border: none;background-color: #5B7EDE;color:#5B7EDE;padding:0px 15px;margin:0px;" >
                                            .
                                            </td>
                                            <td style="border: none;background-color: #5B7EDE;color:#5B7EDE;padding:0px 15px;margin:0px;" >
                                            .
                                            </td>
                                            </tr>
                                           
                                            <input value="<?php echo $Name; ?>" id="user" name="user" hidden>
                                            
                                        </table>
                                    </div>
                            <div class="card-body mycrypttermsDiv"  style= "color:#4a4949; background-color:#f5cc98; display:none;" id="showcryptSpotcash">
                                Cash Price:  <input type="text" id= "cryptspotCashInput"name="cryptspotCashInput" class="form-control" style="color:#4a4949;border:none; width: 95%;background-color: transparent; padding-left: 30px; font-size: 14px" readonly><br>
                            </div>       
                            <div class="card-body mycrypttermsDiv" style= "color:#4a4949; background-color:#f5cc98; display:none; " id="showcrypt30dayscash">
                                Cash Price:  <input type="text" id= "cryptThirtydayscashInput11" name="cryptThirtydayscashInput11" class="form-control" style="color:#4a4949;border:none; width: 95%;background-color: transparent; padding-left: 30px; font-size: 14px"  readonly><br>
                                Spot DP:  <input type="text" id="cryptThirtydaysDPcashInput" name="cryptThirtydaysDPcashInput" class="form-control" style="color:#4a4949;border:none; width: 95%;background-color: transparent; padding-left: 30px; font-size: 14px"  readonly><br>
                           
                            </div>            
                            <div class="card-body mycrypttermsDiv" style= "color:#4a4949; background-color:#f5cc98; display:none;" id="showcryptInstallment">
                                Downpayment: <input type="text" id= "cryptInstallmentDPInput" name="cryptInstallmentDPInput" class="form-control" style="color:#4a4949;border:none; width: 95%;background-color: transparent; padding-left: 30px; font-size: 14px" readonly><br>
                                Installment base-monthly amortization:   
                                <select class="form-control" style="color:#4a4949; width: 95%; font-size: 14px; background-color: #f5ebe1;" id="cryptMASelect" name="cryptMASelect" ><br>
                                    <option value="">------Select amortization------</option>
                                    <option value="6months">6 Months</option>
                                    <option value="1year">1 Year</option>
                                    <option value="3years">3 Years</option>
                                    <option value="5years">5 Years</option>
                                    <option value="7years">7 Years</option>
                                    <option value="10years">10 Years</option>
                                </select>
                                <div class=" mycryptDiv1" style= "color:#4a4949; background-color:#f5cc98; display:none; " id="showcrypt6months">
                                Monthly Amortization: <input type="text" id= "cryptMAsixmonthsInput" name="cryptMAsixmonthsInput" class="form-control" style="color:#4a4949;border:none; width: 95%;background-color: transparent; padding-left: 30px; font-size: 14px" readonly><br>
                                </div>      
                                <div class=" mycryptDiv1" style= "color:#4a4949; background-color:#f5cc98; display:none; " id="showcrypt1year">
                                Monthly Amortization: <input type="text" id= "cryptMAoneyearInput"  name="cryptMAoneyearInput" class="form-control" style="color:#4a4949;border:none; width: 95%;background-color: transparent; padding-left: 30px; font-size: 14px"  readonly><br>
                                </div>    
                                <div class=" mycryptDiv1" style= "color:#4a4949; background-color:#f5cc98; display:none; " id="showcrypt3years">
                                Monthly Amortization: <input type="text" id= "cryptMAthreeyearsInput" name="cryptMAthreeyearsInput" class="form-control" style="color:#4a4949;border:none; width: 95%;background-color: transparent; padding-left: 30px; font-size: 14px" readonly><br>
                                </div>    
                                <div class=" mycryptDiv1" style= "color:#4a4949; background-color:#f5cc98; display:none; " id="showcrypt5years">
                                Monthly Amortization: <input type="text" id= "cryptMAfiveyearsInput"name="cryptMAfiveyearsInput"  class="form-control" style="color:#4a4949;border:none; width: 95%;background-color: transparent; padding-left: 30px; font-size: 14px" readonly><br>
                                </div>    
                                <div class=" mycryptDiv1" style= "color:#4a4949; background-color:#f5cc98; display:none; " id="showcrypt7years">
                                Monthly Amortization: <input type="text" id= "cryptMAsevenyearsInput" name="cryptMAsevenyearsInput" class="form-control" style="color:#4a4949;border:none; width: 95%;background-color: transparent; padding-left: 30px; font-size: 14px"  readonly><br>
                                </div>    
                                <div class=" mycryptDiv1" style= "color:#4a4949; background-color:#f5cc98; display:none; " id="showcrypt10years">
                                Monthly Amortization: <input type="text" id= "cryptMAtenyearsInput" name="cryptMAtenyearsInput" class="form-control" style="color:#4a4949;border:none; width: 95%;background-color: transparent; padding-left: 30px; font-size: 14px"  readonly><br>
                                </div>         
                            </div>            
                           
                            </div>
                            <div style="float: left; width: 30%; height: 640px; margin-bottom: 30px; padding: 40px 10px;  color:#4a4949; font-size: 14px; font-weight: bold;background-color: #fcd8b6;" >
                                 
                                Bone/Urn Interment: <sub><input type="checkbox" class = "showSpecialCases_checkedbox" name="showSpecialCases_checkedbox" value="1"></sub><a style="font-size: 11px;" > Special Cases</a>
                                <input type="text" id="cryptLIInput"  name="cryptLIInput" value="" class="form-control" style="background-color:#f7efe4;color:#4a4949;border:none; width: 95%; padding-left: 30px; font-size: 14px"  readonly>
                                Location: <input type="text"  id="cryptlocation"  name="cryptlocation"  value="" class="form-control" style="color:#4a4949;border:none; width: 95%;background-color:#f7efe4; padding-left: 30px; font-size: 14px"  readonly>
                                Terms: 
                                <div class="regularcryptPreNeed" >
                                <select class="form-control"  id="cryptIntermentTermsSelect" name="cryptIntermentTermsSelect" style="color:#4a4949; background-color:#f7efe4;width: 95%; font-size: 14px; background-color: #f5ebe1;"  ><br>
                                    <option >------Select terms------</option>
                                    <option value="Regular">Regular Interment</option>
                                    <option value="Pre_need">Pre-Need</option>
                                    <option value="At_Need">At-Need</option>
                                    <option value="Night_Dawn">Night/ Dawn</option>
                                    <option value="Special_Days">Special Days</option>
                                </select>
                                </div>
                                <div class="specialcryptPreNeed" >
                                <select class="form-control"  id="SpecialcryptIntermentTermsSelect" name="SpecialcryptIntermentTermsSelect" style="color:#4a4949; background-color:#f7efe4;width: 95%; font-size: 14px; background-color: #f5ebe1;"  ><br>
                                    <option value="">------Select terms------</option>
                                    <option value="Special_Cases_Pre_Need" >Pre-Need</option>
                                    <option value="Special_Cases_At_Need" >At-Need</option>
                                    <option value="Special_Cases_Special_Days_Night_And_Dawn" >Special Days Night/Dawn</option>
                                    <option value="Special_Cases_Special_Days_Pre_Need">Special Days Pre-Need </option>
                                    <option value="Special_Cases_Special_Days_At_Need">Special Days At-Need</option>
                                </select>
                                </div>
                            <div class="card-body mycryptDiv2" style= "color:#4a4949; background-color:#f5cc98; margin-left: 1px; display:none;" id="showcryptRegular">
                            Regular Interment Fee:
                            <input type="text" name="cryptRegular_interment" id="cryptRegular_interment" value="" class="form-control" style="color:#4a4949;border:none; width: 95%;background-color: transparent; padding-left: 30px; font-size: 14px"  readonly><br>
                            </div>    
                            <div class="card-body mycryptDiv2" style= "color:#4a4949; background-color:#f5cc98; margin-left: 1px; display:none;" id="showcryptPre_need">
                             Pre-Need (24 - 72 hrs) <br>Interment Fee: <input type="text" id="cryptpreneed" name="cryptpreneed"  value="" class="form-control" style="color:#4a4949;border:none; width: 95%;background-color: transparent; padding-left: 30px; font-size: 14px"  readonly><br>
                            </div>       
                            <div class="card-body mycryptDiv2" style= "color:#4a4949; background-color:#f5cc98; margin-left: 1px; display:none;" id="showcryptAt_Need">
                             At Need (24 - 72 hrs) <br>Interment Fee: <input type="text" id="cryptatneed" name="cryptatneed"  class="form-control" style="color:#4a4949;border:none; width: 95%;background-color: transparent; padding-left: 30px; font-size: 14px"  readonly><br>
                            </div>      
                            <div class="card-body mycryptDiv2" style= "color:#4a4949; background-color:#f5cc98; margin-left: 1px; display:none;" id="showcryptNight_Dawn">
                            Night (6PM - 4AM) <br>Dawn (4:01AM - 8AM) <br>Interment Fee: <input type="text" id="cryptnight" name="cryptnight"  class="form-control" style="color:#4a4949;border:none; width: 95%;background-color: transparent; padding-left: 30px; font-size: 14px"  readonly><br>
                            </div>       
                            <div class="card-body mycryptDiv2" style= "color:#4a4949; background-color:#f5cc98; margin-left: 1px; display:none; " id="showcryptSpecial_Days">
                            Special Days <br>(Weekends/ Holidays)<br>Interment Fee: <input type="text" id="cryptspecialdays" name="cryptspecialdays"  class="form-control" style="color:#4a4949;border:none; width: 95%;background-color: transparent; padding-left: 30px; font-size: 14px"  readonly><br>
                            </div>  
                            
                            <div class="card-body mycryptDiv2" style= "color:#4a4949; background-color:#f5cc98; margin-left: 1px;display:none;" id="showcryptSpecial_Cases_Pre_Need">
                            Pre-Need Night/Dawn<br> (24 - 72 hrs) Fee :
                            <input type="text" name="SpecialcryptRegular_interment" id="SpecialcryptRegular_interment" value="" class="form-control" style="color:#4a4949;border:none; width: 95%;background-color: transparent; padding-left: 30px; font-size: 14px"  readonly><br>
                            </div>    
                            <div class="card-body mycryptDiv2" style= "color:#4a4949; background-color:#f5cc98; margin-left: 1px; display:none;" id="showcryptSpecial_Cases_At_Need">
                            At-Need Night/Dawn<br> (24 - 72 hrs) Fee: <input type="text" id="Specialcryptpreneed" name="Specialcryptpreneed"  value="" class="form-control" style="color:#4a4949;border:none; width: 95%;background-color: transparent; padding-left: 30px; font-size: 14px"  readonly><br>
                            </div>       
                            <div class="card-body mycryptDiv2" style= "color:#4a4949; background-color:#f5cc98; margin-left: 1px; display:none;" id="showcryptSpecial_Cases_Special_Days_Night_And_Dawn">
                            Special Days (weekends/ Holidays) <br> Night/Dawn Fee:<input type="text" id="Specialcryptatneed" name="Specialcryptatneed"  class="form-control" style="color:#4a4949;border:none; width: 95%;background-color: transparent; padding-left: 30px; font-size: 14px"  readonly><br>
                            </div>      
                            <div class="card-body mycryptDiv2" style= "color:#4a4949; background-color:#f5cc98; margin-left: 1px; display:none;" id="showcryptSpecial_Cases_Special_Days_Pre_Need">
                            Special Days (weekends/ Holidays) <br> Pre-Need Fee: <input type="text" id="Specialcryptnight" name="Specialcryptnight"  class="form-control" style="color:#4a4949;border:none; width: 95%;background-color: transparent; padding-left: 30px; font-size: 14px"  readonly><br>
                            </div>       
                            <div class="card-body mycryptDiv2" style= "color:#4a4949; background-color:#f5cc98; margin-left: 1px; display:none; " id="showcryptSpecial_Cases_Special_Days_At_Need">
                            Special Days (weekends/ Holidays) <br> At-Need Fee: <input type="text" id="Specialcryptspecialdays" name="Specialcryptspecialdays"  class="form-control" style="color:#4a4949;border:none; width: 95%;background-color: transparent; padding-left: 30px; font-size: 14px"  readonly><br>
                            </div>   

                            </div>
                          

                            </div>       
                           
                        </center>   
                        
                        <table class="table " cellspacing="0" >
                                        <tr> 
                                            <th colspan="5" style="color:#ffffff; background-color:#007ea7; font-size: 14px">Payment Method</th>
                                        </tr>
                                        <tr style="color:#4a4949"> 
                                            <td>Payment Due Date<br><input type="date" class="form-control" id="PaymentDueDate" name="PaymentDueDate" style="color:#4a4949; font-size: 14px; margin-top: 7px" >
                                            <td>Starting<br><input type="text" class="form-control" id="Starting" name="Starting"  style="color:#4a4949; font-size: 14px;">
                                            </td>
                                            <td>Price List<br><input type="text" class="form-control" id="PriceList" name="PriceList"  style="color:#4a4949; font-size: 14px;" >
                                            </td>
                                            </tr>
                                            
                                      
                                    </table>
                                    <div style="float:right; margin-bottom:10px;"> 
                                        <button name="promoVoucher" id="promoVoucher" class="voucher-button">Promo</button> 
                                        <button class="print-button">Print</button>
                                        <button type="submit" name="cryptLedger" id="cryptLedger" class="save-button">Save</button> 
                                       
                                    </div>     
                            </div>   
                                    </form>  
                            </div>
                            </form>  
                    </div>
             
 <div class="modal-footer">
    
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
        $(document).ready(function () {
        $('#dtlotDescRecord').DataTable();
        $('.dataTables_length').addClass('bs-select');
        });
    </script>
    
     <script>
        $(document).ready(function () {
    $('#dtcryptDescRecord').DataTable();
    $('.dataTables_length').addClass('bs-select');
    });
    </script>
     <script>
        $(document).ready(function () {
    $('#dtlotInterment').DataTable();
    $('.dataTables_length').addClass('bs-select');
    });
    </script>
     <script>
        $(document).ready(function () {
    $('#dtAddCharge').DataTable();
    $('.dataTables_length').addClass('bs-select');
    });
    </script>
     <script>
        $(document).ready(function () {
    $('#dtcryptinternment').DataTable();
    $('.dataTables_length').addClass('bs-select');
    });
    </script>
     <script>
        $(document).ready(function () {
    $('#dtspecial_lotintermentdescription').DataTable();
    $('.dataTables_length').addClass('bs-select');
    });
    </script>
     <script>
        $(document).ready(function () {
    $('#dtspecial_cryptintermentdescription').DataTable();
    $('.dataTables_length').addClass('bs-select');
    });
    </script>
<script>
    function showlot(){
            document.getElementById('showlotdiv').style.display ='block';
            document.getElementById('showlotdiv1').style.display ='block';
            document.getElementById('showcryptdiv').style.display = 'none';
            document.getElementById('showcryptdiv1').style.display = 'none';
        }
        function showcrypt(){
            document.getElementById('showlotdiv').style.display ='none';
            document.getElementById('showlotdiv1').style.display ='none';
            document.getElementById('showcryptdiv').style.display = 'block';
            document.getElementById('showcryptdiv1').style.display = 'block';
        }
</script>
</script>
<script>
    function showlotdesc(){
            document.getElementById('showlotdescdiv').style.display ='block';
            document.getElementById('showlotintermentdescdiv').style.display ='none';
            document.getElementById('showAddictionalChargedescdiv').style.display ='none';
           
        }
</script>
<script>
    function showlotIntermentdesc(){
        document.getElementById('showAddictionalChargedescdiv').style.display ='none';
        document.getElementById('showlotdescdiv').style.display ='none';
        document.getElementById('showlotintermentdescdiv').style.display ='block';
        }
</script>
<script>
    function showadditionalChargedesc(){
        document.getElementById('showAddictionalChargedescdiv').style.display ='block';
        document.getElementById('showlotdescdiv').style.display ='none';
        document.getElementById('showlotintermentdescdiv').style.display ='none';
        }
</script>
<script>
    function showcryptdesc(){
        document.getElementById('showcryptintementdiv').style.display ='none';
        document.getElementById('showcryptdescdiv').style.display ='block';
        }
</script>
<script>
    function showcryptIntermentdesc(){
        document.getElementById('showcryptintementdiv').style.display ='block';
        document.getElementById('showcryptdescdiv').style.display ='none';
        }
</script>

<script>
    $(".showSpecialClass_div").hide();
    $(".specialPreNeed").hide();
  
    $(".showSpecialClass_checkedbox").click(function() {
        if($(this).is(":checked")) {
            $(".showSpecialClass_div").show();
            $(".showRegularClass_div").hide();
            $(".specialPreNeed").show();
            $(".regularPreNeed").hide();
            $(".regularPreNeed").children().prop('disabled',true);
            $(".specialPreNeed").children().prop('disabled',false);
        } else {
            $(".showSpecialClass_div").hide();
            $(".showRegularClass_div").show();
            $(".specialPreNeed").hide();
            $(".regularPreNeed").show();
            $(".regularPreNeed").children().prop('disabled',false);
            $(".specialPreNeed").children().prop('disabled',true);
          
        }
});
</script>
<script>
    $(".showcryptSpecialCases_div").hide();
    $(".specialcryptPreNeed").hide();
  
    $(".showSpecialCases_checkedbox").click(function() {
        if($(this).is(":checked")) {
            $(".showcryptSpecialCases_div").show();
            $(".showcryptRegularCases_div").hide();
            $(".specialcryptPreNeed").show();
            $(".regularcryptPreNeed").hide();
            $(".regularcryptPreNeed").children().prop('disabled',true);
            $(".specialcryptPreNeed").children().prop('disabled',false);
        } else {
            $(".showcryptSpecialCases_div").hide();
            $(".showcryptRegularCases_div").show();
            $(".specialcryptPreNeed").hide();
            $(".regularcryptPreNeed").show();
            $(".regularcryptPreNeed").children().prop('disabled',false);
            $(".specialcryptPreNeed").children().prop('disabled',true);
          
        }
});
</script>

    <script>
        const lotDescSelect = document.getElementById('lotDescTerms');
        lotDescSelect.addEventListener('change', function handleChange(event) {
            if (event.target.value === 'Spotcash') {
                document.getElementById('showSpotCashTermsdiv').style.display = 'block';
                document.getElementById('show30daysCashTermsdiv').style.display = 'none';
                document.getElementById('showInstallmentTermsdiv').style.display = 'none';
            } elseif (event.target.value === 'Thirtydayscash'){
                document.getElementById('showSpotCashTermsdiv').style.display = 'none';
                document.getElementById('show30daysCashTermsdiv').style.display = 'block';
                document.getElementById('showInstallmentTermsdiv').style.display = 'none';
            }elseif (event.target.value === 'Installment'){
                document.getElementById('showSpotCashTermsdiv').style.display = 'none';
                document.getElementById('show30daysCashTermsdiv').style.display = 'none';
                document.getElementById('showInstallmentTermsdiv').style.display = 'block';
            }else{
                document.getElementById('showSpotCashTermsdiv').style.display = 'none';
                document.getElementById('show30daysCashTermsdiv').style.display = 'none';
                document.getElementById('showInstallmentTermsdiv').style.display = 'none';
            }
        });
    </script>
    <script>
        const lotDescSelect = document.getElementById('cryptDescTerms');
        lotDescSelect.addEventListener('change', function handleChange(event) {
            if (event.target.value === 'Spotcash') {
                document.getElementById('showcryptSpotcash').style.display = 'block';
                document.getElementById('showcryptThirtydayscash').style.display = 'none';
                document.getElementById('showcryptInstallment').style.display = 'none';
            } elseif (event.target.value === 'Thirtydayscash'){
                document.getElementById('showcryptSpotcash').style.display = 'none';
                document.getElementById('showcryptThirtydayscash').style.display = 'block';
                document.getElementById('showcryptInstallment').style.display = 'none';
            }elseif (event.target.value === 'Installment'){
                document.getElementById('showcryptSpotcash').style.display = 'none';
                document.getElementById('showcryptThirtydayscash').style.display = 'none';
                document.getElementById('showcryptInstallment').style.display = 'block';
            }else{
                document.getElementById('showcryptSpotcash').style.display = 'none';
                document.getElementById('showcryptThirtydayscash').style.display = 'none';
                document.getElementById('showcryptInstallment').style.display = 'none';
            }
        });
    </script>
   
        
  
<script>
        
        function cryptMA() {
            let cryptNoOfMonths=  document.getElementById("cryptNoOfMonths").value;
            let cryptlotListPrice=  document.getElementById("cryptlotListPrice").value;
            let cryptbalance  =  document.getElementById("cryptbalance").value;
            let crypttaxs1  =  document.getElementById("crypttaxs1").value;
            let cryptpcf  =  document.getElementById("cryptpcf").value;
            let cryptsubtotaltax  =  document.getElementById("cryptsubtotaltax").value;
            let cryptdpPercentage2  =  document.getElementById("cryptdpPercentage2").value;
            var cryptnewStr3downpayment = cryptdpPercentage2.replace(/₱|,/g, ''); 
    
            if (cryptNoOfMonths == "121") {
            document.getElementById("cryptfactorratePercentage").value = "16";
            document.getElementById("cryptfactorrate").value = "0.0907308578592074";
            var newStr3 = cryptbalance.replace(/₱|,/g, ''); 
            var newStr3llp = cryptlotListPrice.replace(/₱|,/g, ''); 
            var newStr3pcf = cryptpcf.replace(/₱|,/g, '');  
            var newStr3subtotaltax = cryptsubtotaltax.replace(/₱|,/g, ''); 
            let monthlyInstallment = ((parseFloat(newStr3) *  0.0907308578592074)+((parseFloat(newStr3) *  0.0907308578592074) * crypttaxs1))-(newStr3subtotaltax/12); 
            const monthlyInstallment1fixed = monthlyInstallment.toFixed(0);
            replacedmonthlyInstallment1fixed=monthlyInstallment1fixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
          
    
            
            let monthlyInstallmentBalance = (((parseFloat(newStr3subtotaltax)+ parseFloat(newStr3llp)) * 0.0907308578592074) * 12) + parseFloat(newStr3pcf);
            const monthlyInstallmentBalancefixed = monthlyInstallmentBalance.toFixed(0);
            monthlyInstallmentBalanceCompleted=monthlyInstallmentBalancefixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            document.getElementById("crypttotalContractPrice3").value = "₱ " +  monthlyInstallmentBalanceCompleted;
    
            
            const elementToHide322 = document.getElementById("cryptdpPercentage");
            // Hide the element by setting its display property to 'none'
            elementToHide322.disabled = false;
    
            
            const dpPercentage2 = document.getElementById("cryptdpPercentage2");
                // Hide the element by setting its display property to 'none'
                dpPercentage2.disabled = false;
    
                document.getElementById("cryptdpPercentage2").value = "";
                document.getElementById("cryptdpPercentage").value = "";
                document.getElementById("cryptbalance").value = "";
                
                document.getElementById("cryptMI1").value = "";
                document.getElementById("cryptMI2").value = "";
    
            } 
            else if (cryptNoOfMonths == "241") {
           
            document.getElementById("cryptfactorratePercentage").value = "17";
            document.getElementById("cryptfactorrate").value = "0.0494422640854967";
            var newStr3 = cryptbalance.replace(/₱|,/g, ''); 
            var newStr3llp = cryptlotListPrice.replace(/₱|,/g, ''); 
            var newStr3pcf = cryptpcf.replace(/₱|,/g, ''); 
            var cryptnewStr3downpayment = cryptdpPercentage2.replace(/₱|,/g, ''); 
            var newStr3subtotaltax = cryptsubtotaltax.replace(/₱|,/g, ''); 
            let monthlyInstallment = ((parseFloat(newStr3) *  0.0494422640854967)+((parseFloat(newStr3) *  0.0494422640854967) * crypttaxs1))-(newStr3subtotaltax/24); 
            const monthlyInstallment1fixed = monthlyInstallment.toFixed(0);
            replacedmonthlyInstallment1fixed=monthlyInstallment1fixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
          
    
            
            let monthlyInstallmentBalance = (((parseFloat(newStr3subtotaltax)+ parseFloat(newStr3llp)) * 0.0494422640854967) * 24) + parseFloat(newStr3pcf);
            const monthlyInstallmentBalancefixed = monthlyInstallmentBalance.toFixed(0);
            monthlyInstallmentBalanceCompleted=monthlyInstallmentBalancefixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            document.getElementById("crypttotalContractPrice3").value = "₱ " +  monthlyInstallmentBalanceCompleted;
    
            
            const elementToHide322 = document.getElementById("cryptdpPercentage");
            // Hide the element by setting its display property to 'none'
            elementToHide322.disabled = false;
    
            
            const dpPercentage2 = document.getElementById("cryptdpPercentage2");
                // Hide the element by setting its display property to 'none'
                dpPercentage2.disabled = false;
    
                document.getElementById("cryptdpPercentage2").value = "";
                document.getElementById("cryptdpPercentage").value = "";
                document.getElementById("cryptbalance").value = "";
                
                document.getElementById("cryptMI1").value = "";
                document.getElementById("cryptMI2").value = "";
    
            } 
            else if (cryptNoOfMonths == "361") {
           
            document.getElementById("cryptfactorratePercentage").value = "18";
            document.getElementById("cryptfactorrate").value = "0.036152395535917";
            var newStr3 = cryptbalance.replace(/₱|,/g, ''); 
            var newStr3llp = cryptlotListPrice.replace(/₱|,/g, ''); 
            var newStr3pcf = cryptpcf.replace(/₱|,/g, ''); 
            var cryptnewStr3downpayment = cryptdpPercentage2.replace(/₱|,/g, ''); 
            var newStr3subtotaltax = cryptsubtotaltax.replace(/₱|,/g, ''); 
            let monthlyInstallment = ((parseFloat(newStr3) *  0.036152395535917)+((parseFloat(newStr3) *  0.036152395535917) * crypttaxs1))-(newStr3subtotaltax/36); 
            const monthlyInstallment1fixed = monthlyInstallment.toFixed(0);
            replacedmonthlyInstallment1fixed=monthlyInstallment1fixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
          
    
            
            let monthlyInstallmentBalance = (((parseFloat(newStr3subtotaltax)+ parseFloat(newStr3llp)) * 0.036152395535917) * 36) + parseFloat(newStr3pcf);
            const monthlyInstallmentBalancefixed = monthlyInstallmentBalance.toFixed(0);
            monthlyInstallmentBalanceCompleted=monthlyInstallmentBalancefixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            document.getElementById("crypttotalContractPrice3").value = "₱ " +  monthlyInstallmentBalanceCompleted;
    
            
            const elementToHide322 = document.getElementById("cryptdpPercentage");
            // Hide the element by setting its display property to 'none'
            elementToHide322.disabled = false;
    
                document.getElementById("cryptdpPercentage2").value = "";
                document.getElementById("cryptdpPercentage").value = "";
                document.getElementById("cryptbalance").value = "";
                
                document.getElementById("cryptMI1").value = "";
                document.getElementById("cryptMI2").value = "";
    
            } 
            else if (cryptNoOfMonths == "481") {
            document.getElementById("cryptfactorratePercentage").value = "20";
            document.getElementById("cryptfactorrate").value = "0.030430362343858";
            var newStr3 = cryptbalance.replace(/₱|,/g, ''); 
            var newStr3llp = cryptlotListPrice.replace(/₱|,/g, ''); 
            var newStr3pcf = cryptpcf.replace(/₱|,/g, ''); 
            var cryptnewStr3downpayment = cryptdpPercentage2.replace(/₱|,/g, ''); 
            var newStr3subtotaltax = cryptsubtotaltax.replace(/₱|,/g, ''); 
            let monthlyInstallment = ((parseFloat(newStr3) *  0.030430362343858)+((parseFloat(newStr3) *  0.030430362343858) * crypttaxs1))-(newStr3subtotaltax/48); 
            const monthlyInstallment1fixed = monthlyInstallment.toFixed(0);
            replacedmonthlyInstallment1fixed=monthlyInstallment1fixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
          
    
            
            let monthlyInstallmentBalance = (((parseFloat(newStr3subtotaltax)+ parseFloat(newStr3llp)) * 0.030430362343858) * 48) + parseFloat(newStr3pcf);
            const monthlyInstallmentBalancefixed = monthlyInstallmentBalance.toFixed(0);
            monthlyInstallmentBalanceCompleted=monthlyInstallmentBalancefixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            document.getElementById("crypttotalContractPrice3").value = "₱ " +  monthlyInstallmentBalanceCompleted;
    
            
            const elementToHide322 = document.getElementById("cryptdpPercentage");
            // Hide the element by setting its display property to 'none'
            elementToHide322.disabled = false;
    
            
            const dpPercentage2 = document.getElementById("cryptdpPercentage2");
                // Hide the element by setting its display property to 'none'
                dpPercentage2.disabled = false;
    
                document.getElementById("cryptdpPercentage2").value = "";
                document.getElementById("cryptdpPercentage").value = "";
                document.getElementById("cryptbalance").value = "";
    
                document.getElementById("cryptMI1").value = "";
                document.getElementById("cryptMI2").value = "";
    
            } 
            else if (cryptNoOfMonths == "601") { 
            document.getElementById("cryptfactorratePercentage").value = "22";
            document.getElementById("cryptfactorrate").value = "0.0276189120353598";
            var newStr3 = cryptbalance.replace(/₱|,/g, ''); 
            var newStr3llp = cryptlotListPrice.replace(/₱|,/g, ''); 
            var newStr3pcf = cryptpcf.replace(/₱|,/g, ''); 
            var cryptnewStr3downpayment = cryptdpPercentage2.replace(/₱|,/g, ''); 
            var newStr3subtotaltax = cryptsubtotaltax.replace(/₱|,/g, ''); 
            let monthlyInstallment = ((parseFloat(newStr3) *  0.0276189120353598)+((parseFloat(newStr3) *  0.0276189120353598) * crypttaxs1))-(newStr3subtotaltax/60); 
            const monthlyInstallment1fixed = monthlyInstallment.toFixed(0);
            replacedmonthlyInstallment1fixed=monthlyInstallment1fixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
          
    
            
            let monthlyInstallmentBalance = (((parseFloat(newStr3subtotaltax)+ parseFloat(newStr3llp)) * 0.0276189120353598) * 60) + parseFloat(newStr3pcf);
            const monthlyInstallmentBalancefixed = monthlyInstallmentBalance.toFixed(0);
            monthlyInstallmentBalanceCompleted=monthlyInstallmentBalancefixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            document.getElementById("crypttotalContractPrice3").value = "₱ " +  monthlyInstallmentBalanceCompleted;
    
            
            const elementToHide322 = document.getElementById("cryptdpPercentage");
            // Hide the element by setting its display property to 'none'
            elementToHide322.disabled = false;
    
                document.getElementById("cryptdpPercentage2").value = "";
                document.getElementById("cryptdpPercentage").value = "";
                document.getElementById("cryptbalance").value = "";
               
                document.getElementById("cryptMI1").value = "";
                document.getElementById("cryptMI2").value = "";
    
    
            } 
            else if (cryptNoOfMonths == "721") {
            document.getElementById("cryptfactorratePercentage").value = "24";
            document.getElementById("cryptfactorrate").value = "0.0263268307088938";
            var newStr3 = cryptbalance.replace(/₱|,/g, ''); 
            var newStr3llp = cryptlotListPrice.replace(/₱|,/g, ''); 
            var newStr3pcf = cryptpcf.replace(/₱|,/g, ''); 
            var cryptnewStr3downpayment = cryptdpPercentage2.replace(/₱|,/g, ''); 
            var newStr3subtotaltax = cryptsubtotaltax.replace(/₱|,/g, ''); 
            let monthlyInstallment = ((parseFloat(newStr3) *  0.0263268307088938)+((parseFloat(newStr3) *  0.0263268307088938) * crypttaxs1))-(newStr3subtotaltax/72); 
            const monthlyInstallment1fixed = monthlyInstallment.toFixed(0);
            replacedmonthlyInstallment1fixed=monthlyInstallment1fixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
          
    
            
            let monthlyInstallmentBalance = (((parseFloat(newStr3subtotaltax)+ parseFloat(newStr3llp)) * 0.0263268307088938) * 72) + parseFloat(newStr3pcf);
            const monthlyInstallmentBalancefixed = monthlyInstallmentBalance.toFixed(0);
            monthlyInstallmentBalanceCompleted=monthlyInstallmentBalancefixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            document.getElementById("crypttotalContractPrice3").value = "₱ " +  monthlyInstallmentBalanceCompleted;
    
            
            const elementToHide322 = document.getElementById("cryptdpPercentage");
            // Hide the element by setting its display property to 'none'
            elementToHide322.disabled = false;
    
            
            const dpPercentage2 = document.getElementById("cryptdpPercentage2");
                // Hide the element by setting its display property to 'none'
                dpPercentage2.disabled = false;
    
                document.getElementById("cryptdpPercentage2").value = "";
                document.getElementById("cryptdpPercentage").value = "";
                document.getElementById("cryptbalance").value = "";
                
                document.getElementById("cryptMI1").value = "";
                document.getElementById("cryptMI2").value = "";
    
    
            } 
            else if (cryptNoOfMonths == "841") {
            
            document.getElementById("cryptfactorratePercentage").value = "24";
            document.getElementById("cryptfactorrate").value = "0.0246758117819474";
            var newStr3 = cryptbalance.replace(/₱|,/g, ''); 
            var newStr3llp = cryptlotListPrice.replace(/₱|,/g, ''); 
            var newStr3pcf = cryptpcf.replace(/₱|,/g, ''); 
            var cryptnewStr3downpayment = cryptdpPercentage2.replace(/₱|,/g, ''); 
            var newStr3subtotaltax = cryptsubtotaltax.replace(/₱|,/g, ''); 
            let monthlyInstallment = ((parseFloat(newStr3) *  0.0246758117819474)+((parseFloat(newStr3) *  0.0246758117819474) * crypttaxs1))-(newStr3subtotaltax/84); 
            const monthlyInstallment1fixed = monthlyInstallment.toFixed(0);
            replacedmonthlyInstallment1fixed=monthlyInstallment1fixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
          
    
            
            let monthlyInstallmentBalance = (((parseFloat(newStr3subtotaltax)+ parseFloat(newStr3llp)) * 0.0246758117819474) * 84) + parseFloat(newStr3pcf);
            const monthlyInstallmentBalancefixed = monthlyInstallmentBalance.toFixed(0);
            monthlyInstallmentBalanceCompleted=monthlyInstallmentBalancefixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            document.getElementById("crypttotalContractPrice3").value = "₱ " +  monthlyInstallmentBalanceCompleted;
    
            
            const elementToHide322 = document.getElementById("cryptdpPercentage");
            // Hide the element by setting its display property to 'none'
            elementToHide322.disabled = false;
    
            
            const dpPercentage2 = document.getElementById("cryptdpPercentage2");
                // Hide the element by setting its display property to 'none'
                dpPercentage2.disabled = false;
    
                document.getElementById("cryptdpPercentage2").value = "";
                document.getElementById("cryptdpPercentage").value = "";
                document.getElementById("cryptbalance").value = "";
                
                document.getElementById("cryptMI1").value = "";
                document.getElementById("cryptMI2").value = "";
    
            } 
            else if (cryptNoOfMonths == "961") {
            document.getElementById("cryptfactorratePercentage").value = "24";
            document.getElementById("cryptfactorrate").value = "0.0235131274809127";
            var newStr3 = cryptbalance.replace(/₱|,/g, ''); 
            var newStr3llp = cryptlotListPrice.replace(/₱|,/g, ''); 
            var newStr3pcf = cryptpcf.replace(/₱|,/g, ''); 
            var cryptnewStr3downpayment = cryptdpPercentage2.replace(/₱|,/g, ''); 
            var newStr3subtotaltax = cryptsubtotaltax.replace(/₱|,/g, ''); 
            let monthlyInstallment = ((parseFloat(newStr3) *  0.0235131274809127)+((parseFloat(newStr3) *  0.0235131274809127) * crypttaxs1))-(newStr3subtotaltax/96); 
            const monthlyInstallment1fixed = monthlyInstallment.toFixed(0);
            replacedmonthlyInstallment1fixed=monthlyInstallment1fixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
          
    
            
            let monthlyInstallmentBalance = (((parseFloat(newStr3subtotaltax)+ parseFloat(newStr3llp)) * 0.0235131274809127) * 96) + parseFloat(newStr3pcf);
            const monthlyInstallmentBalancefixed = monthlyInstallmentBalance.toFixed(0);
            monthlyInstallmentBalanceCompleted=monthlyInstallmentBalancefixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            document.getElementById("crypttotalContractPrice3").value = "₱ " +  monthlyInstallmentBalanceCompleted;
    
            
            const elementToHide322 = document.getElementById("cryptdpPercentage");
            // Hide the element by setting its display property to 'none'
            elementToHide322.disabled = false;
    
            
            const dpPercentage2 = document.getElementById("cryptdpPercentage2");
                // Hide the element by setting its display property to 'none'
                dpPercentage2.disabled = false;
    
                document.getElementById("cryptdpPercentage2").value = "";
                document.getElementById("cryptdpPercentage").value = "";
                document.getElementById("cryptbalance").value = "";
    
                document.getElementById("cryptMI1").value = "";
                document.getElementById("cryptMI2").value = "";
    
    
            } 
            else if (cryptNoOfMonths == "1081") {      
            document.getElementById("cryptfactorratePercentage").value = "24";
            document.getElementById("cryptfactorrate").value = "0.0226708482940114";
            var newStr3 = cryptbalance.replace(/₱|,/g, ''); 
            var newStr3llp = cryptlotListPrice.replace(/₱|,/g, ''); 
            var newStr3pcf = cryptpcf.replace(/₱|,/g, ''); 
            var cryptnewStr3downpayment = cryptdpPercentage2.replace(/₱|,/g, ''); 
            var newStr3subtotaltax = cryptsubtotaltax.replace(/₱|,/g, ''); 
            let monthlyInstallment = ((parseFloat(newStr3) *  0.0226708482940114)+((parseFloat(newStr3) *  0.0226708482940114) * crypttaxs1))-(newStr3subtotaltax/108); 
            const monthlyInstallment1fixed = monthlyInstallment.toFixed(0);
            replacedmonthlyInstallment1fixed=monthlyInstallment1fixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
          
    
            
            let monthlyInstallmentBalance = (((parseFloat(newStr3subtotaltax)+ parseFloat(newStr3llp)) * 0.0226708482940114) * 108) + parseFloat(newStr3pcf);
            const monthlyInstallmentBalancefixed = monthlyInstallmentBalance.toFixed(0);
            monthlyInstallmentBalanceCompleted=monthlyInstallmentBalancefixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            document.getElementById("crypttotalContractPrice3").value = "₱ " +  monthlyInstallmentBalanceCompleted;
    
            
            const elementToHide322 = document.getElementById("cryptdpPercentage");
            // Hide the element by setting its display property to 'none'
            elementToHide322.disabled = false;
    
                document.getElementById("cryptdpPercentage2").value = "";
                document.getElementById("cryptdpPercentage").value = "";
                document.getElementById("cryptbalance").value = "";
                
                document.getElementById("cryptMI1").value = "";
                document.getElementById("cryptMI2").value = "";
    
    
            } 
            else if (cryptNoOfMonths == "1201") {
            
            document.getElementById("cryptfactorratePercentage").value = "24";
            document.getElementById("cryptfactorrate").value = "0.022048096885833";
            var newStr3 = cryptbalance.replace(/₱|,/g, ''); 
            var newStr3llp = cryptlotListPrice.replace(/₱|,/g, ''); 
            var newStr3pcf = cryptpcf.replace(/₱|,/g, ''); 
            var cryptnewStr3downpayment = cryptdpPercentage2.replace(/₱|,/g, ''); 
            var newStr3subtotaltax = cryptsubtotaltax.replace(/₱|,/g, ''); 
            let monthlyInstallment = ((parseFloat(newStr3) *  0.022048096885833)+((parseFloat(newStr3) *  0.022048096885833) * crypttaxs1))-(newStr3subtotaltax/120); 
            const monthlyInstallment1fixed = monthlyInstallment.toFixed(0);
            replacedmonthlyInstallment1fixed=monthlyInstallment1fixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
          
    
            
            let monthlyInstallmentBalance = (((parseFloat(newStr3subtotaltax)+ parseFloat(newStr3llp)) * 0.022048096885833) * 120) + parseFloat(newStr3pcf);
            const monthlyInstallmentBalancefixed = monthlyInstallmentBalance.toFixed(0);
            monthlyInstallmentBalanceCompleted=monthlyInstallmentBalancefixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            document.getElementById("crypttotalContractPrice3").value = "₱ " +  monthlyInstallmentBalanceCompleted;
    
            
            const elementToHide322 = document.getElementById("cryptdpPercentage");
            // Hide the element by setting its display property to 'none'
            elementToHide322.disabled = false;
    
            
            const dpPercentage2 = document.getElementById("cryptdpPercentage2");
            // Hide the element by setting its display property to 'none'
            dpPercentage2.disabled = false;
    
                document.getElementById("cryptdpPercentage2").value = "";
                document.getElementById("cryptdpPercentage").value = "";
                document.getElementById("cryptbalance").value = "";
    
                document.getElementById("cryptMI1").value = "";
                document.getElementById("cryptMI2").value = "";
    
            } 
            else{
              
                // Discount
               
                let discount =  document.getElementById("cryptdiscounts1").value;
                var newStr3llp = cryptlotListPrice.replace(/₱|,/g, ''); 
                var newStr3pcf = cryptpcf.replace(/₱|,/g, ''); 
                var newStr3subtotaltax = cryptsubtotaltax.replace(/₱|,/g, ''); 
                var subtotalDiscount = (parseFloat(newStr3llp) + parseFloat(newStr3subtotaltax))* parseFloat(discount);
                let monthlyInstallment = (parseFloat(newStr3llp) + parseFloat(newStr3pcf) + parseFloat(newStr3subtotaltax)) - parseFloat(subtotalDiscount); 
                const monthlyInstallment1fixed = monthlyInstallment.toFixed(0);
                replacedmonthlyInstallment1fixed=monthlyInstallment1fixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                document.getElementById("crypttotalContractPrice3").value = "₱ " +  replacedmonthlyInstallment1fixed;
    
                document.getElementById("cryptdpPercentage2").value = "";
                document.getElementById("cryptdpPercentage").value = "";
                document.getElementById("cryptbalance").value = "";
                document.getElementById("cryptMI1").value = "";
                document.getElementById("cryptMI2").value = "";
                document.getElementById("cryptfactorratePercentage").value = "";
                document.getElementById("cryptfactorrate").value = "";
    
            
            }
    
    
      
         }
         
    
            </script>
        <script>
            $(document).ready(function(){
                $('#lotDescTerms').on('change', function(){
    	            var demovalue = $(this).val(); 
                $("div.myDiv").hide();
                $("#show"+demovalue).show();
                });
            });
        </script> 
         <script>
            $(document).ready(function(){
                $('#MASelect').on('change', function(){
    	            var demovalue = $(this).val(); 
                $("div.myDiv1").hide();
                $("#show"+demovalue).show();
                });
            });
        </script> 
         <script>
            $(document).ready(function(){
                $('#IntermentTermsSelect').on('change', function(){
    	            var demovalue = $(this).val(); 
                $("div.myDiv2").hide();
                $("#show"+demovalue).show();
                });
            });
        </script> 
        <script>
            $(document).ready(function () {
            $('#dtBasicExample').DataTable();
            $('.dataTables_length').addClass('bs-select');
            });
        </script>
        
        <script>
            $(document).ready(function(){
                $('#IntermentTerms').on('change', function(){
    	            var demovalue = $(this).val(); 
                $("div.myDiv1").hide();
                $("#show"+demovalue ).show();
                });
            });
        </script> 
        
        <script>
            $(document).ready(function(){
                $('#cryptDescTerms').on('change', function(){
    	            var demovalue = $(this).val(); 
                $("div.mycrypttermsDiv").hide();
                $("#showcrypt"+demovalue).show();
                });
            });
        </script> 
         <script>
            $(document).ready(function(){
                $('#cryptMASelect').on('change', function(){
    	            var demovalue = $(this).val(); 
                $("div.mycryptDiv1").hide();
                $("#showcrypt"+demovalue).show();
                });
            });
        </script> 
         <script>
            $(document).ready(function(){
                $('#cryptIntermentTermsSelect').on('change', function(){
    	            var demovalue = $(this).val(); 
                $("div.mycryptDiv2").hide();
                $("#showcrypt"+demovalue).show();
                });
            });
        </script> 

        
        <script>
            $(document).ready(function(){
                $('#SpecialIntermentTermsSelect').on('change', function(){
    	            var demovalue = $(this).val(); 
                $("div.myDiv2").hide();
                $("#show"+demovalue).show();
                });
            });
        </script> 
        <script>
            $(document).ready(function(){
                $('#SpecialcryptIntermentTermsSelect').on('change', function(){
    	            var demovalue = $(this).val(); 
                $("div.mycryptDiv2").hide();
                $("#showcrypt"+demovalue).show();
                });
            });
        </script> 
        
        
        
        <script>
            var table = document.getElementById('dtlotInterment');
                for(var i = 1; i < table.rows.length; i++){
                    table.rows[i].onclick = function(){
                        //rIndex = this.rowIndex;
                        document.getElementById("location").value = this.cells[2].innerHTML;
                        document.getElementById("LIInput").value = this.cells[1].innerHTML;
                        document.getElementById("Regular_interment").value = this.cells[3].innerHTML;
                        document.getElementById("preneed").value = this.cells[4].innerHTML;
                        document.getElementById("atneed").value = this.cells[5].innerHTML;
                        document.getElementById("night").value = this.cells[6].innerHTML;
                        document.getElementById("specialdays").value = this.cells[7].innerHTML;
                        
                    };
                }
        </script>
        
    <script>
            var table = document.getElementById('dtlotDescRecord');
                for(var i = 1; i < table.rows.length; i++){
                    table.rows[i].onclick = function(){
                        //rIndex = this.rowIndex;
                        document.getElementById("lot_id1").value = this.cells[0].innerHTML;
                        document.getElementById("lot_block1").value = this.cells[1].innerHTML;
                        document.getElementById("lot_section1").value = this.cells[2].innerHTML;
                        document.getElementById("lot_no1").value = this.cells[3].innerHTML;
                        document.getElementById("lot_area1").value = this.cells[4].innerHTML;
                        document.getElementById("lot_phase1").value = this.cells[5].innerHTML;
                        document.getElementById("lot_type1").value = this.cells[6].innerHTML;
                        document.getElementById("lotListPrice").value = "₱ " + this.cells[7].innerHTML;

                        let dpPercentage1 =  document.getElementById("dpPercentage").value;
                        let a12 =  document.getElementById("taxs1").value;
                        let tcp1 =  document.getElementById("totalContractPrice3").value;
                        let lotListPrice =  document.getElementById("lotListPrice").value;
                        let discount =  document.getElementById("discounts1").value;
                        let pcf =  document.getElementById("pcf").value;

                        var newStr2lotListPrice = lotListPrice.replace(/₱|,/g, ''); 
                        var newStr2pcf = pcf.replace(/₱|,/g, ''); 
                        // VAT
                        var subtotaltax = parseFloat(newStr2lotListPrice) * parseFloat(a12);
                        let subtotaltaxFixed = subtotaltax.toFixed(2);
                        let subtotaltaxComplete = subtotaltaxFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                        document.getElementById("subtotaltax").value =  "₱ " + subtotaltaxComplete;
                        // Discount
                        var subtotalDiscount = (parseFloat(newStr2lotListPrice) + parseFloat(subtotaltax))* parseFloat(discount);
                        let subtotalDiscountFixed = subtotalDiscount.toFixed(2);
                        let subtotalDiscountComplete = subtotalDiscountFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                        document.getElementById("subtotalDiscount").value =  "₱ " + subtotalDiscountComplete;
                        // TCP
                        var totalContractPrice = parseFloat(newStr2lotListPrice) + parseFloat(subtotaltax) + parseFloat(newStr2pcf) - parseFloat(subtotalDiscount);
                        let totalContractPriceFixed = totalContractPrice.toFixed(2);
                        let totalContractPriceComplete = totalContractPriceFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                        document.getElementById("totalContractPrice3").value =  "₱ " + totalContractPriceComplete;
                        let pcfComplete = pcf.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                        document.getElementById("pcf").value = pcfComplete;

                        
                        let minimumDPPercentage = document.getElementById("minimumdpPercentage").value;
                        document.getElementById("dpPercentage").value = minimumDPPercentage;


                                                
                        let tcpcomputeDP =  document.getElementById("totalContractPrice3").value;
                        let dpPercentagecomputedp =  document.getElementById("dpPercentage").value;
                        var tcpcomputeDPreplace = tcpcomputeDP.replace(/₱|,/g, '');


                        //computebalance
                        let computeBalance = parseFloat(tcpcomputeDPreplace) - (parseFloat(tcpcomputeDPreplace)*(parseFloat(dpPercentagecomputedp)/100));
                        let computeBalanceFixed = computeBalance.toFixed(0);
                        let replacedcomputeBalance = computeBalanceFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                        document.getElementById("balance").value = "₱ " + replacedcomputeBalance;
                        document.getElementById("totalBalance").value = "₱ " + replacedcomputeBalance;
                        //computepercentage
                        let computeDownpayment = parseFloat(tcpcomputeDPreplace)*(parseFloat(dpPercentagecomputedp)/100);
                        let computeBalanceFixed1 = computeDownpayment.toFixed(0);
                        let replacedcomputeBalance1 = computeBalanceFixed1.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                        document.getElementById("dpPercentage2").value = "₱ " + replacedcomputeBalance1;

                        
                        const elementToHide322 = document.getElementById("terms");
                        // Hide the element by setting its display property to 'none'
                        elementToHide322.disabled = false;
    

       // var newStr2 = tcp1.replace(/₱|,/g, ''); 
      //  let amountdp1 =  parseFloat(dpPercentagedecimal) * parseFloat(newStr2); 
      //  let amountdp1Fixed = amountdp1.toFixed(2);
       // let replaceamountdp1Fixed = amountdp1Fixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
      //  document.getElementById("dpPercentage2").value =  "₱ " + replaceamountdp1Fixed;
        
        
                    };
                }
        </script>
      
        <script>
            var table = document.getElementById('dtspecial_lotintermentdescription');
                for(var i = 1; i < table.rows.length; i++){
                    table.rows[i].onclick = function(){
                        //rIndex = this.rowIndex;
                        document.getElementById("location").value = this.cells[2].innerHTML;
                        document.getElementById("LIInput").value = this.cells[1].innerHTML;
                        document.getElementById("SpecialRegular_interment").value = this.cells[3].innerHTML;
                        document.getElementById("Specialpreneed").value = this.cells[4].innerHTML;
                        document.getElementById("Specialatneed").value = this.cells[5].innerHTML;
                        document.getElementById("Specialnight").value = this.cells[6].innerHTML;
                        document.getElementById("Specialspecialdays").value = this.cells[7].innerHTML;
                        
                    };
                }
        </script>
        <script>
            var table = document.getElementById('dtspecial_cryptintermentdescription');
                for(var i = 1; i < table.rows.length; i++){
                    table.rows[i].onclick = function(){
                        //rIndex = this.rowIndex;
                        document.getElementById("cryptlocation").value = this.cells[2].innerHTML;
                        document.getElementById("cryptLIInput").value = this.cells[1].innerHTML;
                        document.getElementById("SpecialcryptRegular_interment").value = this.cells[3].innerHTML;
                        document.getElementById("Specialcryptpreneed").value = this.cells[4].innerHTML;
                        document.getElementById("Specialcryptatneed").value = this.cells[5].innerHTML;
                        document.getElementById("Specialcryptnight").value = this.cells[6].innerHTML;
                        document.getElementById("Specialcryptspecialdays").value = this.cells[7].innerHTML;
                        
                    };
                }
        </script>
        <script>
            var table = document.getElementById('dtAddCharge');
                for(var i = 1; i < table.rows.length; i++){
                    table.rows[i].onclick = function(){
                        //rIndex = this.rowIndex;
                        document.getElementById("LevelDepth").value = this.cells[1].innerHTML;
                        document.getElementById("depthftinput").value = this.cells[2].innerHTML;
                        document.getElementById("charges").value = this.cells[3].innerHTML;
                        
                    };
                }
        </script>
        
        <script>
            var table1 = document.getElementById('dtcryptDescRecord');
                for(var i = 1; i < table1.rows.length; i++){
                    table1.rows[i].onclick = function(){
                        //rIndex = this.rowIndex;
                        document.getElementById("crypt_id1").value = this.cells[0].innerHTML;
                        document.getElementById("cryptphase").value = this.cells[1].innerHTML;
                        document.getElementById("cryptlevel").value = this.cells[2].innerHTML;
                        document.getElementById("cryptArea").value = this.cells[3].innerHTML;
                        document.getElementById("cryptSection").value = this.cells[4].innerHTML;
                        document.getElementById("cryptColumn").value = this.cells[5].innerHTML;
                        document.getElementById("cryptUnit").value = this.cells[6].innerHTML;
                        document.getElementById("cryptClassification").value = this.cells[7].innerHTML;
                        document.getElementById("cryptlotListPrice").value = this.cells[8].innerHTML;
                        
                        let dpPercentage1 =  document.getElementById("cryptdpPercentage").value;
                        let a12 =  document.getElementById("crypttaxs1").value;
                        let tcp1 =  document.getElementById("crypttotalContractPrice3").value;
                        let lotListPrice =  document.getElementById("cryptlotListPrice").value;
                        let discount =  document.getElementById("cryptdiscounts1").value;
                        let pcf =  document.getElementById("cryptpcf").value;

                        var newStr2lotListPrice = lotListPrice.replace(/₱|,/g, ''); 
                        var newStr2pcf = pcf.replace(/₱|,/g, ''); 
                        // VAT
                        var subtotaltax = parseFloat(newStr2lotListPrice) * parseFloat(a12);
                        let subtotaltaxFixed = subtotaltax.toFixed(2);
                        let subtotaltaxComplete = subtotaltaxFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                        document.getElementById("cryptsubtotaltax").value =  "₱ " + subtotaltaxComplete;
                        // Discount
                        var subtotalDiscount = (parseFloat(newStr2lotListPrice) + parseFloat(subtotaltax))* parseFloat(discount);
                        let subtotalDiscountFixed = subtotalDiscount.toFixed(2);
                        let subtotalDiscountComplete = subtotalDiscountFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                        document.getElementById("cryptsubtotalDiscount").value =  "₱ " + subtotalDiscountComplete;
                        // TCP
                        var totalContractPrice = parseFloat(newStr2lotListPrice) + parseFloat(subtotaltax) + parseFloat(newStr2pcf) - parseFloat(subtotalDiscount);
                        let totalContractPriceFixed = totalContractPrice.toFixed(2);
                        let totalContractPriceComplete = totalContractPriceFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                        document.getElementById("crypttotalContractPrice3").value =  "₱ " + totalContractPriceComplete;
                        let pcfComplete = pcf.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                        document.getElementById("cryptpcf").value = pcfComplete;

       // var newStr2 = tcp1.replace(/₱|,/g, ''); 
      //  let amountdp1 =  parseFloat(dpPercentagedecimal) * parseFloat(newStr2); 
      //  let amountdp1Fixed = amountdp1.toFixed(2);
       // let replaceamountdp1Fixed = amountdp1Fixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
      //  document.getElementById("dpPercentage2").value =  "₱ " + replaceamountdp1Fixed;
        
        
                    };
                }
                     
        </script>
        
        <script>
            var table = document.getElementById('dtcryptinternment');
                for(var i = 1; i < table.rows.length; i++){
                    table.rows[i].onclick = function(){
                        //rIndex = this.rowIndex;
                        document.getElementById("cryptlocation").value = this.cells[2].innerHTML;
                        document.getElementById("cryptLIInput").value = this.cells[1].innerHTML;
                        document.getElementById("cryptRegular_interment").value = this.cells[3].innerHTML;
                        document.getElementById("cryptpreneed").value = this.cells[4].innerHTML;
                        document.getElementById("cryptatneed").value = this.cells[5].innerHTML;
                        document.getElementById("cryptnight").value = this.cells[6].innerHTML;
                        document.getElementById("cryptspecialdays").value = this.cells[7].innerHTML;
                        
                    };
                }
        </script>
        <script>
            var levelDepthselect = document.getElementById('levelDepthselect');
                        //rIndex = this.rowIndex;
                        var xmlhttp = new XMLHttpRequest();
                            xmlhttp.onreadystatechange = function () {
                        if (this.readyState == 4 && this.status == 200) {
                        var myObj = JSON.parse(this.responseText);
                        document.getElementById("depthftinput").value = myObj[0];
                        }
                    };
                        xmlhttp.open("GET", "gfg.php?levelDepthselect=" + str, true);
                        xmlhttp.send();
        </script>

        
<script>
function computedownpaymentPercentage() {
        let tcpcomputeDP =  document.getElementById("totalContractPrice3").value;
        let dpPercentagecomputedp =  document.getElementById("dpPercentage").value;

        let NoOfMonths=  document.getElementById("NoOfMonths").value;
        let llp=  document.getElementById("lotListPrice").value;
        let balance  =  document.getElementById("balance").value;
        let tax  =  document.getElementById("taxs1").value;
        let pcf  =  document.getElementById("pcf").value;
        let subtotaltax  =  document.getElementById("subtotaltax").value;
        let downpayment  =  document.getElementById("dpPercentage2").value;
        let factorrate=  document.getElementById("factorrate").value;
        var tcpcomputeDPreplace = tcpcomputeDP.replace(/₱|,/g, '');
        var downpaymentreplace = downpayment.replace(/₱|,/g, '');

        
        //computepercentage
        let computeDownpayment = (parseFloat(downpaymentreplace)/parseFloat(tcpcomputeDPreplace))* 100;
        let computeDownpaymentFixed = computeDownpayment.toFixed(0);
        document.getElementById("dpPercentage").value = computeDownpaymentFixed;
       
            // Get elements from the DOM
            var input = document.getElementById("dpPercentage");
            var warningMessage = document.getElementById("warningMessage");
            var inputValue = parseInt(input.value);

            // Check if the input value meets the minimum requirement
            if (inputValue < 20) {
                warningMessage.style.display = "block"; // Show the warning message
                document.getElementById("balance").value = "";
            } else {
                warningMessage.style.display = "none"; // Hide the warning message
           
        //computebalance
        let computeBalance = parseFloat(tcpcomputeDPreplace) - parseFloat(downpaymentreplace);
        let computeBalanceFixed = computeBalance.toFixed(0);
        let replacedcomputeBalance = computeBalanceFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        document.getElementById("balance").value = "₱ " + replacedcomputeBalance;
        document.getElementById("totalBalance").value = "₱ " + replacedcomputeBalance;

        //monthly installement

        var newStr3 = balance.replace(/₱|,/g, ''); 
        var newStr3llp = llp.replace(/₱|,/g, ''); 
        var newStr3pcf = pcf.replace(/₱|,/g, ''); 
        var newStr3downpayment = downpayment.replace(/₱|,/g, ''); 
        var newStr3subtotaltax = subtotaltax.replace(/₱|,/g, ''); 

        if (factorrate == "0.0907308578592074") {
        let monthlyInstallment = (parseFloat(computeBalanceFixed) /12); 
        let monthlypercentage1 = document.getElementById("MIPercentage1").value;
        let monthlypercentage2 = document.getElementById("MIPercentage2").value;
        let firsthalfmonthly = ((parseFloat(monthlyInstallment)*12)/6) * (parseFloat(monthlypercentage1)/100);
        let secondhalfmonthly = ((parseFloat(monthlyInstallment)*12)/6) * (parseFloat(monthlypercentage2)/100);
        const firsthalfmonthlyfixed = firsthalfmonthly.toFixed(2);
        const secondhalfmonthlyfixed = secondhalfmonthly.toFixed(2);
        firsthalfmonthlycomplete=firsthalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        secondhalfmonthlycomplete=secondhalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        
        document.getElementById("MI1").value = "₱ " +  firsthalfmonthlycomplete;
        document.getElementById("MI2").value = "₱ " +  secondhalfmonthlycomplete;
        
        }
        else if (factorrate == "0.0494422640854967") {
        let monthlyInstallment = (parseFloat(computeBalanceFixed) /24); 
        let monthlypercentage1 = document.getElementById("MIPercentage1").value;
        let monthlypercentage2 = document.getElementById("MIPercentage2").value;
        let firsthalfmonthly = ((parseFloat(monthlyInstallment)*24)/12) * (parseFloat(monthlypercentage1)/100);
        let secondhalfmonthly = ((parseFloat(monthlyInstallment)*24)/12) * (parseFloat(monthlypercentage2)/100);
        const firsthalfmonthlyfixed = firsthalfmonthly.toFixed(2);
        const secondhalfmonthlyfixed = secondhalfmonthly.toFixed(2);
        firsthalfmonthlycomplete=firsthalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        secondhalfmonthlycomplete=secondhalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        
        document.getElementById("MI1").value = "₱ " +  firsthalfmonthlycomplete;
        document.getElementById("MI2").value = "₱ " +  secondhalfmonthlycomplete;
        }
        
        else if (factorrate == "0.036152395535917") {
            
        let monthlyInstallment = (parseFloat(computeBalanceFixed) /36); 
        let monthlypercentage1 = document.getElementById("MIPercentage1").value;
        let monthlypercentage2 = document.getElementById("MIPercentage2").value;
        let firsthalfmonthly = ((parseFloat(monthlyInstallment)*36)/18) * (parseFloat(monthlypercentage1)/100);
        let secondhalfmonthly = ((parseFloat(monthlyInstallment)*36)/18) * (parseFloat(monthlypercentage2)/100);
        const firsthalfmonthlyfixed = firsthalfmonthly.toFixed(2);
        const secondhalfmonthlyfixed = secondhalfmonthly.toFixed(2);
        firsthalfmonthlycomplete=firsthalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        secondhalfmonthlycomplete=secondhalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        
        document.getElementById("MI1").value = "₱ " +  firsthalfmonthlycomplete;
        document.getElementById("MI2").value = "₱ " +  secondhalfmonthlycomplete;
        }
        
        else if (factorrate == "0.030430362343858") {
            
        let monthlyInstallment = (parseFloat(computeBalanceFixed) /48); 
        let monthlypercentage1 = document.getElementById("MIPercentage1").value;
        let monthlypercentage2 = document.getElementById("MIPercentage2").value;
        let firsthalfmonthly = ((parseFloat(monthlyInstallment)*48)/24) * (parseFloat(monthlypercentage1)/100);
        let secondhalfmonthly = ((parseFloat(monthlyInstallment)*48)/24) * (parseFloat(monthlypercentage2)/100);
        const firsthalfmonthlyfixed = firsthalfmonthly.toFixed(2);
        const secondhalfmonthlyfixed = secondhalfmonthly.toFixed(2);
        firsthalfmonthlycomplete=firsthalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        secondhalfmonthlycomplete=secondhalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        
        document.getElementById("MI1").value = "₱ " +  firsthalfmonthlycomplete;
        document.getElementById("MI2").value = "₱ " +  secondhalfmonthlycomplete;
        }
        else if (factorrate == "0.0276189120353598") {
            
        let monthlyInstallment = (parseFloat(computeBalanceFixed) /60); 
        let monthlypercentage1 = document.getElementById("MIPercentage1").value;
        let monthlypercentage2 = document.getElementById("MIPercentage2").value;
        let firsthalfmonthly = ((parseFloat(monthlyInstallment)*60)/30) * (parseFloat(monthlypercentage1)/100);
        let secondhalfmonthly = ((parseFloat(monthlyInstallment)*60)/30) * (parseFloat(monthlypercentage2)/100);
        const firsthalfmonthlyfixed = firsthalfmonthly.toFixed(2);
        const secondhalfmonthlyfixed = secondhalfmonthly.toFixed(2);
        firsthalfmonthlycomplete=firsthalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        secondhalfmonthlycomplete=secondhalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        
        document.getElementById("MI1").value = "₱ " +  firsthalfmonthlycomplete;
        document.getElementById("MI2").value = "₱ " +  secondhalfmonthlycomplete;
        }
        else if (factorrate == "0.0263268307088938") {
            
            let monthlyInstallment = (parseFloat(computeBalanceFixed) /72); 
            let monthlypercentage1 = document.getElementById("MIPercentage1").value;
            let monthlypercentage2 = document.getElementById("MIPercentage2").value;
            let firsthalfmonthly = ((parseFloat(monthlyInstallment)*72)/36) * (parseFloat(monthlypercentage1)/100);
            let secondhalfmonthly = ((parseFloat(monthlyInstallment)*72)/36) * (parseFloat(monthlypercentage2)/100);
            const firsthalfmonthlyfixed = firsthalfmonthly.toFixed(2);
            const secondhalfmonthlyfixed = secondhalfmonthly.toFixed(2);
            firsthalfmonthlycomplete=firsthalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            secondhalfmonthlycomplete=secondhalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            
            document.getElementById("MI1").value = "₱ " +  firsthalfmonthlycomplete;
            document.getElementById("MI2").value = "₱ " +  secondhalfmonthlycomplete;
        }
        else if (factorrate == "0.02467581178194748") {
            
            let monthlyInstallment = (parseFloat(computeBalanceFixed) /84); 
            let monthlypercentage1 = document.getElementById("MIPercentage1").value;
            let monthlypercentage2 = document.getElementById("MIPercentage2").value;
            let firsthalfmonthly = ((parseFloat(monthlyInstallment)*84)/42) * (parseFloat(monthlypercentage1)/100);
            let secondhalfmonthly = ((parseFloat(monthlyInstallment)*84)/42) * (parseFloat(monthlypercentage2)/100);
            const firsthalfmonthlyfixed = firsthalfmonthly.toFixed(2);
            const secondhalfmonthlyfixed = secondhalfmonthly.toFixed(2);
            firsthalfmonthlycomplete=firsthalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            secondhalfmonthlycomplete=secondhalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            
            document.getElementById("MI1").value = "₱ " +  firsthalfmonthlycomplete;
            document.getElementById("MI2").value = "₱ " +  secondhalfmonthlycomplete;
        }
        else if (factorrate == "0.0235131274809127") {
            
            
            let monthlyInstallment = (parseFloat(computeBalanceFixed) /96); 
            let monthlypercentage1 = document.getElementById("MIPercentage1").value;
            let monthlypercentage2 = document.getElementById("MIPercentage2").value;
            let firsthalfmonthly = ((parseFloat(monthlyInstallment)*96)/48) * (parseFloat(monthlypercentage1)/100);
            let secondhalfmonthly = ((parseFloat(monthlyInstallment)*96)/48) * (parseFloat(monthlypercentage2)/100);
            const firsthalfmonthlyfixed = firsthalfmonthly.toFixed(2);
            const secondhalfmonthlyfixed = secondhalfmonthly.toFixed(2);
            firsthalfmonthlycomplete=firsthalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            secondhalfmonthlycomplete=secondhalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            
            document.getElementById("MI1").value = "₱ " +  firsthalfmonthlycomplete;
            document.getElementById("MI2").value = "₱ " +  secondhalfmonthlycomplete;
        }
        else if (factorrate == "0.0226708482940114") {
            
            let monthlyInstallment = (parseFloat(computeBalanceFixed) /108); 
            let monthlypercentage1 = document.getElementById("MIPercentage1").value;
            let monthlypercentage2 = document.getElementById("MIPercentage2").value;
            let firsthalfmonthly = ((parseFloat(monthlyInstallment)*108)/54) * (parseFloat(monthlypercentage1)/100);
            let secondhalfmonthly = ((parseFloat(monthlyInstallment)*108)/54) * (parseFloat(monthlypercentage2)/100);
            const firsthalfmonthlyfixed = firsthalfmonthly.toFixed(2);
            const secondhalfmonthlyfixed = secondhalfmonthly.toFixed(2);
            firsthalfmonthlycomplete=firsthalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            secondhalfmonthlycomplete=secondhalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            
            document.getElementById("MI1").value = "₱ " +  firsthalfmonthlycomplete;
            document.getElementById("MI2").value = "₱ " +  secondhalfmonthlycomplete;
        }
        else if (factorrate == "0.022048096885833") {
            
            let monthlyInstallment = (parseFloat(computeBalanceFixed) /120); 
            let monthlypercentage1 = document.getElementById("MIPercentage1").value;
            let monthlypercentage2 = document.getElementById("MIPercentage2").value;
            let firsthalfmonthly = ((parseFloat(monthlyInstallment)*120)/60) * (parseFloat(monthlypercentage1)/100);
            let secondhalfmonthly = ((parseFloat(monthlyInstallment)*120)/60) * (parseFloat(monthlypercentage2)/100);
            const firsthalfmonthlyfixed = firsthalfmonthly.toFixed(2);
            const secondhalfmonthlyfixed = secondhalfmonthly.toFixed(2);
            firsthalfmonthlycomplete=firsthalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            secondhalfmonthlycomplete=secondhalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            
            document.getElementById("MI1").value = "₱ " +  firsthalfmonthlycomplete;
            document.getElementById("MI2").value = "₱ " +  secondhalfmonthlycomplete;
        }
         // Perform other actions or submit the form
        }
    }
    </script>

    
<script>
       
       let crypta =  document.getElementById("crypttaxs").value;
       let cryptdiscounts =  document.getElementById("cryptdiscounts").value;
       let cryptpcf =  document.getElementById("cryptpcf").value;
       let cryptmarkup =  document.getElementById("cryptmarkup").value;
       let cryptlotListPrice =  document.getElementById("cryptlotListPrice").value;
       let cryptb =  100;

       let cryptc = parseInt(crypta) / parseInt(cryptb); 
       let cryptdiscountpercentange = parseInt(cryptdiscounts) / parseInt(cryptb); 
       let cryptmarkuppercentange = parseInt(cryptmarkup) / parseInt(cryptb); 
       document.getElementById("crypttaxs1").value = cryptc;
       document.getElementById("cryptdiscounts1").value = cryptdiscountpercentange;
       document.getElementById("cryptmarkup1").value = cryptmarkuppercentange;
       
       function cryptcompute() {
           
           let crypta1 =  document.getElementById("crypttaxs").value;
           let cryptlotListPrice1 =  document.getElementById("cryptlotListPrice").value;
           let cryptdiscounts1 =  document.getElementById("cryptdiscounts").value;
           let cryptpcf1 =  document.getElementById("cryptpcf").value;
           
           let cryptb1 =  100;
           let cryptc1 = parseInt(crypta1) / parseInt(cryptb1); 
           var cryptnewStr = cryptlotListPrice1.replace(/₱|,/g, '');
         
           let cryptdiscountpercentange1 = parseInt(cryptdiscounts1) / parseInt(cryptb1); 
           let cryptsubtotal = parseFloat(cryptc1) * parseFloat(cryptnewStr);
           let cryptdiscountsubtotal = parseFloat(cryptdiscountpercentange1) * parseFloat(cryptnewStr);
   
           
           let cryptdiscountsubtotalFixed = cryptdiscountsubtotal.toFixed(2);
           let crypttaxsubtotalFixed = cryptsubtotal.toFixed(2);
           let cryptreplacedtaxsubtotalFixed =crypttaxsubtotalFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
           let cryptreplaceddiscountsubtotalFixed =cryptdiscountsubtotalFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
           document.getElementById("cryptsubtotaltax").value = "₱ " + cryptreplacedtaxsubtotalFixed;
           document.getElementById("cryptsubtotalDiscount").value =  "₱ " + cryptreplaceddiscountsubtotalFixed;

           var cryptsubtotaltax = crypttaxsubtotalFixed.replace(/₱|,/g, '');
           var cryptsubtotaldiscounted = cryptdiscountsubtotalFixed.replace(/₱|,/g, '');
           var cryptsubtotalpcf = cryptpcf1.replace(/₱|,/g, '');

           let crypttotalContractPrice = (parseFloat(crypttaxsubtotalFixed) + parseFloat(cryptsubtotalpcf) + parseFloat(cryptnewStr) - parseFloat(cryptsubtotaldiscounted));
           let crypttotalContractPriceFixed = crypttotalContractPrice.toFixed(2);
          let cryptreplacedtotalContractPriceFixed = crypttotalContractPriceFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
           document.getElementById("crypttotalContractPrice3").value = "₱ " + cryptreplacedtotalContractPriceFixed;

           document.getElementById("cryptdpPercentage2").value = "";
           document.getElementById("cryptdpPercentage").value = "";
           document.getElementById("cryptbalance1").value = "";
           document.getElementById("cryptMI").value = "";
       document.getElementById("cryptNoOfMonths").value = "";
       }
       </script>
    <script>
       
        let a =  document.getElementById("taxs").value;
        let discounts =  document.getElementById("discounts").value;
        let pcf =  document.getElementById("pcf").value;
        let markup =  document.getElementById("markup").value;
        let lotListPrice =  document.getElementById("lotListPrice").value;
        let b =  100;

        let c = parseInt(a) / parseInt(b); 
        let discountpercentange = parseInt(discounts) / parseInt(b); 
        let markuppercentange = parseInt(markup) / parseInt(b); 
        document.getElementById("taxs1").value = c;
        document.getElementById("discounts1").value = discountpercentange;
        document.getElementById("markup1").value = markuppercentange;
        
        function compute() {
            
            let a1 =  document.getElementById("taxs").value;
            let lotListPrice1 =  document.getElementById("lotListPrice").value;
            let discounts1 =  document.getElementById("discounts").value;
            let pcf1 =  document.getElementById("pcf").value;
            
            let b1 =  100;
            let c1 = parseInt(a1) / parseInt(b1); 
            var newStr = lotListPrice1.replace(/₱|,/g, '');
          
            let discountpercentange1 = parseInt(discounts1) / parseInt(b1); 
            let subtotal = parseFloat(c1) * parseFloat(newStr);
            let discountsubtotal = parseFloat(discountpercentange1) * parseFloat(newStr);
    
            
            let discountsubtotalFixed = discountsubtotal.toFixed(2);
            let taxsubtotalFixed = subtotal.toFixed(2);
            let replacedtaxsubtotalFixed =taxsubtotalFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            let replaceddiscountsubtotalFixed =discountsubtotalFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            document.getElementById("subtotaltax").value = "₱ " + replacedtaxsubtotalFixed;
            document.getElementById("subtotalDiscount").value =  "₱ " + replaceddiscountsubtotalFixed;

            var subtotaltax = taxsubtotalFixed.replace(/₱|,/g, '');
            var subtotaldiscounted = discountsubtotalFixed.replace(/₱|,/g, '');
            var subtotalpcf = pcf1.replace(/₱|,/g, '');

            let totalContractPrice = (parseFloat(taxsubtotalFixed) + parseFloat(subtotalpcf) + parseFloat(newStr) - parseFloat(subtotaldiscounted));
            let totalContractPriceFixed = totalContractPrice.toFixed(2);
           let replacedtotalContractPriceFixed = totalContractPriceFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            document.getElementById("totalContractPrice3").value = "₱ " + replacedtotalContractPriceFixed;
            let minimumDPPercentage = document.getElementById("minimumdpPercentage").value;
            document.getElementById("dpPercentage").value = minimumDPPercentage;
            document.getElementById("dpPercentage2").value = "";
            document.getElementById("balance1").value = "";
            document.getElementById("MI").value = "";
        document.getElementById("NoOfMonths").value = "";
        }
    function computedp() {
        let tcpcomputeDP =  document.getElementById("totalContractPrice3").value;
        let dpPercentagecomputedp =  document.getElementById("dpPercentage").value;

        let NoOfMonths=  document.getElementById("NoOfMonths").value;
        let llp=  document.getElementById("lotListPrice").value;
        let balance  =  document.getElementById("balance").value;
        let tax  =  document.getElementById("taxs1").value;
        let pcf  =  document.getElementById("pcf").value;
        let subtotaltax  =  document.getElementById("subtotaltax").value;
        let downpayment  =  document.getElementById("dpPercentage2").value;
        let factorrate=  document.getElementById("factorrate").value;
        var tcpcomputeDPreplace = tcpcomputeDP.replace(/₱|,/g, '');
        //computebalance
        let computeBalance = parseFloat(tcpcomputeDPreplace) - (parseFloat(tcpcomputeDPreplace)*(parseFloat(dpPercentagecomputedp)/100));
        let computeBalanceFixed = computeBalance.toFixed(0);
        let replacedcomputeBalance = computeBalanceFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        document.getElementById("balance").value = "₱ " + replacedcomputeBalance;
        document.getElementById("totalBalance").value = "₱ " + replacedcomputeBalance;
        //computepercentage
        let computeDownpayment = parseFloat(tcpcomputeDPreplace)*(parseFloat(dpPercentagecomputedp)/100);
        let computeBalanceFixed1 = computeDownpayment.toFixed(0);
        let replacedcomputeBalance1 = computeBalanceFixed1.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        document.getElementById("dpPercentage2").value = "₱ " + replacedcomputeBalance1;

        //monthly installement

        var newStr3 = balance.replace(/₱|,/g, ''); 
        var newStr3llp = llp.replace(/₱|,/g, ''); 
        var newStr3pcf = pcf.replace(/₱|,/g, ''); 
        var newStr3downpayment = downpayment.replace(/₱|,/g, ''); 
        var newStr3subtotaltax = subtotaltax.replace(/₱|,/g, ''); 

       
        if (factorrate == "0.0907308578592074") {
        let monthlyInstallment = (parseFloat(computeBalanceFixed) /12); 
        let monthlypercentage1 = document.getElementById("MIPercentage1").value;
        let monthlypercentage2 = document.getElementById("MIPercentage2").value;
        let firsthalfmonthly = ((parseFloat(monthlyInstallment)*12)/6) * (parseFloat(monthlypercentage1)/100);
        let secondhalfmonthly = ((parseFloat(monthlyInstallment)*12)/6) * (parseFloat(monthlypercentage2)/100);
        const firsthalfmonthlyfixed = firsthalfmonthly.toFixed(2);
        const secondhalfmonthlyfixed = secondhalfmonthly.toFixed(2);
        firsthalfmonthlycomplete=firsthalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        secondhalfmonthlycomplete=secondhalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        
        document.getElementById("MI1").value = "₱ " +  firsthalfmonthlycomplete;
        document.getElementById("MI2").value = "₱ " +  secondhalfmonthlycomplete;
        }
        else if (factorrate == "0.0494422640854967") {
        let monthlyInstallment = (parseFloat(computeBalanceFixed) /24); 
        let monthlypercentage1 = document.getElementById("MIPercentage1").value;
        let monthlypercentage2 = document.getElementById("MIPercentage2").value;
        let firsthalfmonthly = ((parseFloat(monthlyInstallment)*24)/12) * (parseFloat(monthlypercentage1)/100);
        let secondhalfmonthly = ((parseFloat(monthlyInstallment)*24)/12) * (parseFloat(monthlypercentage2)/100);
        const firsthalfmonthlyfixed = firsthalfmonthly.toFixed(2);
        const secondhalfmonthlyfixed = secondhalfmonthly.toFixed(2);
        firsthalfmonthlycomplete=firsthalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        secondhalfmonthlycomplete=secondhalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        
        document.getElementById("MI1").value = "₱ " +  firsthalfmonthlycomplete;
        document.getElementById("MI2").value = "₱ " +  secondhalfmonthlycomplete;
        }
        
        else if (factorrate == "0.036152395535917") {
            
        let monthlyInstallment = (parseFloat(computeBalanceFixed) /36); 
        let monthlypercentage1 = document.getElementById("MIPercentage1").value;
        let monthlypercentage2 = document.getElementById("MIPercentage2").value;
        let firsthalfmonthly = ((parseFloat(monthlyInstallment)*36)/18) * (parseFloat(monthlypercentage1)/100);
        let secondhalfmonthly = ((parseFloat(monthlyInstallment)*36)/18) * (parseFloat(monthlypercentage2)/100);
        const firsthalfmonthlyfixed = firsthalfmonthly.toFixed(2);
        const secondhalfmonthlyfixed = secondhalfmonthly.toFixed(2);
        firsthalfmonthlycomplete=firsthalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        secondhalfmonthlycomplete=secondhalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        
        document.getElementById("MI1").value = "₱ " +  firsthalfmonthlycomplete;
        document.getElementById("MI2").value = "₱ " +  secondhalfmonthlycomplete;
        }
        
        else if (factorrate == "0.030430362343858") {
            
        let monthlyInstallment = (parseFloat(computeBalanceFixed) /48); 
        let monthlypercentage1 = document.getElementById("MIPercentage1").value;
        let monthlypercentage2 = document.getElementById("MIPercentage2").value;
        let firsthalfmonthly = ((parseFloat(monthlyInstallment)*48)/24) * (parseFloat(monthlypercentage1)/100);
        let secondhalfmonthly = ((parseFloat(monthlyInstallment)*48)/24) * (parseFloat(monthlypercentage2)/100);
        const firsthalfmonthlyfixed = firsthalfmonthly.toFixed(2);
        const secondhalfmonthlyfixed = secondhalfmonthly.toFixed(2);
        firsthalfmonthlycomplete=firsthalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        secondhalfmonthlycomplete=secondhalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        
        document.getElementById("MI1").value = "₱ " +  firsthalfmonthlycomplete;
        document.getElementById("MI2").value = "₱ " +  secondhalfmonthlycomplete;
        }
        else if (factorrate == "0.0276189120353598") {
            
        let monthlyInstallment = (parseFloat(computeBalanceFixed) /60); 
        let monthlypercentage1 = document.getElementById("MIPercentage1").value;
        let monthlypercentage2 = document.getElementById("MIPercentage2").value;
        let firsthalfmonthly = ((parseFloat(monthlyInstallment)*60)/30) * (parseFloat(monthlypercentage1)/100);
        let secondhalfmonthly = ((parseFloat(monthlyInstallment)*60)/30) * (parseFloat(monthlypercentage2)/100);
        const firsthalfmonthlyfixed = firsthalfmonthly.toFixed(2);
        const secondhalfmonthlyfixed = secondhalfmonthly.toFixed(2);
        firsthalfmonthlycomplete=firsthalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        secondhalfmonthlycomplete=secondhalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        
        document.getElementById("MI1").value = "₱ " +  firsthalfmonthlycomplete;
        document.getElementById("MI2").value = "₱ " +  secondhalfmonthlycomplete;
        }
        else if (factorrate == "0.0263268307088938") {
            
            let monthlyInstallment = (parseFloat(computeBalanceFixed) /72); 
            let monthlypercentage1 = document.getElementById("MIPercentage1").value;
            let monthlypercentage2 = document.getElementById("MIPercentage2").value;
            let firsthalfmonthly = ((parseFloat(monthlyInstallment)*72)/36) * (parseFloat(monthlypercentage1)/100);
            let secondhalfmonthly = ((parseFloat(monthlyInstallment)*72)/36) * (parseFloat(monthlypercentage2)/100);
            const firsthalfmonthlyfixed = firsthalfmonthly.toFixed(2);
            const secondhalfmonthlyfixed = secondhalfmonthly.toFixed(2);
            firsthalfmonthlycomplete=firsthalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            secondhalfmonthlycomplete=secondhalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            
            document.getElementById("MI1").value = "₱ " +  firsthalfmonthlycomplete;
            document.getElementById("MI2").value = "₱ " +  secondhalfmonthlycomplete;
        }
        else if (factorrate == "0.02467581178194748") {
            
            let monthlyInstallment = (parseFloat(computeBalanceFixed) /84); 
            let monthlypercentage1 = document.getElementById("MIPercentage1").value;
            let monthlypercentage2 = document.getElementById("MIPercentage2").value;
            let firsthalfmonthly = ((parseFloat(monthlyInstallment)*84)/42) * (parseFloat(monthlypercentage1)/100);
            let secondhalfmonthly = ((parseFloat(monthlyInstallment)*84)/42) * (parseFloat(monthlypercentage2)/100);
            const firsthalfmonthlyfixed = firsthalfmonthly.toFixed(2);
            const secondhalfmonthlyfixed = secondhalfmonthly.toFixed(2);
            firsthalfmonthlycomplete=firsthalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            secondhalfmonthlycomplete=secondhalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            
            document.getElementById("MI1").value = "₱ " +  firsthalfmonthlycomplete;
            document.getElementById("MI2").value = "₱ " +  secondhalfmonthlycomplete;
        }
        else if (factorrate == "0.0235131274809127") {
            
            
            let monthlyInstallment = (parseFloat(computeBalanceFixed) /96); 
            let monthlypercentage1 = document.getElementById("MIPercentage1").value;
            let monthlypercentage2 = document.getElementById("MIPercentage2").value;
            let firsthalfmonthly = ((parseFloat(monthlyInstallment)*96)/48) * (parseFloat(monthlypercentage1)/100);
            let secondhalfmonthly = ((parseFloat(monthlyInstallment)*96)/48) * (parseFloat(monthlypercentage2)/100);
            const firsthalfmonthlyfixed = firsthalfmonthly.toFixed(2);
            const secondhalfmonthlyfixed = secondhalfmonthly.toFixed(2);
            firsthalfmonthlycomplete=firsthalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            secondhalfmonthlycomplete=secondhalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            
            document.getElementById("MI1").value = "₱ " +  firsthalfmonthlycomplete;
            document.getElementById("MI2").value = "₱ " +  secondhalfmonthlycomplete;
        }
        else if (factorrate == "0.0226708482940114") {
            
            let monthlyInstallment = (parseFloat(computeBalanceFixed) /108); 
            let monthlypercentage1 = document.getElementById("MIPercentage1").value;
            let monthlypercentage2 = document.getElementById("MIPercentage2").value;
            let firsthalfmonthly = ((parseFloat(monthlyInstallment)*108)/54) * (parseFloat(monthlypercentage1)/100);
            let secondhalfmonthly = ((parseFloat(monthlyInstallment)*108)/54) * (parseFloat(monthlypercentage2)/100);
            const firsthalfmonthlyfixed = firsthalfmonthly.toFixed(2);
            const secondhalfmonthlyfixed = secondhalfmonthly.toFixed(2);
            firsthalfmonthlycomplete=firsthalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            secondhalfmonthlycomplete=secondhalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            
            document.getElementById("MI1").value = "₱ " +  firsthalfmonthlycomplete;
            document.getElementById("MI2").value = "₱ " +  secondhalfmonthlycomplete;
        }
        else if (factorrate == "0.022048096885833") {
            
            let monthlyInstallment = (parseFloat(computeBalanceFixed) /120); 
            let monthlypercentage1 = document.getElementById("MIPercentage1").value;
            let monthlypercentage2 = document.getElementById("MIPercentage2").value;
            let firsthalfmonthly = ((parseFloat(monthlyInstallment)*120)/60) * (parseFloat(monthlypercentage1)/100);
            let secondhalfmonthly = ((parseFloat(monthlyInstallment)*120)/60) * (parseFloat(monthlypercentage2)/100);
            const firsthalfmonthlyfixed = firsthalfmonthly.toFixed(2);
            const secondhalfmonthlyfixed = secondhalfmonthly.toFixed(2);
            firsthalfmonthlycomplete=firsthalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            secondhalfmonthlycomplete=secondhalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            
            document.getElementById("MI1").value = "₱ " +  firsthalfmonthlycomplete;
            document.getElementById("MI2").value = "₱ " +  secondhalfmonthlycomplete;
        }
    }
    
    function cryptcomputedp() {
        let tcpcomputeDP =  document.getElementById("crypttotalContractPrice3").value;
        let dpPercentagecomputedp =  document.getElementById("cryptdpPercentage").value;

        let NoOfMonths=  document.getElementById("cryptNoOfMonths").value;
        let llp=  document.getElementById("cryptlotListPrice").value;
        let balance  =  document.getElementById("cryptbalance").value;
        let tax  =  document.getElementById("crypttaxs1").value;
        let pcf  =  document.getElementById("cryptpcf").value;
        let subtotaltax  =  document.getElementById("cryptsubtotaltax").value;
        let downpayment  =  document.getElementById("cryptdpPercentage2").value;
        let factorrate=  document.getElementById("cryptfactorrate").value;
        var tcpcomputeDPreplace = tcpcomputeDP.replace(/₱|,/g, '');
        //computebalance
        let computeBalance = parseFloat(tcpcomputeDPreplace) - (parseFloat(tcpcomputeDPreplace)*(parseFloat(dpPercentagecomputedp)/100));
        let computeBalanceFixed = computeBalance.toFixed(0);
        let replacedcomputeBalance = computeBalanceFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        document.getElementById("cryptbalance").value = "₱ " + replacedcomputeBalance;
        document.getElementById("totalBalance").value = "₱ " + replacedcomputeBalance;
        //computepercentage
        let computeDownpayment = parseFloat(tcpcomputeDPreplace)*(parseFloat(dpPercentagecomputedp)/100);
        let computeBalanceFixed1 = computeDownpayment.toFixed(0);
        let replacedcomputeBalance1 = computeBalanceFixed1.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        document.getElementById("cryptdpPercentage2").value = "₱ " + replacedcomputeBalance1;

        //monthly installement

        var newStr3 = balance.replace(/₱|,/g, ''); 
        var newStr3llp = llp.replace(/₱|,/g, ''); 
        var newStr3pcf = pcf.replace(/₱|,/g, ''); 
        var newStr3downpayment = downpayment.replace(/₱|,/g, ''); 
        var newStr3subtotaltax = subtotaltax.replace(/₱|,/g, ''); 

       
        if (factorrate == "0.0907308578592074") {
        let monthlyInstallment = (parseFloat(computeBalanceFixed) /12); 
        let monthlypercentage1 = document.getElementById("cryptMIPercentage1").value;
        let monthlypercentage2 = document.getElementById("cryptMIPercentage2").value;
        let firsthalfmonthly = ((parseFloat(monthlyInstallment)*12)/6) * (parseFloat(monthlypercentage1)/100);
        let secondhalfmonthly = ((parseFloat(monthlyInstallment)*12)/6) * (parseFloat(monthlypercentage2)/100);
        const firsthalfmonthlyfixed = firsthalfmonthly.toFixed(2);
        const secondhalfmonthlyfixed = secondhalfmonthly.toFixed(2);
        firsthalfmonthlycomplete=firsthalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        secondhalfmonthlycomplete=secondhalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        
        document.getElementById("cryptMI1").value = "₱ " +  firsthalfmonthlycomplete;
        document.getElementById("cryptMI2").value = "₱ " +  secondhalfmonthlycomplete;
        }
        else if (factorrate == "0.0494422640854967") {
        let monthlyInstallment = (parseFloat(computeBalanceFixed) /24); 
        let monthlypercentage1 = document.getElementById("cryptMIPercentage1").value;
        let monthlypercentage2 = document.getElementById("cryptMIPercentage2").value;
        let firsthalfmonthly = ((parseFloat(monthlyInstallment)*24)/12) * (parseFloat(monthlypercentage1)/100);
        let secondhalfmonthly = ((parseFloat(monthlyInstallment)*24)/12) * (parseFloat(monthlypercentage2)/100);
        const firsthalfmonthlyfixed = firsthalfmonthly.toFixed(2);
        const secondhalfmonthlyfixed = secondhalfmonthly.toFixed(2);
        firsthalfmonthlycomplete=firsthalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        secondhalfmonthlycomplete=secondhalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        
        document.getElementById("cryptMI1").value = "₱ " +  firsthalfmonthlycomplete;
        document.getElementById("cryptMI2").value = "₱ " +  secondhalfmonthlycomplete;
        }
        
        else if (factorrate == "0.036152395535917") {
            
        let monthlyInstallment = (parseFloat(computeBalanceFixed) /36); 
        let monthlypercentage1 = document.getElementById("cryptMIPercentage1").value;
        let monthlypercentage2 = document.getElementById("cryptMIPercentage2").value;
        let firsthalfmonthly = ((parseFloat(monthlyInstallment)*36)/18) * (parseFloat(monthlypercentage1)/100);
        let secondhalfmonthly = ((parseFloat(monthlyInstallment)*36)/18) * (parseFloat(monthlypercentage2)/100);
        const firsthalfmonthlyfixed = firsthalfmonthly.toFixed(2);
        const secondhalfmonthlyfixed = secondhalfmonthly.toFixed(2);
        firsthalfmonthlycomplete=firsthalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        secondhalfmonthlycomplete=secondhalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        
        document.getElementById("cryptMI1").value = "₱ " +  firsthalfmonthlycomplete;
        document.getElementById("cryptMI2").value = "₱ " +  secondhalfmonthlycomplete;
        }
        
        else if (factorrate == "0.030430362343858") {
            
        let monthlyInstallment = (parseFloat(computeBalanceFixed) /48); 
        let monthlypercentage1 = document.getElementById("cryptMIPercentage1").value;
        let monthlypercentage2 = document.getElementById("cryptMIPercentage2").value;
        let firsthalfmonthly = ((parseFloat(monthlyInstallment)*48)/24) * (parseFloat(monthlypercentage1)/100);
        let secondhalfmonthly = ((parseFloat(monthlyInstallment)*48)/24) * (parseFloat(monthlypercentage2)/100);
        const firsthalfmonthlyfixed = firsthalfmonthly.toFixed(2);
        const secondhalfmonthlyfixed = secondhalfmonthly.toFixed(2);
        firsthalfmonthlycomplete=firsthalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        secondhalfmonthlycomplete=secondhalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        
        document.getElementById("cryptMI1").value = "₱ " +  firsthalfmonthlycomplete;
        document.getElementById("cryptMI2").value = "₱ " +  secondhalfmonthlycomplete;
        }
        else if (factorrate == "0.0276189120353598") {
            
        let monthlyInstallment = (parseFloat(computeBalanceFixed) /60); 
        let monthlypercentage1 = document.getElementById("cryptMIPercentage1").value;
        let monthlypercentage2 = document.getElementById("cryptMIPercentage2").value;
        let firsthalfmonthly = ((parseFloat(monthlyInstallment)*60)/30) * (parseFloat(monthlypercentage1)/100);
        let secondhalfmonthly = ((parseFloat(monthlyInstallment)*60)/30) * (parseFloat(monthlypercentage2)/100);
        const firsthalfmonthlyfixed = firsthalfmonthly.toFixed(2);
        const secondhalfmonthlyfixed = secondhalfmonthly.toFixed(2);
        firsthalfmonthlycomplete=firsthalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        secondhalfmonthlycomplete=secondhalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        
        document.getElementById("cryptMI1").value = "₱ " +  firsthalfmonthlycomplete;
        document.getElementById("cryptMI2").value = "₱ " +  secondhalfmonthlycomplete;
        }
        else if (factorrate == "0.0263268307088938") {
            
            let monthlyInstallment = (parseFloat(computeBalanceFixed) /72); 
            let monthlypercentage1 = document.getElementById("cryptMIPercentage1").value;
            let monthlypercentage2 = document.getElementById("cryptMIPercentage2").value;
            let firsthalfmonthly = ((parseFloat(monthlyInstallment)*72)/36) * (parseFloat(monthlypercentage1)/100);
            let secondhalfmonthly = ((parseFloat(monthlyInstallment)*72)/36) * (parseFloat(monthlypercentage2)/100);
            const firsthalfmonthlyfixed = firsthalfmonthly.toFixed(2);
            const secondhalfmonthlyfixed = secondhalfmonthly.toFixed(2);
            firsthalfmonthlycomplete=firsthalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            secondhalfmonthlycomplete=secondhalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            
            document.getElementById("cryptMI1").value = "₱ " +  firsthalfmonthlycomplete;
            document.getElementById("cryptMI2").value = "₱ " +  secondhalfmonthlycomplete;
        }
        else if (factorrate == "0.02467581178194748") {
            
            let monthlyInstallment = (parseFloat(computeBalanceFixed) /84); 
            let monthlypercentage1 = document.getElementById("cryptMIPercentage1").value;
            let monthlypercentage2 = document.getElementById("cryptMIPercentage2").value;
            let firsthalfmonthly = ((parseFloat(monthlyInstallment)*84)/42) * (parseFloat(monthlypercentage1)/100);
            let secondhalfmonthly = ((parseFloat(monthlyInstallment)*84)/42) * (parseFloat(monthlypercentage2)/100);
            const firsthalfmonthlyfixed = firsthalfmonthly.toFixed(2);
            const secondhalfmonthlyfixed = secondhalfmonthly.toFixed(2);
            firsthalfmonthlycomplete=firsthalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            secondhalfmonthlycomplete=secondhalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            
            document.getElementById("cryptMI1").value = "₱ " +  firsthalfmonthlycomplete;
            document.getElementById("cryptMI2").value = "₱ " +  secondhalfmonthlycomplete;
        }
        else if (factorrate == "0.0235131274809127") {
            
            
            let monthlyInstallment = (parseFloat(computeBalanceFixed) /96); 
            let monthlypercentage1 = document.getElementById("cryptMIPercentage1").value;
            let monthlypercentage2 = document.getElementById("cryptMIPercentage2").value;
            let firsthalfmonthly = ((parseFloat(monthlyInstallment)*96)/48) * (parseFloat(monthlypercentage1)/100);
            let secondhalfmonthly = ((parseFloat(monthlyInstallment)*96)/48) * (parseFloat(monthlypercentage2)/100);
            const firsthalfmonthlyfixed = firsthalfmonthly.toFixed(2);
            const secondhalfmonthlyfixed = secondhalfmonthly.toFixed(2);
            firsthalfmonthlycomplete=firsthalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            secondhalfmonthlycomplete=secondhalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            
            document.getElementById("cryptMI1").value = "₱ " +  firsthalfmonthlycomplete;
            document.getElementById("cryptMI2").value = "₱ " +  secondhalfmonthlycomplete;
        }
        else if (factorrate == "0.0226708482940114") {
            
            let monthlyInstallment = (parseFloat(computeBalanceFixed) /108); 
            let monthlypercentage1 = document.getElementById("cryptMIPercentage1").value;
            let monthlypercentage2 = document.getElementById("cryptMIPercentage2").value;
            let firsthalfmonthly = ((parseFloat(monthlyInstallment)*108)/54) * (parseFloat(monthlypercentage1)/100);
            let secondhalfmonthly = ((parseFloat(monthlyInstallment)*108)/54) * (parseFloat(monthlypercentage2)/100);
            const firsthalfmonthlyfixed = firsthalfmonthly.toFixed(2);
            const secondhalfmonthlyfixed = secondhalfmonthly.toFixed(2);
            firsthalfmonthlycomplete=firsthalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            secondhalfmonthlycomplete=secondhalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            
            document.getElementById("cryptMI1").value = "₱ " +  firsthalfmonthlycomplete;
            document.getElementById("cryptMI2").value = "₱ " +  secondhalfmonthlycomplete;
        }
        else if (factorrate == "0.022048096885833") {
            
            let monthlyInstallment = (parseFloat(computeBalanceFixed) /120); 
            let monthlypercentage1 = document.getElementById("cryptMIPercentage1").value;
            let monthlypercentage2 = document.getElementById("cryptMIPercentage2").value;
            let firsthalfmonthly = ((parseFloat(monthlyInstallment)*120)/60) * (parseFloat(monthlypercentage1)/100);
            let secondhalfmonthly = ((parseFloat(monthlyInstallment)*120)/60) * (parseFloat(monthlypercentage2)/100);
            const firsthalfmonthlyfixed = firsthalfmonthly.toFixed(2);
            const secondhalfmonthlyfixed = secondhalfmonthly.toFixed(2);
            firsthalfmonthlycomplete=firsthalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            secondhalfmonthlycomplete=secondhalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            
            document.getElementById("cryptMI1").value = "₱ " +  firsthalfmonthlycomplete;
            document.getElementById("cryptMI2").value = "₱ " +  secondhalfmonthlycomplete;
        }
    }
        function MA() {
        let NoOfMonths=  document.getElementById("NoOfMonths").value;
        let llp=  document.getElementById("lotListPrice").value;
        let balance  =  document.getElementById("balance").value;
        let tax  =  document.getElementById("taxs1").value;
        let pcf  =  document.getElementById("pcf").value;
        let subtotaltax  =  document.getElementById("subtotaltax").value;
        let downpayment  =  document.getElementById("dpPercentage2").value;
        var newStr3downpayment = downpayment.replace(/₱|,/g, ''); 

        if (NoOfMonths == "12") {
        document.getElementById("factorratePercentage").value = "16";
        document.getElementById("factorrate").value = "0.0907308578592074";
        var newStr3 = balance.replace(/₱|,/g, ''); 
        var newStr3llp = llp.replace(/₱|,/g, ''); 
        var newStr3pcf = pcf.replace(/₱|,/g, ''); 
        var newStr3downpayment = downpayment.replace(/₱|,/g, ''); 
        var newStr3subtotaltax = subtotaltax.replace(/₱|,/g, ''); 
        let monthlyInstallment = ((parseFloat(newStr3) *  0.0907308578592074)+((parseFloat(newStr3) *  0.0907308578592074) * tax))-(newStr3subtotaltax/12); 
        const monthlyInstallment1fixed = monthlyInstallment.toFixed(0);
        replacedmonthlyInstallment1fixed=monthlyInstallment1fixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
      

        
        let monthlyInstallmentBalance = (((parseFloat(newStr3subtotaltax)+ parseFloat(newStr3llp)) * 0.0907308578592074) * 12) + parseFloat(newStr3pcf);
        const monthlyInstallmentBalancefixed = monthlyInstallmentBalance.toFixed(0);
        monthlyInstallmentBalanceCompleted=monthlyInstallmentBalancefixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        document.getElementById("totalContractPrice3").value = "₱ " +  monthlyInstallmentBalanceCompleted;

        
        const elementToHide322 = document.getElementById("dpPercentage");
        // Hide the element by setting its display property to 'none'
        elementToHide322.disabled = false;

        
        const dpPercentage2 = document.getElementById("dpPercentage2");
            // Hide the element by setting its display property to 'none'
            dpPercentage2.disabled = false;

            document.getElementById("dpPercentage2").value = "";
            let minimumDPPercentage = document.getElementById("minimumdpPercentage").value;
            document.getElementById("dpPercentage").value = minimumDPPercentage;
            document.getElementById("balance").value = "";
            
            document.getElementById("MI1").value = "";
            document.getElementById("MI2").value = "";

            
                                                
                        let tcpcomputeDP =  document.getElementById("totalContractPrice3").value;
                        let dpPercentagecomputedp =  document.getElementById("dpPercentage").value;
                        var tcpcomputeDPreplace = tcpcomputeDP.replace(/₱|,/g, '');


                        //computebalance
                        let computeBalance = parseFloat(tcpcomputeDPreplace) - (parseFloat(tcpcomputeDPreplace)*(parseFloat(dpPercentagecomputedp)/100));
                        let computeBalanceFixed = computeBalance.toFixed(0);
                        let replacedcomputeBalance = computeBalanceFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                        document.getElementById("balance").value = "₱ " + replacedcomputeBalance;
                        document.getElementById("totalBalance").value = "₱ " + replacedcomputeBalance;
                        //computepercentage
                        let computeDownpayment = parseFloat(tcpcomputeDPreplace)*(parseFloat(dpPercentagecomputedp)/100);
                        let computeBalanceFixed1 = computeDownpayment.toFixed(0);
                        let replacedcomputeBalance1 = computeBalanceFixed1.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                        document.getElementById("dpPercentage2").value = "₱ " + replacedcomputeBalance1;

        } 
        else if (NoOfMonths == "24") {
       
        document.getElementById("factorratePercentage").value = "17";
        document.getElementById("factorrate").value = "0.0494422640854967";
        var newStr3 = balance.replace(/₱|,/g, ''); 
        var newStr3llp = llp.replace(/₱|,/g, ''); 
        var newStr3pcf = pcf.replace(/₱|,/g, ''); 
        var newStr3downpayment = downpayment.replace(/₱|,/g, ''); 
        var newStr3subtotaltax = subtotaltax.replace(/₱|,/g, ''); 
        let monthlyInstallment = ((parseFloat(newStr3) *  0.0494422640854967)+((parseFloat(newStr3) *  0.0494422640854967) * tax))-(newStr3subtotaltax/24); 
        const monthlyInstallment1fixed = monthlyInstallment.toFixed(0);
        replacedmonthlyInstallment1fixed=monthlyInstallment1fixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
      

        
        let monthlyInstallmentBalance = (((parseFloat(newStr3subtotaltax)+ parseFloat(newStr3llp)) * 0.0494422640854967) * 24) + parseFloat(newStr3pcf);
        const monthlyInstallmentBalancefixed = monthlyInstallmentBalance.toFixed(0);
        monthlyInstallmentBalanceCompleted=monthlyInstallmentBalancefixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        document.getElementById("totalContractPrice3").value = "₱ " +  monthlyInstallmentBalanceCompleted;

        
        const elementToHide322 = document.getElementById("dpPercentage");
        // Hide the element by setting its display property to 'none'
        elementToHide322.disabled = false;

        
        const dpPercentage2 = document.getElementById("dpPercentage2");
            // Hide the element by setting its display property to 'none'
            dpPercentage2.disabled = false;

            document.getElementById("dpPercentage2").value = "";
            let minimumDPPercentage = document.getElementById("minimumdpPercentage").value;
            document.getElementById("dpPercentage").value = minimumDPPercentage;
            document.getElementById("balance").value = "";
            
            document.getElementById("MI1").value = "";
            document.getElementById("MI2").value = "";

            
                                                
                        let tcpcomputeDP =  document.getElementById("totalContractPrice3").value;
                        let dpPercentagecomputedp =  document.getElementById("dpPercentage").value;
                        var tcpcomputeDPreplace = tcpcomputeDP.replace(/₱|,/g, '');


                        //computebalance
                        let computeBalance = parseFloat(tcpcomputeDPreplace) - (parseFloat(tcpcomputeDPreplace)*(parseFloat(dpPercentagecomputedp)/100));
                        let computeBalanceFixed = computeBalance.toFixed(0);
                        let replacedcomputeBalance = computeBalanceFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                        document.getElementById("balance").value = "₱ " + replacedcomputeBalance;
                        document.getElementById("totalBalance").value = "₱ " + replacedcomputeBalance;
                        //computepercentage
                        let computeDownpayment = parseFloat(tcpcomputeDPreplace)*(parseFloat(dpPercentagecomputedp)/100);
                        let computeBalanceFixed1 = computeDownpayment.toFixed(0);
                        let replacedcomputeBalance1 = computeBalanceFixed1.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                        document.getElementById("dpPercentage2").value = "₱ " + replacedcomputeBalance1;
        } 
        else if (NoOfMonths == "36") {
       
        document.getElementById("factorratePercentage").value = "18";
        document.getElementById("factorrate").value = "0.036152395535917";
        var newStr3 = balance.replace(/₱|,/g, ''); 
        var newStr3llp = llp.replace(/₱|,/g, ''); 
        var newStr3pcf = pcf.replace(/₱|,/g, ''); 
        var newStr3downpayment = downpayment.replace(/₱|,/g, ''); 
        var newStr3subtotaltax = subtotaltax.replace(/₱|,/g, ''); 
        let monthlyInstallment = ((parseFloat(newStr3) *  0.036152395535917)+((parseFloat(newStr3) *  0.036152395535917) * tax))-(newStr3subtotaltax/36); 
        const monthlyInstallment1fixed = monthlyInstallment.toFixed(0);
        replacedmonthlyInstallment1fixed=monthlyInstallment1fixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
      

        
        let monthlyInstallmentBalance = (((parseFloat(newStr3subtotaltax)+ parseFloat(newStr3llp)) * 0.036152395535917) * 36) + parseFloat(newStr3pcf);
        const monthlyInstallmentBalancefixed = monthlyInstallmentBalance.toFixed(0);
        monthlyInstallmentBalanceCompleted=monthlyInstallmentBalancefixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        document.getElementById("totalContractPrice3").value = "₱ " +  monthlyInstallmentBalanceCompleted;

        
        const elementToHide322 = document.getElementById("dpPercentage");
        // Hide the element by setting its display property to 'none'
        elementToHide322.disabled = false;

            document.getElementById("dpPercentage2").value = "";
            let minimumDPPercentage = document.getElementById("minimumdpPercentage").value;
            document.getElementById("dpPercentage").value = minimumDPPercentage;
            document.getElementById("balance").value = "";
            
            document.getElementById("MI1").value = "";
            document.getElementById("MI2").value = "";

            
                                                
            let tcpcomputeDP =  document.getElementById("totalContractPrice3").value;
                        let dpPercentagecomputedp =  document.getElementById("dpPercentage").value;
                        var tcpcomputeDPreplace = tcpcomputeDP.replace(/₱|,/g, '');


                        //computebalance
                        let computeBalance = parseFloat(tcpcomputeDPreplace) - (parseFloat(tcpcomputeDPreplace)*(parseFloat(dpPercentagecomputedp)/100));
                        let computeBalanceFixed = computeBalance.toFixed(0);
                        let replacedcomputeBalance = computeBalanceFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                        document.getElementById("balance").value = "₱ " + replacedcomputeBalance;
                        document.getElementById("totalBalance").value = "₱ " + replacedcomputeBalance;
                        //computepercentage
                        let computeDownpayment = parseFloat(tcpcomputeDPreplace)*(parseFloat(dpPercentagecomputedp)/100);
                        let computeBalanceFixed1 = computeDownpayment.toFixed(0);
                        let replacedcomputeBalance1 = computeBalanceFixed1.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                        document.getElementById("dpPercentage2").value = "₱ " + replacedcomputeBalance1;

        } 
        else if (NoOfMonths == "48") {
        document.getElementById("factorratePercentage").value = "20";
        document.getElementById("factorrate").value = "0.030430362343858";
        var newStr3 = balance.replace(/₱|,/g, ''); 
        var newStr3llp = llp.replace(/₱|,/g, ''); 
        var newStr3pcf = pcf.replace(/₱|,/g, ''); 
        var newStr3downpayment = downpayment.replace(/₱|,/g, ''); 
        var newStr3subtotaltax = subtotaltax.replace(/₱|,/g, ''); 
        let monthlyInstallment = ((parseFloat(newStr3) *  0.030430362343858)+((parseFloat(newStr3) *  0.030430362343858) * tax))-(newStr3subtotaltax/48); 
        const monthlyInstallment1fixed = monthlyInstallment.toFixed(0);
        replacedmonthlyInstallment1fixed=monthlyInstallment1fixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
      

        
        let monthlyInstallmentBalance = (((parseFloat(newStr3subtotaltax)+ parseFloat(newStr3llp)) * 0.030430362343858) * 48) + parseFloat(newStr3pcf);
        const monthlyInstallmentBalancefixed = monthlyInstallmentBalance.toFixed(0);
        monthlyInstallmentBalanceCompleted=monthlyInstallmentBalancefixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        document.getElementById("totalContractPrice3").value = "₱ " +  monthlyInstallmentBalanceCompleted;

        
        const elementToHide322 = document.getElementById("dpPercentage");
        // Hide the element by setting its display property to 'none'
        elementToHide322.disabled = false;

        
        const dpPercentage2 = document.getElementById("dpPercentage2");
            // Hide the element by setting its display property to 'none'
            dpPercentage2.disabled = false;

            document.getElementById("dpPercentage2").value = "";
            let minimumDPPercentage = document.getElementById("minimumdpPercentage").value;
            document.getElementById("dpPercentage").value = minimumDPPercentage;
            document.getElementById("balance").value = "";

            document.getElementById("MI1").value = "";
            document.getElementById("MI2").value = "";

            
                                                
            let tcpcomputeDP =  document.getElementById("totalContractPrice3").value;
                        let dpPercentagecomputedp =  document.getElementById("dpPercentage").value;
                        var tcpcomputeDPreplace = tcpcomputeDP.replace(/₱|,/g, '');


                        //computebalance
                        let computeBalance = parseFloat(tcpcomputeDPreplace) - (parseFloat(tcpcomputeDPreplace)*(parseFloat(dpPercentagecomputedp)/100));
                        let computeBalanceFixed = computeBalance.toFixed(0);
                        let replacedcomputeBalance = computeBalanceFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                        document.getElementById("balance").value = "₱ " + replacedcomputeBalance;
                        document.getElementById("totalBalance").value = "₱ " + replacedcomputeBalance;
                        //computepercentage
                        let computeDownpayment = parseFloat(tcpcomputeDPreplace)*(parseFloat(dpPercentagecomputedp)/100);
                        let computeBalanceFixed1 = computeDownpayment.toFixed(0);
                        let replacedcomputeBalance1 = computeBalanceFixed1.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                        document.getElementById("dpPercentage2").value = "₱ " + replacedcomputeBalance1;

        } 
        else if (NoOfMonths == "60") { 
        document.getElementById("factorratePercentage").value = "22";
        document.getElementById("factorrate").value = "0.0276189120353598";
        var newStr3 = balance.replace(/₱|,/g, ''); 
        var newStr3llp = llp.replace(/₱|,/g, ''); 
        var newStr3pcf = pcf.replace(/₱|,/g, ''); 
        var newStr3downpayment = downpayment.replace(/₱|,/g, ''); 
        var newStr3subtotaltax = subtotaltax.replace(/₱|,/g, ''); 
        let monthlyInstallment = ((parseFloat(newStr3) *  0.0276189120353598)+((parseFloat(newStr3) *  0.0276189120353598) * tax))-(newStr3subtotaltax/60); 
        const monthlyInstallment1fixed = monthlyInstallment.toFixed(0);
        replacedmonthlyInstallment1fixed=monthlyInstallment1fixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
      

        
        let monthlyInstallmentBalance = (((parseFloat(newStr3subtotaltax)+ parseFloat(newStr3llp)) * 0.0276189120353598) * 60) + parseFloat(newStr3pcf);
        const monthlyInstallmentBalancefixed = monthlyInstallmentBalance.toFixed(0);
        monthlyInstallmentBalanceCompleted=monthlyInstallmentBalancefixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        document.getElementById("totalContractPrice3").value = "₱ " +  monthlyInstallmentBalanceCompleted;

        
        const elementToHide322 = document.getElementById("dpPercentage");
        // Hide the element by setting its display property to 'none'
        elementToHide322.disabled = false;

            document.getElementById("dpPercentage2").value = "";
            let minimumDPPercentage = document.getElementById("minimumdpPercentage").value;
            document.getElementById("dpPercentage").value = minimumDPPercentage;
            document.getElementById("balance").value = "";
           
            document.getElementById("MI1").value = "";
            document.getElementById("MI2").value = "";

            
                                                
            let tcpcomputeDP =  document.getElementById("totalContractPrice3").value;
                        let dpPercentagecomputedp =  document.getElementById("dpPercentage").value;
                        var tcpcomputeDPreplace = tcpcomputeDP.replace(/₱|,/g, '');


                        //computebalance
                        let computeBalance = parseFloat(tcpcomputeDPreplace) - (parseFloat(tcpcomputeDPreplace)*(parseFloat(dpPercentagecomputedp)/100));
                        let computeBalanceFixed = computeBalance.toFixed(0);
                        let replacedcomputeBalance = computeBalanceFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                        document.getElementById("balance").value = "₱ " + replacedcomputeBalance;
                        document.getElementById("totalBalance").value = "₱ " + replacedcomputeBalance;
                        //computepercentage
                        let computeDownpayment = parseFloat(tcpcomputeDPreplace)*(parseFloat(dpPercentagecomputedp)/100);
                        let computeBalanceFixed1 = computeDownpayment.toFixed(0);
                        let replacedcomputeBalance1 = computeBalanceFixed1.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                        document.getElementById("dpPercentage2").value = "₱ " + replacedcomputeBalance1;

        } 
        else if (NoOfMonths == "72") {
        document.getElementById("factorratePercentage").value = "24";
        document.getElementById("factorrate").value = "0.0263268307088938";
        var newStr3 = balance.replace(/₱|,/g, ''); 
        var newStr3llp = llp.replace(/₱|,/g, ''); 
        var newStr3pcf = pcf.replace(/₱|,/g, ''); 
        var newStr3downpayment = downpayment.replace(/₱|,/g, ''); 
        var newStr3subtotaltax = subtotaltax.replace(/₱|,/g, ''); 
        let monthlyInstallment = ((parseFloat(newStr3) *  0.0263268307088938)+((parseFloat(newStr3) *  0.0263268307088938) * tax))-(newStr3subtotaltax/72); 
        const monthlyInstallment1fixed = monthlyInstallment.toFixed(0);
        replacedmonthlyInstallment1fixed=monthlyInstallment1fixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
      

        
        let monthlyInstallmentBalance = (((parseFloat(newStr3subtotaltax)+ parseFloat(newStr3llp)) * 0.0263268307088938) * 72) + parseFloat(newStr3pcf);
        const monthlyInstallmentBalancefixed = monthlyInstallmentBalance.toFixed(0);
        monthlyInstallmentBalanceCompleted=monthlyInstallmentBalancefixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        document.getElementById("totalContractPrice3").value = "₱ " +  monthlyInstallmentBalanceCompleted;

        
        const elementToHide322 = document.getElementById("dpPercentage");
        // Hide the element by setting its display property to 'none'
        elementToHide322.disabled = false;

        
        const dpPercentage2 = document.getElementById("dpPercentage2");
            // Hide the element by setting its display property to 'none'
            dpPercentage2.disabled = false;

            document.getElementById("dpPercentage2").value = "";
            let minimumDPPercentage = document.getElementById("minimumdpPercentage").value;
            document.getElementById("dpPercentage").value = minimumDPPercentage;
            document.getElementById("balance").value = "";
            
            document.getElementById("MI1").value = "";
            document.getElementById("MI2").value = "";


                                                
            let tcpcomputeDP =  document.getElementById("totalContractPrice3").value;
                        let dpPercentagecomputedp =  document.getElementById("dpPercentage").value;
                        var tcpcomputeDPreplace = tcpcomputeDP.replace(/₱|,/g, '');


                        //computebalance
                        let computeBalance = parseFloat(tcpcomputeDPreplace) - (parseFloat(tcpcomputeDPreplace)*(parseFloat(dpPercentagecomputedp)/100));
                        let computeBalanceFixed = computeBalance.toFixed(0);
                        let replacedcomputeBalance = computeBalanceFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                        document.getElementById("balance").value = "₱ " + replacedcomputeBalance;
                        document.getElementById("totalBalance").value = "₱ " + replacedcomputeBalance;
                        //computepercentage
                        let computeDownpayment = parseFloat(tcpcomputeDPreplace)*(parseFloat(dpPercentagecomputedp)/100);
                        let computeBalanceFixed1 = computeDownpayment.toFixed(0);
                        let replacedcomputeBalance1 = computeBalanceFixed1.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                        document.getElementById("dpPercentage2").value = "₱ " + replacedcomputeBalance1;
        } 
        else if (NoOfMonths == "84") {
        
        document.getElementById("factorratePercentage").value = "24";
        document.getElementById("factorrate").value = "0.0246758117819474";
        var newStr3 = balance.replace(/₱|,/g, ''); 
        var newStr3llp = llp.replace(/₱|,/g, ''); 
        var newStr3pcf = pcf.replace(/₱|,/g, ''); 
        var newStr3downpayment = downpayment.replace(/₱|,/g, ''); 
        var newStr3subtotaltax = subtotaltax.replace(/₱|,/g, ''); 
        let monthlyInstallment = ((parseFloat(newStr3) *  0.0246758117819474)+((parseFloat(newStr3) *  0.0246758117819474) * tax))-(newStr3subtotaltax/84); 
        const monthlyInstallment1fixed = monthlyInstallment.toFixed(0);
        replacedmonthlyInstallment1fixed=monthlyInstallment1fixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
      

        
        let monthlyInstallmentBalance = (((parseFloat(newStr3subtotaltax)+ parseFloat(newStr3llp)) * 0.0246758117819474) * 84) + parseFloat(newStr3pcf);
        const monthlyInstallmentBalancefixed = monthlyInstallmentBalance.toFixed(0);
        monthlyInstallmentBalanceCompleted=monthlyInstallmentBalancefixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        document.getElementById("totalContractPrice3").value = "₱ " +  monthlyInstallmentBalanceCompleted;

        
        const elementToHide322 = document.getElementById("dpPercentage");
        // Hide the element by setting its display property to 'none'
        elementToHide322.disabled = false;

        
        const dpPercentage2 = document.getElementById("dpPercentage2");
            // Hide the element by setting its display property to 'none'
            dpPercentage2.disabled = false;

            document.getElementById("dpPercentage2").value = "";
            let minimumDPPercentage = document.getElementById("minimumdpPercentage").value;
            document.getElementById("dpPercentage").value = minimumDPPercentage;
            document.getElementById("balance").value = "";
            
            document.getElementById("MI1").value = "";
            document.getElementById("MI2").value = "";

            
                                                
            let tcpcomputeDP =  document.getElementById("totalContractPrice3").value;
                        let dpPercentagecomputedp =  document.getElementById("dpPercentage").value;
                        var tcpcomputeDPreplace = tcpcomputeDP.replace(/₱|,/g, '');


                        //computebalance
                        let computeBalance = parseFloat(tcpcomputeDPreplace) - (parseFloat(tcpcomputeDPreplace)*(parseFloat(dpPercentagecomputedp)/100));
                        let computeBalanceFixed = computeBalance.toFixed(0);
                        let replacedcomputeBalance = computeBalanceFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                        document.getElementById("balance").value = "₱ " + replacedcomputeBalance;
                        document.getElementById("totalBalance").value = "₱ " + replacedcomputeBalance;
                        //computepercentage
                        let computeDownpayment = parseFloat(tcpcomputeDPreplace)*(parseFloat(dpPercentagecomputedp)/100);
                        let computeBalanceFixed1 = computeDownpayment.toFixed(0);
                        let replacedcomputeBalance1 = computeBalanceFixed1.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                        document.getElementById("dpPercentage2").value = "₱ " + replacedcomputeBalance1;

        } 
        else if (NoOfMonths == "96") {
        document.getElementById("factorratePercentage").value = "24";
        document.getElementById("factorrate").value = "0.0235131274809127";
        var newStr3 = balance.replace(/₱|,/g, ''); 
        var newStr3llp = llp.replace(/₱|,/g, ''); 
        var newStr3pcf = pcf.replace(/₱|,/g, ''); 
        var newStr3downpayment = downpayment.replace(/₱|,/g, ''); 
        var newStr3subtotaltax = subtotaltax.replace(/₱|,/g, ''); 
        let monthlyInstallment = ((parseFloat(newStr3) *  0.0235131274809127)+((parseFloat(newStr3) *  0.0235131274809127) * tax))-(newStr3subtotaltax/96); 
        const monthlyInstallment1fixed = monthlyInstallment.toFixed(0);
        replacedmonthlyInstallment1fixed=monthlyInstallment1fixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
      

        
        let monthlyInstallmentBalance = (((parseFloat(newStr3subtotaltax)+ parseFloat(newStr3llp)) * 0.0235131274809127) * 96) + parseFloat(newStr3pcf);
        const monthlyInstallmentBalancefixed = monthlyInstallmentBalance.toFixed(0);
        monthlyInstallmentBalanceCompleted=monthlyInstallmentBalancefixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        document.getElementById("totalContractPrice3").value = "₱ " +  monthlyInstallmentBalanceCompleted;

        
        const elementToHide322 = document.getElementById("dpPercentage");
        // Hide the element by setting its display property to 'none'
        elementToHide322.disabled = false;

        
        const dpPercentage2 = document.getElementById("dpPercentage2");
            // Hide the element by setting its display property to 'none'
            dpPercentage2.disabled = false;

            document.getElementById("dpPercentage2").value = "";
            let minimumDPPercentage = document.getElementById("minimumdpPercentage").value;
            document.getElementById("dpPercentage").value = minimumDPPercentage;
            document.getElementById("balance").value = "";

            document.getElementById("MI1").value = "";
            document.getElementById("MI2").value = "";


                                                
            let tcpcomputeDP =  document.getElementById("totalContractPrice3").value;
                        let dpPercentagecomputedp =  document.getElementById("dpPercentage").value;
                        var tcpcomputeDPreplace = tcpcomputeDP.replace(/₱|,/g, '');


                        //computebalance
                        let computeBalance = parseFloat(tcpcomputeDPreplace) - (parseFloat(tcpcomputeDPreplace)*(parseFloat(dpPercentagecomputedp)/100));
                        let computeBalanceFixed = computeBalance.toFixed(0);
                        let replacedcomputeBalance = computeBalanceFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                        document.getElementById("balance").value = "₱ " + replacedcomputeBalance;
                        document.getElementById("totalBalance").value = "₱ " + replacedcomputeBalance;
                        //computepercentage
                        let computeDownpayment = parseFloat(tcpcomputeDPreplace)*(parseFloat(dpPercentagecomputedp)/100);
                        let computeBalanceFixed1 = computeDownpayment.toFixed(0);
                        let replacedcomputeBalance1 = computeBalanceFixed1.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                        document.getElementById("dpPercentage2").value = "₱ " + replacedcomputeBalance1;
        } 
        else if (NoOfMonths == "108") {      
        document.getElementById("factorratePercentage").value = "24";
        document.getElementById("factorrate").value = "0.0226708482940114";
        var newStr3 = balance.replace(/₱|,/g, ''); 
        var newStr3llp = llp.replace(/₱|,/g, ''); 
        var newStr3pcf = pcf.replace(/₱|,/g, ''); 
        var newStr3downpayment = downpayment.replace(/₱|,/g, ''); 
        var newStr3subtotaltax = subtotaltax.replace(/₱|,/g, ''); 
        let monthlyInstallment = ((parseFloat(newStr3) *  0.0226708482940114)+((parseFloat(newStr3) *  0.0226708482940114) * tax))-(newStr3subtotaltax/108); 
        const monthlyInstallment1fixed = monthlyInstallment.toFixed(0);
        replacedmonthlyInstallment1fixed=monthlyInstallment1fixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
      

        
        let monthlyInstallmentBalance = (((parseFloat(newStr3subtotaltax)+ parseFloat(newStr3llp)) * 0.0226708482940114) * 108) + parseFloat(newStr3pcf);
        const monthlyInstallmentBalancefixed = monthlyInstallmentBalance.toFixed(0);
        monthlyInstallmentBalanceCompleted=monthlyInstallmentBalancefixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        document.getElementById("totalContractPrice3").value = "₱ " +  monthlyInstallmentBalanceCompleted;

        
        const elementToHide322 = document.getElementById("dpPercentage");
        // Hide the element by setting its display property to 'none'
        elementToHide322.disabled = false;

            document.getElementById("dpPercentage2").value = "";
            let minimumDPPercentage = document.getElementById("minimumdpPercentage").value;
            document.getElementById("dpPercentage").value = minimumDPPercentage;
            document.getElementById("balance").value = "";
            
            document.getElementById("MI1").value = "";
            document.getElementById("MI2").value = "";


                                                
            let tcpcomputeDP =  document.getElementById("totalContractPrice3").value;
                        let dpPercentagecomputedp =  document.getElementById("dpPercentage").value;
                        var tcpcomputeDPreplace = tcpcomputeDP.replace(/₱|,/g, '');


                        //computebalance
                        let computeBalance = parseFloat(tcpcomputeDPreplace) - (parseFloat(tcpcomputeDPreplace)*(parseFloat(dpPercentagecomputedp)/100));
                        let computeBalanceFixed = computeBalance.toFixed(0);
                        let replacedcomputeBalance = computeBalanceFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                        document.getElementById("balance").value = "₱ " + replacedcomputeBalance;
                        document.getElementById("totalBalance").value = "₱ " + replacedcomputeBalance;
                        //computepercentage
                        let computeDownpayment = parseFloat(tcpcomputeDPreplace)*(parseFloat(dpPercentagecomputedp)/100);
                        let computeBalanceFixed1 = computeDownpayment.toFixed(0);
                        let replacedcomputeBalance1 = computeBalanceFixed1.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                        document.getElementById("dpPercentage2").value = "₱ " + replacedcomputeBalance1;
        } 
        else if (NoOfMonths == "120") {
        
        document.getElementById("factorratePercentage").value = "24";
        document.getElementById("factorrate").value = "0.022048096885833";
        var newStr3 = balance.replace(/₱|,/g, ''); 
        var newStr3llp = llp.replace(/₱|,/g, ''); 
        var newStr3pcf = pcf.replace(/₱|,/g, ''); 
        var newStr3downpayment = downpayment.replace(/₱|,/g, ''); 
        var newStr3subtotaltax = subtotaltax.replace(/₱|,/g, ''); 
        let monthlyInstallment = ((parseFloat(newStr3) *  0.022048096885833)+((parseFloat(newStr3) *  0.022048096885833) * tax))-(newStr3subtotaltax/120); 
        const monthlyInstallment1fixed = monthlyInstallment.toFixed(0);
        replacedmonthlyInstallment1fixed=monthlyInstallment1fixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
      

        
        let monthlyInstallmentBalance = (((parseFloat(newStr3subtotaltax)+ parseFloat(newStr3llp)) * 0.022048096885833) * 120) + parseFloat(newStr3pcf);
        const monthlyInstallmentBalancefixed = monthlyInstallmentBalance.toFixed(0);
        monthlyInstallmentBalanceCompleted=monthlyInstallmentBalancefixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        document.getElementById("totalContractPrice3").value = "₱ " +  monthlyInstallmentBalanceCompleted;

        
        const elementToHide322 = document.getElementById("dpPercentage");
        // Hide the element by setting its display property to 'none'
        elementToHide322.disabled = false;

        
        const dpPercentage2 = document.getElementById("dpPercentage2");
        // Hide the element by setting its display property to 'none'
        dpPercentage2.disabled = false;

            document.getElementById("dpPercentage2").value = "";
            let minimumDPPercentage = document.getElementById("minimumdpPercentage").value;
            document.getElementById("dpPercentage").value = minimumDPPercentage;
            document.getElementById("balance").value = "";

            document.getElementById("MI1").value = "";
            document.getElementById("MI2").value = "";

            
                                                
            let tcpcomputeDP =  document.getElementById("totalContractPrice3").value;
                        let dpPercentagecomputedp =  document.getElementById("dpPercentage").value;
                        var tcpcomputeDPreplace = tcpcomputeDP.replace(/₱|,/g, '');


                        //computebalance
                        let computeBalance = parseFloat(tcpcomputeDPreplace) - (parseFloat(tcpcomputeDPreplace)*(parseFloat(dpPercentagecomputedp)/100));
                        let computeBalanceFixed = computeBalance.toFixed(0);
                        let replacedcomputeBalance = computeBalanceFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                        document.getElementById("balance").value = "₱ " + replacedcomputeBalance;
                        document.getElementById("totalBalance").value = "₱ " + replacedcomputeBalance;
                        //computepercentage
                        let computeDownpayment = parseFloat(tcpcomputeDPreplace)*(parseFloat(dpPercentagecomputedp)/100);
                        let computeBalanceFixed1 = computeDownpayment.toFixed(0);
                        let replacedcomputeBalance1 = computeBalanceFixed1.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                        document.getElementById("dpPercentage2").value = "₱ " + replacedcomputeBalance1;

        } 
        else{
          
            // Discount
           
            let discount =  document.getElementById("discounts1").value;
            var newStr3llp = llp.replace(/₱|,/g, ''); 
            var newStr3pcf = pcf.replace(/₱|,/g, ''); 
            var newStr3subtotaltax = subtotaltax.replace(/₱|,/g, ''); 
            var subtotalDiscount = (parseFloat(newStr3llp) + parseFloat(newStr3subtotaltax))* parseFloat(discount);
            let monthlyInstallment = (parseFloat(newStr3llp) + parseFloat(newStr3pcf) + parseFloat(newStr3subtotaltax)) - parseFloat(subtotalDiscount); 
            const monthlyInstallment1fixed = monthlyInstallment.toFixed(0);
            replacedmonthlyInstallment1fixed=monthlyInstallment1fixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            document.getElementById("totalContractPrice3").value = "₱ " +  replacedmonthlyInstallment1fixed;

            document.getElementById("dpPercentage2").value = "";
            let minimumDPPercentage = document.getElementById("minimumdpPercentage").value;
            document.getElementById("dpPercentage").value = minimumDPPercentage;
            document.getElementById("balance").value = "";
            document.getElementById("MI1").value = "";
            document.getElementById("MI2").value = "";
            document.getElementById("factorratePercentage").value = "";
            document.getElementById("factorrate").value = "";

        
        }


  
     }
        function interestCompute() {
        let Interest=  document.getElementById("inputInterest1").value;
        let percentageCompute = 100 - Interest;
        let percentageComputefixed = percentageCompute.toFixed(0);
        document.getElementById("inputPrincipal1").value = percentageComputefixed;
    }
    function principalCompute() {
        let Principal=  document.getElementById("inputPrincipal1").value;
        let PrincipalCompute = 100 - Principal;
        let PrincipalComputefixed = PrincipalCompute.toFixed(0);
        document.getElementById("inputInterest1").value = PrincipalComputefixed;
    }
     
    function interestCompute1() {
        let Interest=  document.getElementById("inputInterest2").value;
        let percentageCompute = 100 - Interest;
        let percentageComputefixed = percentageCompute.toFixed(0);
        document.getElementById("inputPrincipal2").value = percentageComputefixed;
    }
    function principalCompute1() {
        let Principal=  document.getElementById("inputPrincipal2").value;
        let PrincipalCompute = 100 - Principal;
        let PrincipalComputefixed = PrincipalCompute.toFixed(0);
        document.getElementById("inputInterest2").value = PrincipalComputefixed;
    }
    </script>

      
    <script>
            $("input[data-type='currency']").on({
                keyup: function() {
                  formatCurrency($(this));
                },
               
                blur: function() { 
                  formatCurrency($(this), "blur");
                }
            });
           
            
            function formatNumber(n) {
              // format number 1000000 to 1,234,567
              return n.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",")
            }
            
          
            
            function formatCurrency(input, blur) {
              // appends $ to value, validates decimal side
              // and puts cursor back in right position.
              
              // get input value
              var input_val = input.val();
              
              // don't validate empty input
              if (input_val === "") { return; }
              
              // original length
              var original_len = input_val.length;
            
              // initial caret position 
              var caret_pos = input.prop("selectionStart");
                
              // check for decimal
              if (input_val.indexOf(".") >= 0) {
            
                // get position of first decimal
                // this prevents multiple decimals from
                // being entered
                var decimal_pos = input_val.indexOf(".");
            
                // split number by decimal point
                var left_side = input_val.substring(0, decimal_pos);
                var right_side = input_val.substring(decimal_pos);
            
                // add commas to left side of number
                left_side = formatNumber(left_side);
            
                // validate right side
                right_side = formatNumber(right_side);
                
                // On blur make sure 2 numbers after decimal
                if (blur === "blur") {
                  right_side += "00";
                }
                
                // Limit decimal to only 2 digits
                right_side = right_side.substring(0, 2);
            
                // join number by .
                input_val = "₱ " + left_side + "." + right_side;
            
              } else {
                // no decimal entered
                // add commas to number
                // remove all non-digits
                input_val = formatNumber(input_val);
                input_val = "₱ " + input_val;
                
                // final formatting
                if (blur === "blur") {
                  input_val += ".00";
                }
              }
              
              // send updated string to input
              input.val(input_val);
            
              // put caret back in the right position
              var updated_len = input_val.length;
              caret_pos = updated_len - original_len + caret_pos;
              input[0].setSelectionRange(caret_pos, caret_pos);
            };
            
          
        
    </script>
       
<script>
            document.getElementById('terms').addEventListener('change', function() {
            var selectedValue = this.value; 
            // Get the selected value
            if ("PreNeedPrice" === selectedValue) {
            var tdElement = document.getElementById('PreNeedPrice');
            // Change the text content
            tdElement.textContent = 'Total Contract Price :';

            const elementToHide322 = document.getElementById("dpPercentage");
            // Hide the element by setting its display property to 'none'
            elementToHide322.disabled = false;

            
            const dpPercentage = document.getElementById("dpPercentage2");
            // Hide the element by setting its display property to 'none'
            dpPercentage.disabled = false;
            
            const elementToHide2 = document.querySelector('#monthlyInstallmenttr');
            // Hide the element by setting its display property to 'none'
            elementToHide2.style.display = 'none';
            
            const monthlyInstallmenttr21 = document.querySelector('#monthlyInstallmenttr2');
            // Hide the element by setting its display property to 'none'
            monthlyInstallmenttr21.style.display = 'none';
            
            const elementToHide3 = document.querySelector('#factorRatetr');
            // Hide the element by setting its display property to 'none'
            elementToHide3.style.display = 'none';
            const elementToHide4 = document.querySelector('#noYearstr');
            // Hide the element by setting its display property to 'none'
            elementToHide4.style.display = 'none';
            
                        let dpPercentage1 =  document.getElementById("dpPercentage").value;
                        let a12 =  document.getElementById("taxs1").value;
                        let tcp1 =  document.getElementById("totalContractPrice3").value;
                        let lotListPrice =  document.getElementById("lotListPrice").value;
                        let discount =  document.getElementById("discounts1").value;
                        let pcf =  document.getElementById("pcf").value;

                        var newStr2lotListPrice = lotListPrice.replace(/₱|,/g, ''); 
                        var newStr2pcf = pcf.replace(/₱|,/g, ''); 
                        // VAT
                        var subtotaltax = parseFloat(newStr2lotListPrice) * parseFloat(a12);
                        let subtotaltaxFixed = subtotaltax.toFixed(2);
                        let subtotaltaxComplete = subtotaltaxFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                        document.getElementById("subtotaltax").value =  "₱ " + subtotaltaxComplete;
                        // Discount
                        var subtotalDiscount = (parseFloat(newStr2lotListPrice) + parseFloat(subtotaltax))* parseFloat(discount);
                        let subtotalDiscountFixed = subtotalDiscount.toFixed(2);
                        let subtotalDiscountComplete = subtotalDiscountFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                        document.getElementById("subtotalDiscount").value =  "₱ " + subtotalDiscountComplete;
                        // TCP
                        var totalContractPrice = parseFloat(newStr2lotListPrice) + parseFloat(subtotaltax) + parseFloat(newStr2pcf) - parseFloat(subtotalDiscount);
                        let totalContractPriceFixed = totalContractPrice.toFixed(2);
                        let totalContractPriceComplete = totalContractPriceFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                        document.getElementById("totalContractPrice3").value =  "₱ " + totalContractPriceComplete;
                        let pcfComplete = pcf.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                        document.getElementById("pcf").value = pcfComplete;

                        
                        document.getElementById("balance1").value = "";
                        document.getElementById("dpPercentage2").value = "";
            let minimumDPPercentage = document.getElementById("minimumdpPercentage").value;
            document.getElementById("dpPercentage").value = minimumDPPercentage;

            
                                                
                        let tcpcomputeDP =  document.getElementById("totalContractPrice3").value;
                        let dpPercentagecomputedp =  document.getElementById("dpPercentage").value;
                        var tcpcomputeDPreplace = tcpcomputeDP.replace(/₱|,/g, '');


                        //computebalance
                        let computeBalance = parseFloat(tcpcomputeDPreplace) - (parseFloat(tcpcomputeDPreplace)*(parseFloat(dpPercentagecomputedp)/100));
                        let computeBalanceFixed = computeBalance.toFixed(0);
                        let replacedcomputeBalance = computeBalanceFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                        document.getElementById("balance").value = "₱ " + replacedcomputeBalance;
                        document.getElementById("totalBalance").value = "₱ " + replacedcomputeBalance;
                        //computepercentage
                        let computeDownpayment = parseFloat(tcpcomputeDPreplace)*(parseFloat(dpPercentagecomputedp)/100);
                        let computeBalanceFixed1 = computeDownpayment.toFixed(0);
                        let replacedcomputeBalance1 = computeBalanceFixed1.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                        document.getElementById("dpPercentage2").value = "₱ " + replacedcomputeBalance1;
                        
            }
            
            if ("AtNeedPrice" === selectedValue) {
            var tdElement = document.getElementById('PreNeedPrice');
            // Change the text content
            tdElement.textContent = 'At-Need TCP :';
            const elementToHide2 = document.querySelector('#monthlyInstallmenttr');
            // Hide the element by setting its display property to 'none'
            elementToHide2.style.display = 'none';
            
            const elementToHide3 = document.querySelector('#factorRatetr');
            // Hide the element by setting its display property to 'none'
            elementToHide3.style.display = 'none';
            const elementToHide4 = document.querySelector('#noYearstr');
            // Hide the element by setting its display property to 'none'
            elementToHide4.style.display = 'none';

            
            const elementToHide322 = document.getElementById("dpPercentage");
            // Hide the element by setting its display property to 'none'
            elementToHide322.disabled = false;

                        
            const dpPercentage = document.getElementById("dpPercentage2");
            // Hide the element by setting its display property to 'none'
            dpPercentage.disabled = false;
            
            const monthlyInstallmenttr21 = document.querySelector('#monthlyInstallmenttr2');
            // Hide the element by setting its display property to 'none'
            monthlyInstallmenttr21.style.display = 'none';
            
            let preNeedPrice =  document.getElementById("totalContractPrice3").value;
            let markup =  document.getElementById("markup").value;

            var newStr2preNeedPrice = preNeedPrice.replace(/₱|,/g, ''); 
            var atNeedPrice = parseFloat(newStr2preNeedPrice) * parseFloat(markup);
            let atNeedPriceFixed = atNeedPrice.toFixed(0);
            let atNeedPriceComplete = atNeedPriceFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            document.getElementById("totalContractPrice3").value =  "₱ " + atNeedPriceComplete;

            
            document.getElementById("balance1").value = "";
            document.getElementById("dpPercentage2").value = "";
            let minimumDPPercentage = document.getElementById("minimumdpPercentage").value;
            document.getElementById("dpPercentage").value = minimumDPPercentage;

            
                                                
                        let tcpcomputeDP =  document.getElementById("totalContractPrice3").value;
                        let dpPercentagecomputedp =  document.getElementById("dpPercentage").value;
                        var tcpcomputeDPreplace = tcpcomputeDP.replace(/₱|,/g, '');


                        //computebalance
                        let computeBalance = parseFloat(tcpcomputeDPreplace) - (parseFloat(tcpcomputeDPreplace)*(parseFloat(dpPercentagecomputedp)/100));
                        let computeBalanceFixed = computeBalance.toFixed(0);
                        let replacedcomputeBalance = computeBalanceFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                        document.getElementById("balance").value = "₱ " + replacedcomputeBalance;
                        document.getElementById("totalBalance").value = "₱ " + replacedcomputeBalance;
                        //computepercentage
                        let computeDownpayment = parseFloat(tcpcomputeDPreplace)*(parseFloat(dpPercentagecomputedp)/100);
                        let computeBalanceFixed1 = computeDownpayment.toFixed(0);
                        let replacedcomputeBalance1 = computeBalanceFixed1.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                        document.getElementById("dpPercentage2").value = "₱ " + replacedcomputeBalance1;
                        
            }
            if ("SpotCash" === selectedValue) {
            var tdElement = document.getElementById('PreNeedPrice');
            // Change the text content
            tdElement.textContent = 'Total Contract Price :';
            const elementToHide2 = document.querySelector('#monthlyInstallmenttr');
            // Hide the element by setting its display property to 'none'
            elementToHide2.style.display = 'none';

            const elementToHide322 = document.getElementById("dpPercentage");
            // Hide the element by setting its display property to 'none'
            elementToHide322.disabled = false;
            
            
            const dpPercentage = document.getElementById("dpPercentage2");
            // Hide the element by setting its display property to 'none'
            dpPercentage.disabled = false;
            
            const monthlyInstallmenttr21 = document.querySelector('#monthlyInstallmenttr2');
            // Hide the element by setting its display property to 'none'
            monthlyInstallmenttr21.style.display = 'none';
            
            const elementToHide3 = document.querySelector('#factorRatetr');
            // Hide the element by setting its display property to 'none'
            elementToHide3.style.display = 'none';
            const elementToHide4 = document.querySelector('#noYearstr');
            // Hide the element by setting its display property to 'none'
            elementToHide4.style.display = 'none';
                        let dpPercentage1 =  document.getElementById("dpPercentage").value;
                        let a12 =  document.getElementById("taxs1").value;
                        let tcp1 =  document.getElementById("totalContractPrice3").value;
                        let lotListPrice =  document.getElementById("lotListPrice").value;
                        let discount =  document.getElementById("discounts1").value;
                        let pcf =  document.getElementById("pcf").value;

                        var newStr2lotListPrice = lotListPrice.replace(/₱|,/g, ''); 
                        var newStr2pcf = pcf.replace(/₱|,/g, ''); 
                        // VAT
                        var subtotaltax = parseFloat(newStr2lotListPrice) * parseFloat(a12);
                        let subtotaltaxFixed = subtotaltax.toFixed(2);
                        let subtotaltaxComplete = subtotaltaxFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                        document.getElementById("subtotaltax").value =  "₱ " + subtotaltaxComplete;
                        // Discount
                        var subtotalDiscount = (parseFloat(newStr2lotListPrice) + parseFloat(subtotaltax))* parseFloat(discount);
                        let subtotalDiscountFixed = subtotalDiscount.toFixed(2);
                        let subtotalDiscountComplete = subtotalDiscountFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                        document.getElementById("subtotalDiscount").value =  "₱ " + subtotalDiscountComplete;
                        // TCP
                        var totalContractPrice = parseFloat(newStr2lotListPrice) + parseFloat(subtotaltax) + parseFloat(newStr2pcf) - parseFloat(subtotalDiscount);
                        let totalContractPriceFixed = totalContractPrice.toFixed(2);
                        let totalContractPriceComplete = totalContractPriceFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                        document.getElementById("totalContractPrice3").value =  "₱ " + totalContractPriceComplete;
                        let pcfComplete = pcf.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                        document.getElementById("pcf").value = pcfComplete;

                        
                        document.getElementById("balance1").value = "";
                        document.getElementById("dpPercentage2").value = "";
            let minimumDPPercentage = document.getElementById("minimumdpPercentage").value;
            document.getElementById("dpPercentage").value = minimumDPPercentage;

            
                                                
                        let tcpcomputeDP =  document.getElementById("totalContractPrice3").value;
                        let dpPercentagecomputedp =  document.getElementById("dpPercentage").value;
                        var tcpcomputeDPreplace = tcpcomputeDP.replace(/₱|,/g, '');


                        //computebalance
                        let computeBalance = parseFloat(tcpcomputeDPreplace) - (parseFloat(tcpcomputeDPreplace)*(parseFloat(dpPercentagecomputedp)/100));
                        let computeBalanceFixed = computeBalance.toFixed(0);
                        let replacedcomputeBalance = computeBalanceFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                        document.getElementById("balance").value = "₱ " + replacedcomputeBalance;
                        document.getElementById("totalBalance").value = "₱ " + replacedcomputeBalance;
                        //computepercentage
                        let computeDownpayment = parseFloat(tcpcomputeDPreplace)*(parseFloat(dpPercentagecomputedp)/100);
                        let computeBalanceFixed1 = computeDownpayment.toFixed(0);
                        let replacedcomputeBalance1 = computeBalanceFixed1.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                        document.getElementById("dpPercentage2").value = "₱ " + replacedcomputeBalance1;
                        
            }
            if ("M_Cash" === selectedValue) {
            var tdElement = document.getElementById('PreNeedPrice');
            // Change the text content
            tdElement.textContent = 'Total Contract Price :';
            const elementToHide322 = document.getElementById("dpPercentage");
                        // Hide the element by setting its display property to 'none'
                        elementToHide322.disabled = false;
            const elementToHide2 = document.querySelector('#monthlyInstallmenttr');
            // Hide the element by setting its display property to 'none'
            elementToHide2.style.display = 'none';
            const elementToHide3 = document.querySelector('#factorRatetr');
            // Hide the element by setting its display property to 'none'
            elementToHide3.style.display = 'none';

            
            const dpPercentage = document.getElementById("dpPercentage2");
            // Hide the element by setting its display property to 'none'
            dpPercentage.disabled = false;
            
            const monthlyInstallmenttr21 = document.querySelector('#monthlyInstallmenttr2');
            // Hide the element by setting its display property to 'none'
            monthlyInstallmenttr21.style.display = 'none';
            const elementToHide4 = document.querySelector('#noYearstr');
            // Hide the element by setting its display property to 'none'
            elementToHide4.style.display = 'none';
                        let dpPercentage1 =  document.getElementById("dpPercentage").value;
                        let a12 =  document.getElementById("taxs1").value;
                        let tcp1 =  document.getElementById("totalContractPrice3").value;
                        let lotListPrice =  document.getElementById("lotListPrice").value;
                        let discount =  document.getElementById("discounts1").value;
                        let pcf =  document.getElementById("pcf").value;

                        var newStr2lotListPrice = lotListPrice.replace(/₱|,/g, ''); 
                        var newStr2pcf = pcf.replace(/₱|,/g, ''); 
                        // VAT
                        var subtotaltax = parseFloat(newStr2lotListPrice) * parseFloat(a12);
                        let subtotaltaxFixed = subtotaltax.toFixed(2);
                        let subtotaltaxComplete = subtotaltaxFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                        document.getElementById("subtotaltax").value =  "₱ " + subtotaltaxComplete;
                        // Discount
                        var subtotalDiscount = (parseFloat(newStr2lotListPrice) + parseFloat(subtotaltax))* parseFloat(discount);
                        let subtotalDiscountFixed = subtotalDiscount.toFixed(2);
                        let subtotalDiscountComplete = subtotalDiscountFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                        document.getElementById("subtotalDiscount").value =  "₱ " + subtotalDiscountComplete;
                        // TCP
                        var totalContractPrice = parseFloat(newStr2lotListPrice) + parseFloat(subtotaltax) + parseFloat(newStr2pcf) - parseFloat(subtotalDiscount);
                        let totalContractPriceFixed = totalContractPrice.toFixed(2);
                        let totalContractPriceComplete = totalContractPriceFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                        document.getElementById("totalContractPrice3").value =  "₱ " + totalContractPriceComplete;
                        let pcfComplete = pcf.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                        document.getElementById("pcf").value = pcfComplete;

                        
                        document.getElementById("balance1").value = "";
                        document.getElementById("dpPercentage2").value = "";
            let minimumDPPercentage = document.getElementById("minimumdpPercentage").value;
            document.getElementById("dpPercentage").value = minimumDPPercentage;

            
                                                
                        let tcpcomputeDP =  document.getElementById("totalContractPrice3").value;
                        let dpPercentagecomputedp =  document.getElementById("dpPercentage").value;
                        var tcpcomputeDPreplace = tcpcomputeDP.replace(/₱|,/g, '');


                        //computebalance
                        let computeBalance = parseFloat(tcpcomputeDPreplace) - (parseFloat(tcpcomputeDPreplace)*(parseFloat(dpPercentagecomputedp)/100));
                        let computeBalanceFixed = computeBalance.toFixed(0);
                        let replacedcomputeBalance = computeBalanceFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                        document.getElementById("balance").value = "₱ " + replacedcomputeBalance;
                        document.getElementById("totalBalance").value = "₱ " + replacedcomputeBalance;
                        //computepercentage
                        let computeDownpayment = parseFloat(tcpcomputeDPreplace)*(parseFloat(dpPercentagecomputedp)/100);
                        let computeBalanceFixed1 = computeDownpayment.toFixed(0);
                        let replacedcomputeBalance1 = computeBalanceFixed1.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                        document.getElementById("dpPercentage2").value = "₱ " + replacedcomputeBalance1;
                        

            }
                        if ("Installment" === selectedValue) {
                        var tdElement = document.getElementById('PreNeedPrice');
                        // Change the text content
                        tdElement.textContent = 'Total Contract Price :';
                        const monthlyInstallmenttr = document.getElementById("monthlyInstallmenttr");
                        // Hide the element by setting its display property to 'none'
                        monthlyInstallmenttr.style.display = 'table-row';
            
                        
            
                        const monthlyInstallmenttr21 = document.querySelector('#monthlyInstallmenttr2');
                        // Hide the element by setting its display property to 'none'
                        monthlyInstallmenttr21.style.display = 'table-row';

                        const elementToHide322 = document.getElementById("dpPercentage");
                        // Hide the element by setting its display property to 'none'
                        elementToHide322.disabled = false;

                        
                        const dpPercentage = document.getElementById("dpPercentage2");
                        // Hide the element by setting its display property to 'none'
                        dpPercentage.disabled = true;

                        const elementToHide3 = document.querySelector('#factorRatetr');
                        // Hide the element by setting its display property to 'none'
                        elementToHide3.style.display = 'table-row';
                        const elementToHide4 = document.querySelector('#noYearstr');
                        // Hide the element by setting its display property to 'none'
                        elementToHide4.style.display = 'table-row';
                        let dpPercentage1 =  document.getElementById("dpPercentage").value;
                        let a12 =  document.getElementById("taxs1").value;
                        let tcp1 =  document.getElementById("totalContractPrice3").value;
                        let lotListPrice =  document.getElementById("lotListPrice").value;
                        let discount =  document.getElementById("discounts1").value;
                        let pcf =  document.getElementById("pcf").value;

                        var newStr2lotListPrice = lotListPrice.replace(/₱|,/g, ''); 
                        var newStr2pcf = pcf.replace(/₱|,/g, ''); 
                        // VAT
                        var subtotaltax = parseFloat(newStr2lotListPrice) * parseFloat(a12);
                        let subtotaltaxFixed = subtotaltax.toFixed(2);
                        let subtotaltaxComplete = subtotaltaxFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                        document.getElementById("subtotaltax").value =  "₱ " + subtotaltaxComplete;
                        // Discount
                        var subtotalDiscount = (parseFloat(newStr2lotListPrice) + parseFloat(subtotaltax))* parseFloat(discount);
                        let subtotalDiscountFixed = subtotalDiscount.toFixed(2);
                        let subtotalDiscountComplete = subtotalDiscountFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                        document.getElementById("subtotalDiscount").value =  "₱ " + subtotalDiscountComplete;
                        // pcf
                        let pcfComplete = pcf.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                        document.getElementById("pcf").value = pcfComplete;
                        document.getElementById("balance1").value = "";
                        document.getElementById("dpPercentage2").value = "";
                        let minimumDPPercentage = document.getElementById("minimumdpPercentage").value;
                        document.getElementById("dpPercentage").value = minimumDPPercentage;
                        document.getElementById("totalContractPrice3").value =  "";

                        

                        document.getElementById("balance").value = "";
                        document.getElementById("totalBalance").value = "";
                        //computepercentage
                        document.getElementById("dpPercentage2").value =  "";

            }
            
            
            });
        
</script>


<script>
            document.getElementById('cryptterms').addEventListener('change', function() {
            var selectedValue = this.value; 
            // Get the selected value
            if ("cryptPreNeedPrice" === selectedValue) {
            var tdElement = document.getElementById('cryptPreNeedPrice');
            // Change the text content
            tdElement.textContent = 'Total Contract Price :';

            const elementToHide322 = document.getElementById("cryptdpPercentage");
            // Hide the element by setting its display property to 'none'
            elementToHide322.disabled = false;

            
            const dpPercentage = document.getElementById("cryptdpPercentage2");
            // Hide the element by setting its display property to 'none'
            dpPercentage.disabled = false;
            
            const elementToHide2 = document.querySelector('#cryptmonthlyInstallmenttr');
            // Hide the element by setting its display property to 'none'
            elementToHide2.style.display = 'none';
            
            const monthlyInstallmenttr21 = document.querySelector('#cryptmonthlyInstallmenttr2');
            // Hide the element by setting its display property to 'none'
            monthlyInstallmenttr21.style.display = 'none';
            
            const elementToHide3 = document.querySelector('#cryptfactorRatetr');
            // Hide the element by setting its display property to 'none'
            elementToHide3.style.display = 'none';
            const elementToHide4 = document.querySelector('#cryptnoYearstr');
            // Hide the element by setting its display property to 'none'
            elementToHide4.style.display = 'none';
            
                        let dpPercentage1 =  document.getElementById("cryptdpPercentage").value;
                        let a12 =  document.getElementById("crypttaxs1").value;
                        let tcp1 =  document.getElementById("crypttotalContractPrice3").value;
                        let lotListPrice =  document.getElementById("cryptlotListPrice").value;
                        let discount =  document.getElementById("cryptdiscounts1").value;
                        let pcf =  document.getElementById("cryptpcf").value;

                        var newStr2lotListPrice = lotListPrice.replace(/₱|,/g, ''); 
                        var newStr2pcf = pcf.replace(/₱|,/g, ''); 
                        // VAT
                        var subtotaltax = parseFloat(newStr2lotListPrice) * parseFloat(a12);
                        let subtotaltaxFixed = subtotaltax.toFixed(2);
                        let subtotaltaxComplete = subtotaltaxFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                        document.getElementById("cryptsubtotaltax").value =  "₱ " + subtotaltaxComplete;
                        // Discount
                        var subtotalDiscount = (parseFloat(newStr2lotListPrice) + parseFloat(subtotaltax))* parseFloat(discount);
                        let subtotalDiscountFixed = subtotalDiscount.toFixed(2);
                        let subtotalDiscountComplete = subtotalDiscountFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                        document.getElementById("cryptsubtotalDiscount").value =  "₱ " + subtotalDiscountComplete;
                        // TCP
                        var totalContractPrice = parseFloat(newStr2lotListPrice) + parseFloat(subtotaltax) + parseFloat(newStr2pcf) - parseFloat(subtotalDiscount);
                        let totalContractPriceFixed = totalContractPrice.toFixed(2);
                        let totalContractPriceComplete = totalContractPriceFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                        document.getElementById("crypttotalContractPrice3").value =  "₱ " + totalContractPriceComplete;
                        let pcfComplete = pcf.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                        document.getElementById("pcf").value = pcfComplete;

                        
                        document.getElementById("cryptbalance1").value = "";
                        document.getElementById("cryptdpPercentage2").value = "";
                        document.getElementById("cryptdpPercentage").value = "";
                        document.getElementById("cryptdpPercentage").value = "";
                        
            }
            
            if ("cryptAtNeedPrice" === selectedValue) {
            var tdElement = document.getElementById('cryptPreNeedPrice');
            // Change the text content
            tdElement.textContent = 'At-Need TCP :';
            const elementToHide2 = document.querySelector('#cryptmonthlyInstallmenttr');
            // Hide the element by setting its display property to 'none'
            elementToHide2.style.display = 'none';
            
            const elementToHide3 = document.querySelector('#cryptfactorRatetr');
            // Hide the element by setting its display property to 'none'
            elementToHide3.style.display = 'none';
            const elementToHide4 = document.querySelector('#cryptnoYearstr');
            // Hide the element by setting its display property to 'none'
            elementToHide4.style.display = 'none';

            
            const elementToHide322 = document.getElementById("cryptdpPercentage");
            // Hide the element by setting its display property to 'none'
            elementToHide322.disabled = false;

                        
            const dpPercentage = document.getElementById("cryptdpPercentage2");
            // Hide the element by setting its display property to 'none'
            dpPercentage.disabled = false;
            
            const monthlyInstallmenttr21 = document.querySelector('#cryptmonthlyInstallmenttr2');
            // Hide the element by setting its display property to 'none'
            monthlyInstallmenttr21.style.display = 'none';
            
            let preNeedPrice =  document.getElementById("crypttotalContractPrice3").value;
            let markup =  document.getElementById("cryptmarkup").value;

            var newStr2preNeedPrice = preNeedPrice.replace(/₱|,/g, ''); 
            var atNeedPrice = parseFloat(newStr2preNeedPrice) * parseFloat(markup);
            let atNeedPriceFixed = atNeedPrice.toFixed(0);
            let atNeedPriceComplete = atNeedPriceFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            document.getElementById("crypttotalContractPrice3").value =  "₱ " + atNeedPriceComplete;

            
            document.getElementById("cryptbalance1").value = "";
            document.getElementById("cryptdpPercentage2").value = "";
            document.getElementById("cryptdpPercentage").value = "";
            document.getElementById("cryptdpPercentage").value = "";
                        
            }
            if ("cryptSpotCash" === selectedValue) {
            var tdElement = document.getElementById('cryptPreNeedPrice');
            // Change the text content
            tdElement.textContent = 'Total Contract Price :';
            const elementToHide2 = document.querySelector('#cryptmonthlyInstallmenttr');
            // Hide the element by setting its display property to 'none'
            elementToHide2.style.display = 'none';

            const elementToHide322 = document.getElementById("cryptdpPercentage");
            // Hide the element by setting its display property to 'none'
            elementToHide322.disabled = false;
            
            
            const dpPercentage = document.getElementById("cryptdpPercentage2");
            // Hide the element by setting its display property to 'none'
            dpPercentage.disabled = false;
            
            const monthlyInstallmenttr21 = document.querySelector('#cryptmonthlyInstallmenttr2');
            // Hide the element by setting its display property to 'none'
            monthlyInstallmenttr21.style.display = 'none';
            
            const elementToHide3 = document.querySelector('#cryptfactorRatetr');
            // Hide the element by setting its display property to 'none'
            elementToHide3.style.display = 'none';
            const elementToHide4 = document.querySelector('#cryptnoYearstr');
            // Hide the element by setting its display property to 'none'
            elementToHide4.style.display = 'none';
                        let dpPercentage1 =  document.getElementById("cryptdpPercentage").value;
                        let a12 =  document.getElementById("crypttaxs1").value;
                        let tcp1 =  document.getElementById("crypttotalContractPrice3").value;
                        let lotListPrice =  document.getElementById("cryptlotListPrice").value;
                        let discount =  document.getElementById("cryptdiscounts1").value;
                        let pcf =  document.getElementById("cryptpcf").value;

                        var newStr2lotListPrice = lotListPrice.replace(/₱|,/g, ''); 
                        var newStr2pcf = pcf.replace(/₱|,/g, ''); 
                        // VAT
                        var subtotaltax = parseFloat(newStr2lotListPrice) * parseFloat(a12);
                        let subtotaltaxFixed = subtotaltax.toFixed(2);
                        let subtotaltaxComplete = subtotaltaxFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                        document.getElementById("cryptsubtotaltax").value =  "₱ " + subtotaltaxComplete;
                        // Discount
                        var subtotalDiscount = (parseFloat(newStr2lotListPrice) + parseFloat(subtotaltax))* parseFloat(discount);
                        let subtotalDiscountFixed = subtotalDiscount.toFixed(2);
                        let subtotalDiscountComplete = subtotalDiscountFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                        document.getElementById("cryptsubtotalDiscount").value =  "₱ " + subtotalDiscountComplete;
                        // TCP
                        var totalContractPrice = parseFloat(newStr2lotListPrice) + parseFloat(subtotaltax) + parseFloat(newStr2pcf) - parseFloat(subtotalDiscount);
                        let totalContractPriceFixed = totalContractPrice.toFixed(2);
                        let totalContractPriceComplete = totalContractPriceFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                        document.getElementById("crypttotalContractPrice3").value =  "₱ " + totalContractPriceComplete;
                        let pcfComplete = pcf.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                        document.getElementById("cryptpcf").value = pcfComplete;

                        
                        document.getElementById("cryptbalance1").value = "";
                        document.getElementById("cryptdpPercentage2").value = "";
                        document.getElementById("cryptdpPercentage").value = "";
                        document.getElementById("cryptdpPercentage").value = "";
                        
            }
            if ("cryptM_Cash" === selectedValue) {
            var tdElement = document.getElementById('cryptPreNeedPrice');
            // Change the text content
            tdElement.textContent = 'Total Contract Price :';
            const elementToHide322 = document.getElementById("cryptdpPercentage");
                        // Hide the element by setting its display property to 'none'
                        elementToHide322.disabled = false;
            const elementToHide2 = document.querySelector('#cryptmonthlyInstallmenttr');
            // Hide the element by setting its display property to 'none'
            elementToHide2.style.display = 'none';
            const elementToHide3 = document.querySelector('#cryptfactorRatetr');
            // Hide the element by setting its display property to 'none'
            elementToHide3.style.display = 'none';

            
            const dpPercentage = document.getElementById("cryptdpPercentage2");
            // Hide the element by setting its display property to 'none'
            dpPercentage.disabled = false;
            
            const monthlyInstallmenttr21 = document.querySelector('#cryptmonthlyInstallmenttr2');
            // Hide the element by setting its display property to 'none'
            monthlyInstallmenttr21.style.display = 'none';
            const elementToHide4 = document.querySelector('#cryptnoYearstr');
            // Hide the element by setting its display property to 'none'
            elementToHide4.style.display = 'none';
                        let dpPercentage1 =  document.getElementById("cryptdpPercentage").value;
                        let a12 =  document.getElementById("crypttaxs1").value;
                        let tcp1 =  document.getElementById("crypttotalContractPrice3").value;
                        let lotListPrice =  document.getElementById("cryptlotListPrice").value;
                        let discount =  document.getElementById("cryptdiscounts1").value;
                        let pcf =  document.getElementById("cryptpcf").value;

                        var newStr2lotListPrice = lotListPrice.replace(/₱|,/g, ''); 
                        var newStr2pcf = pcf.replace(/₱|,/g, ''); 
                        // VAT
                        var subtotaltax = parseFloat(newStr2lotListPrice) * parseFloat(a12);
                        let subtotaltaxFixed = subtotaltax.toFixed(2);
                        let subtotaltaxComplete = subtotaltaxFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                        document.getElementById("cryptsubtotaltax").value =  "₱ " + subtotaltaxComplete;
                        // Discount
                        var subtotalDiscount = (parseFloat(newStr2lotListPrice) + parseFloat(subtotaltax))* parseFloat(discount);
                        let subtotalDiscountFixed = subtotalDiscount.toFixed(2);
                        let subtotalDiscountComplete = subtotalDiscountFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                        document.getElementById("cryptsubtotalDiscount").value =  "₱ " + subtotalDiscountComplete;
                        // TCP
                        var totalContractPrice = parseFloat(newStr2lotListPrice) + parseFloat(subtotaltax) + parseFloat(newStr2pcf) - parseFloat(subtotalDiscount);
                        let totalContractPriceFixed = totalContractPrice.toFixed(2);
                        let totalContractPriceComplete = totalContractPriceFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                        document.getElementById("crypttotalContractPrice3").value =  "₱ " + totalContractPriceComplete;
                        let pcfComplete = pcf.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                        document.getElementById("cryptpcf").value = pcfComplete;

                        
                        document.getElementById("cryptbalance1").value = "";
                        document.getElementById("cryptdpPercentage2").value = "";
                        document.getElementById("cryptdpPercentage").value = "";
                        

            }
                        if ("cryptInstallment" === selectedValue) {
                        var tdElement = document.getElementById('cryptPreNeedPrice');
                        // Change the text content
                        tdElement.textContent = 'Total Contract Price :';
                        const monthlyInstallmenttr = document.getElementById("cryptmonthlyInstallmenttr");
                        // Hide the element by setting its display property to 'none'
                        monthlyInstallmenttr.style.display = 'table-row';
            
                        
            
                        const monthlyInstallmenttr21 = document.querySelector('#cryptmonthlyInstallmenttr2');
                        // Hide the element by setting its display property to 'none'
                        monthlyInstallmenttr21.style.display = 'table-row';

                        const elementToHide322 = document.getElementById("cryptdpPercentage");
                        // Hide the element by setting its display property to 'none'
                        elementToHide322.disabled = true;

                        
                        const dpPercentage = document.getElementById("cryptdpPercentage2");
                        // Hide the element by setting its display property to 'none'
                        dpPercentage.disabled = true;

                        const elementToHide3 = document.querySelector('#cryptfactorRatetr');
                        // Hide the element by setting its display property to 'none'
                        elementToHide3.style.display = 'table-row';
                        const elementToHide4 = document.querySelector('#cryptnoYearstr');
                        // Hide the element by setting its display property to 'none'
                        elementToHide4.style.display = 'table-row';
                        let dpPercentage1 =  document.getElementById("cryptdpPercentage").value;
                        let a12 =  document.getElementById("crypttaxs1").value;
                        let tcp1 =  document.getElementById("crypttotalContractPrice3").value;
                        let lotListPrice =  document.getElementById("cryptlotListPrice").value;
                        let discount =  document.getElementById("cryptdiscounts1").value;
                        let pcf =  document.getElementById("cryptpcf").value;

                        var newStr2lotListPrice = lotListPrice.replace(/₱|,/g, ''); 
                        var newStr2pcf = pcf.replace(/₱|,/g, ''); 
                        // VAT
                        var subtotaltax = parseFloat(newStr2lotListPrice) * parseFloat(a12);
                        let subtotaltaxFixed = subtotaltax.toFixed(2);
                        let subtotaltaxComplete = subtotaltaxFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                        document.getElementById("cryptsubtotaltax").value =  "₱ " + subtotaltaxComplete;
                        // Discount
                        var subtotalDiscount = (parseFloat(newStr2lotListPrice) + parseFloat(subtotaltax))* parseFloat(discount);
                        let subtotalDiscountFixed = subtotalDiscount.toFixed(2);
                        let subtotalDiscountComplete = subtotalDiscountFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                        document.getElementById("cryptsubtotalDiscount").value =  "₱ " + subtotalDiscountComplete;
                        // pcf
                        let pcfComplete = pcf.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                        document.getElementById("cryptpcf").value = pcfComplete;
                        document.getElementById("cryptbalance1").value = "";
                        document.getElementById("cryptdpPercentage2").value = "";
                        document.getElementById("cryptdpPercentage").value = "";
                        document.getElementById("cryptdpPercentage").value = "";
                        document.getElementById("crypttotalContractPrice3").value =  "";

            }
            
            
            });
        
</script>

    </body>
</html>
<?php  } else {
  header("location: index.php");
}?>
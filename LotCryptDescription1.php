<?php
session_start();
include 'connection.php';


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
       
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                aria-expanded="true" aria-controls="collapsePages">
                <i class="fas fa-fw fa-folder"></i>
                <span>Clients</span>
            </a>
            <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="LotCryptDescription.php">Verify Buyer(s)</a>
                    <a class="collapse-item" href="ViewRecordBuyer.php">View record(s)</a>                   
                </div>
            </div>

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
                <form
                 class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">      
                 <img src="\AccountingSoftwareProposal\startbootstrap-sb-admin-2-gh-pages\startbootstrap-sb-admin-2-gh-pages\img\SouthSpring.png"  width="200" height="60"></img>
                </form>
                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">                   
                    <div class="d-none d-sm-block"></div>
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
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
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

                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800">Tables</h1>
                <p class="mb-4">This data table is indicated for South Spring Company.</p>

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Admin</h6> 
                    </div>
                  
                    <div class="card-body">
                        <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    
                                <tr class="header">
                                            <th scope="col" style= "width: 15%">Customer Code</th>
                                            <th style= "width: 20%">Contract Code</th>
                                           
                                            <th scope="col" >Name</th>
                                            <th scope="col" style= "width: 8%">Gender</th>
                                            <th  scope="col" style= "width: 13%">Phone</th>
                                            <th scope="col" style= "width: 10%">Date</th>  
                                            <th scope="col" style= "width: 10%" >Tools</th>

                                            <th scope="col" hidden>Tools</th>
                                            <th scope="col" hidden>Tools</th>
                                            <th scope="col" hidden>Tools</th>
                                            <th scope="col" hidden>Tools</th>
                                            <th scope="col" hidden>Tools</th>
                                            
                                            <th scope="col" hidden>Tools</th>
                                            <th scope="col" hidden>Tools</th>
                                            <th scope="col" hidden>Tools</th>
                                            <th scope="col" hidden>Tools</th>
                                            <th scope="col" hidden>Tools</th>
                                            
                                            <th scope="col" hidden>Tools</th>
                                            <th scope="col" hidden>Tools</th>
                                            <th scope="col" hidden>Tools</th>
                                            <th scope="col" hidden>Tools</th>
                                            <th scope="col" hidden>Tools</th>
                                            
                                            <th scope="col" hidden>Tools</th>
                                            <th scope="col" hidden>Tools</th>
                                            <th scope="col" hidden>Tools</th>
                                            <th scope="col" hidden>Tools</th>
                                            <th scope="col" hidden>Tools</th>
                                            
                                            <th scope="col" hidden>Tools</th>
                                            <th scope="col" hidden>Tools</th>
                                            <th scope="col" hidden>Tools</th>
                                            <th scope="col" hidden>Tools</th>
                                            <th scope="col" hidden>Tools</th>
                                            
                                            <th scope="col" hidden>Tools</th>
                                            <th scope="col" hidden>Tools</th>
                                            <th scope="col" hidden>Tools</th>
                                            <th scope="col" hidden>Tools</th>
                                            <th scope="col" hidden>Tools</th>
                                            <th scope="col" hidden>Tools</th>
                                            <th scope="col" hidden>Tools</th>
                                            <th scope="col" hidden>Tools</th>
                                        </tr>
                                </thead>
                                <tfoot>
                                        <tr>
                                            <th scope="col">Customer Code</th>
                                            <th scope="col">Contract Code</th>                           
                                            <th scope="col">Name</th>
                                            <th scope="col">Gender</th>
                                            <th scope="col">Phone</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Tools</th>

                                            <th scope="col" hidden>Tools</th>
                                            <th scope="col" hidden>Tools</th>
                                            <th scope="col" hidden>Tools</th>
                                            <th scope="col" hidden>Tools</th>
                                            <th scope="col" hidden>Tools</th>
                                            
                                            <th scope="col" hidden>Tools</th>
                                            <th scope="col" hidden>Tools</th>
                                            <th scope="col" hidden>Tools</th>
                                            <th scope="col" hidden>Tools</th>
                                            <th scope="col" hidden>Tools</th>
                                            <th scope="col" hidden>Tools</th>
                                            <th scope="col" hidden>Tools</th>
                                            <th scope="col" hidden>Tools</th>
                                            
                                            <th scope="col" hidden>Tools</th>
                                            <th scope="col" hidden>Tools</th>
                                            <th scope="col" hidden>Tools</th>
                                            <th scope="col" hidden>Tools</th>
                                            <th scope="col" hidden>Tools</th>
                                            
                                            <th scope="col" hidden>Tools</th>
                                            <th scope="col" hidden>Tools</th>
                                            <th scope="col" hidden>Tools</th>
                                            <th scope="col" hidden>Tools</th>
                                            <th scope="col" hidden>Tools</th>
                                            
                                            <th scope="col" hidden>Tools</th>
                                            <th scope="col" hidden>Tools</th>
                                            <th scope="col" hidden>Tools</th>
                                            <th scope="col" hidden>Tools</th>
                                            <th scope="col" hidden>Tools</th>
                                            
                                            <th scope="col" hidden>Tools</th>
                                            <th scope="col" hidden>Tools</th>
                                            <th scope="col" hidden>Tools</th>
                                            <th scope="col" hidden>Tools</th>
                                            <th scope="col" hidden>Tools</th>
                                        </tr>
                                </tfoot>
                                <tbody>
                                    <?php
                                     $sales_query = "SELECT * from buyersinformationsheet LEFT JOIN customercode ON buyersinformationsheet.id = customercode.id;";
                                      
                                      $sales_result = mysqli_query($connection, $sales_query);
                                    
                                    if (mysqli_num_rows($sales_result) > 0) {
                                       while ($row = mysqli_fetch_assoc($sales_result)) {
                                      
                                    ?>
                                    <tr >
                                       <td class="id" name="id" hidden><?=$row['id']?></td>
                                       <td class="customerCode" name="customerCode" ><?=$row['costumerCode_S1']?><?=$row['costumerCode_S2']?><?=$row['costumerCode_D']?><?=$row['costumerCode_C1']?><?=$row['costumerCode_C2']?><?=$row['costumerCode_C3']?><?=$row['costumerCode_Input1']?><?=$row['costumerCode_Input2']?><?=$row['costumerCode_Input3']?><?=$row['costumerCode_Input4']?><?=$row['costumerCode_Input5']?><?=$row['costumerCode_Input6']?></td>
                                       <td class="contractCode" name="contractCode"> <?=$row['contractCode_S1']?><?=$row['contractCode_S2']?><?=$row['contractCode_D1']?><?=$row['contractCode_C1']?><?=$row['contractCode_C2']?><?=$row['contractCode_G']?><?=$row['contractCode_Input1']?><?=$row['contractCode_Input2']?><?=$row['contractCode_Input3']?><?=$row['contractCode_Input4']?><?=$row['contractCode_Input5']?><?=$row['contractCode_Input6']?><?=$row['contractCode_Input8']?><?=$row['contractCode_Input9']?><?=$row['contractCode_Input10']?></td>
                                       <td class="Fullname" name="Fullname"><?=$row['Firstname']?> <?=$row['Middlename']?> <?=$row['Lastname']?></td>
                                       <td class="Sex" name="Sex"><?=$row['Sex']?></td>
                                       <td class="M_Phone" name="M_Phone"><?=$row['Mobile_Phone']?></td>  
                                       <td class="Date" name="Date" ><?=$row['B_Date']?></td>

                                       <td class="BusinessPhoneFax" name="BusinessPhoneFax" hidden><?=$row['BusinessPhone']?></td>  
                                       <td class="DateBirth" name="DateBirth" hidden><?=$row['DOB']?></td> 
                                       <td class="MaritalStatus" name="MaritalStatus" hidden><?=$row['MaritalStatus']?></td> 
                                       <td class="Citizenship" name="Citizenship" hidden><?=$row['Citizenship']?></td> 
                                       <td class="Email" name="Email" hidden><?=$row['EmailAddress']?></td> 
                                       <td class="Height" name="Height" hidden><?=$row['Height']?></td> 
                                       <td class="Weight" name="Weight" hidden><?=$row['Weight']?></td> 
                                       <td class="ResidentAddress" name="ResidentAddress" hidden><?=$row['R_BlkLot']?>
                                       <?=$row['R_City']?><?=$row['R_Province']?><?=$row['R_Country']?><?=$row['R_Zipcode']?></td> 

                                       <td class="ResidentialPhoneno" name="ResidentialPhoneno" hidden><?=$row['Residential_Phone']?></td> 
                                       <td class="BillingAddress" name="BillingAddress" hidden><?=$row['B_BlkLot']?>
                                       <?=$row['B_City']?> <?=$row['B_Province']?><?=$row['B_Country']?><?=$row['B_Zipcode']?></td> 
                                       <td class="IssuedAt" name="IssuedAt" hidden><?=$row['IssuedAt']?></td> 
                                       <td class="IssuedOn" name="IssuedOn" hidden><?=$row['IssuedOn']?></td> 
                                       <td class="ResidentSince" name="ResidentSince" hidden><?=$row['ResidentSince']?></td> 
                                       <td class="GSIS" name="GSIS" hidden><?=$row['SSS_No']?></td> 
                                       <td class="HDMF" name="HDMF" hidden><?=$row['HDMF_No']?></td> 
                                       <td class="TIN" name="TIN" hidden><?=$row['TIN']?></td> 
                                       <td class="NBI" name="NBI" hidden><?=$row['NBI']?></td> 
                                       <td class="MotherName" name="MotherName" hidden><?=$row['MotherName']?></td> 
                                       <td class="FatherName" name="FatherName" hidden><?=$row['FatherName']?></td> 
                                       <td class="SpouseName" name="SpouseName" hidden><?=$row['SpouseName']?></td> 
                                       <td class="ChildrenName" name="ChildrenName" hidden><?=$row['ChildrensName']?></td> 
                                       <td class="MotherOccupation" name="MotherOccupation" hidden><?=$row['MotherOccupation']?></td> 
                                       <td class="FatherOccupation" name="FatherOccupation" hidden><?=$row['FatherOccupation']?></td> 
                                       <td class="SpouseOccupation" name="SpouseOccupation" hidden><?=$row['SpouseOccupation']?></td> 
                                       <td class="Employment" name="Employment" hidden><?=$row['Employment_Status']?></td> 
                                       <td class="Source" name="Source" hidden><?=$row['SourceOfIncome']?></td> 
                                       <td class="Employer" name="Employer" hidden><?=$row['EmployerBusinessName']?></td> 
                                       <td class="Nature" name="Nature" hidden><?=$row['NatureOfEmployeerBusiness']?></td> 
                                       <td class="PositionCompany" name="PositionCompany" hidden><?=$row['PositionInCompany']?></td> 
                                       <td class="PersonalMonthlyIncome" name="PersonalMonthlyIncome" hidden><?=$row['PersonalMonthlyIncome']?></td> 
                                       <td class="EmploymentbusinessEstablished" name="EmploymentbusinessEstablished" hidden><?=$row['Mobile_Phone']?></td> 
                                       <td class="filename" name="filename" hidden><?php echo 'uploads/' .$row['Filename'] ?></td>

                           
                                           <td>  
                                               <script>
                                                   let tableRowElement;
                                                   function toggleModal(element) {
                                                   tableRowElement = element.parentElement.parentElement;
                                                   
                                                   const filename = tableRowElement.getElementsByClassName('filename')[0].innerHTML;
                                                   document.getElementById('blah').src = filename;
                                                   
                                                   
                                                   const CustomerCode = tableRowElement.getElementsByClassName('customerCode')[0].innerHTML;
                                                   document.getElementById('CustomerCode').value = CustomerCode;

                                                   const Sex = tableRowElement.getElementsByClassName('Sex')[0].innerHTML;
                                                   document.getElementById('Sex').value = Sex;

                                                   const BusinessPhoneFax = tableRowElement.getElementsByClassName('BusinessPhoneFax')[0].innerHTML;
                                                   document.getElementById('BusinessPhoneFax').value = BusinessPhoneFax;

                                                   const ContractCode = tableRowElement.getElementsByClassName('contractCode')[0].innerHTML;
                                                   document.getElementById('ContractCode').value = ContractCode;

                                                   const DateBirth = tableRowElement.getElementsByClassName('DateBirth')[0].innerHTML;
                                                   document.getElementById('DateBirth').value = DateBirth;

                                                   const MaritalStatus = tableRowElement.getElementsByClassName('MaritalStatus')[0].innerHTML;
                                                   document.getElementById('MaritalStatus').value = MaritalStatus;

                                                   const Name = tableRowElement.getElementsByClassName('Fullname')[0].innerHTML;
                                                   document.getElementById('Name').value = Name;

                                                   const Citizenship = tableRowElement.getElementsByClassName('Citizenship')[0].innerHTML;
                                                   document.getElementById('Citizenship').value = Citizenship;

                                                   const Email = tableRowElement.getElementsByClassName('Email')[0].innerHTML;
                                                   document.getElementById('Email').value = Email;

                                                   const Date = tableRowElement.getElementsByClassName('Date')[0].innerHTML;
                                                   document.getElementById('Date').value = Date;

                                                   const Height = tableRowElement.getElementsByClassName('Height')[0].innerHTML;
                                                   document.getElementById('Height').value = Height;

                                                   const Weight = tableRowElement.getElementsByClassName('Weight')[0].innerHTML;
                                                   document.getElementById('Weight').value = Weight;
                                                   
                                                   
                                                  

                                                   const ResidentAddress = tableRowElement.getElementsByClassName('ResidentAddress')[0].innerHTML;
                                                   document.getElementById('ResidentAddress').value = ResidentAddress;

                                                   const ResidentialPhoneno = tableRowElement.getElementsByClassName('ResidentialPhoneno')[0].innerHTML;
                                                   document.getElementById('ResidentialPhoneno').value = ResidentialPhoneno;
                                                   
                                                   const BillingAddress = tableRowElement.getElementsByClassName('BillingAddress')[0].innerHTML;
                                                   document.getElementById('BillingAddress').value = BillingAddress;
                                                   
                                                  
                                                  

                                                   const MobilePhoneno = tableRowElement.getElementsByClassName('M_Phone')[0].innerHTML;
                                                   document.getElementById('MobilePhoneno').value = MobilePhoneno;

                                                   
                                                   const IssuedAt = tableRowElement.getElementsByClassName('IssuedAt')[0].innerHTML;
                                                   document.getElementById('IssuedAt').value = IssuedAt;

                                                   const IssuedOn = tableRowElement.getElementsByClassName('IssuedOn')[0].innerHTML;
                                                   document.getElementById('IssuedOn').value = IssuedOn;

                                                   const ResidentSince = tableRowElement.getElementsByClassName('ResidentSince')[0].innerHTML;
                                                   document.getElementById('ResidentSince').value = ResidentSince;

                                                   const GSIS = tableRowElement.getElementsByClassName('GSIS')[0].innerHTML;
                                                   document.getElementById('GSIS').value = GSIS;

                                                   const HDMF = tableRowElement.getElementsByClassName('HDMF')[0].innerHTML;
                                                   document.getElementById('HDMF').value = HDMF;

                                                   const TIN = tableRowElement.getElementsByClassName('TIN')[0].innerHTML;
                                                   document.getElementById('TIN').value = TIN;

                                                   const NBI = tableRowElement.getElementsByClassName('NBI')[0].innerHTML;
                                                   document.getElementById('NBI').value = NBI;

                                                   const MotherName = tableRowElement.getElementsByClassName('MotherName')[0].innerHTML;
                                                   document.getElementById('MotherName').value = MotherName;
                                                   
                                                   
                                                   
                                                   
                                                   const FatherName = tableRowElement.getElementsByClassName('FatherName')[0].innerHTML;
                                                   document.getElementById('FatherName').value = FatherName;

                                                   const SpouseName = tableRowElement.getElementsByClassName('SpouseName')[0].innerHTML;
                                                   document.getElementById('SpouseName').value = SpouseName;

                                                   const MotherOccupation = tableRowElement.getElementsByClassName('MotherOccupation')[0].innerHTML;
                                                   document.getElementById('MotherOccupation').value = MotherOccupation;

                                                   const FatherOccupation = tableRowElement.getElementsByClassName('FatherOccupation')[0].innerHTML;
                                                   document.getElementById('FatherOccupation').value = FatherOccupation;

                                                   const SpouseOccupation = tableRowElement.getElementsByClassName('SpouseOccupation')[0].innerHTML;
                                                   document.getElementById('SpouseOccupation').value = SpouseOccupation;

                                                   const Employment = tableRowElement.getElementsByClassName('Employment')[0].innerHTML;
                                                   document.getElementById('Employment').value = Employment;

                                                   const Source = tableRowElement.getElementsByClassName('Source')[0].innerHTML;
                                                   document.getElementById('Source').value = Source;

                                                   const Employer = tableRowElement.getElementsByClassName('Employer')[0].innerHTML;
                                                   document.getElementById('Employer').value = Employer;

                                                   const Nature = tableRowElement.getElementsByClassName('Nature')[0].innerHTML;
                                                   document.getElementById('Nature').value = Nature;



                                                   const PositionCompany = tableRowElement.getElementsByClassName('PositionCompany')[0].innerHTML;
                                                   document.getElementById('PositionCompany').value = PositionCompany;



                                                   const PersonalMonthlyIncome = tableRowElement.getElementsByClassName('PersonalMonthlyIncome')[0].innerHTML;
                                                   document.getElementById('PersonalMonthlyIncome').value = PersonalMonthlyIncome;


                                                   
                                                   const EmploymentbusinessEstablished = tableRowElement.getElementsByClassName('EmploymentbusinessEstablished')[0].innerHTML;
                                                   document.getElementById('EmploymentbusinessEstablished').value = EmploymentbusinessEstablished;

                                                   const customerCode = tableRowElement.getElementsByClassName('customerCode')[0].innerHTML;
                                                   document.getElementById('CustomerCode1').value = customerCode;
                                                   
                                                   const contractCode = tableRowElement.getElementsByClassName('contractCode')[0].innerHTML;
                                                   document.getElementById('BUYERContractCode').value = contractCode;

                                                   
                                                   const Fullname = tableRowElement.getElementsByClassName('Fullname')[0].innerHTML;
                                                   document.getElementById('BUYERCostumerName').value = Fullname;

                                                   const Date1 = tableRowElement.getElementsByClassName('Date')[0].innerHTML;
                                                   document.getElementById('BUYERDate').value = Date1;
                                               }     
                                               </script>    
                                               <a href="#" onclick="toggleModal(this, 1)" data-toggle="modal" data-target="#viewBuyer" >View</a> || <a href="#"  onclick="toggleModal(this, 1)" data-toggle="modal" data-target="#verify">Verify</a>                             
                                               
                              
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
            <!-- /.container-fluid -->

        <!-- End of Main Content -->
     

<!-- viewmodal-->
<div class="modal fade bd-example-modal-lg" id="viewBuyer" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-xl" >
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Buyer Information</h5>
                
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
                                            <th colspan="5" style="color:#00008B">Personal Information</th>
                                        </tr>
                                        <tr style="border: none">
                                          <td style="border: none">Customer Code
                                           <input type="text" class="form-control" style="border:none; padding-left: 10px; background-color: #E2F6EC; " id="CustomerCode" name="CustomerCode">  
                                           Sex
                                           <input type="text" class="form-control" style="border:none; padding-left: 10px; background-color: #E2F6EC; " id="Sex" name="Sex">  
                                           Business Phone Fax
                                            <br> <input type="text" class="form-control" style="border:none; padding: 10px; background-color: #E2F6EC;" id="BusinessPhoneFax" name="BusinessPhoneFax" > 
                                          
                                          </td>
                                          <td style="border: none" >
                                          Contract Code 
                                            <br> <input type="text" class="form-control" style="border:none; padding: 10px; background-color: #E2F6EC;" id="ContractCode" name="ContractCode" > 
                                            Date Birth 
                                            <br> <input type="date" class="form-control" style="border:none; padding: 10px; background-color: #E2F6EC;" id="DateBirth" name="DateBirth" > 
                                            Marital Status
                                            <br> <input type="text" class="form-control" style="border:none; padding: 10px; background-color: #E2F6EC;" id="MaritalStatus" name="MaritalStatus" > 
                                          
                                          </td>
                                          <td style="border: none" >
                                           Name <br> <input type="text" class="form-control" style="border:none; padding: 10px; background-color: #E2F6EC;" id="Name" name="Name" >
                                           Citizenship <br> <input type="text" class="form-control" style="border:none; padding: 10px; background-color: #E2F6EC;" id="Citizenship" name="Citizenship" >
                                           Email Address
                                            <br> <input type="text" class="form-control" style="border:none; padding: 10px; background-color: #E2F6EC;" id="Email" name="Email" >
                                        
                                        </td>
                                          <td style="border: none; width: 190px" >
                                            Date
                                            <br> <input type="text" class="form-control" style="border:none; padding: 10px; background-color: #E2F6EC;" id="Date" name="Date" >
                                            Height
                                            <br> <input type="text" class="form-control" style="border:none; padding: 10px; background-color: #E2F6EC;" id="Height" name="Height" >
                                            Weight
                                            <br> <input type="text" class="form-control" style="border:none; padding: 10px; background-color: #E2F6EC;" id="Weight" name="Weight" >
                                        
                                        </td>
                                        </tr>

                                        <tr style="border: none" >
                                        <td colspan="3" >
                                          Resident Address
                                          <input type="text" class="form-control" style="border:none; padding: 10px; background-color: #E2F6EC;" id="ResidentAddress" name="ResidentAddress">
                                        </td>
                                        <td>
                                          Residential Phone no.
                                          <input type="text" class="form-control" style="border:none; padding: 10px; background-color: #E2F6EC;" id="ResidentialPhoneno" name="ResidentialPhoneno">
                                         </td>
                                        </tr>

                                        <tr style="border: none" >
                                        <td colspan="3" >
                                          Billing Address
                                          <input type="text" class="form-control" style="border:none; padding: 10px; background-color: #E2F6EC;" id="BillingAddress" name="BillingAddress">
                                        </td>
                                        <td>
                                          Mobile Phone no.
                                          <input type="text" class="form-control" style="border:none; padding: 10px; background-color: #E2F6EC;" id="MobilePhoneno" name="MobilePhoneno">
                                         </td>
                                        </tr>
                                    </table>
                                    <table class="table" style="border: 2px solid #e3e6f0"  cellspacing="0" >
                                        <tr style="border: 2px solid #e3e6f0"> 
                                            <th colspan="5" style="color:#00008B">Community Tax Certificate No.</th>
                                        </tr>
                                        <tr style="border: none">
                                          <td style="border: none" >Issued At
                                           <input type="date" class="form-control" style="border:none; padding-left: 10px; background-color: #E2F6EC; " id="IssuedAt" name="IssuedAt">  
                                          </td>
                                          <td style="border: none" >
                                          Issued On 
                                            <br> <input type="date" class="form-control" style="border:none; padding: 10px; background-color: #E2F6EC;" id="IssuedOn" name="IssuedOn" > 
                                          </td>
                                          <td style="border: none" >
                                          Resident Since 
                                            <br> <input type="date" class="form-control" style="border:none; padding: 10px; background-color: #E2F6EC;" id="ResidentSince" name="ResidentSince" >
                                          </td>
                                          
                                        </tr>
                                       
                                    </table>
                                    <table class="table" style="border: 2px solid #e3e6f0"  cellspacing="0" >
                                        <tr style="border: 2px solid #e3e6f0"> 
                                            <th colspan="5" style="color:#00008B">Government Benefits</th>
                                        </tr>
                                        <tr style="border: none">
                                          <td style="border: none" >GSIS No. 
                                           <input type="text" class="form-control" style="border:none; padding-left: 10px; background-color: #E2F6EC; " id="GSIS" name="GSIS">  
                                          
                                          </td>
                                          <td style="border: none" >
                                          HDMF No. 
                                            <br> <input type="text" class="form-control" style="border:none; padding: 10px; background-color: #E2F6EC;" id="HDMF" name="HDMF" > 
                                           
                                          </td>
                                          <td style="border: none" >
                                          TIN No.
                                            <br> <input type="text" class="form-control" style="border:none; padding: 10px; background-color: #E2F6EC;" id="TIN" name="TIN" >
                                           
                                          </td>
                                          <td style="border: none; width: 190px" >
                                          NBI No.
                                            <br> <input type="text" class="form-control" style="border:none; padding: 10px; background-color: #E2F6EC;" id="NBI" name="NBI" >
                                            
                                        </td>
                                        </tr>
                                       
                                    </table>
                                    <table class="table" style="border: 2px solid #e3e6f0"  cellspacing="0" >
                                        <tr style="border: 2px solid #e3e6f0"> 
                                            <th colspan="5" style="color:#00008B">Information of Immediate Family </th>
                                        </tr>
                                        <tr style="border: none">
                                          <td style="border: none" >Mother's Name
                                           <input type="text" class="form-control" style="border:none; padding-left: 10px; background-color: #E2F6EC; " id="MotherName" name="MotherName">  
                                           Father's Name
                                           <input type="text" class="form-control" style="border:none; padding-left: 10px; background-color: #E2F6EC; " id="FatherName" name="FatherName">  
                                           Spouse Name
                                           <input type="text" class="form-control" style="border:none; padding-left: 10px; background-color: #E2F6EC; " id="SpouseName" name="SpouseName">  
                                           Children's Name
                                           <textarea rows="4" cols="50" class="form-control" style="border:none; padding-left: 10px; background-color: #E2F6EC; " id="ChildrenName" name="ChildrenName">  
                                        </textarea>
                                          </td>
                                          <td style="border: none" >
                                         Occupation
                                            <br> <input type="text" class="form-control" style="border:none; padding: 10px; background-color: #E2F6EC;" id="MotherOccupation" name="MotherOccupation" > 
                                            Occupation
                                            <br> <input type="text" class="form-control" style="border:none; padding: 10px; background-color: #E2F6EC;" id="FatherOccupation" name="FatherOccupation" > 
                                            Occupation
                                            <br> <input type="text" class="form-control" style="border:none; padding: 10px; background-color: #E2F6EC;" id="SpouseOccupation" name="SpouseOccupation" > 
                                           
                                          </td>
                                          
                                        </tr>
                                       
                                    </table>
                                    <table class="table" style="border: 2px solid #e3e6f0"  cellspacing="0" >
                                        <tr style="border: 2px solid #e3e6f0"> 
                                            <th colspan="5" style="color:#00008B">Financial Information</th>
                                        </tr>
                                        <tr style="border: none">
                                          <td style="border: none" >
                                          Employment Status
                                           <input type="text" class="form-control" style="border:none; padding-left: 10px; background-color: #E2F6EC; " id="Employment" name="Employment">  
                                           Source Income
                                           <input type="text" class="form-control" style="border:none; padding-left: 10px; background-color: #E2F6EC; " id="Source" name="Source">  
                                           Employer or Business Name (if Self-Employed)
                                           <input type="text" class="form-control" style="border:none; padding-left: 10px; background-color: #E2F6EC; " id="Employer" name="Employer">  
                                           Nature of Employer's Business / Your Business
                                           <input type="text"  class="form-control" style="border:none; padding-left: 10px; background-color: #E2F6EC; " id="Nature" name="Nature">  
                                          </textarea>
                                          </td>
                                          <td style="border: none" >
                                         Position in Company
                                            <br> <input type="text" class="form-control" style="border:none; padding: 10px; background-color: #E2F6EC;" id="PositionCompany" name="PositionCompany" > 
                                            Personal Monthly Income
                                            <br> <input type="text" class="form-control" style="border:none; padding: 10px; background-color: #E2F6EC;" id="PersonalMonthlyIncome" name="PersonalMonthlyIncome" > 
                                            Employment Date/Date when business was Established
                                            <br> <input type="text" class="form-control" style="border:none; padding: 10px; background-color: #E2F6EC;" id="EmploymentbusinessEstablished" name="EmploymentbusinessEstablished" > 
                                           
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
 <div class="modal fade bd-example-modal-lg" id="verify" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
 <div class="modal-dialog modal-xl">
 <div class="modal-content">
  <div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">Information</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>

  <div class="ChildrenTable">   
                  <div class="card-body">
                   <table class="table " cellspacing="0" >
                                        <tr> 
                                            <th colspan="5" style="color:#00008B">BUYER'S INFORMATION SHEET</th>
                                        </tr>
                                        <tr> 
                                            <td>Costumer Code <br> <input type="text" class="form-control" id="CustomerCode1" name="CustomerCode1"  style="  padding: 3px 6px;"  Readonly >
                                             <td>Contract Code<br><input type="text" class="form-control" id="BUYERContractCode" name="BUYERContractCode"  style="  padding: 3px 6px;" Readonly >
                                            </td>
                                            <td>Costumer Name <br>
                                                <input type="text" id="BUYERCostumerName" name="BUYERCostumerName" class="form-control"  ></td>
                                                <td>Date <br>
                                                <input type="date" id="BUYERDate" name="BUYERDate" class="form-control" style="  padding: 3px 6px; margin-top: 8px;" ></td>
                                                
                                        </tr>
                                      
                   </table>
                   <table class="table " cellspacing="0" >
                                        <tr> 
                                            <th colspan="5" style="color:#00008B">Lot Description</th>
                                        </tr>
                                        <tr> 
                                            <td>Phase<br> <input type="text" class="form-control" id="Phase" name="Phase"  style=" width:80px;  padding: 3px 6px;" >
                                             <td>Area<br><input type="text" class="form-control" id="Area" name="Area"  style=" width:80px; padding: 3px 6px;" >
                                            </td>
                                            <td>Section <br>
                                                <input type="text" id="Section" name="Section" class="form-control" style=" width:80px; padding: 3px 6px;" ></td>
                                                <td>Lot I.D. <br>
                                                <input type="text" id="Lot" name="Lot" class="form-control" style="   padding: 3px 6px;" ></td>
                                                <td>Type / Class <br>
                                                <input type="text" id="Type" name="Type" class="form-control" style="   padding: 3px 6px;" ></td>
                                                <td>Block<br><input type="text" class="form-control" id="Block" name="Block"  style=" width:80px; padding: 3px 6px;" >
                                                </td>
                                                <td>Lot No.<br><input type="text" class="form-control" id="LotNo" name="LotNo"  style=" width:80px; padding: 3px 6px;" >
                                                </td>
                                            </tr>
                                            <tr><td  colspan="2"> Total Contract Price <br>
                                                <input type="text" id="TotalContractPrice" name="TotalContractPrice" class="form-control" style="   padding: 3px 6px;" ></td>
                                                <td  colspan="2"> Terms <br>
                                                <input type="text" id="Terms" name="Terms" class="form-control" style="   padding: 3px 6px;" ></td>
                                                <td  colspan="2"> Initial Payment <br>
                                                <input type="text" id="InitialPayment" name="InitialPayment" class="form-control" style="   padding: 3px 6px;" ></td>
                                                   
                                            </tr>
                                      
                   </table>
                   <table class="table " cellspacing="0" >
                                        <tr> 
                                            <th colspan="5" style="color:#00008B">Crypt Description</th>
                                        </tr>
                                        <tr> 
                                            <td>Phase<br> <input type="text" class="form-control" id="CryptPhase" name="CryptPhase"  style=" width:80px;  padding: 3px 6px;" >
                                            <td>Level<br><input type="text" class="form-control" id="CryptLevel" name="CryptLevel"  style=" width:80px; padding: 3px 6px;" >
                                            </td>
                                            <td>Area<br><input type="text" class="form-control" id="CryptArea" name="CryptArea"  style=" width:80px; padding: 3px 6px;" >
                                            </td>
                                            <td>Section <br>
                                                <input type="text" id="CryptSection" name="CryptSection" class="form-control" style=" width:80px; padding: 3px 6px;" ></td>
                                                <td>Column <br>
                                                <input type="text" id="CryptColumn" name="CryptColumn" class="form-control" style="   padding: 3px 6px;" ></td>
                                                <td>Unit No. <br>
                                                <input type="text" id="CryptUnit" name="CryptUnit" class="form-control" style="   padding: 3px 6px;" ></td>
                                                <td>Classification <br>
                                                <input type="text" id="CryptClassification" name="CryptClassification" class="form-control" style="   padding: 3px 6px;" ></td>
                                               
                                               
                                            </tr>
                                            <tr>
                                                <td  colspan="2">I.D.<br><input type="text" class="form-control" id="CryptID" name="CryptID"  style="  padding: 3px 6px;" >
                                                </td>
                                                <td  colspan="2"> Total Contract Price <br>
                                                <input type="text" id="CryptTotalContractPrice" name="CryptTotalContractPrice" class="form-control" style="   padding: 3px 6px;" ></td>
                                                <td  colspan="2"> Terms <br>
                                                <input type="text" id="CryptTerms" name="CryptTerms" class="form-control" style="   padding: 3px 6px;" ></td>
                                                <td > Initial Payment <br>
                                                <input type="text" id="CryptInitialPayment" name="CryptInitialPayment" class="form-control" style="   padding: 3px 6px;" ></td>
                                                   
                                            </tr>
                                      
                   </table>
                   <table class="table " cellspacing="0" >
                                        <tr> 
                                            <th colspan="5" style="color:#00008B">Payment Method</th>
                                        </tr>
                                        <tr> 
                                            <td>Payment Due Date<br><input type="text" class="form-control" id="PaymentDueDate" name="PaymentDueDate"  style="padding: 3px 6px;" >
                                            <td>Starting<br><input type="text" class="form-control" id="Starting" name="Starting"  style=" padding: 3px 6px;" >
                                            </td>
                                            <td>Price List<br><input type="text" class="form-control" id="PriceList" name="PriceList"  style=" padding: 3px 6px;" >
                                            </td>
                                           
                                               
                                            </tr>
                                            
                                      
                   </table>
                  </div>
                        
                 </div>
             
 <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    <button type="submit" name="save" class="btn btn-primary">Save</button>
 </div>
</div>
</div>
</div>




</form>
</div>
</div>
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
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("dataTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>

</body>

</html>

<?php } else {
  
  header("location: index.php");
 
}?>
<?php
session_start();
include 'connection.php';
include 'session.php';

// Check if the success session variable is set
$success = isset($_SESSION['success']) ? $_SESSION['success'] : false;

// Clear the success session variable
unset($_SESSION['success']);

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
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
    <script src="print.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="print.css">
   
    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    div.employeeData {
        width: 29%;
        float: left;
        padding-right: 20px;
    }

    .error {
        color: red;
    }
    #notification {
    display: none;
   
  }

  #notification.success {
    padding-left: 20px;
    margin-top: -5px;
    background-color: transparent;
    color: #4CAF50;
  }

  #notification.error {
    padding-left: 20px;
    margin-top: -5px;
    background-color: transparent;
    color: #F44336;
  }
    #cryptnotification {
    display: none;
   
  }

  #cryptnotification.success {
    padding-left: 20px;
    margin-top: -5px;
    background-color: transparent;
    color: #4CAF50;
  }

  #cryptnotification.error {
    padding-left: 20px;
    margin-top: -5px;
    background-color: transparent;
    color: #F44336;
  }
    div.uploadPhoto {
        width: 13%;
        float: left;

        text-align: left;
    }

    div.ChildrenTable {
        width: 100%;
        float: left;
        margin-right: 50px;
    }

    p.category {
        Font-size: 15px;
        padding-top: -10;
    }

    div.container-sedge {
        width: 100%;
    }

    img.Image-alignment1 {
        height: 60px;
        width: 100px;

    }

    div.viewRecords {
        margin: 30px;
    }

    div.viewRecords1 {
        width: 95%;

    }

    input.viewRecord {
        border: none;
        border-bottom: 1px solid gray;
        height: 20px;
        border-radius: 2px;
        width: 100%;
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
        margin: 2px;
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
        margin: 2px;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;


    }

    .Sedge_p {
        font-size: 15px;
        color: #000000;
    }

    img.profilepic {
        border: 1px solid #ddd;
        border-radius: 8px;
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

    .table-sm tbody+tbody {
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

    input[type=file] {
        width: 100%;
        font-size: 13px;
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

        width: 100%;
        height: 30px;
        margin-top: -2px;


    }

    .HEader {
        float: center;

    }

    div.Autorow {
        float: left;
        width: 18%;
    }

    div.Autorow1 {
        float: left;
        width: 10%;
    }

    .bg-sedge-primary-color {
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

    .bg-sedge-primary-color {
        background-color: #003459;
    }

    .show-modal1 {
        opacity: 1;
        visibility: visible;
        transform: scale(1.0);
        transition: visibility 0s linear 0s, opacity 0.25s 0s, transform 0.25s;
    }

    input[type=text].form-control-password {
        padding-left: 5px;
        font-size: 14px;
        margin-top: -5px;
    }

    input[type=password].form-control-password {
        padding-left: 5px;
        font-size: 14px;
        margin-top: -5px;
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
        box-shadow: 2px 2px 24px #5C5696;
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
        padding: 20px 2px;
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
        box-shadow: 2px 2px 2px #5C5696;
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
        bottom: 2px;
        right: 2px;
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
        text-shadow: 2px 2px 8px #7875B5;
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
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-sedge-primary-color sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a>
                <div class="SedgeFont"></div>
            </a>
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
                <a class="nav-link" href="BuyerInfo.php">
                    <i class="fas fa fa-ticket"></i></i>
                    <span>Buyer Application Form</span></a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="sales_appointment.php">
                    <i class="fas fa fa-ticket"></i></i>
                    <span>Appointment</span></a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="sales_reservation.php">
                    <i class="fas fa fa-ticket"></i></i>
                    <span>Reservation</span></a>
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
                <p class="text-center mb-2"><strong>SEDGE</strong> is packed with premium features, components, and
                    more!</p>
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
                            <img src="\AccountingSoftwareProposal\startbootstrap-sb-admin-2-gh-pages\startbootstrap-sb-admin-2-gh-pages\img\SouthSpring.png"
                                width="150" height="60"></img>
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
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg" alt="...">
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
                                        <img class="rounded-circle" src="img/undraw_profile_2.svg" alt="...">
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
                                        <img class="rounded-circle" src="img/undraw_profile_3.svg" alt="...">
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
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
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

                               <!-- Earnings (Annual) Card Example -->
                               <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-success shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                    Earnings (Annual)</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">

                                                    <?php
                                                        $query = "SELECT SUM(totalContractPrice) AS monthly_earnings
                                                        FROM tbl_ledger
                                                        WHERE YEAR(date_column) = YEAR(CURRENT_DATE())
                                                        GROUP BY MONTH(date_column)";

                                                    // Execute the query
                                                    $result = $connection->query($query);
                                                    if (!$result) {
                                                        echo "Error executing query: " . $connection->error;
                                                        exit();
                                                    }

                                                    // Check if any rows were returned
                                                    if ($result->num_rows > 0) {
                                                        $row = $result->fetch_assoc();
                                                        $monthlyEarnings = '₱ ' . number_format($row['monthly_earnings'], 2, '.', ',');
                                                        echo "<p>$monthlyEarnings</p>";
                                                    } else {
                                                        echo "<p>No monthly earnings found.</p>";
                                                    }
                                                    ?>
                                                </div>
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
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                                    Tasks
                                                </div>
                                                <?php
                                                    $totalTasksQuery = "SELECT COUNT(*) AS total_tasks FROM buyersinformationsheet  ";
                                                    $completedTasksQuery = "SELECT COUNT(*) AS completed_tasks FROM buyersinformationsheet WHERE Status = 'Appointment'";

                                                    // Execute the total tasks query
                                                    $totalTasksResult = $connection->query($totalTasksQuery);
                                                if (!$totalTasksResult) {
                                                    echo "Error executing total tasks query: " . $connection->error;
                                                exit();
                                                }

                                                // Execute the completed tasks query
                                                $completedTasksResult = $connection->query($completedTasksQuery);
                                                if (!$completedTasksResult) {
                                                    echo "Error executing completed tasks query: " . $connection->error;
                                                exit();
                                                }

                                                // Check if any rows were returned for both queries
                                                if ($totalTasksResult->num_rows > 0 && $completedTasksResult->num_rows > 0) {
                                                    $totalTasksRow = $totalTasksResult->fetch_assoc();
                                                    $completedTasksRow = $completedTasksResult->fetch_assoc();

                                                    $totalTasks = $totalTasksRow['total_tasks'];
                                                    $completedTasks = $completedTasksRow['completed_tasks'];
                                                    if ($totalTasks > 0) {
                                                        $progressPercentage = ($completedTasks / $totalTasks) * 100;
                                                        $progressPercentage = round($progressPercentage);
                                                    } else {
                                                        $progressPercentage = 0; // Set progress percentage to 0 if there are no tasks
                                                    }
                                                    
                                                echo "
                                                    <div class='h5 mb-0 mr-3 font-weight-bold text-gray-800'>$progressPercentage%</div>
                                                    <div class='progress progress-sm mr-2'>
                                                    <div class='progress-bar bg-info' role='progressbar' style='width: $progressPercentage%' aria-valuenow='$progressPercentage' aria-valuemin='0' aria-valuemax='100'></div>
                                                    </div>
                                                    ";
                                                } else {
                                                    echo "<p>No tasks found.</p>";
                                                }
                                                ?>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
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
                                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                                    Daily Tasks
                                                </div>
                                                <?php
                                                    $totalTasksQuery = "SELECT COUNT(*) AS total_tasks FROM buyersinformationsheet WHERE DATE(dateCreated) = CURDATE()";
                                                    $completedTasksQuery = "SELECT COUNT(*) AS completed_tasks FROM buyersinformationsheet WHERE Status = 'Appointment'";

                                                    // Execute the total tasks query
                                                    $totalTasksResult = $connection->query($totalTasksQuery);
                                                if (!$totalTasksResult) {
                                                    echo "Error executing total tasks query: " . $connection->error;
                                                exit();
                                                }

                                                // Execute the completed tasks query
                                                $completedTasksResult = $connection->query($completedTasksQuery);
                                                if (!$completedTasksResult) {
                                                    echo "Error executing completed tasks query: " . $connection->error;
                                                exit();
                                                }

                                                // Check if any rows were returned for both queries
                                                if ($totalTasksResult->num_rows > 0 && $completedTasksResult->num_rows > 0) {
                                                    $totalTasksRow = $totalTasksResult->fetch_assoc();
                                                    $completedTasksRow = $completedTasksResult->fetch_assoc();

                                                    $totalTasks = $totalTasksRow['total_tasks'];
                                                    $completedTasks = $completedTasksRow['completed_tasks'];
                                                    if ($totalTasks > 0) {
                                                        $progressPercentage = ($completedTasks / $totalTasks) * 100;
                                                        $progressPercentage = round($progressPercentage);
                                                    } else {
                                                        $progressPercentage = 0; // Set progress percentage to 0 if there are no tasks
                                                    }
                                                    
                                                echo "
                                                    <div class='h5 mb-0 mr-3 font-weight-bold text-gray-800'>$progressPercentage%</div>
                                                    <div class='progress progress-sm mr-2'>
                                                    <div class='progress-bar bg-info' role='progressbar' style='width: $progressPercentage%' aria-valuenow='$progressPercentage' aria-valuemin='0' aria-valuemax='100'></div>
                                                    </div>
                                                    ";
                                                } else {
                                                    echo "<p>No tasks found.</p>";
                                                }
                                                ?>
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
                                                    Pending Requests
                                                </div>
                                                <?php
                                                $query = "SELECT COUNT(*) AS pending_requests FROM buyersinformationsheet WHERE Status = 'Appointment'";
                                                // Replace "your_table_name" with the actual table name in your database

                                                // Execute the query
                                                $result = $connection->query($query);
                                                if (!$result) {
                                                    echo "Error executing query: " . $connection->error;
                                                    exit();
                                                }

                                                    // Check if any rows were returned
                                                if ($result->num_rows > 0) {
                                                    $row = $result->fetch_assoc();
                                                    $pendingRequests = $row['pending_requests'];
                                                    echo "<div class='h5 mb-0 font-weight-bold text-gray-800'>$pendingRequests</div>";
                                                } else {
                                                    echo "<div class='h5 mb-0 font-weight-bold text-gray-800'>0</div>";
                                                }
                                                ?>
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
                                        <tr class="header"
                                            style="color: #ffffff; background-color: #007ea7; font-size: 14px">
                                            
                                            <th scope="col"></th>
                                            <th scope="col">Customer Code</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Phone</th>
                                            <th scope="col">Reservation Date & Time</th>
                                            <th class="th-sm" colspan="2">Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr style="color: #ffffff; background-color: #007ea7; font-size: 14px">
                                           
                                            <th class="th-sm"></th>
                                            <th class="th-sm">Customer Code</th>
                                            <th class="th-sm">Name</th>
                                            <th class="th-sm">Phone</th>
                                            <th class="th-sm">Reservation Date & Time</th>
                                            <th class="th-sm" colspan="2">Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    </tbody>
                                </table>
                                <!--End of Table -->
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
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>



    <!-- viewmodal-->
    <div class="modal fade bd-example-modal-lg2" tabindex="1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
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
                                        <img center id="blah" style="margin-left: 12px;" class="profilepic" src=""
                                            alt="" width="150px" height="150px" />
                                    </div>

                                    <div>
                                        <table class="table" style="border: 2px solid #e3e6f0" cellspacing="0">
                                            <tr style="border: 2px solid #e3e6f0">
                                                <th colspan="5" style="color:#ffffff; background-color: #003459;   ">
                                                    Personal
                                                    Information</th>
                                            </tr>
                                            <tr style="border: none">
                                                <td style="border: none; color:#4a4949;font-weight: bold">Customer
                                                    Code
                                                    <input type="text" class="form-control"
                                                        style="color:#4a4949;border:none; padding-left: 10px; background-color: #E0F1FD; "
                                                        id="CustomerCode" name="CustomerCode" readonly>
                                                    Name <br> <input type="text" class="form-control"
                                                        style="color:#4a4949;border:none; padding: 10px; background-color: #E0F1FD;"
                                                        id="Name" name="Name" readonly>
                                                    Email Address
                                                    <br> <input type="text" class="form-control"
                                                        style="color:#4a4949;border:none; padding: 10px; background-color: #E0F1FD;"
                                                        id="Email" name="Email" readonly>

                                                </td>
                                                <td style="border: none; color:#4a4949;font-weight: bold">
                                                    Date Birth
                                                    <br> <input type="text" class="form-control"
                                                        style="color:#4a4949;border:none; padding: 10px; background-color: #E0F1FD; "
                                                        id="DateBirth" name="DateBirth" readonly>
                                                    Marital Status
                                                    <br> <input type="text" class="form-control"
                                                        style="color:#4a4949;border:none; padding: 10px; background-color: #E0F1FD;"
                                                        id="MaritalStatus" name="MaritalStatus" readonly>
                                                    Business Phone Fax
                                                    <br> <input type="text" class="form-control"
                                                        style="color:#4a4949;border:none; padding: 10px; background-color: #E0F1FD;"
                                                        id="BusinessPhoneFax" name="BusinessPhoneFax" readonly>

                                                </td>
                                                <td style="border: none; color:#4a4949;font-weight: bold">
                                                    Sex
                                                    <input type="text" class="form-control"
                                                        style="color:#4a4949;border:none; padding-left: 10px; background-color: #E0F1FD; "
                                                        id="Sex" name="Sex" readonly>
                                                    Citizenship <br> <input type="text" class="form-control"
                                                        style="color:#4a4949;border:none; padding: 10px; background-color: #E0F1FD;"
                                                        id="Citizenship" name="Citizenship" readonly>
                                                    Weight
                                                    <br> <input type="text" class="form-control"
                                                        style="color:#4a4949;border:none; padding: 10px; background-color: #E0F1FD;"
                                                        id="Weight" name="Weight" readonly>

                                                </td>
                                                <td style="border: none; width: 190px; color:#4a4949;font-weight: bold">
                                                    Reserve Date
                                                    <br> <input type="text" class="form-control"
                                                        style="color:#4a4949;border:none; padding: 10px; background-color: #E0F1FD;"
                                                        id="Date" name="Date" readonly>
                                                    Height
                                                    <br> <input type="text" class="form-control"
                                                        style="color:#4a4949;border:none; padding: 10px; background-color: #E0F1FD;"
                                                        id="Height" name="Height" readonly>

                                                </td>
                                            </tr>

                                            <tr style="border: none; color:#4a4949;font-weight: bold">
                                                <td colspan="3">
                                                    Resident Address
                                                    <input type="text" class="form-control"
                                                        style="color:#4a4949;border:none; padding: 10px; background-color: #E0F1FD;"
                                                        id="ResidentAddress" name="ResidentAddress" readonly>
                                                </td>
                                                <td>
                                                    Residential Phone no.
                                                    <input type="text" class="form-control"
                                                        style="color:#4a4949;border:none; padding: 10px; background-color: #E0F1FD;"
                                                        id="ResidentialPhoneno" name="ResidentialPhoneno" readonly>
                                                </td>
                                            </tr>

                                            <tr style="border: none ; color:#4a4949;font-weight: bold">
                                                <td colspan="3">
                                                    Billing Address
                                                    <input type="text" class="form-control"
                                                        style="color:#4a4949;border:none; padding: 10px; background-color: #E0F1FD;"
                                                        id="BillingAddress" name="BillingAddress" readonly>
                                                </td>
                                                <td>
                                                    Mobile Phone no.
                                                    <input type="text" class="form-control"
                                                        style="color:#4a4949;border:none; padding: 10px; background-color: #E0F1FD;"
                                                        id="MobilePhoneno" name="MobilePhoneno" readonly>
                                                </td>
                                            </tr>
                                        </table>
                                        <table class="table"
                                            style="border: 2px solid #e3e6f0; color:#4a4949;font-weight: bold"
                                            cellspacing="0">
                                            <tr style="border: 2px solid #e3e6f0">
                                                <th colspan="5" style="color:#ffffff; background-color: #003459 ">
                                                    Community Tax Certificate No.</th>
                                            </tr>
                                            <tr style="border: none">
                                                <td style="border: none">Issued At
                                                    <input type="date" class="form-control"
                                                        style="color:#4a4949;border:none; padding-left: 10px; background-color: #E0F1FD; "
                                                        id="IssuedAt" name="IssuedAt" readonly>
                                                </td>
                                                <td style="border: none">
                                                    Issued On
                                                    <br> <input type="date" class="form-control"
                                                        style="color:#4a4949;border:none; padding: 10px; background-color: #E0F1FD;"
                                                        id="IssuedOn" name="IssuedOn" readonly>
                                                </td>
                                                <td style="border: none">
                                                    Resident Since
                                                    <br> <input type="date" class="form-control"
                                                        style="color:#4a4949;border:none; padding: 10px; background-color: #E0F1FD;"
                                                        id="ResidentSince" name="ResidentSince" readonly>
                                                </td>

                                            </tr>

                                        </table>
                                        <table class="table"
                                            style="border: 2px solid #e3e6f0; color:#4a4949;font-weight: bold"
                                            cellspacing="0">
                                            <tr style="border: 2px solid #e3e6f0">
                                                <th colspan="5" style="color:#ffffff; background-color: #003459 ">
                                                    Government Benefits</th>
                                            </tr>
                                            <tr style="border: none">
                                                <td style="border: none">GSIS No.
                                                    <input type="text" class="form-control"
                                                        style="color:#4a4949;border:none; padding-left: 10px; background-color: #E0F1FD; "
                                                        id="GSIS" name="GSIS" readonly>

                                                </td>
                                                <td style="border: none">
                                                    HDMF No.
                                                    <br> <input type="text" class="form-control"
                                                        style="color:#4a4949;border:none; padding: 10px; background-color: #E0F1FD;"
                                                        id="HDMF" name="HDMF" readonly>

                                                </td>
                                                <td style="border: none">
                                                    TIN No.
                                                    <br> <input type="text" class="form-control"
                                                        style="color:#4a4949;border:none; padding: 10px; background-color: #E0F1FD;"
                                                        id="TIN" name="TIN" readonly>

                                                </td>
                                                <td style="border: none; width: 190px">
                                                    NBI No.
                                                    <br> <input type="text" class="form-control"
                                                        style="color:#4a4949;border:none; padding: 10px; background-color: #E0F1FD;"
                                                        id="NBI" name="NBI" readonly>

                                                </td>
                                            </tr>

                                        </table>
                                        <table class="table"
                                            style="border: 2px solid #e3e6f0; color:#4a4949;font-weight: bold"
                                            cellspacing="0">
                                            <tr style="border: 2px solid #e3e6f0">
                                                <th colspan="5" style="color:#ffffff; background-color: #003459 ">
                                                    Information of Immediate Family </th>
                                            </tr>
                                            <tr style="border: none">
                                                <td style="border: none">Mother's Name
                                                    <input type="text" class="form-control"
                                                        style="color:#4a4949;border:none; padding-left: 10px; background-color: #E0F1FD; "
                                                        id="MotherName" name="MotherName" readonly>
                                                    Father's Name
                                                    <input type="text" class="form-control"
                                                        style="color:#4a4949;border:none; padding-left: 10px; background-color: #E0F1FD; "
                                                        id="FatherName" name="FatherName" readonly>
                                                    Spouse Name
                                                    <input type="text" class="form-control"
                                                        style="color:#4a4949;border:none; padding-left: 10px; background-color: #E0F1FD; "
                                                        id="SpouseName" name="SpouseName" readonly>
                                                    Children's Name
                                                    <textarea rows="4" cols="50" class="form-control"
                                                        style="color:#4a4949;border:none; padding-left: 10px; background-color: #E0F1FD; "
                                                        id="ChildrenName" name="ChildrenName" readonly>
                                        </textarea>
                                                </td>
                                                <td style="border: none">
                                                    Occupation
                                                    <br> <input type="text" class="form-control"
                                                        style="color:#4a4949;border:none; padding: 10px; background-color: #E0F1FD;"
                                                        id="MotherOccupation" name="MotherOccupation" readonly>
                                                    Occupation
                                                    <br> <input type="text" class="form-control"
                                                        style="color:#4a4949;border:none; padding: 10px; background-color: #E0F1FD;"
                                                        id="FatherOccupation" name="FatherOccupation" readonly>
                                                    Occupation
                                                    <br> <input type="text" class="form-control"
                                                        style="color:#4a4949;border:none; padding: 10px; background-color: #E0F1FD;"
                                                        id="SpouseOccupation" name="SpouseOccupation" readonly>

                                                </td>

                                            </tr>

                                        </table>
                                        <table class="table"
                                            style="border: 2px solid #e3e6f0; color:#4a4949;font-weight: bold"
                                            cellspacing="0">
                                            <tr style="border: 2px solid #e3e6f0">
                                                <th colspan="5" style="color:#ffffff; background-color: #003459 ">
                                                    Financial Information</th>
                                            </tr>
                                            <tr style="border: none">
                                                <td style="border: none">
                                                    Employment Status
                                                    <input type="text" class="form-control"
                                                        style="color:#4a4949;border:none; padding-left: 10px; background-color: #E0F1FD; "
                                                        id="Employment" name="Employment" readonly>
                                                    Source Income
                                                    <input type="text" class="form-control"
                                                        style="color:#4a4949;border:none; padding-left: 10px; background-color: #E0F1FD; "
                                                        id="Source" name="Source" readonly>
                                                    Employer or Business Name (if Self-Employed)
                                                    <input type="text" class="form-control"
                                                        style="color:#4a4949;border:none; padding-left: 10px; background-color: #E0F1FD; "
                                                        id="Employer" name="Employer" readonly>
                                                    Nature of Employer's Business / Your Business
                                                    <input type="text" class="form-control"
                                                        style="color:#4a4949;border:none; padding-left: 10px; background-color: #E0F1FD; "
                                                        id="Nature" name="Nature" readonly>
                                                    </textarea>
                                                </td>
                                                <td style="border: none">
                                                    Position in Company
                                                    <br> <input type="text" class="form-control"
                                                        style="color:#4a4949;border:none; padding: 10px; background-color: #E0F1FD;"
                                                        id="PositionCompany" name="PositionCompany" readonly>
                                                    Personal Monthly Income
                                                    <br> <input type="text" class="form-control"
                                                        style="color:#4a4949;border:none; padding: 10px; background-color: #E0F1FD;"
                                                        id="PersonalMonthlyIncome" name="PersonalMonthlyIncome"
                                                        readonly>
                                                    Employment Date/Date when business was Established
                                                    <br> <input type="text" class="form-control"
                                                        style="color:#4a4949;border:none; padding: 10px; background-color: #E0F1FD;"
                                                        id="EmploymentbusinessEstablished"
                                                        name="EmploymentbusinessEstablished" readonly>

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

            </div>
        </div>
    </div>

    <!-- Verify lotModal  -->
    <form method="POST" Action="sales_InsertData.php" >
        <div class="modal fade bd-example-modal-lg1" id="verify" tabindex="-1" role="dialog"
            aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="ChildrenTable">

                        <div style="font-size: 14px; padding: 8px; color:#4a4949">
                            <input type="radio" style="color:#4a4949; margin-right: 5px;" name="Description"
                                onclick="showlot();" checked> Lot
                            <input type="radio" style="color:#4a4949; margin-right: 5px; margin-left: 30px;"
                                onclick="showcrypt();" name="Description"> Crypt
                        </div>
                        <div id="showlotdiv1"
                            style="color:#ffffff; background-color:#007ea7; font-size: 15px; padding: 8px">Lot
                            Description
                        </div>
                        <div class="card-body" style="color:#4a4949; " id="showlotdiv">
                            <div class="table-responsive" style="" id="showlotdescdiv">
                                <table id="dtlotDescRecord" class="table table-striped table-bordered table-sm"
                                    style="width: 100%;color:#4a4949; white-space: nowrap;" cellspacing="0"
                                    width="100%">
                                    <thead>

                                        <tr style="background-color: #00a8e8">
                                            <th class="th-sm" style="font-size: 14px; color:#ffffff ">ID</th>
                                            <th class="th-sm" style="font-size: 14px; color:#ffffff ">Block</th>
                                            <th class="th-sm" style="font-size: 14px; color:#ffffff ">Section</th>
                                            <th class="th-sm" style="font-size: 14px; color:#ffffff ">Lot No.</th>
                                            <th class="th-sm" style="font-size: 14px; color:#ffffff ">Area</th>
                                            <th class="th-sm" style=" font-size: 14px; color:#ffffff ">Phase</th>
                                            <th class="th-sm" style=" font-size: 14px; color:#ffffff ">Type/ Class
                                            </th>
                                            <th class="th-sm" style="font-size: 14px; color:#ffffff ">List Price
                                            </th>
                                            <th class="th-sm" style="font-size: 14px; color:#ffffff ">Tools</th>
                                            </th>
                                        </tr>
                                    </thead>

                                    <tbody style="border: 2px solid #e3e6f0;">
                                        <?php
                                        $sales_query = "SELECT * from tbl_lotdescription WHERE status = 'Available'";
                                        $sales_result = mysqli_query($connection, $sales_query);
                                        if (mysqli_num_rows($sales_result) > 0) {
                                        while ($row = mysqli_fetch_assoc($sales_result)) {
                                    ?>
                                        <tr style="border: 2px solid #e3e6f0">
                                            <td style="font-size: 14px; color:#4a4949 " class="lot_id table-cell"><?=$row['id']?></td>
                                            <td style="font-size: 14px; color:#4a4949 " class="lot_block table-cell"><?=$row['block']?></td>
                                            <td style="font-size: 14px; color:#4a4949 " class="lot_section table-cell"><?=$row['section']?></td>
                                            <td style="font-size: 14px; color:#4a4949 " class="lot_no table-cell"><?=$row['lot_no']?></td>
                                            <td style="font-size: 14px; color:#4a4949 " class="lot_area table-cell"><?=$row['area']?></td>
                                            <td style="font-size: 14px; color:#4a4949 " class="lot_phase table-cell"><?=$row['phase']?></td>
                                            <td style="font-size: 14px; color:#4a4949 " class="lot_type table-cell"><?=$row['type']?></td>
                                            <td style="font-size: 14px; color:#4a4949 " class="lot_TCP table-cell "><?= '₱ ' . number_format($row['ListPrice'], 2, '.', ',') ?></td>
                                            
                                            <td style="font-size: 14px; color:#4a4949 " class="table-cell ">

                                                <a href="#" onclick="toggleModal(this, 1)" data-toggle="modal"
                                                    data-target=".lotdesc"
                                                    style="color:#ffffff; font-size:12px; padding: 5px;width: 100%; background-color: #ef476f"
                                                    class="btn btn-primary" data-controls-modal="myModal"
                                                    data-backdrop="static" data-keyboard="false"><i
                                                        class="fas fa-cart-plus"></i> Get Reservation</a></th>

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
                            <div style=" width: 100%; text-align: left; ">
                                <div
                                    style="float: left; width: 40%; height: 500px; padding: 40px 10px; margin-bottom: 5px; color:#4a4949; font-size: 14px; font-weight: bold;background-color: #fcd8b6;">
                                    <table style="width:100%; color:#4a4949; font-size: 14px; font-weight: bold;">
                                        <tr>
                                            <td style="width:40%">Customer Name:</td>
                                            <td><input type="text" id="Fullname1" name="Fullname1"
                                                    style="color:#4a4949;border:none; background-color: transparent;padding:2px; font-size: 14px"
                                                    readonly></td>
                                        </tr>
                                        <tr>
                                            <td style="width:40%"> Customer Code:</td>
                                            <td><input type="text" id="customerCode1" name="customerCode1"
                                                    style="color:#4a4949;border:none; background-color: transparent;padding:2px; font-size: 14px"
                                                    readonly></td>
                                            <input type="text" id="id1" name="id1" class="form-control"
                                                style="color:#4a4949;border:none; width: 95%;background-color: transparent; padding-left: 30px; font-size: 14px"
                                                hidden readonly>

                                        </tr>
                                        <tr>
                                            <td style="width:40%"> Accredited Date:</td>
                                            <td><input type="text" id="date1" name="date1"
                                                    style="color:#4a4949;border:none; background-color: transparent;padding:2px; font-size: 14px"
                                                    readonly></td>
                                        </tr>
                                        <tr>
                                            <td style="width:40%">Lot ID:</td>
                                            <td><input type="text"
                                                    style="color:#4a4949;border:none; background-color: transparent;padding:2px; font-size: 14px"
                                                    id="lot_id1" name="lot_id1" readonly></td>
                                        </tr>
                                        <tr>
                                            <td style="width:40%">Block:</td>
                                            <td><input type="text"
                                                    style="color:#4a4949;border:none; background-color: transparent;padding:2px; font-size: 14px"
                                                    id="lot_block1" name="lot_block1" readonly></td>
                                        </tr>
                                        <tr>
                                            <td style="width:40%">Section:</td>
                                            <td><input type="text"
                                                    style="color:#4a4949;border:none; background-color: transparent;padding:2px; font-size: 14px"
                                                    id="lot_section1" name="lot_section1" readonly></td>
                                        </tr>
                                        <tr>
                                            <td style="width:40%">Lot No:</td>
                                            <td><input type="text"
                                                    style="color:#4a4949;border:none; background-color: transparent;padding:2px; font-size: 14px"
                                                    id="lot_no1" name="lot_no1" readonly></td>
                                        </tr>
                                        <tr>
                                            <td style="width:40%">Area:</td>
                                            <td><input type="text"
                                                    style="color:#4a4949;border:none; background-color: transparent;padding:2px; font-size: 14px"
                                                    id="lot_area1" name="lot_area1" readonly></td>
                                        </tr>
                                        <tr>
                                            <td style="width:40%">Phase:</td>
                                            <td><input type="text"
                                                    style="color:#4a4949;border:none; background-color: transparent;padding:2px; font-size: 14px"
                                                    id="lot_phase1" name="lot_phase1" readonly></td>
                                        </tr>
                                        <tr>
                                            <td style="width:40%">Type / Class:</td>
                                            <td><input type="text"
                                                    style="color:#4a4949;border:none; background-color: transparent;padding:2px; font-size: 14px"
                                                    id="lot_type1" name="lot_type1" readonly></td>
                                        </tr>
                                    </table>
                                </div>

                                <div 
                                    style="float: right; width: 60%; height: 500px; margin-bottom: 30px;  padding: 40px 10px;  color:#4a4949; font-size: 14px; font-weight: bold;background-color: #fcd8b6;">
                                    <div style="width: 100%;  border-color: #5B7EDE">
                                        <table class="table" cellspacing="0">
                                            <tr style="border: none;">
                                                <td
                                                    style="border: none; width: 50%; color:#4a4949; font-size: 13px;background-color: Transparent;padding-right:2px;padding-bottom:2px;padding-top:15px;margin:2px; font-weight: bold">
                                                     Terms :<br>
                                                    <select type="text" class="form-control"
                                                        style="padding: 8px; color:#4a4949; font-size: 13px; " disabled
                                                        id="terms" name="terms">
                                                        <option style="color:#4a4949" name="preNeedPrice"
                                                            value="PreNeedPrice"> Pre-Need Price</option>
                                                        <option style="color:#4a4949" name="AtNeedPrice"
                                                            value="AtNeedPrice"> AT-Need Price</option>
                                                        <option style="color:#4a4949" name="SpotCash" id="SpotCash" value="SpotCash">
                                                            Spot Cash</option>
                                                        <option style="color:#4a4949" name="mCash" id="M_Cash" value="M_Cash">M-Cash
                                                            30 Days</option>
                                                        <option style="color:#4a4949" name="Installment"
                                                            value="Installment">Installment</option>
                                                    </select>
                                                </td>
                                            </tr>

                                            <tr style="border: none;">
                                                <td
                                                    style="border: none; width: 50%; color:white; font-size: 13px;background-color: #5B7EDE;padding-left:15px;padding-right:2px;padding-bottom:2px;padding-top:15px;margin:2px; font-weight: bold">
                                                    Lot List Price :
                                                </td>
                                                <td
                                                    style="border: none;background-color: #5B7EDE;color:#4a4949;padding-left:15px;padding-right:15px;padding-bottom:2px;padding-top:15px;margin:2px; font-weight: bold;">

                                                    <input readonly placeholder="₱ 0.00"
                                                        pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency"
                                                        oninput="compute()"
                                                        style="padding:2px 15px; width: 95%; font-size: 13px; margin:2px; background-color: #FDFDFD ;border: none;color:#4a4949"
                                                        id="lotListPrice" name="lotListPrice"></input>
                                                </td>
                                            </tr>

                                            <tr style="border: none">
                                                <td
                                                    style="border: none; width: 50%; color:white;font-size: 13px; background-color: #5B7EDE;padding:2px 15px;margin:2px; font-weight: bold;">
                                                    Value Added Tax (_)% :
                                                </td>
                                                <?php
                                                $sales_query = "SELECT * from tbl_tax";
                                                $sales_result = mysqli_query($connection, $sales_query);
                                                    if (mysqli_num_rows($sales_result) > 0) {
                                                    while ($row = mysqli_fetch_assoc($sales_result)) {
                                                ?>
                                                <td class="taxID" name="taxID" hidden><?=$row['id']?></td>

                                                <td
                                                    style="border: none;background-color: #5B7EDE;color:#4a4949;padding:2px 15px;margin:2px;">

                                                    <input placeholder="₱ 0.00"
                                                        style="padding:2px 15px; font-size: 13px; margin:2px; background-color: #e8e4c9 ;border: none;color:#4a4949; width:  95%"
                                                        id="taxs" name="taxs" value="<?=$row['tax']?>" hidden></input>

                                                    <input placeholder="₱ 0.00"
                                                        style="padding:2px 15px; font-size: 13px;  margin:2px; background-color: #e8e4c9 ;border: none;color:#4a4949; width:  95%"
                                                        id="taxs1" name="taxs1" readonly></input>

                                                    <script>
                                                    let tableRowElement1;

                                                    function toggleModal1(element1) {
                                                        tableRowElement1 = element1.parentElement.parentElement;

                                                        const taxID1 = tableRowElement1.getElementsByClassName(
                                                            'taxID')[0].innerHTML;
                                                        document.getElementById('taxID').value = taxID1;
                                                    }
                                                    </script>
                                                    <sup hidden> <a href="#" onclick="toggleModal1(this, 1)"
                                                            data-toggle="modal" data-target="#tax"><i
                                                                class="fa fa-gears"
                                                                style="font-size: 11px; color:white;"></i></a></sup>

                                                </td>
                                                <?php
                                                 }
                                                    }
                                                ?>
                                            </tr>
                                            <tr style="border: none">
                                                <td
                                                    style="border: none;background-color: #5B7EDE;font-size: 13px;color:white;padding:2px 15px;margin:2px; font-weight: bold;">
                                                    Subtotal :
                                                </td>
                                                <td
                                                    style="border: none;background-color: #5B7EDE;color:#4a4949;padding:2px 15px;margin:2px;">
                                                    <input placeholder="₱ 0.00" readonly
                                                        pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency"
                                                        style="padding:2px 15px; width:  95%; font-size: 13px; margin:2px; background-color: #e8e4c9 ;border: none;color:#4a4949"
                                                        id="subtotaltax" name="subtotaltax"></input>
                                                </td>
                                            </tr>

                                            <tr style="border: none">

                                                <td
                                                    style="border: none;background-color: #5B7EDE;font-size: 13px;color:white;padding:2px 15px;margin:2px; font-weight: bold;">
                                                    Perpetual Care Funds :
                                                </td>
                                                <?php
                                                    $sales_query1 = "SELECT * from tbl_PCF";
                                                    $sales_result1 = mysqli_query($connection, $sales_query1);
                                                    if (mysqli_num_rows($sales_result1) > 0) {
                                                    while ($row = mysqli_fetch_assoc($sales_result1)) {
                                                    ?>

                                                <td class="PCFID" name="PCFID" hidden><?=$row['id']?></td>

                                                <td
                                                    style="border: none;background-color: #5B7EDE;color:#4a4949;padding:2px 15px;margin:2px;">


                                                    <input placeholder="₱ 0.00" readonly
                                                        pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency"
                                                        style="padding:2px 15px; width:  95%; font-size: 13px; margin:2px; background-color: #e8e4c9 ;border: none;color:#4a4949; width: 95%"
                                                        id="pcf" name="pcf" value="₱ <?=$row['PCF']?>"></input>

                                                        <input placeholder="₱ 0.00" hidden readonly
                                                        pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency"
                                                        style="padding:2px 15px; width:  95%; font-size: 13px; margin:2px; background-color: #e8e4c9 ;border: none;color:#4a4949; width: 95%"
                                                        id="pcf1" name="pcf1" value="₱ <?=$row['PCF']?>"></input>

                                                    <script>
                                                    let tableRowElement1;

                                                    function toggleModal1(element1) {
                                                        tableRowElement1 = element1.parentElement.parentElement;

                                                        const PCFID1 = tableRowElement1.getElementsByClassName(
                                                            'PCFID')[0].innerHTML;
                                                        document.getElementById('PCFID').value = PCFID1;
                                                    }
                                                    </script>
                                                    <sup hidden> <a href="#" onclick="toggleModal1(this, 1)"
                                                            data-toggle="modal" data-target="#PCF"><i
                                                                class="fa fa-gears"
                                                                style="font-size: 11px; color:white;"></i></a></sup>

                                                </td>
                                                <?php
                                                 }
                                                    }
                                                ?>
                                                </td>
                                            </tr>
                                            <tr style="border: none">
                                                <td
                                                    style="border: none;background-color: #5B7EDE;font-size: 13px;color:white;padding:2px 15px;margin:2px; font-weight: bold;">
                                                    Less Discount :
                                                </td>
                                                <?php
                                                    $sales_query1 = "SELECT * from tbl_discount";
                                                    $sales_result1 = mysqli_query($connection, $sales_query1);
                                                    if (mysqli_num_rows($sales_result1) > 0) {
                                                    while ($row = mysqli_fetch_assoc($sales_result1)) {
                                                    ?>

                                                <td class="discountID" name="discountID" hidden><?=$row['id']?>
                                                </td>
                                                <td
                                                    style="border: none;background-color: #5B7EDE;color:#4a4949;padding:2px 15px;margin:2px;">
                                                    <input placeholder="₱ 0.00"
                                                        style="padding:2px 15px; font-size: 13px; width:  95%%; margin:2px; background-color: #e8e4c9 ;border: none;color:#4a4949;width: 95%"
                                                        id="discounts" name="discounts" value="<?=$row['discount']?>"
                                                        hidden></input>

                                                    <input placeholder="₱ 0.00"
                                                        style="padding:2px 15px; font-size: 13px; width:  95%; margin:2px; background-color: #e8e4c9 ;border: none;color:#4a4949;width: 95%"
                                                        id="discounts1" name="discounts1" readonly></input>
                                                    <script>
                                                    let tableRowElement1;

                                                    function toggleModal1(element1) {
                                                        tableRowElement1 = element1.parentElement.parentElement;

                                                        const taxID1 = tableRowElement1.getElementsByClassName(
                                                            'discountID')[0].innerHTML;
                                                        document.getElementById('discountID').value = taxID1;
                                                    }
                                                    </script>
                                                    <sup hidden> <a href="#" onclick="toggleModal1(this, 1)"
                                                            data-toggle="modal" data-target="#discount"><i
                                                                class="fa fa-gears"
                                                                style="font-size: 11px; color:white;"></i></a></sup>

                                                </td>
                                                <?php
                                                 }
                                                    }
                                                ?>
                                                </td>

                                            </tr>
                                            <tr style="border: none">
                                                <td
                                                    style="border: none;background-color: #5B7EDE;font-size: 13px;color:white;padding:2px 15px;margin:2px; font-weight: bold;">
                                                    Subtotal :
                                                </td>
                                                <td
                                                    style="border: none;background-color: #5B7EDE;color:#4a4949;padding:2px 15px;margin:2px;">
                                                    <input placeholder="₱ 0.00" readonly
                                                        pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency"
                                                        style="padding:2px 15px; width:   95%; font-size: 13px; margin:2px; background-color: #e8e4c9 ;border: none;color:#4a4949"
                                                        id="subtotalDiscount" name="subtotalDiscount"></input>
                                                </td>
                                            </tr>
                                            <tr style="border: none">
                                                <td id="PreNeedPrice"
                                                    style="border: none;background-color: #5B7EDE;font-size: 13px;color:white;padding:2px 15px;margin:2px; font-weight: bold;">
                                                    Total Contract Price :
                                                </td>
                                                <td
                                                    style="border: none;background-color: #5B7EDE;color:#4a4949;padding:2px 15px;margin:2px;">
                                                    <input placeholder="₱ 0.00" readonly
                                                        pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency"
                                                        oninput="computedp()"
                                                        style="padding:2px 15px; width:  95%; font-size: 13px; margin:2px; background-color: #FDFDFD ;border: none;color:#4a4949"
                                                        id="totalContractPrice3" name="totalContractPrice3"></input>
                                                </td>
                                            </tr>
                                            <tr hidden style="border: none">
                                                <td hidden
                                                    style="border: none;background-color: #5B7EDE;font-size: 13px;color:white;padding:2px 15px;margin:2px; font-weight: bold;">
                                                    Add_% Mark-up :
                                                </td>
                                                <?php
                                                    $sales_query1 = "SELECT * from tbl_Markup";
                                                    $sales_result1 = mysqli_query($connection, $sales_query1);
                                                    if (mysqli_num_rows($sales_result1) > 0) {
                                                    while ($row = mysqli_fetch_assoc($sales_result1)) {
                                                    ?>

                                                <td hidden class="MarkupID" name="MarkupID" hidden>
                                                    <?=$row['id']?></td>
                                                <td hidden
                                                    style="border: none;background-color: #5B7EDE;color:#4a4949;padding:2px 15px;margin:2px;">
                                                    <input placeholder="₱ 0.00" readonly
                                                        style="padding:2px 15px; font-size: 13px; margin:2px; background-color: #e8e4c9; width: 95% ;border: none;color:#4a4949;width: 95%"
                                                        id="markup" name="markup" value="<?=$row['markup']?>"
                                                        hidden></input>
                                                    <input placeholder="₱ 0.00" readonly
                                                        style="padding:2px 15px; font-size: 13px; margin:2px; background-color: #e8e4c9 ; width: 95%;border: none;color:#4a4949;width: 95%"
                                                        id="markup1" name="markup1"></input>

                                                    <script>
                                                    let tableRowElement1;

                                                    function toggleModal1(element1) {
                                                        tableRowElement1 = element1.parentElement.parentElement;

                                                        const MarkupID1 = tableRowElement1
                                                            .getElementsByClassName('MarkupID')[0].innerHTML;
                                                        document.getElementById('MarkupID').value = MarkupID1;
                                                    }
                                                    </script>
                                                    <sup hidden> <a href="#" onclick="toggleModal1(this, 1)"
                                                            data-toggle="modal" data-target="#Markup"><i
                                                                class="fa fa-gears"
                                                                style="font-size: 11px; color:white;"></i></a></sup>

                                                </td>
                                                <?php
                                                 }
                                                    }
                                                ?>
                                                </td>
                                            </tr>
                                            <tr style="border: none" hidden>
                                                <td
                                                    style="border: none;background-color: #5B7EDE;font-size: 13px;color:white;padding:2px 15px;margin:2px; font-weight: bold;">
                                                    At-Needs TCP :
                                                </td>
                                                <td
                                                    style="border: none;background-color: #5B7EDE;color:#4a4949;padding:2px 15px;margin:2px;">
                                                    <input id="atNeedTCP" name="atNeedTCP" placeholder="₱ 0.00"
                                                        style="padding:2px 15px; font-size: 13px; margin:2px; background-color: #e8e4c9 ; width:  95%;border: none;color:#4a4949"></input>
                                                </td>
                                            </tr>
                                            <tr id="downpaymenttr" style="border: none">
                                                <td
                                                    style="border: none;background-color: #5B7EDE;font-size: 13px;color:white;padding:2px 15px;margin:2px; font-weight: bold;">
                                                    Downpayment : <input placeholder="0.00" readonly
                                                        oninput="computedp()" pattern="^\%\d{1,3}(,\d{3})*(\.\d+)?%"
                                                        type="number"
                                                        style="float: right; padding:2px 5px; font-size: 13px; margin:2px; background-color: #e8e4c9 ;border: none;color:#4a4949;width: 25%"
                                                        id="dpPercentage" name="dpPercentage"></input> <a
                                                        style="float: right; font-size: 13px; margin-right:5px; border: none;color:#fffff;width: 5%">%
                                                    </a>
                                                </td>

                                                <td
                                                    style="border: none;background-color: #5B7EDE;color:#4a4949;padding:2px 15px;margin:2px;">
                                                    <?php
                                                    $sales_query1 = "SELECT * from tbl_minimumdppercentage";
                                                    $sales_result1 = mysqli_query($connection, $sales_query1);
                                                    if (mysqli_num_rows($sales_result1) > 0) {
                                                    while ($row = mysqli_fetch_assoc($sales_result1)) {
                                                    ?>

                                                    <input hidden value="<?=$row['minimumDPPercentage']?>"
                                                        placeholder="0.00" readonly oninput="computedp()"
                                                        pattern="^\%\d{1,3}(,\d{3})*(\.\d+)?%" type="number"
                                                        style="float: right; padding:2px 5px; font-size: 13px; margin:2px; background-color: #e8e4c9 ;border: none;color:#4a4949;width: 25%"
                                                        id="minimumdpPercentage" name="minimumdpPercentage"></input>
                                                    <?php
                                                 }
                                                    }
                                                ?>
                                                    <input placeholder="₱ 0.00" pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱"
                                                        oninput="computedownpaymentPercentage()" data-type="currency"
                                                        style="padding:2px 15px; width:  95%; font-size: 13px; margin:2px; background-color: #FDFDFD ;border: none;color:#4a4949"
                                                        id="dpPercentage2" name="dpPercentage2"></input>
                                                    <div id="warningMessage" style="display: none; color: red;">
                                                        Minimum downpayment required is 20%.</div>
                                                </td>
                                            </tr>
                                            <tr id="balancetr" style="border: none;">
                                                <td
                                                    style="border: none;background-color: #5B7EDE;font-size: 13px;color:white;padding:2px 15px;margin:2px; font-weight: bold;">
                                                    Full downpayment :
                                                </td>
                                                <td
                                                    style="border: none;background-color: #5B7EDE;color:#4a4949;padding:2px 15px;margin:2px;">
                                                    <input placeholder="₱ 0.00" readonly
                                                        pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency"
                                                        style="padding:2px 15px; width:  95%; font-size: 13px; margin:2px; background-color: #e8e4c9 ;border: none;color:#4a4949"
                                                        hidden id="balance1" name="balance1"></input>

                                                    <input placeholder="₱ 0.00" readonly
                                                        pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency"
                                                        style="padding:2px 15px; width:  95%; font-size: 13px; margin:2px; background-color: #e8e4c9 ;border: none;color:#4a4949"
                                                        id="balance" name="balance"></input>
                                                    <input placeholder="₱ 0.00" hidden readonly
                                                        pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency"
                                                        style="padding:2px 15px; width:  95%; font-size: 13px; margin:2px; background-color: #e8e4c9 ;border: none;color:#4a4949"
                                                        id="Interest" name="Interest"></input>
                                                    <input placeholder="₱ 0.00" hidden readonly
                                                        pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency"
                                                        style="padding:2px 15px; width:  95%; font-size: 13px; margin:2px; background-color: #e8e4c9 ;border: none;color:#4a4949"
                                                        id="Principal" name="Principal"></input>

                                                </td>
                                            </tr>
                                            <tr hidden id="monthlyInstallmenttr" style="border: none; display: none">
                                                <td
                                                    style="border: none;background-color: #5B7EDE;font-size: 13px;color:white;padding:2px 15px;margin:2px; font-weight: bold;">
                                                    1<sup hidden> st</sup> Monthly Installment :
                                                </td>
                                                <?php
                                                $sales_query = "SELECT * from diminishingratefirsthalf";
                                                $sales_result = mysqli_query($connection, $sales_query);
                                                    if (mysqli_num_rows($sales_result) > 0) {
                                                    while ($row = mysqli_fetch_assoc($sales_result)) {
                                                ?>
                                                <td class="diminishingrateID1" name="diminishingrateID1" hidden>
                                                    <?=$row['id']?></td>

                                                <td
                                                    style="border: none;background-color: #5B7EDE;color:#4a4949;padding:2px 15px;margin:2px;">
                                                    <input placeholder="₱ 0.00" id="MI1" name="MI1" readonly
                                                        pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency"
                                                        style="padding:2px 15px; width:  95%; font-size: 13px; margin:2px; background-color: #FDFDFD ;border: none;color:#4a4949"></input>
                                                    <input placeholder="₱ 0.00" hidden id="MIInterestPercentage1"
                                                        value="<?=$row['interest']?>" name="MIInterestPercentage1"
                                                        readonly pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱"
                                                        data-type="currency"
                                                        style="padding:2px 15px; width:   95%; font-size: 13px; margin:2px; background-color: #FDFDFD ;border: none;color:#4a4949"></input>
                                                    <input placeholder="₱ 0.00" hidden id="MIPrincipalPercentage1"
                                                        value="<?=$row['principal']?>" name="MIPrincipalPercentage1"
                                                        readonly pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱"
                                                        data-type="currency"
                                                        style="padding:2px 15px; width:  95%; font-size: 13px; margin:2px; background-color: #FDFDFD ;border: none;color:#4a4949"></input>
                                                    <input placeholder="₱ 0.00" hidden id="MIPercentage1"
                                                        value="<?=$row['deminishingPercentage']?>" name="MIPercentage1"
                                                        readonly pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱"
                                                        data-type="currency"
                                                        style="padding:2px 15px; width:  95%; font-size: 13px; margin:2px; background-color: #FDFDFD ;border: none;color:#4a4949"></input>


                                                    <sup hidden> <a href="#" onclick="toggleModal1(this, 1)"
                                                            data-toggle="modal" data-target="#firstMonthMIDiv"><i
                                                                class="fa fa-gears"
                                                                style="font-size: 11px; color:white;"></i></a></sup>

                                                </td>
                                                <?php
                                                 }
                                                    }
                                                ?>
                                                </td>
                                            </tr>
                                            <tr hidden id="monthlyInstallmenttr2" style="border: none; display: none">
                                                <td
                                                    style="border: none;background-color: #5B7EDE;font-size: 13px;color:white;padding:2px 15px;margin:2px; font-weight: bold;">
                                                    2<sup hidden> nd</sup> Monthly Installment :
                                                </td>
                                                <?php
                                                $sales_query = "SELECT * from diminishingratesecondhalf";
                                                $sales_result = mysqli_query($connection, $sales_query);
                                                    if (mysqli_num_rows($sales_result) > 0) {
                                                    while ($row = mysqli_fetch_assoc($sales_result)) {
                                                ?>
                                                <td class="taxID" name="taxID" hidden><?=$row['id']?></td>
                                                <td
                                                    style="border: none;background-color: #5B7EDE;color:#4a4949;padding:2px 15px;margin:2px;">
                                                    <input placeholder="₱ 0.00" id="MI2" name="MI2" readonly
                                                        pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency"
                                                        style="padding:2px 15px; width: 95%; font-size: 13px; margin:2px; background-color: #FDFDFD ;border: none;color:#4a4949"></input>

                                                    <input placeholder="₱ 0.00" hidden value="<?=$row['interest']?>"
                                                        id="MIInterestPercentage2" name="MIInterestPercentage2" readonly
                                                        pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency"
                                                        style="padding:2px 15px; width:  95%; font-size: 13px; margin:2px; background-color: #FDFDFD ;border: none;color:#4a4949"></input>
                                                    <input placeholder="₱ 0.00" hidden id="MIPrincipalPercentage2"
                                                        value="<?=$row['principal']?>" name="MIPrincipalPercentage2"
                                                        readonly pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱"
                                                        data-type="currency"
                                                        style="padding:2px 15px; width:  95%; font-size: 13px; margin:2px; background-color: #FDFDFD ;border: none;color:#4a4949"></input>
                                                    <input placeholder="₱ 0.00" hidden id="MIPercentage2"
                                                        value="<?=$row['deminishingPercentage']?>" name="MIPercentage2"
                                                        readonly pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱"
                                                        data-type="currency"
                                                        style="padding:2px 15px; width:  95%; font-size: 13px; margin:2px; background-color: #FDFDFD ;border: none;color:#4a4949"></input>

                                                    <sup hidden> <a href="#" onclick="toggleModal1(this, 1)"
                                                            data-toggle="modal" data-target="#secondMonthMIDiv"><i
                                                                class="fa fa-gears"
                                                                style="font-size: 11px; color:white;"></i></a></sup>

                                                </td>
                                                <?php
                                                 }
                                                    }
                                                ?>
                                                </td>

                                            </tr>

                                            <tr hidden id="factorRatetr" style="border: none; display: none">
                                                <td
                                                    style="border: none;background-color: #5B7EDE;font-size: 13px;color:white;padding:2px 15px;margin:2px; font-weight: bold;">
                                                    Factor rate : <input placeholder="0.00"
                                                        pattern="^\%\d{1,3}(,\d{3})*(\.\d+)?%" type="number"
                                                        style="float: right; padding:2px 5px; font-size: 13px; margin:2px; background-color: #e8e4c9 ;border: none;color:#4a4949;width: 28%"
                                                        id="factorratePercentage" name="factorratePercentage"
                                                        readonly></input> <a
                                                        style="float: right; font-size: 13px; margin-right:5px; border: none;color:#fffff;width: 5%">%
                                                    </a>
                                                </td>
                                                <td
                                                    style="border: none;background-color: #5B7EDE;color:#4a4949;padding:2px 15px;margin:2px;">
                                                    <input placeholder="₱ 0.00" id="factorrate" name="factorrate"
                                                        readonly pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱"
                                                        data-type="currency"
                                                        style="padding:2px 15px; width:   95%; font-size: 13px; margin:2px; background-color: #e8e4c9 ;border: none;color:#4a4949"></input>
                                                </td>
                                            </tr>

                                            <tr id="noYearstr" style="border: none; padding-bottom:30px; display:none ">
                                                <td
                                                    style="border: none;background-color: #5B7EDE;color:white;font-size: 13px;padding:2px 15px;margin:2px; font-weight: bold;">
                                                    No. of Years :

                                                </td>

                                                <td
                                                    style="border: none;background-color: #5B7EDE;color:#4a4949;padding:2px 15px;margin:2px;">
                                                    <select type="number" oninput="MA()"
                                                        style="padding:2px 15px; font-size: 13px; margin:2px; background-color: #FDFDFD ; width:  95%;border: none;color:#4a4949"
                                                        placeholder="₱ 0.00" id="NoOfMonths" name="NoOfMonths">
                                                        <option value="0"> --- SELECT TERMS ---</option>
                                                        <option name="12" value="12"> 1 Year (12 Months)
                                                        </option>
                                                        <option name="24" value="24"> 2 Years (24 Months)
                                                        </option>
                                                        <option name="36" value="36"> 3 Years (36 Months)
                                                        </option>
                                                        <option name="48" value="48"> 4 Years (48 Months)
                                                        </option>
                                                        <option name="60" value="60"> 5 Years (60 Months)
                                                        </option>
                                                        <option name="72" value="72"> 6 Years (72 Months)
                                                        </option>
                                                        <option name="84" value="84"> 7 Years (84 Months)
                                                        </option>
                                                        <option name="96" value="96"> 8 Years (96 Months)
                                                        </option>
                                                        <option name="108" value="108"> 9 Years (108 Months)
                                                        </option>
                                                        <option name="120" value="120"> 10 Years (120 Months)
                                                        </option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr style="border: none; padding-bottom: 30px; ">
                                                <td
                                                    style="border: none;background-color: #5B7EDE;color:#5B7EDE;padding:2px 15px;margin:2px;">
                                                    .
                                                </td>
                                                <td
                                                    style="border: none;background-color: #5B7EDE;color:#5B7EDE;padding:2px 15px;margin:2px;">
                                                    .
                                                </td>
                                            </tr>

                                            <input value="<?php echo $Name; ?>" id="user" name="user" hidden>

                                        </table>
                                    </div>

                                </div>
                            </div>

                            <table class="table " cellspacing="0">
                                <th colspan="5" style="color:#ffffff; background-color:#007ea7; font-size: 14px">
                                Where did you find Southspring?
                                </th>
                                <tr style="color:#4a4949">
                                    <td>
                                    <p style="font-size: 14px;">Please select one of the following options: agent, website, social media, or walk-in.</p>
                                        <select class="form-control" id="marketAnalysis" name="marketAnalysis"
                                            style="color:#4a4949; width: 95%; font-size: 14px"><br>
                                            <option value="Website" name="Website">Website</option>
                                            <option value="Agent" name="Agent">Agent</option> 
                                            <option value="Walkin" name="Walkin">Walk-in</option>
                                            <option value="SocialMedia" name="SocialMedia">Social Media</option>
                                        </select>
                                        
                                    
                                    </td>
                                    
                                </tr>
                            </table>

                            <table class="table " cellspacing="0">
                                <th colspan="5" style="color:#ffffff; background-color:#007ea7; font-size: 14px">
                                    Payment
                                    Method
                                </th>
                                <tr style="color:#4a4949">
                                    <td>Initial Payment<br><input type="date" class="form-control" id="PaymentDueDate"
                                            name="PaymentDueDate"
                                            style="color:#4a4949; font-size: 14px; margin-top: 7px">
                                    </td>
                                    <td>Payment Method<br>
                                        <select class="form-control" id="paymentMethod" name="paymentMethod"
                                            style="color:#4a4949; width: 95%; font-size: 14px"><br>
                                            <option value="">----Select Payment Method----</option>
                                            <option value="Cash" name="Cash">Cash</option>
                                            <option value="Online" name="Online">Online</option>
                                        </select>
                                    </td>
                                    <td>Full downpayment<br><input readonly type="text" class="form-control"
                                            id="totalBalance" name="totalBalance"
                                            style="color:#4a4949; font-size: 14px;">
                                    </td>
                                </tr>
                            </table>

                            <div style="float:right; margin-bottom:10px;">
                                <button type="button" data-toggle="modal" data-target="#lotvouchercodeModal" name="lotpromoVoucher" id="lotpromoVoucher" class="voucher-button">Promo voucher</button>
                                                                <button type="submit" name="lotLedger1" id="lotLedger1" class="save-button">Save</button>
                            </div>
                        </div>


                        <!-- Verify lotModal  -->
                        <div id="showcryptdiv1"
                            style="color:#ffffff; background-color:#007ea7; font-size: 15px; padding: 8px; display:none">
                            Crypt Description
                        </div>

                        <div class="card-body" style="color:#4a4949; display:none" id="showcryptdiv">
                            <div class="table-responsive" style="width: 100%;" id="showcryptdescdiv">
                                <table id="dtcryptDescRecord" class="table table-striped table-bordered table-sm"
                                    style="color:#4a4949 " cellspacing="0" width="100%">
                                    <thead>

                                        <tr style="background-color: #00a8e8">
                                            <th class="th-sm" style="width: 2%; font-size: 14px; color:#ffffff ">ID
                                            </th>
                                            <th class="th-sm" style="width: 10%;font-size: 14px; color:#ffffff ">
                                                Phase</th>
                                            <th class="th-sm" style="width: 10%; font-size: 14px; color:#ffffff ">
                                                Level</th>
                                            <th class="th-sm" style="width: 10%; font-size: 14px; color:#ffffff ">
                                                Area</th>
                                            <th class="th-sm" style="width: 10%; font-size: 14px; color:#ffffff ">
                                                Section</th>
                                            <th class="th-sm" style="width: 10%; font-size: 14px; color:#ffffff ">
                                                Column</th>
                                            <th class="th-sm" style="width: 10%; font-size: 14px; color:#ffffff ">
                                                Unit no</th>
                                            <th class="th-sm" style="width: 10%; font-size: 14px; color:#ffffff ">
                                                Classification</th>
                                            <th class="th-sm" style="width: 10%; font-size: 14px; color:#ffffff ">
                                                List Price</th>
                                            <th class="th-sm" style="width: 6%; font-size: 14px; color:#ffffff ">
                                                Tools</th>
                                        </tr>
                                    </thead>

                                    <tbody style="border: 2px solid #e3e6f0;">
                                        <?php
                                            $sales_query = "SELECT * from tbl_cryptdescription WHERE status = 'Available'";
                                            $sales_result = mysqli_query($connection, $sales_query);
                                            if (mysqli_num_rows($sales_result) > 0) {
                                            while ($row = mysqli_fetch_assoc($sales_result)) {
                                            ?>
                                        <tr style="border: 2px solid #e3e6f0">
                                            <td style="width: 2%;font-size: 14px; color:#4a4949 " class="table-cell"><?=$row['id']?></td>
                                            <td style="width: 10%;font-size: 14px; color:#4a4949 " class="table-cell"><?=$row['phase']?></td>
                                            <td style="width: 10%;font-size: 14px; color:#4a4949 " class="table-cell"><?=$row['level']?></td>
                                            <td style="width: 10%;font-size: 14px; color:#4a4949 " class="table-cell"><?=$row['area']?></td>
                                            <td style="width: 10%;font-size: 14px; color:#4a4949 " class="table-cell"><?=$row['section']?></td>
                                            <td style="width: 10%;font-size: 14px; color:#4a4949 " class="table-cell"><?=$row['crypt_column']?></td>
                                            <td style="width: 10%;font-size: 14px; color:#4a4949 " class="table-cell"><?=$row['unit_no']?></td>
                                            <td style="width: 10%;font-size: 14px; color:#4a4949 " class="table-cell"><?=$row['classification']?></td>
                                            <td style="width: 10%;font-size: 14px; color:#4a4949 " class="table-cell"><?=$row['listPrice']?></td>
                                            <td style="width: 6%;font-size: 14px; color:#4a4949 " class="table-cell">
                                                <button
                                                    style="color:#ffffff; font-size:12px; padding: 5px;width: 100%; background-color: #ef476f"
                                                    type="button" class="btn btn-primary"
                                                    id="cryptlotDescriptionTypeAdd_button"
                                                    name="cryptlotDescriptionTypeAdd_button"
                                                    data-controls-modal="myModal" data-backdrop="static"
                                                    data-keyboard="false"><i class="fas fa-cart-plus"></i> Get
                                                    Reservation</button>
                                            </td>
                                            <?php
                                            }
                                            }
                                            ?>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                            <br>

                            <div id="printmycryptDiv">
                                <div style=" width: 100%; text-align: left; ">
                                    <div
                                        style="float: left; width: 40%; height: 500px; padding: 40px 10px; margin-bottom: 30px; color:#4a4949; font-size: 14px; font-weight: bold;background-color: #fcd8b6;">
                                        <table style="width:100%; color:#4a4949; font-size: 14px; font-weight: bold;">

                                            <tr>
                                                <td style="width:50%; text-align: left">Accredited Date : </td>
                                                <td style="width:50%;"><input type="text" id="date23" name="date23"
                                                        style="width: 90%;  text-align: left;  pointer-events: none; color:#4a4949;border:none; background-color: transparent;padding:2px; font-size: 14px"
                                                        readonly></td>
                                            </tr>
                                            <tr>
                                                <td style="width:50%; text-align: left">Customer Code:</td>
                                                <td style="width:50%;"><input type="text" id="CustomerCode123"
                                                        name="CustomerCode123"
                                                        style="width: 90%;  text-align: left;  pointer-events: none;color:#4a4949;border:none; background-color: transparent;padding:2px; font-size: 14px"
                                                        readonly></td>
                                            </tr>
                                            <tr>
                                                <td style="width:50%; text-align: left">Customer Name:</td>
                                                <td style="width:50%;"><input type="text" id="Fullname2"
                                                        name="Fullname2"
                                                        style="width: 90%; text-align: left;  pointer-events: none;color:#4a4949;border:none; background-color: transparent;padding:2px; font-size: 14px"
                                                        readonly></td>
                                            </tr>

                                            <tr>
                                                <td style="width:50%; text-align: left">Crypt ID:</td>
                                                <td style="width:50%;"><input type="text"
                                                        style="width: 90%; text-align: left; color:#4a4949;border:none; pointer-events: none; background-color: transparent;padding:2px; font-size: 14px"
                                                        id="crypt_id1" name="crypt_id1" readonly></td>
                                            </tr>
                                            <tr>
                                                <td style="width:50%; text-align: left">Crypt Phase:</td>
                                                <td style="width:50%;"><input type="text"
                                                        style="width: 90%; text-align: left;color:#4a4949;border:none; pointer-events: none; background-color: transparent;padding:2px; font-size: 14px"
                                                        id="cryptphase" name="cryptphase" readonly></td>
                                            </tr>
                                            <tr>
                                                <td style="width:50%; text-align: left">Crypt Level:</td>
                                                <td style="width:50%;"><input type="text"
                                                        style="width: 90%; text-align: left; color:#4a4949;border:none; pointer-events: none; background-color: transparent;padding:2px; font-size: 14px"
                                                        id="cryptlevel" name="cryptlevel" readonly></td>
                                            </tr>
                                            <tr>
                                                <td style="width:50%; text-align: left">Crypt Area:</td>
                                                <td style="width:50%;"><input type="text"
                                                        style="width: 90%; text-align: left; color:#4a4949;border:none; pointer-events: none; background-color: transparent;padding:2px; font-size: 14px"
                                                        id="cryptArea" name="cryptArea" readonly></td>
                                            </tr>
                                            <tr>
                                                <td style="width:50%; text-align: left">Crypt Section:</td>
                                                <td style="width:50%;"><input type="text"
                                                        style="width: 90%; text-align: left;color:#4a4949;border:none; pointer-events: none; background-color: transparent;padding:2px; font-size: 14px"
                                                        id="cryptSection" name="cryptSection" readonly></td>
                                            </tr>
                                            <tr>
                                                <td style="width:50%; text-align: left">Crypt Column:</td>
                                                <td style="width:50%;"><input type="text"
                                                        style="width: 90%; text-align: left;color:#4a4949;border:none; background-color: transparent;padding:2px; font-size: 14px"
                                                        id="cryptColumn" name="cryptColumn" readonly></td>
                                            </tr>
                                            <tr>
                                                <td style="width:50%; text-align: left">Crypt Unit no:</td>
                                                <td style="width:50%;"><input type="text"
                                                        style="width: 90%; text-align: left; color:#4a4949;border:none; background-color: transparent;padding:2px; font-size: 14px"
                                                        id="cryptUnit" name="cryptUnit" readonly></td>
                                            </tr>
                                            <tr>
                                                <td style="width:50%; text-align: left">Crypt Classification:</td>
                                                <td style="width:50%;"><input type="text"
                                                        style="width: 90%; text-align: left; color:#4a4949;border:none; pointer-events: none; background-color: transparent;padding:2px; font-size: 14px"
                                                        id="cryptClassification" name="cryptClassification" readonly>
                                                </td>
                                            </tr>

                                        </table>
                                    </div>
                                    <div style="float: right; width: 60%; height: 500px; margin-bottom: 30px;  padding: 40px 10px;  color:#4a4949; font-size: 14px; font-weight: bold;background-color: #fcd8b6;">
                                        <div style="width: 100%;  border-color: #5B7EDE">
                                            <table class="table" cellspacing="0">
                                                <input type="text" id="id1" name="id1" class="form-control"
                                                    style="color:#4a4949;border:none; width: 95%;background-color: transparent; padding-left: 30px; font-size: 14px"
                                                    hidden readonly>
                                                <tr style="border: none;">
                                                    <td
                                                        style="border: none; width: 50%; color:#4a4949; font-size: 13px;background-color: Transparent;padding-right:2px;padding-bottom:2px;padding-top:15px;margin:2px; font-weight: bold">
                                                        Terms :
                                                        <select type="text" disabled class="form-control"
                                                            style="padding: 8px; color:#4a4949; font-size: 13px; width: 100%"
                                                            id="cryptterms" name="cryptterms">

                                                            <option style="color:#4a4949" name="cryptPreNeedPrice"
                                                                value="cryptPreNeedPrice">
                                                                Pre-Need Price</option>
                                                            <option style="color:#4a4949" name="cryptAtNeedPrice"
                                                                value="cryptAtNeedPrice">
                                                                AT-Need Price</option>
                                                            <option style="color:#4a4949" name="cryptSpotCash"
                                                                value="cryptSpotCash">
                                                                Spot
                                                                Cash</option>
                                                            <option style="color:#4a4949" name="cryptM_Cash"
                                                                value="cryptM_Cash">M-Cash
                                                                30
                                                                Days</option>
                                                            <option style="color:#4a4949" name="cryptInstallment"
                                                                value="cryptInstallment">
                                                                Installment</option>
                                                        </select>
                                                    </td>
                                                </tr>

                                                <tr style="border: none;">
                                                    <td
                                                        style="border: none; width: 50%; color:white; font-size: 13px;background-color: #5B7EDE;padding-left:15px;padding-right:2px;padding-bottom:2px;padding-top:15px;margin:2px; font-weight: bold">
                                                        List Price :
                                                    </td>
                                                    <td
                                                        style="border: none;background-color: #5B7EDE;color:#4a4949;padding-left:15px;padding-right:15px;padding-bottom:2px;padding-top:15px;margin:2px; font-weight: bold;">

                                                        <input readonly placeholder="₱ 0.00"
                                                            pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency"
                                                            oninput="cryptcompute()"
                                                            style="padding:2px 15px; width: 95%; font-size: 13px; margin:2px; background-color: #FDFDFD ;border: none;color:#4a4949"
                                                            id="cryptlotListPrice" name="cryptlotListPrice"></input>
                                                    </td>
                                                </tr>

                                                <tr style="border: none">
                                                    <td
                                                        style="border: none; width: 50%; color:white;font-size: 13px; background-color: #5B7EDE;padding:2px 15px;margin:2px; font-weight: bold;">
                                                        Value Added Tax (_)% :
                                                    </td>
                                                    <?php
                                                $sales_query = "SELECT * from tbl_tax";
                                                $sales_result = mysqli_query($connection, $sales_query);
                                                    if (mysqli_num_rows($sales_result) > 0) {
                                                    while ($row = mysqli_fetch_assoc($sales_result)) {
                                                ?>
                                                    <td class="crypttaxID" name="crypttaxID" hidden><?=$row['id']?>
                                                    </td>

                                                    <td
                                                        style="border: none;background-color: #5B7EDE;color:#4a4949;padding:2px 15px;margin:2px;">

                                                        <input placeholder="₱ 0.00"
                                                            style="padding:2px 15px; font-size: 13px; margin:2px; background-color: #e8e4c9 ;border: none;color:#4a4949; width: 95%"
                                                            id="crypttaxs" name="crypttaxs" value="<?=$row['tax']?>"
                                                            hidden></input>

                                                        <input placeholder="₱ 0.00"
                                                            style="padding:2px 15px; font-size: 13px; width: 95%; margin:2px; background-color: #e8e4c9 ;border: none;color:#4a4949; width: 95%"
                                                            id="crypttaxs1" name="crypttaxs1" readonly></input>

                                                        <script>
                                                        let tableRowElement1;

                                                        function toggleModal1(element1) {
                                                            tableRowElement1 = element1.parentElement.parentElement;

                                                            const taxID123 = tableRowElement1
                                                                .getElementsByClassName('crypttaxID')[
                                                                    0].innerHTML;
                                                            document.getElementById('crypttaxID').value = taxID123;
                                                        }
                                                        </script>
                                                        <sup hidden> <a href="#" onclick="toggleModal1(this, 1)"
                                                                data-toggle="modal" data-target="#tax"><i
                                                                    class="fa fa-gears"
                                                                    style="font-size: 11px; color:white;"></i></a></sup>

                                                    </td>
                                                    <?php
                                                 }
                                                    }
                                                ?>
                                                </tr>
                                                <tr style="border: none">
                                                    <td
                                                        style="border: none;background-color: #5B7EDE;font-size: 13px;color:white;padding:2px 15px;margin:2px; font-weight: bold;">
                                                        Subtotal :
                                                    </td>
                                                    <td
                                                        style="border: none;background-color: #5B7EDE;color:#4a4949;padding:2px 15px;margin:2px;">
                                                        <input placeholder="₱ 0.00" readonly
                                                            pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency"
                                                            style="padding:2px 15px; width: 95%; font-size: 13px; margin:2px; background-color: #e8e4c9 ;border: none;color:#4a4949"
                                                            id="cryptsubtotaltax" name="cryptsubtotaltax"></input>
                                                    </td>
                                                </tr>

                                                <tr style="border: none">

                                                    <td
                                                        style="border: none;background-color: #5B7EDE;font-size: 13px;color:white;padding:2px 15px;margin:2px; font-weight: bold;">
                                                        Perpetual Care Funds :
                                                    </td>
                                                    <?php
                                                    $sales_query1 = "SELECT * from tbl_PCF";
                                                    $sales_result1 = mysqli_query($connection, $sales_query1);
                                                    if (mysqli_num_rows($sales_result1) > 0) {
                                                    while ($row = mysqli_fetch_assoc($sales_result1)) {
                                                    ?>

                                                    <td class="cryptPCFID" name="cryptPCFID" hidden><?=$row['id']?>
                                                    </td>

                                                    <td
                                                        style="border: none;background-color: #5B7EDE;color:#4a4949;padding:2px 15px;margin:2px;">


                                                        <input placeholder="₱ 0.00" readonly
                                                            pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency"
                                                            style="padding:2px 15px; width: 95%; font-size: 13px; margin:2px; background-color: #e8e4c9 ;border: none;color:#4a4949; width: 95%"
                                                            id="cryptpcf" name="cryptpcf"
                                                            value="₱ <?=$row['PCF']?>"></input>

                                                        <script>
                                                        let tableRowElement1;

                                                        function toggleModal1(element1) {
                                                            tableRowElement1 = element1.parentElement.parentElement;

                                                            const cryptPCFID1 = tableRowElement1
                                                                .getElementsByClassName(
                                                                    'cryptPCFID')[0].innerHTML;
                                                            document.getElementById('cryptPCFID').value =
                                                                cryptPCFID1;
                                                        }
                                                        </script>
                                                        <sup hidden><a href="#" onclick="toggleModal1(this, 1)"
                                                                data-toggle="modal" data-target="#PCF"><i
                                                                    class="fa fa-gears"
                                                                    style="font-size: 11px; color:white;"></i></a></sup>

                                                    </td>
                                                    <?php
                                                 }
                                                    }
                                                ?>
                                                    </td>
                                                </tr>
                                                <tr style="border: none">
                                                    <td
                                                        style="border: none;background-color: #5B7EDE;font-size: 13px;color:white;padding:2px 15px;margin:2px; font-weight: bold;">
                                                        Less Discount :
                                                    </td>
                                                    <?php
                                                    $sales_query1 = "SELECT * from tbl_discount";
                                                    $sales_result1 = mysqli_query($connection, $sales_query1);
                                                    if (mysqli_num_rows($sales_result1) > 0) {
                                                    while ($row = mysqli_fetch_assoc($sales_result1)) {
                                                    ?>

                                                    <td class="cryptdiscountID" name="cryptdiscountID" hidden>
                                                        <?=$row['id']?></td>
                                                    <td
                                                        style="border: none;background-color: #5B7EDE;color:#4a4949;padding:2px 15px;margin:2px;">
                                                        <input placeholder="₱ 0.00"
                                                            style="padding:2px 15px; font-size: 13px; width: 95%; margin:2px; background-color: #e8e4c9 ;border: none;color:#4a4949;width: 95%"
                                                            id="cryptdiscounts" name="cryptdiscounts"
                                                            value="<?=$row['discount']?>" hidden></input>

                                                        <input placeholder="₱ 0.00"
                                                            style="padding:2px 15px; font-size: 13px; width: 95%; margin:2px; background-color: #e8e4c9 ;border: none;color:#4a4949;width: 95%"
                                                            id="cryptdiscounts1" name="cryptdiscounts1"
                                                            readonly></input>
                                                        <script>
                                                        let tableRowElement1;

                                                        function toggleModal1(element1) {
                                                            tableRowElement1 = element1.parentElement.parentElement;

                                                            const crypttaxID1 = tableRowElement1
                                                                .getElementsByClassName(
                                                                    'cryptdiscountID')[0].innerHTML;
                                                            document.getElementById('cryptdiscountID').value =
                                                                crypttaxID1;
                                                        }
                                                        </script>
                                                        <sup hidden><a href="#" onclick="toggleModal1(this, 1)"
                                                                data-toggle="modal" data-target="#discount"><i
                                                                    class="fa fa-gears"
                                                                    style="font-size: 11px; color:white;"></i></a></sup>

                                                    </td>
                                                    <?php
                                                 }
                                                    }
                                                ?>
                                                    </td>

                                                </tr>
                                                <tr style="border: none">
                                                    <td
                                                        style="border: none;background-color: #5B7EDE;font-size: 13px;color:white;padding:2px 15px;margin:2px; font-weight: bold;">
                                                        Subtotal :
                                                    </td>
                                                    <td
                                                        style="border: none;background-color: #5B7EDE;color:#4a4949;padding:2px 15px;margin:2px;">
                                                        <input placeholder="₱ 0.00" readonly
                                                            pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency"
                                                            style="padding:2px 15px; width: 95%; font-size: 13px; margin:2px; background-color: #e8e4c9 ;border: none;color:#4a4949"
                                                            id="cryptsubtotalDiscount"
                                                            name="cryptsubtotalDiscount"></input>
                                                    </td>
                                                </tr>
                                                <tr style="border: none">
                                                    <td id="cryptPreNeedPrice"
                                                        style="border: none;background-color: #5B7EDE;font-size: 13px;color:white;padding:2px 15px;margin:2px; font-weight: bold;">
                                                        Total Contract Price :
                                                    </td>
                                                    <td
                                                        style="border: none;background-color: #5B7EDE;color:#4a4949;padding:2px 15px;margin:2px;">
                                                        <input placeholder="₱ 0.00" readonly
                                                            pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency"
                                                            oninput="computedp()"
                                                            style="padding:2px 15px; width: 95%; font-size: 13px; margin:2px; background-color: #FDFDFD ;border: none;color:#4a4949"
                                                            id="crypttotalContractPrice3"
                                                            name="crypttotalContractPrice3"></input>
                                                    </td>
                                                </tr>
                                                <tr hidden style="border: none">
                                                    <td hidden
                                                        style="border: none;background-color: #5B7EDE;font-size: 13px;color:white;padding:2px 15px;margin:2px; font-weight: bold;">
                                                        Add_% Mark-up :
                                                    </td>
                                                    <?php
                                                    $sales_query1 = "SELECT * from tbl_Markup";
                                                    $sales_result1 = mysqli_query($connection, $sales_query1);
                                                    if (mysqli_num_rows($sales_result1) > 0) {
                                                    while ($row = mysqli_fetch_assoc($sales_result1)) {
                                                    ?>

                                                    <td hidden class="MarkupID" name="MarkupID" hidden>
                                                        <?=$row['id']?></td>
                                                    <td hidden
                                                        style="border: none;background-color: #5B7EDE;color:#4a4949;padding:2px 15px;margin:2px;">
                                                        <input placeholder="₱ 0.00" readonly
                                                            style="padding:2px 15px; font-size: 13px; margin:2px; background-color: #e8e4c9; width: 95% ;border: none;color:#4a4949;width: 95%"
                                                            id="cryptmarkup" name="cryptmarkup"
                                                            value="<?=$row['markup']?>" hidden></input>
                                                        <input placeholder="₱ 0.00" readonly
                                                            style="padding:2px 15px; font-size: 13px; margin:2px; background-color: #e8e4c9 ; width: 95%;border: none;color:#4a4949;width: 95%"
                                                            id="cryptmarkup1" name="cryptmarkup1"></input>

                                                        <script>
                                                        let tableRowElement1;

                                                        function toggleModal1(element1) {
                                                            tableRowElement1 = element1.parentElement.parentElement;

                                                            const MarkupID1 = tableRowElement1
                                                                .getElementsByClassName('MarkupID')[0]
                                                                .innerHTML;
                                                            document.getElementById('MarkupID').value = MarkupID1;
                                                        }
                                                        </script>
                                                        <sup hidden><a href="#" onclick="toggleModal1(this, 1)"
                                                                data-toggle="modal" data-target="#Markup"><i
                                                                    class="fa fa-gears"
                                                                    style="font-size: 11px; color:white;"></i></a></sup>

                                                    </td>
                                                    <?php
                                                 }
                                                    }
                                                ?>
                                                    </td>
                                                </tr>
                                                <tr style="border: none" hidden>
                                                    <td
                                                        style="border: none;background-color: #5B7EDE;font-size: 13px;color:white;padding:2px 15px;margin:2px; font-weight: bold;">
                                                        At-Needs TCP :
                                                    </td>
                                                    <td
                                                        style="border: none;background-color: #5B7EDE;color:#4a4949;padding:2px 15px;margin:2px;">
                                                        <input id="cryptatNeedTCP" name="cryptatNeedTCP"
                                                            placeholder="₱ 0.00"
                                                            style="padding:2px 15px; font-size: 13px; margin:2px; background-color: #e8e4c9 ; width: 95%;border: none;color:#4a4949"></input>
                                                    </td>
                                                </tr>
                                                <tr id="cryptdownpaymenttr" style="border: none">
                                                    <td
                                                        style="border: none;background-color: #5B7EDE;font-size: 13px;color:white;padding:2px 15px;margin:2px; font-weight: bold;">
                                                        Downpayment : <input placeholder="0.00" readonly
                                                            oninput="cryptcomputedp()"
                                                            pattern="^\%\d{1,3}(,\d{3})*(\.\d+)?%" type="number"
                                                            style="float: right; padding:2px 5px; font-size: 13px; margin:2px; background-color: #e8e4c9 ;border: none;color:#4a4949;width: 25%"
                                                            id="cryptdpPercentage" name="cryptdpPercentage"></input>
                                                        <a
                                                            style="float: right; font-size: 13px; margin-right:5px; border: none;color:#fffff;width: 5%">%
                                                        </a>
                                                    </td>
                                                    <td
                                                        style="border: none;background-color: #5B7EDE;color:#4a4949;padding:2px 15px;margin:2px;">
                                                        <input placeholder="₱ 0.00"
                                                            pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱"
                                                            oninput="cryptcomputedownpaymentPercentage()"
                                                            data-type="currency"
                                                            style="padding:2px 15px; width: 95%; font-size: 13px; margin:2px; background-color: #FDFDFD ;border: none;color:#4a4949"
                                                            id="cryptdpPercentage2" name="cryptdpPercentage2"></input>
                                                        <div id="cryptwarningMessage"
                                                            style="display: none; color: red;">Minimum
                                                            downpayment required is 20%.</div>
                                                    </td>
                                                </tr>
                                                <tr id="cryptbalancetr" style="border: none;">
                                                    <td
                                                        style="border: none;background-color: #5B7EDE;font-size: 13px;color:white;padding:2px 15px;margin:2px; font-weight: bold;">
                                                        Full downpayment :
                                                    </td>
                                                    <td
                                                        style="border: none;background-color: #5B7EDE;color:#4a4949;padding:2px 15px;margin:2px;">
                                                        <input placeholder="₱ 0.00" readonly
                                                            pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency"
                                                            style="padding:2px 15px; width: 95%; font-size: 13px; margin:2px; background-color: #e8e4c9 ;border: none;color:#4a4949"
                                                            hidden id="cryptbalance1" name="cryptbalance1"></input>

                                                        <input placeholder="₱ 0.00" readonly
                                                            pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency"
                                                            style="padding:2px 15px; width: 95%; font-size: 13px; margin:2px; background-color: #e8e4c9 ;border: none;color:#4a4949"
                                                            id="cryptbalance" name="cryptbalance"></input>
                                                        <input placeholder="₱ 0.00" hidden readonly
                                                            pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency"
                                                            style="padding:2px 15px; width: 95%; font-size: 13px; margin:2px; background-color: #e8e4c9 ;border: none;color:#4a4949"
                                                            id="cryptInterest" name="cryptInterest"></input>
                                                        <input placeholder="₱ 0.00" hidden readonly
                                                            pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency"
                                                            style="padding:2px 15px; width: 95%; font-size: 13px; margin:2px; background-color: #e8e4c9 ;border: none;color:#4a4949"
                                                            id="cryptPrincipal" name="cryptPrincipal"></input>

                                                    </td>
                                                </tr>
                                                <tr hidden id="cryptmonthlyInstallmenttr"
                                                    style="border: none; display: none">
                                                    <td
                                                        style="border: none;background-color: #5B7EDE;font-size: 13px;color:white;padding:2px 15px;margin:2px; font-weight: bold;">
                                                        1<sup hidden> st</sup> Monthly Installment:
                                                    </td>
                                                    <?php
                                                $sales_query = "SELECT * from diminishingratefirsthalf";
                                                $sales_result = mysqli_query($connection, $sales_query);
                                                    if (mysqli_num_rows($sales_result) > 0) {
                                                    while ($row = mysqli_fetch_assoc($sales_result)) {
                                                ?>
                                                    <td class="diminishingrateID1" name="diminishingrateID1" hidden>
                                                        <?=$row['id']?>
                                                    </td>

                                                    <td
                                                        style="border: none;background-color: #5B7EDE;color:#4a4949;padding:2px 15px;margin:2px;">
                                                        <input placeholder="₱ 0.00" id="cryptMI1" name="cryptMI1"
                                                            readonly pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱"
                                                            data-type="currency"
                                                            style="padding:2px 15px; width: 95%; font-size: 13px; margin:2px; background-color: #FDFDFD ;border: none;color:#4a4949"></input>
                                                        <input placeholder="₱ 0.00" hidden
                                                            id="cryptMIInterestPercentage1"
                                                            value="<?=$row['interest']?>"
                                                            name="cryptMIInterestPercentage1" readonly
                                                            pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency"
                                                            style="padding:2px 15px; width: 95%; font-size: 13px; margin:2px; background-color: #FDFDFD ;border: none;color:#4a4949"></input>
                                                        <input placeholder="₱ 0.00" hidden
                                                            id="cryptMIPrincipalPercentage1"
                                                            value="<?=$row['principal']?>"
                                                            name="cryptMIPrincipalPercentage1" readonly
                                                            pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency"
                                                            style="padding:2px 15px; width: 95%; font-size: 13px; margin:2px; background-color: #FDFDFD ;border: none;color:#4a4949"></input>
                                                        <input placeholder="₱ 0.00" hidden id="cryptMIPercentage1"
                                                            value="<?=$row['deminishingPercentage']?>"
                                                            name="cryptMIPercentage1" readonly
                                                            pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency"
                                                            style="padding:2px 15px; width: 95%; font-size: 13px; margin:2px; background-color: #FDFDFD ;border: none;color:#4a4949"></input>


                                                        <sup hidden> <a href="#" onclick="toggleModal1(this, 1)"
                                                                data-toggle="modal" data-target="#firstMonthMIDiv"><i
                                                                    class="fa fa-gears"
                                                                    style="font-size: 11px; color:white;"></i></a></sup>

                                                    </td>
                                                    <?php
                                                 }
                                                    }
                                                ?>
                                                    </td>
                                                </tr>
                                                <tr hidden id="cryptmonthlyInstallmenttr2"
                                                    style="border: none; display: none">
                                                    <td
                                                        style="border: none;background-color: #5B7EDE;font-size: 13px;color:white;padding:2px 15px;margin:2px; font-weight: bold;">
                                                        2<sup hidden> nd</sup> Monthly Installment:
                                                    </td>
                                                    <?php
                                                $sales_query = "SELECT * from diminishingratesecondhalf";
                                                $sales_result = mysqli_query($connection, $sales_query);
                                                    if (mysqli_num_rows($sales_result) > 0) {
                                                    while ($row = mysqli_fetch_assoc($sales_result)) {
                                                ?>
                                                    <td class="taxID" name="taxID" hidden><?=$row['id']?></td>
                                                    <td
                                                        style="border: none;background-color: #5B7EDE;color:#4a4949;padding:2px 15px;margin:2px;">
                                                        <input placeholder="₱ 0.00" id="cryptMI2" name="cryptMI2"
                                                            readonly pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱"
                                                            data-type="currency"
                                                            style="padding:2px 15px; width: 95%; font-size: 13px; margin:2px; background-color: #FDFDFD ;border: none;color:#4a4949"></input>

                                                        <input placeholder="₱ 0.00" hidden value="<?=$row['interest']?>"
                                                            id="cryptMIInterestPercentage2"
                                                            name="cryptMIInterestPercentage2" readonly
                                                            pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency"
                                                            style="padding:2px 15px; width: 95%; font-size: 13px; margin:2px; background-color: #FDFDFD ;border: none;color:#4a4949"></input>
                                                        <input placeholder="₱ 0.00" hidden
                                                            id="cryptMIPrincipalPercentage2"
                                                            value="<?=$row['principal']?>"
                                                            name="cryptMIPrincipalPercentage2" readonly
                                                            pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency"
                                                            style="padding:2px 15px; width: 95%; font-size: 13px; margin:2px; background-color: #FDFDFD ;border: none;color:#4a4949"></input>
                                                        <input placeholder="₱ 0.00" hidden id="cryptMIPercentage2"
                                                            value="<?=$row['deminishingPercentage']?>"
                                                            name="cryptMIPercentage2" readonly
                                                            pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency"
                                                            style="padding:2px 15px; width: 95%; font-size: 13px; margin:2px; background-color: #FDFDFD ;border: none;color:#4a4949"></input>

                                                        <sup hidden><a href="#" onclick="toggleModal1(this, 1)"
                                                                data-toggle="modal" data-target="#secondMonthMIDiv"><i
                                                                    class="fa fa-gears"
                                                                    style="font-size: 11px; color:white;"></i></a></sup>

                                                    </td>
                                                    <?php
                                                 }
                                                    }
                                                ?>
                                                    </td>

                                                </tr>

                                                <tr hidden id="cryptfactorRatetr" style="border: none; display: none">
                                                    <td
                                                        style="border: none;background-color: #5B7EDE;font-size: 13px;color:white;padding:2px 15px;margin:2px; font-weight: bold;">
                                                        Factor rate : <input hidden placeholder="0.00"
                                                            pattern="^\%\d{1,3}(,\d{3})*(\.\d+)?%" type="number"
                                                            style="float: right; padding:2px 5px; font-size: 13px; margin:2px; background-color: #e8e4c9 ;border: none;color:#4a4949;width: 25%"
                                                            id="cryptfactorratePercentage"
                                                            name="cryptfactorratePercentage" readonly></input> <a
                                                            style="float: right; font-size: 13px; margin-right:5px; border: none;color:#fffff;width: 5%">%
                                                        </a>
                                                    </td>
                                                    <td
                                                        style="border: none;background-color: #5B7EDE;color:#4a4949;padding:2px 15px;margin:2px;">
                                                        <input placeholder="₱ 0.00" id="cryptfactorrate"
                                                            name="cryptfactorrate" readonly
                                                            pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency"
                                                            style="padding:2px 15px; width: 95%; font-size: 13px; margin:2px; background-color: #e8e4c9 ;border: none;color:#4a4949"></input>
                                                    </td>
                                                </tr>

                                                <tr id="cryptnoYearstr"
                                                    style="border: none; padding-bottom:30px; display:none ">
                                                    <td
                                                        style="border: none;background-color: #5B7EDE;color:white;font-size: 13px;padding:2px 15px;margin:2px; font-weight: bold;">
                                                        No. of Years :

                                                    </td>

                                                    <td
                                                        style="border: none;background-color: #5B7EDE;color:#4a4949;padding:2px 15px;margin:2px;">
                                                        <select type="number" oninput="cryptMA()" id="cryptNoOfMonths"
                                                            name="cryptNoOfMonths"
                                                            style="padding:2px 15px; font-size: 13px; margin:2px; background-color: #FDFDFD ; width: 95%;border: none;color:#4a4949"
                                                            placeholder="₱ 0.00">
                                                            <option value="0"> --- SELECT TERMS ---</option>
                                                            <option name="121" value="121"> 1 Year (12 Months)
                                                            </option>
                                                            <option name="241" value="241"> 2 Years (24 Months)
                                                            </option>
                                                            <option name="361" value="361"> 3 Years (36 Months)
                                                            </option>
                                                            <option name="481" value="481"> 4 Years (48 Months)
                                                            </option>
                                                            <option name="601" value="601"> 5 Years (60 Months)
                                                            </option>
                                                            <option name="721" value="721"> 6 Years (72 Months)
                                                            </option>
                                                            <option name="841" value="841"> 7 Years (84 Months)
                                                            </option>
                                                            <option name="961" value="961"> 8 Years (96 Months)
                                                            </option>
                                                            <option name="1081" value="1081"> 9 Years (108 Months)
                                                            </option>
                                                            <option name="1201" value="1201"> 10 Years (120 Months)
                                                            </option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr style="border: none; padding-bottom: 30px; ">
                                                    <td
                                                        style="border: none;background-color: #5B7EDE;color:#5B7EDE;padding:2px 15px;margin:2px;">
                                                        .
                                                    </td>
                                                    <td
                                                        style="border: none;background-color: #5B7EDE;color:#5B7EDE;padding:2px 15px;margin:2px;">
                                                        .
                                                    </td>
                                                </tr>
                                                <input value="<?php echo $Name; ?>" id="user" name="user" hidden>
                                            </table>
                                        </div>
                                    </div>
                                    <table class="table " cellspacing="0">
                                <th colspan="5" style="color:#ffffff; background-color:#007ea7; font-size: 14px">
                                Where did you find Southspring?
                                </th>
                                <tr style="color:#4a4949">
                                    <td>
                                    <p style="font-size: 14px;">Please select one of the following options: agent, website, social media, or walk-in.</p>
                                        <select class="form-control" id="cryptmarketAnalysis" name="cryptmarketAnalysis"
                                            style="color:#4a4949; width: 95%; font-size: 14px"><br>
                                            <option value="Website" name="Website">Website</option>
                                            <option value="Agent" name="Agent">Agent</option> 
                                            <option value="Walkin" name="Walkin">Walk-in</option>
                                            <option value="SocialMedia" name="SocialMedia">Social Media</option>
                                        </select>
                                        
                                    
                                    </td>
                                    
                                </tr>
                            </table>

                                    <table class="table " cellspacing="0">
                                        <tr>
                                            <th colspan="5"
                                                style="color:#ffffff; background-color:#007ea7; font-size: 14px">
                                                Payment
                                                Method</th>
                                        </tr>
                                        <tr style="color:#4a4949">
                                            <td>Initial Payment<br><input type="date" class="form-control"
                                                    id="cryptPaymentDueDate" name="cryptPaymentDueDate"
                                                    style="color:#4a4949; font-size: 14px; margin-top: 7px">
                                            <td>
                                                Payment Method<br>
                                                <select class="form-control" id="cryptpaymentMethod"
                                                    name="cryptpaymentMethod"
                                                    style="color:#4a4949; background-color:#f7efe4;width: 95%; font-size: 14px; background-color: #f5ebe1;"><br>
                                                    <option value="">------Select Payment Method------</option>
                                                    <option value="cash">Cash</option>
                                                    <option value="online">Online</option>
                                                </select>
                                            </td>
                                            <td>Full Downpayment<br><input readonly type="text" class="form-control"
                                                    id="crypttotalBalance" name="crypttotalBalance"
                                                    style="color:#4a4949; font-size: 14px;">
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div style="float:right; margin-bottom:10px;">
                                <button type="button" data-toggle="modal" data-target="#cryptvouchercodeModal" name="cryptpromoVoucher" id="cryptpromoVoucher" class="voucher-button">Promo voucher</button>
                               
                                <button type="submit" name="cryptLedger" id="cryptLedger"
                                    class="save-button">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!--crypt Promo code  -->
    <div class="modal fade" id="cryptvouchercodeModal">
        <div class="modal-dialog">
            <div class="modal-content">

             <!-- Modal Header -->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

             <!-- Modal body -->
                <div class="modal-body">
                   
                <table class="table " cellspacing="0">
                                        <tr>
                                            <th colspan="5"
                                                style="color:#ffffff; background-color:#007ea7; font-size: 14px">
                                                PROMO VOUCHER</th>
                                        </tr>
                                        <tr style="color:#4a4949">
                                            <td>Voucher code: <br><input type="text" class="form-control"
                                                    id="cryptvouchercode" name="cryptvouchercode"
                                                    style="color:#4a4949; font-size: 14px; margin-top: 7px">
                                                    <div id="cryptnotification" style="padding: 3px 20px; font-size: 12px; border-radius: 0px; margin-bottom: 0px;" class="alert alert-success" role="alert" style="display: none;"></div>
                                            </td>
                                        </tr>
                                        </table>
                                        <div class="modal-footer">
                                                <button type="button" name="promocryptvouchercode" id="promocryptvouchercode" class="voucher-button">Enter voucher code</button>
                                        </div>
                                   
                </div>
            </div>
        </div>
    </div>

    <!--Lot Promo code  -->
    <div class="modal fade" id="lotvouchercodeModal">
        <div class="modal-dialog">
            <div class="modal-content">

             <!-- Modal Header -->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

             <!-- Modal body -->
                <div class="modal-body">
                   
                <table class="table " cellspacing="0">
                                        <tr>
                                            <th colspan="5"
                                                style="color:#ffffff; background-color:#007ea7; font-size: 14px">
                                                PROMO VOUCHER</th>
                                        </tr>
                                        
                                        <tr style="color:#4a4949">
                                            <td>Voucher code: <br><input type="text" class="form-control"
                                                    id="lotvouchercode" name="lotvouchercode" 
                                                    style="color:#4a4949; font-size: 14px; margin-top: 7px"/>

                                                    <div id="notification" style="padding: 3px 20px; font-size: 12px; border-radius: 0px; margin-bottom: 0px;" class="alert alert-success" role="alert" style="display: none;"></div>
                                            </td>
                                        </tr>
                                        </table>
                                        <div class="modal-footer">
                                                <button type="button" name="promolotvouchercode" id="promolotvouchercode"  class="voucher-button">Enter voucher code</button>
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

<!-- Success modal -->
<div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="successModalLabel">Success</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Data updated and inserted successfully!</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript -->
<?php if ($success) { ?>
    <script>
        $(document).ready(function() {
            $('#successModal').modal('show');
        });
    </script>
<?php } ?>

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
  
 
    <script src="myScript/sales_reservation.js"></script>
</body>

</html>

<?php } else {
        
    
        header("location: index.php");
        
        }?>
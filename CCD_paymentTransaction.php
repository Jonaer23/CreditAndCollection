<?php


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

        <title>South Spring</title>
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
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
        <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>

        <!-- Custom styles for this page -->
        <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
                            <span>Credit & Collection</span></a>
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
                        <a class="nav-link" href="CCD_paymentTransaction.php">
                            <i class="fas fa-fw fa-file-alt"></i></i>
                            <span>Payment Transaction</span></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="CCD_paymentVerification.php">
                            <i class="fas fa-fw fa-file-alt"></i></i>
                            <span>Payment Reservation</span></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="CCD_PaymentIntermentVerification.php">
                            <i class="fas fa-fw fa-file-alt"></i></i>
                            <span>Payment Interment</span></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="FORM.Validation_CCDCollection.php">
                            <i class="fas fa-fw fa-file-alt"></i></i>
                            <span>Collection</span></a>
                    </li>

                    <li class="nav-item ">
                        <a class="nav-link" href="FORM.Validation_CCDLedger.php">
                            <i class="fas fa-balance-scale-right"></i></i>
                            <span>Ledger</span></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="FORM.Validation_CCDCertificateOfOwnership.php">
                            <i class="fas fa-fw fas fa-user-tie"></i></i>
                            <span>Certificate Of Ownership</span></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Inventory"
                            aria-expanded="true" aria-controls="Inventory">
                            <i class="fas fa-fw fas fa-file-alt"></i>
                            <span>Inventory</span>
                        </a>
                        <div id="Inventory" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                            <div class="bg-white py-2 collapse-inner rounded">
                                <a class="collapse-item" href="FORM.Validation_CCDInventory_Active.php">Available</a>
                                <a class="collapse-item" href="FORM.Validation_CCDInventory_Inactive.php">Active</a>
                                <a class="collapse-item" href="FORM.Validation_CCDInventory_Lot.php">Lot Inventory</a>
                                <a class="collapse-item" href="FORM.Validation_CCDInventory_Crypt.php">Crypt Inventory</a>
                            </div>
                        </div>
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
                        <p class="text-center mb-2"><strong>SEDGE</strong> is packed with premium features, components,
                            and
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
                                    <img src="img\SouthSpring.png"
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
                                            <span class="font-weight-bold">A new monthly report is ready to
                                                download!</span>
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
                                    <a class="dropdown-item text-center small text-gray-500" href="#">Show All
                                        Alerts</a>
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
                                            <div class="text-truncate">Hi there! I am wondering if you can help me with
                                                a
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
                                            <div class="text-truncate">I have the photos that you ordered last month,
                                                how
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
                                            <div class="text-truncate">Last month's report looks great, I am very happy
                                                with
                                                the progress so far, keep up the good work!</div>
                                            <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="dropdown-list-image mr-3">
                                            <img class="rounded-circle"
                                                src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="...">
                                            <div class="status-indicator bg-success"></div>
                                        </div>
                                        <div>
                                            <div class="text-truncate">Am I a good boy? The reason I ask is because
                                                someone
                                                told me that people say this to all dogs, even if they aren't good...
                                            </div>
                                            <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item text-center small text-gray-500" href="#">Read More
                                        Messages</a>
                                </div>
                            </li>

                            <div class="topbar-divider d-none d-sm-block"></div>

                            <!-- Nav Item - User Information -->
                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span
                                        class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $Name; ?></span>
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
                                                    <div
                                                        class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                        ANNUAL REVENUE</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">

                                                        <?php
                                                        $query = "SELECT YEAR(dateModified) AS year, SUM(monthlyInstallment) AS annual_earnings
                                                          FROM tbl_flatinterest
                                                          WHERE status = 'Paid'
                                                          GROUP BY YEAR(dateModified)
                                                          ORDER BY YEAR(dateModified) DESC";
                                                          
                                                    // Execute the query
                                                    $result = $connection->query($query);
                                                    if (!$result) {
                                                        echo "Error executing query: " . $connection->error;
                                                        exit();
                                                    }

                                                    // Check if any rows were returned
                                                    if ($result->num_rows > 0) {
                                                        $row = $result->fetch_assoc();
                                                        $monthlyEarnings = '₱ ' . number_format($row['annual_earnings'], 2, '.', ',');
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
                                                        MONTHLY REVENUE
                                                    </div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                     <?php
                                                        $query = "SELECT SUM(monthlyInstallment) AS monthly_earnings
                                                          FROM tbl_flatinterest
                                                          WHERE status = 'Paid'
                                                          AND YEAR(dateModified) = YEAR(CURRENT_DATE())
                                                          AND MONTH(dateModified) = MONTH(CURRENT_DATE())";
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
                                    <div class="card border-left-info shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                                        PENDING PAYMENT RESERVATION
                                                    </div>
                                                     <?php
                                                        $query = "SELECT COUNT(*) AS paymentduedate
                                                          FROM tbl_ledger
                                                          WHERE status = 'Pending'";

                                                       
                                                        $result = $connection->query($query);
                                                        if (!$result) {
                                                            echo "Error executing query: " . $connection->error;
                                                            exit();
                                                        }
                                                        
                                                        // Check if any rows were returned
                                                        if ($result->num_rows > 0) {
                                                            while ($row = $result->fetch_assoc()) {
                                                                $appointmentDate = $row['paymentduedate'];
                                                                
                                                                echo "<div class='h5 mb-0 font-weight-bold text-gray-800'>$appointmentDate PAYMENT VERIFICATION </div>";
                                                        
                                                            }
                                                        } else {
                                                            echo "<p>No scheduled appointments found for today.</p>";
                                                        }
                                                        ?>

                                                </div>
                                                <div class="col-auto">
                                                    <i class="fas fa-2x text-gray-300"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-file-earmark-check-fill" viewBox="0 0 16 16">
                                                      <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zm1.354 4.354-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708.708z"/>
                                                    </svg></i>
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
                                                    <div
                                                        class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                        PENDING COLLECTIONS
                                                    </div>
                                                    <?php
                                                        $query = "SELECT COUNT(paymentDueDate) As paymentDueDate
                                                          FROM tbl_flatinterest
                                                          WHERE DATE(paymentDueDate) <= CURRENT_DATE() 
                                                          AND status = 'Unpaid'";
                                                       
                                                        $result = $connection->query($query);
                                                        if (!$result) {
                                                            echo "Error executing query: " . $connection->error;
                                                            exit();
                                                        }
                                                        
                                                        // Check if any rows were returned
                                                        if ($result->num_rows > 0) {
                                                            while ($row = $result->fetch_assoc()) {
                                                                $appointmentDate = $row['paymentDueDate'];
                                                                
                                                                echo "<div class='h5 mb-0 font-weight-bold text-gray-800'>$appointmentDate PENDING COLLECTIONS</div>";
                                                        
                                                            }
                                                        } else {
                                                            echo "<p>No scheduled appointments found for today.</p>";
                                                        }
                                                        ?>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fas fa-2x text-gray-300"> <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-collection-fill" viewBox="0 0 16 16">
                                                          <path d="M0 13a1.5 1.5 0 0 0 1.5 1.5h13A1.5 1.5 0 0 0 16 13V6a1.5 1.5 0 0 0-1.5-1.5h-13A1.5 1.5 0 0 0 0 6v7zM2 3a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 0-1h-11A.5.5 0 0 0 2 3zm2-2a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 0-1h-7A.5.5 0 0 0 4 1z"/>
                                                        </svg></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Page Heading -->
                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary"></h6>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive" style="color: #4a4949">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr class="header"
                                                style="color: #ffffff; background-color: #007ea7;font-size: 13px; ">
                                                <th scope="col" hidden></th>
                                                <th scope="col" class="text-xs text-uppercase mb-1 table-cell text-white">User account</th>
                                                <th scope="col" class="text-xs text-uppercase mb-1 table-cell text-white">Name</th>
                                                <th scope="col" class="text-xs text-uppercase mb-1 table-cell text-white" hidden>Transaction number</th>
                                                <th scope="col" class="text-xs text-uppercase mb-1 table-cell text-white">Reference number</th>
                                                <th scope="col" class="text-xs text-uppercase mb-1 table-cell text-white">Amount</th>
                                                <th scope="col" colspan="2"></th>
                                                
                                                <th scope="col" hidden></th>
                                                <th scope="col" hidden></th>
                                                <th scope="col" hidden></th>
                                                <th scope="col" hidden></th>
                                                <th scope="col" hidden></th>
                                                <th scope="col" hidden></th>
                                                <th scope="col" hidden></th>
                                                <th scope="col" hidden></th>
                                                <th scope="col" hidden></th>
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                            <!-- Table rows will be dynamically populated by JavaScript -->
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Main Content -->
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
        </div>
        <!-- End of Content Wrapper -->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>
        <!-- End of Page Wrapper -->
        </div>
        <!-- Scroll to Top Button-->

        <!-- viewmodal-->
        <div class="modal fade bd-example-modal-lg" id="viewBuyer" tabindex="-1" role="dialog"
            aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"></h5>
                    </div>
                    <div class="modal-body">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <div class="ChildrenTable">
                                    <div style="width: 100%; float: left; border: none;">
                                        <table class="table"
                                            style="width: 50%;border: none;color:#4a4949; padding: 5px; float: left;"
                                            cellspacing="0">

                                            <tr style="border: 2px solid #e3e6f0; background-color: #007ea7">
                                                <th colspan="4" style="color:#ffffff">Personal Information</th>
                                            </tr>
                                            <tr style="border: none; padding-bottom: 0px" hidden>
                                                <td style="width: 40%; border: none; padding-bottom: 0px;">
                                                    <p style="color:#4a4949; font-size: 15px">Transaction Number :</p>
                                                </td>
                                                <td style="width: 60%; border: none; padding-bottom: 0px">
                                                    <input type="text" id="transactionNumber"
                                                        style="color:#4a4949; padding: 0px; margin-top:-7px; font-size: 15px; border:none; background-color: transparent; pointer-events: none;"
                                                        readonly>
                                                </td>
                                            </tr>
                                            <tr style="border: none; padding-bottom: 0px">
                                                <td style="width: 40%; border: none; padding-bottom: 0px;">
                                                    <p style="color:#4a4949; font-size: 15px">Customer Code :</p>
                                                </td>
                                                <td style="width: 60%; border: none; padding-bottom: 0px">
                                                    <input type="text" id="customerCode1"
                                                        style="color:#4a4949; padding: 0px; margin-top:-7px; font-size: 15px; border:none; background-color: transparent; pointer-events: none;"
                                                        readonly>
                                                </td>
                                            </tr>

                                            <tr style="border: none; padding-bottom: 0px">
                                                <td style="width: 15%; border: none; padding-bottom: 0px">
                                                    <p style="color:#4a4949; font-size: 15px"> Customer Name :</p>
                                                </td>
                                                <td style="width: 20%; border: none; padding-bottom: 0px">
                                                    <input type="text" id="Fullname1"
                                                        style="color:#4a4949; padding: 0px; margin-top:-7px; font-size: 15px; border:none; background-color: transparent; pointer-events: none;"
                                                        readonly>

                                                </td>
                                            </tr>
                                        </table>
                                        <table class="table"
                                            style="width: 45%;border: 2px solid #e3e6f0;color:#4a4949; padding: 5px; float: right;"
                                            cellspacing="0">

                                            <tr style="border: 2px solid #e3e6f0; background-color: #007ea7">
                                                <th colspan="4" style="color:#ffffff">Payment Information</th>
                                            </tr>


                                            <tr style="border: none; padding-bottom: 0px">
                                                <td style="width: 20%; border: none; padding-bottom: 0px">

                                                    <img id="proofOfPayment"
                                                        src="\AccountingSoftwareProposal\startbootstrap-sb-admin-2-gh-pages\startbootstrap-sb-admin-2-gh-pages\img\SouthSpring.png"
                                                        width="100%" height="500" style="padding-bottom: 20px"></img>
                                                </td>
                                            </tr>
                                        </table>

                                        <table class="table"
                                            style="width: 50%;border: none;color:#4a4949; padding: 5px; float: left;"
                                            cellspacing="0">

                                            <tr style="border-bottom: 2px solid #e3e6f0; background-color: Transparent; margin-bottom: 20px">
                                                <th colspan="4" style="color:#4a4949">Billing Details</th>
                                            </tr>
                                            <tr style="border: none; padding-bottom: 0px;">
                                                <td style="width: 40%; border: none; padding-bottom: 0px;"><br>
                                                    <p style="color:#4a4949; font-size: 15px">Bank Name :</p>
                                                </td>
                                                <td style="width: 60%; border: none; padding-bottom: 0px"><br>
                                                    <p id="paymentDetailsbankName"
                                                        style="color:#4a4949; font-size: 15px;"></p>
                                                </td>
                                            </tr>
                                            <tr style="border: none; padding-bottom: 0px">
                                                <td style="width: 40%; border: none; padding-bottom: 0px">
                                                    <p style="color:#4a4949; font-size: 15px"> Account Number :</p>
                                                </td>
                                                <td style="width: 60%; border: none; padding-bottom: 0px">
                                                    <p id="paymentDetailsaccountNumber"
                                                        style="color:#4a4949; font-size: 15px; "></p>
                                                </td>
                                            </tr>
                                        </table>
                                        <table class="table"
                                            style="width: 50%;border: none;color:#4a4949; padding: 5px; float: left;"
                                            cellspacing="0">

                                            <tr style="border-bottom: 2px solid #e3e6f0; background-color: Transparent; margin-bottom: 20px">
                                                <th colspan="4" style="color:#4a4949">Payment Details</th>
                                            </tr>
                                            <tr style="border: none; padding-bottom: 0px; padding-top: 20px;">
                                                <td style="width: 40%; border: none; padding-bottom: 0px;"><br>
                                                    <p style="color:#4a4949; font-size: 15px">Bank Name :</p>
                                                </td>
                                                <td style="width: 60%; border: none; padding-bottom: 0px"><br>
                                                    <input type="text" id="bankName"
                                                        style="color:#4a4949; padding: 0px; margin-top:-7px; font-size: 15px; border:none; background-color: transparent; pointer-events: none;"
                                                        readonly>
                                                </td>
                                            </tr>

                                            <tr style="border: none; padding-bottom: 0px">
                                                <td style="width: 40%; border: none; padding-bottom: 0px">
                                                    <p style="color:#4a4949; font-size: 15px"> Account Number :</p>
                                                </td>
                                                <td style="width: 60%; border: none; padding-bottom: 0px">
                                                    <input type="text" id="accountNumber"
                                                        style="color:#4a4949; padding: 0px; margin-top:-7px; font-size: 15px; border:none; background-color: transparent; pointer-events: none;"
                                                        readonly>

                                                </td>
                                            </tr>

                                            <tr style="border: none; padding-bottom: 0px">
                                                <td style="width: 40%; border: none; padding-bottom: 0px">
                                                    <p style="color:#4a4949; font-size: 15px">Reference Number :</p>
                                                </td>
                                                <td style="width: 60%; border: none; padding-bottom: 0px">
                                                    <input type="text" id="referenceNumber"
                                                        style="color:#4a4949; padding: 0px; margin-top:-7px; font-size: 15px; border:none; background-color: transparent; pointer-events: none;"
                                                        readonly>
                                                </td>
                                            </tr>
                                            <tr style="border: none; padding-bottom: 0px">
                                                <td style="width: 40%; border: none; padding-bottom: 0px">
                                                    <p style="color:#4a4949; font-size: 15px">Amount :</p>
                                                </td>
                                                <td style="width: 60%; border: none; padding-bottom: 0px">

                                                    <input type="text" id="amount"
                                                        style="color:#4a4949; padding: 0px; margin-top:-7px; font-size: 15px; border:none; background-color: transparent; pointer-events: none;"
                                                        readonly>
                                                </td>
                                            </tr>

                                            <tr style="border: none; padding-bottom: 0px">
                                                <td style="width: 40%; border: none; padding-bottom: 0px">
                                                    <p style="color:#4a4949; font-size: 15px">Payment Date :
                                                    </p>
                                                </td>
                                                <td style="width: 60%; border: none; padding-bottom: 0px">
                                                    <input type="text" id="created_at"
                                                        style="color:#4a4949; padding: 0px; margin-top:-7px; font-size: 15px; border:none; background-color: transparent; pointer-events: none;"
                                                        readonly>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <!-- buyerinfo Modal -->
            <div class="modal fade" id="downloadModal" tabindex="-1" role="dialog" aria-labelledby="downloadModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="downloadModalLabel"></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <h2>PDF Download</h2>
                            <button onclick="downloadPDF()">Download PDF</button>

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
                        <div class="modal-body">Select "Logout" below if you are ready to end your current session.
                        </div>
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
            <script>
                
$(document).ready(function() {
    function updateTable(data) {
        if (data.length > 0) {
            var tableBody = '';
            for (var i = 0; i < data.length; i++) {
                tableBody += '<tr style="color: #4a4949; font-size: 14px;">';
                tableBody += '<td class="table-cell id" hidden>' + data[i].id + '</td>';
                tableBody += '<td class="table-cell username">' + data[i].username + '</td>';
                tableBody += '<td class="table-cell name">' + data[i].name + '</td>';
                tableBody += '<td class="table-cell transactionNumber" hidden>' + data[i].transactionNumber + '</td>';
                tableBody += '<td class="table-cell referenceNumber">' + data[i].referenceNumber + '</td>';
                tableBody += '<td class="table-cell amount">₱ ' + formatCurrency(data[i].amount) + '</td>';
                tableBody += '<td class="table-cell" style="border-right: none; text-align: center;"><a href="#" onclick="toggleModal(this, 1)" data-toggle="modal" data-target="#viewBuyer" class="view-link"><i class="fas fa-eye"></i></a></td>';
                tableBody += '<td class="table-cell" style="border-left: none;"><a href="#" style="color: red;" class="declined"><i class="fas fa-trash"></i></a></td>';
        
                // Add the hidden fields
                tableBody += '<td class="table-cell proofOfPayment" hidden>' + data[i].proofOfPayment + '</td>';
                tableBody += '<td class="table-cell payersAccountNumber" hidden>' + data[i].payersAccountNumber + '</td>';
                tableBody += '<td class="table-cell dateCreated" hidden>' + data[i].dateCreated + '</td>';
                tableBody += '<td class="table-cell paymentdueDate" hidden>' + data[i].paymentdueDate + '</td>';
                tableBody += '<td class="table-cell created_at" hidden>' + data[i].created_at + '</td>';
                
                tableBody += '<td class="table-cell paymentDetailsbankName" hidden>' + data[i].paymentDetailsbankName + '</td>';
                tableBody += '<td class="table-cell paymentDetailsaccountNumber" hidden>' + data[i].paymentDetailsaccountNumber + '</td>';
                tableBody += '<td class="table-cell bankName" hidden>' + data[i].bankName + '</td>';
                tableBody += '<td class="table-cell accountNumber" hidden>' + data[i].accountNumber + '</td>';
                tableBody += '</tr>';
            }
            $('#dataTable tbody').html(tableBody);
        } else {
            $('#dataTable tbody').html('<tr><td colspan="8">No records found.</td></tr>');
        }
        // Initialize DataTables
        $('#dataTable').DataTable();
                


        // Get all the approved links
      
        var declinedLinks = document.getElementsByClassName('declined');

          // Add event listeners to each link
          for (var i = 0; i < declinedLinks.length; i++) {
            declinedLinks[i].addEventListener('click', function(event) {
                event.preventDefault();
    
                // Get the item ID from the corresponding hidden ID <td> element
                var itemId1 = this.closest('tr').querySelector('.id').textContent;
    
                // Get the parent <td> element
                var tdElement1 = this.parentNode;
    
                // Perform the AJAX request
                declinedStatus(itemId1, tdElement1);
            });
            }

            
        // Function to update the status using AJAX
        function declinedStatus(itemId1, tdElement1) {
            tdElement1.innerHTML = '<i class="fas fa-spinner fa-spin"></i>';
            
            // Set a minimum duration for the spinner (3 seconds)
            var minimumDuration = 300000;
        
            // Perform the AJAX request
            $.ajax({
            type: 'POST',
            url: 'CCD_transactionPaymentDeclined.php', // Replace with the actual URL to your PHP script
            data: { id: itemId1 }, // Pass the item ID to the PHP script
            dataType: 'json',
            success: function(response) {
                // Check if the update was successful
                if (response.success) {
                // Wait for the minimum duration to pass
                setTimeout(function() {
                    tdElement1.innerHTML = '<i class="fas fa-spinner fa-spin"></i>';
                    fetchAppointments();
                }, minimumDuration);
                } else {
                // Show an error message
                console.log('Failed to update the item.');
                }
            },
            error: function(xhr, status, error) {
                // Show an error message
                console.log('An error occurred during the AJAX request.');
            }
            });
        }
    }
   

    function formatCurrency(amount) {
        // Convert the amount to a number and apply the desired formatting
        var formattedAmount = Number(amount).toLocaleString('en-PH', {
            style: 'decimal', minimumFractionDigits: 2, maximumFractionDigits: 2 
        });
    
        // Return the formatted amount
        return formattedAmount;
    }
    
    function getStatusColor(status) {
        switch (status) {
            case 'Active':
                return '#90EE90';
            case 'Pending':
                return '#FFBF00';
            case 'Verified':
                return 'green';
            case 'Declined':
                return 'red';
            default:
                return '';
        }
    }
    
    function getStatusIcon(status) {
        switch (status) {
            case 'Active':
                return 'fas fa-circle';
            case 'Pending':
                return 'fas fa-exclamation-circle';
            case 'Verified':
                return 'fas fa-check';
            case 'Declined':
                return 'fas fa-times';
            default:
                return '';
        }
    }

    function fetchAppointments() {
        $.ajax({
            url: 'CCD_fetch_paymentTransaction.php',
            method: 'POST',
            data: {
                status: 'Paid',
            },
            success: function(response) {
                var data = JSON.parse(response);
                updateTable(data);
            }
        });
    }
    fetchAppointments();
    var pollingInterval = setInterval(fetchAppointments, 300000);

    $(window).on('beforeunload', function() {
        clearInterval(pollingInterval);
       
    });
});
function setSrcById(id, src) {
    var element = document.getElementById(id);
    element.src = src;
  }
  function toggleModal(element, parameter) {
    let tableRowElement1 = element.parentElement.parentElement;
  
    const getValueByClassName = (className) => tableRowElement1.getElementsByClassName(className)[0].innerHTML;
    const setValueById = (id, value) => document.getElementById(id).value = value;
    const setSrcById = (id, src) => document.getElementById(id).src = src;
    const setTextById = (id, text) => document.getElementById(id).textContent = text;
  
    setValueById('customerCode1', getValueByClassName('username'));
    setValueById('Fullname1', getValueByClassName('name'));
    setValueById('amount', getValueByClassName('amount'));
    setSrcById('proofOfPayment', getValueByClassName('proofOfPayment'));
    setValueById('created_at', getValueByClassName('created_at'));
    setValueById('referenceNumber', getValueByClassName('referenceNumber'));
    setValueById('transactionNumber', getValueByClassName('transactionNumber'));
  
    setTextById('paymentDetailsbankName', getValueByClassName('paymentDetailsbankName'));
    setTextById('paymentDetailsaccountNumber', getValueByClassName('paymentDetailsaccountNumber'));
    setValueById('bankName', getValueByClassName('bankName'));
    setValueById('accountNumber', getValueByClassName('accountNumber'));
  }
  
            </script>

    </body>

    </html>

  
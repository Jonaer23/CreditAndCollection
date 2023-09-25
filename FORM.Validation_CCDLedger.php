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
  if(isset($_SESSION['Access']) && $_SESSION['Access'] == "Admin"  && $_SESSION['Department'] == "SedgeCCD" && $_SESSION['Position'] == "Programmer") {
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
            width: 150px;

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
            width: 150px;
            margin-right: 150px;

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
            width: 150px;
            background-color: #4169E1;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-right: 10px;

        }

        .table-cell {
            white-space: nowrap;
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
        #ledgerTable th ,
        #ledgerTable td {
            padding: 8px;
            font-size: 12px;
        }
        /* Define the background colors for different status buttons */
        .btn-active {
            text-align: center;
            width: 100px;
            border-radius: 10px;
            background-color: #5bc0de;
            color: white; /* You might need to adjust text color for better contrast */
        }
        
        .btn-purchased {
          
            text-align: center;
            width: 100px;
            border-radius: 10px;
            background-color: #5cb85c;
            color: white;
        }
        
        .btn-cancel {
            text-align: center;
            width: 100px;
            border-radius: 10px;
            background-color: #1e303a;
            color: white;
        }
        
        .btn-terminate {
             text-align: center;
            width: 100px;
            border-radius: 10px;
            background-color: #e97451;
            color: white;
        }
        
        /* Other button styles (adjust as needed) */
        .status-btn {
            border: none;
            padding: 5px 10px;
            cursor: pointer;
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
                                                <th scope="col"></th>
                                                <th scope="col " class="text-xs font-weight-bold text-white text-uppercase mb-1" style="font-size: 12px">Customer Code</th>
                                                <th scope="col " class="text-xs font-weight-bold text-white text-uppercase mb-1" style="font-size: 12px" hidden>User account</th>
                                                <th scope="col " class="text-xs font-weight-bold text-white text-uppercase mb-1" style="font-size: 12px">Name</th>
                                                <th scope="col " class="text-xs font-weight-bold text-white text-uppercase mb-1" style="font-size: 12px">Description</th>
                                                <th scope="col" class="text-xs font-weight-bold text-white text-uppercase mb-1" style="font-size: 12px">Total Contract Price</th>
                                                <th scope="col" class="text-xs font-weight-bold text-white text-uppercase mb-1" style="font-size: 12px">Status</th>

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
        <div class="modal fade bd-example-modal-lg" id="viewLedgerModal" tabindex="-1" role="dialog"
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
                                    <h2 hidden>Ledger for Account <span id="accountID"></span></h2>
                                    <div>
                                            <table class="table table-bordered" style="border:none; width: 100%"
                                                cellspacing="0">
                                                <tbody>
                                                   
                                                    <tr>
                                                        <td style="font-size: 10px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; text-align: center; border:none;"><img src="img/SouthSpring.png"></img></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-size: 25px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; text-align: center; border:none; background: radial-gradient(darkorange, orange); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Centennial <img src="img/centenial.png"/> Garden <br></td>
                                                    </tr>
                                                   
                                                </tbody>
                                            </table>
                                            <table class="table table-bordered" width="100%"
                                                cellspacing="0">
                                                <tbody>
                                                    <tr>
                                                        <td class="table-cell" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; width: 20%">Customer Code</td>
                                                        <td class="table-cell" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; border-bottom: 1px solid; width: 20%"><input id="contractCode" style="padding: 0px 10px; font-size: 12px; color: #565051; font-family: Roboto, Arial, sans-serif; width: 100%; border: none; background-color: transparent" readonly/></td>
                                                        <td class="table-cell" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; width: 20%">Date <input id="dateOfContract" style="padding: 0px 10px; font-size: 12px; color: #565051; font-family: Roboto, Arial, sans-serif; width: 100%; border: none; background-color: transparent"  readonly/></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="table-cell" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; width: 20%">Customer Name</td>
                                                        <td class="table-cell" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; border-bottom: 1px solid" colspan="2"><input id="customerName" style="padding: 0px 10px; font-size: 12px; color: #565051; font-family: Roboto, Arial, sans-serif; width: 100%; border: none; background-color: transparent" readonly/></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="table-cell" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ;">Name of Spouse</td>
                                                        <td class="table-cell" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; border-bottom: 1px solid" colspan="2"><input id="SpouseName" style="padding: 0px 10px; font-size: 12px; color: #565051; font-family: Roboto, Arial, sans-serif; width: 100%; border: none; background-color: transparent" readonly/></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="table-cell" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ;" >Residence Address</td>
                                                        <td class="table-cell" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; border-bottom: 1px solid; width: 60%" ><input id="residentAddress"  style="padding: 0px 10px; font-size: 12px; color: #565051; font-family: Roboto, Arial, sans-serif; width: 100%; border: none; background-color: transparent" readonly/></td>
                                                        <td class="table-cell" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 0px ; width: 20%; border-bottom: 1px solid;">Tel. No. :<input id="Residential_Phone" style="border-bottom: 1px solid; padding: 0px 10px; font-size: 12px; color: #565051; font-family: Roboto, Arial, sans-serif; width: 70%; border: none; background-color: transparent"  readonly/></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="table-cell" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ;" >Billing Address</td>
                                                        <td class="table-cell" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; border-bottom: 1px solid;" ><input id="billingAddress" style="padding: 2px 10px; font-size: 12px; color: #565051; font-family: Roboto, Arial, sans-serif; width: 100%; border: none; background-color: transparent" readonly/></td>
                                                        <td class="table-cell" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif;  padding: 5px 0px ; width: 20%; border-bottom: 1px solid; ">Occupation :<input id="PositionInCompany" style="border-bottom: 1px solid; padding: 0px 10px; font-size: 12px; color: #565051; font-family: Roboto, Arial, sans-serif; width: 70%; border: none; background-color: transparent" readonly/></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="table-cell" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ;" >Company Name / Address</td>
                                                        <td class="table-cell" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; border-bottom: 1px solid;" ><input id="companyAddress" style="padding: 0px 10px; font-size: 12px; color: #565051; font-family: Roboto, Arial, sans-serif; width: 100%; border: none; background-color: transparent" readonly/></td>
                                                        <td class="table-cell" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif;  padding: 5px 0px ; width: 20%; border-bottom: 1px solid; ">Tel. No. :<input id="companyTellNo" style="border-bottom: 1px solid; padding: 0px 10px; font-size: 12px; color: #565051; font-family: Roboto, Arial, sans-serif; width: 70%; border: none; background-color: transparent"  readonly/></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <table class="table table-bordered" width="100%"
                                                cellspacing="0">
                                                <tbody>
                                                    <tr>
                                                        <td class="table-cell" style="font-size: 14px; color: #ffffff; background-color: #007ea7; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ;" colspan="2">AGENT NAME</td>
                                                        <td class="table-cell" style="font-size: 14px; color: #ffffff; background-color: #007ea7; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ;" colspan="3">CANCELLED</td>
                                                        <td class="table-cell" style="font-size: 14px; color: #ffffff; background-color: #007ea7; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ;" colspan="3">REINSTATED</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="table-cell" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ;"></td>
                                                        <td class="table-cell" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ;"></td>
                                                        
                                                        <td class="table-cell" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 0px 0px " colspan="3" rowspan="7">
                                                           
                                                            <table style="width: 100%; margin: 0px;" id="cancelledAccount">
                                                                <thead>
                                                                    <tr>
                                                                        <td style="padding: 5px 5px">NO.</td>
                                                                        <td style="padding: 5px 5px">DATE</td>
                                                                        <td style="padding: 5px 5px">INITIAL</td>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <!-- Table rows will be dynamically populated by JavaScript -->
                                                                </tbody>
                                                            </table>

                                                        </td>
                                                        <td class="table-cell" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 0px 0px" colspan="3" rowspan="7">
                                                           
                                                            <table style="width:100%; margin:0px; " id="reInstatementAccount">
                                                                <thead>
                                                                    <tr>
                                                                        <td style="padding: 5px 5px ">NO.</td>
                                                                        <td style="padding: 5px 5px ">DATE</td>
                                                                        <td style="padding: 5px 5px ">INITIAL</td>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                </tbody>
                                                            </table>

                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="table-cell" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ;">SVD</td>
                                                        <td class="table-cell" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 5px ;"><input style="width: 150px; " /></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="table-cell" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ;">SAM</td>
                                                        <td class="table-cell" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 5px ;"><input style="width: 150px" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="table-cell" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ;">BM</td>
                                                        <td class="table-cell" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 5px ;"><input style="width: 150px" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="table-cell" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ;">UM</td>
                                                        <td class="table-cell" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 5px ;"><input style="width: 150px" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="table-cell" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ;">SC</td>
                                                        <td class="table-cell" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 5px ;"><input style="width: 150px"  /></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="table-cell" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ;">SPONSOR</td>
                                                        <td class="table-cell" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 5px ;"><input style="width: 150px" /></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <table class="table table-bordered" width="100%"
                                                cellspacing="0">
                                                <tbody>
                                                <tr class="header" 
                                                        style="color: #ffffff; background-color: #007ea7;font-size: 16px;padding: 5px 10px; text-align: Center">
                                                        <th scope="col " class="table-cell" colspan="7" style="padding: 5px 10px">CRYPT DESCRIPTION</th>
                                                    </tr>
                                                    <tr>
                                                        <td class="table-cell" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; font-weight: bold">Level</td>
                                                        <td class="table-cell" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; font-weight: bold">Area</td>
                                                        <td class="table-cell" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; font-weight: bold">Section</td>
                                                        <td class="table-cell" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; font-weight: bold">Column</td>
                                                        <td class="table-cell" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; font-weight: bold">Unit No.</td>
                                                        <td class="table-cell" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; font-weight: bold">Classification</td>
                                                        <td class="table-cell" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; font-weight: bold">I.D.</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="table-cell" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 5px ;width: 15%"><input id="cryptlevel" style="padding: 2px 10px; font-size: 12px; color: #565051; font-family: Roboto, Arial, sans-serif; width: 100%; border: none; background-color: transparent" readonly/></td>
                                                        <td class="table-cell" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 5px ;width: 20%"><input id="cryptarea" style="padding: 2px 10px; font-size: 12px; color: #565051; font-family: Roboto, Arial, sans-serif; width: 100%; border: none; background-color: transparent" readonly/></td>
                                                        <td class="table-cell" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 5px ;width: 10%"><input id="cryptsection" style="padding: 2px 10px; font-size: 12px; color: #565051; font-family: Roboto, Arial, sans-serif; width: 100%; border: none; background-color: transparent" readonly/></td>
                                                        <td class="table-cell"style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 5px ;width: 10%"><input id="crypt_column" style="padding: 2px 10px; font-size: 12px; color: #565051; font-family: Roboto, Arial, sans-serif; width: 100%; border: none; background-color: transparent" readonly/></td>
                                                        <td class="table-cell" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 5px ;width: 15%"><input id="cryptunit_no" style="padding: 2px 10px; font-size: 12px; color: #565051; font-family: Roboto, Arial, sans-serif; width: 100%; border: none; background-color: transparent" readonly/></td>
                                                        <td class="table-cell" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 5px ;width: 20%"><input id="cryptclassification" style="padding: 2px 10px; font-size: 12px; color: #565051; font-family: Roboto, Arial, sans-serif; width: 100%; border: none; background-color: transparent" readonly/></td>
                                                        <td class="table-cell" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 5px ;width: 10%"><input id="crypt_id1" style="padding: 2px 10px; font-size: 12px; color: #565051; font-family: Roboto, Arial, sans-serif; width: 100%; border: none; background-color: transparent" readonly/></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <table class="table table-bordered" width="100%"
                                                cellspacing="0">
                                                <tbody>
                                                <tr class="header" 
                                                        style="color: #ffffff; background-color: #007ea7;font-size: 16px;padding: 5px 10px; text-align: Center">
                                                        <th scope="col " class="table-cell" colspan="6" style="padding: 5px 10px">LOT DESCRIPTION</th>
                                                    </tr>
                                                    <tr>
                                                        <td class="table-cell" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; font-weight: bold">Area</td>
                                                        <td class="table-cell" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; font-weight: bold">Section</td>
                                                        <td class="table-cell" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; font-weight: bold">Lot I.D.</td>
                                                        <td class="table-cell" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; font-weight: bold">Type/ Class</td>
                                                        <td class="table-cell" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; font-weight: bold">Block</td>
                                                        <td class="table-cell" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; font-weight: bold">Lot No.</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="table-cell" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 5px ; width: 20%"><input id="area" style="padding: 2px 10px; font-size: 12px; color: #565051; font-family: Roboto, Arial, sans-serif; width: 100%; border: none; background-color: transparent"  readonly/></td>
                                                        <td class="table-cell" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 5px ; width: 20%"><input id="section" style="padding: 2px 10px; font-size: 12px; color: #565051; font-family: Roboto, Arial, sans-serif; width: 100%; border: none; background-color: transparent"  readonly/></td>
                                                        <td class="table-cell" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 5px ; width: 10%"><input id="lotID" style="padding: 2px 10px; font-size: 12px; color: #565051; font-family: Roboto, Arial, sans-serif; width: 100%; border: none; background-color: transparent"  readonly/></td>
                                                        <td class="table-cell"style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 5px ; width: 20%"><input id="type" style="padding: 2px 10px; font-size: 12px; color: #565051; font-family: Roboto, Arial, sans-serif; width: 100%; border: none; background-color: transparent"  readonly/></td>
                                                        <td class="table-cell" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 5px ; width: 20%"><input id="block" style="padding: 2px 10px; font-size: 12px; color: #565051; font-family: Roboto, Arial, sans-serif; width: 100%; border: none; background-color: transparent"  readonly/></td>
                                                        <td class="table-cell" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 5px ; width: 10%"><input id="lotNo" style="padding: 2px 10px; font-size: 12px; color: #565051; font-family: Roboto, Arial, sans-serif; width: 100%; border: none; background-color: transparent"  readonly/></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <table class="table table-bordered" width="100%"
                                                cellspacing="0">
                                                <tbody>
                                                    <tr>
                                                    <td colspan="6" style="font-size: 14px; color: #ffffff; background-color: #007ea7; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ;"> <strong>COMPUTATION</strong></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; width: 15%; "></td>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ;">Terms</td>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; width: 5%; " ></td>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ;  width: 10%; "></td>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; width: 25%; border-bottom: 1px solid;"><input id="lotdescTerms" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; width: 100%; border: none; background-color: transparent" readonly/></td>
                                                        <td style="width: 5%"></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; width: 15%; "></td>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ;">Lot List Price</td>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; width: 5%; " ></td>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ;  width: 10%; "></td>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; width: 25%; border-bottom: 1px solid;"><input id="lotListPrice" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; width: 100%; border: none;  background-color: transparent" readonly/></td>
                                                        <td style="width: 5%"></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; width: 15%"></td>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ;">Value Added Tax ( __ ) %</td>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; width: 5%"></td>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ;  width: 10%"></td>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; width: 25%; border-bottom: 1px solid;"><input id="VAT" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif;  width: 100%; border: none;  background-color: transparent" readonly/></td>
                                                        <td style="width: 5%"></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; width: 15%"></td>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ;">VAT</td>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; width: 5%"></td>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ;  width: 10%"></td>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; width: 25%; border-bottom: 1px solid;"><input id="subtotalVAT" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif;  width: 100%; border: none;  background-color: transparent" readonly/></td>
                                                        <td style="width: 5%"></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; width: 15%"></td>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ;">Less : Discount (%)</td>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; width: 5%"></td>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ;  width: 10%"><input id="discountPercentage" style="border: none;"/></td>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; width: 25%; border-bottom: 1px solid;">% <input id="discount" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; width: 90%; border: none;  background-color: transparent" readonly/></td>
                                                        <td style="width: 5%"></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; width: 15%"></td>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ;">Discount</td>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; width: 5%"></td>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ;  width: 10%"></td>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; width: 25%; border-bottom: 1px solid;"><input id="subtotalDiscount" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; width: 100%; border: none;  background-color: transparent" readonly/></td>
                                                        <td style="width: 5%"></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; width: 15%"></td>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ;">Perpetual Care Fund</td>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; width: 5%"></td>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ;  width: 10%"></td>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; width: 25%; border-bottom: 1px solid;"><input id="PCF" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; width: 100%; border: none;  background-color: transparent" readonly/></td>
                                                        <td style="width: 5%"></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; width: 15%"></td>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ;">Total Contract Price</td>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; width: 5%"></td>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ;  width: 10%"></td>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; width: 25%; border-bottom: 1px solid;"><input id="totalContractPrice" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif;  width: 100%; border: none;  background-color: transparent" readonly/></td>
                                                        <td style="width: 5%"></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; width: 15%"></td>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ;">Add: ______ % Mark-up</td>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; width: 5%"></td>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ;  width: 10%"></td>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; width: 25%; border-bottom: 1px solid;"><input id="addMarkup" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; width: 100%; border: none;  background-color: transparent" readonly/></td>
                                                        <td style="width: 5%"></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; width: 15%"></td>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ;">At-Need TCP</td>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; width: 5%"></td>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ;  width: 10%"></td>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; width: 25%; border-bottom: 1px solid;"><input id="" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif;  width: 100%; border: none;  background-color: transparent" readonly/></td>
                                                        <td style="width: 5%"></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; width: 15%"></td>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ;">Downpayment</td>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; width: 5%"></td>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ;  width: 10%; border-bottom: 1px solid;">% <input id="dpPercentage" style="width: 90%; padding-left: 10px; border: none;" /></td>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; width: 25%; border-bottom: 1px solid;"><input id="dpPercentage2" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; width: 100%; border: none;  background-color: transparent" readonly/></td>
                                                        <td style="width: 5%"></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; width: 15%"></td>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ;">Balance</td>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; width: 5%"></td>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ;  width: 10%"></td>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; width: 25%; border-bottom: 1px solid;"><input id="balance" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; width: 100%; border: none;  background-color: transparent" readonly/></td>
                                                        <td style="width: 5%"></td>
                                                    </tr>
                                                    <tr hidden>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; width: 15%"></td>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ;" hidden>Monthly Installment</td>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; width: 5%"></td>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ;  width: 10%"></td>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; width: 25%" hidden><input id=""  style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif;  width: 100%; border: none;  background-color: transparent" readonly/></td>
                                                        <td style="width: 5%"></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; width: 15%"></td>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ;">No. of Months</td>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; width: 5%"></td>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ;  width: 10%"></td>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; width: 25%; border-bottom: 1px solid;"><input id="NoOfMonths"  style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif;  width: 100%; border: none;  background-color: transparent" readonly/></td>
                                                        <td style="width: 5%"></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <table class="table table-bordered" width="100%"
                                                cellspacing="0">
                                                <tbody>
                                                    <tr>
                                                    <td colspan="6" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ;"> <strong>Downpayment</strong> shall be paid in full within ____ days from the date of reservation.</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; padding-top:13px">Date Reserved</td>
                                                        <td><input id="reservedDate" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; width: 100%; border: none;  background-color: transparent; padding:0px" readonly/></td>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; padding-top:13px">DP Due Date</td>
                                                        <td><input id="paymentDueDate" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; width: 100%; border: none;  background-color: transparent" readonly/></td>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; padding-top:13px">Maturity Date</td>
                                                        <td><input id="matureDate" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; width: 100%; border: none;  background-color: transparent" readonly/></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                    </div>
                                    <!-- LEDGER Table rows -->
                                    <div class="table-responsive" style="color: #4a4949">
                                        <table class="table table-bordered table-cell" id="ledgerTable"
                                            cellspacing="0" style="width: 100%; ">
                                            <thead>
                                                <tr class="header" 
                                                    style="color: #ffffff; background-color: #007ea7;font-size: 16px;padding: 5px 10px; text-align: Center">
                                                    <th scope="col" class="table-cell" colspan="13" style="padding: 5px 10px">COLLECTION</th>
                                                </tr>
                                                <tr class="header" 
                                                    style="color: #007ea7; font-size: 13px;padding: 5px 10px ">
                                                    <th scope="col" hidden></th>
                                                    <th scope="col " class="table-cell" style="padding: 5px 10px">PAYMENT DUE DATE</th>
                                                    <th scope="col " class="table-cell" style="padding: 5px 10px">PAYMENT DATE RECEIVED</th>
                                                    <th scope="col " class="table-cell" style="padding: 5px 10px">TCP</th>
                                                    <th scope="col " class="table-cell" style="padding: 5px 10px">PENALTIES</th>
                                                    <th scope="col " class="table-cell" style="padding: 5px 10px">ORPR</th>
                                                    <th scope="col " class="table-cell" style="padding: 5px 10px">AMOUNT RECEIVED</th>
                                                    <th scope="col" class="table-cell" style="padding: 5px 10px">INTEREST</th>
                                                    <th scope="col" class="table-cell" style="padding: 5px 10px">PRINCIPAL</th>
                                                    <th scope="col" class="table-cell" style="padding: 5px 10px">BALANCE</th>
                                                    <th scope="col" class="table-cell" style="padding: 5px 10px">VAT</th>
                                                    <th scope="col" class="table-cell" style="padding: 5px 10px">PCF</th>
                                                    <th scope="col" class="table-cell" style="padding: 5px 10px">REMARKS</th>
                                                    <th scope="col" class="table-cell" style="padding: 5px 10px">STATUS</th>
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
        <script >
            $(document).ready(function() {
    // Update the main table with data
    function updateTable(data) {
        const $dataTableBody = $('#dataTable tbody');
        
        if (data.length > 0) {
            let tableBody = '';
            function getStatusClassAndText(status) {
                switch (status) {
                    case "Active":
                        return { class: "btn-active", text: "Active" };
                    case "Purchased":
                        return { class: "btn-purchased", text: "Purchased" };
                    case "Cancel":
                        return { class: "btn-cancel", text: "Cancel" };
                    case "Terminate":
                        return { class: "btn-terminate", text: "Terminate" };
                    default:
                        return { class: "", text: "Unknown" };
                }
            }
            
            // Get the status class and text
          
            for (const rowData of data) {
                const sanitizedData = {
                    id: sanitize(rowData.id),
                    contractCode: sanitize(rowData.contractCode),
                    customerCode: sanitize(rowData.customerCode),
                    customerName: sanitize(rowData.customerName),
                    Cryptarea: sanitize(rowData.Cryptarea),
                    Crypttype: sanitize(rowData.Crypttype),
                    area: sanitize(rowData.area),
                    type: sanitize(rowData.type),
                    totalContractPrice: formatCurrency(rowData.totalContractPrice),
                    status: sanitize(rowData.status)
                };
                 const statusInfo = getStatusClassAndText(sanitizedData.status);
                tableBody += '<tr style="color: #4a4949; font-size: 14px;">';
                tableBody += `<td class="text-xs font-weight-normal text-gray-900 text-uppercase mb-1 id" style="font-size: 13px" hidden>${sanitizedData.id}</td>`;
                tableBody += `<td class="text-xs font-weight-normal text-gray-900 text-uppercase mb-1 viewLedgerBtn" style="font-size: 13px; text-align: center;"data-account-id="${sanitizedData.customerCode}"><a href="#" style="; text-align: center;"><i class="fas fa-eye"></i></a></td>`;
                tableBody += `<td class="text-xs font-weight-normal text-gray-900 text-uppercase mb-1 contractCode" style="font-size: 13px">${sanitizedData.contractCode}</td>`;
                tableBody += `<td class="text-xs font-weight-normal text-gray-900 text-uppercase mb-1 customerCode" style="font-size: 13px" hidden>${sanitizedData.customerCode}</td>`;
                tableBody += `<td class="text-xs font-weight-normal text-gray-900 text-uppercase mb-1 customerName" style="font-size: 13px" >${sanitizedData.customerName}</td>`;
                tableBody += `<td class="text-xs font-weight-normal text-gray-900 text-uppercase mb-1 lotCrypt" style="font-size: 13px" >${sanitizedData.Cryptarea} ${sanitizedData.Crypttype} ${sanitizedData.area} ${sanitizedData.type}</td>`;
                tableBody += `<td class="text-xs font-weight-normal text-gray-900 text-uppercase mb-1 totalContractPrice" style="font-size: 13px" >₱ ${sanitizedData.totalContractPrice}</td>`;
                 tableBody += `<td class="text-xs font-weight-normal text-gray-900 text-uppercase mb-1 status" style="text-align: center; font-size: 13px"><button class="status-btn ${statusInfo.class}">${statusInfo.text}</button></td>`;
                tableBody += '</tr>';
            }

            $dataTableBody.html(tableBody);
        } else {
            $dataTableBody.html('<tr><td colspan="7">No records found.</td></tr>');
        }

        // Initialize DataTables
        $('#dataTable').DataTable();
    }

    // Update the ledger table with data
    function updateLedgerTable(data) {
        const $ledgerTableBody = $('#ledgerTable tbody');
        
        if (data.length > 0) {
            let tableBody = '';

            for (const rowData of data) {
                const sanitizedData = {
                    id: sanitize(rowData.id),
                    paymentDueDate: sanitize(rowData.paymentDueDate.split(' ')[0]),
                    dateModified: sanitize(rowData.dateModified.split(' ')[0]),
                    TCP: formatCurrency(rowData.TCP),
                    penalty: formatCurrency(rowData.penalty),
                    ORPR: sanitize(rowData.ORPR),
                    monthlyInstallment: formatCurrency(rowData.monthlyInstallment),
                    interest: formatCurrency(rowData.interest),
                    principal: formatCurrency(rowData.principal),
                    balance: formatCurrency(rowData.balance),
                    VAT_Subtotal: formatCurrency(rowData.VAT_Subtotal),
                    PCF: formatCurrency(rowData.PCF),
                    remarks: sanitize(rowData.remarks),
                    status: sanitize(rowData.status)
                };
               
                tableBody += '<tr style="color: #4a4949; font-size: 14px;">';
                tableBody += `<td class="table-cell" hidden>${sanitizedData.id}</td>`;
                tableBody += `<td class="table-cell">${sanitizedData.paymentDueDate}</td>`;
                tableBody += `<td class="table-cell">${sanitizedData.dateModified}</td>`;
                tableBody += `<td class="table-cell">₱ ${sanitizedData.TCP}</td>`;
                tableBody += `<td class="table-cell">₱ ${sanitizedData.penalty}</td>`;
                tableBody += `<td class="table-cell">${sanitizedData.ORPR}</td>`;
                tableBody += `<td class="table-cell">₱ ${sanitizedData.monthlyInstallment}</td>`;
                tableBody += `<td class="table-cell">₱ ${sanitizedData.interest}</td>`;
                tableBody += `<td class="table-cell">₱ ${sanitizedData.principal}</td>`;
                tableBody += `<td class="table-cell">₱ ${sanitizedData.balance}</td>`;
                tableBody += `<td class="table-cell">₱ ${sanitizedData.VAT_Subtotal}</td>`;
                tableBody += `<td class="table-cell">₱ ${sanitizedData.PCF}</td>`;
                tableBody += `<td class="table-cell">${sanitizedData.remarks}</td>`;
                 if (sanitizedData.status === 'Unpaid') {
                    tableBody += `<td class="table-cell" ><button class="text-xs  text-uppercase mb-1 table-cell" style="background-color: #B22222; border-radius: 5px; color: white; text-align: center; border: none; width: 100px">${sanitizedData.status} </button></td>`;
                } else {
                    tableBody += `<td class="table-cell"><button class="text-xs  text-uppercase mb-1 table-cell" style="background-color: #4cd038; border-radius: 5px; color: white; text-align: center; border: none; width: 100px" >${sanitizedData.status}</button></td>`;
                }
                    tableBody += '</tr>';
                
            }

            $ledgerTableBody.html(tableBody);
        } else {
            $ledgerTableBody.html('<tr><td colspan="11">No ledger records found.</td></tr>');
        }
    }

    // Fetch ledger data for a specific account
    // Fetch ledger data for a specific account
    function fetchLedger(accountId) {
       
        $.ajax({
            url: 'Fetch.Validation_CCDLedgerAccount.php',
            method: 'POST',
            data: {
                accountId: accountId
            },
            success: function(response) {
                var data = JSON.parse(response);
                console.log(response);
                updateLedgerTable(data);
            },
            error: function(xhr, status, error) {
                // Handle the error gracefully
                console.error('Fetch Ledger Error:', status, error);
                // Display an error message to the user or perform any necessary actions
            }
        });
    }
    // Fetch ledger data for a specific account
    function fetchLedgerAccount(accountId) {
    $.ajax({
      url: 'Fetch.Validation_CCDLedgerAccountDetails.php',
      method: 'POST',
      data: {
        accountId: accountId
      },
      dataType: 'json', // Set the expected response data type as JSON
      success: function(response) {
        if (response.length > 0) {
          var data = response[0]; // Retrieve the first item in the response array
          $('#contractCode').val(data.contractCode);
          $('#customerName').val(data.customerName);
          $('#dateOfContract').val(data.dateOfContract);
          $('#area').val(data.area);
          $('#lotID').val(data.lotID);
          $('#type').val(data.type);
          $('#block').val(data.block);
          $('#lotNo').val(data.lotNo);
          $('#section').val(data.section);
          $('#cryptlevel').val(data.cryptlevel);
          $('#cryptarea').val(data.cryptarea);
          $('#cryptsection').val(data.cryptsection);
          $('#crypt_column').val(data.crypt_column);
          $('#cryptunit_no').val(data.cryptunit_no);
          $('#cryptclassification').val(data.cryptclassification);
          $('#crypt_id1').val(data.crypt_id1);  
          if (data.lotdescTerms === "cryptpreNeedPrice") {
            $('#lotdescTerms').val("Pre-Need");
          } else if (data.lotdescTerms === "cryptAtNeedPrice") {
            $('#lotdescTerms').val("At-Need");
          } else if (data.lotdescTerms === "cryptSpotCash") {
            $('#lotdescTerms').val("Spot Cash");
          } else if (data.lotdescTerms === "cryptM_Cash") {
            $('#lotdescTerms').val("M-Cash");
          } else if (data.lotdescTerms === "cryptInstallment") {
            $('#lotdescTerms').val("Installment");
          } else {
            $('#lotdescTerms').val(data.lotdescTerms);
          }
          $('#lotListPrice').val('₱ ' + parseFloat(data.lotListPrice).toLocaleString());
          $('#VAT').val(data.VAT);
          $('#subtotalVAT').val('₱ ' + parseFloat(data.subtotalVAT).toLocaleString());
          $('#discount').val(data.discount);
          $('#subtotalDiscount').val('₱ ' + parseFloat(data.subtotalDiscount).toLocaleString());
          $('#PCF').val('₱ ' + parseFloat(data.PCF).toLocaleString());
          $('#totalContractPrice').val('₱ ' + parseFloat(data.totalContractPrice).toLocaleString());
          $('#dpPercentage2').val('₱ ' + parseFloat(data.dpPercentage2).toLocaleString());
          $('#dpPercentage').val(data.dpPercentage);
          $('#balance').val('₱ ' + parseFloat(data.balance).toLocaleString());
          $('#NoOfMonths').val(data.NoOfMonths);
          $('#reservedDate').val(data.reservedDate);
          $('#paymentDueDate').val(data.paymentDueDate);
          $('#billingAddress').val(data.billingAddress);
          $('#residentAddress').val(data.residentAddress);
          $('#companyAddress').val(data.companyAddress);
          $('#Residential_Phone').val(data.Residential_Phone);
          $('#PositionInCompany').val(data.PositionInCompany);
          $('#SpouseName').val(data.SpouseName);
          $('#companyTellNo').val(data.companyTellNo);
          $('#matureDate').val(data.lastPaymentDueDate);
        } else {
          // Handle case when no data is returned
        }
      },
      error: function(xhr, status, error) {
        // Handle the error gracefully
        console.error('Fetch Ledger Account Error:', status, error);
        // Display an error message to the user or perform any necessary actions
      }
    });
  }
    // Get the appropriate color for the ledger status
    function getStatusColor(status) {
        switch (status) {
            case 'Paid':
                return '#90EE90';
            case 'Unpaid':
                return 'red';
            default:
                return '';
        }
    }

    // Open the modal and fetch ledger data for the selected account
    function openModal(accountId) {
        $('#accountID').text(accountId);
        fetchLedger(accountId);
        fetchLedgerAccount(accountId);
        $('#viewLedgerModal').modal('show');
        fetchreInstatementAccountLedger(accountId);
         fetchcancelledAccountLedger(accountId);
    }

    // Handle click event on the viewLedgerBtn
    $(document).on('click', '.viewLedgerBtn', function() {
        const accountId = $(this).data('account-id');
        openModal(accountId);
    });

    // Format currency with appropriate decimal places and separators
    function formatCurrency(amount) {
        const formattedAmount = Number(amount).toLocaleString('en-PH', {
            style: 'decimal',
            minimumFractionDigits: 2,
            maximumFractionDigits: 2
        });

        return formattedAmount;
    }
     // Update the Cancelled Account table with data
     function updatecancelledAccountTable(data) {
        var $ledgerTableBody = $('#cancelledAccount tbody');
        
        if (data.length > 0) {
            var tableBody = '';

            for (var i = 0; i < data.length; i++) {
                var rowData = data[i];

                // Perform necessary sanitization and validation of rowData properties
                
                var sanitizedData = {
                    id: sanitize(rowData.id),
                    increment: sanitize(rowData.increment),
                    dateCreated: sanitize(rowData.dateCreated)
                };
                tableBody += '<tr style="color: #4a4949; font-size: 14px;">';
                tableBody += '<td class="table-cell" hidden>' + sanitizedData.id + '</td>';
                tableBody += '<td class="table-cell">' + sanitizedData.increment + '</td>';
                tableBody += '<td class="table-cell">' + sanitizedData.dateCreated + '</td>';
                tableBody += '<td class="table-cell"></td>'; // Empty input field
                tableBody += '</tr>';
            }
            $ledgerTableBody.html(tableBody);
        } else {
            $ledgerTableBody.html('<tr><td colspan="3">No Cancelled records found.</td></tr>');
        }
    }
    // Update the Cancelled Account table with data
    function updatereInstatementAccountTable(data) {
        var $ledgerTableBody = $('#reInstatementAccount tbody');
        
        if (data.length > 0) {
            var tableBody = '';

            for (var i = 0; i < data.length; i++) {
                var rowData = data[i];

                // Perform necessary sanitization and validation of rowData properties
                
                var sanitizedData = {
                    id: sanitize(rowData.id),
                    increment: sanitize(rowData.increment),
                    dateCreated: sanitize(rowData.dateCreated)
                };
                tableBody += '<tr style="color: #4a4949; font-size: 14px;">';
                tableBody += '<td class="table-cell" hidden>' + sanitizedData.id + '</td>';
                tableBody += '<td class="table-cell">' + sanitizedData.increment + '</td>';
                tableBody += '<td class="table-cell">' + sanitizedData.dateCreated + '</td>';
                tableBody += '<td class="table-cell"></td>'; // Empty input field
                tableBody += '</tr>';
            }
            $ledgerTableBody.html(tableBody);
        } else {
            $ledgerTableBody.html('<tr><td colspan="3">No Cancelled records found.</td></tr>');
        }
    }
    // Fetch appointments data
    function fetchAppointments() {
        $.ajax({
            url: 'Fetch.Validation_CCDLedger.php',
            method: 'POST',
            data: {
                status: 'Active',
            },
            success: function(response) {
                const data = JSON.parse(response);
                updateTable(data);
            },
            error: function(xhr, status, error) {
                // Handle the error gracefully and display a user-friendly error message
                console.error('Fetch Appointments Error:', status, error);
                // You can show an error message to the user or perform any necessary actions
            }
        });
    }

    function fetchcancelledAccountLedger(accountId) {
        $.ajax({
            url: 'Fetch.Validation_CCDCancelAccountLedger.php',
            method: 'POST',
            data: {
                accountId: accountId
            },
            success: function(response) {
                var data = JSON.parse(response);
                updatecancelledAccountTable(data);
                console.log(data);
            },
            error: function(xhr, status, error) {
                // Handle the error gracefully
                console.error('Fetch Ledger Error:', status, error);
                // Display an error message to the user or perform any necessary actions
            }
        });
    }
    function fetchreInstatementAccountLedger(accountId) {
        $.ajax({
            url: 'Fetch.Validation_CCDReinstatementAccountLedger.php',
            method: 'POST',
            data: {
                accountId: accountId
            },
            success: function(response) {
                var data = JSON.parse(response);
                updatereInstatementAccountTable(data);
                console.log(data);
            },
            error: function(xhr, status, error) {
                // Handle the error gracefully
                console.error('Fetch Ledger Error:', status, error);
                // Display an error message to the user or perform any necessary actions
            }
        });
    }
    // Initial fetch and periodic polling of appointments data
    fetchAppointments();
    const pollingInterval = setInterval(fetchAppointments, 300000);

    // Cleanup tasks before page unload
    $(window).on('beforeunload', function() {
        clearInterval(pollingInterval);
        // Remove the 'beforeunload' event listener to avoid memory leaks
        $(window).off('beforeunload');
    });

    // Helper function to sanitize data before inserting into HTML
    function sanitize(str) {
        // Perform necessary sanitization, such as HTML escaping
        // You can use external libraries like DOMPurify for added security
        return $('<div>').text(str).html();
    }
});

        </script>

    </body>

    </html>

    <?php } else {
  
  header("location: index.php");
 
}?>
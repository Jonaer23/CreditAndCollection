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
  if(isset($_SESSION['Access']) && $_SESSION['Access'] == "Admin"  && $_SESSION['Department'] == "SedgeManualCCD" && $_SESSION['Position'] == "Programmer") {
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
        #ledgerTable th,
        #ledgerTable td{
            font-size: 12px;
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
                    <a class="nav-link" href="FORM.Validation_ManualBuyerInformation.php">
                        <i class="fas fa-balance-scale-right"></i></i>
                        <span>BIS</span></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="FORM.Validation_ManualSalesReservation.php">
                        <i class="fas fa-fw fas fa-user-tie"></i></i>
                        <span>Sales Reservation</span></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="FORM.Validation_ManualCCDLedger.php">
                        <i class="fas fa-balance-scale-right"></i></i>
                        <span>Ledger</span></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="FORM.Validation_ManualCertificateOfOwnership.php">
                        <i class="fas fa-fw fas fa-user-tie"></i></i>
                        <span>Certificate Of Ownership</span></a>
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
                                                        Earnings (Monthly)</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">

                                                        <?php
                                                        $query = "SELECT SUM(totalContractPrice) AS monthly_earnings
                                                        FROM tbl_ledger
                                                        WHERE YEAR(date_column) = YEAR(CURRENT_DATE())
                                                        GROUP BY YEAR(date_column)";

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
                                                    <div
                                                        class="text-xs font-weight-bold text-warning text-uppercase mb-1">
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
                                                <th scope="col " class="table-cell">Contract Code</th>
                                                <th scope="col " class="table-cell" hidden>User account</th>
                                                <th scope="col " class="table-cell">Name</th>
                                                <th scope="col " class="table-cell">Lot/Crypt</th>
                                                <th scope="col" class="table-cell">Total Contract Price</th>

                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr style="color: #ffffff; background-color: #007ea7;font-size: 13px; ">
                                                <th scope="col" hidden></th>
                                                <th scope="col"></th>
                                                <th scope="col" class="table-cell">Contract Code</th>
                                                <th scope="col" class="table-cell" hidden>User account</th>
                                                <th scope="col" class="table-cell">Name</th>
                                                <th scope="col" class="table-cell">Lot/Crypt</th>
                                                <th scope="col" class="table-cell">Total Contract Price</th>

                                            </tr>
                                        </tfoot>
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
                                                        <td style="font-size: 25px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; text-align: center; border:none; background: radial-gradient(darkorange, orange); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Centennial  <img src="img/centenial.png"/>  Garden</td>
                                                    </tr>
                                                    <tr  style="color: #ffffff; background-color: #007ea7;font-size: 16px;padding: 5px 10px; text-align: Center">
                                                        <td style="font-size: 25px; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; text-align: center; border:none;">CUSTOMER'S LEDGER</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <table class="table table-bordered" width="100%"
                                                cellspacing="0">
                                                <tbody>
                                                    <tr>
                                                        <td class="table-cell" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; width: 20%">Contract Code</td>
                                                        <td class="table-cell" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ;"><input id="contractCode" style="width: 100%; background-color: transparent; border: none; color: #565051" readonly/></td>
                                                        <td class="table-cell" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; width: 35%">Date <input id="dateOfContract" style="width: 70%; float: right; background-color: transparent; border: none; color: #565051" readonly/></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="table-cell" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; width: 20%">Customer Name</td>
                                                        <td class="table-cell" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ;" colspan="2"><input id="customerName" style="width: 100%; background-color: transparent; border: none; color: #565051" readonly/></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="table-cell" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ;">Name of Spouse</td>
                                                        <td class="table-cell" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ;" colspan="2"><input id="SpouseName" style="width: 100%; background-color: transparent; border: none; color: #565051" readonly/></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="table-cell" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ;" >Residence Address</td>
                                                        <td class="table-cell" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ;" ><input id="R_BlkLot"  style="width: 100%; background-color: transparent; border: none; color: #565051" readonly/></td>
                                                        <td class="table-cell" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif;">Tel. No. :<input id="Residential_Phone" style="width: 70%; float: right; background-color: transparent; border: none; color: #565051" readonly/></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="table-cell" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ;" >Billing Address</td>
                                                        <td class="table-cell" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ;" ><input id="" style="width: 100%; background-color: transparent; border: none; color: #565051" readonly/></td>
                                                        <td class="table-cell" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; ">Occupation :<input id="PositionInCompany" style="width: 70%; float: right; background-color: transparent; border: none; color: #565051;" readonly/></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="table-cell" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ;" >Company Name / Address</td>
                                                        <td class="table-cell" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ;" ><input id="companyAddress" style="width: 100%; background-color: transparent; border: none; color: #565051" readonly/></td>
                                                        <td class="table-cell" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; ">Tel. No. :<input id="companyTellNo" style="width: 70%; float: right; background-color: transparent; border: none; color: #565051" readonly/></td>
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
                                                        <td class="table-cell" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ;">Level</td>
                                                        <td class="table-cell" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ;">Area</td>
                                                        <td class="table-cell" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ;">Section</td>
                                                        <td class="table-cell" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ;">Column</td>
                                                        <td class="table-cell" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ;">Unit No.</td>
                                                        <td class="table-cell" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ;">Classification</td>
                                                        <td class="table-cell" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ;">I.D.</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="table-cell" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 5px ;width: 15%"><input id="cryptlevel" style="width: 100%; padding: 5px 10px"readonly/></td>
                                                        <td class="table-cell" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 5px ;width: 20%"><input id="cryptarea" style="width: 100%; padding: 5px 10px" readonly/></td>
                                                        <td class="table-cell" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 5px ;width: 10%"><input id="cryptsection" style="width: 100%; padding: 5px 10px" readonly/></td>
                                                        <td class="table-cell"style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 5px ;width: 10%"><input id="crypt_column" style="width: 100%; padding: 5px 10px" readonly/></td>
                                                        <td class="table-cell" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 5px ;width: 15%"><input id="cryptunit_no" style="width: 100%; padding: 5px 10px" readonly/></td>
                                                        <td class="table-cell" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 5px ;width: 20%"><input id="cryptclassification" style="width: 100%; padding: 5px 10px" readonly/></td>
                                                        <td class="table-cell" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 5px ;width: 10%"><input id="crypt_id1" style="width: 100%; padding: 5px 10px" readonly/></td>
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
                                                        <td class="table-cell" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ;">Area</td>
                                                        <td class="table-cell" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ;">Section</td>
                                                        <td class="table-cell" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ;">Lot I.D.</td>
                                                        <td class="table-cell" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ;">Type/ Class</td>
                                                        <td class="table-cell" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ;">Block</td>
                                                        <td class="table-cell" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ;">Lot No.</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="table-cell" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 5px ; width: 20%"><input id="area" style="width: 100%; padding: 5px 10px"readonly/></td>
                                                        <td class="table-cell" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 5px ; width: 20%"><input id="section" style="width: 100%; padding: 5px 10px" readonly/></td>
                                                        <td class="table-cell" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 5px ; width: 10%"><input id="lotID" style="width: 100%; padding: 5px 10px" readonly/></td>
                                                        <td class="table-cell"style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 5px ; width: 20%"><input id="type" style="width: 100%; padding: 5px 10px" readonly/></td>
                                                        <td class="table-cell" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 5px ; width: 20%"><input id="block" style="width: 100%; padding: 5px 10px" readonly/></td>
                                                        <td class="table-cell" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 5px ; width: 10%"><input id="lotNo" style="width: 100%; padding: 5px 10px" readonly/></td>
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
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; width: 25%;"><input id="lotdescTerms" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; width: 100%; padding: 0px 10px" readonly/></td>
                                                        <td style="width: 5%"></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; width: 15%; "></td>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ;">Lot List Price</td>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; width: 5%; " ></td>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ;  width: 10%; "></td>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; width: 25%;"><input id="lotListPrice" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; width: 100%; padding: 0px 10px" readonly/></td>
                                                        <td style="width: 5%"></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; width: 15%"></td>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ;">Value Added Tax ( __ ) %</td>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; width: 5%"></td>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ;  width: 10%"></td>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; width: 25%"><input id="VAT" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif;  width: 100%; padding: 0px 10px" readonly/></td>
                                                        <td style="width: 5%"></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; width: 15%"></td>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ;">Subtotal</td>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; width: 5%"></td>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ;  width: 10%"></td>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; width: 25%"><input id="subtotalVAT" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif;  width: 100%; padding: 0px 10px" readonly/></td>
                                                        <td style="width: 5%"></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; width: 15%"></td>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ;">Less : Discount</td>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; width: 5%"></td>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ;  width: 10%"><input id="discountPercentage"/></td>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; width: 25%"><input id="discount" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; width: 100%; padding: 0px 10px" readonly/></td>
                                                        <td style="width: 5%"></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; width: 15%"></td>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ;">Subtotal</td>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; width: 5%"></td>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ;  width: 10%"></td>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; width: 25%"><input id="subtotalDiscount" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; width: 100%; padding: 0px 10px" readonly/></td>
                                                        <td style="width: 5%"></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; width: 15%"></td>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ;">Perpetual Care Fund</td>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; width: 5%"></td>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ;  width: 10%"></td>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; width: 25%"><input id="PCF" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; width: 100%; padding: 0px 10px" readonly/></td>
                                                        <td style="width: 5%"></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; width: 15%"></td>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ;">Total Contract Price</td>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; width: 5%"></td>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ;  width: 10%"></td>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; width: 25%"><input id="totalContractPrice" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif;  width: 100%; padding: 0px 10px" readonly/></td>
                                                        <td style="width: 5%"></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; width: 15%"></td>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ;">Add: ______ % Mark-up</td>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; width: 5%"></td>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ;  width: 10%"></td>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; width: 25%"><input id="addMarkup" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; width: 100%; padding: 0px 10px" readonly/></td>
                                                        <td style="width: 5%"></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; width: 15%"></td>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ;">At-Need TCP</td>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; width: 5%"></td>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ;  width: 10%"></td>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; width: 25%"><input id="" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif;  width: 100%; padding: 0px 10px" readonly/></td>
                                                        <td style="width: 5%"></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; width: 15%"></td>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ;">Downpayment</td>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; width: 5%"></td>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ;  width: 10%"><input id="dpPercentage"  /></td>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; width: 25%"><input id="dpPercentage2" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; width: 100%; padding: 0px 10px" readonly/></td>
                                                        <td style="width: 5%"></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; width: 15%"></td>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ;">Balance</td>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; width: 5%"></td>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ;  width: 10%"></td>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; width: 25%"><input id="balance" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; width: 100%; padding: 0px 10px" readonly/></td>
                                                        <td style="width: 5%"></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; width: 15%"></td>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ;">Monthly Installment</td>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; width: 5%"></td>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ;  width: 10%"></td>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; width: 25%"><input id=""  style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif;  width: 100%; padding: 0px 10px" readonly/></td>
                                                        <td style="width: 5%"></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; width: 15%"></td>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ;">No. of Months</td>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; width: 5%"></td>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ;  width: 10%"></td>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; width: 25%"><input id="NoOfMonths"  style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif;  width: 100%; padding: 0px 10px" readonly/></td>
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
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ;">Date Reserved</td>
                                                        <td><input id="reservedDate" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; width: 100%; padding: 0px 10px" readonly/></td>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ;">DP Due Date</td>
                                                        <td><input id="paymentDueDate" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; width: 100%; padding: 0px 10px" readonly/></td>
                                                        <td style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ;">Maturity Date</td>
                                                        <td><input id="" style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; width: 100%; padding: 0px 10px" readonly/></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div style="font-size: 14px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 0px;">
                                                <label>
                                                    <input type="radio" value="div2" name="ledger" style="padding-left: 10px" checked>
                                                    Maintenance Fee's
                                                </label>
                                                &nbsp;&nbsp;&nbsp;
                                                <label>
                                                    <input type="radio" value="div1" name="ledger" style="padding-left: 10px">
                                                    Ledger Fee's
                                                </label>
                                                </div>
                                    </div>
                                    <!-- LEDGER Table rows -->
                                    <div class="table-responsive" id="div1" style="color: #4a4949; display: none;">
                                        <table class="table table-bordered" id="ledgerTable" width="100%"
                                            cellspacing="0">
                                            <thead>
                                                <tr class="header" 
                                                    style="color: #ffffff; background-color: #007ea7;font-size: 16px;padding: 5px 10px; text-align: Center">
                                                    <th scope="col " class="table-cell" colspan="12" style="padding: 5px 10px">COLLECTION</th>
                                                </tr>
                                                <tr class="header" 
                                                    style="color: #007ea7; font-size: 13px;padding: 5px 10px ">
                                                    <th scope="col" hidden></th>
                                                    <th scope="col " class="table-cell" style="padding: 5px 10px">DATE</th>
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
                                    <!-- COO Table rows -->
                                    <div class="table-responsive"  id="div2" style="color: #4a4949">
                                        <table class="table table-bordered" id="COOTable" width="100%"
                                            cellspacing="0">
                                            <thead>
                                                <tr class="header" 
                                                    style="color: #ffffff; background-color: #007ea7;font-size: 16px;padding: 5px 10px; text-align: Center">
                                                    <th scope="col " class="table-cell" colspan="10" style="padding: 5px 10px">MAINTENANCE FEE'S COLLECTION</th>
                                                </tr>
                                                <tr class="header" 
                                                    style="color: #007ea7; font-size: 13px;padding: 5px 10px ">
                                                    <th scope="col" hidden></th>
                                                    <th scope="col " class="table-cell" style="padding: 5px 10px">DATE</th>
                                                    <th scope="col " class="table-cell" style="padding: 5px 10px">TOTAL CONTRACT PRICE</th>
                                                    <th scope="col " class="table-cell" style="padding: 5px 10px">PENALTIES</th>
                                                    <th scope="col " class="table-cell" style="padding: 5px 10px">AMOUNT RECEIVED</th>
                                                    <th scope="col" class="table-cell" style="padding: 5px 10px">REMARKS</th>
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
        <script src="myscript/Function.CCDCertificateOfOwnership.js"></script>
        <script>
            // Get the radio buttons and div elements
            const radioBtns = document.querySelectorAll('input[name="ledger"]');
            const divs = document.querySelectorAll('div[id^="div"]');

            // Add event listeners to the radio buttons
            radioBtns.forEach(function(radioBtn) {
            radioBtn.addEventListener('change', function() {
                // Hide all div elements
                divs.forEach(function(div) {
                div.style.display = 'none';
                });

                // Show the selected div based on the radio button value
                const selectedDiv = document.getElementById(this.value);
                if (selectedDiv) {
                selectedDiv.style.display = 'block';
                }
            });
            });
        </script>
    </body>

    </html>

    <?php } else {
  
  header("location: index.php");
 
}?>
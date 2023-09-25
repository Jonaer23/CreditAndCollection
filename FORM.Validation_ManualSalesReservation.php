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

    #loading-spinner {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(255, 255, 255, 0.8);
        z-index: 9999;
    }

    .spinner {
        position: absolute;
        top: 50%;
        left: 50%;
        width: 50px;
        height: 50px;
        border: 5px solid rgba(0, 0, 0, 0.3);
        border-top: 5px solid #000;
        border-radius: 50%;
        animation: spin 2s linear infinite;
    }

    @keyframes spin {
        from {
            transform: rotate(0deg);
        }

        to {
            transform: rotate(360deg);
        }
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
                            <img src="img\SouthSpring.png" width="150" height="60"></img>
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
                                            <th scope="col" hidden></th>
                                            <th scope="col"></th>
                                            <th scope="col">Customer Code</th>
                                            <th scope="col">Name</th>
                                            <th scope="col" hidden>Status</th>
                                            <th scope="col">Phone</th>
                                            <th scope="col">Reservation Date & Time</th>

                                            <th class="th-sm" colspan="2">Action</th>

                                            <th scope="col" style="width: 15%" hidden></th>
                                            <th scope="col" style="width: 15%" hidden></th>
                                            <th scope="col" style="width: 15%" hidden></th>
                                            <th scope="col" style="width: 15%" hidden></th>
                                            <th scope="col" style="width: 15%" hidden></th>
                                            <th scope="col" style="width: 15%" hidden></th>
                                            <th scope="col" style="width: 15%" hidden></th>
                                            <th scope="col" style="width: 15%" hidden></th>
                                            <th scope="col" style="width: 15%" hidden></th>
                                            <th scope="col" style="width: 15%" hidden></th>
                                            <th scope="col" style="width: 15%" hidden></th>
                                            <th scope="col" style="width: 15%" hidden></th>
                                            <th scope="col" style="width: 15%" hidden></th>
                                            <th scope="col" style="width: 15%" hidden></th>
                                            <th scope="col" style="width: 15%" hidden></th>
                                            <th scope="col" style="width: 15%" hidden></th>
                                            <th scope="col" style="width: 15%" hidden></th>
                                            <th scope="col" style="width: 15%" hidden></th>
                                            <th scope="col" style="width: 15%" hidden></th>
                                            <th scope="col" style="width: 15%" hidden></th>
                                            <th scope="col" style="width: 15%" hidden></th>
                                            <th scope="col" style="width: 15%" hidden></th>
                                            <th scope="col" style="width: 15%" hidden></th>
                                            <th scope="col" style="width: 15%" hidden></th>
                                            <th scope="col" style="width: 15%" hidden></th>
                                            <th scope="col" style="width: 15%" hidden></th>
                                            <th scope="col" style="width: 15%" hidden></th>
                                            <th scope="col" style="width: 15%" hidden></th>
                                            <th scope="col" style="width: 15%" hidden></th>
                                            <th scope="col" style="width: 15%" hidden></th>
                                            <th scope="col" style="width: 15%" hidden></th>
                                            <th scope="col" style="width: 15%" hidden></th>
                                            <th scope="col" style="width: 15%" hidden></th>
                                            <th scope="col" style="width: 15%" hidden></th>


                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr style="color: #ffffff; background-color: #007ea7; font-size: 14px">
                                            <th class="th-sm" hidden></th>
                                            <th class="th-sm"></th>
                                            <th class="th-sm">Customer Code</th>
                                            <th class="th-sm">Name</th>
                                            <th class="th-sm" hidden>Status</th>
                                            <th class="th-sm">Phone</th>
                                            <th class="th-sm">Reservation Date & Time</th>
                                            <th class="th-sm" colspan="2">Action</th>
                                            <th scope="col" style="width: 15%" hidden></th>
                                            <th scope="col" style="width: 15%" hidden></th>
                                            <th scope="col" style="width: 15%" hidden></th>
                                            <th scope="col" style="width: 15%" hidden></th>
                                            <th scope="col" style="width: 15%" hidden></th>
                                            <th scope="col" style="width: 15%" hidden></th>
                                            <th scope="col" style="width: 15%" hidden></th>
                                            <th scope="col" style="width: 15%" hidden></th>
                                            <th scope="col" style="width: 15%" hidden></th>
                                            <th scope="col" style="width: 15%" hidden></th>
                                            <th scope="col" style="width: 15%" hidden></th>
                                            <th scope="col" style="width: 15%" hidden></th>
                                            <th scope="col" style="width: 15%" hidden></th>
                                            <th scope="col" style="width: 15%" hidden></th>
                                            <th scope="col" style="width: 15%" hidden></th>
                                            <th scope="col" style="width: 15%" hidden></th>
                                            <th scope="col" style="width: 15%" hidden></th>
                                            <th scope="col" style="width: 15%" hidden></th>
                                            <th scope="col" style="width: 15%" hidden></th>
                                            <th scope="col" style="width: 15%" hidden></th>
                                            <th scope="col" style="width: 15%" hidden></th>
                                            <th scope="col" style="width: 15%" hidden></th>
                                            <th scope="col" style="width: 15%" hidden></th>
                                            <th scope="col" style="width: 15%" hidden></th>
                                            <th scope="col" style="width: 15%" hidden></th>
                                            <th scope="col" style="width: 15%" hidden></th>
                                            <th scope="col" style="width: 15%" hidden></th>
                                            <th scope="col" style="width: 15%" hidden></th>
                                            <th scope="col" style="width: 15%" hidden></th>
                                            <th scope="col" style="width: 15%" hidden></th>
                                            <th scope="col" style="width: 15%" hidden></th>
                                            <th scope="col" style="width: 15%" hidden></th>
                                            <th scope="col" style="width: 15%" hidden></th>
                                            <th scope="col" style="width: 15%" hidden></th>

                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                    $sales_query = "SELECT * FROM buyersinformationsheet WHERE `Status` = 'Appointment'";
                                    $sales_result = mysqli_query($connection, $sales_query);
                                    if (mysqli_num_rows($sales_result) > 0) {
                                       while ($row = mysqli_fetch_assoc($sales_result)) {
                                      
                                    ?>
                                        <tr style="color: #4a4949; font-size: 13px">
                                            <td class="id table-cell" name="id" hidden><?=$row['id1']?></td>
                                            <td style="border: none"> <a href="#" style="float: right"
                                                    onclick="toggleModal(this, 1)" data-toggle="modal"
                                                    data-target=".bd-example-modal-lg2"><i class="fas fa-eye"></i></a>
                                            </td>
                                            <td class="customerCode table-cell" name="customerCode"
                                                style="font-size: 14px;"><?=$row['customerCode']?></td>
                                            <td class="Fullname table-cell" name="Fullname" style="font-size: 14px;"><?=$row['fullname']?></td>
                                            <td class="Status table-cell" name="Status" style="font-size: 14px;" hidden><?=$row['Status']?></td>
                                            <td class="M_Phone table-cell" name="M_Phone" style="font-size: 14px;"><?=$row['Mobile_Phone']?></td>
                                            <td class="B_Date table-cell" name="B_Date"><?=$row['B_Date']?></td>
                                            <td class="Sex" name="Sex" hidden><?=$row['Sex']?></td>
                                            <td class="BusinessPhone" name="BusinessPhone" hidden><?=$row['BusinessPhone']?></td>
                                            <td class="DOB" name="DOB" hidden><?=$row['DOB']?></td>
                                            <td class="MaritalStatus" name="MaritalStatus" hidden><?=$row['MaritalStatus']?></td>
                                            <td class="EmailAddress" name="EmailAddress" hidden><?=$row['EmailAddress']?></td>
                                            <td class="Height" name="Height" hidden><?=$row['Height']?></td>
                                            <td class="Weight" name="Weight" hidden><?=$row['Weight']?></td>
                                            <td class="R_Address" name="R_Address" hidden><?=$row['r_Address']?></td>
                                            <td class="B_Address" name="B_Address" hidden><?=$row['b_Address']?></td>
                                            <td class="Mobile_Phone" name="Mobile_Phone" hidden><?=$row['Mobile_Phone']?></td>
                                            <td class="Residential_Phone" name="Residential_Phone" hidden><?=$row['Residential_Phone']?></td>
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
                                            <td class="NatureOfEmployeerBusiness" name="NatureOfEmployeerBusiness"
                                                hidden><?=$row['NatureOfEmployeerBusiness']?></td>
                                            <td class="PositionInCompany" name="PositionInCompany" hidden><?=$row['PositionInCompany']?></td>
                                            <td class="PersonalMonthlyIncome" name="PersonalMonthlyIncome" hidden><?=$row['PersonalMonthlyIncome']?></td>
                                            <td class="EmployementDate" name="EmployementDate" hidden><?=$row['EmployementDate']?></td>
                                            <td class="Citizenship" name="Citizenship" hidden><?=$row['Citizenship']?>
                                            </td>
                                            <td class="Filename" name="Filename" hidden><?php echo 'uploads/' .$row['Filename'] ?></td>
                                            <td>
                                                <center>
                                                    <button class="btn btn-primary delete-btn"
                                                        style="color:red; font-size:12px; padding:0px; margin:0px; border:none;background-color: transparent">
                                                        <span class="icon"> <i class="fas fa-user-times "></i></span>
                                                    </button>
                                                </center>
                                            </td>
                                            <td class="table-cell">

                                                <script>
                                                let tableRowElement;

                                                function toggleModal(element) {
                                                    tableRowElement = element.parentElement.parentElement;

                                                    const id = tableRowElement.getElementsByClassName('id')[0]
                                                        .innerHTML;
                                                    document.getElementById('id1').value = id;

                                                    const customerCode = tableRowElement.getElementsByClassName(
                                                        'customerCode')[0].innerHTML;
                                                    document.getElementById('customerCode1').value = customerCode;

                                                    const Fullname = tableRowElement.getElementsByClassName('Fullname')[
                                                        0].innerHTML;
                                                    document.getElementById('Fullname1').value = Fullname;

                                                    const B_Date = tableRowElement.getElementsByClassName('B_Date')[0]
                                                        .innerHTML;
                                                    document.getElementById('date1').value = B_Date;

                                                    const Fullname123 = tableRowElement.getElementsByClassName(
                                                        'Fullname')[0].innerHTML;
                                                    document.getElementById('Fullname2').value = Fullname123;

                                                    const customerCode123 = tableRowElement.getElementsByClassName(
                                                        'customerCode')[0].innerHTML;
                                                    document.getElementById('CustomerCode123').value = customerCode123;

                                                    const date23 = tableRowElement.getElementsByClassName('B_Date')[0]
                                                        .innerHTML;
                                                    document.getElementById('date23').value = date23;


                                                    const customerCode12 = tableRowElement.getElementsByClassName(
                                                        'customerCode')[0].innerHTML;
                                                    document.getElementById('CustomerCode').value = customerCode12;

                                                    const Sex12 = tableRowElement.getElementsByClassName('Sex')[0]
                                                        .innerHTML;
                                                    document.getElementById('Sex').value = Sex12;

                                                    const BusinessPhone12 = tableRowElement.getElementsByClassName(
                                                        'BusinessPhone')[0].innerHTML;
                                                    document.getElementById('BusinessPhoneFax').value = BusinessPhone12;


                                                    const B_Date12 = tableRowElement.getElementsByClassName('B_Date')[0]
                                                        .innerHTML;
                                                    document.getElementById('Date').value = B_Date12;

                                                    const Fullname12 = tableRowElement.getElementsByClassName(
                                                        'Fullname')[0].innerHTML;
                                                    document.getElementById('Name').value = Fullname12;



                                                    const DOB12 = tableRowElement.getElementsByClassName('DOB')[0]
                                                        .innerHTML;
                                                    document.getElementById('DateBirth').value = DOB12;

                                                    const MaritalStatus12 = tableRowElement.getElementsByClassName(
                                                        'MaritalStatus')[0].innerHTML;
                                                    document.getElementById('MaritalStatus').value = MaritalStatus12;


                                                    const EmailAddress = tableRowElement.getElementsByClassName(
                                                        'EmailAddress')[0].innerHTML;
                                                    document.getElementById('Email').value = EmailAddress;


                                                    const EmailAddress1 = tableRowElement.getElementsByClassName(
                                                        'EmailAddress')[0].innerHTML;
                                                    document.getElementById('Email1').value = EmailAddress1;


                                                    const cryptEmailAddress1 = tableRowElement.getElementsByClassName(
                                                        'EmailAddress')[0].innerHTML;
                                                    document.getElementById('cryptEmail1').value = cryptEmailAddress1;

                                                    const Height12 = tableRowElement.getElementsByClassName('Height')[0]
                                                        .innerHTML;
                                                    document.getElementById('Height').value = Height12;

                                                    const Weight12 = tableRowElement.getElementsByClassName('Weight')[0]
                                                        .innerHTML;
                                                    document.getElementById('Weight').value = Weight12;

                                                    const R_Address12 = tableRowElement.getElementsByClassName(
                                                        'R_Address')[0].innerHTML;
                                                    document.getElementById('ResidentAddress').value = R_Address12;

                                                    const Residential_Phone12 = tableRowElement.getElementsByClassName(
                                                        'Residential_Phone')[0].innerHTML;
                                                    document.getElementById('ResidentialPhoneno').value =
                                                        Residential_Phone12;

                                                    const B_Address12 = tableRowElement.getElementsByClassName(
                                                        'B_Address')[0].innerHTML;
                                                    document.getElementById('BillingAddress').value = B_Address12;

                                                    const Mobile_Phone12 = tableRowElement.getElementsByClassName(
                                                        'Mobile_Phone')[0].innerHTML;
                                                    document.getElementById('MobilePhoneno').value = Mobile_Phone12;

                                                    const IssuedAt12 = tableRowElement.getElementsByClassName(
                                                        'IssuedAt')[0].innerHTML;
                                                    document.getElementById('IssuedAt').value = IssuedAt12;

                                                    const IssuedOn12 = tableRowElement.getElementsByClassName(
                                                        'IssuedOn')[0].innerHTML;
                                                    document.getElementById('IssuedOn').value = IssuedOn12;

                                                    const ResidentSince12 = tableRowElement.getElementsByClassName(
                                                        'ResidentSince')[0].innerHTML;
                                                    document.getElementById('ResidentSince').value = ResidentSince12;

                                                    const SSS_No12 = tableRowElement.getElementsByClassName('SSS_No')[0]
                                                        .innerHTML;
                                                    document.getElementById('GSIS').value = SSS_No12;

                                                    const HDMF_No12 = tableRowElement.getElementsByClassName('HDMF_No')[
                                                        0].innerHTML;
                                                    document.getElementById('HDMF').value = HDMF_No12;

                                                    const TIN12 = tableRowElement.getElementsByClassName('TIN')[0]
                                                        .innerHTML;
                                                    document.getElementById('TIN').value = TIN12;

                                                    const NBI12 = tableRowElement.getElementsByClassName('NBI')[0]
                                                        .innerHTML;
                                                    document.getElementById('NBI').value = NBI12;

                                                    const MotherName12 = tableRowElement.getElementsByClassName(
                                                        'MotherName')[0].innerHTML;
                                                    document.getElementById('MotherName').value = MotherName12;

                                                    const FatherName12 = tableRowElement.getElementsByClassName(
                                                        'FatherName')[0].innerHTML;
                                                    document.getElementById('FatherName').value = FatherName12;

                                                    const SpouseName12 = tableRowElement.getElementsByClassName(
                                                        'SpouseName')[0].innerHTML;
                                                    document.getElementById('SpouseName').value = SpouseName12;

                                                    const ChildrensName12 = tableRowElement.getElementsByClassName(
                                                        'ChildrensName')[0].innerHTML;
                                                    document.getElementById('ChildrenName').value = ChildrensName12;

                                                    const MotherOccupation12 = tableRowElement.getElementsByClassName(
                                                        'MotherOccupation')[0].innerHTML;
                                                    document.getElementById('MotherOccupation').value =
                                                        MotherOccupation12;

                                                    const FatherOccupation12 = tableRowElement.getElementsByClassName(
                                                        'FatherOccupation')[0].innerHTML;
                                                    document.getElementById('FatherOccupation').value =
                                                        FatherOccupation12;

                                                    const SpouseOccupation12 = tableRowElement.getElementsByClassName(
                                                        'SpouseOccupation')[0].innerHTML;
                                                    document.getElementById('SpouseOccupation').value =
                                                        SpouseOccupation12;

                                                    const Employment_Status12 = tableRowElement.getElementsByClassName(
                                                        'Employment_Status')[0].innerHTML;
                                                    document.getElementById('Employment').value = Employment_Status12;

                                                    const SourceOfIncome12 = tableRowElement.getElementsByClassName(
                                                        'SourceOfIncome')[0].innerHTML;
                                                    document.getElementById('Source').value = SourceOfIncome12;

                                                    const EmployerBusinessName12 = tableRowElement
                                                        .getElementsByClassName('EmployerBusinessName')[0].innerHTML;
                                                    document.getElementById('Employer').value = EmployerBusinessName12;

                                                    const NatureOfEmployeerBusiness12 = tableRowElement
                                                        .getElementsByClassName('NatureOfEmployeerBusiness')[0]
                                                        .innerHTML;
                                                    document.getElementById('Nature').value =
                                                        NatureOfEmployeerBusiness12;

                                                    const PositionInCompany12 = tableRowElement.getElementsByClassName(
                                                        'PositionInCompany')[0].innerHTML;
                                                    document.getElementById('PositionCompany').value =
                                                        PositionInCompany12;

                                                    const PersonalMonthlyIncome12 = tableRowElement
                                                        .getElementsByClassName('PersonalMonthlyIncome')[0].innerHTML;
                                                    document.getElementById('PersonalMonthlyIncome').value =
                                                        PersonalMonthlyIncome12;

                                                    const EmployementDate12 = tableRowElement.getElementsByClassName(
                                                        'EmployementDate')[0].innerHTML;
                                                    document.getElementById('EmploymentbusinessEstablished').value =
                                                        EmployementDate12;

                                                    const Citizenship12 = tableRowElement.getElementsByClassName(
                                                        'Citizenship')[0].innerHTML;
                                                    document.getElementById('Citizenship').value = Citizenship12;




                                                }
                                                </script>

                                                <button onclick="toggleModal(this, 1)" data-toggle="modal"
                                                    data-target="#verify" class="btn btn-primary"
                                                    style="color:#ffffff; font-size:12px; padding: 5px;width: 100%; background-color: #228B22">
                                                    <span class="icon"> <i class="fa fa-credit-card"></i></span> Pay Now
                                                </button>


                                            </td>


                                        </tr>
                                        <?php
                                    }
                                 }
                                    ?>
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
    <div id="viewLedgerModal" class="modal fade bd-example-modal-lg2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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
                                                    <tr  style="color: #ffffff; background-color: #007ea7;font-size: 16px;padding: 5px 10px; text-align: Center">
                                                        <td style="font-size: 25px; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; text-align: center; border:none;">CUSTOMER'S LEDGER</td>
                                                    </tr>
                                                </tbody>
                                                <br> <br>
                                            </table>
                                        <table class="table" style="border: 2px solid #e3e6f0" cellspacing="0">
                                            <tr style="border: 2px solid #e3e6f0">
                                                <th colspan="1" style="color:#007ea7   ">
                                                    Personal
                                                    Information</th>
                                            </tr>
                                           
                                            <tr style="border: none">
                                                <td style="border: none; color:#4a4949;">Customer
                                                    Code <p id="accountID" hidden></p>
                                                    <input type="text" class="form-control"
                                                        style="color:#4a4949; border:none; padding-left: 10px; background-color: #E0F1FD; "
                                                        id="CustomerCode" name="CustomerCode" readonly>
                                                    Name <br> <input type="text" class="form-control"
                                                        style="color:#4a4949;border:none; padding: 10px; background-color: #E0F1FD;"
                                                        id="Name" name="Name" readonly>
                                                    Email Address
                                                    <br> <input type="text" class="form-control"
                                                        style="color:#4a4949;border:none; padding: 10px; background-color: #E0F1FD;"
                                                        id="Email" name="Email" readonly>

                                                </td>
                                                <td style="border: none; color:#4a4949;">
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
                                                <td style="border: none; color:#4a4949;">
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
                                                <td style="border: none; width: 190px; color:#4a4949;">
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

                                            <tr style="border: none; color:#4a4949;">
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

                                            <tr style="border: none ; color:#4a4949;">
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
                                            style="border: 2px solid #e3e6f0; color:#4a4949;"
                                            cellspacing="0">
                                            <tr style="border: 2px solid #e3e6f0">
                                                <th colspan="5" style="color:#007ea7">
                                                    Community Tax Certificate No.</th>
                                                    <input id="MIPercentage1" name="MIPercentage1" hidden></input>
                                                    <input id="MIPercentage2" name="MIPercentage2" hidden></input>
                                                      <input id="cryptMIPercentage1" name="cryptMIPercentage1" hidden></input>
                                                      <input id="cryptMIPercentage2" name="cryptMIPercentage2" hidden></input>
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
                                            style="border: 2px solid #e3e6f0; color:#4a4949;"
                                            cellspacing="0">
                                            <tr style="border: 2px solid #e3e6f0">
                                                <th colspan="5" style="color:#007ea7">
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
                                            style="border: 2px solid #e3e6f0; color:#4a4949;"
                                            cellspacing="0">
                                            <tr style="border: 2px solid #e3e6f0">
                                                <th colspan="5" style="color:#007ea7">
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
                                            style="border: 2px solid #e3e6f0; color:#4a4949;"
                                            cellspacing="0">
                                            <tr style="border: 2px solid #e3e6f0">
                                                <th colspan="5" style="color:#007ea7">
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
    <div class="modal fade bd-example-modal-lg1" id="verify" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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

                    <form method="POST" Action="sales_InsertData.php">
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
                                      $sales_query = "SELECT id, block, section, lot_no, area, phase, type, ListPrice FROM tbl_lotdescription WHERE status = 'Available'";
                                    
                                      try {
                                        // Prepare and execute the query with a placeholder for status
                                        $stmt = $connection->prepare($sales_query);
                                        $stmt->execute();
                                    
                                        // Get the result set
                                        $sales_result = $stmt->get_result();
                                    
                                        // Check if there are any rows returned
                                        if ($sales_result->num_rows > 0) {
                                          // Loop through the rows and process the data
                                          while ($row = $sales_result->fetch_assoc()) {
                                      ?>
                                            <tr style="border: 2px solid #e3e6f0">
                                              <td style="font-size: 14px; color:#4a4949" class="lot_id table-cell"><?= htmlspecialchars($row['id']) ?></td>
                                              <td style="font-size: 14px; color:#4a4949" class="lot_block table-cell"><?= htmlspecialchars($row['block']) ?></td>
                                              <td style="font-size: 14px; color:#4a4949" class="lot_section table-cell"><?= htmlspecialchars($row['section']) ?></td>
                                              <td style="font-size: 14px; color:#4a4949" class="lot_no table-cell"><?= htmlspecialchars($row['lot_no']) ?></td>
                                              <td style="font-size: 14px; color:#4a4949" class="lot_area table-cell"><?= htmlspecialchars($row['area']) ?></td>
                                              <td style="font-size: 14px; color:#4a4949" class="lot_phase table-cell"><?= htmlspecialchars($row['phase']) ?></td>
                                              <td style="font-size: 14px; color:#4a4949" class="lot_type table-cell"><?= htmlspecialchars($row['type']) ?></td>
                                              <td style="font-size: 14px; color:#4a4949" class="lot_TCP table-cell"><?= '₱ ' . number_format($row['ListPrice'], 2, '.', ',') ?></td>
                                    
                                              <td style="font-size: 14px; color:#4a4949" class="table-cell">
                                                <a href="#" onclick="toggleModal(this, 1)" data-toggle="modal" data-target=".lotdesc"
                                                  style="color:#ffffff; font-size:12px; padding: 5px;width: 100%; background-color: #ef476f"
                                                  class="btn btn-primary" data-controls-modal="myModal" data-backdrop="static"
                                                  data-keyboard="false"><i class="fas fa-cart-plus"></i> Get Reservation</a>
                                              </td>
                                            </tr>
                                      <?php
                                          }
                                        } else {
                                          echo '<tr><td colspan="9">No results found.</td></tr>';
                                        }
                                    
                                        // Close the result set and statement
                                        $sales_result->close();
                                        $stmt->close();
                                    
                                      } catch (Exception $e) {
                                        // Log the exception instead of displaying it directly to the user
                                        error_log("Exception occurred during sales query: " . $e->getMessage());
                                        // Display a generic error message to the user
                                        echo '<tr><td colspan="9">Oops! Something went wrong on our end. Please try again later.</td></tr>';
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
                                            <input type="text" id="Email1" name="Email1" hidden
                                                style="color:#4a4949;border:none; background-color: transparent;padding:2px; font-size: 14px"
                                                readonly>
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
                                                        <option style="color:#4a4949" hidden name="preNeedPrice"
                                                            value="PreNeedPrice"> Pre-Need Price</option>
                                                        <option style="color:#4a4949" name="AtNeedPrice"
                                                            value="AtNeedPrice"> AT-Need Price</option>
                                                        <option style="color:#4a4949" name="SpotCash" id="SpotCash"
                                                            value="SpotCash">
                                                            Spot Cash</option>
                                                        <option style="color:#4a4949" name="mCash" id="M_Cash"
                                                            value="M_Cash">M-Cash
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
                                                        id="lotListPrice" name="lotListPrice" required></input>
                                                </td>
                                            </tr>

                                            <tr style="border: none">
                                                <td style="border: none; width: 50%; color:white; font-size: 13px; background-color: #5B7EDE; padding:2px 15px; margin:2px; font-weight: bold;">
                                                    Value Added Tax (%):
                                                </td>
                                                <td style="border: none; background-color: #5B7EDE; color:#4a4949; padding:2px 15px; margin:2px;">
                                                    <input placeholder="₱ 0.00" style="padding:2px 15px; font-size: 13px; margin:2px; background-color: #e8e4c9 ; border: none; color:#4a4949; width: 95%" id="taxs" name="taxs" value="12" hidden>
                                                    <input placeholder="₱ 0.00" style="padding:2px 15px; font-size: 13px; margin:2px; background-color: #e8e4c9 ; border: none; color:#4a4949; width: 95%" id="taxs1" name="taxs1"   readonly>
                                                    <sup hidden>
                                                        <a href="#" onclick="toggleModal1(this)" data-toggle="modal" data-target="#tax">
                                                            <i class="fa fa-gears" style="font-size: 11px; color:white;"></i>
                                                        </a>
                                                    </sup>
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
                                                        style="padding:2px 15px; width:  95%; font-size: 13px; margin:2px; background-color: #e8e4c9 ;border: none;color:#4a4949"
                                                        id="subtotaltax" name="subtotaltax"></input>
                                                </td>
                                            </tr>

                                           <tr style="border: none">
                                              <td style="border: none; background-color: #5B7EDE; font-size: 13px; color:white; padding:2px 15px; margin:2px; font-weight: bold;">
                                                Perpetual Care Funds :
                                              </td>
                                     
                                                    <td style="border: none; background-color: #5B7EDE; color:#4a4949; padding:2px 15px; margin:2px;">
                                                      <input pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency" style="padding:2px 15px; width:  95%; font-size: 13px; margin:2px; background-color: #e8e4c9 ; border: none; color:#4a4949; width: 95%" id="pcf" name="pcf"></input>
                                                      <input placeholder="₱ 0.00" hidden readonly style="padding:2px 15px; width:  95%; font-size: 13px; margin:2px; background-color: #e8e4c9 ; border: none; color:#4a4949; width: 95%" id="pcf1" name="pcf1" ></input>
                                                   
                                                    
                                                    </td>
                                           
                                            </tr>

                                           <tr style="border: none">
                                              <td style="border: none; background-color: #5B7EDE; font-size: 13px; color:white; padding:2px 15px; margin:2px; font-weight: bold;">
                                                Less Discount :
                                              </td>
                                              <?php
                                              $sales_query1 = "SELECT id, discount FROM tbl_discount";
                                            
                                              try {
                                                $stmt1 = $connection->prepare($sales_query1);
                                                $stmt1->execute();
                                                $sales_result1 = $stmt1->get_result();
                                            
                                                if ($sales_result1->num_rows > 0) {
                                                  while ($row = $sales_result1->fetch_assoc()) {
                                              ?>
                                                    <td class="discountID" name="discountID" hidden><?= htmlspecialchars($row['id']) ?></td>
                                                    <td style="border: none; background-color: #5B7EDE; color:#4a4949; padding:2px 15px; margin:2px;">
                                                      <input placeholder="₱ 0.00" style="padding:2px 15px; font-size: 13px; width: 95%; margin:2px; background-color: #e8e4c9 ; border: none; color:#4a4949; width: 95%" id="discounts" name="discounts" value="<?= '₱ ' . htmlspecialchars($row['discount']) ?>" hidden>
                                                      <input placeholder="₱ 0.00" style="padding:2px 15px; font-size: 13px; width: 95%; margin:2px; background-color: #e8e4c9 ; border: none; color:#4a4949; width: 95%" id="discounts1" name="discounts1" readonly>
                                                      </input>
                                                      <script>
                                                        let tableRowElement1;
                                            
                                                        function toggleModal1(element1) {
                                                          tableRowElement1 = element1.parentElement.parentElement;
                                            
                                                          const discountID1 = tableRowElement1.getElementsByClassName('discountID')[0].innerHTML;
                                                          document.getElementById('discountID').value = discountID1;
                                                        }
                                                      </script>
                                                      <sup hidden>
                                                        <a href="#" onclick="toggleModal1(this)" data-toggle="modal" data-target="#discount">
                                                          <i class="fa fa-gears" style="font-size: 11px; color:white;"></i>
                                                        </a>
                                                      </sup>
                                                    </td>
                                              <?php
                                                  }
                                                } else {
                                                  echo '<td colspan="2" style="border: none;">No results found.</td>';
                                                }
                                            
                                                $sales_result1->close();
                                                $stmt1->close();
                                            
                                              } catch (Exception $e) {
                                                error_log("Exception occurred during discount query: " . $e->getMessage());
                                                echo '<td colspan="2" style="border: none;">Oops! Something went wrong on our end. Please try again later.</td>';
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
                                              <td hidden style="border: none; background-color: #5B7EDE; font-size: 13px; color:white; padding:2px 15px; margin:2px; font-weight: bold;">
                                                Add_% Mark-up :
                                              </td>
                                            
                                                    <td hidden style="border: none; background-color: #5B7EDE; color:#4a4949; padding:2px 15px; margin:2px;">
                                                      <input placeholder="₱ 0.00" readonly style="padding:2px 15px; font-size: 13px; margin:2px; background-color: #e8e4c9; width: 95% ;border: none; color:#4a4949; width: 95%" id="markup" name="markup" value="1.5" hidden>
                                                      </input>
                                                      <input placeholder="₱ 0.00" readonly style="padding:2px 15px; font-size: 13px; margin:2px; background-color: #e8e4c9 ; width: 95%; border: none; color:#4a4949; width: 95%" id="markup1" name="markup1" value="0">
                                                      </input>
                                                    
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
                                                <td style="border: none; background-color: #5B7EDE; font-size: 13px; color:white; padding:2px 15px; margin:2px; font-weight: bold;">
                                                    Downpayment :
                                                    <input placeholder="0.00" readonly oninput="computedp()" pattern="^\%\d{1,3}(,\d{3})*(\.\d+)?%" type="number"
                                                        style="float: right; padding:2px 5px; font-size: 13px; margin:2px; background-color: #e8e4c9 ; border: none; color:#4a4949; width: 25%"
                                                        id="dpPercentage" name="dpPercentage">
                                                    </input>
                                                    <a style="float: right; font-size: 13px; margin-right:5px; border: none;color:#fffff;width: 5%">%</a>
                                                </td>
                                            
                                                <td style="border: none; background-color: #5B7EDE; color:#4a4949; padding:2px 15px; margin:2px;">
                                                    <?php
                                                    $sales_query1 = "SELECT minimumDPPercentage FROM tbl_minimumdppercentage";
                                                    try {
                                                        $stmt1 = $connection->prepare($sales_query1);
                                                        $stmt1->execute();
                                                        $sales_result1 = $stmt1->get_result();
                                            
                                                        if ($sales_result1->num_rows > 0) {
                                                            while ($row = $sales_result1->fetch_assoc()) {
                                                    ?>
                                                                <input hidden value="<?= htmlspecialchars($row['minimumDPPercentage']) ?>" placeholder="0.00" readonly oninput="computedp()" pattern="^\%\d{1,3}(,\d{3})*(\.\d+)?%" type="number" style="float: right; padding:2px 5px; font-size: 13px; margin:2px; background-color: #e8e4c9 ;border: none;color:#4a4949;width: 25%" id="minimumdpPercentage" name="minimumdpPercentage"></input>
                                                    <?php
                                                            }
                                                        } else {
                                                            echo '<input hidden value="0" id="minimumdpPercentage" name="minimumdpPercentage"></input>';
                                                        }
                                            
                                                        $sales_result1->close();
                                                        $stmt1->close();
                                                    } catch (Exception $e) {
                                                        error_log("Exception occurred during minimum downpayment percentage query: " . $e->getMessage());
                                                        echo '<input hidden value="0" id="minimumdpPercentage" name="minimumdpPercentage"></input>';
                                                    }
                                                    ?>
                                            
                                                    <input placeholder="₱ 0.00" pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" oninput="computedownpaymentPercentage()" data-type="currency" style="padding:2px 15px; width: 95%; font-size: 13px; margin:2px; background-color: #FDFDFD ; border: none;color:#4a4949" id="dpPercentage2" name="dpPercentage2"></input>
                                                    <div id="warningMessage" style="display: none; color: red;">Minimum downpayment required is 20%.</div>
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
                                              
                                                    <input placeholder="₱ 0.00" id="MI1" name="MI1" readonly hidden
                                                        pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency"
                                                        style="padding:2px 15px; width:  95%; font-size: 13px; margin:2px; background-color: #FDFDFD ;border: none;color:#4a4949"></input>
                                                    <input placeholder="₱ 0.00" hidden id="MIInterestPercentage1"
                                                        value="50" name="MIInterestPercentage1"
                                                        readonly pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱"
                                                        data-type="currency"
                                                        style="padding:2px 15px; width:   95%; font-size: 13px; margin:2px; background-color: #FDFDFD ;border: none;color:#4a4949"></input>
                                                    <input placeholder="₱ 0.00" hidden id="MIPrincipalPercentage1"
                                                        value="50" name="MIPrincipalPercentage1"
                                                        readonly pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱"
                                                        data-type="currency"
                                                        style="padding:2px 15px; width:  95%; font-size: 13px; margin:2px; background-color: #FDFDFD ;border: none;color:#4a4949"></input>
                                                    <input placeholder="₱ 0.00" hidden id="MIPercentage1"
                                                        value="50" name="MIPercentage1"
                                                        readonly pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱"
                                                        data-type="currency"
                                                        style="padding:2px 15px; width:  95%; font-size: 13px; margin:2px; background-color: #FDFDFD ;border: none;color:#4a4949"></input>


                                                    <sup hidden> <a href="#" onclick="toggleModal1(this, 1)"
                                                            data-toggle="modal" data-target="#firstMonthMIDiv"><i
                                                                class="fa fa-gears"
                                                                style="font-size: 11px; color:white;"></i></a></sup>

                                                </td>
                                                </td>
                                            </tr>
                                            
                                            <tr hidden id="monthlyInstallmenttr2" style="border: none; display: none">
                                                <td
                                                    style="border: none;background-color: #5B7EDE;font-size: 13px;color:white;padding:2px 15px;margin:2px; font-weight: bold;">
                                                    2<sup> nd</sup> Monthly Installment :
                                                </td>
                                                
                                                <td
                                                    style="border: none;background-color: #5B7EDE;color:#4a4949;padding:2px 15px;margin:2px;">
                                                    <input placeholder="₱ 0.00" id="MI2" name="MI2" readonly
                                                        pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency"
                                                        style="padding:2px 15px; width: 95%; font-size: 13px; margin:2px; background-color: #FDFDFD ;border: none;color:#4a4949"></input>

                                                    <input placeholder="₱ 0.00" hidden value="50"
                                                        id="MIInterestPercentage2" name="MIInterestPercentage2" readonly
                                                        pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency"
                                                        style="padding:2px 15px; width:  95%; font-size: 13px; margin:2px; background-color: #FDFDFD ;border: none;color:#4a4949"></input>
                                                    <input placeholder="₱ 0.00" hidden id="MIPrincipalPercentage2"
                                                        value="50" name="MIPrincipalPercentage2"
                                                        readonly pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱"
                                                        data-type="currency"
                                                        style="padding:2px 15px; width:  95%; font-size: 13px; margin:2px; background-color: #FDFDFD ;border: none;color:#4a4949"></input>
                                                    <input placeholder="₱ 0.00" hidden id="MIPercentage2"
                                                        value="50" name="MIPercentage2"
                                                        readonly pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱"
                                                        data-type="currency"
                                                        style="padding:2px 15px; width:  95%; font-size: 13px; margin:2px; background-color: #FDFDFD ;border: none;color:#4a4949"></input>

                                                    <sup hidden> <a href="#" onclick="toggleModal1(this, 1)"
                                                            data-toggle="modal" data-target="#secondMonthMIDiv"><i
                                                                class="fa fa-gears"
                                                                style="font-size: 11px; color:white;"></i></a></sup>

                                                </td>
                                                
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
                                                        style="float: right; font-  size: 13px; margin-right:5px; border: none;color:#fffff;width: 5%">%
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
                                                    <select type="number"
                                                        style="padding: 2px 15px; font-size: 13px; margin: 2px; background-color: #FDFDFD; width: 95%; border: none; color: #4a4949"
                                                        placeholder="₱ 0.00" id="NoOfMonths" name="NoOfMonths">
                                                        <option value="0">--- SELECT TERMS ---</option>
                                                        <option value="12">1 Year (12 Months)</option>
                                                        <option value="24">2 Years (24 Months)</option>
                                                        <option value="36">3 Years (36 Months)</option>
                                                        <option value="48">4 Years (48 Months)</option>
                                                        <option value="60">5 Years (60 Months)</option>
                                                        <option value="72">6 Years (72 Months)</option>
                                                        <option value="84">7 Years (84 Months)</option>
                                                        <option value="96">8 Years (96 Months)</option>
                                                        <option value="108">9 Years (108 Months)</option>
                                                        <option value="120">10 Years (120 Months)</option>
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
                                        <p style="font-size: 14px;">Please select one of the following options: agent,
                                            website, social media, or walk-in.</p>
                                        <select required class="form-control" id="marketAnalysis" name="marketAnalysis"
                                            style="color:#4a4949; width: 100%; font-size: 14px"><br>
                                            <option value="Website" name="Website">Website</option>
                                            <option value="Agent" name="Agent">Agent</option>
                                            <option value="Walkin" name="Walkin">Walk-in</option>
                                            <option value="SocialMedia" name="SocialMedia">Social Media</option>
                                        </select>
                                    </td>
                                    <td>
                                        <p style="font-size: 14px;">Agent name</p>
                                        <input class="form-control" required id="agentName" name="agentName"
                                            style="color:#4a4949; width: 100%; font-size: 14px" /><br>
                                    </td>
                                </tr>
                            </table>

                            <table class="table " cellspacing="0">
                                <th colspan="5" style="color:#ffffff; background-color:#007ea7; font-size: 14px">
                                    Payment
                                    Method
                                </th>
                                <tr style="color:#4a4949">
                                    <td>Initial Payment<br><input type="date" required class="form-control"
                                            id="PaymentDueDate" name="PaymentDueDate"
                                            style="color:#4a4949; font-size: 14px; margin-top: 7px">
                                    </td>
                                    <td>Payment Method<br>
                                        <select class="form-control" id="paymentMethod" required name="paymentMethod"
                                            style="color:#4a4949; width: 95%; font-size: 14px"><br>
                                            <option value="">----Select Payment Method----</option>
                                            <option value="Cash" name="Cash">Cash</option>
                                            <option value="Online" name="Online">Online</option>
                                        </select>
                                    </td>
                                    <td>Full downpayment<br><input readonly type="text" required class="form-control"
                                            id="totalBalance" name="totalBalance"
                                            style="color:#4a4949; font-size: 14px;">
                                    </td>
                                </tr>
                            </table>

                            <div style="float:right; margin-bottom:10px;">
                                <button type="button" data-toggle="modal" data-target="#lotvouchercodeModal"
                                    name="lotpromoVoucher" id="lotpromoVoucher" class="voucher-button">Promo
                                    voucher</button>
                                <button type="submit" name="lotLedger1" id="lotLedger1"
                                    class="save-button">Save</button>
                            </div>
                        </div>
                    </form>

                    <!-- Verify lotModal  -->
                    <div id="showcryptdiv1"
                        style="color:#ffffff; background-color:#007ea7; font-size: 15px; padding: 8px; display:none">
                        Crypt Description
                    </div>
                    <form onsubmit="onSubmitForm();" method="POST" Action="sales_InsertData.php">
                        <div class="card-body" style="color:#4a4949; display:none" id="showcryptdiv">
                            <div class="table-responsive" style="width: 100%;" id="showcryptdescdiv">
                               <table id="dtcryptDescRecord" class="table table-striped table-bordered table-sm" style="color:#4a4949" cellspacing="0" width="100%">
                                  <thead>
                                    <tr style="background-color: #00a8e8">
                                      <th class="th-sm" style="width: 2%; font-size: 14px; color:#ffffff">ID</th>
                                      <th class="th-sm" style="width: 10%; font-size: 14px; color:#ffffff">Phase</th>
                                      <th class="th-sm" style="width: 10%; font-size: 14px; color:#ffffff">Level</th>
                                      <th class="th-sm" style="width: 10%; font-size: 14px; color:#ffffff">Area</th>
                                      <th class="th-sm" style="width: 10%; font-size: 14px; color:#ffffff">Section</th>
                                      <th class="th-sm" style="width: 10%; font-size: 14px; color:#ffffff">Column</th>
                                      <th class="th-sm" style="width: 10%; font-size: 14px; color:#ffffff">Unit no</th>
                                      <th class="th-sm" style="width: 10%; font-size: 14px; color:#ffffff">Classification</th>
                                      <th class="th-sm" style="width: 10%; font-size: 14px; color:#ffffff">List Price</th>
                                      <th class="th-sm" style="width: 6%; font-size: 14px; color:#ffffff">Tools</th>
                                    </tr>
                                  </thead>
                                  <tbody style="border: 2px solid #e3e6f0;">
                                    <?php
                                    $sales_query = "SELECT id, phase, level, area, section, crypt_column, unit_no, classification, listPrice FROM tbl_cryptdescription WHERE status = 'Available'";
                                    $stmt = $connection->prepare($sales_query);
                                    $stmt->execute();
                                    $result = $stmt->get_result();
                                    if ($result->num_rows > 0) {
                                      while ($row = $result->fetch_assoc()) {
                                    ?>
                                        <tr style="border: 2px solid #e3e6f0">
                                          <td style="width: 2%; font-size: 14px; color:#4a4949" class="table-cell"><?= htmlspecialchars($row['id']) ?></td>
                                          <td style="width: 10%; font-size: 14px; color:#4a4949" class="table-cell"><?= htmlspecialchars($row['phase']) ?></td>
                                          <td style="width: 10%; font-size: 14px; color:#4a4949" class="table-cell"><?= htmlspecialchars($row['level']) ?></td>
                                          <td style="width: 10%; font-size: 14px; color:#4a4949" class="table-cell"><?= htmlspecialchars($row['area']) ?></td>
                                          <td style="width: 10%; font-size: 14px; color:#4a4949" class="table-cell"><?= htmlspecialchars($row['section']) ?></td>
                                          <td style="width: 10%; font-size: 14px; color:#4a4949" class="table-cell"><?= htmlspecialchars($row['crypt_column']) ?></td>
                                          <td style="width: 10%; font-size: 14px; color:#4a4949" class="table-cell"><?= htmlspecialchars($row['unit_no']) ?></td>
                                          <td style="width: 10%; font-size: 14px; color:#4a4949" class="table-cell"><?= htmlspecialchars($row['classification']) ?></td>
                                          <td style="width: 10%; font-size: 14px; color:#4a4949" class="table-cell"><?= '₱ ' . number_format($row['listPrice'], 2, '.', ',') ?></td>
                                          <td style="width: 6%; font-size: 14px; color:#4a4949" class="table-cell">
                                            <button style="color:#ffffff; font-size:12px; padding: 5px; width: 100%; background-color: #ef476f" type="button" class="btn btn-primary" id="cryptlotDescriptionTypeAdd_button" name="cryptlotDescriptionTypeAdd_button" data-controls-modal="myModal" data-backdrop="static" data-keyboard="false"><i class="fas fa-cart-plus"></i> Get Reservation</button>
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
                                                <input type="text" id="cryptEmail1" name="cryptEmail1" hidden
                                                    style="color:#4a4949;border:none; background-color: transparent;padding:2px; font-size: 14px"
                                                    readonly>
                                            </tr>

                                            <tr>
                                                <td style="width:50%; text-align: left">Crypt ID:</td>
                                                <td style="width:50%;"><input type="text"
                                                        style="width: 90%; text-align: left; color:#4a4949;border:none; pointer-events: none; background-color: transparent;padding:2px; font-size: 14px"
                                                        id="crypt_id1" name="crypt_id1" readonly required></td>
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
                                                <tr style="border: none;">
                                                    <td
                                                        style="border: none; width: 50%; color:#4a4949; font-size: 13px;background-color: Transparent;padding-right:2px;padding-bottom:2px;padding-top:15px;margin:2px; font-weight: bold">
                                                        Terms :<br>
                                                        <select type="text" class="form-control"
                                                            style="padding: 8px; color:#4a4949; font-size: 13px; "
                                                            disabled id="cryptterms" name="cryptterms">
                                                            <option style="color:#4a4949" hidden
                                                                name="cryptpreNeedPrice" value="cryptPreNeedPrice">
                                                                Pre-Need Price</option>
                                                            <option style="color:#4a4949" name="cryptAtNeedPrice"
                                                                value="cryptAtNeedPrice"> AT-Need Price</option>
                                                            <option style="color:#4a4949" name="cryptSpotCash"
                                                                id="cryptSpotCash" value="cryptSpotCash">
                                                                Spot Cash</option>
                                                            <option style="color:#4a4949" name="cryptmCash"
                                                                id="cryptM_Cash" value="cryptM_Cash">M-Cash
                                                                30 Days</option>
                                                            <option style="color:#4a4949" name="cryptInstallment"
                                                                value="cryptInstallment">Installment</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr style="border: none;">
                                                    <td style="border: none; width: 50%; color:white; font-size: 13px;background-color: #5B7EDE;padding-left:15px;padding-right:2px;padding-bottom:2px;padding-top:15px;margin:2px; font-weight: bold">
                                                        Crypt List Price :
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
                                                  <td style="border: none; width: 50%; color:white; font-size: 13px; background-color: #5B7EDE; padding:2px 15px; margin:2px; font-weight: bold;">
                                                    Value Added Tax (_)% :
                                                  </td>
                                                  <td style="border: none; background-color: #5B7EDE; color:#4a4949; padding:2px 15px; margin:2px;">
                                                    <input placeholder="₱ 0.00" style="padding:2px 15px; font-size: 13px; margin:2px; background-color: #e8e4c9; border: none; color:#4a4949; width:  95%" id="crypttaxs" name="crypttaxs" value="12" hidden></input>
                                                    <input placeholder="₱ 0.00" style="padding:2px 15px; font-size: 13px; margin:2px; background-color: #e8e4c9; border: none; color:#4a4949; width:  95%" id="crypttaxs1" name="crypttaxs1"   readonly></input>
                                                   
                                                  </td>
                                                  
                                                </tr>
                                                <tr style="border: none">
                                                    <td
                                                        style="border: none;background-color: #5B7EDE;font-size: 13px;color:white;padding:2px 15px;margin:2px; font-weight: bold;">
                                                        Subtotal :
                                                    </td>
                                                    <td style="border: none;background-color: #5B7EDE;color:#4a4949;padding:2px 15px;margin:2px;">
                                                        <input placeholder="₱ 0.00" readonly
                                                            pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency"
                                                            style="padding:2px 15px; width:  95%; font-size: 13px; margin:2px; background-color: #e8e4c9 ;border: none;color:#4a4949"
                                                            id="cryptsubtotaltax" name="cryptsubtotaltax"></input>
                                                         
                                                    </td>
                                                </tr>
                                                
                                                <tr style="border: none">
                                                    <td style="border: none; background-color: #5B7EDE; font-size: 13px; color: white; padding: 2px 15px; margin: 2px; font-weight: bold;">
                                                        Perpetual Care Funds :
                                                    </td>
                                                    <td style="border: none; background-color: #5B7EDE; color: #4a4949; padding: 2px 15px; margin: 2px;">
                                                        <input placeholder="₱ 0.00" readonly  pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency" style="padding: 2px 15px; width: 95%; font-size: 13px; margin: 2px; background-color: #e8e4c9; border: none; color: #4a4949;" id="cryptpcf" name="cryptpcf" value="₱ 40,000"></input>
                                                        <input placeholder="₱ 0.00" readonly  pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency" style="padding: 2px 15px; width: 95%; font-size: 13px; margin: 2px; background-color: #e8e4c9; border: none; color: #4a4949;" id="cryptpcf1" name="cryptpcf1" value="'₱ 40,000'" hidden></input>
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
                                                        <?=$row['id']?>
                                                    </td>
                                                    <td
                                                        style="border: none;background-color: #5B7EDE;color:#4a4949;padding:2px 15px;margin:2px;">
                                                        <input placeholder="₱ 0.00"
                                                            style="padding:2px 15px; font-size: 13px; width:  95%%; margin:2px; background-color: #e8e4c9 ;border: none;color:#4a4949;width: 95%"
                                                            id="cryptdiscounts" name="cryptdiscounts"
                                                            value="<?=$row['discount']?>" hidden></input>
                                                
                                                        <input placeholder="₱ 0.00"
                                                            style="padding:2px 15px; font-size: 13px; width:  95%; margin:2px; background-color: #e8e4c9 ;border: none;color:#4a4949;width: 95%"
                                                            id="cryptdiscounts1" name="cryptdiscounts1"
                                                            readonly></input>
                                                        
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
                                                        style="padding:2px 15px; width:  95%; font-size: 13px; margin:2px; background-color: #FDFDFD ;border: none;color:#4a4949"
                                                        id="crypttotalContractPrice3"
                                                        name="crypttotalContractPrice3"></input>
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
                                                            style="padding:2px 15px; font-size: 13px; margin:2px; background-color: #e8e4c9 ; width:  95%;border: none;color:#4a4949"></input>
                                                    </td>
                                                </tr>
                                                <tr id="cryptdownpaymenttr" style="border: none">
                                                    <td style="border: none; background-color: #5B7EDE; font-size: 13px; color: white; padding: 2px 15px; margin: 2px; font-weight: bold;">
                                                        Downpayment :
                                                        <input placeholder="0.00" readonly oninput="cryptcomputedp()" pattern="^\%\d{1,3}(,\d{3})*(\.\d+)?%" type="number"
                                                            style="float: right; padding: 2px 5px; font-size: 13px; margin: 2px; background-color: #e8e4c9; border: none; color: #4a4949; width: 25%"
                                                            id="cryptdpPercentage" name="cryptdpPercentage">
                                                        </input>
                                                        <a style="float: right; font-size: 13px; margin-right: 5px; border: none; color: #fffff; width: 5%">%</a>
                                                    </td>
                                                    <td style="border: none; background-color: #5B7EDE; color: #4a4949; padding: 2px 15px; margin: 2px;">
                                                       
                                                                <input hidden value="20"
                                                                    placeholder="0.00" readonly oninput="cryptcomputedp()"
                                                                    pattern="^\%\d{1,3}(,\d{3})*(\.\d+)?%" type="number"
                                                                    style="float: right; padding: 2px 5px; font-size: 13px; margin: 2px; background-color: #e8e4c9; border: none; color: #4a4949; width: 25%"
                                                                    id="cryptminimumdpPercentage" name="cryptminimumdpPercentage">
                                                                </input>
                                                       
                                                        <input placeholder="₱ 0.00" pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" oninput="computedownpaymentPercentage()" data-type="currency"
                                                            style="padding: 2px 15px; width: 95%; font-size: 13px; margin: 2px; background-color: #FDFDFD; border: none; color: #4a4949"
                                                            id="cryptdpPercentage2" name="cryptdpPercentage2">
                                                        </input>
                                                        <div id="cryptwarningMessage" style="display: none; color: red;">Minimum downpayment required is 20%.
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr hidden id="cryptmonthlyInstallmenttr"
                                                    style="border: none; display: none">
                                                    <td
                                                        style="border: none;background-color: #5B7EDE;font-size: 13px;color:white;padding:2px 15px;margin:2px; font-weight: bold;">
                                                        1<sup> st</sup> Monthly Installment :
                                                    </td>
                                                    <td
                                                        style="border: none;background-color: #5B7EDE;color:#4a4949;padding:2px 15px;margin:2px;">
                                                        <input placeholder="₱ 0.00" id="cryptMI1" name="cryptMI1"
                                                            readonly pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱"
                                                            data-type="currency"
                                                            style="padding:2px 15px; width:  95%; font-size: 13px; margin:2px; background-color: #FDFDFD ;border: none;color:#4a4949"></input>
                                                        <input placeholder="₱ 0.00" hidden
                                                            id="cryptMIInterestPercentage1"
                                                            value="50"
                                                            name="cryptMIInterestPercentage1" readonly
                                                            pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency"
                                                            style="padding:2px 15px; width:   95%; font-size: 13px; margin:2px; background-color: #FDFDFD ;border: none;color:#4a4949"></input>
                                                        <input placeholder="₱ 0.00" hidden
                                                            id="cryptMIPrincipalPercentage1"
                                                            value="50"
                                                            name="cryptMIPrincipalPercentage1" readonly
                                                            pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency"
                                                            style="padding:2px 15px; width:  95%; font-size: 13px; margin:2px; background-color: #FDFDFD ;border: none;color:#4a4949"></input>
                                                        <input placeholder="₱ 0.00" hidden id="cryptMIPercentage1"
                                                            value="50"
                                                            name="cryptMIPercentage1" readonly
                                                            pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency"
                                                            style="padding:2px 15px; width:  95%; font-size: 13px; margin:2px; background-color: #FDFDFD ;border: none;color:#4a4949"></input>


                                                       
                                                    </td>
                                                   
                                                    </td>
                                                </tr>
                                                <tr hidden id="cryptmonthlyInstallmenttr2"
                                                    style="border: none; display: none">
                                                    <td
                                                        style="border: none;background-color: #5B7EDE;font-size: 13px;color:white;padding:2px 15px;margin:2px; font-weight: bold;">
                                                        2<sup> nd</sup> Monthly Installment :
                                                    </td>
                                                   
                                                    <td class="taxID" name="taxID" hidden><?=$row['id']?></td>
                                                    <td
                                                        style="border: none;background-color: #5B7EDE;color:#4a4949;padding:2px 15px;margin:2px;">
                                                        <input placeholder="₱ 0.00" id="cryptMI2" name="cryptMI2"
                                                            readonly pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱"
                                                            data-type="currency"
                                                            style="padding:2px 15px; width: 95%; font-size: 13px; margin:2px; background-color: #FDFDFD ;border: none;color:#4a4949"></input>

                                                        <input placeholder="₱ 0.00" hidden value="50"
                                                            id="cryptMIInterestPercentage2"
                                                            name="cryptMIInterestPercentage2" readonly
                                                            pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency"
                                                            style="padding:2px 15px; width:  95%; font-size: 13px; margin:2px; background-color: #FDFDFD ;border: none;color:#4a4949"></input>
                                                        <input placeholder="₱ 0.00" hidden
                                                            id="cryptMIPrincipalPercentage2"
                                                            value="50"
                                                            name="cryptMIPrincipalPercentage2" readonly
                                                            pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency"
                                                            style="padding:2px 15px; width:  95%; font-size: 13px; margin:2px; background-color: #FDFDFD ;border: none;color:#4a4949"></input>
                                                        <input placeholder="₱ 0.00" hidden id="cryptMIPercentage2"
                                                            value="50"
                                                            name="cryptMIPercentage2" readonly
                                                            pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency"
                                                            style="padding:2px 15px; width:  95%; font-size: 13px; margin:2px; background-color: #FDFDFD ;border: none;color:#4a4949"></input>

                                                        

                                                    </td>
                                                   
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
                                                            hidden id="cryptbalance1" name="cryptbalance1"></input>

                                                        <input placeholder="₱ 0.00" readonly
                                                            pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency"
                                                            style="padding:2px 15px; width:  95%; font-size: 13px; margin:2px; background-color: #e8e4c9 ;border: none;color:#4a4949"
                                                            id="cryptbalance" name="cryptbalance"></input>
                                                        <input placeholder="₱ 0.00" hidden readonly
                                                            pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency"
                                                            style="padding:2px 15px; width:  95%; font-size: 13px; margin:2px; background-color: #e8e4c9 ;border: none;color:#4a4949"
                                                            id="cryptInterest" name="cryptInterest"></input>
                                                        <input placeholder="₱ 0.00" hidden readonly
                                                            pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency"
                                                            style="padding:2px 15px; width:  95%; font-size: 13px; margin:2px; background-color: #e8e4c9 ;border: none;color:#4a4949"
                                                            id="cryptPrincipal" name="cryptPrincipal"></input>

                                                    </td>
                                                </tr>
                                                <tr hidden id="cryptfactorRatetr" style="border: none; display: none">
                                                    <td
                                                        style="border: none;background-color: #5B7EDE;font-size: 13px;color:white;padding:2px 15px;margin:2px; font-weight: bold;">
                                                        Factor rate : <input placeholder="0.00"
                                                            pattern="^\%\d{1,3}(,\d{3})*(\.\d+)?%" type="number"
                                                            style="float: right; padding:2px 5px; font-size: 13px; margin:2px; background-color: #e8e4c9 ;border: none;color:#4a4949;width: 28%"
                                                            id="cryptfactorratePercentage"
                                                            name="cryptfactorratePercentage" readonly></input> <a
                                                            style="float: right; font-  size: 13px; margin-right:5px; border: none;color:#fffff;width: 5%">%
                                                        </a>
                                                    </td>
                                                    <td
                                                        style="border: none;background-color: #5B7EDE;color:#4a4949;padding:2px 15px;margin:2px;">
                                                        <input placeholder="₱ 0.00" id="cryptfactorrate"
                                                            name="cryptfactorrate" readonly
                                                            pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency"
                                                            style="padding:2px 15px; width:   95%; font-size: 13px; margin:2px; background-color: #e8e4c9 ;border: none;color:#4a4949"></input>
                                                    </td>
                                                </tr>
                                                 <tr hidden style="border: none">
                                                    <td hidden
                                                        style="border: none;background-color: #5B7EDE;font-size: 13px;color:white;padding:2px 15px;margin:2px; font-weight: bold;">
                                                        Add_% Mark-up :
                                                    </td>
                                                  
                                                   
                                                    <td hidden style="border: none;background-color: #5B7EDE;color:#4a4949;padding:2px 15px;margin:2px;">
                                                        <input placeholder="₱ 0.00" readonly
                                                            style="padding:2px 15px; font-size: 13px; margin:2px; background-color: #e8e4c9; width: 95% ;border: none;color:#4a4949;width: 95%"
                                                            id="cryptmarkup" name="cryptmarkup"
                                                            value="1.5" hidden></input>
                                                        <input placeholder="₱ 0.00" readonly
                                                            style="padding:2px 15px; font-size: 13px; margin:2px; background-color: #e8e4c9 ; width: 95%;border: none;color:#4a4949;width: 95%"
                                                            id="cryptmarkup1" name="cryptmarkup1"></input>

                                                       
                                                       
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
                                                        <select type="number"
                                                            style="padding: 2px 15px; font-size: 13px; margin: 2px; background-color: #FDFDFD; width: 95%; border: none; color: #4a4949"
                                                            placeholder="₱ 0.00" id="cryptNoOfMonths"
                                                            name="cryptNoOfMonths">
                                                            <option value="0">--- SELECT TERMS ---</option>
                                                            <option value="12">1 Year (12 Months)</option>
                                                            <option value="24">2 Years (24 Months)</option>
                                                            <option value="36">3 Years (36 Months)</option>
                                                            <option value="48">4 Years (48 Months)</option>
                                                            <option value="60">5 Years (60 Months)</option>
                                                            <option value="72">6 Years (72 Months)</option>
                                                            <option value="84">7 Years (84 Months)</option>
                                                            <option value="96">8 Years (96 Months)</option>
                                                            <option value="108">9 Years (108 Months)</option>
                                                            <option value="120">10 Years (120 Months)</option>
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
                                        <th colspan="5"
                                            style="color:#ffffff; background-color:#007ea7; font-size: 14px">
                                            Where did you find Southspring?
                                        </th>
                                        <tr style="color:#4a4949">
                                            <td>
                                                <p style="font-size: 14px;">Please select one of the following options:
                                                    agent, website, social media, or walk-in.</p>
                                                <select class="form-control" required id="cryptmarketAnalysis"
                                                    name="cryptmarketAnalysis"
                                                    style="color:#4a4949; width: 100%; font-size: 14px"><br>
                                                    <option value="Website" name="Website">Website</option>
                                                    <option value="Agent" name="Agent">Agent</option>
                                                    <option value="Walkin" name="Walkin">Walk-in</option>
                                                    <option value="SocialMedia" name="SocialMedia">Social Media</option>
                                                </select>
                                            </td>
                                            <td>
                                                <p style="font-size: 14px;">Agent name</p>
                                                <input class="form-control" id="cryptagentName" name="cryptagentName"
                                                    style="color:#4a4949; width: 100%; font-size: 14px" required /><br>
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
                                                    style="color:#4a4949; font-size: 14px; margin-top: 7px" required>
                                            <td>
                                                Payment Method<br>
                                                <select class="form-control" required id="cryptpaymentMethod"
                                                    name="cryptpaymentMethod"
                                                    style="color:#4a4949; background-color:#f7efe4;width: 95%; font-size: 14px; background-color: #f5ebe1;"><br>
                                                    <option value="">------Select Payment Method------</option>
                                                    <option value="cash">Cash</option>
                                                    <option value="online">Online</option>
                                                </select>
                                            </td>
                                            <td>Full Downpayment<br><input readonly type="text" class="form-control"
                                                    id="crypttotalBalance" name="crypttotalBalance"
                                                    style="color:#4a4949; font-size: 14px;" required>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div style="float:right; margin-bottom:10px;">
                                <div id="loading-spinner">
                                    <div class="spinner"></div>
                                </div>
                                <button type="button" data-toggle="modal" data-target="#cryptvouchercodeModal"
                                    name="cryptpromoVoucher" id="cryptpromoVoucher" class="voucher-button">Promo
                                    voucher</button>

                                <button type="submit" name="cryptLedger" id="cryptLedger"
                                    class="save-button">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


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
                            <th colspan="5" style="color:#ffffff; background-color:#007ea7; font-size: 14px">
                                PROMO VOUCHER</th>
                        </tr>
                        <tr style="color:#4a4949">
                            <td>Voucher code: <br><input type="text" class="form-control" id="cryptvouchercode"
                                    name="cryptvouchercode" style="color:#4a4949; font-size: 14px; margin-top: 7px">
                                <div id="cryptnotification"
                                    style="padding: 3px 20px; font-size: 12px; border-radius: 0px; margin-bottom: 0px;"
                                    class="alert alert-success" role="alert" style="display: none;"></div>
                            </td>
                        </tr>
                    </table>
                    <div class="modal-footer">
                        <button type="button" name="promocryptvouchercode" id="promocryptvouchercode"
                            class="voucher-button">Enter voucher code</button>
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
                            <th colspan="5" style="color:#ffffff; background-color:#007ea7; font-size: 14px">
                                PROMO VOUCHER</th>
                        </tr>

                        <tr style="color:#4a4949">
                            <td>Voucher code: <br><input type="text" class="form-control" id="lotvouchercode"
                                    name="lotvouchercode" style="color:#4a4949; font-size: 14px; margin-top: 7px" />

                                <div id="notification"
                                    style="padding: 3px 20px; font-size: 12px; border-radius: 0px; margin-bottom: 0px;"
                                    class="alert alert-success" role="alert" style="display: none;"></div>
                            </td>
                        </tr>
                    </table>
                    <div class="modal-footer">
                        <button type="button" name="promolotvouchercode" id="promolotvouchercode"
                            class="voucher-button">Enter voucher code</button>
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
    <script>
    function onSubmitForm() {
        // Get all buttons on the page
        const cryptLedger = document.getElementById('cryptLedger');
        cryptLedger.disabled = true;

        // Redirect to the sales_reservation.php page after a brief delay (e.g., 1 second)
        setTimeout(function() {
            window.location.href = 'sales_reservation.php';
        }, 1000); // Adjust the delay as needed
    }
    </script>


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

    <script>
    $(document).ready(function() {
        // Keep track of the first modal element
        var firstModal = $('#verify');

        // Store the body's original position and overflow property
        var originalBodyPosition = '';
        var originalBodyOverflow = '';

        // Event handler for opening the second modal
        $('#lotvouchercodeModal').on('show.bs.modal', function() {
            // Store the body's position and overflow property
            originalBodyPosition = $('body').css('position');
            originalBodyOverflow = $('body').css('overflow');
        });

        // Event handler for closing the second modal
        $('#lotvouchercodeModal').on('hidden.bs.modal', function() {
            // Restore the body's position and overflow property
            $('body').css('position', originalBodyPosition);
            $('body').css('overflow', originalBodyOverflow);
            // Ensure that the first modal regains focus
            firstModal.modal('show');
        });
    });
    </script>
    <script>
    $(document).ready(function() {
        // Keep track of the first modal element
        var firstModal = $('#verify');

        // Event handler for opening the second modal
        $('#lotvouchercodeModal').on('show.bs.modal', function() {
            // Disable scrolling of the first modal when the second modal is open
            firstModal.css('overflow-y', 'hidden');
        });

        // Event handler for closing the second modal
        $('#lotvouchercodeModal').on('hidden.bs.modal', function() {
            // Enable scrolling of the first modal when the second modal is closed
            firstModal.css('overflow-y', 'auto');
            // Ensure that the first modal regains focus
            firstModal.modal('show');
        });
    });
    </script>
    <script>
    $(document).ready(function() {
        // Keep track of the first modal element
        var firstModal = $('#verify');

        // Store the body's original position and overflow property
        var originalBodyPosition = '';
        var originalBodyOverflow = '';

        // Event handler for opening the second modal
        $('#cryptvouchercodeModal').on('show.bs.modal', function() {
            // Store the body's position and overflow property
            originalBodyPosition = $('body').css('position');
            originalBodyOverflow = $('body').css('overflow');
        });

        // Event handler for closing the second modal
        $('#cryptvouchercodeModal').on('hidden.bs.modal', function() {
            // Restore the body's position and overflow property
            $('body').css('position', originalBodyPosition);
            $('body').css('overflow', originalBodyOverflow);
            // Ensure that the first modal regains focus
            firstModal.modal('show');
        });
    });
    </script>
    <script>
    $(document).ready(function() {
        // Keep track of the first modal element
        var firstModal = $('#verify');

        // Event handler for opening the second modal
        $('#cryptvouchercodeModal').on('show.bs.modal', function() {
            // Disable scrolling of the first modal when the second modal is open
            firstModal.css('overflow-y', 'hidden');
        });

        // Event handler for closing the second modal
        $('#cryptvouchercodeModal').on('hidden.bs.modal', function() {
            // Enable scrolling of the first modal when the second modal is closed
            firstModal.css('overflow-y', 'auto');
            // Ensure that the first modal regains focus
            firstModal.modal('show');
        });
    });
    </script>
    <script>
    $(document).ready(function() {
        $('#promolotvouchercode').click(function() {
            var voucherCode = $('#lotvouchercode').val();
            var promoterms = $('#terms').val();
            $.ajax({
                url: 'sales_promoVouchercode.php',
                method: 'POST',
                data: {
                    voucher: voucherCode,
                    promo: promoterms
                },
                success: function(response) {
                    if (response != 0) {
                        $('#notification').removeClass('alert-danger');
                        $('#notification').addClass('alert-success');
                        $('#notification').text(response + '%' + ' ' + 'discount applied');
                        $('#notification').show(); // Show the success alert
                        document.getElementById("discounts1").value = response;

                        let listPrice = document.getElementById("lotListPrice").value;
                        let tax1 = 0.12;
                        let pcf = document.getElementById("pcf").value;
                        let discounts1 = document.getElementById("discounts1").value;




                        var newStr2listPrice = listPrice.replace(/₱|,/g, '');
                        var newStr2pcf = pcf.replace(/₱|,/g, '');
                        // promo
                        var newTCP = parseFloat(newStr2listPrice) + (parseFloat(
                            newStr2listPrice) * parseFloat(tax1));
                        var discounted1 = parseFloat(newTCP) * (parseFloat(discounts1) /
                            100);
                        var discounted = (parseFloat(newTCP) + parseFloat(newStr2pcf)) - (
                            parseFloat(newTCP) * (parseFloat(discounts1) / 100));
                        let discountedFixed = discounted.toFixed(0);
                        let discountedComplete = discountedFixed.replace(
                            /\B(?=(\d{3})+(?!\d))/g, ",");
                        let discountedFixed1 = discounted1.toFixed(0);
                        let discountedComplete1 = discountedFixed1.replace(
                            /\B(?=(\d{3})+(?!\d))/g, ",");
                        document.getElementById("totalContractPrice3").value = "₱ " +
                            discountedComplete;
                        document.getElementById("subtotalDiscount").value = "₱ " +
                            discountedComplete1;



                        let tcpcomputeDP = document.getElementById("totalContractPrice3")
                            .value;
                        let dpPercentagecomputedp = document.getElementById("dpPercentage")
                            .value;
                        var tcpcomputeDPreplace = tcpcomputeDP.replace(/₱|,/g, '');
                        //computebalance
                        let computeBalance = parseFloat(tcpcomputeDPreplace) - (parseFloat(
                            tcpcomputeDPreplace) * (
                            parseFloat(dpPercentagecomputedp) / 100));
                        let computeBalanceFixed = computeBalance.toFixed(0);
                        let replacedcomputeBalance = computeBalanceFixed.replace(
                            /\B(?=(\d{3})+(?!\d))/g, ",");
                        document.getElementById("balance").value = "₱ " +
                            replacedcomputeBalance;
                        document.getElementById("totalBalance").value = "₱ " +
                            replacedcomputeBalance;
                        //computepercentage
                        let computeDownpayment = parseFloat(tcpcomputeDPreplace) * (
                            parseFloat(dpPercentagecomputedp) / 100);
                        let computeBalanceFixed1 = computeDownpayment.toFixed(0);
                        let replacedcomputeBalance1 = computeBalanceFixed1.replace(
                            /\B(?=(\d{3})+(?!\d))/g, ",");
                        document.getElementById("dpPercentage2").value = "₱ " +
                            replacedcomputeBalance1;


                    } else {

                        $('#notification').removeClass('alert-success');
                        $('#notification').addClass('alert-danger');
                        $('#notification').text('Invalid voucher code!');
                        $('#notification').show(); // Show the error alert
                        document.getElementById("discounts1").value = 0;

                        let listPrice = document.getElementById("lotListPrice").value;
                        let tax1 = 0.12;
                        let pcf = document.getElementById("pcf").value;
                        let discounts1 = document.getElementById("discounts1").value;


                        var newStr2listPrice = listPrice.replace(/₱|,/g, '');
                        var newStr2pcf = pcf.replace(/₱|,/g, '');
                        // promo
                        var newTCP = parseFloat(newStr2listPrice) + (parseFloat(
                            newStr2listPrice) * parseFloat(tax1));
                        var discounted1 = parseFloat(newTCP) * (parseFloat(discounts1) /
                            100);
                        var discounted = (parseFloat(newTCP) + parseFloat(newStr2pcf)) - (
                            parseFloat(newTCP) * (parseFloat(discounts1) / 100));
                        let discountedFixed = discounted.toFixed(0);
                        let discountedComplete = discountedFixed.replace(
                            /\B(?=(\d{3})+(?!\d))/g, ",");
                        let discountedFixed1 = discounted1.toFixed(0);
                        let discountedComplete1 = discountedFixed1.replace(
                            /\B(?=(\d{3})+(?!\d))/g, ",");
                        document.getElementById("totalContractPrice3").value = "₱ " +
                            discountedComplete;
                        document.getElementById("subtotalDiscount").value = "₱ " +
                            discountedComplete1;



                        let tcpcomputeDP = document.getElementById("totalContractPrice3")
                            .value;
                        let dpPercentagecomputedp = document.getElementById("dpPercentage")
                            .value;
                        var tcpcomputeDPreplace = tcpcomputeDP.replace(/₱|,/g, '');
                        //computebalance
                        let computeBalance = parseFloat(tcpcomputeDPreplace) - (parseFloat(
                            tcpcomputeDPreplace) * (
                            parseFloat(dpPercentagecomputedp) / 100));
                        let computeBalanceFixed = computeBalance.toFixed(0);
                        let replacedcomputeBalance = computeBalanceFixed.replace(
                            /\B(?=(\d{3})+(?!\d))/g, ",");
                        document.getElementById("balance").value = "₱ " +
                            replacedcomputeBalance;
                        document.getElementById("totalBalance").value = "₱ " +
                            replacedcomputeBalance;
                        //computepercentage
                        let computeDownpayment = parseFloat(tcpcomputeDPreplace) * (
                            parseFloat(dpPercentagecomputedp) / 100);
                        let computeBalanceFixed1 = computeDownpayment.toFixed(0);
                        let replacedcomputeBalance1 = computeBalanceFixed1.replace(
                            /\B(?=(\d{3})+(?!\d))/g, ",");
                        document.getElementById("dpPercentage2").value = "₱ " +
                            replacedcomputeBalance1;


                    }
                },
                error: function() {

                    $('#notification').removeClass('alert-success');
                    $('#notification').addClass('alert-danger');
                    $('#notification').text('An error occurred.');
                    $('#notification').show(); // Show the error alert
                }
                // Perform actions based on the response

            });
        });
    });
    </script>



    <script>
    $(document).ready(function() {
        $('#promocryptvouchercode').click(function() {
            var voucherCode = $('#cryptvouchercode').val();
            var cryptpromoterms = $('#cryptterms').val();
            var promoterms = cryptpromoterms.replace('crypt', '');
            $.ajax({
                url: 'sales_promoVouchercode.php',
                method: 'POST',
                data: {
                    voucher: voucherCode,
                    promo: promoterms
                },
                success: function(response) {
                    if (response != 0) {
                        $('#cryptnotification').removeClass('alert-danger');
                        $('#cryptnotification').addClass('alert-success');
                        $('#cryptnotification').text(response + '%' + ' ' +
                            'discount applied');
                        $('#cryptnotification').show(); // Show the success alert
                        document.getElementById("cryptdiscounts1").value = response;

                        let listPrice = document.getElementById("cryptlotListPrice").value;
                        let tax1 = 0.12;
                        let pcf = '₱ 40,000';
                        let discounts1 = document.getElementById("cryptdiscounts1").value;


                        var newStr2listPrice = listPrice.replace(/₱|,/g, '');
                        var newStr2pcf = pcf.replace(/₱|,/g, '');
                        // promo
                        var newTCP = parseFloat(newStr2listPrice) + (parseFloat(
                            newStr2listPrice) * parseFloat(tax1));
                        var discounted1 = parseFloat(newTCP) * (parseFloat(discounts1) /
                            100);
                        var discounted = (parseFloat(newTCP) + parseFloat(newStr2pcf)) - (
                            parseFloat(newTCP) * (parseFloat(discounts1) / 100));
                        let discountedFixed = discounted.toFixed(0);
                        let discountedComplete = discountedFixed.replace(
                            /\B(?=(\d{3})+(?!\d))/g, ",");
                        let discountedFixed1 = discounted1.toFixed(0);
                        let discountedComplete1 = discountedFixed1.replace(
                            /\B(?=(\d{3})+(?!\d))/g, ",");
                        document.getElementById("crypttotalContractPrice3").value = "₱ " +
                            discountedComplete;
                        document.getElementById("cryptsubtotalDiscount").value = "₱ " +
                            discountedComplete1;



                        let tcpcomputeDP = document.getElementById(
                            "crypttotalContractPrice3").value;
                        let dpPercentagecomputedp = document.getElementById(
                            "cryptdpPercentage").value;
                        var tcpcomputeDPreplace = tcpcomputeDP.replace(/₱|,/g, '');
                        //computebalance
                        let computeBalance = parseFloat(tcpcomputeDPreplace) - (parseFloat(
                            tcpcomputeDPreplace) * (
                            parseFloat(dpPercentagecomputedp) / 100));
                        let computeBalanceFixed = computeBalance.toFixed(0);
                        let replacedcomputeBalance = computeBalanceFixed.replace(
                            /\B(?=(\d{3})+(?!\d))/g, ",");
                        document.getElementById("cryptbalance").value = "₱ " +
                            replacedcomputeBalance;
                        document.getElementById("crypttotalBalance").value = "₱ " +
                            replacedcomputeBalance;
                        //computepercentage
                        let computeDownpayment = parseFloat(tcpcomputeDPreplace) * (
                            parseFloat(dpPercentagecomputedp) / 100);
                        let computeBalanceFixed1 = computeDownpayment.toFixed(0);
                        let replacedcomputeBalance1 = computeBalanceFixed1.replace(
                            /\B(?=(\d{3})+(?!\d))/g, ",");
                        document.getElementById("cryptdpPercentage2").value = "₱ " +
                            replacedcomputeBalance1;


                    } else {

                        $('#cryptnotification').removeClass('alert-success');
                        $('#cryptnotification').addClass('alert-danger');
                        $('#cryptnotification').text('Invalid voucher code!');
                        $('#cryptnotification').show(); // Show the error alert
                        document.getElementById("cryptdiscounts1").value = 0;

                        let listPrice = document.getElementById("cryptlotListPrice").value;
                        let tax1 = 0.12;
                        let pcf = '₱ 40,000';
                        let discounts1 = document.getElementById("cryptdiscounts1").value;


                        var newStr2listPrice = listPrice.replace(/₱|,/g, '');
                        var newStr2pcf = pcf.replace(/₱|,/g, '');
                        // promo
                        var newTCP = parseFloat(newStr2listPrice) + (parseFloat(
                            newStr2listPrice) * parseFloat(tax1));
                        var discounted1 = parseFloat(newTCP) * (parseFloat(discounts1) /
                            100);
                        var discounted = (parseFloat(newTCP) + parseFloat(newStr2pcf)) - (
                            parseFloat(newTCP) * (parseFloat(discounts1) / 100));
                        let discountedFixed = discounted.toFixed(0);
                        let discountedComplete = discountedFixed.replace(
                            /\B(?=(\d{3})+(?!\d))/g, ",");
                        let discountedFixed1 = discounted1.toFixed(0);
                        let discountedComplete1 = discountedFixed1.replace(
                            /\B(?=(\d{3})+(?!\d))/g, ",");
                        document.getElementById("crypttotalContractPrice3").value = "₱ " +
                            discountedComplete;
                        document.getElementById("cryptsubtotalDiscount").value = "₱ " +
                            discountedComplete1;



                        let tcpcomputeDP = document.getElementById(
                            "crypttotalContractPrice3").value;
                        let dpPercentagecomputedp = document.getElementById(
                            "cryptdpPercentage").value;
                        var tcpcomputeDPreplace = tcpcomputeDP.replace(/₱|,/g, '');
                        //computebalance
                        let computeBalance = parseFloat(tcpcomputeDPreplace) - (parseFloat(
                            tcpcomputeDPreplace) * (
                            parseFloat(dpPercentagecomputedp) / 100));
                        let computeBalanceFixed = computeBalance.toFixed(0);
                        let replacedcomputeBalance = computeBalanceFixed.replace(
                            /\B(?=(\d{3})+(?!\d))/g, ",");
                        document.getElementById("cryptbalance").value = "₱ " +
                            replacedcomputeBalance;
                        document.getElementById("crypttotalBalance").value = "₱ " +
                            replacedcomputeBalance;
                        //computepercentage
                        let computeDownpayment = parseFloat(tcpcomputeDPreplace) * (
                            parseFloat(dpPercentagecomputedp) / 100);
                        let computeBalanceFixed1 = computeDownpayment.toFixed(0);
                        let replacedcomputeBalance1 = computeBalanceFixed1.replace(
                            /\B(?=(\d{3})+(?!\d))/g, ",");
                        document.getElementById("cryptdpPercentage2").value = "₱ " +
                            replacedcomputeBalance1;


                    }
                },
                error: function() {

                    $('#cryptnotification').removeClass('alert-success');
                    $('#cryptnotification').addClass('alert-danger');
                    $('#cryptnotification').text('An error occurred.');
                    $('#cryptnotification').show(); // Show the error alert
                }
                // Perform actions based on the response

            });
        });
    });
    </script>


    <script>
    $(document).ready(function() {
        $('#dtlotDescRecord').DataTable();
        $('.dataTables_length').addClass('bs-select');
    });
    </script>

    <script>
    $(document).ready(function() {
        $('#dtcryptDescRecord').DataTable();
        $('.dataTables_length').addClass('bs-select');
    });
    </script>
    <script>
    function showlot() {
        document.getElementById('showlotdiv').style.display = 'block';
        document.getElementById('showlotdiv1').style.display = 'block';
        document.getElementById('showcryptdiv').style.display = 'none';
        document.getElementById('showcryptdiv1').style.display = 'none';
    }

    function showcrypt() {
        document.getElementById('showlotdiv').style.display = 'none';
        document.getElementById('showlotdiv1').style.display = 'none';
        document.getElementById('showcryptdiv').style.display = 'block';
        document.getElementById('showcryptdiv1').style.display = 'block';
    }
    </script>





    <script>
    $(document).ready(function() {
        $('#lotDescTerms').on('change', function() {
            var demovalue = $(this).val();
            $("div.myDiv").hide();
            $("#show" + demovalue).show();
        });
    });
    </script>

    <script>
    $(document).ready(function() {
        $('#MASelect').on('change', function() {
            var demovalue = $(this).val();
            $("div.myDiv1").hide();
            $("#show" + demovalue).show();
        });
    });
    </script>

    <script>
    $(document).ready(function() {
        $('#IntermentTermsSelect').on('change', function() {
            var demovalue = $(this).val();
            $("div.myDiv2").hide();
            $("#show" + demovalue).show();
        });
    });
    </script>

    <script>
    $(document).ready(function() {
        $('#dtBasicExample').DataTable();
        $('.dataTables_length').addClass('bs-select');
    });
    </script>


    <script>
    $(document).ready(function() {
        $('#cryptDescTerms').on('change', function() {
            var demovalue = $(this).val();
            $("div.mycrypttermsDiv").hide();
            $("#showcrypt" + demovalue).show();
        });
    });
    </script>

    <script>
    var table = document.getElementById('dtlotDescRecord');
    for (var i = 1; i < table.rows.length; i++) {
        table.rows[i].onclick = function() {
            //rIndex = this.rowIndex;
            document.getElementById("lot_id1").value = this.cells[0].innerHTML;
            document.getElementById("lot_block1").value = this.cells[1].innerHTML;
            document.getElementById("lot_section1").value = this.cells[2].innerHTML;
            document.getElementById("lot_no1").value = this.cells[3].innerHTML;
            document.getElementById("lot_area1").value = this.cells[4].innerHTML;
            document.getElementById("lot_phase1").value = this.cells[5].innerHTML;
            document.getElementById("lot_type1").value = this.cells[6].innerHTML;
            document.getElementById("lotListPrice").value = this.cells[7].innerHTML;

            document.getElementById("discounts1").value = 0;
            document.getElementById("subtotalDiscount").value = 0;
            let dpPercentage1 = document.getElementById("dpPercentage").value;
            let a12 = 0.12;
            let tcp1 = document.getElementById("totalContractPrice3").value;
            let lotListPrice = document.getElementById("lotListPrice").value;
            let discount = document.getElementById("discounts1").value;
            let pcf = '₱ 40,000';
            let lot_no1 = document.getElementById("lot_no1").value;


            const elementToHide41 = document.querySelector('#noYearstr');
            // Hide the element by setting its display property to 'none'
            elementToHide41.style.display = 'none';

            var selectElement = document.getElementById("NoOfMonths");

            // Reset the select element to its initial state
            selectElement.selectedIndex = 0;

            var newStr2lotListPrice = lotListPrice.replace(/₱|,/g, '');
            var newStr2pcf = pcf.replace(/₱|,/g, '');
            var tdElement = document.getElementById('PreNeedPrice');
            // Change the text content
            tdElement.textContent = 'Total Contract Price :';
            document.getElementById("terms").value = "SpotCash";
            // VAT
            var subtotaltax = parseFloat(newStr2lotListPrice) * parseFloat(a12);
            let subtotaltaxFixed = subtotaltax.toFixed(0);
            let subtotaltaxComplete = subtotaltaxFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            document.getElementById("subtotaltax").value = "₱ " + subtotaltaxComplete;
            // Discount
            var subtotalDiscount = (parseFloat(newStr2lotListPrice) + parseFloat(subtotaltax)) * (parseFloat(
                discount) / 100);
            let subtotalDiscountFixed = subtotalDiscount.toFixed(0);
            let subtotalDiscountComplete = subtotalDiscountFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            document.getElementById("subtotalDiscount").value = "₱ " + subtotalDiscountComplete;
            // PCF
            var subtotalpcf = parseFloat(newStr2pcf) * parseFloat(lot_no1);
            let subtotalpcfFixed = subtotalpcf.toFixed(0);
            let subtotalpcfComplete = subtotalpcfFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            document.getElementById("pcf").value = "₱ " + subtotalpcfComplete;
            // TCP
            var totalContractPrice = parseFloat(newStr2lotListPrice) + parseFloat(subtotaltax) + parseFloat(
                subtotalpcf) - parseFloat(subtotalDiscount);
            let totalContractPriceFixed = totalContractPrice.toFixed(0);
            let totalContractPriceComplete = totalContractPriceFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            document.getElementById("totalContractPrice3").value = "₱ " + totalContractPriceComplete;



            let minimumDPPercentage = 0;
            document.getElementById("dpPercentage").value = minimumDPPercentage;



            let tcpcomputeDP = document.getElementById("totalContractPrice3").value;
            let dpPercentagecomputedp = 0;
            var tcpcomputeDPreplace = tcpcomputeDP.replace(/₱|,/g, '');


            //computebalance
            let computeBalance = parseFloat(tcpcomputeDPreplace) - (parseFloat(tcpcomputeDPreplace) * (parseFloat(
                dpPercentagecomputedp) / 100));
            let computeBalanceFixed = computeBalance.toFixed(0);
            let replacedcomputeBalance = computeBalanceFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            document.getElementById("balance").value = "₱ " + replacedcomputeBalance;
            document.getElementById("totalBalance").value = "₱ " + replacedcomputeBalance;
            //computepercentage
            let computeDownpayment = parseFloat(tcpcomputeDPreplace) * (parseFloat(dpPercentagecomputedp) / 100);
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

            const elementToHide4 = document.querySelector('#noYearstr');
            // Hide the element by setting its display property to 'none'
            elementToHide4.style.display = 'none';

        };
    }
    </script>

    <script>
    var table1 = document.getElementById('dtcryptDescRecord');
    for (var i = 1; i < table1.rows.length; i++) {
        table1.rows[i].onclick = function() {
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
            document.getElementById("cryptdiscounts1").value = 0;
            document.getElementById("cryptsubtotalDiscount").value = 0;


            const elementToHide40 = document.querySelector('#cryptnoYearstr');
            // Hide the element by setting its display property to 'none'
            elementToHide40.style.display = 'none';

            var selectElement = document.getElementById("cryptNoOfMonths");

            // Reset the select element to its initial state
            selectElement.selectedIndex = 0;
            var tdElement = document.getElementById('cryptPreNeedPrice');
            // Change the text content
            tdElement.textContent = 'Total Contract Price :';
            document.getElementById("cryptterms").value = "cryptPreNeedPrice";
            let dpPercentage1 = 0;
            let a12 = 0.12;
            let tcp1 = document.getElementById("crypttotalContractPrice3").value;
            let lotListPrice = document.getElementById("cryptlotListPrice").value;
            let discount = document.getElementById("cryptdiscounts1").value;
            let pcf = '₱ 40,000';

            var newStr2lotListPrice = lotListPrice.replace(/₱|,/g, '');
            var newStr2pcf = pcf.replace(/₱|,/g, '');
            // VAT
            var subtotaltax = parseFloat(newStr2lotListPrice) * parseFloat(a12);
            let subtotaltaxFixed = subtotaltax.toFixed(2);
            let subtotaltaxComplete = subtotaltaxFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            document.getElementById("cryptsubtotaltax").value = "₱ " + subtotaltaxComplete;
            // Discount
            var subtotalDiscount = (parseFloat(newStr2lotListPrice) + parseFloat(subtotaltax)) * (parseFloat(
                discount) / 100);
            let subtotalDiscountFixed = subtotalDiscount.toFixed(2);
            let subtotalDiscountComplete = subtotalDiscountFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            document.getElementById("cryptsubtotalDiscount").value = "₱ " + subtotalDiscountComplete;
            // TCP
            var totalContractPrice = parseFloat(newStr2lotListPrice) + parseFloat(subtotaltax) + parseFloat(
                newStr2pcf) - parseFloat(subtotalDiscount);
            let totalContractPriceFixed = totalContractPrice.toFixed(2);
            let totalContractPriceComplete = totalContractPriceFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            document.getElementById("crypttotalContractPrice3").value = "₱ " + totalContractPriceComplete;
            let pcfComplete = pcf.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            document.getElementById("cryptpcf").value = pcfComplete;

            // var newStr2 = tcp1.replace(/₱|,/g, ''); 
            //  let amountdp1 =  parseFloat(dpPercentagedecimal) * parseFloat(newStr2); 
            //  let amountdp1Fixed = amountdp1.toFixed(2);
            // let replaceamountdp1Fixed = amountdp1Fixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            //  document.getElementById("dpPercentage2").value =  "₱ " + replaceamountdp1Fixed;


            let minimumDPPercentage = 0;
            document.getElementById("cryptdpPercentage").value = minimumDPPercentage;



            let tcpcomputeDP = document.getElementById("crypttotalContractPrice3").value;
            let dpPercentagecomputedp = 0;
            var tcpcomputeDPreplace = tcpcomputeDP.replace(/₱|,/g, '');


            //computebalance
            let computeBalance = parseFloat(tcpcomputeDPreplace) - (parseFloat(tcpcomputeDPreplace) * (parseFloat(
                dpPercentagecomputedp) / 100));
            let computeBalanceFixed = computeBalance.toFixed(0);
            let replacedcomputeBalance = computeBalanceFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            document.getElementById("cryptbalance").value = "₱ " + replacedcomputeBalance;
            document.getElementById("crypttotalBalance").value = "₱ " + replacedcomputeBalance;
            //computepercentage
            let computeDownpayment = parseFloat(tcpcomputeDPreplace) * (parseFloat(dpPercentagecomputedp) / 100);
            let computeBalanceFixed1 = computeDownpayment.toFixed(0);
            let replacedcomputeBalance1 = computeBalanceFixed1.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            document.getElementById("cryptdpPercentage2").value = "₱ " + replacedcomputeBalance1;


            const elementToHide322 = document.getElementById("cryptterms");
            // Hide the element by setting its display property to 'none'
            elementToHide322.disabled = false;
        };
    }
    </script>


    <script>
    function computedownpaymentPercentage() {
        let tcpcomputeDP = document.getElementById("totalContractPrice3").value;
        let dpPercentagecomputedp = document.getElementById("dpPercentage").value;

        let NoOfMonths = document.getElementById("NoOfMonths").value;
        let llp = document.getElementById("lotListPrice").value;
        let balance = document.getElementById("balance").value;
        let tax = 0.12;
        let pcf = document.getElementById("pcf").value;
        let subtotaltax = document.getElementById("subtotaltax").value;
        let downpayment = document.getElementById("dpPercentage2").value;
        let factorrate = document.getElementById("factorrate").value;
        var tcpcomputeDPreplace = tcpcomputeDP.replace(/₱|,/g, '');
        var downpaymentreplace = downpayment.replace(/₱|,/g, '');


        //computepercentage
        let computeDownpayment = (parseFloat(downpaymentreplace) / parseFloat(tcpcomputeDPreplace)) * 100;
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
                let monthlyInstallment = (parseFloat(computeBalanceFixed) / 12);
                let monthlypercentage1 = document.getElementById("MIPercentage1").value;
                let monthlypercentage2 = document.getElementById("MIPercentage2").value;
                let firsthalfmonthly = ((parseFloat(monthlyInstallment) * 12) / 6) * (parseFloat(monthlypercentage1) /
                    100);
                let secondhalfmonthly = ((parseFloat(monthlyInstallment) * 12) / 6) * (parseFloat(monthlypercentage2) /
                    100);
                const firsthalfmonthlyfixed = firsthalfmonthly.toFixed(2);
                const secondhalfmonthlyfixed = secondhalfmonthly.toFixed(2);
                firsthalfmonthlycomplete = firsthalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                secondhalfmonthlycomplete = secondhalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");

                document.getElementById("MI1").value = "₱ " + firsthalfmonthlycomplete;
                document.getElementById("MI2").value = "₱ " + secondhalfmonthlycomplete;

            } else if (factorrate == "0.0494422640854967") {
                let monthlyInstallment = (parseFloat(computeBalanceFixed) / 24);
                let monthlypercentage1 = document.getElementById("MIPercentage1").value;
                let monthlypercentage2 = document.getElementById("MIPercentage2").value;
                let firsthalfmonthly = ((parseFloat(monthlyInstallment) * 24) / 12) * (parseFloat(monthlypercentage1) /
                    100);
                let secondhalfmonthly = ((parseFloat(monthlyInstallment) * 24) / 12) * (parseFloat(monthlypercentage2) /
                    100);
                const firsthalfmonthlyfixed = firsthalfmonthly.toFixed(2);
                const secondhalfmonthlyfixed = secondhalfmonthly.toFixed(2);
                firsthalfmonthlycomplete = firsthalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                secondhalfmonthlycomplete = secondhalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");

                document.getElementById("MI1").value = "₱ " + firsthalfmonthlycomplete;
                document.getElementById("MI2").value = "₱ " + secondhalfmonthlycomplete;
            } else if (factorrate == "0.036152395535917") {

                let monthlyInstallment = (parseFloat(computeBalanceFixed) / 36);
                let monthlypercentage1 = document.getElementById("MIPercentage1").value;
                let monthlypercentage2 = document.getElementById("MIPercentage2").value;
                let firsthalfmonthly = ((parseFloat(monthlyInstallment) * 36) / 18) * (parseFloat(monthlypercentage1) /
                    100);
                let secondhalfmonthly = ((parseFloat(monthlyInstallment) * 36) / 18) * (parseFloat(monthlypercentage2) /
                    100);
                const firsthalfmonthlyfixed = firsthalfmonthly.toFixed(2);
                const secondhalfmonthlyfixed = secondhalfmonthly.toFixed(2);
                firsthalfmonthlycomplete = firsthalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                secondhalfmonthlycomplete = secondhalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");

                document.getElementById("MI1").value = "₱ " + firsthalfmonthlycomplete;
                document.getElementById("MI2").value = "₱ " + secondhalfmonthlycomplete;
            } else if (factorrate == "0.030430362343858") {

                let monthlyInstallment = (parseFloat(computeBalanceFixed) / 48);
                let monthlypercentage1 = document.getElementById("MIPercentage1").value;
                let monthlypercentage2 = document.getElementById("MIPercentage2").value;
                let firsthalfmonthly = ((parseFloat(monthlyInstallment) * 48) / 24) * (parseFloat(monthlypercentage1) /
                    100);
                let secondhalfmonthly = ((parseFloat(monthlyInstallment) * 48) / 24) * (parseFloat(monthlypercentage2) /
                    100);
                const firsthalfmonthlyfixed = firsthalfmonthly.toFixed(2);
                const secondhalfmonthlyfixed = secondhalfmonthly.toFixed(2);
                firsthalfmonthlycomplete = firsthalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                secondhalfmonthlycomplete = secondhalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");

                document.getElementById("MI1").value = "₱ " + firsthalfmonthlycomplete;
                document.getElementById("MI2").value = "₱ " + secondhalfmonthlycomplete;
            } else if (factorrate == "0.0276189120353598") {

                let monthlyInstallment = (parseFloat(computeBalanceFixed) / 60);
                let monthlypercentage1 = document.getElementById("MIPercentage1").value;
                let monthlypercentage2 = document.getElementById("MIPercentage2").value;
                let firsthalfmonthly = ((parseFloat(monthlyInstallment) * 60) / 30) * (parseFloat(monthlypercentage1) /
                    100);
                let secondhalfmonthly = ((parseFloat(monthlyInstallment) * 60) / 30) * (parseFloat(monthlypercentage2) /
                    100);
                const firsthalfmonthlyfixed = firsthalfmonthly.toFixed(2);
                const secondhalfmonthlyfixed = secondhalfmonthly.toFixed(2);
                firsthalfmonthlycomplete = firsthalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                secondhalfmonthlycomplete = secondhalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");

                document.getElementById("MI1").value = "₱ " + firsthalfmonthlycomplete;
                document.getElementById("MI2").value = "₱ " + secondhalfmonthlycomplete;
            } else if (factorrate == "0.0263268307088938") {

                let monthlyInstallment = (parseFloat(computeBalanceFixed) / 72);
                let monthlypercentage1 = document.getElementById("MIPercentage1").value;
                let monthlypercentage2 = document.getElementById("MIPercentage2").value;
                let firsthalfmonthly = ((parseFloat(monthlyInstallment) * 72) / 36) * (parseFloat(monthlypercentage1) /
                    100);
                let secondhalfmonthly = ((parseFloat(monthlyInstallment) * 72) / 36) * (parseFloat(monthlypercentage2) /
                    100);
                const firsthalfmonthlyfixed = firsthalfmonthly.toFixed(2);
                const secondhalfmonthlyfixed = secondhalfmonthly.toFixed(2);
                firsthalfmonthlycomplete = firsthalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                secondhalfmonthlycomplete = secondhalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");

                document.getElementById("MI1").value = "₱ " + firsthalfmonthlycomplete;
                document.getElementById("MI2").value = "₱ " + secondhalfmonthlycomplete;
            } else if (factorrate == "0.02467581178194748") {

                let monthlyInstallment = (parseFloat(computeBalanceFixed) / 84);
                let monthlypercentage1 = document.getElementById("MIPercentage1").value;
                let monthlypercentage2 = document.getElementById("MIPercentage2").value;
                let firsthalfmonthly = ((parseFloat(monthlyInstallment) * 84) / 42) * (parseFloat(monthlypercentage1) /
                    100);
                let secondhalfmonthly = ((parseFloat(monthlyInstallment) * 84) / 42) * (parseFloat(monthlypercentage2) /
                    100);
                const firsthalfmonthlyfixed = firsthalfmonthly.toFixed(2);
                const secondhalfmonthlyfixed = secondhalfmonthly.toFixed(2);
                firsthalfmonthlycomplete = firsthalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                secondhalfmonthlycomplete = secondhalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");

                document.getElementById("MI1").value = "₱ " + firsthalfmonthlycomplete;
                document.getElementById("MI2").value = "₱ " + secondhalfmonthlycomplete;
            } else if (factorrate == "0.0235131274809127") {


                let monthlyInstallment = (parseFloat(computeBalanceFixed) / 96);
                let monthlypercentage1 = document.getElementById("MIPercentage1").value;
                let monthlypercentage2 = document.getElementById("MIPercentage2").value;
                let firsthalfmonthly = ((parseFloat(monthlyInstallment) * 96) / 48) * (parseFloat(monthlypercentage1) /
                    100);
                let secondhalfmonthly = ((parseFloat(monthlyInstallment) * 96) / 48) * (parseFloat(monthlypercentage2) /
                    100);
                const firsthalfmonthlyfixed = firsthalfmonthly.toFixed(2);
                const secondhalfmonthlyfixed = secondhalfmonthly.toFixed(2);
                firsthalfmonthlycomplete = firsthalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                secondhalfmonthlycomplete = secondhalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");

                document.getElementById("MI1").value = "₱ " + firsthalfmonthlycomplete;
                document.getElementById("MI2").value = "₱ " + secondhalfmonthlycomplete;
            } else if (factorrate == "0.0226708482940114") {

                let monthlyInstallment = (parseFloat(computeBalanceFixed) / 108);
                let monthlypercentage1 = document.getElementById("MIPercentage1").value;
                let monthlypercentage2 = document.getElementById("MIPercentage2").value;
                let firsthalfmonthly = ((parseFloat(monthlyInstallment) * 108) / 54) * (parseFloat(monthlypercentage1) /
                    100);
                let secondhalfmonthly = ((parseFloat(monthlyInstallment) * 108) / 54) * (parseFloat(
                    monthlypercentage2) / 100);
                const firsthalfmonthlyfixed = firsthalfmonthly.toFixed(2);
                const secondhalfmonthlyfixed = secondhalfmonthly.toFixed(2);
                firsthalfmonthlycomplete = firsthalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                secondhalfmonthlycomplete = secondhalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");

                document.getElementById("MI1").value = "₱ " + firsthalfmonthlycomplete;
                document.getElementById("MI2").value = "₱ " + secondhalfmonthlycomplete;
            } else if (factorrate == "0.022048096885833") {

                let monthlyInstallment = (parseFloat(computeBalanceFixed) / 120);
                let monthlypercentage1 = document.getElementById("MIPercentage1").value;
                let monthlypercentage2 = document.getElementById("MIPercentage2").value;
                let firsthalfmonthly = ((parseFloat(monthlyInstallment) * 120) / 60) * (parseFloat(monthlypercentage1) /
                    100);
                let secondhalfmonthly = ((parseFloat(monthlyInstallment) * 120) / 60) * (parseFloat(
                    monthlypercentage2) / 100);
                const firsthalfmonthlyfixed = firsthalfmonthly.toFixed(2);
                const secondhalfmonthlyfixed = secondhalfmonthly.toFixed(2);
                firsthalfmonthlycomplete = firsthalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                secondhalfmonthlycomplete = secondhalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");

                document.getElementById("MI1").value = "₱ " + firsthalfmonthlycomplete;
                document.getElementById("MI2").value = "₱ " + secondhalfmonthlycomplete;
            }
            // Perform other actions or submit the form
        }
    }
    </script>




    <script>
    function cryptcomputedownpaymentPercentage() {
        let tcpcomputeDP = document.getElementById("crypttotalContractPrice3").value;
        let dpPercentagecomputedp = document.getElementById("cryptdpPercentage").value;

        let NoOfMonths = document.getElementById("cryptNoOfMonths").value;
        let llp = document.getElementById("cryptlotListPrice").value;
        let balance = document.getElementById("cryptbalance").value;
        let tax = 0.12;
        let pcf = '₱ 40,000';
        let subtotaltax = document.getElementById("cryptsubtotaltax").value;
        let downpayment = document.getElementById("cryptdpPercentage2").value;
        let factorrate = document.getElementById("cryptfactorrate").value;
        var tcpcomputeDPreplace = tcpcomputeDP.replace(/₱|,/g, '');
        var downpaymentreplace = downpayment.replace(/₱|,/g, '');


        //computepercentage
        let computeDownpayment = (parseFloat(downpaymentreplace) / parseFloat(tcpcomputeDPreplace)) * 100;
        let computeDownpaymentFixed = computeDownpayment.toFixed(0);
        document.getElementById("cryptdpPercentage").value = computeDownpaymentFixed;

        // Get elements from the DOM
        var input = document.getElementById("cryptdpPercentage");
        var warningMessage = document.getElementById("cryptwarningMessage");
        var inputValue = parseInt(input.value);

        // Check if the input value meets the minimum requirement
        if (inputValue < 20) {
            warningMessage.style.display = "block"; // Show the warning message
            document.getElementById("cryptbalance").value = "";
        } else {
            warningMessage.style.display = "none"; // Hide the warning message

            //computebalance
            let computeBalance = parseFloat(tcpcomputeDPreplace) - parseFloat(downpaymentreplace);
            let computeBalanceFixed = computeBalance.toFixed(0);
            let replacedcomputeBalance = computeBalanceFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            document.getElementById("cryptbalance").value = "₱ " + replacedcomputeBalance;
            document.getElementById("crypttotalBalance").value = "₱ " + replacedcomputeBalance;

            //monthly installement

            var newStr3 = balance.replace(/₱|,/g, '');
            var newStr3llp = llp.replace(/₱|,/g, '');
            var newStr3pcf = pcf.replace(/₱|,/g, '');
            var newStr3downpayment = downpayment.replace(/₱|,/g, '');
            var newStr3subtotaltax = subtotaltax.replace(/₱|,/g, '');

            if (factorrate == "0.0907308578592074") {
                let monthlyInstallment = (parseFloat(computeBalanceFixed) / 12);
                let monthlypercentage1 = document.getElementById("cryptMIPercentage1").value;
                let monthlypercentage2 = document.getElementById("cryptMIPercentage2").value;
                let firsthalfmonthly = ((parseFloat(monthlyInstallment) * 12) / 6) * (parseFloat(monthlypercentage1) /
                    100);
                let secondhalfmonthly = ((parseFloat(monthlyInstallment) * 12) / 6) * (parseFloat(monthlypercentage2) /
                    100);
                const firsthalfmonthlyfixed = firsthalfmonthly.toFixed(2);
                const secondhalfmonthlyfixed = secondhalfmonthly.toFixed(2);
                firsthalfmonthlycomplete = firsthalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                secondhalfmonthlycomplete = secondhalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");

                document.getElementById("MI1").value = "₱ " + firsthalfmonthlycomplete;
                document.getElementById("MI2").value = "₱ " + secondhalfmonthlycomplete;

            } else if (factorrate == "0.0494422640854967") {
                let monthlyInstallment = (parseFloat(computeBalanceFixed) / 24);
                let monthlypercentage1 = document.getElementById("cryptMIPercentage1").value;
                let monthlypercentage2 = document.getElementById("cryptMIPercentage2").value;
                let firsthalfmonthly = ((parseFloat(monthlyInstallment) * 24) / 12) * (parseFloat(monthlypercentage1) /
                    100);
                let secondhalfmonthly = ((parseFloat(monthlyInstallment) * 24) / 12) * (parseFloat(monthlypercentage2) /
                    100);
                const firsthalfmonthlyfixed = firsthalfmonthly.toFixed(2);
                const secondhalfmonthlyfixed = secondhalfmonthly.toFixed(2);
                firsthalfmonthlycomplete = firsthalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                secondhalfmonthlycomplete = secondhalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");

                document.getElementById("cryptMI1").value = "₱ " + firsthalfmonthlycomplete;
                document.getElementById("cryptMI2").value = "₱ " + secondhalfmonthlycomplete;
            } else if (factorrate == "0.036152395535917") {

                let monthlyInstallment = (parseFloat(computeBalanceFixed) / 36);
                let monthlypercentage1 = document.getElementById("cryptMIPercentage1").value;
                let monthlypercentage2 = document.getElementById("cryptMIPercentage2").value;
                let firsthalfmonthly = ((parseFloat(monthlyInstallment) * 36) / 18) * (parseFloat(monthlypercentage1) /
                    100);
                let secondhalfmonthly = ((parseFloat(monthlyInstallment) * 36) / 18) * (parseFloat(monthlypercentage2) /
                    100);
                const firsthalfmonthlyfixed = firsthalfmonthly.toFixed(2);
                const secondhalfmonthlyfixed = secondhalfmonthly.toFixed(2);
                firsthalfmonthlycomplete = firsthalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                secondhalfmonthlycomplete = secondhalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");

                document.getElementById("cryptMI1").value = "₱ " + firsthalfmonthlycomplete;
                document.getElementById("cryptMI2").value = "₱ " + secondhalfmonthlycomplete;
            } else if (factorrate == "0.030430362343858") {

                let monthlyInstallment = (parseFloat(computeBalanceFixed) / 48);
                let monthlypercentage1 = document.getElementById("cryptMIPercentage1").value;
                let monthlypercentage2 = document.getElementById("cryptMIPercentage2").value;
                let firsthalfmonthly = ((parseFloat(monthlyInstallment) * 48) / 24) * (parseFloat(monthlypercentage1) /
                    100);
                let secondhalfmonthly = ((parseFloat(monthlyInstallment) * 48) / 24) * (parseFloat(monthlypercentage2) /
                    100);
                const firsthalfmonthlyfixed = firsthalfmonthly.toFixed(2);
                const secondhalfmonthlyfixed = secondhalfmonthly.toFixed(2);
                firsthalfmonthlycomplete = firsthalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                secondhalfmonthlycomplete = secondhalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");

                document.getElementById("cryptMI1").value = "₱ " + firsthalfmonthlycomplete;
                document.getElementById("cryptMI2").value = "₱ " + secondhalfmonthlycomplete;
            } else if (factorrate == "0.0276189120353598") {

                let monthlyInstallment = (parseFloat(computeBalanceFixed) / 60);
                let monthlypercentage1 = document.getElementById("cryptMIPercentage1").value;
                let monthlypercentage2 = document.getElementById("cryptMIPercentage2").value;
                let firsthalfmonthly = ((parseFloat(monthlyInstallment) * 60) / 30) * (parseFloat(monthlypercentage1) /
                    100);
                let secondhalfmonthly = ((parseFloat(monthlyInstallment) * 60) / 30) * (parseFloat(monthlypercentage2) /
                    100);
                const firsthalfmonthlyfixed = firsthalfmonthly.toFixed(2);
                const secondhalfmonthlyfixed = secondhalfmonthly.toFixed(2);
                firsthalfmonthlycomplete = firsthalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                secondhalfmonthlycomplete = secondhalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");

                document.getElementById("cryptMI1").value = "₱ " + firsthalfmonthlycomplete;
                document.getElementById("cryptMI2").value = "₱ " + secondhalfmonthlycomplete;
            } else if (factorrate == "0.0263268307088938") {

                let monthlyInstallment = (parseFloat(computeBalanceFixed) / 72);
                let monthlypercentage1 = document.getElementById("cryptMIPercentage1").value;
                let monthlypercentage2 = document.getElementById("cryptMIPercentage2").value;
                let firsthalfmonthly = ((parseFloat(monthlyInstallment) * 72) / 36) * (parseFloat(monthlypercentage1) /
                    100);
                let secondhalfmonthly = ((parseFloat(monthlyInstallment) * 72) / 36) * (parseFloat(monthlypercentage2) /
                    100);
                const firsthalfmonthlyfixed = firsthalfmonthly.toFixed(2);
                const secondhalfmonthlyfixed = secondhalfmonthly.toFixed(2);
                firsthalfmonthlycomplete = firsthalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                secondhalfmonthlycomplete = secondhalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");

                document.getElementById("cryptMI1").value = "₱ " + firsthalfmonthlycomplete;
                document.getElementById("cryptMI2").value = "₱ " + secondhalfmonthlycomplete;
            } else if (factorrate == "0.02467581178194748") {

                let monthlyInstallment = (parseFloat(computeBalanceFixed) / 84);
                let monthlypercentage1 = document.getElementById("cryptMIPercentage1").value;
                let monthlypercentage2 = document.getElementById("cryptMIPercentage2").value;
                let firsthalfmonthly = ((parseFloat(monthlyInstallment) * 84) / 42) * (parseFloat(monthlypercentage1) /
                    100);
                let secondhalfmonthly = ((parseFloat(monthlyInstallment) * 84) / 42) * (parseFloat(monthlypercentage2) /
                    100);
                const firsthalfmonthlyfixed = firsthalfmonthly.toFixed(2);
                const secondhalfmonthlyfixed = secondhalfmonthly.toFixed(2);
                firsthalfmonthlycomplete = firsthalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                secondhalfmonthlycomplete = secondhalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");

                document.getElementById("cryptMI1").value = "₱ " + firsthalfmonthlycomplete;
                document.getElementById("cryptMI2").value = "₱ " + secondhalfmonthlycomplete;
            } else if (factorrate == "0.0235131274809127") {


                let monthlyInstallment = (parseFloat(computeBalanceFixed) / 96);
                let monthlypercentage1 = document.getElementById("cryptMIPercentage1").value;
                let monthlypercentage2 = document.getElementById("cryptMIPercentage2").value;
                let firsthalfmonthly = ((parseFloat(monthlyInstallment) * 96) / 48) * (parseFloat(monthlypercentage1) /
                    100);
                let secondhalfmonthly = ((parseFloat(monthlyInstallment) * 96) / 48) * (parseFloat(monthlypercentage2) /
                    100);
                const firsthalfmonthlyfixed = firsthalfmonthly.toFixed(2);
                const secondhalfmonthlyfixed = secondhalfmonthly.toFixed(2);
                firsthalfmonthlycomplete = firsthalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                secondhalfmonthlycomplete = secondhalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");

                document.getElementById("cryptMI1").value = "₱ " + firsthalfmonthlycomplete;
                document.getElementById("cryptMI2").value = "₱ " + secondhalfmonthlycomplete;
            } else if (factorrate == "0.0226708482940114") {

                let monthlyInstallment = (parseFloat(computeBalanceFixed) / 108);
                let monthlypercentage1 = document.getElementById("cryptMIPercentage1").value;
                let monthlypercentage2 = document.getElementById("cryptMIPercentage2").value;
                let firsthalfmonthly = ((parseFloat(monthlyInstallment) * 108) / 54) * (parseFloat(monthlypercentage1) /
                    100);
                let secondhalfmonthly = ((parseFloat(monthlyInstallment) * 108) / 54) * (parseFloat(
                    monthlypercentage2) / 100);
                const firsthalfmonthlyfixed = firsthalfmonthly.toFixed(2);
                const secondhalfmonthlyfixed = secondhalfmonthly.toFixed(2);
                firsthalfmonthlycomplete = firsthalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                secondhalfmonthlycomplete = secondhalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");

                document.getElementById("cryptMI1").value = "₱ " + firsthalfmonthlycomplete;
                document.getElementById("cryptMI2").value = "₱ " + secondhalfmonthlycomplete;
            } else if (factorrate == "0.022048096885833") {

                let monthlyInstallment = (parseFloat(computeBalanceFixed) / 120);
                let monthlypercentage1 = document.getElementById("cryptMIPercentage1").value;
                let monthlypercentage2 = document.getElementById("cryptMIPercentage2").value;
                let firsthalfmonthly = ((parseFloat(monthlyInstallment) * 120) / 60) * (parseFloat(monthlypercentage1) /
                    100);
                let secondhalfmonthly = ((parseFloat(monthlyInstallment) * 120) / 60) * (parseFloat(
                    monthlypercentage2) / 100);
                const firsthalfmonthlyfixed = firsthalfmonthly.toFixed(2);
                const secondhalfmonthlyfixed = secondhalfmonthly.toFixed(2);
                firsthalfmonthlycomplete = firsthalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                secondhalfmonthlycomplete = secondhalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");

                document.getElementById("cryptMI1").value = "₱ " + firsthalfmonthlycomplete;
                document.getElementById("cryptMI2").value = "₱ " + secondhalfmonthlycomplete;
            }
            // Perform other actions or submit the form
        }
    }
    </script>



    <script>
    let crypta = document.getElementById("crypttaxs").value;
    let cryptdiscounts = document.getElementById("cryptdiscounts").value;
    let cryptpcf = '₱ 40,000';
    let cryptmarkup = document.getElementById("cryptmarkup").value;
    let cryptlotListPrice = document.getElementById("cryptlotListPrice").value;
    let cryptb = 100;

    let cryptc = parseInt(crypta) / parseInt(cryptb);
    let cryptdiscountpercentange = parseInt(cryptdiscounts) / parseInt(cryptb);
    let cryptmarkuppercentange = parseInt(cryptmarkup) / parseInt(cryptb);
    document.getElementById("crypttaxs1").value = cryptc;
    document.getElementById("cryptdiscounts1").value = cryptdiscountpercentange;
    document.getElementById("cryptmarkup1").value = cryptmarkuppercentange;

    function cryptcompute() {

        let crypta1 = document.getElementById("crypttaxs").value;
        let cryptlotListPrice1 = document.getElementById("cryptlotListPrice").value;
        let cryptdiscounts1 = document.getElementById("cryptdiscounts").value;
        let cryptpcf1 = '₱ 40,000';

        let cryptb1 = 100;
        let cryptc1 = parseInt(crypta1) / parseInt(cryptb1);
        var cryptnewStr = cryptlotListPrice1.replace(/₱|,/g, '');

        let cryptdiscountpercentange1 = parseInt(cryptdiscounts1) / parseInt(cryptb1);
        let cryptsubtotal = parseFloat(cryptc1) * parseFloat(cryptnewStr);
        let cryptdiscountsubtotal = parseFloat(cryptdiscountpercentange1) * parseFloat(cryptnewStr);


        let cryptdiscountsubtotalFixed = cryptdiscountsubtotal.toFixed(2);
        let crypttaxsubtotalFixed = cryptsubtotal.toFixed(2);
        let cryptreplacedtaxsubtotalFixed = crypttaxsubtotalFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        let cryptreplaceddiscountsubtotalFixed = cryptdiscountsubtotalFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        document.getElementById("cryptsubtotaltax").value = "₱ " + cryptreplacedtaxsubtotalFixed;
        document.getElementById("cryptsubtotalDiscount").value = "₱ " + cryptreplaceddiscountsubtotalFixed;

        var cryptsubtotaltax = crypttaxsubtotalFixed.replace(/₱|,/g, '');
        var cryptsubtotaldiscounted = cryptdiscountsubtotalFixed.replace(/₱|,/g, '');
        var cryptsubtotalpcf = cryptpcf1.replace(/₱|,/g, '');

        let crypttotalContractPrice = (parseFloat(crypttaxsubtotalFixed) + parseFloat(cryptsubtotalpcf) + parseFloat(
            cryptnewStr) - parseFloat(cryptsubtotaldiscounted));
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
    let a = document.getElementById("taxs").value;
    let discounts = document.getElementById("discounts").value;
    let pcf = document.getElementById("pcf").value;
    let markup = document.getElementById("markup").value;
    let lotListPrice = document.getElementById("lotListPrice").value;
    let b = 100;

    let c = parseInt(a) / parseInt(b);
    let discountpercentange = parseInt(discounts) / parseInt(b);
    let markuppercentange = parseInt(markup) / parseInt(b);
    document.getElementById("taxs1").value = c;
    document.getElementById("discounts1").value = discountpercentange;
    document.getElementById("markup1").value = markuppercentange;

    function compute() {

        let a1 = document.getElementById("taxs").value;
        let lotListPrice1 = document.getElementById("lotListPrice").value;
        let discounts1 = document.getElementById("discounts").value;
        let pcf1 = document.getElementById("pcf").value;

        let b1 = 100;
        let c1 = parseInt(a1) / parseInt(b1);
        var newStr = lotListPrice1.replace(/₱|,/g, '');

        let discountpercentange1 = parseInt(discounts1) / parseInt(b1);
        let subtotal = parseFloat(c1) * parseFloat(newStr);
        let discountsubtotal = parseFloat(discountpercentange1) * parseFloat(newStr);


        let discountsubtotalFixed = discountsubtotal.toFixed(2);
        let taxsubtotalFixed = subtotal.toFixed(2);
        let replacedtaxsubtotalFixed = taxsubtotalFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        let replaceddiscountsubtotalFixed = discountsubtotalFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        document.getElementById("subtotaltax").value = "₱ " + replacedtaxsubtotalFixed;
        document.getElementById("subtotalDiscount").value = "₱ " + replaceddiscountsubtotalFixed;

        var subtotaltax = taxsubtotalFixed.replace(/₱|,/g, '');
        var subtotaldiscounted = discountsubtotalFixed.replace(/₱|,/g, '');
        var subtotalpcf = pcf1.replace(/₱|,/g, '');

        let totalContractPrice = (parseFloat(taxsubtotalFixed) + parseFloat(subtotalpcf) + parseFloat(newStr) -
            parseFloat(subtotaldiscounted));
        let totalContractPriceFixed = totalContractPrice.toFixed(2);
        let replacedtotalContractPriceFixed = totalContractPriceFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        document.getElementById("totalContractPrice3").value = "₱ " + replacedtotalContractPriceFixed;
        let minimumDPPercentage = document.getElementById("minimumdpPercentage").value;
        document.getElementById("dpPercentage").value = minimumDPPercentage;
        document.getElementById("dpPercentage2").value = "";
        document.getElementById("balance1").value = "";
        document.getElementById("NoOfMonths").value = "";
    }

    function computedp() {
        let tcpcomputeDP = document.getElementById("totalContractPrice3").value;
        let dpPercentagecomputedp = document.getElementById("dpPercentage").value;

        let NoOfMonths = document.getElementById("NoOfMonths").value;
        let llp = document.getElementById("lotListPrice").value;
        let balance = document.getElementById("balance").value;
        let tax = 0.12;
        let pcf = document.getElementById("pcf").value;
        let subtotaltax = document.getElementById("subtotaltax").value;
        let downpayment = document.getElementById("dpPercentage2").value;
        let factorrate = document.getElementById("factorrate").value;
        var tcpcomputeDPreplace = tcpcomputeDP.replace(/₱|,/g, '');
        //computebalance
        let computeBalance = parseFloat(tcpcomputeDPreplace) - (parseFloat(tcpcomputeDPreplace) * (parseFloat(
            dpPercentagecomputedp) / 100));
        let computeBalanceFixed = computeBalance.toFixed(0);
        let replacedcomputeBalance = computeBalanceFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        document.getElementById("balance").value = "₱ " + replacedcomputeBalance;
        document.getElementById("totalBalance").value = "₱ " + replacedcomputeBalance;
        //computepercentage
        let computeDownpayment = parseFloat(tcpcomputeDPreplace) * (parseFloat(dpPercentagecomputedp) / 100);
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
            let monthlyInstallment = (parseFloat(computeBalanceFixed) / 12);
            let monthlypercentage1 = document.getElementById("MIPercentage1").value;
            let monthlypercentage2 = document.getElementById("MIPercentage2").value;
            let firsthalfmonthly = ((parseFloat(monthlyInstallment) * 12) / 6) * (parseFloat(monthlypercentage1) / 100);
            let secondhalfmonthly = ((parseFloat(monthlyInstallment) * 12) / 6) * (parseFloat(monthlypercentage2) /
                100);
            const firsthalfmonthlyfixed = firsthalfmonthly.toFixed(2);
            const secondhalfmonthlyfixed = secondhalfmonthly.toFixed(2);
            firsthalfmonthlycomplete = firsthalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            secondhalfmonthlycomplete = secondhalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");

            document.getElementById("MI1").value = "₱ " + firsthalfmonthlycomplete;
            document.getElementById("MI2").value = "₱ " + secondhalfmonthlycomplete;
        } else if (factorrate == "0.0494422640854967") {
            let monthlyInstallment = (parseFloat(computeBalanceFixed) / 24);
            let monthlypercentage1 = document.getElementById("MIPercentage1").value;
            let monthlypercentage2 = document.getElementById("MIPercentage2").value;
            let firsthalfmonthly = ((parseFloat(monthlyInstallment) * 24) / 12) * (parseFloat(monthlypercentage1) /
                100);
            let secondhalfmonthly = ((parseFloat(monthlyInstallment) * 24) / 12) * (parseFloat(monthlypercentage2) /
                100);
            const firsthalfmonthlyfixed = firsthalfmonthly.toFixed(2);
            const secondhalfmonthlyfixed = secondhalfmonthly.toFixed(2);
            firsthalfmonthlycomplete = firsthalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            secondhalfmonthlycomplete = secondhalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");

            document.getElementById("MI1").value = "₱ " + firsthalfmonthlycomplete;
            document.getElementById("MI2").value = "₱ " + secondhalfmonthlycomplete;
        } else if (factorrate == "0.036152395535917") {

            let monthlyInstallment = (parseFloat(computeBalanceFixed) / 36);
            let monthlypercentage1 = document.getElementById("MIPercentage1").value;
            let monthlypercentage2 = document.getElementById("MIPercentage2").value;
            let firsthalfmonthly = ((parseFloat(monthlyInstallment) * 36) / 18) * (parseFloat(monthlypercentage1) /
                100);
            let secondhalfmonthly = ((parseFloat(monthlyInstallment) * 36) / 18) * (parseFloat(monthlypercentage2) /
                100);
            const firsthalfmonthlyfixed = firsthalfmonthly.toFixed(2);
            const secondhalfmonthlyfixed = secondhalfmonthly.toFixed(2);
            firsthalfmonthlycomplete = firsthalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            secondhalfmonthlycomplete = secondhalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");

            document.getElementById("MI1").value = "₱ " + firsthalfmonthlycomplete;
            document.getElementById("MI2").value = "₱ " + secondhalfmonthlycomplete;
        } else if (factorrate == "0.030430362343858") {

            let monthlyInstallment = (parseFloat(computeBalanceFixed) / 48);
            let monthlypercentage1 = document.getElementById("MIPercentage1").value;
            let monthlypercentage2 = document.getElementById("MIPercentage2").value;
            let firsthalfmonthly = ((parseFloat(monthlyInstallment) * 48) / 24) * (parseFloat(monthlypercentage1) /
                100);
            let secondhalfmonthly = ((parseFloat(monthlyInstallment) * 48) / 24) * (parseFloat(monthlypercentage2) /
                100);
            const firsthalfmonthlyfixed = firsthalfmonthly.toFixed(2);
            const secondhalfmonthlyfixed = secondhalfmonthly.toFixed(2);
            firsthalfmonthlycomplete = firsthalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            secondhalfmonthlycomplete = secondhalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");

            document.getElementById("MI1").value = "₱ " + firsthalfmonthlycomplete;
            document.getElementById("MI2").value = "₱ " + secondhalfmonthlycomplete;
        } else if (factorrate == "0.0276189120353598") {

            let monthlyInstallment = (parseFloat(computeBalanceFixed) / 60);
            let monthlypercentage1 = document.getElementById("MIPercentage1").value;
            let monthlypercentage2 = document.getElementById("MIPercentage2").value;
            let firsthalfmonthly = ((parseFloat(monthlyInstallment) * 60) / 30) * (parseFloat(monthlypercentage1) /
                100);
            let secondhalfmonthly = ((parseFloat(monthlyInstallment) * 60) / 30) * (parseFloat(monthlypercentage2) /
                100);
            const firsthalfmonthlyfixed = firsthalfmonthly.toFixed(2);
            const secondhalfmonthlyfixed = secondhalfmonthly.toFixed(2);
            firsthalfmonthlycomplete = firsthalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            secondhalfmonthlycomplete = secondhalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");

            document.getElementById("MI1").value = "₱ " + firsthalfmonthlycomplete;
            document.getElementById("MI2").value = "₱ " + secondhalfmonthlycomplete;
        } else if (factorrate == "0.0263268307088938") {

            let monthlyInstallment = (parseFloat(computeBalanceFixed) / 72);
            let monthlypercentage1 = document.getElementById("MIPercentage1").value;
            let monthlypercentage2 = document.getElementById("MIPercentage2").value;
            let firsthalfmonthly = ((parseFloat(monthlyInstallment) * 72) / 36) * (parseFloat(monthlypercentage1) /
                100);
            let secondhalfmonthly = ((parseFloat(monthlyInstallment) * 72) / 36) * (parseFloat(monthlypercentage2) /
                100);
            const firsthalfmonthlyfixed = firsthalfmonthly.toFixed(2);
            const secondhalfmonthlyfixed = secondhalfmonthly.toFixed(2);
            firsthalfmonthlycomplete = firsthalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            secondhalfmonthlycomplete = secondhalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");

            document.getElementById("MI1").value = "₱ " + firsthalfmonthlycomplete;
            document.getElementById("MI2").value = "₱ " + secondhalfmonthlycomplete;
        } else if (factorrate == "0.02467581178194748") {

            let monthlyInstallment = (parseFloat(computeBalanceFixed) / 84);
            let monthlypercentage1 = document.getElementById("MIPercentage1").value;
            let monthlypercentage2 = document.getElementById("MIPercentage2").value;
            let firsthalfmonthly = ((parseFloat(monthlyInstallment) * 84) / 42) * (parseFloat(monthlypercentage1) /
                100);
            let secondhalfmonthly = ((parseFloat(monthlyInstallment) * 84) / 42) * (parseFloat(monthlypercentage2) /
                100);
            const firsthalfmonthlyfixed = firsthalfmonthly.toFixed(2);
            const secondhalfmonthlyfixed = secondhalfmonthly.toFixed(2);
            firsthalfmonthlycomplete = firsthalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            secondhalfmonthlycomplete = secondhalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");

            document.getElementById("MI1").value = "₱ " + firsthalfmonthlycomplete;
            document.getElementById("MI2").value = "₱ " + secondhalfmonthlycomplete;
        } else if (factorrate == "0.0235131274809127") {


            let monthlyInstallment = (parseFloat(computeBalanceFixed) / 96);
            let monthlypercentage1 = document.getElementById("MIPercentage1").value;
            let monthlypercentage2 = document.getElementById("MIPercentage2").value;
            let firsthalfmonthly = ((parseFloat(monthlyInstallment) * 96) / 48) * (parseFloat(monthlypercentage1) /
                100);
            let secondhalfmonthly = ((parseFloat(monthlyInstallment) * 96) / 48) * (parseFloat(monthlypercentage2) /
                100);
            const firsthalfmonthlyfixed = firsthalfmonthly.toFixed(2);
            const secondhalfmonthlyfixed = secondhalfmonthly.toFixed(2);
            firsthalfmonthlycomplete = firsthalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            secondhalfmonthlycomplete = secondhalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");

            document.getElementById("MI1").value = "₱ " + firsthalfmonthlycomplete;
            document.getElementById("MI2").value = "₱ " + secondhalfmonthlycomplete;
        } else if (factorrate == "0.0226708482940114") {

            let monthlyInstallment = (parseFloat(computeBalanceFixed) / 108);
            let monthlypercentage1 = document.getElementById("MIPercentage1").value;
            let monthlypercentage2 = document.getElementById("MIPercentage2").value;
            let firsthalfmonthly = ((parseFloat(monthlyInstallment) * 108) / 54) * (parseFloat(monthlypercentage1) /
                100);
            let secondhalfmonthly = ((parseFloat(monthlyInstallment) * 108) / 54) * (parseFloat(monthlypercentage2) /
                100);
            const firsthalfmonthlyfixed = firsthalfmonthly.toFixed(2);
            const secondhalfmonthlyfixed = secondhalfmonthly.toFixed(2);
            firsthalfmonthlycomplete = firsthalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            secondhalfmonthlycomplete = secondhalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");

            document.getElementById("MI1").value = "₱ " + firsthalfmonthlycomplete;
            document.getElementById("MI2").value = "₱ " + secondhalfmonthlycomplete;
        } else if (factorrate == "0.022048096885833") {

            let monthlyInstallment = (parseFloat(computeBalanceFixed) / 120);
            let monthlypercentage1 = document.getElementById("MIPercentage1").value;
            let monthlypercentage2 = document.getElementById("MIPercentage2").value;
            let firsthalfmonthly = ((parseFloat(monthlyInstallment) * 120) / 60) * (parseFloat(monthlypercentage1) /
                100);
            let secondhalfmonthly = ((parseFloat(monthlyInstallment) * 120) / 60) * (parseFloat(monthlypercentage2) /
                100);
            const firsthalfmonthlyfixed = firsthalfmonthly.toFixed(2);
            const secondhalfmonthlyfixed = secondhalfmonthly.toFixed(2);
            firsthalfmonthlycomplete = firsthalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            secondhalfmonthlycomplete = secondhalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");

            document.getElementById("MI1").value = "₱ " + firsthalfmonthlycomplete;
            document.getElementById("MI2").value = "₱ " + secondhalfmonthlycomplete;
        }
    }

    function cryptcomputedp() {
        let tcpcomputeDP = document.getElementById("crypttotalContractPrice3").value;
        let dpPercentagecomputedp = document.getElementById("cryptdpPercentage").value;

        let NoOfMonths = document.getElementById("cryptNoOfMonths").value;
        let llp = document.getElementById("cryptlotListPrice").value;
        let balance = document.getElementById("cryptbalance").value;
        let tax = 0.12;
        let pcf = '₱ 40,000';
        let subtotaltax = document.getElementById("cryptsubtotaltax").value;
        let downpayment = document.getElementById("cryptdpPercentage2").value;
        let factorrate = document.getElementById("cryptfactorrate").value;
        var tcpcomputeDPreplace = tcpcomputeDP.replace(/₱|,/g, '');
        //computebalance
        let computeBalance = parseFloat(tcpcomputeDPreplace) - (parseFloat(tcpcomputeDPreplace) * (parseFloat(
            dpPercentagecomputedp) / 100));
        let computeBalanceFixed = computeBalance.toFixed(0);
        let replacedcomputeBalance = computeBalanceFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        document.getElementById("cryptbalance").value = "₱ " + replacedcomputeBalance;
        document.getElementById("totalBalance").value = "₱ " + replacedcomputeBalance;
        //computepercentage
        let computeDownpayment = parseFloat(tcpcomputeDPreplace) * (parseFloat(dpPercentagecomputedp) / 100);
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
            let monthlyInstallment = (parseFloat(computeBalanceFixed) / 12);
            let monthlypercentage1 = document.getElementById("cryptMIPercentage1").value;
            let monthlypercentage2 = document.getElementById("cryptMIPercentage2").value;
            let firsthalfmonthly = ((parseFloat(monthlyInstallment) * 12) / 6) * (parseFloat(monthlypercentage1) / 100);
            let secondhalfmonthly = ((parseFloat(monthlyInstallment) * 12) / 6) * (parseFloat(monthlypercentage2) /
                100);
            const firsthalfmonthlyfixed = firsthalfmonthly.toFixed(2);
            const secondhalfmonthlyfixed = secondhalfmonthly.toFixed(2);
            firsthalfmonthlycomplete = firsthalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            secondhalfmonthlycomplete = secondhalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");

            document.getElementById("cryptMI1").value = "₱ " + firsthalfmonthlycomplete;
            document.getElementById("cryptMI2").value = "₱ " + secondhalfmonthlycomplete;
        } else if (factorrate == "0.0494422640854967") {
            let monthlyInstallment = (parseFloat(computeBalanceFixed) / 24);
            let monthlypercentage1 = document.getElementById("cryptMIPercentage1").value;
            let monthlypercentage2 = document.getElementById("cryptMIPercentage2").value;
            let firsthalfmonthly = ((parseFloat(monthlyInstallment) * 24) / 12) * (parseFloat(monthlypercentage1) /
                100);
            let secondhalfmonthly = ((parseFloat(monthlyInstallment) * 24) / 12) * (parseFloat(monthlypercentage2) /
                100);
            const firsthalfmonthlyfixed = firsthalfmonthly.toFixed(2);
            const secondhalfmonthlyfixed = secondhalfmonthly.toFixed(2);
            firsthalfmonthlycomplete = firsthalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            secondhalfmonthlycomplete = secondhalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");

            document.getElementById("cryptMI1").value = "₱ " + firsthalfmonthlycomplete;
            document.getElementById("cryptMI2").value = "₱ " + secondhalfmonthlycomplete;
        } else if (factorrate == "0.036152395535917") {

            let monthlyInstallment = (parseFloat(computeBalanceFixed) / 36);
            let monthlypercentage1 = document.getElementById("cryptMIPercentage1").value;
            let monthlypercentage2 = document.getElementById("cryptMIPercentage2").value;
            let firsthalfmonthly = ((parseFloat(monthlyInstallment) * 36) / 18) * (parseFloat(monthlypercentage1) /
                100);
            let secondhalfmonthly = ((parseFloat(monthlyInstallment) * 36) / 18) * (parseFloat(monthlypercentage2) /
                100);
            const firsthalfmonthlyfixed = firsthalfmonthly.toFixed(2);
            const secondhalfmonthlyfixed = secondhalfmonthly.toFixed(2);
            firsthalfmonthlycomplete = firsthalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            secondhalfmonthlycomplete = secondhalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");

            document.getElementById("cryptMI1").value = "₱ " + firsthalfmonthlycomplete;
            document.getElementById("cryptMI2").value = "₱ " + secondhalfmonthlycomplete;
        } else if (factorrate == "0.030430362343858") {

            let monthlyInstallment = (parseFloat(computeBalanceFixed) / 48);
            let monthlypercentage1 = document.getElementById("cryptMIPercentage1").value;
            let monthlypercentage2 = document.getElementById("cryptMIPercentage2").value;
            let firsthalfmonthly = ((parseFloat(monthlyInstallment) * 48) / 24) * (parseFloat(monthlypercentage1) /
                100);
            let secondhalfmonthly = ((parseFloat(monthlyInstallment) * 48) / 24) * (parseFloat(monthlypercentage2) /
                100);
            const firsthalfmonthlyfixed = firsthalfmonthly.toFixed(2);
            const secondhalfmonthlyfixed = secondhalfmonthly.toFixed(2);
            firsthalfmonthlycomplete = firsthalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            secondhalfmonthlycomplete = secondhalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");

            document.getElementById("cryptMI1").value = "₱ " + firsthalfmonthlycomplete;
            document.getElementById("cryptMI2").value = "₱ " + secondhalfmonthlycomplete;
        } else if (factorrate == "0.0276189120353598") {

            let monthlyInstallment = (parseFloat(computeBalanceFixed) / 60);
            let monthlypercentage1 = document.getElementById("cryptMIPercentage1").value;
            let monthlypercentage2 = document.getElementById("cryptMIPercentage2").value;
            let firsthalfmonthly = ((parseFloat(monthlyInstallment) * 60) / 30) * (parseFloat(monthlypercentage1) /
                100);
            let secondhalfmonthly = ((parseFloat(monthlyInstallment) * 60) / 30) * (parseFloat(monthlypercentage2) /
                100);
            const firsthalfmonthlyfixed = firsthalfmonthly.toFixed(2);
            const secondhalfmonthlyfixed = secondhalfmonthly.toFixed(2);
            firsthalfmonthlycomplete = firsthalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            secondhalfmonthlycomplete = secondhalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");

            document.getElementById("cryptMI1").value = "₱ " + firsthalfmonthlycomplete;
            document.getElementById("cryptMI2").value = "₱ " + secondhalfmonthlycomplete;
        } else if (factorrate == "0.0263268307088938") {

            let monthlyInstallment = (parseFloat(computeBalanceFixed) / 72);
            let monthlypercentage1 = document.getElementById("cryptMIPercentage1").value;
            let monthlypercentage2 = document.getElementById("cryptMIPercentage2").value;
            let firsthalfmonthly = ((parseFloat(monthlyInstallment) * 72) / 36) * (parseFloat(monthlypercentage1) /
                100);
            let secondhalfmonthly = ((parseFloat(monthlyInstallment) * 72) / 36) * (parseFloat(monthlypercentage2) /
                100);
            const firsthalfmonthlyfixed = firsthalfmonthly.toFixed(2);
            const secondhalfmonthlyfixed = secondhalfmonthly.toFixed(2);
            firsthalfmonthlycomplete = firsthalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            secondhalfmonthlycomplete = secondhalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");

            document.getElementById("cryptMI1").value = "₱ " + firsthalfmonthlycomplete;
            document.getElementById("cryptMI2").value = "₱ " + secondhalfmonthlycomplete;
        } else if (factorrate == "0.02467581178194748") {

            let monthlyInstallment = (parseFloat(computeBalanceFixed) / 84);
            let monthlypercentage1 = document.getElementById("cryptMIPercentage1").value;
            let monthlypercentage2 = document.getElementById("cryptMIPercentage2").value;
            let firsthalfmonthly = ((parseFloat(monthlyInstallment) * 84) / 42) * (parseFloat(monthlypercentage1) /
                100);
            let secondhalfmonthly = ((parseFloat(monthlyInstallment) * 84) / 42) * (parseFloat(monthlypercentage2) /
                100);
            const firsthalfmonthlyfixed = firsthalfmonthly.toFixed(2);
            const secondhalfmonthlyfixed = secondhalfmonthly.toFixed(2);
            firsthalfmonthlycomplete = firsthalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            secondhalfmonthlycomplete = secondhalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");

            document.getElementById("cryptMI1").value = "₱ " + firsthalfmonthlycomplete;
            document.getElementById("cryptMI2").value = "₱ " + secondhalfmonthlycomplete;
        } else if (factorrate == "0.0235131274809127") {


            let monthlyInstallment = (parseFloat(computeBalanceFixed) / 96);
            let monthlypercentage1 = document.getElementById("cryptMIPercentage1").value;
            let monthlypercentage2 = document.getElementById("cryptMIPercentage2").value;
            let firsthalfmonthly = ((parseFloat(monthlyInstallment) * 96) / 48) * (parseFloat(monthlypercentage1) /
                100);
            let secondhalfmonthly = ((parseFloat(monthlyInstallment) * 96) / 48) * (parseFloat(monthlypercentage2) /
                100);
            const firsthalfmonthlyfixed = firsthalfmonthly.toFixed(2);
            const secondhalfmonthlyfixed = secondhalfmonthly.toFixed(2);
            firsthalfmonthlycomplete = firsthalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            secondhalfmonthlycomplete = secondhalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");

            document.getElementById("cryptMI1").value = "₱ " + firsthalfmonthlycomplete;
            document.getElementById("cryptMI2").value = "₱ " + secondhalfmonthlycomplete;
        } else if (factorrate == "0.0226708482940114") {

            let monthlyInstallment = (parseFloat(computeBalanceFixed) / 108);
            let monthlypercentage1 = document.getElementById("cryptMIPercentage1").value;
            let monthlypercentage2 = document.getElementById("cryptMIPercentage2").value;
            let firsthalfmonthly = ((parseFloat(monthlyInstallment) * 108) / 54) * (parseFloat(monthlypercentage1) /
                100);
            let secondhalfmonthly = ((parseFloat(monthlyInstallment) * 108) / 54) * (parseFloat(monthlypercentage2) /
                100);
            const firsthalfmonthlyfixed = firsthalfmonthly.toFixed(2);
            const secondhalfmonthlyfixed = secondhalfmonthly.toFixed(2);
            firsthalfmonthlycomplete = firsthalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            secondhalfmonthlycomplete = secondhalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");

            document.getElementById("cryptMI1").value = "₱ " + firsthalfmonthlycomplete;
            document.getElementById("cryptMI2").value = "₱ " + secondhalfmonthlycomplete;
        } else if (factorrate == "0.022048096885833") {

            let monthlyInstallment = (parseFloat(computeBalanceFixed) / 120);
            let monthlypercentage1 = document.getElementById("cryptMIPercentage1").value;
            let monthlypercentage2 = document.getElementById("cryptMIPercentage2").value;
            let firsthalfmonthly = ((parseFloat(monthlyInstallment) * 120) / 60) * (parseFloat(monthlypercentage1) /
                100);
            let secondhalfmonthly = ((parseFloat(monthlyInstallment) * 120) / 60) * (parseFloat(monthlypercentage2) /
                100);
            const firsthalfmonthlyfixed = firsthalfmonthly.toFixed(2);
            const secondhalfmonthlyfixed = secondhalfmonthly.toFixed(2);
            firsthalfmonthlycomplete = firsthalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            secondhalfmonthlycomplete = secondhalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");

            document.getElementById("cryptMI1").value = "₱ " + firsthalfmonthlycomplete;
            document.getElementById("cryptMI2").value = "₱ " + secondhalfmonthlycomplete;
        }
    }

    function interestCompute() {
        let Interest = document.getElementById("inputInterest1").value;
        let percentageCompute = 100 - Interest;
        let percentageComputefixed = percentageCompute.toFixed(0);
        document.getElementById("inputPrincipal1").value = percentageComputefixed;
    }

    function principalCompute() {
        let Principal = document.getElementById("inputPrincipal1").value;
        let PrincipalCompute = 100 - Principal;
        let PrincipalComputefixed = PrincipalCompute.toFixed(0);
        document.getElementById("inputInterest1").value = PrincipalComputefixed;
    }

    function interestCompute1() {
        let Interest = document.getElementById("inputInterest2").value;
        let percentageCompute = 100 - Interest;
        let percentageComputefixed = percentageCompute.toFixed(0);
        document.getElementById("inputPrincipal2").value = percentageComputefixed;
    }

    function principalCompute1() {
        let Principal = document.getElementById("inputPrincipal2").value;
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
        if (input_val === "") {
            return;
        }

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
        if ("AtNeedPrice" === selectedValue) {
            document.getElementById("discounts1").value = 0;
            document.getElementById("subtotalDiscount").value = 0;
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
            // Get the select element by its ID
            var selectElement = document.getElementById("NoOfMonths");

            // Reset the select element to its initial state
            selectElement.selectedIndex = 0;

            const elementToHide322 = document.getElementById("dpPercentage");
            // Hide the element by setting its display property to 'none'
            elementToHide322.disabled = false;


            const dpPercentage = document.getElementById("dpPercentage2");
            // Hide the element by setting its display property to 'none'
            dpPercentage.disabled = false;

            const monthlyInstallmenttr21 = document.querySelector('#monthlyInstallmenttr2');
            // Hide the element by setting its display property to 'none'
            monthlyInstallmenttr21.style.display = 'none';
            var tcpcompute = document.getElementById("lotListPrice").value;
            var tcpcomputereplace = tcpcompute.replace(/₱|,/g, '');

            let markup = document.getElementById("markup").value;

            let a12 = 0.12;
            let tcp1 = document.getElementById("totalContractPrice3").value;
            let lotListPrice = document.getElementById("lotListPrice").value;
            let discount = document.getElementById("discounts1").value;
            let pcf = document.getElementById("pcf").value;

            var newStr2lotListPrice = lotListPrice.replace(/₱|,/g, '');
            var newStr2pcf = pcf.replace(/₱|,/g, '');
            // VAT
            var subtotaltax = parseFloat(newStr2lotListPrice) * parseFloat(a12);
            let subtotaltaxFixed = subtotaltax.toFixed(2);
            let subtotaltaxComplete = subtotaltaxFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            document.getElementById("subtotaltax").value = "₱ " + subtotaltaxComplete;
            // Discount
            var subtotalDiscount = (parseFloat(newStr2lotListPrice) + parseFloat(subtotaltax)) * (parseFloat(
                discount) / 100);
            let subtotalDiscountFixed = subtotalDiscount.toFixed(2);
            let subtotalDiscountComplete = subtotalDiscountFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            document.getElementById("subtotalDiscount").value = "₱ " + subtotalDiscountComplete;
            // TCP
            var totalContractPrice = parseFloat(newStr2lotListPrice) + parseFloat(subtotaltax) + parseFloat(
                newStr2pcf);

            let pcfComplete = pcf.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            document.getElementById("pcf").value = pcfComplete;

            var atNeedPrice = parseFloat(totalContractPrice) * parseFloat(markup);
            let atNeedPriceFixed = atNeedPrice.toFixed(0);
            let atNeedPriceComplete = atNeedPriceFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            document.getElementById("totalContractPrice3").value = "₱ " + atNeedPriceComplete;


            document.getElementById("balance1").value = "";
            document.getElementById("dpPercentage2").value = "";
            let minimumDPPercentage = document.getElementById("minimumdpPercentage").value;
            document.getElementById("dpPercentage").value = minimumDPPercentage;



            let tcpcomputeDP = document.getElementById("totalContractPrice3").value;
            let dpPercentagecomputedp = document.getElementById("dpPercentage").value;
            var tcpcomputeDPreplace = tcpcomputeDP.replace(/₱|,/g, '');


            //computebalance
            let computeBalance = parseFloat(tcpcomputeDPreplace) - (parseFloat(tcpcomputeDPreplace) * (
                parseFloat(dpPercentagecomputedp) / 100));
            let computeBalanceFixed = computeBalance.toFixed(0);
            let replacedcomputeBalance = computeBalanceFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            document.getElementById("balance").value = "₱ " + replacedcomputeBalance;
            document.getElementById("totalBalance").value = "₱ " + replacedcomputeBalance;
            //computepercentage
            let computeDownpayment = parseFloat(tcpcomputeDPreplace) * (parseFloat(dpPercentagecomputedp) /
            100);
            let computeBalanceFixed1 = computeDownpayment.toFixed(0);
            let replacedcomputeBalance1 = computeBalanceFixed1.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            document.getElementById("dpPercentage2").value = "₱ " + replacedcomputeBalance1;

        }
        if ("SpotCash" === selectedValue) {
            document.getElementById("discounts1").value = 0;
            document.getElementById("subtotalDiscount").value = 0;
            document.getElementById("dpPercentage").value = 0;
            document.getElementById("dpPercentage2").value = 0;
            var tdElement = document.getElementById('PreNeedPrice');
            // Change the text content
            tdElement.textContent = 'Total Contract Price :';
            const elementToHide2 = document.querySelector('#monthlyInstallmenttr');
            // Hide the element by setting its display property to 'none'
            elementToHide2.style.display = 'none';

            const elementToHide322 = document.getElementById("dpPercentage");
            // Hide the element by setting its display property to 'none'
            elementToHide322.disabled = true;


            const dpPercentage = document.getElementById("dpPercentage2");
            // Hide the element by setting its display property to 'none'
            dpPercentage.disabled = true;

            const monthlyInstallmenttr21 = document.querySelector('#monthlyInstallmenttr2');
            // Hide the element by setting its display property to 'none'
            monthlyInstallmenttr21.style.display = 'none';

            const elementToHide3 = document.querySelector('#factorRatetr');
            // Hide the element by setting its display property to 'none'
            elementToHide3.style.display = 'none';
            const elementToHide4 = document.querySelector('#noYearstr');
            // Hide the element by setting its display property to 'none'
            // Get the select element by its ID
            var selectElement = document.getElementById("NoOfMonths");

            // Reset the select element to its initial state
            selectElement.selectedIndex = 0;
            elementToHide4.style.display = 'none';
            let dpPercentage1 = 0;
            let a12 = 0.12;
            let tcp1 = document.getElementById("totalContractPrice3").value;
            let lotListPrice = document.getElementById("lotListPrice").value;
            let discount = document.getElementById("discounts1").value;
            let pcf = document.getElementById("pcf").value;

            var newStr2lotListPrice = lotListPrice.replace(/₱|,/g, '');
            var newStr2pcf = pcf.replace(/₱|,/g, '');
            // VAT
            var subtotaltax = parseFloat(newStr2lotListPrice) * parseFloat(a12);
            let subtotaltaxFixed = subtotaltax.toFixed(2);
            let subtotaltaxComplete = subtotaltaxFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            document.getElementById("subtotaltax").value = "₱ " + subtotaltaxComplete;
            // Discount
            var subtotalDiscount = (parseFloat(newStr2lotListPrice) + parseFloat(subtotaltax)) * (parseFloat(
                discount) / 100);
            let subtotalDiscountFixed = subtotalDiscount.toFixed(2);
            let subtotalDiscountComplete = subtotalDiscountFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            document.getElementById("subtotalDiscount").value = "₱ " + subtotalDiscountComplete;
            // TCP
            var totalContractPrice = parseFloat(newStr2lotListPrice) + parseFloat(subtotaltax) + parseFloat(
                newStr2pcf);
            let totalContractPriceFixed = totalContractPrice.toFixed(2);
            let totalContractPriceComplete = totalContractPriceFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            document.getElementById("totalContractPrice3").value = "₱ " + totalContractPriceComplete;
            let pcfComplete = pcf.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            document.getElementById("pcf").value = pcfComplete;


            document.getElementById("balance1").value = "";
            document.getElementById("dpPercentage2").value = "";
            let minimumDPPercentage = 0;
            document.getElementById("dpPercentage").value = minimumDPPercentage;



            let tcpcomputeDP = document.getElementById("totalContractPrice3").value;
            let dpPercentagecomputedp = 0;
            var tcpcomputeDPreplace = tcpcomputeDP.replace(/₱|,/g, '');


            //computebalance
            let computeBalance = parseFloat(tcpcomputeDPreplace) - (parseFloat(tcpcomputeDPreplace) * (
                parseFloat(dpPercentagecomputedp) / 100));
            let computeBalanceFixed = computeBalance.toFixed(0);
            let replacedcomputeBalance = computeBalanceFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            document.getElementById("balance").value = "₱ " + replacedcomputeBalance;
            document.getElementById("totalBalance").value = "₱ " + replacedcomputeBalance;
            //computepercentage
            let computeDownpayment = parseFloat(tcpcomputeDPreplace) * (parseFloat(dpPercentagecomputedp) /
                100);
            let computeBalanceFixed1 = computeDownpayment.toFixed(0);
            let replacedcomputeBalance1 = computeBalanceFixed1.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            document.getElementById("dpPercentage2").value = "₱ " + replacedcomputeBalance1;

        }
        if ("M_Cash" === selectedValue) {
            document.getElementById("discounts1").value = 0;
            document.getElementById("subtotalDiscount").value = 0;
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
            // Get the select element by its ID
            var selectElement = document.getElementById("NoOfMonths");

            // Reset the select element to its initial state
            selectElement.selectedIndex = 0;
            elementToHide4.style.display = 'none';
            let dpPercentage1 = document.getElementById("dpPercentage").value;
            let a12 = 0.12;
            let tcp1 = document.getElementById("totalContractPrice3").value;
            let lotListPrice = document.getElementById("lotListPrice").value;
            let discount = document.getElementById("discounts1").value;
            let pcf = document.getElementById("pcf").value;

            var newStr2lotListPrice = lotListPrice.replace(/₱|,/g, '');
            var newStr2pcf = pcf.replace(/₱|,/g, '');
            // VAT
            var subtotaltax = parseFloat(newStr2lotListPrice) * parseFloat(a12);
            let subtotaltaxFixed = subtotaltax.toFixed(2);
            let subtotaltaxComplete = subtotaltaxFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            document.getElementById("subtotaltax").value = "₱ " + subtotaltaxComplete;
            // Discount
            var subtotalDiscount = (parseFloat(newStr2lotListPrice) * parseFloat(discount) / 100);
            let subtotalDiscountFixed = subtotalDiscount.toFixed(2);
            let subtotalDiscountComplete = subtotalDiscountFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            document.getElementById("subtotalDiscount").value = "₱ " + subtotalDiscountComplete;
            // TCP
            var totalContractPrice = parseFloat(newStr2lotListPrice) + parseFloat(subtotaltax) + parseFloat(
                newStr2pcf) - parseFloat(subtotalDiscount);
            let totalContractPriceFixed = totalContractPrice.toFixed(2);
            let totalContractPriceComplete = totalContractPriceFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            document.getElementById("totalContractPrice3").value = "₱ " + totalContractPriceComplete;

            let pcfComplete = pcf.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            document.getElementById("pcf").value = pcfComplete;
            document.getElementById("balance1").value = "";
            document.getElementById("dpPercentage2").value = "";
            let minimumDPPercentage = document.getElementById("minimumdpPercentage").value;
            document.getElementById("dpPercentage").value = minimumDPPercentage;



            let tcpcomputeDP = document.getElementById("totalContractPrice3").value;
            let dpPercentagecomputedp = document.getElementById("dpPercentage").value;
            var tcpcomputeDPreplace = tcpcomputeDP.replace(/₱|,/g, '');


            //computebalance
            let computeBalance = parseFloat(tcpcomputeDPreplace) - (parseFloat(tcpcomputeDPreplace) * (
                parseFloat(dpPercentagecomputedp) / 100));
            let computeBalanceFixed = computeBalance.toFixed(0);
            let replacedcomputeBalance = computeBalanceFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            document.getElementById("balance").value = "₱ " + replacedcomputeBalance;
            document.getElementById("totalBalance").value = "₱ " + replacedcomputeBalance;

            //computepercentage
            let computeDownpayment = parseFloat(tcpcomputeDPreplace) * (parseFloat(dpPercentagecomputedp) /
            100);
            let computeBalanceFixed1 = computeDownpayment.toFixed(0);
            let replacedcomputeBalance1 = computeBalanceFixed1.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            document.getElementById("dpPercentage2").value = "₱ " + replacedcomputeBalance1;


        }
        if ("Installment" === selectedValue) {
            document.getElementById("discounts1").value = 0;
            document.getElementById("subtotalDiscount").value = 0;
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
            dpPercentage.disabled = false;

            const elementToHide3 = document.querySelector('#factorRatetr');
            // Hide the element by setting its display property to 'none'
            elementToHide3.style.display = 'table-row';
            const elementToHide4 = document.querySelector('#noYearstr');
            // Hide the element by setting its display property to 'none'
            elementToHide4.style.display = 'table-row';
            // Get the select element by its ID
            var selectElement = document.getElementById("NoOfMonths");

            // Reset the select element to its initial state
            selectElement.selectedIndex = 0;
            //computepercentage
            let dpPercentage1 = document.getElementById("dpPercentage").value;
            let a12 = 0.12;
            let tcp1 = document.getElementById("totalContractPrice3").value;
            let lotListPrice = document.getElementById("lotListPrice").value;
            let discount = document.getElementById("discounts1").value;
            let pcf = document.getElementById("pcf").value;

            var newStr2lotListPrice = lotListPrice.replace(/₱|,/g, '');
            var newStr2pcf = pcf.replace(/₱|,/g, '');
            // VAT
            var subtotaltax = parseFloat(newStr2lotListPrice) * parseFloat(a12);
            let subtotaltaxFixed = subtotaltax.toFixed(2);
            let subtotaltaxComplete = subtotaltaxFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            document.getElementById("subtotaltax").value = "₱ " + subtotaltaxComplete;
            // Discount
            var subtotalDiscount = (parseFloat(newStr2lotListPrice) * parseFloat(discount) / 100);
            let subtotalDiscountFixed = subtotalDiscount.toFixed(2);
            let subtotalDiscountComplete = subtotalDiscountFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            document.getElementById("subtotalDiscount").value = "₱ " + subtotalDiscountComplete;
            // TCP
            var totalContractPrice = parseFloat(newStr2lotListPrice) + parseFloat(subtotaltax) + parseFloat(
                newStr2pcf) - parseFloat(subtotalDiscount);
            let totalContractPriceFixed = totalContractPrice.toFixed(2);
            let totalContractPriceComplete = totalContractPriceFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            document.getElementById("totalContractPrice3").value = "₱ " + totalContractPriceComplete;

            let pcfComplete = pcf.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            document.getElementById("pcf").value = pcfComplete;
            document.getElementById("balance1").value = "";
            document.getElementById("dpPercentage2").value = "";
            let minimumDPPercentage = document.getElementById("minimumdpPercentage").value;
            document.getElementById("dpPercentage").value = minimumDPPercentage;



            let tcpcomputeDP = document.getElementById("totalContractPrice3").value;
            let dpPercentagecomputedp = document.getElementById("dpPercentage").value;
            var tcpcomputeDPreplace = tcpcomputeDP.replace(/₱|,/g, '');


            //computebalance
            let computeBalance = parseFloat(tcpcomputeDPreplace) - (parseFloat(tcpcomputeDPreplace) * (
                parseFloat(dpPercentagecomputedp) / 100));
            let computeBalanceFixed = computeBalance.toFixed(0);
            let replacedcomputeBalance = computeBalanceFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            document.getElementById("balance").value = "₱ " + replacedcomputeBalance;
            document.getElementById("totalBalance").value = "₱ " + replacedcomputeBalance;

            //computepercentage
            let computeDownpayment = parseFloat(tcpcomputeDPreplace) * (parseFloat(dpPercentagecomputedp) /
            100);
            let computeBalanceFixed1 = computeDownpayment.toFixed(0);
            let replacedcomputeBalance1 = computeBalanceFixed1.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            document.getElementById("dpPercentage2").value = "₱ " + replacedcomputeBalance1;



        }


    });
    </script>


    <script>
    document.getElementById('cryptterms').addEventListener('change', function() {
        var selectedValue = this.value;
        // Get the selected value
        if ("cryptPreNeedPrice" === selectedValue) {

            document.getElementById("cryptdiscounts1").value = 0;
            document.getElementById("cryptsubtotalDiscount").value = 0;
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
            // Get the select element by its ID
            var selectElement = document.getElementById("cryptNoOfMonths");

            // Reset the select element to its initial state
            selectElement.selectedIndex = 0;
            let dpPercentage1 = document.getElementById("cryptdpPercentage").value;
            let a12 = 0.12;
            let tcp1 = document.getElementById("crypttotalContractPrice3").value;
            let lotListPrice = document.getElementById("cryptlotListPrice").value;
            let discount = document.getElementById("cryptdiscounts1").value;
            let pcf = '₱ 40,000';

            var newStr2lotListPrice = lotListPrice.replace(/₱|,/g, '');
            var newStr2pcf = pcf.replace(/₱|,/g, '');
            // VAT
            var subtotaltax = parseFloat(newStr2lotListPrice) * parseFloat(a12);
            let subtotaltaxFixed = subtotaltax.toFixed(2);
            let subtotaltaxComplete = subtotaltaxFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            document.getElementById("cryptsubtotaltax").value = "₱ " + subtotaltaxComplete;
            // Discount
            var subtotalDiscount = (parseFloat(newStr2lotListPrice) + parseFloat(subtotaltax)) * (parseFloat(
                discount) / 100);
            let subtotalDiscountFixed = subtotalDiscount.toFixed(2);
            let subtotalDiscountComplete = subtotalDiscountFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            document.getElementById("cryptsubtotalDiscount").value = "₱ " + subtotalDiscountComplete;
            // TCP
            var totalContractPrice = parseFloat(newStr2lotListPrice) + parseFloat(subtotaltax) + parseFloat(
                newStr2pcf) - parseFloat(subtotalDiscount);
            let totalContractPriceFixed = totalContractPrice.toFixed(2);
            let totalContractPriceComplete = totalContractPriceFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            document.getElementById("crypttotalContractPrice3").value = "₱ " + totalContractPriceComplete;
            let pcfComplete = pcf.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            document.getElementById("pcf").value = pcfComplete;


            document.getElementById("cryptbalance1").value = "";
            document.getElementById("cryptdpPercentage2").value = "";
            document.getElementById("cryptdpPercentage").value = "";
            document.getElementById("cryptdpPercentage").value = "";


            let minimumDPPercentage = document.getElementById("minimumdpPercentage").value;
            document.getElementById("cryptdpPercentage").value = minimumDPPercentage;



            let tcpcomputeDP = document.getElementById("crypttotalContractPrice3").value;
            let dpPercentagecomputedp = document.getElementById("cryptdpPercentage").value;
            var tcpcomputeDPreplace = tcpcomputeDP.replace(/₱|,/g, '');


            //computebalance
            let computeBalance = parseFloat(tcpcomputeDPreplace) - (parseFloat(tcpcomputeDPreplace) * (
                parseFloat(dpPercentagecomputedp) / 100));
            let computeBalanceFixed = computeBalance.toFixed(0);
            let replacedcomputeBalance = computeBalanceFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            document.getElementById("cryptbalance").value = "₱ " + replacedcomputeBalance;
            document.getElementById("crypttotalBalance").value = "₱ " + replacedcomputeBalance;
            //computepercentage
            let computeDownpayment = parseFloat(tcpcomputeDPreplace) * (parseFloat(dpPercentagecomputedp) /
                100);
            let computeBalanceFixed1 = computeDownpayment.toFixed(0);
            let replacedcomputeBalance1 = computeBalanceFixed1.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            document.getElementById("cryptdpPercentage2").value = "₱ " + replacedcomputeBalance1;



        }

        if ("cryptAtNeedPrice" === selectedValue) {
            document.getElementById("cryptdiscounts1").value = 0;
            document.getElementById("cryptsubtotalDiscount").value = 0;
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

            var selectElement = document.getElementById("cryptNoOfMonths");

            // Reset the select element to its initial state
            selectElement.selectedIndex = 0;

            const elementToHide322 = document.getElementById("cryptdpPercentage");
            // Hide the element by setting its display property to 'none'
            elementToHide322.disabled = false;


            const dpPercentage = document.getElementById("cryptdpPercentage2");
            // Hide the element by setting its display property to 'none'
            dpPercentage.disabled = false;

            const monthlyInstallmenttr21 = document.querySelector('#cryptmonthlyInstallmenttr2');
            // Hide the element by setting its display property to 'none'
            monthlyInstallmenttr21.style.display = 'none';

            let preNeedPrice = document.getElementById("crypttotalContractPrice3").value;



            let markup = document.getElementById("cryptmarkup").value;

            let a12 = 0.12;
            let tcp1 = document.getElementById("crypttotalContractPrice3").value;
            let lotListPrice = document.getElementById("cryptlotListPrice").value;
            let discount = document.getElementById("cryptdiscounts1").value;
            let pcf = '₱ 40,000';

            var newStr2lotListPrice = lotListPrice.replace(/₱|,/g, '');
            var newStr2pcf = pcf.replace(/₱|,/g, '');
            // VAT
            var subtotaltax = parseFloat(newStr2lotListPrice) * parseFloat(a12);
            let subtotaltaxFixed = subtotaltax.toFixed(2);
            let subtotaltaxComplete = subtotaltaxFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            document.getElementById("cryptsubtotaltax").value = "₱ " + subtotaltaxComplete;
            // Discount
            var subtotalDiscount = (parseFloat(newStr2lotListPrice) + parseFloat(subtotaltax)) * (parseFloat(
                discount) / 100);
            let subtotalDiscountFixed = subtotalDiscount.toFixed(2);
            let subtotalDiscountComplete = subtotalDiscountFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            document.getElementById("cryptsubtotalDiscount").value = "₱ " + subtotalDiscountComplete;
            // TCP
            var totalContractPrice = parseFloat(newStr2lotListPrice) + parseFloat(subtotaltax) + parseFloat(
                newStr2pcf);

            let pcfComplete = pcf.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            document.getElementById("cryptpcf").value = pcfComplete;

            var atNeedPrice = parseFloat(totalContractPrice) * parseFloat(markup);
            let atNeedPriceFixed = atNeedPrice.toFixed(0);
            let atNeedPriceComplete = atNeedPriceFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            document.getElementById("crypttotalContractPrice3").value = "₱ " + atNeedPriceComplete;


            document.getElementById("cryptbalance1").value = "";
            document.getElementById("cryptdpPercentage2").value = "";
            let minimumDPPercentage = document.getElementById("cryptminimumdpPercentage").value;
            document.getElementById("cryptdpPercentage").value = minimumDPPercentage;



            let tcpcomputeDP = document.getElementById("crypttotalContractPrice3").value;
            let dpPercentagecomputedp = document.getElementById("cryptdpPercentage").value;
            var tcpcomputeDPreplace = tcpcomputeDP.replace(/₱|,/g, '');


            //computebalance
            let computeBalance = parseFloat(tcpcomputeDPreplace) - (parseFloat(tcpcomputeDPreplace) * (
                parseFloat(dpPercentagecomputedp) / 100));
            let computeBalanceFixed = computeBalance.toFixed(0);
            let replacedcomputeBalance = computeBalanceFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            document.getElementById("cryptbalance").value = "₱ " + replacedcomputeBalance;
            document.getElementById("crypttotalBalance").value = "₱ " + replacedcomputeBalance;
            //computepercentage
            let computeDownpayment = parseFloat(tcpcomputeDPreplace) * (parseFloat(dpPercentagecomputedp) /
            100);
            let computeBalanceFixed1 = computeDownpayment.toFixed(0);
            let replacedcomputeBalance1 = computeBalanceFixed1.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            document.getElementById("cryptdpPercentage2").value = "₱ " + replacedcomputeBalance1;



        }
        if ("cryptSpotCash" === selectedValue) {
            document.getElementById("cryptdiscounts1").value = 0;
            document.getElementById("cryptsubtotalDiscount").value = 0;
            var tdElement = document.getElementById('cryptPreNeedPrice');
            // Change the text content
            tdElement.textContent = 'Total Contract Price :';
            const elementToHide2 = document.querySelector('#cryptmonthlyInstallmenttr');
            // Hide the element by setting its display property to 'none'
            elementToHide2.style.display = 'none';

            const elementToHide322 = document.getElementById("cryptdpPercentage");
            // Hide the element by setting its display property to 'none'
            elementToHide322.disabled = false;


            const dpPercentage = 0;
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

            var selectElement = document.getElementById("cryptNoOfMonths");

            // Reset the select element to its initial state
            selectElement.selectedIndex = 0;
            let dpPercentage1 = document.getElementById("cryptdpPercentage").value;
            let a12 = 0.12;
            let tcp1 = document.getElementById("crypttotalContractPrice3").value;
            let lotListPrice = document.getElementById("cryptlotListPrice").value;
            let discount = document.getElementById("cryptdiscounts1").value;
            let pcf = '₱ 40,000';

            var newStr2lotListPrice = lotListPrice.replace(/₱|,/g, '');
            var newStr2pcf = pcf.replace(/₱|,/g, '');
            // VAT
            var subtotaltax = parseFloat(newStr2lotListPrice) * parseFloat(a12);
            let subtotaltaxFixed = subtotaltax.toFixed(2);
            let subtotaltaxComplete = subtotaltaxFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            document.getElementById("cryptsubtotaltax").value = "₱ " + subtotaltaxComplete;
            // Discount
            var subtotalDiscount = (parseFloat(newStr2lotListPrice) + parseFloat(subtotaltax)) * (parseFloat(
                discount) / 100);
            let subtotalDiscountFixed = subtotalDiscount.toFixed(2);
            let subtotalDiscountComplete = subtotalDiscountFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            document.getElementById("cryptsubtotalDiscount").value = "₱ " + subtotalDiscountComplete;
            // TCP
            var totalContractPrice = parseFloat(newStr2lotListPrice) + parseFloat(subtotaltax) + parseFloat(
                newStr2pcf) - parseFloat(subtotalDiscount);
            let totalContractPriceFixed = totalContractPrice.toFixed(2);
            let totalContractPriceComplete = totalContractPriceFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            document.getElementById("crypttotalContractPrice3").value = "₱ " + totalContractPriceComplete;
            let pcfComplete = pcf.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            document.getElementById("cryptpcf").value = pcfComplete;


            document.getElementById("cryptbalance1").value = "";
            document.getElementById("cryptdpPercentage2").value = "";
            document.getElementById("cryptdpPercentage").value = "";
            document.getElementById("cryptdpPercentage").value = "";


            let minimumDPPercentage = 0;
            document.getElementById("cryptdpPercentage").value = minimumDPPercentage;



            let tcpcomputeDP = document.getElementById("crypttotalContractPrice3").value;
            let dpPercentagecomputedp = 0;
            var tcpcomputeDPreplace = tcpcomputeDP.replace(/₱|,/g, '');


            //computebalance
            let computeBalance = parseFloat(tcpcomputeDPreplace) - (parseFloat(tcpcomputeDPreplace) * (
                parseFloat(dpPercentagecomputedp) / 100));
            let computeBalanceFixed = computeBalance.toFixed(0);
            let replacedcomputeBalance = computeBalanceFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            document.getElementById("cryptbalance").value = "₱ " + replacedcomputeBalance;
            document.getElementById("crypttotalBalance").value = "₱ " + replacedcomputeBalance;
            //computepercentage
            let computeDownpayment = parseFloat(tcpcomputeDPreplace) * (parseFloat(dpPercentagecomputedp) /
                100);
            let computeBalanceFixed1 = computeDownpayment.toFixed(0);
            let replacedcomputeBalance1 = computeBalanceFixed1.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            document.getElementById("cryptdpPercentage2").value = "₱ " + replacedcomputeBalance1;



        }
        if ("cryptM_Cash" === selectedValue) {
            document.getElementById("cryptdiscounts1").value = 0;
            document.getElementById("cryptsubtotalDiscount").value = 0;
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

            var selectElement = document.getElementById("cryptNoOfMonths");

            // Reset the select element to its initial state
            selectElement.selectedIndex = 0;
            let dpPercentage1 = document.getElementById("cryptdpPercentage").value;
            let a12 = 0.12;
            let tcp1 = document.getElementById("crypttotalContractPrice3").value;
            let lotListPrice = document.getElementById("cryptlotListPrice").value;
            let discount = document.getElementById("cryptdiscounts1").value;
            let pcf = '₱ 40,000';

            var newStr2lotListPrice = lotListPrice.replace(/₱|,/g, '');
            var newStr2pcf = pcf.replace(/₱|,/g, '');
            // VAT
            var subtotaltax = parseFloat(newStr2lotListPrice) * parseFloat(a12);
            let subtotaltaxFixed = subtotaltax.toFixed(2);
            let subtotaltaxComplete = subtotaltaxFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            document.getElementById("cryptsubtotaltax").value = "₱ " + subtotaltaxComplete;
            // Discount
            var subtotalDiscount = (parseFloat(newStr2lotListPrice) + parseFloat(subtotaltax)) * (parseFloat(
                discount) / 100);
            let subtotalDiscountFixed = subtotalDiscount.toFixed(2);
            let subtotalDiscountComplete = subtotalDiscountFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            document.getElementById("cryptsubtotalDiscount").value = "₱ " + subtotalDiscountComplete;
            // TCP
            var totalContractPrice = parseFloat(newStr2lotListPrice) + parseFloat(subtotaltax) + parseFloat(
                newStr2pcf) - parseFloat(subtotalDiscount);
            let totalContractPriceFixed = totalContractPrice.toFixed(2);
            let totalContractPriceComplete = totalContractPriceFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            document.getElementById("crypttotalContractPrice3").value = "₱ " + totalContractPriceComplete;
            let pcfComplete = pcf.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            document.getElementById("cryptpcf").value = pcfComplete;


            document.getElementById("cryptbalance1").value = "";
            document.getElementById("cryptdpPercentage2").value = "";
            document.getElementById("cryptdpPercentage").value = "";


            let minimumDPPercentage = document.getElementById("minimumdpPercentage").value;
            document.getElementById("cryptdpPercentage").value = minimumDPPercentage;



            let tcpcomputeDP = document.getElementById("crypttotalContractPrice3").value;
            let dpPercentagecomputedp = document.getElementById("cryptdpPercentage").value;
            var tcpcomputeDPreplace = tcpcomputeDP.replace(/₱|,/g, '');


            //computebalance
            let computeBalance = parseFloat(tcpcomputeDPreplace) - (parseFloat(tcpcomputeDPreplace) * (
                parseFloat(dpPercentagecomputedp) / 100));
            let computeBalanceFixed = computeBalance.toFixed(0);
            let replacedcomputeBalance = computeBalanceFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            document.getElementById("cryptbalance").value = "₱ " + replacedcomputeBalance;
            document.getElementById("crypttotalBalance").value = "₱ " + replacedcomputeBalance;
            //computepercentage
            let computeDownpayment = parseFloat(tcpcomputeDPreplace) * (parseFloat(dpPercentagecomputedp) /
                100);
            let computeBalanceFixed1 = computeDownpayment.toFixed(0);
            let replacedcomputeBalance1 = computeBalanceFixed1.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            document.getElementById("cryptdpPercentage2").value = "₱ " + replacedcomputeBalance1;




        }
        if ("cryptInstallment" === selectedValue) {
            document.getElementById("cryptdiscounts1").value = 0;
            document.getElementById("cryptsubtotalDiscount").value = 0;
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

            var selectElement = document.getElementById("cryptNoOfMonths");

            // Reset the select element to its initial state
            selectElement.selectedIndex = 0;
            let dpPercentage1 = document.getElementById("cryptdpPercentage").value;
            let a12 = 0.12;
            let tcp1 = document.getElementById("crypttotalContractPrice3").value;
            let lotListPrice = document.getElementById("cryptlotListPrice").value;
            let discount = document.getElementById("cryptdiscounts1").value;
            let pcf = '₱ 40,000';

            var newStr2lotListPrice = lotListPrice.replace(/₱|,/g, '');
            var newStr2pcf = pcf.replace(/₱|,/g, '');
            // VAT
            var subtotaltax = parseFloat(newStr2lotListPrice) * parseFloat(a12);
            let subtotaltaxFixed = subtotaltax.toFixed(2);
            let subtotaltaxComplete = subtotaltaxFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            document.getElementById("cryptsubtotaltax").value = "₱ " + subtotaltaxComplete;
            // Discount
            var subtotalDiscount = (parseFloat(newStr2lotListPrice) + parseFloat(subtotaltax)) * (parseFloat(
                discount) / 100);
            let subtotalDiscountFixed = subtotalDiscount.toFixed(2);
            let subtotalDiscountComplete = subtotalDiscountFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            document.getElementById("cryptsubtotalDiscount").value = "₱ " + subtotalDiscountComplete;
            // TCP
            var totalContractPrice = parseFloat(newStr2lotListPrice) + parseFloat(subtotaltax) + parseFloat(
                newStr2pcf) - parseFloat(subtotalDiscount);
            let totalContractPriceFixed = totalContractPrice.toFixed(2);
            let totalContractPriceComplete = totalContractPriceFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            document.getElementById("crypttotalContractPrice3").value = "₱ " + totalContractPriceComplete;
            let pcfComplete = pcf.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            document.getElementById("cryptpcf").value = pcfComplete;


            document.getElementById("cryptbalance1").value = "";
            document.getElementById("cryptdpPercentage2").value = "";
            document.getElementById("cryptdpPercentage").value = "";


            let minimumDPPercentage = document.getElementById("minimumdpPercentage").value;
            document.getElementById("cryptdpPercentage").value = minimumDPPercentage;



            let tcpcomputeDP = document.getElementById("crypttotalContractPrice3").value;
            let dpPercentagecomputedp = document.getElementById("cryptdpPercentage").value;
            var tcpcomputeDPreplace = tcpcomputeDP.replace(/₱|,/g, '');


            //computebalance
            let computeBalance = parseFloat(tcpcomputeDPreplace) - (parseFloat(tcpcomputeDPreplace) * (
                parseFloat(dpPercentagecomputedp) / 100));
            let computeBalanceFixed = computeBalance.toFixed(0);
            let replacedcomputeBalance = computeBalanceFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            document.getElementById("cryptbalance").value = "₱ " + replacedcomputeBalance;
            document.getElementById("crypttotalBalance").value = "₱ " + replacedcomputeBalance;
            //computepercentage
            let computeDownpayment = parseFloat(tcpcomputeDPreplace) * (parseFloat(dpPercentagecomputedp) /
                100);
            let computeBalanceFixed1 = computeDownpayment.toFixed(0);
            let replacedcomputeBalance1 = computeBalanceFixed1.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            document.getElementById("cryptdpPercentage2").value = "₱ " + replacedcomputeBalance1;





        }


    });
    </script>

    <script>
    function printDiv() {
        var element = document.getElementById("printmycryptDiv");

        var opt = {
            margin: 5,
            filename: 'Receipt.pdf',
            image: {
                type: 'jpeg',
                quality: 1
            },
            html2canvas: {
                scale: 1
            },
            dpi: 300, // DPI (dots per inch)
            jsPDF: {
                unit: 'mm',
                format: 'a4',
                orientation: 'landscape'
            }
        };

        html2pdf().set(opt).from(element).save();
    }
    </script>



    <script>
    $(document).ready(function() {
        // Initialize the DataTable
        var table = $('#dataTable').DataTable();

        // Handle delete button click event using event delegation
        $('#dataTable').on('click', '.delete-btn', function() {
            var row = $(this).closest('tr');
            var rowData = table.row(row).data();
            var itemId = rowData[0]; // Assuming item ID is in the first column

            // Make an AJAX request to delete the item
            $.ajax({
                url: 'sales_declinedClient.php',
                method: 'POST',
                data: {
                    id: itemId
                },
                success: function(response) {
                    if (response.success) {
                        // Item deleted successfully
                        table.row(row).remove().draw();
                        alert(response.message);
                    } else {
                        // Failed to delete the item
                        alert(response.message);
                    }
                },
                error: function() {
                    // Error handling
                    alert('An error occurred while deleting the item.');
                }
            });
        });


    });
    </script>
</body>

</html>
   <?php } else {
  
  header("location: index.php");
 
}?>
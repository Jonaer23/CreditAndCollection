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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

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
            width: 85%;

        }

        input.viewRecord {
            border: none;
            border-bottom: 1px solid gray;
            height: 20px;
            border-radius: 0px;
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

        .table-cell {
            white-space: nowrap;
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
            margin-top: -0px;


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

        .cd-table-container {
            background: #fff;
            box-shadow: 1px 2px 26px rgba(0, 0, 0, 0.2);
            padding: 15px;
            max-width: 720px;
        }

        /* Table Design */
        .cd-table {
            width: 100%;
            color: #666;
            margin: 10px auto;
            border-collapse: collapse;
        }

        .cd-table tr,
        .cd-table td {
            border: 1px solid #ccc;
            padding: 10px;
        }

        .cd-table th {
            background: #017721;
            color: #fff;
            padding: 10px;
        }

        /* Search Box */
        .cd-search {
            padding: 10px;
            border: 1px solid #ccc;
            width: 100%;
            box-sizing: border-box;
        }

        .bg-sedge-primary-color {
            background-color: #003459;
            color: #ffffff;
        }

        /* Search Title */
        .cd-title {
            color: #666;
            margin: 15px 0;
        }

        table.dataTable thead .sorting:after,
        table.dataTable thead .sorting:before,
        table.dataTable thead .sorting_asc:after,
        table.dataTable thead .sorting_asc:before,
        table.dataTable thead .sorting_asc_readonly:after,
        table.dataTable thead .sorting_asc_readonly:before,
        table.dataTable thead .sorting_desc:after,
        table.dataTable thead .sorting_desc:before,
        table.dataTable thead .sorting_desc_readonly:after,
        table.dataTable thead .sorting_desc_readonly:before {
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
        </style>


    </head>

    <body id="page-top">
        <form method="POST" action="CCD_Configuration.php">
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

                                <div class=" d-none d-sm-block"></div>
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
                                                <div class="text-truncate">Hi there! I am wondering if you can help me
                                                    with a
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
                                                <div class="text-truncate">I have the photos that you ordered last
                                                    month, how
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
                                                <div class="text-truncate">Last month's report looks great, I am very
                                                    happy with
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
                                                    told me that people say this to all dogs, even if they aren't
                                                    good...</div>
                                                <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item text-center small text-gray-500" href="#">Read More
                                            Messages</a>
                                    </div>
                                </li>

                                <li class="nav-item dropdown no-arrow mx-1">
                                    <a class="nav-link dropdown-toggle" href="CCD_Setting.php">
                                        <span class="badge badge-danger badge-counter"
                                            style="background: #0096FF; color: #0096FF; left: 20px; bottom: 23px; width: 10px; height: 10px">.</span>
                                        <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>

                                    </a>


                                </li>
                                <div class="topbar-divider d-none d-sm-block"></div>
                                <!-- Nav Item - User Information -->
                                <li class="nav-item dropdown no-arrow">
                                    <a class="nav-link dropdown-toggle" href="#" name="userDropdown" id="userDropdown"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                                        <a class="dropdown-item" href="#" data-toggle="modal"
                                            data-target="#logoutModal">
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

                            <!-- Lot Description -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3" style="background-color: #003459 ; color: #ffffff;">
                                    <h6 class="m-0 font-weight-bold " style="color: #ffffff;">Lot Description</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive" style="color: #4a4949; ">
                                        <table class="table table-bordered" id="dt_lotDescription" width="100%"
                                            cellspacing="0">
                                            <thead>
                                                <tr
                                                    style="border: 2px solid #e3e6f0; color: #ffffff; background-color:#007ea7 ">
                                                    <th class="table-cell" scope="col"
                                                        style="color:#ffffff ; font-size: 13px; ">ID</th>
                                                    <th class="table-cell" scope="col"
                                                        style="color:#ffffff ; font-size: 13px; ">Block</th>
                                                    <th class="table-cell" scope="col"
                                                        style="color:#ffffff ; font-size: 13px; ">Section</th>
                                                    <th class="table-cell" scope="col"
                                                        style="color:#ffffff ; font-size: 13px; ">Lot No.</th>
                                                    <th class="table-cell" scope="col"
                                                        style="color:#ffffff ; font-size: 13px;">Area</th>
                                                    <th class="table-cell" scope="col"
                                                        style="color:#ffffff ; font-size: 13px;">Phase</th>
                                                    <th class="table-cell" scope="col"
                                                        style="color:#ffffff ; font-size: 13px;">Type/Class</th>
                                                    <th class="table-cell" scope="col"
                                                        style="color:#ffffff ; font-size: 13px; ">List Price</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    $sales_query = "SELECT * from tbl_lotdescription WHERE `status` = 'Active'";
                                                    $sales_result = mysqli_query($connection, $sales_query);
                                                    if (mysqli_num_rows($sales_result) > 0) {
                                                        while ($row = mysqli_fetch_assoc($sales_result)) {
                                                ?>
                                                <tr style="color: #4a4949; font-size: 13px; ">
                                                    <td class="table-cell"><?=$row['id']?></td>
                                                    <td class="table-cell"><?=$row['block']?></td>
                                                    <td class="table-cell"><?=$row['section']?></td>
                                                    <td class="table-cell"><?=$row['lot_no']?></td>
                                                    <td class="table-cell"><?=$row['area']?></td>
                                                    <td class="table-cell"><?=$row['phase']?></td>
                                                    <td class="table-cell"><?=$row['type']?></td>
                                                    <td class="table-cell"><?= '₱ ' . number_format($row['ListPrice'], 2, '.', ',') ?></td>
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

                            <!-- Crypt Description -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3" style="background-color: #003459 ; color: #ffffff;">
                                    <h6 class="m-0 font-weight-bold " style="color: #ffffff;">Crypt Description</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive" style="color: #4a4949; ">
                                        <table class="table table-bordered" id="dt_cryptDescription" width="100%"
                                            cellspacing="0">
                                            <thead>
                                                <tr
                                                    style="border: 2px solid #e3e6f0; color: #ffffff; background-color:#007ea7 ">
                                                    <th class="table-cell" scope="col"
                                                        style="color:#ffffff ; font-size: 13px; width: 2%">ID</th>
                                                    <th class="table-cell" scope="col"
                                                        style="color:#ffffff ; font-size: 13px; width: 5%">Phase</th>
                                                    <th class="table-cell" scope="col"
                                                        style="color:#ffffff ; font-size: 13px; width: 5%">Level</th>
                                                    <th class="table-cell" scope="col"
                                                        style="color:#ffffff ; font-size: 13px;  width: 4%">Area</th>
                                                    <th class="table-cell" scope="col"
                                                        style="color:#ffffff ; font-size: 13px; width: 11%">Section</th>
                                                    <th class="table-cell" scope="col"
                                                        style="color:#ffffff ; font-size: 13px; width: 5%">Column</th>
                                                    <th class="table-cell" scope="col"
                                                        style="color:#ffffff ; font-size: 13px; width: 8%">Unit no.</th>
                                                    <th class="table-cell" scope="col"
                                                        style="color:#ffffff ; font-size: 13px; width: 10%">
                                                        Classification</th>
                                                    <th class="table-cell" scope="col"
                                                        style="color:#ffffff ; font-size: 13px; width: 10%">List Price
                                                    </th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    $sales_query = "SELECT * from tbl_cryptdescription WHERE `status` = 'Active'";
                                                    $sales_result = mysqli_query($connection, $sales_query);
                                                    if (mysqli_num_rows($sales_result) > 0) {
                                                        while ($row = mysqli_fetch_assoc($sales_result)) {
                                                ?>
                                                <tr style="color: #4a4949; font-size: 13px; ">
                                                    <td class="table-cell"><?=$row['id']?></td>
                                                    <td class="table-cell"><?=$row['phase']?></td>
                                                    <td class="table-cell"><?=$row['level']?></td>
                                                    <td class="table-cell"><?=$row['area']?></td>
                                                    <td class="table-cell"><?=$row['section']?></td>
                                                    <td class="table-cell"><?=$row['crypt_column']?></td>
                                                    <td class="table-cell"><?=$row['unit_no']?></td>
                                                    <td class="table-cell"><?=$row['classification']?></td>
                                                    <td class="table-cell"><?= '₱ ' . number_format($row['listPrice'], 2, '.', ',') ?></td>
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


                <!-- End of Page Wrapper -->

                <!-- Scroll to Top Button-->
                <a class="scroll-to-top rounded" href="#page-top">
                    <i class="fas fa-angle-up"></i>
                </a>

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
            <script src="js/demo/datatables-demo.js"></script>
            <script>
            $(document).ready(function() {
                $('#dt_lotDescription').DataTable();
                $('.dataTables_length').addClass('bs-select');
            });
            </script>
            <script>
            $(document).ready(function() {
                $('#dt_cryptDescription').DataTable();
                $('.dataTables_length').addClass('bs-select');
            });
            </script>
            <script>
            $(document).ready(function() {
                $('#dt_lotIntermentDescription').DataTable();
                $('.dataTables_length').addClass('bs-select');
            });
            </script>
            <script>
            $(document).ready(function() {
                $('#dt_speciallotIntermentDescription').DataTable();
                $('.dataTables_length').addClass('bs-select');
            });
            </script>
            <script>
            $(document).ready(function() {
                $('#dt_ACDescription').DataTable();
                $('.dataTables_length').addClass('bs-select');
            });
            </script>
            <script>
            $(document).ready(function() {
                $('#dt_boneUrnIntermentDescription').DataTable();
                $('.dataTables_length').addClass('bs-select');
            });
            </script>

            <script>
            $(document).ready(function() {
                $('#dt_NicheDescription').DataTable();
                $('.dataTables_length').addClass('bs-select');
            });
            </script>
            <script>
            $(document).ready(function() {
                $('#dt_NicheSpecialDescription').DataTable();
                $('.dataTables_length').addClass('bs-select');
            });
            </script>
            <script>
            $(document).ready(function() {
                $('#dt_boneUrnIntermentDescription').DataTable();
                $('.dataTables_length').addClass('bs-select');
            });
            </script>
            <script>
            $(document).ready(function() {
                $('#dt_BoneUrnSpecialIntermentDescription').DataTable();
                $('.dataTables_length').addClass('bs-select');
            });
            </script>
    </body>


    </html>

    <?php } else {
    
    header("location: index.php");
    
    }?>
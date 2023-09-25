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
  if(isset($_SESSION['Access']) && $_SESSION['Access'] == "Admin"  && $_SESSION['Department'] == "SedgeCCD" && $_SESSION['Position'] == "Programmer" && $_SESSION['AS_Status'] == "SedgeActivated") {
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
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>

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

                      

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-info small"><?php echo $Name; ?></span>
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
                            <!-- Earnings (Monthly) Card Example -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Earnings (Monthly)</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                            
                                                    <?php
                                                    $query = "SELECT SUM(totalContractPrice) AS monthly_earnings, MONTH(date_column) AS earnings_month
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
                                                        while ($row = $result->fetch_assoc()) {
                                                            $month = date("F", mktime(0, 0, 0, $row['earnings_month'], 1));
                                                            $monthlyEarnings = '₱ ' . number_format($row['monthly_earnings'], 2, '.', ',');
                                                            echo "<p>" . strtoupper($month) . ": " . strtoupper($monthlyEarnings) . "</p>";

                                                        }
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
                                                    echo "<div class='h5 mb-0 font-weight-bold text-gray-800'>$pendingRequests PENDING REQUEST</div>";
                                                } else {
                                                    echo "<div class='h5 mb-0 font-weight-bold text-gray-800'>0</div>";
                                                }
                                                ?>
                                            </div>
                                            <div class="col-auto">
                                                <i class=" fa-2x text-gray-300"> <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
                                                  <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z"/>
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
                                                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                        APPOINTMENT REQUESTS
                                                    </div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                       <?php
                                                        $query = "SELECT COUNT(*) AS totalappointment FROM tbl_salesappointment WHERE DATE(AppointmentDate) >= CURDATE()";
                                                        // Replace "tbl_salesappointment" with the actual table name in your database
                                                        
                                                        // Execute the query
                                                        $result = $connection->query($query);
                                                        if (!$result) {
                                                            echo "Error executing query: " . $connection->error;
                                                            exit();
                                                        }
                                                        
                                                        // Check if any rows were returned
                                                        if ($result->num_rows > 0) {
                                                            while ($row = $result->fetch_assoc()) {
                                                                $appointmentDate = $row['totalappointment'];
                                                                
                                                                echo "<div class='h5 mb-0 font-weight-bold text-gray-800'>$appointmentDate APPOINMENTS</div>";
                                                        
                                                            }
                                                        } else {
                                                            echo "<p>No scheduled appointments found for today.</p>";
                                                        }
                                                        ?>


                                                    </div>
                                                </div>
                                                <div class="col-auto">
                                                    <i class=" fa-2x text-gray-300"> <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                                      <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                                                    </svg></i>
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
                        </div>
                        <div class="card-body">
                            <div class="table-responsive" style="color: #4a4949">
                                <table class="table table-bordered" id="history" width="100%" cellspacing="0">
                                    <thead>
                                        <tr class="text-xs font-weight-bold text-uppercase mb-1"
                                            style="color: #ffffff; background-color: #007ea7; font-size: 14px">
                                            <th scope="col"></th>
                                            <th scope="col"></th>
                                            <th scope="col">CUSTOMER CODE</th>
                                            <th scope="col">FULLNAME</th>
                                            <th scope="col">PLOT DESCRIPTION</th>
                                            <th scope="col">TOTAL CONTRACT PRICE</th>
                                            <th scope="col">AMOUNT PAID</th>
                                            <th scope="col">DUE DATE</th>
                                            <th scope="col">STATUS</th>
                                            <th scope="col" class="text-xs font-weight-bold text-uppercase mb-1"
                                            style="color: #ffffff; background-color: #007ea7; font-size: 11px">ACTION</th>
                                        </tr>
                                    </thead>
                                    <tbody></tbody>
                                </table>
                            </div>
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

      <!-- download Modal -->
    <div class="modal fade" id="downloadModal" tabindex="-1" role="dialog" aria-labelledby="downloadModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                  
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                    <div class="modal-body">
                        <div class="card-body">
                                <div class="card shadow mb-4 text-uppercase mb-1"  style="color: #333; font-size: 12px; padding: 20px 20px;"  >
                                    <table class="table table-bordered" style="border:none; width: 100%"
                                        cellspacing="0">
                                        <tbody>
                                            <tr>
                                                <td style="font-size: 10px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; text-align: center; border:none;"><img src="img/SouthSpring.png" alt="SouthSpring"></td>
                                            </tr>
                                            <tr>
                                                <td style="font-size: 25px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; text-align: center; border:none; background: radial-gradient(darkorange, orange); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Centennial <img src="img/centenial.png" alt="SouthSpring"> Garden <br></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div style=" justify-content: space-between; padding: 10px;">
                                        <span><p class="text-gray-900 font-weight-bold text-uppercase mb-1" style="font-size: 16px">personal information</p></span>
                                        <br>
                                        <span class="text-gray-900 text-uppercase mb-1" style="font-size: 12px">
                                            Customer code: <span class="text-gray-900 text-uppercase mb-1" style="font-size: 12px; text-decoration: underline;" id="customerCode"></span>
                                        </span>
                                        <br>
                                        <span class="text-gray-900 text-uppercase mb-1" style="font-size: 12px">
                                            Client Name: <span class="text-gray-900 text-uppercase mb-1" style="font-size: 12px; text-decoration: underline;" id="clientName"></span>
                                        </span>
                                        <br> 
                                        <span class="text-gray-900 text-uppercase mb-1" style="font-size: 12px">
                                            Reserved date: <span class="text-gray-900 text-uppercase mb-1" style="font-size: 12px; text-decoration: underline;" id="reserveDate"></span>
                                        </span>
                                        <table style="width: 100%; ">
                                            <tr>
                                                <td style="width: 30%; float: left; padding: 20px 0px">
                                                    <span><p class="text-gray-900 font-weight-bold text-uppercase mb-1" style="font-size: 16px">computation</p></span>
                                                </td>
                                                <td style="width: 40%; float: right; padding: 20px 0px">
                                                    <span><p class="text-gray-900 font-weight-bold text-uppercase mb-1" style="font-size: 16px">product description</p></span>
                                                </td>
                                            </tr>
                                        </table>
                                        <table style="width: 30%; float: left">
                                            <tbody>
                                                <tr>
                                                    <td><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px">terms : </p></span></td>
                                                    <td style="border-bottom: 1px solid; padding-right: 5px"><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px; text-align: right" id="terms"></p></span></td>
                                                </tr>
                                                <tr>
                                                    <td><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px">List Price : </p></span></td>
                                                    <td style="border-bottom: 1px solid; padding-right: 5px; padding-top: 5px"><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px; text-align: right" id="listprice"></p></span></td>
                                                </tr>
                                                <tr>
                                                    <td><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px">Value Added Tax (_)% : </p></span></td>
                                                    <td style="border-bottom: 1px solid; padding-right: 5px; padding-top: 5px"><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px; text-align: right" id="VAT"></p></span></td>
                                                </tr>
                                                <tr>
                                                    <td><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px">Subtotal : </p></span></td>
                                                    <td style="border-bottom: 1px solid; padding-right: 5px; padding-top: 5px"><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px; text-align: right" id="vatSubtotal"></p></span></td>
                                                </tr>
                                                <tr>
                                                    <td><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px">Perpetual Care Funds : </p></span></td>
                                                    <td style="border-bottom: 1px solid; padding-right: 5px; padding-top: 5px"><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px; text-align: right" id="PCF"></p></span></td>
                                                </tr>
                                                <tr>
                                                    <td><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px">Less Discount : </p></span></td>
                                                    <td style="border-bottom: 1px solid; padding-right: 5px; padding-top: 5px"><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px; text-align: right" id="discount"></p></span></td>
                                                </tr>
                                                <tr>
                                                    <td><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px">Subtotal : </p></span></td>
                                                    <td style="border-bottom: 1px solid; padding-right: 5px; padding-top: 5px"><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px; text-align: right" id="subtotalDiscount"></p></span></td>
                                                </tr>
                                                <tr>
                                                    <td><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px">Total Contract Price : </p></span></td>
                                                    <td style="border-bottom: 1px solid; padding-right: 5px; padding-top: 5px"><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px; text-align: right" id="TCP"></p></span></td>
                                                </tr>
                                                <tr>
                                                    <td><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px">Downpayment : </p></span></td>
                                                    <td style="border-bottom: 1px solid; padding-right: 5px; padding-top: 5px"><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px; text-align: right" id="downpayment"></p></span></td>
                                                </tr>
                                                <tr>
                                                    <td><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px">Full Downpayment : </p></span></td>
                                                    <td style="border-bottom: 1px solid; padding-right: 5px; padding-top: 5px"><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px; text-align: right" id="fullDownpayment"></p></span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <table style="width: 40%; float: right">
                                            <tbody>
                                                <tr>
                                                    <td style="border: 1px solid; padding-left: 5px"><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px">lot id : </p></span></td>
                                                    <td style="border: 1px solid; padding-left: 5px"><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px; text-align: left" id="lotID"></p></span></td>
                                                </tr>
                                                <tr>
                                                    <td style="border: 1px solid; padding-left: 5px"> <span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px">section : </p></span></td>
                                                    <td style="border: 1px solid; padding-left: 5px; padding-top: 5px"><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px; text-align: left" id="section"></p></span></td>
                                                </tr>
                                                <tr>
                                                    <td style="border: 1px solid; padding-left: 5px"><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px">number of lots : </p></span></td>
                                                    <td style="border: 1px solid; padding-left: 5px; padding-top: 5px"><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px; text-align: left" id="numberoflots"></p></span></td>
                                                </tr>
                                                <tr>
                                                    <td style="border: 1px solid; padding-left: 5px"><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px">area : </p></span></td>
                                                    <td style="border: 1px solid; padding-left: 5px; padding-top: 5px"><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px; text-align: left" id="area"></p></span></td>
                                                </tr>
                                                <tr>
                                                    <td style="border: 1px solid; padding-left: 5px"><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px">phase : </p></span></td>
                                                    <td style="border: 1px solid; padding-left: 5px; padding-top: 5px"><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px; text-align: left" id="phase"></p></span></td>
                                                </tr>
                                                <tr>
                                                    <td style="border: 1px solid; padding-left: 5px"><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px">type : </p></span></td>
                                                    <td style="border: 1px solid; padding-left: 5px; padding-top: 5px"><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px; text-align: left" id="type"></p></span></td>
                                                </tr>
                                                <tr>
                                                    <td style="border: 1px solid; padding-left: 5px"><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px">classification : </p></span></td>
                                                    <td style="border: 1px solid; padding-left: 5px; padding-top: 5px"><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px; text-align: left" id="classification"></p></span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        
                                </div>
                                </div>
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
                                    <table class="table table-bordered" style="border:none; width: 50%;color: #333;"
                                                cellspacing="0" id="downloadbleform" >
                                       <thead>
                                            <tr class="text-xs font-weight-bold text-uppercase mb-1"
                                            style="color: #ffffff; background-color: #007ea7; font-size: 14px">
                                                <th scope="col">No.</th>
                                                <th scope="col">Filename</th>
                                                <th scope="col"></th>
                                            </tr>
                                       </thead>
                                      <tbody>
                                        <tr>
                                            <td class="text-xs text-uppercase mb-1 table-cell text-gray-900" style=" font-size: 12px; width: 3%">1</td>
                                            <td class="text-xs text-uppercase mb-1 table-cell text-gray-900" style=" font-size: 12px">Buyer Information Sheet</td>
                                            <td class="text-xs text-uppercase mb-1 table-cell text-gray-900" style=" font-size: 12px"> 
                                            
                                                <form action="download.php" method="post">
                                                    <input type="hidden" name="customerCode1" id="customerCode1" >
                                                    <input type="hidden" name="contractCode" id="contractCode" >
                                                    <input type="hidden" name="fullname" id="fullname" >
                                                    <input type="hidden" name="residenceAddress" id="residenceAddress" >
                                                    <input type="hidden" name="billingAddress" id="billingAddress" >
                                                    <input type="hidden" name="issuedAt" id="issuedAt" >
                                                    <input type="hidden" name="issuedOn" id="issuedOn" value="issuedOn">
                                                    <input type="hidden" name="sex" id="sex" value="sex">
                                                    <input type="hidden" name="dateofBirth" id="dateofBirth" value="dateofBirth">
                                                    <input type="hidden" name="citizenship" id="citizenship" value="citizenship">
                                                    <input type="hidden" name="height" id="height" value="height">
                                                    <input type="hidden" name="weight" id="weight" value="weight">
                                                    <input type="hidden" name="sss" id="sss" value="sss">
                                                    <input type="hidden" name="HFMF" id="HFMF" value="HFMF">
                                                    <input type="hidden" name="TIN" id="TIN" value="TIN">
                                                    <input type="hidden" name="NBI" id="NBI" value="NBI">
                                                    <input type="hidden" name="maritalStatus" id="maritalStatus" value="maritalStatus">
                                                    <input type="hidden" name="preNuptial" id="preNuptial" value="preNuptial">
                                                    <input type="hidden" name="residentialPhone" id="residentialPhone" value="residentialPhone">
                                                    <input type="hidden" name="mobilePhone" id="mobilePhone" value="mobilePhone">
                                                    <input type="hidden" name="businessPhone" id="businessPhone" value="businessPhone">
                                                    <input type="hidden" name="emailAddress" id="emailAddress" value="emailAddress">
                                                    <input type="hidden" name="spouseName" id="spouseName" value="spouseName">
                                                    <input type="hidden" name="spouseOccupation" id="spouseOccupation" value="spouseOccupation">
                                                    <input type="hidden" name="fatherName" id="fatherName" value="fatherName">
                                                    <input type="hidden" name="fatherOccupation" id="fatherOccupation" value="fatherOccupation">
                                                    <input type="hidden" name="motherName" id="motherName" value="motherName">
                                                    <input type="hidden" name="motherOccupation" id="motherOccupation" value="motherOccupation">
                                                    <input type="hidden" name="childrenName" id="childrenName" value="childrenName">
                                                    <input type="hidden" name="dateOfBirthChildren" id="dateOfBirthChildren" value="dateOfBirthChildren">
                                                    <input type="hidden" name="age" id="age" value="age">
                                                    <input type="hidden" name="employmentStatus" id="employmentStatus" value="employmentStatus">
                                                    <input type="hidden" name="sourceOfIncome" id="sourceOfIncome" value="sourceOfIncome">
                                                    <input type="hidden" name="employerBusinessName" id="employerBusinessName" value="employerBusinessName">
                                                    <input type="hidden" name="natureBusiness" id="natureBusiness" value="natureBusiness">
                                                    <input type="hidden" name="positionInCompany" id="positionInCompany" value="positionInCompany">
                                                    <input type="hidden" name="employmentDate" id="employmentDate" value="employmentDate">
                                                    <input type="hidden" name="memorialPlot" id="memorialPlot" value="memorialPlot">
                                                    <input type="hidden" name="namememorialPlot" id="namememorialPlot" value="namememorialPlot">
                                                    <input type="hidden" name="sincememorialPlot" id="sincememorialPlot" value="sincememorialPlot">
                                                    <input type="hidden" name="locationmemorialPlot" id="locationmemorialPlot" value="locationmemorialPlot">
                                                    <input type="hidden" name="lotID01" id="lotID01" value="lotID1">
                                                    <input type="hidden" name="lotArea" id="lotArea" value="lotArea">
                                                    <input type="hidden" name="section01" id="section01" value="section">
                                                    <input type="hidden" name="lotphase" id="lotphase" value="lotphase">
                                                    <input type="hidden" name="lotclass" id="lotclass" value="lotclass">
                                                    <input type="hidden" name="lotTCP" id="lotTCP" value="lotTCP">
                                                    <input type="hidden" name="lotno" id="lotno" value="lotno">
                                                    <input type="hidden" name="lotTerms" id="lotTerms" value="lotTerms">
                                                    <input type="hidden" name="initialPayment" id="initialPayment" value="initialPayment">
                                                    <input type="hidden" name="cryptID" id="cryptID" value="cryptID">
                                                    <input type="hidden" name="cryptPhase" id="cryptPhase" value="cryptPhase">
                                                    <input type="hidden" name="cryptLevel" id="cryptLevel" value="cryptLevel">
                                                    <input type="hidden" name="cryptArea" id="cryptArea" value="cryptArea">
                                                    <input type="hidden" name="cryptSection" id="cryptSection" value="cryptSection">
                                                    <input type="hidden" name="cryptColumn" id="cryptColumn" value="cryptColumn">
                                                    <input type="hidden" name="unitNo" id="unitNo" value="unitNo">
                                                    <input type="hidden" name="cryptClass" id="cryptClass" value="cryptClass">
                                                    <input type="hidden" name="cryptTerms" id="cryptTerms" value="cryptTerms">
                                                    <input type="hidden" name="paymentDuedate" id="paymentDuedate" value="paymentDuedate">
                                                    <input type="hidden" name="listprice01" id="listprice01" value="listprice">
                                                     <input type="hidden" name="lottype" id="lottype" value="lottype">
                                                      <input type="hidden" name="date" id="date" value="date">
                                                      <input type="hidden" name="residenceSince" id="residenceSince" value="residenceSince">
                                                       <input type="hidden" name="dateCreated" id="dateCreated" >
                                                    <button type="submit" class="text-info" style="margin: 0 auto; display: block; border: none; background-color: transparent; text-align: center">
                                                        <i class="fas fa-download"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-xs text-uppercase mb-1 table-cell text-gray-900" style=" font-size: 12px; width: 3%">2</td>
                                            <td class="text-xs text-uppercase mb-1 table-cell text-gray-900" style="font-size: 12px">Purchase Agreement</td>
                                            <td class="text-xs text-uppercase mb-1 table-cell text-gray-900" style=" font-size: 12px">
                                                  <form action="downloadPurchaseAgreement.php" method="post">
                                                     <input type="hidden" name="citizenship1" id="citizenship1" value="SAMPLE DATA">
                                                    <input type="hidden" name="customername1" id="customername1" value="SAMPLE DATA">
                                                    <input type="hidden" name="nameofspouse1" id="nameofspouse1" value="SAMPLE DATA">
                                                    <input type="hidden" name="customeraddress1" id="customeraddress1" value="SAMPLE DATA">
                                                    <input type="hidden" name="lotPhase1" id="lotPhase1" value="SAMPLE DATA">
                                                    <input type="hidden" name="lotarea1" id="lotarea1" value="SAMPLE DATA">
                                                    <input type="hidden" name="lotsection1" id="lotsection1" value="SAMPLE DATA">
                                                    <input type="hidden" name="lotID1" id="lotID1" value="SAMPLE DATA">
                                                    <input type="hidden" name="lottype1" id="lottype1" value="SAMPLE DATA">
                                                    <input type="hidden" name="lotclasification1" id="lotclasification1" value="SAMPLE DATA">
                                                    <input type="hidden" name="cryptphase1" id="cryptphase1" value="SAMPLE DATA">
                                                    <input type="hidden" name="cryptlevel1" id="cryptlevel1" value="SAMPLE DATA">
                                                    <input type="hidden" name="cryptarea1" id="cryptarea1" value="SAMPLE DATA">
                                                    <input type="hidden" name="cryptsection1" id="cryptsection1" value="SAMPLE DATA">
                                                    <input type="hidden" name="cryptcolumn1" id="cryptcolumn1" value="SAMPLE DATA">
                                                    <input type="hidden" name="cryptunitno1" id="cryptunitno1" value="SAMPLE DATA">
                                                    <input type="hidden" name="cryptclasification1" id="cryptclasification1" value="SAMPLE DATA">
                                                    <input type="hidden" name="cryptID1" id="cryptID1" value="SAMPLE DATA">
                                                    <input type="hidden" name="terms1" id="terms1" value="SAMPLE DATA">
                                                    <input type="hidden" name="vat1" id="vat1" value="SAMPLE DATA">
                                                    <input type="hidden" name="tcp1" id="tcp1" value="SAMPLE DATA">
                                                    <input type="hidden" name="llp1" id="llp1" value="SAMPLE DATA">
                                                    <input type="hidden" name="discount1" id="discount1" value="SAMPLE DATA">
                                                    <button type="submit" class="text-info" style="margin: 0 auto; display: block; border: none; background-color: transparent; text-align: center">
                                                        <i class="fas fa-download"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    </tbody>
                                    </table>
                            </div>
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

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script>                        
        // Basic custom sanitation function to prevent XSS attacks
        function sanitizeInput(input) {
            return input.replace(/[&<>"'/]/g, function(match) {
                switch (match) {
                    case '&':
                        return '&amp;';
                    case '<':
                        return '&lt;';
                    case '>':
                        return '&gt;';
                    case '"':
                        return '&quot;';
                    case "'":
                        return '&#39;';
                    case '/':
                        return '&#x2F;';
                    default:
                        return match;
                }
            });
        }
       var historyTable = $('#history').DataTable({
            searching: true, // Enable search functionality
            // You can add more options here as needed
            columnDefs: [
                { targets: [0], visible: false },
                {
                    targets: [2, 3, 4, 7],
                    className: 'text-xs text-uppercase mb-1 table-cell ',
                    render: function(data, type, row) {
                        return '<span style="font-size: 14px" class="text-gray-900">' + sanitizeInput(data) + '</span>';
                    }
                },
                
                {
                    targets: [5,6],
                    className: 'text-xs text-uppercase mb-1 table-cell',
                    render: function(data, type, row) {
                        // Format the data as currency with peso sign and commas
                        var currencyFormatted = parseFloat(data).toFixed(2);
                        return '<span style=" font-size: 14px" class="text-gray-900">₱ ' + currencyFormatted.replace(/\B(?=(\d{3})+(?!\d))/g, ",") + '</span>';
                    }
                },
                
               {
                  targets: [8],
                    className: 'text-xs text-uppercase mb-1 table-cell',
                    render: function(data, type, row) {
                        // Get the status value from the row data (assuming the status column is at index 6)
                        var status = row[7];
                    
                        // Determine the classes based on the status value
                        var textColorClass = '';
                        var backgroundColorClass = '';
                        if (status === 'Active' || status === 'ACTIVE') {
                            textColorClass = 'text-white';
                            backgroundColorClass = 'btn-info';
                        } else if (status === 'Pending' || status === 'PENDING') {
                            backgroundColorClass = 'btn-warning';
                        } else if (status === 'Purchased' || status === 'PURCHASED') {
                            backgroundColorClass = 'btn-success';
                        } else if (status === 'Cancelled' || status === 'CANCELLED') {
                            backgroundColorClass = 'btn-secondary';
                        } else {
                            textColorClass = 'text-dark'; // Default text color for other statuses
                        }
                    
                        // Return the data with appropriate classes for styling
                        return '<span class="' + backgroundColorClass + ' ' + textColorClass + ' text-center d-block py-1 px-3 rounded" style="font-size: 14px;">' + data + '</span>';
                    }
                },
            ]
        });
        // Function to populate the table with data from the server
       function populateTable(data) {
                // Clear existing data in the table
                historyTable.clear().draw();

                // Loop through the data and add rows to DataTable
                $.each(data, function(index, item) {
                    var sanitizedItem = {
                        id: sanitizeInput(item.id),
                        customerCode: sanitizeInput(item.customerCode),
                        fullname: sanitizeInput(item.fullname),
                        productDescription: sanitizeInput(item.productDescription),
                        totalContractPrice: item.totalContractPrice,
                        monthlyInstallment: item.monthlyInstallment,
                        paymentDue: sanitizeInput(item.paymentDue),
                        status: sanitizeInput(item.status)
                    };
                
                    // Use DataTables API to add data
                    historyTable.row.add([
                        sanitizedItem.id,
                        getActionButton(sanitizedItem.status, sanitizedItem.customerCode),
                        sanitizedItem.customerCode,
                        sanitizedItem.fullname,
                        sanitizedItem.productDescription,
                        sanitizedItem.totalContractPrice,
                        sanitizedItem.monthlyInstallment,
                        sanitizedItem.paymentDue,
                        sanitizedItem.status,
                        getVerifyButton(sanitizedItem.customerCode, sanitizedItem.id)
                        
                    ]).draw(false);
                });
            }
            // Fetch ledger data for a specific account
            function fetchLedgerAccount(accountId) {
            $.ajax({
              url: 'FETCH.Validation_SalesLedgerHistory.php',
              method: 'POST',
              data: {
                accountId: accountId
              },
              dataType: 'json', // Set the expected response data type as JSON
              success: function(response) {
                if (response.length > 0) {
                    var data = response[0]; // Retrieve the first item in the response array
                    $('#clientName').text(data.customerName);
                    var dateString = data.paymentDueDate; // Assuming data.paymentDueDate is your date string
                    
                    // Parse the date string into a Date object
                    var date = new Date(dateString);
                    
                    // Format the date using Intl.DateTimeFormat with long date options
                    var options = { year: 'numeric', month: 'long', day: 'numeric' };
                    var longDate = new Intl.DateTimeFormat('en-US', options).format(date);
                    
                    // Update the content of the #reserveDate element with the formatted long date
                    $('#reserveDate').text(longDate);
                    $('#terms').text(data.terms);
                    var listPrice = data.listprice;
                    var vatSubtotal1 = data.vatSubtotal;
                    var PCF1 = data.PCF;
                    var subtotalDiscount1 = data.subtotalDiscount;
                    var TCP1 = data.TCP;
                    var downpayment1 = data.downpayment;
                    var fullDownpayment1 = data.fullDownpayment;
                    // Format the list price as currency with peso sign and commas
                    var formattedListPrice = new Intl.NumberFormat('en-PH', {
                        style: 'currency',
                        currency: 'PHP'
                    }).format(listPrice);
                    var formattedvatSubtotal1 = new Intl.NumberFormat('en-PH', {
                        style: 'currency',
                        currency: 'PHP'
                    }).format(vatSubtotal1);
                    var formattedPCF1 = new Intl.NumberFormat('en-PH', {
                        style: 'currency',
                        currency: 'PHP'
                    }).format(PCF1);
                    var formattedsubtotalDiscount1 = new Intl.NumberFormat('en-PH', {
                        style: 'currency',
                        currency: 'PHP'
                    }).format(subtotalDiscount1);
                    var formattedTCP1 = new Intl.NumberFormat('en-PH', {
                        style: 'currency',
                        currency: 'PHP'
                    }).format(TCP1);
                    var formatteddownpayment1 = new Intl.NumberFormat('en-PH', {
                        style: 'currency',
                        currency: 'PHP'
                    }).format(downpayment1);
                    var formattedfullDownpayment1 = new Intl.NumberFormat('en-PH', {
                        style: 'currency',
                        currency: 'PHP'
                    }).format(fullDownpayment1);
                    
                    var formattedListPriceWithSpace = '₱ ' + formattedListPrice.substring(1);
                     var formattedListPriceWithSpace1 = formattedListPrice.substring(1);
                    var formattedvatSubtotal1WithSpace = '₱ ' + formattedvatSubtotal1.substring(1);
                    var formattedPCF1WithSpace = '₱ ' + formattedPCF1.substring(1);
                    var formattedsubtotalDiscount1WithSpace = '₱ ' + formattedsubtotalDiscount1.substring(1);
                    var formattedTCP1WithSpace = '₱ ' + formattedTCP1.substring(1);
                     var formattedTCP12WithSpace = formattedTCP1.substring(1);
                    var formatteddownpayment1WithSpace = '₱ ' + formatteddownpayment1.substring(1);
                    var formattedfullDownpayment1WithSpace = '₱ ' + formattedfullDownpayment1.substring(1);
                    $('#listprice').text(formattedListPriceWithSpace);
                    $('#VAT').text(data.VAT);
                    $('#vatSubtotal').text(formattedvatSubtotal1WithSpace);
                    $('#PCF').text(formattedPCF1WithSpace);
                    $('#discount').text(data.discount);
                    $('#subtotalDiscount').text(formattedsubtotalDiscount1WithSpace);
                    $('#TCP').text(formattedTCP1WithSpace);
                    $('#downpayment').text(formatteddownpayment1WithSpace);
                    $('#fullDownpayment').text(formattedfullDownpayment1WithSpace);
                    
                    $('#lotID').text(data.lotID);
                    $('#section').text(data.section);
                    $('#numberoflots').text(data.numberoflots);
                    $('#area').text(data.area);
                    $('#phase').text(data.phase);
                    $('#type').text(data.type);
                    $('#classification').text(data.classification);
                    
                    $('#fullname').val(data.customerName);
                    
                    $('#contractCode').val(data.contractCode);
                    $('#customerCode1').val(data.customerCode);
                    $('#residenceAddress').val(data.residenceAddress);
                    $('#billingAddress').val(data.billingAddress);
                    $('#issuedAt').val(data.issuedAt);
                    $('#issuedOn').val(data.issuedOn);
                    $('#sex').val(data.sex);
                    $('#dateofBirth').val(data.dateofBirth);
                    $('#citizenship').val(data.citizenship);
                    $('#height').val(data.height);
                    $('#weight').val(data.weight);
                    $('#sss').val(data.sss);
                    $('#HFMF').val(data.HFMF);
                    $('#TIN').val(data.TIN);
                    $('#NBI').val(data.NBI);
                    $('#maritalStatus').val(data.maritalStatus);
                    $('#preNuptial').val(data.preNuptial);
                    $('#residentialPhone').val(data.residentialPhone);
                    $('#mobilePhone').val(data.mobilePhone);
                    $('#businessPhone').val(data.businessPhone);
                    $('#emailAddress').val(data.emailAddress);
                    $('#spouseName').val(data.spouseName);
                    $('#spouseOccupation').val(data.spouseOccupation);
                    $('#fatherName').val(data.fatherName);
                    $('#fatherOccupation').val(data.fatherOccupation);
                    $('#motherName').val(data.motherName);
                    $('#motherOccupation').val(data.motherOccupation);
                    $('#childrenName').val(data.childrenName);
                    $('#dateOfBirthChildren').val(data.dateOfBirthChildren);
                    $('#age').val(data.age);
                    $('#employmentStatus').val(data.employmentStatus);
                    $('#sourceOfIncome').val(data.sourceOfIncome);
                    $('#employerBusinessName').val(data.employerBusinessName);
                    $('#natureBusiness').val(data.natureBusiness);
                    $('#positionInCompany').val(data.positionInCompany);
                    $('#employmentDate').val(data.employmentDate);
                    $('#memorialPlot').val(data.memorialPlot);
                    $('#namememorialPlot').val(data.namememorialPlot);
                    $('#sincememorialPlot').val(data.sincememorialPlot);
                    $('#locationmemorialPlot').val(data.locationmemorialPlot);
                    $('#lotID01').val(data.lotID);
                    $('#lotArea').val(data.area);
                    $('#section01').val(data.section);
                    $('#lotphase').val(data.phase);
                    $('#lottype').val(data.type);
                    $('#lotclass').val(data.classification);
                    $('#lotno').val(data.numberoflots);
                    $('#lotTerms').val(data.lotTerms);
                    var downpayment11 = data.downpayment;
                    var formatteddownpayment11 = new Intl.NumberFormat('en-PH', {
                        style: 'currency',
                        currency: 'PHP'
                    }).format(downpayment11);
                    var formatteddownpayment11WithSpace = formatteddownpayment11.substring(1);
                    document.getElementById('initialPayment').value = formatteddownpayment11WithSpace;
                    $('#cryptID').val(data.cryptID);
                    $('#cryptPhase').val(data.cryptPhase);
                    $('#cryptLevel').val(data.cryptLevel);
                    $('#cryptArea').val(data.cryptArea);
                    $('#cryptSection').val(data.cryptSection);
                    $('#cryptColumn').val(data.cryptColumn);
                    $('#unitNo').val(data.unitNo);
                    $('#cryptClass').val(data.cryptClass);
                     document.getElementById('lotTCP').value = formattedTCP12WithSpace;
                    $('#cryptTerms').val(data.cryptTerms);
                    $('#paymentDuedate').val(data.paymentDueDate);
                    $('#residenceSince').val(data.residenceSince);
                    $('#dateCreated').val(data.dateCreated);
                    document.getElementById('listprice01').value = formattedListPriceWithSpace1;
                    
                     $('#lotID1').val(data.lotID);
                    $('#lotarea1').val(data.area);
                    $('#lotsection1').val(data.section);
                    $('#lotPhase1').val(data.phase);
                    $('#lottype1').val(data.type);
                    $('#lotclasification1').val(data.classification);
                     $('#cryptID1').val(data.cryptID);
                    $('#cryptphase1').val(data.cryptPhase);
                    $('#cryptlevel1').val(data.cryptLevel);
                    $('#cryptarea1').val(data.cryptArea);
                    $('#cryptsection1').val(data.cryptSection);
                    $('#cryptcolumn1').val(data.cryptColumn);
                    $('#cryptunitno1').val(data.unitNo);
                    $('#cryptclasification1').val(data.cryptClass);
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
            function getActionButton(status, customerCode) {
                if (status === 'Pending') {
                  return `<button class="text-info btndownloadModal" style="margin: 0 auto; display: block; border: none; background-color: transparent;" data-account-id="${customerCode}" data-toggle="modal" data-target="#downloadModal"><i class="fas fa-download"></i></button>`;
                } else if (status === 'Active') {
                    return `<button class="text-info btnviewModal" style="margin: 0 auto; display: block; border: none; background-color: transparent;" data-account-id="${customerCode}" data-toggle="modal" data-target="#downloadModal"><i class="fas fa-eye"></i></button>`;
                } else if (status === 'Purchased') {
                    return `<button class="text-info btndownloadModal" style="margin: 0 auto; display: block; border: none; background-color: transparent;" data-account-id="${customerCode}" data-toggle="modal" data-target="#downloadModal"><i class="fas fa-download"></i></button>`;
                } else if (status === 'Cancelled') {
                    return `<button class="text-info btnviewModal" style="margin: 0 auto; display: block; border: none; background-color: transparent;" data-account-id="${customerCode}" data-toggle="modal" data-target="#downloadModal"><i class="fas fa-eye"></i></button>`;
                } else {
                    return ''; // Return an empty string for other cases or no action button
                }
            }
            function getVerifyButton(customerCode, id) {
                return `<button class="text-success approve" id="approve" style="margin: 0 auto; border: none; background-color: transparent; text-align: center; padding-left: 20px" data-account-id="${customerCode}" data-account-id1="${id}" > <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-fill-up" viewBox="0 0 16 16">
                                                      <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.354-5.854 1.5 1.5a.5.5 0 0 1-.708.708L13 11.707V14.5a.5.5 0 0 1-1 0v-2.793l-.646.647a.5.5 0 0 1-.708-.708l1.5-1.5a.5.5 0 0 1 .708 0ZM11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                                                      <path d="M2 13c0 1 1 1 1 1h5.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.544-3.393C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4Z"/>
                                                    </svg></button> || <button class="text-danger declined" id="declined" style="margin: 0 auto; border: none; background-color: transparent; text-align: center" data-account-id="${customerCode}" data-account-id1="${id}"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-x" viewBox="0 0 16 16">
                                                          <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm.256 7a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Z"/>
                                                          <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm-.646-4.854.646.647.646-.647a.5.5 0 0 1 .708.708l-.647.646.647.646a.5.5 0 0 1-.708.708l-.646-.647-.646.647a.5.5 0 0 1-.708-.708l.647-.646-.647-.646a.5.5 0 0 1 .708-.708Z"/>
                                                        </svg></button>`;
            }


            $.ajax({
                url: "FETCH.Validation_CCDCollection.php", // Replace with your actual server endpoint URL
                method: "POST",
                dataType: "json",
                success: function(data) {
                    populateTable(data); // Populate the table with fetched data
                },
                error: function(error) {
                    console.log("Error fetching data: " + error);
                }
            }); 
                // Handle click event on the viewLedgerBtn
            $(document).on('click', '.btndownloadModal', function() {
                const accountId = $(this).data('account-id');
                openModal(accountId);
                 document.getElementById("downloadbleform").style.display = "block";
            });
                // Handle click event on the viewLedgerBtn
            $(document).on('click', '.btnviewModal', function() {
                const accountId = $(this).data('account-id');
                openModal(accountId);
                document.getElementById("downloadbleform").style.display = "none";
            });
                // Open the modal and fetch ledger data for the selected account
            function openModal(accountId) {
                $('#customerCode').text(accountId);
                fetchLedgerAccount(accountId);
                fetchLedger(accountId);
            }
            $(document).on('click', '.approve', function() {
                const customerCode = $(this).data('account-id');
                 const id = $(this).data('account-id1');
                 // Get the item ID from the corresponding hidden ID <td> element
                   var element = this.parentNode;
                promptForORPR(function(ORPR) {
                    if (ORPR !== null && ORPR.trim() !== '') {
                        // Perform the AJAX request with the ORPR number
                        approveItem(id, customerCode, element, ORPR);
                    } else {
                        console.log('ORPR number not provided. Item approval canceled.');
                    }
                });
            });
            
            $(document).on('click', '.declined', function() {
                const customerCode = $(this).data('account-id');
                 // Get the item ID from the corresponding hidden ID <td> element
                    var element1 = this.parentNode;
                   declinedStatus(customerCode, element1);
                   
                });
            function declinedStatus(customerCode, element1) {
                var tdElement = $(element1).closest('td')[0];
                tdElement.innerHTML = '<i class="fas fa-spinner fa-spin"></i>';
            
                // Set a minimum duration for the spinner (3 seconds)
                var minimumDuration = 3000;
            
                // Perform the AJAX request
                $.ajax({
                type: 'POST',
                url: 'CCD_InitialPaymentDeclined1.php', // Replace with the actual URL to your PHP script
                data: { id: customerCode }, // Pass the item ID to the PHP script
                dataType: 'json',
                success: function(response) {
                    // Check if the update was successful
                    if (response.success) {
                    // Wait for the minimum duration to pass
                     location.reload();
                    setTimeout(function() {
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
            function promptForORPR(callback) {
                var ORPR = window.prompt('Enter the ORPR number:');
                callback(ORPR);
            }
            function approveItem(id, customerCode, element, ORPR) {
                var tdElement = $(element).closest('td')[0];
                tdElement.innerHTML = '<i class="fas fa-spinner fa-spin"></i>';
                console.log(id);
                // Set a minimum duration for the spinner (3 seconds)
                var minimumDuration = 1000;
            
            
                // Perform the AJAX request
                $.ajax({
                    type: 'POST',
                    url: 'CCD_InitialPaymentApproved1.php', // Replace with the actual URL to your PHP script
                    data: {
                        accountUser: customerCode,
                         id: id,
                        ORPR: ORPR
                    }, // Pass the item ID, customer code, and formData to the PHP script
                    dataType: 'json',
                    success: function(response) {
                        // Check if the update was successful
                        if (response.success) {
                            // Wait for the minimum duration to pass
                            location.reload();
                            setTimeout(function() {
                                tdElement.innerHTML = '<i class="fas fa-check-circle"></i>';
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
                updateLedgerTable(data);
            },
            error: function(xhr, status, error) {
                // Handle the error gracefully
                console.error('Fetch Ledger Error:', status, error);
                // Display an error message to the user or perform any necessary actions
            }
        });
    }
     function sanitize(str) {
        // Perform necessary sanitization, such as HTML escaping
        // You can use external libraries like DOMPurify for added security
        return $('<div>').text(str).html();
    }
     // Format currency with appropriate decimal places and separators
    function formatCurrency(amount) {
        const formattedAmount = Number(amount).toLocaleString('en-PH', {
            style: 'decimal',
            minimumFractionDigits: 2,
            maximumFractionDigits: 2
        });

        return formattedAmount;
    }
    </script>

    <!-- Page level custom scripts -->
    <script>
    // Call the dataTables jQuery plugin
    $(document).ready(function() {
    $('#history').DataTable();
    });
    </script>
      <script>
        $(document).ready(function() {
            // Remove .php extension from the URL
            var currentURL = window.location.href;
            var newURL = currentURL.replace(".php", "");
            history.replaceState(null, null, newURL);
        });
    </script>
    

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const downloadButton = document.getElementById('downloadButton');
        if (downloadButton) {
            downloadButton.addEventListener('click', function() {
                
                // Redirect the user to the PHP script for download
                window.location.href = 'download.php';
            });
        }
    });
</script>

   
</body>

</html>
    <?php } else {
  
  header("location: index.php");
 
}?>
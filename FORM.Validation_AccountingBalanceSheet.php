<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Start the session (if not already started)
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
include 'connection.php';
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
                <a class="nav-link" href="#">
                    <i class="fas fa-fw fa-tachometer-alt"></i></i>
                    <span>Dashboard</span></a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="FORM.Validation_AccountingIncomeStatement.php">
                    <i class="fas fa fa-ticket"></i></i>
                    <span>Income Statements</span></a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="FORM.Validation_AccountingBalanceSheet.php">
                    <i class="fas fa fa-ticket"></i></i>
                    <span>Balance Sheet</span></a>
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
                                                    echo "<div class='h5 mb-0 font-weight-bold text-gray-800'>$pendingRequests Request Pending</div>";
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
                                                                
                                                                echo "<div class='h5 mb-0 font-weight-bold text-gray-800'>$appointmentDate Appoinments</div>";
                                                        
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
                                    <div class="card shadow mb-4" style="margin: 20px 100px">
                                        <div style=" justify-content: space-between; padding: 50px 100px; ">
                                          <table style="width: 100%; margin-bottom: 20px">
                                            <tr>
                                                <td style="width: 100%; float: left; padding: 20px 0px" colspan="3">
                                                   <span><p class="text-gray-900 font-weight-underlined text-uppercase mb-1" style="font-size: 24px;">BALANCE SHEET</p></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="float: left; padding-right:20px">
                                                   <span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px">FROM : </p></span><input type="date" class="form-control" style="width: 300px;">
                                                </td>
                                                <td style="float: left;  padding-right:20px">
                                                    <span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px">To : </p></span><input type="date" class="form-control" style="width: 300px;">
                                                </td>
                                                <td style="float: right;  padding-right:20px">
                                                    <span><p class="text-uppercase mb-1" style="font-size: 12px; color: white">Download : </p></span><button type="button" class="btn btn-success" style="width: 150px;">DOWNLOAD</button>
                                                </td>
                                                
                                            </tr>
                                            
                                        </table>
                                        <table style="width: 100%; ">
                                             <tr >
                                                <td style="border-bottom: 1px solid gray; width: 100%; float: left; padding: 0px 0px" colspan="3">
                                                   
                                                </td>
                                            </tr>
                                        </table>
                                        <table style="width: 100%; ">
                                            <tr>
                                                <td style="width: 30%; float: left; padding: 20px 0px;">
                                                    <span><p class="text-white font-weight-normal text-uppercase mb-1 bg-sedge-primary-color " style="font-size: 16px; padding-left: 20px; padding-top: 3px;padding-bottom: 3px">ASSETS</p></span>
                                                </td>
                                                <td style="width: 40%; float: right; padding: 20px 5px">
                                                    <span><p class="text-white font-weight-normal text-uppercase mb-1 bg-sedge-primary-color" style="font-size: 16px; padding-left: 20px; padding-top: 3px;padding-bottom: 3px">liabilities and owner's equity</p></span>
                                                </td>
                                            </tr>
                                        </table>
                                        <table style="width: 30%; float: left">
                                                <tr>
                                                    <td><span><p class="text-gray-900 font-weight-bold text-uppercase mb-1" style="font-size: 12px; padding-left: 20px;font-style: italic;">Current Asset  </p></span></td>
                                                  
                                                </tr>
                                                <tr>
                                                    <td><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px; padding-left: 30px">cash : </p></span></td>
                                                    <td style="border-bottom: 1px solid; padding-right: 5px; padding-top: 5px"><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px; text-align: right" id="listprice"></p></span></td>
                                                </tr>
                                                <tr>
                                                    <td><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px; padding-left: 30px">account receivable : </p></span></td>
                                                    <td style="border-bottom: 1px solid; padding-right: 5px; padding-top: 5px"><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px; text-align: right" id="VAT"></p></span></td>
                                                </tr>
                                                <tr>
                                                    <td><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px; padding-left: 30px">inventory : </p></span></td>
                                                    <td style="border-bottom: 1px solid; padding-right: 5px; padding-top: 5px"><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px; text-align: right" id="vatSubtotal"></p></span></td>
                                                </tr>
                                                <tr>
                                                    <td><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px; padding-left: 30px">prepaid expenses : </p></span></td>
                                                    <td style="border-bottom: 1px solid; padding-right: 5px; padding-top: 5px"><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px; text-align: right" id="PCF"></p></span></td>
                                                </tr>
                                                <tr>
                                                    <td><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px; padding-left: 30px">short-term Investment : </p></span></td>
                                                    <td style="border-bottom: 1px solid; padding-right: 5px; padding-top: 5px"><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px; text-align: right" id="discount"></p></span></td>
                                                </tr>
                                                <tr>
                                                    <td style="border-bottom: 1px solid"></td>
                                                </tr>
                                                <tr>
                                                    <td><span><p class="text-gray-900 text-uppercase mb-1 font-weight-bold" style="font-size: 12px; padding-left: 30px; padding-right: 30px;font-style: italic;">total current asset : </p></span></td>
                                                    <td style="border-bottom: 1px solid; padding-right: 5px; padding-top: 5px"><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px; text-align: right" id="subtotalDiscount">P 213,213</p></span></td>
                                                </tr>
                                                </table>
                                        <table style="width: 40%; float: right">
                                             <tbody>
                                                <tr>
                                                    <td><span><p class="text-gray-900 font-weight-bold text-uppercase mb-1" style="font-size: 12px; padding-left: 20px;font-style: italic;">Current liabilities  </p></span></td>
                                                  
                                                </tr>
                                                <tr>
                                                    <td><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px; padding-left: 30px">Account payable : </p></span></td>
                                                    <td style="border-bottom: 1px solid; padding-right: 5px; padding-top: 5px"><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px; text-align: right" id="listprice"></p></span></td>
                                                </tr>
                                                <tr>
                                                    <td><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px; padding-left: 30px">short-term loans : </p></span></td>
                                                    <td style="border-bottom: 1px solid; padding-right: 5px; padding-top: 5px"><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px; text-align: right" id="listprice"></p></span></td>
                                                </tr>
                                                <tr>
                                                    <td><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px; padding-left: 30px">Income Taxes payable : </p></span></td>
                                                    <td style="border-bottom: 1px solid; padding-right: 5px; padding-top: 5px"><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px; text-align: right" id="listprice"></p></span></td>
                                                </tr>
                                                <tr>
                                                    <td><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px; padding-left: 30px">accrued salaries and wages : </p></span></td>
                                                    <td style="border-bottom: 1px solid; padding-right: 5px; padding-top: 5px"><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px; text-align: right" id="listprice"></p></span></td>
                                                </tr>
                                                <tr>
                                                    <td><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px; padding-left: 30px">unearned revenue : </p></span></td>
                                                    <td style="border-bottom: 1px solid; padding-right: 5px; padding-top: 5px"><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px; text-align: right" id="listprice"></p></span></td>
                                                </tr>
                                                <tr>
                                                    <td><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px; padding-left: 30px">current portion of long-term debt : </p></span></td>
                                                    <td style="border-bottom: none; padding-right: 5px; padding-top: 5px"><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px; text-align: right" id="listprice"></p></span></td>
                                                </tr>
                                               
                                                <tr>
                                                    <td style="border-bottom: 1px solid"></td>
                                                    <td style="border-bottom: 1px solid"></td>
                                                </tr>
                                                <tr>
                                                    <td><span><p class="text-gray-900 text-uppercase mb-1 font-weight-bold" style="font-size: 12px; padding-left: 20px; font-style: italic;">Total current liabilities : </p></span></td>
                                                    <td style="border-bottom: 1px solid; padding-right: 5px; padding-top: 5px"><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px; text-align: right" id="downpayment"></p></span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <table style="width: 100%; float: left; margin-bottom: 30px"></table>
                                        <table style="width: 30%; float: left">
                                            <tr>
                                                <td><span><p class="text-gray-900 font-weight-bold text-uppercase mb-1" style="font-size: 12px; padding-left: 20px;font-style: italic;">Fixed (long-term) Assets  </p></span></td>
                                              
                                            </tr>
                                            <tr>
                                                <td><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px; padding-left: 30px">long-term investment : </p></span></td>
                                                <td style="border-bottom: 1px solid; padding-right: 5px; padding-top: 5px"><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px; text-align: right" id="listprice"></p></span></td>
                                            </tr>
                                            <tr>
                                                <td><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px; padding-left: 30px">property, plant, and equipment : </p></span></td>
                                                <td style="border-bottom: 1px solid; padding-right: 5px; padding-top: 5px"><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px; text-align: right" id="VAT"></p></span></td>
                                            </tr>
                                            <tr>
                                                <td><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px; padding-left: 30px">(less accumulated depreciation) : </p></span></td>
                                                <td style="border-bottom: 1px solid; padding-right: 5px; padding-top: 5px"><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px; text-align: right" id="vatSubtotal"></p></span></td>
                                            </tr>
                                            <tr>
                                                <td><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px; padding-left: 30px">intangible assets : </p></span></td>
                                                <td style="border-bottom: 1px solid; padding-right: 5px; padding-top: 5px"><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px; text-align: right" id="PCF"></p></span></td>
                                            </tr>
                                           
                                            <tr>
                                                <td style="border-bottom: 1px solid"></td>
                                            </tr>
                                            <tr>
                                                <td><span><p class="text-gray-900 text-uppercase mb-1 font-weight-bold" style="font-size: 12px; padding-left: 30px; font-style: italic;">Total fixed asset : </p></span></td>
                                                <td style="border-bottom: 1px solid; padding-right: 5px; padding-top: 5px"><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px; text-align: right" id="downpayment"></p></span></td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                        <table style="width: 40%; float: right">
                                            <tbody>
                                                <tr>
                                                    <td><span><p class="text-gray-900 font-weight-bold text-uppercase mb-1" style="font-size: 12px; padding-left: 20px;font-style: italic;">Long-term liabilities  </p></span></td>
                                                  
                                                </tr>
                                                <tr>
                                                    <td><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px; padding-left: 30px">long-term debt : </p></span></td>
                                                    <td style="border-bottom: 1px solid; padding-right: 5px; padding-top: 5px"><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px; text-align: right" id="listprice"></p></span></td>
                                                </tr>
                                                <tr>
                                                    <td><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px; padding-left: 30px">deferred Income tax : </p></span></td>
                                                    <td style="border-bottom: 1px solid; padding-right: 5px; padding-top: 5px"><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px; text-align: right" id="listprice"></p></span></td>
                                                </tr>
                                                <tr>
                                                    <td><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px; padding-left: 30px">Income Taxes payable : </p></span></td>
                                                    <td style="border-bottom: 1px solid; padding-right: 5px; padding-top: 5px"><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px; text-align: right" id="listprice"></p></span></td>
                                                </tr>
                                                <tr>
                                                    <td><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px; padding-left: 30px">other : </p></span></td>
                                                    <td style="border-bottom: none; padding-right: 5px; padding-top: 5px"><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px; text-align: right" id="listprice"></p></span></td>
                                                </tr>
                                               
                                                <tr>
                                                    <td style="border-bottom: 1px solid"></td>
                                                    <td style="border-bottom: 1px solid"></td>
                                                </tr>
                                                <tr>
                                                    <td><span><p class="text-gray-900 text-uppercase mb-1 font-weight-bold" style="font-size: 12px; padding-left: 20px; font-style: italic;">Total Long-term liabilities : </p></span></td>
                                                    <td style="border-bottom: 1px solid; padding-right: 5px; padding-top: 5px"><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px; text-align: right" id="downpayment"></p></span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <table style="width: 100%; float: left; margin-bottom: 30px"></table>
                                        <table style="width: 30%; float: left">
                                            <tr>
                                                <td><span><p class="text-gray-900 font-weight-bold text-uppercase mb-1" style="font-size: 12px; padding-left: 20px;font-style: italic;">Other Assets  </p></span></td>
                                              
                                            </tr>
                                            <tr>
                                                <td><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px; padding-left: 30px">Deferred Income Tax : </p></span></td>
                                                <td style="border-bottom: 1px solid; padding-right: 5px; padding-top: 5px"><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px; text-align: right" id="listprice"></p></span></td>
                                            </tr>
                                            <tr>
                                                <td><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px; padding-left: 30px">Other : </p></span></td>
                                                <td style="border-bottom: 1px solid; padding-right: 5px; padding-top: 5px"><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px; text-align: right" id="VAT"></p></span></td>
                                            </tr>
                                            <tr>
                                                <td style="border-bottom: 1px solid"></td>
                                            </tr>
                                            <tr>
                                                <td><span><p class="text-gray-900 text-uppercase mb-1 font-weight-bold" style="font-size: 12px; padding-left: 30px; font-style: italic;">Total other asset : </p></span></td>
                                                <td style="border-bottom: 1px solid; padding-right: 5px; padding-top: 5px"><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px; text-align: right" id="downpayment"></p></span></td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                    
                                        <table style="width: 40%; float: right">
                                            <tbody>
                                                <tr>
                                                    <td><span><p class="text-gray-900 font-weight-bold text-uppercase mb-1" style="font-size: 12px; padding-left: 20px;font-style: italic;">Owner's Equity  </p></span></td>
                                                  
                                                </tr>
                                                <tr>
                                                    <td><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px; padding-left: 30px">Owner's Investment : </p></span></td>
                                                    <td style="border-bottom: 1px solid; padding-right: 5px; padding-top: 5px"><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px; text-align: right" id="listprice"></p></span></td>
                                                </tr>
                                                <tr>
                                                    <td><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px; padding-left: 30px">Retained Earnings : </p></span></td>
                                                    <td style="border-bottom: 1px solid; padding-right: 5px; padding-top: 5px"><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px; text-align: right" id="listprice"></p></span></td>
                                                </tr>
                                                <tr>
                                                    <td><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px; padding-left: 30px">other : </p></span></td>
                                                    <td style="border-bottom: none; padding-right: 5px; padding-top: 5px"><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px; text-align: right" id="listprice"></p></span></td>
                                                </tr>
                                               
                                                <tr>
                                                    <td style="border-bottom: 1px solid"></td>
                                                    <td style="border-bottom: 1px solid"></td>
                                                </tr>
                                                <tr>
                                                    <td><span><p class="text-gray-900 text-uppercase mb-1 font-weight-bold" style="font-size: 12px; padding-left: 20px; font-style: italic;">Total Owner's Equity : </p></span></td>
                                                    <td style="border-bottom: 1px solid; padding-right: 5px; padding-top: 5px"><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px; text-align: right" id="downpayment"></p></span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                       
                                        <table style="width: 100%; ">
                                            <tr>
                                                <td style="width: 100%; float: left; padding: 20px 0px">
                                                    <span><p class="text-white font-weight-normal text-uppercase mb-1 bg-sedge-primary-color " style="font-size: 16px; padding-left: 20px; padding-top: 3px;padding-bottom: 3px">summary</p></span>
                                                </td>
                                            </tr>
                                        </table>
                                        <table style="width: 30%; float: left">
                                            <tbody>
                                                <tr>
                                                    <td><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px; padding-left: 20px">total liabilities and owner's equity : </p></span></td>
                                                    <td style="border-bottom: 1px solid; padding-right: 5px"><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px; text-align: right" id="terms"></p></span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        
                                        <table style="width: 100%; ">
                                            <tr>
                                                <td style="width: 50%; float: left; padding: 20px 0px">
                                                    <span><p class="text-white font-weight-normal text-uppercase mb-1 bg-sedge-primary-color " style="font-size: 16px; padding-left: 20px; padding-top: 3px;padding-bottom: 3px">common financial ratios</p></span>
                                                </td>
                                            </tr>
                                        </table>
                                        <table style="width: 50%; float: left">
                                            <tbody>
                                                <tr>
                                                    <td><span><p class="text-gray-900 text-uppercase mb-1 font-weight-normal" style="font-size: 12px; padding-left: 20px;  font-style: italic;"><strong>Debt Ratio</strong> (total liabilities / total) : </p></span></td>
                                                    <td style="border-bottom: 1px solid; padding-right: 5px"><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px; text-align: right" id="terms"></p></span></td>
                                                </tr>
                                                <tr>
                                                    <td><span><p class="text-gray-900 text-uppercase mb-1 font-weight-normal" style="font-size: 12px; padding-left: 20px; font-style: italic;"><strong>current Ratio</strong> (current assets / current liabilities) : </p></span></td>
                                                    
                                                    <td style="border-bottom: 1px solid; padding-right: 5px; padding-top: 5px"><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px; text-align: right" id="listprice"></p></span></td>
                                                </tr>
                                                <tr>
                                                    <td><span><p class="text-gray-900 text-uppercase mb-1 font-weight-normal" style="font-size: 12px; padding-left: 20px; font-style: italic;"><strong>working capital</strong>(current assets - current liabilities) : </p></span></td>
                                                  
                                                    <td style="border-bottom: 1px solid; padding-right: 5px; padding-top: 5px"><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px; text-align: right" id="VAT"></p></span></td>
                                                </tr>
                                                <tr>
                                                    <td><span><p class="text-gray-900 text-uppercase mb-1 font-weight-normal" style="font-size: 12px; padding-left: 20px; font-style: italic;"><strong>asset-to-equity ratio</strong> (total assets / owner's equity): </p></span></td>
                                                   
                                                    <td style="border-bottom: 1px solid; padding-right: 5px; padding-top: 5px"><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px; text-align: right" id="vatSubtotal"></p></span></td>
                                                </tr>
                                                <tr>
                                                    <td><span><p class="text-gray-900 text-uppercase mb-1 font-weight-normal" style="font-size: 12px; padding-left: 20px; font-style: italic;"><strong>debt-to-equity ratio</strong> (total liabilities / owner's equity) : </p></span></td>
                                                  
                                                    <td style="border-bottom: none; padding-right: 5px; padding-top: 5px"><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px; text-align: right" id="downpayment"></p></span></td>
                                                </tr>
                                                <tr>
                                                    <td style="border-bottom: 1px solid"></td>
                                                    <td style="border-bottom: 1px solid"></td>
                                                </tr>
                                                <tr>
                                                    <td><span><p class="text-gray-900 text-uppercase mb-1 font-weight-bold" style="font-size: 12px; padding-left: 20px; font-style: italic;">TOtal Taxes Expenses :  </p></span></td>
                                                    <td style="border-bottom: 1px solid; padding-right: 5px; padding-top: 5px"><span><p class="text-gray-900 text-uppercase mb-1 " style="font-size: 12px; text-align: right" id="downpayment"></p></span></td>
                                                </tr>
                                               
                                            </tbody>
                                        </table>
                                        
                                        
                                        
                                </div>
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
   
</body>

</html>

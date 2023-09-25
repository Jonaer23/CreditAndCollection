<?php
// Start the session (if not already started)
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
include 'connection1.php';
// Check if the user is authenticated (you may have your own authentication logic)
if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true) {
    // Redirect the user to the login page if not authenticated
    header("Location: index.php");
    exit;
}

// You can now safely use the session variables
$username = $_SESSION['Username'];
$Name = $_SESSION['Fullname'];
  if(isset($_SESSION['Access']) && $_SESSION['Access'] == "Admin"  && $_SESSION['Department'] == "SedgeMarketing" && $_SESSION['Position'] == "Programmer") {
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

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

    .table-cell {
        white-space: nowrap;
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

    .bg-sedge-primary-color {
        background-color: #003459;
        color: #ffffff;
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
        padding: 15px 20px;
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
    .button-container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    
    .download-button {
      background-color: transparent;
      color: blue;
      border: none;
      border-radius: 5px;
      padding: 3px 5px;
      cursor: pointer;
      display: inline-block;
      text-align: center;
      text-decoration: none;
      font-size: 16px;
      text-align: center;
    }
    
    .download-icon::before {
      content: "\f019"; /* Unicode for the download icon */
      font-family: FontAwesome; /* Make sure you have the FontAwesome library linked */
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
                <a class="nav-link" href="sales_appointment.php">
                    <i class="fas fa fa-ticket"></i></i>
                    <span>Appointment</span></a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="sales_Reservation.php">
                    <i class="fas fa-calendar-check"></i></i>
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
                <a class="nav-link" href="FORM.Validation_SalesPurchasingRequest.php">
                    <i class="fas fa-paper-plane"></i></i>
                    <span>Request Form</span></a>
            </li>

            <li class="nav-item ">
                <a class="nav-link" href="ChartSales.php">
                    <i class="fas fa-fw fa fa-area-chart"></i></i>
                    <span>Chart</span></a>
            </li>
                <li class="nav-item ">
                <a class="nav-link" href="#">
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

                    <!-- Page Heading -->
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary"></h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive" style="color: #4a4949 ">
                                <table class="table table-bordered" id="dataTable1" width="100%" cellspacing="0">
                                    <thead>
                                        <tr class="header"
                                            style="color: #ffffff; background-color: #007ea7;font-size: 13px; ">

                                            <th scope="col" style="width: 2%"></th>
                                            <th scope="col" style="width: 2%"></th>
                                            <th scope="col" style="width: 16%">Customer Code</th>
                                            <th scope="col" style="width: 16%">Name</th>
                                            <th scope="col" style="width: 9%" hidden>Date</th>
                                            <th scope="col" style="width: 20%">Lot Description</th>
                                            <th scope="col" style="width: 15%">TCP</th>
                                            <th scope="col" style="width: 8%" hidden>Terms</th>
                                            <th scope="col" style="width: 12%">Status</th>


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
                                        <tr style="color: #ffffff; background-color: #007ea7;font-size: 13px; ">
                                            <th scope="col" style="width: 2%"></th>
                                            <th scope="col" style="width: 2%"></th>
                                            <th scope="col">Customer Code</th>
                                            <th scope="col">Name</th>
                                            <th scope="col" hidden>Date</th>
                                            <th scope="col">Lot Description</th>
                                            <th scope="col">TCP</th>
                                            <th scope="col" hidden>Terms</th>
                                            <th scope="col" style="width: 12%">Status</th>
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
                                        $sales_query = "SELECT * FROM tbl_ledger LEFT JOIN buyersinformationsheet ON tbl_ledger.customerCode =  buyersinformationsheet.customerCode WHERE tbl_ledger.status=? OR tbl_ledger.status=?";
                                        $sales_statement = mysqli_prepare($connection, $sales_query);

                                        // Bind parameters using prepared statements
                                        $statusVerified = "Active";
                                        $statusPending = "Pending";
                                        mysqli_stmt_bind_param($sales_statement, "ss", $statusVerified, $statusPending);

                                        // Execute the prepared statement
                                        mysqli_stmt_execute($sales_statement);

                                        // Get the result
                                        $sales_result = mysqli_stmt_get_result($sales_statement);

                                        if (mysqli_num_rows($sales_result) > 0) {
                                            while ($row = mysqli_fetch_assoc($sales_result)) {
                                                // Set status color and icon based on $row['status1']
                                                $statusColor = '';
                                                $statusIcon = '';
                                                $isDownloadHidden = false;
                                        switch ($row['status']) {
                                            case 'Active':
                                                $statusColor = '#008000';
                                                $statusIcon = 'fas fa-circle';
                                                $isDownloadHidden = false;
                                            break;
                                            case 'Pending':
                                                $statusColor = '#FFBF00';
                                                $statusIcon = 'fas fa-exclamation-circle';
                                                $isDownloadHidden = true;
                                                break;
                                                
                                            case 'Verified':
                                                $statusColor = 'green';
                                                $statusIcon = 'fas fa-check';
                                                $isDownloadHidden = false;
                                                break;
                                            case 'Declined':
                                                $statusColor = 'red';
                                                $statusIcon = 'fas fa-times';
                                                $isDownloadHidden = true;
                                            break;
                                                // Add more cases for other status values if needed
                                            }
                                        
                                        ?>
                                        <tr style="color: #4a4949; font-size: 13px">
                                            <td class="id" name="id" hidden><?=$row['id']?></td>
                                            <td class="table-cell"><?php if (!$isDownloadHidden): ?>
                                                <a id="downloadButton" href="#"
                                                    style="float: right; margin-right: 10px;" data-toggle="modal"
                                                    data-target="#downloadModal">
                                                    <i class="fas fa-download"></i>
                                                </a>
                                                <?php endif; ?>
                                            </td>
                                            <td class="table-cell">
                                                <a href="#" style="float: right"onclick="toggleModal(this, 1)" data-toggle="modal"data-target="#viewBuyer"><i class="fas fa-eye"></i></a>
                                            </td>
                                            <td class="customerCode table-cell" name="customerCode"style="font-size: 13px;"><?=$row['customerCode']?></td>
                                            <td class="Fullname table-cell" name="Fullname" style="font-size: 13px;"><?=$row['customerName']?></td>
                                            <td class="B_Date table-cell" name="B_Date" style="font-size: 13px;" hidden><?=$row['date_column']?></td>
                                            <td class="LotDescription table-cell" name="LotDescription"style="font-size: 13px;"><?=$row['area']?> <?=$row['phase']?><?=$row['type']?><?=$row['cryptphase']?> <?=$row['cryptlevel']?><?=$row['cryptarea']?></td>
                                            <td class="totalContractPrice table-cell" name="totalContractPrice"><?= '₱ ' . number_format($row['totalContractPrice'], 2, '.', ',') ?></td>
                                            <td class="paymentTerms table-cell" name="paymentTerms" style="font-size: 13px;" hidden><?=$row['lotdescTerms']?></td>
                                            <td class="status text-xs text-uppercase mb-1 table-cell" name="status" id="status" style="font-size: 13px; text-align: center;"><button style="background-color: <?php echo $statusColor; ?>; border-radius: 5px; color: white; text-align: center; border: none; width: 100px;"><?= $row['status'] ?> <i class="<?= $statusIcon ?>"></i></button></td>
                                            <td class="BusinessPhoneFax" name="BusinessPhoneFax" hidden><?=$row['BusinessPhone']?></td>
                                            <td class="ResidentAddress" name="ResidentAddress" hidden><?=$row['R_BlkLot']?>, <?=$row['R_City']?>, <?=$row['R_Province']?>,<?=$row['R_Country']?>, <?=$row['R_Zipcode']?></td>
                                            <td class="ResidentialPhoneno" name="ResidentialPhoneno" hidden><?=$row['Residential_Phone']?></td>
                                            <td class="BillingAddress" name="BillingAddress" hidden><?=$row['B_BlkLot']?>, <?=$row['B_City']?>, <?=$row['B_Province']?>, <?=$row['B_Country']?>, <?=$row['B_Zipcode']?></td>
                                            <td class="IssuedAt" name="IssuedAt" hidden><?=$row['IssuedAt']?></td>
                                            <td class="IssuedOn" name="IssuedOn" hidden><?=$row['IssuedOn']?></td>
                                            <td class="ResidentSince" name="ResidentSince" hidden><?=$row['ResidentSince']?></td>
                                            <td class="M_Phone" name="M_Phone" hidden><?=$row['Mobile_Phone']?></td>

                                            <td class="listPrice" name="listPrice" hidden><?= '₱ ' . number_format($row['lotListPrice'], 2, '.', ',') ?></td>
                                            <td class="VAT" name="VAT" hidden><?=$row['VAT']?></td>
                                            <td class="subtotalTAX" name="subtotalTAX" hidden><?='₱ ' . number_format($row['subtotaltax'], 2, '.', ',')?></td>
                                            <td class="PCF" name="PCF" hidden><?= '₱ ' . number_format($row['PCF'], 2, '.', ',') ?></td>
                                            <td class="discount" name="discount" hidden><?=$row['discount']?></td>
                                            <td class="subtotaDiscount" name="subtotaDiscount" hidden><?='₱ ' . number_format($row['subtotalDiscount'], 2, '.', ',') ?></td>
                                            <td class="downpayment" name="downpayment" hidden><?='₱ ' . number_format($row['dpPercentage2'], 2, '.', ',')?></td>
                                            <td class="fullDownpayment" name="fullDownpayment" hidden><?='₱ ' . number_format($row['balance'], 2, '.', ',')?></td>
                                            <td class="lot_id1" name="lot_id1" hidden><?=$row['lotID']?></td>
                                            <td class="lot_block1" name="lot_block1" hidden><?=$row['block']?></td>
                                            <td class="lot_section1" name="lot_section1" hidden><?=$row['section']?></td>
                                            <td class="lot_no1" name="lot_no1" hidden><?=$row['lotNo']?></td>
                                            <td class="lot_area1" name="lot_area1" hidden><?=$row['area']?></td>
                                            <td class="lot_phase1" name="lot_phase1" hidden><?=$row['phase']?></td>
                                            <td class="lot_type1" name="lot_type1" hidden><?=$row['type']?></td>
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
                                     <table class="table table-bordered" style="border:none; width: 100%"
                                                cellspacing="0">
                                                <tbody>
                                                   
                                                    <tr>
                                                        <td style="font-size: 10px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; text-align: center; border:none;"><img src="img/SouthSpring.png"></img></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-size: 25px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; text-align: center; border:none; background: radial-gradient(darkorange, orange); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Centennial <img src="img/centenial.png"/> Garden <br></td>
                                                    </tr>
                                                    <br>
                                                    <br>
                                                </tbody>
                                            </table>
                                    <table class="table"
                                        style="width: 40%;border: none;color:#4a4949; padding: 5px; float: left;"
                                        cellspacing="0">

                                        <tr style="border: 2px solid #e3e6f0; background-color: #007ea7">
                                            <th colspan="4" style="color:#ffffff">Personal Information</th>
                                        </tr>
                                        <tr style="border: none; padding-bottom: 0px">
                                            <td style="width: 15%; border: none; padding-bottom: 0px;">
                                                <p style="color:#4a4949; font-size: 15px">Customer Code :</p>
                                            </td>
                                            <td style="width: 20%; border: none; padding-bottom: 0px">
                                            <p id="customerCode1" name="customerCode1" style="color:#4a4949; font-size: 15px;"></p>
                                            </td>
                                        </tr>

                                        <tr style="border: none; padding-bottom: 0px">
                                            <td style="width: 15%; border: none; padding-bottom: 0px">
                                                <p style="color:#4a4949; font-size: 15px"> Customer Name :</p>
                                            </td>
                                            <td style="width: 20%; border: none; padding-bottom: 0px">
                                                <p id="Fullname1" name="Fullname1"
                                                    style="color:#4a4949; font-size: 15px"></p>
                                            </td>
                                        </tr>

                                        <tr style="border: none; padding-bottom: 0px">
                                            <td style="width: 15%; border: none; padding-bottom: 0px">
                                                <p style="color:#4a4949; font-size: 15px">Reserved Date :</p>
                                            </td>
                                            <td style="width: 20%; border: none; padding-bottom: 0px">
                                                <p id="date1" name="date1" style="color:#4a4949; font-size: 15px">
                                                    </p>
                                            </td>
                                        </tr>
                                    </table>
                                    <table class="table"
                                        style="width: 55%;border: 2px solid #e3e6f0;color:#4a4949; padding: 5px; float: right;"
                                        cellspacing="0">

                                        <tr style="border: 2px solid #e3e6f0; background-color: #007ea7">
                                            <th colspan="4" style="color:#ffffff">Payment Information</th>
                                        </tr>

                                        <tr style="border: none; padding-bottom: 0px">
                                            <td style="width: 15%; border: none; padding-bottom: 0px">
                                                <p style="color:#4a4949; font-size: 15px">Payment Terms :</p>
                                            </td>
                                            <td style="width: 20%; border: none; padding-bottom: 0px">
                                                <p id="paymentTerms" name="paymentTerms"
                                                    style="color:#4a4949; font-size: 15px"></p>
                                            </td>
                                        </tr>
                                        <tr style="border: none; padding-bottom: 0px">
                                            <td style="width: 15%; border: none; padding-bottom: 0px">
                                                <p style="color:#4a4949; font-size: 15px">List Price :</p>
                                            </td>
                                            <td style="width: 20%; border: none; padding-bottom: 0px">
                                                <p id="listPrice" name="listPrice"
                                                    style="color:#4a4949; font-size: 15px"></p>
                                            </td>
                                        </tr>

                                        <tr style="border: none; padding-bottom: 0px">
                                            <td style="width: 15%; border: none; padding-bottom: 0px">
                                                <p style="color:#4a4949; font-size: 15px">Value Added Tax (_)% :</p>
                                            </td>
                                            <td style="width: 20%; border: none; padding-bottom: 0px">
                                                <p id="VAT" name="VAT"
                                                    style="color:#4a4949; font-size: 15px"></p>
                                            </td>
                                        </tr>

                                        <tr style="border: none; padding-bottom: 0px">
                                            <td style="width: 15%; border: none; padding-bottom: 0px">
                                                <p style="color:#4a4949; font-size: 15px">Subtotal :</p>
                                            </td>
                                            <td style="width: 20%; border: none; padding-bottom: 0px">
                                                <p id="subtotalTAX" name="subtotalTAX" style="color:#4a4949; font-size: 15px">
                                                    </p>
                                            </td>
                                        </tr>

                                        <tr style="border: none; padding-bottom: 0px">
                                            <td style="width: 15%; border: none; padding-bottom: 0px">
                                                <p style="color:#4a4949; font-size: 15px">Perpetual Care Funds :</p>
                                            </td>
                                            <td style="width: 20%; border: none; padding-bottom: 0px">
                                                <p id="PCF" name="PCF" style="color:#4a4949; font-size: 15px">
                                                    </p>
                                            </td>
                                        </tr>

                                        <tr style="border: none; padding-bottom: 0px">
                                            <td style="width: 15%; border: none; padding-bottom: 0px">
                                                <p style="color:#4a4949; font-size: 15px">Less Discount :</p>
                                            </td>
                                            <td style="width: 20%; border: none; padding-bottom: 0px">
                                                <p id="discount" name="discount" style="color:#4a4949; font-size: 15px">
                                                    </p>
                                            </td>
                                        </tr>

                                        <tr style="border: none; padding-bottom: 0px">
                                            <td style="width: 15%; border: none; padding-bottom: 0px">
                                                <p style="color:#4a4949; font-size: 15px">Subtotal :</p>
                                            </td>
                                            <td style="width: 20%; border: none; padding-bottom: 0px">
                                                <p id="subtotaDiscount" name="subtotaDiscount" style="color:#4a4949; font-size: 15px">
                                                    </p>
                                            </td>
                                        </tr>

                                        <tr style="border: none; padding-bottom: 0px">
                                            <td style="width: 15%; border: none; padding-bottom: 0px">
                                                <p style="color:#4a4949; font-size: 15px">Total Contract Price :</p>
                                            </td>
                                            <td style="width: 20%; border: none; padding-bottom: 0px">
                                                <p id="totalContractPrice" name="totalContractPrice" style="color:#4a4949; font-size: 15px">
                                                    </p>
                                            </td>
                                        </tr>

                                        <tr style="border: none; padding-bottom: 0px">
                                            <td style="width: 15%; border: none; padding-bottom: 0px">
                                                <p style="color:#4a4949; font-size: 15px">Downpayment :</p>
                                            </td>
                                            <td style="width: 20%; border: none; padding-bottom: 0px">
                                                <p id="downpayment" name="downpayment" style="color:#4a4949; font-size: 15px">
                                                    </p>
                                            </td>
                                        </tr>

                                        <tr style="border: none; padding-bottom: 0px">
                                            <td style="width: 15%; border: none; padding-bottom: 0px">
                                                <p style="color:#4a4949; font-size: 15px">Full downpayment :</p>
                                            </td>
                                            <td style="width: 20%; border: none; padding-bottom: 0px">
                                                <p id="fullDownpayment" name="fullDownpayment" style="color:#4a4949; font-size: 15px">
                                                    </p>
                                            </td>
                                        </tr>
                                    </table>
                                    <table class="table"
                                        style="width: 40%;border: none;color:#4a4949; padding: 5px; float: left;"
                                        cellspacing="0">

                                        <tr style="border: 2px solid #e3e6f0; background-color: #007ea7">
                                            <th colspan="4" style="color:#ffffff">Lot Information</th>
                                        </tr>
                                        <tr style="border: none; padding-bottom: 0px">
                                            <td style="width: 15%; border: none; padding-bottom: 0px">
                                                <p style="color:#4a4949; font-size: 15px">Lot ID :</p>
                                            </td>
                                            <td style="width: 20%; border: none; padding-bottom: 0px">
                                                <p id="lot_id1" name="lot_id1" style="color:#4a4949; font-size: 15px">1
                                                </p>
                                            </td>
                                        </tr>

                                        <tr style="border: none; padding-bottom: 0px">
                                            <td style="width: 15%; border: none; padding-bottom: 0px">
                                                <p style="color:#4a4949; font-size: 15px">Block :</p>
                                            </td>
                                            <td style="width: 20%; border: none; padding-bottom: 0px">
                                                <p id="lot_block1" name="lot_block1"
                                                    style="color:#4a4949; font-size: 15px">12</p>
                                            </td>
                                        </tr>

                                        <tr style="border: none; padding-bottom: 0px">
                                            <td style="width: 15%; border: none; padding-bottom: 0px">
                                                <p style="color:#4a4949; font-size: 15px">Section :</p>
                                            </td>
                                            <td style="width: 20%; border: none; padding-bottom: 0px">
                                                <p id="lot_section1" name="lot_section1"
                                                    style="color:#4a4949; font-size: 15px">Centenial Garden</p>
                                            </td>
                                        </tr>

                                        <tr style="border: none; padding-bottom: 0px">
                                            <td style="width: 15%; border: none; padding-bottom: 0px">
                                                <p style="color:#4a4949; font-size: 15px">Number of lot :</p>
                                            </td>
                                            <td style="width: 20%; border: none; padding-bottom: 0px">
                                                <p id="lot_no1" name="lot_no1" style="color:#4a4949; font-size: 15px">5
                                                </p>
                                            </td>
                                        </tr>

                                        <tr style="border: none; padding-bottom: 0px">
                                            <td style="width: 15%; border: none; padding-bottom: 0px">
                                                <p style="color:#4a4949; font-size: 15px">Area :</p>
                                            </td>
                                            <td style="width: 20%; border: none; padding-bottom: 0px">
                                                <p id="lot_area1" name="lot_area1"
                                                    style="color:#4a4949; font-size: 15px">Lawn lot</p>
                                            </td>
                                        </tr>

                                        <tr style="border: none; padding-bottom: 0px">
                                            <td style="width: 15%; border: none; padding-bottom: 0px">
                                                Phase :
                                            </td>
                                            <td style="width: 20%; border: none; padding-bottom: 0px">
                                                <p id="lot_phase1" name="lot_phase1"
                                                    style="color:#4a4949; font-size: 15px">Phase II</p>
                                            </td>
                                        </tr>

                                        <tr style="border: none; padding-bottom: 0px">
                                            <td style="width: 15%; border: none; padding-bottom: 0px">
                                                <p style="color:#4a4949; font-size: 15px">Type / Class :</p>
                                            </td>
                                            <td style="width: 20%; border: none; padding-bottom: 0px">
                                                <p id="lot_type1" name="lot_type1"
                                                    style="color:#4a4949; font-size: 15px">Supreme</p>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div style="width: 100%; float: left;">
                                    <table class="table" style="border: 2px solid #e3e6f0; color:#4a4949;"
                                        cellspacing="0">

                                        <tr style="border: 2px solid #e3e6f0; background-color: #007ea7">
                                            <th colspan="2" style="color:#ffffff">Address</th>
                                        </tr>
                                        <tr style="border: none">
                                            <td style="width: 80%">
                                                Resident Address
                                                <input type="text" class="form-control"
                                                    style="border:none; padding-left: 10px; background-color: #E0F1FD;   font-size: 13px;color:#4a4949;"
                                                    id="ResidentAddress" name="ResidentAddress" readonly>
                                            </td>
                                            <td>
                                                Residential Phone no.
                                                <input type="text" class="form-control"
                                                    style="border:none; padding-left: 10px; background-color: #E0F1FD;   font-size: 13px;color:#4a4949;"
                                                    id="ResidentialPhoneno" name="ResidentialPhoneno" readonly>
                                            </td>
                                        </tr>

                                        <tr style="border: none">
                                            <td style="width: 80%">
                                                Billing Address
                                                <input type="text" class="form-control"
                                                    style="border:none;padding-left: 10px; background-color: #E0F1FD;   font-size: 13px;color:#4a4949;"
                                                    id="BillingAddress" name="BillingAddress" readonly>
                                            </td>
                                            <td>
                                                Mobile Phone no.
                                                <input type="text" class="form-control"
                                                    style="border:none; padding-left: 10px; background-color: #E0F1FD;   font-size: 13px;color:#4a4949;"
                                                    id="MobilePhoneno" name="MobilePhoneno" readonly>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div style="width: 100%; float: right;">
                                    <table class="table" style="border: 2px solid #e3e6f0; color:#4a4949; "
                                        cellspacing="0">
                                        <tr style="border: 2px solid #e3e6f0; background-color: #007ea7">
                                            <th colspan="3" style="color:#ffffff">Community Tax Certificate
                                                No.</th>
                                        </tr>
                                        <tr style="border: none">
                                            <td style="border: none; width: 35%">Issued At
                                                <input type="text" class="form-control"
                                                    style="border:none;  background-color: #E0F1FD;   font-size: 13px;color:#4a4949;"
                                                    id="IssuedAt" name="IssuedAt" readonly>
                                            </td>
                                            <td style="border: none; width: 35%">
                                                Resident Since
                                                <br> <input type="text" class="form-control"
                                                    style="border:none; background-color: #E0F1FD;   font-size: 13px;color:#4a4949;"
                                                    id="ResidentSince" name="ResidentSince" readonly>
                                            </td>
                                            <td style="border: none; width: 35%">
                                                Issued On
                                                <br> <input type="text" class="form-control"
                                                    style="border:none;  background-color: #E0F1FD;   font-size: 13px;color:#4a4949;"
                                                    id="IssuedOn" name="IssuedOn" readonly>

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
                    
                        <div class="card-body">
                             <div class="card shadow mb-4 text-uppercase mb-1"  style="color: #333; font-size: 12px; padding: 20px 20px;"  >
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
                                               <p style="text-align: justify;">When engaging in the process of purchasing a lot and associated services,
                                               it is essential to be fully informed about the client agreement terms before proceeding. 
                                               These terms outline the mutual understanding and obligations between the client and the service provider. 
                                               To access these crucial documents, clients can initiate the file download process from the provider's official platform.
                                               By downloading these files, clients gain access to comprehensive information regarding the terms and conditions of the purchase,
                                               including payment schedules, property specifications, service inclusions, timelines, and any associated legal obligations. 
                                               Familiarizing oneself with these documents ensures transparency and facilitates a smooth transaction,
                                               enabling clients to make well-informed decisions and mitigate potential misunderstandings throughout the purchasing process.</p> 
                                                <table class="table table-bordered" style="border:none; width: 100%;color: #333;"
                                                            cellspacing="0">
                                                   <thead>
                                                        <tr>
                                                            <th>No.</th>
                                                            <th>Filename</th>
                                                            <th></th>
                                                        </tr>
                                                   </thead>
                                                  <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Buyer Information Sheet</td>
                                                        <td> <button id="generateButton" class="download-button"> <span class="download-icon"></span></button></td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Purchase Agreement</td>
                                                        <td> <button onclick="downloadPDF()" class="download-button"> <span class="download-icon"></span></button></td>
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

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
    <script src="myscript/sales_fetch_History.js"></script>
<script>
    // Call the dataTables jQuery plugin
    $(document).ready(function() {
    $('#dataTable1').DataTable();
    });
</script>
    <script>
        $(document).ready(function() {
            // Function to trigger PDF generation and download
            function generateAndDownloadPDF() {
                // Send an AJAX request to the PHP script that generates the PDF
                $.ajax({
                    url: 'download.php', // URL to your PHP script
                    type: 'GET',
                    success: function(response) {
                        // The PDF generation is successful
                        console.log(response);
                    },
                    error: function(xhr, status, error) {
                        // Handle errors
                        console.error(error);
                    }
                });
            }

            // Attach click event listener to the button
            const generateButton = document.getElementById('generateButton');
            generateButton.addEventListener('click', generateAndDownloadPDF);
        });
        
    </script>

</body>

</html>
    <?php } else {
  
  header("location: index.php");
 
}?>

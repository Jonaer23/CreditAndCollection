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

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <?php
    $query = "SELECT salesFrom, SUM(lotNo) AS total_value FROM tbl_ledger GROUP BY salesFrom";
    // Execute the query
    $result = $connection->query($query);
    if (!$result) {
        echo "Error executing query: " . $connection->error;
        exit();
    }
    
    $data = array();
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
    
    // Free the result set
    $result->free();
    
    // Convert the data array to JSON format
    $jsonData = json_encode($data);
    ?>

    <script type="text/javascript">
    google.charts.load('current', {
        'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        // Fetch data from the database
        <?php
       
        // Determine the time period (daily, weekly, monthly, quarterly, yearly)
        $timePeriod = 'MONTH'; // Change this as needed
        
        // Query to retrieve data from the database and calculate sales growth
        
        $query = "SELECT
                    DATE_FORMAT(date_column, '%Y-%m-%d') AS date,
                    REPLACE(REPLACE(SUM(REPLACE(totalContractPrice, ',', '')), ',', ''), '₱', '') AS total_sales
                  FROM
                    tbl_ledger
                  GROUP BY
                    DATE_FORMAT(date_column, '%Y-%m-%d')";

        // Modify the query based on the selected time period
        switch ($timePeriod) {
          case 'WEEK':
            $query = "SELECT
                        DATE_FORMAT(date_column, '%x-%v') AS date,
                        REPLACE(REPLACE(SUM(REPLACE(totalContractPrice, ',', '')), ',', ''), '₱', '') AS total_sales
                      FROM
                        tbl_ledger
                      GROUP BY
                        DATE_FORMAT(date_column, '%x-%v')";
            break;
          case 'MONTH':
            $query = "SELECT
                        DATE_FORMAT(date_column, '%Y-%m') AS date,
                        REPLACE(REPLACE(SUM(REPLACE(totalContractPrice, ',', '')), ',', ''), '₱', '') AS total_sales
                      FROM
                        tbl_ledger
                      GROUP BY
                        DATE_FORMAT(date_column, '%Y-%m')";
            break;
          case 'QUARTER':
            $query = "SELECT
                        CONCAT(YEAR(date_column), ' Q', QUARTER(date_column)) AS date,
                        REPLACE(REPLACE(SUM(REPLACE(totalContractPrice, ',', '')), ',', ''), '₱', '') AS total_sales
                      FROM
                        tbl_ledger
                      GROUP BY
                        CONCAT(YEAR(date_column), ' Q', QUARTER(date_column))";
            break;
          case 'YEAR':
            $query = "SELECT
                        YEAR(date_column) AS date,
                        REPLACE(REPLACE(SUM(REPLACE(totalContractPrice, ',', '')), ',', ''), '₱', '') AS total_sales
                      FROM
                       tbl_ledger
                      GROUP BY
                       YEAR(date_column)";
            break;
        }

        // Execute the query
        $result = $connection->query($query);

        // Create the data array
        $data = array(['Date', 'Sales Growth']);

        // Fetch the data and calculate sales growth
        if ($result->num_rows > 0) {
          $previousSales = 0;
          while ($row = $result->fetch_assoc()) {
            $currentSales = (int)$row['total_sales'];
            $salesGrowth = $currentSales - $previousSales;
            $data[] = [$row['date'], $salesGrowth];
            $previousSales = $currentSales;
          }
        }
        
        ?>

        // Convert PHP array to JavaScript array
        var dataArray = <?php echo json_encode($data); ?>;

        // Create the data table
        var data = google.visualization.arrayToDataTable(dataArray);

        // Set chart options
        var options = {
            title: 'Sales Growth',
            
            backgroundColor: 'rgba(255, 99, 132, 0.6)',
            borderColor: 'rgba(255, 99, 132, 1)',
            borderWidth: 2,
            fill: 'origin',
            curveType: 'function',
            responsive: true,
            maintainAspectRatio: false,
            legend: {
                position: 'bottom'
            }
        };

        // Instantiate and draw the chart
        var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
        chart.draw(data, options);
    }
    </script>


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
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            
            <li class="nav-item ">
                <a class="nav-link" href="sales_appointment.php">
                    <i>
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-calendar-plus-fill" viewBox="0 0 16 16">
                          <path d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zM8.5 8.5V10H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V11H6a.5.5 0 0 1 0-1h1.5V8.5a.5.5 0 0 1 1 0z"/>
                        </svg>
                    </i>
                    <span>Appointment</span></a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="sales_Reservation.php">
                    <i class="fas fa-calendar-check"></i></i>
                    <span>Reservation</span></a>
            </li>

            <li class="nav-item ">
                <a class="nav-link" href="FORM.Validation_SalesHistory.php">
                    <i >
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-inboxes-fill" viewBox="0 0 16 16">
                          <path d="M4.98 1a.5.5 0 0 0-.39.188L1.54 5H6a.5.5 0 0 1 .5.5 1.5 1.5 0 0 0 3 0A.5.5 0 0 1 10 5h4.46l-3.05-3.812A.5.5 0 0 0 11.02 1H4.98zM3.81.563A1.5 1.5 0 0 1 4.98 0h6.04a1.5 1.5 0 0 1 1.17.563l3.7 4.625a.5.5 0 0 1 .106.374l-.39 3.124A1.5 1.5 0 0 1 14.117 10H1.883A1.5 1.5 0 0 1 .394 8.686l-.39-3.124a.5.5 0 0 1 .106-.374L3.81.563zM.125 11.17A.5.5 0 0 1 .5 11H6a.5.5 0 0 1 .5.5 1.5 1.5 0 0 0 3 0 .5.5 0 0 1 .5-.5h5.5a.5.5 0 0 1 .496.562l-.39 3.124A1.5 1.5 0 0 1 14.117 16H1.883a1.5 1.5 0 0 1-1.489-1.314l-.39-3.124a.5.5 0 0 1 .121-.393z"/>
                        </svg>
                    </i>
                    <span>Request Interment</span></a>
            </li>
            
            <li class="nav-item ">
                <a class="nav-link" href="Form.Validation_Disinterment_Request.php">
                    <i ><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-journal-plus" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M8 5.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V10a.5.5 0 0 1-1 0V8.5H6a.5.5 0 0 1 0-1h1.5V6a.5.5 0 0 1 .5-.5z"/>
                      <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
                      <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
                    </svg></i>
                    <span>Request Disinterment</span></a>
            </li>
            
            <li class="nav-item ">
                <a class="nav-link" href="FORM.Validation_Reinstatement.php">
                    <i class="fas fa-file-alt"></i></i>
                    <span>Request Reinstatement</span></a>
            </li>

            <li class="nav-item ">
                <a class="nav-link" href="#">
                    <i>
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-house-up-fill" viewBox="0 0 16 16">
                          <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.354-5.854 1.5 1.5a.5.5 0 0 1-.708.708L13 11.707V14.5a.5.5 0 1 1-1 0v-2.793l-.646.647a.5.5 0 0 1-.708-.707l1.5-1.5a.5.5 0 0 1 .708 0Z"/>
                          <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5Z"/>
                          <path d="m8 3.293 4.712 4.712A4.5 4.5 0 0 0 8.758 15H3.5A1.5 1.5 0 0 1 2 13.5V9.293l6-6Z"/>
                        </svg>
                    </i>
                    <span>Request Transfer</span></a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="FORM.Validation_Sales_History.php">
                    <i>
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-clock-history" viewBox="0 0 16 16">
                          <path d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022l-.074.997zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342l-.36.933zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483zm.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535zm-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z"/>
                          <path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0v1z"/>
                          <path d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z"/>
                        </svg>
                    </i>
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
                    <i >
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-graph-up-arrow" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M0 0h1v15h15v1H0V0Zm10 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4.9l-3.613 4.417a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61L13.445 4H10.5a.5.5 0 0 1-.5-.5Z"/>
                        </svg>
                    </i>
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
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <img src="img\SouthSpring.png"
                            width="200" height="60"></img>
                    </form>
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <div class="d-none d-sm-block"></div>
                        <!-- Nav Item - Alerts -->
                       
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
                                                        $query = "SELECT SUM(totalContractPrice) AS monthly_earnings, MONTH(dateCreated) AS earnings_month
                                                        FROM tbl_ledger
                                                        WHERE YEAR(dateCreated) = YEAR(CURRENT_DATE())
                                                        GROUP BY MONTH(dateCreated) DESC LIMIT 1";
                                
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
                                <div class="card border-left-info shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
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
                                                    echo "<div class='h5 mb-0 font-weight-bold text-gray-800'>$pendingRequests REQUEST PENDING</div>";
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
                                                                
                                                                echo "<div class='h5 mb-0 font-weight-bold text-gray-800'>$appointmentDate APPOINTMENTS</div>";
                                                        
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
                            
                                    <!-- Area Chart -->
                                    
                                <div class="card-body">
                                    <div class="card shadow mb-4">
                                        <div class="card-header py-3">
                                            <h6 class="m-0 font-weight-bold text-primary">Growth sales</h6>
                                        </div>
                                        <div class="card-body">
                                            <div id="chart_div" style="width: 100%; height: 300px;"></div>
                                        </div>
                                    </div>
                                </div>

                                
                                    <div class="card shadow mb-4">
                                        <!-- Card Header - Dropdown -->
                                        <div class="card-header py-3">
                                            <h6 class="m-0 font-weight-bold text-primary">Sales Market chart</h6>
                                        </div>
                                        <!-- Card Body -->
                                        <div class="card-body">


                                            <canvas id="myChart" style="text-align: left;"></canvas>

                                            <script>
                                            // Retrieve the data from PHP
                                            var jsonData = <?php echo $jsonData; ?>;

                                            // Create arrays for labels and values
                                            var salesFrom = jsonData.map(function(item) {
                                                return item.salesFrom;
                                            });

                                            var total_value = jsonData.map(function(item) {
                                                return item.total_value;
                                            });


                                            // Sort labels and values based on labels
                                            var sortedData = jsonData.sort(function(a, b) {
                                                return a.salesFrom.localeCompare(b.salesFrom);
                                            });

                                            labels = sortedData.map(function(item) {
                                                return item.salesFrom;
                                            });

                                            values = sortedData.map(function(item) {
                                                return item.total_value;
                                            });

                                            // Create a doughnut chart
                                            var ctx = document.getElementById('myChart').getContext('2d');
                                            var myChart = new Chart(ctx, {
                                                type: 'doughnut',
                                                data: {
                                                    labels: salesFrom,
                                                    legend: {
                                                    position: 'bottom'
                                                    },
                                                    datasets: [{
                                                        data: total_value,
                                                        backgroundColor: ['rgba(255, 99, 132, 0.8)',
                                                            'rgba(144, 238, 144, 1)',
                                                            'rgba(54, 162, 235, 0.8)',
                                                            'rgba(255, 205, 86, 0.8)'
                                                        ],
                                                        borderColor: '#fff',
                                                        borderWidth: 1,
                                                    }]
                                                },
                                                options: {
                                                    responsive: true,
                                                    maintainAspectRatio: false,
                                                    tooltips: {
                                                        enabled: true,
                                                        backgroundColor: 'rgba(0, 0, 0, 0.8)',
                                                        titleFontFamily: 'Arial',
                                                        titleFontSize: 14,
                                                        titleFontColor: '#fff',
                                                        bodyFontFamily: 'Arial',
                                                        bodyFontSize: 12,
                                                        bodyFontColor: '#fff',
                                                        borderColor: 'rgba(255, 255, 255, 0.8)',
                                                        borderWidth: 2,
                                                    },
                                                }

                                            });
                                            </script>


                                        </div>
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
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

    <script>
    $(document).ready(function() {

        $(document).on('click', '.remove-btn', function() {
            $(this).closest('.main-form').remove();
        });

        $(document).on('click', '.add-more-form1', function() {
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
        utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
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

            reader.onload = function(e) {
                $('#blah')
                    .attr('src', e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }


    $("#submit").click(function() {
        var name = $("#Employee_Id").val();
        var str = name;
        $("#Employee_Id").html(str);
    });
    </script>

    <script>
    function addressFunction() {
        if (document.getElementById("same").checked) {

            document.getElementById("PA_HouseNumber").value = document.getElementById("HouseNumber").value;
            document.getElementById("PA_BL").value = document.getElementById("BL").value;
            document.getElementById("PA_St").value = document.getElementById("ST").value;
            document.getElementById("PA_Subdivision").value = document.getElementById("Subdivision").value;
            document.getElementById("PA_District").value = document.getElementById("District").value;
            document.getElementById("PA_City").value = document.getElementById("City").value;
            document.getElementById("PA_Province").value = document.getElementById("Province").value;
            document.getElementById("PA_Country").value = document.getElementById("Country").value;
            document.getElementById("PA_Zipcode").value = document.getElementById("Zipcode").value;
        } else {
            document.getElementById("PA_HouseNumber").value = "";
            document.getElementById("PA_BL").value = "";
            document.getElementById("PA_St").value = "";
            document.getElementById("PA_Subdivision").value = "";
            document.getElementById("PA_District").value = "";
            document.getElementById("PA_City").value = "";
            document.getElementById("PA_Province").value = "";
            document.getElementById("PA_Country").value = "";
            document.getElementById("PA_Zipcode").value = "";
        }
    }
    </script>
      <script>
    $(document).ready(function() {
        // Remove .php extension from the URL
        var currentURL = window.location.href;
        var newURL = currentURL.replace(".php", "");
        history.replaceState(null, null, newURL);
    });
</script>
</body>

</html>
    <?php } else {
  
  header("location: index.php");
 
}?>

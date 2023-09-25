<?php
    session_start();
    include 'connection.php';
    include 'client_session.php';
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    // Access the stored session variable
    $username = $_SESSION['username'];
    $name = $_SESSION['name'];
    $email = $_SESSION['email'];
    ?>
<!doctype html>
<html lang="en">

<head>
    <title>Southspring</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        .button {
        display: inline-block;
        border-radius: 4px;
        width: 70%;
        height: 40px;
        border: none;
        color: white;
        text-align: center;
        font-size: 15px;
        transition: all 0.5s;
        cursor: pointer;
        background-color: #008CBA;
        border: 2px solid #008CBA;
        margin: 0;
        position: absolute;
        top: 105%;
        left: 50%;
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);

    }

    .button span {
        cursor: pointer;
        display: inline-block;
        position: relative;
        transition: 0.5s;

    }

    .button span:after {
        content: '\00bb';
        position: absolute;
        opacity: 0;
        top: 0;
        right: -20px;
        transition: 0.5s;
    }

    .button:hover span {
        padding-right: 25px;




    }

    .button:hover span:after {
        opacity: 1;
        right: 0;

    }
    /* Style for the modal */
   /* Customize the appearance of the notification */
    .notification {
        display: none;
        background-color: #f44336;
        color: white;
        padding: 16px;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
    }

    .notification p {
        margin: 0;
    }

    /* Close button (X symbol) */
    .close {
        float: right;
        font-size: 20px;
        font-weight: bold;
        cursor: pointer;
    }

    .close:hover,
    .close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
    }

    #mobileSlide {
        overflow-x: scroll;
        white-space: nowrap;
    }

    #mobileSlide>div {
        display: inline-block;
    }

    @media (max-width: 576px) {
        .table-responsive {
            overflow-x: auto;
        }
    }

    .dataTables_length label {
        visibility: hidden;
    }
    .overdue-row {
    background-color: red;
    }
    
    .table-cell {
            white-space: nowrap;
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
    .dataTables_info,
    .dataTables_paginate {
      display: none;
    }
    </style>
</head>

<body id="page-top">


    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->

                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <!-- Sidebar Toggle (Topbar) -->
                    <ul class="navbar-nav ml-auto d-md-none rounded-circle mr-3">
                        <li class="nav-item dropdown">
                            <a class="btn btn-link d-md-none rounded-circle mr-3" href="#" id="sidebarToggleDropdown"
                                role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bars"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="sidebarToggleDropdown">
                                <!-- Dropdown Content for Dashboard -->
                                <a class="dropdown-item" href="FORM.Validation_CientDashboard.php">Dashboard</a>
                                <!-- Dropdown Content for Payment Transaction -->
                                <a class="dropdown-item" href="FORM.Validation_CientPaymentTransaction.php">Payment
                                    Transaction</a>
                                <a class="dropdown-item" href="FORM.Validation_clientReinstatement.php">Reinstatement Request</a>
                                 <a class="dropdown-item" href="FORM.Validation_clientBalloonPaymentRequest.php">Balloon Payment Request</a>
                                <!-- Dropdown Content for About Us -->
                                <a class="dropdown-item" href="about_us.php">About Us</a>
                            </div>
                        </li>
                    </ul>

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
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $name; ?></span>
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
                <div class="container-fluid" style="float: left">
                    <div class="card-body" id="mobileSlide">
                        <!-- Total Contract Price -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                                Total Contract Price
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800" style="width:100%">

                                                <?php
                                            // Prepare the query using a prepared statement
                                            $query = "SELECT totalContractPrice AS monthly_earnings
                                                    FROM tbl_ledger
                                                    WHERE customerCode = ?";
                                            $stmt = $connection->prepare($query);
                                            $stmt->bind_param("s", $username);

                                            // Execute the query
                                            $stmt->execute();

                                            // Bind the result
                                            $stmt->bind_result($monthlyEarnings);

                                            // Fetch the result
                                            if ($stmt->fetch()) {
                                                // Format the monthly earnings value
                                                $formattedEarnings = '₱ ' . number_format($monthlyEarnings, 2, '.', ',');

                                                // Display the total contract price
                                                echo "<p>$formattedEarnings</p>";
                                            } else {
                                                echo "<p>₱ 0.00</p>";
                                            }

                                            // Close the statement
                                            $stmt->close();
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
                        <!-- Monthly Payment -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                                Amount Paid
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800" style="width:100%">
                                                <?php
                                                $status = 'Paid';
                                                // Prepare the query using a prepared statement
                                                $query = "SELECT SUM(monthlyInstallment) AS monthly_earnings
                                                        FROM tbl_flatinterest
                                                        WHERE userAccount = ? && status = ?";
                                                $stmt = $connection->prepare($query);
                                                $stmt->bind_param("ss", $username, $status);
                                                
                                                // Execute the query
                                                $stmt->execute();
                                                
                                                // Bind the result
                                                $stmt->bind_result($monthlyEarnings);
                                                
                                                // Fetch the result
                                                if ($stmt->fetch()) {
                                                    if ($monthlyEarnings !== null) {
                                                        // Format the monthly earnings value
                                                        $formattedEarnings = '₱ ' . number_format($monthlyEarnings, 2, '.', ',');
                                                
                                                        // Display the total contract price
                                                        echo "<p>$formattedEarnings</p>";
                                                    } else {
                                                        echo "<p>₱ 0.00 </p>";
                                                    }
                                                } else {
                                                    echo "<p>₱ 0.00</p>";
                                                }
                                                
                                                // Close the statement
                                                $stmt->close();
                                                ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Earning -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                                EARNING (monthly)
                                            </div>
                                            <?php
                                                $totalTasksQuery = "SELECT COUNT(*) AS total_tasks FROM tbl_flatinterest WHERE userAccount = ?";
                                                $completedTasksQuery = "SELECT COUNT(*) AS completed_tasks FROM tbl_flatinterest WHERE userAccount = ? AND status = 'Paid'";
                                                
                                                // Prepare total tasks query
                                                $totalTasksStmt = $connection->prepare($totalTasksQuery);
                                                $totalTasksStmt->bind_param("s", $username);
                                                $totalTasksStmt->execute();
                                                $totalTasksResult = $totalTasksStmt->get_result();
                                                
                                                // Prepare completed tasks query
                                                $completedTasksStmt = $connection->prepare($completedTasksQuery);
                                                $completedTasksStmt->bind_param("s", $username);
                                                $completedTasksStmt->execute();
                                                $completedTasksResult = $completedTasksStmt->get_result();
                                                
                                                if (!$totalTasksResult || !$completedTasksResult) {
                                                    echo "Error executing tasks queries: " . $connection->error;
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
                        <!-- Pending Payment-->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Overdue Payment
                                            </div>
                                                <?php
                                                    $query = "SELECT COUNT(*) AS pending_requests FROM tbl_flatinterest WHERE status = ? AND userAccount = ?";
                                                    $stmt = $connection->prepare($query);
                                                    
                                                    // Check if the statement was prepared successfully
                                                    if ($stmt === false) {
                                                        die('Error in preparing the statement: ' . $connection->error);
                                                    }
                                                    
                                                    $status = 'Overdue'; // Value for the first parameter
                                                    $stmt->bind_param("ss", $status, $username);
                                                    
                                                    // Execute the prepared statement
                                                    if ($stmt->execute()) {
                                                        // Get the result
                                                        $result = $stmt->get_result();
                                                    
                                                        // Check if any rows were returned
                                                        if ($result->num_rows > 0) {
                                                            $row = $result->fetch_assoc();
                                                            $pendingRequests = $row['pending_requests'];
                                                             echo "<p>$pendingRequests</p>";
                                                        } else {
                                                            echo "<p>₱ 0.00</p>";
                                                        }
                                                    } else {
                                                        die('Error executing query: ' . $stmt->error);
                                                    }
                                                    
                                                    // Close the statement and database connection
                                                    $stmt->close();
                                                    $connection->close();
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
                <div class="card-body">
                    <table class="table " cellspacing="0" style="border: solid 1px #007ea7 ;">
                        <tr>
                            <th style="color:#ffffff; background-color:#007ea7; font-size: 14px">
                                PAYMENT TRANSACTION</th>
                        </tr>

                        <tr style="color:#4a4949">
                            <td>

                                <div class="container py-5">
                                    <form id="InsertClientPayment">
                                        <div class="row mb-3">
                                            <div id="notificationContainer"></div>
                                            <div class="col-md-6">
                                                <div style="border-Bottom: solid ">
                                                    <label for="billingDetails" class="form-label">BILLING
                                                        DETAILS</label>
                                                </div>
                                                <br>
                                                <label for="paymentMethod2" class="form-label">Bank Name</label>
                                                <select class="form-control" name="paymentMethod" id="paymentMethod">
                                                    <option disabled selected>-- payment method --</option>
                                                     <option value="BPI">BPI (Bank of the Philippine Islands)</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <label for="billingAccountNumberr1" class="form-label">Account Number</label>
                                                <select class="form-control" name="billingAccountNumber" id="billingAccountNumber">
                                                
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3" Style="padding: 10px 20px; display: none"
                                            id="billingDetails">
                                            <div style="font-size: 13px; border-bottom: solid #ffffff 1px">
                                                <label class="form-label" style="width: 100%">BILLING DETAILS</label>
                                                <br>
                                            </div>
                                             <div class="col-md-6" style="font-size: 11px">
                                                <label for="accountNumber2" class="form-label" style="float: left; width: 40%">Bank Name :</label>
                                                <p style="float: left; width: 55%" id="bankNamedisplay"></p>
                                                <br><br>
                                                <label for="accountHolder" class="form-label" style="float: left; width: 40%">Account Holder :</label>
                                                <button onclick="copyAccountNumber1(event)" class="icon-button" style="float: right; width: 5%; ">
                                                    <i class="fas fa-copy"></i>
                                                </button>
                                                <input style="float: left; width: 55%; background-color: transparent;border:none; color: #4a4949" id="accountHolderdisplay" value="SOUTH SPRING DEVELOPMENT INC"/>
                                                <br><br>
                                                <label for="accountNumber2" class="form-label" style="float: left; width: 40%">Account Number :</label>
                                                <button onclick="copyAccountNumber(event)" class="icon-button" style="float: right; width: 5%">
                                                    <i class="fas fa-copy"></i>
                                                </button>
                                                <input style="float: left; width: 55%; background-color: transparent;border:none; color: #4a4949" id="costumername" value="<?php echo $name; ?>" hidden/>
                                                <input style="float: left; width: 55%; background-color: transparent;border:none; color: #4a4949" id="costumerCode" value="<?php echo $username; ?>" hidden/>
                                                <input style="float: left; width: 55%; background-color: transparent;border:none; color: #4a4949" id="accountNumberdisplay"/>
                                              
                                            </div>
                                        </div>

                                        <div style="border-Bottom: solid ">
                                            <label for="billingDetails" class="form-label">PAYMENT METHOD</label>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <br>
                                                <label for="bankName1" class="form-label">Bank Name</label>
                                                <select class="form-control" name="bankName" id="bankName">
                                                    <option disabled selected>-- payment method --</option>
                                                    <option value="GCash">GCash</option>
                                                    <option value="PayMaya">PayMaya</option>
                                                    <option value="PayPal">PayPal</option>
                                                    <option value="GrabPay">GrabPay</option>
                                                    <option value="BDO">Banco de Oro (BDO)</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <label for="referenceNumber1" class="form-label">Reference
                                                    Number</label>
                                                <input type="text" class="form-control" name="referenceNumber"
                                                    id="referenceNumber">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <label for="accountNumber1" class="form-label">Account Number</label>
                                                <input type="text" class="form-control" name="accountNumber"
                                                    id="accountNumber">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="amount1" class="form-label">Amount</label>
                                                <input type="text" class="form-control" name="amount" id="amount"
                                                    pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency"
                                                    placeholder="Enter amount" required>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col">
                                                <label for="attachment1" class="form-label" style="color: red;">
                                                    * Please provide the supporting documentation for the payment. This
                                                    is for reference purposes only.
                                                </label>
                                                <input type="file" class="form-control" id="attachment"
                                                    name="attachment" style="height: 43px; border-radius: 15px;">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <button class="button" id="proofOfpayment" style="vertical-align: left;"
                                                type="button">
                                                <span>Submit</span>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>

            </div>
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
    </div>
    
        <!-- Scroll to Top Button-->
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
                    <a class="btn btn-primary" href="client_logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <div class="modal" id="loadingModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <img src="uploads/Spinner-1s-200px.gif" alt="Loading...">
                    <p>Loading...</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    
    <!-- Core plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    
    <!-- Page level plugins -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
    
    <!-- Custom scripts -->
    <script src="js/sb-admin-2.min.js"></script>
    
    <!-- Include jQuery and Bootstrap JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script>
       $(document).ready(function() {
            $("#proofOfpayment").click(function() {
                var costumername = $("#costumername").val();
                var costumerCode = $("#costumerCode").val();
                var bankNamedisplay = $("#bankNamedisplay").text();
                var accountHolderdisplay = $("#accountHolderdisplay").val();
                var accountNumberdisplay = $("#accountNumberdisplay").val();
                var bankName = $("#bankName").val();
                var referenceNumber = $("#referenceNumber").val();
                var accountNumber = $("#accountNumber").val();
                var amount = $("#amount").val();
                var transactionNumber = generateTransactionNumber();
                var formData = new FormData(); // Create a FormData object
                formData.append("costumername", costumername);
                formData.append("costumerCode", costumerCode);
                formData.append("bankNamedisplay", bankNamedisplay);
                formData.append("accountHolderdisplay", accountHolderdisplay);
                formData.append("accountNumberdisplay", accountNumberdisplay);
                formData.append("bankName", bankName);
                formData.append("referenceNumber", referenceNumber);
                formData.append("accountNumber", accountNumber);
                formData.append("amount", amount);
                formData.append("attachment", $("#attachment")[0].files[0]); // Append the file
                formData.append("transactionNumber", transactionNumber);
                $.ajax({
                    url: "FORM.Validation_InsertPaymentTransaction.php",
                    type: "POST",
                    data: formData, // Use the FormData object
                    processData: false, // Important: prevent jQuery from processing the data
                    contentType: false, // Important: prevent jQuery from setting the content type
                    success: function(response) {
                        $("#InsertClientPayment")[0].reset(); // Clear the form
                    },
                    error: function(xhr, status, error) {
                        console.log("AJAX Error:", status, error);
                    }
                });
            });
        });
        function generateTransactionNumber() {
            var prefix = "SDCGTR-";
            var randomNumber = Math.floor(Math.random() * 100000000); // Generates a random 8-digit number
            return prefix + randomNumber;
        }

        $(document).ready(function() {
        $('#paymentMethod').change(function() {
            var selectedPaymentMethod = $(this).val();
            $.ajax({
                url: 'Fetch.collectionBankAccount.php',
                method: 'POST',
                data: {
                    paymentMethod: selectedPaymentMethod
                },
                dataType: 'json',
                success: function(response) {
                    var accountNumberSelect = $('#billingAccountNumber');
                    accountNumberSelect.empty();
                    if (response.length === 0) {
                        accountNumberSelect.append($('<option>').text(
                            'No account numbers available'));
                    } else {
                        $.each(response, function(index, accountNumber) {
                            accountNumberSelect.append($('<option>').val(
                                accountNumber).text(accountNumber));
                        });
                    }
                }
            });
        });
    });
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
    }
    // Listen for changes in the payment method dropdown
    document.getElementById("paymentMethod").addEventListener("change", function() {
        updateBillingDetails();
        document.getElementById("accountNumberdisplay").value = "";
    });

    // Listen for changes in the account number dropdown
    document.getElementById("billingAccountNumber").addEventListener("change", function() {
        updateBillingDetails();
    });

    // Update the billing details section based on the selected options
    function updateBillingDetails() {
        var paymentMethod = document.getElementById("paymentMethod").value;
        var accountNumber = document.getElementById("billingAccountNumber").value;

        // Update the displayed information in the billing details section
        document.getElementById("bankNamedisplay").innerText = paymentMethod;
        document.getElementById("accountNumberdisplay").value = accountNumber;

        // Show the billing details section
        document.getElementById("billingDetails").style.display = "block";
    }
    function copyAccountNumber(event) {
        event.preventDefault();

        // Get the accountNumberdisplay element
        var accountNumberElement = document.getElementById("accountNumberdisplay");

        // Create a range object to select the text
        var range = document.createRange();
        range.selectNode(accountNumberElement);

        // Add the range to the user's selection
        window.getSelection().addRange(range);

        // Execute the copy command
        document.execCommand("copy");

        // Clear the selection
        window.getSelection().removeAllRanges();
          // Show tooltip
        
    }
    function copyAccountNumber1(event) {
        event.preventDefault();

        // Get the accountNumberdisplay element
        var accountNumberElement = document.getElementById("accountHolderdisplay");

        // Create a range object to select the text
        var range = document.createRange();
        range.selectNode(accountNumberElement);

        // Add the range to the user's selection
        window.getSelection().addRange(range);

        // Execute the copy command
        document.execCommand("copy");

        // Clear the selection
        window.getSelection().removeAllRanges();
          // Show tooltip
       
    }
    </script>

</body>

</html>


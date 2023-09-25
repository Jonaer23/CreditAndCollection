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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <!-- Add the meta tag for Android Chrome -->
    <meta name="theme-color" content="#ffffff">
    <!-- Add the necessary Bootstrap CSS file -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
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
    .tableHeader{
        padding: 3px 3px;
            color: white;
    }
    .notification p {
        margin: 0;
    }
    .d-none {
        display: none;
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

<body id="page-top" onload="checkAccountStatusAndShowModal()">

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
                                                echo "<p>No monthly earnings found.</p>";
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
                                                // Format the monthly earnings value
                                                $formattedEarnings = '₱ ' . number_format($monthlyEarnings, 2, '.', ',');

                                                // Display the total contract price
                                                echo "<p>$formattedEarnings</p>";
                                            } else {
                                                echo "<p>No monthly earnings found.</p>";
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
                                                            echo "<div class='h5 mb-0 font-weight-bold text-gray-800'>$pendingRequests</div>";
                                                        } else {
                                                            echo "<div class='h5 mb-0 font-weight-bold text-gray-800'>0</div>";
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
                   <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="table-responsive text-left">
                            <table class="table table-bordered" id="dataTablereinstatement">
                                <thead>
                                    <tr class="header" style="color: #ffffff; background-color: #007ea7; font-size: 13px;">
                                        <th scope="col" hidden></th>
                                        <th scope="col" style="color: #ffffff; padding: 3px 30px" class="table-cell  text-xs font-weight-bold  text-uppercase mb-1" >no</th> 
                                        <th scope="col" style="color: #ffffff; padding: 3px 30px" class="table-cell  text-xs font-weight-bold  text-uppercase mb-1">days of delayed</th>
                                        <th scope="col" style="color: #ffffff; padding: 3px 30px" class="table-cell  text-xs font-weight-bold  text-uppercase mb-1">amount paid</th>
                                        <th scope="col" style="color: #ffffff; padding: 3px 30px" class="table-cell  text-xs font-weight-bold  text-uppercase mb-1">reinstatement fee</th>
                                        <th scope="col" style="color: #ffffff; padding: 3px 30px" class="table-cell  text-xs font-weight-bold  text-uppercase mb-1">date</th>
                                    </tr>
                                </thead>
                               
                                <tbody id="paymentTableBody">
                                    <!-- Table rows will be dynamically populated by JavaScript -->
                                </tbody>
                            </table>
                            <br>
                        </div>
                        <div style="float: right;">
                            <button type="button" class="btn btn-success" style="width: 100px; float: right; margin: 20px 20px" data-toggle="modal" data-target="#requestInfomrmation">Request</button>
                        </div>
                        
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
        <!-- End of Content Wrapper -->
   
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
                    <a class="btn btn-primary" href="client_logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="warningModal">
        <div class="modal-dialog">
            <div class="modal-content">
            <!-- Modal Header -->
            <div style=" height: 40px; background-color: #007ea7; padding: 6px 15px; color: white">
                <p style="float: left"><i class="fas fa-exclamation-triangle text-danger"></i> Warning: Account Overdue</p>
                <button type="button"  data-dismiss="modal" style="float: right; background-color: transparent;color: white; border: none;">X</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
            <p><i class="fas fa-exclamation-circle text-danger"></i> Important Notice:</p>
                <div style="font-size: 12px; background-color: #D3D3D3; padding: 15px 15px; margin: 15px 20px">
                <p>As of the payment due date, a penalty of 3% will be applied to the outstanding amount. This penalty will be charged for each day the payment remains overdue.</p>
                 <p> To avoid any additional charges, please make your payment immediately. </p>
                 <p>For any further questions or assistance, please don't hesitate to contact our friendly administrators.
                 Kindly message our Credit and Collection Department through our messaging app. </p>
                 <p>We are here to help you with any concerns you may have. Thank you!</p>
                
                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                
                <!-- You can add additional buttons here if needed -->
            </div>
            </div>
        </div>
    </div>
        
     <!-- requestInfomrmation-->
    <div id="requestInfomrmation" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                </div>
                <div class="modal-body" id="requestinformationDiv">
                    
                    <table class="table " cellspacing="0" style="border: solid 1px #007ea7 ;">
                        <tr>
                            <th style="color:#ffffff; background-color:#007ea7; font-size: 14px">
                                Request Information</th>
                        </tr>

                        <tr style="color:#4a4949">
                            <td>
                                <p style="color: red">NOTE :</p>
                                Reinstatement refers to the process of restoring an account or membership status that was previously terminated due to non-payment or other specified reasons. 
                                In the context of overdue payments, reinstatement entails settling the outstanding amount along with any associated penalties and fees. 
                                In this case, the overdue payment incurs a daily penalty of 3%, adding to the original amount owed. 
                                Additionally, the account holder is subject to an extra charge of 500 pesos for every request frequency made during the period of non-payment. 
                                Moreover, for every 30 days of delay from the date the account was cancelled, an additional 500 pesos is levied. 
                                To regain full account privileges and bring the account up to date, it is essential to promptly address the overdue balance, penalties, and charges 
                                as per the specified terms and conditions of the institution or service provider.
                                <br><br>
                                <label for="termsCheckbox" style="font-size: 10px">
                                    <input type="checkbox" id="termsCheckbox">
                                    I have read and agree to the terms and conditions.
                                </label>
                                
                                <br><br>
                                  <div class="form-group" style="float: right">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                <button id="nextButton" class="btn btn-primary" type="button" data-target="#sendRequestmodal" disabled>Next</button>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="modal-body d-none" id="requestPaymentDiv">
                    <table class="table" cellspacing="0" style="border: solid 1px #007ea7;">
                        <tr>
                            <th style="color:#ffffff; background-color:#007ea7; font-size: 14px">
                                PAYMENT INFORMATION
                            </th>
                        </tr>
                        <tr style="color:#4a4949">
                            <td>
                                Note: The reinstatement fee is a standard requirement for resolving the situation with the amount of outstanding frequency requests and an overdue payment.
                            </td>
                        </tr>
                    </table>
               <?php
               $servername = "localhost";
                $username1 = "centenn1_sedge";
                $password = "@Hanabi16";
                $database = "centenn1_sedge_accountingsoftware";
                
                // Create a connection to the database
                $connection = new mysqli($servername, $username1, $password, $database);
                
                // Check the connection
                if ($connection->connect_error) {
                    die('Connection failed: ' . $connection->connect_error);
                }
                    $query0099 = "SELECT * FROM tbl_flatinterest WHERE reinstatementstatus = ? && userAccount = ? ORDER BY id DESC LIMIT 1 ";
                    $stmt0099 = $connection->prepare($query0099);
                    
                    // Check if the statement was prepared successfully
                    if ($stmt0099 === false) {
                        die('Error in preparing the statement: ' . $connection->error);
                    }
                    
                    $status9898 = '1'; // Value for the first parameter
                    $stmt0099->bind_param("ss", $status9898, $username);
                    
                    // Execute the prepared statement
                    if ($stmt0099->execute()) {
                        // Get the result
                        $result0099 = $stmt0099->get_result();
                    
                        // Check if any rows were returned
                        if ($result0099->num_rows > 0) {
                            $row0099 = $result0099->fetch_assoc();
                            // Computation for other values
                            $amountToBePaid = $row0099['monthlyInstallment']; // Sample value, replace this with your calculation for amount to be paid
                            $overduePenalty = $row0099['penalty']; // Sample value, replace this with your calculation for overdue penalty
                            $frequencyRequestFee = $row0099['reinstatementfee']; // Sample value, replace this with your calculation for frequency request fee
                            $totalAmountToBePaid = $amountToBePaid + $overduePenalty + $frequencyRequestFee;
                            
                            $formattedAmountToBePaid = '₱ ' . number_format($amountToBePaid, 2, '.', ',');
                            $formattedOverduePenalty = '₱ ' . number_format($overduePenalty, 2, '.', ',');
                            $formattedFrequencyRequestFee = '₱ ' . number_format($frequencyRequestFee, 2, '.', ',');
                            $formattedTotalAmountToBePaid = '₱ ' . number_format($totalAmountToBePaid, 2, '.', ',');
                            ?>
                            <table class="table" cellspacing="0" style="border: solid 1px #007ea7;">
                                <tr>
                                    <th style="color:#ffffff; background-color:#007ea7; font-size: 14px" colspan="2">
                                        COMPUTATION
                                    </th>
                                </tr>
                                <tr style="color:#4a4949">
                                    <td>Amount to be Paid :</td>
                                    <td><?php echo $formattedAmountToBePaid; ?></td>
                                </tr>
                                <tr style="color:#4a4949">
                                    <td>Overdue Penalty :</td>
                                    <td><?php echo $formattedOverduePenalty; ?></td>
                                </tr>
                                <tr style="color:#4a4949">
                                    <td>Reinstatement Fee :</td>
                                    <td><?php echo $formattedFrequencyRequestFee; ?></td>
                                </tr>
                                <tr style="color:#4a4949">
                                    <td>Total Amount to be paid :</td>
                                    <td><?php echo $formattedTotalAmountToBePaid; ?></td>
                                </tr>
                            </table>
                            <?php
                        } else {
                            echo "<div class='h5 mb-0 font-weight-bold text-gray-800'>0</div>";
                        }
                    } else {
                        die('Error executing query: ' . $stmt0099->error);
                    }
                    
                    // Close the statement and database connection
                    $stmt0099->close();
                    $connection->close();
                    ?>

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
                                                    <option value="BPI">BPI (Bank of the Philippine Islands)</option>
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
                                            
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col">
                                                 <label for="attachment1" class="form-label" style="color: red; font-size: 12px; text-align: justify">
                                                  NOTE :
                                                </label>
                                                <label for="attachment1" class="form-label" style="color: red; font-size: 11px; margin: 0px 10px">
                                                   Please provide the supporting documentation for the payment. 
                                                    This is for reference purposes only.
                                                </label>
                                                
                                            </div>
                                           
                                            <input type="file" class="form-control" id="attachment"
                                                    name="attachment" style="height: 43px; border-radius: 15px; margin-top: 20px">
                                        </div>
                                        <br>
                                        <div class="form-group" style="float: right">
                                            <button class="btn btn-secondary" type="button" id="backButton" data-dismiss="modal">Cancel</button>
                                            <button class="btn btn-primary" id="proofOfpayment" style="vertical-align: right;"
                                                type="submit">
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>

<!-- Custom scripts -->
<script src="js/sb-admin-2.min.js"></script>
<script src="myscript/Function.clientReinstatement.js"></script>
<script src="myscript/Function.ClientPaymentTransaction.js"></script>
<script src="myscript/Function.ClientOverdueDailyChecking.js"></script>
<script src="myscript/Function.ClientNotificationOverdue.js"></script>

<!-- Include jQuery and Bootstrap JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
<script>
function checkAccountStatusAndShowModal() {
  // Make an AJAX request to your PHP backend to get the account status
  $.ajax({
    type: 'GET',
    url: 'FETCH.Validation_ClientOverdueNotification.php', // Replace with the actual URL to your PHP script
    dataType: 'json',
    success: function(response) {
      // Assuming your PHP script returns the account status in the 'status' field
      const isAccountOverdue = response.status === 'Overdue';
      
      if (isAccountOverdue) {
        // Show the Bootstrap modal
        $('#warningModal').modal('show');
      }
    },
    error: function(error) {
      // Handle any error that occurred during the AJAX request
      console.error('Error:', error);
    }
  });
}

</script>
<script>
    // Get references to the checkbox and the "Next" button
    const termsCheckbox = document.getElementById("termsCheckbox");
    const nextButton = document.getElementById("nextButton");
     const backButton = document.getElementById("backButton");

    // Get references to the current modal and the next modal
    const currentModal = document.getElementById("requestinformationDiv");
    const nextModal = document.getElementById("requestPaymentDiv");

    // Function to check if the checkbox is checked and enable/disable the "Next" button accordingly
    function updateNextButtonStatus() {
        nextButton.disabled = !termsCheckbox.checked;
    }

    // Function to handle the "Next" button click
    function handleNextButtonClick() {
        if (termsCheckbox.checked) {
            // Hide the current modal content
            currentModal.classList.add("d-none");

            // Show the next modal content
            nextModal.classList.remove("d-none");
        }
    }
      // Function to handle the "Next" button click
    function handlebackButtonClick() {
        if (termsCheckbox.checked) {
            // Hide the current modal content
            nextModal.classList.add("d-none");

            // Show the next modal content
            currentModal.classList.remove("d-none");
        }
    }

    // Add a click event listener to the "Next" button
    nextButton.addEventListener("click", handleNextButtonClick);
    backButton.addEventListener("click", handlebackButtonClick);

    // Add an event listener to the checkbox to trigger the update function when its state changes
    termsCheckbox.addEventListener("change", updateNextButtonStatus);

    // Call the update function initially to set the initial state of the "Next" button
    updateNextButtonStatus();

    // Add an event listener to the sendRequestmodal form to close the modal when the form is submitted
    const sendRequestForm = document.getElementById("InsertClientPayment");
    sendRequestForm.addEventListener("submit", function(event) {
        event.preventDefault(); // Prevent form submission (adjust this if you want to handle form submission differently)
        nextModal.classList.add("d-none"); // Hide the next modal content
    });
</script>


  <script>
    $(document).ready(function() {
        $('#paymentMethod').change(function() {
            var selectedPaymentMethod = $(this).val();
            $.ajax({
                url: 'Fetch.BankAccount.php',
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
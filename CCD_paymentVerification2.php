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


        <link href="myCSS/CCD_PaymentVerification.css" rel="stylesheet">
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
                <a class="nav-link" href="CCD_factorrate.php">
                <i class="fas fa-coins"></i></i>
                <span>Factor Rate</span></a>
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
                                                                
                                                                echo "<div class='h5 mb-0 font-weight-bold text-gray-800'>$appointmentDate</div>";
                                                        
                                                            }
                                                        } else {
                                                            echo "<p>No scheduled appointments found for today.</p>";
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
                                                                
                                                                echo "<div class='h5 mb-0 font-weight-bold text-gray-800'>$appointmentDate</div>";
                                                        
                                                            }
                                                        } else {
                                                            echo "<p>No scheduled appointments found for today.</p>";
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
                                                <th scope="col" class="text-xs font-weight-bold text-white text-uppercase mb-1">Customer Code</th>
                                                <th scope="col" class="text-xs font-weight-bold text-white text-uppercase mb-1">Name</th>
                                                <th scope="col" class="text-xs font-weight-bold text-white text-uppercase mb-1">TCP</th>
                                                <th scope="col" class="text-xs font-weight-bold text-white text-uppercase mb-1">Status</th>
                                                <th scope="col"></th>
                                                <th scope="col"></th>
                                                <th scope="col" hidden></th>
                                                <th scope="col" hidden></th>
                                                <th scope="col" hidden></th>
                                                <th scope="col" hidden></th>
                                                <th scope="col" hidden></th>
                                                <th scope="col" hidden></th>
                                                <th scope="col" hidden></th>
                                                <th scope="col" hidden></th>
                                                <th scope="col" hidden></th>
                                                <th scope="col" hidden></th>
                                                <th scope="col" hidden></th>
                                                <th scope="col" hidden></th>
                                                <th scope="col" hidden></th>
                                                <th scope="col" hidden></th>
                                                <th scope="col" hidden></th>
                                                <th scope="col" hidden></th>
                                                <th scope="col" hidden></th>
                                                <th scope="col" hidden></th>
                                                <th scope="col" hidden></th>
                                                <th scope="col" hidden></th>
                                                <th scope="col" hidden></th>
                                                <th scope="col" hidden></th>
                                                <th scope="col" hidden></th>
                                                <th scope="col" hidden></th>

                                                <th scope="col" hidden></th>
                                                <th scope="col" hidden></th>
                                                <th scope="col" hidden></th>
                                                <th scope="col" hidden></th>
                                                <th scope="col" hidden></th>
                                                <th scope="col" hidden></th>
                                                <th scope="col" hidden></th>
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
                                                <td style="font-size: 10px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; text-align: center; border:none;"><img src="img/SouthSpring.png" alt="SouthSpring"></td>
                                            </tr>
                                            <tr>
                                                <td style="font-size: 25px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; text-align: center; border:none; background: radial-gradient(darkorange, orange); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Centennial <img src="img/centenial.png" alt="SouthSpring"> Garden <br></td>
                                            </tr>
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
                                                    <input type="text" id="customerCode1"
                                                        style="color:#4a4949; padding: 0px; margin-top:-7px; font-size: 15px; border:none; background-color: transparent; pointer-events: none;"
                                                        readonly>
                                                </td>
                                            </tr>

                                            <tr style="border: none; padding-bottom: 0px">
                                                <td style="width: 15%; border: none; padding-bottom: 0px">
                                                    <p style="color:#4a4949; font-size: 15px"> Customer Name :</p>
                                                </td>
                                                <td style="width: 20%; border: none; padding-bottom: 0px">
                                                    <input type="text" id="Fullname1"
                                                        style="color:#4a4949; padding: 0px; margin-top:-7px; font-size: 15px; border:none; background-color: transparent; pointer-events: none;"
                                                        readonly>

                                                </td>
                                            </tr>

                                            <tr style="border: none; padding-bottom: 0px">
                                                <td style="width: 15%; border: none; padding-bottom: 0px">
                                                    <p style="color:#4a4949; font-size: 15px">Reserved Date :</p>
                                                </td>
                                                <td style="width: 20%; border: none; padding-bottom: 0px">

                                                    <input type="text" id="date1"
                                                        style="color:#4a4949; padding: 0px; margin-top:-7px; font-size: 15px; border:none; background-color: transparent; pointer-events: none;"
                                                        readonly>

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
                                                    <input type="text" id="paymentTerms"
                                                        style="color:#4a4949; padding: 0px; margin-top:-7px; font-size: 15px; border:none; background-color: transparent; pointer-events: none;"
                                                        readonly>

                                                </td>
                                            </tr>
                                            <tr style="border: none; padding-bottom: 0px">
                                                <td style="width: 15%; border: none; padding-bottom: 0px">
                                                    <p style="color:#4a4949; font-size: 15px">List Price :</p>
                                                </td>
                                                <td style="width: 20%; border: none; padding-bottom: 0px">
                                                    <input type="text" id="listPrice"
                                                        style="color:#4a4949; padding: 0px; margin-top:-7px; font-size: 15px; border:none; background-color: transparent; pointer-events: none;"
                                                        readonly>

                                                </td>
                                            </tr>

                                            <tr style="border: none; padding-bottom: 0px">
                                                <td style="width: 15%; border: none; padding-bottom: 0px">
                                                    <p style="color:#4a4949; font-size: 15px">Value Added Tax (_)% :</p>
                                                </td>
                                                <td style="width: 20%; border: none; padding-bottom: 0px">
                                                    <input type="text" id="VAT"
                                                        style="color:#4a4949; padding: 0px; margin-top:-7px; font-size: 15px; border:none; background-color: transparent; pointer-events: none;"
                                                        readonly>

                                                </td>
                                            </tr>

                                            <tr style="border: none; padding-bottom: 0px">
                                                <td style="width: 15%; border: none; padding-bottom: 0px">
                                                    <p style="color:#4a4949; font-size: 15px">VAT :</p>
                                                </td>
                                                <td style="width: 20%; border: none; padding-bottom: 0px">
                                                    <input type="text" id="subtotalTAX"
                                                        style="color:#4a4949; padding: 0px; margin-top:-7px; font-size: 15px; border:none; background-color: transparent; pointer-events: none;"
                                                        readonly>

                                                </td>
                                            </tr>

                                            <tr style="border: none; padding-bottom: 0px">
                                                <td style="width: 15%; border: none; padding-bottom: 0px">
                                                    <p style="color:#4a4949; font-size: 15px">Perpetual Care Funds :</p>
                                                </td>
                                                <td style="width: 20%; border: none; padding-bottom: 0px">
                                                    <input type="text" id="PCF"
                                                        style="color:#4a4949; padding: 0px; margin-top:-7px; font-size: 15px; border:none; background-color: transparent; pointer-events: none;"
                                                        readonly>

                                                </td>
                                            </tr>

                                            <tr style="border: none; padding-bottom: 0px">
                                                <td style="width: 15%; border: none; padding-bottom: 0px">
                                                    <p style="color:#4a4949; font-size: 15px">Less Discount (%):</p>
                                                </td>
                                                <td style="width: 20%; border: none; padding-bottom: 0px">
                                                    <input type="text" id="discount"
                                                        style="color:#4a4949; padding: 0px; margin-top:-7px; font-size: 15px; border:none; background-color: transparent; pointer-events: none;"
                                                        readonly>

                                                </td>
                                            </tr>

                                            <tr style="border: none; padding-bottom: 0px">
                                                <td style="width: 15%; border: none; padding-bottom: 0px">
                                                    <p style="color:#4a4949; font-size: 15px">Discount :</p>
                                                </td>
                                                <td style="width: 20%; border: none; padding-bottom: 0px">
                                                    <input type="text" id="subtotaDiscount"
                                                        style="color:#4a4949; padding: 0px; margin-top:-7px; font-size: 15px; border:none; background-color: transparent; pointer-events: none;"
                                                        readonly>

                                                </td>
                                            </tr>

                                            <tr style="border: none; padding-bottom: 0px">
                                                <td style="width: 15%; border: none; padding-bottom: 0px">
                                                    <p style="color:#4a4949; font-size: 15px">Total Contract Price :</p>
                                                </td>
                                                <td style="width: 20%; border: none; padding-bottom: 0px">
                                                    <input type="text" id="totalContractPrice"
                                                        style="color:#4a4949; padding: 0px; margin-top:-7px; font-size: 15px; border:none; background-color: transparent; pointer-events: none;"
                                                        readonly>


                                                </td>
                                            </tr>

                                            <tr style="border: none; padding-bottom: 0px">
                                                <td style="width: 15%; border: none; padding-bottom: 0px">
                                                    <p style="color:#4a4949; font-size: 15px">Downpayment :</p>
                                                </td>
                                                <td style="width: 20%; border: none; padding-bottom: 0px">

                                                    <input type="text" id="downpayment"
                                                        style="color:#4a4949; padding: 0px; margin-top:-7px; font-size: 15px; border:none; background-color: transparent; pointer-events: none;"
                                                        readonly>

                                                </td>
                                            </tr>

                                            <tr style="border: none; padding-bottom: 0px">
                                                <td style="width: 15%; border: none; padding-bottom: 0px">
                                                    <p style="color:#4a4949; font-size: 15px">Full downpayment :</p>
                                                </td>
                                                <td style="width: 20%; border: none; padding-bottom: 0px">

                                                    <input type="text" id="fullDownpayment"
                                                        style="color:#4a4949; padding: 0px; margin-top:-7px; font-size: 15px; border:none; background-color: transparent; pointer-events: none;"
                                                        readonly>

                                                </td>
                                            </tr>
                                        </table>
                                        <div style="display:none" id="lot">
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
                                                        <input type="text" id="lot_id1"
                                                            style="color:#4a4949; padding: 0px; margin-top:-7px; font-size: 15px; border:none; background-color: transparent; pointer-events: none;"
                                                            readonly>

                                                    </td>
                                                </tr>

                                                <tr style="border: none; padding-bottom: 0px">
                                                    <td style="width: 15%; border: none; padding-bottom: 0px">
                                                        <p style="color:#4a4949; font-size: 15px">Block :</p>
                                                    </td>
                                                    <td style="width: 20%; border: none; padding-bottom: 0px">
                                                        <input type="text" id="lot_block1"
                                                            style="color:#4a4949; padding: 0px; margin-top:-7px; font-size: 15px; border:none; background-color: transparent; pointer-events: none;"
                                                            readonly>

                                                    </td>
                                                </tr>

                                                <tr style="border: none; padding-bottom: 0px">
                                                    <td style="width: 15%; border: none; padding-bottom: 0px">
                                                        <p style="color:#4a4949; font-size: 15px">Section :</p>
                                                    </td>
                                                    <td style="width: 20%; border: none; padding-bottom: 0px">
                                                        <input type="text" id="lot_section1"
                                                            style="color:#4a4949; padding: 0px; margin-top:-7px; font-size: 15px; border:none; background-color: transparent; pointer-events: none;"
                                                            readonly>

                                                    </td>
                                                </tr>

                                                <tr style="border: none; padding-bottom: 0px">
                                                    <td style="width: 15%; border: none; padding-bottom: 0px">
                                                        <p style="color:#4a4949; font-size: 15px">Number of lot :</p>
                                                    </td>
                                                    <td style="width: 20%; border: none; padding-bottom: 0px">

                                                        <input type="text" id="lot_no1"
                                                            style="color:#4a4949; padding: 0px; margin-top:-7px; font-size: 15px; border:none; background-color: transparent; pointer-events: none;"
                                                            readonly>

                                                    </td>
                                                </tr>

                                                <tr style="border: none; padding-bottom: 0px">
                                                    <td style="width: 15%; border: none; padding-bottom: 0px">
                                                        <p style="color:#4a4949; font-size: 15px">Area :</p>
                                                    </td>
                                                    <td style="width: 20%; border: none; padding-bottom: 0px">
                                                        <input type="text" id="lot_area1"
                                                            style="color:#4a4949; padding: 0px; margin-top:-7px; font-size: 15px; border:none; background-color: transparent; pointer-events: none;"
                                                            readonly>

                                                    </td>
                                                </tr>

                                                <tr style="border: none; padding-bottom: 0px">
                                                    <td style="width: 15%; border: none; padding-bottom: 0px">
                                                        Phase :
                                                    </td>
                                                    <td style="width: 20%; border: none; padding-bottom: 0px">
                                                        <input type="text" id="lot_phase1"
                                                            style="color:#4a4949; padding: 0px; margin-top:-7px; font-size: 15px; border:none; background-color: transparent; pointer-events: none;"
                                                            readonly>

                                                    </td>
                                                </tr>

                                                <tr style="border: none; padding-bottom: 0px">
                                                    <td style="width: 15%; border: none; padding-bottom: 0px">
                                                        <p style="color:#4a4949; font-size: 15px">Type / Class :</p>
                                                    </td>
                                                    <td style="width: 20%; border: none; padding-bottom: 0px">
                                                        <input type="text" id="lot_type1"
                                                            style="color:#4a4949; padding: 0px; margin-top:-7px; font-size: 15px; border:none; background-color: transparent; pointer-events: none;"
                                                            readonly>

                                                    </td>
                                                </tr>
                                            </table>
                                        </div>

                                        <div style="display:none" id="crypt">
                                            <table class="table"
                                                style="width: 40%;border: none;color:#4a4949; padding: 5px; float: left;"
                                                cellspacing="0">

                                                <tr style="border: 2px solid #e3e6f0; background-color: #007ea7">
                                                    <th colspan="4" style="color:#ffffff">Crypt Information</th>
                                                </tr>
                                                <tr style="border: none; padding-bottom: 0px">
                                                    <td style="width: 15%; border: none; padding-bottom: 0px">
                                                        <p style="color:#4a4949; font-size: 15px">Phase :</p>
                                                    </td>
                                                    <td style="width: 20%; border: none; padding-bottom: 0px">
                                                        <input type="text" id="cryptPhase"
                                                            style="color:#4a4949; padding: 0px; margin-top:-7px; font-size: 15px; border:none; background-color: transparent; pointer-events: none;"
                                                            readonly>

                                                    </td>
                                                </tr>

                                                <tr style="border: none; padding-bottom: 0px">
                                                    <td style="width: 15%; border: none; padding-bottom: 0px">
                                                        <p style="color:#4a4949; font-size: 15px">Level :</p>
                                                    </td>
                                                    <td style="width: 20%; border: none; padding-bottom: 0px">
                                                        <input type="text" id="cryptLevel"
                                                            style="color:#4a4949; padding: 0px; margin-top:-7px; font-size: 15px; border:none; background-color: transparent; pointer-events: none;"
                                                            readonly>

                                                    </td>
                                                </tr>

                                                <tr style="border: none; padding-bottom: 0px">
                                                    <td style="width: 15%; border: none; padding-bottom: 0px">
                                                        <p style="color:#4a4949; font-size: 15px">Area :</p>
                                                    </td>
                                                    <td style="width: 20%; border: none; padding-bottom: 0px">
                                                        <input type="text" id="cryptArea"
                                                            style="color:#4a4949; padding: 0px; margin-top:-7px; font-size: 15px; border:none; background-color: transparent; pointer-events: none;"
                                                            readonly>

                                                    </td>
                                                </tr>

                                                <tr style="border: none; padding-bottom: 0px">
                                                    <td style="width: 15%; border: none; padding-bottom: 0px">
                                                        <p style="color:#4a4949; font-size: 15px"> Section :</p>
                                                    </td>
                                                    <td style="width: 20%; border: none; padding-bottom: 0px">

                                                        <input type="text" id="cryptSection"
                                                            style="color:#4a4949; padding: 0px; margin-top:-7px; font-size: 15px; border:none; background-color: transparent; pointer-events: none;"
                                                            readonly>

                                                    </td>
                                                </tr>

                                                <tr style="border: none; padding-bottom: 0px">
                                                    <td style="width: 15%; border: none; padding-bottom: 0px">
                                                        <p style="color:#4a4949; font-size: 15px">Column :</p>
                                                    </td>
                                                    <td style="width: 20%; border: none; padding-bottom: 0px">
                                                        <input type="text" id="cryptColumn"
                                                            style="color:#4a4949; padding: 0px; margin-top:-7px; font-size: 15px; border:none; background-color: transparent; pointer-events: none;"
                                                            readonly>

                                                    </td>
                                                </tr>

                                                <tr style="border: none; padding-bottom: 0px">
                                                    <td style="width: 15%; border: none; padding-bottom: 0px">
                                                        Unit Number :
                                                    </td>
                                                    <td style="width: 20%; border: none; padding-bottom: 0px">
                                                        <input type="text" id="cryptUnitNumber"
                                                            style="color:#4a4949; padding: 0px; margin-top:-7px; font-size: 15px; border:none; background-color: transparent; pointer-events: none;"
                                                            readonly>

                                                    </td>
                                                </tr>

                                                <tr style="border: none; padding-bottom: 0px">
                                                    <td style="width: 15%; border: none; padding-bottom: 0px">
                                                        <p style="color:#4a4949; font-size: 15px">Classification :</p>
                                                    </td>
                                                    <td style="width: 20%; border: none; padding-bottom: 0px">
                                                        <input type="text" id="cryptClassification"
                                                            style="color:#4a4949; padding: 0px; margin-top:-7px; font-size: 15px; border:none; background-color: transparent; pointer-events: none;"
                                                            readonly>

                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div style="width: 100%; float: left;">
                                        <table class="table" style="border: 2px solid #e3e6f0; color:#4a4949;"
                                            cellspacing="0" hidden>

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
        <script src="myscript/CCD_fetch_paymentverification.js"></script>

    </body>

    </html>

 
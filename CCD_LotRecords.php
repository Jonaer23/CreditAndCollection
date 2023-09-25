    <?php
    session_start();
    include 'connection.php';
    include 'session.php';

    if(isset($_SESSION['Access']) && $_SESSION['Access'] == "Admin"  && $_SESSION['Department'] == "Finance" && $_SESSION['Position'] == "CCCoordinator") {

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
        <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"
    />
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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
        div.employeeData{
        width: 29%;
        float: left;
        padding-right:20px;
    }

    div.uploadPhoto{
        width: 13%;
        float: left;
    
        text-align: left;
    }
    div.ChildrenTable{
        width: 100%;
        float: left;
        margin-right: 50px;
    }
    p.category{
    Font-size: 15px;
    padding-top: -10;
    }
    div.container-sedge{
        width:100%;
    }

    img.Image-alignment1{
        height: 60px;
        width: 100px;

    }
    div.viewRecords{
        margin: 30px;
    }
    div.viewRecords1{
    width:85%;

    }

    input.viewRecord{
        border: none;
        border-bottom: 1px solid gray;
        height: 20px;
        border-radius: 0px;
        width:100%;
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
                    font-size : 15px;
                    color: #000000;  
        }
        img.profilepic{
        border:1px solid #ddd;
        border-radius:8px;
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
        .table-sm tbody + tbody {
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
    input[type=file]{
    width:100%;
    font-size:13px;
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
    
        width:100%;
        height: 30px;
        margin-top: -0px;
    
    
    }
    .HEader {
    float: center;
    
    }
    div.Autorow{
        float:left;
        width:18%;
    }
    div.Autorow1{
        float:left;
        width:10%;
    }
    .cd-table-container{
    background: #fff;
    box-shadow: 1px 2px 26px rgba(0, 0, 0, 0.2);
    padding: 15px;
    max-width: 720px;
    }
    /* Table Design */
    .cd-table{
    width: 100%;
    color: #666;
    margin: 10px auto;
    border-collapse: collapse;
    }

    .cd-table tr,
    .cd-table td{
    border: 1px solid #ccc;
    padding: 10px;
    }
    .cd-table th{
    background: #017721;
    color: #fff;
    padding: 10px;
    }

    /* Search Box */
    .cd-search{
    padding: 10px;
    border: 1px solid #ccc;
    width: 100%;
    box-sizing: border-box;
    }

    /* Search Title */
    .cd-title{
    color: #666;
    margin: 15px 0;
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
    .bg-sedge-primary-color{
        background-color: #003459;
    }
        </style>


    </head>
    <body id="page-top"> 

    <!-- Page Wrapper -->
   <!-- Page Wrapper -->
   <div id="wrapper">

<!-- Sidebar -->
<ul class="navbar-nav bg-sedge-primary-color sidebar sidebar-dark accordion" id="accordionSidebar">
<!-- Sidebar - Brand -->
    <a><div class="SedgeFont" ></div></a>
<!-- Divider -->
<hr class="sidebar-divider my-0">
<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Collection Department</span></a>                 
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

            <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages2"
                aria-expanded="true" aria-controls="collapsePages2">
                <i class="far fa-address-book"></i>
                <span>Collection</span>
            </a>
            <div id="collapsePages2" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="CCD_CollectionLotLedger.php">Flat Interest</a>
                    <a class="collapse-item" href="">Diminishing Interest Rate</a>  
                    <a class="collapse-item" href="CCD_BuyerInformation.php">E-Form</a>                     
                </div>
            </div>
            

        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                aria-expanded="true" aria-controls="collapsePages">
                <i class=" fas fa-book"></i>
                <span>Ledger</span>
            </a>
            <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="CCD_Collection.php">LEDGER - Lot</a>     
                    <a class="collapse-item" href="CCD_CryptCollection.php">LEDGER - Crypt</a>            
                </div>
            </div>
            

        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages4"
                aria-expanded="true" aria-controls="collapsePages4">
                <i class="fas fa-balance-scale"></i>
                <span> Flat Interest</span>
            </a>
            <div id="collapsePages4" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="CCD_ledger.php">MANUAL INPUT (Lot)</a>
                    <a class="collapse-item" href="CCD_ledgerCrypt.php">MANUAL INPUT (Crypt)</a>               
                </div>
            </div>
        </li>
       
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages3"
                aria-expanded="true" aria-controls="collapsePages3">
                <i class="fas fa-balance-scale-right"></i>
                <span>Diminishing Interest</span>
            </a>
            <div id="collapsePages3" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="CCD_ledgerDeminishingRate.php">MANUAL INPUT (Lot)</a>    
                    <a class="collapse-item" href="CCD_ledgerDeminishingRateCrypt.php">MANUAL INPUT (Crypt)</a>                
                </div>
            </div>
        </li>
       
        <li class="nav-item ">
                <a class="nav-link" href="CCD_CertificateOfCompletion.php">
                <i class="fas fa-fw fas fa-user-tie"></i></i>
                    <span>Certificate of Completion</span></a>
            </li>
            
            
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages6"
                aria-expanded="true" aria-controls="collapsePages6">
                <i class="far fa-folder-open"></i>
                <span>Revaluation</span>
            </a>
            <div id="collapsePages6" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="CCD_lotRevaluation.php">Lot Revaluation</a>    
                    <a class="collapse-item" href="CCD_cryptRevaluation.php">Crypt Revaluation</a>                
                </div>
            </div>
        </li>
        <li class="nav-item ">
                <a class="nav-link" href="CCDInventory.php">
                <i class="fas fa-fw fas fa-file-alt"></i></i>
                    <span>Inventory</span></a>
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
    <p class="text-center mb-2"><strong>SEDGE</strong> is packed with premium features, components, and more!</p>   
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
                            <img src="\AccountingSoftwareProposal\startbootstrap-sb-admin-2-gh-pages\startbootstrap-sb-admin-2-gh-pages\img\SouthSpring.png"  width="200" height="60"></img>
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
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg"
                                            alt="...">
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
                                        <img class="rounded-circle" src="img/undraw_profile_2.svg"
                                            alt="...">
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
                                        <img class="rounded-circle" src="img/undraw_profile_3.svg"
                                            alt="...">
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
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
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

                   
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4" style="color:#2F4F4F">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary"></h6> 
                        </div>
                    
                        <div class="card-body">
                            <div class="table-responsive" >
                            <div style="overflow-x:auto;">
                                    <table class="table table-bordered" id="dataTable" style="width: 150%;  border-collapse: collapse;" cellspacing="0" style="color:#2F4F4F">
                                    <thead>
                                    <tr class="header">
                                    <th scope="col" style= " font-size: 10px; color:#2F4F4F">Block</th>
                                    <th scope="col" style= " font-size: 10px; color:#2F4F4F">Section</th>
                                    <th scope="col" style= " font-size: 10px; color:#2F4F4F">Lot No.</th>
                                    <th scope="col" style= " font-size: 10px; color:#2F4F4F">Area</th>
                                    <th scope="col" style= " font-size: 10px; color:#2F4F4F">Phase</th>
                                    <th scope="col" style= " font-size: 10px; color:#2F4F4F">Type/Class</th>
                                     <th scope="col" style= " font-size: 10px; color:#2F4F4F">TCP</th>
                                     <th scope="col" style= " font-size: 10px; color:#2F4F4F ; width: 100px">Spot Cash</th>
                                     <th scope="col" style= " font-size: 10px; color:#2F4F4F">30-Days</th>
                                     <th scope="col" style= " font-size: 10px; color:#2F4F4F">Spot DP</th>
                                     <th scope="col" style= " font-size: 10px; color:#2F4F4F">Downpayment</th>
                                     <th scope="col" style= " font-size: 10px; color:#2F4F4F"><a style="font-size: 8px;">DP payable in</a><br> 3 months</th>
                                     <th scope="col" style= " font-size: 10px; color:#2F4F4F">6 Months</th>
                                     <th scope="col" style= " font-size: 10px; color:#2F4F4F">1 Year</th>
                                     <th scope="col" style= " font-size: 10px; color:#2F4F4F">3 Years</th>
                                     <th scope="col" style= " font-size: 10px; color:#2F4F4F">5 Years</th>
                                     <th scope="col" style= "font-size: 10px; color:#2F4F4F">7 Years</th>
                                     <th scope="col" style= " font-size: 10px; color:#2F4F4F">10 Years</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        
                                    <th scope="col" style= " font-size: 10px; color:#2F4F4F">Block</th>
                                    <th scope="col" style= " font-size: 10px; color:#2F4F4F">Section</th>
                                    <th scope="col" style= " font-size: 10px; color:#2F4F4F">Lot No.</th>
                                    <th scope="col" style= " font-size: 10px; color:#2F4F4F">Area</th>
                                    <th scope="col" style= " font-size: 10px; color:#2F4F4F">Phase</th>
                                    <th scope="col" style= " font-size: 10px; color:#2F4F4F">Type/Class</th>
                                    <th scope="col" style= " font-size: 10px; color:#2F4F4F">TCP</th>
                                     <th scope="col" style= "font-size: 10px; color:#2F4F4F">Spot Cash</th>
                                     <th scope="col" style= "font-size: 10px; color:#2F4F4F">30-Days</th>
                                     <th scope="col" style= " font-size: 10px; color:#2F4F4F">Spot DP</th>
                                     <th scope="col" style= " font-size: 10px; color:#2F4F4F">Downpayment</th>
                                     <th scope="col" style= "font-size: 10px; color:#2F4F4F"><a style="font-size: 8px;">DP payable in</a><br> 3 months</th>
                                     <th scope="col" style= "font-size: 10px; color:#2F4F4F">6 Months</th>
                                     <th scope="col" style= "font-size: 10px; color:#2F4F4F">1 Year</th>
                                     <th scope="col" style= " font-size: 10px; color:#2F4F4F">3 Years</th>
                                     <th scope="col" style= "font-size: 10px; color:#2F4F4F">5 Years</th>
                                     <th scope="col" style= "font-size: 10px; color:#2F4F4F">7 Years</th>
                                     <th scope="col" style= "font-size: 10px; color:#2F4F4F">10 Years</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                        
                                        <tr >
                                        <td class="id" name="id" style="font-size: 9px;"></td>
                                        <td class="id" name="id" style="font-size: 9px;"></td>
                                        <td class="id" name="id" style="font-size: 9px;"></td>
                                        <td class="id" name="id" style="font-size: 9px;"></td>
                                        <td class="id" name="id" style="font-size: 9px;"></td>
                                        <td class="id" name="id" style="font-size: 9px;"></td>
                                        <td class="id" name="id" style="font-size: 9px;"></td>
                                        <td class="id" name="id" style="font-size: 9px;"></td>
                                        <td class="id" name="id" style="font-size: 9px;"></td>
                                        <td class="id" name="id" style="font-size: 9px;"></td>
                                        <td class="id" name="id" style="font-size: 9px;"></td>
                                        <td class="id" name="id" style="font-size: 9px;"></td>
                                        <td class="id" name="id" style="font-size: 9px;"></td>
                                        <td class="id" name="id" style="font-size: 9px;"></td>
                                        <td class="id" name="id" style="font-size: 9px;"></td>
                                        <td class="id" name="id" style="font-size: 9px;"></td>
                                        <td class="id" name="id" style="font-size: 9px;"></td>
                                        <td class="id" name="id" style="font-size: 9px;"></td>

                                        </td>
                                            
                                        </tr>
                                       
                                    </tbody>
                                </table>
                            </div>
                            </div>
                            </div>
                            </div>

                </div>
                <!-- /.container-fluid -->

        
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
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>



    <!-- viewmodal-->
    <div class="modal fade bd-example-modal-lg" id="viewBuyer" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl" >
            <div class="modal-content">
                <div class="modal-header">
                
                    
                </div>
                <div class="modal-body">
                        
        <div class="card shadow mb-4">
            <div class="card-header py-3">    
            <div class="ChildrenTable">
            
            <div class="card-body">
            
                    
                    <div>
                        
                
                                        <table class="table" style="border: 2px solid #e3e6f0"  cellspacing="0" >
                                            <tr style="border: 2px solid #e3e6f0"> 
                                                <th colspan="5" style="color:#00008B; font-size: ">Information</th>
                                            </tr>
                                            <tr style="border: none">
                                            <td style="border: none">Contract Code
                                            <input type="text" class="form-control" style="border:none; padding-left: 10px; background-color: #E2F6EC;  font-size: 12px; " id="CustomerCode" name="CustomerCode" readonly>  
                                            </td>
                                            <td style="border: none" >
                                            Price
                                                <br> <input type="text" class="form-control" style="border:none; padding: 10px; background-color: #E2F6EC;  font-size: 12px;" id="ContractCode" name="ContractCode" readonly> 
                                            </td>
                                            <td style="border: none" >
                                            Date <br> <input type="text" class="form-control" style="border:none; padding: 10px; background-color: #E2F6EC;   font-size: 12px;" id="Name" name="Name" readonly>
                                            </td>
                                            <td style="border: none; width: 190px" >
                                            Cut-off
                                                <br> <input type="text" class="form-control" style="border:none; padding: 10px; background-color: #E2F6EC;   font-size: 12px;" id="Date" name="Date" readonly>
                                            
                                            </td>
                                        
                                        
                                            </tr>
                                        </table>
                                        
                                        <table class="table" style="border: 2px solid #e3e6f0"  cellspacing="0" >
                                            <tr style="border: 2px solid #e3e6f0"> 
                                                <th colspan="5" style="color:#00008B; font-size: ">Personal Information</th>
                                            </tr>
                                            <tr style="border: none">
                                            <td style="border: none">Customer Name
                                            <input type="text" class="form-control" style="border:none; padding-left: 10px; background-color: #E2F6EC;  font-size: 12px; " id="CustomerCode" name="CustomerCode" readonly>  
                                            Name of Spouse
                                                <br> <input type="text" class="form-control" style="border:none; padding: 10px; background-color: #E2F6EC;   font-size: 12px;" id="ContractCode" name="ContractCode" readonly> 
                                            Company Name
                                                <br> <input type="text" class="form-control" style="border:none; padding: 10px; background-color: #E2F6EC;  font-size: 12px;" id="ContractCode" name="ContractCode" readonly> 
                                                
                                            </td>
                                            
                                            <td style="border: none; width: 55%" >
                                            Residence Address <br> <input type="text" class="form-control" style="border:none; padding: 10px; background-color: #E2F6EC;  font-size: 12px;" id="Name" name="Name" readonly>
                                            Billing Address <br> <input type="text" class="form-control" style="border:none; padding: 10px; background-color: #E2F6EC;   font-size: 12px;" id="Name" name="Name" readonly>
                                            Company Address <br> <input type="text" class="form-control" style="border:none; padding: 10px; background-color: #E2F6EC;  font-size: 12px;" id="Name" name="Name" readonly>
                                        
                                            </td>
                                            <td style="border: none; width: 20%" >
                                                Tel. No.
                                                <br> <input type="text" class="form-control" style="border:none; padding: 10px; background-color: #E2F6EC;   font-size: 12px;" id="Date" name="Date" readonly>
                                                Occupation
                                                <br> <input type="text" class="form-control" style="border:none; padding: 10px; background-color: #E2F6EC;   font-size: 12px;" id="Date" name="Date" readonly>
                                                Tel. No.
                                                <br> <input type="text" class="form-control" style="border:none; padding: 10px; background-color: #E2F6EC;   font-size: 12px;" id="Date" name="Date" readonly>
                                                
                                            </td>
                                        
                                        
                                            </tr>
                                        </table>
                                        


                                    <div  style="width: 60%; float: left;">
                                        <table class="table" style="border: 2px solid #e3e6f0;"  cellspacing="0" >
                                            
                                            <tr style="border: 2px solid #e3e6f0"> 
                                                <th colspan="6  " style="color:#00008B">Lot Description</th>
                                            </tr>
                                            
                                            <tr > 
                                                <th style="color:#00008B">Area</th>
                                                <th style="color:#00008B">Section</th>
                                                <th style="color:#00008B">Lot I.D.</th>
                                                <th style="color:#00008B">Type/Class</th>
                                                <th style="color:#00008B">Block</th>
                                                <th style="color:#00008B">Lot/No.</th>
                                            
                                            </tr>
                                            <tr style="border: none" >
                                            <td >
                                            </td>
                                            <td>
                                            </td>
                                            <td>
                                            </td>
                                            <td>
                                            </td>
                                            <td>
                                            </td>
                                            <td>
                                            </td>
                                        </table>
                                    </div>
                                   
                        
                                    <div  style="width: 38%; float: right;">
                                        <table class="table" style="border: 2px solid #e3e6f0; "  cellspacing="0" >
                                            <tr style="border: 2px solid #e3e6f0"> 
                                                <th colspan="2" style="color:#00008B">Computation</th>
                                            </tr>
                                            <tr style="border: none">
                                            <td style="border: none; width: 50%" >
                                            Lot List Price <br>
                                            Value Added Tax (_)% <br>
                                            Subtotal <br>
                                            Less: Discount <br>
                                            Subtotal <br>
                                            Perpetual Care Funds <br>
                                            Total Contract Price <br>
                                            Add_% Mark-up <br>
                                            At-Needs TCP <br>
                                            Downpayment <br>
                                            Balance <br>
                                            Monthly Installment <br>
                                            No. of Income     <br>
                                            
                                            </td>
                                            <td style="border: none" >
                                            
                                            </td>
                                            
                                            </tr>
                                        
                                        </table>
                                    </div>
                                   
                                    <div  style="width: 60%; float: left;">
                                        <table class="table" style="border: 2px solid #e3e6f0;"  cellspacing="0" >
                                            
                                            <tr style="border: 2px solid #e3e6f0"> 
                                                <th colspan="2" style="color:#00008B">Crypt Description</th>
                                            </tr>
                                            
                                            <tr > 
                                                <th style="color:#00008B">Level</th>
                                                <th style="color:#00008B">Area</th>
                                                <th style="color:#00008B">Section</th>
                                                <th style="color:#00008B">Column</th>
                                                <th style="color:#00008B">Unit No.</th>
                                                <th style="color:#00008B">Classification</th>
                                                <th style="color:#00008B">I.D.</th>
                                            
                                            </tr>
                                            <tr style="border: none" >
                                            <td >
                                            </td>
                                            <td>
                                            </td>
                                            <td>
                                            </td>
                                            <td>
                                            </td>
                                            <td>
                                            </td>
                                            <td>
                                            </td>
                                            <td>
                                            </td>
                                        </table>
                                    </div>
                                    <div  style="width: 60%; float: left;">
                                        <table class="table" style="border: 2px solid #e3e6f0;"  cellspacing="0" >
                                            
                                            <tr style="border: 2px solid #e3e6f0"> 
                                                <th colspan="6" style="color:#00008B">Terms / Condition</th>
                                            </tr>
                                            
                                           
                                            <tr style="border: none" >
                                            <td >
                                                <input type="checkbox" id="Terms" Value="Spot" Disabled> Spot</input>
                                            </td>
                                            <td>
                                                <input type="checkbox" id="Terms" Value="M-Cash" Disabled> M-Cash</input>
                                            </td>
                                            <td> 
                                                <input type="checkbox" id="Terms" Value="30 Days Cash" Disabled> 30 Days Cash</input>
                                            </td>
                                            <tr>
                                            <td>
                                            <input type="checkbox" id="Terms" Value="6 Months" Disabled> 6 Months</input>
                                            </td>
                                            <td>
                                            <input type="checkbox" id="Terms" Value="AT-Need" Disabled> AT-Need</input>
                                            </td>
                                            <td>
                                            <input type="checkbox" id="Terms" Value="Installment" Disabled> Installment</input> <br>
                                            <input type="text" id="Terms" Value="3 Months" class="form-control" style="border:none; padding: 10px; background-color: #E2F6EC;   font-size: 12px; width: 50%;"  readonly> </input> 
                                               
                                        </td>
                                </tr>
                                        </table>
                                    </div>
                                    
                                <div class="table-responsive">
                                <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                                    <thead>
                                    
                                        <tr>
                                            <th class="th-sm" style= "width: 5% ; font-size: 12px;">No.</th>
                                            <th class="th-sm" style= "width: 10% ; font-size: 12px;">Date</th>
                                            <th class="th-sm" style= "width: 10% ; font-size: 12px;">Total Contract Price</th>
                                            <th class="th-sm" style= "width: 10% ; font-size: 12px;">O.R/P.R.</th>
                                            <th class="th-sm" style= "width: 10% ; font-size: 12px;">Amount Paid</th>
                                            <th class="th-sm" style= "width: 10% ; font-size: 12px;">Interest</th>
                                            <th class="th-sm" style= "width: 5% ; font-size: 12px;">Principal</th>
                                            <th class="th-sm" style= "width: 10% ; font-size: 12px;">Balance</th>
                                            <th class="th-sm" style= "width: 10% ; font-size: 12px;">Vat</th>
                                            <th class="th-sm" style= "width: 10% ; font-size: 12px;">PCF</th>
                                            <th class="th-sm"  style= "width: 10% ; font-size: 12px;">Remarks</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody style="border: 2px solid #e3e6f0">  
                                            <tr style="border: 2px solid #e3e6f0">
                                            <td  style= "font-size: 11px;">1</td>
                                            <td  style= " font-size: 11px;">November 10 2022 </td>
                                            <td  style= "font-size: 11px;"> Gcash</td>       
                                            <td  style= " font-size: 11px;" id="firstNumber">1000000</td>
                                            <td style= "font-size: 11px;" id="secondNumber" >26.666</td>
                                            <td  style= " font-size: 11px;">5%</td>
                                            <td  style= " font-size: 11px;">1%</td>
                                            <td id="result" style= " font-size: 11px;"></td>
                                            <td  style= " font-size: 11px;">5%</td>
                                            <td  style= " font-size: 11px;">1%</td>
                                            <td id="result" style= " font-size: 11px;"></td>
                                            </tr>
                                    </tbody>       
                                        </table>
                                    

                                        
                                    
                <!-- Ben -->
            
        
                
                
            
                
            </div>  
            </div>       
            </div>   

                </div> 
        
                        </div>
    
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
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



    <script>
        $('#exampleModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var recipient = button.data('whatever') // Extract info from data-* attributes
    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        modal.find('.modal-title').text('New message to ' + recipient)
        modal.find('.modal-body input').val(recipient)
        })


        let tableRowElement;
        function toggleModal(element) {
            tableRowElement = element.parentElement.parentElement;
            const EmpID = tableRowElement.getElementsByClassName('Employee_Id')[0].innerHTML;
            document.getElementById('Employee_Id').value = EmpID;
            const name = tableRowElement.getElementsByClassName('Fullname')[0].innerHTML;
            document.getElementById('Fullname').value = name;
            const Username = tableRowElement.getElementsByClassName('Username')[0].innerHTML;
            document.getElementById('Username').value = Username;
            const Department = tableRowElement.getElementsByClassName('Department')[0].innerHTML;
            document.getElementById('Department').value = Department;
            const Position = tableRowElement.getElementsByClassName('Position')[0].innerHTML;
            document.getElementById('Position').value = Position;
            const Status = tableRowElement.getElementsByClassName('AS_Status')[0].innerHTML;
            document.getElementById('AS_Status').value = Status;
            const Access = tableRowElement.getElementsByClassName('Access')[0].innerHTML;
            document.getElementById('Access').value = Access;

        

        openModal();
        }
    </script>
    <script>
        
        const CustomerCode = ;
        const num1 = parseInt(tableRowElement.getElementById("firstNumber").value);
        const num2 = parseInt(tableRowElement.getElementById("secondNumber").value);
            document.getElementById("result").innerHTML = num1 / num2;

    </script>
    <script>
        $(document).ready(function () {
    $('#dtBasicExample').DataTable();
    $('.dataTables_length').addClass('bs-select');
    });
    </script>
    </body>


    </html>

    <?php } else {
    
    header("location: index.php");
    
    }?>
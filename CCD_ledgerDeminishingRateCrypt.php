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
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"/>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
                    

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
    input:focus{
    outline: none;
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
                padding: 13px;
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
    padding: 13px 20px;
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
.bg-sedge-primary-color{
        background-color: #003459;
    }
.show-modal1 {
    opacity: 1;
    visibility: visible;
    transform: scale(1.0);
    transition: visibility 0s linear 0s, opacity 0.25s 0s, transform 0.25s;
}

input[type=text].form-control-password{
    padding-left: 5px; font-size: 14px; margin-top: -5px; 
}
input[type=password].form-control-password{
    padding-left: 5px; font-size: 14px; margin-top: -5px; 
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
                            <img src="\AccountingSoftwareProposal\startbootstrap-sb-admin-2-gh-pages\startbootstrap-sb-admin-2-gh-pages\img\SouthSpring.png"  width="150" height="60"></img>
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

                       <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="CCD_Setting.php" >
                            <span class="badge badge-danger badge-counter" style="background: #0096FF; color: #0096FF; left: 20px; bottom: 23px; width: 10px; height: 10px">.</span>
                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                               
                            </a>
                             
                        
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

                    <!-- Page Heading -->
                    
 <div class="card-body">
         <!-- Page Heading -->
            <div class="row">

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Earnings (Monthly)</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Earnings (Annual) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                        Earnings (Annual)</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
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
                                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks
                                    </div>
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-auto">
                                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                                        </div>
                                        <div class="col">
                                            <div class="progress progress-sm mr-2">
                                                <div class="progress-bar bg-info" role="progressbar"
                                                    style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
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
                                        Pending Requests</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
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

        <form method="POST" action="Insert_LotCryptDescription.php">
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3" style="background-color: #003459">
                            <h6 class="m-0 font-weight-bold text-primary"></h6> 
                        </div>
                        <div class="card-body">
                            
                        <div>
                                        <table class="table"   cellspacing="0" >
                                            <tr  style=" background-color: #007ea7 "> 
                                                <th colspan="5" style="color:#ffffff; font-size: ">Information</th>
                                            </tr>
                                            <tr style="border: none">
                                            <td style="border: none; color:#2F4F4F">Contract Code
                                            <input type="text" class="form-control" required style="border:none; padding-left: 10px; background-color: #ebf5ff;  font-size: 13px; " id="contractCode" name="contractCode" >  
                                            </td>
                                            <td style="border: none; color:#2F4F4F">O.R. / P.R. No
                                            <input type="text" class="form-control" required style="border:none; padding-left: 10px; background-color: #ebf5ff;  font-size: 13px; " id="ORPR" name="ORPR" >  
                                            </td>
                                            <td style="border: none; color:#2F4F4F" >
                                            Price
                                            <br> <input required type="text" pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency"  class="form-control" style="border:none; padding: 10px; background-color: #ebf5ff;  font-size: 13px;" id="price" name="price" > 
                                            </td>
                                            <td style="border: none; color:#2F4F4F" >
                                            Date <br> <input type="date" required class="form-control" style="border:none; padding: 10px; background-color: #ebf5ff; margin-top: 6.5px;  font-size: 13px;" id="b_Date" name="b_Date" >
                                            </td>
                                            <td style="border: none; width: 190px; color:#2F4F4F" >
                                            Cut-off
                                                
                                                <br><select required type="text"  class="form-control" style="border:none; padding: 8px; background-color: #ebf5ff;   font-size: 13px;" id="cutOff" name="cutOff">
                                                <option> -- SELECT CUT-OFF --</option>    
                                                <option id="1" name="1" value="1"> 1st day of the month</option>
                                                    <option id="2" name="2" value="2"> 2nd day of the month</option>
                                                    <option id="3" name="3" value="3"> 3rd day of the month</option>
                                                    <option id="4" name="4" value="4"> 4th day of the month</option>
                                                    <option id="5" name="5"  value="5"> 5th day of the month</option>
                                                    <option id="6" name="6" value="6"> 6th day of the month</option>
                                                    <option id="7" name="7" value="7"> 7th day of the month</option>
                                                    <option id="8" name="8" value="8"> 8th day of the month</option>
                                                    <option id="9" name="9" value="9"> 9th day of the month</option>
                                                    <option id="10" name="10" value="10"> 10th day of the month</option>
                                                    <option id="11" name="11" value="11"> 11th day of the month</option>
                                                    <option id="12" name="12" value="12"> 12th day of the month</option>
                                                    <option id="13" name="13" value="13"> 13th day of the month</option>
                                                    <option id="14" name="14" value="14"> 14th day of the month</option>
                                                    <option id="15" name="15" value="15"> 15th day of the month</option>
                                                    <option id="16" name="16" value="16"> 16th day of the month</option>
                                                    <option id="17" name="17" value="17"> 17th day of the month</option>
                                                    <option id="18" name="18" value="18"> 18th day of the month</option>
                                                    <option id="19" name="19" value="19"> 19th day of the month</option>
                                                    <option id="20" name="20" value="20"> 20th day of the month</option>
                                                    <option id="21" name="21" value="21"> 21th day of the month</option>
                                                    <option id="22" name="22" value="22"> 22th day of the month</option>
                                                    <option id="23" name="23" value="23"> 23th day of the month</option>
                                                    <option id="24" name="24" value="24"> 24th day of the month</option>
                                                    <option id="25" name="25" value="25"> 25th day of the month</option>
                                                    <option id="26" name="26" value="26"> 26th day of the month</option>
                                                    <option id="27" name="27" value="27"> 27th day of the month</option>
                                                    <option id="endOfTheMonth" name="endOfTheMonth" value="endOfTheMonth"> End of the month</option>
                                                   
                                                    </select> 
                                            </td>
                                        
                                        
                                            </tr>
                                        </table>
                                        
                                        <table class="table"   cellspacing="0" >
                                            <tr  style=" background-color: #007ea7 "> 
                                                <th colspan="5" style="color:#ffffff; font-size: ">Personal Information</th>
                                            </tr>
                                            <tr style="border: none">
                                            <td style="border: none; color:#2F4F4F">Customer Name
                                            <input type="text" class="form-control" style="border:none; padding-left: 10px; background-color: #ebf5ff;  font-size: 13px; " id="costumerName" name="costumerName" >  
                                            Name of Spouse
                                                <br> <input type="text" required class="form-control" style="border:none; padding: 10px; background-color: #ebf5ff;   font-size: 13px;" id="spouseName" name="spouseName" > 
                                            Company Name
                                                <br> <input type="text" required class="form-control" style="border:none; padding: 10px; background-color: #ebf5ff;  font-size: 13px;" id="companyName" name="companyName" > 
                                                
                                            </td>
                                            
                                            <td style="border: none; width: 55%; color:#2F4F4F" >
                                            Residence Address <br> <input type="text" required class="form-control" style="border:none; padding: 10px; background-color: #ebf5ff;  font-size: 13px;" id="residentAddress" name="residentAddress" >
                                            Billing Address <br> <input type="text" required class="form-control" style="border:none; padding: 10px; background-color: #ebf5ff;   font-size: 13px;" id="billingAddress" name="billingAddress" >
                                            Company Address <br> <input type="text" required class="form-control" style="border:none; padding: 10px; background-color: #ebf5ff;  font-size: 13px;" id="companyAddress" name="companyAddress" >
                                        
                                            </td>
                                            <td style="border: none; width: 20%; color:#2F4F4F" >
                                            
                                            <p style="margin-bottom: 8.5px"> Tel. No.</P>
                                                <input type="tel"  required class="form-control" style="border:none; background-color: #ebf5ff;   font-size: 13px;"  onkeypress="return onlyNumberKey(event)" id="residentialPhoneno" name="residentialPhoneno" >
                
   
                                            Occupation
                                                <br> <input type="text" required class="form-control" style="border:none; padding: 10px; background-color: #ebf5ff;   font-size: 13px;" id="spouseOccupation" name="spouseOccupation" >
                                               
                                                <p style="margin-bottom: -8px"> Tel. No.</P>
                                                <br> <input type="tel" required class="form-control" style="border:none;  background-color: #ebf5ff;   font-size: 13px;"  onkeypress="return onlyNumberKey(event)" id="companyTellNo" name="companyTellNo" >
     
                                            </td>
                                        
                                        
                                            </tr>
                                        </table>
                                       
                         

                           
                            <div class="table-responsive" style="width: 100%;" >
                              
                            <table id="dtcryptDescRecord" class="table table-striped table-bordered table-sm" style= "color:#4a4949 " cellspacing="0" width="100%">
                                    <thead>
                                    
                                         <tr style="background-color: #00a8e8">
                                         <th class="th-sm" style= "width: 2%; font-size: 14px; color:#ffffff ">ID</th>
                                            <th class="th-sm" style= "width: 10%;font-size: 14px; color:#ffffff ">Phase</th>
                                            <th class="th-sm" style= "width: 10%; font-size: 14px; color:#ffffff ">Level</th>
                                            <th class="th-sm" style= "width: 10%; font-size: 14px; color:#ffffff ">Area</th>
                                            <th class="th-sm" style= "width: 10%; font-size: 14px; color:#ffffff ">Section</th>
                                            <th class="th-sm" style= "width: 10%; font-size: 14px; color:#ffffff ">Column</th>
                                            <th class="th-sm" style= "width: 10%; font-size: 14px; color:#ffffff ">Unit no</th>
                                            <th class="th-sm" style= "width: 10%; font-size: 14px; color:#ffffff ">No of lots</th>
                                            <th class="th-sm" style= "width: 10%; font-size: 14px; color:#ffffff ">Classification</th>
                                            <th class="th-sm" style= "width: 10%; font-size: 14px; color:#ffffff ">List Price</th>
                                            <th class="th-sm" style= "width: 6%; font-size: 14px; color:#ffffff ">Tools</th>
                                            <th class="th-sm" style= "width: 6%; font-size: 14px; color:#ffffff" hidden></th>
                                            <th class="th-sm" style= "width: 6%; font-size: 14px; color:#ffffff"hidden ></th>
                                            <th class="th-sm" style= "width: 6%; font-size: 14px; color:#ffffff" hidden></th>
                                            <th class="th-sm" style= "width: 6%; font-size: 14px; color:#ffffff" hidden></th>
                                            <th class="th-sm" style= "width: 6%; font-size: 14px; color:#ffffff" hidden></th>
                                            <th class="th-sm" style= "width: 6%; font-size: 14px; color:#ffffff" hidden></th>
                                            <th class="th-sm" style= "width: 6%; font-size: 14px; color:#ffffff" hidden></th>
                                            <th class="th-sm" style= "width: 6%; font-size: 14px; color:#ffffff" hidden></th>
                                            <th class="th-sm" style= "width: 6%; font-size: 14px; color:#ffffff" hidden></th>
                                            <th class="th-sm" style= "width: 6%; font-size: 14px; color:#ffffff" hidden></th>
                                            <th class="th-sm" style= "width: 6%; font-size: 14px; color:#ffffff" hidden></th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody style="border: 2px solid #e3e6f0;">  
                                     <?php
                                        $sales_query = "SELECT * from tbl_cryptdescription WHERE `status` = 'Available'";
                                        $sales_result = mysqli_query($connection, $sales_query);
                                        if (mysqli_num_rows($sales_result) > 0) {
                                        while ($row = mysqli_fetch_assoc($sales_result)) {
                                    ?>
                                            <tr style="border: 2px solid #e3e6f0">
                                            <td  style= "width: 2%;font-size: 14px; color:#4a4949 "><?=$row['id']?></td>
                                            <td  style= "width: 10%;font-size: 14px; color:#4a4949 "><?=$row['phase']?></td>
                                            <td  style= "width: 10%;font-size: 14px; color:#4a4949 "><?=$row['level']?></td>
                                            <td  style= "width: 10%;font-size: 14px; color:#4a4949 "><?=$row['area']?></td>
                                            <td  style= "width: 10%;font-size: 14px; color:#4a4949 "><?=$row['section']?></td>
                                            <td  style= "width: 10%;font-size: 14px; color:#4a4949 "><?=$row['crypt_column']?></td>
                                            <td  style= "width: 10%;font-size: 14px; color:#4a4949 "><?=$row['unit_no']?></td>
                                            <td  style= "width: 10%;font-size: 14px; color:#4a4949 "><?=$row['noLots']?></td>
                                            <td  style= "width: 10%;font-size: 14px; color:#4a4949 "><?=$row['classification']?></td>
                                            <td  style= "width: 10%;font-size: 14px; color:#4a4949 "><?=$row['listPrice']?></td>
                                            <td  style= "width: 10%;font-size: 14px; color:#4a4949 "hidden><?=$row['30_days_cash_price']?></td>
                                            <td  style= "width: 10%;font-size: 14px; color:#4a4949 "hidden><?=$row['spot_cash']?></td>
                                            <td  style= "width: 10%;font-size: 14px; color:#4a4949 "hidden><?=$row['spot_dp']?></td>
                                            <td  style= "width: 10%;font-size: 14px; color:#4a4949 "hidden><?=$row['downpayment']?></td>
                                            <td  style= "width: 10%;font-size: 14px; color:#4a4949 "hidden><?=$row['downpayment_payable_in_3_months']?></td>
                                            <td  style= "width: 10%;font-size: 14px; color:#4a4949 "hidden><?=$row['6_months']?></td>
                                            <td  style= "width: 10%;font-size: 14px; color:#4a4949 "hidden><?=$row['1_year']?></td>
                                            <td  style= "width: 10%;font-size: 14px; color:#4a4949 "hidden><?=$row['3_years']?></td>
                                            <td  style= "width: 10%;font-size: 14px; color:#4a4949 "hidden><?=$row['5_years']?></td>
                                            <td  style= "width: 10%;font-size: 14px; color:#4a4949 "hidden><?=$row['7_years']?></td>
                                            <td  style= "width: 10%;font-size: 14px; color:#4a4949 "hidden><?=$row['10_years']?></td>
                                            <td  style= "width: 6%;font-size: 14px; color:#4a4949 ">
                                            <button style="color:#ffffff; font-size:12px; padding: 5px;width: 100%; background-color: #ef476f" type="button" class="btn btn-primary"  id="lotDescriptionTypeAdd_button" name="lotDescriptionTypeAdd_button" data-controls-modal="myModal" data-backdrop="static" data-keyboard="false"><i class="fas fa-cart-plus"></i> Get</button>
                                 </td>
                                    <?php
                                        }
                                        }
                                    ?>   
                                            </tr>
                                            
                                    </tbody>       
                                </table> 
                            </div> 

                            <br>
                                <div style="padding: 0px 13px;">
                                    <div  style="width: 50%; float: left;">
                                        <table class="table"   cellspacing="0" >
                                          
                                            <tr style="border: none;">
                                            <td style="border: none; width: 50%; color:#4a4949; font-size: 13px;background-color: Transparent;padding-left:15px;padding-right:0px;padding-bottom:0px;padding-top:15px;margin:0px; font-weight: bold" >
                                            Lot Description :
                                            </td>
                                            <td style="border: none;background-color: transparent;color:#4a4949;padding-left:15px;padding-right:15px;padding-bottom:0px;padding-top:15px;margin:0px; font-weight: bold;" >
                                            <input placeholder="Phase" class="form-control" style="padding:0px 15px; font-size: 13px; margin-bottom:10px;color:#4a4949" id="phase" name="phase"  ></input>
                                            <input placeholder="Section" class="form-control" style="padding:0px 15px; font-size: 13px; margin-bottom: 10px;color:#4a4949" id="level" name="level"  ></input>
                                            <input placeholder="Area" class="form-control" style="padding:0px 15px; font-size: 13px; margin-bottom: 10px;color:#4a4949" id="area" name="area"  ></input>
                                            <input placeholder="Section" class="form-control" style="padding:0px 15px; font-size: 13px; margin-bottom: 10px;color:#4a4949" id="section" name="section"  ></input>
                                            <input placeholder="Column" class="form-control" style="padding:0px 15px; font-size: 13px; margin-bottom: 10px;color:#4a4949" id="crypt_column" name="crypt_column"  ></input>
                                            <input placeholder="Unit no" class="form-control" style="padding:0px 15px; font-size: 13px; margin-bottom: 10px;color:#4a4949" id="unit_no" name="unit_no"  ></input>
                                            <input placeholder="No of lots" class="form-control" style="padding:0px 15px; font-size: 13px; margin-bottom: 10px;color:#4a4949" id="noLots" name="noLots"  ></input>
                                            <input placeholder="Classification" class="form-control" style="padding:0px 15px; font-size: 13px; margin-bottom: 10px;color:#4a4949" id="classification" name="classification"  ></input>
                                           
                                            </td>
                                            </tr>

                                           

                                            <tr style="border: none;">
                                            <td style="border: none; width: 50%; color:#4a4949; font-size: 13px;background-color: Transparent;padding-left:15px;padding-right:0px;padding-bottom:0px;padding-top:15px;margin:0px; font-weight: bold" >
                                           <p style="padding-top: 5px;"> Terms :</p>
                                            </td>
                                            <td style="border: none;background-color: transparent;;padding-left:15px;padding-right:15px;padding-bottom:0px;margin:0px; font-weight: bold;" >
                                            <select  type="text"  class="form-control" style="padding: 8px; color:#4a4949; font-size: 13px;" id="terms" name="terms">
                                                    <option > --- SELECT TERMS ---</option> 
                                                    <option style="color:#4a4949"  name="preNeedPrice" value="PreNeedPrice"> Pre-Need Price</option> 
                                                    <option style="color:#4a4949" name="AtNeedPrice" value="AtNeedPrice"> AT-Need Price</option> 
                                                    <option style="color:#4a4949" name="SpotCash" value="SpotCash">Spot Cash</option> 
                                                    <option style="color:#4a4949" name="mCash" value="M_Cash">M-Cash 30 Days</option> 
                                                    <option style="color:#4a4949" name="Installment" value="Installment">Installment</option> 
                                                    </select>
                                            </td>
                                            </tr>

                                            <tr style="border: none;">
                                            <td style="border: none; width: 50%; color:#4a4949; font-size: 13px;background-color: Transparent;padding-left:15px;padding-right:0px;padding-bottom:0px;padding-top:15px;margin:0px; font-weight: bold" >
                                            Mode of Payment :
                                            </td>
                                            <td  style="border: none;background-color: transparent;color:#4a4949;padding-left:15px;padding-right:15px;padding-bottom:0px;padding-top:15px;margin:0px; font-weight: bold;" >
                                            <select required type="text"  class="form-control" style="padding: 8px;   font-size: 13px;" id="modeOfpayment" name="modeOfpayment">
                                                    <option > --- SELECT PAYMENT METHOD ---</option> 
                                                    <option  name="cash" value="Cash"> Cash</option> 
                                                    <option name="onlinePayment" value="onlinePayment"> Online Payment</option> 
                                                    </select>    
                                            </td>
                                            </tr>

                                            
                                           
                                          
                                           
                                        
                                        </table>
                                    </div>
                                    
                                    <div  style="width: 50%; float: right; border-color: #5B7EDE">
                                        <table class="table"   cellspacing="0"   >
                                            <tr  > 
                                               
                                            </tr>
                                            <tr style="border: none;">
                                            <td style="border: none; width: 50%; color:white; font-size: 13px;background-color: #5B7EDE;padding-left:15px;padding-right:0px;padding-bottom:0px;padding-top:15px;margin:0px; font-weight: bold" >
                                            Lot List Price :
                                            </td>
                                            <td style="border: none;background-color: #5B7EDE;color:#4a4949;padding-left:15px;padding-right:15px;padding-bottom:0px;padding-top:15px;margin:0px; font-weight: bold;" >
                                           
                                            <input placeholder="₱ 0.00" pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency"  oninput="compute()" style="padding:0px 15px; width: 92%; font-size: 13px; margin:0px; background-color: #FDFDFD ;border: none;color:#4a4949" id ="lotListPrice" name="lotListPrice"  ></input>
                                            </td>
                                            </tr>
                                            
                                            <tr style="border: none">
                                            <td style="border: none; width: 50%; color:white;font-size: 13px; background-color: #5B7EDE;padding:0px 15px;margin:0px; font-weight: bold;" >
                                             Value Added Tax (_)% :
                                            </td>
                                            <?php
                                                $sales_query = "SELECT * from tbl_tax";
                                                $sales_result = mysqli_query($connection, $sales_query);
                                                    if (mysqli_num_rows($sales_result) > 0) {
                                                    while ($row = mysqli_fetch_assoc($sales_result)) {
                                                ?>
                                                 <td class="taxID" name="taxID" hidden><?=$row['id']?></td>
                                                 
                                            <td style="border: none;background-color: #5B7EDE;color:#4a4949;padding:0px 15px;margin:0px;" >
                                          
                                            <input placeholder="₱ 0.00" style="padding:0px 15px; font-size: 13px; margin:0px; background-color: #e8e4c9 ;border: none;color:#4a4949; width: 92%" id="taxs" name="taxs" value ="<?=$row['tax']?>" hidden></input>
                                          
                                            <input placeholder="₱ 0.00" style="padding:0px 15px; font-size: 13px; width: 92%; margin:0px; background-color: #e8e4c9 ;border: none;color:#4a4949; width: 92%" id="taxs1" name="taxs1"  readonly   ></input>
                                          
                                                <script>
                                                   let tableRowElement1;
                                                   function toggleModal1(element1) {
                                                    tableRowElement1 = element1.parentElement.parentElement;

                                                   const taxID1 = tableRowElement1.getElementsByClassName('taxID')[0].innerHTML;
                                                   document.getElementById('taxID').value = taxID1;
                                                    }     
                                                    </script>  
                                                    <sup><a href="#" onclick="toggleModal1(this, 1)" data-toggle="modal" data-target="#tax" ><i class="fa fa-gears" style="font-size: 11px; color:white;"></i></a></sup>  
                                                    
                                                </td>
                                                <?php
                                                 }
                                                    }
                                                ?>   
                                            </tr>
                                            <tr style="border: none">
                                           <td style="border: none;background-color: #5B7EDE;font-size: 13px;color:white;padding:0px 15px;margin:0px; font-weight: bold;" >
                                            Subtotal :
                                            </td>
                                             <td style="border: none;background-color: #5B7EDE;color:#4a4949;padding:0px 15px;margin:0px;" >
                                            <input placeholder="₱ 0.00" readonly pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency"  style="padding:0px 15px; width: 92%; font-size: 13px; margin:0px; background-color: #e8e4c9 ;border: none;color:#4a4949" id="subtotaltax" name="subtotaltax"></input>
                                            </td>
                                            </tr>
                                            <tr style="border: none">
                                                <td style="border: none;background-color: #5B7EDE;font-size: 13px;color:white;padding:0px 15px;margin:0px; font-weight: bold;" >
                                                Less Discount :
                                                </td>
                                                    <?php
                                                    $sales_query1 = "SELECT * from tbl_discount";
                                                    $sales_result1 = mysqli_query($connection, $sales_query1);
                                                    if (mysqli_num_rows($sales_result1) > 0) {
                                                    while ($row = mysqli_fetch_assoc($sales_result1)) {
                                                    ?>
                                                                                             
                                                    <td class="discountID" name="discountID" hidden><?=$row['id']?></td>
                                                    <td style="border: none;background-color: #5B7EDE;color:#4a4949;padding:0px 15px;margin:0px;" > 
                                                    <input placeholder="₱ 0.00" style="padding:0px 15px; font-size: 13px; width: 92%; margin:0px; background-color: #e8e4c9 ;border: none;color:#4a4949;width: 92%"  id="discounts" name="discounts" value ="<?=$row['discount']?>" hidden ></input>
                                                  
                                                    <input placeholder="₱ 0.00" style="padding:0px 15px; font-size: 13px; width: 92%; margin:0px; background-color: #e8e4c9 ;border: none;color:#4a4949;width: 92%"  id="discounts1" name="discounts1" readonly></input>
                                                   <script>
                                                    let tableRowElement1;
                                                   function toggleModal1(element1) {
                                                    tableRowElement1 = element1.parentElement.parentElement;

                                                   const taxID1 = tableRowElement1.getElementsByClassName('discountID')[0].innerHTML;
                                                   document.getElementById('discountID').value = taxID1;
                                                    }     

                                                    </script>  
                                                    <sup><a href="#" onclick="toggleModal1(this, 1)" data-toggle="modal" data-target="#discount" ><i class="fa fa-gears" style="font-size: 11px; color:white;"></i></a></sup>  
                                                    
                                                </td>
                                                <?php
                                                 }
                                                    }
                                                ?>   
                                                </td>
                                           
                                            </tr>
                                            <tr style="border: none">
                                           <td style="border: none;background-color: #5B7EDE;font-size: 13px;color:white;padding:0px 15px;margin:0px; font-weight: bold;" >
                                            Subtotal :
                                            </td>
                                             <td style="border: none;background-color: #5B7EDE;color:#4a4949;padding:0px 15px;margin:0px;" >
                                            <input placeholder="₱ 0.00" readonly pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency"  style="padding:0px 15px; width: 92%; font-size: 13px; margin:0px; background-color: #e8e4c9 ;border: none;color:#4a4949" id="subtotalDiscount" name="subtotalDiscount"  ></input>
                                            </td>
                                            </tr>
                                            <tr style="border: none">
                                            
                                           <td style="border: none;background-color: #5B7EDE;font-size: 13px;color:white;padding:0px 15px;margin:0px; font-weight: bold;" >
                                            Perpetual Care Funds :
                                            </td>
                                            <?php
                                                    $sales_query1 = "SELECT * from tbl_PCF";
                                                    $sales_result1 = mysqli_query($connection, $sales_query1);
                                                    if (mysqli_num_rows($sales_result1) > 0) {
                                                    while ($row = mysqli_fetch_assoc($sales_result1)) {
                                                    ?>
                                                                                             
                                                    <td class="PCFID" name="PCFID" hidden><?=$row['id']?></td>
                                                    
                                             <td style="border: none;background-color: #5B7EDE;color:#4a4949;padding:0px 15px;margin:0px;" >
                                             
                                            
                                                <input placeholder="₱ 0.00" readonly pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency"  style="padding:0px 15px; width: 92%; font-size: 13px; margin:0px; background-color: #e8e4c9 ;border: none;color:#4a4949; width: 92%" id="pcf" name="pcf" value="₱ <?=$row['PCF']?>"  ></input>
                                               
                                               <script>
                                                    let tableRowElement1;
                                                   function toggleModal1(element1) {
                                                    tableRowElement1 = element1.parentElement.parentElement;

                                                   const PCFID1 = tableRowElement1.getElementsByClassName('PCFID')[0].innerHTML;
                                                   document.getElementById('PCFID').value = PCFID1;
                                                    }     

                                                    </script>  
                                                    <sup><a href="#" onclick="toggleModal1(this, 1)" data-toggle="modal" data-target="#PCF" ><i class="fa fa-gears" style="font-size: 11px; color:white;"></i></a></sup>  
                                                    
                                                </td>
                                                <?php
                                                 }
                                                    }
                                                ?>   
                                                </td>
                                            </tr>
                                            <tr style="border: none">
                                           <td id="PreNeedPrice" style="border: none;background-color: #5B7EDE;font-size: 13px;color:white;padding:0px 15px;margin:0px; font-weight: bold;" >
                                            Total Contract Price :
                                            </td>
                                             <td style="border: none;background-color: #5B7EDE;color:#4a4949;padding:0px 15px;margin:0px;" >
                                            <input placeholder="₱ 0.00" readonly required pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency" oninput="computedp()" style="padding:0px 15px; width: 92%; font-size: 13px; margin:0px; background-color: #FDFDFD ;border: none;color:#4a4949" id ="totalContractPrice3" name ="totalContractPrice3"></input>
                                            </td>
                                            </tr>
                                            <tr style="border: none" hidden>
                                           <td hidden style="border: none;background-color: #5B7EDE;font-size: 13px;color:white;padding:0px 15px;margin:0px; font-weight: bold;" >
                                            Add_% Mark-up :
                                            </td>
                                            <?php
                                                    $sales_query1 = "SELECT * from tbl_Markup";
                                                    $sales_result1 = mysqli_query($connection, $sales_query1);
                                                    if (mysqli_num_rows($sales_result1) > 0) {
                                                    while ($row = mysqli_fetch_assoc($sales_result1)) {
                                                    ?>
                                                                                             
                                                    <td hidden class="MarkupID" name="MarkupID" hidden><?=$row['id']?></td>
                                             <td hidden style="border: none;background-color: #5B7EDE;color:#4a4949;padding:0px 15px;margin:0px;" >
                                            <input  placeholder="₱ 0.00"  readonly style="padding:0px 15px; font-size: 13px; margin:0px; background-color: #e8e4c9; width: 92% ;border: none;color:#4a4949;width: 92%" id ="markup" name ="markup" value ="<?=$row['markup']?>" hidden></input>
                                            <input  placeholder="₱ 0.00" readonly style="padding:0px 15px; font-size: 13px; margin:0px; background-color: #e8e4c9 ; width: 92%;border: none;color:#4a4949;width: 92%" id ="markup1" name ="markup1" ></input>
                                           
                                            <script>
                                                    let tableRowElement1;
                                                    function toggleModal1(element1) {
                                                    tableRowElement1 = element1.parentElement.parentElement;

                                                    const MarkupID1 = tableRowElement1.getElementsByClassName('MarkupID')[0].innerHTML;
                                                    document.getElementById('MarkupID').value = MarkupID1;
                                                    }     

                                                    </script>  
                                                    <sup><a href="#" onclick="toggleModal1(this, 1)" data-toggle="modal" data-target="#Markup" ><i class="fa fa-gears" style="font-size: 11px; color:white;"></i></a></sup>  
                                                    
                                                </td>
                                                <?php
                                                 }
                                                    }
                                                ?>   
                                            </td>
                                            </tr>
                                            <tr hidden style="border: none">
                                           <td  style="border: none;background-color: #5B7EDE;font-size: 13px;color:white;padding:0px 15px;margin:0px; font-weight: bold;" >
                                            At-Needs TCP :
                                            </td>
                                             <td style="border: none;background-color: #5B7EDE;color:#4a4949;padding:0px 15px;margin:0px;" >
                                            <input id="atNeedTCP" name="atNeedTCP"  placeholder="₱ 0.00" style="padding:0px 15px; font-size: 13px; margin:0px; background-color: #e8e4c9 ; width: 92%;border: none;color:#4a4949"></input>
                                            </td>
                                            </tr>
                                            <tr style="border: none">
                                           <td style="border: none;background-color: #5B7EDE;font-size: 13px;color:white;padding:0px 15px;margin:0px; font-weight: bold;" >
                                            Downpayment : <input placeholder="0.00" required oninput="computedp()" pattern="^\%\d{1,3}(,\d{3})*(\.\d+)?%"    type="number" style="float: right; padding:0px 5px; font-size: 13px; margin:0px; background-color: #e8e4c9 ;border: none;color:#4a4949;width: 25%"  id="dpPercentage" name="dpPercentage"   ></input> <a style= "float: right; font-size: 13px; margin-right:5px; border: none;color:#fffff;width: 5%">% </a>
                                            </td>
                                             <td style="border: none;background-color: #5B7EDE;color:#4a4949;padding:0px 15px;margin:0px;" >
                                            <input placeholder="₱ 0.00" pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" oninput="computedownpaymentPercentage()" data-type="currency" style="padding:0px 15px; width: 92%; font-size: 13px; margin:0px; background-color: #FDFDFD ;border: none;color:#4a4949" id="dpPercentage2" name="dpPercentage2" ></input>
                                            </td>
                                            </tr>
                                            <tr style="border: none">
                                            <td style="border: none;background-color: #5B7EDE;font-size: 13px;color:white;padding:0px 15px;margin:0px; font-weight: bold;" >
                                            Balance :
                                            </td>
                                             <td style="border: none;background-color: #5B7EDE;color:#4a4949;padding:0px 15px;margin:0px;" >
                                            <input placeholder="₱ 0.00" readonly pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency"  style="padding:0px 15px; width: 92%; font-size: 13px; margin:0px; background-color: #e8e4c9 ;border: none;color:#4a4949" hidden id="balance1" name="balance1"  ></input>
                                            
                                            <input placeholder="₱ 0.00" readonly pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency"  style="padding:0px 15px; width: 92%; font-size: 13px; margin:0px; background-color: #e8e4c9 ;border: none;color:#4a4949" id="balance" name="balance"  ></input>
                                            <input placeholder="₱ 0.00"hidden readonly pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency"  style="padding:0px 15px; width: 92%; font-size: 13px; margin:0px; background-color: #e8e4c9 ;border: none;color:#4a4949" id="Interest" name="Interest"  ></input>
                                            <input placeholder="₱ 0.00"hidden readonly pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency"  style="padding:0px 15px; width: 92%; font-size: 13px; margin:0px; background-color: #e8e4c9 ;border: none;color:#4a4949" id="Principal" name="Principal"  ></input>
                                              
                                        </td>
                                            </tr> 
                                            <tr id="monthlyInstallmenttr" style="border: none; display: none">
                                           <td style="border: none;background-color: #5B7EDE;font-size: 13px;color:white;padding:0px 15px;margin:0px; font-weight: bold;" >
                                            1<sup>st</sup> Half Monthly Installment :
                                            </td>
                                            <?php
                                                $sales_query = "SELECT * from diminishingratefirsthalf";
                                                $sales_result = mysqli_query($connection, $sales_query);
                                                    if (mysqli_num_rows($sales_result) > 0) {
                                                    while ($row = mysqli_fetch_assoc($sales_result)) {
                                                ?>
                                                 <td class="diminishingrateID1" name="diminishingrateID1" hidden><?=$row['id']?></td>

                                             <td style="border: none;background-color: #5B7EDE;color:#4a4949;padding:0px 15px;margin:0px;" >
                                                <input placeholder="₱ 0.00" id="MI1" name="MI1" readonly  pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency"  style="padding:0px 15px; width: 92%; font-size: 13px; margin:0px; background-color: #FDFDFD ;border: none;color:#4a4949" ></input>
                                                <input placeholder="₱ 0.00" hidden id="MIInterestPercentage1" value="<?=$row['interest']?>" name="MIInterestPercentage1" readonly  pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency"  style="padding:0px 15px; width: 92%; font-size: 13px; margin:0px; background-color: #FDFDFD ;border: none;color:#4a4949" ></input>
                                                <input placeholder="₱ 0.00" hidden id="MIPrincipalPercentage1" value="<?=$row['principal']?>" name="MIPrincipalPercentage1" readonly  pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency"  style="padding:0px 15px; width: 92%; font-size: 13px; margin:0px; background-color: #FDFDFD ;border: none;color:#4a4949" ></input>
                                                 <input placeholder="₱ 0.00" hidden id="MIPercentage1" value="<?=$row['deminishingPercentage']?>" name="MIPercentage1" readonly  pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency"  style="padding:0px 15px; width: 92%; font-size: 13px; margin:0px; background-color: #FDFDFD ;border: none;color:#4a4949" ></input>
                                                
                                          
                                                    <sup><a href="#" onclick="toggleModal1(this, 1)" data-toggle="modal" data-target="#firstMonthMIDiv" ><i class="fa fa-gears" style="font-size: 11px; color:white;"></i></a></sup>  
                                                    
                                                </td>
                                                <?php
                                                 }
                                                    }
                                                ?>      
                                        </td>
                                            <tr id="monthlyInstallmenttr2" style="border: none; display: none">
                                           <td style="border: none;background-color: #5B7EDE;font-size: 13px;color:white;padding:0px 15px;margin:0px; font-weight: bold;" >
                                           2<sup>nd</sup> Half Monthly Installment :
                                            </td>
                                            <?php
                                                $sales_query = "SELECT * from diminishingratesecondhalf";
                                                $sales_result = mysqli_query($connection, $sales_query);
                                                    if (mysqli_num_rows($sales_result) > 0) {
                                                    while ($row = mysqli_fetch_assoc($sales_result)) {
                                                ?>
                                                 <td class="taxID" name="taxID" hidden><?=$row['id']?></td>
                                             <td style="border: none;background-color: #5B7EDE;color:#4a4949;padding:0px 15px;margin:0px;" >
                                            <input placeholder="₱ 0.00" id="MI2" name="MI2" readonly  pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency"  style="padding:0px 15px; width: 92%; font-size: 13px; margin:0px; background-color: #FDFDFD ;border: none;color:#4a4949" ></input>
                                            <input placeholder="₱ 0.00" hidden value="<?=$row['interest']?>" id="MIInterestPercentage2" name="MIInterestPercentage2" readonly  pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency"  style="padding:0px 15px; width: 92%; font-size: 13px; margin:0px; background-color: #FDFDFD ;border: none;color:#4a4949" ></input>
                                            <input placeholder="₱ 0.00" hidden id="MIPrincipalPercentage2" value="<?=$row['principal']?>" name="MIPrincipalPercentage2" readonly  pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency"  style="padding:0px 15px; width: 92%; font-size: 13px; margin:0px; background-color: #FDFDFD ;border: none;color:#4a4949" ></input>
                                            <input placeholder="₱ 0.00" hidden id="MIPercentage2" value="<?=$row['deminishingPercentage']?>" name="MIPercentage2" readonly  pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency"  style="padding:0px 15px; width: 92%; font-size: 13px; margin:0px; background-color: #FDFDFD ;border: none;color:#4a4949" ></input>
                                                  
                                                    <sup><a href="#" onclick="toggleModal1(this, 1)" data-toggle="modal" data-target="#secondMonthMIDiv" ><i class="fa fa-gears" style="font-size: 11px; color:white;"></i></a></sup>  
                                                    
                                                </td>
                                                <?php
                                                 }
                                                    }
                                                ?>      
                                        </td>
                                            
                                            </tr>
                                            <tr id="factorRatetr"  style="border: ; display: none">
                                            <td style="border: none;background-color: #5B7EDE;font-size: 13px;color:white;padding:0px 15px;margin:0px; font-weight: bold;" >
                                            Factor rate : <input  placeholder="0.00"  pattern="^\%\d{1,3}(,\d{3})*(\.\d+)?%"    type="number" style="float: right; padding:0px 5px; font-size: 13px; margin:0px; background-color: #e8e4c9 ;border: none;color:#4a4949;width: 25%"  id="factorratePercentage" name="factorratePercentage"  readonly ></input> <a style= "float: right; font-size: 13px; margin-right:5px; border: none;color:#fffff;width: 5%">% </a>
                                            </td>
                                             <td style="border: none;background-color: #5B7EDE;color:#4a4949;padding:0px 15px;margin:0px;" >
                                            <input placeholder="₱ 0.00" id="factorrate" name="factorrate" readonly  pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency"  style="padding:0px 15px; width: 92%; font-size: 13px; margin:0px; background-color: #e8e4c9 ;border: none;color:#4a4949" ></input> 
                                            </td>
                                            </tr>
                                            <tr id="noYearstr" style="border: none; padding-bottom:30px; display: none">
                                           <td style="border: none;background-color: #5B7EDE;color:white;font-size: 13px;padding:0px 15px;margin:0px; font-weight: bold;" >
                                            No. of Years :
                                            
                                            </td>
                                            
                                             <td style="border: none;background-color: #5B7EDE;color:#4a4949;padding:0px 15px;margin:0px;" >
                                             <select  type="number" oninput="MA()"  style="padding:0px 15px; font-size: 13px; margin:0px; background-color: #FDFDFD ; width: 92%;border: none;color:#4a4949" placeholder="₱ 0.00" id="NoOfMonths" name="NoOfMonths">
                                                    <option > --- SELECT TERMS ---</option> 
                                                    <option name="12" value="12"> 1 Year (12 Months)</option> 
                                                    <option name="24" value="24"> 2 Years  (24 Months)</option> 
                                                    <option name="36" value="36"> 3 Years  (36 Months)</option> 
                                                    <option name="48" value="48"> 4 Years (48 Months)</option> 
                                                    <option name="60" value="60"> 5 Years (60 Months)</option> 
                                                    <option name="72" value="72"> 6 Years (72 Months)</option> 
                                                    <option name="84" value="84"> 7 Years (84 Months)</option> 
                                                    <option name="96" value="96"> 8 Years (96 Months)</option> 
                                                    <option name="108" value="108"> 9 Years (108 Months)</option> 
                                                    <option name="120" value="120"> 10 Years (120 Months)</option> 
                                                    </select>
                                            </td>
                                            </tr>
                                            <tr style="border: none; padding-bottom: 30px; ">
                                            <td style="border: none;background-color: #5B7EDE;color:#5B7EDE;padding:0px 15px;margin:0px;" >
                                            .
                                            </td>
                                            <td style="border: none;background-color: #5B7EDE;color:#5B7EDE;padding:0px 15px;margin:0px;" >
                                            .
                                            </td>
                                            </tr>
                                            <tr style="border: none; padding-bottom: 30px; ">
                                            <td style="border: none;background-color: white;color:#5B7EDE;padding:0px 15px;margin:0px;" >
                                            .
                                            <input value="<?php echo $Name; ?>" id="user" name="user" hidden>
                                            </td>
                                            <td style="border: none;background-color: white;color:#5B7EDE;padding:0px 15px;margin: 10px 0px ;" >
                                                    <button type="submit" name="btnSavecryptDiminishingRate" class="btn btn-primary" style="padding: 2px 15px; float: right; ;margin: 15px 0px ;" >Save</button>
                                            </td>
                                            </tr>
                                        </table>
                                    </div>
                                 
                                </div>
                               
                        </div>
                    </div>
                </div>
            </div>
                <!-- /.container-fluid -->
        </form>
        
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

    <!-- 1st Month MI modal-->
<form method="Post" action="Insert_LotCryptDescription.php">
<div class="modal fade bd-example-modal-vat" tabindex="-1" role="dialog" id="firstMonthMIDiv" aria-labelledby="myLargeModalLabel" aria-hidden="true" style=" margin: auto; bottom: 0px; left: 0px; right:0px; width: 98%; color:#2F4F4F">
  <div class="modal-dialog" role="document">
    <div class="modal-content" >
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
                       
                            <div class="modal-body" style="color:#4a4949">
                                 <table id="dtcryptRecord" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                                        <?php
                                                $sales_query = "SELECT * from diminishingratefirsthalf";
                                                $sales_result = mysqli_query($connection, $sales_query);
                                                    if (mysqli_num_rows($sales_result) > 0) {
                                                    while ($row = mysqli_fetch_assoc($sales_result)) {
                                                ?>

                                            <tr style="border: 2px solid #e3e6f0">
                                                <td  style= "font-size: 14px; color:#4a4949 ">Interest :</td>
                                                <td  style= "font-size: 14px; color:#4a4949 ">
                                                % <input placeholder="0.00" style="padding:0px 15px; font-size: 13px; margin:0px; background-color: white;border: none;color:#4a4949; width: 90%" type="number" pattern="[0-9]+([\,|\.][0-9]+)?" name ="inputInterest1" id ="inputInterest1" value="<?=$row['interest']?>" required></input>
                                                <input placeholder="0.00" style="padding:0px 15px; font-size: 13px; margin:0px; background-color: white;border: none;color:#4a4949; width: 90%" type="number" pattern="[0-9]+([\,|\.][0-9]+)?" name ="inputfirstmonthMIID" id ="inputfirstmonthMIID" value="1" hidden  ></input>
                                                      
                                            </tr>
                                            <tr style="border: 2px solid #e3e6f0">
                                                <td  style= "font-size: 14px; color:#4a4949 ">Principal :</td>
                                                <td  style= "font-size: 14px; color:#4a4949 ">
                                                % <input placeholder="0.00" style="padding:0px 15px; font-size: 13px; margin:0px; background-color: white;border: none;color:#4a4949; width: 90%" type="number" pattern="[0-9]+([\,|\.][0-9]+)?" name ="inputPrincipal1" id ="inputPrincipal1" value="<?=$row['principal']?>" required></input>
                                                
                                            </tr>
                                            <tr style="border: 2px solid #e3e6f0">
                                                <td  style= "font-size: 14px; color:#4a4949 "> 1<sup>st</sup> Half Diminishing Percentage :</td>
                                                <td  style= "font-size: 14px; color:#4a4949 ">
                                                % <input placeholder="0.00" style="padding:0px 15px; font-size: 13px; margin:0px; background-color: white;border: none;color:#4a4949; width: 90%" type="number" pattern="[0-9]+([\,|\.][0-9]+)?" name ="inputPercentage1" id ="inputPercentage1" value="<?=$row['deminishingPercentage']?>"  required></input>
                                                
                                            </tr>
                                            
                                        <?php
                                                 }
                                                    }
                                                ?>   
                                        </table>
                            </div>
                       

      
      <div class="modal-footer">
      <button type="submit" class="btn btn-primary" style="font-size: 11px" name="firstMonthMIbutton"> Save</button>
     
        <button type="button" class="btn btn-secondary" data-dismiss="modal" style="font-size: 11px"> Close</button>
      </div>
    </div>
  </div>
 </div>
</form>
    <!-- 2nd Month MI modal-->
<form method="Post" action="Insert_LotCryptDescription.php">
<div class="modal fade bd-example-modal-vat" tabindex="-1" role="dialog" id="secondMonthMIDiv" aria-labelledby="myLargeModalLabel" aria-hidden="true" style=" margin: auto; bottom: 0px; left: 0px; right:0px; width: 98%; color:#2F4F4F">
  <div class="modal-dialog" role="document">
    <div class="modal-content" >
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
                       
                            <div class="modal-body" style="color:#4a4949">
                                 <table id="dtcryptRecord" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                                                <?php
                                                $sales_query = "SELECT * from diminishingratesecondhalf";
                                                $sales_result = mysqli_query($connection, $sales_query);
                                                    if (mysqli_num_rows($sales_result) > 0) {
                                                    while ($row = mysqli_fetch_assoc($sales_result)) {
                                                ?>
                                                
                                            <tr style="border: 2px solid #e3e6f0">
                                                <td  style= "font-size: 14px; color:#4a4949 ">Interest :</td>
                                                <td  style= "font-size: 14px; color:#4a4949 ">
                                                <input placeholder="0.00" style="padding:0px 15px; font-size: 13px; margin:0px; background-color: white;border: none;color:#4a4949; width: 100%" type="number" pattern="[0-9]+([\,|\.][0-9]+)?" value="<?=$row['interest']?>" name ="inputInterest2" id ="inputInterest2" required></input>
                                                <input placeholder="0.00" style="padding:0px 15px; font-size: 13px; margin:0px; background-color: white;border: none;color:#4a4949; width: 100%" type="number" pattern="[0-9]+([\,|\.][0-9]+)?" name ="inputsecondmonthMIID" id ="inputsecondmonthMIID" value="1" hidden  ></input>
                                                      
                                            </tr>
                                            <tr style="border: 2px solid #e3e6f0">
                                                <td  style= "font-size: 14px; color:#4a4949 ">Principal :</td>
                                                <td  style= "font-size: 14px; color:#4a4949 ">
                                                <input placeholder="0.00" style="padding:0px 15px; font-size: 13px; margin:0px; background-color: white;border: none;color:#4a4949; width: 100%" type="number" pattern="[0-9]+([\,|\.][0-9]+)?" value="<?=$row['principal']?>" name ="inputPrincipal2" id ="inputPrincipal2"  required></input>
                                                
                                            </tr>
                                            <tr style="border: 2px solid #e3e6f0">
                                                <td  style= "font-size: 14px; color:#4a4949 ">2<sup>nd</sup> Half Diminishing Percentage :</td>
                                                <td  style= "font-size: 14px; color:#4a4949 ">
                                                <input placeholder="0.00" style="padding:0px 15px; font-size: 13px; margin:0px; background-color: white;border: none;color:#4a4949; width: 100%" type="number"  value="<?=$row['deminishingPercentage']?>" pattern="[0-9]+([\,|\.][0-9]+)?" name ="inputPercentage2" id ="inputPercentage2"   required></input>
                                                
                                            </tr>
                                            <?php
                                                 }
                                                    }
                                                ?>   
                                        </table>
                            </div>
                       

                       

      
      <div class="modal-footer">
      <button type="submit" class="btn btn-primary" style="font-size: 11px" name="secondMonthMI"> Save</button>
     
        <button type="button" class="btn btn-secondary" data-dismiss="modal" style="font-size: 11px"> Close</button>
      </div>
    </div>
  </div>
 </div>
</form>
<!-- taxmodal-->
<form method="Post" action="Insert_LotCryptDescription.php">
<div class="modal fade bd-example-modal-vat" tabindex="-1" role="dialog" id="tax" aria-labelledby="myLargeModalLabel" aria-hidden="true" style=" margin: auto; bottom: 0px; left: 0px; right:0px; width: 98%; color:#2F4F4F">
  <div class="modal-dialog" role="document">
    <div class="modal-content" >
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
                       
                            <div class="modal-body" style="color:#4a4949">
                                 <table id="dtcryptRecord" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                                            <tr style="border: 2px solid #e3e6f0">
                                                <td  style= "font-size: 14px; color:#4a4949 ">Value Added Tax (_)% :</td>
                                                <td  style= "font-size: 14px; color:#4a4949 ">
                                                <input  style="padding:0px 15px; font-size: 13px; margin:0px; background-color: white;border: none;color:#4a4949; width: 100%" type="number" pattern="[0-9]+([\,|\.][0-9]+)?" name ="tax" id ="tax" required></input>
                                                <input  style="padding:0px 15px; font-size: 13px; margin:0px; background-color: transparent;border: none;color:#4a4949; width: 100%" type="number" hidden></input>
                                                <input  style="padding:0px 15px; font-size: 13px; margin:0px; background-color: transparent;border: none;color:#4a4949" id ="taxID" name ="taxID" value="1" step="0.01" hidden></input></td>
                                              
                                            </tr>
                                        </table>
                            </div>
                       

      
      <div class="modal-footer">
      <button type="submit" class="btn btn-primary" style="font-size: 11px" name="Tax"> Save</button>
     
        <button type="button" class="btn btn-secondary" data-dismiss="modal" style="font-size: 11px"> Close</button>
      </div>
    </div>
  </div>
 </div>
</form>
<!-- discountmodal-->
<form method="Post" action="Insert_LotCryptDescription.php">
<div class="modal fade bd-example-modal-vat" tabindex="-1" role="dialog" id="discount" aria-labelledby="myLargeModalLabel" aria-hidden="true" style=" margin: auto; bottom: 0px; left: 0px; right:0px; width: 98%; color:#2F4F4F">
  <div class="modal-dialog" role="document">
    <div class="modal-content" >
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
                       
                            <div class="modal-body" style="color:#4a4949">
                                 <table id="dtcryptRecord" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                                            <tr style="border: 2px solid #e3e6f0">
                                                <td  style= "font-size: 14px; color:#4a4949 ">Discount% :</td>
                                                <td  style= "font-size: 14px; color:#4a4949 ">
                                                <input  style="padding:0px 15px; font-size: 13px; margin:0px; background-color: white;border: none;color:#4a4949; width: 100%" type="number" pattern="[0-9]+([\,|\.][0-9]+)?" name ="discount" id ="discount" required></input>
                                                <input  style="padding:0px 15px; font-size: 13px; margin:0px; background-color: transparent;border: none;color:#4a4949; width: 100%" type="number" hidden></input>
                                                <input  style="padding:0px 15px; font-size: 13px; margin:0px; background-color: transparent;border: none;color:#4a4949" id ="discountID" name ="discountID" value="1" step="0.01" hidden></input></td>
                                              
                                            </tr>
                                        </table>
                            </div>
                       

      
      <div class="modal-footer">
      <button type="submit" class="btn btn-primary" style="font-size: 11px" name="Discount"> Save</button>
     
        <button type="button" class="btn btn-secondary" data-dismiss="modal" style="font-size: 11px"> Close</button>
      </div>
    </div>
  </div>
 </div>
</form>

<!-- PCFmodal-->
<form method="Post" action="Insert_LotCryptDescription.php">
<div class="modal fade bd-example-modal-vat" tabindex="-1" role="dialog" id="PCF" aria-labelledby="myLargeModalLabel" aria-hidden="true" style=" margin: auto; bottom: 0px; left: 0px; right:0px; width: 98%; color:#2F4F4F">
  <div class="modal-dialog" role="document">
    <div class="modal-content" >
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
                       
                            <div class="modal-body" style="color:#4a4949">
                                 <table id="dtcryptRecord" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                                            <tr style="border: 2px solid #e3e6f0">
                                                <td  style= "font-size: 14px; color:#4a4949 ">Perpetual Care Funds :</td>
                                                <td  style= "font-size: 14px; color:#4a4949 ">
                                                <input  style="padding:0px 15px; font-size: 13px; margin:0px; background-color: white;border: none;color:#4a4949; width: 100%" type="number" pattern="[0-9]+([\,|\.][0-9]+)?" name ="PCF1" id ="PCF1" required></input>
                                                <input  style="padding:0px 15px; font-size: 13px; margin:0px; background-color: transparent;border: none;color:#4a4949; width: 100%" type="number" hidden></input>
                                                <input  style="padding:0px 15px; font-size: 13px; margin:0px; background-color: transparent;border: none;color:#4a4949" id ="PCFID" name ="PCFID" value="1" step="0.01" hidden></input></td>
                                              
                                            </tr>
                                        </table>
                            </div>
                       

      
      <div class="modal-footer">
      <button type="submit" class="btn btn-primary" style="font-size: 11px" name="PCF"> Save</button>
     
        <button type="button" class="btn btn-secondary" data-dismiss="modal" style="font-size: 11px"> Close</button>
      </div>
    </div>
  </div>
 </div>
</form>
<!-- Markupmodal-->
<form method="Post" action="Insert_LotCryptDescription.php">
<div class="modal fade bd-example-modal-vat" tabindex="-1" role="dialog" id="Markup" aria-labelledby="myLargeModalLabel" aria-hidden="true" style=" margin: auto; bottom: 0px; left: 0px; right:0px; width: 98%; color:#2F4F4F">
  <div class="modal-dialog" role="document">
    <div class="modal-content" >
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
                       
                            <div class="modal-body" style="color:#4a4949">
                                 <table id="dtcryptRecord" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                                            <tr style="border: 2px solid #e3e6f0">
                                                <td  style= "font-size: 14px; color:#4a4949 ">Perpetual Care Funds :</td>
                                                <td  style= "font-size: 14px; color:#4a4949 ">
                                                <input  style="padding:0px 15px; font-size: 13px; margin:0px; background-color: white;border: none;color:#4a4949; width: 100%" type="number" pattern="[0-9]+([\,|\.][0-9]+)?" name ="markup1" id ="markup1" required></input>
                                                <input  style="padding:0px 15px; font-size: 13px; margin:0px; background-color: transparent;border: none;color:#4a4949; width: 100%" type="number" hidden></input>
                                                <input  style="padding:0px 15px; font-size: 13px; margin:0px; background-color: transparent;border: none;color:#4a4949" id ="markupID" name ="markupID" value="1" step="0.01" hidden></input></td>
                                              
                                            </tr>
                                        </table>
                            </div>
                       

      
      <div class="modal-footer">
      <button type="submit" class="btn btn-primary" style="font-size: 11px" name="markup"> Save</button>
     
        <button type="button" class="btn btn-secondary" data-dismiss="modal" style="font-size: 11px"> Close</button>
      </div>
    </div>
  </div>
 </div>
</form>
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
     <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#lotListPrice01').keyup(function(e) {
                var v = $('#lotListPrice01').val();
                $('#lotListPrice').val(v);
            })
        });
    </script>
    </script>
     <script>
        $(document).ready(function () {
        $('#dtcryptDescRecord').DataTable();
        $('.dataTables_length').addClass('bs-select');
        });
    </script>
    <script>
       
        let a =  document.getElementById("taxs").value;
        let discounts =  document.getElementById("discounts").value;
        let pcf =  document.getElementById("pcf").value;
        let markup =  document.getElementById("markup").value;
        let lotListPrice =  document.getElementById("lotListPrice").value;
        let b =  100;

        let c = parseInt(a) / parseInt(b); 
        let discountpercentange = parseInt(discounts) / parseInt(b); 
        let markuppercentange = parseInt(markup) / parseInt(b); 
        document.getElementById("taxs1").value = c;
        document.getElementById("discounts1").value = discountpercentange;
        document.getElementById("markup1").value = markuppercentange;
        
        function compute() {
            
            let a1 =  document.getElementById("taxs").value;
            let lotListPrice1 =  document.getElementById("lotListPrice").value;
            let discounts1 =  document.getElementById("discounts").value;
            let pcf1 =  document.getElementById("pcf").value;
            
            let b1 =  100;
            let c1 = parseInt(a1) / parseInt(b1); 
            var newStr = lotListPrice1.replace(/₱|,/g, '');
          
            let discountpercentange1 = parseInt(discounts1) / parseInt(b1); 
            let subtotal = parseFloat(c1) * parseFloat(newStr);
            let discountsubtotal = parseFloat(discountpercentange1) * parseFloat(newStr);
    
            
            let discountsubtotalFixed = discountsubtotal.toFixed(2);
            let taxsubtotalFixed = subtotal.toFixed(2);
            let replacedtaxsubtotalFixed =taxsubtotalFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            let replaceddiscountsubtotalFixed =discountsubtotalFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            document.getElementById("subtotaltax").value = "₱ " + replacedtaxsubtotalFixed;
            document.getElementById("subtotalDiscount").value =  "₱ " + replaceddiscountsubtotalFixed;

            var subtotaltax = taxsubtotalFixed.replace(/₱|,/g, '');
            var subtotaldiscounted = discountsubtotalFixed.replace(/₱|,/g, '');
            var subtotalpcf = pcf1.replace(/₱|,/g, '');

            let totalContractPrice = (parseFloat(taxsubtotalFixed) + parseFloat(subtotalpcf) + parseFloat(newStr) - parseFloat(subtotaldiscounted));
            let totalContractPriceFixed = totalContractPrice.toFixed(2);
           let replacedtotalContractPriceFixed = totalContractPriceFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            document.getElementById("totalContractPrice3").value = "₱ " + replacedtotalContractPriceFixed;

            document.getElementById("dpPercentage2").value = "";
            document.getElementById("dpPercentage").value = "";
            document.getElementById("balance").value = "";
            document.getElementById("MI").value = "";
        document.getElementById("NoOfMonths").value = "";
        }
        
    function computedownpaymentPercentage() {
        let tcpcomputeDP =  document.getElementById("totalContractPrice3").value;
        let dpPercentagecomputedp =  document.getElementById("dpPercentage").value;

        let NoOfMonths=  document.getElementById("NoOfMonths").value;
        let llp=  document.getElementById("lotListPrice").value;
        let balance  =  document.getElementById("balance").value;
        let tax  =  document.getElementById("taxs1").value;
        let pcf  =  document.getElementById("pcf").value;
        let subtotaltax  =  document.getElementById("subtotaltax").value;
        let downpayment  =  document.getElementById("dpPercentage2").value;
        let factorrate=  document.getElementById("factorrate").value;
        var tcpcomputeDPreplace = tcpcomputeDP.replace(/₱|,/g, '');
        var downpaymentreplace = downpayment.replace(/₱|,/g, '');
        //computebalance
        let computeBalance = parseFloat(tcpcomputeDPreplace) - parseFloat(downpaymentreplace);
        let computeBalanceFixed = computeBalance.toFixed(0);
        let replacedcomputeBalance = computeBalanceFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        document.getElementById("balance").value = "₱ " + replacedcomputeBalance;
        //computepercentage
        let computeDownpayment = (parseFloat(downpaymentreplace)/parseFloat(tcpcomputeDPreplace)) * 100;
        let computeDownpaymentFixed = computeDownpayment.toFixed(0);
        document.getElementById("dpPercentage").value = computeDownpaymentFixed;

        //monthly installement

        var newStr3 = balance.replace(/₱|,/g, ''); 
        var newStr3llp = llp.replace(/₱|,/g, ''); 
        var newStr3pcf = pcf.replace(/₱|,/g, ''); 
        var newStr3downpayment = downpayment.replace(/₱|,/g, ''); 
        var newStr3subtotaltax = subtotaltax.replace(/₱|,/g, ''); 

       
        if (factorrate == "0.0907308578592074") {
        let monthlyInstallment = (parseFloat(computeBalanceFixed) /12); 
        let monthlypercentage1 = document.getElementById("MIPercentage1").value;
        let monthlypercentage2 = document.getElementById("MIPercentage2").value;
        let firsthalfmonthly = ((parseFloat(monthlyInstallment)*12)/6) * (parseFloat(monthlypercentage1)/100);
        let secondhalfmonthly = ((parseFloat(monthlyInstallment)*12)/6) * (parseFloat(monthlypercentage2)/100);
        const firsthalfmonthlyfixed = firsthalfmonthly.toFixed(2);
        const secondhalfmonthlyfixed = secondhalfmonthly.toFixed(2);
        firsthalfmonthlycomplete=firsthalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        secondhalfmonthlycomplete=secondhalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        
        document.getElementById("MI1").value = "₱ " +  firsthalfmonthlycomplete;
        document.getElementById("MI2").value = "₱ " +  secondhalfmonthlycomplete;
        }
        else if (factorrate == "0.0494422640854967") {
        let monthlyInstallment = (parseFloat(computeBalanceFixed) /24); 
        let monthlypercentage1 = document.getElementById("MIPercentage1").value;
        let monthlypercentage2 = document.getElementById("MIPercentage2").value;
        let firsthalfmonthly = ((parseFloat(monthlyInstallment)*24)/12) * (parseFloat(monthlypercentage1)/100);
        let secondhalfmonthly = ((parseFloat(monthlyInstallment)*24)/12) * (parseFloat(monthlypercentage2)/100);
        const firsthalfmonthlyfixed = firsthalfmonthly.toFixed(2);
        const secondhalfmonthlyfixed = secondhalfmonthly.toFixed(2);
        firsthalfmonthlycomplete=firsthalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        secondhalfmonthlycomplete=secondhalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        
        document.getElementById("MI1").value = "₱ " +  firsthalfmonthlycomplete;
        document.getElementById("MI2").value = "₱ " +  secondhalfmonthlycomplete;
        }
        
        else if (factorrate == "0.036152395535917") {
            
        let monthlyInstallment = (parseFloat(computeBalanceFixed) /36); 
        let monthlypercentage1 = document.getElementById("MIPercentage1").value;
        let monthlypercentage2 = document.getElementById("MIPercentage2").value;
        let firsthalfmonthly = ((parseFloat(monthlyInstallment)*36)/18) * (parseFloat(monthlypercentage1)/100);
        let secondhalfmonthly = ((parseFloat(monthlyInstallment)*36)/18) * (parseFloat(monthlypercentage2)/100);
        const firsthalfmonthlyfixed = firsthalfmonthly.toFixed(2);
        const secondhalfmonthlyfixed = secondhalfmonthly.toFixed(2);
        firsthalfmonthlycomplete=firsthalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        secondhalfmonthlycomplete=secondhalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        
        document.getElementById("MI1").value = "₱ " +  firsthalfmonthlycomplete;
        document.getElementById("MI2").value = "₱ " +  secondhalfmonthlycomplete;
        }
        
        else if (factorrate == "0.030430362343858") {
            
        let monthlyInstallment = (parseFloat(computeBalanceFixed) /48); 
        let monthlypercentage1 = document.getElementById("MIPercentage1").value;
        let monthlypercentage2 = document.getElementById("MIPercentage2").value;
        let firsthalfmonthly = ((parseFloat(monthlyInstallment)*48)/24) * (parseFloat(monthlypercentage1)/100);
        let secondhalfmonthly = ((parseFloat(monthlyInstallment)*48)/24) * (parseFloat(monthlypercentage2)/100);
        const firsthalfmonthlyfixed = firsthalfmonthly.toFixed(2);
        const secondhalfmonthlyfixed = secondhalfmonthly.toFixed(2);
        firsthalfmonthlycomplete=firsthalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        secondhalfmonthlycomplete=secondhalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        
        document.getElementById("MI1").value = "₱ " +  firsthalfmonthlycomplete;
        document.getElementById("MI2").value = "₱ " +  secondhalfmonthlycomplete;
        }
        else if (factorrate == "0.0276189120353598") {
            
        let monthlyInstallment = (parseFloat(computeBalanceFixed) /60); 
        let monthlypercentage1 = document.getElementById("MIPercentage1").value;
        let monthlypercentage2 = document.getElementById("MIPercentage2").value;
        let firsthalfmonthly = ((parseFloat(monthlyInstallment)*60)/30) * (parseFloat(monthlypercentage1)/100);
        let secondhalfmonthly = ((parseFloat(monthlyInstallment)*60)/30) * (parseFloat(monthlypercentage2)/100);
        const firsthalfmonthlyfixed = firsthalfmonthly.toFixed(2);
        const secondhalfmonthlyfixed = secondhalfmonthly.toFixed(2);
        firsthalfmonthlycomplete=firsthalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        secondhalfmonthlycomplete=secondhalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        
        document.getElementById("MI1").value = "₱ " +  firsthalfmonthlycomplete;
        document.getElementById("MI2").value = "₱ " +  secondhalfmonthlycomplete;
        }
        else if (factorrate == "0.0263268307088938") {
            
            let monthlyInstallment = (parseFloat(computeBalanceFixed) /72); 
            let monthlypercentage1 = document.getElementById("MIPercentage1").value;
            let monthlypercentage2 = document.getElementById("MIPercentage2").value;
            let firsthalfmonthly = ((parseFloat(monthlyInstallment)*72)/36) * (parseFloat(monthlypercentage1)/100);
            let secondhalfmonthly = ((parseFloat(monthlyInstallment)*72)/36) * (parseFloat(monthlypercentage2)/100);
            const firsthalfmonthlyfixed = firsthalfmonthly.toFixed(2);
            const secondhalfmonthlyfixed = secondhalfmonthly.toFixed(2);
            firsthalfmonthlycomplete=firsthalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            secondhalfmonthlycomplete=secondhalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            
            document.getElementById("MI1").value = "₱ " +  firsthalfmonthlycomplete;
            document.getElementById("MI2").value = "₱ " +  secondhalfmonthlycomplete;
        }
        else if (factorrate == "0.02467581178194748") {
            
            let monthlyInstallment = (parseFloat(computeBalanceFixed) /84); 
            let monthlypercentage1 = document.getElementById("MIPercentage1").value;
            let monthlypercentage2 = document.getElementById("MIPercentage2").value;
            let firsthalfmonthly = ((parseFloat(monthlyInstallment)*84)/42) * (parseFloat(monthlypercentage1)/100);
            let secondhalfmonthly = ((parseFloat(monthlyInstallment)*84)/42) * (parseFloat(monthlypercentage2)/100);
            const firsthalfmonthlyfixed = firsthalfmonthly.toFixed(2);
            const secondhalfmonthlyfixed = secondhalfmonthly.toFixed(2);
            firsthalfmonthlycomplete=firsthalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            secondhalfmonthlycomplete=secondhalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            
            document.getElementById("MI1").value = "₱ " +  firsthalfmonthlycomplete;
            document.getElementById("MI2").value = "₱ " +  secondhalfmonthlycomplete;
        }
        else if (factorrate == "0.0235131274809127") {
            
            
            let monthlyInstallment = (parseFloat(computeBalanceFixed) /96); 
            let monthlypercentage1 = document.getElementById("MIPercentage1").value;
            let monthlypercentage2 = document.getElementById("MIPercentage2").value;
            let firsthalfmonthly = ((parseFloat(monthlyInstallment)*96)/48) * (parseFloat(monthlypercentage1)/100);
            let secondhalfmonthly = ((parseFloat(monthlyInstallment)*96)/48) * (parseFloat(monthlypercentage2)/100);
            const firsthalfmonthlyfixed = firsthalfmonthly.toFixed(2);
            const secondhalfmonthlyfixed = secondhalfmonthly.toFixed(2);
            firsthalfmonthlycomplete=firsthalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            secondhalfmonthlycomplete=secondhalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            
            document.getElementById("MI1").value = "₱ " +  firsthalfmonthlycomplete;
            document.getElementById("MI2").value = "₱ " +  secondhalfmonthlycomplete;
        }
        else if (factorrate == "0.0226708482940114") {
            
            let monthlyInstallment = (parseFloat(computeBalanceFixed) /108); 
            let monthlypercentage1 = document.getElementById("MIPercentage1").value;
            let monthlypercentage2 = document.getElementById("MIPercentage2").value;
            let firsthalfmonthly = ((parseFloat(monthlyInstallment)*108)/54) * (parseFloat(monthlypercentage1)/100);
            let secondhalfmonthly = ((parseFloat(monthlyInstallment)*108)/54) * (parseFloat(monthlypercentage2)/100);
            const firsthalfmonthlyfixed = firsthalfmonthly.toFixed(2);
            const secondhalfmonthlyfixed = secondhalfmonthly.toFixed(2);
            firsthalfmonthlycomplete=firsthalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            secondhalfmonthlycomplete=secondhalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            
            document.getElementById("MI1").value = "₱ " +  firsthalfmonthlycomplete;
            document.getElementById("MI2").value = "₱ " +  secondhalfmonthlycomplete;
        }
        else if (factorrate == "0.022048096885833") {
            
            let monthlyInstallment = (parseFloat(computeBalanceFixed) /120); 
            let monthlypercentage1 = document.getElementById("MIPercentage1").value;
            let monthlypercentage2 = document.getElementById("MIPercentage2").value;
            let firsthalfmonthly = ((parseFloat(monthlyInstallment)*120)/60) * (parseFloat(monthlypercentage1)/100);
            let secondhalfmonthly = ((parseFloat(monthlyInstallment)*120)/60) * (parseFloat(monthlypercentage2)/100);
            const firsthalfmonthlyfixed = firsthalfmonthly.toFixed(2);
            const secondhalfmonthlyfixed = secondhalfmonthly.toFixed(2);
            firsthalfmonthlycomplete=firsthalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            secondhalfmonthlycomplete=secondhalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            
            document.getElementById("MI1").value = "₱ " +  firsthalfmonthlycomplete;
            document.getElementById("MI2").value = "₱ " +  secondhalfmonthlycomplete;
        }
    }

    
        
    function computedp() {
        let tcpcomputeDP =  document.getElementById("totalContractPrice3").value;
        let dpPercentagecomputedp =  document.getElementById("dpPercentage").value;

        let NoOfMonths=  document.getElementById("NoOfMonths").value;
        let llp=  document.getElementById("lotListPrice").value;
        let balance  =  document.getElementById("balance").value;
        let tax  =  document.getElementById("taxs1").value;
        let pcf  =  document.getElementById("pcf").value;
        let subtotaltax  =  document.getElementById("subtotaltax").value;
        let downpayment  =  document.getElementById("dpPercentage2").value;
        let factorrate=  document.getElementById("factorrate").value;
        var tcpcomputeDPreplace = tcpcomputeDP.replace(/₱|,/g, '');
        //computebalance
        let computeBalance = parseFloat(tcpcomputeDPreplace) - (parseFloat(tcpcomputeDPreplace)*(parseFloat(dpPercentagecomputedp)/100));
        let computeBalanceFixed = computeBalance.toFixed(0);
        let replacedcomputeBalance = computeBalanceFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        document.getElementById("balance").value = "₱ " + replacedcomputeBalance;
        //computepercentage
        let computeDownpayment = parseFloat(tcpcomputeDPreplace)*(parseFloat(dpPercentagecomputedp)/100);
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
        let monthlyInstallment = (parseFloat(computeBalanceFixed) /12); 
        let monthlypercentage1 = document.getElementById("MIPercentage1").value;
        let monthlypercentage2 = document.getElementById("MIPercentage2").value;
        let firsthalfmonthly = ((parseFloat(monthlyInstallment)*12)/6) * (parseFloat(monthlypercentage1)/100);
        let secondhalfmonthly = ((parseFloat(monthlyInstallment)*12)/6) * (parseFloat(monthlypercentage2)/100);
        const firsthalfmonthlyfixed = firsthalfmonthly.toFixed(2);
        const secondhalfmonthlyfixed = secondhalfmonthly.toFixed(2);
        firsthalfmonthlycomplete=firsthalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        secondhalfmonthlycomplete=secondhalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        
        document.getElementById("MI1").value = "₱ " +  firsthalfmonthlycomplete;
        document.getElementById("MI2").value = "₱ " +  secondhalfmonthlycomplete;
        }
        else if (factorrate == "0.0494422640854967") {
        let monthlyInstallment = (parseFloat(computeBalanceFixed) /24); 
        let monthlypercentage1 = document.getElementById("MIPercentage1").value;
        let monthlypercentage2 = document.getElementById("MIPercentage2").value;
        let firsthalfmonthly = ((parseFloat(monthlyInstallment)*24)/12) * (parseFloat(monthlypercentage1)/100);
        let secondhalfmonthly = ((parseFloat(monthlyInstallment)*24)/12) * (parseFloat(monthlypercentage2)/100);
        const firsthalfmonthlyfixed = firsthalfmonthly.toFixed(2);
        const secondhalfmonthlyfixed = secondhalfmonthly.toFixed(2);
        firsthalfmonthlycomplete=firsthalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        secondhalfmonthlycomplete=secondhalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        
        document.getElementById("MI1").value = "₱ " +  firsthalfmonthlycomplete;
        document.getElementById("MI2").value = "₱ " +  secondhalfmonthlycomplete;
        }
        
        else if (factorrate == "0.036152395535917") {
            
        let monthlyInstallment = (parseFloat(computeBalanceFixed) /36); 
        let monthlypercentage1 = document.getElementById("MIPercentage1").value;
        let monthlypercentage2 = document.getElementById("MIPercentage2").value;
        let firsthalfmonthly = ((parseFloat(monthlyInstallment)*36)/18) * (parseFloat(monthlypercentage1)/100);
        let secondhalfmonthly = ((parseFloat(monthlyInstallment)*36)/18) * (parseFloat(monthlypercentage2)/100);
        const firsthalfmonthlyfixed = firsthalfmonthly.toFixed(2);
        const secondhalfmonthlyfixed = secondhalfmonthly.toFixed(2);
        firsthalfmonthlycomplete=firsthalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        secondhalfmonthlycomplete=secondhalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        
        document.getElementById("MI1").value = "₱ " +  firsthalfmonthlycomplete;
        document.getElementById("MI2").value = "₱ " +  secondhalfmonthlycomplete;
        }
        
        else if (factorrate == "0.030430362343858") {
            
        let monthlyInstallment = (parseFloat(computeBalanceFixed) /48); 
        let monthlypercentage1 = document.getElementById("MIPercentage1").value;
        let monthlypercentage2 = document.getElementById("MIPercentage2").value;
        let firsthalfmonthly = ((parseFloat(monthlyInstallment)*48)/24) * (parseFloat(monthlypercentage1)/100);
        let secondhalfmonthly = ((parseFloat(monthlyInstallment)*48)/24) * (parseFloat(monthlypercentage2)/100);
        const firsthalfmonthlyfixed = firsthalfmonthly.toFixed(2);
        const secondhalfmonthlyfixed = secondhalfmonthly.toFixed(2);
        firsthalfmonthlycomplete=firsthalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        secondhalfmonthlycomplete=secondhalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        
        document.getElementById("MI1").value = "₱ " +  firsthalfmonthlycomplete;
        document.getElementById("MI2").value = "₱ " +  secondhalfmonthlycomplete;
        }
        else if (factorrate == "0.0276189120353598") {
            
        let monthlyInstallment = (parseFloat(computeBalanceFixed) /60); 
        let monthlypercentage1 = document.getElementById("MIPercentage1").value;
        let monthlypercentage2 = document.getElementById("MIPercentage2").value;
        let firsthalfmonthly = ((parseFloat(monthlyInstallment)*60)/30) * (parseFloat(monthlypercentage1)/100);
        let secondhalfmonthly = ((parseFloat(monthlyInstallment)*60)/30) * (parseFloat(monthlypercentage2)/100);
        const firsthalfmonthlyfixed = firsthalfmonthly.toFixed(2);
        const secondhalfmonthlyfixed = secondhalfmonthly.toFixed(2);
        firsthalfmonthlycomplete=firsthalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        secondhalfmonthlycomplete=secondhalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        
        document.getElementById("MI1").value = "₱ " +  firsthalfmonthlycomplete;
        document.getElementById("MI2").value = "₱ " +  secondhalfmonthlycomplete;
        }
        else if (factorrate == "0.0263268307088938") {
            
            let monthlyInstallment = (parseFloat(computeBalanceFixed) /72); 
            let monthlypercentage1 = document.getElementById("MIPercentage1").value;
            let monthlypercentage2 = document.getElementById("MIPercentage2").value;
            let firsthalfmonthly = ((parseFloat(monthlyInstallment)*72)/36) * (parseFloat(monthlypercentage1)/100);
            let secondhalfmonthly = ((parseFloat(monthlyInstallment)*72)/36) * (parseFloat(monthlypercentage2)/100);
            const firsthalfmonthlyfixed = firsthalfmonthly.toFixed(2);
            const secondhalfmonthlyfixed = secondhalfmonthly.toFixed(2);
            firsthalfmonthlycomplete=firsthalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            secondhalfmonthlycomplete=secondhalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            
            document.getElementById("MI1").value = "₱ " +  firsthalfmonthlycomplete;
            document.getElementById("MI2").value = "₱ " +  secondhalfmonthlycomplete;
        }
        else if (factorrate == "0.02467581178194748") {
            
            let monthlyInstallment = (parseFloat(computeBalanceFixed) /84); 
            let monthlypercentage1 = document.getElementById("MIPercentage1").value;
            let monthlypercentage2 = document.getElementById("MIPercentage2").value;
            let firsthalfmonthly = ((parseFloat(monthlyInstallment)*84)/42) * (parseFloat(monthlypercentage1)/100);
            let secondhalfmonthly = ((parseFloat(monthlyInstallment)*84)/42) * (parseFloat(monthlypercentage2)/100);
            const firsthalfmonthlyfixed = firsthalfmonthly.toFixed(2);
            const secondhalfmonthlyfixed = secondhalfmonthly.toFixed(2);
            firsthalfmonthlycomplete=firsthalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            secondhalfmonthlycomplete=secondhalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            
            document.getElementById("MI1").value = "₱ " +  firsthalfmonthlycomplete;
            document.getElementById("MI2").value = "₱ " +  secondhalfmonthlycomplete;
        }
        else if (factorrate == "0.0235131274809127") {
            
            
            let monthlyInstallment = (parseFloat(computeBalanceFixed) /96); 
            let monthlypercentage1 = document.getElementById("MIPercentage1").value;
            let monthlypercentage2 = document.getElementById("MIPercentage2").value;
            let firsthalfmonthly = ((parseFloat(monthlyInstallment)*96)/48) * (parseFloat(monthlypercentage1)/100);
            let secondhalfmonthly = ((parseFloat(monthlyInstallment)*96)/48) * (parseFloat(monthlypercentage2)/100);
            const firsthalfmonthlyfixed = firsthalfmonthly.toFixed(2);
            const secondhalfmonthlyfixed = secondhalfmonthly.toFixed(2);
            firsthalfmonthlycomplete=firsthalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            secondhalfmonthlycomplete=secondhalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            
            document.getElementById("MI1").value = "₱ " +  firsthalfmonthlycomplete;
            document.getElementById("MI2").value = "₱ " +  secondhalfmonthlycomplete;
        }
        else if (factorrate == "0.0226708482940114") {
            
            let monthlyInstallment = (parseFloat(computeBalanceFixed) /108); 
            let monthlypercentage1 = document.getElementById("MIPercentage1").value;
            let monthlypercentage2 = document.getElementById("MIPercentage2").value;
            let firsthalfmonthly = ((parseFloat(monthlyInstallment)*108)/54) * (parseFloat(monthlypercentage1)/100);
            let secondhalfmonthly = ((parseFloat(monthlyInstallment)*108)/54) * (parseFloat(monthlypercentage2)/100);
            const firsthalfmonthlyfixed = firsthalfmonthly.toFixed(2);
            const secondhalfmonthlyfixed = secondhalfmonthly.toFixed(2);
            firsthalfmonthlycomplete=firsthalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            secondhalfmonthlycomplete=secondhalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            
            document.getElementById("MI1").value = "₱ " +  firsthalfmonthlycomplete;
            document.getElementById("MI2").value = "₱ " +  secondhalfmonthlycomplete;
        }
        else if (factorrate == "0.022048096885833") {
            
            let monthlyInstallment = (parseFloat(computeBalanceFixed) /120); 
            let monthlypercentage1 = document.getElementById("MIPercentage1").value;
            let monthlypercentage2 = document.getElementById("MIPercentage2").value;
            let firsthalfmonthly = ((parseFloat(monthlyInstallment)*120)/60) * (parseFloat(monthlypercentage1)/100);
            let secondhalfmonthly = ((parseFloat(monthlyInstallment)*120)/60) * (parseFloat(monthlypercentage2)/100);
            const firsthalfmonthlyfixed = firsthalfmonthly.toFixed(2);
            const secondhalfmonthlyfixed = secondhalfmonthly.toFixed(2);
            firsthalfmonthlycomplete=firsthalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            secondhalfmonthlycomplete=secondhalfmonthlyfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            
            document.getElementById("MI1").value = "₱ " +  firsthalfmonthlycomplete;
            document.getElementById("MI2").value = "₱ " +  secondhalfmonthlycomplete;
        }
    }
        function computedppercentage() {
        let dpPercentage2=  document.getElementById("dpPercentage2").value;
        let dpPercentage=  document.getElementById("dpPercentage").value;
        let tcp2 =  document.getElementById("totalContractPrice3").value;
        document.getElementById("MI").value = "";
        document.getElementById("NoOfMonths").value = "";
        var newStr3 = tcp2.replace(/₱|,/g, ''); 
        var dpPercentagenewStr = dpPercentage.replace(/₱|,/g, ''); 

        var dpPercentage2Str3 = dpPercentage2.replace(/₱|,/g, ''); 
        let percentage = 100 * (parseFloat(dpPercentage2Str3) / parseFloat(newStr3));
        const percentagefixed = percentage.toFixed(2);
        document.getElementById("dpPercentage").value = percentagefixed;

        let percentagebalance = parseFloat(newStr3) - parseFloat(dpPercentage2Str3);
        const percentageBalancefixed = percentagebalance.toFixed(2);
        document.getElementById("balance").value ="₱ " +  percentageBalancefixed;

        let amountdp2 = parseFloat(dpPercentage2Str3) / parseFloat(newStr3); 
        let dpPercentagedecimal1 =  amountdp2 * 100;
        let balance1 =  "₱ " + (parseFloat(newStr3) - parseFloat(dpPercentage2Str3)) ;
        const dpPercentagedecimal1fixed = dpPercentagedecimal1.toFixed(2);
        const balance1fixed = balance1.toFixed(2);
        document.getElementById("dpPercentage").value = dpPercentagedecimal1fixed;
        document.getElementById("balance").value = balance1fixed;
        var newStr3 = balance.replace(/₱|,/g, ''); 
       
     
       
    }
    
    function MA() {
        let NoOfMonths=  document.getElementById("NoOfMonths").value;
        let llp=  document.getElementById("lotListPrice").value;
        let balance  =  document.getElementById("balance").value;
        let tax  =  document.getElementById("taxs1").value;
        let pcf  =  document.getElementById("pcf").value;
        let subtotaltax  =  document.getElementById("subtotaltax").value;
        let downpayment  =  document.getElementById("dpPercentage2").value;
        var newStr3downpayment = downpayment.replace(/₱|,/g, ''); 

        if (NoOfMonths == "12") {
        document.getElementById("factorratePercentage").value = "16";
        document.getElementById("factorrate").value = "0.0907308578592074";
        var newStr3 = balance.replace(/₱|,/g, ''); 
        var newStr3llp = llp.replace(/₱|,/g, ''); 
        var newStr3pcf = pcf.replace(/₱|,/g, ''); 
        var newStr3downpayment = downpayment.replace(/₱|,/g, ''); 
        var newStr3subtotaltax = subtotaltax.replace(/₱|,/g, ''); 
        let monthlyInstallment = ((parseFloat(newStr3) *  0.0907308578592074)+((parseFloat(newStr3) *  0.0907308578592074) * tax))-(newStr3subtotaltax/12); 
        const monthlyInstallment1fixed = monthlyInstallment.toFixed(0);
        replacedmonthlyInstallment1fixed=monthlyInstallment1fixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
      

        
        let monthlyInstallmentBalance = (((parseFloat(newStr3subtotaltax)+ parseFloat(newStr3llp)) * 0.0907308578592074) * 12) + parseFloat(newStr3pcf);
        const monthlyInstallmentBalancefixed = monthlyInstallmentBalance.toFixed(0);
        monthlyInstallmentBalanceCompleted=monthlyInstallmentBalancefixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        document.getElementById("totalContractPrice3").value = "₱ " +  monthlyInstallmentBalanceCompleted;

        
        const elementToHide322 = document.getElementById("dpPercentage");
        // Hide the element by setting its display property to 'none'
        elementToHide322.disabled = false;

        
        const dpPercentage2 = document.getElementById("dpPercentage2");
            // Hide the element by setting its display property to 'none'
            dpPercentage2.disabled = false;

            document.getElementById("dpPercentage2").value = "";
            document.getElementById("dpPercentage").value = "";
            document.getElementById("balance").value = "";
            
            document.getElementById("MI1").value = "";
            document.getElementById("MI2").value = "";

        } 
        else if (NoOfMonths == "24") {
       
        document.getElementById("factorratePercentage").value = "17";
        document.getElementById("factorrate").value = "0.0494422640854967";
        var newStr3 = balance.replace(/₱|,/g, ''); 
        var newStr3llp = llp.replace(/₱|,/g, ''); 
        var newStr3pcf = pcf.replace(/₱|,/g, ''); 
        var newStr3downpayment = downpayment.replace(/₱|,/g, ''); 
        var newStr3subtotaltax = subtotaltax.replace(/₱|,/g, ''); 
        let monthlyInstallment = ((parseFloat(newStr3) *  0.0494422640854967)+((parseFloat(newStr3) *  0.0494422640854967) * tax))-(newStr3subtotaltax/24); 
        const monthlyInstallment1fixed = monthlyInstallment.toFixed(0);
        replacedmonthlyInstallment1fixed=monthlyInstallment1fixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
      

        
        let monthlyInstallmentBalance = (((parseFloat(newStr3subtotaltax)+ parseFloat(newStr3llp)) * 0.0494422640854967) * 24) + parseFloat(newStr3pcf);
        const monthlyInstallmentBalancefixed = monthlyInstallmentBalance.toFixed(0);
        monthlyInstallmentBalanceCompleted=monthlyInstallmentBalancefixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        document.getElementById("totalContractPrice3").value = "₱ " +  monthlyInstallmentBalanceCompleted;

        
        const elementToHide322 = document.getElementById("dpPercentage");
        // Hide the element by setting its display property to 'none'
        elementToHide322.disabled = false;

        
        const dpPercentage2 = document.getElementById("dpPercentage2");
            // Hide the element by setting its display property to 'none'
            dpPercentage2.disabled = false;

            document.getElementById("dpPercentage2").value = "";
            document.getElementById("dpPercentage").value = "";
            document.getElementById("balance").value = "";
            
            document.getElementById("MI1").value = "";
            document.getElementById("MI2").value = "";

        } 
        else if (NoOfMonths == "36") {
       
        document.getElementById("factorratePercentage").value = "18";
        document.getElementById("factorrate").value = "0.036152395535917";
        var newStr3 = balance.replace(/₱|,/g, ''); 
        var newStr3llp = llp.replace(/₱|,/g, ''); 
        var newStr3pcf = pcf.replace(/₱|,/g, ''); 
        var newStr3downpayment = downpayment.replace(/₱|,/g, ''); 
        var newStr3subtotaltax = subtotaltax.replace(/₱|,/g, ''); 
        let monthlyInstallment = ((parseFloat(newStr3) *  0.036152395535917)+((parseFloat(newStr3) *  0.036152395535917) * tax))-(newStr3subtotaltax/36); 
        const monthlyInstallment1fixed = monthlyInstallment.toFixed(0);
        replacedmonthlyInstallment1fixed=monthlyInstallment1fixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
      

        
        let monthlyInstallmentBalance = (((parseFloat(newStr3subtotaltax)+ parseFloat(newStr3llp)) * 0.036152395535917) * 36) + parseFloat(newStr3pcf);
        const monthlyInstallmentBalancefixed = monthlyInstallmentBalance.toFixed(0);
        monthlyInstallmentBalanceCompleted=monthlyInstallmentBalancefixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        document.getElementById("totalContractPrice3").value = "₱ " +  monthlyInstallmentBalanceCompleted;

        
        const elementToHide322 = document.getElementById("dpPercentage");
        // Hide the element by setting its display property to 'none'
        elementToHide322.disabled = false;

            document.getElementById("dpPercentage2").value = "";
            document.getElementById("dpPercentage").value = "";
            document.getElementById("balance").value = "";
            
            document.getElementById("MI1").value = "";
            document.getElementById("MI2").value = "";

        } 
        else if (NoOfMonths == "48") {
        document.getElementById("factorratePercentage").value = "20";
        document.getElementById("factorrate").value = "0.030430362343858";
        var newStr3 = balance.replace(/₱|,/g, ''); 
        var newStr3llp = llp.replace(/₱|,/g, ''); 
        var newStr3pcf = pcf.replace(/₱|,/g, ''); 
        var newStr3downpayment = downpayment.replace(/₱|,/g, ''); 
        var newStr3subtotaltax = subtotaltax.replace(/₱|,/g, ''); 
        let monthlyInstallment = ((parseFloat(newStr3) *  0.030430362343858)+((parseFloat(newStr3) *  0.030430362343858) * tax))-(newStr3subtotaltax/48); 
        const monthlyInstallment1fixed = monthlyInstallment.toFixed(0);
        replacedmonthlyInstallment1fixed=monthlyInstallment1fixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
      

        
        let monthlyInstallmentBalance = (((parseFloat(newStr3subtotaltax)+ parseFloat(newStr3llp)) * 0.030430362343858) * 48) + parseFloat(newStr3pcf);
        const monthlyInstallmentBalancefixed = monthlyInstallmentBalance.toFixed(0);
        monthlyInstallmentBalanceCompleted=monthlyInstallmentBalancefixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        document.getElementById("totalContractPrice3").value = "₱ " +  monthlyInstallmentBalanceCompleted;

        
        const elementToHide322 = document.getElementById("dpPercentage");
        // Hide the element by setting its display property to 'none'
        elementToHide322.disabled = false;

        
        const dpPercentage2 = document.getElementById("dpPercentage2");
            // Hide the element by setting its display property to 'none'
            dpPercentage2.disabled = false;

            document.getElementById("dpPercentage2").value = "";
            document.getElementById("dpPercentage").value = "";
            document.getElementById("balance").value = "";

            document.getElementById("MI1").value = "";
            document.getElementById("MI2").value = "";

        } 
        else if (NoOfMonths == "60") { 
        document.getElementById("factorratePercentage").value = "22";
        document.getElementById("factorrate").value = "0.0276189120353598";
        var newStr3 = balance.replace(/₱|,/g, ''); 
        var newStr3llp = llp.replace(/₱|,/g, ''); 
        var newStr3pcf = pcf.replace(/₱|,/g, ''); 
        var newStr3downpayment = downpayment.replace(/₱|,/g, ''); 
        var newStr3subtotaltax = subtotaltax.replace(/₱|,/g, ''); 
        let monthlyInstallment = ((parseFloat(newStr3) *  0.0276189120353598)+((parseFloat(newStr3) *  0.0276189120353598) * tax))-(newStr3subtotaltax/60); 
        const monthlyInstallment1fixed = monthlyInstallment.toFixed(0);
        replacedmonthlyInstallment1fixed=monthlyInstallment1fixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
      

        
        let monthlyInstallmentBalance = (((parseFloat(newStr3subtotaltax)+ parseFloat(newStr3llp)) * 0.0276189120353598) * 60) + parseFloat(newStr3pcf);
        const monthlyInstallmentBalancefixed = monthlyInstallmentBalance.toFixed(0);
        monthlyInstallmentBalanceCompleted=monthlyInstallmentBalancefixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        document.getElementById("totalContractPrice3").value = "₱ " +  monthlyInstallmentBalanceCompleted;

        
        const elementToHide322 = document.getElementById("dpPercentage");
        // Hide the element by setting its display property to 'none'
        elementToHide322.disabled = false;

            document.getElementById("dpPercentage2").value = "";
            document.getElementById("dpPercentage").value = "";
            document.getElementById("balance").value = "";
           
            document.getElementById("MI1").value = "";
            document.getElementById("MI2").value = "";


        } 
        else if (NoOfMonths == "72") {
        document.getElementById("factorratePercentage").value = "24";
        document.getElementById("factorrate").value = "0.0263268307088938";
        var newStr3 = balance.replace(/₱|,/g, ''); 
        var newStr3llp = llp.replace(/₱|,/g, ''); 
        var newStr3pcf = pcf.replace(/₱|,/g, ''); 
        var newStr3downpayment = downpayment.replace(/₱|,/g, ''); 
        var newStr3subtotaltax = subtotaltax.replace(/₱|,/g, ''); 
        let monthlyInstallment = ((parseFloat(newStr3) *  0.0263268307088938)+((parseFloat(newStr3) *  0.0263268307088938) * tax))-(newStr3subtotaltax/72); 
        const monthlyInstallment1fixed = monthlyInstallment.toFixed(0);
        replacedmonthlyInstallment1fixed=monthlyInstallment1fixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
      

        
        let monthlyInstallmentBalance = (((parseFloat(newStr3subtotaltax)+ parseFloat(newStr3llp)) * 0.0263268307088938) * 72) + parseFloat(newStr3pcf);
        const monthlyInstallmentBalancefixed = monthlyInstallmentBalance.toFixed(0);
        monthlyInstallmentBalanceCompleted=monthlyInstallmentBalancefixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        document.getElementById("totalContractPrice3").value = "₱ " +  monthlyInstallmentBalanceCompleted;

        
        const elementToHide322 = document.getElementById("dpPercentage");
        // Hide the element by setting its display property to 'none'
        elementToHide322.disabled = false;

        
        const dpPercentage2 = document.getElementById("dpPercentage2");
            // Hide the element by setting its display property to 'none'
            dpPercentage2.disabled = false;

            document.getElementById("dpPercentage2").value = "";
            document.getElementById("dpPercentage").value = "";
            document.getElementById("balance").value = "";
            
            document.getElementById("MI1").value = "";
            document.getElementById("MI2").value = "";


        } 
        else if (NoOfMonths == "84") {
        
        document.getElementById("factorratePercentage").value = "24";
        document.getElementById("factorrate").value = "0.0246758117819474";
        var newStr3 = balance.replace(/₱|,/g, ''); 
        var newStr3llp = llp.replace(/₱|,/g, ''); 
        var newStr3pcf = pcf.replace(/₱|,/g, ''); 
        var newStr3downpayment = downpayment.replace(/₱|,/g, ''); 
        var newStr3subtotaltax = subtotaltax.replace(/₱|,/g, ''); 
        let monthlyInstallment = ((parseFloat(newStr3) *  0.0246758117819474)+((parseFloat(newStr3) *  0.0246758117819474) * tax))-(newStr3subtotaltax/84); 
        const monthlyInstallment1fixed = monthlyInstallment.toFixed(0);
        replacedmonthlyInstallment1fixed=monthlyInstallment1fixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
      

        
        let monthlyInstallmentBalance = (((parseFloat(newStr3subtotaltax)+ parseFloat(newStr3llp)) * 0.0246758117819474) * 84) + parseFloat(newStr3pcf);
        const monthlyInstallmentBalancefixed = monthlyInstallmentBalance.toFixed(0);
        monthlyInstallmentBalanceCompleted=monthlyInstallmentBalancefixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        document.getElementById("totalContractPrice3").value = "₱ " +  monthlyInstallmentBalanceCompleted;

        
        const elementToHide322 = document.getElementById("dpPercentage");
        // Hide the element by setting its display property to 'none'
        elementToHide322.disabled = false;

        
        const dpPercentage2 = document.getElementById("dpPercentage2");
            // Hide the element by setting its display property to 'none'
            dpPercentage2.disabled = false;

            document.getElementById("dpPercentage2").value = "";
            document.getElementById("dpPercentage").value = "";
            document.getElementById("balance").value = "";
            
            document.getElementById("MI1").value = "";
            document.getElementById("MI2").value = "";

        } 
        else if (NoOfMonths == "96") {
        document.getElementById("factorratePercentage").value = "24";
        document.getElementById("factorrate").value = "0.0235131274809127";
        var newStr3 = balance.replace(/₱|,/g, ''); 
        var newStr3llp = llp.replace(/₱|,/g, ''); 
        var newStr3pcf = pcf.replace(/₱|,/g, ''); 
        var newStr3downpayment = downpayment.replace(/₱|,/g, ''); 
        var newStr3subtotaltax = subtotaltax.replace(/₱|,/g, ''); 
        let monthlyInstallment = ((parseFloat(newStr3) *  0.0235131274809127)+((parseFloat(newStr3) *  0.0235131274809127) * tax))-(newStr3subtotaltax/96); 
        const monthlyInstallment1fixed = monthlyInstallment.toFixed(0);
        replacedmonthlyInstallment1fixed=monthlyInstallment1fixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
      

        
        let monthlyInstallmentBalance = (((parseFloat(newStr3subtotaltax)+ parseFloat(newStr3llp)) * 0.0235131274809127) * 96) + parseFloat(newStr3pcf);
        const monthlyInstallmentBalancefixed = monthlyInstallmentBalance.toFixed(0);
        monthlyInstallmentBalanceCompleted=monthlyInstallmentBalancefixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        document.getElementById("totalContractPrice3").value = "₱ " +  monthlyInstallmentBalanceCompleted;

        
        const elementToHide322 = document.getElementById("dpPercentage");
        // Hide the element by setting its display property to 'none'
        elementToHide322.disabled = false;

        
        const dpPercentage2 = document.getElementById("dpPercentage2");
            // Hide the element by setting its display property to 'none'
            dpPercentage2.disabled = false;

            document.getElementById("dpPercentage2").value = "";
            document.getElementById("dpPercentage").value = "";
            document.getElementById("balance").value = "";

            document.getElementById("MI1").value = "";
            document.getElementById("MI2").value = "";


        } 
        else if (NoOfMonths == "108") {      
        document.getElementById("factorratePercentage").value = "24";
        document.getElementById("factorrate").value = "0.0226708482940114";
        var newStr3 = balance.replace(/₱|,/g, ''); 
        var newStr3llp = llp.replace(/₱|,/g, ''); 
        var newStr3pcf = pcf.replace(/₱|,/g, ''); 
        var newStr3downpayment = downpayment.replace(/₱|,/g, ''); 
        var newStr3subtotaltax = subtotaltax.replace(/₱|,/g, ''); 
        let monthlyInstallment = ((parseFloat(newStr3) *  0.0226708482940114)+((parseFloat(newStr3) *  0.0226708482940114) * tax))-(newStr3subtotaltax/108); 
        const monthlyInstallment1fixed = monthlyInstallment.toFixed(0);
        replacedmonthlyInstallment1fixed=monthlyInstallment1fixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
      

        
        let monthlyInstallmentBalance = (((parseFloat(newStr3subtotaltax)+ parseFloat(newStr3llp)) * 0.0226708482940114) * 108) + parseFloat(newStr3pcf);
        const monthlyInstallmentBalancefixed = monthlyInstallmentBalance.toFixed(0);
        monthlyInstallmentBalanceCompleted=monthlyInstallmentBalancefixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        document.getElementById("totalContractPrice3").value = "₱ " +  monthlyInstallmentBalanceCompleted;

        
        const elementToHide322 = document.getElementById("dpPercentage");
        // Hide the element by setting its display property to 'none'
        elementToHide322.disabled = false;

            document.getElementById("dpPercentage2").value = "";
            document.getElementById("dpPercentage").value = "";
            document.getElementById("balance").value = "";
            
            document.getElementById("MI1").value = "";
            document.getElementById("MI2").value = "";


        } 
        else if (NoOfMonths == "120") {
        
        document.getElementById("factorratePercentage").value = "24";
        document.getElementById("factorrate").value = "0.022048096885833";
        var newStr3 = balance.replace(/₱|,/g, ''); 
        var newStr3llp = llp.replace(/₱|,/g, ''); 
        var newStr3pcf = pcf.replace(/₱|,/g, ''); 
        var newStr3downpayment = downpayment.replace(/₱|,/g, ''); 
        var newStr3subtotaltax = subtotaltax.replace(/₱|,/g, ''); 
        let monthlyInstallment = ((parseFloat(newStr3) *  0.022048096885833)+((parseFloat(newStr3) *  0.022048096885833) * tax))-(newStr3subtotaltax/120); 
        const monthlyInstallment1fixed = monthlyInstallment.toFixed(0);
        replacedmonthlyInstallment1fixed=monthlyInstallment1fixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
      

        
        let monthlyInstallmentBalance = (((parseFloat(newStr3subtotaltax)+ parseFloat(newStr3llp)) * 0.022048096885833) * 120) + parseFloat(newStr3pcf);
        const monthlyInstallmentBalancefixed = monthlyInstallmentBalance.toFixed(0);
        monthlyInstallmentBalanceCompleted=monthlyInstallmentBalancefixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        document.getElementById("totalContractPrice3").value = "₱ " +  monthlyInstallmentBalanceCompleted;

        
        const elementToHide322 = document.getElementById("dpPercentage");
        // Hide the element by setting its display property to 'none'
        elementToHide322.disabled = false;

        
        const dpPercentage2 = document.getElementById("dpPercentage2");
        // Hide the element by setting its display property to 'none'
        dpPercentage2.disabled = false;

            document.getElementById("dpPercentage2").value = "";
            document.getElementById("dpPercentage").value = "";
            document.getElementById("balance").value = "";

            document.getElementById("MI1").value = "";
            document.getElementById("MI2").value = "";

        } 
        else{
          
            // Discount
           
            let discount =  document.getElementById("discounts1").value;
            var newStr3llp = llp.replace(/₱|,/g, ''); 
            var newStr3pcf = pcf.replace(/₱|,/g, ''); 
            var newStr3subtotaltax = subtotaltax.replace(/₱|,/g, ''); 
            var subtotalDiscount = (parseFloat(newStr3llp) + parseFloat(newStr3subtotaltax))* parseFloat(discount);
            let monthlyInstallment = (parseFloat(newStr3llp) + parseFloat(newStr3pcf) + parseFloat(newStr3subtotaltax)) - parseFloat(subtotalDiscount); 
            const monthlyInstallment1fixed = monthlyInstallment.toFixed(0);
            replacedmonthlyInstallment1fixed=monthlyInstallment1fixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            document.getElementById("totalContractPrice3").value = "₱ " +  replacedmonthlyInstallment1fixed;

            document.getElementById("dpPercentage2").value = "";
            document.getElementById("dpPercentage").value = "";
            document.getElementById("balance").value = "";
            document.getElementById("MI1").value = "";
            document.getElementById("MI2").value = "";
            document.getElementById("factorratePercentage").value = "";
            document.getElementById("factorrate").value = "";

        
        }


  
     }
    
    </script>

    
<script>
            var table = document.getElementById('dtcryptDescRecord');
                for(var i = 1; i < table.rows.length; i++){
                    table.rows[i].onclick = function(){
                        //rIndex = this.rowIndex;
                      
                        document.getElementById("phase").value = this.cells[1].innerHTML;
                        document.getElementById("level").value = this.cells[2].innerHTML;
                       
                        document.getElementById("area").value = this.cells[3].innerHTML;
                        document.getElementById("section").value = this.cells[4].innerHTML;
                        document.getElementById("crypt_column").value = this.cells[5].innerHTML;
                        document.getElementById("unit_no").value = this.cells[6].innerHTML;
                        document.getElementById("classification").value = this.cells[8].innerHTML;
                         document.getElementById("noLots").value = this.cells[7].innerHTML;
                        
                        document.getElementById("lotListPrice").value = "₱ " + this.cells[9].innerHTML;
                        document.getElementById("price").value = this.cells[9].innerHTML;
                        let dpPercentage1 =  document.getElementById("dpPercentage").value;
                        let a12 =  document.getElementById("taxs1").value;
                        let tcp1 =  document.getElementById("totalContractPrice3").value;
                        let lotListPrice =  document.getElementById("lotListPrice").value;
                        let discount =  document.getElementById("discounts1").value;
                        let pcf =  document.getElementById("pcf").value;

                        var newStr2lotListPrice = lotListPrice.replace(/₱|,/g, ''); 
                        var newStr2pcf = pcf.replace(/₱|,/g, ''); 
                        // VAT
                        var subtotaltax = parseFloat(newStr2lotListPrice) * parseFloat(a12);
                        let subtotaltaxFixed = subtotaltax.toFixed(2);
                        let subtotaltaxComplete = subtotaltaxFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                        document.getElementById("subtotaltax").value =  "₱ " + subtotaltaxComplete;
                        // Discount
                        var subtotalDiscount = (parseFloat(newStr2lotListPrice) + parseFloat(subtotaltax))* parseFloat(discount);
                        let subtotalDiscountFixed = subtotalDiscount.toFixed(2);
                        let subtotalDiscountComplete = subtotalDiscountFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                        document.getElementById("subtotalDiscount").value =  "₱ " + subtotalDiscountComplete;
                        // TCP
                        var totalContractPrice = parseFloat(newStr2lotListPrice) + parseFloat(subtotaltax) + parseFloat(newStr2pcf) - parseFloat(subtotalDiscount);
                        let totalContractPriceFixed = totalContractPrice.toFixed(2);
                        let totalContractPriceComplete = totalContractPriceFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                        document.getElementById("totalContractPrice3").value =  "₱ " + totalContractPriceComplete;
                        let pcfComplete = pcf.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                        document.getElementById("pcf").value = pcfComplete;

       // var newStr2 = tcp1.replace(/₱|,/g, ''); 
      //  let amountdp1 =  parseFloat(dpPercentagedecimal) * parseFloat(newStr2); 
      //  let amountdp1Fixed = amountdp1.toFixed(2);
       // let replaceamountdp1Fixed = amountdp1Fixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
      //  document.getElementById("dpPercentage2").value =  "₱ " + replaceamountdp1Fixed;
        
        
                    };
                }
        </script>

        <script>
   const phoneInputField = document.querySelector("#residentialPhoneno");
   const phoneInputField1 = document.querySelector("#companyTellNo");
   const phoneInput = window.intlTelInput(phoneInputField, {
     utilsScript:
    
       "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
   });
   const phoneInput1 = window.intlTelInput(phoneInputField1, {
     utilsScript:
       "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
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
              if (input_val === "") { return; }
              
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
            
          
            
    </script>
    
   
    <script>
            document.getElementById('terms').addEventListener('change', function() {
            var selectedValue = this.value; 
            // Get the selected value
            if ("PreNeedPrice" === selectedValue) {
            var tdElement = document.getElementById('PreNeedPrice');
            // Change the text content
            tdElement.textContent = 'Total Contract Price :';

            const dpPercentage = document.getElementById("dpPercentage");
            // Hide the element by setting its display property to 'none'
            dpPercentage.disabled = false;

            const dpPercentage2 = document.getElementById("dpPercentage2");
            // Hide the element by setting its display property to 'none'
            dpPercentage2.disabled = false;
            
            const elementToHide2 = document.querySelector('#monthlyInstallmenttr');
            // Hide the element by setting its display property to 'none'
            elementToHide2.style.display = 'none';
            
            const monthlyInstallmenttr21 = document.querySelector('#monthlyInstallmenttr2');
            // Hide the element by setting its display property to 'none'
            monthlyInstallmenttr21.style.display = 'none';
            
            const elementToHide3 = document.querySelector('#factorRatetr');
            // Hide the element by setting its display property to 'none'
            elementToHide3.style.display = 'none';
            const elementToHide4 = document.querySelector('#noYearstr');
            // Hide the element by setting its display property to 'none'
            elementToHide4.style.display = 'none';
            
                        let dpPercentage1 =  document.getElementById("dpPercentage").value;
                        let a12 =  document.getElementById("taxs1").value;
                        let tcp1 =  document.getElementById("totalContractPrice3").value;
                        let lotListPrice =  document.getElementById("lotListPrice").value;
                        let discount =  document.getElementById("discounts1").value;
                        let pcf =  document.getElementById("pcf").value;

                        var newStr2lotListPrice = lotListPrice.replace(/₱|,/g, ''); 
                        var newStr2pcf = pcf.replace(/₱|,/g, ''); 
                        // VAT
                        var subtotaltax = parseFloat(newStr2lotListPrice) * parseFloat(a12);
                        let subtotaltaxFixed = subtotaltax.toFixed(2);
                        let subtotaltaxComplete = subtotaltaxFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                        document.getElementById("subtotaltax").value =  "₱ " + subtotaltaxComplete;
                        // Discount
                        var subtotalDiscount = (parseFloat(newStr2lotListPrice) + parseFloat(subtotaltax))* parseFloat(discount);
                        let subtotalDiscountFixed = subtotalDiscount.toFixed(2);
                        let subtotalDiscountComplete = subtotalDiscountFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                        document.getElementById("subtotalDiscount").value =  "₱ " + subtotalDiscountComplete;
                        // TCP
                        var totalContractPrice = parseFloat(newStr2lotListPrice) + parseFloat(subtotaltax) + parseFloat(newStr2pcf) - parseFloat(subtotalDiscount);
                        let totalContractPriceFixed = totalContractPrice.toFixed(2);
                        let totalContractPriceComplete = totalContractPriceFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                        document.getElementById("totalContractPrice3").value =  "₱ " + totalContractPriceComplete;
                        let pcfComplete = pcf.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                        document.getElementById("pcf").value = pcfComplete;

                        
                        document.getElementById("balance").value = "";
                        document.getElementById("dpPercentage2").value = "";
                        document.getElementById("dpPercentage").value = "";
                        document.getElementById("dpPercentage").value = "";
                        
            }
            
            if ("AtNeedPrice" === selectedValue) {
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

            const dpPercentage = document.getElementById("dpPercentage");
            // Hide the element by setting its display property to 'none'
            dpPercentage.disabled = false;

            const dpPercentage2 = document.getElementById("dpPercentage2");
            // Hide the element by setting its display property to 'none'
            dpPercentage2.disabled = false;
            
            const monthlyInstallmenttr21 = document.querySelector('#monthlyInstallmenttr2');
            // Hide the element by setting its display property to 'none'
            monthlyInstallmenttr21.style.display = 'none';
            
            let preNeedPrice =  document.getElementById("totalContractPrice3").value;
            let markup =  document.getElementById("markup").value;

            var newStr2preNeedPrice = preNeedPrice.replace(/₱|,/g, ''); 
            var atNeedPrice = parseFloat(newStr2preNeedPrice) * parseFloat(markup);
            let atNeedPriceFixed = atNeedPrice.toFixed(0);
            let atNeedPriceComplete = atNeedPriceFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            document.getElementById("totalContractPrice3").value =  "₱ " + atNeedPriceComplete;

            
            document.getElementById("balance").value = "";
            document.getElementById("dpPercentage2").value = "";
            document.getElementById("dpPercentage").value = "";
            document.getElementById("dpPercentage").value = "";
                        
            }
            if ("SpotCash" === selectedValue) {
            var tdElement = document.getElementById('PreNeedPrice');
            // Change the text content
            tdElement.textContent = 'Total Contract Price :';
            const elementToHide2 = document.querySelector('#monthlyInstallmenttr');
            // Hide the element by setting its display property to 'none'
            elementToHide2.style.display = 'none';

            const dpPercentage = document.getElementById("dpPercentage");
            // Hide the element by setting its display property to 'none'
            dpPercentage.disabled = false;

            const dpPercentage2 = document.getElementById("dpPercentage2");
            // Hide the element by setting its display property to 'none'
            dpPercentage2.disabled = false;

            const monthlyInstallmenttr21 = document.querySelector('#monthlyInstallmenttr2');
            // Hide the element by setting its display property to 'none'
            monthlyInstallmenttr21.style.display = 'none';
            
            const elementToHide3 = document.querySelector('#factorRatetr');
            // Hide the element by setting its display property to 'none'
            elementToHide3.style.display = 'none';
            const elementToHide4 = document.querySelector('#noYearstr');
            // Hide the element by setting its display property to 'none'
            elementToHide4.style.display = 'none';
                        let dpPercentage1 =  document.getElementById("dpPercentage").value;
                        let a12 =  document.getElementById("taxs1").value;
                        let tcp1 =  document.getElementById("totalContractPrice3").value;
                        let lotListPrice =  document.getElementById("lotListPrice").value;
                        let discount =  document.getElementById("discounts1").value;
                        let pcf =  document.getElementById("pcf").value;

                        var newStr2lotListPrice = lotListPrice.replace(/₱|,/g, ''); 
                        var newStr2pcf = pcf.replace(/₱|,/g, ''); 
                        // VAT
                        var subtotaltax = parseFloat(newStr2lotListPrice) * parseFloat(a12);
                        let subtotaltaxFixed = subtotaltax.toFixed(2);
                        let subtotaltaxComplete = subtotaltaxFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                        document.getElementById("subtotaltax").value =  "₱ " + subtotaltaxComplete;
                        // Discount
                        var subtotalDiscount = (parseFloat(newStr2lotListPrice) + parseFloat(subtotaltax))* parseFloat(discount);
                        let subtotalDiscountFixed = subtotalDiscount.toFixed(2);
                        let subtotalDiscountComplete = subtotalDiscountFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                        document.getElementById("subtotalDiscount").value =  "₱ " + subtotalDiscountComplete;
                        // TCP
                        var totalContractPrice = parseFloat(newStr2lotListPrice) + parseFloat(subtotaltax) + parseFloat(newStr2pcf) - parseFloat(subtotalDiscount);
                        let totalContractPriceFixed = totalContractPrice.toFixed(2);
                        let totalContractPriceComplete = totalContractPriceFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                        document.getElementById("totalContractPrice3").value =  "₱ " + totalContractPriceComplete;
                        let pcfComplete = pcf.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                        document.getElementById("pcf").value = pcfComplete;

                        
                        document.getElementById("balance").value = "";
                        document.getElementById("dpPercentage2").value = "";
                        document.getElementById("dpPercentage").value = "";
                        document.getElementById("dpPercentage").value = "";
                        
            }
            if ("M_Cash" === selectedValue) {
            var tdElement = document.getElementById('PreNeedPrice');
            // Change the text content
            tdElement.textContent = 'Total Contract Price :';
            
            const dpPercentage = document.getElementById("dpPercentage");
            // Hide the element by setting its display property to 'none'
            dpPercentage.disabled = false;

            const dpPercentage2 = document.getElementById("dpPercentage2");
            // Hide the element by setting its display property to 'none'
            dpPercentage2.disabled = false;
            const elementToHide2 = document.querySelector('#monthlyInstallmenttr');
            // Hide the element by setting its display property to 'none'
            elementToHide2.style.display = 'none';
            const elementToHide3 = document.querySelector('#factorRatetr');
            // Hide the element by setting its display property to 'none'
            elementToHide3.style.display = 'none';
            
            const monthlyInstallmenttr21 = document.querySelector('#monthlyInstallmenttr2');
            // Hide the element by setting its display property to 'none'
            monthlyInstallmenttr21.style.display = 'none';
            const elementToHide4 = document.querySelector('#noYearstr');
            // Hide the element by setting its display property to 'none'
            elementToHide4.style.display = 'none';
                        let dpPercentage1 =  document.getElementById("dpPercentage").value;
                        let a12 =  document.getElementById("taxs1").value;
                        let tcp1 =  document.getElementById("totalContractPrice3").value;
                        let lotListPrice =  document.getElementById("lotListPrice").value;
                        let discount =  document.getElementById("discounts1").value;
                        let pcf =  document.getElementById("pcf").value;

                        var newStr2lotListPrice = lotListPrice.replace(/₱|,/g, ''); 
                        var newStr2pcf = pcf.replace(/₱|,/g, ''); 
                        // VAT
                        var subtotaltax = parseFloat(newStr2lotListPrice) * parseFloat(a12);
                        let subtotaltaxFixed = subtotaltax.toFixed(2);
                        let subtotaltaxComplete = subtotaltaxFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                        document.getElementById("subtotaltax").value =  "₱ " + subtotaltaxComplete;
                        // Discount
                        var subtotalDiscount = (parseFloat(newStr2lotListPrice) + parseFloat(subtotaltax))* parseFloat(discount);
                        let subtotalDiscountFixed = subtotalDiscount.toFixed(2);
                        let subtotalDiscountComplete = subtotalDiscountFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                        document.getElementById("subtotalDiscount").value =  "₱ " + subtotalDiscountComplete;
                        // TCP
                        var totalContractPrice = parseFloat(newStr2lotListPrice) + parseFloat(subtotaltax) + parseFloat(newStr2pcf) - parseFloat(subtotalDiscount);
                        let totalContractPriceFixed = totalContractPrice.toFixed(2);
                        let totalContractPriceComplete = totalContractPriceFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                        document.getElementById("totalContractPrice3").value =  "₱ " + totalContractPriceComplete;
                        let pcfComplete = pcf.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                        document.getElementById("pcf").value = pcfComplete;

                        
                        document.getElementById("balance").value = "";
                        document.getElementById("dpPercentage2").value = "";
                        document.getElementById("dpPercentage").value = "";
                        

            }
                        if ("Installment" === selectedValue) {
                        var tdElement = document.getElementById('PreNeedPrice');
                        // Change the text content
                        tdElement.textContent = 'Total Contract Price :';
                        const monthlyInstallmenttr = document.getElementById("monthlyInstallmenttr");
                        // Hide the element by setting its display property to 'none'
                        monthlyInstallmenttr.style.display = 'table-row';
            
                        
            
                        const monthlyInstallmenttr21 = document.querySelector('#monthlyInstallmenttr2');
                        // Hide the element by setting its display property to 'none'
                        monthlyInstallmenttr21.style.display = 'table-row';

                        const dpPercentage = document.getElementById("dpPercentage");
                        // Hide the element by setting its display property to 'none'
                        dpPercentage.disabled = true;

                        const dpPercentage2 = document.getElementById("dpPercentage2");
                        // Hide the element by setting its display property to 'none'
                        dpPercentage2.disabled = true;

                        const elementToHide3 = document.querySelector('#factorRatetr');
                        // Hide the element by setting its display property to 'none'
                        elementToHide3.style.display = 'table-row';
                        const elementToHide4 = document.querySelector('#noYearstr');
                        // Hide the element by setting its display property to 'none'
                        elementToHide4.style.display = 'table-row';
                        let dpPercentage1 =  document.getElementById("dpPercentage").value;
                        let a12 =  document.getElementById("taxs1").value;
                        let tcp1 =  document.getElementById("totalContractPrice3").value;
                        let lotListPrice =  document.getElementById("lotListPrice").value;
                        let discount =  document.getElementById("discounts1").value;
                        let pcf =  document.getElementById("pcf").value;

                        var newStr2lotListPrice = lotListPrice.replace(/₱|,/g, ''); 
                        var newStr2pcf = pcf.replace(/₱|,/g, ''); 
                        // VAT
                        var subtotaltax = parseFloat(newStr2lotListPrice) * parseFloat(a12);
                        let subtotaltaxFixed = subtotaltax.toFixed(2);
                        let subtotaltaxComplete = subtotaltaxFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                        document.getElementById("subtotaltax").value =  "₱ " + subtotaltaxComplete;
                        // Discount
                        var subtotalDiscount = (parseFloat(newStr2lotListPrice) + parseFloat(subtotaltax))* parseFloat(discount);
                        let subtotalDiscountFixed = subtotalDiscount.toFixed(2);
                        let subtotalDiscountComplete = subtotalDiscountFixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                        document.getElementById("subtotalDiscount").value =  "₱ " + subtotalDiscountComplete;
                        // pcf
                        let pcfComplete = pcf.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                        document.getElementById("pcf").value = pcfComplete;
                        document.getElementById("balance").value = "";
                        document.getElementById("dpPercentage2").value = "";
                        document.getElementById("dpPercentage").value = "";
                        document.getElementById("dpPercentage").value = "";
                        document.getElementById("totalContractPrice3").value =  "";

            }
            
            
            });
        
</script>

    


    
    <script>


        $(document).ready(function () {
     $('#dtBasicExample').DataTable();
     $('.dataTables_length').addClass('bs-select');
     });
    </script>

        <script>
            function sum() 
            {
            var txtFirstNumberValue = document.getElementById('num-adult').value;
            var txtSecondNumberValue = document.getElementById('price-adult').innerHTML;
            var result = parseInt(txtFirstNumberValue) * parseInt(txtSecondNumberValue);
            if (!isNaN(result)) 
            {
                      document.getElementById('total').innerHTML = result;
            }
            }
        </script>

    </body>


    </html>

    <?php } else {
        
    
    header("location: index.php");
    
    }?>
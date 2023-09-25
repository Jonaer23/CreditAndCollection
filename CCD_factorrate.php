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
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>  
  
<style>
             .search-box{
        width: 300px;
        position: relative;
        display: inline-block;
        font-size: 14px;
    }
    table {
    counter-reset: tableCount;     
}

.table-cell {
  white-space: nowrap;
}
.counterCell:before {              
    content: counter(tableCount); 
    counter-increment: tableCount; 
}
    .search-box input[type="text"]{
        height: 32px;
        padding: 5px 10px;
        border: 1px solid #CCCCCC;
        font-size: 14px;
    }
    .result{
        position: absolute;        
        z-index: 999;
        top: 100%;
        left: 0;
    }
    .search-box input[type="text"], .result{
        width: 100%;
        box-sizing: border-box;
    }
    /* Formatting result items */
    .result p{
        margin: 0;
        padding: 7px 10px;
        border: 1px solid #CCCCCC;
        border-top: none;
        cursor: pointer;
    }
    .result p:hover{
        background: #f2f2f2;
    }
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
        <script>
            var totalwidth = 190 * $('.list-group').length;
                $('.scoll-tree').css('width', totalwidth);
                $(document).ready(function(){
                $('.search-box input[type="text"]').on("keyup input", function(){
                    /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){
            $.get("backend-search.php", {term: inputVal}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
    
    // Set search input value on click of result item
    $(document).on("click", ".result p", function(){
        $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
        $(this).parent(".result").empty();
    });
});
</script>
<script type="text/javascript" src="ajax-script.js"></script>
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
                        <a class="nav-link" href="CCD_factorrate.php">
                            <i class="fas fa-coins"></i></i>
                            <span>Factor Rate</span></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="#">
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
        <form method="post" id="contactForm" >
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3" style="background-color: #003459">
                            <h6 class="m-0 font-weight-bold text-primary"></h6> 
                        </div>
                    
                        <div class="card-body">
                            <div class="table-responsive" style="color:#2F4F4F;">
                           
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        
                                    <tr class="header" style="background-color:#007ea7; color:#ffffff ">
                                                <th scope="col" style= "width: 8% ; font-size: 13px; color:#ffffff" class="table-cell" >ID</th>
                                                <th scope="col" style= "width: 8% ; font-size: 13px; color:#ffffff" class="table-cell" >Months</th>
                                                <th scope="col" style="width: 10%; font-size: 13px; color:#ffffff" class="table-cell">12% factor rate</th>
                                                <th scope="col" style="width: 10%; font-size: 13px; color:#ffffff" class="table-cell">13% factor rate</th>
                                                <th scope="col" style="width: 10%; font-size: 13px; color:#ffffff" class="table-cell">14% factor rate</th>
                                                <th scope="col" style="width: 10%; font-size: 13px; color:#ffffff" class="table-cell">15% factor rate</th>
                                                <th scope="col" style="width: 10%; font-size: 13px; color:#ffffff" class="table-cell">16% factor rate</th>
                                                <th scope="col" style="width: 10%; font-size: 13px; color:#ffffff" class="table-cell">17% factor rate</th>
                                                <th scope="col" style="width: 10%; font-size: 13px; color:#ffffff" class="table-cell">18% factor rate</th>
                                                <th scope="col" style="width: 10%; font-size: 13px; color:#ffffff" class="table-cell">19% factor rate</th>
                                                <th scope="col" style="width: 10%; font-size: 13px; color:#ffffff" class="table-cell">20% factor rate</th>
                                                <th scope="col" style="width: 10%; font-size: 13px; color:#ffffff" class="table-cell">21% factor rate</th>
                                                <th scope="col" style="width: 10%; font-size: 13px; color:#ffffff" class="table-cell">22% factor rate</th>
                                                <th scope="col" style="width: 10%; font-size: 13px; color:#ffffff" class="table-cell">23% factor rate</th>
                                                <th scope="col" style="width: 10%; font-size: 13px; color:#ffffff" class="table-cell">24% factor rate</th>

                                            </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php
                                   
                                    $sales_query = "SELECT * from tbl_factorrate";
                                    $sales_result = mysqli_query($connection, $sales_query);
                                    if (mysqli_num_rows($sales_result) > 0) {
                                       while ($row = mysqli_fetch_assoc($sales_result)) {
                                       
                                    ?>
                                    <tr style="color: #2F4F4F; font-size: 13px">
                                    <td class="id table-cell" name="id" style="font-size: 14px;"><?=$row['id']?></td>
                                       <td class="months table-cell" name="months" style="font-size: 14px;"><?=$row['months']?></td>
                                       <td class="12_Interest table-cell" name="12_Interest" style="font-size: 14px;"><?=$row['12_Interest']?></td>
                                       <td class="13_Interest table-cell" name="13_Interest" style="font-size: 14px;"><?=$row['13_Interest']?></td>
                                       <td class="14_Interest table-cell" name="14_Interest" style="font-size: 14px;"><?=$row['14_Interest']?></td>
                                       <td class="15_Interest table-cell" name="15_Interest" style="font-size: 14px;"><?=$row['15_Interest']?></td>
                                       <td class="16_Interest table-cell" name="16_Interest" style="font-size: 14px;"><?=$row['16_Interest']?></td>
                                       <td class="17_Interest table-cell" name="17_Interest" style="font-size: 14px;"><?=$row['17_Interest']?></td>
                                       <td class="18_Interest table-cell" name="18_Interest" style="font-size: 14px;"><?=$row['18_Interest']?></td>
                                       <td class="19_Interest table-cell" name="19_Interest" style="font-size: 14px;"><?=$row['19_Interest']?></td>
                                       <td class="20_Interest table-cell" name="20_Interest" style="font-size: 14px;"><?=$row['20_Interest']?></td>
                                       <td class="21_Interest table-cell" name="21_Interest" style="font-size: 14px;"><?=$row['21_Interest']?></td>
                                       <td class="22_Interest table-cell" name="22_Interest" style="font-size: 14px;"><?=$row['22_Interest']?></td>
                                       <td class="23_Interest table-cell" name="23_Interest" style="font-size: 14px;"><?=$row['23_Interest']?></td>
                                       <td class="24_Interest table-cell" name="24_Interest" style="font-size: 14px;"><?=$row['24_Interest']?></td>
                                      
                                      
                                       
                                           
                                           
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



    <!-- viewmodal-->
    <form method="get" action="ajaxfile.php" >
    <div class="modal fade bd-example-modal-lg" id="viewBuyer" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl" >
            <div class="modal-content">
                <div class="modal-header">
                
                    
                </div>
                <div class="modal-body">
                <div class="scoll-tree">
        <div class="card shadow mb-4">
            <div class="card-header py-3">    
            <div class="ChildrenTable">
            
            <div class="card-body">
            
                    
                                <div>
                                        <table class="table"   cellspacing="0" >
                                            <tr  style=" background-color: #007ea7 "> 
                                                <th colspan="5" style="color:#ffffff; font-size: ">Information</th>
                                            </tr>
                                            <tr style="border: none">
                                            <td style="border: none; color:#2F4F4F">Contract Code
                                            <input type="text" class="form-control" style="border:none; padding-left: 10px; background-color: #ebf5ff;  font-size: 12px; " id="contractCode" name="contractCode" readonly>  
                                            </td>
                                            <td style="border: none; color:#2F4F4F" >
                                            Price
                                                <br> <input type="text" class="form-control" style="border:none; padding: 10px; background-color: #ebf5ff;  font-size: 12px;" id="totalContractPrice" name="totalContractPrice" readonly> 
                                            </td>
                                            <td style="border: none; color:#2F4F4F" >
                                            Date <br> <input type="text" class="form-control" style="border:none; padding: 10px; background-color: #ebf5ff;   font-size: 12px;" id="B_Date" name="B_Date" readonly>
                                            </td>
                                            <td style="border: none; width: 190px; color:#2F4F4F" >
                                            Cut-off
                                                <br> <input type="text" class="form-control" style="border:none; padding: 10px; background-color: #ebf5ff;   font-size: 12px;" id="cutoff" name="cutoff" readonly>
                                            
                                            </td>
                                        
                                        
                                            </tr>
                                        </table>
                                        
                                        <table class="table"   cellspacing="0" >
                                            <tr  style=" background-color: #007ea7 "> 
                                                <th colspan="5" style="color:#ffffff; font-size: ">Personal Information</th>
                                            </tr>
                                            <tr style="border: none">
                                            <td style="border: none; color:#2F4F4F">Customer Name
                                            <input type="text" class="form-control" style="border:none; padding-left: 10px; background-color: #ebf5ff;  font-size: 12px; " id="Fullname" name="Fullname" readonly>  
                                            Name of Spouse
                                                <br> <input type="text" class="form-control" style="border:none; padding: 10px; background-color: #ebf5ff;   font-size: 12px;" id="SpouseName1" name="SpouseName1" readonly> 
                                            Company Name
                                                <br> <input type="text" class="form-control" style="border:none; padding: 10px; background-color: #ebf5ff;  font-size: 12px;" id="Employer" name="Employer" readonly> 
                                                
                                            </td>
                                            
                                            <td style="border: none; width: 55%; color:#2F4F4F" >
                                            Residence Address <br> <input type="text" class="form-control" style="border:none; padding: 10px; background-color: #ebf5ff;  font-size: 12px;" id="ResidentAddress" name="ResidentAddress" readonly>
                                            Billing Address <br> <input type="text" class="form-control" style="border:none; padding: 10px; background-color: #ebf5ff;   font-size: 12px;" id="BillingAddress" name="BillingAddress" readonly>
                                            Company Address <br> <input type="text" class="form-control" style="border:none; padding: 10px; background-color: #ebf5ff;  font-size: 12px;" id="companyAddress" name="companyAddress" readonly>
                                        
                                            </td>
                                            <td style="border: none; width: 20%; color:#2F4F4F" >
                                                Tel. No.
                                                <br> <input type="text" class="form-control" style="border:none; padding: 10px; background-color: #ebf5ff;   font-size: 12px;" id="ResidentialPhoneno" name="ResidentialPhoneno" readonly>
                                                Occupation
                                                <br> <input type="text" class="form-control" style="border:none; padding: 10px; background-color: #ebf5ff;   font-size: 12px;" id="SpouseOccupation" name="SpouseOccupation" readonly>
                                                Tel. No.
                                                <br> <input type="text" class="form-control" style="border:none; padding: 10px; background-color: #ebf5ff;   font-size: 12px;" id="companyTellNo" name="companyTellNo" readonly>
                                                
                                            </td>
                                        
                                        
                                            </tr>
                                        </table>
                                        
                                    <div style="padding: 0px 13px;">
                                    <div  style="width: 50%; float: left;">
                                    <table class="table"   cellspacing="0" style="border: none; width:100%;color:#4a4949; float: right; margin-right: 10px; ">
                                         
                                         <tr  style=" background-color: #007ea7 "> 
                                               <th colspan="2" style="color:#ffffff; font-size: ">Crypt Description</th>
                                           </tr>
                                           <tr style="border: none;">
                                           
                                           <td class="border border-primary" >
                                           <dl class="row">
                                              
                                               <dd class="col-sm-7">
                                               <input placeholder="Block"  style="width:50%; padding:0px 15px; font-size: 13px;color:#4a4949;border:none;background-color: Transparent " id="LDblock" name="LDblock"  readonly></input>
                                               <input placeholder="Section" style="width:45%;padding:0px 15px; font-size: 13px; color:#4a4949;border:none;background-color: Transparent " id="LDsection" name="LDsection"  readonly></input>
                                               <input placeholder="Area" style=" width:50%;padding:0px 15px; font-size: 13px; color:#4a4949;border:none;background-color: Transparent "id="LDarea" name="LDarea"  readonly></input>
                                               <input placeholder="Phase"  style="width:45%;padding:0px 15px; font-size: 13px; color:#4a4949;border:none;background-color: Transparent " id="LDphase" name="LDphase"  readonly></input>    
                                               <input placeholder="Type" style="padding:0px 15px; font-size: 13px; color:#4a4949;border:none;background-color: Transparent " id="LDtype" name="LDtype"  readonly></input>
                                                </dd>
                                               
                                           </dl>
                                           </td>
                                           </tr>
                                           </table>
                                            <table class="table"   cellspacing="0" >
                                            <tr style="border: none;">
                                            <td style="border: none; width: 50%; color:#4a4949; font-size: 13px;background-color: Transparent;padding-left:15px;padding-right:0px;padding-bottom:0px;padding-top:15px;margin:0px; font-weight: bold" >
                                            Terms :
                                            </td>
                                            <td style="border: none;background-color: transparent;color:#4a4949;padding-left:15px;padding-right:15px;padding-bottom:0px;padding-top:15px;margin:0px; font-weight: bold;" >
                                            <input placeholder="Terms"  class="form-control" style="padding:0px 15px; font-size: 13px; margin-bottom: 10px;color:#4a4949" id="terms" name="terms"  readonly></input>
                                            </td>
                                            </tr>

                                            <tr style="border: none;">
                                            <td style="border: none; width: 50%; color:#4a4949; font-size: 13px;background-color: Transparent;padding-left:15px;padding-right:0px;padding-bottom:0px;padding-top:15px;margin:0px; font-weight: bold" >
                                            Mode of Payment :
                                            </td>
                                            <td style="border: none;background-color: transparent;color:#4a4949;padding-left:15px;padding-right:15px;padding-bottom:0px;padding-top:15px;margin:0px; font-weight: bold;" >
                                            <input placeholder="Mode of Payment"  class="form-control" style="padding:0px 15px; font-size: 13px; margin-bottom: 10px;color:#4a4949" id="modeOfpayment" name="modeOfpayment"  readonly></input>
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
                                           
                                            <input readonly placeholder="₱ 0.00" pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency"  oninput="compute()" style="padding:0px 15px; width: 92%; font-size: 13px; margin:0px; background-color: #FDFDFD ;border: none;color:#4a4949" id ="lotListPrice" name="lotListPrice"  ></input>
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
                                          
                                            <input placeholder="₱ 0.00" style="padding:0px 15px; font-size: 13px; width: 92%; margin:0px; background-color: #e8e4c9 ;border: none;color:#4a4949; width: 92%" id="taxs1" name="taxs1"   readonly></input>
                                          
                                                <script>
                                                   let tableRowElement1;
                                                   function toggleModal1(element1) {
                                                    tableRowElement1 = element1.parentElement.parentElement;

                                                   const taxID1 = tableRowElement1.getElementsByClassName('taxID')[0].innerHTML;
                                                   document.getElementById('taxID').value = taxID1;
                                                    }     
                                                    </script>  
                                                    <sup><a href="#" onclick="toggleModal1(this, 1)" data-toggle="modal" data-target="#tax" ><i class="fa fa-gears" style="font-size: 11px; color:white;" hidden></i></a></sup>  
                                                    
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
                                            <input placeholder="₱ 0.00" readonly pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency"  style="padding:0px 15px; width: 92%; font-size: 13px; margin:0px; background-color: #ffff66 ;border: none;color:#4a4949" id="subtotaltax" name="subtotaltax"></input>
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
                                                  
                                                    <input placeholder="₱ 0.00" style="padding:0px 15px; font-size: 13px; width: 92%; margin:0px; background-color: #e8e4c9 ;border: none;color:#4a4949;width: 92%"  id="discounts1" name="discounts1"   readonly></input>
                                                   <script>
                                                    let tableRowElement1;
                                                   function toggleModal1(element1) {
                                                    tableRowElement1 = element1.parentElement.parentElement;

                                                   const taxID1 = tableRowElement1.getElementsByClassName('discountID')[0].innerHTML;
                                                   document.getElementById('discountID').value = taxID1;
                                                    }     

                                                    </script>  
                                                    <sup><a href="#" onclick="toggleModal1(this, 1)" data-toggle="modal" data-target="#discount" hidden><i class="fa fa-gears" style="font-size: 11px; color:white;"></i></a></sup>  
                                                    
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
                                            <input placeholder="₱ 0.00" readonly pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency"  style="padding:0px 15px; width: 92%; font-size: 13px; margin:0px; background-color:#ffff66 ;border: none;color:#4a4949" id="subtotalDiscount" name="subtotalDiscount"  ></input>
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
                                             
                                            
                                                <input readonly placeholder="₱ 0.00" readonly pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency"  style="padding:0px 15px; width: 92%; font-size: 13px; margin:0px; background-color: #e8e4c9 ;border: none;color:#4a4949; width: 92%" id="pcf" name="pcf" value="₱ <?=$row['PCF']?>"  ></input>
                                               
                                               <script>
                                                    let tableRowElement1;
                                                   function toggleModal1(element1) {
                                                    tableRowElement1 = element1.parentElement.parentElement;

                                                   const PCFID1 = tableRowElement1.getElementsByClassName('PCFID')[0].innerHTML;
                                                   document.getElementById('PCFID').value = PCFID1;
                                                    }     

                                                    </script>  
                                                    <sup><a href="#" onclick="toggleModal1(this, 1)" data-toggle="modal" data-target="#PCF" ><i class="fa fa-gears" style="font-size: 11px; color:white;" hidden></i></a></sup>  
                                                    
                                                </td>
                                                <?php
                                                 }
                                                    }
                                                ?>   
                                                </td>
                                            </tr>
                                            <tr style="border: none">
                                           <td style="border: none;background-color: #5B7EDE;font-size: 13px;color:white;padding:0px 15px;margin:0px; font-weight: bold;" >
                                            Total Contract Price :
                                            </td>
                                             <td style="border: none;background-color: #5B7EDE;color:#4a4949;padding:0px 15px;margin:0px;" >
                                            <input readonly placeholder="₱ 0.00" pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency" oninput="computedp()" style="padding:0px 15px; width: 92%; font-size: 13px; margin:0px; background-color: #FDFDFD ;border: none;color:#4a4949" id ="totalContractPrice3" name ="totalContractPrice3"></input>
                                            </td>
                                            </tr>
                                            <tr style="border: none">
                                           <td style="border: none;background-color: #5B7EDE;font-size: 13px;color:white;padding:0px 15px;margin:0px; font-weight: bold;" >
                                            Add_% Mark-up :
                                            </td>
                                            <?php
                                                    $sales_query1 = "SELECT * from tbl_Markup";
                                                    $sales_result1 = mysqli_query($connection, $sales_query1);
                                                    if (mysqli_num_rows($sales_result1) > 0) {
                                                    while ($row = mysqli_fetch_assoc($sales_result1)) {
                                                    ?>
                                                                                             
                                                    <td class="MarkupID" name="MarkupID" hidden><?=$row['id']?></td>
                                             <td style="border: none;background-color: #5B7EDE;color:#4a4949;padding:0px 15px;margin:0px;" >
                                            <input readonly placeholder="₱ 0.00"  readonly style="padding:0px 15px; font-size: 13px; margin:0px; background-color: #e8e4c9; width: 92% ;border: none;color:#4a4949;width: 92%" id ="markup" name ="markup" value ="<?=$row['markup']?>" hidden></input>
                                            <input readonly placeholder="₱ 0.00" readonly style="padding:0px 15px; font-size: 13px; margin:0px; background-color: #e8e4c9 ; width: 92%;border: none;color:#4a4949;width: 92%" id ="markup1" name ="markup1" ></input>
                                           
                                            <script>
                                                    let tableRowElement1;
                                                   function toggleModal1(element1) {
                                                    tableRowElement1 = element1.parentElement.parentElement;

                                                   const MarkupID1 = tableRowElement1.getElementsByClassName('MarkupID')[0].innerHTML;
                                                   document.getElementById('MarkupID').value = MarkupID1;
                                                    }     

                                                    </script>  
                                                    <sup><a href="#" onclick="toggleModal1(this, 1)" data-toggle="modal" data-target="#Markup" hidden><i class="fa fa-gears" style="font-size: 11px; color:white;"></i></a></sup>  
                                                    
                                                </td>
                                                <?php
                                                 }
                                                    }
                                                ?>   
                                            </td>
                                            </tr>
                                            <tr style="border: none">
                                           <td style="border: none;background-color: #5B7EDE;font-size: 13px;color:white;padding:0px 15px;margin:0px; font-weight: bold;" >
                                            At-Needs TCP :
                                            </td>
                                             <td style="border: none;background-color: #5B7EDE;color:#4a4949;padding:0px 15px;margin:0px;" >
                                            <input readonly placeholder="₱ 0.00" style="padding:0px 15px; font-size: 13px; margin:0px; background-color: #e8e4c9 ; width: 92%;border: none;color:#4a4949"></input>
                                            </td>
                                            </tr>
                                            <tr style="border: none">
                                           <td style="border: none;background-color: #5B7EDE;font-size: 13px;color:white;padding:0px 15px;margin:0px; font-weight: bold;" >
                                            Downpayment : <input readonly  placeholder="0.00" oninput="computedp()" pattern="^\%\d{1,3}(,\d{3})*(\.\d+)?%"    type="number" style="float: right; padding:0px 5px; font-size: 13px; margin:0px; background-color: #e8e4c9 ;border: none;color:#4a4949;width: 25%"  id="dpPercentage" name="dpPercentage"   ></input> <a style= "float: right; font-size: 13px; margin-right:5px; border: none;color:#fffff;width: 5%">% </a>
                                            </td>
                                             <td style="border: none;background-color: #5B7EDE;color:#4a4949;padding:0px 15px;margin:0px;" >
                                            <input readonly  placeholder="₱ 0.00" pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" oninput="computedppercentage()" data-type="currency" style="padding:0px 15px; width: 92%; font-size: 13px; margin:0px; background-color: #FDFDFD ;border: none;color:#4a4949" id="dpPercentage2" name="dpPercentage2" ></input>
                                            </td>
                                            </tr>
                                            <tr style="border: none">
                                           <td style="border: none;background-color: #5B7EDE;font-size: 13px;color:white;padding:0px 15px;margin:0px; font-weight: bold;" >
                                            Balance :
                                            </td>
                                             <td style="border: none;background-color: #5B7EDE;color:#4a4949;padding:0px 15px;margin:0px;" >
                                            <input readonly placeholder="₱ 0.00" readonly pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency"  style="padding:0px 15px; width: 92%; font-size: 13px; margin:0px; background-color: #FFCCCB ;border: none;color:#4a4949" id="balance" name="balance"  ></input>
                                            </td>
                                            </tr>
                                            <tr style="border: none">
                                           <td style="border: none;background-color: #5B7EDE;font-size: 13px;color:white;padding:0px 15px;margin:0px; font-weight: bold;" >
                                            Monthly Installment :
                                            </td>
                                             <td style="border: none;background-color: #5B7EDE;color:#4a4949;padding:0px 15px;margin:0px;" >
                                          
                                            <input readonly placeholder="₱ 0.00" id="MI1" name="MI1" readonly  pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency"  style="padding:0px 15px; width: 92%; font-size: 13px; margin:0px; background-color: #e8e4c9 ;border: none;color:#4a4949" ></input>
                                            <input placeholder="₱ 0.00" hidden id="MIInterestPercentage" value="50" name="MIInterestPercentage" readonly  pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency"  style="padding:0px 15px; width: 92%; font-size: 13px; margin:0px; background-color: #FDFDFD ;border: none;color:#4a4949" ></input>
                                            <input placeholder="₱ 0.00" hidden id="MIPrincipalPercentage" value="50" name="MIPrincipalPercentage" readonly  pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency"  style="padding:0px 15px; width: 92%; font-size: 13px; margin:0px; background-color: #FDFDFD ;border: none;color:#4a4949" ></input>
                                             
                                               
                                          
                                            </td>
                                            </tr>
                                            <tr style="border: none; padding-bottom: 30px; ">
                                           <td style="border: none;background-color: #5B7EDE;color:white;font-size: 13px;padding:0px 15px;margin:0px; font-weight: bold;" >
                                            No. of Months :
                                            
                                            </td>
                                            
                                             <td style="border: none;background-color: #5B7EDE;color:#4a4949;padding:0px 15px;margin:0px;" >
                                            <input readonly  placeholder="0.00" oninput="MA()"  id="NoOfMonths" name="NoOfMonths"  type= "number" style="padding:0px 15px; font-size: 13px; margin:0px; background-color: #FDFDFD ; width: 92%;border: none;color:#4a4949" ></input>
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
                                            <td style="border: none;background-color: white;color:#5B7EDE;padding:0px 0px;margin:0px;" >
                                            .
                                            <input value="<?php echo $Name; ?>" id="user" name="user" hidden>
                                            <button class="btn btn-primary"  id="Cancel" style="padding: 2px 15px; float: left; ;margin: 15px 0px ; background-color: gray; font-size: 13px;" type="button" >Break Contract </button> 
                                            </td>
                                            <td style="border: none;background-color: white;color:#5B7EDE;padding:0px 0px;margin: 10px 0px ;" >
                                            <button class="btn btn-primary"  id="btnsearchByName1" style="padding: 2px 15px; float: left; ;margin: 15px 0px ; background-color: green; font-size: 13px;" type="button" >Show Ledger</button> <button type="button" id="btnmanualcollect"  href="#" data-toggle="modal"  data-target="#manualEncode" class="btn btn-primary" style="padding: 2px 15px; float: right; ;margin: 15px 0px ;font-size: 13px;" >Manual encode</button>
                                            </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                           

                                <div >
   <!-- Custom Filter -->
   <table>
     <tr>
       <td>
         <input type='text' id='searchByName' value="" readonly hidden placeholder='Enter name'>
       </td>
       <td>
         <select id='searchByGender' hidden>
           <option value=''>-- Select Gender--</option>
           <option value='asdf'>Male</option>
           
         </select>
       </td>
     </tr>
   </table>
                                <div id="table-container" ></div>
                              
                                 <div class="table-responsive" style="display:none" id="showledger">
                                    <table id="userTable" class="table table-bordered table-striped" cellspacing="0" width="100%">   
                                 <thead>
                                    
                                        <tr  style="background-color: #007ea7">
                                           
                                          
                                            <th class="th-sm" style= "width: 9% ; font-size: 12px; color:#ffffff">Date</th>
                                            <th class="th-sm" style= "width: 10% ; font-size: 12px; color:#ffffff">TCP</th>
                                            <th class="th-sm" style= "width: 7% ; font-size: 12px; color:#ffffff">O.R/P.R.</th>
                                            <th class="th-sm" style= "width: 13% ; font-size: 11px; color:#ffffff">Amount Paid</th>
                                            <th class="th-sm" style= "width: 10% ; font-size: 12px; color:#ffffff">Interest</th>
                                            <th class="th-sm" style= "width: 10% ; font-size: 12px; color:#ffffff">Principal</th>
                                            <th class="th-sm" style= "width: 10% ; font-size: 12px; color:#ffffff">Balance</th>
                                            <th class="th-sm" style= "width: 10% ; font-size: 12px; color:#ffffff">Penalties</th>
                                            <th class="th-sm" style= "width: 10% ; font-size: 12px; color:#ffffff">Vat</th>
                                            <th class="th-sm" style= "width: 10% ; font-size: 12px; color:#ffffff">PCF</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody style= "font-size: 12px; color:#2F4F4F; margin: 1px;" ></tbody>
                                    <tfoot>
                                    <tr>
                                    <th  style="text-align:right;font-size: 12px; color:#2F4F4F; width: 9%"></th>
                                        <th colspan="2" style="text-align:right;font-size: 12px; color:#2F4F4F">Total: </th>
                                        <th  style="text-align:left;font-size: 12px; color:#2F4F4F" ><input value="" id="total_order" name="total_order" style="width: 80px; border:none; background-color: transparent" readonly>
                                        
                                        </th>
                                        <th colspan="2" style="text-align:right;font-size: 12px; color:#2F4F4F">Total: </th>
                                        <th  style="text-align:left;font-size: 12px; color:#2F4F4F"><input value="" id="totalBalance" name="totalBalance" style="width: 80px; border:none; background-color: transparent" readonly></th>
                                        <th  colspan="3"></th>
                                   
                                    </tr>
                                    </tfoot>
                                        </table>
                                        </div>  
                                        </div>       
                                    </div>   
                                </div> 
                                </div>
                                </div>
                                
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal" >Close</button>
                       </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </form>
    </div>


 <!-- Manual Encode Collection Modal-->

 <div class="modal fade child-modal" id="manualEncode"  tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                   
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body" style="color:#4a4949">
                <div class="alert alert-success" role="alert" id="successalert" style="display:none; padding: 3px; font-size: 12px;">
                Great ! Insert data successfully !
                </div>
               
                 <form id="collectionUserForm" name="collectionUserForm" method="post">
                                 <table id="dtcryptRecord" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                                            <tr style="border: 2px solid #e3e6f0">
                                                <th  style= "font-size: 14px; color:#4a4949 " colspan="2">Please enter the exact amount or months will paid.</td>
                                                </tr>
                                                <tr style="border: 2px solid #e3e6f0">
                                                <td  style= "font-size: 14px; color:#4a4949 ">Date : </td>
                                                <td  style= "font-size: 14px; color:#4a4949 ">
                                                <input required type="date" style="padding:0px 15px; font-size: 13px; margin:0px; background-color: white;border: none;color:#4a4949; width: 100%"   name ="date1" id ="date1" ></input>
                                                </td>
                                                <tr style="border: 2px solid #e3e6f0">
                                                <td  style= "font-size: 14px; color:#4a4949 ">How many months ? :</td>
                                                <td  style= "font-size: 14px; color:#4a4949 ">
                                                <input  placeholder="0. 00" style="padding:0px 15px; font-size: 13px; margin:0px; background-color: white;border: none;color:#4a4949; width: 100%" type="number" oninput="collectionNoOfMonths()" pattern="[0-9]+([\,|\.][0-9]+)?" name ="collectionNoMonth" id ="collectionNoMonth" ></input>
                                             
                                               
                                                  <input  style="padding:0px 15px; font-size: 13px; margin:0px; background-color: white;border: none;color:#4a4949; width: 100%"  type="number" pattern="[0-9]+([\,|\.][0-9]+)?" name ="collectionlastbalance" id ="collectionlastbalance" hidden ></input>
                                                  <input  style="padding:0px 15px; font-size: 13px; margin:0px; background-color: white;border: none;color:#4a4949; width: 100%" pattern="[0-9]+([\,|\.][0-9]+)?" name ="collectionTotalAmountPaid" id ="collectionTotalAmountPaid" hidden ></input>
                                                  <input  hidden style="padding:0px 15px; font-size: 13px; margin:0px; background-color: white;border: none;color:#4a4949; width: 100%"  name ="collectionContractCode" id ="collectionContractCode" ></input>
                                                  <input  hidden style="padding:0px 15px; font-size: 13px; margin:0px; background-color: white;border: none;color:#4a4949; width: 100%"  name ="collectionTCP" id ="collectionTCP" ></input>
                                                  <input  hidden style="padding:0px 15px; font-size: 13px; margin:0px; background-color: white;border: none;color:#4a4949; width: 100%"  name ="collectionORPR" id ="collectionORPR" ></input>
                                                  <input  hidden style="padding:0px 15px; font-size: 13px; margin:0px; background-color: white;border: none;color:#4a4949; width: 100%"  name ="collectionVAT" id ="collectionVAT" ></input>
                                                  <input  hidden style="padding:0px 15px; font-size: 13px; margin:0px; background-color: white;border: none;color:#4a4949; width: 100%"  name ="collectionPCF" id ="collectionPCF" ></input>
                                                  <input hidden value="<?php echo $Name; ?>" id="user1" name="user1" >
                                            </td>
                                            </tr>
                                            <tr style="border: 2px solid #e3e6f0">
                                                <td  style= "font-size: 14px; color:#4a4949 ">Amount Paid ? :</td>
                                                <td  style= "font-size: 14px; color:#4a4949 ">
                                                <input required placeholder="0. 00" style="padding:0px 15px; font-size: 13px; margin:0px; background-color: white;border: none;color:#4a4949; width: 100%"  oninput="collectionAmountPaid()" pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency" name ="collectionAmmountPaid" id ="collectionAmmountPaid" ></input>
                                                </td>
                                            </tr>
                                            <tr style="border: 2px solid #e3e6f0">
                                                <td  style= "font-size: 14px; color:#4a4949 ">Penalties ? :</td>
                                                <td  style= "font-size: 14px; color:#4a4949 ">
                                                <input required placeholder="0. 00" style="padding:0px 15px; font-size: 13px; margin:0px; background-color: white;border: none;color:#4a4949; width: 100%"  pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency"  name ="collectionPenalties" id ="collectionPenalties" ></input>
                                                </td>
                                            </tr>
                                            <tr style="border: 2px solid #e3e6f0">
                                                <td  style= "font-size: 14px; color:#4a4949 ">Balance :</td>
                                                <td  style= "font-size: 14px; color:#4a4949 ">
                                                <input required placeholder="0. 00" style="padding:0px 15px; font-size: 13px; margin:0px; background-color: white;border: none;color:#4a4949; width: 100%"  pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency" name ="collectionbalance" id ="collectionbalance" ></input>
                                            
                                                <input placeholder="0. 00" hidden style="padding:0px 15px; font-size: 13px; margin:0px; background-color: white;border: none;color:#4a4949; width: 100%"  pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency" name ="collectionInterest" id ="collectionInterest" ></input>
                                                <input placeholder="0. 00" hidden style="padding:0px 15px; font-size: 13px; margin:0px; background-color: white;border: none;color:#4a4949; width: 100%"  pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency" name ="collectionPrincipal" id ="collectionPrincipal" ></input>
                                                 
                                            </td>
                                            </tr>
                                           
                                        </table>
                                    
                            </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-toggle="modal" data-dismiss="modal" >Cancel</button>
                    <input type="button" name="butsave" class="btn btn-primary" value="Save to database" id="butsave">
                </div>
            </div>
        </div>
    </div>
    </form>
    
    <div id="myModal" class="modal fade">
	<div class="modal-dialog modal-confirm">
		<div class="modal-content">
			<div class="modal-header justify-content-center">
				<div class="icon-box">
                <a data-toggle="modal" data-dismiss="#myModal" aria-hidden="true"><i class="material-icons">&#xE876;</i></a>
				</div>
				<button type="button" class="close" data-dismiss="#myModal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body text-center">
				<h4>Great!</h4>	
				<p>Payment has been saved successfully.</p>
				
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
                                                <input  style="padding:0px 15px; font-size: 12px; margin:0px; background-color: white;border: none;color:#4a4949; width: 100%" type="number" pattern="[0-9]+([\,|\.][0-9]+)?" name ="tax" id ="tax" ></input>
                                                <input  style="padding:0px 15px; font-size: 12px; margin:0px; background-color: transparent;border: none;color:#4a4949; width: 100%" type="number" hidden></input>
                                                <input  style="padding:0px 15px; font-size: 12px; margin:0px; background-color: transparent;border: none;color:#4a4949" id ="taxID" name ="taxID" value="1" step="0.01" hidden></input></td>
                                              
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



   
   
    
    
  
    <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#lotListPrice01').keyup(function(e) {
                var v = $('#lotListPrice01').val();
                $('#lotListPrice').val(v);
            })
        });
    </script>
    <script>
       $(document).find('.modal').on('hidden.bs.modal', function () {
        console.log('hiding child modal');
        $('body').addClass('modal-open');
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
            document.getElementById("subtotaltax").value = "₱ " + taxsubtotalFixed;
            document.getElementById("subtotalDiscount").value =  "₱ " + discountsubtotalFixed;

            var subtotaltax = taxsubtotalFixed.replace(/₱|,/g, '');
            var subtotaldiscounted = discountsubtotalFixed.replace(/₱|,/g, '');
            var subtotalpcf = pcf1.replace(/₱|,/g, '');

            let totalContractPrice = (parseFloat(taxsubtotalFixed) + parseFloat(subtotalpcf) + parseFloat(newStr) - parseFloat(subtotaldiscounted));
            let totalContractPriceFixed = totalContractPrice.toFixed(2)
            document.getElementById("totalContractPrice3").value = "₱ " + totalContractPriceFixed;

            document.getElementById("dpPercentage2").value = "";
            document.getElementById("dpPercentage").value = "";
            document.getElementById("balance").value = "";
            document.getElementById("MI1").value = "";
        document.getElementById("NoOfMonths").value = "";
        }
        function computedp() {
        let dpPercentage1 =  document.getElementById("dpPercentage").value;
        let a12 =  document.getElementById("taxs1").value;
        
        let tcp1 =  document.getElementById("totalContractPrice3").value;
        let dpPercentagedecimal = dpPercentage1 /100;
        var newStr2 = tcp1.replace(/₱|,/g, ''); 
        var lesspcf = pcf.replace(/₱|,/g, ''); 
        let amountdp1 =  parseFloat(dpPercentagedecimal) * parseFloat(newStr2); 
        let amountdp1Fixed = amountdp1.toFixed(2)
        document.getElementById("dpPercentage2").value =  "₱ " + amountdp1Fixed;

        dp = document.getElementById("dpPercentage2").value
        var dp1 = dp.replace(/₱|,/g, ''); 
        let balance1 = (parseFloat(newStr2)  - parseFloat(dp1));
        let balance1Fixed = balance1.toFixed(2)
        document.getElementById("balance").value = "₱ " + balance1Fixed;
        let discounts123 =  document.getElementById("discounts1").value;
        

        
        lotListPrice123 = (parseFloat(newStr2) -  parseFloat(lesspcf)) ;
        taxAndDiscount = 1 + (parseFloat(a12) - parseFloat(discounts123)) ;
        llpDT= lotListPrice123 / taxAndDiscount;
        let lotlistPriceTD = llpDT.toFixed(2)
        document.getElementById("lotListPrice").value =  "₱ " + lotlistPriceTD;

        var lotListPriceTax1 = lotlistPriceTD.replace(/₱|,/g, ''); 
        subtotaltax12 = a12 * lotListPriceTax1;
        discountPrice1234 = parseFloat(discounts123) * parseFloat(lotListPriceTax1);
        const subtotaltaxfixed = subtotaltax12.toFixed(2);
        const subtotaldiscountfixed = discountPrice1234.toFixed(2);
        document.getElementById("subtotaltax").value =  "₱ " + subtotaltaxfixed;
        document.getElementById("subtotalDiscount").value = "₱ " + subtotaldiscountfixed;
        document.getElementById("MI1").value = "";
        document.getElementById("NoOfMonths").value = "";
        
     }
        function computedppercentage() {
        let dpPercentage2=  document.getElementById("dpPercentage2").value;
        let dpPercentage=  document.getElementById("dpPercentage").value;
        let tcp2 =  document.getElementById("totalContractPrice3").value;
        document.getElementById("MI1").value = "";
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
      
        let balance  =  document.getElementById("balance").value;
      
        var newStr3 = balance.replace(/₱|,/g, ''); 
        let monthlyInstallment = parseFloat(newStr3) /  parseFloat(NoOfMonths); 
        const monthlyInstallment1fixed = monthlyInstallment.toFixed(2);
        document.getElementById("MI1").value = "₱ " +  monthlyInstallment1fixed;
       
     }
    </script>

<script>
            var table = document.getElementById('dataTable');
                for(var i = 1; i < table.rows.length; i++){
                    table.rows[i].onclick = function(){
                        //rIndex = this.rowIndex;
                        
        let dpPercentage1 =  document.getElementById("dpPercentage").value;
        let a12 =  document.getElementById("taxs1").value;
        
        let tcp1 =  document.getElementById("totalContractPrice3").value;
        let dpPercentagedecimal = dpPercentage1 /100;
        var newStr2 = tcp1.replace(/₱|,/g, ''); 
        var lesspcf = pcf.replace(/₱|,/g, ''); 
        let amountdp1 =  parseFloat(dpPercentagedecimal) * parseFloat(newStr2); 
        let amountdp1Fixed = amountdp1.toFixed(2)
        document.getElementById("dpPercentage2").value =  "₱ " + amountdp1Fixed;

        dp = document.getElementById("dpPercentage2").value
        var dp1 = dp.replace(/₱|,/g, ''); 
        let balance1 = (parseFloat(newStr2)  - parseFloat(dp1));
        let balance1Fixed = balance1.toFixed(2)
        document.getElementById("balance").value = "₱ " + balance1Fixed;
        let discounts123 =  document.getElementById("discounts1").value;
        

        
        lotListPrice123 = (parseFloat(newStr2) -  parseFloat(lesspcf)) ;
        taxAndDiscount = 1 + (parseFloat(a12) - parseFloat(discounts123)) ;
        llpDT= lotListPrice123 / taxAndDiscount;
        let lotlistPriceTD = llpDT.toFixed(2)
        document.getElementById("lotListPrice").value =  "₱ " + lotlistPriceTD;

        var lotListPriceTax1 = lotlistPriceTD.replace(/₱|,/g, ''); 
        subtotaltax12 = a12 * lotListPriceTax1;
        discountPrice1234 = parseFloat(discounts123) * parseFloat(lotListPriceTax1);
        const subtotaltaxfixed = subtotaltax12.toFixed(2);
        const subtotaldiscountfixed = discountPrice1234.toFixed(2);
        document.getElementById("subtotaltax").value =  "₱ " + subtotaltaxfixed;
        document.getElementById("subtotalDiscount").value = "₱ " + subtotaldiscountfixed;
        let NoOfMonths=  document.getElementById("NoOfMonths").value;
      
        let balance  =  document.getElementById("balance").value;
      
        var newStr3 = balance.replace(/₱|,/g, ''); 
        let monthlyInstallment = parseFloat(newStr3) /  parseFloat(NoOfMonths); 
        const monthlyInstallment1fixed = monthlyInstallment.toFixed(2);
        document.getElementById("MI1").value = "₱ " +  monthlyInstallment1fixed;
                        
                    };
                }
        </script>
   

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<!-- Bootstrap JS -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<!-- Sweetalert2 JS -->
	<script src="assets/plugins/sweetalert2/sweetalert2.min.js"></script>
	
    <script>
       
        var a =  document.getElementById("taxs").value;
        var b =  100;
        var c = parseInt(a) / parseInt(b); 
        document.getElementById("taxs1").value = c;
      


    </script>
    
  
	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<!-- Bootstrap JS -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<!-- Sweetalert2 JS -->
	<script src="assets/plugins/sweetalert2/sweetalert2.min.js"></script>
   
	
    <script>
$(document).ready(function() {
$('#butsave').on('click', function() {

var date1                    = $('#date1').val();
var collectionPrincipal      = $('#collectionPrincipal').val();
var collectionInterest       = $('#collectionInterest').val();
var collectionbalance        = $('#collectionbalance').val();
var collectionPenalties      = $('#collectionPenalties').val();
var collectionAmmountPaid    = $('#collectionAmmountPaid').val();
var collectionTCP            = $('#collectionTCP').val();
var collectionORPR           = $('#collectionORPR').val();
var collectionVAT            = $('#collectionVAT').val();
var collectionPCF            = $('#collectionPCF').val();
var collectionContractCode   = $('#collectionContractCode').val();
var user                     = $('#user1').val();

   if(date1 != ""){
	$.ajax({
		url: "collectionInsertDataAJAX.php",
		type: "POST",
		data: {
			
			date1                   : date1,
			collectionPrincipal     : collectionPrincipal,
			collectionInterest      : collectionInterest,
			collectionbalance       : collectionbalance,	
			collectionPenalties     : collectionPenalties,
			collectionAmmountPaid   : collectionAmmountPaid,
			collectionTCP           : collectionTCP,
			collectionORPR          : collectionORPR,	
			collectionVAT           : collectionVAT,
			collectionPCF           : collectionPCF,
			collectionContractCode  : collectionContractCode,
			user                    : user				
		},
		cache: false,
		success: function(dataResult){
			var dataResult = JSON.parse(dataResult);
			if(dataResult.statusCode==200){
				
                		
			}
			else if(dataResult.statusCode==201){
				alert("Error occured !");
			}
			
		}
	});
    $('#date1').val('');
    $('#collectionNoMonth').val('');
    $('#collectionAmmountPaid').val('');
    $('#collectionPenalties').val('');
    $('#collectionbalance').val('');
    $('#collectionInterest').val('');
    $('#collectionPrincipal').val('');
    var x = document.getElementById("successalert");
    x.style.display = "block"
     $('#myModal').modal('show');
    //hide the modal

    $('body').removeClass('modal-open'); 
    //modal-open class is added on body so it has to be removed

    $('.modal-backdrop').remove();
    //need to remove div with modal-backdrop class
   } else {
    alert("sadfsaf");
   };
	
});
});
</script>
</body>
</html>
  
	<script type="text/javascript" language="javascript" >
    $(document).ready(function(){
   var dataTable = $('#userTable').DataTable({
    "processing" : true,
    "serverSide" : true,
    "order" : [],
    "ajax" : {
     url:"fetch.php",
     'data': function(data){
         // Read values
         var gender = $('#searchByGender').val();
          var name = $('#searchByName').val();

         // Append to data
        data.searchByGender = gender;
        data.searchByName = name;
    },
     type:"POST"
    },
    drawCallback:function(settings)
    {
     $('#total_order').val("₱" + " " + settings.json.total);
     $('#collectionTotalAmountPaid').val("₱" + " " + settings.json.total);
    }
    });
    $('#btnsearchByName1').click(function(){
    dataTable.draw();
    document.getElementById('showledger').style.display = 'block';
  });
    $('#btnmanualcollect').click(function(){
    dataTable.draw();
  

  });
  
  
    });
    function collectionNoOfMonths() {
        let monthlyInstallmentCollection=  document.getElementById("MI1").value;
        var monthlyInstallmentCollection1 = monthlyInstallmentCollection.replace(/₱|,/g, ''); 
        let collectionNoMonthCollection=  document.getElementById("collectionNoMonth").value;
        var collectionNoMonthCollection1 = collectionNoMonthCollection.replace(/₱|,/g, ''); 
        let collectionlastBalanceCollection=  document.getElementById("collectionTotalAmountPaid").value;
        var collectionlastBalanceCollection1 = collectionlastBalanceCollection.replace(/₱|,/g, ''); 
        let totalContractPriceCollection=  document.getElementById("totalContractPrice3").value;
        var totalContractPriceCollection1 = totalContractPriceCollection.replace(/₱|,/g, ''); 

        let collectionNoOfMonths1 = parseFloat(collectionNoMonthCollection1) *  parseFloat(monthlyInstallmentCollection1); 
        const collectionNoOfMonthsfixed = collectionNoOfMonths1.toFixed(2);
        const replacedcollectionNoOfMonthsfixed = collectionNoOfMonthsfixed.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        document.getElementById("collectionAmmountPaid").value = "₱ " +  replacedcollectionNoOfMonthsfixed;

        let collectionlastBalanceTotal = parseFloat(totalContractPriceCollection1) - (parseFloat(collectionNoOfMonthsfixed) + parseFloat(collectionlastBalanceCollection1));
        const collectionlastBalanceTotalfixed1 = collectionlastBalanceTotal.toFixed(2);
        const replacedcollectionlastBalanceTotalfixed1=collectionlastBalanceTotalfixed1.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        document.getElementById("collectionbalance").value =  "₱ " + replacedcollectionlastBalanceTotalfixed1;

        let collectionInterest12 = parseFloat(collectionNoOfMonthsfixed) * 0.50; 
        const collectionInterestfixed1 = collectionInterest12.toFixed(2);
        const replacedcollectionInterestfixed1 =  collectionInterestfixed1.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        document.getElementById("collectionInterest").value = "₱ " + replacedcollectionInterestfixed1;
        document.getElementById("collectionPrincipal").value = "₱ " + replacedcollectionInterestfixed1;
       
     }
     function collectionAmountPaid() {
        let monthlyInstallmentCollection12=  document.getElementById("MI1").value;
        var monthlyInstallmentCollection2 = monthlyInstallmentCollection12.replace(/₱|,/g, ''); 
        let collectionNoMonthCollection12=  document.getElementById("collectionAmmountPaid").value;
        var collectionNoMonthCollection2 = collectionNoMonthCollection12.replace(/₱|,/g, ''); 
        let collectionlastBalanceCollection=  document.getElementById("collectionTotalAmountPaid").value;
        var collectionlastBalanceCollection1 = collectionlastBalanceCollection.replace(/₱|,/g, ''); 
        let totalContractPriceCollection=  document.getElementById("totalContractPrice3").value;
        var totalContractPriceCollection1 = totalContractPriceCollection.replace(/₱|,/g, ''); 

        let collectionNoOfMonths2 =  parseFloat(collectionNoMonthCollection2) / parseFloat(monthlyInstallmentCollection2); 
        const collectionNoOfMonthsfixed1 = collectionNoOfMonths2.toFixed(2);
        document.getElementById("collectionNoMonth").value = collectionNoOfMonthsfixed1;
       
        let collectionlastBalanceTotal = parseFloat(totalContractPriceCollection1) - (parseFloat(collectionNoMonthCollection2) + parseFloat(collectionlastBalanceCollection1));
        const collectionlastBalanceTotalfixed1 = collectionlastBalanceTotal.toFixed(2);
        const formatNumbercollectionlastBalanceTotalfixed1 = collectionlastBalanceTotalfixed1.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        document.getElementById("collectionbalance").value =  "₱ " + formatNumbercollectionlastBalanceTotalfixed1;

        let collectionInterest12 = parseFloat(collectionNoMonthCollection2) * 0.50; 
        const collectionInterestfixed1 = collectionInterest12.toFixed(2);
        const replacedcollectionInterestfixed1 =  collectionInterestfixed1.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        document.getElementById("collectionInterest").value = "₱ " + replacedcollectionInterestfixed1;
        document.getElementById("collectionPrincipal").value = "₱ " + replacedcollectionInterestfixed1;

            
        
     }
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
    
    </body>


    </html>

    <?php } else {
    
    header("location: index.php");
    
    }?>
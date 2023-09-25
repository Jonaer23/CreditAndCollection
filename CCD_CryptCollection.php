<?php
    session_start();
    include 'connection.php';
    include 'session.php';
    error_reporting(0);
    
   
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
                                                <th scope="col" style= "width: 8% ; font-size: 13px; color:#ffffff">Contract Code</th>
                                                <th scope="col" style="width: 10%; font-size: 13px; color:#ffffff" >Name</th>
                                                <th  scope="col"  style= " width: 6% ;font-size: 13px; color:#ffffff">Date</th>
                                                <th scope="col" style= "width: 2% ; font-size: 13px; color:#ffffff">Crypt ID</th>  
                                                <th style= "width: 6%; font-size: 13px; color:#ffffff">TCP</th>
                                                <th scope="col" style= "width: 5%; font-size: 13px; color:#ffffff" hidden>Terms</th>
                                                <th scope="col" style= "width: 5%; font-size: 13px; color:#ffffff">Status</th>
                                                <th scope="col" style= "width: 3%; font-size: 13px; color:#ffffff" >Tools</th>

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
                                            <tr  style="background-color:#007ea7; color:#ffffff">
                                            <th scope="col" style= "width: 8% ; font-size: 13px; color:#ffffff">Contract Code</th>
                                                <th scope="col" style="width: 10%; font-size: 13px; color:#ffffff" >Name</th>
                                                <th  scope="col"  style= "width: 6% ; font-size: 13px; color:#ffffff">Date</th>
                                                <th scope="col" style= "width: 2% ; font-size: 13px; color:#ffffff">Lot ID</th>  
                                                <th style= "width: 5%; font-size: 13px; color:#ffffff">TCP</th>
                                                <th scope="col" style= "width: 5%; font-size: 13px; color:#ffffff" hidden>Terms</th>
                                                <th scope="col" style= "width: 5%; font-size: 13px; color:#ffffff">Status</th>
                                                <th scope="col" style= "width: 3%; font-size: 13px; color:#ffffff" >Tools</th>

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
                                   
                                    $sales_query = "SELECT * from tbl_ledger LEFT JOIN buyersinformationsheet  ON tbl_ledger.contractCode =  buyersinformationsheet.contractCode  WHERE tbl_ledger.status='Verified' && tbl_ledger.lotOrCryptDescription='Crypt';";
                                    $sales_result = mysqli_query($connection, $sales_query);
                                    if (mysqli_num_rows($sales_result) > 0) {
                                       while ($row = mysqli_fetch_assoc($sales_result)) {
                                        if ($row['status1'] == 'Purchased' ){
                                            $whatscolor = 'color: green'; 
                                        }if ($row['status1'] == 'Monitoring' ){
                                            $whatscolor = 'color: #FFBF00'; 
                                        }if ($row['status1'] == 'Cancelled' ){
                                            $whatscolor = 'color: red'; 
                                        }
                                    ?>
                                    <tr style="color: #2F4F4F; font-size: 13px">
                                       <td class="id" name="id" hidden><?=$row['id']?></td>
                                      
                                       <td class="contractCode" name="contractCode" style="font-size: 14px;"><?=$row['contractCode']?></td>
                                      
                                       <td class="Fullname" name="Fullname"  style="font-size: 14px;"><?=$row['customerName']?></td>
                                       <td class="B_Date" name="B_Date" style="font-size: 14px;"><?=$row['date']?></td>
                                       <td class="LotDescription" name="LotDescription" style="font-size: 14px;"><?=$row['id']?></td>  
                                       <td class="LDblock" name="LDblock" hidden><?=$row['cryptphase']?></td>
                                       <td class="LDsection" name="LDsection" hidden><?=$row['cryptlevel']?></td>
                                       <td class="LDarea" name="LDarea" hidden><?=$row['cryptarea']?></td>
                                       <td class="LDphase" name="LDphase" hidden><?=$row['cryptsection']?></td>
                                       <td class="LDtype" name="LDtype" hidden><?=$row['crypt_column']?></td>
                                       <td class="unitNo" name="unitNo" hidden><?=$row['cryptunit_no']?></td>
                                       <td class="noLots" name="noLots" hidden><?=$row['cryptnoLots']?></td>
                                       <td class="classification" name="classification" hidden><?=$row['cryptclassification']?></td>
                                       <td class="totalContractPrice" name="totalContractPrice" ><?=$row['totalContractPrice']?></td>
                                       <td class="downpayment" name="downpayment" style="font-size: 14px;" hidden> <?=$row['lotdescTerms']?></td>
                                      
                                       <td class="status" name="status" id="status" style="font-size: 14px;<?php echo $whatscolor; ?>"><?=$row['status1']?> <li class="	fas fa-tags"></li></td>
                                      
                                       <td class="BusinessPhoneFax" name="BusinessPhoneFax" hidden><?=$row['BusinessPhone']?></td>  
                                       <td class="DateBirth" name="DateBirth" hidden><?=$row['DOB']?></td> 
                                       <td class="MaritalStatus" name="MaritalStatus" hidden><?=$row['MaritalStatus']?></td> 
                                       <td class="Citizenship" name="Citizenship" hidden><?=$row['Citizenship']?></td> 
                                       <td class="Email" name="Email" hidden><?=$row['EmailAddress']?></td> 
                                       <td class="Height1" name="Height1" hidden><?=$row['Height']?></td> 
                                       <td class="Weight" name="Weight" hidden><?=$row['Weight']?></td> 
                                       <td class="modeOfpayment" name="modeOfpayment" hidden><?=$row['modeOfpayment']?></td> 
                                       <td class="ResidentAddress" name="ResidentAddress" hidden><?=$row['r_Address']?><?=$row['R_BlkLot']?>
                                       <?=$row['R_City']?><?=$row['R_Province']?><?=$row['R_Country']?><?=$row['R_Zipcode']?></td> 

                                       <td class="ResidentialPhoneno" name="ResidentialPhoneno" hidden><?=$row['Residential_Phone']?></td> 
                                       <td class="BillingAddress" name="BillingAddress" hidden><?=$row['b_Address']?><?=$row['B_BlkLot']?>
                                       <?=$row['B_City']?> <?=$row['B_Province']?><?=$row['B_Country']?><?=$row['B_Zipcode']?></td> 
                                       <td class="IssuedAt" name="IssuedAt" hidden><?=$row['IssuedAt']?></td> 
                                       <td class="IssuedOn" name="IssuedOn" hidden><?=$row['IssuedOn']?></td> 
                                       <td class="ResidentSince" name="ResidentSince" hidden><?=$row['ResidentSince']?></td> 
                                       <td class="GSIS" name="GSIS" hidden><?=$row['SSS_No']?></td> 
                                       <td class="HDMF" name="HDMF" hidden><?=$row['HDMF_No']?></td> 
                                       <td class="TIN" name="TIN" hidden><?=$row['TIN']?></td> 
                                       <td class="NBI" name="NBI" hidden><?=$row['NBI']?></td> 
                                       <td class="companyAddress" name="companyAddress" hidden><?=$row['companyAddress']?></td> 
                                       <td class="companyTellNo" name="companyTellNo" hidden><?=$row['companyTellNo']?></td> 
                                       <td class="MotherName" name="MotherName" hidden><?=$row['MotherName']?></td> 
                                       <td class="FatherName" name="FatherName" hidden><?=$row['FatherName']?></td> 
                                       <td class="SpouseName1" name="SpouseName1" hidden><?=$row['SpouseName']?></td> 
                                       <td class="ChildrenName" name="ChildrenName" hidden><?=$row['ChildrensName']?></td> 
                                       <td class="MotherOccupation" name="MotherOccupation" hidden><?=$row['MotherOccupation']?></td> 
                                       <td class="FatherOccupation" name="FatherOccupation" hidden><?=$row['FatherOccupation']?></td> 
                                       <td class="SpouseOccupation" name="SpouseOccupation" hidden><?=$row['SpouseOccupation']?></td> 
                                       <td class="Employment" name="Employment" hidden><?=$row['Employment_Status']?></td> 
                                       <td class="Source" name="Source" hidden><?=$row['SourceOfIncome']?></td> 
                                       <td class="Employer" name="Employer" hidden><?=$row['EmployerBusinessName']?></td> 
                                       <td class="Nature" name="Nature" hidden><?=$row['NatureOfEmployeerBusiness']?></td> 
                                       <td class="PositionCompany" name="PositionCompany" hidden><?=$row['PositionInCompany']?></td> 
                                       <td class="PersonalMonthlyIncome" name="PersonalMonthlyIncome" hidden><?=$row['PersonalMonthlyIncome']?></td> 
                                       <td class="M_Phone" name="M_Phone" hidden><?=$row['Mobile_Phone']?></td> 
                                       
                                       <td class="EmploymentbusinessEstablished" name="EmploymentbusinessEstablished" hidden><?=$row['EmployementDate']?></td> 
                                       <td class="childrensName" name="childrensName" hidden><?=$row['ChildrensName']?></td> 
                                       <td class="terms" name="terms" hidden><?=$row['lotdescTerms']?></td> 


                                       <td class="lotListPrice" name="lotListPrice" hidden><?=$row['lotListPrice']?></td> 
                                       <td class="VAT" name="VAT" hidden><?=$row['VAT']?></td> 
                                       <td class="subtotaltax" name="subtotaltax" hidden><?=$row['subtotaltax']?></td> 
                                       <td class="discount" name="discount" hidden><?=$row['discount']?></td> 
                                       <td class="subtotalDiscount" name="subtotalDiscount" hidden><?=$row['subtotalDiscount']?></td> 
                                       <td class="PCF" name="PCF" hidden><?=$row['PCF']?></td> 
                                       <td class="addMarkup" name="addMarkup" hidden><?=$row['addMarkup']?></td> 
                                       <td class="atNeedTCP" name="atNeedTCP" hidden><?=$row['atNeedTCP']?></td> 
                                       <td class="dpPercentage" name="dpPercentage" hidden><?=$row['dpPercentage']?></td> 
                                       <td class="dpPercentage2" name="dpPercentage2" hidden><?=$row['dpPercentage2']?></td> 
                                       <td class="balance" name="balance" hidden><?=$row['balance']?></td> 
                                       <td class="MI1" name="MI1" hidden><?=$row['MI1']?></td> 
                                       <td class="MIInterestPercentage1" name="MIInterestPercentage1" hidden><?=$row['MIInterestPercentage1']?></td> 
                                       <td class="MIPrincipalPercentage1" name="MIPrincipalPercentage1" hidden><?=$row['MIPrincipalPercentage1']?></td>
                                       <td class="NoOfMonths" name="NoOfMonths" hidden><?=$row['NoOfMonths']?></td>
                                       <td class="cutoff" name="cutoff" hidden><?=$row['cutOff']?></td>
                                       
                                       <td class="Sex" name="Sex" hidden><?=$row['Sex']?></td> 
                                       
                                           <td style="text-align: center;">  
                                              <script>
                                                   let tableRowElement1;
                                                   function toggleModal(element) {
                                                   tableRowElement1 = element.parentElement.parentElement;
                                                   
                                                   const VAT1 = tableRowElement1.getElementsByClassName('VAT')[0].innerHTML;
                                                   document.getElementById('taxs1').value = VAT1;
                                                   const totalContractPrice56 = tableRowElement1.getElementsByClassName('totalContractPrice')[0].innerHTML;
                                                   document.getElementById('totalContractPrice3').value = totalContractPrice56;
                                                   const subtotaltax1 = tableRowElement1.getElementsByClassName('subtotaltax')[0].innerHTML;
                                                   document.getElementById('subtotaltax').value = subtotaltax1;
                                                   const discount1 = tableRowElement1.getElementsByClassName('discount')[0].innerHTML;
                                                   document.getElementById('discounts1').value = discount1;
                                                   const subtotalDiscount1 = tableRowElement1.getElementsByClassName('subtotalDiscount')[0].innerHTML;
                                                   document.getElementById('subtotalDiscount').value = subtotalDiscount1;
                                                   const PCF1 = tableRowElement1.getElementsByClassName('PCF')[0].innerHTML;
                                                   document.getElementById('pcf').value = PCF1;
                                                   const addMarkup1 = tableRowElement1.getElementsByClassName('addMarkup')[0].innerHTML;
                                                   document.getElementById('markup1').value = addMarkup1;
                                                   const atNeedTCP1 = tableRowElement1.getElementsByClassName('atNeedTCP')[0].innerHTML;
                                                   document.getElementById('AtNeedTCP').value = atNeedTCP1;
                                                   const dpPercentage1 = tableRowElement1.getElementsByClassName('dpPercentage')[0].innerHTML;
                                                   document.getElementById('dpPercentage').value = dpPercentage1;
                                                   const dpPercentage21 = tableRowElement1.getElementsByClassName('dpPercentage2')[0].innerHTML;
                                                   document.getElementById('dpPercentage2').value = dpPercentage21;
                                                   const balance1 = tableRowElement1.getElementsByClassName('balance')[0].innerHTML;
                                                   document.getElementById('balance').value = balance1;
                                                   const MI11 = tableRowElement1.getElementsByClassName('MI1')[0].innerHTML;
                                                   document.getElementById('MI').value = MI11;
                                                   const MIInterestPercentage11 = tableRowElement1.getElementsByClassName('MIInterestPercentage1')[0].innerHTML;
                                                   document.getElementById('MIInterestPercentage').value = MIInterestPercentage11;
                                                   const MIPrincipalPercentage11 = tableRowElement1.getElementsByClassName('MIPrincipalPercentage1')[0].innerHTML;
                                                   document.getElementById('MIPrincipalPercentage').value = MIPrincipalPercentage11;
                                                   const NoOfMonths1 = tableRowElement1.getElementsByClassName('NoOfMonths')[0].innerHTML;
                                                   document.getElementById('NoOfMonths').value = NoOfMonths1;

                                                   const modeOfpayment1 = tableRowElement1.getElementsByClassName('modeOfpayment')[0].innerHTML;
                                                   document.getElementById('modeOfpayment').value = modeOfpayment1;

                                                   const companyAddress1 = tableRowElement1.getElementsByClassName('companyAddress')[0].innerHTML;
                                                   document.getElementById('companyAddress').value = companyAddress1;
                                                   const companyTellNo1 = tableRowElement1.getElementsByClassName('companyTellNo')[0].innerHTML;
                                                   document.getElementById('companyTellNo').value = companyTellNo1;

                                                   const contractCode1 = tableRowElement1.getElementsByClassName('contractCode')[0].innerHTML;
                                                   document.getElementById('contractCode').value = contractCode1;

                                                   const Fullname1 = tableRowElement1.getElementsByClassName('Fullname')[0].innerHTML;
                                                   document.getElementById('Fullname').value = Fullname1;

                                                   const B_Date1 = tableRowElement1.getElementsByClassName('B_Date')[0].innerHTML;
                                                   document.getElementById('B_Date').value = B_Date1;

                                                   const totalContractPrice1 = tableRowElement1.getElementsByClassName('totalContractPrice')[0].innerHTML;
                                                   document.getElementById('totalContractPrice').value = totalContractPrice1;


                                                   const ResidentAddress1 = tableRowElement1.getElementsByClassName('ResidentAddress')[0].innerHTML;
                                                   document.getElementById('ResidentAddress').value = ResidentAddress1;

                                                  
                                                   const ResidentialPhoneno1 = tableRowElement1.getElementsByClassName('ResidentialPhoneno')[0].innerHTML;
                                                   document.getElementById('ResidentialPhoneno').value = ResidentialPhoneno1;

                                                   const SpouseName11 = tableRowElement1.getElementsByClassName('SpouseName1')[0].innerHTML;
                                                   document.getElementById('SpouseName1').value = SpouseName11;

                                                   const BillingAddress1 = tableRowElement1.getElementsByClassName('BillingAddress')[0].innerHTML;
                                                   document.getElementById('BillingAddress').value = BillingAddress1;

                                                   const Employer1 = tableRowElement1.getElementsByClassName('Employer')[0].innerHTML;
                                                   document.getElementById('Employer').value = Employer1;

                                                   const SpouseOccupation1 = tableRowElement1.getElementsByClassName('SpouseOccupation')[0].innerHTML;
                                                   document.getElementById('SpouseOccupation').value = SpouseOccupation1;


                                                   
                                                   const LDblock1 = tableRowElement1.getElementsByClassName('LDblock')[0].innerHTML;
                                                   document.getElementById('LDblock').value = LDblock1;
                                                   const LDsection1 = tableRowElement1.getElementsByClassName('LDsection')[0].innerHTML;
                                                   document.getElementById('LDsection').value = LDsection1;
 
                                                   const LDarea1 = tableRowElement1.getElementsByClassName('LDarea')[0].innerHTML;
                                                   document.getElementById('LDarea').value = LDarea1;
                                                   const LDphase1 = tableRowElement1.getElementsByClassName('LDphase')[0].innerHTML;
                                                   document.getElementById('LDphase').value = LDphase1;
                                                   const LDtype1 = tableRowElement1.getElementsByClassName('LDtype')[0].innerHTML;
                                                   document.getElementById('LDtype').value = LDtype1;
                                                   const terms1 = tableRowElement1.getElementsByClassName('terms')[0].innerHTML;
                                                   document.getElementById('terms').value = terms1;
                                                   const unitNo1 = tableRowElement1.getElementsByClassName('unitNo')[0].innerHTML;
                                                   document.getElementById('unitNo').value = unitNo1;
                                                   const noLots1 = tableRowElement1.getElementsByClassName('noLots')[0].innerHTML;
                                                   document.getElementById('noLots').value = noLots1;
                                                   const classification1 = tableRowElement1.getElementsByClassName('classification')[0].innerHTML;
                                                   document.getElementById('classification').value = classification1;
                                                   const lotListPrice1 = tableRowElement1.getElementsByClassName('lotListPrice')[0].innerHTML;
                                                   document.getElementById('lotListPrice').value = lotListPrice1;
                                                   
                                                   const searchByName1 = tableRowElement1.getElementsByClassName('contractCode')[0].innerHTML;
                                                   document.getElementById('searchByName').value = searchByName1;
                                                   
                                                   const cutoff1 = tableRowElement1.getElementsByClassName('cutoff')[0].innerHTML;
                                                   document.getElementById('cutoff').value = cutoff1;
                                                   document.getElementById('showledger').style.display = 'none';

                                                  
                                                   
                                               }     
                                               </script>    
                                            <a href="#" id="btnsearchByName" onclick="toggleModal(this, 1)" data-toggle="modal" data-target="#viewBuyer" style="font-size: 13px; color: gray;"><li class="fas fa-file-invoice"></li> Record</a>            
                                               
                              
                                           </td>
                                           
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
                                               
                                                <dt class="col-sm-4" ><input placeholder="Phase" style=" font-size: 14px;font-weight:bold; border:none; color:#4a4949;background-color: Transparent" id="LDblock" name="LDblock"  readonly></input></dt>
                                              
                                               
                                                <dd class="col-sm-7">
                                                <input placeholder="Area"  style="width:50%; padding:0px 15px; font-size: 13px;color:#4a4949;border:none;background-color: Transparent " id="LDarea" name="LDarea"  readonly></input>
                                                <input placeholder="Section" style="width:45%;padding:0px 15px; font-size: 13px; color:#4a4949;border:none;background-color: Transparent " id="LDphase" name="LDphase"  readonly></input>
                                                <input placeholder="Level" style=" width:50%;padding:0px 15px; font-size: 13px; color:#4a4949;border:none;background-color: Transparent "id="LDsection" name="LDsection"  readonly></input>
                                                <input placeholder="Classification"  style="width:45%;padding:0px 15px; font-size: 13px; color:#4a4949;border:none;background-color: Transparent " id="classification" name="classification"  readonly></input>    
                                                <input placeholder="Column" style="padding:0px 15px; font-size: 13px; color:#4a4949;border:none;background-color: Transparent " id="LDtype" name="LDtype"  readonly></input>
                                                 </dd>
                                                <dt class="col-sm-4"><input placeholder="no of lots" style=" font-size: 14px;font-weight:bold; border:none; color:#4a4949;background-color: Transparent" Value="No of lots"  readonly></input></dt>
                                                <dd class="col-sm-7">
                                                <input placeholder="No of lots"  style="padding:0px 15px; font-size: 13px; color:#4a4949;border:none;background-color: Transparent " id="noLots" name="noLots"  readonly></input>
                                                
                                                </dd>
                                                <dt class="col-sm-4"><input placeholder="no of lots" style=" font-size: 14px;font-weight:bold; border:none; color:#4a4949;background-color: Transparent" Value="Unit no"  readonly></input></dt>
                                                <dd class="col-sm-7">
                                                <input placeholder="Unit No"  style="padding:0px 15px; font-size: 13px; color:#4a4949;border:none;background-color: Transparent " id="unitNo" name="unitNo"  readonly></input>
                                           
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
                                            <input placeholder="Terms" required class="form-control" style="padding:0px 15px; font-size: 13px; margin-bottom: 5px;color:#4a4949" id="terms" name="terms"  readonly></input>
                                            </td>
                                            </tr>

                                            <tr style="border: none;">
                                            <td style="border: none; width: 50%; color:#4a4949; font-size: 13px;background-color: Transparent;padding-left:15px;padding-right:0px;padding-bottom:0px;padding-top:15px;margin:0px; font-weight: bold" >
                                            Mode of Payment :
                                            </td>
                                            <td style="border: none;background-color: transparent;color:#4a4949;padding-left:15px;padding-right:15px;padding-bottom:0px;padding-top:15px;margin:0px; font-weight: bold;" >
                                            <input placeholder="Mode of Payment" required class="form-control" style="padding:0px 15px; font-size: 13px; margin-bottom: 105pxpx;color:#4a4949" id="modeOfpayment" name="modeOfpayment"  readonly></input>
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
                                           
                                            <input placeholder="₱ 0.00" pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency"  oninput="compute()" style="padding:0px 15px; width: 92%; font-size: 13px; margin:0px; background-color: #FDFDFD ;border: none;color:#4a4949" id ="lotListPrice" name="lotListPrice"  readonly></input>
                                            </td>
                                            </tr>
                                            
                                            <tr style="border: none">
                                            <td style="border: none; width: 50%; color:white;font-size: 13px; background-color: #5B7EDE;padding:0px 15px;margin:0px; font-weight: bold;" >
                                             Value Added Tax (_)% :
                                            </td>
                                            
                                                 
                                                 
                                            <td style="border: none;background-color: #5B7EDE;color:#4a4949;padding:0px 15px;margin:0px;" >
                                          
                                            <input placeholder="₱ 0.00" style="padding:0px 15px; font-size: 13px; margin:0px; background-color: #e8e4c9 ;border: none;color:#4a4949; width: 92%" id="taxs" name="taxs"  hidden></input>
                                          
                                            <input placeholder="₱ 0.00" style="padding:0px 15px; font-size: 13px; width: 92%; margin:0px; background-color: #e8e4c9 ;border: none;color:#4a4949; width: 92%" id="taxs1" name="taxs1"   readonly></input>
                                          
                                               
                                                   
                                                </td>
                                              
                                            </tr>
                                            <tr style="border: none">
                                           <td style="border: none;background-color: #5B7EDE;font-size: 13px;color:white;padding:0px 15px;margin:0px; font-weight: bold;" >
                                            Subtotal :
                                            </td>
                                             <td style="border: none;background-color: #5B7EDE;color:#4a4949;padding:0px 15px;margin:0px;" >
                                            <input placeholder="₱ 0.00" readonly pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency"  style="padding:0px 15px; width: 92%; font-size: 13px; margin:0px; background-color: #e8e4c9 ;border: none;color:#4a4949" id="subtotaltax" name="subtotaltax" readonly></input>
                                            </td>
                                            </tr>
                                            <tr style="border: none">
                                                <td style="border: none;background-color: #5B7EDE;font-size: 13px;color:white;padding:0px 15px;margin:0px; font-weight: bold;" >
                                                Less Discount :
                                                </td>
                                                   
                                                                                             
                                                    <td class="discountID" name="discountID" hidden><?=$row['id']?></td>
                                                    <td style="border: none;background-color: #5B7EDE;color:#4a4949;padding:0px 15px;margin:0px;" > 
                                                    <input placeholder="₱ 0.00" style="padding:0px 15px; font-size: 13px; width: 92%; margin:0px; background-color: #e8e4c9 ;border: none;color:#4a4949;width: 92%"  id="discounts" name="discounts"  hidden ></input>
                                                  
                                                    <input placeholder="₱ 0.00" style="padding:0px 15px; font-size: 13px; width: 92%; margin:0px; background-color: #e8e4c9 ;border: none;color:#4a4949;width: 92%"  id="discounts1" name="discounts1"   readonly></input>
                                                  
                                                    
                                                </td>
                                              
                                                </td>
                                           
                                            </tr>
                                            <tr style="border: none">
                                           <td style="border: none;background-color: #5B7EDE;font-size: 13px;color:white;padding:0px 15px;margin:0px; font-weight: bold;" >
                                            Subtotal :
                                            </td>
                                             <td style="border: none;background-color: #5B7EDE;color:#4a4949;padding:0px 15px;margin:0px;" >
                                            <input placeholder="₱ 0.00" readonly pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency"  style="padding:0px 15px; width: 92%; font-size: 13px; margin:0px; background-color: #e8e4c9 ;border: none;color:#4a4949" id="subtotalDiscount" name="subtotalDiscount"  readonly></input>
                                            </td>
                                            </tr>
                                            <tr style="border: none">
                                            
                                           <td style="border: none;background-color: #5B7EDE;font-size: 13px;color:white;padding:0px 15px;margin:0px; font-weight: bold;" >
                                            Perpetual Care Funds :
                                            </td>
                                           
                                                                                             
                                                   
                                                    
                                             <td style="border: none;background-color: #5B7EDE;color:#4a4949;padding:0px 15px;margin:0px;" >
                                             
                                            
                                                <input placeholder="₱ 0.00" readonly readonly pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency"  style="padding:0px 15px; width: 92%; font-size: 13px; margin:0px; background-color: #e8e4c9 ;border: none;color:#4a4949; width: 92%" id="pcf" name="pcf"   ></input>
                                               
                                              
                                                </td>
                                            </tr>
                                            <tr style="border: none">
                                           <td style="border: none;background-color: #5B7EDE;font-size: 13px;color:white;padding:0px 15px;margin:0px; font-weight: bold;" >
                                            Total Contract Price :
                                            </td>
                                             <td style="border: none;background-color: #5B7EDE;color:#4a4949;padding:0px 15px;margin:0px;" >
                                            <input placeholder="₱ 0.00" pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency" readonly oninput="computedp()" style="padding:0px 15px; width: 92%; font-size: 13px; margin:0px; background-color: #FDFDFD ;border: none;color:#4a4949" id ="totalContractPrice3" name ="totalContractPrice3"></input>
                                            </td>
                                            </tr>
                                            <tr style="border: none">
                                           <td style="border: none;background-color: #5B7EDE;font-size: 13px;color:white;padding:0px 15px;margin:0px; font-weight: bold;" >
                                            Add_% Mark-up :
                                            </td>
                                           
                                             <td style="border: none;background-color: #5B7EDE;color:#4a4949;padding:0px 15px;margin:0px;" >
                                            <input  placeholder="₱ 0.00"  readonly style="padding:0px 15px; font-size: 13px; margin:0px; background-color: #e8e4c9; width: 92% ;border: none;color:#4a4949;width: 92%" id ="markup" name ="markup"  hidden></input>
                                            <input  placeholder="₱ 0.00" readonly style="padding:0px 15px; font-size: 13px; margin:0px; background-color: #e8e4c9 ; width: 92%;border: none;color:#4a4949;width: 92%" id ="markup1" name ="markup1" ></input>
                                           
                                          
                                            </td>
                                            </tr>
                                            <tr style="border: none">
                                           <td style="border: none;background-color: #5B7EDE;font-size: 13px;color:white;padding:0px 15px;margin:0px; font-weight: bold;" >
                                            At-Needs TCP :
                                            </td>
                                             <td style="border: none;background-color: #5B7EDE;color:#4a4949;padding:0px 15px;margin:0px;" >
                                            <input placeholder="₱ 0.00" id="AtNeedTCP" readonly name="AtNeedTCP" style="padding:0px 15px; font-size: 13px; margin:0px; background-color: #e8e4c9 ; width: 92%;border: none;color:#4a4949"></input>
                                            </td>
                                            </tr>
                                            <tr style="border: none">
                                           <td style="border: none;background-color: #5B7EDE;font-size: 13px;color:white;padding:0px 15px;margin:0px; font-weight: bold;" >
                                            Downpayment : <input required placeholder="0.00" readonly oninput="computedp()" pattern="^\%\d{1,3}(,\d{3})*(\.\d+)?%"    type="number" style="float: right; padding:0px 5px; font-size: 13px; margin:0px; background-color: #e8e4c9 ;border: none;color:#4a4949;width: 25%"  id="dpPercentage" name="dpPercentage"   ></input> <a style= "float: right; font-size: 13px; margin-right:5px; border: none;color:#fffff;width: 5%">% </a>
                                            </td>
                                             <td style="border: none;background-color: #5B7EDE;color:#4a4949;padding:0px 15px;margin:0px;" >
                                            <input required placeholder="₱ 0.00" readonly pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" oninput="computedppercentage()" data-type="currency" style="padding:0px 15px; width: 92%; font-size: 13px; margin:0px; background-color: #FDFDFD ;border: none;color:#4a4949" id="dpPercentage2" name="dpPercentage2" ></input>
                                            </td>
                                            </tr>
                                            <tr style="border: none">
                                           <td style="border: none;background-color: #5B7EDE;font-size: 13px;color:white;padding:0px 15px;margin:0px; font-weight: bold;" >
                                            Balance :
                                            </td>
                                             <td style="border: none;background-color: #5B7EDE;color:#4a4949;padding:0px 15px;margin:0px;" >
                                            <input placeholder="₱ 0.00" readonly pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency"  style="padding:0px 15px; width: 92%; font-size: 13px; margin:0px; background-color: #e8e4c9 ;border: none;color:#4a4949" id="balance" name="balance"  ></input>
                                            </td>
                                            </tr>
                                            <tr style="border: none">
                                           <td style="border: none;background-color: #5B7EDE;font-size: 13px;color:white;padding:0px 15px;margin:0px; font-weight: bold;" >
                                            Monthly Installment :
                                            </td>
                                             <td style="border: none;background-color: #5B7EDE;color:#4a4949;padding:0px 15px;margin:0px;" >
                                          
                                            <input placeholder="₱ 0.00" id="MI" name="MI" readonly  pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency"  style="padding:0px 15px; width: 92%; font-size: 13px; margin:0px; background-color: #FDFDFD ;border: none;color:#4a4949" ></input>
                                            <input placeholder="₱ 0.00" hidden id="MIInterestPercentage"  name="MIInterestPercentage" readonly  pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency"  style="padding:0px 15px; width: 92%; font-size: 13px; margin:0px; background-color: #FDFDFD ;border: none;color:#4a4949" ></input>
                                            <input placeholder="₱ 0.00" hidden id="MIPrincipalPercentage"  name="MIPrincipalPercentage" readonly  pattern="^\₱\d{1,3}(,\d{3})*(\.\d+)?₱" data-type="currency"  style="padding:0px 15px; width: 92%; font-size: 13px; margin:0px; background-color: #FDFDFD ;border: none;color:#4a4949" ></input>
                                             
                                               
                                          
                                            </td>
                                            </tr>
                                            <tr style="border: none; padding-bottom: 30px; ">
                                           <td style="border: none;background-color: #5B7EDE;color:white;font-size: 13px;padding:0px 15px;margin:0px; font-weight: bold;" >
                                            No. of Months :
                                            
                                            </td>
                                            
                                             <td style="border: none;background-color: #5B7EDE;color:#4a4949;padding:0px 15px;margin:0px;" >
                                            <input required readonly placeholder="0.00" oninput="MA()"  id="NoOfMonths" name="NoOfMonths"  type= "number" style="padding:0px 15px; font-size: 13px; margin:0px; background-color: #e8e4c9 ; width: 92%;border: none;color:#4a4949" placeholder="₱ 0.00" ></input>
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
                                            <td style="border: none;background-color: white;color:#5B7EDE;padding:0px 15px;margin:0px; " >
                                            .
                                            <input value="<?php echo $Name; ?>" id="user" name="user" hidden><br>
                                            </td>
                                            <td style="border: none;background-color: white;color:#5B7EDE;margin:0px; float:right" >
                                            
                                            <button class="btn btn-primary"  id="btnsearchByName1" style="font-size: 14px; background-color: green" type="button" >Show Ledger</button>
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
         <input type='text' id='searchByName' readonly hidden placeholder='Enter name'>
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
                                <div class="table-responsive" id="showledger" style="color:#2F4F4F;display:none" >
                                 <table id="userTable"  class="display dataTable table table-striped b-t b-light"  cellspacing="0" width="100%">
                                    <thead>
                                    
                                        <tr  style="background-color: #007ea7">
                                             <th class="th-sm" style= "width: 10% ; font-size: 12px; color:#ffffff">Date</th>
                                            <th class="th-sm" style= "width: 10% ; font-size: 12px; color:#ffffff">TCP</th>
                                            <th class="th-sm" style= "width: 10% ; font-size: 12px; color:#ffffff">O.R/P.R.</th>
                                            <th class="th-sm" style= "width: 13% ; font-size: 12px; color:#ffffff">Amount Paid</th>
                                            <th class="th-sm" style= "width: 10% ; font-size: 12px; color:#ffffff">Interest</th>
                                            <th class="th-sm" style= "width: 10% ; font-size: 12px; color:#ffffff">Principal</th>
                                            <th class="th-sm" style= "width: 10% ; font-size: 12px; color:#ffffff">Balance</th>
                                            <th class="th-sm" style= "width: 10% ; font-size: 12px; color:#ffffff">Vat</th>
                                            <th class="th-sm" style= "width: 10% ; font-size: 12px; color:#ffffff">PCF</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody style= "font-size: 12px; color:#2F4F4F" ></tbody>
                                        </table>
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
    </form>






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
                                                <input  style="padding:0px 15px; font-size: 12px; margin:0px; background-color: white;border: none;color:#4a4949; width: 100%" type="number" pattern="[0-9]+([\,|\.][0-9]+)?" name ="tax" id ="tax" required></input>
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
    $(document).ready(function(){
    var dataTable = $('#userTable').DataTable({
    'processing': true,
    'serverSide': true,
    'serverMethod': 'post',
    'ajax': {
       'url':'ajaxfile.php',
       'data': function(data){
         // Read values
         var gender = $('#searchByGender').val();
          var name = $('#searchByName').val();

         // Append to data
         data.searchByGender = gender;
          data.searchByName = name;
       }
    },
    'columns': [
     
       { data: 'date' },
       { data: 'TCP' },
       { data: 'ORPR' },
       { data: 'amountPaid' },
       { data: 'interest' }, 
       { data: 'principal' },
       { data: 'balance' },
       { data: 'VAT' },
       { data: 'PCF' },
    ]
  });

  $('#btnsearchByName1').click(function(){
    dataTable.draw();
    document.getElementById('showledger').style.display = 'block';
  });

  $('#searchByGender').change(function(){
    dataTable.draw();
  });
});

</script>
    </body>


    </html>

    <?php } else {
    
    header("location: index.php");
    
    }?>
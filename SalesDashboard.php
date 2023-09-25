<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

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
  if(isset($_SESSION['Access']) && $_SESSION['Access'] == "Admin"  && $_SESSION['Department'] == "SedgeMarketing" && $_SESSION['Position'] == "Programmer" && $_SESSION['AS_Status'] == "SedgeActivated") {
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
     <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    
     <!-- Chart.j styles for this page -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    

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

    .header {
      background-color: var(--royal-blue);
      color: white;
    }
    
    .button {
      background-color: var(--royal-blue);
      color: white;
    }
    
    .chart-bars {
      fill: var(--royal-blue);
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
       .custom-legend {
      display: flex;
      justify-content: center;
      margin-top: 20px;
    }
    .legend-item {
      display: flex;
      align-items: center;
      margin-right: 10px;
    }
    .legend-color {
      width: 20px;
      height: 20px;
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
                      
                    </div>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            
                            <p style="font-size: 25px; margin: 0px 30px" class="text-xs font-weight-bold text-info text-uppercase mb-1">DASHBOARD</p>
                            <p style="font-size: 13px; margin: 0px 30px; color: #333;" class="text-xs font-weight-normal text-uppercase mb-1">Welcome,<span style="font-size: 13px; margin: 0px 5px; " class="text-xs font-weight-normal text-success text-uppercase mb-1"><?php echo $Name; ?></span></p> 
                            <br>
                             <!-- Page Heading -->
                            <div class="row" style="margin: 0px 30px;">

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
                                                <i class="fas fa-dollar-sign fa-2x text-gray-300" ></i>
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


                            <!-- Daily task Card Example -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-info shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                                    Top Agent of the Month
                                                </div>
                                                <?php
                                                    $query = "SELECT `agentName`, COUNT(*) AS numberofgatheredclients
                                                              FROM `tbl_ledger`
                                                              GROUP BY `agentName`
                                                              ORDER BY numberofgatheredclients DESC
                                                              LIMIT 1";
                                                    
                                                    // Execute the query
                                                    $result = $connection->query($query);
                                                    if (!$result) {
                                                        echo "Error executing query: " . $connection->error;
                                                        exit();
                                                    }
                                                    
                                                    // Check if any rows were returned
                                                    if ($result->num_rows > 0) {
                                                        $row = $result->fetch_assoc();
                                                        $agentName = strtoupper($row['agentName']);
                                                        $numberofgatheredclients = $row['numberofgatheredclients'];
                                                        echo "<div class='h5 mb-0 font-weight-bold text-gray-800'>$agentName - $numberofgatheredclients CLIENTS</div>";
                                                    } else {
                                                        echo "<div class='h5 mb-0 font-weight-bold text-gray-800'>No data available.</div>";
                                                    }
                                                    ?>
                                            </div>
                                            <div class="col-auto">
                                                <i class=" fa-2x text-gray-300"> <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" 
                                                fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                                 <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 
                                                  13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                                                </svg> </i>
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
                                                    Top Visitor Insight
                                                </div>
                                                <?php
                                                     $query = "SELECT `salesFrom`, COUNT(*) AS numberofgatheredclients
                                                              FROM `tbl_ledger`
                                                              GROUP BY `salesFrom`
                                                              ORDER BY numberofgatheredclients DESC
                                                              LIMIT 1";

                                                    // Execute the query
                                                    $result = $connection->query($query);
                                                    if (!$result) {
                                                        echo "Error executing query: " . $connection->error;
                                                        exit();
                                                    }

                                                    // Check if any rows were returned
                                                      if ($result->num_rows > 0) {
                                                        $row = $result->fetch_assoc();
                                                        $salesFrom = strtoupper($row['salesFrom']);
                                                        $numberofgatheredclients = $row['numberofgatheredclients'];
                                                        echo "<div class='h5 mb-0 font-weight-bold text-gray-800'> BY $salesFrom </div>";
                                                    } else {
                                                        echo "<div class='h5 mb-0 font-weight-bold text-gray-800'>No data available.</div>";
                                                    }
                                                    ?>
                                            </div>
                                            <div class="col-auto">
                                                <i class=" fa-2x text-gray-300"> <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                                  <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                                  <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                                </svg></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                             <br>
                            <div style="margin: 0px 30px;">
                                 <div class="card shadow mb-4" style=" width: 100%; " hidden>
                                    <div class="card-header py-3 bg-info">
                                        <h6 class="m-0 font-weight-bold text-uppercase mb-1 text-white">Product Terms Insight</h6>
                                    </div>
                                    <div  class="card-body">
                                          <header style="margin: 20px 0px">
                                             <h1 style="font-size: 15px; " ></h1>
                                          </header>
                                           <div id="map" style="height: 500px;"></div>
                                         
                                    </div>
                                </div>
                                <div class="card shadow mb-4"  style="float:right; width: 30%">
                                    <div class="card-header py-3 bg-info">
                                        <h6 class="m-0 font-weight-bold text-uppercase mb-1 text-white">Summary Overview </h6>
                                      
                                    </div>
                                    <div  class="card-body">
                                         <div class="card shadow mb-4"  style="float:left; width: 100%">
                                            
                                            <div  class="card-body">
                                                <canvas id="marketTrends"></canvas>
                                                <div class="custom-legend">
                                                  <div class="legend-item">
                                                    <div class="legend-color" style="background-color: rgba(255, 99, 132, 0.2);"></div>
                                                    Label 1
                                                  </div>
                                                  <div class="legend-item">
                                                    <div class="legend-color" style="background-color: rgba(255, 159, 64, 0.2);"></div>
                                                    Label 2
                                                  </div>
                                                  <!-- Add more legend items as needed -->
                                                </div>
                                            </div>
                                        </div>
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td class="m-0 font-weight-bold text-uppercase mb-1 text-gray-800" style="font-size: 12px; padding: 10px 20px">Earning (Annual) :</td>
                                                    <td style="width: 20px"> <p> </p></td>
                                                    <td style="font-size: 12px" class="m-0 font-weight-bold text-uppercase mb-1 text-gray-800">₱ 14,806,422.80</td>
                                                </tr>
                                                 <tr>
                                                    <td class="m-0 font-weight-bold text-uppercase mb-1 text-gray-800" style="font-size: 12px; padding: 10px 20px">Earning (Monthly) :</td>
                                                    <td style="width: 20px"> <p> </p></td>
                                                    <td style="font-size: 12px" class="m-0 font-weight-bold text-uppercase mb-1 text-gray-800">₱ 14,806,422.80</td>
                                                </tr>
                                                <tr>
                                                    <td class="m-0 font-weight-bold text-uppercase mb-1 text-gray-800" style="font-size: 12px; padding: 10px 20px">Daily Visitor Insight :</td>
                                                    <td style="width: 20px"> <p> </p></td>
                                                    <td style="font-size: 12px" class="m-0 font-weight-bold text-uppercase mb-1 text-gray-800">₱ 14,806,422.80</td>
                                                </tr>
                                                <tr>
                                                    <td class="m-0 font-weight-bold text-uppercase mb-1 text-gray-800" style="font-size: 12px; padding: 10px 20px">Weekly Visitor Insight :</td>
                                                    <td style="width: 20px"> <p> </p></td>
                                                    <td style="font-size: 12px" class="m-0 font-weight-bold text-uppercase mb-1 text-gray-800">₱ 14,806,422.80</td>
                                                </tr>
                                                <tr>
                                                    <td class="m-0 font-weight-bold text-uppercase mb-1 text-gray-800" style="font-size: 12px; padding: 10px 20px">Monthly Visitor Insight :</td>
                                                    <td style="width: 20px"> <p> </p></td>
                                                    <td style="font-size: 12px" class="m-0 font-weight-bold text-uppercase mb-1 text-gray-800">₱ 14,806,422.80</td>
                                                </tr>
                                                <tr>
                                                    <td class="m-0 font-weight-bold text-uppercase mb-1 text-gray-800" style="font-size: 12px; padding: 10px 20px">Yearly Visitor Insight :</td>
                                                    <td style="width: 20px"> <p> </p></td>
                                                    <td style="font-size: 12px" class="m-0 font-weight-bold text-uppercase mb-1 text-gray-800">₱ 14,806,422.80</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                         <table style="border-collapse: collapse; width: 100%;" hidden>
                                            <thead>
                                                <tr style="background-color: gray; border: 1px solid white">
                                                    <th class="m-0 font-weight-bold text-uppercase mb-1 text-white" style="font-size: 10px; padding: 10px 20px; border: 1px solid white;">
                                                         <span style="color: yellow; margin-right: 5px;white-space: nowrap;">Rank 👑</span>
                                                    </th>
                                                    <th class="m-0 font-weight-bold text-uppercase mb-1 text-white" style="font-size: 10px; padding: 10px 20px; border: 1px solid white;">
                                                        <span style="color: white; margin-right: 5px; white-space: nowrap;"> Agent Name 🕵️</span>
                                                    </th>
                                                    <th class="m-0 font-weight-bold text-uppercase mb-1 text-white" style="font-size: 10px; padding: 10px 20px; border: 1px solid white; white-space: nowrap;">No of sales</th>
                                                    <th class="m-0 font-weight-bold text-uppercase mb-1 text-white" style="font-size: 10px; padding: 10px 20px; border: 1px solid white; white-space: nowrap;">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr style="border: 1px solid gray;">
                                                    <td class="m-0 font-weight-bold text-uppercase mb-1 text-gray-800" style="font-size: 10px; padding: 10px 20px;">1</td>
                                                    <td class="m-0 font-weight-bold text-uppercase mb-1 text-gray-800" style="font-size: 10px; padding: 10px 20px; white-space: nowrap;">Jonaer Casundo</td>
                                                    <td class="m-0 font-weight-bold text-uppercase mb-1 text-gray-800" style="font-size: 10px; padding: 10px 20px;">5</td>
                                                    <td class="m-0 font-weight-bold text-uppercase mb-1 text-gray-800" style="font-size: 10px; padding: 10px 20px;">Employed</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                 <div class="card shadow mb-4"  style="float:left; width: 68%">
                                    <div class="card-header py-3 bg-info">
                                        <h6 class="m-0 font-weight-bold text-uppercase mb-1 text-white">Agent ranking Overview </h6>
                                    </div>
                                    <div  class="card-body">
                                        <canvas id="agentRanking"></canvas>
                                    </div>
                                </div>
                                 <div class="card shadow mb-4" style="float:left; width: 33%; ">
                                    <div class="card-header py-3 bg-info">
                                        <h6 class="m-0 font-weight-bold text-uppercase mb-1 text-white">Visitor INSIGHT</h6>
                                    </div>
                                    <div  class="card-body">
                                          <header style="margin: 20px 0px">
                                             <h1 style="font-size: 15px; " ></h1>
                                          </header>
                                          <div style="color: #333; font-size: 12px; " class="text-uppercase mb-1">
                                            <input type="radio" id="daily" name="dataChoice" value="daily" onclick="updateData('daily')" checked>
                                            <label for="daily" style="margin-right: 10px" ><em> Daily </em></label>
                                        
                                            <input type="radio" id="weekly" name="dataChoice" value="weekly" onclick="updateData('weekly')">
                                            <label for="weekly" style="margin-right: 10px"><em> Weekly </em></label>
                                        
                                            <input type="radio" id="monthly" name="dataChoice" value="monthly" onclick="updateData('monthly')">
                                            <label for="monthly" style="margin-right: 10px"><em> Monthly </em></label>
                                        
                                            <input type="radio" id="yearly" name="dataChoice" value="yearly" onclick="updateData('yearly')">
                                            <label for="yearly" style="margin-right: 10px"><em> Yearly </em></label>
                                          </div>
                                        
                                        <canvas id="visitorInsight"></canvas>
                                   
                                    </div>
                                </div>
                                 <div class="card shadow mb-4" style="float:left; width: 33%; margin-left: 25px ">
                                    <div class="card-header py-3 bg-info">
                                        <h6 class="m-0 font-weight-bold text-uppercase mb-1 text-white">Total revenue</h6>
                                    </div>
                                    <div  class="card-body">
                                          <header style="margin: 20px 0px">
                                             <h1 style="font-size: 15px; " ></h1>
                                          </header>
                                          <div style="color: #333; font-size: 12px; " class="text-uppercase mb-1">
                                            <input type="radio" id="daily" name="dataChoice" value="daily" onclick="updateData('daily')" checked>
                                            <label for="daily" style="margin-right: 10px" ><em> Daily </em></label>
                                        
                                            <input type="radio" id="weekly" name="dataChoice" value="weekly" onclick="updateData('weekly')">
                                            <label for="weekly" style="margin-right: 10px"><em> Weekly </em></label>
                                        
                                            <input type="radio" id="monthly" name="dataChoice" value="monthly" onclick="updateData('monthly')">
                                            <label for="monthly" style="margin-right: 10px"><em> Monthly </em></label>
                                        
                                            <input type="radio" id="yearly" name="dataChoice" value="yearly" onclick="updateData('yearly')">
                                            <label for="yearly" style="margin-right: 10px"><em> Yearly </em></label>
                                          </div>
                                        <canvas id="myChart"></canvas>
                                    </div>
                                </div>
                                 <div class="card shadow mb-4" style="float:left; width: 68%; ">
                                    <div class="card-header py-3 bg-info">
                                        <h6 class="m-0 font-weight-bold text-uppercase mb-1 text-white">Product Terms Insight</h6>
                                    </div>
                                    <div  class="card-body">
                                          <header style="margin: 20px 0px">
                                             <h1 style="font-size: 15px; " ></h1>
                                          </header>
                                          <div style="color: #333; font-size: 12px; " class="text-uppercase mb-1">
                                            <input type="radio" id="daily" name="dataChoice" value="daily" onclick="updateData('daily')" checked>
                                            <label for="daily" style="margin-right: 10px" ><em> Daily </em></label>
                                        
                                            <input type="radio" id="weekly" name="dataChoice" value="weekly" onclick="updateData('weekly')">
                                            <label for="weekly" style="margin-right: 10px"><em> Weekly </em></label>
                                        
                                            <input type="radio" id="monthly" name="dataChoice" value="monthly" onclick="updateData('monthly')">
                                            <label for="monthly" style="margin-right: 10px"><em> Monthly </em></label>
                                        
                                            <input type="radio" id="yearly" name="dataChoice" value="yearly" onclick="updateData('yearly')">
                                            <label for="yearly" style="margin-right: 10px"><em> Yearly </em></label>
                                          </div>
                                          <canvas id="termsInsight"></canvas>
                                    </div>
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
    <script>(g=>{var h,a,k,p="The Google Maps JavaScript API",c="google",l="importLibrary",q="__ib__",m=document,b=window;b=b[c]||(b[c]={});var d=b.maps||(b.maps={}),r=new Set,e=new URLSearchParams,u=()=>h||(h=new Promise(async(f,n)=>{await (a=m.createElement("script"));e.set("libraries",[...r]+"");for(k in g)e.set(k.replace(/[A-Z]/g,t=>"_"+t[0].toLowerCase()),g[k]);e.set("callback",c+".maps."+q);a.src=`https://maps.${c}apis.com/maps/api/js?`+e;d[q]=f;a.onerror=()=>h=n(Error(p+" could not load."));a.nonce=m.querySelector("script[nonce]")?.nonce||"";m.head.append(a)}));d[l]?console.warn(p+" only loads once. Ignoring:",g):d[l]=(f,...n)=>r.add(f)&&u().then(()=>d[l](f,...n))})
        ({key: "AIzaSyB41DRUbKWJHPxaFjMAwdrzWzbVKartNGg", v: "weekly"});</script>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    

    <script src="myscript/sales_appointmentFetchdata.js"></script>
   
    <script>
    // Original data for the line chart
    const originalData = {
      labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
      datasets: [{
        data: [65, 59, 80, 81, 26, 55, 40],
        fill: false,
        borderColor: 'rgb(75, 192, 192)',
      }],
      title: {
        display: true,
        text: 'REVENUE', // Displayed below the chart
      }
    };

    // Function to update chart data based on the selected choice
        function updateData(choice) {
          switch (choice) {
            case 'daily':
              myChart.data.labels = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
              myChart.data.datasets[0].data = [30, 20, 40, 55, 50, 35, 60];
              break;
            case 'weekly':
              myChart.data.labels = ['Week 1', 'Week 2', 'Week 3', 'Week 4'];
              myChart.data.datasets[0].data = [150, 180, 200, 160];
              break;
            case 'monthly':
              myChart.data.labels = ['January', 'February', 'March', 'April', 'May', 'June', 'July'];
              myChart.data.datasets[0].data = [65, 59, 80, 81, 26, 55, 40];
              break;
            case 'yearly':
              myChart.data.labels = ['2022', '2023', '2024', '2025'];
              myChart.data.datasets[0].data = [800, 900, 1000, 850];
              break;
            default:
              break;
          }
          myChart.update(); // Update the chart with new data
        }
    

    const config = {
      type: 'line',
      data: originalData,
      options: {
        animations: {
          x: {
            from: 0, // Animation starting point for x-axis
          },
          y: {
            from: 0, // Animation starting point for y-axis
          },
        },
        plugins: {
          legend: {
            display: false, // Hide legend as we have a title below the chart
          },
        },
      },
    };

    // Create a new Chart instance
    var myChart = new Chart(document.getElementById('myChart'), config);
  </script>
    <script>
    // Original data for the line chart
    const originalData3 = {
      labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
      datasets: [{
        data: [65, 59, 80, 81, 26, 55, 40],
        fill: false,
        borderColor: 'rgb(75, 192, 192)',
      }],
      title: {
        display: true,
        text: 'REVENUE', // Displayed below the chart
      }
    };

    // Function to update chart data based on the selected choice
        function updateData(choice) {
          switch (choice) {
            case 'daily':
              visitorInsight.data.labels = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
              visitorInsight.data.datasets[0].data = [30, 20, 40, 55, 50, 35, 60];
              break;
            case 'weekly':
              visitorInsight.data.labels = ['Week 1', 'Week 2', 'Week 3', 'Week 4'];
              visitorInsight.data.datasets[0].data = [150, 180, 200, 160];
              break;
            case 'monthly':
              visitorInsight.data.labels = ['January', 'February', 'March', 'April', 'May', 'June', 'July'];
              visitorInsight.data.datasets[0].data = [65, 59, 80, 81, 26, 55, 40];
              break;
            case 'yearly':
              visitorInsight.data.labels = ['2022', '2023', '2024', '2025'];
              visitorInsight.data.datasets[0].data = [800, 900, 1000, 850];
              break;
            default:
              break;
          }
          visitorInsight.update(); // Update the chart with new data
        }
    

    const config3 = {
      type: 'line',
      data: originalData3,
      options: {
        animations: {
          x: {
            from: 0, // Animation starting point for x-axis
          },
          y: {
            from: 0, // Animation starting point for y-axis
          },
        },
        plugins: {
          legend: {
            display: false, // Hide legend as we have a title below the chart
          },
        },
      },
    };

    // Create a new Chart instance
    var visitorInsight = new Chart(document.getElementById('visitorInsight'), config3);
  </script>
    <script>
          // Function to get month names for the last n months
          function getLastMonthsLabels(n) {
            const months = [
              'January', 'February', 'March', 'April', 'May', 'June',
              'July', 'August', 'September', 'October', 'November', 'December'
            ];
        
            const today = new Date();
            const labels = [];
            for (let i = 0; i < n; i++) {
              const date = new Date(today);
              date.setMonth(today.getMonth() - i);
              labels.unshift(months[date.getMonth()]);
            }
            return labels;
          }
        
          // Original data for the bar chart
          const labels = getLastMonthsLabels(7);
          const data = {
            labels: labels,
            datasets: [{
              label: 'My First Dataset',
              data: [65, 59, 80, 81, 56, 55, 40],
              backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(255, 205, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(201, 203, 207, 0.2)'
              ],
              borderColor: [
                'rgb(255, 99, 132)',
                'rgb(255, 159, 64)',
                'rgb(255, 205, 86)',
                'rgb(75, 192, 192)',
                'rgb(54, 162, 235)',
                'rgb(153, 102, 255)',
                'rgb(201, 203, 207)'
              ],
              borderWidth: 1
            }]
          };
        
          const config1 = {
            type: 'bar', // Change this to 'bar'
            data: data,
            options: {
              scales: {
                y: {
                  beginAtZero: true
                }
              }
            },
          };
        
          // Create a new Chart instance with config1 for a bar chart
          var agentRanking = new Chart(document.getElementById('agentRanking'), config1);
        </script>
    <script>
            const Utils = {
              months: function({ count }) {
                const months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
                return months.slice(0, count);
              }
            };
        
            // The provided JavaScript code snippet
            const labels1 = Utils.months({ count: 7 });
            const data1 = {
              labels: labels1, // Fixed key name
              datasets: [{
                axis: 'y',
                label: 'My First Dataset', // Fixed key name
                data: [65, 59, 80, 81, 56, 55, 40],
                fill: false,
                backgroundColor: [
                  'rgba(255, 99, 132, 0.2)',
                  'rgba(255, 159, 64, 0.2)',
                  'rgba(255, 205, 86, 0.2)',
                  'rgba(75, 192, 192, 0.2)',
                  'rgba(54, 162, 235, 0.2)',
                  'rgba(153, 102, 255, 0.2)',
                  'rgba(201, 203, 207, 0.2)'
                ],
                borderColor: [
                  'rgb(255, 99, 132)',
                  'rgb(255, 159, 64)',
                  'rgb(255, 205, 86)',
                  'rgb(75, 192, 192)',
                  'rgb(54, 162, 235)',
                  'rgb(153, 102, 255)',
                  'rgb(201, 203, 207)'
                ],
                borderWidth: 1
              }]
            };
        
            // Get the context of the canvas element
            const ctx = document.getElementById('termsInsight').getContext('2d');
        
            // Create the stacked bar chart
            const config5 = {
              type: 'bar',
              data: data1, // Fixed key name
              options: {
                indexAxis: 'y',
              }
            };
        
            // Render the chart
            new Chart(ctx, config5);
          </script>
    <script>
        // Define the initial latitude, longitude, and zoom level
        var initialLatitude = 14.30846111832607;
        var initialLongitude = 121.1012524893783;
        var zoomLevel = 100;

        // Initialize the map
        var map = L.map('map').setView([initialLatitude, initialLongitude], zoomLevel);

        // Add a tile layer (e.g., OpenStreetMap) to the map
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);

        // Load your GeoJSON data and add it to the map as a GeoJSON layer
        // Replace 'yourGeoJSONData' with the actual data variable containing your cemetery layout GeoJSON
        var geojsonLayer = L.geoJSON(yourGeoJSONData).addTo(map);
    </script>
      <script>
        const data09 = {
          datasets: [{
            data: [65, 59, 80, 81, 56, 55, 40],
            backgroundColor: [
              'rgba(255, 99, 132, 0.2)',
              'rgba(255, 159, 64, 0.2)',
              'rgba(255, 205, 86, 0.2)',
              'rgba(75, 192, 192, 0.2)',
              'rgba(54, 162, 235, 0.2)',
              'rgba(153, 102, 255, 0.2)',
              'rgba(201, 203, 207, 0.2)'
            ],
            borderColor: [
              'rgb(255, 99, 132)',
              'rgb(255, 159, 64)',
              'rgb(255, 205, 86)',
              'rgb(75, 192, 192)',
              'rgb(54, 162, 235)',
              'rgb(153, 102, 255)',
              'rgb(201, 203, 207)'
            ],
            borderWidth: 1
          }],
          // Remove the labels property
        };
    
        const ctx09 = document.getElementById('marketTrends').getContext('2d');
    
        const config09 = {
          type: 'doughnut',
          data: data09,
          options: {
            plugins: {
              legend: {
                display: true, // Display the legend
                position: 'bottom', // Customize legend position
              }
            }
          }
        };
    
        new Chart(ctx09, config09);
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

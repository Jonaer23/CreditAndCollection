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
  if(isset($_SESSION['Access']) && $_SESSION['Access'] == "Admin"  && $_SESSION['Department'] == "Salesmarketing" && $_SESSION['Position'] == "Receptionist" && $_SESSION['AS_Status'] == "Activated") {
?>
<!DOCTYPE html>
<html lang="en">

<head>

    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin User</title>
    <link
     rel="stylesheet"
     href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"
   />
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
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
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="jpeg_camera/jpeg_camera_with_dependencies.min.js" type="text/javascript"></script>
    <style>
       div.employeeData{
    width: 29%;
    float: left;
    padding-right:20px;
 }
 #results { padding:20px; border:1px solid; background:#ccc; }
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
 .bg-sedge-primary-color{
        background-color: #003459;
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
 .button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
}

.button1 {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}

.button2:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
  .contact-info {
        font-size: 12px;
        color: #00171f;
        margin: 0; /* Remove vertical margin */
        padding: 0; /* Remove vertical padding */
    }
    </style>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
 </head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
      
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
                     <img src="img\SouthSpring.png"  width="200" height="60"></img>
                    </form>
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">                   
                        <div class="topbar-divider d-none d-sm-block"></div>
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow" style="color: #00171f; text-transform: uppercase;">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #00171f; text-transform: uppercase;">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small" style="color: #00171f; text-transform: uppercase;"></span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                          
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                               
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
                   
                    <form method="POST" Action="Insert_BuyerInfo.php" enctype="multipart/form-data"> 
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">     
                            <div class="ChildrenTable">
                                  <table class="table table-bordered" style="border:none; width: 100%"
                                                cellspacing="0">
                                                <tbody>
                                                    <tr>
                                                        <td style="font-size: 10px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; text-align: left; border:none; width: 40%">
                                                           <p class="contact-info">Head Office: #84 National Road, Putatan, Muntinlupa City</p>
                                                            <p class="contact-info">Tel # (02) 861-40-63/64; (02) 861-94-76 ; (02) 861-95-40</p>
                                                            <p class="contact-info">Fax # (02) 861-61-52</p>
                                                            <p class="contact-info">Site Office: National Hi-way, Brgy. Macabling, Sta. Rosa City</p>
                                                            <p class="contact-info">Tel # (049) 535-92-05 ; (049) 837-28-11</p>
                                                            <p class="contact-info">Fax # (049) 837-28-09</p>
                                                            <p class="contact-info">Mobile #: (0918) 888-88-84</p>
                                                            <p class="contact-info">Website: www.centennial.ph</p>
                                                            <p class="contact-info">Email: ssdi@centennial.ph</p>
                                                            </td>
                                                        <td style="font-size: 10px; color: #565051; font-family: Roboto, Arial, sans-serif; padding-top: 50px ; padding-left:30px; text-align: left; border:none; "><img src="img/SouthSpring.png"></img></td>
                                                        <td style="border:none;">
                                                            <div style="border: 1px solid #000; padding-left: 20px; width: 50%; float: right">
                                                                <p class="contact-info">SSDI-SF-SMD-005</p>
                                                                <p class="contact-info">REVISION </p>
                                                                <p class="contact-info">EFFECTIVITY 101.11.08</p>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-size: 10px; color: #565051; font-family: Roboto, Arial, sans-serif; text-align: left; border:none; width: 40%"></td>
                                                        <td style="font-size: 25px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; text-align: left; border:none; background: radial-gradient(darkorange, orange); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Centennial <img src="img/centenial.png"/> Garden <br></td>
                                                    </tr>
                                                   
                                                </tbody>
                                            </table>
                      
                                    <table class="table " cellspacing="0" >
                                        <tr> 
                                            <th colspan="5" style="color:#ffffff; background-color: #007ea7; font-size: 14px;">PERSONAL REFERENCE</th>
                                        </tr>
                                        <tr>
                                            <th colspan="5"><p style="color: red; font-size: 12px">* Note: If certain fields are not applicable or the data is unavailable, please use 'N/A' to indicate that the information is not applicable or not available. This will help maintain accurate and transparent data records. Thank you for your cooperation.</p></th>
                                        </tr>
                                        <tr> 
                                            <td style="color: #00171f"> Given Name <br>
                                            <input type="text" id="Firstname" name="Firstname"  Class="form-control" style="color: #00171f; text-transform: uppercase;" required>
                                            </td>
                                            <td style="color: #00171f"> Middle Name <br>
                                            <input type="text" id="Middlename" name="Middlename"  Class="form-control" style="color: #00171f; text-transform: uppercase;"  required>
                                            </td>
                                            <td style="color: #00171f"> Surname <br>
                                            <input type="text" id="Lastname" name="Lastname"  Class="form-control" style="color: #00171f; text-transform: uppercase;"  required>
                                            </td>
                                            <td style="color: #00171f" hidden>Date of Birth<br>
                                                <input type="date" id="B_Date" name="B_Date" class="form-control" style="width: 150px; margin-top: 5px; color: #00171f"></td>
                                       
                                        </tr>
                                        <tr> 
                                            <td style="color: #00171f"> Residence Address <br>
                                            <input type="text" id="R_Blk" name="R_Blk"  Class="form-control" Placeholder="Blk / Lot, Street, Subd." style="color: #00171f; text-transform: uppercase;" required>
                                            </td>
                                            <td style="color: #00171f"> City <br>
                                                <input type="text" id="R_City" name="R_City"  Class="form-control" style="color: #00171f; text-transform: uppercase;"  required></td>
                                            <td style="color: #00171f"> Province <br>
                                            <input type="text" id="R_Province" name="R_Province"  Class="form-control" style="color: #00171f; text-transform: uppercase;" required></td>
                                            <td style="color: #00171f"> Country <br>
                                            <input type="text" id="R_Country" name="R_Country"  Class="form-control" style="color: #00171f; text-transform: uppercase;" required></td>
                                            <td style="color: #00171f"> Zipcode <br>
                                            <input type="text" id="R_Zipcode" name="R_Zipcode"  Class="form-control" style="color: #00171f; text-transform: uppercase;" required></td>
                                        </tr>
                                        <tr> 
                                            <td style="color: #00171f"> <div style="float: left; width: 25%; position: absolute" >       
                                                &nbsp;&nbsp; Billing Address </div><div class="SedgeInput Sedge_1column"  style="font-size: 10px; width: 30%;;float: left; position: absolute">   <input type="checkbox" id="same" name="same" onchange="addressFunction()" style=" margin-left: 130px; margin-top: 8px; " small> <label for="same"> Same as Residence Address</label>
                                                </div>
                                                <div style=" position: relative; margin-top: 24px;" >   
                                            <input type="text" id="B_Blk" name="B_Blk"  Class="form-control" style="color: #00171f; text-transform: uppercase;" Placeholder="Blk / Lot, Street, Subd." required></div>
                                            </td>
                                            <td style="color: #00171f"> City <br>
                                                <input type="text" id="C_City" name="C_City"  style="color: #00171f; text-transform: uppercase;" Class="form-control" required></td>
                                            <td style="color: #00171f"> Province <br>
                                            <input type="text" id="C_Province" name="C_Province" style="color: #00171f; text-transform: uppercase;" Class="form-control" required></td>
                                            <td style="color: #00171f"> Country <br>
                                            <input type="text" id="C_Country" name="C_Country" style="color: #00171f; text-transform: uppercase;" Class="form-control" required></td>
                                            <td style="color: #00171f"> Zipcode <br>
                                            <input type="text" id="C_Zipcode" name="C_Zipcode" style="color: #00171f; text-transform: uppercase;" Class="form-control" required></td>
                                        </tr>
                                        <tr>
                                        <td style="color: #ffffff; background-color: #00a8e8; padding: 5px 28px" >Community Tax Certificate No. </td>
                                        </tr>
                                        <tr> 
                                            <td style="color: #00171f" >
                                               Issued At <input type="date" id="IssuedAt" name="IssuedAt"  Class="form-control" style="color: #00171f; text-transform: uppercase;" ></td>
                                            <td style="color: #00171f">  <p hidden>Community Tax Certificate No. </p>
                                                Issued on 
                                                <input type="date" id="IssuedOn" name="IssuedOn" style="color: #00171f; text-transform: uppercase;" Class="form-control" ></td>
                                            <td style="color: #00171f">  <p hidden>Community Tax Certificate No. </p>Resident Since <br>
                                            <input type="date" id="R_Since" name="R_Since" style="color: #00171f; text-transform: uppercase;" Class="form-control" >
                                            </td> 
                                        </tr>
                                        <tr>
                                            <td style="color: #00171f">
                                            Sex <br>
                                            <input type="radio" id="Sex" required name="Sex"  value="Male" > Male &nbsp;&nbsp;&nbsp;<input type="radio" id="Sex" name="Sex" value="Female"> Female
                                            </td>
                                            <td style="color: #00171f">
                                            Date of Birth <br>
                                            <input type="date" id="DOB" name="DOB" style="color: #00171f; text-transform: uppercase; margin-top: 8px" class="form-control"  required>
                                            </td>
                                            <td style="color: #00171f">
                                            Citizenship <br>
                                            <input type="text" id="Citizenship" name="Citizenship" style="color: #00171f; text-transform: uppercase;"  class="form-control" required>
                                            </td>
                                            <td style="color: #00171f">
                                            Height (ft) <br>
                                            <input type="number" step="0.01" placeholder="ft eg. (5.6)" id="Height" name="Height" style="color: #00171f; text-transform: uppercase;"  class="form-control" required>
                                            </td>
                                            <td style="color: #00171f">
                                            Weight (lbs) <br>
                                            <input type="number" id="Weight" placeholder="(lbs)" name="Weight" style="color: #00171f; text-transform: uppercase;"   class="form-control" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="color: #00171f">
                                            GSIS No. <br>
                                            <input type="text" id="GSIS" name="GSIS" style="color: #00171f; text-transform: uppercase;"  class="form-control" required> 
                                            </td>
                                            <td style="color: #00171f">
                                            HDMF No. <br>
                                            <input type="text" id="HDMF" name="HDMF" style="color: #00171f; text-transform: uppercase;"  class="form-control" required>
                                            </td>
                                            <td style="color: #00171f">
                                            TIN <br>
                                            <input type="text" id="TIN" name="TIN" style="color: #00171f; text-transform: uppercase;"  class="form-control"required>
                                            </td>
                                            <td style="color: #00171f">
                                            NBI <br>
                                            <input type="text" id="NBI" name="NBI" style="color: #00171f; text-transform: uppercase;"  class="form-control"required>
                                            </td>
                                            <td style="color: #00171f">
                                            Marital status <br>
                                            <input type="Radio" required Value="Unmarried" style="color: #00171f; text-transform: uppercase;"  name="MaritalStatus" id="MaritalStatus"> Unmarried &nbsp;&nbsp;&nbsp;<input type="Radio" id="MaritalStatus" Value="Married" name="MaritalStatus"> Married <br><input type="Radio" id="MaritalStatus" Value="Divorced" name="MaritalStatus"> Divorced &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="Radio"  id="MaritalStatus" Value="Separated" name="MaritalStatus" >  Separated <br> <input type="Radio" Value="Widow" id="MaritalStatus" name="MaritalStatus" > Widow/Widower 
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                        <td style="color: #00171f">
                                            Do you have a pre-nupital agreement? <br>
                                            <input type="radio" id= "pre_nupital" name="pre_nupital" Value="Yes" style="color: #00171f; text-transform: uppercase;" > Yes &nbsp;&nbsp;&nbsp;
                                            <input type="radio" id= "pre_nupital" name="pre_nupital" Value="No" style="color: #00171f; text-transform: uppercase;"  required> No
                                            </td>
                                            <td style="color: #00171f">
                                            Residential Phone <br>
                                            <input type="tel" class="form-control" style="color: #00171f; text-transform: uppercase;"  onkeypress="return onlyNumberKey(event)"  id="R_Phone" name="R_Phone" required> 
                                            </td>
                                            <td style="color: #00171f">
                                            Mobile Phone <br>
                                            <input type="tel" class="form-control" style="color: #00171f; text-transform: uppercase;"  onkeypress="return onlyNumberKey(event)" id="M_Phone" name="M_Phone" required> 
                                            </td>
                                            <td style="color: #00171f">
                                            Business Phone / Fax <br>
                                            <input type="tel" class="form-control" style="color: #00171f; text-transform: uppercase;" style="color: #00171f; text-transform: uppercase;"  onkeypress="return onlyNumberKey(event)" id="B_Phone" name="B_Phone" required> 
                                            </td>
                                            <td style="color: #00171f">
                                            Email Address <br>
                                            <input type="email" class="form-control" id="Email" style="color: #00171f; text-transform: uppercase;"  name="Email" required> 
                                            </td>
                                        </tr>
                                    </table>
                                    <table class="table " cellspacing="0" >
                                        <tr> 
                                            <th colspan="5" style="color:#ffffff; background-color: #007ea7; font-size: 14px;">Information of Immediate Family</th>
                                        </tr>
                                        <tr>
                                        <td style="color: #00171f">Name of Mother <input type="text" class="form-control" id="MotherName" style="color: #00171f; text-transform: uppercase;"  name="MotherName" required>
                                       
                                        
                                        <td style="color: #00171f">Occupation <input type="text" class="form-control" id="M_Occupation" style="color: #00171f; text-transform: uppercase;"  name="M_Occupation" required></td>
                                        <td style="color: #00171f">Name of Father <input type="text" class="form-control" id="FatherName"style="color: #00171f; text-transform: uppercase;"  name="FatherName" required> </td>
                                        <td style="color: #00171f">Occupation <input type="text" class="form-control" id="F_Occupation"style="color: #00171f; text-transform: uppercase;"  name="F_Occupation" required></td>
                                        </tr>
                                        <tr>
                                        <td style="color: #00171f">Name of Spouse <input type="text" class="form-control" id="SpouseName" style="color: #00171f; text-transform: uppercase;"  name="SpouseName" required></td>
                                        <td style="color: #00171f">Occupation <input type="text" class="form-control" id="S_Occupation" style="color: #00171f; text-transform: uppercase;"  name="S_Occupation" required></td>
                                        <td style="color: #00171f">Children's Name <textarea class="form-control" rows="3" cols="50" style="color: #00171f; text-transform: uppercase; margin-top:8px"    id="ChildrenName" name="ChildrenName"></textarea></td>
                                        
                                        </tr>
                                    </table>
                                    <table class="table " cellspacing="0" >
                                        <tr> 
                                            <th colspan="5" style="color:#ffffff; background-color: #007ea7; font-size: 14px;">Financial Information</th>
                                        </tr>
                                        <tr>
                                        <td style="color: #00171f">Employment Status <br> <input type="radio" name="EmploymentStatus" style="color: #00171f; text-transform: uppercase;" Value="Employed" id="Employed" onclick="javascript:Emplystatus();" required> Employed
                                                              <br> <input type="radio" name="EmploymentStatus" style="color: #00171f; text-transform: uppercase;" Value="Self-Employed" id="Self-Employed" onclick="javascript:Emplystatus();"> Self-Employed
                                                              <br> <input type="radio" name="EmploymentStatus" style="color: #00171f; text-transform: uppercase;" Value="Retired" id="Retired" onclick="javascript:Emplystatus();"> Retired
                                                              <br> <input type="radio" name="EmploymentStatus"  style="color: #00171f; text-transform: uppercase;" Value="Housewife" id="Housewife" onclick="javascript:Emplystatus();"> Housewife
                                                              <br> <input type="radio" name="EmploymentStatus" style="color: #00171f; text-transform: uppercase;" Value="Student" id="Student" onclick="javascript:Emplystatus();"> Student
                                                              <br><input type="radio" name="EmploymentStatus" style="color: #00171f; text-transform: uppercase;" Value="Other" id="Other" onclick="javascript:Emplystatus();"> Other Specify <br>
                                                              
                                                              <br> Personal Monthly Income <br>
                                                             <input type="radio" name="PersonalMonthlyIncome" id="PersonalMonthlyIncome"  Value="Under Php 10,000" style="color: #00171f; text-transform: uppercase;"> Under Php 10,000 <br> <input type="radio" id="PersonalMonthlyIncome"  name="PersonalMonthlyIncome" Value="Under Php 10,000-Php 19,999"> Under Php 10,000-Php 19,999 <br> <input type="radio" Value="Under Php 20,000-Php 49,999" id="PersonalMonthlyIncome"  name="PersonalMonthlyIncome"> Under Php 20,000-Php 49,999 
                                            
                                        </td>
                                        <td style="color: #00171f">
                                           Source of Income/Funds <br> <input type="radio" name="SourceOfIncome" style="color: #00171f; text-transform: uppercase;" Value="Salary" id="Salary" required onclick="javascript:SourceOfIncome1();"> Salary
                                                                  <br> <input type="radio" name="SourceOfIncome" style="color: #00171f; text-transform: uppercase;" Value="Interest/Commission" id="Interest" onclick="javascript:SourceOfIncome1();"> Interest/Commission
                                                                  <br> <input type="radio" name="SourceOfIncome" style="color: #00171f; text-transform: uppercase;" Value="Business" id="Business" onclick="javascript:SourceOfIncome1();"> Business
                                                                  <br> <input type="radio" name="SourceOfIncome" style="color: #00171f; text-transform: uppercase;" Value="Regular Remittance"id="Regular"  onclick="javascript:SourceOfIncome1();"> Regular Remittance
                                                                  <br> <input type="radio" name="SourceOfIncome" style="color: #00171f; text-transform: uppercase;" Value="Pension" id="Pension"onclick="javascript:SourceOfIncome1();"> Pension
                                                                  <br> <input type="radio" name="SourceOfIncome" style="color: #00171f; text-transform: uppercase;" Value="Other" id="SOther" onclick="javascript:SourceOfIncome1();"> Other Specify <br>
                                                                  
                                                                  <br><br><input type="radio" id="PersonalMonthlyIncome" style="color: #00171f; text-transform: uppercase;" name="PersonalMonthlyIncome" required Value="Under Php 50,000-Php 99,999 "> Under Php 50,000-Php 99,999 
                                                                  <br> <input type="radio" id="PersonalMonthlyIncome" style="color: #00171f; text-transform: uppercase;" name="PersonalMonthlyIncome" Value="Php 100,000+"> Php 100,000+
                                        </td>
                                        <td style="color: #00171f">
                                            Employer or Business Name (if Self-Employed)
                                            <br> <input type="text" class="form-control" id="Business_Name" style="color: #00171f; text-transform: uppercase;" name="Business_Name" required>
                                            Nature of Employer's Business / Your Business 
                                            <br> <input type="text" class="form-control" id="Employer_Name" style="color: #00171f; text-transform: uppercase;" name="Employer_Name" required>
                                            Position in Company 
                                            <br> <input type="text" class="form-control" id="PositionCompany" style="color: #00171f; text-transform: uppercase;" name="PositionCompany" required>
                                            Employment Date/Date when business was Established 
                                            <br> <input type="date" class="form-control" id="EmploymentDate" name="EmploymentDate" style="width: 150px; margin-top: 10px;" required>
                                           
                                        </td>
                                      
                                       
                                    </table>
                                    <table class="table " cellspacing="0" >
                                        <tr> 
                                            <th colspan="5" style="color:#00008B">Optional</th>
                                        </tr>
                                        <tr>
                                        <td style="color: #00171f">Do you own memorial plot (s) / bone crypt (s)?
                                            &nbsp;&nbsp;<input type="radio" name="bone_crypt" value="yes" id="yes_bone_crypt" onclick="javascript:BoneCrypts();"> Yes &nbsp;&nbsp; <input type="radio" name="bone_crypt" value="No" id="no_bone_crypt" checked onclick="javascript:BoneCrypts();"> No
                                        </td>
                                        </tr>
                                    </table>
                                    <div id="div_bone_crypt" style="display:none">
                                     <table class="table" cellspacing="0">
                                        <tr>
                                        <td style="color: #00171f">Name of Memorial Park <br>
                                        <input type="text" Class="form-control" style="color: #00171f; text-transform: uppercase;" name="Name_MemorialPark" id="Name_MemorialPark">
                                        </td>
                                        <td style="color: #00171f">Since <br>
                                        <input type="date" Class="form-control" style="color: #00171f; text-transform: uppercase;margin-top: 8px" name="Since" id="Since">
                                        </td>
                                        <td style="color: #00171f">Location<br>
                                        <input type="text" Class="form-control" style="color: #00171f; text-transform: uppercase;" name="Location" id="Location">
                                        </td>
                                        
                                        </tr>
                                       
                                     </table>
                                    </div>
                </div>         
             <!-- Ben -->
             <div align="right">   
            <button type="submit" class="btn btn-primary" style="padding-right: 30px;padding-left: 30px" name="save" onclick="returnFileSize()">Save</button>     
            </div>    
          </div>       
        </div>   

            </div> 
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
         



 
 </form>


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




    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <form method="POST" action="storeImage.php">
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" style="width:20%">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel1"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    
        <div class="ChildrenTable">
                 
           
            <div class="card-body">


                 <div style="float: center;" id="div_Camera">
                    <div id="my_camera" style="float: left; "></div>  
                     <div id="results" style= "float: right; width: 150px; height: 150px; padding: 0px" >Your captured image will appear here...</div>
                    <input type=button value="Take Snapshot" onClick="take_snapshot()" class="btn btn-primary">
                    <input type="hidden"  name="image" class="image-tag">
                </div> 
                <div style="float: center; display:none" id="div_Profile" >
                </div>   
               
        </div>            
   
     <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="save" id="btnUpload" class="btn btn-primary">save</button>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

    <script>
   const phoneInputField = document.querySelector("#R_Phone");
   const phoneInputField1 = document.querySelector("#B_Phone");
   const phoneInputField2 = document.querySelector("#M_Phone");
   const phoneInput = window.intlTelInput(phoneInputField, {
     utilsScript:
    
       "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
   });
   const phoneInput1 = window.intlTelInput(phoneInputField1, {
     utilsScript:
       "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
   });
   const phoneInput2 = window.intlTelInput(phoneInputField2, {
     utilsScript:
       "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
   });
 </script>

    

<script type="text/javascript">

function BoneCrypts() {
    if (document.getElementById('yes_bone_crypt').checked) {
        document.getElementById('div_bone_crypt').style.display = 'block';
    }
    else{

   document.getElementById('div_bone_crypt').style.display = 'none';
} 
}
function Emplystatus() {
    if (document.getElementById('Other').checked) {
        document.getElementById('EmployStatus').style.display = 'block';
         document.getElementById('EmployStatus').value = "";
    }else {
        document.getElementById('EmployStatus').style.display = 'none';
        document.getElementById('EmployStatus').value = "";
    }

}
function SourceOfIncome1() {
    if (document.getElementById('SOther').checked) {
        document.getElementById('SourceOfIncomes').style.display = 'block';
    }else {
        document.getElementById('SourceOfIncomes').style.display = 'none';
    }

}

        </script>


<script type="text/javascript">



function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
        </script>
        <script>
            function addressFunction() {
                if (document.getElementById("same").checked) {

                    document.getElementById("B_Blk").value = document.getElementById("R_Blk").value;
                    document.getElementById("C_City").value = document.getElementById("R_City").value;
                    document.getElementById("C_Province").value = document.getElementById("R_Province").value;
                    document.getElementById("C_Country").value = document.getElementById("R_Country").value;
                    document.getElementById("C_Zipcode").value = document.getElementById("R_Zipcode").value ;
                   
                } else {
                    document.getElementById("B_Blk").value = "";
                    document.getElementById("C_City").value = "";
                    document.getElementById("C_Province").value = "";
                    document.getElementById("C_Country").value = "";
                    document.getElementById("C_Zipcode").value = "";
                   
            }
        }
        </script>
        <script>
        var d = new Date().valueOf();
        var n = d.toString();
        var result = '';
        var length = 6;
        var p = 0;
        var chars = '0123456789';
        // bold for illustration  
        for (var i = length; i > 0; --i){
	        result += ((i & 1) && n.charAt(p) ? '<b>' + n.charAt(p) + '</b>' : chars[Math.floor(Math.random() * chars.length)]);
	        if(i & 1) p++;
        };
            document.getElementById('results').innerHTML = "SSDCCC" + result;
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

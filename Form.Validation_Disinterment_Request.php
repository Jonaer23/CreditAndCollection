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
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    
    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="css/Sedge-Dashboard.css" rel="stylesheet">
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

   
    <script>
        function toggleInput11() {
            var otherRadio = document.querySelector('input[name="natureOfCoffin"][value="OTHER"]');
            var inputField = document.getElementById('natureOfCoffinOTHER');
            
            if (otherRadio.checked) {
                inputField.style.display = 'block';
            } else {
                inputField.style.display = 'none';
            }
        }
        
        // Trigger initial check when the page loads
        window.onload = toggleInput11;
    </script>
    
    <script>
        function toggleInput12() {
            var otherRadio = document.querySelector('input[name="relationToDeceased"][value="OTHER"]');
            var inputField = document.getElementById('OTHERrelationToDeceased');
            
            if (otherRadio.checked) {
                inputField.style.display = 'block';
            } else {
                inputField.style.display = 'none';
            }
        }
        
        // Trigger initial check when the page loads
        window.onload = toggleInput12;
    </script>
    <script>
      jQuery.noConflict();
      jQuery(document).ready(function($) {
        $(document).ready(function() {
          // Sample list of Philippine holidays (in mm-dd format) with names
          const philippineHolidays = [
            { date: "01-01", name: "New Year's Day", intermentTerms: "SPECIAL DAY (HOLIDAYS)" },
            { date: "04-06", name: "Maundy Thursday", intermentTerms: "SPECIAL DAY (HOLIDAYS)" },
            { date: "06-07", name: "Good Friday", intermentTerms: "SPECIAL DAY (HOLIDAYS)" },
            { date: "06-10", name: "Day of Valor (Araw ng Kagitingan)", intermentTerms: "SPECIAL DAY (HOLIDAYS)" },
            { date: "06-21", name: "Eid'l Fitr (Feast of Ramadhan)", intermentTerms: "SPECIAL DAY (HOLIDAYS)" },
            { date: "05-01", name: "Labor Day", intermentTerms: "SPECIAL DAY (HOLIDAYS)" },
            { date: "06-12", name: "Independence Day", intermentTerms: "SPECIAL DAY (HOLIDAYS)" },
            { date: "06-28", name: "Eid'l Adha (Feast of Sacrifice)", intermentTerms: "SPECIAL DAY (HOLIDAYS)" },
            { date: "08-28", name: "National Heroes Day", intermentTerms: "SPECIAL DAY (HOLIDAYS)" },
            { date: "11-27", name: "Bonifacio Day", intermentTerms: "SPECIAL DAY (HOLIDAYS)" },
            { date: "12-25", name: "Christmas Day", intermentTerms: "SPECIAL DAY (HOLIDAYS)" },
            { date: "12-30", name: "Rizal Day", intermentTerms: "SPECIAL DAY (HOLIDAYS)" },
            { date: "02-24", name: "EDSA People Power Revolution Anniversary", intermentTerms: "SPECIAL DAY (HOLIDAYS)" },
            { date: "04-08", name: "Black Saturday", intermentTerms: "SPECIAL DAY (HOLIDAYS)" },
            { date: "08-21", name: "Ninoy Aquino Day", intermentTerms: "SPECIAL DAY (HOLIDAYS)" },
            { date: "11-01", name: "All Saints’ Day", intermentTerms: "SPECIAL DAY (HOLIDAYS)" },
            { date: "12-08", name: "Feast of the Immaculate Conception of Mary", intermentTerms: "SPECIAL DAY (HOLIDAYS)" },
            { date: "12-31", name: "Last Day of the Year", intermentTerms: "SPECIAL DAY (HOLIDAYS)" },
            { date: "11-02", name: "Special Non-Working Holiday", intermentTerms: "SPECIAL DAY (HOLIDAYS)" },
            { date: "01-02", name: "Special Non-Working Holiday", intermentTerms: "SPECIAL DAY (HOLIDAYS)" },
            // Add more holiday data here (without the year)
          ];
            // Function to calculate the time difference in hours
          function calculateTimeDifference(selectedTime) {
            const currentTime = new Date();
            let selecteddate = document.getElementById('date-input').value; // Declare selectedTime here
            const [month, day, year] = selecteddate.split("/");
            const [hours, minutes] = selectedTime.split(":");
            const selectedDateTime = new Date(
                parseInt(year),
                parseInt(month) - 1, // Months are zero-based
                parseInt(day),
                parseInt(hours),
                parseInt(minutes)
            );
        
            // Calculate the time difference in hours
            let timeDifference = (selectedDateTime - currentTime) / (1000 * 60 * 60);
        
            // If the selectedDateTime is in the past, add 24 hours to it
            if (selectedDateTime < currentTime) {
                selectedDateTime.setDate(selectedDateTime.getDate() + 1);
                timeDifference = (selectedDateTime - currentTime) / (1000 * 60 * 60);
            }
        
            return timeDifference;
        }
          // Datepicker initialization
          $("#date-input").datepicker({
            beforeShowDay: function(date) {
              const formattedDate = $.datepicker.formatDate("mm-dd", date);
              const holiday = philippineHolidays.find(h => h.date === formattedDate);
              if (holiday) {
                return [true, "holiday", holiday.name];
              }
               if (date.getDay() === 0 || date.getDay() === 6) {
                  return [true, "weekend", "weekend"];
                }
              return [true];
            },
            onSelect: function(dateText, inst) {
              const selectedDate = new Date(dateText);
              const formattedSelectedDate = $.datepicker.formatDate("mm-dd", selectedDate);
              const holiday = philippineHolidays.find(h => h.date === formattedSelectedDate);
              const holidayDisplay = $("#holiday-display");
              const desiredIntermentDisplay = $("#desiredInterment-display");
              const Particularmarkup2 = $("#Particularmarkup");
              let selectedTime = document.getElementById('time-input').value; // Declare selectedTime here
              
                const timeDifference = calculateTimeDifference(selectedTime);
                if (holiday) {
                    holidayDisplay.text("");
                    const timeInput = document.getElementById('time-input');
                    const selectedTime = timeInput.value;
                    const startTime = '18:00'; // 6:00 PM
                    const endTime = '08:30';   // 8:30 AM
        
                    if (
                      (selectedTime >= startTime && selectedTime <= '23:59') || // From 6:00 PM to midnight
                      (selectedTime >= '00:00' && selectedTime <= endTime) // From midnight to 8:30 AM
                    ) {
                        if (timeDifference < 24) {
                            Particularmarkup2.text("30");
                            desiredIntermentDisplay.text(holiday.intermentTerms + " NIGHT/DAWN (6:00 P.M. - 8:30 A.M.)");
                            holidayDisplay.text("Selected holiday: " + holiday.name);
                            console.log(timeDifference);
                        } else {
                            Particularmarkup2.text("20");
                            desiredIntermentDisplay.text(holiday.intermentTerms + " NIGHT/DAWN (6:00 P.M. - 8:30 A.M.)");
                            holidayDisplay.text("Selected holiday: " + holiday.name);
                             console.log(timeDifference);
                        }
                    
                    } else {
                        if (timeDifference < 24) {
                            Particularmarkup2.text("20");
                            desiredIntermentDisplay.text(holiday.intermentTerms);
                            holidayDisplay.text("Selected holiday: " + holiday.name);
                        } else {
                            Particularmarkup2.text("0");
                            desiredIntermentDisplay.text(holiday.intermentTerms);
                            holidayDisplay.text("Selected holiday: " + holiday.name);
                        }
                     
                    }
                } else if (selectedDate.getDay() === 0 || selectedDate.getDay() === 6) {
                    holidayDisplay.text("");
                    const timeInput = document.getElementById('time-input');
                    const selectedTime = timeInput.value;
                    const startTime = '18:00'; // 6:00 PM
                    const endTime = '08:30';   // 8:30 AM
        
                    if (
                      (selectedTime >= startTime && selectedTime <= '23:59') || // From 6:00 PM to midnight
                      (selectedTime >= '00:00' && selectedTime <= endTime) // From midnight to 8:30 AM
                    ) {
                        
                        if (timeDifference < 24) {
                            Particularmarkup2.text("30"); 
                            desiredIntermentDisplay.text("SPECIAL DAY (WEEKEND) NIGHT/DAWN (6:00 P.M. - 8:30 A.M.)");
                        } else {
                            Particularmarkup2.text("20");
                            desiredIntermentDisplay.text("SPECIAL DAY (WEEKEND) NIGHT/DAWN (6:00 P.M. - 8:30 A.M.)");
                        }
                     
                    } else {
                        if (timeDifference < 24) {
                            Particularmarkup2.text("20"); 
                            desiredIntermentDisplay.text("SPECIAL DAY (WEEKEND)");
                        } else {
                            Particularmarkup2.text("0");
                            desiredIntermentDisplay.text("SPECIAL DAY (WEEKEND)");
                        }
                    }
                
                } else {
                    holidayDisplay.text(""); // Clear the display if no holiday is selected
                    
                    const timeInput = document.getElementById('time-input');
                    const selectedTime = timeInput.value;
                    const startTime = '18:00'; // 6:00 PM
                    const endTime = '08:30';   // 8:30 AM
                    
                    if (
                      (selectedTime >= startTime && selectedTime <= '23:59') || // From 6:00 PM to midnight
                      (selectedTime >= '00:00' && selectedTime <= endTime) // From midnight to 8:30 AM
                    ) {
                        
                        if (timeDifference < 24) {
                            Particularmarkup2.text("30"); 
                            desiredIntermentDisplay.text("REGULAR DAY NIGHT/DAWN (6:00 P.M. - 8:30 A.M.)");
                        } else {
                            Particularmarkup2.text("20");
                            desiredIntermentDisplay.text("REGULAR DAY NIGHT/DAWN (6:00 P.M. - 8:30 A.M.)");
                        }
                    } else {
                        if (timeDifference < 24) {
                            Particularmarkup2.text("20"); 
                            desiredIntermentDisplay.text("REGULAR DAY");
                        } else {
                            Particularmarkup2.text("0");
                            desiredIntermentDisplay.text("REGULAR DAY");
                        }
                    }
                }
            }
          });
        });
      });
    </script>
  <style>
    .holiday {
      background-color: #FFCCCC; /* Customize the background color for holiday dates */
    }
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

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3" style="background-color: #003459;">
                        </div>
                        <div class="card-body">
                            <div class="table-responsive" style="color: #4a4949">
                                <table class="table table-bordered" id="history" width="100%" cellspacing="0">
                                    <thead>
                                        <tr class="text-xs font-weight-bold text-uppercase mb-1"
                                            style="color: #ffffff; background-color: #007ea7; font-size: 14px">
                                            <th scope="col"></th>
                                            <th scope="col"></th>
                                            <th scope="col">CUSTOMER CODE</th>
                                            <th scope="col">FULLNAME</th>
                                            <th scope="col">PLOT DESCRIPTION</th>
                                            <th scope="col">TOTAL CONTRACT PRICE</th>
                                            <th scope="col">INTERMENT  DATE</th>
                                        </tr>
                                    </thead>
                                    <tbody></tbody>
                                </table>
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

      <!-- download Modal -->
    <div class="modal fade" id="downloadModal" tabindex="-1" role="dialog" aria-labelledby="downloadModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                  
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card-body">
                        <div class="card shadow mb-4 text-uppercase mb-1"  style="color: #333; font-size: 12px; padding: 20px 20px;"  >
                      
                            <table class="table table-bordered" style="border:none; width: 100%"
                                cellspacing="0">
                                <tbody>
                                    <tr>
                                        <td style="font-size: 12px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; text-align: center; border:none;"><img src="img/SouthSpring.png" alt="SouthSpring"></td>
                                    </tr>
                                    <tr>
                                        <td style="font-size: 25px; color: #565051; font-family: Roboto, Arial, sans-serif; padding: 5px 20px ; text-align: center; border:none; background: radial-gradient(darkorange, orange); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Centennial <img src="img/centenial.png" alt="SouthSpring"> Garden <br></td>
                                    </tr>
                                </tbody>
                            </table>
                            <div style=" justify-content: space-between; padding: 10px;">
                                <span><p class="text-gray-900 font-weight-bold text-uppercase mb-1" style="font-size: 16px">personal information</p></span>
                                <br>
                                <span class="text-gray-900 text-uppercase mb-1" style="font-size: 12px">
                                    Customer code: <span class="text-gray-900 text-uppercase mb-1" style="font-size: 12px; text-decoration: underline;" id="customerCode"></span>
                                </span>
                                <br>
                                <span class="text-gray-900 text-uppercase mb-1" style="font-size: 12px">
                                    contract code: <span class="text-gray-900 text-uppercase mb-1" style="font-size: 12px; text-decoration: underline;" id="contractCode1"></span>
                                </span>
                                 <br>
                                <span class="text-gray-900 text-uppercase mb-1" style="font-size: 12px">
                                    c.o.o. no.: <span class="text-gray-900 text-uppercase mb-1" style="font-size: 12px; text-decoration: underline;" id="COO"></span>
                                </span>
                                <br>
                                <span class="text-gray-900 text-uppercase mb-1" style="font-size: 12px">
                                    Client Name: <span class="text-gray-900 text-uppercase mb-1" style="font-size: 12px; text-decoration: underline;" id="clientName"></span>
                                </span>
                                <br> 
                                <span class="text-gray-900 text-uppercase mb-1" style="font-size: 12px">
                                    Reserved date: <span class="text-gray-900 text-uppercase mb-1" style="font-size: 12px; text-decoration: underline;" id="reserveDate"></span>
                                </span>
                                <table style="width: 100%; ">
                                    <tr>
                                        <td style="width: 40%; float: left; padding: 20px 0px">
                                            <span><p class="text-gray-900 font-weight-bold text-uppercase mb-1" style="font-size: 16px">payment terms</p></span>
                                        </td>
                                        <td style="width: 40%; float: right; padding: 20px 0px">
                                            <span><p class="text-gray-900 font-weight-bold text-uppercase mb-1" style="font-size: 16px">product description</p></span>
                                        </td>
                                    </tr>
                                </table>
                                <table style="width: 50%; float: left">
                                    <tbody>
                                        <tr>
                                            <td><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px">terms : </p></span></td>
                                            <td style="border-bottom: 1px solid; padding-right: 5px"><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px; text-align: right" id="terms"></p></span></td>
                                        </tr>
                                        <tr>
                                            <td><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px">List Price : </p></span></td>
                                            <td style="border-bottom: 1px solid; padding-right: 5px; padding-top: 5px"><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px; text-align: right" id="listprice"></p></span></td>
                                        </tr>
                                        <tr>
                                            <td><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px">Value Added Tax (_)% : </p></span></td>
                                            <td style="border-bottom: 1px solid; padding-right: 5px; padding-top: 5px"><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px; text-align: right" id="VAT"></p></span></td>
                                        </tr>
                                        <tr>
                                            <td><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px">Subtotal : </p></span></td>
                                            <td style="border-bottom: 1px solid; padding-right: 5px; padding-top: 5px"><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px; text-align: right" id="vatSubtotal"></p></span></td>
                                        </tr>
                                        <tr>
                                            <td><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px">Perpetual Care Funds : </p></span></td>
                                            <td style="border-bottom: 1px solid; padding-right: 5px; padding-top: 5px"><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px; text-align: right" id="PCF"></p></span></td>
                                        </tr>
                                        <tr>
                                            <td><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px">Less Discount : </p></span></td>
                                            <td style="border-bottom: 1px solid; padding-right: 5px; padding-top: 5px"><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px; text-align: right" id="discount"></p></span></td>
                                        </tr>
                                        <tr>
                                            <td><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px">Subtotal : </p></span></td>
                                            <td style="border-bottom: 1px solid; padding-right: 5px; padding-top: 5px"><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px; text-align: right" id="subtotalDiscount"></p></span></td>
                                        </tr>
                                        <tr>
                                            <td><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px">Total Contract Price : </p></span></td>
                                            <td style="border-bottom: 1px solid; padding-right: 5px; padding-top: 5px"><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px; text-align: right" id="TCP"></p></span></td>
                                        </tr>
                                        <tr>
                                            <td><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px">Downpayment : </p></span></td>
                                            <td style="border-bottom: 1px solid; padding-right: 5px; padding-top: 5px"><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px; text-align: right" id="downpayment"></p></span></td>
                                        </tr>
                                        <tr>
                                            <td><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px">Full Downpayment : </p></span></td>
                                            <td style="border-bottom: 1px solid; padding-right: 5px; padding-top: 5px"><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px; text-align: right" id="fullDownpayment"></p></span></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table style="width: 40%; float: right">
                                    <tbody>
                                        <tr>
                                            <td style="border: 1px solid; padding-left: 5px"><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px">lot id : </p></span></td>
                                            <td style="border: 1px solid; padding-left: 5px"><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px; text-align: left" id="lotID"></p></span></td>
                                        </tr>
                                        <tr>
                                            <td style="border: 1px solid; padding-left: 5px"> <span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px">section : </p></span></td>
                                            <td style="border: 1px solid; padding-left: 5px; padding-top: 5px"><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px; text-align: left" id="section"></p></span></td>
                                        </tr>
                                        <tr>
                                            <td style="border: 1px solid; padding-left: 5px"><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px">number of lots : </p></span></td>
                                            <td style="border: 1px solid; padding-left: 5px; padding-top: 5px"><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px; text-align: left" id="numberoflots"></p></span></td>
                                        </tr>
                                        <tr>
                                            <td style="border: 1px solid; padding-left: 5px"><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px">area : </p></span></td>
                                            <td style="border: 1px solid; padding-left: 5px; padding-top: 5px"><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px; text-align: left" id="area"></p></span></td>
                                        </tr>
                                        <tr>
                                            <td style="border: 1px solid; padding-left: 5px"><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px">phase : </p></span></td>
                                            <td style="border: 1px solid; padding-left: 5px; padding-top: 5px"><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px; text-align: left" id="phase"></p></span></td>
                                        </tr>
                                        <tr>
                                            <td style="border: 1px solid; padding-left: 5px"><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px">type : </p></span></td>
                                            <td style="border: 1px solid; padding-left: 5px; padding-top: 5px"><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px; text-align: left" id="type"></p></span></td>
                                        </tr>
                                        <tr>
                                            <td style="border: 1px solid; padding-left: 5px"><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px">classification : </p></span></td>
                                            <td style="border: 1px solid; padding-left: 5px; padding-top: 5px"><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px; text-align: left" id="classification"></p></span></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table style="width: 100%; ">
                                    <tr>
                                        <td style="width: 40%; float: left; padding: 20px 0px">
                                            <span><p class="text-gray-900 font-weight-bold text-uppercase mb-1" style="font-size: 16px">computation</p></span>
                                        </td>
                                        <td style="width: 40%; float: right; padding: 20px 0px">
                                           
                                        </td>
                                    </tr>
                                </table>
                                <table style="width: 50%; float: left">
                                    <tbody>
                                        <tr>
                                            <td><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px">Terms : </p></span></td>
                                            <td style="border-bottom: 1px solid; padding-right: 5px"><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px; text-align: right" id="noMonths"></p></span></td>
                                        </tr>
                                        <tr>
                                            <td><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px">monthly amortization : </p></span></td>
                                            <td style="border-bottom: 1px solid; padding-right: 5px"><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px; text-align: right" id="monthlyPayment"></p></span></td>
                                        </tr>
                                        <tr>
                                            <td><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px">Remaining months : </p></span></td>
                                            <td style="border-bottom: 1px solid; padding-right: 5px"><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px; text-align: right" id="remainingMonths"></p></span></td>
                                        </tr>
                                        <tr>
                                            <td><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px">remaining balance : </p></span></td>
                                            <td style="border-bottom: 1px solid; padding-right: 5px; padding-top: 5px"><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px; text-align: right" id="remainingBalance"></p></span></td>
                                        </tr>
                                        <tr>
                                            <td><span><p class="text-gray-900 text-uppercase mb-1 font-weight-bold" style="font-size: 12px">total amount paid : </p></span></td>
                                            <td style="border-bottom: 1px solid; padding-right: 5px; padding-top: 5px"><span><p class="text-gray-900 text-uppercase mb-1 font-weight-bold" style="font-size: 12px; text-align: right" id="amountPaid"></p></span></td>
                                        </tr>
                                        <tr>
                                            <td><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px; padding-left: 10px">Less : DISINTERMENT  Priviledge : </p></span></td>
                                            <td style="border-bottom: 1px solid; padding-right: 5px; padding-top: 5px"><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px; text-align: right" id="intermentPriviledge"></p></span></td>
                                        </tr>
                                        <tr>
                                            <td><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px; padding-left: 10px">ADD : DISINTERMENT  Mark-up : </p></span></td>
                                            <td style="border-bottom: 1px solid; padding-right: 5px; padding-top: 5px"><span><p class="text-gray-900 text-uppercase mb-1" style="font-size: 12px; text-align: right" id="intermentMarkup"></p></span></td>
                                        </tr>
                                        <tr>
                                            <td><span><p class="text-gray-900 text-uppercase mb-1 font-weight-bold" style="font-size: 12px">total DISINTERMENT  fee : </p></span></td>
                                            <td style="border-bottom: 1px solid; padding-right: 5px; padding-top: 5px"><span><p class="text-gray-900 text-uppercase mb-1 font-weight-bold" style="font-size: 12px; text-align: right" id="intermentamountPaid"></p></span></td>
                                        </tr>
                                        <tr hidden>
                                            <td style="border-bottom: 1px solid; padding-right: 5px; padding-top: 5px"><span><p class="text-gray-900 text-uppercase mb-1 font-weight-bold" style="font-size: 12px; text-align: right" id="Particular">freshbody</p></span></td>
                                            <td style="border-bottom: 1px solid; padding-right: 5px; padding-top: 5px"><span><p class="text-gray-900 text-uppercase mb-1 font-weight-bold" style="font-size: 12px; text-align: right" id="ParticularamountPaid"></p></span></td>
                                        </tr>
                                         <tr hidden>
                                            <td style="border-bottom: 1px solid; padding-right: 5px; padding-top: 5px"><span><p class="text-gray-900 text-uppercase mb-1 font-weight-bold" style="font-size: 12px; text-align: right" >markup</p></span></td>
                                            <td style="border-bottom: 1px solid; padding-right: 5px; padding-top: 5px"><span><p class="text-gray-900 text-uppercase mb-1 font-weight-bold" style="font-size: 12px; text-align: right" id="Particularmarkup"></p></span></td>
                                        </tr>
                                         <tr hidden>
                                            <td style="border-bottom: 1px solid; padding-right: 5px; padding-top: 5px"><span><p class="text-gray-900 text-uppercase mb-1 font-weight-bold" style="font-size: 12px; text-align: right" >epitaph</p></span></td>
                                            <td style="border-bottom: 1px solid; padding-right: 5px; padding-top: 5px"><span><p class="text-gray-900 text-uppercase mb-1 font-weight-bold" style="font-size: 12px; text-align: right" id="epitaphfee" >0</p></span></td>
                                        </tr>
                                        <tr >
                                            <td ><button  class="btn btn-success" style="font-size: 12px; margin-top: 30px; display: none; width: 100%" id="computebtn" onclick="computeIntermentFee()">COMPUTE DISINTERMENT  FEE</button></td>
                                            <td  style="padding-left: 10px"><button onclick="toggleDivVisibility()"  class="btn btn-info" style="font-size: 12px; margin-top: 30px; width: 100%" id="downloadblebtn">DISINTERMENT  REQUEST</button></td>
                                        </tr>
                                        

                                    </tbody>
                                </table>
                                
                        </div>
                            <div style="justify-content: space-between; font-size: 12px; padding: 20px 20px; margin-top: 50px; width: 100%; float: left; border: 1px solid #f5f5f5; box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.3); display: none;" id="downloadbleform" >
                                    <table style="margin-bottom: 30px; width: 100%; float: left">
                                        <thead>
                                            <th>
                                                <span><p style="font-size: 16px">DISINTERMENT  INFORMATION</p></span>
                                                <div id="result"></div>
                                            </th>
                                            <th>
                                                <button  class="btn btn-primary" style="font-size: 12px; float: right" id="requestIntermentbtn" type="button" >Insert Data</button>
                                            </th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td style="padding-left: 20px">
                                                    <span><p style="font-size: 12px; padding-top: 10px; padding-bottom: 0px;  margin: 0px;">NAME OF INTERVIEWEE :</p><input type="text" style="font-size: 12px;  margin: 0px; padding: 0px 10px; width: 300px" class="text-xs font-weight-bold text-gray-900 text-uppercase mb-1 form-control" id="IntervieweeName" /></span>
                                                    
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding-left: 20px; ">
                                                    <span><p style="font-size: 12px; padding-top: 10px; padding-bottom: 10px;  margin: 0px;">RELATION TO THE DECEASED :</p></span>
                                                    <input type="radio" style="display: inline-block;" id="RelationttoDeceased" name="relationToDeceased" value="SPOUSE" onclick="toggleInput12()" checked/><p style="font-size: 12px; display: inline-block; padding-left: 10px; padding-right: 40px">SPOUSE</p>
                                                    <input type="radio" style="display: inline-block;" id="RelationttoDeceased" name="relationToDeceased" value="CHILDREN" onclick="toggleInput12()"  /><p style="font-size: 12px; display: inline-block; padding-left: 10px; ">CHILDREN</p>
                                                    <br>
                                                    <input type="radio" style="display: inline-block;" id="RelationttoDeceased" name="relationToDeceased" value="PARENTS" onclick="toggleInput12()"  /><p style="font-size: 12px; display: inline-block; padding-left: 10px; padding-right: 36px">PARENTS</p>
                                                    <input type="radio" style="display: inline-block;" id="RelationttoDeceased" name="relationToDeceased" value="SIBLING" onclick="toggleInput12()"  /><p style="font-size: 12px; display: inline-block; padding-left: 10px">SIBLING</p>
                                                     <br>
                                                    <input type="radio" style="display: inline-block;" id="RelationttoDeceased" name="relationToDeceased" value="OTHER" onclick="toggleInput12()" /><p style="font-size: 12px; display: inline-block; padding-left: 10px; padding-right: 40px">OTHER</p><input type="text" id="OTHERrelationToDeceased" style="font-size: 12px;  margin: 0px; padding: 0px 10px; width: 200px" class="form-control"/>
                                                </td>
                                            </tr>
                                           
                                        </tbody>
                                    </table>
                                     <table style="margin-bottom: 30px; width: 20%; margin-top: 20px; float: left" hidden>
                                       <thead>
                                           <th style="padding-left: 20px; ">
                                               <span><p style="font-size: 12px; padding-top: 10px; padding-bottom: 10px;  margin: 0px;">DECEASED IS :</p></span>
                                           </th>
                                       </thead>
                                        <tbody>
                                           
                                            <tr>
                                                <td style="padding-left: 20px; ">
                                                    <input type="radio" style="display: inline-block;" id="DeceasedIs" name="DeceasedIs" value="BUYER" checked/><p style="font-size: 12px; display: inline-block; padding-left: 10px">BUYER</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding-left: 20px; ">
                                                    <input type="radio" style="display: inline-block;" id="DeceasedIs" name="DeceasedIs" value="SPOUSE" /><p style="font-size: 12px; display: inline-block; padding-left: 10px">SPOUSE</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding-left: 20px; ">   
                                                    <input type="radio" style="display: inline-block;" id="DeceasedIs" name="DeceasedIs" value="RELATIVE" /><p style="font-size: 12px; display: inline-block; padding-left: 10px">RELATIVE</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding-left: 20px; ">
                                                    <input type="radio" style="display: inline-block;" id="DeceasedIs" name="DeceasedIs" value="AUTHORIZED" /><p style="font-size: 12px; display: inline-block; padding-left: 10px">AUTHORIZED</p>
                                                </td>
                                            </tr> 
                                            </tbody>
                                    </table>
                                     <table style="margin-bottom: 30px; width: 30%; margin-top: 20px; float: right" hidden>
                                       <thead>
                                           <th style="padding-left: 20px; ">
                                               <span><p style="font-size: 12px; padding-top: 10px; padding-bottom: 10px;  margin: 0px;"></p></span>
                                           </th>
                                       </thead>
                                        <tbody>
                                           
                                            <tr>
                                                <td style="padding-left: 20px;padding-top: 20px; ">
                                                    <input type="checkbox" style="display: inline-block;" /><p style="font-size: 12px; display: inline-block; padding-left: 10px">AMENDMENTS</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding-left: 20px; ">
                                                    <input type="text" class="form-control" id="Conveyed" name="Conveyed[]" style="display: inline-block;" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding-left: 20px; ">   
                                                    <input type="checkbox" style="display: inline-block;"/><p style="font-size: 12px; display: inline-block; padding-left: 10px">OTHER</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding-left: 20px; ">
                                                    <input type="text" class="form-control" id="Conveyed" name="Conveyed[]" style="display: inline-block;" />
                                                </td>
                                            </tr> 
                                            </tbody>
                                    </table>
                                     <table style="margin-bottom: 30px; width: 50%; margin-top: 20px; float: left" hidden>
                                       <thead>
                                           <th style="padding-left: 20px; ">
                                               <span><p style="font-size: 12px; padding-top: 10px; padding-bottom: 10px;  margin: 0px;">CONVEYED :</p></span>
                                           </th>
                                       </thead>
                                        <tbody>
                                           
                                            <tr>
                                                <td style="padding-left: 20px; ">
                                                    
                                                    <input type="checkbox" style="display: inline-block;" id="Conveyed" name="Conveyed[]" value="DEATH CERTIFICATE"  /><p style="font-size: 12px; display: inline-block; padding-left: 10px">DEATH CERTIFICATE</p>
                                                </td>
                                                <td style="padding-left: 20px; ">
                                                    <input type="checkbox" style="display: inline-block;" id="Conveyed" name="Conveyed[]" value="MARRIAGE CERTIFICATE" /><p style="font-size: 12px; display: inline-block; padding-left: 10px">MARRIAGE CERTIFICATE</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding-left: 20px; ">   
                                                    <input type="checkbox" style="display: inline-block;" id="Conveyed" name="Conveyed[]" value="PRE-NUPTIAL AGREEMENT" /><p style="font-size: 12px; display: inline-block; padding-left: 10px">PRE-NUPTIAL AGREEMENT</p>
                                                </td>
                                                <td style="padding-left: 20px; ">
                                                    <input type="checkbox" style="display: inline-block;" id="Conveyed" name="Conveyed[]" value="AUTHORIZATION LETTER" /><p style="font-size: 12px; display: inline-block; padding-left: 10px">AUTHORIZATION LETTER</p>
                                                </td>
                                            </tr> 
                                            <tr>
                                                <td style="padding-left: 20px; ">
                                                    <input type="checkbox" style="display: inline-block;" id="Conveyed" name="Conveyed[]" value="BIRTH CERTIFICATE" /><p style="font-size: 12px; display: inline-block; padding-left: 10px">BIRTH CERTIFICATE</p>
                                                </td>
                                                <td style="padding-left: 20px; ">
                                                    <input type="checkbox" style="display: inline-block;" id="Conveyed" name="Conveyed[]" value="TRANSFER PERMIT" /><p style="font-size: 12px; display: inline-block; padding-left: 10px">TRANSFER PERMIT</p>
                                                </td>
                                            </tr> 
                                            <tr>
                                                <td style="padding-left: 20px; ">
                                                    <input type="checkbox" style="display: inline-block;" id="Conveyed" name="Conveyed[]" value="TRANSFER PERMIT" /><p style="font-size: 12px; display: inline-block; padding-left: 10px">TRANSFER PERMIT</p>
                                                </td>
                                                <td style="padding-left: 20px; ">
                                                    <input type="checkbox" style="display: inline-block;" id="Conveyed" name="Conveyed[]" value="ATTORNEY-COVENANTS" /><p style="font-size: 12px; display: inline-block; padding-left: 10px">ATTORNEY-COVENANTS</p>
                                                </td>
                                            </tr> 
                                            <tr>
                                                <td style="padding-left: 20px; ">
                                                    <input type="checkbox" style="display: inline-block;" id="Conveyed" name="Conveyed[]" value="SPECIAL POWER OF ATTORNEY" /><p style="font-size: 12px; display: inline-block; padding-left: 10px">SPECIAL POWER OF ATTORNEY</p>
                                                </td>
                                                <td style="padding-left: 20px; ">
                                                    <input type="checkbox" style="display: inline-block;" id="Conveyed" name="Conveyed[]" value="COURT ORDER" /><p style="font-size: 12px; display: inline-block; padding-left: 10px">COURT ORDER</p>
                                                </td>
                                            </tr> 
                                            <tr>   
                                                <td style="padding-left: 20px; ">
                                                    <input type="checkbox" style="display: inline-block;" id="Conveyed" name="Conveyed[]" value="VALID ID" /><p style="font-size: 12px; display: inline-block; padding-left: 10px">VALID ID</p>
                                                </td> 
                                                <td style="padding-left: 20px; ">
                                                    <input type="checkbox" style="display: inline-block;" id="Conveyed" name="Conveyed[]" value="BURIAL PERMIT" /><p style="font-size: 12px; display: inline-block; padding-left: 10px">BURIAL PERMIT</p>
                                                </td>
                                            </tr>
                                                    
                                           
                                        </tbody>
                                    </table>
                                    <table hidden class="table table-bordered" style="border:none; width: 100%;color: #333;"
                                                cellspacing="0"  >
                                       <thead>
                                            <tr class="text-xs font-weight-bold text-uppercase mb-1"
                                            style="color: #ffffff; background-color: #007ea7; font-size: 14px">
                                                <th scope="col" class="text-xs text-uppercase mb-1 table-cell text-white" style=" font-size: 12px; padding: 5px 20px" colspan="7">DECEASED</th>
                                            </tr>
                                            <tr class="text-xs font-weight-bold text-uppercase mb-1 text-gray-900"
                                            style=" font-size: 14px">
                                                <th scope="col" class="text-xs text-uppercase mb-1 table-cell text-gray-900" style=" font-size: 12px; padding:5px">#</th>
                                                <th scope="col" class="text-xs text-uppercase mb-1 table-cell text-gray-900" style=" font-size: 12px; padding:5px">NAME</th>
                                                <th scope="col" class="text-xs text-uppercase mb-1 table-cell text-gray-900" style=" font-size: 12px; padding:5px" >DATE BORN</th>
                                                <th scope="col" class="text-xs text-uppercase mb-1 table-cell text-gray-900" style=" font-size: 12px; padding:5px" >DATE DECEASED</th>
                                                <th scope="col" class="text-xs text-uppercase mb-1 table-cell text-gray-900" style=" font-size: 12px; padding:5px" >AGE</th>
                                                <th scope="col" class="text-xs text-uppercase mb-1 table-cell text-gray-900" style=" font-size: 12px; padding:5px" >RELIGION</th>
                                                <th scope="col" class="text-xs text-uppercase mb-1 table-cell text-gray-900" style=" font-size: 12px; padding:5px" ></th>
                                            </tr>
                                       </thead>
                                      <tbody id="table-body">
                                       
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                             <th  style="text-align: left;">
                                               
                                            </th>
                                             <th  style="text-align: left;">
                                               <span class="text-xs text-uppercase mb-1 table-cell text-gray-900" style=" font-size: 12px; ">NAME :</span>
                                            </th>
                                             <th  colspan="4" style="text-align: left;">
                                               <span class="text-xs text-uppercase mb-1 table-cell text-gray-900" style=" font-size: 12px; " id="DeceasedName"></span>
                                            </th>
                                            <th style="text-align: right;">
                                                <button class="btn btn-info" onclick="addRow()">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                                                        <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                                        <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                                                    </svg>
                                                </button>
                                            </th>
                                        </tr>
                                        <tr>
                                             <th  style="text-align: left;">
                                               
                                            </th>
                                             <th  style="text-align: left;">
                                               <span class="text-xs text-uppercase mb-1 table-cell text-gray-900" style=" font-size: 12px; ">Date Born :</span>
                                            </th>
                                             <th  colspan="5" style="text-align: left;">
                                               <span class="text-xs text-uppercase mb-1 table-cell text-gray-900" style=" font-size: 12px; " id="DeceaseddateBorn"></span>
                                            </th>
                                           
                                        </tr>
                                        <tr>
                                             <th  style="text-align: left;">
                                               
                                            </th>
                                             <th  style="text-align: left;">
                                               <span class="text-xs text-uppercase mb-1 table-cell text-gray-900" style=" font-size: 12px; ">Date Deceased :</span>
                                            </th>
                                             <th  colspan="5" style="text-align: left;">
                                               <span class="text-xs text-uppercase mb-1 table-cell text-gray-900" style=" font-size: 12px; " id="DeceaseddateDeceased"></span>
                                            </th>
                                           
                                        </tr>
                                        <tr>
                                             <th  style="text-align: left;">
                                               
                                            </th>
                                             <th  style="text-align: left;">
                                               <span class="text-xs text-uppercase mb-1 table-cell text-gray-900" style=" font-size: 12px; ">Age :</span>
                                            </th>
                                             <th  colspan="5" style="text-align: left;">
                                               <span class="text-xs text-uppercase mb-1 table-cell text-gray-900" style=" font-size: 12px; " id="DeceasedAge"></span>
                                            </th>
                                           
                                        </tr>
                                        <tr>
                                             <th  style="text-align: left;">
                                               
                                            </th>
                                             <th  style="text-align: left;">
                                               <span class="text-xs text-uppercase mb-1 table-cell text-gray-900" style=" font-size: 12px; ">Religion :</span>
                                            </th>
                                             <th  colspan="5" style="text-align: left;">
                                               <span class="text-xs text-uppercase mb-1 table-cell text-gray-900" style=" font-size: 12px; " id="DeceasedReligion"></span>
                                            </th>
                                           
                                        </tr>
                                    </tfoot>
                                    </table>
                                    
                                    <table class="table table-bordered" style="border:none; width: 100%;color: #333;"
                                                cellspacing="0" id="disInterment">
                                       <thead>
                                            <tr class="text-xs font-weight-bold text-uppercase mb-1"
                                            style="color: #ffffff; background-color: #007ea7; font-size: 14px">
                                                <th scope="col" class="text-xs text-uppercase mb-1 table-cell text-white" style=" font-size: 12px; padding: 5px 20px" colspan="7">INTERMENT DETAILS</th>
                                            </tr>
                                            <tr class="text-xs font-weight-bold text-uppercase mb-1 text-gray-900"
                                            style=" font-size: 14px">
                                                <th scope="col" class="text-xs text-uppercase mb-1 table-cell text-gray-900" style=" font-size: 12px; padding:5px">#</th>
                                                <th scope="col" class="text-xs text-uppercase mb-1 table-cell text-gray-900" style=" font-size: 12px; padding:5px">NAME OF PERSON/S INTERRED</th>
                                                <th scope="col" class="text-xs text-uppercase mb-1 table-cell text-gray-900" style=" font-size: 12px; padding:5px" >IIS NO.</th>
                                                <th scope="col" class="text-xs text-uppercase mb-1 table-cell text-gray-900" style=" font-size: 12px; padding:5px" >CLASSIFICATION</th>
                                                <th scope="col" class="text-xs text-uppercase mb-1 table-cell text-gray-900" style=" font-size: 12px; padding:5px" >DATE INTERMENT</th>
                                            </tr>
                                       </thead>
                                      <tbody id="disInterment_table-body">
                                       
                                    </tbody>
                                    </table>
                                   
                                    <table style="width:100%" class="table">
                                        <thead>
                                            <tr style="width: 30%;">
                                                <th scope="col" class="text-xs font-weight-bold text-uppercase mb-1"  style="background-color: #007ea7; color: white; padding:  5px 20px;  " colspan="3"><span><p style="font-size: 12px; margin: 0px;">ACCESSION</p></span></th>
                                            </tr>
                                            
                                       </thead>
                                       <tbody>
                                            <tr>
                                                <td scope="col" class="text-xs font-weight-bold text-uppercase mb-1 text-gray-900"  style="padding-left: 20px; width: 30%; " >
                                                    <span>
                                                      <p style="font-size: 12px; padding-top: 10px; padding-bottom: 10px; margin: 0;  ">DESIRED DATE AND TIME OF DISINTERMENT  ?</p>
                                                    </span>
                                                </td>
                                                
                                                <td scope="col" class="text-xs font-weight-bold text-uppercase mb-1"  style="padding-left: 20px; width: 30%; " >
                                                    <span>
                                                      <input type="text" class="text-xs text-uppercase mb-1 table-cell text-gray-900 form-control " id="date-input" style="margin-top: 8px; padding: 5px; width: 100%; font-size: 12px" placeholder="SELECT DISINTERMENT  DATE" disabled required><br>
                                                      <span id="holiday-display" style="color: red"></span>
                                                    </span>
                                                </td>
                                                
                                                <td scope="col" class="text-xs font-weight-bold text-uppercase mb-1"  style="padding-left: 20px; width: 30%; " >
                                                    <input type="time" class="text-xs text-uppercase mb-1 table-cell text-gray-900 form-control" style="margin-top: 8px; padding: 5px; width: 40%" id="time-input" required>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td scope="col" class="text-xs font-weight-bold text-uppercase mb-1 text-gray-900"  style="padding-left: 20px; width: 30%; " colspan="2">
                                                    <span>
                                                      <p style="font-size: 12px; padding-top: 10px; padding-bottom: 10px; margin: 0;  " class="text-gray-900">DESIRED DISINTERMENT  : <span id="desiredInterment-display" class="text-gray-900 font-weight-normal"></span></p> 
                                                    </span>
                                                </td>
                                                
                                                
                                            </tr>
                                          
                                       </tbody>
                                    </table>
                                    <table class="table text-xs font-weight-bold text-uppercase mb-1 text-gray-900" hidden>
                                        <thead>
                                            <tr>
                                                <th scope="col" class="text-xs text-uppercase mb-1 table-cell text-gray-900" style="font-size: 12px; padding:5px">
                                                    <p style="padding-left: 15px; ">FUNERAL SERVICE PROVIDER (If Body DISINTERMENT )</p>
                                                </th>
                                                <th scope="col" class="text-xs text-uppercase mb-1 table-cell text-gray-900" style=" font-size: 12px; padding:5px">
                                                    <p>NATURE OF COFFIN</p>
                                                </td>
                                                <th scope="col" class="text-xs text-uppercase mb-1 table-cell text-gray-900" style=" font-size: 12px; padding:5px">
                                                    <p>CREMATORIUM ( If Urn DISINTERMENT  )</p>
                                                </th>
                                                <th scope="col" class="text-xs text-uppercase mb-1 table-cell text-gray-900" style=" font-size: 12px; padding:5px">
                                                    <p>DATE CREMATED</p>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <input class="text-xs font-weight-bold text-gray-900 text-uppercase mb-1 form-control" id="Funeralserviceprovider" />
                                                </td>
                                                <td style="width: 20%">
                                                   <input type="radio" name="natureOfCoffin"  value="NONE" onclick="toggleInput11()" checked>
                                                    <span> NONE</span><br>
                                                   <input type="radio" name="natureOfCoffin"  value="PHILIPPINE STANDARDIZED" onclick="toggleInput11()">
                                                    <span> PHILIPPINE STANDARDIZED</span><br>
                                                    
                                                    <input type="radio" name="natureOfCoffin"  value="NON-TOXIC" onclick="toggleInput11()">
                                                    <span> NON-TOXIC</span><br>
                                                    
                                                    <input type="radio" name="natureOfCoffin"  value="BIODEGRABLE" onclick="toggleInput11()">
                                                    <span> BIODEGRABLE</span><br>
                                                    
                                                    <input type="radio" name="natureOfCoffin" value="OTHER" onclick="toggleInput11()">
                                                    <span> OTHER, PLEASE SPECIFY :</span>
                                                    <input type="text" id="natureOfCoffinOTHER" style="border: none; border-bottom: 1px solid gray; padding: 0px; outline: none; border-radius: 0px; display: none;">
                            
                            
                                                </td>
                                                <td>
                                                    <input id="Crematorium" class="text-xs font-weight-bold text-gray-900 text-uppercase mb-1 form-control" />
                                                </td>
                                                <td>
                                                    <input type="date" id="DateCremated" class="text-xs font-weight-bold text-gray-900 text-uppercase mb-1 form-control" />
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table style="width:100%" class="table">
                                        <thead>
                                            <tr style="width: 30%;">
                                                <th scope="col" class="text-xs font-weight-bold text-uppercase mb-1"  style="background-color: #007ea7; color: white; padding:  5px 20px;  " colspan="6"><span><p style="font-size: 12px; margin: 0px;">PARTICULAR</p></span></th>
                                            </tr>
                                            <tr>
                                                <th scope="col" class="text-xs font-weight-bold text-uppercase mb-1 text-gray-900"  style="padding-left: 20px; width: 30%; " >
                                                    <span>
                                                      <p style="font-size: 12px; margin: 0;  " >TYPE OF DISINTERMENT </p>
                                                    </span>
                                                </th>
                                                
                                                <th scope="col" class="text-xs font-weight-bold text-uppercase mb-1 text-gray-900"  style="padding-left: 20px; width: 30%; " colspan="2">
                                                    <span>
                                                      <p style="font-size: 12px; margin: 0;  ">TRANSFER </p>
                                                    </span>
                                                </th>
                                            </tr>
                                       </thead>
                                       <tbody>
                                           <tr>
                                                <td scope="col" class="text-xs font-weight-bold text-uppercase mb-1 text-gray-900"  style="padding-left: 20px; width: 30%;border-top: none " >
                                                    <select  id="intermentType" class="text-xs font-weight-bold text-uppercase mb-1 text-gray-900 form-control" onchange="toggleSelectsParticular()" required>
                                                         <option class="text-xs font-weight-bold text-uppercase mb-1 text-gray-900" Value="">NONE</option>
                                                         <option class="text-xs font-weight-bold text-uppercase mb-1 text-gray-900" Value="SINGLE">SINGLE</option>
                                                         <option class="text-xs font-weight-bold text-uppercase mb-1 text-gray-900" Value="DUAL">DUAL</option>
                                                         <option class="text-xs font-weight-bold text-uppercase mb-1 text-gray-900" Value="TRIPLE">TRIPLE</option>
                                                         <option class="text-xs font-weight-bold text-uppercase mb-1 text-gray-900" Value="One Set of Bones">One Set of Bones</option>
                                                         <option class="text-xs font-weight-bold text-uppercase mb-1 text-gray-900" Value="Two Sets of Bones">Two Sets of Bones</option>
                                                         <option class="text-xs font-weight-bold text-uppercase mb-1 text-gray-900" Value="Three Sets of Bones">Three Sets of Bones</option>
                                                         <option class="text-xs font-weight-bold text-uppercase mb-1 text-gray-900" Value="Four Sets of Bones">Four Sets of Bones</option>
                                                     </select>
                                                </td>
                                                <td scope="col" class="text-xs font-weight-bold text-uppercase mb-1 text-gray-900"  style="padding-left: 20px; width: 30%;border-top: none " >
                                                    <select  id="intermentTransfer" class="text-xs font-weight-bold text-uppercase mb-1 text-gray-900 form-control" onchange="toggleSelects()">
                                                         <option class="text-xs font-weight-bold text-uppercase mb-1 text-gray-900" Value="">NONE</option>
                                                         <option class="text-xs font-weight-bold text-uppercase mb-1 text-gray-900" Value="URN TRANSFER">URN TRANSFER</option>
                                                         <option class="text-xs font-weight-bold text-uppercase mb-1 text-gray-900" Value="BONE TRANSFER">BONE TRANSFER</option>
                                                     </select>
                                                </td>
                                                <td scope="col" class="text-xs font-weight-bold text-uppercase mb-1 text-gray-900"  style="padding-left: 20px; width: 30%;border-top: none " >
                                                    <select  id="Classification3"  style="font-size: 12px;" class="text-xs font-weight-bold text-uppercase mb-1 text-gray-900 form-control">
                                                         <option style="font-size: 12px;"  class="text-xs font-weight-bold text-uppercase mb-1 text-gray-900" Value="0">0</option>
                                                         <option style="font-size: 12px;"  class="text-xs font-weight-bold text-uppercase mb-1 text-gray-900" Value="1">1</option>
                                                         <option style="font-size: 12px;"  class="text-xs font-weight-bold text-uppercase mb-1 text-gray-900" Value="2">2</option>
                                                         <option style="font-size: 12px;"  class="text-xs font-weight-bold text-uppercase mb-1 text-gray-900" Value="3">3</option>
                                                         <option style="font-size: 12px;"  class="text-xs font-weight-bold text-uppercase mb-1 text-gray-900" Value="4">4</option>
                                                         <option style="font-size: 12px;"  class="text-xs font-weight-bold text-uppercase mb-1 text-gray-900" Value="5">5</option>
                                                         <option style="font-size: 12px;"  class="text-xs font-weight-bold text-uppercase mb-1 text-gray-900" Value="6">6</option>
                                                         <option style="font-size: 12px;"  class="text-xs font-weight-bold text-uppercase mb-1 text-gray-900" Value="7">7</option>
                                                         <option style="font-size: 12px;"  class="text-xs font-weight-bold text-uppercase mb-1 text-gray-900" Value="8">8</option>
                                                         <option style="font-size: 12px;"  class="text-xs font-weight-bold text-uppercase mb-1 text-gray-900" Value="9">9</option>
                                                         <option style="font-size: 12px;"  class="text-xs font-weight-bold text-uppercase mb-1 text-gray-900" Value="10">10</option>
                                                         <option style="font-size: 12px;"  class="text-xs font-weight-bold text-uppercase mb-1 text-gray-900" Value="11">11</option>
                                                         <option style="font-size: 12px;"  class="text-xs font-weight-bold text-uppercase mb-1 text-gray-900" Value="12">12</option>
                                                     </select>
                                                      <select  id="Classification2"  style="font-size: 12px;" class="text-xs font-weight-bold text-uppercase mb-1 text-gray-900 form-control">
                                                         <option style="font-size: 12px;"  class="text-xs font-weight-bold text-uppercase mb-1 text-gray-900" Value="0">0</option>
                                                         <option style="font-size: 12px;"  class="text-xs font-weight-bold text-uppercase mb-1 text-gray-900" Value="1">1</option>
                                                         <option style="font-size: 12px;"  class="text-xs font-weight-bold text-uppercase mb-1 text-gray-900" Value="2">2</option>
                                                         <option style="font-size: 12px;"  class="text-xs font-weight-bold text-uppercase mb-1 text-gray-900" Value="3">3</option>
                                                         <option style="font-size: 12px;"  class="text-xs font-weight-bold text-uppercase mb-1 text-gray-900" Value="4">4</option>
                                                         <option style="font-size: 12px;"  class="text-xs font-weight-bold text-uppercase mb-1 text-gray-900" Value="5">5</option>
                                                         <option style="font-size: 12px;"  class="text-xs font-weight-bold text-uppercase mb-1 text-gray-900" Value="6">6</option>
                                                         <option style="font-size: 12px;"  class="text-xs font-weight-bold text-uppercase mb-1 text-gray-900" Value="7">7</option>
                                                         <option style="font-size: 12px;"  class="text-xs font-weight-bold text-uppercase mb-1 text-gray-900" Value="8">8</option>
                                                         <option style="font-size: 12px;"  class="text-xs font-weight-bold text-uppercase mb-1 text-gray-900" Value="9">9</option>
                                                         <option style="font-size: 12px;"  class="text-xs font-weight-bold text-uppercase mb-1 text-gray-900" Value="10">10</option>
                                                         <option style="font-size: 12px;"  class="text-xs font-weight-bold text-uppercase mb-1 text-gray-900" Value="11">11</option>
                                                         <option style="font-size: 12px;"  class="text-xs font-weight-bold text-uppercase mb-1 text-gray-900" Value="12">12</option>
                                                     </select>
                                                </td>
                                                   
                                           </tr>
                                            
                                            <tr hidden>
                                                <td scope="col" class="text-xs font-weight-bold text-uppercase mb-1 text-gray-900"  style="padding-left: 20px; width: 5%; border-bottom: none" >
                                                     <select class="form-control" id="ClassificationClass">
                                                         <option>1</option>
                                                         <option>2</option>
                                                         <option>3</option>
                                                         <p class="mr-2 d-none d-lg-inline text-info small" id="userAccount123" hidden><?php echo $Name; ?></p>
                                                     </select>
                                                </td>
                                            </tr>
                                          
                                       </tbody>
                                    </table>
                                    <table style="width:100%" class="table" hidden>
                                        <thead>
                                            <tr style="width: 30%;">
                                                <th scope="col" class="text-xs font-weight-bold text-uppercase mb-1"  style="background-color: #007ea7; color: white; padding:  5px 20px;  " colspan="6"><span><p style="font-size: 12px; margin: 0px;">DISINTERMENT  DETAILS</p></span></th>
                                            </tr>
                                            
                                       </thead>
                                       <tbody>
                                            <tr>
                                                <td scope="col" class="text-xs font-weight-bold text-uppercase mb-1 text-gray-900"  style="padding-left: 20px; width: 30%; " >
                                                    <span>
                                                      <p style="font-size: 12px; padding-top: 10px; padding-bottom: 10px; margin: 0;  ">EXPECTED NUMBER OF GUEST BETWEEN ?</p>
                                                    </span>
                                                </td>
                                                
                                                <td scope="col" class="text-xs font-weight-bold text-uppercase mb-1"  style=" width: 8%; " >
                                                    <input type="number" id="expectednumber" class="text-xs text-uppercase mb-1 table-cell text-gray-900 form-control "  style=" display: inline-block; margin-top: 8px; padding: 5px; width: 100%; font-size: 12px"><br>
                                                </td>
                                                <td scope="col" class="text-xs font-weight-bold text-uppercase mb-1"  style="width: 8%; " >
                                                    <span class="text-xs text-uppercase mb-1 text-gray-900 " style=" display: inline-block; margin-top: 8px; padding: 5px; width: 100%; font-size: 12px; text-align: center"> TO </span><br>
                                                </td>
                                                <td scope="col" class="text-xs font-weight-bold text-uppercase mb-1"  style=" width: 8%; " >
                                                    <input type="number" id="To" class="text-xs text-uppercase mb-1 table-cell text-gray-900 form-control "  style="display: inline-block; margin-top: 8px; padding: 5px; width: 100%; font-size: 12px"><br>
                                                </td>
                                                
                                                <td scope="col" class="text-xs font-weight-bold text-uppercase mb-1"  style="padding-left: 20px; width: 25%; " >
                                                    <span class="text-xs text-uppercase mb-1 text-gray-900 " style=" display: inline-block; margin-top: 8px; padding: 5px; width: 100%; font-size: 12px; text-align: center"> WITH WATER DISPENSER ? </span><br>
                                                </td>
                                                <td scope="col" class="text-xs font-weight-bold text-uppercase mb-1"  style=" width: 40%; " >
                                                    <SELECT class="text-xs text-uppercase mb-1 table-cell text-gray-900 form-control " id="WithDispencer" style="display: inline-block; margin-top: 8px; padding: 5px; width: 100%; font-size: 12px">
                                                        <OPTION>
                                                            YES
                                                        </OPTION>
                                                        <OPTION>
                                                            NO
                                                        </OPTION>
                                                    </SELECT>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td scope="col" class="text-xs font-weight-bold text-uppercase mb-1 text-gray-900"  style="padding-left: 20px; width: 30%; " colspan="3">
                                                    <span>
                                                      <p style="font-size: 12px; padding-top: 10px; padding-bottom: 10px; margin: 0;  " class="text-gray-900">REQUESTED SONGS :  <input type="text" id="itemInput" placeholder="Enter an item" style="width: 40%; border: none; border-bottom: 1px solid; border-radius: 0px; outline:none" class="text-xs font-weight-bold text-gray-900 text-uppercase mb-1 form-control"> 
                                                    <button onclick="addItem()" class="btn btn-success" >+</button>
                                                      <span class="text-gray-900 font-weight-normal"> <ul id="itemList"></ul></span></p> 
                                                    </span>
                                                </td>
                                                 <td scope="col" class="text-xs font-weight-bold text-uppercase mb-1"  style="padding-left: 20px; " >
                                                    
                                                </td>
                                                <td scope="col" class="text-xs font-weight-bold text-uppercase mb-1"  style="padding-left: 20px; width: 25%; " >
                                                    <span class="text-xs text-uppercase mb-1 text-gray-900 " style=" display: inline-block; margin-top: 8px; padding: 5px; width: 100%; font-size: 12px; text-align: center"> ACOUSTIC INTEGRATION ? </span><br>
                                                </td>
                                                <td scope="col" class="text-xs font-weight-bold text-uppercase mb-1"  style="width: 40%; " >
                                                    <SELECT class="text-xs text-uppercase mb-1 table-cell text-gray-900 form-control " id="AccousticIntegration"  style="display: inline-block; margin-top: 8px; padding: 5px; width: 100%; font-size: 12px">
                                                        <OPTION>UPON ARRIVAL</OPTION>
                                                        <OPTION>AFTER</OPTION>
                                                        <OPTION>DURING</OPTION>
                                                        <OPTION>ENTIRE DURATION</OPTION>
                                                    </SELECT>
                                                </td>
                                            </tr>
                                            
                                            <tr>
                                                <td scope="col" class="text-xs font-weight-bold text-uppercase mb-1 text-gray-900"  style="padding-left: 20px; width: 30%; " >
                                                    <span>
                                                      <p style="font-size: 12px; padding-top: 10px; padding-bottom: 10px; margin: 0;  " class="text-gray-900">INDICATE IF CHAPEL WILL BE USED :  
                                                    </span>
                                                </td>
                                                <td scope="col" class="text-xs font-weight-bold text-uppercase mb-1"  colspan="2" >
                                                    <SELECT class="text-xs text-uppercase mb-1 table-cell text-gray-900 form-control " id="IndicateChapel" style="display: inline-block; margin-top: 8px; padding: 5px; width: 100%; font-size: 12px">
                                                        <OPTION>YES</OPTION>
                                                        <OPTION>NO</OPTION>
                                                    </SELECT>
                                                </td>
                                                 <td scope="col" class="text-xs font-weight-bold text-uppercase mb-1"  >
                                                    <span class="text-xs text-uppercase mb-1 text-gray-900 " style=" display: inline-block; margin-top: 8px; padding: 5px; width: 100%; font-size: 12px; text-align: center"> FOR </span><br>
                                                </td>
                                                <td scope="col" class="text-xs font-weight-bold text-uppercase mb-1"  style="padding-left: 20px; width: 25%; " >
                                                    <SELECT class="text-xs text-uppercase mb-1 table-cell text-gray-900 form-control " id="For" style="display: inline-block; margin-top: 8px; padding: 5px; width: 100%; font-size: 12px">
                                                        <OPTION>NONE</OPTION>
                                                        <OPTION>MASS</OPTION>
                                                        <OPTION>LAST VIEWING</OPTION>
                                                        <OPTION>BOTH</OPTION>
                                                    </SELECT>
                                                </td>
                                            </tr>
                                          
                                       </tbody>
                                    </table>
                                    <table style="width:100%" class="table" hidden>
                                        <thead>
                                            <tr style="width: 30%;">
                                                <th scope="col" class="text-xs font-weight-bold text-uppercase mb-1"  style="background-color: #007ea7; color: white; padding:  5px 20px;  " colspan="6"><span><p style="font-size: 12px; margin: 0px;">TRANSFER</p></span></th>
                                            </tr>
                                            
                                       </thead>
                                       <tbody>
                                            <tr>
                                                <td scope="col" class="text-xs font-weight-bold text-uppercase mb-1 text-gray-900"  style="padding-left: 20px; width: 25%; " >
                                                    <span>
                                                      <p style="font-size: 12px; padding-top: 10px; padding-bottom: 10px; margin: 0;  ">ORIGIN OF BODY / BONES / URNS</p>
                                                    </span>
                                                </td>
                                                
                                                <td scope="col" class="text-xs font-weight-bold text-uppercase mb-1"  style=" width: 25%; " >
                                                    <select id="cemeteryType" class="text-xs text-uppercase mb-1 table-cell text-gray-900 form-control" style="display: inline-block; margin-top: 8px; padding: 5px; width: 100%; font-size: 12px" onchange="toggleInput()">
                                                        <option value="private">NONE</option>
                                                        <option value="private">PRIVATE MEMORIAL PARK</option>
                                                        <option value="public">PUBLIC CEMETERY</option>
                                                        <option value="others">OTHERS, PLS SPECIFY</option>
                                                    </select>
                                                    <input type="text" id="otherCemetery" placeholder="PLEASE SPECIFY" style="width: 100%; border: none; border-bottom: 1px solid; border-radius: 0px; outline: none; display: none;">
                            
                                                </td>
                                                <td scope="col" class="text-xs font-weight-bold text-uppercase mb-1"  style="padding-left: 5px; width: 30%; " >
                                                   <p class="text-xs font-weight-bold text-uppercase mb-1 text-gray-900"  style="font-size: 12px; padding-top: 10px; padding-bottom: 10px; margin: 0;  ">NAME OF MEMORIAL PARK / CEMETERY</p>
                                                </td>
                                                <td scope="col" class="text-xs font-weight-bold text-uppercase mb-1"  style="padding-left: 5px; width: 25%; " >
                                                  <input type="text"  placeholder="PLEASE SPECIFY" id="Nameofmemorialpark" style="width: 100%; border: none; border-bottom: 1px solid; border-radius: 0px; outline:none;  margin: 0;" class="text-xs font-weight-bold text-gray-900 text-uppercase mb-1 form-control">
                                                </td>
                                            </tr>
                                             <tr>
                                                <td scope="col" class="text-xs font-weight-bold text-uppercase mb-1 text-gray-900"  style="padding-left: 20px; width: 25%; " >
                                                    
                                                </td>
                                                
                                                <td scope="col" class="text-xs font-weight-bold text-uppercase mb-1"  style=" width: 25%; " >
                                                   
                                                </td>
                                                <td scope="col" class="text-xs font-weight-bold text-uppercase mb-1"  style="padding-left: 5px; width: 30%; " >
                                                   <p class="text-xs font-weight-bold text-uppercase mb-1 text-gray-900"  style="font-size: 12px; padding-top: 10px; padding-bottom: 10px; margin: 0;  ">CONDITION OF LATTER (EMBALMED, ETC.)</p>
                                                </td>
                                                <td scope="col" class="text-xs font-weight-bold text-uppercase mb-1"  style="padding-left: 5px; width: 25%; " >
                                                  <input type="text"  placeholder="PLEASE SPECIFY" id="Conditionoflatter" style="width: 100%; border: none; border-bottom: 1px solid; border-radius: 0px; outline:none;  margin: 0;" class="text-xs font-weight-bold text-gray-900 text-uppercase mb-1 form-control">
                                                </td>
                                            </tr>
                                            
                                       </tbody>
                                    </table>
                                    <table style="width:100%" class="table" hidden>
                                        <thead>
                                            <tr style="width: 30%;">
                                                <th scope="col" class="text-xs font-weight-bold text-uppercase mb-1"  style="background-color: #007ea7; color: white; padding:  5px 20px;  " colspan="6"><span><p style="font-size: 12px; margin: 0px;">LOT LAY-OUT DETAILS</p></span></th>
                                            </tr>
                                            
                                       </thead>
                                       <tbody>
                                            <tr>
                                                <td scope="col" class="text-xs font-weight-bold text-uppercase mb-1 text-gray-900"  style="padding-left: 20px; width: 25%; " >
                                                    <span>
                                                      <p style="font-size: 12px; padding-top: 10px; padding-bottom: 10px; margin: 0;  ">PARTICULARS</p>
                                                    </span>
                                                </td>
                                                <td scope="col" class="text-xs font-weight-bold text-uppercase mb-1 text-gray-900"  style="padding-left: 20px; width: 25%; " >
                                                    <span>
                                                      <p style="font-size: 12px; padding-top: 10px; padding-bottom: 10px; margin: 0;  ">VOLUME</p>
                                                    </span>
                                                </td>
                                                <td scope="col" class="text-xs font-weight-bold text-uppercase mb-1 text-gray-900"  style="padding-left: 20px; width: 25%; " >
                                                    <span>
                                                      <p style="font-size: 12px; padding-top: 10px; padding-bottom: 10px; margin: 0;  ">ISSUE</p>
                                                    </span>
                                                </td>
                                                <td scope="col" class="text-xs font-weight-bold text-uppercase mb-1 text-gray-900"  style="padding-left: 20px; width: 25%; " >
                                                    <span>
                                                      <p style="font-size: 12px; padding-top: 10px; padding-bottom: 10px; margin: 0;  ">SERIES NO.</p>
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td scope="col" class="text-xs font-weight-bold text-uppercase mb-1 text-gray-900"  style="padding-left: 20px; width: 25%; " >
                                                    <span>
                                                      <p style="font-size: 12px; padding-top: 10px; padding-bottom: 10px; margin: 0;  "> EPITAPH REFERENCE NO. :</p>
                                                    </span>
                                                </td>
                                                <td scope="col" class="text-xs font-weight-bold text-uppercase mb-1 text-gray-900"  style="padding-left: 20px; width: 25%; " >
                                                     <input type="text"  placeholder="PLEASE SPECIFY" id="Volume1" style="width: 100%; border: none; border-bottom: 1px solid; border-radius: 0px; outline:none;  margin: 0;" class="text-xs font-weight-bold text-gray-900 text-uppercase mb-1 form-control">
                                                </td>
                                                <td scope="col" class="text-xs font-weight-bold text-uppercase mb-1 text-gray-900"  style="padding-left: 20px; width: 25%; " >
                                                     <input type="text"  placeholder="PLEASE SPECIFY" id="Volume2" style="width: 100%; border: none; border-bottom: 1px solid; border-radius: 0px; outline:none;  margin: 0;" class="text-xs font-weight-bold text-gray-900 text-uppercase mb-1 form-control">
                                                </td>
                                                <td scope="col" class="text-xs font-weight-bold text-uppercase mb-1 text-gray-900"  style="padding-left: 20px; width: 25%; " >
                                                    <input type="text"  placeholder="PLEASE SPECIFY" id="Volume3" style="width: 100%; border: none; border-bottom: 1px solid; border-radius: 0px; outline:none;  margin: 0;" class="text-xs font-weight-bold text-gray-900 text-uppercase mb-1 form-control">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td scope="col" class="text-xs font-weight-bold text-uppercase mb-1 text-gray-900"  style="padding-left: 20px; width: 25%; " >
                                                    <span>
                                                      <p style="font-size: 12px; padding-top: 10px; padding-bottom: 10px; margin: 0;  ">  MARKER REFERENCE NO. :</p>
                                                    </span>
                                                </td>
                                                <td scope="col" class="text-xs font-weight-bold text-uppercase mb-1 text-gray-900"  style="padding-left: 20px; width: 25%; " >
                                                     <input type="text"  placeholder="PLEASE SPECIFY" id="Volume4" style="width: 100%; border: none; border-bottom: 1px solid; border-radius: 0px; outline:none;  margin: 0;" class="text-xs font-weight-bold text-gray-900 text-uppercase mb-1 form-control">
                                                </td>
                                                <td scope="col" class="text-xs font-weight-bold text-uppercase mb-1 text-gray-900"  style="padding-left: 20px; width: 25%; " >
                                                     <input type="text"  placeholder="PLEASE SPECIFY" id="Volume5" style="width: 100%; border: none; border-bottom: 1px solid; border-radius: 0px; outline:none;  margin: 0;" class="text-xs font-weight-bold text-gray-900 text-uppercase mb-1 form-control">
                                                </td>
                                                <td scope="col" class="text-xs font-weight-bold text-uppercase mb-1 text-gray-900"  style="padding-left: 20px; width: 25%; " >
                                                    <input type="text"  placeholder="PLEASE SPECIFY" id="Volume6" style="width: 100%; border: none; border-bottom: 1px solid; border-radius: 0px; outline:none;  margin: 0;" class="text-xs font-weight-bold text-gray-900 text-uppercase mb-1 form-control">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td scope="col" class="text-xs font-weight-bold text-uppercase mb-1 text-gray-900"  style="padding-left: 20px; width: 28%; " >
                                                    <span>
                                                      <p style="font-size: 12px; padding-top: 10px; padding-bottom: 10px; margin: 0;  ">   OTHERS ( SPECIAL INSTRUCTIONS ) :</p>
                                                    </span>
                                                </td>
                                                <td scope="col" class="text-xs font-weight-bold text-uppercase mb-1 text-gray-900"  style="padding-left: 20px; width: 25%; " colspan="3">
                                                     <textarea class="form-control" id="SpecialInstractions" class="text-xs font-weight-bold text-gray-900 text-uppercase mb-1 form-control"></textarea>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td scope="col" class="text-xs font-weight-bold text-uppercase mb-1 text-gray-900"  style="padding-left: 20px; width: 28%; " >
                                                    <span>
                                                      <p style="font-size: 12px; padding-top: 10px; padding-bottom: 10px; margin: 0;  ">   EPITAPH REFERENCE NO. :</p>
                                                    </span>
                                                </td>
                                                <td scope="col" class="text-xs font-weight-bold text-uppercase mb-1 text-gray-900"  style="padding-left: 20px; width: 25%; " colspan="3">
                                                     <textarea class="form-control" id="Epitaph" class="text-xs font-weight-bold text-gray-900 text-uppercase mb-1 form-control"></textarea>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td scope="col" class="text-xs font-weight-bold text-uppercase mb-1 text-gray-900"  style="padding-left: 20px; width: 28%; " >
                                                    <span>
                                                      <p style="font-size: 12px; padding-top: 10px; padding-bottom: 10px; margin: 0;  ">    MARKER REFERENCE NO. :</p>
                                                    </span>
                                                </td>
                                                <td scope="col" class="text-xs font-weight-bold text-uppercase mb-1 text-gray-900"  style="padding-left: 20px; width: 25%; " colspan="3">
                                                     <textarea class="form-control" id="MarkerReference" class="text-xs font-weight-bold text-gray-900 text-uppercase mb-1 form-control"></textarea>
                                                </td>
                                                
                                            </tr>
                                            
                                       </tbody>
                                    </table>
                                    <table style="width:100%" class="table" hidden>
                                        <thead>
                                            <tr style="width: 30%;">
                                                <th scope="col" class="text-xs font-weight-bold text-uppercase mb-1"  style="background-color: #007ea7; color: white; padding:  5px 20px;  " colspan="2"><span><p style="font-size: 12px; margin: 0px;">CRYPT LAY-OUT DETAILS</p></span></th>
                                            </tr>
                                            
                                       </thead>
                                       <tbody>
                                            <tr>
                                                <td scope="col" class="text-xs font-weight-bold text-uppercase mb-1 text-gray-900" style="padding-left: 20px; width: 25%;" colspan="2">
                                                    <span>
                                                        <p style="font-size: 12px; padding-top: 10px; padding-bottom: 10px; margin: 0;">PLEASE SELECT THE SAMPLE CRYPT LAYOUT</p>
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td scope="col" class="text-xs font-weight-bold text-uppercase mb-1 text-gray-900" style="padding-left: 20px; width: 25%;">
                                                    <select id="layoutSelect" id="Samplecryptlayout" class="text-xs text-uppercase mb-1 table-cell text-gray-900 form-control" style="display: inline-block; margin-top: 8px; padding: 5px; width: 100%; font-size: 12px" onchange="updateImage()">
                                                    
                                                        <option value="name-dates">NAME AND DATES ONLY</option>
                                                        <option value="picture-name-dates">NAME AND DATES WITH PICTURE</option>
                                                        <option value="name-dates-epitaph">NAME AND DATES WITH EPITAPH</option>
                                                        <option value="name-dates-epitaph-chineseCharacter">NAME AND DATES WITH PICTURE (Chinese Character)</option>
                                                    </select>
                                                </td>
                                                
                                                <td scope="col" class="text-xs font-weight-bold text-uppercase mb-1 text-gray-900" style="padding-left: 20px;" rowspan="2">
                                                    <img id="sampleImage" src="img/nameAndDate.png" alt="Sample Image" style="width:100%">
                                                </td>
                                            </tr>
                                            
                                       </tbody>
                                    </table>
                                </div>
                      
                            <table class="table table-bordered" style="border:none; width: 100%;color: #333; float: right; margin-top: 50px"
                                        cellspacing="0"  >
                               <thead>
                                    <tr class="text-xs font-weight-bold text-uppercase mb-1"
                                    style="color: #ffffff; background-color: #007ea7; font-size: 14px">
                                        <th scope="col" class="text-xs font-weight-bold text-uppercase mb-1"  style="background-color: #007ea7; color: white; padding:  5px 20px;  " ><span><p style="font-size: 12px; margin: 0px;">No.</p></span></th>
                                        <th scope="col" class="text-xs font-weight-bold text-uppercase mb-1"  style="background-color: #007ea7; color: white; padding:  5px 20px;  " ><span><p style="font-size: 12px; margin: 0px;">Filename</p></span></th>
                                        <th scope="col"></th>
                                    </tr>
                               </thead>
                              <tbody>
                                <tr>
                                    <td class="text-xs text-uppercase mb-1 table-cell text-gray-900" style=" font-size: 12px; width: 3%">1</td>
                                    <td class="text-xs text-uppercase mb-1 table-cell text-gray-900" style=" font-size: 12px">Buyer Information Sheet</td>
                                    <td class="text-xs text-uppercase mb-1 table-cell text-gray-900" style=" font-size: 12px"> 
                                    
                                        <form action="download.php" method="post">
                                            <input type="hidden" name="customerCode1" id="customerCode1" >
                                            <input type="hidden" name="contractCode" id="contractCode" >
                                            <input type="hidden" name="fullname" id="fullname" >
                                            <input type="hidden" name="residenceAddress" id="residenceAddress" >
                                            <input type="hidden" name="billingAddress" id="billingAddress" >
                                            <input type="hidden" name="issuedAt" id="issuedAt" >
                                            <input type="hidden" name="issuedOn" id="issuedOn" value="issuedOn">
                                            <input type="hidden" name="sex" id="sex" value="sex">
                                            <input type="hidden" name="dateofBirth" id="dateofBirth" value="dateofBirth">
                                            <input type="hidden" name="citizenship" id="citizenship" value="citizenship">
                                            <input type="hidden" name="height" id="height" value="height">
                                            <input type="hidden" name="weight" id="weight" value="weight">
                                            <input type="hidden" name="sss" id="sss" value="sss">
                                            <input type="hidden" name="HFMF" id="HFMF" value="HFMF">
                                            <input type="hidden" name="TIN" id="TIN" value="TIN">
                                            <input type="hidden" name="NBI" id="NBI" value="NBI">
                                            <input type="hidden" name="maritalStatus" id="maritalStatus" value="maritalStatus">
                                            <input type="hidden" name="preNuptial" id="preNuptial" value="preNuptial">
                                            <input type="hidden" name="residentialPhone" id="residentialPhone" value="residentialPhone">
                                            <input type="hidden" name="mobilePhone" id="mobilePhone" value="mobilePhone">
                                            <input type="hidden" name="businessPhone" id="businessPhone" value="businessPhone">
                                            <input type="hidden" name="emailAddress" id="emailAddress" value="emailAddress">
                                            <input type="hidden" name="spouseName" id="spouseName" value="spouseName">
                                            <input type="hidden" name="spouseOccupation" id="spouseOccupation" value="spouseOccupation">
                                            <input type="hidden" name="fatherName" id="fatherName" value="fatherName">
                                            <input type="hidden" name="fatherOccupation" id="fatherOccupation" value="fatherOccupation">
                                            <input type="hidden" name="motherName" id="motherName" value="motherName">
                                            <input type="hidden" name="motherOccupation" id="motherOccupation" value="motherOccupation">
                                            <input type="hidden" name="childrenName" id="childrenName" value="childrenName">
                                            <input type="hidden" name="dateOfBirthChildren" id="dateOfBirthChildren" value="dateOfBirthChildren">
                                            <input type="hidden" name="age" id="age" value="age">
                                            <input type="hidden" name="employmentStatus" id="employmentStatus" value="employmentStatus">
                                            <input type="hidden" name="sourceOfIncome" id="sourceOfIncome" value="sourceOfIncome">
                                            <input type="hidden" name="employerBusinessName" id="employerBusinessName" value="employerBusinessName">
                                            <input type="hidden" name="natureBusiness" id="natureBusiness" value="natureBusiness">
                                            <input type="hidden" name="positionInCompany" id="positionInCompany" value="positionInCompany">
                                            <input type="hidden" name="employmentDate" id="employmentDate" value="employmentDate">
                                            <input type="hidden" name="memorialPlot" id="memorialPlot" value="memorialPlot">
                                            <input type="hidden" name="namememorialPlot" id="namememorialPlot" value="namememorialPlot">
                                            <input type="hidden" name="sincememorialPlot" id="sincememorialPlot" value="sincememorialPlot">
                                            <input type="hidden" name="locationmemorialPlot" id="locationmemorialPlot" value="locationmemorialPlot">
                                            <input type="hidden" name="lotID01" id="lotID01" value="lotID1">
                                            <input type="hidden" name="lotArea" id="lotArea" value="lotArea">
                                            <input type="hidden" name="section01" id="section01" value="section">
                                            <input type="hidden" name="lotphase" id="lotphase" value="lotphase">
                                            <input type="hidden" name="lotclass" id="lotclass" value="lotclass">
                                            <input type="hidden" name="lotTCP" id="lotTCP" value="lotTCP">
                                            <input type="hidden" name="lotno" id="lotno" value="lotno">
                                            <input type="hidden" name="lotTerms" id="lotTerms" value="lotTerms">
                                            <input type="hidden" name="initialPayment" id="initialPayment" value="initialPayment">
                                            <input type="hidden" name="cryptID" id="cryptID" value="cryptID">
                                            <input type="hidden" name="cryptPhase" id="cryptPhase" value="cryptPhase">
                                            <input type="hidden" name="cryptLevel" id="cryptLevel" value="cryptLevel">
                                            <input type="hidden" name="cryptArea" id="cryptArea" value="cryptArea">
                                            <input type="hidden" name="cryptSection" id="cryptSection" value="cryptSection">
                                            <input type="hidden" name="cryptColumn" id="cryptColumn" value="cryptColumn">
                                            <input type="hidden" name="unitNo" id="unitNo" value="unitNo">
                                            <input type="hidden" name="cryptClass" id="cryptClass" value="cryptClass">
                                            <input type="hidden" name="cryptTerms" id="cryptTerms" value="cryptTerms">
                                            <input type="hidden" name="paymentDuedate" id="paymentDuedate" value="paymentDuedate">
                                            <input type="hidden" name="listprice01" id="listprice01" value="listprice">
                                             <input type="hidden" name="lottype" id="lottype" value="lottype">
                                              <input type="hidden" name="date" id="date" value="date">
                                              <input type="hidden" name="residenceSince" id="residenceSince" value="residenceSince">
                                               <input type="hidden" name="dateCreated" id="dateCreated" >
                                            <button type="submit" class="text-info" style="margin: 0 auto; display: block; border: none; background-color: transparent; text-align: center">
                                                <i class="fas fa-download"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-xs text-uppercase mb-1 table-cell text-gray-900" style=" font-size: 12px; width: 3%">2</td>
                                    <td class="text-xs text-uppercase mb-1 table-cell text-gray-900" style="font-size: 12px">Purchase Agreement</td>
                                    <td class="text-xs text-uppercase mb-1 table-cell text-gray-900" style=" font-size: 12px">
                                          <form action="downloadPurchaseAgreement.php" method="post">
                                             <input type="hidden" name="citizenship1" id="citizenship1" value="SAMPLE DATA">
                                            <input type="hidden" name="customername1" id="customername1" value="SAMPLE DATA">
                                            <input type="hidden" name="nameofspouse1" id="nameofspouse1" value="SAMPLE DATA">
                                            <input type="hidden" name="customeraddress1" id="customeraddress1" value="SAMPLE DATA">
                                            <input type="hidden" name="lotPhase1" id="lotPhase1" value="SAMPLE DATA">
                                            <input type="hidden" name="lotarea1" id="lotarea1" value="SAMPLE DATA">
                                            <input type="hidden" name="lotsection1" id="lotsection1" value="SAMPLE DATA">
                                            <input type="hidden" name="lotID1" id="lotID1" value="SAMPLE DATA">
                                            <input type="hidden" name="lottype1" id="lottype1" value="SAMPLE DATA">
                                            <input type="hidden" name="lotclasification1" id="lotclasification1" value="SAMPLE DATA">
                                            <input type="hidden" name="cryptphase1" id="cryptphase1" value="SAMPLE DATA">
                                            <input type="hidden" name="cryptlevel1" id="cryptlevel1" value="SAMPLE DATA">
                                            <input type="hidden" name="cryptarea1" id="cryptarea1" value="SAMPLE DATA">
                                            <input type="hidden" name="cryptsection1" id="cryptsection1" value="SAMPLE DATA">
                                            <input type="hidden" name="cryptcolumn1" id="cryptcolumn1" value="SAMPLE DATA">
                                            <input type="hidden" name="cryptunitno1" id="cryptunitno1" value="SAMPLE DATA">
                                            <input type="hidden" name="cryptclasification1" id="cryptclasification1" value="SAMPLE DATA">
                                            <input type="hidden" name="cryptID1" id="cryptID1" value="SAMPLE DATA">
                                            <input type="hidden" name="terms1" id="terms1" value="SAMPLE DATA">
                                            <input type="hidden" name="vat1" id="vat1" value="SAMPLE DATA">
                                            <input type="hidden" name="tcp1" id="tcp1" value="SAMPLE DATA">
                                            <input type="hidden" name="llp1" id="llp1" value="SAMPLE DATA">
                                            <input type="hidden" name="discount1" id="discount1" value="SAMPLE DATA">
                                            <button type="submit" class="text-info" style="margin: 0 auto; display: block; border: none; background-color: transparent; text-align: center">
                                                <i class="fas fa-download"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            </tbody>
                            </table> 
                       
                        </div> 
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

    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script>                        
        // Basic custom sanitation function to prevent XSS attacks
        function sanitizeInput(input) {
            return input.replace(/[&<>"'/]/g, function(match) {
                switch (match) {
                    case '&':
                        return '&amp;';
                    case '<':
                        return '&lt;';
                    case '>':
                        return '&gt;';
                    case '"':
                        return '&quot;';
                    case "'":
                        return '&#39;';
                    case '/':
                        return '&#x2F;';
                    default:
                        return match;
                }
            });
        }
        
        var disIntermentTable = $('#disInterment').DataTable({
            searching: true, // Enable search functionality
            // You can add more options here as needed
            columnDefs: [
                {
                    targets: [0, 1, 2, 3, 4],
                    className: 'text-xs text-uppercase mb-1 table-cell ',
                    render: function(data, type, row) {
                        return '<span style="font-size: 12px" class="text-gray-900">' + sanitizeInput(data) + '</span>';
                    }
                },
            ]
        });
        var historyTable = $('#history').DataTable({
            searching: true, // Enable search functionality
            // You can add more options here as needed
            columnDefs: [
                { targets: [0], visible: false },
                {
                    targets: [2, 3, 4, 6],
                    className: 'text-xs text-uppercase mb-1 table-cell ',
                    render: function(data, type, row) {
                        return '<span style="font-size: 14px" class="text-gray-900">' + sanitizeInput(data) + '</span>';
                    }
                },
                {
                    targets: [5],
                    className: 'text-xs text-uppercase mb-1 table-cell',
                    render: function(data, type, row) {
                        // Format the data as currency with peso sign and commas
                        var currencyFormatted = parseFloat(data).toFixed(2);
                        return '<span style=" font-size: 14px" class="text-gray-900">₱ ' + currencyFormatted.replace(/\B(?=(\d{3})+(?!\d))/g, ",") + '</span>';
                    }
                },
               
            ]
        });
        function formatDate(inputDate) {
            const options = { year: 'numeric', month: 'long', day: 'numeric' };
            const formattedDate = new Date(inputDate).toLocaleDateString('en-US', options);
            return formattedDate.toUpperCase(); // Convert to uppercase
        }
        
        function decodeHTMLEntities(text) {
            return text.replace(/&#x2F;/g, '/'); // Replace HTML entity for '/'
        }
        
        function populateDisIntermentTable(data) {
            // Clear existing data in the table
            disIntermentTable.clear().draw();
        
            // Loop through the data and add rows to DataTable
            $.each(data, function(index, item) {
                var sanitizedItem = {
                    id: sanitizeInput(item.id),
                    deceasedName: sanitizeInput(item.deceasedName),
                    ISS_no: sanitizeInput(item.ISS_no),
                    classification: sanitizeInput(item.classification),
                    Intermentdate: formatDate(decodeHTMLEntities(item.intermentdate))
                };
         
                // Use DataTables API to add data
                disIntermentTable.row.add([
                    sanitizedItem.id,
                    sanitizedItem.deceasedName,
                    sanitizedItem.ISS_no,
                    sanitizedItem.classification,
                    sanitizedItem.Intermentdate,
                ]).draw(false);
            });
        }
        
        function populateTable(data) {
            // Clear existing data in the table
            historyTable.clear().draw();
        
            // Loop through the data and add rows to DataTable
            $.each(data, function(index, item) {
                var sanitizedItem = {
                    id: sanitizeInput(item.id),
                    customerCode: sanitizeInput(item.customerCode),
                    Customername: sanitizeInput(item.customername),
                    Area: sanitizeInput(item.area),
                    totalContractPrice: item.totalcontractprice,
                    Intermentdate: formatDate(decodeHTMLEntities(item.intermentdate))
                };
        
                // Use DataTables API to add data
                historyTable.row.add([
                    sanitizedItem.id,
                    getActionButton(sanitizedItem.customerCode),
                    sanitizedItem.customerCode,
                    sanitizedItem.Customername,
                    sanitizedItem.Area,
                    sanitizedItem.totalContractPrice,
                    sanitizedItem.Intermentdate,
                ]).draw(false);
            });
        }
            // Fetch ledger data for a specific account
            function fetchLedgerAccount(accountId) {
            $.ajax({
              url: 'FETCH.Validation_SalesLedgerHistory.php',
              method: 'POST',
              data: {
                accountId: accountId
              },
              dataType: 'json', // Set the expected response data type as JSON
              success: function(response) {
                if (response.length > 0) {
                    var data = response[0]; // Retrieve the first item in the response array
                    $('#clientName').text(data.customerName);
                    var dateString = data.paymentDueDate; // Assuming data.paymentDueDate is your date string
                    
                    // Parse the date string into a Date object
                    var date = new Date(dateString);
                    
                    // Format the date using Intl.DateTimeFormat with long date options
                    var options = { year: 'numeric', month: 'long', day: 'numeric' };
                    var longDate = new Intl.DateTimeFormat('en-US', options).format(date);
                    
                    // Update the content of the #reserveDate element with the formatted long date
                    $('#reserveDate').text(longDate);
                    $('#terms').text(data.terms);
                    var listPrice = data.listprice;
                    var vatSubtotal1 = data.vatSubtotal;
                    var PCF1 = data.PCF;
                    var subtotalDiscount1 = data.subtotalDiscount;
                    var TCP1 = data.TCP;
                    var downpayment1 = data.downpayment;
                    var fullDownpayment1 = data.fullDownpayment;
                    // Format the list price as currency with peso sign and commas
                    var formattedListPrice = new Intl.NumberFormat('en-PH', {
                        style: 'currency',
                        currency: 'PHP'
                    }).format(listPrice);
                    var formattedvatSubtotal1 = new Intl.NumberFormat('en-PH', {
                        style: 'currency',
                        currency: 'PHP'
                    }).format(vatSubtotal1);
                    var formattedPCF1 = new Intl.NumberFormat('en-PH', {
                        style: 'currency',
                        currency: 'PHP'
                    }).format(PCF1);
                    var formattedsubtotalDiscount1 = new Intl.NumberFormat('en-PH', {
                        style: 'currency',
                        currency: 'PHP'
                    }).format(subtotalDiscount1);
                    var formattedTCP1 = new Intl.NumberFormat('en-PH', {
                        style: 'currency',
                        currency: 'PHP'
                    }).format(TCP1);
                    var formatteddownpayment1 = new Intl.NumberFormat('en-PH', {
                        style: 'currency',
                        currency: 'PHP'
                    }).format(downpayment1);
                    var formattedfullDownpayment1 = new Intl.NumberFormat('en-PH', {
                        style: 'currency',
                        currency: 'PHP'
                    }).format(fullDownpayment1);
                    
                    var formattedListPriceWithSpace = '₱ ' + formattedListPrice.substring(1);
                     var formattedListPriceWithSpace1 = formattedListPrice.substring(1);
                    var formattedvatSubtotal1WithSpace = '₱ ' + formattedvatSubtotal1.substring(1);
                    var formattedPCF1WithSpace = '₱ ' + formattedPCF1.substring(1);
                    var formattedsubtotalDiscount1WithSpace = '₱ ' + formattedsubtotalDiscount1.substring(1);
                    var formattedTCP1WithSpace = '₱ ' + formattedTCP1.substring(1);
                     var formattedTCP12WithSpace = formattedTCP1.substring(1);
                    var formatteddownpayment1WithSpace = '₱ ' + formatteddownpayment1.substring(1);
                    var formattedfullDownpayment1WithSpace = '₱ ' + formattedfullDownpayment1.substring(1);
                    $('#listprice').text(formattedListPriceWithSpace);
                    $('#VAT').text(data.VAT);
                    $('#vatSubtotal').text(formattedvatSubtotal1WithSpace);
                    $('#PCF').text(formattedPCF1WithSpace);
                    $('#discount').text(data.discount);
                    $('#subtotalDiscount').text(formattedsubtotalDiscount1WithSpace);
                    $('#TCP').text(formattedTCP1WithSpace);
                    $('#downpayment').text(formatteddownpayment1WithSpace);
                    $('#fullDownpayment').text(formattedfullDownpayment1WithSpace);
                    
                    $('#lotID').text(data.lotID);
                    $('#section').text(data.section);
                    $('#numberoflots').text(data.numberoflots);
                    $('#area').text(data.area);
                    $('#phase').text(data.phase);
                    $('#type').text(data.type);
                    $('#classification').text(data.classification);
                    
                    $('#fullname').val(data.customerName);
                    
                    $('#COO').text(data.COO);
                    $('#contractCode1').text(data.contractCode);
                    $('#contractCode').val(data.contractCode);
                    $('#customerCode1').val(data.customerCode);
                    $('#residenceAddress').val(data.residenceAddress);
                    $('#billingAddress').val(data.billingAddress);
                    $('#issuedAt').val(data.issuedAt);
                    $('#issuedOn').val(data.issuedOn);
                    $('#sex').val(data.sex);
                    $('#dateofBirth').val(data.dateofBirth);
                    $('#citizenship').val(data.citizenship);
                    $('#height').val(data.height);
                    $('#weight').val(data.weight);
                    $('#sss').val(data.sss);
                    $('#HFMF').val(data.HFMF);
                    $('#TIN').val(data.TIN);
                    $('#NBI').val(data.NBI);
                    $('#maritalStatus').val(data.maritalStatus);
                    $('#preNuptial').val(data.preNuptial);
                    $('#residentialPhone').val(data.residentialPhone);
                    $('#mobilePhone').val(data.mobilePhone);
                    $('#businessPhone').val(data.businessPhone);
                    $('#emailAddress').val(data.emailAddress);
                    $('#spouseName').val(data.spouseName);
                    $('#spouseOccupation').val(data.spouseOccupation);
                    $('#fatherName').val(data.fatherName);
                    $('#fatherOccupation').val(data.fatherOccupation);
                    $('#motherName').val(data.motherName);
                    $('#motherOccupation').val(data.motherOccupation);
                    $('#childrenName').val(data.childrenName);
                    $('#dateOfBirthChildren').val(data.dateOfBirthChildren);
                    $('#age').val(data.age);
                    $('#employmentStatus').val(data.employmentStatus);
                    $('#sourceOfIncome').val(data.sourceOfIncome);
                    $('#employerBusinessName').val(data.employerBusinessName);
                    $('#natureBusiness').val(data.natureBusiness);
                    $('#positionInCompany').val(data.positionInCompany);
                    $('#employmentDate').val(data.employmentDate);
                    $('#memorialPlot').val(data.memorialPlot);
                    $('#namememorialPlot').val(data.namememorialPlot);
                    $('#sincememorialPlot').val(data.sincememorialPlot);
                    $('#locationmemorialPlot').val(data.locationmemorialPlot);
                    $('#lotID01').val(data.lotID);
                    $('#lotArea').val(data.area);
                    $('#section01').val(data.section);
                    $('#lotphase').val(data.phase);
                    $('#lottype').val(data.type);
                    $('#lotclass').val(data.classification);
                    $('#lotno').val(data.numberoflots);
                    $('#lotTerms').val(data.lotTerms);
                    var downpayment11 = data.downpayment;
                    var formatteddownpayment11 = new Intl.NumberFormat('en-PH', {
                        style: 'currency',
                        currency: 'PHP'
                    }).format(downpayment11);
                    var formatteddownpayment11WithSpace = formatteddownpayment11.substring(1);
                    document.getElementById('initialPayment').value = formatteddownpayment11WithSpace;
                    $('#cryptID').val(data.cryptID);
                    $('#cryptPhase').val(data.cryptPhase);
                    $('#cryptLevel').val(data.cryptLevel);
                    $('#cryptArea').val(data.cryptArea);
                    $('#cryptSection').val(data.cryptSection);
                    $('#cryptColumn').val(data.cryptColumn);
                    $('#unitNo').val(data.unitNo);
                    $('#cryptClass').val(data.cryptClass);
                     document.getElementById('lotTCP').value = formattedTCP12WithSpace;
                    $('#cryptTerms').val(data.cryptTerms);
                    $('#paymentDuedate').val(data.paymentDueDate);
                    $('#residenceSince').val(data.residenceSince);
                    $('#dateCreated').val(data.dateCreated);
                    document.getElementById('listprice01').value = formattedListPriceWithSpace1;
                    
                     $('#lotID1').val(data.lotID);
                    $('#lotarea1').val(data.area);
                    $('#lotsection1').val(data.section);
                    $('#lotPhase1').val(data.phase);
                    $('#lottype1').val(data.type);
                    $('#lotclasification1').val(data.classification);
                     $('#cryptID1').val(data.cryptID);
                    $('#cryptphase1').val(data.cryptPhase);
                    $('#cryptlevel1').val(data.cryptLevel);
                    $('#cryptarea1').val(data.cryptArea);
                    $('#cryptsection1').val(data.cryptSection);
                    $('#cryptcolumn1').val(data.cryptColumn);
                    $('#cryptunitno1').val(data.unitNo);
                    $('#cryptclasification1').val(data.cryptClass);
                } else {
                  // Handle case when no data is returned
                }
              },
              error: function(xhr, error) {
                // Handle the error gracefully
                console.error('Fetch Ledger Account Error:', status, error);
                // Display an error message to the user or perform any necessary actions
              }
            });
             
            $.ajax({
                url: "FETCH.Validation_deceased.php", // Replace with your actual server endpoint URL
                method: "POST",
                dataType: "json",
                data: {
                    accountId: accountId // Corrected value here
                },
                success: function(data) {
                    populateDisIntermentTable(data); // Populate the table with fetched data
                    console.log("Original intermentDate:", data);
                   
                },
                error: function(error) {
                    console.log("Error fetching data: " + error);
                }
            }); 
          }
            function getActionButton(customerCode) {
                
                    return `<button class="text-info btndownloadModal" style="margin: 0 auto; display: block; border: none; background-color: transparent;" data-account-id="${customerCode}" data-toggle="modal" data-target="#downloadModal"><i class="fas fa-download"></i></button>`;
                
            }
           
            $.ajax({
                url: "Fetch.Validation_Disintermentrequest.php", // Replace with your actual server endpoint URL
                method: "POST",
                dataType: "json",
                success: function(data) {
                    populateTable(data); // Populate the table with fetched data
                },
                error: function(error) {
                    console.log("Error fetching data: " + error);
                }
            }); 
                // Handle click event on the viewLedgerBtn
           
                // Handle click event on the viewLedgerBtn
            $(document).on('click', '.btnviewModal', function() {
                const accountId = $(this).data('account-id');
                openModal(accountId);
                document.getElementById("downloadblebtn").style.display = "none";
                document.getElementById("downloadbleform").style.display = "none";
                document.getElementById("computebtn").style.display = "none";
            });
            $(document).ready(function() {
              $(document).on('click', '.btndownloadModal', function() {
                const accountId = $(this).data('account-id');
                openModal(accountId);
                document.getElementById("downloadblebtn").style.display = "block";
              });
            });
                // Open the modal and fetch ledger data for the selected account
            function openModal(accountId) {
                $('#customerCode').text(accountId);
                fetchLedgerAccount(accountId);
                balanceComputation(accountId);
            }
            function balanceComputation(accountId) {
                // Define an array of elements and corresponding endpoint URLs
                const elements = [
                    { id: 'remainingMonths', url: 'FETCH.Validation_SalesRemainingMonthsBalance.php' },
                    { id: 'amountPaid', url: 'FETCH.Validation_SalesAmountPaid.php' },
                    { id: 'remainingBalance', url: 'FETCH.Validation_SalesRemainingBalance.php' },
                    { id: 'monthlyPayment', url: 'FETCH.Validation_SalesMonthlyPayment.php' },
                    { id: 'noMonths', url: 'FETCH.Validation_SalesNumberMonths.php' }
                ];
        
                // Loop through the elements array and make AJAX requests for each element
                elements.forEach(element => {
                    $.ajax({
                        url: element.url,
                        method: "POST",
                        dataType: "json",
                        data: {
                            accountId: accountId // Corrected value here
                        },
                       success: function(data) {
                            if (element.id === 'amountPaid' || element.id === 'remainingBalance' || element.id === 'monthlyPayment') {
                                if (typeof data.salesRevenue === 'number' && !isNaN(data.salesRevenue)) {
                                    const formattedAmountPaid = formatCurrency(data.salesRevenue);
                                    $('#' + element.id).text(formattedAmountPaid);
                                } else {
                                    console.log("Invalid amountPaid value:", data.salesRevenue);
                                    $('#' + element.id).text("₱ 0.00");
                                }
                            } else {
                                const salesRevenue = data.salesRevenue;
                                const displayText = salesRevenue === 0 ? 'MONTH' : 'MONTHS';
                                $('#' + element.id).text(salesRevenue + ' ' + displayText);
                            }
                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                            console.log("Error fetching data for " + element.id + ": " + textStatus, errorThrown);
                             console.log(jqXHR.responseText);
                             console.log("accountId:", accountId);
                        }
                    });
                });
            }
        
            // Function to format currency with peso sign and comma, with space
            function formatCurrency(amount) {
                const formatter = new Intl.NumberFormat('en-PH', {
                    style: 'decimal',
                    minimumFractionDigits: 2
                });
        
                return '₱ ' + formatter.format(amount);
            }
    </script>
    <!-- Page level custom scripts -->
    <script>
    // Call the dataTables jQuery plugin
    $(document).ready(function() {
    $('#history').DataTable();
    });
    </script>
    <script>
    $(document).ready(function() {
        // Remove .php extension from the URL
        var currentURL = window.location.href;
        var newURL = currentURL.replace(".php", "");
        history.replaceState(null, null, newURL);
    });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const downloadButton = document.getElementById('downloadButton');
            if (downloadButton) {
                downloadButton.addEventListener('click', function() {
                    
                    // Redirect the user to the PHP script for download
                    window.location.href = 'download.php';
                });
            }
        });
    </script>
     <script>
        function toggleSelects() {
            var intermentTransfer = document.getElementById("intermentTransfer");
            var classification2 = document.getElementById("Classification2");
            var classification3 = document.getElementById("Classification3");
            if (intermentTransfer.value === "URN TRANSFER") {
                classification2.style.display = "block";
                classification3.style.display = "none";
            } else if (intermentTransfer.value === "BONE TRANSFER") {
                classification2.style.display = "none";
                classification3.style.display = "block";
            } else{
                classification2.style.display = "none";
                classification3.style.display = "none";
            }
        }

        // Initially, call toggleSelects to set the initial state
        toggleSelects();
    </script>
        <script>
        function toggleSelectsParticular() {
            var intermentType = document.getElementById("intermentType");
            var desiredInterment1 = document.getElementById("desiredInterment-display");
            var particularAmountPaid = document.getElementById("ParticularamountPaid");
            console.log("intermentType.value:", intermentType.value);
            console.log("desiredInterment.textContent:", desiredInterment1.textContent);
    
            if (intermentType.value === "SINGLE" && (desiredInterment1.textContent  === "REGULAR DAY" || desiredInterment1.textContent  === "REGULAR DAY NIGHT/DAWN (6:00 P.M. - 8:30 A.M.)" )) {
                particularAmountPaid.innerHTML = "21000";
            } else if (intermentType.value === "SINGLE" && (desiredInterment1.textContent  === "SPECIAL DAY (WEEKEND)" || desiredInterment1.textContent  === "SPECIAL DAY (HOLIDAYS)" || desiredInterment1.textContent  === "SPECIAL DAY (HOLIDAYS) NIGHT/DAWN (6:00 P.M. - 8:30 A.M.)" || desiredInterment1.textContent  === "SPECIAL DAY (WEEKEND) NIGHT/DAWN (6:00 P.M. - 8:30 A.M.)")) {
                particularAmountPaid.innerHTML = "24000";
            } else if (intermentType.value === "DUAL" && (desiredInterment1.textContent  === "REGULAR DAY"  || desiredInterment1.textContent  === "REGULAR DAY NIGHT/DAWN (6:00 P.M. - 8:30 A.M.)")) {
                particularAmountPaid.innerHTML = "26000";
            } else if (intermentType.value === "DUAL" && (desiredInterment1.textContent  === "SPECIAL DAY (WEEKEND)" || desiredInterment1.textContent  === "SPECIAL DAY (HOLIDAYS)" || desiredInterment1.textContent  === "SPECIAL DAY (HOLIDAYS) NIGHT/DAWN (6:00 P.M. - 8:30 A.M.)" || desiredInterment1.textContent  === "SPECIAL DAY (WEEKEND) NIGHT/DAWN (6:00 P.M. - 8:30 A.M.)")) {
                particularAmountPaid.innerHTML = "30000";
            } else if (intermentType.value === "TRIPLE" && (desiredInterment1.textContent  === "REGULAR DAY"  || desiredInterment1.textContent  === "REGULAR DAY NIGHT/DAWN (6:00 P.M. - 8:30 A.M.)")) {
                particularAmountPaid.innerHTML = "36000";
            } else if (intermentType.value === "TRIPLE" && (desiredInterment1.textContent  === "SPECIAL DAY (WEEKEND)" || desiredInterment1.textContent  === "SPECIAL DAY (HOLIDAYS)" || desiredInterment1.textContent  === "SPECIAL DAY (HOLIDAYS) NIGHT/DAWN (6:00 P.M. - 8:30 A.M.)" || desiredInterment1.textContent  === "SPECIAL DAY (WEEKEND) NIGHT/DAWN (6:00 P.M. - 8:30 A.M.)")) {
                particularAmountPaid.innerHTML = "42000";
            } else if (intermentType.value === "One Set of Bones" && (desiredInterment1.textContent  === "REGULAR DAY"  || desiredInterment1.textContent  === "REGULAR DAY NIGHT/DAWN (6:00 P.M. - 8:30 A.M.)")) {
                particularAmountPaid.innerHTML = "18000";
            } else if (intermentType.value === "One Set of Bones" && (desiredInterment1.textContent  === "SPECIAL DAY (WEEKEND)" || desiredInterment1.textContent  === "SPECIAL DAY (HOLIDAYS)" || desiredInterment1.textContent  === "SPECIAL DAY (HOLIDAYS) NIGHT/DAWN (6:00 P.M. - 8:30 A.M.)" || desiredInterment1.textContent  === "SPECIAL DAY (WEEKEND) NIGHT/DAWN (6:00 P.M. - 8:30 A.M.)")) {
                particularAmountPaid.innerHTML = "21000";
            } else if (intermentType.value === "Two Sets of Bones" && (desiredInterment1.textContent  === "REGULAR DAY" || desiredInterment1.textContent  === "REGULAR DAY NIGHT/DAWN (6:00 P.M. - 8:30 A.M.)")) {
                particularAmountPaid.innerHTML = "20000";
            } else if (intermentType.value === "Two Sets of Bones" && (desiredInterment1.textContent  === "SPECIAL DAY (WEEKEND)" || desiredInterment1.textContent  === "SPECIAL DAY (HOLIDAYS)" || desiredInterment1.textContent  === "SPECIAL DAY (HOLIDAYS) NIGHT/DAWN (6:00 P.M. - 8:30 A.M.)" || desiredInterment1.textContent  === "SPECIAL DAY (WEEKEND) NIGHT/DAWN (6:00 P.M. - 8:30 A.M.)")) {
                particularAmountPaid.innerHTML = "23000";
            } else if (intermentType.value === "Three Sets of Bones" && (desiredInterment1.textContent  === "REGULAR DAY" || desiredInterment1.textContent  === "REGULAR DAY NIGHT/DAWN (6:00 P.M. - 8:30 A.M.)")) {
                particularAmountPaid.innerHTML = "22000";
            } else if (intermentType.value === "Three Sets of Bones" && (desiredInterment1.textContent  === "SPECIAL DAY (WEEKEND)" || desiredInterment1.textContent  === "SPECIAL DAY (HOLIDAYS)" || desiredInterment1.textContent  === "SPECIAL DAY (HOLIDAYS) NIGHT/DAWN (6:00 P.M. - 8:30 A.M.)" || desiredInterment1.textContent  === "SPECIAL DAY (WEEKEND) NIGHT/DAWN (6:00 P.M. - 8:30 A.M.)")) {
                particularAmountPaid.innerHTML = "25000";
            } else if (intermentType.value === "Four Sets of Bones" && (desiredInterment1.textContent  === "REGULAR DAY" || desiredInterment1.textContent  === "REGULAR DAY NIGHT/DAWN (6:00 P.M. - 8:30 A.M.)")) {
                particularAmountPaid.innerHTML = "24000";
            } else if (intermentType.value === "Four Sets of Bones" && (desiredInterment1.textContent  === "SPECIAL DAY (WEEKEND)" || desiredInterment1.textContent  === "SPECIAL DAY (HOLIDAYS)" || desiredInterment1.textContent  === "SPECIAL DAY (HOLIDAYS) NIGHT/DAWN (6:00 P.M. - 8:30 A.M.)" || desiredInterment1.textContent  === "SPECIAL DAY (WEEKEND) NIGHT/DAWN (6:00 P.M. - 8:30 A.M.)")) {
                particularAmountPaid.innerHTML = "27000";
            } else {
                particularAmountPaid.innerHTML = "0";
            }
        }
    
        // Initially, call toggleSelects to set the initial state
        toggleSelectsParticular();
    </script>
    <script>
    // Initialize an array to store the names
    var namesArray = [];
    var datesBornArray = [];
    var DeceaseddateDeceasedArray = [];
    var DeceasedReligionArray = [];
    var DeceasedAgeArray = [];

    function addRow() {
        const tableBody = document.getElementById("table-body");
        const newRow = tableBody.insertRow();
        const cellCount = 7; // Number of cells including the remove button

        // Add the row number
        const numberCell = newRow.insertCell(0);
        numberCell.textContent = tableBody.rows.length;

        // Check if any of the input fields in the current row is empty
        const inputs = tableBody.querySelector("tr:last-child").querySelectorAll("input[type=text], input[type=date], input[type=number]");
        for (const input of inputs) {
            if (input.value.trim() === "") {
                alert("Please fill in all input fields before adding a new row.");
                return; // Exit the function if any input is empty
            }
        }

        // Add cells with input elements
        for (let i = 1; i < cellCount - 1; i++) {
            const cell = newRow.insertCell(i);
            const input = document.createElement("input");
            input.setAttribute("type", i === 2 || i === 3 ? "date" : (i === 4 ? "number" : "text"));
            input.classList.add("text-xs", "text-uppercase", "mb-1", "table-cell", "text-gray-900", "form-control");
            input.style.fontSize = "11px";
            input.style.marginTop = "8px";
            cell.appendChild(input);

            // Add event listener to update the names array when the input field loses focus
            if (i === 1) {
                    input.addEventListener("blur", function () {
                        updateNamesArray(input.value);
                        input.readOnly = true; // Make the input field read-only
                    });
            }
            if (i === 2) {
                input.addEventListener("blur", function () {
                    updateDatesBornArray(input.value);
                    input.readOnly = true; // Make the input field read-only
                });
            }
            if (i === 3) {
                input.addEventListener("blur", function () {
                    updateDeceaseddateDeceasedArray(input.value);
                    input.readOnly = true; // Make the input field read-only
                });
            }
            if (i === 4) {
                input.addEventListener("blur", function () {
                   updateDeceasedAgeArray(input.value);
                   input.readOnly = true; // Make the input field read-only
                });
            }
            if (i === 5) {
                input.addEventListener("blur", function () {
                    
                    updateDeceasedReligionArray(input.value);
                    input.readOnly = true; // Make the input field read-only
                });
            }
        }

        // Add the remove button
        const removeButtonCell = newRow.insertCell(cellCount - 1);
        const removeButton = document.createElement("button");
        removeButton.innerHTML = `
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill-x" viewBox="0 0 16 16">
              <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm-9 8c0 1 1 1 1 1h5.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.544-3.393C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4Z"/>
              <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm-.646-4.854.646.647.646-.647a.5.5 0 0 1 .708.708l-.647.646.647.646a.5.5 0 0 1-.708.708l-.646-.647-.646.647a.5.5 0 0 1-.708-.708l.647-.646-.647-.646a.5.5 0 0 1 .708-.708Z"/>
            </svg>
        `;
        removeButton.classList.add("text-danger", "btn");
        removeButton.onclick = function () {
            removeRow(this);
        };
        removeButtonCell.appendChild(removeButton);
    }

   function removeRow(button) {
            const row = button.parentNode.parentNode;
            const nameInput = row.querySelector('input[type="text"]'); // Find the associated name input
            const nameToRemove = nameInput.value; // Get the name to remove

            // Remove the row from the table
            row.parentNode.removeChild(row);

            // Remove the name from the namesArray
            const indexToRemove = namesArray.indexOf(nameToRemove);
            if (indexToRemove !== -1) {
                namesArray.splice(indexToRemove, 1);
                datesBornArray.splice(indexToRemove, 1); // Remove from the datesBornArray too
                DeceaseddateDeceasedArray.splice(indexToRemove, 1); // Remove from the datesBornArray too
                DeceasedReligionArray.splice(indexToRemove, 1); // Remove from the datesBornArray too
                DeceasedAgeArray.splice(indexToRemove, 1); // Remove from the datesBornArray too
            }

            // Update the spans with the updated arrays
            var displaySpan = document.getElementById("DeceasedName");
            var displayDatesBornSpan = document.getElementById("DeceaseddateBorn");
            var displayDeceaseddateDeceasedSpan = document.getElementById("DeceaseddateDeceased");
            var displayDeceasedReligionSpan = document.getElementById("DeceasedReligion");
            var displayDeceasedAgeSpan = document.getElementById("DeceasedAge");
            
            displaySpan.textContent = namesArray.join(", ");
            displayDatesBornSpan.textContent = datesBornArray.join(", ");
            displayDeceaseddateDeceasedSpan.textContent = DeceaseddateDeceasedArray.join(", ");
            displayDeceasedReligionSpan.textContent = DeceasedReligionArray.join(", ");
            displayDeceasedAgeSpan.textContent = DeceasedAgeArray.join(", ");
        }

    function updateNamesArray(value) {
        // Add the new value to the names array
        if (!namesArray.includes(value)) {
            namesArray.push(value);
    
            // Get reference to the span
            var displaySpan = document.getElementById("DeceasedName");
            // Update the span with the joined names
            displaySpan.textContent = namesArray.join(", ");
        }
    }

    function updateDatesBornArray(value) {
        // Add the new value to the dates born array
         if (!datesBornArray.includes(value)) {
            datesBornArray.push(value);
    
            // Get reference to the span
            var displayDatesBornSpan = document.getElementById("DeceaseddateBorn");
    
            // Update the span with the joined dates born
            displayDatesBornSpan.textContent = datesBornArray.join(", ");
         }
    }
     function updateDeceaseddateDeceasedArray(value) {
        // Add the new value to the dates born array
        if (!DeceaseddateDeceasedArray.includes(value)) {
            DeceaseddateDeceasedArray.push(value);
    
            // Get reference to the span
            var displayDeceaseddateDeceasedSpan = document.getElementById("DeceaseddateDeceased");
    
            // Update the span with the joined dates born
            displayDeceaseddateDeceasedSpan.textContent = DeceaseddateDeceasedArray.join(", ");
        }
    }
     function updateDeceasedAgeArray(value) {
        // Add the new value to the dates born array
         if (!DeceasedAgeArray.includes(value)) {
            DeceasedAgeArray.push(value);
    
            // Get reference to the span
            var displayDeceasedAgeSpan = document.getElementById("DeceasedAge");
    
            // Update the span with the joined dates born
            displayDeceasedAgeSpan.textContent = DeceasedAgeArray.join(", ");
         }
    }
     function updateDeceasedReligionArray(value) {
        // Add the new value to the dates born array
         if (!DeceasedReligionArray.includes(value)) {
            DeceasedReligionArray.push(value);
    
            // Get reference to the span
            var displayDeceasedReligionSpan = document.getElementById("DeceasedReligion");
    
            // Update the span with the joined dates born
            displayDeceasedReligionSpan.textContent = DeceasedReligionArray.join(", ");
         }
    }
</script>





         <script>
        // Use an IIFE (Immediately Invoked Function Expression) to encapsulate your code
        (function () {
            // Get references to the time and date input elements
            var timeInput = document.getElementById("time-input");
            var dateInput1 = document.getElementById("date-input");
            var holidayDisplay = document.getElementById("holiday-display");
            var desiredIntermentDisplay = document.getElementById("desiredInterment-display");
            var intermentType09 = document.getElementById("intermentType");
            var particularAmountPaid09 = document.getElementById("ParticularamountPaid");
            var particularMarkup09 = document.getElementById("Particularmarkup");
            var intermentMarkup09 = document.getElementById("intermentMarkup");
            var intermentamountPaid09 = document.getElementById("intermentamountPaid");
        
            // Add event listeners to both date and time inputs
            dateInput1.addEventListener("change", handleDateTimeChange);
            timeInput.addEventListener("change", handleDateTimeChange);
        
            function handleDateTimeChange() {
                // Get the values of date and time inputs
                var dateValue = dateInput1.value;
                var timeValue = timeInput.value;
        
                // Check if a time is selected
                if (timeInput.value !== "") {
                    // If a time is selected, enable the date input
                    dateInput1.removeAttribute("disabled");
                    dateInput1.value = "";
                    holidayDisplay.textContent = "";
                    desiredIntermentDisplay.textContent = "";
                    intermentType09.value = "";
                    particularAmountPaid09.textContent = "0";
                    intermentamountPaid09.textContent = "0";
                    intermentMarkup09.textContent = "0";
                } else {
                    // If no time is selected, disable the date input and reset other elements
                    dateInput1.setAttribute("disabled", "true");
                    dateInput1.value = "";
                    holidayDisplay.textContent = "";
                    desiredIntermentDisplay.textContent = "";
                    intermentType09.value = "";
                    particularAmountPaid09.textContent = "0";
                    particularMarkup09.textContent = "0"; // Reset markup value
                    intermentamountPaid09.textContent = "0";
                    intermentMarkup09.textContent = "0";
                }
            }
        })();

    </script>


    <script>
        function addItem() {
            var newItemText = document.getElementById("itemInput").value;
    
            if (newItemText !== "") {
                var listItem = document.createElement("li");
    
                var removeButton = document.createElement("button");
                removeButton.textContent = "REMOVE";
                removeButton.className = "btn btn-danger"; // Add the class
    
                // Add custom styles to the Remove button
                removeButton.style.fontSize = "8px";
                removeButton.style.height = "50%";
                removeButton.style.color = "white";
                removeButton.style.marginRight = "20px";
                removeButton.style.marginBottom = "10px";
                removeButton.style.textAlign = "center";
    
                removeButton.onclick = function () {
                    listItem.remove();
                };
    
                listItem.appendChild(removeButton);
    
                // Add the item text after the Remove button
                var itemText = document.createElement("span");
                itemText.textContent = newItemText;
                listItem.appendChild(itemText);
    
                var itemList = document.getElementById("itemList");
                itemList.appendChild(listItem);
    
                document.getElementById("itemInput").value = "";
            }
        }
    </script>
    <script>
       
    function toggleInput() {
        var selectElement = document.getElementById("cemeteryType");
        var inputElement = document.getElementById("otherCemetery");

        if (selectElement.value === "others") {
            inputElement.style.display = "block";
        } else {
            inputElement.style.display = "none";
        }
    }
    
     function computeIntermentFee() {
        var ParticularamountPaid_computeIntermentFee = parseFloat(document.getElementById("ParticularamountPaid").textContent);
        var Particularmarkup_computeIntermentFee = parseFloat(document.getElementById("Particularmarkup").textContent);
        var epitaphfee_computeIntermentFee = parseFloat(document.getElementById("epitaphfee").textContent);
    
        var markupPercentage = Particularmarkup_computeIntermentFee / 100;
    
        var amountPaid_computeIntermentFee = epitaphfee_computeIntermentFee + (ParticularamountPaid_computeIntermentFee * markupPercentage) + ParticularamountPaid_computeIntermentFee;
        var addIntermentfeeMarkup_computeIntermentFee = ParticularamountPaid_computeIntermentFee * markupPercentage;
        var formattedAmount = amountPaid_computeIntermentFee.toLocaleString("en-PH", {
            style: "currency",
            currency: "PHP",
            currencyDisplay: "symbol",
            minimumFractionDigits: 2,
            maximumFractionDigits: 2
        });
        
        // Add a space before the peso sign (₱)
        formattedAmount = formattedAmount.replace("₱", "₱ ");
        var addIntermentfeeMarkup_formattedAmount = addIntermentfeeMarkup_computeIntermentFee.toLocaleString("en-PH", {
            style: "currency",
            currency: "PHP",
            currencyDisplay: "symbol",
            minimumFractionDigits: 2,
            maximumFractionDigits: 2
        });
        
        // Add a space before the peso sign (₱)
        addIntermentfeeMarkup_formattedAmount = addIntermentfeeMarkup_formattedAmount.replace("₱", "₱ ");
        
        // Update the intermentamountPaid element with the formatted value
        document.getElementById("intermentMarkup").textContent = addIntermentfeeMarkup_formattedAmount;
        document.getElementById("intermentamountPaid").textContent = formattedAmount;
    }
</script>
<script>
    function updateImage() {
        var selectElement = document.getElementById("layoutSelect");
        var imageElement = document.getElementById("sampleImage");

        // Get the selected option's value
        var selectedValue = selectElement.value;

        // Define image URLs based on the selected option
        var imageUrls = {
            "name-dates": "https://centennialgarden.ph/SSDCAdmin180231/img/nameAndDate.png",
            "picture-name-dates": "https://centennialgarden.ph/SSDCAdmin180231/img/nameandpicture.png",
            "name-dates-epitaph": "https://centennialgarden.ph/SSDCAdmin180231/img/nameandepitaph.png", 
            "name-dates-epitaph-chineseCharacter": "https://centennialgarden.ph/SSDCAdmin180231/img/name-dates-epitaph-chineseCharacter.png",
        };
         

        // Update the image source based on the selected option
        imageElement.src = imageUrls[selectedValue];
    }
</script>
<script>
    function toggleDivVisibility() {
        var downloadblebtn = document.getElementById("downloadblebtn");
        var div = document.getElementById("downloadbleform");
        var computebtn = document.getElementById("computebtn");
        if (div.style.display === "none" || div.style.display === "") {
            div.style.display = "block";
            computebtn.style.display = "block";
            downloadblebtn.classList.remove("btn-info"); // Remove the blue-color class
            downloadblebtn.classList.add("btn-secondary");
        } else {
            div.style.display = "none";
            computebtn.style.display = "none";
             downloadblebtn.classList.remove("btn-secondary"); // Remove the blue-color class
            downloadblebtn.classList.add("btn-info");
        }
    }
</script>
<script> 
    $(document).ready(function () {
        $('#requestIntermentbtn').click(function () {
            var IntervieweeName = $('#IntervieweeName').val();
            var relationToDeceased = $('input[name="relationToDeceased"]:checked').val();
            var DeceasedIs = $('input[name="DeceasedIs"]:checked').val();
             var selectednatureOfCoffin = $('input[name="natureOfCoffin"]:checked').val();
            var intermentTransfer = $('#intermentTransfer').val();
            
            var Conveyed = $('input[name="Conveyed[]"]:checked').map(function () {
            return $(this).val();
            }).get();
            var ConveyedStr = Conveyed.join(', ');
            
            var Name = $('#DeceasedName').text();
            var DateBorn = $('#DeceaseddateBorn').text();
            var DateDeceased = $('#DeceaseddateDeceased').text();
            var Age = $('#DeceasedAge').text();
            var Religion = $('#DeceasedReligion').text();
            var dateinput = $('#date-input').val();
            var timeinput = $('#time-input').val();
            var Funeralserviceprovider = $('#Funeralserviceprovider').val();
            var Crematorium = $('#Crematorium').val();
            var DateCremated = $('#DateCremated').val();
            var intermentType = $('#intermentType').val();
            var ClassificationClass = $('#ClassificationClass').val();
            
            var expectednumberValue = $('#expectednumber').val();
            var toValue = $('#To').val();
            var Expectednumber = expectednumberValue + " TO " + toValue;
            
            var WithDispencer = $('#WithDispencer').val();
            var AccousticIntegration = $('#AccousticIntegration').val();
            var result = [];
              $('#itemList li').each(function() {
                var itemText = $(this).text().trim();
                // Remove the "REMOVE" text
                itemText = itemText.replace('REMOVE', '');
                result.push(itemText);
              });
            
              // Join the items with commas
            var itemList = result.join(', ');
            var IndicateChapel = $('#IndicateChapel').val();
            var For= $('#For').val();
            var cemeteryType = $('#cemeteryType').val();
            var Nameofmemorialpark = $('#Nameofmemorialpark').val();
            var Conditionoflatter = $('#Conditionoflatter').val();
            var Volume1 = $('#Volume1').val();
            var Volume2 = $('#Volume2').val();
            var Volume3 = $('#Volume3').val();
            var Volume4 = $('#Volume4').val();
            var Volume5 = $('#Volume5').val();
            var Volume6 = $('#Volume6').val();
            var SpecialInstractions = $('#SpecialInstractions').val();
            var Epitaph = $('#Epitaph').val();
            var MarkerReference = $('#MarkerReference').val();
            var layoutSelect = $('#layoutSelect').val();
            var desiredIntermentdisplay = $('#desiredInterment-display').text();
            var intermentPriviledge = $('#intermentamountPaid').text();
            var intermentMarkup = $('#intermentMarkup').text();
            var amountPaid = $('#intermentPriviledge').text();
            var customerCode = $('#customerCode').text();
            var clientName = $('#clientName').text();
            var userAccount123 = $('#userAccount123').text();
            $.ajax({
                type: 'POST',
                url: 'FETCH.Insert_SalesRequestInterment.php',
                data: {
                    IntervieweeName: IntervieweeName,
                    relationToDeceased: relationToDeceased,
                    DeceasedIs: DeceasedIs,
                    ConveyedStr: ConveyedStr,
                    Name: Name,
                    DateBorn: DateBorn,
                    DateDeceased: DateDeceased,
                    Age: Age,
                    Religion: Religion,
                    dateinput: dateinput,
                    timeinput: timeinput,
                    Funeralserviceprovider: Funeralserviceprovider,
                    selectednatureOfCoffin: selectednatureOfCoffin,
                    Crematorium: Crematorium,
                    DateCremated: DateCremated,
                    intermentType: intermentType,
                    ClassificationClass: ClassificationClass,
                    intermentTransfer: intermentTransfer,
                    Expectednumber: Expectednumber,
                    WithDispencer: WithDispencer,
                    AccousticIntegration: AccousticIntegration,
                    itemList: itemList,
                    IndicateChapel: IndicateChapel,
                    For: For,
                    cemeteryType: cemeteryType,
                    Nameofmemorialpark: Nameofmemorialpark,
                    Conditionoflatter: Conditionoflatter,
                    Volume1: Volume1,
                    Volume2: Volume2,
                    Volume3: Volume3,
                    Volume4: Volume4,
                    Volume5: Volume5,
                    Volume6: Volume6,
                    SpecialInstractions: SpecialInstractions,
                    Epitaph: Epitaph,
                    MarkerReference: MarkerReference,
                    layoutSelect: layoutSelect,
                    desiredIntermentdisplay: desiredIntermentdisplay,
                    intermentPriviledge: intermentPriviledge,
                    intermentMarkup: intermentMarkup,
                    amountPaid: amountPaid,
                    customerCode: customerCode,
                    clientName: clientName,
                    userAccount123: userAccount123
                },
                success: function (response) {
                   
                        $('#result').html('<div class="success-message">Data inserted successfully</div>');
                        location.reload();
                   
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    $('#result').html('<div class="error-message">AJAX request failed: ' + textStatus + '</div>');
                }
            });
        });
    });
</script>
</body>

</html>
    <?php } else {
  
  header("location: index.php");
 
}?>
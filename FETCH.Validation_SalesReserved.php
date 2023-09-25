<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
// Retrieve the user-supplied data from the form and sanitize it
$Fullname2 = filter_input(INPUT_POST, 'Fullname2', FILTER_SANITIZE_STRING);
$CustomerCode123 = filter_input(INPUT_POST, 'CustomerCode123', FILTER_SANITIZE_STRING);
$date23 = filter_input(INPUT_POST, 'date23', FILTER_SANITIZE_STRING);
$crypt_id1 = filter_input(INPUT_POST, 'crypt_id1', FILTER_SANITIZE_STRING);
$cryptphase = filter_input(INPUT_POST, 'cryptphase', FILTER_SANITIZE_STRING);
$cryptlevel = filter_input(INPUT_POST, 'cryptlevel', FILTER_SANITIZE_STRING);
$cryptArea = filter_input(INPUT_POST, 'cryptArea', FILTER_SANITIZE_STRING);
$cryptSection = filter_input(INPUT_POST, 'cryptSection', FILTER_SANITIZE_STRING);
$cryptLotNo = filter_input(INPUT_POST, 'cryptLotNo', FILTER_SANITIZE_STRING);
$cryptColumn = filter_input(INPUT_POST, 'cryptColumn', FILTER_SANITIZE_STRING);
$cryptunit_no = filter_input(INPUT_POST, 'cryptUnit', FILTER_SANITIZE_STRING);
$cryptClassification = filter_input(INPUT_POST, 'cryptClassification', FILTER_SANITIZE_STRING);
$crypt_paymentterms = filter_input(INPUT_POST, 'cryptterms', FILTER_SANITIZE_STRING);

$cryptlotListPrice = filter_input(INPUT_POST, 'cryptlotListPrice', FILTER_SANITIZE_STRING);
$crypttaxs1 = filter_input(INPUT_POST, 'crypttaxs1', FILTER_SANITIZE_STRING);
$cryptsubtotaltax = filter_input(INPUT_POST, 'cryptsubtotaltax', FILTER_SANITIZE_STRING);
$cryptdiscounts1 = filter_input(INPUT_POST, 'cryptdiscounts1', FILTER_SANITIZE_STRING);
$cryptsubtotalDiscount = filter_input(INPUT_POST, 'cryptsubtotalDiscount', FILTER_SANITIZE_STRING);
$cryptpcf = filter_input(INPUT_POST, 'cryptpcf', FILTER_SANITIZE_STRING);
$crypttotalContractPrice3 = filter_input(INPUT_POST, 'crypttotalContractPrice3', FILTER_SANITIZE_STRING);
$cryptdpPercentage2 = filter_input(INPUT_POST, 'cryptdpPercentage2', FILTER_SANITIZE_STRING);
$cryptdpPercentage = filter_input(INPUT_POST, 'cryptdpPercentage', FILTER_SANITIZE_STRING);
$cryptbalance = filter_input(INPUT_POST, 'cryptbalance', FILTER_SANITIZE_STRING);
$cryptMI1 = filter_input(INPUT_POST, 'cryptMI1', FILTER_SANITIZE_STRING);
$cryptMI2 = filter_input(INPUT_POST, 'cryptMI2', FILTER_SANITIZE_STRING);
$cryptfactorratePercentage = filter_input(INPUT_POST, 'cryptfactorratePercentage', FILTER_SANITIZE_STRING);
$cryptfactorrate = filter_input(INPUT_POST, 'cryptfactorrate', FILTER_SANITIZE_STRING);
$cryptNoOfMonths = filter_input(INPUT_POST, 'cryptNoOfMonths', FILTER_SANITIZE_STRING);
$cryptPaymentDueDate = filter_input(INPUT_POST, 'cryptPaymentDueDate', FILTER_SANITIZE_STRING);
$cryptpaymentMethod = filter_input(INPUT_POST, 'cryptpaymentMethod', FILTER_SANITIZE_STRING);
$cryptuser = filter_input(INPUT_POST, 'user', FILTER_SANITIZE_STRING);
$cryptmarketAnalysis = filter_input(INPUT_POST, 'cryptmarketAnalysis', FILTER_SANITIZE_STRING);
$Email123 = filter_input(INPUT_POST, 'cryptEmail1', FILTER_SANITIZE_STRING);

$cryptlotListPrice = str_replace(['₱', ','], '', filter_input(INPUT_POST, 'cryptlotListPrice', FILTER_SANITIZE_STRING));
$crypttaxs1 = str_replace(['₱', ','], '', filter_input(INPUT_POST, 'crypttaxs1', FILTER_SANITIZE_STRING));
$cryptsubtotaltax = str_replace(['₱', ','], '', filter_input(INPUT_POST, 'cryptsubtotaltax', FILTER_SANITIZE_STRING));
$cryptdiscounts1 = str_replace(['₱', ','], '', filter_input(INPUT_POST, 'cryptdiscounts1', FILTER_SANITIZE_STRING));
$cryptsubtotalDiscount = str_replace(['₱', ','], '', filter_input(INPUT_POST, 'cryptsubtotalDiscount', FILTER_SANITIZE_STRING));
$cryptpcf = str_replace(['₱', ','], '', filter_input(INPUT_POST, 'cryptpcf', FILTER_SANITIZE_STRING));
$crypttotalContractPrice3 = str_replace(['₱', ','], '', filter_input(INPUT_POST, 'crypttotalContractPrice3', FILTER_SANITIZE_STRING));
$cryptdpPercentage2 = str_replace(['₱', ','], '', filter_input(INPUT_POST, 'cryptdpPercentage2', FILTER_SANITIZE_STRING));
$cryptdpPercentage = str_replace(['₱', ','], '', filter_input(INPUT_POST, 'cryptdpPercentage', FILTER_SANITIZE_STRING));
$cryptbalance = str_replace(['₱', ','], '', filter_input(INPUT_POST, 'cryptbalance', FILTER_SANITIZE_STRING));
$cryptMI1 = str_replace(['₱', ','], '', filter_input(INPUT_POST, 'cryptMI1', FILTER_SANITIZE_STRING));
$cryptMI2 = str_replace(['₱', ','], '', filter_input(INPUT_POST, 'cryptMI2', FILTER_SANITIZE_STRING));
$cryptfactorratePercentage = str_replace(['₱', ','], '', filter_input(INPUT_POST, 'cryptfactorratePercentage', FILTER_SANITIZE_STRING));
$cryptfactorrate = str_replace(['₱', ','], '', filter_input(INPUT_POST, 'cryptfactorrate', FILTER_SANITIZE_STRING));

// Database connection parameters
$servername = 'localhost';
$dbname = 'centenn1_sedge_accountingsoftware';
$username = 'centenn1_sedge';
$password213 = '@Hanabi16'; 


    // Create a database connection
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password213);

    // Begin a transaction
    $conn->beginTransaction();

    try {
           // Compute the factor rate based on the number of months
           $selectedMonths = (int)$cryptNoOfMonths;
           // Define the factor rates for different month durations
           $factorRates = [
               12 => 0.0907308578592074,
               24 => 0.0494422640854967,
               36 => 0.036152395535917,
               48 => 0.030430362343858,
               60 => 0.0276189120353598,
               72 => 0.0263268307088938,
               84 => 0.0246758117819474,
               96 => 0.0235131274809127,
               108 => 0.0226708482940114,
               120 => 0.022048096885833,
           ];
           $interestRate = [
               12 => 16,
               24 => 17,
               36 => 18,
               48 => 20,
               60 => 22,
               72 => 24,
               84 => 24,
               96 => 24,
               108 => 24,
               120 => 24,
           ];
   
           // Check if the selected number of months exists in the factor rates array
           if (empty($selectedMonths)) {
               if ($crypt_paymentterms == 'cryptSpotCash' ){
                
                   $downpayment = $crypttotalContractPrice3 * ((float)$cryptdpPercentage / 100);
                   $subtotaltax = (float)$crypttaxs1 * $cryptlotListPrice;
                   $remainingBalance = $crypttotalContractPrice3 - ($crypttotalContractPrice3 * ((float)$cryptdpPercentage / 100));
                   $insertledger1 = $conn->prepare("INSERT INTO tbl_flatinterest (contractCode, costumerName, userAccount, lotListPrice, VAT, VAT_Subtotal, discount, discount_Subtotal, PCF, TCP, DPPercentage, downpayment, balance, noOfMonths, paymentDueDate, payment_Method, user, dateCreated, status, monthlyInstallment, remarks) VALUES (:contractCode, :Fullname1, :customerCode1, :lotListPrice, :taxs1, :subtotaltax, :discounts1, :subtotalDiscount, :pcf, :totalContractPrice3, :dpPercentage, :Initialpayment, :balance, :NoOfMonths, :PaymentDueDate, :paymentMethod, :user, :dateCreated, :status, :monthlyInstallment, :remarks)");
                   for ($month = 1; $month <= 1 ; $month++) {
                       $cryptPaymentDueDate = date('Y-m-d', strtotime($cryptPaymentDueDate . ' +1 month'));
                           $monthlyInstallment = $remainingBalance;
                           $remarks = 'Full Downpayment';
                           $pcf1 = $cryptpcf;
                           $subtotaltax1 =  $subtotaltax;
                   
                       // Bind the values for the prepared statement
                       $insertledger1->bindValue(':contractCode', $CustomerCode123);
                       $insertledger1->bindValue(':Fullname1', $Fullname2);
                       $insertledger1->bindValue(':customerCode1', $CustomerCode123);
                       $insertledger1->bindValue(':lotListPrice', $cryptlotListPrice);
                       $insertledger1->bindValue(':taxs1', $crypttaxs1);
                       $insertledger1->bindValue(':subtotaltax', $subtotaltax1);
                       $insertledger1->bindValue(':discounts1', $cryptdiscounts1);
                       $insertledger1->bindValue(':subtotalDiscount', $cryptsubtotalDiscount);
                       $insertledger1->bindValue(':pcf', $pcf1);
                       $insertledger1->bindValue(':totalContractPrice3', ceil($crypttotalContractPrice3));
                       $insertledger1->bindValue(':dpPercentage', ceil((float)$cryptdpPercentage));
                       $insertledger1->bindValue(':balance', 0);
                       $insertledger1->bindValue(':NoOfMonths', $selectedMonths);
                       $insertledger1->bindValue(':Initialpayment', $month === 1 ? ceil($downpayment) : 0); // Set initial payment for the first month only
                       $insertledger1->bindValue(':PaymentDueDate', $cryptPaymentDueDate);
                       $insertledger1->bindValue(':paymentMethod', $cryptpaymentMethod);
                       $insertledger1->bindValue(':user', $user);
                       $insertledger1->bindValue(':dateCreated', date('Y-m-d'));
                       $insertledger1->bindValue(':status', 'Unpaid');
                       $insertledger1->bindValue(':monthlyInstallment', ceil($monthlyInstallment)); // Set monthly installment for the remaining months
                       $insertledger1->bindValue(':remarks', $remarks);
   
                       $insertledger1->execute();
                   }
               }
               elseif ($crypt_paymentterms == 'cryptM_Cash' ){
                   $downpayment = $crypttotalContractPrice3 * ((float)$cryptdpPercentage / 100);
                   $subtotaltax = (float)$crypttaxs1 * $cryptlotListPrice;
                   $remainingBalance = $crypttotalContractPrice3 - ($crypttotalContractPrice3 * ((float)$cryptdpPercentage / 100));
                   $insertledger1 = $conn->prepare("INSERT INTO tbl_flatinterest (contractCode, costumerName, userAccount, lotListPrice, VAT, VAT_Subtotal, discount, discount_Subtotal, PCF, TCP, DPPercentage, downpayment, balance, noOfMonths, paymentDueDate, payment_Method, user, dateCreated, status, monthlyInstallment, remarks, dateModified) VALUES (:contractCode, :Fullname1, :customerCode1, :lotListPrice, :taxs1, :subtotaltax, :discounts1, :subtotalDiscount, :pcf, :totalContractPrice3, :dpPercentage, :Initialpayment, :balance, :NoOfMonths, :PaymentDueDate, :paymentMethod, :user, :dateCreated, :status, :monthlyInstallment, :remarks, :dateModified)");
                   for ($month = 1; $month <= 2 ; $month++) {
                       $cryptPaymentDueDate = date('Y-m-d', strtotime($cryptPaymentDueDate . ' +1 month'));
                       if ($month === 1) { // First row for downpayment
                           $monthlyInstallment = $downpayment;
                           $remainingBalance = $crypttotalContractPrice3 - $downpayment;
                           $remarks = 'Downpayment';
                           $pcf1 = '0';
                           $subtotaltax1 = '0';
                           $dateCreated = date('Y-m-d');
                       } else { // Rows for regular monthly installments
                           $monthlyInstallment = $remainingBalance;
                           $remainingBalance;
                           $remarks = 'Full Downpayment';
                           $pcf1 = $cryptpcf;
                           $subtotaltax1 =  $subtotaltax;
                           $dateCreated = '';
                       }
                   
                   
                       if ($month === 2) {
                           $monthlyInstallment = $remainingBalance; // Add remaining balance to the last monthly installment
                           $remainingBalance = 0; // Set the remaining balance to 0
                       }
                   
                      // Bind the values for the prepared statement
                      $insertledger1->bindValue(':contractCode', $CustomerCode123);
                      $insertledger1->bindValue(':Fullname1', $Fullname2);
                      $insertledger1->bindValue(':customerCode1', $CustomerCode123);
                      $insertledger1->bindValue(':lotListPrice', $cryptlotListPrice);
                      $insertledger1->bindValue(':taxs1', $crypttaxs1);
                      $insertledger1->bindValue(':subtotaltax', $subtotaltax1);
                      $insertledger1->bindValue(':discounts1', $cryptdiscounts1);
                      $insertledger1->bindValue(':subtotalDiscount', $cryptsubtotalDiscount);
                      $insertledger1->bindValue(':pcf', $pcf1);
                      $insertledger1->bindValue(':totalContractPrice3', ceil($crypttotalContractPrice3));
                      $insertledger1->bindValue(':dpPercentage', ceil((float)$cryptdpPercentage));
                      $insertledger1->bindValue(':balance', ceil($remainingBalance));
                      $insertledger1->bindValue(':NoOfMonths', $selectedMonths);
                      $insertledger1->bindValue(':Initialpayment', $month === 1 ? ceil($downpayment) : 0); // Set initial payment for the first month only
                      $insertledger1->bindValue(':PaymentDueDate', $cryptPaymentDueDate);
                      $insertledger1->bindValue(':paymentMethod', $cryptpaymentMethod);
                      $insertledger1->bindValue(':user', $user);
                      $insertledger1->bindValue(':dateCreated', $dateCreated);
                      $insertledger1->bindValue(':dateModified', $dateCreated);
                      $insertledger1->bindValue(':status', 'Unpaid');
                      $insertledger1->bindValue(':monthlyInstallment', ceil($monthlyInstallment)); // Set monthly installment for the remaining months
                      $insertledger1->bindValue(':remarks', $remarks);
   
                       $insertledger1->execute();
                   }
               }
               elseif ($crypt_paymentterms == 'cryptAtNeedPrice' ){
                   $downpayment = $crypttotalContractPrice3 * ((float)$cryptdpPercentage / 100);
                   $subtotaltax = (float)$crypttaxs1 * $cryptlotListPrice;
                   $remainingBalance = $crypttotalContractPrice3 - ($crypttotalContractPrice3 * ((float)$cryptdpPercentage / 100));
                   $insertledger1 = $conn->prepare("INSERT INTO tbl_flatinterest (contractCode, costumerName, userAccount, lotListPrice, VAT, VAT_Subtotal, discount, discount_Subtotal, PCF, TCP, DPPercentage, downpayment, balance, noOfMonths, paymentDueDate, payment_Method, user, dateCreated, status, monthlyInstallment, remarks, dateModified) VALUES (:contractCode, :Fullname1, :customerCode1, :lotListPrice, :taxs1, :subtotaltax, :discounts1, :subtotalDiscount, :pcf, :totalContractPrice3, :dpPercentage, :Initialpayment, :balance, :NoOfMonths, :PaymentDueDate, :paymentMethod, :user, :dateCreated, :status, :monthlyInstallment, :remarks, :dateModified)");
                   for ($month = 1; $month <= 2 ; $month++) {
                       $cryptPaymentDueDate = date('Y-m-d', strtotime($cryptPaymentDueDate . ' +1 month'));
                       if ($month === 1) { // First row for downpayment
                           $monthlyInstallment = $downpayment;
                           $remainingBalance = $crypttotalContractPrice3 - $downpayment;
                           $remarks = 'Downpayment';
                           $pcf1 = '0';
                           $subtotaltax1 = '0';
                           $dateCreated = date('Y-m-d');
                       } else { // Rows for regular monthly installments
                           $monthlyInstallment = $remainingBalance;
                           $remainingBalance;
                           $remarks = 'Full Downpayment';
                           $pcf1 = $cryptpcf;
                           $subtotaltax1 =  $subtotaltax;
                           $dateCreated = '';
                       }
                   
                   
                       if ($month === 2) {
                           $monthlyInstallment = $remainingBalance; // Add remaining balance to the last monthly installment
                           $remainingBalance = 0; // Set the remaining balance to 0
                       }
                   
                      // Bind the values for the prepared statement
                      $insertledger1->bindValue(':contractCode', $CustomerCode123);
                      $insertledger1->bindValue(':Fullname1', $Fullname2);
                      $insertledger1->bindValue(':customerCode1', $CustomerCode123);
                      $insertledger1->bindValue(':lotListPrice', $cryptlotListPrice);
                      $insertledger1->bindValue(':taxs1', $crypttaxs1);
                      $insertledger1->bindValue(':subtotaltax', $subtotaltax1);
                      $insertledger1->bindValue(':discounts1', $cryptdiscounts1);
                      $insertledger1->bindValue(':subtotalDiscount', $cryptsubtotalDiscount);
                      $insertledger1->bindValue(':pcf', $pcf1);
                      $insertledger1->bindValue(':totalContractPrice3', ceil($crypttotalContractPrice3));
                      $insertledger1->bindValue(':dpPercentage', ceil((float)$cryptdpPercentage));
                      $insertledger1->bindValue(':balance', ceil($remainingBalance));
                      $insertledger1->bindValue(':NoOfMonths', $selectedMonths);
                      $insertledger1->bindValue(':Initialpayment', $month === 1 ? ceil($downpayment) : 0); // Set initial payment for the first month only
                      $insertledger1->bindValue(':PaymentDueDate', $cryptPaymentDueDate);
                      $insertledger1->bindValue(':paymentMethod', $cryptpaymentMethod);
                      $insertledger1->bindValue(':user', $user);
                      $insertledger1->bindValue(':dateCreated', $dateCreated);
                      $insertledger1->bindValue(':dateModified', $dateCreated);
                      $insertledger1->bindValue(':status', 'Unpaid');
                      $insertledger1->bindValue(':monthlyInstallment', ceil($monthlyInstallment)); // Set monthly installment for the remaining months
                      $insertledger1->bindValue(':remarks', $remarks);
   
                       $insertledger1->execute();
                   }
               }

           
           } elseif ($selectedMonths > 0) {
               // Retrieve the factor rate and interest rate for the selected number of months
               $factorRate = $factorRates[$selectedMonths];
               $monthlyInterestRate = $interestRate[$selectedMonths];
               // Initialize the remaining balance and downpayment
               $loanAmount = $crypttotalContractPrice3 - ($crypttotalContractPrice3 * ((float)$cryptdpPercentage / 100));
               $downpayment = $crypttotalContractPrice3 * ((float)$cryptdpPercentage / 100);
               $remainingBalance = $crypttotalContractPrice3 - ($crypttotalContractPrice3 * ((float)$cryptdpPercentage / 100));
               $insertledger1 = $conn->prepare("INSERT INTO tbl_flatinterest (contractCode, costumerName, userAccount, lotListPrice, VAT, VAT_Subtotal, discount, discount_Subtotal, PCF, TCP, DPPercentage, downpayment, balance, noOfMonths, paymentDueDate, payment_Method, user, dateCreated, status, monthlyInstallment, interest, principal, remarks, dateModified) VALUES (:contractCode, :Fullname1, :customerCode1, :lotListPrice, :taxs1, :subtotaltax, :discounts1, :subtotalDiscount, :pcf, :totalContractPrice3, :dpPercentage, :Initialpayment, :balance, :NoOfMonths, :PaymentDueDate, :paymentMethod, :user, :dateCreated, :status, :monthlyInstallment, :interest, :principal, :remarks, :dateModified)");
               for ($month = 0; $month <= $selectedMonths + 1; $month++) {
                   // Calculate the payment due date based on the month
                  
   
                   // Calculate the monthly interest
                   $Interest = $remainingBalance * $factorRate;
                   $totalTax = (int)$cryptsubtotaltax / $selectedMonths;
                   $totalpcf = (int)$cryptpcf / $selectedMonths;
                   // Calculate the monthly payment
                   $monthlyPayment = ($loanAmount * $factorRate) / (1 - (1 + $factorRate)**(-$selectedMonths));
   
                   // Calculate the monthly principal
                   $monthlyPrincipal = $monthlyPayment - $Interest;
                   if ($month === 0) { // First row for downpayment
                    $cryptPaymentDueDate = date('Y-m-d', strtotime($cryptPaymentDueDate));
                       $monthlyInstallment = $downpayment;
                       $remainingBalance = $crypttotalContractPrice3 - $downpayment;
                       $remarks = 'Downpayment';
                       $dateCreated = date('Y-m-d');
                   } else { // Rows for regular monthly installments
                    $cryptPaymentDueDate = date('Y-m-d', strtotime($cryptPaymentDueDate . ' +1 month'));
                       $monthlyInstallment = $monthlyPayment;
                       $remainingBalance -= $monthlyPrincipal;
                       $remarks = 'Monthly Payment';
                       $dateCreated = '';
                   }
   
   
                   if ($month === $selectedMonths + 1) {
                       $monthlyInstallment += $remainingBalance; // Add remaining balance to the last monthly installment
                       $remainingBalance = 0; // Set the remaining balance to 0
                   }
   
                     // Bind the values for the prepared statement
                     $insertledger1->bindValue(':contractCode', $CustomerCode123);
                     $insertledger1->bindValue(':Fullname1', $Fullname2);
                     $insertledger1->bindValue(':customerCode1', $CustomerCode123);
                     $insertledger1->bindValue(':lotListPrice', $cryptlotListPrice);
                     $insertledger1->bindValue(':taxs1', $crypttaxs1);
                     $insertledger1->bindValue(':subtotaltax', $totalTax);
                     $insertledger1->bindValue(':discounts1', $cryptdiscounts1);
                     $insertledger1->bindValue(':subtotalDiscount', $cryptsubtotalDiscount);
                     $insertledger1->bindValue(':pcf', $totalpcf);
                     $insertledger1->bindValue(':totalContractPrice3', ceil($crypttotalContractPrice3));
                     $insertledger1->bindValue(':dpPercentage', ceil((float)$cryptdpPercentage));
                     $insertledger1->bindValue(':balance', ceil($remainingBalance));
                     $insertledger1->bindValue(':NoOfMonths', $selectedMonths);
                     $insertledger1->bindValue(':Initialpayment', $month === 1 ? ceil($downpayment) : 0); // Set initial payment for the first month only
                     $insertledger1->bindValue(':PaymentDueDate', $cryptPaymentDueDate);
                     $insertledger1->bindValue(':paymentMethod', $cryptpaymentMethod);
                     $insertledger1->bindValue(':user', $user);
                     $insertledger1->bindValue(':dateCreated', $dateCreated);
                     $insertledger1->bindValue(':dateModified', $dateCreated);
                     $insertledger1->bindValue(':status', 'Unpaid');
                     $insertledger1->bindValue(':monthlyInstallment', ceil($monthlyInstallment)); // Set monthly installment for the remaining months
                     $insertledger1->bindValue(':interest', $month === 0 ? 0 : ceil($Interest));
                     $insertledger1->bindValue(':principal', $month === 0 ? 0 : ceil($monthlyPrincipal));
                     $insertledger1->bindValue(':remarks', $remarks);
                    $insertledger1->execute();
               }
           }
        // Update the buyersinformationsheet table
        $updateBuyerInfoSheet = $conn->prepare("UPDATE buyersinformationsheet SET contractCode=:contractCode, status=:status WHERE customerCode=:customerCode");
        $updateBuyerInfoSheet->bindParam(':contractCode', $CustomerCode123);
        $updateBuyerInfoSheet->bindValue(':status', 'Pending');
        $updateBuyerInfoSheet->bindParam(':customerCode', $CustomerCode123);
        $updateBuyerInfoSheet->execute();

        // Update the tbl_lotdescription table
        $updateLotDescription = $conn->prepare("UPDATE tbl_cryptdescription SET status=:status WHERE id=:lot_id");
        $updateLotDescription->bindValue(':status', 'Active');
        $updateLotDescription->bindParam(':lot_id', $crypt_id1);
        $updateLotDescription->execute();
        
        // Insert the ledger table
        $insertcryptBuyerInfoSheet = $conn->prepare("INSERT INTO tbl_ledger (contractCode, customerName, customerCode, date_column, crypt_id1, cryptphase, cryptlevel, cryptarea, cryptsection, crypt_column, cryptunit_no, cryptclassification, lotdescTerms, lotListPrice, VAT, subtotaltax, discount, subtotalDiscount, PCF, totalContractPrice, dpPercentage2, dpPercentage, balance, MI1, MI2, factorratePercentage, factorRate, NoOfMonths, paymentDueDate, modeOfpayment, user, salesFrom, dateCreated, timeStamp, status) VALUES (:contractCode, :Fullname1, :customerCode1, :date1, :lot_id1, :lot_block1, :lot_section1, :lot_no1, :lot_area1, :lot_phase1, :cryptunit_no, :cryptClassification, :terms, :lotListPrice, :taxs1, :subtotaltax, :discounts1, :subtotalDiscount, :pcf, :totalContractPrice3, :dpPercentage2, :dpPercentage, :balance, :MI1, :MI2, :factorratePercentage, :factorrate, :NoOfMonths, :PaymentDueDate, :paymentMethod, :user, :marketAnalysis, :dateCreated, :timeStamp, :status)");

        $insertcryptBuyerInfoSheet->bindValue(':contractCode', $CustomerCode123);
        $insertcryptBuyerInfoSheet->bindValue(':Fullname1', $Fullname2);
        $insertcryptBuyerInfoSheet->bindValue(':customerCode1', $CustomerCode123);
        $insertcryptBuyerInfoSheet->bindValue(':date1', $date23);
        $insertcryptBuyerInfoSheet->bindValue(':lot_id1', $crypt_id1);
        $insertcryptBuyerInfoSheet->bindValue(':lot_block1', $cryptphase);
        $insertcryptBuyerInfoSheet->bindValue(':lot_section1', $cryptlevel);
        $insertcryptBuyerInfoSheet->bindValue(':lot_no1', $cryptArea);
        $insertcryptBuyerInfoSheet->bindValue(':lot_area1', $cryptSection);
        $insertcryptBuyerInfoSheet->bindValue(':lot_phase1', $cryptColumn);
        $insertcryptBuyerInfoSheet->bindValue(':cryptunit_no', $cryptunit_no);
        $insertcryptBuyerInfoSheet->bindValue(':cryptClassification', $cryptClassification);
        $insertcryptBuyerInfoSheet->bindValue(':terms', $crypt_paymentterms);
        $insertcryptBuyerInfoSheet->bindValue(':lotListPrice', $cryptlotListPrice);
        $insertcryptBuyerInfoSheet->bindValue(':taxs1', $crypttaxs1);
        $insertcryptBuyerInfoSheet->bindValue(':subtotaltax', $cryptsubtotaltax);
        $insertcryptBuyerInfoSheet->bindValue(':discounts1', $cryptdiscounts1);
        $insertcryptBuyerInfoSheet->bindValue(':subtotalDiscount', $cryptsubtotalDiscount);
        $insertcryptBuyerInfoSheet->bindValue(':pcf', $cryptpcf);
        $insertcryptBuyerInfoSheet->bindValue(':totalContractPrice3', $crypttotalContractPrice3);
        $insertcryptBuyerInfoSheet->bindValue(':dpPercentage2', $cryptdpPercentage2);
        $insertcryptBuyerInfoSheet->bindValue(':dpPercentage', $cryptdpPercentage);
        $insertcryptBuyerInfoSheet->bindValue(':balance', $cryptbalance);
        $insertcryptBuyerInfoSheet->bindValue(':MI1', $cryptMI1);
        $insertcryptBuyerInfoSheet->bindValue(':MI2', $cryptMI2);
        $insertcryptBuyerInfoSheet->bindValue(':factorratePercentage', $cryptfactorratePercentage);
        $insertcryptBuyerInfoSheet->bindValue(':factorrate', $cryptfactorrate);
        $insertcryptBuyerInfoSheet->bindValue(':NoOfMonths', $cryptNoOfMonths);
        $insertcryptBuyerInfoSheet->bindValue(':PaymentDueDate', $cryptPaymentDueDate);
        $insertcryptBuyerInfoSheet->bindValue(':paymentMethod', $cryptpaymentMethod);
        $insertcryptBuyerInfoSheet->bindValue(':user', $cryptuser);
        $insertcryptBuyerInfoSheet->bindValue(':marketAnalysis', $cryptmarketAnalysis);
        $insertcryptBuyerInfoSheet->bindValue(':dateCreated', date('Y-m-d'));
        $insertcryptBuyerInfoSheet->bindValue(':timeStamp', date('Y-m-d H:i:s'));
        $insertcryptBuyerInfoSheet->bindValue(':status', 'Pending');
        $insertcryptBuyerInfoSheet->execute();


        // Generate a random password and salt
        $password = generateRandomPassword();
        $salt = generateRandomSalt();

        // Generate the password hash
        $passwordHash = password_hash($password . $salt, PASSWORD_DEFAULT);
        try {
            // Insert data into tbl_clientaccount
            $insertClientAccount2 = $conn->prepare("INSERT INTO tbl_clientaccount (username, name, email, password_hash, password_salt) VALUES (:customerCode, :Fullname1, :Email, :passwordHash, :passwordSalt)");
            $insertClientAccount2->bindParam(':customerCode', $CustomerCode123);
            $insertClientAccount2->bindParam(':Fullname1', $Fullname2);
            $insertClientAccount2->bindParam(':Email', $Email123);
            $insertClientAccount2->bindParam(':passwordHash', $passwordHash);
            $insertClientAccount2->bindParam(':passwordSalt', $salt);
            
            $insertClientAccount2->execute();

            $insertClientAccount11 = $conn->prepare("INSERT INTO tbl_button (crematename, pdfGenerated) VALUES (:customerCode1, :password1)");
            $insertClientAccount11->bindParam(':customerCode1', $CustomerCode123);
            $insertClientAccount11->bindParam(':password1', $password);
            $insertClientAccount11->execute();

            // Compose the emails
            $to = $Email123;
            $subject = 'Account Information';
            $message = "Username: $CustomerCode123\nPassword: $password";
            $headers = "From: southspringuserAccount@centennialgarden.ph";

            if (mail($to, $subject, $message, $headers)) {
                echo "Account created successfully. An email with login information has been sent to $email.";
            } else {
                echo "Account created, but failed to send email. Please check your email configuration.";
            }

           // Commit the transaction
                $conn->commit();

                // Success message or further actions
                $response = array(
                    'status' => 'success',
                    'message' => 'Crypt purchase is successful. An email with your login credentials has been sent to your email address.'
                   
                );
                header("Location: sales_reservation.php");
            // Success message or further actions
        } catch (PDOException $e) {
            // Handle the integrity constraint violation error
            if ($e->getCode() === '23000' && strpos($e->getMessage(), 'Duplicate entry') !== false) {
                echo '<div class="error-notification">An account with this email already exists.</div>';
            } else {
                echo '<div class="error-notification">An error occurred while creating the account!!!</div>';
                echo '<pre>' . $e->getMessage() . '</pre>';
                echo '<pre>' . $insertClientAccount11->debugDumpParams() . '</pre>';
            }   
        }
    } catch (Exception $e) {
        // Rollback the transaction on error
        $conn->rollback();
        $_SESSION['error_message'] = 'An error occurred while processing your request. Please try again later.';
        header("Location: error.php");
        exit;
    } finally {
        // Close the database connection
        $conn = null;
    }

// Function to generate a random password
function generateRandomPassword($length = 8)
{
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $password = '';
    for ($i = 0; $i < $length; $i++) {
        $password .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $password;
}

// Function to generate a random salt
function generateRandomSalt($length = 10)
{
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $salt = '';
    for ($i = 0; $i < $length; $i++) {
        $salt .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $salt;
}
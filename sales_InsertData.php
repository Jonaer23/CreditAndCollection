<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require 'vendor/autoload.php'; 
// Retrieve the user-supplied data from the form and sanitize it
$Fullname1 = filter_input(INPUT_POST, 'Fullname1', FILTER_SANITIZE_STRING);
$customerCode1 = filter_input(INPUT_POST, 'customerCode1', FILTER_SANITIZE_STRING);
$date1 = filter_input(INPUT_POST, 'date1', FILTER_SANITIZE_STRING);
$lot_id1 = filter_input(INPUT_POST, 'lot_id1', FILTER_SANITIZE_STRING);
$lot_block1 = filter_input(INPUT_POST, 'lot_block1', FILTER_SANITIZE_STRING);
$lot_section1 = filter_input(INPUT_POST, 'lot_section1', FILTER_SANITIZE_STRING);
$lot_no1 = filter_input(INPUT_POST, 'lot_no1', FILTER_SANITIZE_STRING);
$lot_area1 = filter_input(INPUT_POST, 'lot_area1', FILTER_SANITIZE_STRING);
$lot_phase1 = filter_input(INPUT_POST, 'lot_phase1', FILTER_SANITIZE_STRING);
$lot_type1 = filter_input(INPUT_POST, 'lot_type1', FILTER_SANITIZE_STRING);
$terms = filter_input(INPUT_POST, 'terms', FILTER_SANITIZE_STRING);
$lotListPrice = filter_input(INPUT_POST, 'lotListPrice', FILTER_SANITIZE_STRING);
$taxs1 = filter_input(INPUT_POST, 'taxs1', FILTER_SANITIZE_STRING);
$subtotaltax = filter_input(INPUT_POST, 'subtotaltax', FILTER_SANITIZE_STRING);
$discounts1 = filter_input(INPUT_POST, 'discounts1', FILTER_SANITIZE_STRING);
$subtotalDiscount = filter_input(INPUT_POST, 'subtotalDiscount', FILTER_SANITIZE_STRING);
$pcf = filter_input(INPUT_POST, 'pcf', FILTER_SANITIZE_STRING);
$totalContractPrice3 = filter_input(INPUT_POST, 'totalContractPrice3', FILTER_SANITIZE_STRING);
$dpPercentage2 = filter_input(INPUT_POST, 'dpPercentage2', FILTER_SANITIZE_STRING);
$dpPercentage = filter_input(INPUT_POST, 'dpPercentage', FILTER_SANITIZE_STRING);
$balance = filter_input(INPUT_POST, 'balance', FILTER_SANITIZE_STRING);
$MI1 = filter_input(INPUT_POST, 'MI1', FILTER_SANITIZE_STRING);
$MI2 = filter_input(INPUT_POST, 'MI2', FILTER_SANITIZE_STRING);
$factorratePercentage = filter_input(INPUT_POST, 'factorratePercentage', FILTER_SANITIZE_STRING);
$factorrate = filter_input(INPUT_POST, 'factorrate', FILTER_SANITIZE_STRING);
$NoOfMonths = filter_input(INPUT_POST, 'NoOfMonths', FILTER_SANITIZE_STRING);
$PaymentDueDate = filter_input(INPUT_POST, 'PaymentDueDate', FILTER_SANITIZE_STRING);
$paymentMethod = filter_input(INPUT_POST, 'paymentMethod', FILTER_SANITIZE_STRING);
$user = filter_input(INPUT_POST, 'user', FILTER_SANITIZE_STRING);
$marketAnalysis = filter_input(INPUT_POST, 'marketAnalysis', FILTER_SANITIZE_STRING);
$Email = filter_input(INPUT_POST, 'Email1', FILTER_SANITIZE_STRING);
$agentName = filter_input(INPUT_POST, 'agentName', FILTER_SANITIZE_STRING);
$lot_classification1 = filter_input(INPUT_POST, 'lot_classification1', FILTER_SANITIZE_STRING);
$lotListPrice = str_replace(['₱', ','], '', filter_input(INPUT_POST, 'lotListPrice', FILTER_SANITIZE_STRING));
$taxs1 = str_replace(['₱', ','], '', filter_input(INPUT_POST, 'taxs1', FILTER_SANITIZE_STRING));
$subtotaltax = str_replace(['₱', ','], '', filter_input(INPUT_POST, 'subtotaltax', FILTER_SANITIZE_STRING));
$discounts1 = str_replace(['₱', ','], '', filter_input(INPUT_POST, 'discounts1', FILTER_SANITIZE_STRING));
$subtotalDiscount = str_replace(['₱', ','], '', filter_input(INPUT_POST, 'subtotalDiscount', FILTER_SANITIZE_STRING));
$pcf = str_replace(['₱', ','], '', filter_input(INPUT_POST, 'pcf', FILTER_SANITIZE_STRING));
$totalContractPrice3 = str_replace(['₱', ','], '', filter_input(INPUT_POST, 'totalContractPrice3', FILTER_SANITIZE_STRING));
$dpPercentage2 = str_replace(['₱', ','], '', filter_input(INPUT_POST, 'dpPercentage2', FILTER_SANITIZE_STRING));
$dpPercentage = str_replace(['₱', ','], '', filter_input(INPUT_POST, 'dpPercentage', FILTER_SANITIZE_STRING));
$balance = str_replace(['₱', ','], '', filter_input(INPUT_POST, 'balance', FILTER_SANITIZE_STRING));
$MI1 = str_replace(['₱', ','], '', filter_input(INPUT_POST, 'MI1', FILTER_SANITIZE_STRING));
$MI2 = str_replace(['₱', ','], '', filter_input(INPUT_POST, 'MI2', FILTER_SANITIZE_STRING));
$factorratePercentage = str_replace(['₱', ','], '', filter_input(INPUT_POST, 'factorratePercentage', FILTER_SANITIZE_STRING));
$factorrate = str_replace(['₱', ','], '', filter_input(INPUT_POST, 'factorrate', FILTER_SANITIZE_STRING));

// Database connection parameters
$servername = 'localhost';
$dbname = 'centenn1_sedge_accountingsoftware';
$username = 'centenn1_sedge';
$password213 = '@Hanabi16'; 



    try {
            // Create a database connection
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password213);
            
            // Begin a transaction
            $conn->beginTransaction();
            $downpaymentlot = $totalContractPrice3 * ($dpPercentage / 100);
            $remainingBalance = $totalContractPrice3 - ($totalContractPrice3 * ($dpPercentage / 100));
            // Update the buyersinformationsheet table
            $updateBuyerInfoSheet = $conn->prepare("UPDATE buyersinformationsheet SET contractCode=:contractCode, status=:status WHERE customerCode=:customerCode");
            $updateBuyerInfoSheet->bindParam(':contractCode', $customerCode1);
            $updateBuyerInfoSheet->bindValue(':status', 'Pending');
            $updateBuyerInfoSheet->bindParam(':customerCode', $customerCode1);
            $updateBuyerInfoSheet->execute();
        
            // Insert the ledger table
            $insertBuyerInfoSheet = $conn->prepare("INSERT INTO tbl_ledger (classification, contractCode, customerName, customerCode, date_column, lotID, block, section, lotNo, area, phase, type, lotdescTerms, lotListPrice, VAT, subtotaltax, discount, subtotalDiscount, PCF, totalContractPrice, downpayment, dpPercentage, balance, MI1, MI2, factorratePercentage, factorRate, NoOfMonths, paymentDueDate, modeOfpayment, user, salesFrom, dateCreated, timeStamp, status, agentName) VALUES (:lot_classification1, :contractCode, :Fullname1, :customerCode1, :date1, :lot_id1, :lot_block1, :lot_section1, :lot_no1, :lot_area1, :lot_phase1, :lot_type1, :terms, :lotListPrice, :taxs1, :subtotaltax, :discounts1, :subtotalDiscount, :pcf, :totalContractPrice3, :dpPercentage2, :dpPercentage, :balance, :MI1, :MI2, :factorratePercentage, :factorrate, :NoOfMonths, :PaymentDueDate, :paymentMethod, :user, :marketAnalysis, :dateCreated, :timeStamp, :status, :agentName)");
            $insertBuyerInfoSheet->bindValue(':contractCode', $customerCode1);
            $insertBuyerInfoSheet->bindValue(':Fullname1', $Fullname1);
            $insertBuyerInfoSheet->bindValue(':customerCode1', $customerCode1);
            $insertBuyerInfoSheet->bindValue(':date1', $date1);
            $insertBuyerInfoSheet->bindValue(':lot_id1', $lot_id1);
            $insertBuyerInfoSheet->bindValue(':lot_block1', $lot_block1);
            $insertBuyerInfoSheet->bindValue(':lot_section1', $lot_section1);
            $insertBuyerInfoSheet->bindValue(':lot_no1', $lot_no1);
            $insertBuyerInfoSheet->bindValue(':lot_area1', $lot_area1);
            $insertBuyerInfoSheet->bindValue(':lot_phase1', $lot_phase1);
            $insertBuyerInfoSheet->bindValue(':lot_type1', $lot_type1);
            $insertBuyerInfoSheet->bindValue(':lot_classification1', $lot_classification1);
            $insertBuyerInfoSheet->bindValue(':terms', $terms);
            $insertBuyerInfoSheet->bindValue(':lotListPrice', $lotListPrice);
            $insertBuyerInfoSheet->bindValue(':taxs1', $taxs1);
            $insertBuyerInfoSheet->bindValue(':subtotaltax', $subtotaltax);
            $insertBuyerInfoSheet->bindValue(':discounts1', $discounts1);
            $insertBuyerInfoSheet->bindValue(':subtotalDiscount', $subtotalDiscount);
            $insertBuyerInfoSheet->bindValue(':pcf', $pcf);
            $insertBuyerInfoSheet->bindValue(':totalContractPrice3', $totalContractPrice3);
            $insertBuyerInfoSheet->bindValue(':dpPercentage2', $downpaymentlot);
            $insertBuyerInfoSheet->bindValue(':dpPercentage', $dpPercentage);
            $insertBuyerInfoSheet->bindValue(':balance', $remainingBalance);
            $insertBuyerInfoSheet->bindValue(':MI1', $MI1);
            $insertBuyerInfoSheet->bindValue(':MI2', $MI2);
            $insertBuyerInfoSheet->bindValue(':factorratePercentage', $factorratePercentage);
            $insertBuyerInfoSheet->bindValue(':factorrate', $factorrate);
            $insertBuyerInfoSheet->bindValue(':NoOfMonths', $NoOfMonths);
            $insertBuyerInfoSheet->bindValue(':PaymentDueDate', $PaymentDueDate);
            $insertBuyerInfoSheet->bindValue(':paymentMethod', $paymentMethod);
            $insertBuyerInfoSheet->bindValue(':user', $user);
            $insertBuyerInfoSheet->bindValue(':marketAnalysis', $marketAnalysis);
            $insertBuyerInfoSheet->bindValue(':dateCreated', date('Y-m-d'));
            $insertBuyerInfoSheet->bindValue(':timeStamp', date('Y-m-d H:i:s'));
            $insertBuyerInfoSheet->bindValue(':status', 'Pending');
            $insertBuyerInfoSheet->bindValue(':agentName', $agentName);

            $insertBuyerInfoSheet->execute();
        // Compute the factor rate based on the number of months
        $selectedMonths = (int)$NoOfMonths;
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
            if ($terms == 'SpotCash' ){
                $downpayment = $totalContractPrice3 * ($dpPercentage / 100);
                $remainingBalance = $totalContractPrice3 - ($totalContractPrice3 * ($dpPercentage / 100));
                $insertledger1 = $conn->prepare("INSERT INTO tbl_flatinterest (contractCode, costumerName, userAccount, lotListPrice, VAT, VAT_Subtotal, discount, discount_Subtotal, PCF, TCP, DPPercentage, downpayment, balance, noOfMonths, paymentDueDate, payment_Method, user, dateCreated, status, monthlyInstallment, remarks) VALUES (:contractCode, :Fullname1, :customerCode1, :lotListPrice, :taxs1, :subtotaltax, :discounts1, :subtotalDiscount, :pcf, :totalContractPrice3, :dpPercentage, :Initialpayment, :balance, :NoOfMonths, :PaymentDueDate, :paymentMethod, :user, :dateCreated, :status, :monthlyInstallment, :remarks)");
                for ($month = 1; $month <= 1 ; $month++) {
                    $PaymentDueDate = date('Y-m-d', strtotime($PaymentDueDate . ' +1 month'));
                        $monthlyInstallment = $remainingBalance;
                        $remainingBalance;
                        $remarks = 'Full Downpayment';
                        $pcf1 = $pcf;
                        $subtotaltax1 =  $subtotaltax;
                
                    // Bind the values for the prepared statement
                    $insertledger1->bindValue(':contractCode', $customerCode1);
                    $insertledger1->bindValue(':Fullname1', $Fullname1);
                    $insertledger1->bindValue(':customerCode1', $customerCode1);
                    $insertledger1->bindValue(':lotListPrice', $lotListPrice);
                    $insertledger1->bindValue(':taxs1', $taxs1);
                    $insertledger1->bindValue(':subtotaltax', $subtotaltax1);
                    $insertledger1->bindValue(':discounts1', $discounts1);
                    $insertledger1->bindValue(':subtotalDiscount', $subtotalDiscount);
                    $insertledger1->bindValue(':pcf', $pcf1);
                    $insertledger1->bindValue(':totalContractPrice3', ceil($totalContractPrice3));
                    $insertledger1->bindValue(':dpPercentage', ceil($dpPercentage));
                    $insertledger1->bindValue(':balance', 0);
                    $insertledger1->bindValue(':NoOfMonths', $selectedMonths);
                    $insertledger1->bindValue(':Initialpayment', $month === 1 ? ceil($downpayment) : 0); // Set initial payment for the first month only
                    $insertledger1->bindValue(':PaymentDueDate', $PaymentDueDate);
                    $insertledger1->bindValue(':paymentMethod', $paymentMethod);
                    $insertledger1->bindValue(':user', $user);
                    $insertledger1->bindValue(':dateCreated', date('Y-m-d'));
                    $insertledger1->bindValue(':status', 'Unpaid');
                    $insertledger1->bindValue(':monthlyInstallment', ceil($monthlyInstallment)); // Set monthly installment for the remaining months
                    $insertledger1->bindValue(':remarks', $remarks);

                    $insertledger1->execute();
                }
            }
            if ($terms == 'M_Cash' ){
                $downpayment = $totalContractPrice3 * ($dpPercentage / 100);
                $remainingBalance = $totalContractPrice3 - ($totalContractPrice3 * ($dpPercentage / 100));
                $insertledger1 = $conn->prepare("INSERT INTO tbl_flatinterest (contractCode, costumerName, userAccount, lotListPrice, VAT, VAT_Subtotal, discount, discount_Subtotal, PCF, TCP, DPPercentage, downpayment, balance, noOfMonths, paymentDueDate, payment_Method, user, dateCreated, status, monthlyInstallment, remarks) VALUES (:contractCode, :Fullname1, :customerCode1, :lotListPrice, :taxs1, :subtotaltax, :discounts1, :subtotalDiscount, :pcf, :totalContractPrice3, :dpPercentage, :Initialpayment, :balance, :NoOfMonths, :PaymentDueDate, :paymentMethod, :user, :dateCreated, :status, :monthlyInstallment, :remarks)");
                for ($month = 1; $month <= 2 ; $month++) {
                    $PaymentDueDate = date('Y-m-d', strtotime($PaymentDueDate . ' +1 month'));
                    if ($month === 1) { // First row for downpayment
                        $monthlyInstallment = $downpayment;
                        $remainingBalance = $totalContractPrice3 - $downpayment;
                        $remarks = 'Downpayment';
                        $pcf1 = '0';
                        $subtotaltax1 = '0';
                    } else { // Rows for regular monthly installments
                        $monthlyInstallment = $remainingBalance;
                        $remainingBalance;
                        $remarks = 'Full Downpayment';
                        $pcf1 = $pcf;
                        $subtotaltax1 =  $subtotaltax;
                    }
                
                
                    if ($month === 2) {
                        $monthlyInstallment = $remainingBalance; // Add remaining balance to the last monthly installment
                        $remainingBalance = 0; // Set the remaining balance to 0
                    }
                
                    // Bind the values for the prepared statement
                    $insertledger1->bindValue(':contractCode', $customerCode1);
                    $insertledger1->bindValue(':Fullname1', $Fullname1);
                    $insertledger1->bindValue(':customerCode1', $customerCode1);
                    $insertledger1->bindValue(':lotListPrice', $lotListPrice);
                    $insertledger1->bindValue(':taxs1', $taxs1);
                    $insertledger1->bindValue(':subtotaltax', $subtotaltax1);
                    $insertledger1->bindValue(':discounts1', $discounts1);
                    $insertledger1->bindValue(':subtotalDiscount', $subtotalDiscount);
                    $insertledger1->bindValue(':pcf', $pcf1);
                    $insertledger1->bindValue(':totalContractPrice3', ceil($totalContractPrice3));
                    $insertledger1->bindValue(':dpPercentage', ceil($dpPercentage));
                    $insertledger1->bindValue(':balance', ceil($remainingBalance));
                    $insertledger1->bindValue(':NoOfMonths', $selectedMonths);
                    $insertledger1->bindValue(':Initialpayment', $month === 1 ? ceil($downpayment) : 0); // Set initial payment for the first month only
                    $insertledger1->bindValue(':PaymentDueDate', $PaymentDueDate);
                    $insertledger1->bindValue(':paymentMethod', $paymentMethod);
                    $insertledger1->bindValue(':user', $user);
                    $insertledger1->bindValue(':dateCreated', date('Y-m-d'));
                    $insertledger1->bindValue(':status', 'Unpaid');
                    $insertledger1->bindValue(':monthlyInstallment', ceil($monthlyInstallment)); // Set monthly installment for the remaining months
                    $insertledger1->bindValue(':remarks', $remarks);

                    $insertledger1->execute();
                }
            }
            if ($terms == 'AtNeedPrice' ){
                $downpayment = $totalContractPrice3 * ($dpPercentage / 100);
                $remainingBalance = $totalContractPrice3 - ($totalContractPrice3 * ($dpPercentage / 100));
                $insertledger1 = $conn->prepare("INSERT INTO tbl_flatinterest (contractCode, costumerName, userAccount, lotListPrice, VAT, VAT_Subtotal, discount, discount_Subtotal, PCF, TCP, DPPercentage, downpayment, balance, noOfMonths, paymentDueDate, payment_Method, user, dateCreated, status, monthlyInstallment, remarks) VALUES (:contractCode, :Fullname1, :customerCode1, :lotListPrice, :taxs1, :subtotaltax, :discounts1, :subtotalDiscount, :pcf, :totalContractPrice3, :dpPercentage, :Initialpayment, :balance, :NoOfMonths, :PaymentDueDate, :paymentMethod, :user, :dateCreated, :status, :monthlyInstallment, :remarks)");
                for ($month = 1; $month <= 2 ; $month++) {
                    $PaymentDueDate = date('Y-m-d', strtotime($PaymentDueDate . ' +1 month'));
                    if ($month === 1) { // First row for downpayment
                        $monthlyInstallment = $downpayment;
                        $remainingBalance = $totalContractPrice3 - $downpayment;
                        $remarks = 'Downpayment';
                        $pcf1 = '0';
                        $subtotaltax1 = '0';
                    } else { // Rows for regular monthly installments
                        $monthlyInstallment = $remainingBalance;
                        $remainingBalance;
                        $remarks = 'Full Downpayment';
                        $pcf1 = $pcf;
                        $subtotaltax1 =  $subtotaltax;
                    }
                
                
                    if ($month === 2) {
                        $monthlyInstallment = $remainingBalance; // Add remaining balance to the last monthly installment
                        $remainingBalance = 0; // Set the remaining balance to 0
                    }
                
                    // Bind the values for the prepared statement
                    $insertledger1->bindValue(':contractCode', $customerCode1);
                    $insertledger1->bindValue(':Fullname1', $Fullname1);
                    $insertledger1->bindValue(':customerCode1', $customerCode1);
                    $insertledger1->bindValue(':lotListPrice', $lotListPrice);
                    $insertledger1->bindValue(':taxs1', $taxs1);
                    $insertledger1->bindValue(':subtotaltax', $subtotaltax1);
                    $insertledger1->bindValue(':discounts1', $discounts1);
                    $insertledger1->bindValue(':subtotalDiscount', $subtotalDiscount);
                    $insertledger1->bindValue(':pcf', $pcf1);
                    $insertledger1->bindValue(':totalContractPrice3', ceil($totalContractPrice3));
                    $insertledger1->bindValue(':dpPercentage', ceil($dpPercentage));
                    $insertledger1->bindValue(':balance', ceil($remainingBalance));
                    $insertledger1->bindValue(':NoOfMonths', $selectedMonths);
                    $insertledger1->bindValue(':Initialpayment', $month === 1 ? ceil($downpayment) : 0); // Set initial payment for the first month only
                    $insertledger1->bindValue(':PaymentDueDate', $PaymentDueDate);
                    $insertledger1->bindValue(':paymentMethod', $paymentMethod);
                    $insertledger1->bindValue(':user', $user);
                    $insertledger1->bindValue(':dateCreated', date('Y-m-d'));
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
            $loanAmount = $totalContractPrice3 - ($totalContractPrice3 * ($dpPercentage / 100));
            $downpayment = $totalContractPrice3 * ($dpPercentage / 100);
            $remainingBalance = $totalContractPrice3 - ($totalContractPrice3 * ($dpPercentage / 100));
            $insertledger = $conn->prepare("INSERT INTO tbl_flatinterest (contractCode, costumerName, userAccount, lotListPrice, VAT, VAT_Subtotal, discount, discount_Subtotal, PCF, TCP, DPPercentage, downpayment, balance, noOfMonths, paymentDueDate, payment_Method, user, dateCreated, status, monthlyInstallment, interest, principal, remarks) VALUES (:contractCode, :Fullname1, :customerCode1, :lotListPrice, :taxs1, :subtotaltax, :discounts1, :subtotalDiscount, :pcf, :totalContractPrice3, :dpPercentage, :Initialpayment, :balance, :NoOfMonths, :PaymentDueDate, :paymentMethod, :user, :dateCreated, :status, :monthlyInstallment, :interest, :principal, :remarks)");
           for ($month = 0; $month <= $selectedMonths; $month++) {
                // Calculate the payment due date based on the month
               

                // Calculate the monthly interest
                $Interest = $remainingBalance * $factorRate;
                
                $totalpcf = (int)$pcf / $selectedMonths;
                // Calculate the monthly payment
                $monthlyPayment = ($loanAmount * $factorRate) / (1 - (1 + $factorRate)**(-$selectedMonths));

                // Calculate the monthly principal
                $monthlyPrincipal = $monthlyPayment - $Interest;
              
                if ($month === 0) { // First row for downpayment
                    $PaymentDueDate = date('Y-m-d', strtotime($PaymentDueDate)); // Keep the actual date for the first row
                    $monthlyInstallment = $downpayment;
                    $remainingBalance = $totalContractPrice3 - $downpayment;
                    $remarks = 'Downpayment';
                    $totalTax = 0;
                } else { // Rows for regular monthly installments
                    $PaymentDueDate = date('Y-m-d', strtotime($PaymentDueDate . ' +1 month')); // Add one month to the previous PaymentDueDate
                    $monthlyInstallment = $monthlyPayment;
                    $remainingBalance -= $monthlyPrincipal;
                    $remarks = 'Monthly Payment';
                    $totalTax = 0.12 * $monthlyPrincipal;
                }


                if ($month === $selectedMonths + 1) {
                    $monthlyInstallment += $remainingBalance; // Add remaining balance to the last monthly installment
                    $remainingBalance = 0; // Set the remaining balance to 0
                }

                // Bind the values for the prepared statement
                $insertledger->bindValue(':contractCode', $customerCode1);
                $insertledger->bindValue(':Fullname1', $Fullname1);
                $insertledger->bindValue(':customerCode1', $customerCode1);
                $insertledger->bindValue(':lotListPrice', $lotListPrice);
                $insertledger->bindValue(':taxs1', $taxs1);
                $insertledger->bindValue(':subtotaltax', $totalTax);
                $insertledger->bindValue(':discounts1', $discounts1);
                $insertledger->bindValue(':subtotalDiscount', $subtotalDiscount);
                $insertledger->bindValue(':pcf', $totalpcf);
                $insertledger->bindValue(':totalContractPrice3', ceil($totalContractPrice3));
                $insertledger->bindValue(':dpPercentage', ceil($dpPercentage));
                $insertledger->bindValue(':balance', ceil($remainingBalance));
                $insertledger->bindValue(':NoOfMonths', $selectedMonths);
                $insertledger->bindValue(':Initialpayment', $month === 1 ? ceil($downpayment) : 0); // Set initial payment for the first month only
                $insertledger->bindValue(':PaymentDueDate', $PaymentDueDate);
                $insertledger->bindValue(':paymentMethod', $paymentMethod);
                $insertledger->bindValue(':user', $user);
                $insertledger->bindValue(':dateCreated', date('Y-m-d'));
                $insertledger->bindValue(':status', 'Unpaid');
                $insertledger->bindValue(':monthlyInstallment', ceil($monthlyInstallment)); // Set monthly installment for the remaining months
                $insertledger->bindValue(':interest', $month === 0 ? 0 : ceil($Interest));
                $insertledger->bindValue(':principal', $month === 0 ? 0 : ceil($monthlyPrincipal));
                $insertledger->bindValue(':remarks', $remarks);

                $insertledger->execute();
            }
        }

    // Update the buyersinformationsheet table
        $updateBuyerInfoSheet = $conn->prepare("UPDATE buyersinformationsheet SET contractCode=:contractCode, status=:status WHERE customerCode=:customerCode");
        $updateBuyerInfoSheet->bindParam(':contractCode', $customerCode1);
        $updateBuyerInfoSheet->bindValue(':status', 'Pending');
        $updateBuyerInfoSheet->bindParam(':customerCode', $customerCode1);
        $updateBuyerInfoSheet->execute();
        
        // Update the tbl_lotdescription table
        $updateLotDescription = $conn->prepare("UPDATE tbl_lotdescription SET status=:status WHERE id=:lot_id");
        $updateLotDescription->bindValue(':status', 'Active');
        $updateLotDescription->bindParam(':lot_id', $lot_id1);
        $updateLotDescription->execute();

        // Generate a random password and salt
        $password = generateRandomPassword();
        $salt = generateRandomSalt();

        // Generate the password hash
        $passwordHash = password_hash($password . $salt, PASSWORD_DEFAULT);
        try {
            // Insert data into tbl_clientaccount
            $insertClientAccount = $conn->prepare("INSERT INTO tbl_clientaccount (username, name, email, password_hash, password_salt) VALUES (:customerCode, :Fullname1, :Email, :passwordHash, :passwordSalt)");
            $insertClientAccount->bindParam(':customerCode', $customerCode1);
            $insertClientAccount->bindParam(':Fullname1', $Fullname1);
            $insertClientAccount->bindParam(':Email', $Email);
            $insertClientAccount->bindParam(':passwordHash', $passwordHash);
            $insertClientAccount->bindParam(':passwordSalt', $salt);
            
            $insertClientAccount->execute();

            $insertClientAccount1 = $conn->prepare("INSERT INTO tbl_button (crematename, pdfGenerated) VALUES (:customerCode1, :password1)");
            $insertClientAccount1->bindParam(':customerCode1', $customerCode1);
            $insertClientAccount1->bindParam(':password1', $password);
            $insertClientAccount1->execute();
            $to = $Email;
            $subject = 'Account Information';
            $message = "Username: $customerCode1\nPassword: $password\nhttps://centennialgarden.ph/SSDCAdmin180231/FORM.Authorization_ClientLoginPage";
            $headers = "From: southspringuserAccount@centennialgarden.ph";
            
            try {
                $success = mail($to, $subject, $message, $headers);
            
                if ($success) {
                    echo "Email sent successfully!";
                } else {
                    echo "Failed to send email.";
                }
            } catch (Exception $e) {
                echo "An error occurred: " . $e->getMessage();
            }
            // Commit the transaction
            $conn->commit();

            $_SESSION['success_message'] = 'Lot Ledger 1 purchase is successful. An email with your login credentials has been sent to your email address.';
          
           header('Content-Type: application/json');
            echo json_encode($response);
            exit;
        } catch (PDOException $e) {
            // Handle the integrity constraint violation error
            if ($e->getCode() === '23000' && strpos($e->getMessage(), 'Duplicate entry') !== false) {
            echo '<div class="error-notification">An account with this email already exists.</div>';
            } else {
            echo '<div class="error-notification">An error occurred while creating the account.</div>';
            }
        }
    } catch (PDOException $e) {
        // Rollback the transaction if there's an error
        $conn->rollback();
        echo "Error: " . $e->getMessage();
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
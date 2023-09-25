<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
// Replace these variables with your database credentials
$host = 'localhost';
$dbname = 'centenn1_sedge_accountingsoftware';
$username123 = 'centenn1_sedge';
$password0998 = '@Hanabi16';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username123, $password0998);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $nameOfInterviewee = filter_var($_POST['IntervieweeName'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $relationToDeceased = filter_var($_POST['relationToDeceased'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $deceasedIs = filter_var($_POST['DeceasedIs'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $conveyed = filter_var($_POST['ConveyedStr'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $deceasedName = filter_var($_POST['Name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $dateBorn = filter_var($_POST['DateBorn'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $dateDeceased = filter_var($_POST['DateDeceased'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $age = filter_var($_POST['Age'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $religion = filter_var($_POST['Religion'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $intermentDate = filter_var($_POST['dateinput'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $intermentTime = filter_var($_POST['timeinput'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $interment = filter_var($_POST['desiredIntermentdisplay'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $funeralServicesProvider = filter_var($_POST['Funeralserviceprovider'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $natureOfCoffin = filter_var($_POST['selectednatureOfCoffin'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $crematorium = filter_var($_POST['Crematorium'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $dateCremated = filter_var($_POST['DateCremated'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $type = filter_var($_POST['intermentType'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $class = filter_var($_POST['ClassificationClass'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $expectedNumberOfGuest = filter_var($_POST['Expectednumber'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $waterDispenser = filter_var($_POST['WithDispencer'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $acousticIntegration = filter_var($_POST['AccousticIntegration'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $requestedSong = filter_var($_POST['itemList'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $chapel = filter_var($_POST['IndicateChapel'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $chapelusedFor = filter_var($_POST['For'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $transfer_OriginBody = filter_var($_POST['cemeteryType'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $transfer_nameOfMemorialPark = filter_var($_POST['Nameofmemorialpark'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $transfer_conditionOfLatter = filter_var($_POST['Conditionoflatter'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $lotLayout_EpitaphReferenceNumber_volume = filter_var($_POST['Volume1'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $lotLayout_EpitaphReferenceNumber_issue = filter_var($_POST['Volume2'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $lotLayout_EpitaphReferenceNumber_seriesNumber = filter_var($_POST['Volume3'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $lotLayout_MarkerReferenceNumber_issue = filter_var($_POST['Volume5'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $lotLayout_MarkerReferenceNumber_volume = filter_var($_POST['Volume4'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $lotLayout_MarkerReferenceNumber_seriesNumber = filter_var($_POST['Volume6'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $lotLayout_otherSpecialInstruction = filter_var($_POST['SpecialInstractions'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $lotLayout_otherEpitaphreferenceNumber = filter_var($_POST['Epitaph'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $lotLayout_othermarkertreferenceNumber = filter_var($_POST['MarkerReference'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $cryptLayoutdetails = filter_var($_POST['layoutSelect'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    
    
        function sanitizeIntermentFee($value) {
        // Remove '₱' and commas from the value
        $cleanedValue = str_replace(['₱', ','], '', $value);
        return $cleanedValue;
    }
    $totalIntermentfee = filter_input(INPUT_POST, 'intermentPriviledge', FILTER_CALLBACK, ['options' => 'sanitizeIntermentFee']);
    $addIntermentPriviledge = filter_input(INPUT_POST, 'intermentMarkup', FILTER_CALLBACK, ['options' => 'sanitizeIntermentFee']);
    $lessIntermentPriviledge = filter_input(INPUT_POST, 'amountPaid', FILTER_CALLBACK, ['options' => 'sanitizeIntermentFee']);
    
    // Need to revise 
    $userAccount = filter_var($_POST['customerCode'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $userName = filter_var($_POST['clientName'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $encoderName = filter_var($_POST['userAccount123'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $dateCreated = date('Y-m-d H:i:s');
    $status = 'PENDING';

    $timestamp = round(microtime(true) * 1000);
    
    // Generate a unique identifier using the timestamp
    $IIS = "SSDC-ISS-" . substr(strval($timestamp), -8);
    
    if ($totalIntermentfee == "") {
        $totalIntermentfee = 0;
    }

    $insertQuery = "INSERT INTO tbl_Interment (nameOfInterviewee, relationToDeceased, deceasedIs, conveyed, deceasedName, dateBorn, dateDeceased, age, religion, intermentDate, intermentTime, interment, funeralServicesProvider,
                                                natureOfCoffin, crematorium, dateCremated, type, class, expectedNumberOfGuest, waterDispenser, acousticIntegration, requestedSong, chapel, chapelusedFor, transfer_OriginBody,
                                                transfer_nameOfMemorialPark, transfer_conditionOfLatter, lotLayout_EpitaphReferenceNumber_volume, lotLayout_EpitaphReferenceNumber_issue, lotLayout_EpitaphReferenceNumber_seriesNumber,
                                                lotLayout_MarkerReferenceNumber_issue, lotLayout_MarkerReferenceNumber_volume, lotLayout_MarkerReferenceNumber_seriesNumber, lotLayout_otherSpecialInstruction,
                                                lotLayout_otherEpitaphreferenceNumber, lotLayout_othermarkertreferenceNumber, cryptLayoutdetails, lessIntermentPriviledge, addIntermentPriviledge, totalIntermentfee, userAccount,
                                                userName, dateCreated, encoderName, status, ISS_no) 
                                                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($insertQuery);
    $paymentStatus = 'Paid';
    
    $stmt->execute([$nameOfInterviewee, $relationToDeceased, $deceasedIs, $conveyed, $deceasedName, $dateBorn, $dateDeceased, $age, $religion, $intermentDate,
    $intermentTime, $interment, $funeralServicesProvider, $natureOfCoffin, $crematorium, $dateCremated, $type, $class, $expectedNumberOfGuest, $waterDispenser,
    $acousticIntegration, $requestedSong, $chapel, $chapelusedFor, $transfer_OriginBody, $transfer_nameOfMemorialPark, $transfer_conditionOfLatter, $lotLayout_EpitaphReferenceNumber_volume, $lotLayout_EpitaphReferenceNumber_issue, $lotLayout_EpitaphReferenceNumber_seriesNumber,
    $lotLayout_MarkerReferenceNumber_issue, $lotLayout_MarkerReferenceNumber_volume, $lotLayout_MarkerReferenceNumber_seriesNumber, $lotLayout_otherSpecialInstruction, $lotLayout_otherEpitaphreferenceNumber, $lotLayout_othermarkertreferenceNumber, $cryptLayoutdetails, $lessIntermentPriviledge, $addIntermentPriviledge, $totalIntermentfee,
    $userAccount, $userName, $dateCreated, $encoderName, $status, $IIS]);
    
        $deceasedNameArray = explode(', ', $deceasedName);
        $dateBornArray = explode(', ', $dateBorn);
        $dateDeceasedArray = explode(', ', $dateDeceased);
        $ageArray = explode(', ', $age);
        $religionArray = explode(', ', $religion);

     if (
        count($deceasedNameArray) === count($dateBornArray) &&
        count($deceasedNameArray) === count($dateDeceasedArray) &&
        count($deceasedNameArray) === count($ageArray) &&
        count($deceasedNameArray) === count($religionArray)
    ) {
        // All arrays have the same number of elements, proceed with the insertion
        $insertQuery1 = "INSERT INTO tbl_deceased (customerCode, ISS_no, deceasedName, deceasedDateBorn, deceasedDate, deceasedAge, deceasedReligion, intermentDate, intermentTime, dateCreated, user) 
                         VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        
        $pdo->beginTransaction(); // Start a transaction for the deceased records
        
        foreach ($deceasedNameArray as $index => $name) {
            $dateBorn = $dateBornArray[$index];
            $dateDeceased = $dateDeceasedArray[$index];
            $age = $ageArray[$index];
            $religion = $religionArray[$index];
            
            try {
                // Prepare $stmt1 for each execution
                $stmt1 = $pdo->prepare($insertQuery1);
    
                $stmt1->execute([
                    $userAccount, 
                    $IIS, 
                    $name, 
                    $dateBorn, 
                    $dateDeceased, 
                    $age, 
                    $religion, 
                    $intermentDate, 
                    $intermentTime, 
                    $dateCreated, 
                    $encoderName
                ]);
                
                // Check for errors
                $errorInfo = $stmt1->errorInfo();
                if ($errorInfo[0] !== '00000') {
                    // Handle the error or log it
                    throw new Exception("Error inserting data for index $index: " . $errorInfo[2]);
                }
            } catch (Exception $ex) {
                // Handle the exception, rollback the transaction, and re-throw the exception
                $pdo->rollBack(); // Roll back the transaction for deceased records
                throw $ex;
            }
        }
    
        // If no errors occurred, commit the transaction for deceased records
        $pdo->commit();
        
        echo "Data inserted successfully!";
    } else {
        echo "Arrays have different lengths. Data not inserted.";
    }
    } catch (PDOException $e) {
        // Handle the exception
        $pdo->rollBack(); // Roll back the transaction for interment record on exception
        echo "PDO Exception: " . $e->getMessage() . "<br>";
        echo "PDO Error Code: " . $e->getCode() . "<br>";
        echo "PDO Error Info: " . implode(", ", $e->errorInfo()) . "<br>";
        echo "SQL Query: " . $insertQuery . "<br>";
        die(); // Terminate the script
    } catch (Exception $ex) {
        // Handle other exceptions
        $pdo->rollBack(); // Roll back the transaction for other exceptions
        echo "Exception: " . $ex->getMessage() . "<br>";
        die(); // Terminate the script
    }
    ?>

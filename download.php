<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Include Composer autoloader if using Composer
require 'vendor/autoload.php';

use Dompdf\Dompdf;
use Dompdf\Options;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve data from the form
    $customerCode = $_POST['customerCode1'];
    $clientName = $_POST['contractCode'];
    $date = $_POST['date'];
    
    $fullname = $_POST['fullname'];
    $residenceAddress = $_POST['residenceAddress'];
    $billingAddress = $_POST['billingAddress'];
    $issuedAt = $_POST['issuedAt'];
    $issuedOn = $_POST['issuedOn'];
    $sex = $_POST['sex'];
    $dateofBirth = $_POST['dateofBirth'];
    $citizenship = $_POST['citizenship'];
    $height = $_POST['height'];
    $weight = $_POST['weight'];
    $sss = $_POST['sss'];
    $HFMF = $_POST['HFMF'];
    $TIN = $_POST['TIN'];
    $NBI = $_POST['NBI'];
    $maritalStatus = $_POST['maritalStatus'];
    $preNuptial = $_POST['preNuptial'];
    $residentialPhone = $_POST['residentialPhone'];
    $mobilePhone = $_POST['mobilePhone'];
    $businessPhone = $_POST['businessPhone'];
    $emailAddress = $_POST['emailAddress'];
    $spouseName = $_POST['spouseName'];
    $spouseOccupation = $_POST['spouseOccupation'];
    $fatherName = $_POST['fatherName'];
    $fatherOccupation = $_POST['fatherOccupation'];
    $motherName = $_POST['motherName'];
    $motherOccupation = $_POST['motherOccupation'];
    $childrenName = $_POST['childrenName'];
    $dateOfBirthChildren = $_POST['dateOfBirthChildren'];
    $age = $_POST['age'];
    $employmentStatus = $_POST['employmentStatus'];
    $sourceOfIncome = $_POST['sourceOfIncome'];
    $employerBusinessName = $_POST['employerBusinessName'];
    $natureBusiness = $_POST['natureBusiness'];
    $positionInCompany = $_POST['positionInCompany'];
    $employmentDate = $_POST['employmentDate'];
    $memorialPlot = $_POST['memorialPlot'];
    $namememorialPlot = $_POST['namememorialPlot'];
    $sincememorialPlot = $_POST['sincememorialPlot'];
    $locationmemorialPlot = $_POST['locationmemorialPlot'];
    $lotID = $_POST['lotID01'];
    $lotArea = $_POST['lotArea'];
    $section = $_POST['section01'];
    $lotphase = $_POST['lotphase'];
    $lottype = $_POST['lottype'];
    $lotclass = $_POST['lotclass'];
    $lotno = $_POST['lotno'];
    $lotTerms = $_POST['lotTerms'];
    $initialPayment = $_POST['initialPayment'];
    $cryptID = $_POST['cryptID'];
    $cryptPhase = $_POST['cryptPhase'];
    $cryptLevel = $_POST['cryptLevel'];
    $cryptArea = $_POST['cryptArea'];
    $cryptSection = $_POST['cryptSection'];
    $cryptColumn = $_POST['cryptColumn'];
    $unitNo = $_POST['unitNo'];
    $cryptClass = $_POST['cryptClass'];
    $lotTCP = $_POST['lotTCP'];
    $cryptTerms = $_POST['cryptTerms'];
    $paymentDuedate = $_POST['paymentDuedate'];
    $residenceSince = $_POST['residenceSince'];
    $dateCreated = $_POST['dateCreated'];
    $listprice = $_POST['listprice01'];
    

    try {
        // Create a new Dompdf instance with options
        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isRemoteEnabled', true);

        $dompdf = new Dompdf($options);

        // Load HTML content from a separate file (adjust path as needed)
        $html = file_get_contents('BuyerInformationSheet.php');
        ob_start();
        include('BuyerInformationSheet.php');
        $html = ob_get_clean();

        // Replace placeholders in the HTML with retrieved data
        $html = str_replace('{{customerCode}}', $customerCode, $html);
        $html = str_replace('{{clientName}}', $clientName, $html);
        $html = str_replace('{{date}}', $date, $html);
        
        $html = str_replace('{{residenceSince}}', $residenceSince, $html);
        
         $html = str_replace('{{fullname}}', $fullname, $html);
         $html = str_replace('{{residenceAddress}}', $residenceAddress, $html);
         $html = str_replace('{{billingAddress}}', $billingAddress, $html);
         $html = str_replace('{{issuedAt}}', $issuedAt, $html);
         $html = str_replace('{{issuedOn}}', $issuedOn, $html);
         $html = str_replace('{{sex}}', $sex, $html);
         $html = str_replace('{{dateofBirth}}', $dateofBirth, $html);
         $html = str_replace('{{citizenship}}', $citizenship, $html);
         $html = str_replace('{{height}}', $height, $html);
         $html = str_replace('{{weight}}', $weight, $html);
         $html = str_replace('{{sss}}', $sss, $html);
         $html = str_replace('{{HFMF}}', $HFMF, $html);
         $html = str_replace('{{TIN}}', $TIN, $html);
         $html = str_replace('{{NBI}}', $NBI, $html);
         $html = str_replace('{{maritalStatus}}', $maritalStatus, $html);
         $html = str_replace('{{preNuptial}}', $preNuptial, $html);
         $html = str_replace('{{residentialPhone}}', $residentialPhone, $html);
         $html = str_replace('{{mobilePhone}}', $mobilePhone, $html);
         $html = str_replace('{{businessPhone}}', $businessPhone, $html);
         $html = str_replace('{{emailAddress}}', $emailAddress, $html);
         $html = str_replace('{{spouseName}}', $spouseName, $html);
         $html = str_replace('{{spouseOccupation}}', $spouseOccupation, $html);
         $html = str_replace('{{fatherName}}', $fatherName, $html);
         $html = str_replace('{{fatherOccupation}}', $fatherOccupation, $html);
         $html = str_replace('{{motherName}}', $motherName, $html);
         $html = str_replace('{{motherOccupation}}', $motherOccupation, $html);
         $html = str_replace('{{childrenName}}', $childrenName, $html);
         $html = str_replace('{{dateOfBirthChildren}}', $dateOfBirthChildren, $html);
         $html = str_replace('{{age}}', $age, $html);
         $html = str_replace('{{employmentStatus}}', $employmentStatus, $html);
         $html = str_replace('{{sourceOfIncome}}', $sourceOfIncome, $html);
         $html = str_replace('{{employerBusinessName}}', $employerBusinessName, $html);
         $html = str_replace('{{natureBusiness}}', $natureBusiness, $html);
         $html = str_replace('{{positionInCompany}}', $positionInCompany, $html);
         $html = str_replace('{{employmentDate}}', $employmentDate, $html);
         $html = str_replace('{{memorialPlot}}', $memorialPlot, $html);
         
         $html = str_replace('{{namememorialPlot}}', $namememorialPlot, $html);
         $html = str_replace('{{sincememorialPlot}}', $sincememorialPlot, $html);
         $html = str_replace('{{locationmemorialPlot}}', $locationmemorialPlot, $html);
         $html = str_replace('{{lotID}}', $lotID, $html);
         $html = str_replace('{{lotArea}}', $lotArea, $html);
         $html = str_replace('{{section}}', $section, $html);
         $html = str_replace('{{lotphase}}', $lotphase, $html);
         
         $html = str_replace('{{lottype}}', $lottype, $html);
         $html = str_replace('{{lotclass}}', $lotclass, $html);
         $html = str_replace('{{lotno}}', $lotno, $html);
         $html = str_replace('{{lotTerms}}', $lotTerms, $html);
         $html = str_replace('{{cryptID}}', $cryptID, $html);
         $html = str_replace('{{cryptPhase}}', $cryptPhase, $html);
         $html = str_replace('{{cryptLevel}}', $cryptLevel, $html);
         $html = str_replace('{{cryptArea}}', $cryptArea, $html);
         $html = str_replace('{{cryptSection}}', $cryptSection, $html);
         $html = str_replace('{{cryptColumn}}', $cryptColumn, $html);
         $html = str_replace('{{unitNo}}', $unitNo, $html);
         $html = str_replace('{{cryptClass}}', $cryptClass, $html);
         
         $html = str_replace('{{lotTCP}}', $lotTCP, $html);
         $html = str_replace('{{cryptTerms}}', $cryptTerms, $html);
         $html = str_replace('{{initialPayment}}', $initialPayment, $html);
         $html = str_replace('{{paymentDuedate}}', $paymentDuedate, $html);
         $html = str_replace('{{listprice}}', $listprice, $html);
         $html = str_replace('{{dateCreated}}', $dateCreated, $html);
         

        // Load HTML content into Dompdf
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'portrait'); // Set paper size to A4 and orientation to portrait

        // Render the PDF
        $dompdf->render();

        // Set the appropriate headers for PDF download
        header('Content-Type: application/pdf');
        header('Content-Disposition: attachment; filename="BuyerInformationSheet.pdf"');

        // Output the PDF content
        echo $dompdf->output();
    } catch (Exception $e) {
        echo "An error occurred: " . $e->getMessage();
    }
}
?>

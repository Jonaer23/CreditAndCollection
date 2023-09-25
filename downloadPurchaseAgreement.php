<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Include Composer autoloader if using Composer
require 'vendor/autoload.php';

use Dompdf\Dompdf;
use Dompdf\Options;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve data from the form
    $customername1 = $_POST['customername1'];
    $citizenship1 = $_POST['citizenship1'];
    $nameofspouse1 = $_POST['nameofspouse1'];
    $customeraddress1 = $_POST['customeraddress1'];
    $lotPhase1 = $_POST['lotPhase1'];
    $lotarea1 = $_POST['lotarea1'];
    $lotsection1 = $_POST['lotsection1'];
    $lotID1 = $_POST['lotID1'];
    $lottype1 = $_POST['lottype1'];
    $lotclasification1 = $_POST['lotclasification1'];
    $cryptphase1 = $_POST['cryptphase1'];
    $cryptlevel1 = $_POST['cryptlevel1'];
    $cryptarea1 = $_POST['cryptarea1'];
    $cryptsection1 = $_POST['cryptsection1'];
    $cryptcolumn1 = $_POST['cryptcolumn1'];
    $cryptunitno1 = $_POST['cryptunitno1'];
    $cryptclasification1 = $_POST['cryptclasification1'];
    $cryptID1 = $_POST['cryptID1'];
    $terms1 = $_POST['terms1'];
    $vat1 = $_POST['vat1'];
    $tcp1 = $_POST['tcp1'];
    $llp1 = $_POST['llp1'];
    $discount1 = $_POST['discount1'];

    try {
        // Create a new Dompdf instance with options
        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isRemoteEnabled', true);

        $dompdf = new Dompdf($options);

        // Load HTML content from a separate file (adjust path as needed)
        $html = file_get_contents('PurchaseAgreement.php');
        ob_start();
        include('PurchaseAgreement.php');
        $html = ob_get_clean();

        // Replace placeholders in the HTML with retrieved data
        $html = str_replace('{{customername1}}', $customername1, $html);
        $html = str_replace('{{citizenship1}}', $citizenship1, $html);
        $html = str_replace('{{nameofspouse1}}', $nameofspouse1, $html);
        $html = str_replace('{{customeraddress1}}', $customeraddress1, $html);
        $html = str_replace('{{lotPhase1}}', $lotPhase1, $html);
        $html = str_replace('{{lotarea1}}', $lotarea1, $html);
        $html = str_replace('{{lotsection1}}', $lotsection1, $html);
        $html = str_replace('{{lotID1}}', $lotID1, $html);
        $html = str_replace('{{lottype1}}', $lottype1, $html);
        $html = str_replace('{{lotclasification1}}', $lotclasification1, $html);
        $html = str_replace('{{cryptphase1}}', $cryptphase1, $html);
        $html = str_replace('{{cryptlevel1}}', $cryptlevel1, $html);
        $html = str_replace('{{cryptarea1}}', $cryptarea1, $html);
        $html = str_replace('{{cryptsection1}}', $cryptsection1, $html);
        $html = str_replace('{{cryptcolumn1}}', $cryptcolumn1, $html);
        $html = str_replace('{{cryptunitno1}}', $cryptunitno1, $html);
        $html = str_replace('{{cryptclasification1}}', $cryptclasification1, $html);
        $html = str_replace('{{cryptID1}}', $cryptID1, $html);
        $html = str_replace('{{terms1}}', $terms1, $html);
        $html = str_replace('{{vat1}}', $vat1, $html);
        $html = str_replace('{{tcp1}}', $tcp1, $html);
        $html = str_replace('{{llp1}}', $llp1, $html);
        $html = str_replace('{{discount1}}', $discount1, $html); 

        // Load HTML content into Dompdf
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'portrait'); // Set paper size to A4 and orientation to portrait

        // Render the PDF
        $dompdf->render();

        // Set the appropriate headers for PDF download
        header('Content-Type: application/pdf');
        header('Content-Disposition: attachment; filename="PurchaseAgreement.pdf"');

        // Output the PDF content
        echo $dompdf->output();
    } catch (Exception $e) {
        echo "An error occurred: " . $e->getMessage();
    }
}
?>

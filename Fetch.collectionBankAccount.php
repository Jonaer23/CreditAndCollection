<?php
$selectedPaymentMethod = $_POST['paymentMethod'] ?? '';

$accountNumbers = [];

if ($selectedPaymentMethod === 'BPI') {
    $accountNumbers = ['', '3161056641'];
} else {
    $accountNumbers = [''];
}

echo json_encode($accountNumbers);
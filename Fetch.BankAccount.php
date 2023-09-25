<?php
$selectedPaymentMethod = $_POST['paymentMethod'] ?? '';

$accountNumbers = [];

if ($selectedPaymentMethod === 'BPI') {
    $accountNumbers = ['', '3163627328'];
} else {
    $accountNumbers = [''];
}

echo json_encode($accountNumbers);
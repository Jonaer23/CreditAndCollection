<?php
$selectedPaymentMethod = $_POST['paymentMethod'] ?? '';

$accountNumbers = [];

if ($selectedPaymentMethod === 'GARDEN OF APOLLON') {
    $accountNumbers = ['', 'APOLLON I', 'APOLLON II' , 'APOLLON III' , 'APOLLON IV' , 'APOLLON V'];
} else if ($selectedPaymentMethod === 'GARDEN OF ASTRA') {
    $accountNumbers = ['', 'ASTRA I', 'ASTRA II', 'ASTRA III', 'ASTRA IV', 'ASTRA V'];
} else if ($selectedPaymentMethod === 'GARDEN OF APHRODITE') {
    $accountNumbers = ['', 'APHRODITE I', 'APHRODITE II', 'APHRODITE III', 'APHRODITE IV', 'APHRODITE V'];
} else if ($selectedPaymentMethod === 'GARDEN OF DELPHIA') {
    $accountNumbers = ['', 'DELPHIA I', 'DELPHIA II', 'DELPHIA III', 'DELPHIA IV', 'DELPHIA V'];
} else if ($selectedPaymentMethod === 'GARDEN OF EVANIA') {
    $accountNumbers = ['', 'EVANIA I', 'EVANIA II', 'EVANIA III', 'EVANIA IV', 'EVANIA V'];
} else if ($selectedPaymentMethod === 'GARDEN OF KOSMA') {
    $accountNumbers = ['', 'KOSMA I', 'KOSMA II', 'KOSMA III', 'KOSMA IV', 'KOSMA V'];
} else if ($selectedPaymentMethod === 'GARDEN OF PHEDORA') {
    $accountNumbers = ['', 'PHEDORA I', 'PHEDORA II', 'PHEDORA III', 'PHEDORA IV', 'PHEDORA V'];
} else if ($selectedPaymentMethod === 'GARDEN OF RENA') {
    $accountNumbers = ['', 'RENA I', 'RENA II', 'RENA III', 'RENA IV', 'RENA V'];
} else if ($selectedPaymentMethod === 'GARDEN OF URANUS') {
    $accountNumbers = ['', 'URANUS I', 'URANUS II', 'URANUS III', 'URANUS IV', 'URANUS V'];
} else if ($selectedPaymentMethod === 'GARDEN OF LOTUS') {
    $accountNumbers = ['', 'LOTUS I', 'LOTUS II', 'LOTUS III', 'LOTUS IV', 'LOTUS V'];
} else if ($selectedPaymentMethod === 'GARDEN OF ALETHEA') {
    $accountNumbers = ['', 'ALETHEA I', 'ALETHEA II', 'ALETHEA III', 'ALETHEA IV', 'ALETHEA V'];
} else if ($selectedPaymentMethod === 'GARDEN OF CORINTH') {
    $accountNumbers = ['', 'CORINTH I', 'CORINTH II', 'CORINTH III', 'CORINTH IV', 'CORINTH V'];
} else if ($selectedPaymentMethod === 'GARDEN OF ATHENA') {
    $accountNumbers = ['', 'ATHENA I', 'ATHENA II', 'ATHENA III', 'ATHENA IV', 'ATHENA V'];
} else if ($selectedPaymentMethod === 'GARDEN OF CENTENNIAL') {
    $accountNumbers = ['', 'CENTENNIAL I', 'CENTENNIAL II', 'CENTENNIAL III', 'CENTENNIAL IV', 'CENTENNIAL V'];
} else if ($selectedPaymentMethod === 'GARDEN OF EROS') {
    $accountNumbers = ['', 'EROS I', 'EROS II', 'EROS III', 'EROS IV', 'EROS V'];
} else if ($selectedPaymentMethod === 'GARDEN OF ATLAS') {
    $accountNumbers = ['', 'ATLAS I', 'ATLAS II', 'ATLAS III', 'ATLAS IV', 'ATLAS V'];
} else if ($selectedPaymentMethod === 'GARDEN OF URANIA') {
    $accountNumbers = ['', 'URANIA I', 'URANIA II', 'URANIA III', 'URANIA IV', 'URANIA V'];
} else {
    $accountNumbers = [''];
}

echo json_encode($accountNumbers);
<?php 

require_once "Payment.php";
require_once "BankTransfer.php";
require_once "PaymentProcessor.php";
require_once "PaypalPaymentGateway.php";
require_once "StripePaymentGateway.php";


$bankTransfer = new BankTransfer();
$paypal = new PayPalPaymentGateway();
$stripe = new StripePaymentGateway();

$paymentProcessor = [
    new PaymentProcessor($bankTransfer),
    new PaymentProcessor($paypal),
    new PaymentProcessor($stripe)
];

foreach ($paymentProcessor as $processor) {
    echo $processor->procesarPago(100.00) . PHP_EOL;
}      



?>
<?php 

require_once "Payment.php";
require_once "BankTransfer.php";
require_once "PaymentProcessor.php";
require_once "PaypalPaymentGateway.php";
require_once "StripePaymentGateway.php";
require_once "PaymentCreator.php";

$creator = new PaymentCreator();
$paymentProcessor = $creator->paymentProcessorCreate();

foreach ($paymentProcessor as $processor) {
    echo $processor->procesarPago(100.00) . PHP_EOL;
}      

?>
<?php

require_once "PaypalPaymentGateway.php";
require_once "StripePaymentGateway.php";
require_once "Payment.php";
require_once "BankTransfer.php";
require_once "PaymentProcessor.php";

class PaymentCreator {

    public function paymentCreate() : array {
        
        $payments = [
            $bankTransfer = new BankTransfer(),
            $paypal = new PayPalPaymentGateway(),
            $stripe = new StripePaymentGateway()
        ];

      return $payments;
    }

    public function paymentProcessorCreate() : array {
        
        $payments = $this->paymentCreate();
        $paymentProcessor = [];

        foreach($payments as $payment) {
            $paymentProcessor[] = new PaymentProcessor($payment);
        }
      
        return $paymentProcessor;
    }
}
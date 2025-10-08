<?php

class PayPalPaymentGateway implements Payment
{
    public function sendPayment(float $cantidad): string
    {
        return "{$cantidad} payment processed with Paypal";
    } 
}
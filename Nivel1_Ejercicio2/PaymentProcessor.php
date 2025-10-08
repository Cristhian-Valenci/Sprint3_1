<?php

class PaymentProcessor
{
    protected Payment $gateway;

    public function __construct(Payment $gateway)
    {
        $this->gateway = $gateway;
    }

    public function procesarPago(float $cantidad): string
    {
        return $this->gateway->sendPayment($cantidad);
    }
}
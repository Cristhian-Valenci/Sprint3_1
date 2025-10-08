<?php 

class BankTransfer implements Payment
{
    public function sendPayment(float $cantidad): string
    {
        return "{$cantidad} payment processed by bank transfer";
    }
}
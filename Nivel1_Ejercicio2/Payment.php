<?php 

interface Payment {

    public function sendPayment(float $cantidad): string;
}


?>
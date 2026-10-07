<?php

interface PaymentMethod
{
    public function pay(float $amount): void;
}

final class Cash implements PaymentMethod
{
    public function pay(float $amount): void
    {
        echo "Paid $" . number_format($amount, 2) . " in cash.<br>";
    }
}

final class Card implements PaymentMethod
{

    public function pay(float $amount): void
    {
        echo "Paid $" . number_format($amount, 2) . " in Card.<br>";
}
}
// Example usage
$Cashpayments = new Cash();
$Cashpayments->pay(100);
$Cardpayments = new Card();
$Cardpayments->pay(45);


?>
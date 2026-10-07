<?php
class Product
{
    public function Discount(float $p, float $dp): float
    {
        return $p - ($p * $dp / 100);
    }
}

$product = new Product();
$finalPrice = $product->Discount(110, 20);

echo $finalPrice; 
?>
<?php
class Product
{
    public function __construct(
        public string $name,
        public float $price
    ) {
    }
}


$product = new Product("Book", 12.99);
echo  "Name: " . $product->name . "<br>";
echo "Price: " . $product->price;

?>
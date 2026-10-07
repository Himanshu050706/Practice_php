<?php

class Product{
    public function __construct(public string $name,public float $price) {
    }
}

class ShoppingCart{
    public array $products = [];

    public function addProduct(Product $product){
        $this->products[] = $product;
    }

    public function removeProduct(Product $product){
        foreach ($this->products as $key => $item) {
            if ($item === $product) {
                unset($this->products[$key]);
                break;
            }
        }
    }

    public function getTotal(): float{
        $total = 0;
        foreach ($this->products as $product) {
            $total += $product->price;
        }
        return $total;
    }
}

// Example usage
$cart = new ShoppingCart();

$apple = new Product("Apple", 2.50);
$cart->addProduct($apple);

$book = new Product("Book", 10.00);
$cart->addProduct($book);
echo "Total: $" . $cart->getTotal()."<br>"; 

$cart->removeProduct($apple);
echo "Total: $" . $cart->getTotal()."<br>";
?>
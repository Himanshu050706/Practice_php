<?php

class Vehicle {
    public function aa(){
        echo "hello , this parent class method"."<br>";
    }
}

class Car extends Vehicle {
    public function aa(){
        echo "hello , here we override the parent class method"."<br>";
    }
}

$par = new Vehicle();
$par->aa();

$car = new Car();
$car->aa();

?>

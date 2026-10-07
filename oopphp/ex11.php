<?php

class Vehicle {
    public function aa(){
        echo "hello , this parent class Vehicle"."<br>";
    }
}

class Car extends Vehicle {
    public function bb(){
        echo "hello , this child class Car"."<br>";
    }
}
class Bike extends Vehicle {
    public function cc(){
        echo "hello , this child class Bike";
    }
}

$car = new Car();
$car->aa();
$car->bb();
$bike = new Bike();
$bike->aa();
$bike->cc();
?>
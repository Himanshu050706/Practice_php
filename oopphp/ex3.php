<?php

class Circle {
    public $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function area() {
        return pi() * $this->radius * $this->radius;
    }

    public function circumference() {
        return 2 * pi() * $this->radius;
    }
}

$circle = new Circle(5);
echo "Area: " . $circle->area() . "\n";
echo "Circumference: " . $circle->circumference();
?>
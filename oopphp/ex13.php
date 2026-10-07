<?php

abstract class Shape
{
    abstract public function area(): float;
    abstract public function perimeter(): float;
}

final class Circle extends Shape
{
    public function __construct(private float $radius)
    {
        $this->radius = $radius;
    }

    public function area(): float
    {
        return pi() * $this->radius ** 2;
    }

    public function perimeter(): float
    {
        return 2 * pi() * $this->radius;
    }
}

final class Rectangle extends Shape
{
    public function __construct(private float $width, private float $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function area(): float
    {
        return $this->width * $this->height;
    }

    public function perimeter(): float
    {
        return 2 * ($this->width + $this->height);
    }
}

// Example usage
$shape = new Circle(5);
echo $shape->area() . "<br>";
echo $shape->perimeter() . "<br>";
$shapes = new Rectangle(4, 6);
echo $shapes->area() . "<br>";
echo $shapes->perimeter() . "<br>";


?>
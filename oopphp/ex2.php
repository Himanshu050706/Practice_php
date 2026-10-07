<?php
class Rectangle{
    public $len;
    public $bre;

    public function __construct($len = 0, $bre = 0){
        $this->len = $len;
        $this->bre = $bre;
    }

    public function area(){
        return $this->len * $this->bre;
    }

    public function perimeter(){
        return 2 * ($this->len + $this->bre);
    }
}

$value = new Rectangle(5, 10);
echo "Area of rectangle is: ".$value->area()."<br>";
echo "Perimeter of rectangle is: ".$value->perimeter();

?>
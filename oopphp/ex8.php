<?php

class Student {
    private $a;
    public function __construct() {
        echo"avg is : " ;
    }

    public function Avg(array $a) {
        $sum = array_sum($a);
        return $sum / count($a);
    }
}

$student = new Student();
$avg = $student->Avg([23, 12, 34, 23, 45]);
echo $avg;
?>
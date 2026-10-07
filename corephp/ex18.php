<?php
$a = [1, 2, 2, 3, 4, 4, 5];
$b= [];

foreach ($a as $number) {
    if (!in_array($number, $b)) {
        $b[] = $number;
    }
}

print_r($b);
?>
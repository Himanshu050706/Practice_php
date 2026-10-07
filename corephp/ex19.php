<?php
$numbers = [5, 2, 9, 1, 3];
$count = count($numbers);

for ($i = 0; $i < $count - 1; $i++) {
    for ($j = 0; $j < $count - 1 - $i; $j++) {
        if ($numbers[$j] > $numbers[$j + 1]) {
            $temp = $numbers[$j];
            $numbers[$j] = $numbers[$j + 1];
            $numbers[$j + 1] = $temp;
        }
    }
}

print_r($numbers); 
?>
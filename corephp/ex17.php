<?php
$a = [23,12,34,23,45];

$sum = array_sum($a);
$avg = $sum / count($a);
$max = max($a);
$min = min($a);

echo "Sum: $sum\n";
echo "Average: $avg\n";
echo "Maximum: $max\n";
echo "Minimum: $min\n";

?>
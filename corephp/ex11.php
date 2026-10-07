<?php

function factorial($a) {
    if ($a == 0 || $a == 1) {
        return 1;
    } else {
        return $a * factorial($a - 1);
    }
}
echo "Factorial of 5 is " . factorial(5);
    
?>
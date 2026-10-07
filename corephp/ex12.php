<?php
function isPrime($a)
{
    if ($a < 2) {
        return false;
    }

    for ($i = 2; $i * $i <= $a; $i++) {
        if ($a % $i == 0) {
            return false;
        }
    }

    return true;
}

$a = 14;
if (isPrime($a)) {
    echo "Prime";
} else {
    echo "Not Prime";
}
?>
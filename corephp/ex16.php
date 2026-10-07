<?php
$a = "helleh";
$b = "";

for ($i = strlen($a) - 1; $i >= 0; $i--) {
    $b =$b . $a[$i];
}
if ($a === $b) {
    echo "$a is a palindrome.";
} else {
    echo "$a is not a palindrome.";
}
?>
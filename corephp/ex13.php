<?php
$a = "Himanshu";
$b = "";

for ($i = strlen($a) - 1; $i >= 0; $i--) {
    $b =$b . $a[$i];
}
echo "Reverse of $a is $b";
?>
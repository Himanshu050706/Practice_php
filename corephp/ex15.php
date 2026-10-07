<?php
$text = "Himanshu";
$Count = 0;

for ($i = 0; $i < strlen($text); $i++) {
   // $character = strtolower($text[$i]);

    if (in_array($text[$i], ['a', 'e', 'i', 'o', 'u'])) {
        $Count++;
    }
}

echo "Number of vowels: $Count";
?>
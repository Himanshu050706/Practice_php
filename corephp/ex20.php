<?php
function countWords($sentence) {
    $words = explode(" ", strtolower($sentence));
    $counts = [];

    foreach ($words as $word) {
        if ($word !== "") {
            if (isset($counts[$word])) {
                $counts[$word]++;
            } else {
                $counts[$word] = 1;
            }
        }
    }

    return $counts;
}

print_r(countWords("cat dog cat"));
?>
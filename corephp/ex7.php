<?php
function leapyear(int $year) {
    if (($year % 4 == 0 and $year % 100 != 0)){
        return "leap year";
    }
else {
    return "not leap year";
}
}

$year = leapyear(2027);
echo $year;
?>
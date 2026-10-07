<?php

function grade ($marks){
    if ($marks >= 90) {
        echo"Grade A"." " .$marks ;
    }else if ($marks >= 80) {
        echo "Grade B"." " .$marks ;
    }else if ($marks >= 70) {
        echo "Grade C" ." " .$marks ;
    }else if ($marks >= 60) {
        echo "Grade D"." " .$marks ;
    }else{
        echo "Grade F"." " .$marks ;
    }
}

$Marks = grade(47);
echo $Marks;
?>
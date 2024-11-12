<?php
/* Write a function that takes 2 integer numbers as arguments and that returns the greatest common divisor of both. Look for an efficient algorithm to implement before starting programming.*/
function GreatestCommonDivisor($number1, $number2) {
    $currentGreatest = 1; 
    $i = 1;
    
    if($number1 < $number2){
        $limit = $number1;
    }
    else
    {
        $limit = $number2;
    }

    while ($i <= $limit) {
        if ($number1 % $i == 0 && $number2 % $i == 0) {
            $currentGreatest = $i;
        }
        $i++;
    }
    
    return $currentGreatest; 
}

echo GreatestCommonDivisor(5, 30);
?>

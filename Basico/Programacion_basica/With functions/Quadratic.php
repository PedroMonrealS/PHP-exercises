<?php
/* Use the code you already wrote for solving a quadratic equation to create a function called solvequadeq that takes 3 arguments, the coeficients of the equation (a, b, and c).

The function prints the solutions of the equation (if they exist) */
$valuaA=4;
$valueB=8;
$valueC=3;

function solvequadeq($a,$b, $c){

$root=sqrt($b**2 - 4 *$a*$c);

$v1=(-$b+$root)/2*$a;

$v2=(-$b-$root)/2*$a;

echo "Solution 1 = " .$v1;
echo "<br>";
echo "Solution 2 = " .$v2;
}

solvequadeq($valuaA, $valueB, $valueC)
?>
<?php
/*Error code */

ini_set('display_errors', 1);
error_reporting(E_ALL);


//Solution of the quadratic equation

$a=4;
$b=8;
$c=3;

$root=sqrt($b**2 - 4 *$a*$c);

$v1=(-$b+$root)/2*$a;

$v2=(-$b-$root)/2*$a;

echo $v1;
echo$v2;
?>

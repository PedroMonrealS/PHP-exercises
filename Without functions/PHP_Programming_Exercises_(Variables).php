<?php
/*Error code */

ini_set('display_errors', 1);
error_reporting(E_ALL);

//Ex1
echo "<br>";
echo "<br>";
echo "Ex1";
echo "<br>";
echo "<br>";

echo "Great to meet you, Pedro";



//EX2
echo "<br>";
echo "<br>";
echo "Ex2";
echo "<br>";
echo "<br>";
$name="Pedro";
$age="19";

echo "My name is " . $name . " and I am " . $age . " years old.";


//EX3
echo "<br>";
echo "<br>";
echo "Ex3";
echo "<br>";
echo "<br>";
$a=7;
$b=5;

echo "The addition off " .$a . " and " . $b . " is " . $a + $b;
echo "<br><br>";
echo "The substraction off " .$a . " and " . $b . " is " . $a - $b;
echo "<br><br>";
echo "The multiplication off " .$a . " and " . $b . " is " . $a * $b;
echo "<br><br>";
echo "The division off " .$a . " and " . $b . " is " . $a / $b;

//EX4
echo "<br>";
echo "<br>";
echo "Ex4";
echo "<br>";
echo "<br>";
$number="10";
echo $number + 5;
echo"<br>";
var_dump(($number + 5));

//EX5
echo "<br>";
echo "<br>";
echo "Ex5";
echo "<br>";
echo "<br>";
$string="100.5";

$integer=(int)$string;

$float=(float)$string;
echo "Integer <br><br>";
echo "Value <br>";
echo $integer;
echo "<br> Type <br>";
echo var_dump($integer);

echo "<br><br> Float <br><br>";
echo "Value <br>";
echo $float;
echo "<br> Type <br>";
echo var_dump($float);

//EX6
echo "<br>";
echo "<br>";
echo "Ex6";
echo "<br>";
echo "<br>";
$nonzero="5";
$zero="0";
$empty="";
var_dump((bool)$nonzero);
echo "<br>";
var_dump((bool)$zero);
echo "<br>";
var_dump((bool)$empty);

//EX7
echo "<br>";
echo "<br>";
echo "Ex7";
echo "<br>";
echo "<br>";
$true=true;
$false=false;
echo (int)$true;
echo (int)$false;


//EX8
echo "<br>";
echo "<br>";
echo "Ex8";
echo "<br>";
echo "<br>";
$firstName="Pedro";
$lastName="Monreal";

echo $firstName . " " . $lastName;

//EX9
echo "<br>";
echo "<br>";
echo "Ex9";
echo "<br>";
echo "<br>";
$integer="1";
$float="1.2";
$string="Hello";
var_dump($integer);
echo "<br>";
var_dump($float);
echo "<br>";
var_dump($string);


//EX10

echo "<br>";
echo "<br>";
echo "Ex10";
echo "<br>";
echo "<br>";
$val="hello";

$val=NULL;

echo var_dump($val);


//EX11

/*
What is the correct syntax for declaring a variable in PHP?
a) $2var = value;
b) var $ = value;
c) variable = value;
d) $variable = value;
*/

//EX12
echo "<br>";
echo "<br>";
echo "Ex12";
echo "<br>";
echo "<br>";

$i=5;
$j=10;

echo "Initial value <br>";

echo $i . " ";
echo $j;

$v=$i;
$i=$j;
$j=$v;

echo "<br>Final value <br>";

echo $i . " ";
echo $j;

?>

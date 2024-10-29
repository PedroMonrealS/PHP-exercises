<?php

//phpinfo(); 
/*Codigo para que muestre los errores */

ini_set('display_errors', 1);
error_reporting(E_ALL);


$name="Pedro";
echo "Hola, que tal " . $name;

echo "<br>";

$x=2;
$y=3;

echo $x * $y;

echo "<br>";

$floatx=2.5;

echo $floatx;

//var_dump sirve para saber que tipo de variable es.
var_dump($name);

$boolean1=true;

echo $boolean1;

//type casting or forced conversion
echo "<br><br><br><br>";
echo "type casting or forced conversion";

$num="12";
echo "<br>";
$inty=(int) $num; //POner entre parentesis el tipo y luego el valor
echo "<br>";
echo "Valor original: <br>";
var_dump($num);
echo "<br><br>";

echo "Valor convertido: <br>";
var_dump($inty);


//Ints and floats

$a=15;
$b=2;
$c=$a/$b;
echo "<br><br><br>" . $c;
?>

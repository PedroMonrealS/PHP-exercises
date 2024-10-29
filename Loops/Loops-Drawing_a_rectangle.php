<?php
/* Define a value for $n and a value for $m. For instance:
$n=3;
$m=5;Draw a rectangle with $n rows and $m columns  using only the following instructions:
echo "*";
echo "</br>";
You will also need to use two nested loops. Define a variable $n corresponding to the size of the square and draw it according to its value.*/

$n=10;
$m=3;
$n1=0;
$n2=0;
while($n1 < $m){
    while($n2 < $n){
        echo "*";
        $n2++;
    }
    echo "<br>";
    $n1++;
    $n2=0;

}

?>
<?php
/* Draw a square using only the following instructions:
echo "*";
echo "</br>";
You will also need to use two nested loops. Define a variable $n corresponding to the size of the square and draw it according to its value.*/
$n=5;
$n1=0;
$n2=0;
while($n1 < $n){
    while($n2 < $n){
        echo "*";
        $n2++;
    }
    echo "<br>";
    $n1++;
    $n2=0;

}

?>
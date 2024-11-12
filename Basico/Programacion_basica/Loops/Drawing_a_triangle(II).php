<?php
/* Draw a triangle like the one below using only the following instructions:
echo "*";
echo "</br>";
You will also need to use two nested loops. Define a variable $n corresponding to the size of the square and draw it according to its value. For $n=5 the triangle would be:
*
**
***
**
*
Tip: It can be done using only two nested loops. In this case you may need to use the ABS() function. */
$n=5;
$n1=0;
$n2=0;
while($n1 < $n+1){
    while($n2 < $n1){
        echo "*";
        $n2++;
    }
    echo "<br>";
    $n1++;
    $n2=0;

}

?>
<?php

$poem="hola que tal pepe hola aaa a aa ";
var_dump(strpos($poem, "pepe"));
echo "<br>";


$pos=(strpos($poem, "a"));
echo $pos;
$pos=(strpos($poem, "a", $pos+1));
echo "<br>";    
echo $pos;


?>


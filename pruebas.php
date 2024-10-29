<?php

$number2guess = 7;
$myGuess = 0; // Se agregó el punto y coma aquí
while ($number2guess != $myGuess) {
    $myGuess = rand(1, 10);
    echo "My guess is $myGuess<br>";
}
echo "Adivinado";
?>
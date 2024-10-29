<?php
/* Using the condition you built to know whether a date belongs to summer or not, use conditionals and add conditions for the rest of the seasons in order to get a PHP code that it will tell us the season corresponding to a given date.*/
$dia = 29;
$mes = 12;

if (($mes == 3 && $dia >= 21) || ($mes == 4) || ($mes == 5) || ($mes == 6 && $dia < 21)) {

    echo "Primavera";
}
elseif (($mes == 6 && $dia >= 21) || ($mes == 7) || ($mes == 8) || ($mes == 9 && $dia < 23)) {

    echo "Verano";
}
elseif (($mes == 9 && $dia >= 23) || ($mes == 10) || ($mes == 11) || ($mes == 12 && $dia < 21)) {

    echo "Otoño";
}
elseif (($mes == 12 && $dia >= 21) || ($mes == 1) || ($mes == 2) || ($mes == 3 && $dia < 21)) {

    echo "Invierno";
}
?>
<?php
/* Write a program to check if a dni is correct in the sense that the letter corresponds to the number. Read the attached info.

Tip: You can save the set of letters in a string and select the one that you need from the string. */

$DNI="12345678Z";
$LETRAS=["T","R","W","A","G","M","Y","F","P","D","X","B","N","J","Z","S","Q","V","H","L","C","K"];
$NUMEROS=substr($DNI, 0,-1);
$LETRA=substr($DNI, 8);

$COMP = ($NUMEROS%23);
$LETRACORRECTA = $LETRAS[$COMP];

if ($LETRACORRECTA == $LETRA) {

    echo "El DNI " . $DNI . " es correcto.";
}
else
{
    echo "El DNI " . $DNI . " es incorrecto.";

}

?>
<?php

/* Encapsulate the code that checks whether an id number is correct or not inside a function. Make the function return true or false depending on the correctness of the letter.

Do not use the echo instruction inside the function. */

$DNIvalue="12345678Z";

function checkDNI($DNI){
    $LETRAS=["T","R","W","A","G","M","Y","F","P","D","X","B","N","J","Z","S","Q","V","H","L","C","K"];
    $NUMEROS=substr($DNI, 0,-1);
    $LETRA=substr($DNI, 8);
    
    $COMP = ($NUMEROS%23);
    $LETRACORRECTA = $LETRAS[$COMP];
    
    if ($LETRACORRECTA == $LETRA) {
    
        return "true";
    }
    else
    {
        return "false";
    
    }
}

//I set the return value "true" or "false" to get the text, without " " I get 1 or 0
echo checkDNI($DNIvalue)
?>
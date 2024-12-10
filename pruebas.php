<?php
function balancedQuotes($string) {
    // Contar las ocurrencias de comillas simples y dobles
    $singleQuotesCount = substr_count($string, "'");
    $doubleQuotesCount = substr_count($string, '"');
    
    // Verificar si ambas cuentas son pares
    return $singleQuotesCount % 2 === 0 && $doubleQuotesCount % 2 === 0;
}

// Ejemplo de uso
var_dump(balancedQuotes('He said, "Hello" and then \'Goodbye\'')); // true
var_dump(balancedQuotes('He said, "Hello and then Goodbye')); // false
var_dump(balancedQuotes('No quotes here')); // true
?>

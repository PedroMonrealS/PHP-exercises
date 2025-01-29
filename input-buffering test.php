<?php
// Muestra el valor actual de input_buffering
$input_buffering = ini_get('input_buffering');
echo "El estado de input_buffering es: " . ($input_buffering ? $input_buffering : 'Desactivado') . "\n";

// Verifica si está activado o no
if ($input_buffering) {
    echo "Input buffering está activado con un tamaño de buffer de $input_buffering bytes.\n";
} else {
    echo "Input buffering está desactivado.\n";
}

// Detectar si el script se ejecuta en CLI
if (php_sapi_name() === 'cli') {
    echo "Escribe algo y presiona Enter: ";
    $entrada = fgets(STDIN);
    echo "Has escrito: $entrada";
} else {
    echo "Este script está corriendo en un entorno web, la entrada de usuario no está disponible.\n";
}
?>

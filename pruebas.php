<?php
// Establecer el encabezado para mostrar como HTML
header('Content-Type: text/html; charset=utf-8');

// Iniciar la salida HTML
echo '<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuadrícula Hexadecimal</title>
    <style>
        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #000;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9; /* Color alternado para filas */
        }
    </style>
</head>
<body>
    <h1 style="text-align:center;">Cuadrícula Hexadecimal</h1>
    <table>
        <tr>
            <th>Decimal</th>
            <th>Hexadecimal</th>
        </tr>';

// Bucle para generar los valores de la tabla
for ($i = 0; $i <= 255; $i++) {
    if ($i % 16 == 0 && $i != 0) { // Cada 16 valores, se cierra la fila
        echo '</tr>';
    }
    if ($i % 16 == 0) { // Al iniciar una nueva fila
        echo '<tr>';
    }

    // Muestra el valor decimal y su equivalente hexadecimal
    echo '<td>' . $i . '</td>'; // Valor decimal
    echo '<td>' . strtoupper(dechex($i)) . '</td>'; // Valor hexadecimal

    // Cierra la fila si es el último valor
    if ($i == 255) {
        echo '</tr>';
    }
}

// Cerrar la tabla y el HTML
echo '    </table>
</body>
</html>';
?>

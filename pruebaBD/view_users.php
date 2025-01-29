<?php 
# Script 10.1 - view_users_dynamic_no_user_id_actions.php
// Este script recupera todos los registros de la tabla 'users' y genera la tabla de forma dinámica, sin mostrar ni utilizar 'user_id'.

$page_title = 'View the Current Users';
include('header.php');
echo '<h1>Registered Users</h1>';

require('./pdo_connect.php');

// Define la consulta:
$q = "SELECT * FROM informes"; // Cambia 'users' por el nombre de tu tabla.

$result = $pdo->query($q);
$rows = $result->fetchAll(PDO::FETCH_ASSOC);

// Obtén los nombres de las columnas, excluyendo 'user_id':
$columnNames = array_filter(array_keys($rows[0] ?? []), function ($column) {
    return $column !== 'user_id';
});

$num = count($rows);

if ($num > 0) { // Si hay registros, mostrar la tabla.

    // Imprime el número de usuarios:
    echo "<p>There are currently $num registered users.</p>\n";

    // Cabecera de la tabla:
    echo '<table width="80%">
    <thead>
    <tr>';
    
    // Genera dinámicamente los encabezados basados en las columnas:
    foreach ($columnNames as $columnName) {
        echo "<th align='left'><strong>" . htmlspecialchars($columnName) . "</strong></th>";
    }

    echo '</tr>
    </thead>
    <tbody>';

    // Genera las filas dinámicamente:
    foreach ($rows as $row) {
        echo '<tr>';
        
        // Imprime dinámicamente las columnas, excluyendo 'user_id':
        foreach ($columnNames as $columnName) {
            echo '<td align="left">' . htmlspecialchars($row[$columnName]) . '</td>';
        }

        echo '</tr>';
    }

    echo '</tbody></table>';

} else { // Si no hay registros.
    echo '<p class="error">There are currently no registered users.</p>';
}

include('footer.php');
?>

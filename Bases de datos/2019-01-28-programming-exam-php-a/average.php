<?php

    require('./pdo_connect.php');

    try {
        $q = "SELECT weight FROM weights";
        $stmt = $pdo->query($q);
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if ($rows) {
            $sum = 0;
            var_dump($rows);
            $weights = array_column($rows, 'weight');
            foreach ($weights as $weight) {
                echo "Peso: " . htmlspecialchars($weight) . "<br>";                
            }
            $sum = array_sum($weights);
            echo "La media es de: ". $sum / count($rows);
        } else {
            echo "No se encontraron registros.";
        }

    } catch (PDOException $ex) {
        echo "Se produjo un error en la base de datos. Por favor, intenta más tarde.";
    }

?>

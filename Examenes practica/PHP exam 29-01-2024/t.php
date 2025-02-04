<?php
        require('pdo-connect.php');

        $queryOK = TRUE;

        try {
            $q = "DELETE FROM trabajadores WHERE dni = :dni";

            $stmnt = $pdo->prepare($q);
            $stmnt->bindValue(":dni", $dni);
            $stmnt->execute();
            
        } catch (PDOException $ex){

            $queryOK = FALSE;
            $output = 'Database error: ' . $ex->getMessage() . ' in ' . $ex->getFile() . ":" . $ex->getLine();

        }

        if ($queryOK) {
            echo "Register deleted from Database<br>";
        } else {//Manejo errores
            echo "Please try again later<br>";
            echo "Debug information:<br>";
            echo $output . "<br>";
            echo $q . "<br>";
        }

?>
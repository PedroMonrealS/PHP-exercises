<?php
$flag=FALSE;
try {
    $pdo = new PDO('mysql:host=192.168.100.226;dbname=DiocesansDB;charset=utf8mb4', 'databasePHP', 'databasePHP');
    $output = 'Database connection established.';
} catch (PDOException $e) {
    $output = 'Unable to connect to the database server: ' . $e->getMessage(). ' in ' .$e->getFile() . ':' . $e->getLine();
    $flag=TRUE;
}
if ($flag) die ("<p>$output</p>");
else echo "<p>$output</p>";
?>
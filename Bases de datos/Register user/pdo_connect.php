<?php
$flag=FALSE;
try {
    $pdo = new PDO('mysql:host=localhost;dbname=register;charset=utf8mb4', 'databasePHP', '');
    $output = 'Database connection established.';
} catch (PDOException $e) {
    $output = 'Unable to connect to the database server: ' . $e->getMessage(). ' in ' .$e->getFile() . ':' . $e->getLine();
    $flag=TRUE;
}
if ($flag) die ("<p>$output</p>");
else echo "<p>$output</p>";
?>
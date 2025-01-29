<?php
require('./pdo_connect.php');

$q = "SELECT * FROM Nombres";

$result = $pdo->query($q);
$rows=$result->fetchAll();
foreach ($rows as $row) {
    echo $row['Nombre']."<br>";
}

if($_SERVER["REQUEST_METHOD"] == "POST")
if(isset($_POST['nombres'])) {
    $nombre = $_POST['nombres'];

    $queryOK=TRUE;
try {
    $q = "INSERT INTO Nombres (nombre) VALUES (:nombre)";

    $stmnt = $pdo->prepare($q);
    $stmnt->bindValue(':nombre',$nombre);
    $stmnt->execute();
} catch(PDOException $ex) {
    $queryOK=FALSE;
    $output = 'Database error: ' . $ex->getMessage() . ' in ' .$ex->getFile() . ':' . $ex->getLine();
}
if ($queryOK) {
    echo "Register added to Database<br>";
} else {
    echo "Please try again later<br>";
    echo "Debug information:<br>";
    echo $output."<br>";
    echo $q."<br>";
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br><br><br>
    <form action="" method="post">
        <input type="text" name="nombres">
        <input type="submit" value="Submit">
    </form>
</body>
</html>
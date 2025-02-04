<?php
// Establecer la cookie ANTES de cualquier salida al navegador
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['name'])) {
    setcookie("username", $_POST['name'], time() + 3600 * 24 * 30);
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="iso-8859-1">
    <title>Bienvenida</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] != "POST") {
        // Formulario para ingresar el nombre
        echo "<form action='' method='post'>
            <label for='name'>Name</label>
            <input type='text' name='name' required>
            <br><br>
            <input type='submit' value='Submit'>
        </form>";
    } else {
        if (isset($_POST['name'])) {
            // Mostrar mensaje de bienvenida
            echo "<h1>Welcome, " . htmlspecialchars($_POST['name']) . "!</h1>";
            echo "<a href='index.php'>Go back to the game</a>";
        }
    }
    ?>
</body>
</html>

<?php
session_start();
if (!isset($_SESSION["number2guess"])) {
    $_SESSION['number2guess'] = random_int(1, 50);
    $_SESSION['attemptCounter'] = 1; //Lo inicio en 1 para que el contador sea correcto.
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION["attemptCounter"] = $_SESSION["attemptCounter"] + 1;
    if ($_POST["input"] == $_SESSION["number2guess"]) {
        echo "You guessed it! <br>";
        echo $_SESSION["attemptCounter"] . " attempts";
    } else
    if ($_POST["input"] < $_SESSION["number2guess"]) {
        echo "Too low!";
    } else {
        echo "Too high!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <form action="" method="post">
        <label for="input">Insert a number between 1 and 50</label>
        <input type="number" name="input">
        <input type="submit">
    </form>
    <a href="reset.php">RESET</a>
</body>

</html>
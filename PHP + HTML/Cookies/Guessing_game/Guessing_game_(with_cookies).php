<?php
if (!isset($_COOKIE["number2guess"])) {
    setcookie("number2guess", random_int(1, 50), (time() + 3600 * 24 * 30));
    setcookie("attemptCounter",1, (time() + 3600 * 24 * 30)); //Lo inicio en 1 para que el contador sea correcto.
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    setcookie("attemptCounter", $_COOKIE["attemptCounter"] + 1, (time() + 3600 * 24 * 30));
    if($_POST["input"]==$_COOKIE["number2guess"]){
        echo "You guessed it! <br>";
        echo $_COOKIE["attemptCounter"]. " attempts";
    }
    else
    if($_POST["input"]<$_COOKIE["number2guess"]){
        echo "Too low!";
    }
    else
    {
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
        <input type="text" name="input">
        <input type="submit">
    </form>
    <a href="reset.php">RESET</a>
</body>

</html>
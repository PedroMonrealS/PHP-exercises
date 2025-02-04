<?php
// Debemos manejar las cookies antes de cualquier salida HTML
if ($_SERVER["REQUEST_METHOD"] != "POST") {
    $n1 = rand(1, 50) * 2;
    $n2 = rand(1, 9);
    setcookie("n1", $n1, time() + 3600 * 24 * 30);
    setcookie("n2", $n2, time() + 3600 * 24 * 30);
} else {
    if (isset($_COOKIE['n1']) && isset($_COOKIE['n2'])) {
        $n1 = $_COOKIE['n1'];
        $n2 = $_COOKIE['n2'];
    }
}
?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="iso-8859-1">
    <title>División PHP</title>
</head>
<body>
    <h1>To save your results <a href="login.php">define your user</a></h1>
    <a href="logout.php">logout</a>

    <form method="post" action="">
        <?php
        if ($_SERVER["REQUEST_METHOD"] != "POST") {
            echo "<h1> User: " . ($_COOKIE['username'] ?? "Guest") . "</h1>";
            echo "Quotient = " . ($n1 / $n2) . "<br>";
            echo "Remainder = " . ($n1 % $n2) . "<br>";
            echo "Divide " . $n1 . " between " . $n2 . "<br><br>";
        ?>
            <label for="quotient">Quotient</label>
            <input type="text" name="quotient"><br><br>

            <label for="remainder">Remainder</label>
            <input type="text" name="remainder"><br><br>

            <input type="submit" value="Submit">
        <?php
        } else {
            if (empty($_POST['quotient']) || empty($_POST['remainder'])) {
                echo "Please enter the values";
            } else {
                verificarResultado($n1, $n2);
            }
        }

        function verificarResultado($n1, $n2) {
            $userQuotient = $_POST['quotient'];
            $userRemainder = $_POST['remainder'];

            if (intval($n1 / $n2) == $userQuotient && $n1 % $n2 == $userRemainder) {
                echo "Correct";
            } else {
                if (intval($n1 / $n2) != $userQuotient) {
                    echo "The quotient is " . intval($n1 / $n2) . " and you answered " . $userQuotient . "<br>";
                } else {
                    echo "The quotient is " . intval($n1 / $n2) . " and you answered correctly <br>";
                }
                if ($n1 % $n2 != $userRemainder) {
                    echo "The remainder is " . ($n1 % $n2) . " and you answered " . $userRemainder . "<br>";
                } else {
                    echo "The remainder is " . ($n1 % $n2) . " and you answered correctly <br>";
                }
            }
            echo "<br><br><a href='index.php'>Let's divide again</a>";
        }
        ?>
    </form>
</body>
</html>

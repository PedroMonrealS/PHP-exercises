<!doctype html>
<html lang="en">

<head>
    <meta charset="iso-8859-1">
</head>
<h1>To save your results <a href="login.php">define your user</a></h1>
<a href="logout.php">logout</a>


<body>
    <form method="post" action="">
        <?php
        if ($_SERVER["REQUEST_METHOD"] != "POST") {
            echo "<h1> User: " . $_COOKIE['username'] . "</h1>";
            $n1 = $randomNumber = rand(1, 50) * 2;
            $n2 = $randomNumber = rand(1, 9);
            setcookie("n1", $n1, (time() + 3600 * 24 * 30));
            setcookie("n2", $n2, (time() + 3600 * 24 * 30));

            echo "Quotient = " . $n1 / $n2 . "<br>";
            echo "Remainder = " . $n1 % $n2 . "<br>";


            echo "Divide " . $n1 . " between " . $n2 . "<br><br>";
            echo "<label for='quotient'>Quotient</label>
        <input type='text' name='quotient'>
        <br><br>
        <label for='remainder'>Remainder</label>
        <input type='text' name='remainder'>
        <br><br>
        <input type='submit'>
    </form>";
        } else {
            $n1 = $_COOKIE['n1'];
            $n2 = $_COOKIE['n2'];
        }
        ?>

        <?php


        function verificarResultado($n1, $n2)
        {
            if ($n1 / $n2 == $_POST['quotient'] && $n1 % $n2 == $_POST['remainder']) {
                echo "Correct";
            } else {
                if ($n1 / $n2 != $_POST['quotient']) {
                    echo "The quotient is " . $n1 / $n2 . " and you answered " . $_POST['quotient'] . "<br>";
                } else {
                    echo "The quotient is " . $n1 / $n2 . " and you answered correctly <br>";
                }
                if ($n1 % $n2 != $_POST['remainder']) {
                    echo "The remainder is " . $n1 % $n2 . " and you answered " . $_POST['remainder'] . "<br>";
                } else {
                    echo "The remainder is " . $n1 % $n2 . " and you answered correctly <br>";
                }
            }
            echo "<br><br><a href='index.php'>Let's divide again</a>";
        }
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if ($_POST['quotient'] == "" || $_POST['remainder'] == "") {
                echo "Please enter the values";
            } else {
                verificarResultado($n1, $n2);
            }
        }
        ?>

</body>

</html>
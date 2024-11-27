<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title></title>
</head>
<?php

$array = [
    "Toy_Story" => "First Pixar film",
    "The_incredible" => "Better than Marvel",
    "Cars" => "Best film about cars, ever",
    "WALL-E" => "Is it our future?",
    "Lightyear" => "The last one, until now"
];
?>
<body>
    <form action="" method="post">
        <p>Choose one from the following ones by Pixar.</p>
        <?php
        foreach ($array as $film => $description) {
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if ($_POST["radiobutton"] == $film) {
                    echo "<input type='radio' id=$film name='radiobutton' value=$film checked>";
                    echo "<label for=$film>$film</label><br>";
                } else {
                    echo "<input type='radio' id=$film name='radiobutton' value=$film>";
                    echo "<label for=$film>$film</label><br>";
                }
            } else {
                echo "<input type='radio' id=$film name='radiobutton' value=$film>";
                echo "<label for=$film>$film</label><br>";
            }
        }
        ?>
        <br>
        <input type="submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        echo $_POST["radiobutton"] . ": ". $array[$_POST["radiobutton"]];

    }

    ?>
</body>

</html>
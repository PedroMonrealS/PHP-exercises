<!doctype html>
<html lang="en">

<head>
    <!-- change to utf-8 if you use that -->
    <meta charset="iso-8859-1">
    <title>Bin - Dec converter</title>
</head>

<body>

    <?php
    $binaryVALUE = "";
    $decimalVALUE = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (!isset($_POST["decimal"]) && !isset($_POST["binary"]) || empty($_POST["decimal"]) && empty($_POST["binary"])) {
            echo "Empty values";
        } elseif (!empty($_POST["decimal"]) && !empty($_POST["binary"])) {
            echo "Least one value must be empty";
        } elseif (empty($_POST["decimal"])) {
            if (empty(str_replace(['0', '1'], '', $_POST["binary"]))) {
                //echo $_POST["binary"] . " equival a " . binaryTOdecimal($_POST["binary"]);
                $binaryVALUE = $_POST["binary"];
                $decimalVALUE = binaryTOdecimal($_POST["binary"]);
            } else {
                echo "Invalid binary number";
            }
        } elseif (empty($_POST["binary"])) {
            //echo $_POST["decimal"] . " equival a " . decimalTObinary($_POST["decimal"]);
            $decimalVALUE = $_POST["decimal"];
            $binaryVALUE = decimalTObinary($_POST["decimal"]);
        }
    }


    function decimalTObinary($value)
    {
        return decbin($value);
    }

    function binaryTodecimal($value)
    {
        return bindec($value);
    }

    function inputvalue($type, $binary, $decimal)
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if ($type == "decimal") {
                echo $decimal;
            } else {
                echo $binary;
            }
        }
    }


    ?>

    <h1 align="center">Bin - Dec converter</h1>
    <form align="center" action="" method="POST">
        <label for="decimal">Decimal</label>
        <input type="number" name="decimal" value="<?php inputvalue("decimal", $binaryVALUE, $decimalVALUE) ?>">
        <br><br>
        <label for="binary">Binary</label>
        <input type="number" name="binary" value="<?php inputvalue("binary", $binaryVALUE, $decimalVALUE) ?>">
        <br><br>
        <input type="submit">
    </form>
</body>

</html>
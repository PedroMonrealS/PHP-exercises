<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>EX1</title>
</head>
<?php
$table = [
    ["Country" => "Spain", "Area(sq-km)" => "505909", "Population" => "48940000", "Capital" => "Madrid"],
    ["Country" => "France", "Area(sq-km)" => "672051", "Population" => "68370000", "Capital" => "Paris"],
    ["Country" => "Germany", "Area(sq-km)" => "357596", "Population" => "82720000", "Capital" => "Berlin"],
    ["Country" => "Italy", "Area(sq-km)" => "301340", "Population" => "58970000", "Capital" => "Rome"]
];

$maxdensity = 0;
foreach ($table as $country) {
    $density = intval($country["Population"] / $country["Area(sq-km)"]);
    if ($maxdensity < $density) {
        $maxdensity = $density;
        $countrymaxdensity = $country["Country"];
    }
    echo "The density of population of " . $country["Country"] . " is " . $density . " inhabitant/square-km <br><br>";
}
echo "The country with the highest density of population is " . $countrymaxdensity;

echo "<br><br>";
echo "<form action='' method='POST'>";
foreach ($table as $vals => $countrya) {
    $name = $countrya["Country"];
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if ($_POST["radiobutton"] == $name) {
            echo "<input type='radio' id=$name name='radiobutton' value=$name checked>";
            echo "<label for=$name>$name</label><br>";
        } else {
            echo "<input type='radio' id=$name name='radiobutton' value=$name>";
            echo "<label for=$name>$name</label><br>";
        }
    } else {
        echo "<input type='radio' id=$name name='radiobutton' value=$name>";
        echo "<label for=$name>$name</label><br>";
    }
}
echo "<input type='submit'>";
echo "</form>";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!isset($_POST["radiobutton"])) {
        echo "Please choose one country";
    } else {
        foreach ($table as $CaseCountry) {
            if ($CaseCountry["Country"] == $_POST["radiobutton"]) {
                $density = intval($CaseCountry["Population"] / $CaseCountry["Area(sq-km)"]);
                echo $CaseCountry["Country"] . "<br> Area(sq-km): " . $CaseCountry["Area(sq-km)"] . " <br> Population: " . $CaseCountry["Population"] . " <br>Capital: " . $CaseCountry["Capital"];
            }
        }
    }
}
?>

<body>
</body>

</html>
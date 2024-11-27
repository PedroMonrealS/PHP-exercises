<!doctype html>
<html lang="en">

<head>
    <meta charset="iso-8859-1">
</head>
<?php
$string = [
    ["surname" => "Rigo", "name" => "Andreu", "address" => "My Street, 99", "phone" => "666999666"],
    ["surname" => "Doe", "name" => "John", "address" => "5th Avenue, 3", "phone" => "333111333"]
];

echo "<table >";
echo "<td>Surname</td>";
echo "<td>Name</td>";
echo "<td>Address</td>";
echo "<td>Phone</td>";


foreach ($string as $case) {
    echo "<tr>";
    foreach ($case as $value) {
        echo "<td>$value</td>";
    }
    echo "</tr>";
}
?>

<body>
</body>
<style>
    table,
    th,
    td {
        border: 1px solid black;
    }
</style>

</html>
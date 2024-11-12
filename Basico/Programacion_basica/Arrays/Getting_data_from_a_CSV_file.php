<?php
/* Imagine you are provided with data in comma separated values format. See the example:

Surname;Name;Address;Phone
Rigo;Andreu;C/ My Street, 99;666999666
Doe;John;C/ 5th Avenue, 3;333111333

Notice that you can store it in a single variable.

Use the function explode to split the string in its rows. Then use it again to split each row in its fields. Save the information in an array of arrays. You can use print_r() or showArray() to check that you have done correctly.

Using foreach, write the information in table format on the screen. Use the table tags of HTML. */


$values = "Surname;Name;Address;Phone
Rigo;Andreu;C/ My Street, 99;666999666
Doe;John;C/ 5th Avenue, 3;333111333";

$array = explode("\n", $values);
//print_r($array);

echo "<br>";

foreach ($array as $valor) {
    $array2[] = explode(";", $valor);
}

echo "<table border=1>\n";
for ($h = 0; $h < count($array2); $h++){
    echo "<tr>";
    for ($v = 0; $v < count($array2[$h]); $v++){
        echo "<td>".$array2[$h][$v]."</td>";
    }
        echo "<tr>";

}
echo "</table>\n";
?>

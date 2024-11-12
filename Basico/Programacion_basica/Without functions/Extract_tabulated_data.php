<?php
/* Supose a string following this schema:

Name              Surname        phone
1234567890*1234567890*123456789

for instance
$data="Andreu    *Rigo      *666999666";

Extract the name, surname and phone to 3 variables with the corresponing name. */


$data = "Andreu    *Rigo      *666999666";

$data = str_replace(" ", "", $data);
echo $data . "<br>";

// name
$pos1 = strpos($data, "*");
//echo $pos1 . "<br>";
$name = substr($data, 0, $pos1);
//echo $name . "<br>";

// surname

$pos2 = strpos($data, "*", $pos1 + 1);
//echo $pos2 . "<br>";
$surname = substr($data, $pos1 + 1, $pos2 - $pos1 - 1);

// phone
$pos3 = strpos($data, "*", $pos2 + 1);
$phone = substr($data, $pos2 + 1);

echo "<br>";
echo "Name: " . $name . "<br>";
echo "Surname: " . $surname . "<br>";
echo "Phone: " . $phone . "<br>";

?>

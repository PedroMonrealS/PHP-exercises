<?php
/* Substitute accented vowels with their non-accented counterparts */

$string = "Buenos días a todos, Aquí hay muchos móviles";

$string = str_replace('á', 'a', $string);
$string = str_replace('é', 'e', $string);
$string = str_replace('í', 'i', $string);
$string = str_replace('ó', 'o', $string);
$string = str_replace('ú', 'u', $string);

echo $string;

?>

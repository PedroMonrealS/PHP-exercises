<?php

$string="Surname;Name;Address;Phone
Rigo;Andreu;C/ My Street, 99;666999666
Doe;John;C/ 5th Avenue, 3;333111333
";

$newarray=explode("\n",$string);
var_dump($newarray);
?>
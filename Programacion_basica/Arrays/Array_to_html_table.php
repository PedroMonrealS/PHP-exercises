<?php

function array2table($col1, $col2, $array) {
    $table="<table border=solid>\n";
    if($col1 != ("") && $col2 !=("")){
        $table.="<tr><th>$col1</th><th>$col2</th></tr>\n";
    }
    foreach ($array as $v1 => $v2) {
        $table.= "<tr><td>$v1</td><td>$v2</td></tr>\n";
    }
    $table.="</table>\n";
    return $table;
}

$datos = [
    "Pedro" => "848559340",
    "Miguel" => "384442023",
    "Juan" => "444556732"
];

echo array2table("Name", "Phone", $datos);

?>


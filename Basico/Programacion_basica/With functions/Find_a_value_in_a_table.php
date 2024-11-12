<?php

$contacts = [
    [
        "Surname" => "Rigo",
        "Name" => "Andreu",
        "Address" => "C/ My Street, 99",
        "Phone" => "666999666"
    ],
    [
        "Surname" => "Doe",
        "Name" => "John",
        "Address" => "C/ 5th Avenue, 3",
        "Phone" => "333111333"
    ]
];



function in_table($needle, $haystack) {
    foreach ($haystack as $row) {
    if (in_array($needle, $row)) {
    return true;
    }
    }
    return false;
}


function search_in_table($needle, $haystack) {
    $results = [];

    foreach ($haystack as $rowIndex => $row) {
    foreach ($row as $colIndex => $value) {
    if ($value === $needle) {
    $results[] = ['row' => $rowIndex, 'column' => $colIndex];
    }
    }
    }

    if (!empty($results)) {
    return $results;
    }

    return false;
}


var_dump( in_table("Andreu", $contacts));

echo "<br>";
var_dump(search_in_table("Andreu", $contacts));
echo "<br>";

$res = search_in_table("Andreu", $contacts);

if ($res !== false) {
    foreach ($res as $result) {
        echo "Row: " . $result['row'] . ", Column: " . $result['column'];
    }
} else {
    var_dump($res);
}
?>
<?php
$dataArray = ["Pedro", "Monreal", "717776040", "2004"];

function showalist($dataArray)
{
    if (is_array($dataArray)) {
        foreach ($dataArray as $elem) {
            echo "<ul>" . $elem . "</ul>";
        }
    } else {
        $array = implode(",", $dataArray);
        return $array;
    }
}
echo showalist($dataArray);

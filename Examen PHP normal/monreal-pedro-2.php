<?php

$array = [10, 15, 3, 7];


function ksum($k, $array)
{
    for ($i = 0; $i < count($array); $i++) {
        for ($e = 0; $e < count($array); $e++) {
            if ($i == $e) {
            } else {
                if (($array[$i] + $array[$e]) == $k) {
                    return true;
                }
            }
        }
    }
    return false;
}

//var_dump(ksum(17, $array));


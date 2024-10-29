<?php
/* Write a condition to know if a date (day + month) belongs to summer* or not

$day=2;
$month=10;
var_dump();

*You can do the condition for the other seasons if you want to. */

$day = 2;
$month = 10;

if(($month == 6 && $day >= 21) || ($month == 7) || ($month == 8) || ($month == 9 && $day <= 23)) {
    echo "Is summer";
} else {
    echo "Is not summer";
}
?>

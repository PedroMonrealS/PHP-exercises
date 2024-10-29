<?php
/*Error code */
ini_set('display_errors', 1);
error_reporting(E_ALL);

$day=20;
$month="June";

if ($day > 1 && $day < 21 && $month === "June")
{
    echo "Yes";
}
else
{
    echo "No";
}
?>
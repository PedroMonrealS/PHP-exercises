<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);
/*
Build a function called checkDate() that takes two INTEGER arguments, the first one is the day and the second one is the month. The function should return true if the day and month is valid, otherwise it should return false.

Use an INDEXED array inside the function to save the number of days corresponding to each month.
*/

//Define the function HERE


//I need to rename the function because, already exist another with this name
function CheckDates($day, $month) {

$daysmonth = [0, 31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];


if ($month < 1 || $month > 12 ){
  return false;
}

if ($daysmonth[$month] >= $day){
    return true;
}
else
{
    return false;
}

}

// Use the following code to check if the function works correctly


if (CheckDates(15, 9)) {
  echo "Test passed<br>\n";
} else {
  echo "Test failed<br>\n";
}
if (!CheckDates(31, 9)) {
  echo "Test passed<br>\n";
} else {
  echo "Test failed<br>\n";
}
if (!CheckDates(15, 14)) {
  echo "Test passed<br>\n";
} else {
  echo "Test failed<br>\n";
}if (CheckDates(28, 2)) {
  echo "Test passed<br>\n";
} else {
  echo "Test failed<br>\n";
}


?>
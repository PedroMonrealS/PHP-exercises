<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

/*
Write a function called getWeekDayStr that:
- It takes an integer between 1 and 7 as its first argument
- Takes an string that represents the language as its second argument. 
- Allowed values for the language are: "en" for English, "ca" for Catalan, and "es" for Spanish
- If the integer is out of range or the language is unknown, the function returns false
- If the arguments are correct, the function returns the name of the day of the week in that language
- The second argument is optional. If not provided, English is used.
For instance:
- getWeekDayStr(1,"es") must return "Lunes"
- getWeekDayStr(2) must return "Tuesday"
- getWeekDaystr(1,"jp") must return false (because "jp" is not an allowed language)

Define your function in such a way that it passes all the tests in the testsuite below
Bonus:
- Store the names of the days of the week in a single table (array of array) instead of using several
independent arrays.
- Do it in such a way that you can obtain the name of the day of the week with the following syntax:
$table["en"][0]
for instance, would provide "Monday"
*/

//Define your function here
function getWeekDayStr($number, $language = 'en'){

    $days = [
        'en' => ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"],
        'es' => ["Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo"],
        'ca' => ["Dilluns", "Dimarts", "Dimecres", "Dijous", "Divendres", "Dissabte", "Diumenge"]
    ];

    if ($number < 1 || $number > 7){
    return false;
    }
//Verifica que exista el lenguaje en la lista
    if (!array_key_exists($language, $days)) {
        return false;
    }    

    if ($language == "en" || $language =="es" || $language =="ca"){
        $language;
    }

    return $days[$language][$number - 1];
}
    //TestSuite
function testCase($testNumber,$arg1, $arg2, $expectedValue){
    if (isset($arg2)){
        $r=getWeekDayStr($arg1, $arg2);
    } else {
        $r=getWeekDayStr($arg1);       
    }
    if ($r===$expectedValue){
        echo "<p style=\"color: green\">Test $testNumber Passed!</p>";
    } else {
        echo "<p style=\"color: red\">Test $testNumber Failed!</p>"; 
        echo "Expected value<br>\n";
        var_dump($expectedValue);
        echo "<br>\n";
        echo "Returned value<br>\n";
        var_dump($r);
        echo "<br>\n";
    }
}
testCase(1,1,null,"Monday");
testCase(2,7,"ca","Diumenge");
testCase(3,0,null,false);
testCase(4,5,"es","Viernes");
testCase(5,1,"xx",false);
testCase(6,10,"ca",false);
testCase(7,2,"es","Martes");
testCase(8,3,"en","Wednesday");
testCase(9,4,"ca","Dijous");
testCase(10,5,null,"Friday");




?>
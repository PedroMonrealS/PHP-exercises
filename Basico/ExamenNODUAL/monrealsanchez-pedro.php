<?php
    ini_set('display_errors', 1);
    error_reporting(E_ALL);


//Question 1 (+1 point) [1]
echo "Question 1" . "<br><br>";

//Given the following variable
$fullName =  "Rigo, Andreu";
$dataName = explode(",",$fullName);

$firstName = $dataName[0];
$surname = $dataName[1];

// Write here the code to extract the first name to $firstName and the surname to $surname
// Your code must work for any "full name". Also with yours  

//Notice that

echo $firstName; //must write Andreu
echo "<br>";
echo $surname; //must write Rigo

//////////////////////////////////////////////////////
echo "<br><br>Question 2" . "<br><br>";

//Question 2 (+1 point) [2]

// Use a loop to print all the multiples of 3 between 30 and 40. Do not use conditionals.

// Your code should print: 30, 33, 36, 39,
$start = 30;
$finish = 40;

while ($start < $finish){
    echo $start . ", ";
    $start = $start + 3;
}

//////////////////////////////////////////////////////
echo "<br><br>Question 3" . "<br><br>";

// Question 3 (+2 points) [4]
/*
Write a function that takes an integer representing an age in years as argument
The function must return a string depending on the value of the age
0-12: You are a child
13-19: You are a teenager
20-30: You are a youngster
30-60: You are an adult
Greateher than 60: You are in your golden years
If the integer is negative, return false
*/

function myage($age){
    if($age < 0){
        return false;
    }
    elseif($age > 0 && $age < 13 ){
        return "You are a child";
    }
    elseif($age > 12 && $age < 20){
        return "You are a teenager";

    }
    elseif($age > 19 && $age < 31){
        return "You are a youngster";
    }
    elseif($age > 30 && $age < 60){
        return "You are an adult";
    }
    else
    {
        return "You are in your golden years";
    }
}
// Call the function myage()

echo myage(15); //must print 'You are a teenager'
echo "<br>";

echo myage(40); //must print 'You are an adult'
echo "<br>";

echo myage(-1); //must print nothing

//////////////////////////////////////////////////////
echo "<br><br>Question 4" . "<br><br>";

// Question 4 (+1 point) [5]
// Given the following array
$colors = ['red', 'pink', 'brown', 'yellow', 'purple', 'green', 'blue', 'cyan'];
// without redefining the whole array
// Write the code needed to eliminate the element 'brown' from the array
// Substitute the element 'cyan' by 'orange'

print_r ($colors);

$valueToEliminate = "brown";
for($i = 0; $i < count($colors); $i++){
    if($colors[$i] == $valueToEliminate){
    unset($colors[$i]);
    $colors = array_values($colors);
    }
}

echo "<br>";
print_r ($colors);

$InitialValue = 'cyan';
$FinalValue = 'orange';


for($i = 0; $i < count($colors); $i++){
    if($colors[$i] == $InitialValue){
    $colors[$i] = $FinalValue;
    }
}
echo "<br>";
print_r ($colors);
echo "<br>";
//////////////////////////////////////////////////////
echo "<br><br>Question 5" . "<br><br>";

// Question 5 (+1 point) [6]
// Print the elements of the resulting array in the previous question 
// as a list of elements separated by commas without using loop

echo implode(", ", $colors);

/////////////////////////////////////////////////////
echo "<br><br>Question 6" . "<br><br>";

// Question 6 (+1 point) [7]
// Given the following associative array relating products and its price in euros
$order=['chair'=>39.99,'table'=>95.99,'frame'=>6.99,'light-bulb'=>8.99];
// Use a loop to sum up all the prices and show the total price of all the products

echo "<br>";
$sum = 0;
foreach($order as $product => $price){
    $sum = $sum + $price;
}
echo $sum;
echo "<br>";
/////////////////////////////////////////////////////
echo "<br><br>Question 7" . "<br><br>";

// Question 7 (+1 points) [8]
// In the following table we represent an order. In this case, for each product
// the amount bought and the unitary price (uprice) is saved
$order=['chair'=>['amount'=>3,'uprice'=>39.99],
        'table'=>['amount'=>2,'uprice'=>95.99],
        'frame'=>['amount'=>7,'uprice'=>6.99],
        'light-bulb'=>['amount'=>10,'uprice'=>8.99]];
// Write the code to calculate the total price of the frames from the table. Notice
// that you need to multiply the amount of frames by the unitary price of the frames.
// It is mandatory to get the values from the table by using the right syntax

echo "frame " . " => total price: " . $order["frame"]["amount"]* $order["frame"]["uprice"];
echo "<br>";

//////////////////////////////////////////////////////
echo "<br><br>Question 8" . "<br><br>";

// Question 8 (+2 points) [10]
// Use two nested loops and a conditional to print the name of the product, its amount and its
// unitary price, but only for those products whose amount is larger than 5
echo "<br>";
foreach($order as $productIndex => $amount){
    if($amount["amount"] > 5){
    echo $productIndex;
    foreach($amount as $val){
    echo " => " . $val;
    }
    echo "<br>";
}
}
?>
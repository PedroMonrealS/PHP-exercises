<?php
/* Exercise 21: Add elements to an associative array Problem: You have an associative array and need to add the following elements: key "color" with the value "red" and key "size" with the value "medium."*/


 function showArray($array){
    echo "<pre>";
    print_r($array);
    echo "</pre>";
  }

function Ex21(){
$Problem=["color"=>"black", "size"=>"big"];

$Problem["color"] = "red";
$Problem["size"] = "small";


showArray($Problem);
}
/* Exercise 22: Remove a specific element Problem: Write a script to remove the element with the key "age" from the following associative array: $person = ["name" => "Martin", "age" => 25, "city" => "Paris"]; */

function Ex22(){
$person = ["name" => "Martin", "age" => 25, "city" => "Paris"];
showArray($person);
unset ($person["age"]);
showArray($person);
}

function Ex23(){

$person = ["name" => "Martin", "age" => 30, "city" => "Paris"];
showArray($person);
$person["city"]="Lyon";
showArray($person);
}


 /* Exercises 26 to 30: 
For all exercises from 26 to 30, consider the following array: 
$users = [ "John" => ["age" => 25, "city" => "New York"], "Jane" => ["age" => 22, "city" => "Paris"] ];

Exercise 26: Access data 
Problem: Write the code to access the city of birth of John in the following array and display it. 
*/

function Ex26(){
$users = [ "John" => ["age" => 25, "city" => "New York"], "Jane" => ["age" => 22, "city" => "Paris"] ];
showArray($users);

echo $users["John"]["city"];

}


/* Exercise 27: Add information 
Problem: Write the code to add a new entry for a user named "Mike" who is 30 years old and lives in "Berlin" to the array $users.*/

function Ex27(){
$users = [ "John" => ["age" => 25, "city" => "New York"], "Jane" => ["age" => 22, "city" => "Paris"] ];
$users["Mike"] = ["age" => 30, "city" =>  "Berlin"];
showArray($users);

}


/* Exercise 28: Modify a value 
Problem: Write the code to change Jane's age to 23 in the array $users.  */

function Ex28(){
$users = [ "John" => ["age" => 25, "city" => "New York"], "Jane" => ["age" => 22, "city" => "Paris"] ];
$users["Jane"]["age"]="23";
showArray($users);

}

/* Exercise 29: Display all information 
Problem: Write the code to display all the information of each user in the format 
"Name: [name], Age: [age], City: [city]" using the array $users. */
function Ex29(){

$users = [ "John" => ["age" => 25, "city" => "New York"], "Jane" => ["age" => 22, "city" => "Paris"] ];

foreach ($users as $key => $value){
  echo "Name: " . $key . "Age:" . $value['age'] . " City: " . $value['city'] ."<br><br>";
}
}

/* Exercise 30: Count the users 
Problem: Write code to count the total number of users in the array $users.*/
function Ex30(){
  $contador = 0;
  $users = [ "John" => ["age" => 25, "city" => "New York"], "Jane" => ["age" => 22, "city" => "Paris"] ];
  foreach ($users as $key => $value){
    $contador++;
  }
  echo  "Users: " . $contador;

  
}


/* Exercise 1: Merge two arrays 
Problem: Merge two arrays into one without using array_merge.*/

function Ex1(){

  $array1 = ["red","blue","green"];

  $array2 = ["spain","france","germany"];

  $array3 = [];

  foreach($array1 as $value){
    $array3[] = $value;
  }

  foreach($array2 as $value){
    $array3[] = $value;
  }

  foreach($array3 as $value){
    echo $value . ", ";
}
}

/* Exercise 2: Eliminate duplicates 
Problem: Write a script to remove duplicates from an array. */
function Ex2(){
  $array = ["spain","france","germany","italy","china","russia","spain","france"];
  $arrayLength = count($array);
  echo "Array before <br><br>";
  foreach($array as $value){
    echo $value . "<br>" ;
  }
  for ($i = 0; $i < $arrayLength; $i++) {
    $arrayLength = count($array);
    for ($e = $i + 1; $e < $arrayLength; $e++) {
        if ($array[$i] == $array[$e]) {
            unset($array[$e]);
            $array = array_values($array);
            $arrayLength = count($array);

          }
      }
  }
  
  echo "<br> Array after <br><br>";
  foreach($array as $value){
    echo $value . "<br>" ;
  }
}

  /* Exercise 3: Reverse an array 
Problem: Reverse the order of elements in an array.*/
function Ex3(){
  $array = ["1","2","3","4","5","6"];
  $newArray = [];
  $index = 0;
  $arraylength = count($array);
  for($i = $arraylength - 1; $i >= 0; $i--){
    $newArray[$index] = $array[$i];
    $index++;
  }
echo "<br>";

  for($i = 0; $i < $arraylength; $i++){
    echo $array[$i] . "<br>";
  }
  echo "<br>";

  for($i = 0; $i < $arraylength; $i++){
    echo $newArray[$i] . "<br>";
  }

}
/* Exercise 4: Extract the first N elements 
Problem: Write code to extract the first N elements from an array.*/

function Ex4(){
  $n = 5;
  $array = ["1","2","3","4","5","6"];
  for($i = 0; $i < $n; $i++){
    echo $array[$i] . "<br>";
  }
}

/* Exercise 5: Find the maximum 
Problem: Write a script to find the largest element in an array. */

function Ex5(){
  $array = ["Apple","School","Computer","Salt","Fan","Phone"];
  $max=0;
  for($i = 0; $i < count($array); $i++){
    if(strlen($array[$i]) > strlen($max)){
      $max = $array[$i];
  }
}
echo $max;
}

function Ex6(){
  $array = [1,5,20,5,1,2];
  $suma = 0;
  for($i = 0; $i < count($array); $i++){
    $suma = $suma + $array[$i];
  }
  echo $suma;
}

/* Exercise 7: Filter elements Problem: Create a function to filter an array to keep only even numbers. */

function Ex7(){
  
  $array = [1,"pedro",20,"sun",1,"a"];
  for ($i = 0; $i < count($array); $i++){
    if(is_int($array[$i])){
      echo "INT";
    }
    else
    {
      echo "NO INT";
    }
    echo "<br>";

}
}


/* Exercise 9: Count occurrences Problem: Count how many times an element appears in an array. */
function Ex9(){
  $repeat = "Spain";
  $array = ["Spain","Italy","Spain","Spain", "England", "France"];
  $times = 0;
  for($i = 0; $i < count($array); $i++){
    if($array[$i] == $repeat){
      $times++;
  }


}
echo $times;
}

/* 
Exercise 17: Concatenate strings Problem: Write a script to concatenate all the elements of an array of strings to form a single string. */

function Ex17(){
  $array = ["Hello","everybody","my","name", "is", "Pedro"];
  $string = "";
  for($i = 0; $i < count($array); $i++){
    $string = $string . " " . $array[$i];
  }
  echo $string;
}

Ex17();


?>
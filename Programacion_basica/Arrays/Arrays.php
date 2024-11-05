<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

$personaldata=["name"=>"John", "age"=>25, "city"=>"London"];
$personaldata["phoneNumber"]="555-555-555";

//Eliminar valor del array
unset($personaldata["age"]);

showArray($personaldata);


function showArray($array){
    echo "<pre>";
    print_r($array);
    echo "</pre>";
  }

?>



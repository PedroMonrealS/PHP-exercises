<?php
/* Write a function with 2 optional arguments. One argument is the language. Possible values= "en", "es", and "ca". The other argument is the name.

If none of the arguments is provided, the function provides a generic greeting in English:
"Hello, friend!"

If the name is provided, the name is used instead of friend.
If the language is provide, the greeting is in that language.*/

ini_set('display_errors', 1);
error_reporting(E_ALL);

$language = "es";
$name = "Christian";

greeting($language, $name);

function greeting($language, $name){
 if ($language == ""){
    $language = "en";
 }
 if ($name == ""){
    $name = "friend";
 }
 say($language, $name);
}

function say($language, $name){
    if ($language == "en"){
        echo "Hello, $name!";
}
elseif ($language == "es"){
    echo "Hola, $name!";
}
elseif ($language == "ca"){
    echo "Bon dia, $name";
}
else{
    echo "Error";
}
}
?>



    
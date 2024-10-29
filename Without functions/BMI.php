<?php
/* Look for information about the Body Mass Index (BMI) (you can check the wikipedia for instance) and write a code that, using the height and the weight of the person, calculates the BMI and shows the corresponding label*/

$height= 1.80;
$weight= 80;

$IMC = $weight/$height**2;

echo $IMC . "<br>";

if ($IMC < 18.5){
    echo "Low weight";
}
elseif ($IMC > 18.5 && $IMC < 24.9 ){
    
    echo "Normal weight";
    
}

elseif ($IMC > 24.9 && $IMC < 29.9)
{
    echo "Overweight";
}
elseif ($IMC > 30){
    echo "Obesity";
}
?>
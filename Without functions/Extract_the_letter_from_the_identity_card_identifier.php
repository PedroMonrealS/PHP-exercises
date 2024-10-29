<?php 
/* Extract the letter from $dni below
$dni="12345678Z";


Bonus: Check if the length of the string is equal to 9. If not, remove the hyphens and spaces. */

$dni="12345678Z'' ";


if (strlen($dni) == 9){
    echo "Letra: <br>";
    echo $dni[8];
}
else
{
echo "Original: <br>";
echo "(".$dni.")";
echo "<br>";
$dni=str_replace(" ","", $dni);
$dni=str_replace("'","", $dni);
echo "Modificado: <br>";
echo "(".$dni.")";
echo "<br>";
echo "Letra: <br>";
echo $dni[8];

}
?>
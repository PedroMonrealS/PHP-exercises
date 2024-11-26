<!doctype html>
<html lang="en">

<head>
    <meta charset="iso-8859-1">
    <title>Inverting Array Table</title>
</head>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["values"]) && $_POST["values"]!=""){
        $NewArray=explode(",",$_POST["values"]);
        echo "The list introduced is: <br>";
        echo array2row($NewArray);
        echo "The reversed list is:<br>";
        $array2rowValues=array2row(invertarray($NewArray));
        if($array2rowValues==FALSE){
            echo "ERROR";
        }
        else
        echo $array2rowValues;

    }
    else
    {
        echo "ERROR";
    }
}

function invertarray($array){
    if(isset($array) && $array!=""){

    for($i=(count($array)-1); $i >= 0; $i--){
        $arrayInvertido[]=$array[$i];
    }
    return($arrayInvertido);
}
else
{
    return FALSE;
}
}

function array2row($array){
    if(isset($array)){

    $html = "<table>";
    foreach($array as $valor){
     $html .= "<th>$valor</th>";
    }
    $html .= "</table>";
    return $html;
}
else
return FALSE;
}
?>

<body>
    <form action="" method="post">
        <h1>Introduce a list separating by commas</h1>
        <textarea name="values"></textarea>
        <input type="submit">
    </form>
</body>

</html>

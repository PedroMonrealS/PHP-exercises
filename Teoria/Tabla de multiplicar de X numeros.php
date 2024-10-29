<?php
function tablas($numero){
echo "<h2>Tabla del " . $numero . "</h2>";
for($i=1; $i<=10;$i++){
echo $i." x ". $numero . "= ". ($i*$numero) . "<br>\n";
}
}


function cantidad($cant){

for($num=1; $num<=$cant; $num++){
    tablas($num);
    echo "<br>";
}
}


$cantidadTablas = 1000;
echo "<h1>Te creo las " . $cantidadTablas . " tablas de multiplicar</h1>";
cantidad($cantidadTablas);
?>



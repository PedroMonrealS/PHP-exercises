<?php
$a=range(0,9);
$b=range("A","F");
$hexDigits=array_merge($a,$b);

?>
<table border="2" cellspacing="0" cellpadding="5px";>
    <tr>
        <th>
            <?php
            foreach($hexDigits as $value){
                echo "<th style='border: 1px solid black;'>$value</th>";
            }
            echo "</th>\n";
for($i=0; $i<=15; $i++){
    echo "<tr>";
    echo "<th style='border: 1px solid black;'>$i</th>";
    for($j=0; $j<=15;$j++){
        $val =$i*16 + $j;
        echo "<th style='border: 1px solid black;'>$val</th>";

    }
    echo "<tr>";
}
            ?>
    </tr>
</table>
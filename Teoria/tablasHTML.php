<?php

echo "<table border=1>\n";
for ($r=1; $r<=10;$r++){
    echo "<tr>"; 
    for($c=1;$c<=10;$c++){
        echo "<td>".($r*$c)."</td>";
    }
    echo "</tr>\n";
}
echo "</table>\n";

?>

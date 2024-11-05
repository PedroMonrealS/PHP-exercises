<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

$names = ["table", "chair", "pencil", "table"];

function myarraysearch($needle, $haystack) {
    $values = [];

    for ($i = 0; $i < count($haystack); $i++) {
      if($needle == $haystack[$i]){
            $values[] = $haystack[$i];
      }
        }

    if (empty($values)){
      return false;
    }

    return $values;
}

var_dump(myarraysearch("table", $names));
echo "<br>";
print_r(myarraysearch("table", $names));
?>
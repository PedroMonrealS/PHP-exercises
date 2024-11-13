<!doctype html>
<html lang="en">

<head>
    <!-- change to utf-8 if you use that -->
    <meta charset="iso-8859-1">
    <title>BMI Calculator</title>
</head>
<body>
  <h1>BMI Calculator</h1>
<form action="" method="post">
  <label for="weight">Weight (Kg)</label>
  <input type="number" name="weight">
  <label for="height">Height (m)</label>
  <input type="number" name="height">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
     if (!isset($_POST["weight"], $_POST["height"]) || empty($_POST["weight"]) || empty($_POST["height"])) {
        echo "Empty values";
    }
    
    else
     {
    echo "Your weight is " . $_POST["weight"]. " Kg and your height is " . $_POST["height"]. " m <br><br>";
    echo BMI($_POST["weight"], $_POST["height"]);
     }

      }
      function BMI($weight, $height){

        $IMC = $weight/$height**2;
                
        if ($IMC < 18.5){
            return "Low weight";
        }
        elseif ($IMC > 18.5 && $IMC < 24.9 ){
            
            return "Normal weight";
            
        }
        
        elseif ($IMC > 24.9 && $IMC < 29.9)
        {
            return "Overweight";
        }
        elseif ($IMC > 30){
            return "Obesity";
        }
        }

    ?>

</body>
</html>
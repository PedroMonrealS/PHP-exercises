<!DOCTYPE html >
<html>
<head>
  <meta charset="utf-8" >
   <title>Checkbox sticky</title>

</head>

<body>

<?php
if ($_SERVER['REQUEST_METHOD']=='POST'){
  $listOfToppings=implode(", ", $_POST['toppings']);
  echo "You have chosen $listOfToppings <br>";
}
//else {
?>
<form action="" method="post">
<fieldset>
  <legend>Toppings <em>(Choose as many as you want)</em></legend>
	<ul>
  	<?php
  	$toppings=["red sauce"=>"Red sauce","white sauce"=>"White sauce", "mozzarella"=>"Mozzarella Cheese","pepperoni"=>"Pepperoni","mushrooms"=>"Mushrooms","peppers"=>"Peppers","anchovies"=>"Anchovies"];
    
	foreach($toppings as $toppingVal=>$toppingLabel){

  	$checked="";
  	if (isset($_POST['toppings'])){
    	foreach ($_POST['toppings'] as $value) {
      	if ($value==$toppingVal) {
        	$checked="checked";
      	}
    	}
  	}


	echo "<li><label><input type=\"checkbox\" name=\"toppings[]\" value=\"$toppingVal\"  $checked > $toppingLabel</label></li>\n";

	}
  	?>
  	<!--<li><label><input type="checkbox" name="toppings[]" value="red sauce" <?php //echo $checked; ?>> Red sauce</label></li>
  	<li><label><input type="checkbox" name="toppings[]" value="white sauce"> White sauce</label></li>
  	<li><label><input type="checkbox" name="toppings[]" value="mozzarella"> Mozzarella Cheese</label></li>
  	<li><label><input type="checkbox" name="toppings[]" value="pepperoni"> Pepperoni</label></li>
  	<li><label><input type="checkbox" name="toppings[]" value="mushrooms"> Mushrooms</label></li>
  	<li><label><input type="checkbox" name="toppings[]" value="peppers"> Peppers</label></li>
  	<li><label><input type="checkbox" name="toppings[]" value="anchovies"> Anchovies</label></li>
	-->
	</ul>
  </fieldset>

<p><input type="submit" value="Choose toppings">
</p>

</form>
<?php
//}  // else of server request method
?>
  </body>
</html>
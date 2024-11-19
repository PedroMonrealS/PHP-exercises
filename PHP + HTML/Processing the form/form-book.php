<!DOCTYPE html >
<html>
<head>
  <meta charset="utf-8" >
   <title>Blackstone Bistro: Pizza-on-Demand</title>
   <style type="text/css">
      ol, ul { 
     list-style-type: none;
      }
   </style>
</head>

<body>

<h1>Blackstone Bistro | Pizza-on-Demand</h1>

<p>Our 12" wood-fired pizzas are available for delivery. Build your custom pizza and we'll deliver it within an hour.</p>


<form action="./process-order.php" method="post">

<fieldset>
  <legend>Your Information</legend>
  <ul>
    <li><label for="form-name">Name:</label> <input type="text" name="customername" id="form-name"></li>
    <li><label for="form-address">Address:</label> <input type="text" name="address" id="form-address"></li>
    <li><label for="form-tel">Telephone Number:</label> <input type="tel" name="telephone" id="form-tel"></li>
    <li><label for="form-email">Email: <input type="email" name="email" id="form-email"></label></li>
    <li>Delivery instructions:<br>
    <textarea name="instructions" rows="4" cols="60" maxlength="400" id="form-story" placeholder="No more than 400 characters long"></textarea></li>
  </ul>
</fieldset>

<h2>Design your dream pizza:</h2>

<fieldset>
  <legend>Pizza specs</legend>
  <fieldset>
    <legend>Crust <em>(Choose one)</em>:</legend>
    <ul>
    <?php
      $crust=["white"=>"Classic white","multigrain"=>"Multigrain","cheese crust"=>"Cheese-stuffed crust","gluten free"=>"Gluten-free"];
      foreach ($crust as $value=>$label){
        echo "<li><label><input type=\"radio\" name=\"crust\" value=\"$value\"> $label</label></li>\n";
      }
    ?>
  <!--    <li><label><input type="radio" name="crust" value="white"> Classic white</label></li>
      <li><label><input type="radio" name="crust" value="multigrain"> Multigrain</label></li>
      <li><label><input type="radio" name="crust" value="cheese crust"> Cheese-stuffed crust</label></li>
      <li><label><input type="radio" name="crust" value="gluten free"> Gluten-free</label></li>
    -->
    </ul>
  </fieldset>

  <fieldset>
  <legend>Toppings <em>(Choose as many as you want)</em></legend>
    <ul>
      <?php
      $toppings=["red sauce"=>"Red sauce", "white sauce"=>"White sauce", "mozzarella"=>"Mozzarella Cheese", "pepperoni"=>"Pepperoni", "mushrooms"=>"Mushrooms", "peppers"=>"Peppers", "anchovies"=>"Anchovies"];
      foreach ($toppings as $value=>$label){
        echo "<li><label><input type=\"checkbox\" name=\"toppings[]\" value=\"$value\"> $label</label></li>\n";
      }
/*       <li><label><input type="checkbox" name="toppings[]" value="red sauce" checked> Red sauce</label></li>
      <li><label><input type="checkbox" name="toppings[]" value="white sauce"> White sauce</label></li>
      <li><label><input type="checkbox" name="toppings[]" value="mozzarella"> Mozzarella Cheese</label></li>
      <li><label><input type="checkbox" name="toppings[]" value="pepperoni"> Pepperoni</label></li>
      <li><label><input type="checkbox" name="toppings[]" value="mushrooms"> Mushrooms</label></li>
      <li><label><input type="checkbox" name="toppings[]" value="peppers"> Peppers</label></li>
      <li><label><input type="checkbox" name="toppings[]" value="anchovies"> Anchovies</label></li> */
    ?>
    </ul>
  </fieldset>

  <fieldset>
  <legend>Number</legend>
  <p>How many pizzas: 
  <select name="pizzas" size="1">
    <?php
    for ($i = 1; $i <= 6; $i++){
      echo "<option>$i</option>\n";

    }
    ?>
<!--     <option>1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
    <option>5</option>
    <option>6</option> -->
  </select>
  </p>
  </fieldset>

</fieldset> <!-- closes 'Pizza Specs' fieldset -->

<p><input type="submit" value="Bring me a pizza!">
<input type="reset"></p>

</form>

</body>
</html>

<!doctype html>
<html lang="en">

<head>
    <!-- change to utf-8 if you use that -->
    <meta charset="iso-8859-1">
    <title>Black Goose Bistro | Pizza-on-Demand</title>
</head>
<?php
function PizzaSpecsForm(){
$PizzaSpecs = ["ClassicWhite" => "Classic White", "Multigrain" => "Multigrain", "Cheese-stuffedcrust" =>"Cheese-stuffed crust", "Gluten-free" => "Gluten-free" ];

foreach($PizzaSpecs as $key => $value){
    echo "<li><input type='radio' name='crust' id='$key' value='$key'><label for='$key'>$value</label></li>";
}
}
//http://www.blackgoosebistro.com/pizza.php
?>
<body>
    <h1>Black Goose Bistro | Pizza-on-Demand</h1>
    <p>Our 12 " wood-fired pizzas are avalible for delivery. Build your custom pizza and we'll deliver it within an hour.</p>
<form action="http://www.blackgoosebistro.com/pizza.php" method="post">
    <li><label for="customername">Name:</label>
    <input name="customername" type="text"></li>
    <li><label for="address">Address:</label>
    <input name="address" type="text"></li>
    <li><label for="TelephoneNumber">Telephone Number:</label>
    <input name="telephone" type="text"></li>
    <li><label for="email">Email:</label>
    <input name="email" type="text"></li>
    <li><label for="deliveryInstructions">Delivery Instructions</label></li>
    <li><textarea name="instructions" type="text" maxlength="400" placeholder="No more than 400 characters long"></textarea></li>

    <p>Crust (Choose one):</p>
    
    <?php PizzaSpecsForm(); ?>
<!--     <li><input type="radio" name="crust" id="Classicwhite">
    <label for="Classicwhite">Classic white</label></li>
    <li><input type="radio" name="crust" id="Classicwhite">
    <label for="Classicwhite">Classic white</label></li>
    <li><input type="radio" name="crust" id="multigrain">
    <label for="multigrain">Multigrain</label></li>
    <li><input type="radio" name="crust" id="Cheese-stuffedcrust">
    <label for="Cheese-stuffedcrust">Cheese-stuffed crust</label></li>
    <li><input type="radio" name="crust" id="Gluten-free">
    <label for="Gluten-free">Gluten-free</label></li> -->
    <p>Toppings (Choose as many as you want):</p>

    <li><input type="checkbox" name="toppings[]" id="redSauce" value="red sauce"checked>
    <label for="red sauce">Red sauce</label></li>
    <li><input type="checkbox" name="toppings[]" id="whiteSauce" value="white sauce">
    <label for="white sauce">White sauce</label></li>
    <li><input type="checkbox" name="toppings[]" id="MozzarellaCheese" value="mozzarella Cheese">
    <label for="MozzarellaCheese">Mozzarella Cheese</label></li>
    <li><input type="checkbox" name="toppings[]" id="Pepperoni" value="pepperoni">
    <label for="Pepperoni">Pepperoni</label></li>
    <li><input type="checkbox" name="toppings[]" id="Mushrooms" value="mushrooms">
    <label for="Mushrooms">Mushrooms</label></li>
    <li><input type="checkbox" name="toppings[]" id="Peppers" value="peppers">
    <label for="Peppers">Peppers</label></li>
    <li><input type="checkbox" name="toppings[]" id="Anchovies" value="anchovies">
    <label for="Anchovies">Anchovies</label></li>
    <p>Number</p>
    <label for="HowManyPizzas">How Many Pizzas</label>
    <select id="HowManyPizzas" name="pizzas" >
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
    </select>
    <br>
    <button type="submit">Bring me a pizza!</button>
    <button>Reset</button>

    </form>
</body>

</html>

<!doctype html>
<html lang="en">

<head>
    <!-- change to utf-8 if you use that -->
    <meta charset="iso-8859-1">
    <title>Process pizza order</title>
</head>

<body>
    <h1>Your order of pizzas</h1>
    <p>Welcome
    <?php
    echo $_POST["customername"].", your phone is ";
    echo $_POST["telephone"].", your email address is ".$_POST["email"] . ' and your address is ' .$_POST["address"];
    ?>
    </p>
    <p>
    Instructions:
    <?php
    echo($_POST["instructions"]);

    ?>
   </p>
    <p>
    Crust type:
    <?php
    echo($_POST["crust"]);

    ?>
   </p>

    <p>
    Your toppings are:
    <?php
    var_dump($_POST["toppings"]);

    ?>
   </p>

   <p>
    Your number of pizzas is:
    <?php
    echo($_POST["pizzas"]);

    ?>
   </p>
</body>

</html>

<!doctype html>
<html lang="en">

<head>
        <!-- change to utf-8 if you use that -->
        <meta charset="iso-8859-1">
        <title>Protecting</title>
</head>

<body>
        <h1>Protecting</h1>

<?php



if ($_SERVER['REQUEST_METHOD']=='POST'){

        $test=$_POST['test'];

        $cleaned_test = htmlentities($test);

        $cleaned_test2 = strip_tags($test);

        echo $cleaned_test2;
}
?>

<!-- Use for instance  
        <script>alert("You've been hacked!!!")</script>
-->

        <br>
        <br>
        <form action="" method="post">
           Data to test:<br>
           <input type="text" name="test">
           <input type="submit">
        </form>
</body>

</html>
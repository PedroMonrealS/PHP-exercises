<!doctype html>
<html lang="en">

<head>
    <meta charset="iso-8859-1">
</head>
<body>
<?php
if($_SERVER["REQUEST_METHOD"] != "POST"){
    echo "<form action='' method='post'>
        <label for='name'>Name</label>
        <input type='text' name='name'>
        <br><br>
        <input type='submit'>
    </form>";
}
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['name'])){

        echo "<h1> Welcome " . $_POST['name'] . "</h1>";
        echo "<a href='index.php'>Go back to the game</a>";
        setcookie("username",$_POST['name'],(time()+3600*24*30));

        }        
    }
    ?>

</body>

</html>
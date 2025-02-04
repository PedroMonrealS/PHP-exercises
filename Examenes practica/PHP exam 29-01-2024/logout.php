<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        setcookie("username","anonymous",(time()+3600*24*30));
        header("Location: index.php");
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <form method="post" action="">
        <button type="submit">Logout</button>
    </form>
</body>
</html>
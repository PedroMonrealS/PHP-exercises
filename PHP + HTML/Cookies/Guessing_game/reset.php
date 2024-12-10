<?php
if (isset($_COOKIE['number2guess'])) {
    setcookie('number2guess','',(time()-3600));

}
if (isset($_COOKIE['attemptCounter'])) {
    setcookie('attemptCounter','',(time()-3600));

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <a href="Guessing_game_(with_cookies).php">RETURN</a>
</body>

</html>
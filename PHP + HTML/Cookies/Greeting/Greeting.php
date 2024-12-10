<?php

if (isset($_COOKIE['name'])) {
    echo "Welcome " . $_COOKIE['name'];
} else {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        setcookie("name", $_POST['name'], time() + 3600 * 24 * 30);
    }
    echo "
            <form method='post' action=''>
            <input type='text' name='name'>
            <input type='submit'>
            </form>";
}
?>

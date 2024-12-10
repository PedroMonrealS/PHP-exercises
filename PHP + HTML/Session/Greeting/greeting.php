<?php
session_start();

if (isset($_SESSION['name'])) {
    echo "Hello " . $_SESSION['name']."<br>";
    echo "<a href='reset.php'>RESET</a>";
} else {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $_SESSION['name'] = $_POST["name"];

    }
    echo "
            <form method='post' action=''>
            <input type='text' name='name'>
            <input type='submit'>
            </form>";
}
?>
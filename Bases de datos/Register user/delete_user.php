<?php

$page_title = 'Delete';
include('header.php');
echo '<h1>Delete</h1>';

require('./pdo_connect.php');


if ((isset($_GET['id'])) && (is_numeric($_GET['id']))) {
    $id = $_GET['id'];
    $r = "SELECT last_name, first_name, DATE_FORMAT(registration_date, '%M %d, %Y') AS dr, user_id FROM users WHERE user_id = $id";

    $result = $pdo->query($r);
    $rows = $result->fetchAll();
    echo "<h1>Delete user " . $rows[0]['first_name'] . " " . $rows[0]['last_name'] . "</h1>";
    echo "<form method='post' action=''>
    <label for='Delete'>Confirm delete</label>
    <input type='checkbox' name='Delete'>
    <input type='text' hidden name='id' value='" . $id . "'>
    <br><br>
    <input type='submit' value='Delete'></form>
    <br><br>";
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST['Delete'] == 'on') {

        echo "<h1>User " . $_POST['id'] . " has been deleted.</h1>";
        $q = "DELETE FROM users WHERE user_id = $id";
        $result = $pdo->query($q);
        $rows = $result->fetchAll();
    }
}


include('footer.php');
?>
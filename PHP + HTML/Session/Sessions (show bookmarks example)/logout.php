<?php
require("head.php");
$_SESSION=[];
session_destroy();
setcookie("PHPSESSID", "", time() - 3600);
?>
<!doctype html>
<html lang="en">

<head>
    <!-- change to utf-8 if you use that -->
    <meta charset="utf-8">
    <title>Logout</title>
</head>

<body>
    <p>You have been logged out</p>
</body>

</html>

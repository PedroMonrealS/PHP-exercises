<?php
session_start();
$_SESSION=[];
session_destroy();
echo "<a href='greeting.php'>RETURN</a>";

?>
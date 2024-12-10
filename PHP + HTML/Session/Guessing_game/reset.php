<?php
session_start();
$_SESSION=[];
session_destroy();
echo "<a href='Guessing_game_(with_session).php'>RETURN</a>";

?>

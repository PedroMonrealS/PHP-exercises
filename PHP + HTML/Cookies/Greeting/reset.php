<?php

if (isset($_COOKIE['name'])) {
    setcookie('name','',(time()-3600));

}
?>

<?php
$cookie_name = "server";
$cookie_value = "server";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>

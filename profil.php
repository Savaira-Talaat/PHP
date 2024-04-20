<?php
session_start();
$cookie_name = "apiKey";
$cookie_value = $_POST['apiKey'];

setcookie($cookie_name, $cookie_value, time() + (86400*365));
header("Location: index.php")
?>
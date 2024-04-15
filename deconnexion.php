<?php
    session_start();
    session_unset();
    session_destroy();
    session_start();
    $cookie_name = "apiKey";
    $cookie_value = $_POST['apiKey'];

    setcookie($cookie_name, $cookie_value, time() + (1));

    header("Location: index.php");
?>
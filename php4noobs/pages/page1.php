<?php

session_start();

if (session_status() == PHP_SESSION_ACTIVE) {
    $_SESSION["lesson"] = "PHP";
    $_SESSION["hour"] = time();
}

echo '<a href="./page2.php">Ir para a outra página</a>';

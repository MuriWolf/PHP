<?php

session_start();

date_default_timezone_set("America/Sao_Paulo");

if (session_status() == PHP_SESSION_ACTIVE) {
    echo "Aula de: " . $_SESSION["lesson"] . "</br>";
    echo "São: " . date("H:i:s", $_SESSION["hour"]) . " horas";
}
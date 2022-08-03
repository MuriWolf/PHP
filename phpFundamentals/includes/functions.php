<?php

function sum($a, $b) {
    global $hello;

    echo $hello;
    $result = $a + $b;
    return $result;
}

function output($value) {
    echo "<pre>";
    print_r($value);
    echo "</pre>";
}

// same as array_column
function pluck($arr, $key) {
    $result = array_map(function($item) use($key){
        return $item[$key];
    }, $arr);
    return $result;
}

function authenticate_user($email, $password) {
    return $email == USER_NAME && $password == PASSWORD;
}

function redirect($url) {
    header("location: $url");
} 

// see if email exist in the session
function is_user_authenticated() {
    return isset($_SESSION["email"]);
}

// if email dont exist in the session, go to login
function ensure_user_is_authenticated() {
    if(!is_user_authenticated()) {
        redirect("login.php");
    }
}
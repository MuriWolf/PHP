<?php

require("functions.php");

$title = "hello, model";
$view_bag = [];
$view_bag["title"] = $title;

view("index");
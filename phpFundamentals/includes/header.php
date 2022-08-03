<?php
    if (!isset($title)) {
        $title = "THERE_IS_NO_TITLE";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>

    <style>
        html {
            font-size: 15px;
        }
        body {
            margin: 0;
        }
        header {
            background-color: #233F69;
        }
        main {
            margin: 40px;
        }
        .header__title {
            color: white;
            margin: 0;
            padding: 30px;
        }
    </style>
</head>
<body>
    <header>
        <?php echo"<h2 class='header__title'>$title<h2>"; ?>
    </header>
    <main>
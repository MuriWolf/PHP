<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class=main>
        <?php
            $a = 3;
            $b = "3";
            $r = $a == $b ? "true" : "false";
            echo "$a é igual a $b? $r";

            $r = $a === $b ? "true" : "false";
            echo "<br>$a é identico a $b? $r"
        ?>
    </div>
</body>
</html>
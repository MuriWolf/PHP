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
            $year = !empty($_GET["year"]) ? $_GET["year"] : 0;
            $age = date("Y") - $year;

            if ($age >= 18) {
                $drive = "pode dirigir";
                $vote = "pode votar";
            } else {
                $drive = "Não pode dirigir";
                $vote = "Não pode votar";
            }

            echo "Can drive? $drive\nCan vote? $vote";
        ?>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class=main>
        <?php
            function somar(int $a, int $b) {
                return $a + $b;
            }

            $soma01 = somar(5.3, 3);
            echo $soma01; 

            $x = 32;
            $y = 23;

            $soma02 = somar($x, $y);
            echo "<br>$soma02";
        ?>
    </div>
</body>
</html>
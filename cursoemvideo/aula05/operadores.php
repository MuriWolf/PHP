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
            $x = 3;
            $y = 2;

            $soma = $x + $y;
            $sub = $x - $y;
            $mult = $x * $y;
            $div = $x / $y;
            $mod = $x % $y;
            $intdiv = intdiv($x, $y);

            echo "<p>Soma: $soma</p>";
            echo "<p>Subtração: $sub</p>";
            echo "<p>Multiplicação: $mult</p>";
            echo "<p>Divisão: $div</p>";
            echo "<p>Módulo: $mod</p>";
            echo "<p>IntDIv: $intdiv</p>";
        ?>
    </div>
</body>
</html>
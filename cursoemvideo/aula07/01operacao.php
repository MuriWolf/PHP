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
            $n1 = $_GET["x"];
            $n2 = $_GET["y"];
            $tipo = $_GET["op"];
            echo "os valores passados foram $n1 e $n2";

            $calculo = ($tipo == "s") ? $n1 + $n2 : $n1 * $n2;
            echo "<br>Resultado: $calculo"

        ?>
    </div>
</body>
</html>
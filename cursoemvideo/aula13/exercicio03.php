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
        $num = !empty($_GET["num"]) ? $_GET["num"] : 1;
        $multiplosTotal = 0;

        echo "<h2>Analisando o numero $num</h2>";

        echo "<br>Valores Multiplos: ";
        for ($c = 1; $c <= $num; $c++) {
            if ($num % $c == 0) {
                $multiplosTotal++;
                echo "$c ";
            }
        }
        echo "<p>Total de multiplos: $multiplosTotal</p>";

        $isPrimo = "";
        $multiplosTotal == 2 ? $isPrimo = "É primo!" : $isPrimo = "Não é primo!";

        echo "<p>Resultado: $num<span class='highlight'> $isPrimo</span></p>"
        ?>
    </div>
</body>

</html>
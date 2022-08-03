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
            $valor = $_GET["v"];
            echo "O valor digitado foi $valor";
            $raizQ = sqrt($valor);
            echo "<br>Raiz quadrada de $valor: " . number_format($raizQ, 2, ",");
        ?>
        <a href="01exercicio.html">Voltar</a>
    </div>
</body>
</html>

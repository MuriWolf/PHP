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
            $valor = !empty($_GET["var"]) ? $_GET["var"] : 1;
            $c = $valor;
            $fatorial = $valor;
            do {
                $c--;
                $fatorial *= $c;
            } while($c!=1);

            echo "Fatorial de $valor: $fatorial"
        ?>
        <a href="exercicio02.html">Voltar</a>
    </div>
</body>
</html>
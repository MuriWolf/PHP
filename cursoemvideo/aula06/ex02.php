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
            $ano_atual = $_GET["ano"];

            echo "Ano atual é: " . $ano_atual;

            $ano_anterior = --$ano_atual;

            echo "<br>Ano anterior é: " . $ano_anterior;

        ?>
    </div>
</body>
</html>
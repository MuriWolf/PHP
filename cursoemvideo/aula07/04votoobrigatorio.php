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
            $ano = $_GET["an"];
            $ano_atual = 2022;
            $idade = $ano_atual - $ano;

            echo "Quem nasceu em $ano tem $idade";
            $tipo = ($idade >= 18 && $idade < 65) ? "Obrigatório" : "Não obrigatório";
            echo "<br>$tipo"
        ?>
    </div>
</body>
</html>
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
        $nota1 = !empty($_GET["n1"]) ? $_GET["n1"] : 0; 
        $nota2 = !empty($_GET["n2"]) ? $_GET["n2"] : 0; 
        $media = ($nota1 + $nota2) / 2;
        if ($media <= 5) {
            $sit = "REPROVADO";
        }  
        elseif ($media < 7) {
            $sit = "RECUPERAÇÃO";
        } else {
            $sit = "APROVADO";
        }
        echo "Situação do aluno: $sit";
        echo 3 ** 3;
    ?>
    </div>
</body>
</html>
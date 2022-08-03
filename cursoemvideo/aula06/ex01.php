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
            $preco = $_GET["p"];

            echo "o preço do produto é: R$" . number_format($preco, 2, ",");

            // $preco = $preco + ($preco / 100) * 10;
            $preco += ($preco / 100) * 10;

            echo "<br>o preço total do produto é: R$" . number_format($preco, 2, ",");
        ?>
    </div>
</body>
</html>
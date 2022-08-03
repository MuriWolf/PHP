<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variaveis</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="main">
        <p>
            <?php
                $nome = "Murillo";
                $idade = 16;
                $numero = (int) 4.2;
                
                echo "<span class='hightlight'>$nome</span> tem $idade anos <br>";
                
                echo $numero;
            ?>
        </p>
    </div>
</body>
</html>
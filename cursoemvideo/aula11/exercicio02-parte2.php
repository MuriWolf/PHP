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
            $i = 1;
            while ($i <= 5) {
                $v = "num$i";
                $url = "v$i";
                // cria 5 difentes variaveis com direntes valores
                $$v = !empty($_GET["$url"]) ? $_GET["$url"] : 0;
                $i++;
            }
            
            $i = 1;
            while ($i <= 5) {
                $v = "num$i";
                echo "<br>Valor $i: " . $$v; 
                $i++;
            }
        ?>
    </div>
</body>
</html>
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
        <form action="exercicio02-parte2.php" method="get">
            <?php
                $c = 1;
                while ($c <= 5) {
                    echo "Valor $c: <input type='number' name='v$c' id='v$c' min='0' max='100' value='0' placeholder='Digite de 0 a 100'><br/>";
                    $c++;
                }
            ?>
            <button class="botao" type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
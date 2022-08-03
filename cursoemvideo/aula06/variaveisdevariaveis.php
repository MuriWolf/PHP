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
            $x = "abc";
            $$x = "def";

            echo "valor do x: $x";
            echo "<br>valor da variavel a partir do x: $abc";
        ?>
    </div>
</body>
</html>
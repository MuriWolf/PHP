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
            include_once "funcoes.php";
            echo "<h1>testando require e include</h1>";
            $soma = somarInt(3, 6);
            echo "<p>$soma</p>";
            olaMundo();
        ?>
    </div>
</body>
</html>
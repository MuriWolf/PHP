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
            $nome = "muRilLo pinhEiRo de oLiVeria";

            $nomeUptated = ucwords(strtolower($nome));
            
            
            $severalWords = str_repeat("Murillo ", 10);

            echo "<p>$severalWords</p>";
            echo "<p>$nomeUptated</p>";
        ?>
    </div>
</body>
</html>
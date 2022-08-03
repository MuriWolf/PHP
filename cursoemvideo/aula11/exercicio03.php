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
            $inicio = !empty($_GET["inicio"]) ? $_GET["inicio"] : 0;
            $final = !empty($_GET["final"]) ? $_GET["final"] : 0;
            $incremento = $_GET["incremento"];

            if ($inicio < $final) {
                while ($inicio <= $final) {
                    echo "$inicio ";
                    $inicio = $inicio + $incremento;
                }
            } 
            elseif ($inicio > $final) {
                while ($inicio >= $final) {
                    echo "$inicio ";
                    $inicio = $inicio - $incremento;
                }
            }
        ?>
    </div>
</body>
</html>
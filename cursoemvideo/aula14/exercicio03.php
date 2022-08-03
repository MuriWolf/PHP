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
            function somar(...$args) {
                $totalArgs = func_num_args();
                $soma = 0;
                for ($i=0; $i < $totalArgs; $i++) {
                    $soma = $soma + $args[$i];
                }
                return $soma;
            }

            $soma01 = somar(4, 6, 13, 78, 23);
            echo "$soma01";
        ?>
    </div>
</body>
</html>
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
            $n = !empty($_GET["number"]) ? $_GET["number"] : 0;
            $op = $_GET["op"];

            switch ($op) {
                case 1:
                    $r = $n * 2;
                    break;
                case 2:
                    $r = $n ** 3;
                    break;
                case 3:
                    $r = sqrt($n);
                    break;
                default:
                    $r = $n; 
            }

            echo "O resultado da operação é " . number_format($r);

        ?>
    </div>
</body>
</html>
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
        $dia_num = !empty($_GET["dia"]) ? $_GET["dia"] : 2;

        switch ($dia_num) {
            case 2;
            case 3;
            case 4;
            case 5:
            case 6:
                echo "vai pra escola fi"; 
                break;
            case 7;
            case 8:
                echo "Pó descansar corno";
                break;
            default:
                echo "Deu ruim rapaziada";
        }
        ?>
    </div>
</body>
</html>
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
        $estado = $_GET["estados"];

        switch ($estado) {
            case 1:
                $regiao = "Norte";
                break;
            case 2:
                $regiao = "Nordeste";
                break;
             case 3:
                $regiao = "Centro-Oeste";
                break;
            case 4:
                $regiao = "Sudeste";
                break;
            case 5:
                $regiao = "Sul";
                break;
            default:
                $regiao = "Região não identificada!";        
            }

        echo "<p>A região é $regiao</p>";
    ?>
    </div>
</body>
</html>
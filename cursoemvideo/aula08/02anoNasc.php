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
            $name = !empty($_GET["name"]) ? $_GET["name"] : "[Name not defined]";
            $year = !empty($_GET["year"]) ? $_GET["year"] : 0;
            $sex = !empty($_GET["sex"]) ? $_GET["sex"] : "[Sem sexo]";

            $age = date("Y") - $year;
            echo "$name is $age years old and is $sex<br>";
        ?>
        <a href="02exercicio.html">Back</a>
    </div>
</body>
</html>
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
            $num = !empty($_GET["num"]) ? $_GET["num"] : 1;

            echo "<h2>Tabuada de $num</h2>";
            $i = 1;
            do {
                echo "<br>$num x $i = " . ($num*$i);
                $i++;
            } while ($i <=10);
        ?>
    </div>
</body>
</html>
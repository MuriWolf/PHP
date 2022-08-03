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
            function somar(&$a) {
                $a = $a * 2;
            }

            $x = 4;
            
            echo $x;
            somar($x);
            echo "<br>$x";
        ?>
    </div>
</body>
</html>
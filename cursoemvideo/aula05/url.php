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
            $x = $_GET["x"];
            $y = $_GET["y"];

            echo "<h2>x = $x and y = $y</h2>";

            $abs = abs($y);
            $pow = pow($x, $y);
            $sqrt = sqrt($y);
            $round = round($y);
            $intval = intval($y);
            $num_format = number_format($y, 2, ",", ".");

            echo "<p>$abs</p>";
            echo "<p>$pow</p>";
            echo "<p>$sqrt</p>";
            echo "<p>$round</p>";
            echo "<p>$intval</p>";
            echo "<p>R$$num_format</p>";
        ?>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <?php
        $text = !empty($_GET["text"]) ? $_GET["text"] : "Texto genérico";
        $size = !empty($_GET["size"]) ? $_GET["size"] : "1.8rem";
        $color = !empty($_GET["cor"]) ? $_GET["cor"] : "#000000";
    ?>
    <style>
        .text {
            font-size: <?php echo $size ?>;
            color: <?php echo $color ?>;
        }
    </style>
</head>
<body>
    <div class="main">
        <?php
            echo "<span class='text'>$text</span>";
        ?>
    </div>
</body>
</html>
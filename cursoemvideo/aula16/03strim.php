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
            $string = "    murillo pinheiro   ";
            $lenght = strlen($string); 
            
            $string = trim($string);
            
            $lenght = strlen($string); 
            echo $lenght;
        ?>
    </div>
</body>
</html>
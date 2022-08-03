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
        <pre>
        <?php
            $vetor = array(5=>3, 4=>6, 1=>2, 3=>8, 2=>1);

            var_dump($vetor);

            krsort($vetor);
            
            var_dump($vetor);
            ?>
        </pre>
    </div>
</body>
</html>
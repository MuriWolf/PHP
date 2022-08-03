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
            $pessoa = array(
                "nome" => "Murillo",
                "idade" => 16,
                "peso" => 51.5
            );

            $pessoa["fuma"] = false;

            foreach($pessoa as $k => $v) {
                if ($v == "") {$v = "false";}
                echo "O campo $k contém $v<br>";
            }

            $n = array(
                array(4, 7),
                array(2, 1),
                array(8, 9),
            );
            
            $n[2][1] = $n[0][0];
            unset($n[1]);
            
            
            var_dump($n);
        ?>
        </pre>
    </div>
</body>
</html>
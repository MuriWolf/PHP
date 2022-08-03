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
            $year = !empty($_GET["year"]) ? $_GET["year"] : 0;
            $age = date("Y") - $year;

            if ($age < 16) {
                $votar = "não pode votar";
                $dirigir = "não pode dirigir";
            } 
                elseif ($age >= 16 && $age < 18) { // maior que 16
                    $votar = "pode votar";
                    $dirigir = "não pode dirigir";
                }
                    elseif ($age < 65) {
                        $votar = "é obrigado a votar";
                        $dirigir = "pode dirigir";   
                    }
            else {
                $votar = "pode votar";
                $dirigir = "pode dirigir";  
            }
                
            echo "Você nasceu em $year e tem $age";
            echo "<br>Você $dirigir<br>Você $votar";
        ?>
    </div>
</body>
</html>
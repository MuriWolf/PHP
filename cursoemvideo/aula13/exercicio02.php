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
        <form action="exercicio02-tabuada.php" method="get">    
            Numero: 
            <select name="num" id="">
                <?php
                    for ($c==1; $c<=10; $c++) {
                        if ($c ==1) { echo "<option value='$c' selected>$c</option>"; }
                        else { echo "<option value='$c'>$c</option>"; }
                    }
                ?>
            </select>
            <button class="botao" type="submit">Ver Tabuada</button>
        </form>
    </div>
</body>
</html>
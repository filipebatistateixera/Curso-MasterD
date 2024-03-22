<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de variáveis</title>
</head>
<body>
    
    <p>
        <?php
            $var = 2;
            $var_2 = 5;
            echo "valor somado:".($var + $var_2)."<br/>";
            function teste() {
                global $var, $var_2; //utiliza as locais em relação ao código
                echo "valor somado com a função:".($var + $var_2);
            }
            teste();
        ?>
    </p>
</body>
</html>
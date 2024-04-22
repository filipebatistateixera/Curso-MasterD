<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passar parâmetros</title>
</head>
<body>
    <p>
        <?php
            function teste1($valor) {
                $valor ++;
                return $valor;
            }
            $teste = 3;
            $testeD = teste1($teste);
            echo $teste.'<br/>';
            echo $testeD;
        ?>
    </p>
</body>
</html>
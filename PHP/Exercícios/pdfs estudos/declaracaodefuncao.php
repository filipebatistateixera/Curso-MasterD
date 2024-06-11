<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Declaração de função</title>
</head>
<body>
    <p>
        <?php
            function teste1( array $argumento1, int $argumento2){
                echo "Eu forço o argumento1 a ser um array, e o valor é: ";
                foreach ($argumento1 as $chave => $valor) {
                echo $chave." => ".$valor.",";
                }
                echo "Eu forço o argumento2 a ser um número inteiro, e o valor é:".$argumento2;
            }
            teste1(array(0 => 'valor1', 1 => 'valor2' ),3);
?>
</p>
</body>
</html>
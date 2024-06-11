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

    <br><br>

    <p>
        <?php
           function teste2(&$valor){
           $valor ++;
        }
        $teste = 3;
        teste1($teste);
        echo $teste.'<br/>';
        ?>
    </p>

    <br><br>

    <p>
        <?php
            function animalPreferido($animal = "cão"){
            return 'O meu animal preferido é um '.$animal;
            }
        echo animalPreferido('gato')."</br>";
        echo animalPreferido();
        ?>
    </p>

    <br><br>

    <?php
        function teste3(){
            $argumentos = func_num_args();
            if ($argumentos >= 3) {
               echo "O terceiro parâmetro é: " . func_get_arg(2);
            }else{
                echo "Não existe este valor!<br/>";
            }
        }
        teste3('azul',3);
        teste3('azul',3,'casa',true);
    ?>
</body>
</html>
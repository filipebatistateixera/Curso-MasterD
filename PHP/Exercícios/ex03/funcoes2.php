<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício final 2 - funções php</title>
</head>
<body>
    <p>    
        <?php
            function somarDias($dias){
                $seguinte = time() + ($dias *24 *60 *60);
                echo 'Próxima data '.date('Y.m.d',$seguinte);
            }
            somarDias(4);                         
        ?>
    </p>
</body>
</html>
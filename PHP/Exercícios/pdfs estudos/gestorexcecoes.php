<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulador de exceções</title>
</head>
<body>
    <p>
        <?php
            function teste($var){
                try {
                    if ($var=='') {throw new Exception('não estou a pensar em nada');}
                    if ($var=='carros') {throw new Exception('estou a pensar em carros');}
                    if ($var=='motas') {throw new Exception('estou a pensar em motas');}
                    echo 'pensei em '.$var;
                } catch (Exception $e) {
                    echo $e->getMessage();
                }
            }
            teste('motas');
        ?>
    </p>
</body>
</html>
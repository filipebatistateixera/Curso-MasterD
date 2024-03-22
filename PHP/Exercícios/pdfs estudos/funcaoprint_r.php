<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função print_r</title>
</head>
<body>
    <p>
        <pre>
            <?php
                $a = array ('nome' => 'Pedro', 'Idade' => '34', 'carros' => array ('renault', 'seat', 'ford'));
                print_r ($a);
            ?>
        </pre>
    </p>
</body>
</html>
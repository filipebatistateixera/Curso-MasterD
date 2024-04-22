<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função fatorial</title>
</head>
<body>
    <p>
        <?php
            function fatorial($numero) {
                if ($numero == 0) return 1;
                return ($numero * fatorial($numero - 1));
            }
            echo fatorial(4);
        ?>
    </p>
</body>
</html>
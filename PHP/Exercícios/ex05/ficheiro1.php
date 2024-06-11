<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interação entre páginas e sessões</title>
</head>
<body>
    <?php
        session_start();
        $_SESSION['cor'] = 'azul';  
    ?>

<a href="ficheiro2.php">ir para a outra página</a>

</body>
</html>
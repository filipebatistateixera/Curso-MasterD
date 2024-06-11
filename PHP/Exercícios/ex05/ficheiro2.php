<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interação entre páginas e sessões</title>
</head>
<body>
<?php
    session_start();
    if (!empty($_SESSION['cor'])){
    $cor = $_SESSION['cor'];
    } else {
        $cor='Vazio';
    }   
    echo $cor 
?>
</body>
</html>
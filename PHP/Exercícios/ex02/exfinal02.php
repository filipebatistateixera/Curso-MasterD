<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício final - criação de arrays</title>
</head>
<body>
    <p>
        <?php
            $cores = array("laranja", "azul", "verde", "amarelo", "vermelho", "roxo");
            foreach ($cores as $var) {
                echo "Cor: $var <br>\n";
            }
        ?>
    </p>
</body>
</html>
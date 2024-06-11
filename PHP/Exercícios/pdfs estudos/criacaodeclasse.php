<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criando class (POO)</title>
</head>
<body>
    <p>
        <?php
        class livro{
            public $titulo;
            public function mostrarTitulo(){
                echo $this->titulo;
            }
        }
        $liv1 = new livro();
        $liv1->titulo = 'Dom Quixote';
        $liv1->mostrarTitulo();
    ?>
</p>
</body>
</html>
<html>
<head>

<meta charset="UTF-8">
<title>Prática 28</title>
<link href="estilos.css" rel="stylesheet">
</head>
<body>
    <div class="caixa0">
        <span id="logo"><img src="logo.png"></span>
    </div>
    <div class="caixa1">
        <h2>CALCULADORA DE NÚMEROS PRIMOS</h2>
        <br>
        <form method="post">
            <p><u>É um número primo?</u></p> 
            <input type="number" name="num" min="0">
            <button class="botao">Confirmar</button> <br><br>
        </form>

        <p>
            <?php
                $n = $_POST["num"];
                function primo($n) {
                    for($x=2; $x<$n; $x++) {
                        if($n%$x==0) {
                            return 0;
                        }
                    }
                    return 1;
                }

                if(primo($n)==0) {
                    echo $n. ' não é um numero primo'."\n";
                } else {
                    echo $n. ' é um número primo!!!'."\n";
                }
 
            ?>
        </p>
 
    </div>
</body>
</html>
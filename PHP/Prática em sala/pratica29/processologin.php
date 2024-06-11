<?php
    $email = htmlspecialchars($_POST["email"]);
    $pwd = htmlspecialchars($_POST["pwd"]);
    if ($email == "pratica@teste.com" && $pwd == "senha") {
        echo "<h2>Olá $email <br> Bemvindo.</h2>";
        //entrar no carrinho de compras
        Header("Location:catalogo.php");
    } else {
        //Header("Location:pratica28.php?invalid=&email=$email");
        echo "<h2>Login invalido</h2>";
    }

?>
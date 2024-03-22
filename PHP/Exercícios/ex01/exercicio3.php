<?php
    // receber os dados do form
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $tel = $_POST['tel'];
    $horas = $_POST['horas'];
    $dias = $_POST['dias'];
    $preco = $_POST['preco'];
    // exibir os resultados
    echo "Nome: $nome.<br>";
    echo "Idade: $idade.<br>";
    echo "Telemóvel: $tel.<br>";
    echo "Horas semanais: $horas.<br>";
    echo "Dias da semana: $dias.<br>";
    echo "Preço por dia: $preco.<br>";
    // pagamento semanal
    $semana = ($dias*$horas)*$preco;
    echo "Preço semanal: $semana.";
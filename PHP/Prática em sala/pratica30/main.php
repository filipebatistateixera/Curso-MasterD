<table border='0' cellpadding='4' cellspacing='2'>  
<tr>  
  <td><b>ID</b></td>  
  <td><b>Nome</b></td>  
  <td><b>Apelidos</b></td>  
  <td><b>Idade</b></td>  
</tr>  

<?php  
if(!empty($_REQUEST['consulta'])){  
    include('abrirCnx.php');  
    $consulta = $_REQUEST['consulta']; // Esta linha armazena a consulta
    $resultado = mysqli_query($conexao, $consulta);  
    while($registo = mysqli_fetch_assoc($resultado)) {  
    echo "<tr>  
            <td>".$registo['id']."</td>  
            <td>".$registo['nome']."</td>  
            <td>".$registo['apelidos']."</td>  
            <td>".$registo['idade']."</td>  
          </tr>";  
    };  

    mysqli_free_result($resultado);  
    echo "</table>";  
    include('fecharCnx.php');  
  } else {  
    echo "<p>A consulta não devolveu nenhum resultado. <br/> Deve selecionar uma consulta.</p>";  
  };  
?>
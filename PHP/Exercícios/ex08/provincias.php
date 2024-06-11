<?php
    // UTILIZANDO MYSQL
    $hostname = 'localhost';
    $username = 'root';
    $password = 'senha';
    $dbname = 'biblioteca';
    $conn = @mysqli_connect($hostname, $username, $password);

    if($conn) {     // selecionar a base de dados
        if(mysqli_num_rows($dbname, $conn) === TRUE){
            echo 'Província : <select id="provincia" name="provincia">';
            $sql = "SELECT * FROM provincias where pais ='".$_GET['pais']."'";
            $result = mysqli_query($sql);
            if($result) {   // se houver registos
                if(mysqli_num_rows($result) !== 0) {
                    while($row=mysqli_fetch_array($result)) {
                        echo '<option value="'.$row['id'].'">'.$row['provincia'].'</option>';
                    }           
                } else {
                    echo 'Não foram encontrados registos';
                }       
            }
        } else {
            echo 'Erro ao selecionar a base de dados';
        }   
        /*** fechar a conexão ***/
        echo '</select>';
        mysqli_close($conn);
    } else {
        /*** falha na conexão ***/
        echo 'Falha na conexão';
    }
    
?>
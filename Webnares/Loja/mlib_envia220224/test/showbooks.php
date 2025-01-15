<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibição de Livros</title>
</head>
<body>

    <h2>Livros Disponíveis</h2>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "loja_mdlib";
    
    // Cria a conexão
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Verifica a conexão
    if ($conn->connect_error) {
        die("Erro na conexão: " . $conn->connect_error);
    }
    
    // Consulta os dados da tabela livros
    $sql = "SELECT id_livro, titulo, autor, sinopse, preco, categoria_id, imagem FROM livros";
    $result = $conn->query($sql);
    
    // Exibe os dados em uma tabela HTML
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Título</th><th>Autor</th><th>Sinopse</th><th>Preço</th><th>Categoria</th><th>Imagem</th></tr>";
    
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id_livro"] . "</td>";
            echo "<td>" . $row["titulo"] . "</td>";
            echo "<td>" . $row["autor"] . "</td>";
            echo "<td>" . $row["sinopse"] . "</td>";
            echo "<td>" . $row["preco"] . "</td>";
            echo "<td>" . $row["categoria_id"] . "</td>";
            
            // Exibir a imagem como base64 na tag <img>
            echo "<td><img src='data:image/jpeg;base64," . base64_encode($row["imagem"]) . "' width='100%' height='auto'></td>";
            
            // Adicione mais colunas conforme necessário
    
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='7'>Nenhum livro encontrado</td></tr>";
    }
    
    echo "</table>";
    ?>
    
    <form method="post" action="">
        <label for="categoria">Filtrar por Categoria:</label>
        <select name="categoria" id="categoria">
            <option value="">Todas as Categorias</option>
            <?php
            // Consulta para obter as categorias
            $sql_categorias = "SELECT * FROM categorias";
            $result_categorias = $conn->query($sql_categorias);
    
            while ($row_categoria = $result_categorias->fetch_assoc()) {
                echo "<option value='" . $row_categoria['id_categoria'] . "'>" . $row_categoria['nome_categoria'] . "</option>";
            }
            ?>
        </select>
        <input type="submit" value="Filtrar">
    </form>

    <?php
    // Modifique a consulta SQL para incluir a filtragem por categoria
    if (isset($_POST['categoria']) && !empty($_POST['categoria'])) {
        $categoria_selecionada = $_POST['categoria'];
        $sql_filtrado = "SELECT * FROM livros WHERE categoria_id = $categoria_selecionada";
        $result_filtrado = $conn->query($sql_filtrado);

        // Exibe os dados filtrados em uma tabela HTML
        echo "<h2>Livros Filtrados por Categoria</h2>";
        echo "<table border='1'>";
        echo "<tr><th>ID</th><th>Título</th><th>Autor</th><th>Sinopse</th><th>Preço</th><th>Categoria</th><th>Imagem</th></tr>";

        if ($result_filtrado->num_rows > 0) {
            while ($row_filtrado = $result_filtrado->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row_filtrado["id_livro"] . "</td>";
                echo "<td>" . $row_filtrado["titulo"] . "</td>";
                echo "<td>" . $row_filtrado["autor"] . "</td>";
                echo "<td>" . $row_filtrado["sinopse"] . "</td>";
                echo "<td>" . $row_filtrado["preco"] . "</td>";
                echo "<td>" . $row_filtrado["categoria_id"] . "</td>";
                
                // Exibir a imagem como base64 na tag <img>
                echo "<td><img src='data:image/jpeg;base64," . base64_encode($row_filtrado["imagem"]) . "' width='100%' height='auto'></td>";
                
                // Adicione mais colunas conforme necessário
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='7'>Nenhum livro encontrado para esta categoria</td></tr>";
        }

        echo "</table>";
    }
    ?>

    <?php
    // Fechar a conexão
    $conn->close();
    ?>

</body>
</html>

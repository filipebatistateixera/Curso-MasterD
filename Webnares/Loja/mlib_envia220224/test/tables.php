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
$sql = "SELECT * FROM livros";
$result = $conn->query($sql);

// Exibe os dados em uma tabela HTML
echo "<table border='1'>";
echo "<tr><th>ID</th><th>Título</th><th>Autor</th><th>Preço</th></tr>";

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["titulo"] . "</td><td>" . $row["autor"] . "</td><td>" . $row["preco"] . "</td></tr>";
    }
} else {
    echo "<tr><td colspan='4'>Nenhum livro encontrado</td></tr>";
}

echo "</table>";

// Fechar a conexão
$conn->close();
?>

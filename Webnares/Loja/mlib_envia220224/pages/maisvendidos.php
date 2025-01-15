<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="https://getbootstrap.com/docs/5.3/assets/css/docs.css"
      rel="stylesheet"
    />
    <title>M.LIB Livraria</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../styles/style.css">


  </head>
  <body class="p-3 m-0 border-0 bd-example m-0 border-0">
    <!-- Example Code -->

    <nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark border-bottom border-body" data-bs-theme="dark">

      <div class="container-fluid">
      <a class="navbar-brand" href="../index.html">
        <img src="../src/imagens/Logo.png" alt="Logo M.LIB" width="auto" height="90">
      </a>
    <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Página 1</a>
            </li>

            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Livros
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="http://localhost:81/webinares/mlib/pages/maisvendidos.php">Top 10</a></li>
                <li><a class="dropdown-item" href="#">Sub-pagina 2.2</a></li>
                <li><a class="dropdown-item" href="#">Sub-pagina 2.3</a></li>
                <li><a class="dropdown-item" href="#">Sub-pagina 2.4</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Página 3
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Sub-pagina 3.1</a></li>
                <li><a class="dropdown-item" href="#">Sub-pagina 3.2</a></li>
              </ul>
            </li>

            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Página 4
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Sub-pagina 4.1</a></li>
                <li><a class="dropdown-item" href="#">Sub-pagina 4.2</a></li>
                <li><a class="dropdown-item" href="#">Sub-pagina 4.2</a></li>
              </ul>
            </li>

            <li class="nav-item">
            <a class="nav-link" href="#">Página 5</a>
          </li>
          </ul>


      <form class="d-flex" role="search">
        <i class="fa fa-search" style="font-size:36px;color:#F1F1F1;margin-right:50px;"></i>
        <i class="fa fa-cart-arrow-down" style="font-size:36px;color:#F1F1F1;margin-right:50px;"></i>
        <i class="fa fa-heart" style="font-size:36px;color:#F1F1F1; margin-right:50px;"></i>
        <i class="fa fa-user" style="font-size:36px;color:#F1F1F1; margin-right:50px;"></i>
      </form>
    </div>
  </div>
</nav>

<div class="mais-vendidos">

<h2>Top 10 dos Livros Mais Vendidos</h2>

    



  <div class="card-group">
        <?php
        // Seu código PHP para obter os produtos mais vendidos
        // Certifique-se de incluir a conexão com o banco de dados e a consulta SQL
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
        // Exemplo de consulta SQL para obter os 10 livros mais vendidos
        $sql_mais_vendidos = "SELECT id_livro, titulo, autor, preco
                              FROM livros
                              ORDER BY quantidade_vendida DESC
                              LIMIT 10";

        // Execute a consulta
        $result_mais_vendidos = $conn->query($sql_mais_vendidos);

        if ($result_mais_vendidos->num_rows > 0) {
            while ($row_mais_vendidos = $result_mais_vendidos->fetch_assoc()) {
                echo '<div class="card">';
                echo '<img src="../src/imagens/' . $row_mais_vendidos["id_livro"] . '.png" class="card-img-top" alt="Capa do Livro">';
                echo '<div class="card-body">';
                echo '<h5 class="card-title">' . $row_mais_vendidos["titulo"] . '</h5>';
                echo '<p class="card-text">de ' . $row_mais_vendidos["autor"] . '</p>';
                echo '<p class="card-text">' . $row_mais_vendidos["preco"] . '</p>';

                echo '</div>';
                echo '</div>';
            }
        } else {
            echo '<p class="text-center mt-4">Nenhum livro mais vendido encontrado</p>';
        }

        // Feche a conexão após usar
        $conn->close();
        ?>
    </div>
    </div>
    





    <!-- End Example Code -->
  </body>
</html>

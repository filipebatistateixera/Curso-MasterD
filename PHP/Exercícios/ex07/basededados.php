<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexão com a base de dados</title>
</head>
<body>
    <?php  
        class BaseDados {
            private $utilizador;
            private $host;
            private $senha;
            private $bd;
            public function __construct() {
                $this->utilizador = "root";
                $this->host = "localhost";
                $this->senha = "";
                $this->bd = "teste1";
            }
            public function connect() {
                $link = mysql_connect($this->user, $this->host, $this->pass, $this->db);
                return $link;
            }
        }
    ?>
</body>
</html>
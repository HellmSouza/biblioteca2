<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sua Estante Biblioteca</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Sua Estante Biblioteca</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="cadastro_livro.php">Livros</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cadastro_autor.php">Autores</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="locacao.php">Locações</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown link
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="livros_aberto.php">Livros Pendentes</a></li>
            <li><a class="dropdown-item" href="realizar_devolucao.php">Realizar Devolução</a></
        <li class="nav-item">
          </ul>
        </li>
        <a class="nav-link" href="relatorio.php">Relatório</a>
        </li>
        <li class="nav-item">
      </ul>
    </div>
  </div>
</nav>

<div class="container">
    <div class="row">
        <div class="cool mt-5">
        <?php
          #include(conexao.php);
            switch (@$_REQUEST["pagina"]){
                case "cadastrar_livro";
                    include("cadastro_livro.php");
                break;
                case "cadastrar_autor";
                    include("cadastro_autor.php");
                break;
                case "locar";
                    include("locacao.php");
                break;
                case "consultar";
                    include("livros_aberto.php");
                break;
                case "devolver";
                    include("realizar_devolucao.php");
                break; 
                case "gerar_relatorio";
                    include("relatorio.php");
                break;
                case "salvar_livro";
                    include("salvar_livro.php");
                break; 
                default:
                    echo "Bem Vindo a Sua Estante Biblioteca! \u{1F4DA}";
            }
        ?>
        </div>
    </div>
</div>

    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>
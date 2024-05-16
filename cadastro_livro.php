<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro do Livro</title>
</head>
<body>
    <h1>Cadastrar Livro</h1>
    <form action="salvar_livro.php" method="POST">
        <input type="hidden" name="salvar" value="cadastrar">
        <div class="mb-3">
            <label>Nome do Livro</label>
            <input type="text" name="nome_livro" class="form-control">
        </div>    
        <div class="mb-3">
            <label>Nome do Autor</label>
            <input type="text" name="nome_autor" class="form-control">
        </div>
        <div class="mb-3">
            <label>Data de Lançamento</label>
            <input type="date" name="lancamento" class="form-control">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Cadastrar Livro</button>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Voltar</button>
        </div>
    </form>
</body>
</html>
<?php
    #include("conexao.php");

    if(isset($_POST['nome']) || isset($_POST['telefone']) || isset($_POST['email'])) {

        if(strlen($_POST['nome']) == 0){
            echo "Insira o Nome do Locador";           
        } else if(strlen($_POST['email']) == 0)
            echo "Insira o email do Locador";
            else if(strlen($_POST['livro']) == 0){
             echo "Insira o nome do livro Locado"; #puxar nome do banco
            $nome = $mysqli->real_escape_string($_POST['nome']);
            $email = $mysqli->real_escape_string($_POST['email']);
            $livro = $mysqli->real_escape_string($_POST['livro']);

             #$sql = "INSER INTO locacoes (livro, nome, email, dataLocacao) VALUES (livro_id, cliente_nome, cliente_email, data_locacao);
            # if (mysqli_querry($mysqli, $sql)){
                #echo "Locação Realizada";
            #} else {
                #echo "Desculpe, ocorreu um erro ao salvar!" . $sql . "<br>" . mysqli->connect_error ($mysqli);
            #}
            #mysqli_close($mysqli);
    }
}   
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Locação</title>
</head>
<body>
<<<<<<< HEAD
    <h1>Informações de Locação</h1>
    <form action="" method="POST">
    <p>
        <label>Nome do Locador</label>
        <input type="text" name="nome">
    </p>
    <p>
        <label>E-mail</label>
        <input type="text" name="email">
    </p> 
    <p>
        <label>Livro Locado</label>
    </p>
    <p>
        <label>Data de Locação</label>
        <input type="date" name="dataLocacao">
    </p>
    <p>
        <label>Data Prevista para Entrega</label>
        <input type="date" name="dataPrevista">
    </p>
    <p>
        <button type="submit">Realizar Locação</button>
    </p>
    <p>
        <button type="submit">Voltar</button>
    </p>
=======
<h1>Realizar Locação</h1>
    <form action="salvar_locacao.php" method="POST">
        <input type="hidden" name="acao" value="cadastrar">
        <div class="mb-3">
            <label>Nome do Locador</label>
            <input type="text" name="nome_locador" class="form-control">
        </div>    
        <div class="mb-3">
            <label>E-mail</label>
            <input type="email" name="email" class="form-control">
        </div>
        <div class="mb-3">
            <label>Livro Locado</label>
            <input type="text" name="nome_livro" class="form-control">
        </div>
        <div class="mb-3">
            <label>Data de Locação</label>
            <input type="date" name="data_locacao" class="form-control">
        </div>
        <div class="mb-3">
            <label>Data Prevista para Entrega</label>
            <input type="date" name="data_entrega" class="form-control">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Realizar Locação</button>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Voltar</button>
        </div>
    </form>
>>>>>>> bca1875 (atualizacao)
</body>
</html>
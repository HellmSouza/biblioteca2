<?php

#include(conexao.php);

if(isset($_POST['nome_autor']) || isset($_POST['telefone'])){

    if(strlen($_POST['nome_autor']) == 0){
        echo "Insira o Nome do Autor";           
    } else if(strlen($_POST['telefone']) == 0)
        echo "Insira o Telefone do Autor";
        $nomeAutor = $mysqli->real_escape_string($_POST['nome_autor']);
        $telefone = $mysqli->real_escape_string($_POST['telefone']);
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro do Livro</title>
</head>
<body>
    <h1>Cadastrar Autor</h1>
    <form action="" method="POST">
    <p>
        <label>Nome do Autor</label>
        <input type="text" name="nome_autor">
    </p>
    <p>
        <label>Telefone do Autor</label>
        <input type="text" name="telefone">
    </p>
    <p>
        <button type="submit">Cadastrar Autor</button>
    </p>
    <p>
        <button type="submit">Voltar</button>
    </p>
</body>
</html>
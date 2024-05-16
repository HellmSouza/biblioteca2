<?php
    switch ($_REQUEST["salvar"]) {
        case 'cadastrar':
            $nomeLivro = $_POST["nome_livro"];
            $nomeAutor = $_POST["nome_autor"];
            $lancamento = $_POST["lancamento"];
<<<<<<< HEAD
=======

            $sql = "INSERT INTO livros (nome_livro, lancamento) VALUES ('{$nomeLivro}', '{$lancamento}')";

            $resultado = $mysqli->query($sql);
>>>>>>> bca1875 (atualizacao)
            break;
        
        case 'editar':
            # code...
            break;

        case 'excluir':
            # code...
            break;

    }
?>
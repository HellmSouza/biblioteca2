<?php
    switch ($REQUEST["acao"]) {
        case 'cadastrar':
            $nomeLivro = $_POST["nome_livro"];
            $nomeAutor = $_POST["nome_autor"];
            $lancamento = $_POST["lancamento"];
            break;
        
        case 'editar':
            # code...
            break;

        case 'excluir':
            # code...
            break;

    }
?>
<?php

include("conexao.php");

    switch ($_REQUEST["acao"]) {
        case 'cadastrar':
            $nomeAutor = $_POST["nome_autor"];
            $telefone = $_POST["telefone"];

            $sql = "INSERT INTO autores (nome_autor, telefone) VALUES ('{$nomeAutor}', '{$telefone}')";

            $resultado = $mysqli->query($sql);
            break;
        
        case 'editar':
            # code...
            break;

        case 'excluir':
            # code...
            break;

    }
?>
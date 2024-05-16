<?php
    switch ($REQUEST["acao"]) {
        case 'cadastrar':
            $nomeAutor = $_POST["nome_autor"];
            $telefone = $_POST["telefone"];

            $sql = "INSERT INTO biblioteca (nome_autor, telefone) VALUES ('{$nomeAutor}', '{$telefone}')";

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
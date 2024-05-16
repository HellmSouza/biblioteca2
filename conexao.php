<?php 

$hostname = "localhost";
$banco = "biblioteca";
$usuario = "root";
$senha = "";

$mysqli = new mysqli($hostname, $usuario, $senha, $banco);

  if($mysqli->connect_error){
    die("Falha ao conecta no banco de dados" . $mysqli->connect_error);
  }
?>
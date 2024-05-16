<?php
    #include("conexao.php");

    $dataPrevista = new DateTime(date('Y-m-d')); #receber data do banco ((getdata_prevista))
    $dataDevolução = new DateTime(date('Y-m-d')); #receber data do formulário

    $diferencaData = 0;
    $multa = 0;

    $diferencaData = $dataPrevista->diff($dataDevolução); #fazer um if para calcular o valor da multa de aordo com os dias de atraso
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Devolução</title>
</head>
<body>
<h1>Realizar Devolução</h1>
    <form action="envioEmail.php" method="POST">
    <div>
        <label>Nome do Locador</label> <!--puxar do banco -->
    </div>
    <div>
        <label>Nome do Livro</label> <!--puxar do banco -->
    </div>
    <div>
        <label>E-mail do Locador</label> <!--puxar do banco -->
    </div>
    <div>
        <label>Data de Locação</label> <!--puxar do banco -->
    </div>
    <div>
        <label>Data Prevista para Entrega</label> <!--puxar do banco -->
    </div>
    <div>
        <label>Data de Devolução</label> 
        <input type="date" name="data">
    </div>
    <div>
        <label>Houve Multa de Atraso?</label> <!--informar se houve dado $diferencaData-->
    </div>
    <div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Realizar Devolução</button>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Voltar</button>
    </div>
>>>>>>> bca1875 (atualizacao)
</body>
</html>

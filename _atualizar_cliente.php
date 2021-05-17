<?php
include 'conexao.php';

$id_cliente = $_POST['id_cliente'];
$nome_cliente = $_POST['nome_cliente'];
$cpf_cliente = $_POST['cpf_cliente'];
$endereco_cliente = $_POST['endereco_cliente'];
$cep_cliente = $_POST['cep_cliente'];
$cidade_cliente = $_POST['cidade_cliente'];
$estado_cliente = $_POST['estado_cliente'];

$sql = "UPDATE `cliente` SET `nome_cliente`='$nome_cliente',
 `cpf_cliente`='$cpf_cliente', `endereco_cliente`='$endereco_cliente',`cep_cliente`='$cep_cliente',`cidade_cliente`='$cidade_cliente', `estado_cliente`='$estado_cliente' WHERE id_cliente = $id_cliente";

$atualizar = mysqli_query($conexao, $sql);


?>

<link rel="stylesheet" href="css/bootstrap.css">
<div class="container" style="width: 400px;">
    <center>
        <h3 style="margin-top: 20px;">Atualizado com sucesso.</h3>
        <div style="margin-top: 10px;">
            <a href="listar_cliente.php" class="btn btn-sm btn-warning" style="color: #fff;">Voltar</a>
        </div>
    </center>
</div>
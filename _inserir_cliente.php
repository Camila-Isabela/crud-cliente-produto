<?php 

include 'conexao.php'; //criando a conexão

$nome_cliente = $_POST['nome_cliente'];
$cpf_cliente = $_POST['cpf_cliente'];
$endereco_cliente = $_POST['endereco_cliente'];
$cep_cliente = $_POST['cep_cliente'];
$cidade_cliente = $_POST['cidade_cliente'];
$estado_cliente = $_POST['estado_cliente'];

$sql = "INSERT INTO `cliente`( `nome_cliente`, `cpf_cliente`, `endereco_cliente`, `cep_cliente`, `cidade_cliente`, `estado_cliente`)
 VALUES ('$nome_cliente', '$cpf_cliente', '$endereco_cliente', '$cep_cliente', '$cidade_cliente', '$estado_cliente')";

$inserir = mysqli_query($conexao,$sql); //inserindo os dados

?>

<link rel="stylesheet" href="css/bootstrap.css">

<div class="container" style="width: 500px; margin-top: 20px">
    <center>
        <h4>Cliente cadastrado com sucesso!</h4>
    </center>
    <div style="padding-top: 20px;">
        <center> 
            <a href="index.php" role="button" class="btn btn-sm btn-primary">Cadastrar novo cliente</a>
        </center>
    </div>
</div>
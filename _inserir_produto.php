<?php 

include 'conexao.php'; //criando a conexão

$nome_produto = $_POST['nome_produto'];
$descricao_produto = $_POST['descricao_produto'];
$preco_produto = $_POST['preco_produto'];
$quantidade_produto = $_POST['quantidade_produto'];
$peso_produto = $_POST['peso_produto'];

$sql = "INSERT INTO `produto`( `nome_produto`, `descricao_produto`, `preco_produto`, `quantidade_produto`, `peso_produto`)
 VALUES ('$nome_produto', '$descricao_produto', '$preco_produto', '$quantidade_produto', '$peso_produto')";

$inserir = mysqli_query($conexao,$sql); //inserindo os dados

?>

<link rel="stylesheet" href="css/bootstrap.css">

<div class="container" style="width: 500px; margin-top: 20px">
    <center>
        <h4>Produto cadastrado com sucesso!</h4>
    </center>
    <div style="padding-top: 20px;">
        <center> 
            <a href="adicionar_produto.php" role="button" class="btn btn-sm btn-primary">Cadastrar novo produto</a>
        </center>
    </div>
</div>
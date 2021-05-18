<?php
include 'conexao.php';

$id_produto = $_POST['id_produto'];
$nome_produto = $_POST['nome_produto'];
$descricao_produto = $_POST['descricao_produto'];
$preco_produto = $_POST['preco_produto'];
$quantidade_produto = $_POST['quantidade_produto'];
$peso_produto = $_POST['peso_produto'];

$sql = "UPDATE `produto` SET `nome_produto`='$nome_produto',
 `descricao_produto`='$descricao_produto', `preco_produto`='$preco_produto',`quantidade_produto`='$quantidade_produto',`peso_produto`='$peso_produto' WHERE id_produto = $id_produto";

$atualizar = mysqli_query($conexao, $sql);


?>

<link rel="stylesheet" href="css/bootstrap.css">
<div class="container" style="width: 400px;">
    <center>
        <h3 style="margin-top: 20px;">Atualizado com sucesso.</h3>
        <div style="margin-top: 10px;">
            <a href="listar_produto.php" class="btn btn-sm btn-warning" style="color: #fff;">Voltar</a>
        </div>
    </center>
</div>
<?php 

include 'conexao.php';

$id_cliente = $_GET['id_cliente'];

$sql = "DELETE FROM `cliente` WHERE id_cliente = $id_cliente";
$deletar = mysqli_query($conexao, $sql);

?>

<link rel="stylesheet" href="css/bootstrap.css">
<div class="container" style="width: 400px;">
    <center>
        <h3 style="margin-top: 20px;">Excluído com sucesso.</h3>
        <div style="margin-top: 10px;">
            <a href="listar_cliente.php" class="btn btn-sm btn-warning" style="color: #fff;">Voltar</a>
        </div>
    </center>
</div>
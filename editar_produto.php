<?php

include 'conexao.php';

$id_produto = $_GET['id_produto'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">

    <title>Edição de Produto</title>
</head>

<body>
    <div class="container" style="margin-top: 40px; width:500px">
        <h4>Edição de Produto</h4>
        <form action="_atualizar_produto.php" method="post" style="margin-top: 20px;">
            <?php
            $sql = "SELECT * FROM `produto` WHERE id_produto = $id_produto";
            $buscar = mysqli_query($conexao, $sql);

            while ($array = mysqli_fetch_array($buscar)) {
                $id_produto = $array['id_produto'];
                $nome_produto = $array['nome_produto'];
                $descricao_produto = $array['descricao_produto'];
                $preco_produto = $array['preco_produto'];
                $quantidade_produto = $array['quantidade_produto'];
                $peso_produto = $array['peso_produto'];
            ?>

                <div class="form-group">
                    <label>Nome</label>
                    <input name="nome_produto" type="text" class="form-control" value="<?php echo $nome_produto ?>">
                    <input name="id_produto" type="hidden" class="form-control" value="<?php echo $id_produto ?>">
                </div>

                <div class="form-group">
                    <label>Descrição</label>
                    <input name="descricao_produto" type="text" class="form-control" value="<?php echo $descricao_produto ?>">
                    <input name="id_produto" type="hidden" class="form-control" value="<?php echo $id_produto ?>">
                </div>

                <div class="form-group">
                    <label>Preço</label>
                    <input name="preco_produto" type="number" step="0.01" class="form-control" value="<?php echo $preco_produto ?>">
                </div>

                <div class="form-group">
                    <label>Quantidade</label>
                    <input name="quantidade_produto" type="number?" class="form-control" value="<?php echo $quantidade_produto ?>">
                </div>

                <div class="form-group">
                    <label>Peso</label>
                    <input name="peso_produto" type="number" class="form-control" value="<?php echo $peso_produto ?>">
                </div>


                <div style="text-align: right;">
                    <button type="submit" class="btn btn-primary btn-sm " style="margin-top: 10px; font-weight:bold">Atualizar</button>
                </div>
            <?php } ?>
        </form>
    </div>

    <script type=" text/javascript" src="js/bootstrap.js"></script>
</body>

</html>
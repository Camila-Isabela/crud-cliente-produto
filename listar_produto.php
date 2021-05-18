<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="https://kit.fontawesome.com/731ab02260.js" crossorigin="anonymous"></script>

    <title>Listagem de Produtos</title>
</head>

<body>

    <div class="container" style="margin-top: 40px;">

        <div style="text-align:right">
            <a href="index.php" role="button" class="btn btn-secondary btn-sm " style="margin-top: 10px; font-weight:bold"><i class="fas fa-undo-alt"></i>&nbsp;Voltar</a>
        </div>

        <h3>Lista de Produtos</h3>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Preço</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col">Peso</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>
            <?php
            include 'conexao.php';
            $sql = "SELECT * FROM `produto`";
            $busca = mysqli_query($conexao, $sql);

            while ($array = mysqli_fetch_array($busca)) {
                $id_produto = $array['id_produto'];
                $nome_produto = $array['nome_produto'];
                $descricao_produto = $array['descricao_produto'];
                $preco_produto = $array['preco_produto'];
                $quantidade_produto = $array['quantidade_produto'];
                $peso_produto = $array['peso_produto'];
            ?>

                <tr>
                    <td><?php echo $nome_produto ?></td>
                    <td><?php echo $descricao_produto ?></td>
                    <td><?php echo $preco_produto ?></td>
                    <td><?php echo $quantidade_produto ?></td>
                    <td><?php echo $peso_produto ?></td>
                    <td>
                        <a href="editar_produto.php?id_produto=<?php echo $id_produto ?>" class="btn btn-warning btn-sm" role="button" style="color: #fff;"><i class="far fa-edit"></i>&nbsp;Editar</a>

                        <a href="deletar_produto.php?id_produto=<?php echo $id_produto ?>" class="btn btn-danger btn-sm" role="button"><i class="far fa-trash-alt"></i>&nbsp;Excluir</a>
                    </td>
                </tr>

            <?php } ?>
        </table>
    </div>

    <script type=" text/javascript" src="js/bootstrap.js"></script>

</body>

</html>
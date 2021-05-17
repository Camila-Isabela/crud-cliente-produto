<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="https://kit.fontawesome.com/731ab02260.js" crossorigin="anonymous"></script>

    <title>Listagem de Clientes</title>
</head>

<body>

    <div class="container" style="margin-top: 40px;">

        <div style="text-align:right">
            <a href="index.php" role="button" class="btn btn-secondary btn-sm " style="margin-top: 10px; font-weight:bold"><i class="fas fa-undo-alt"></i>&nbsp;Voltar</a>
        </div>
        
        <h3>Lista de Clientes</h3>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Cpf</th>
                    <th scope="col">Endereço</th>
                    <th scope="col">Cep</th>
                    <th scope="col">Cidade</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>
            <?php
            include 'conexao.php';
            $sql = "SELECT * FROM `cliente`";
            $busca = mysqli_query($conexao,$sql);

            while ($array = mysqli_fetch_array($busca)) {
                $id_cliente = $array['id_cliente'];
                $nome_cliente = $array['nome_cliente'];
                $cpf_cliente = $array['cpf_cliente'];
                $endereco_cliente = $array['endereco_cliente'];
                $cep_cliente = $array['cep_cliente'];
                $cidade_cliente = $array['cidade_cliente'];
                $estado_cliente = $array['estado_cliente'];
            ?>

                <tr>
                    <td><?php echo $nome_cliente ?></td>
                    <td><?php echo $cpf_cliente ?></td>
                    <td><?php echo $endereco_cliente ?></td>
                    <td><?php echo $cep_cliente ?></td>
                    <td><?php echo $cidade_cliente ?></td>
                    <td><?php echo $estado_cliente ?></td>
                    <td>
                        <a href="editar_cliente.php?id=<?php echo $id ?>" class="btn btn-warning btn-sm" role="button" style="color: #fff;"><i class="far fa-edit"></i>&nbsp;Editar</a>

                        <a href="deletar_cliente.php?id=<?php echo $id ?>" class="btn btn-danger btn-sm" role="button"><i class="far fa-trash-alt"></i>&nbsp;Excluir</a>
                    </td>
                </tr>

            <?php } ?>
        </table>
    </div>

    <script type=" text/javascript" src="js/bootstrap.js"></script>

</body>

</html>
<?php

include 'conexao.php';

$id_cliente = $_GET['id_cliente'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">

    <title>Edição de Cliente</title>
</head>

<body>
    <div class="container" style="margin-top: 40px; width:500px">
        <h4>Edição de Cliente</h4>
        <form action="_atualizar_cliente.php" method="post" style="margin-top: 20px;">
            <?php
            $sql = "SELECT * FROM `cliente` WHERE id_cliente = $id_cliente";
            $buscar = mysqli_query($conexao, $sql);

            while ($array = mysqli_fetch_array($buscar)) {
                $id_cliente = $array['id_cliente'];
                $nome_cliente = $array['nome_cliente'];
                $cpf_cliente = $array['cpf_cliente'];
                $endereco_cliente = $array['endereco_cliente'];
                $cep_cliente = $array['cep_cliente'];
                $cidade_cliente = $array['cidade_cliente'];
                $estado_cliente = $array['estado_cliente'];
            ?>

                <div class="form-group">
                    <label>Nome</label>
                    <input name="nome_cliente" type="text" class="form-control" value="<?php echo $nome_cliente ?>">
                    <input name="id_cliente" type="hidden" class="form-control" value="<?php echo $id_cliente ?>">                    
                </div>

                <div class="form-group">
                    <label>Cpf</label>
                    <input name="cpf_cliente" type="text" class="form-control" value="<?php echo $cpf_cliente ?>">
                    <input name="id_cliente" type="hidden" class="form-control" value="<?php echo $id_cliente ?>">
                </div>

                <div class="form-group">
                    <label>Endereço</label>
                    <input name="endereco_cliente" type="text" class="form-control" value="<?php echo $endereco_cliente ?>">
                </div>

                <div class="form-group">
                    <label>Cep</label>
                    <input name="cep_cliente" type="text" class="form-control" value="<?php echo $cep_cliente ?>">
                </div>

                <div class="form-group">
                    <label>Cidade</label>
                    <input name="cidade_cliente" type="text" class="form-control" value="<?php echo $cidade_cliente ?>">
                </div>
                <div class="form-group">
                    <label>Estado</label>
                    <input name="estado_cliente" type="text" class="form-control" value="<?php echo $estado_cliente ?>">
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
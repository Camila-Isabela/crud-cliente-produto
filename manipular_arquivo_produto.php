<?php

include 'conexao.php';


if (isset($_POST["import"])) {
    $filename = $_FILES["file"]["tmp_name"];

    

    if ($_FILES["file"]["size"] > 0) {
        $file = fopen($filename, "r");
        
        fgets($file); // Aqui é o comando para ignorar a primeira linha(header)
        
        while (($column = fgetcsv($file, 10000, ";")) !== FALSE) {
            
            $sqlInsert = "INSERT INTO produto (nome_produto, descricao_produto, preco_produto, quantidade_produto, peso_produto) values ('" . $column[0] . "', '" . $column[1] . "', '" . $column[2] . "', '" . $column[3] . "', '" . $column[4] . "')";

            $result = mysqli_query($conexao, $sqlInsert);            
        }

        

        echo "<script>alert('Inserção realizada com sucesso!')</script>";

    }
}

?>

<!-- //colar o index  -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">

    <title>Menu</title>
</head>

<body>
    <div class="container" style="margin-top: 60px">
        <h2 style="margin:50px 0px; font-weight: bold; text-align:center">CLIENTES</h2>
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Cadastrar Cliente</h5>
                        <p class="card-text">Opção para cadastrar clientes.</p>
                        <a href="adicionar_cliente.php" class="btn btn-primary">Cadastrar</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Listar Clientes</h5>
                        <p class="card-text">Visualizar, editar e excluir clientes.</p>
                        <a href="listar_cliente.php" class="btn btn-primary">Listar</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-6" style="margin-top: 10px;">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Pesquisar Cliente</h5>
                        <p class="card-text">Pesquisar e visualizar cliente.</p>
                        <a href="pesquisar_cliente.php" class="btn btn-primary">Pesquisar</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-6" style="margin-top: 12.5px;">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Adicionar Clientes</h5>
                        <p class="card-text">Upload de arquivo no formato CSV para adicionar clientes.</p>
                        <form action="manipular_arquivo_cliente.php" method="post" name="csv" enctype="multipart/form-data">
                            <div>
                                <label>Escolher Arquivo</label>
                                <input type="file" name="file" accept=".csv">
                                <button type="submit" name="import">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <h2 style="margin:50px 0px; font-weight: bold; text-align:center">PRODUTOS</h2>

            <div class="col-sm-6" style="margin-top: 10px;">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Cadastrar Produto</h5>
                        <p class="card-text">Opção para cadastrar produtos.</p>
                        <a href="adicionar_produto.php" class="btn btn-primary">Cadastrar</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-6" style="margin-top: 10px;">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Listar Produtos</h5>
                        <p class="card-text">Visualizar, editar e excluir produtos.</p>
                        <a href="listar_produto.php" class="btn btn-primary">Listar</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-6" style="margin-top: 10px;">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Pesquisar Produto</h5>
                        <p class="card-text">Pesquisar e visualizar produto.</p>
                        <a href="pesquisar_produto.php" class="btn btn-primary">Pesquisar</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-6" style="margin-top: 12.5px;">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Adicionar Produtos</h5>
                        <p class="card-text">Upload de arquivo no formato CSV para adicionar produtos.</p>
                        <form action="manipular_arquivo_produto.php" method="post" name="csv" enctype="multipart/form-data">
                            <div>
                                <label>Escolher Arquivo</label>
                                <input type="file" name="file" accept=".csv">
                                <button type="submit" name="import">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>



    <script type=" text/javascript" src="js/bootstrap.js"></script>
</body>

</html>
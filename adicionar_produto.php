<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="https://kit.fontawesome.com/731ab02260.js" crossorigin="anonymous"></script>

    <title>Cadastro de Produto</title>
</head>

<body>
    <div class="container" style="margin-top: 40px; width:500px">

        <div style="text-align: right;">
            <a href="index.php" role="button" class="btn btn-secondary btn-sm " style="margin-top: 10px; font-weight:bold"><i class="fas fa-undo-alt"></i>&nbsp;Voltar</a>
        </div>

        <h4>Cadastro de Produto</h4>
        <form action="_inserir_produto.php" method="POST" style="margin-top: 20px;">

            <div class="form-group">
                <label>Nome</label>
                <input name="nome_produto" type="text" class="form-control" placeholder="Insira o nome" autocomplete="off" required>
            </div>

            <div class="form-group">
                <label>Descrição</label>
                <input name="descricao_produto" type="text" class="form-control" placeholder="Insira a descrição" autocomplete="off" required>
            </div>

            <div class="form-group">
                <label>Preço</label>
                <input name="preco_produto" type="number" step="0.01" class="form-control" placeholder="Insira o preço" autocomplete="off" required>
            </div>

            <div class="form-group">
                <label>Quantidade</label>
                <input name="quantidade_produto" type="number?" class="form-control" placeholder="Insira a quantidade" autocomplete="off" required>
            </div>

            <div class="form-group">
                <label>Peso</label>
                <input name="peso_produto" type="number" class="form-control" placeholder="Insira o peso" autocomplete="off" required>
            </div>
            
            <div style="text-align: right;">
                <button type="submit" class="btn btn-primary btn-sm " style="margin-top: 10px; font-weight:bold"><i class="far fa-plus-square"></i>&nbsp;Cadastrar</button>
            </div>

        </form>

    </div>

    <script type=" text/javascript" src="js/bootstrap.js"></script>
</body>

</html>
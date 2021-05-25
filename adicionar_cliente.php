<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="https://kit.fontawesome.com/731ab02260.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
    <title>Cadastro de Cliente</title>
</head>

<body>
    <div class="container" style="margin-top: 40px; width:500px">

        <div style="text-align: right;">
            <a href="index.php" role="button" class="btn btn-secondary btn-sm " style="margin-top: 10px; font-weight:bold"><i class="fas fa-undo-alt"></i>&nbsp;Voltar</a>
        </div>

        <h4>Cadastro de Cliente</h4>
        <form action="_inserir_cliente.php" method="POST" style="margin-top: 20px;">

            <div class="form-group">
                <label>Nome completo</label>
                <input name="nome_cliente" type="text" class="form-control" placeholder="Insira o nome completo" autocomplete="off" required>
            </div>

            <div class="form-group">
                <label>Cpf</label>
                <input name="cpf_cliente" type="text" class="form-control" placeholder="Insira o cpf" autocomplete="off" required>
            </div>

            <div class="form-group">
                <label>Endereço</label>
                <input name="endereco_cliente" type="text" class="form-control" placeholder="Insira o endereço" autocomplete="off" required>
            </div>

            <div class="form-group">
                <label>Cep</label>
                <input name="cep_cliente" type="text" class="form-control" placeholder="Insira o cep" autocomplete="off" required>
            </div>

            <!-- DESABILITEI MEUS INPUT'S COM DADOS QUE VÃO PARA TABELA SQL
            E POPULEI COM DADOS JSON USANDO JQUERY -->
            <div class="form-group">
                <label>Estado</label>
                <!-- <input name="estado_cliente" type="text" class="form-control" placeholder="Insira o estado" autocomplete="off" required> -->
                <select class="form-control" id="Estado">
                    <option>Selecionar Estado</option>
                </select>
            </div>
            <div class="form-group">
                <label>Cidade</label>
                <!-- <input name="cidade_cliente" type="text" class="form-control" placeholder="Insira a cidade" autocomplete="off" required> -->
                <select class="form-control" id="Cidade">
                    <option>Selecionar Cidade</option>
                </select>
            </div>

            <div style="text-align: right;">
                <button type="submit" class="btn btn-primary btn-sm " style="margin-top: 10px; font-weight:bold"><i class="far fa-plus-square"></i>&nbsp;Cadastrar</button>
            </div>

        </form>

    </div>

    <script type=" text/javascript" src="js/bootstrap.js"></script>

    <script>
        $(document).ready(function() {
            carregar_json('Estado');

            function carregar_json(id, cidade_id) {
                var html = '';

                $.getJSON('dados.json', function(data) {
                    html += '<option>Selecionar ' + id + '</option>';
                    console.log(data);
                    if (id == 'Estado' && cidade_id == null) {
                        for (var i = 0; i < data.estados.length; i++) {
                            html += '<option value=' + data.estados[i].sigla + '>' + data.estados[i].nome + '</option>';
                        }
                    } else {
                        for (var i = 0; i < data.estados.length; i++) {
                            if (data.estados[i].sigla == cidade_id) {
                                for (var j = 0; j < data.estados[i].cidades.length; j++) {
                                    html += '<option value=' + data.estados[i].sigla + '>' + data.estados[i].cidades[j] + '</option>';
                                }
                            }
                        }
                    }

                    $('#' + id).html(html);
                });

            }

            $(document).on('change', '#Estado', function() {
                var cidade_id = $(this).val();
                console.log(cidade_id);
                if (cidade_id != null) {
                    carregar_json('Cidade', cidade_id);
                }
            });

        });
    </script>

</body>

</html>
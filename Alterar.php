<?php
include("Conexao.php");
$cliente = selecionarClienteID($_POST["id"]);

?>


<head>
    <meta charset="UTF-8">
    <title>Alterar Cliente</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<form style="margin: 30px;" name="dadosCliente" action="Conexao.php" method="post">
    <h1>Alterar Clientes</h1>
    <hr>
    <a class="btn btn-primary" href="Index.php">Listar Clientes</a>
    <br>
    <br>
    <h4>Preencha com as novas Informações</h4>
    <br>
    <h6>Informações pessoais</h6>
    <hr>
    <div class="row mb-3">
        <div class="col-sm-2">
            <label>Nome Completo</label>
            <input type="text" class="form-control" name="nome" value="<?= $cliente["nome"] ?>">
        </div>
    </div>

    <div class="row gy-2 gx-4 align-items-center">

        <fieldset class="col-auto">
            <legend class="col-form-label">Sexo</legend>
            <div class="col-sm-10">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="sexo" value="Masculino" checked <?= ($cliente["sexo"] == "Masculino") ? "checked" : null ?> />
                    <label class="form-check-label">
                        Masculino
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="sexo" value="Feminino" <?= ($cliente["sexo"] == "Feminino") ? "checked" : null ?> />
                    <label class="form-check-label">
                        Feminino
                    </label>
                </div>
            </div>
        </fieldset>

        <div class="col-auto">
            <label>CPF</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="cpf" value="<?= $cliente["cpf"] ?>">
            </div>
        </div>

        <div class="col-auto">
            <label>Data de Nascimento</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" name="nascimento" value="<?= $cliente["nascimento"] ?>">
            </div>
        </div>
    </div>
    <br>
    <br>
    <h6>Endereço</h6>
    <hr>
    <div class="row gy-2 gx-3 align-items-center">

        <div class="col-auto">
            <label>Endereço</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="endereco" value="<?= $cliente["endereco"] ?>">
            </div>
        </div>

        <div class="col-auto">
            <label>CEP</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="cep" value="<?= $cliente["cep"] ?>">
            </div>
        </div>

        <div class="col-auto">
            <div class="col-sm-10">
                <label>Bairro</label>
                <input type="text" class="form-control" name="bairro" value="<?= $cliente["bairro"] ?>">
            </div>
        </div>
    </div>
    <br>
    <br>
    <h6>Conta</h6>
    <hr>

    <div class="row gy-2 gx-3 align-items-center">
        <div class="col-auto">
            <label>Data de Vencimento</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" name="data_vencimento" value="<?= $cliente["data_vencimento"] ?>">
            </div>
        </div>

        <div class="col-auto">
            <label>Unidade Consumidora</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="unidade_consumidora" value="<?= $cliente["unidade_consumidora"] ?>">
            </div>
        </div>

        <div class="col-auto">
            <label>KWH</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name="kwh" value="<?= $cliente["kwh"] ?>">
            </div>
        </div>

        <div class="col-auto">
            <label>Valor Total</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="valor_total" value="<?= $cliente["valor_total"] ?>">
            </div>
        </div>
    </div>
    <br>
    <br>
    <input type="hidden" name="acao" value="alterar">
    <input type="hidden" name="id" value="<?= $cliente["id"] ?>">
    <input type="submit" name="enviar" value="Enviar" class="btn btn-primary">
</form>
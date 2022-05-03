<?php include 'Conexao.php';
$grupo = listarCliente();
?>

<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <title>Listar Clientes</title>
</head>

<body>
    <h1 style="text-align:center">Dados dos Clientes</h1>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Sexo</th>
                <th>Endereço</th>
                <th>CEP</th>
                <th>Bairro</th>
                <th>CPF</th>
                <th>Nascimento</th>
                <th>Data de Vencimento</th>
                <th>Unidade Consumidora</th>
                <th>KWH</th>
                <th>Valor Total</th>

            </tr>

        </thead>

        <tbody>
            <?php
            foreach ($grupo as $cliente) { ?>
            <tr>
                <td><?= $cliente["nome"] ?></td>
                <td><?= $cliente["sexo"] ?></td>
                <td><?= $cliente["endereco"] ?></td>
                <td><?= $cliente["cep"] ?></td>
                <td><?= $cliente["bairro"] ?></td>
                <td><?= $cliente["cpf"] ?></td>
                <td><?= $cliente["nascimento"] ?></td>
                <td><?= $cliente["data_vencimento"] ?></td>
                <td><?= $cliente["unidade_consumidora"] ?></td>
                <td><?= $cliente["kwh"] ?></td>
                <td><?= $cliente["valor_total"] ?></td>
                <th>
                    <form name="alterar" action="Alterar.php" method="POST">
                        <input type="hidden" name="id" value="<?= $cliente["id"] ?>" />
                        <input class="btn btn-primary" type="submit" name="editar" value="Editar" />
                    </form>
                </th>
                <th>
                    <form name="excluir" action="Conexao.php" method="POST">
                        <input type="hidden" name="id" value=<?= $cliente["id"] ?> />
                        <input type="hidden" name="acao" value="excluir" />
                        <input class="btn btn-primary" type="submit" value="Excluir" name="excluir" />
                    </form>
                </th>
            </tr>

            <?php }

            ?>
        <tbody>

    </table>
    <a class="btn btn-primary" role="button" href="Inserir.php" style="margin-left: 500px; ">Adicionar
        Clientes</a>

    <table class="table">

</body>

</html>
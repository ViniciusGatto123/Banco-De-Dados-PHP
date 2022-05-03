<?php
if (isset($_POST['acao'])) {

    if ($_POST['acao'] == "inserir") {
        inserirCliente();
    }

    if ($_POST['acao'] == "alterar") {
        alterarCliente();
    }

    if ($_POST['acao'] == "excluir") {
        excluirCliente();
    }
}

function abrirBanco()
{
    $conexao = new mysqli("localhost", "root", "", "consumo_energia");
    return $conexao;
}

function inserirCliente()
{
    $banco = abrirBanco();
    $sql = "INSERT INTO cliente(nome, sexo, endereco, cep, bairro, cpf, nascimento, data_vencimento,
unidade_consumidora, kwh, valor_total)" . "VALUES ('{$_POST["nome"]}','{$_POST["sexo"]}','{$_POST["endereco"]}','{$_POST["cep"]}','{$_POST["bairro"]}','{$_POST["cpf"]}',
'{$_POST["nascimento"]}','{$_POST["data_vencimento"]}','{$_POST["unidade_consumidora"]}','{$_POST["kwh"]}','{$_POST["valor_total"]}')";
    $banco->query($sql);
    $banco->close();
    voltarInserir();
}

function listarCliente()
{
    $banco = abrirBanco();
    $sql = "select * from cliente order by sexo";
    $resultado = $banco->query($sql);
    while ($row = mysqli_fetch_array($resultado)) {
        $grupo[] = $row;
    }
    return $grupo;
}

function excluirCliente()
{
    $banco = abrirBanco();
    $sql = "delete from cliente where id='{$_POST["id"]}'";
    $banco->query($sql);
    $banco->close();
    voltarIndex();
}

function selecionarClienteID($id)
{
    $banco = abrirBanco();
    $sql = "select * from cliente where id=" . $id;
    $resultado = $banco->query($sql);
    $cliente = mysqli_fetch_assoc($resultado);
    return $cliente;
}

function alterarCliente()
{
    $banco = abrirBanco();
    $sql = "UPDATE cliente SET nome='{$_POST["nome"]}',sexo='{$_POST["sexo"]}',endereco='{$_POST["endereco"]}',cep='{$_POST["cep"]}',bairro='{$_POST["bairro"]}',cpf='{$_POST["cpf"]}',nascimento='{$_POST["nascimento"]}',data_vencimento='{$_POST["data_vencimento"]}',unidade_consumidora='{$_POST["unidade_consumidora"]}',kwh='{$_POST["kwh"]}',valor_total='{$_POST["valor_total"]}' WHERE id='{$_POST["id"]}'";
    $banco->query($sql);
    $banco->close();
    voltarIndex();
}

function voltarInserir()
{
    header("location:Inserir.php");
}

function voltarIndex()
{
    header("location:Index.php");
}

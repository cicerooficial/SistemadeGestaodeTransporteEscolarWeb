<?php
include "../Connections/conexao.php";
$despesa = $_POST['despesa'];
$data = $_POST['data'];
$valor = $_POST['valor'];

$sql = $mysqli ->query("INSERT INTO despesas(nome_despesa, data, valor)

VALUES('$despesa', '$data', '$valor')");

header('location:listar_despesa.php');

?>

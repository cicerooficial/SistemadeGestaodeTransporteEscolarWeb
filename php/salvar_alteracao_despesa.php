<?php

include "../Connections/conexao.php"; 
header('Content-Type: text/html; charset=utf8-8859-1');
$id_despesa = $_POST['id_despesa'];
$despesa = $_POST['despesa'];
$data = $_POST['data'];
$valor = $_POST['valor'];

$sql = $mysqli ->query("UPDATE `transporte`.`despesas` SET `nome_despesa`='$despesa', `data`='$data', `valor`='$valor' WHERE `id_despesa`='$id_despesa' ");

$sql = $mysqli ->query($sql);

header("Location: listar_despesa.php");
?>

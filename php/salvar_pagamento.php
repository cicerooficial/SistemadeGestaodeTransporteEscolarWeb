<?php
include "../Connections/conexao.php";

$cpf = $_POST['cpf'];
$mes_venc = $_POST['vencimento'];
$mes_pag = $_POST['pagamento'];
$vlr_pagar = $_POST['valor_pagar'];
$vlr_pago = $_POST['valor_pago'];
$pago= $_POST['pago'];

$sql = $mysqli ->query("INSERT INTO `transporte`.`parcela` (`dt_pagamento`, `dt_vencimento`, `valor`, `valor_pg`, `pago`, `cpf_resp`)
VALUES ('$mes_pag', '$mes_venc', '$vlr_pagar', '$vlr_pago', '$pago', '$cpf')");

header("Location: listar_pagamento.php");

?>

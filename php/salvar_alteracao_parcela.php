<?php

include "../Connections/conexao.php"; 
header('Content-Type: text/html; charset=utf8');
$id_parcela = $_POST['id_parcela'];
$mes_venc = $_POST['vencimento'];
$mes_pag = $_POST['pagamento'];
$vlr_pagar = $_POST['valor_pagar'];
$vlr_pago = $_POST['valor_pago'];
$pago= $_POST['pago'];

$sql = $mysqli ->query("UPDATE parcela
SET  
dt_pagamento= '$mes_pag', 
dt_vencimento= '$mes_venc', 
valor= '$vlr_pagar', 
valor_pg= '$vlr_pago', 
pago= '$pago' 
WHERE  id_parcela='$id_parcela' ");

$sql = $mysqli ->query($sql);

header("Location: listar_pagamento.php");
?>

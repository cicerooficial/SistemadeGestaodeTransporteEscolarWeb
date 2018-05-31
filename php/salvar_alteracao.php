<?php

include "../Connections/conexao.php"; 
header('Content-Type: text/html; charset=utf8');
$id_resp = $_POST["id_resp"];
$id_end_resp = $_POST["id_end_resp"];
$nome = htmlspecialchars($_POST['nome']);
$nascimento = htmlspecialchars($_POST['nascimento']);
$cpf = htmlspecialchars($_POST['cpf']);
$rg = htmlspecialchars($_POST['rg']);
$num_dependentes = htmlspecialchars($_POST['num_dependentes']);
$numero_tel = htmlspecialchars($_POST['numero_tel']);
$numero_tel_recado = htmlspecialchars($_POST['numero_tel_recado']);
$email = htmlspecialchars($_POST['email']);
$senha = htmlspecialchars($_POST['senha']);
$end = htmlspecialchars($_POST['end']);
$numero = htmlspecialchars($_POST['numero']);
$complemento = htmlspecialchars($_POST['complemento']);
$bairro = htmlspecialchars($_POST['bairro']);
$cep = htmlspecialchars($_POST['cep']);
$cidade = htmlspecialchars($_POST['cidade']);
$estado = htmlspecialchars($_POST['estado']);
$status = htmlspecialchars($_POST['status']);
$condicao = htmlspecialchars($_POST['condicao']);

$sql = ("UPDATE RESPONSAVEL as resp
left outer join endereco_resp as end_resp 
on(resp.cpf_resp = end_resp.cpf_resp)
SET 
resp.nome_resp = '$nome', 
resp.dt_nasc_resp = '$nascimento', 
resp.cpf_resp = '$cpf',
resp.rg_resp = '$rg', 
resp.num_dependentes='$num_dependentes', 
resp.tel_principal='$numero_tel', 
resp.tel_recado='$numero_tel_recado', 
resp.email='$email', 
resp.senha='$senha',
resp.status='$status',
resp.condicao='$condicao',
end_resp.localidade_resp = '$end',
end_resp.numero_resp = '$numero',
end_resp.complemento_resp = '$complemento',
end_resp.bairro_resp = '$bairro',
end_resp.cep_resp = '$cep',
end_resp.cidade_resp = '$cidade',
end_resp.estado_resp = '$estado',
end_resp.cpf_resp = '$cpf'
WHERE resp.id_resp = $id_resp or end_resp.id_end_resp = $id_end_resp ");

$sql = $mysqli ->query($sql);

header("Location: listar_usuario.php");
?>

<?php

include "../Connections/conexao.php"; 
header('Content-Type: text/html; charset=utf8');
$id_crianca = $_POST["id_crianca"];
$id_end_crianca = $_POST["id_end_crianca"];
$nome = $_POST['nome'];
$sexo = $_POST['sexo'];
$nascimento = $_POST['nascimento'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$obs = $_POST['obs'];
$professor = $_POST['professor'];
$turma = $_POST['turma'];
$horario = $_POST['horario'];
$status = $_POST['status'];
$veiculo = $_POST['veiculo'];
$apelido = $_POST['apelido'];
$nome_escola = $_POST['nome_escola'];
$end = htmlspecialchars($_POST['end']);
$numero = htmlspecialchars($_POST['numero']);
$complemento = htmlspecialchars($_POST['complemento']);
$bairro = htmlspecialchars($_POST['bairro']);
$cep = htmlspecialchars($_POST['cep']);
$cidade = htmlspecialchars($_POST['cidade']);
$estado = htmlspecialchars($_POST['estado']);

$sql = ("update crianca as cri
left outer join endereco_crianca as end_cri
on(cri.nome_crianca = end_cri.nome_crianca) 
set
cri.nome_crianca = '$nome',
cri.sexo_crianca = '$sexo',
cri.dt_nasc_crianca = '$nascimento',
cri.apelido = '$apelido',
cri.cpf_crianca = '$cpf',
cri.rg_crianca = '$rg',
cri.turma = '$turma',
cri.professor = '$professor',
cri.observacoes = '$obs',
cri.nome_escola = '$nome_escola',
cri.horario = '$horario',
cri.status_crianca = '$status',
cri.veiculo = '$veiculo',
end_cri.localidade_crianca = '$end', 
end_cri.numero_crianca = '$numero', 
end_cri.complemento_crianca = '$complemento', 
end_cri.bairro_crianca = '$bairro',
end_cri.cep_crianca = '$cep', 
end_cri.cidade_crianca = '$cidade', 
end_cri.estado_crianca = '$estado',
end_cri.nome_crianca = '$nome'
where end_cri.id_end_crianca = '$id_end_crianca' or cri.id_crianca = '$id_crianca'");

$sql = $mysqli ->query($sql);

header("Location: listar_crianca.php");
?>
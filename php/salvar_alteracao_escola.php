<?php
include "../Connections/conexao.php"; 
header('Content-Type: text/html; charset=utf8-8859-1');
$id_escola = $_POST['id_escola'];
$id_end_escola = $_POST['id_end_escola'];
$nome = $_POST['nome'];
$tel_escola = $_POST['tel_escola'];
$tel2_escola = $_POST['tel2_escola'];
$end = $_POST['end'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];
$bairro = $_POST['bairro'];
$cep = $_POST['cep'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];


$sql = ("update escola as esc
left outer join endereco_escola as end_esc
on(esc.nome_escola = end_esc.nome_escola) 
set
esc.nome_escola = '$nome',
esc.tel_escola = '$tel_escola',
esc.tel2_escola = '$tel2_escola',
end_esc.localidade_escola = '$end', 
end_esc.numero_escola = '$numero', 
end_esc.complemento_escola = '$complemento', 
end_esc.bairro_escola = '$bairro',
end_esc.cep_escola = '$cep', 
end_esc.cidade_escola = '$cidade', 
end_esc.estado_escola = '$estado',
end_esc.nome_escola = '$nome'
where end_esc.id_end_escola = '$id_end_escola' or esc.id_escola = '$id_escola'");

$sql = $mysqli ->query($sql);

header("Location: listar_escola.php");

?>
<?php
include "../Connections/conexao.php";

$cpf_resp = $_POST['cpf_resp'];
$nome = $_POST['nome'];
$apelido = $_POST['apelido'];
$sexo = $_POST['sexo'];
$nascimento = $_POST['nascimento'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$obs = $_POST['obs'];
$professor = $_POST['professor'];
$turma = $_POST['turma'];
$veiculo = $_POST['veiculo'];
$status = $_POST['status'];
$nome_escola = $_POST['nome_escola'];
$horario = $_POST['horario'];

$end = htmlspecialchars($_POST['end']);
$numero = htmlspecialchars($_POST['numero']);
$complemento = htmlspecialchars($_POST['complemento']);
$bairro = htmlspecialchars($_POST['bairro']);
$cep = htmlspecialchars($_POST['cep']);
$cidade = htmlspecialchars($_POST['cidade']);
$estado = htmlspecialchars($_POST['estado']);

$sql = $mysqli ->query("INSERT INTO `transporte`.`crianca` (`nome_crianca`, `sexo_crianca`, `dt_nasc_crianca`, `apelido`, `cpf_crianca`, `rg_crianca`, `turma`, `professor`, `observacoes`, `cpf_resp`, `nome_escola`, `horario`, `status_crianca`, `veiculo`) 
VALUES ('$nome', '$sexo', '$nascimento', '$apelido', '$cpf', '$rg', '$turma', '$professor', '$obs', '$cpf_resp', '$nome_escola', '$horario', '$status', '$veiculo')");

$sql = $mysqli ->query("INSERT INTO endereco_crianca(localidade_crianca, numero_crianca, complemento_crianca, bairro_crianca, cep_crianca, cidade_crianca, estado_crianca, nome_crianca)

VALUES('$end', '$numero', '$complemento', '$bairro', '$cep', '$cidade', '$estado','$nome')");

header('location:listar_crianca.php');

?>


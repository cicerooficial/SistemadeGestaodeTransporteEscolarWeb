<?php
include "../Connections/conexao.php";


$nome = $_POST['nome'];
$end = $_POST['end'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];
$bairro = $_POST['bairro'];
$cep = $_POST['cep'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$horario = $_POST['horario'];
$telefone = $_POST['telefone'];
$telefone2 = $_POST['telefone2'];



$sql = $mysqli -> query("INSERT INTO escola(nome_escola, tel_escola, tel2_escola)

VALUES('$nome','$telefone','$telefone2')");

$sql = $mysqli -> query("INSERT INTO endereco_escola(localidade_escola, numero_escola, complemento_escola, bairro_escola, cep_escola, cidade_escola, estado_escola, nome_escola)

VALUES('$end', '$numero', '$complemento', '$bairro', '$cep', '$cidade', '$estado', '$nome')");

header('location: listar_escola.php');




?>
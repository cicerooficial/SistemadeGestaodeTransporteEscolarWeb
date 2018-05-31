<?php
include "../Connections/conexao.php";
$nome = htmlspecialchars($_POST['nome']);
$sexo = htmlspecialchars($_POST['sexo']);
$nascimento = htmlspecialchars($_POST['nascimento']);
$cpf = htmlspecialchars($_POST['cpf']);
$rg = htmlspecialchars($_POST['rg']);
$num_dependentes = htmlspecialchars($_POST['num_dependentes']);
$end = htmlspecialchars($_POST['end']);
$numero = htmlspecialchars($_POST['numero']);
$complemento = htmlspecialchars($_POST['complemento']);
$bairro = htmlspecialchars($_POST['bairro']);
$cep = htmlspecialchars($_POST['cep']);
$cidade = htmlspecialchars($_POST['cidade']);
$estado = htmlspecialchars($_POST['estado']);
$numero_tel = htmlspecialchars($_POST['numero_tel']);
$numero_tel_recado = htmlspecialchars($_POST['numero_tel_recado']);
$email = htmlspecialchars($_POST['email']);
$senha = htmlspecialchars($_POST['senha']);
$status = htmlspecialchars($_POST['status']);
$condicao = htmlspecialchars($_POST['condicao']);

$query = mysqli_query($mysqli, "SELECT * FROM RESPONSAVEL");

while($row = mysqli_fetch_array($query)){

	$cpf_cadastrado = $row['cpf_resp'];

}

if($cpf_cadastrado != $cpf){


$sql = $mysqli ->query("INSERT INTO responsavel(nome_resp, sexo_resp, dt_nasc_resp, cpf_resp, rg_resp, num_dependentes, email, senha, tel_principal, tel_recado, status, condicao)

VALUES('$nome', '$sexo', '$nascimento', '$cpf', '$rg', '$num_dependentes', '$email', '$senha', '$numero_tel', '$numero_tel_recado', '$status', '$condicao')");

$sql = $mysqli ->query("INSERT INTO endereco_resp(localidade_resp, numero_resp, complemento_resp, bairro_resp, cep_resp, cidade_resp, estado_resp, cpf_resp)

VALUES('$end', '$numero', '$complemento', '$bairro', '$cep', '$cidade', '$estado','$cpf')");

header('location: listar_usuario.php');

}else{

echo"<script>alert('CPF ja cadastrado no banco'),window.open('cadastro_responsavel.php','_self')</script>";

}



?>
<?php

include'../Connections/conexao.php';

$cpf = $_POST['cpf'];
$senha = $_POST['senha'];


$sql = $mysqli->query ("SELECT * FROM RESPONSAVEL WHERE cpf_resp = '$cpf' AND senha = '$senha'") ;




if(mysqli_num_rows($sql) == 1){
	$resultado = mysqli_fetch_assoc($sql);
	session_start();
	$_SESSION['id_resp'] = $resultado['id_resp'];
	$_SESSION['cpf'] = $resultado['cpf_resp'];
  	$_SESSION['nome_resp'] = $resultado['nome_resp'];
  	$_SESSION['senha'] = $resultado['senha'];
	$_SESSION['condicao'] = $resultado['condicao'];
	
	header ('location: branco.php');
	
} 
else {

echo"<script>alert('CPF ou Senha inválido'),window.open('../html/login.html','_self')</script>";	

}


?>
<?php
if(!isset($_SESSION)) 
{ 
session_start(); 

} 

if($_SESSION['condicao'] == 'Adm'){
	
	header('location: menu_adm.php');
	
}
if($_SESSION['condicao'] == 'Cliente'){
	
	header('location: index_cliente.php');
	
}
//não permite acesar a pagina principal pelo navegador
//senão existir a seção volta pela pagina index
if(!isset($_SESSION['cpf'])AND !isset($_SESSION['senha']) AND !isset($_SEESION['condicao'])){
  header('location: ../html/login.html ');
  exit;
}











?>
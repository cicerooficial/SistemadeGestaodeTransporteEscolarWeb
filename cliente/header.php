<!doctype html>
<!--[if lt IE 7]> <html class="ie6 oldie"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 oldie"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 oldie"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>CLIENTE</title>
<!-- 
Para saber mais sobre os comentários condicionais sobre as tags html na parte superior do arquivo:
paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/

Se você estiver usando a compilação personalizada do modernizr (http://www.modernizr.com/), faça o seguinte:
* insira o link para o seu js aqui
* remova o link abaixo para o html5shiv
* adicione a classe "no-js" às tags html na parte superior
* você também pode remover o link para respond.min.js se tiver incluído o MQ Polyfill na sua compilação do modernizr 
-->
<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<script src="../javascript/respond.min.js"></script>
<script src="../javascript/validaCampo.js"></script>
<script src="../javascript/jquery-1.5.2.min.js"></script>
<script src="../javascript/jquery.maskedinput-1.3.min.js"></script>
<script src="../javascript/jquery.js"></script>
<script src="../javascript/geral.js"></script>
<script src="../javascript/validaCampo_crianca.js"></script>
<link href="../css/jquery-ui.css" rel="stylesheet" type="text/css" />
<script src="../javascript/jquery-1.8.2.js"></script>
<script src="../javascript/jquery-ui.js"></script>

<link href="../css/boilerplate.css" rel="stylesheet" type="text/css">
<!--
<link href="../css/index.css" rel="stylesheet" type="text/css">
-->
<link href="../css/reset.css" rel="stylesheet" type="text/css">
<link href="../css/style.css" rel="stylesheet" type="text/css">

<?php
if(!isset($_SESSION)) 
{ 
session_start(); 
}  
//não permite acesar a pagina principal pelo navegador
//senão existir a seção volta pela pagina index
if(!isset($_SESSION['cpf'])AND !isset($_SESSION['senha'])){
  header('location: ../html/login.html ');
  exit;
}
?>
</head>

	<body class="painel">
	<div class="gridContainer clearfix">
	<div id="wrapper" >
			<div id="header">
			<hgroup>
				<h1>Bem vindo! <?php echo $_SESSION['nome_resp'];?> <img src="../img/adm.png" alt="Adm" /></h1>
			</hgroup>
			</div><!-- header -->
			<div id="wrap-content">

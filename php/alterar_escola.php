<?php

$id_escola = $_GET['id_escola']; 
settype($id_escola, 'integer');


include "../Connections/conexao.php"; 
header('Content-Type: text/html; charset=utf8-8859-1');
$query = "select * from escola left outer join endereco_escola on(escola.nome_escola = endereco_escola.nome_escola) where id_escola = $id_escola"; 
$result = $mysqli -> query ($query);
$dados = $result -> fetch_array();

?>

<?php include('header.php');  ?>
<script src="../javascript/jquery-1.5.2.min.js"></script>
<script src="../javascript/jquery.maskedinput-1.3.min.js"></script>
<script src="../javascript/validaCampo.js"></script>
<div id=content>


  
   <form class="userform" name="cadastro_escola" method="post" action="salvar_alteracao_escola.php" onSubmit="return validaCampo(); return false;" autocomplete="off" >
    
			
	<ul>
    <fieldset>
    <legend> Dados da Escola </legend>
	<input type="hidden" name="id_resp" id="id_resp" value="<?php echo $dados['id_escola']; ?>" >
			
			<li><label>Nome da Escola:</label> 
			<input name="nome" id="nome" type="text" size="50" value="<?php echo $dados['nome_escola']; ?>" ></li><br>
			  <li><label>Telefone 1: </label>
			  <input name="tel_escola" id="tel_escola" value="<?php echo $dados['tel_escola']; ?>" type="tel"></li>
			  <br>
              <li><label>Telefone 2: </label>
			  <input name="tel2_escola" id="tel2_escola" value="<?php echo $dados['tel2_escola']; ?>" type="tel"></li>
			  <br>
              </fieldset>
              <fieldset>
              <legend>Endereço da Escola</legend>
				<input type="hidden" name="id_end_escola" value="<?php echo $dados['id_end_escola']; ?>">		  
			  <li><label>Localidade: </label>
			  <input name="end" type="text" size="50" value="<?php echo $dados['localidade_escola']; ?>" placeholder="Rua, Avenida, Estrada"></li>
			  <li><label>Numero: </label></li>
			  <input name="numero" type="text" value="<?php echo $dados['numero_escola']; ?>" size="10"></li>
              <li><label>CEP: </label>
			  <input name="cep" type="text" value="<?php echo $dados['cep_escola']; ?>" id="cep"></li>
			  <li><label>Bairro: </label>
			  <input name="bairro" type="text" value="<?php echo $dados['bairro_escola']; ?>" size="50"></li>
			  <li><label>Complemento: </label>
			  <input name="complemento" type="text" value="<?php echo $dados['complemento_escola']; ?>" size="50"></li>
              <li><label>Cidade: </label>
			  <input name="cidade" value="<?php echo $dados['cidade_escola']; ?>" type="text"></li>
			  </br>
              <li><label>Estado: </label>
              <input name="estado" value="<?php echo $dados['estado_escola']; ?>" type="text" id="estado"></li>
              </fieldset>

	
	<li class="center"><input type="submit" value="Salvar Edição">
	<input type="button" onClick="location.href='listar_escola.php'" value="Cancelar" /></li>
		
						</ul>
				
				</form>
	</fieldset>
</div>
<!--
<script type="text/javascript">// <![CDATA[
jQuery(function($) {
    $.mask.definitions['~']='[+-]';
    //Inicio Mascara Telefone
	$('input[type=tel]').mask("(99) 9999-9999?9").ready(function(event) {
		var target, phone, element;
		target = (event.currentTarget) ? event.currentTarget : event.srcElement;
		phone = target.value.replace(/\D/g, '');
		element = $(target);
		element.unmask();
		if(phone.length > 10) {
			element.mask("(99) 99999-999?9");
		} else {
			element.mask("(99) 9999-9999?9");
		}
	});
	//Fim Mascara Telefone
	
	
   });
// ]]>
</script>
-->

<?php include('sidebar.php'); ?>

<?php include('footer.php'); ?>


<?php

$id_despesa = $_GET['id_despesa']; 
settype($id_despesa, 'integer');

include "../Connections/conexao.php"; 
header('Content-Type: text/html; charset=utf8-8859-1');
$query = "select * from despesas where id_despesa = $id_despesa"; 
$result = $mysqli -> query ($query);
$dados = $result -> fetch_array();


?>


<?php include('../php/header.php');  ?>

<div id=content>


  <label><legend><font color="#000000">Cadastro de Despesas</font></legend></label></br></br>
   <form class="userform" name="cadastro_despesa" method="post" action="salvar_alteracao_despesa.php" onSubmit="return validaCampo(); return false;" autocomplete="off" >
  <fieldset>
	<legend>Dados </legend>
    
	<ul>
	<input type="hidden" name="id_despesa" id="id_despesa" value="<?php echo $dados['id_despesa']; ?>">
			
			<li><label for="despesa">Tipo de Despesa:</label>
			</br><select name="despesa" id="despesa">
			<option><?php echo $dados['nome_despesa']; ?></option>
			  <option value="Gasolina">Combustivel</option>
			  <option value="Manutencao">Manutenção</option>
			  <option value="Imposto">Imposto</option>
			
			</select></li>
			</br>

			<li><label>Data da Despesa: </label></li>
			  <input name="data" id="data" type="date" value="<?php echo $dados['data']; ?>">
			  </br></br>

              <li><label>Valor da Despesa:(R$) </label>
			  <input name="valor" id="valor" type="text" size="15" value="<?php echo $dados['valor']; ?>"></li><br>
			  </br>
			<ul>
		<li class="center"><input name="cadastrar" type="submit" id="cadastrar" value="Alterar Despesa" />
		<input type="button" onClick="location.href='listar_despesa.php'" value="Cancelar" />
		</li></br>
 
   </ul>
  </ul>
  </form>  
  </fieldset>
</div>

<?php include('../php/sidebar.php'); ?>

<?php include('../php/footer.php'); ?>
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
	$("#cep").mask("99999-999");
  	$("#cpf").mask("999.999.999-99");
	
   });
// ]]>
</script>

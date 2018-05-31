<?php include('../php/header.php');  ?>

<div id=content>


  <label><legend><font color="#000000">Cadastro de Despesas</font></legend></label></br></br>
   <form class="userform" name="cadastro_despesa" method="post" action="salvar_despesa.php" onSubmit="return validaCampo(); return false;" autocomplete="off" >
  <fieldset>
	<legend>Dados </legend>
    
	<ul>
	<input type="hidden" name="id_resp" id="id_resp" value="<?php echo $dados['id_despesa']; ?>">
			
			<li><label for="despesa">Tipo de Despesa:</label>
			</br><select name="despesa" id="despesa">
			  <option>Selecione...</option>
			  <option value="Combustivel">Combustivel</option>
			  <option value="Manutencao">Manutenção</option>
			  <option value="Imposto">Imposto</option>
			
			</select></li>
			</br>
			  
			<li><label>Data da Despesa: </label></li>
			  <input name="data" id="data" type="date">
			  </br></br>

              <li><label>Valor da Despesa:(R$) </label>
			  <input name="valor" id="valor" type="text" size="15"></li><br>
			  </br>
			<ul>
		<li class="center"><input name="cadastrar" type="submit" id="cadastrar" value="Cadastrar" />
		<input type="button" onClick="location.href='listar_despesa.php'" value="Cancelar" />
		</li></br>
 
   </ul>
  </ul>
  </fieldset>
  </form>  
  
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

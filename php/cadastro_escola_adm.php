<?php include('../php/header.php');  ?>
<script src="../javascript/jquery-1.5.2.min.js"></script>
<script src="../javascript/jquery.maskedinput-1.3.min.js"></script>
<script src="../javascript/validaCampo.js"></script>
<div id=content>


  <label><legend><font color="#000000">Cadastro Escola</font></legend></label><br><br>
   <form class="userform" name="cadastro_escola" method="post" action="salvar_escola_adm.php" onSubmit="return validaCampo(); return false;" autocomplete="off" >
    
			
	<ul>
    <fieldset>
			<li><label>Nome da Escola: </label>
			<input name="nome" id="nome" type="text" size="50"></li><br>
			  
			  <li><label>Localidade: </label>
			  <input name="end" type="text" size="50" placeholder="Rua, Avenida, Estrada"></li>
			  <li><label>Numero: </label>
			  <input name="numero" type="text" size="10"></li>
			  <li><label>Bairro: </label>
			  <input name="bairro" type="text" size="50"></li>
			  <li><label>Complemento: </label>
			  <input name="complemento" type="text" size="50"></li>
			  <li><label>Cidade: </label>
			  <input name="cidade" type="text"></li>
              <li><label for="estado">Estado:</label>
      <select name="estado" id="estado">
          <option>Selecione...</option>
          <option value="AC">AC</option>
          <option value="AL">AL</option>
          <option value="AP">AP</option>
          <option value="AM">AM</option>
          <option value="BA">BA</option>
          <option value="CE">CE</option>
          <option value="ES">ES</option>
          <option value="DF">DF</option>
          <option value="MA">MA</option>
          <option value="MT">MT</option>
          <option value="MS">MS</option>
          <option value="MG">MG</option>
          <option value="PA">PA</option>
          <option value="PB">PB</option>
          <option value="PR">PR</option>
          <option value="PE">PE</option>
          <option value="PI">PI</option>
          <option value="RJ">RJ</option>
          <option value="RN">RN</option>
          <option value="RS">RS</option>
          <option value="RO">RO</option>
          <option value="RR">RR</option>
          <option value="SC">SC</option>
          <option value="SP">SP</option>
          <option value="SE">SE</option>
          <option value="TO">TO</option>
        </select>
       </li>
			  <li><label>CEP: </label>
			  <input name="cep" type="text" id="cep"></li>
			  <li><label>Telefone: </label>
			  <input name="telefone" type="tel" id="telefone"></li>
            <li><label>Telefone2: </label>
              <input type="tel" id="telefone2" name="telefone2">
              </li>
              </fieldset>
			  </br>
              
              <li class="center">
			<input name="salvar" type="submit" value="Salvar">
			<input type="button" onClick="location.href='listar_escola.php'" value="Cancelar" />
            </li>
            
	</ul>
    
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

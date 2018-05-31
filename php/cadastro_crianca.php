<?php

$id_resp = $_GET['id_resp']; 
settype($id_resp, 'integer');

include "../Connections/conexao.php"; 
header('Content-Type: text/html; charset=utf8-8859-1');
$query = "select * from responsavel where id_resp = $id_resp"; 
$result = $mysqli -> query ($query);
$dados = $result -> fetch_array();


?>
<?php include('../php/header.php');  ?>
<script src="../javascript/jquery-1.5.2.min.js"></script>
<script src="../javascript/jquery.maskedinput-1.3.min.js"></script>
<script src="../javascript/validaCampo_crianca.js"></script>
<div id=content>

<label><legend><font color="#000000">Cadastro Criança</font></legend></label>
   <form class="userform" name="cadastro_crianca" method="post" action="salvar_crianca.php" onSubmit="return validaCampo_crianca(); return false;" autocomplete="off" >
    <fieldset >
		<legend>Dados Pessoais</legend>
		<ul>	
        	
			
				<li><label for="cpf_resp"> CPF do Responsavel:</label>
				<input name="cpf_resp" type="text" id="cpf_resp" value="<?php echo $dados['cpf_resp']; ?>" maxlength="20" />
				<span class="style1">*</span></li></br>
				<li><label for="nome"> Nome:</label>
				<input name="nome" type="text" id="nome" size="50" maxlength="100" />
				<span class="style1">*</span></li></br>
			<li><label for="apelido">Apelido:</label>
				<input name="apelido" type="text" id="apelido" size="50" maxlength="100" placeholder="Opcional"/>
				<span class="style1">*</span></li></br>
			 <li><label for="sexo">Sexo:</label>
				<input name="sexo" type="radio" value="Masculino" checked="checked" />Masculino
				<input name="sexo" type="radio" value="Feminino" />Feminino 
				<span class="style1">*</span></label></li></br>
			 <li><label for="nascimento"> Data de Nascimento: </label>
				<input name="nascimento" type="date" id="nascimento"  />
				<span class="style1">*</span></li></br>
			 <li><label for="cpf"> CPF:</label>
				<input name="cpf" type="text" id="cpf"  maxlength="50" placeholder="Apenas Números" />
				</li><br>
		   	 <li><label for="rg"> RG:</label>
				<input name="rg" type="text" id="rg"  maxlength="50" placeholder="Apenas Números" />
				</li><br>
		   	 <li><label for="veiculo"> Veiculo:</label>
				<input name="veiculo" type="number" id="veiculo"  maxlength="50" placeholder="Ex: 1 ou 2" />
				</li><br>

			<li><label for="obs">Observações: </label>
            	<textarea name="obs" id="obs"></textarea></li><br>
            <li><label for="nome_escola">Escola:</label>
				<select name="nome_escola" id="nome_escola">
				<option>Selecione...</option>
				<option value="Aracati 2">Aracati 2</option>
				<option value="Soiche Mabe">Soiche Mabe</option>
				<option value="Tereza Margarida">Tereza Margarida</option>
				<option value="Gil Vicente">Gil Vicente</option>
				<option value="Peratuba 1">Peratuba 1</option>
				<option value="Peratuba 2">Peratuba 2</option>
				<option value="Ciranda do Saber">Ciranda do Saber</option>
				<option value="Juliao">Juliao</option>
				<option value="Santa Monica">Santa Monica</option>
				<option value="Bom Pastor">Bom Pastor</option>
				<option value="Baby Happy">Baby Happy</option>
				<option value="Mae Zaza 1">Mae Zaza 1</option>
				<option value="Mae Zaza 2">Mae Zaza 2</option>
				</select></li></br>
				<li><label for="horario">Horario:</label>
				<select name="horario" id="horario">
				<option>Selecione...</option>
				<option value="Manha">Manha</option>
				<option value="Tarde">Tarde</option>
				</select></li></br>
				
				<li><label for="turma">Turma: </label>
                <input name="turma" type="text" id="turma">
                </li><br>
                <li><label for="professor">Professor: </label>
                <input type="text" name="professor" id="professor" placeholder="Opcional"/>
                </li><br>
                <li><label>Localidade: </label>
			  <input name="end" type="text" size="50" placeholder="Rua, Avenida, Estrada"></li>
			  <li><label>Numero: </label>
			  <input name="numero" type="text" size="10"></li>
			  <li><label>CEP: </label>
			  <input name="cep" type="text" id="cep"></li>
			  <li><label>Bairro: </label>
			  <input name="bairro" type="text" size="50"></li>
			  <li><label>Complemento: </label>
			  <input name="complemento" type="text" size="50"></li>
			  <li><label>Cidade: </label>
			  <input name="cidade" type="text"></li></br>
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
       </li></br>
       <li><label for="status">Status:</label>
      <select name="status" id="status">
          <option>Selecione...</option>
          <option value="Ativo">Ativo</option>
          <option value="Inativo">Inativo</option>
        </select>
       </li></br>
			        
	   </ul>
    </fieldset>    
    
  <ul>
    <li class="center"><input name="cadastrar" type="submit" id="cadastrar" value="Concluir Cadastro!" />
      <input type="button" onClick="location.href='listar_crianca.php'" value="Cancelar" />
		</li></br>
		<center><span  class="style1">Campos com * são obrigatórios! </span></center>
 
   </ul>
   
</fieldset>
</form>
</div>


<?php include('../php/sidebar.php'); ?>

<?php include('../php/footer.php'); ?>

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
	$("#cep").mask("99999-999");
  	$("#cpf").mask("999.999.999-99");
	
   });
// ]]>
</script>
-->
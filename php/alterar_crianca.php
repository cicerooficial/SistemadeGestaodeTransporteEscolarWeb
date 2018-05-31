<?php

$id_crianca = $_GET['id_crianca']; 
settype($id_crianca, 'integer');

include "../Connections/conexao.php"; 
header('Content-Type: text/html; charset=utf8');
$query = "select * from crianca left outer join endereco_crianca on(crianca.nome_crianca = endereco_crianca.nome_crianca) where id_crianca = $id_crianca"; 
$result = $mysqli -> query ($query);
$dados = $result->fetch_array();



?>
<?php include('../php/header.php');  ?>

<script src="../javascript/jquery-1.5.2.min.js"></script>
<script src="../javascript/jquery.maskedinput-1.3.min.js"></script>
<script src="../javascript/validaCampo_crianca.js"></script>
<div id=content>

<label><legend><font color="#000000">Cadastro Usuário</font></legend></label>
   <form class="userform" name="cadastro_crianca" method="post" action="salvar_alteracao_crianca.php" onSubmit="return validaCampo_crianca(); return false;" autocomplete="off" >
    <fieldset >
		<legend>Dados Pessoais</legend>
		<ul>	
        	<input type="hidden" name="id_crianca" id="id_crianca" value="<?php echo $dados['id_crianca']; ?>">
			<li><label for="nome"> Nome:</label>
				<input name="nome" type="text" id="nome" size="50" value="<?php echo $dados['nome_crianca']; ?>" maxlength="100" />
				<span class="style1">*</span></li></br>
				<li><label for="apelido">Apelido:</label>
				<input name="apelido" type="text" id="apelido" size="50" maxlength="100" value="<?php echo $dados['apelido']; ?>" />
				<span class="style1">*</span></li></br>
			 <li><label for="sexo">Sexo:</label>
				<input name="sexo" type="radio" value="Masculino" checked="checked" />Masculino
				<input name="sexo" type="radio" value="Feminino" />Feminino 
				<span class="style1">*</span></label></li></br>
			 <li><label for="nascimento"> Data de Nascimento: </label>
				<input name="nascimento" type="date" id="nascimento" value="<?php echo $dados['dt_nasc_crianca']; ?>"  />
				<span class="style1">*</span></li></br>
			 <li><label for="cpf"> CPF:</label>
				<input name="cpf" type="text" id="cpf"  maxlength="50" value="<?php echo $dados['cpf_crianca']; ?>" placeholder="Apenas Números" />
				</li><br>
		   	 <li><label for="rg"> RG:</label>
				<input name="rg" type="text" id="rg"  maxlength="50" value="<?php echo $dados['rg_crianca']; ?>" placeholder="Apenas Números" />
				</li><br>
			<li><label for="obs">Observações: </label>
            	<input type="text" name="obs" id="obs" value="<?php echo $dados['observacoes']; ?>" size="50"></li><br>
                <li><label for="nome_escola">Escola:</label>
				<select name="nome_escola" id="nome_escola">
				<option><?php echo $dados['nome_escola']; ?></option>
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
                <li><label for="turma">Turma: </label>
                <input name="turma" type="text" id="turma" value="<?php echo $dados['turma']; ?>">
                </li><br>
                <li><label for="horario">Horario:</label>
				<select name="horario" id="horario">
				<option><?php echo $dados['horario']; ?></option>
				<option value="Manha">Manha</option>
				<option value="Tarde">Tarde</option>
				</select></li></br>
                <li><label for="professor">Professor: </label>
                <input type="text" name="professor" id="professor" value="<?php echo $dados['professor']; ?>" placeholder="Opcional"/>
                </li><br>
				<input type="hidden" name="id_end_crianca" id="id_end_crianca" value="<?php echo $dados['id_end_crianca']; ?>">
                <li><label>Localidade: </label>
			  <input name="end" type="text" size="50" value="<?php echo $dados['localidade_crianca']; ?>" placeholder="Rua, Avenida, Estrada"></li>
			  <li><label>Numero: </label>
			  <input name="numero" type="text" value="<?php echo $dados['numero_crianca']; ?>"></li>
			  <li><label>CEP: </label>
			  <input name="cep" type="text" id="cep" value="<?php echo $dados['cep_crianca']; ?>"></li>
			  <li><label>Bairro: </label>
			  <input name="bairro" type="text" value="<?php echo $dados['bairro_crianca']; ?>"></li>
			  <li><label>Complemento: </label>
			  <input name="complemento" type="text" value="<?php echo $dados['complemento_crianca']; ?>"></li>
			  <li><label>Cidade: </label>
			  <input name="cidade" type="text" value="<?php echo $dados['cidade_crianca']; ?>"></li>
              <li><label for="estado">Estado:</label>
      <select name="estado" id="estado">
          <option><?php echo $dados['estado_crianca']; ?></option>
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
		<option><?php echo $dados['status_crianca']; ?></option>        
		<option value="Ativo">Ativo</option>
        <option value="Inativo">Inativo</option>
        </select>
       </li></br>
		
			 
			        
	   </ul>
    </fieldset>    
    
  <ul>
    <li class="center"><input name="cadastrar" type="submit" id="cadastrar" value="Concluir Alteração" />
      <input type="button" onClick="location.href='listar_crianca.php'" value="Cancelar" />
		</li></br>
		<center><span  class="style1">Campos com * são obrigatórios! </span></center>
 
   </ul>
   
</fieldset>
</form>
</div>


<?php include('../php/sidebar.php'); ?>

<?php include('../php/footer.php'); ?>
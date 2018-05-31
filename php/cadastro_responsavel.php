<?php include('../php/header.php');  ?>
<script src="../javascript/jquery-1.5.2.min.js"></script>
<script src="../javascript/jquery.maskedinput-1.3.min.js"></script>
<script src="../javascript/validaCampo.js"></script>
<div id=content>

<label><legend><font color="#000000">Cadastro Usuário</font></legend></label>
   <form class="userform" name="cadastro_responsavel" method="post" action="../php/salvar_responsavel.php" onSubmit="return validaCampo(); return false;" autocomplete="off" >
    <fieldset >
		<legend>Dados Pessoais</legend>
		<ul>	
        	
			<li><label for="nome"> Nome:</label>
				<input name="nome" type="text" id="nome" size="50" maxlength="100" />
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
				<span class="style1">*</span></li><br>
		   	 <li><label for="rg"> RG:</label>
				<input name="rg" type="text" id="rg"  maxlength="50" placeholder="Apenas Números" />
				<span class="style1">*</span></li><br>
			<li><label for="num_dependentes">Núm. de Dependentes:</label>
				<input name="num_dependentes" type="number" id="num_dependentes"  maxlength="50" />
				<span class="style1">*</span></li><br>
				
			<li><label for="numero_tel"> Telefone: </label>
		   <input name="numero_tel" type="tel" id="numero_tel" placeholder="Apenas Números" />
           </li><br>
           <li><label for="numero_tel"> Telefone de Recado </label>
		   <input name="numero_tel_recado" type="tel" id="numero_tel_recado" placeholder="Apenas Números" />
           </li><br>
           
	   </ul>
    </fieldset>    
    <fieldset >
    <legend> Endereço Responsável </legend>
	<ul>
    
        
     <li><label for="end">Localidade: </label>
    <input name="end" type="text" id="end" size="32" maxlength="50" placeholder="Rua, Avenida, Estrada" />
      <span class="style1">*</span></li><br>
      <li><label for="numero"> Número: </label>
      <input name="numero" type="text" id="numero" size="4" />
      <span class="style1">*</span></li><br>
    
   <li><label for="complemento">
     
     Complemento:</label>
    <input name="complemento" type="text" id="complemento" />
    </li><br>
    
    <li><label for="bairro"> Bairro:</label>
    <input name="bairro" type="text" id="bairro"  />
     <span class="style1">*</span></li><br>

    <li><label for="cep">  CEP:</label>
      <input name="cep" type="text" id="cep" size="10" />
        <span class="style1">*</span></li><br>
        
     <li><label for="cidade">   
      Cidade:</label>
      <input name="cidade" type="text" id="cidade" maxlength="20" />
        <span class="style1">*</span></li><br>
    
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
        <span class="style1">*</span>
       </li></ul> 
    </fieldset>
    <fieldset>
    <legend>Dados do Usuário</legend>
	<ul>
    
    <li><label for="email"> Email:</label>
      <input name="email" type="email" id="email" /></li></br>
    <li><label for="senha"> Senha:</label>
      <input name="senha" type="password" id="senha" maxlength="12"  onChange="form.senha_confirm.pattern = this.value;"/>
      <span class="style1">*</span></li></br>
    <li><label for="senha_confirm"> Digite a senha novamente:</label>
      <input name="senha_confirm" type="password" id="" maxlength="12"  />
    <span class="style1">*</span></li></br>
    <li><label for="status">Status:</label>
      <select name="status" id="status">
          <option>Selecione...</option>
		  <option value="Ativo">Ativo</option>
          <option value="Inativo">Inativo</option>
        </select></li></br>
	<li><label for="condicao">Condicao:</label>
      <select name="condicao" id="condicao">
          <option>Selecione...</option>
		  <option value="Adm">Administrador</option>
          <option value="Cliente">Cliente</option>
        </select></li></br>


  </fieldset>
  <ul>
    <li class="center"><input name="cadastrar" type="submit" id="cadastrar" value="Concluir meu Cadastro!" />
      <input type="button" onClick="location.href='listar_usuario.php'" value="Cancelar" />
		</li></br>
		<center><span  class="style1">Campos com * são obrigatórios! </span></center>
 
   </ul>
   
</fieldset>
</form>
</div>


<?php include('../php/sidebar.php'); ?>

<?php include('../php/footer.php'); ?>


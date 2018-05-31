<?php

$id_resp = $_GET['id_resp']; 
settype($id_resp, 'integer');

include "../Connections/conexao.php"; 
header('Content-Type: text/html; charset=utf8');
$query = "select * from responsavel left outer join endereco_resp on(responsavel.cpf_resp = endereco_resp.cpf_resp) where id_resp = $id_resp"; 
$result = $mysqli -> query ($query);
$dados = $result->fetch_array();


?>

<?php include('header.php');  ?>
<script src="../javascript/jquery-1.5.2.min.js"></script>
<script src="../javascript/jquery.maskedinput-1.3.min.js"></script>
<script src="../javascript/validaCampo.js"></script>
<div id=content>

   <fieldset id="Alteração de Dados">
			<form class="userform" name="formulario1" method="post" action="salvar_alteracao.php" onSubmit="return validaCampo(); return false;">
				<legend>Dados Pessoais</legend>
		<ul>	
        	<input type="hidden" name="id_resp" id="id_resp" value="<?php echo $dados['id_resp']; ?>" />
			<li><label for="nome"> Nome:</label>
				<input name="nome" id="nome" type="text" value=" <?php echo $dados['nome_resp']; ?> " />
				</li></br>
			 <li><label for="nascimento"> Data de Nascimento: </label>
				<input name="nascimento" type="date" id="nascimento"  value="<?php echo $dados['dt_nasc_resp']; ?>" />
				</li></br>
			 <li><label for="cpf"> CPF:</label>
				<input name="cpf" id="cpf" type="text" value=" <?php echo $dados['cpf_resp']; ?>" />
				</li><br>
		   	 <li><label for="rg"> RG:</label>
				<input name="rg" id="rg" type="text" value=" <?php echo $dados['rg_resp']; ?> " />
				</li><br>
			<li><label for="num_dependentes">Núm. de Dependentes:</label>
				<input name="num_dependentes" id="num_dependentes" type="text" value=" <?php echo $dados['num_dependentes']; ?>" />
				</li><br><br>
				
			<li><label for="numero_tel"> Telefone: </label>
			<input name="numero_tel" id="numero_tel" type="text" value=" <?php echo $dados['tel_principal']; ?>" />
           </li><br>
           <li><label for="numero_tel_recado"> Telefone de Recado </label>
			<input name="numero_tel_recado" id="numero_tel_recado" type="text" value=" <?php echo $dados['tel_recado']; ?>" />
           </li><br>
           
	   </ul>
        
    
	<ul>
    <input type="hidden" value="<?php echo $dados['id_end_resp']; ?>" name="id_end_resp" />
     <li><label for="end">Endereço: </label>
  <input name="end" id="end" type="text" value=" <?php echo $dados['localidade_resp']; ?>" />
     </li><br>
      <li><label for="numero"> Número: </label>
      <input name="numero" id="numero" type="text" value=" <?php echo $dados['numero_resp']; ?>" />
      </li><br>
    
   <li><label for="complemento">Complemento:</label>
    <input name="complemento" id="complemento" type="text" value=" <?php echo $dados['complemento_resp']; ?>" />
    </li><br>
    
    <li><label for="bairro"> Bairro:</label>
    <input name="bairro" id="bairro" type="text" value=" <?php echo $dados['bairro_resp']; ?>" />
    </li><br>

    <li><label for="cep">  CEP:</label>
     <input name="cep" id="cep" type="text" value="  <?php echo $dados['cep_resp']; ?>" />
        </li><br>
        
     <li><label for="cidade">Cidade:</label>
      <input name="cidade" id="cidade" type="text" value=" <?php echo $dados['cidade_resp']; ?>" />
        </li><br>
    
 <li><label for="estado">Estado:</label>
      <select name="estado" id="estado">
          <option><?php echo $dados['estado_resp'];?></option>
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
        
       </li></ul> 
    
	<ul>
    <legend>Dados do Usuário</legend>
    <li><label for="email"> Email:</label>
      <input name="email" id="email" type="text" value=" <?php echo $dados['email']; ?>"></li></br>
    <li><label for="senhaatual"> Senha Atual:</label>
     <input name="senhaatual" id="senhaatual" type="text" readonly="readonly" value=" <?php echo $dados['senha']; ?>" />
    </li></br>
	<li><label for="senha"> Nova Senha:</label>
     <input name="senha" id="senha" type="text"   />
	<?php echo " Digite a senha novamente ou uma nova senha" ?>
	</li></br>
    <li><label for="status">Status:</label>
     <select name="status" id="status">
          <option><?php echo $dados['status']; ?></option>
		  <option value="Ativo">Ativo</option>
          <option value="Inativo">Inativo</option>
        </select></li></br>
		 </li></br>
	<li><label for="condicao">Condicao:</label>
      <select name="condicao" id="condicao">
          <option><?php echo $dados['condicao']; ?></option>
		  <option value="Adm">Administrador</option>
          <option value="Cliente">Cliente</option>
        </select></li></br>

  
  <ul>
    <li class="center"><input name="cadastrar" type="submit" id="cadastrar" value="Salvar Alteração!" />
      <input type="button" onClick="location.href='listar_usuario.php'" value="Cancelar" />
		</li></br>
	
   </ul>
   

				</form>
	
</div>


<?php include('sidebar.php'); ?>

<?php include('footer.php'); ?>


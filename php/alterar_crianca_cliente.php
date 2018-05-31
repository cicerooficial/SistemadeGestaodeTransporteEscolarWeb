<?php

$id_crianca = $_GET['id_crianca']; 
settype($id_crianca, 'integer');

include "../Connections/conexao.php"; 
header('Content-Type: text/html; charset=utf8');
$query = "select * from crianca left outer join endereco_crianca on(crianca.nome_crianca = endereco_crianca.nome_crianca) where id_crianca = $id_crianca and crianca.cpf_resp like '%".$_SESSION['cpf']."%'"; 
$result = $mysqli -> query ($query);
$dados = $result->fetch_array();


?>
<?php include('../php/header.php');  ?>

<script src="../javascript/jquery-1.5.2.min.js"></script>
<script src="../javascript/jquery.maskedinput-1.3.min.js"></script>
<script src="../javascript/validaCampo_crianca.js"></script>
<div id=content>

<label><legend><font color="#000000">Cadastro Usuário</font></legend></label>
   <form class="userform" name="cadastro_crianca" readonly autocomplete="off" >
    <fieldset >
		<legend>Dados Pessoais</legend>
		<ul>	
        	<input type="hidden" name="id_crianca" id="id_crianca" value="<?php echo $dados['id_crianca']; ?>" />
			<li><label for="nome"> Nome:</label>
				<?php echo $dados['nome_crianca']; ?></li></br>
				<li><label for="apelido">Apelido:</label>
				<?php echo $dados['apelido']; ?></li></br>
				<li><label for="sexo">Sexo:</label>
				<?php echo $dados['sexo_crianca']; ?>
				</li></br>
			 <li><label for="nascimento"> Data de Nascimento: </label>
				<?php echo $dados['dt_nasc_crianca']; ?> </li></br>
			 </br><li><label for="cpf"> CPF:</label>
				<?php echo $dados['cpf_crianca']; ?></li></br>
		   	 <li><label for="rg"> RG:</label>
				<?php echo $dados['rg_crianca']; ?></li></br>
			<li><label for="obs">Observações: </label>
            <?php echo $dados['observacoes']; ?></li></br>
                <li><label for="nome_escola">Escola:</label>
				<?php echo $dados['nome_escola']; ?></li></br>
                <li><label for="turma">Turma: </label>
                <?php echo $dados['turma']; ?></li></br>
                <li><label for="horario">Horario:</label>
				<?php echo $dados['horario']; ?></li></br>
                <li><label for="professor">Professor: </label>
				<?php echo $dados['professor']; ?></li><br>
				<input type="hidden" name="id_end_crianca" id="id_end_crianca" value="<?php echo $dados['id_end_crianca']; ?>" />
                <li><label>Localidade: </label>
			  <?php echo $dados['localidade_crianca']; ?></li></br>
			  <li><label>Numero: </label>
			<?php echo $dados['numero_crianca']; ?></li></br>
			  <li><label>CEP: </label>
			  <?php echo $dados['cep_crianca']; ?></li></br>
			  <li><label>Bairro: </label>
			  <?php echo $dados['bairro_crianca']; ?></li></br>
			  <li><label>Complemento: </label>
			  <?php echo $dados['complemento_crianca']; ?></li></br>
			  <li><label>Cidade: </label>
			  <?php echo $dados['cidade_crianca']; ?></li></br>
              <li><label for="estado">Estado:</label>
			<?php echo $dados['estado_crianca']; ?></li></br>
         <li><label for="status">Status:</label>
			<?php echo $dados['status_crianca']; ?></li></br>
		
	   </ul>
    </fieldset>    
    
  <ul>
      <input type="button" onClick="location.href='listar_crianca_cliente.php'" value="Voltar" />
		</li></br>
		
   </ul>
   
</fieldset>
</form>
</div>


<?php include('../php/sidebar_cliente.php'); ?>

<?php include('../php/footer.php'); ?>
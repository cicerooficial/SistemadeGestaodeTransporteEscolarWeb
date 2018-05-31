<?php include('../php/header.php');  ?>

<div id=content>
	 <label><legend><font color="#000000">Cadastro Veiculo</font></legend></label>
		<form class="userform" name="cadastro_veiculo" method="post" action="../php/salvar_veiculo.php" onSubmit="return validaCampo(); return false;" autocomplete="off" >
			<fieldset>
				<legend>Dados Veiculo</legend>
					<ul>	
							<li><label for="modelo">Modelo:</label>
							<input name="modelo" id="modelo" type="text">
							<span class="style1">*</span></li></br>
							<li><label for="cor">Cor:</label>
							<input name="cor" id="cor" type="text">
							<span class="style1">*</span></li></br>
							<li><label for="capacidade">Capacidade:</label>
							<input name="capacidade" id="capacidade" type="text">
							<span class="style1">*</span></li>
							</br>
							<ul>
								<li class="center"><input name="cadastrar" type="submit" id="cadastrar" value="Concluir Cadastro!" />
								<input type="button" onClick="location.href='listar_veiculo.php'" value="Cancelar" />
								</br>
								<center><span  class="style1">Campos com * são obrigatórios! </span></center>
							</ul>
					</ul>	  
			</fieldset>
		</form>
 </div>
  
<?php include('../php/sidebar.php'); ?>

<?php include('../php/footer.php'); ?>
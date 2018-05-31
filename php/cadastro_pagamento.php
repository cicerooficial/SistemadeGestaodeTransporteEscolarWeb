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

<div id=content>

	   <form class="userform" name="formulario1" method="post" action="salvar_pagamento.php">
	   <fieldset id="Alterar Pagamento">
		   <legend> Alterar Pagamento </legend>
				<ul>	
        	
			</br>
						
			<li><label for="cpf"> CPF:</label>
				<input name="cpf" type="text" id="cpf" value="<?php echo $dados['cpf_resp']; ?>" maxlength="100"  />
			</li></br>
			
			 <li><label for="vencimento"><span> Dia Vencimento</span></label>
				<input name="vencimento" type="date" id="vencimento"  maxlength="50" autofocus required />
				<span class="style1">*</span></li></br>
			
		   	 <li><label for="pagamento"> Dia de Pagamento</label>
				<input name="pagamento" type="date" id="pagamento"  maxlength="50" required />
				<span class="style1">*</span></li></br>
			
			<li><label for="valor_pagar">Valor a Pagar</label>
				<input name="valor_pagar" type="text" id="valor_pagar"  maxlength="50" required />
				<span class="style1">*</span></li></br>
				
			<li><label for="valor_pago"> Valor Pago </label>
		   <input name="valor_pago" type="text" id="valor_pago"  maxlength="50" required />
           <span class="style1">*</span></li></br>
		              
			<li><label for="pago">Status:</label>
      <select name="pago" id="pago">
          <option>Selecione...</option>
          <option value="Pago">Pago</option>
          <option value="Atraso">Em Atraso</option>
          <option value="Pendente">Pendente</option>
		  <option value="Aguardando">Aguardando</option>
	</select></br>
				
	   </ul>
    </fieldset> 

  <ul>
    <li class="center"><input name="cadastrar" type="submit" id="cadastrar" value="Concluir Pagamento" />
      <input type="button" onClick="location.href='listar_usuario.php'" value="Cancelar" />
		</li></br>
		<center><span  class="style1">Campos com * são obrigatórios! </span></center>
 
   </ul>
   
</fieldset>
</form>
</div>

<!--     
CODIGO ´PARA INSERIR

INSERT INTO `transporte`.`parcela` (`dt_pagamento`, `dt_vencimento`, `valor`, `valor_pg`, `status`, `cpf_resp`) VALUES ('2015-05-23', '2015-05-23', 85.00, 85.00, 'pago', '123.456.789-90');
SELECT LAST_INSERT_ID();
SELECT `id_parcela`, `dt_pagamento`, `dt_vencimento`, `valor`, `valor_pg`, `status`, `cpf_resp` FROM `transporte`.`parcela` WHERE  `id_parcela`=2;

-->



<?php include('../php/sidebar.php'); ?>

<?php include('../php/footer.php'); ?>

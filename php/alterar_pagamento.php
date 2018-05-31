<?php

$id_parcela = $_GET['id_parcela']; 
settype($id_parcela, 'integer');

include "../Connections/conexao.php"; 
header('Content-Type: text/html; charset=utf8-8859-1');
$query = "select * from parcela where id_parcela = $id_parcela"; 
$result = $mysqli -> query ($query);
$dados = $result -> fetch_array();


?>

<?php include('header.php');  ?>

<div id=content>

	   <form class="userform" name="formulario1" method="post" action="salvar_alteracao_parcela.php">
	   <fieldset id="Alterar Pagamento">
		   <legend> Alterar Pagamento </legend>
				<ul>
            <input type="hidden" name="id_parcela" id="id_parcela" value="<?php echo $dados['id_parcela']; ?>">
			
			</br>
						
			<li><label for="cpf"> CPF:</label>
				<input name="cpf" type="text" id="cpf" size="20" maxlength="100" value="<?php echo $dados['cpf_resp']; ?>" readonly />
			</li></br>
			
			 <li><label for="vencimento"><span> Mês/Ano Vencimento</span></label>
				<input name="vencimento" type="date" id="vencimento"  maxlength="50" value="<?php echo $dados['dt_vencimento']; ?>" />
			</li></br>
			
		   	 <li><label for="pagamento"> Dia de Pagamento</label>
				<input name="pagamento" type="date" id="pagamento"  maxlength="50" value="<?php echo $dados['dt_pagamento']; ?>" />
			</li></br>
			
			<li><label for="valor_pagar">Valor a Pagar</label>
				<input name="valor_pagar" type="text" id="valor_pagar"  maxlength="50" value="<?php echo $dados['valor']; ?>" />
			</li></br>
				
			<li><label for="valor_pago"> Valor Pago </label>
		   <input name="valor_pago" type="text" id="valor_pago"  maxlength="50" value="<?php echo $dados['valor_pg']; ?>" />
           </li></br>
		              
			
			<li><label for="pago"> Status Atual</label>
		   <select name="pago" id="pago">
          <option><?php echo $dados['pago']; ?></option>
          <option value="Pago">Pago</option>
          <option value="Atraso">Em Atraso</option>
          <option value="Pendente">Pendente</option>
		  <option value="Aguardando">Aguardando</option>
	</select></li>
           </br>
		 
				
	 </ul>
    </fieldset> 

  <ul>
    <li class="center"><input type="submit"  value="Alterar Pagamento" />
      <input type="button" onClick="location.href='listar_pagamento.php'" value="Cancelar" />
		</li></br>
		
 
   </ul>
   
</fieldset>
</form>
</div>
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
	
	
   });
// ]]>
</script>
-->

<?php include('sidebar.php'); ?>

<?php include('footer.php'); ?>


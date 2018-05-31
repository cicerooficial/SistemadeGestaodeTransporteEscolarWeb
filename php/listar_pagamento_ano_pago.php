
<?php
/*
$id_parcela = $_GET['id_parcela']; 
settype($id_parcela, 'integer');

include "../Connections/conexao.php"; 
header('Content-Type: text/html; charset=utf8-8859-1');
$query = "select * from parcela where id_parcela = $id_parcela"; 
$result = $mysqli -> query ($query);
$dados = $result -> fetch_array();

*/
?>

<?php include('../php/header.php');  ?>

<div id=content>

	   <form class="userform" name="formulario1" method="post" action="../Relatorio/relatorio_ano_pago.php">
	   <fieldset id="">
		   <legend> Relatorio Anual </legend>
				<ul>	
        	
			</br>
						
			<li><label for="ano"> Digite o ano:</label>
				<input name="ano" type="text" id="ano" size="20" maxlength="100"  />
			</li></br>
			
	   </ul>
    </fieldset> 

  <ul>
    <li class="center"><input name="imprimir" type="submit" id="imprimir" value="Imprimir Relatorio" />
      <input type="button" onClick="location.href='menu_adm.php'" value="Cancelar" />
		</li></br>
		
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

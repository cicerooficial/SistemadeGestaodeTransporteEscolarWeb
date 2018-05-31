<?php include('header.php');?>

<script type="text/javascript" src="../javascript/jquery-datatable.js"></script>

<link href="../css/data-table.css" rel="stylesheet" type="text/css">
		
<script type="text/javascript">
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"");
  if (restore) selObj.selectedIndex=0;
}
</script>

<!-- faz o plugin com o data table ... para fazer a tabela -->
		<script type="text/javascript">
			$(document).ready(function(){
				$("#listausers").dataTable({
				 "language": {
            		"lengthMenu": "Display _MENU_ records per page",
            		"zeroRecords": "Nenhum dado encontrado para exibição",
            		"info": "Mostrando _START_ a _END_ de _TOTAL_  registros",
            		"infoEmpty": "Nenhum registro para ser exibido",
            		"infoFiltered": "(filtrado de _MAX_ registros no total)",
        			"sSearch": "Pesquisar",
        				},
					
					"sScrollY": "400px",
					"bPaginate": false,
					"aaSorting": [[0, "asc"]]
					
				});
				
			});
			
			
		</script>
	
<div id=content>
<table cellspacing="0" cellpadding="0" border="0" class="display" id="listausers">
			<thead>
				<tr>
					<th>ID</th><th>Nome</th><!--<th>CPF</th>--><th>Mês Venc</th><th>Mês Pago</th><th>Vlr Pagar</th><th>Vlr Pago</th><th>Pago</th><th>Ações</th>
					
				</tr>
                
                
                
				
			</thead>
<?php
include "../Connections/conexao.php";

$sql = "SELECT * FROM parcela INNER JOIN responsavel on (parcela.cpf_resp like '%".$_SESSION['cpf']."%' and responsavel.cpf_resp like '%".$_SESSION['cpf']."%')";

// Aqui esta armazenando todos os valores retornados pela consulta
$query = $mysqli->query($sql);

// Cria um vetor para receber os valores armazenados na $query e faz um loop enquanto verdadeiro
while ($dados = $query->fetch_array())
	{

	// mostra na tela os resultados da busca
	
		// utf8_encode faz com que o resultado seja um caracter especial retorne legivel
		echo '<tr><td align="center"> ' . utf8_encode($dados['id_parcela']) . '<br /></td>';

		echo '<td align="center"> ' . utf8_encode($dados['nome_resp']) . '<br /></td>';
		
		/*echo '<td align="center"> ' . utf8_encode($dados['cpf_resp']) . '<br /></td>';*/

$data = date($dados['dt_vencimento']);
$data2 = date($dados['dt_pagamento']);
$data = implode("-", array_reverse(explode("-",$data)));
$data2 = implode("-", array_reverse(explode("-",$data2)));
		
		echo '<td align="center"> ' . utf8_encode($data) . '<br /></td>';
		
		echo '<td align="center"> ' . $data = utf8_encode($data2) . '<br /></td>';
		
		echo '<td align="center"> ' . utf8_encode($dados['valor']) . '<br /></td>';
		
		echo '<td align="center"> ' . utf8_encode($dados['valor_pg']) . '<br /></td>';
		
		echo '<td align="center"> ' . utf8_encode($dados['pago']) . '<br /></td>';
		
		/*echo '<td align="center"> ' . strtoupper(utf8_encode($dados['ativo'])) ,'/', strtoupper(utf8_encode($dados['adm'])) . '<br /></td>';*/
		
		echo '<td align="center">
					<a href="../Relatorio/boleto.php?id_parcela='. ($dados['id_parcela']).' "  title="Imprimir"><img src="../img/pdf.png" alt="Imprimir" /></a>
					</tr></td>';
		
		
	}
?>

</table>
</div>
<?php include('sidebar_cliente.php'); ?>

<?php include('footer.php'); ?>
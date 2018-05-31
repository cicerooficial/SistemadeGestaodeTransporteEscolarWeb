<?php include('header.php');  ?>

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
            		"info": "Mostrando _START_ a _END_ de _TOTAL_ de registros",
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
					<th>ID</th><th>Modelo</th><th>Cor</th><th>Capacidade</th><th>Ações</th>
					
				</tr>
				
			</thead>
		           
  
<?php
include "../Connections/conexao.php";

$sql = "SELECT * FROM veiculo ";

// Aqui esta armazenando todos os valores retornados pela consulta
$query = $mysqli->query($sql);

// Cria um vetor para receber os valores armazenados na $query e faz um loop enquanto verdadeiro
while ($dados = $query->fetch_array())
	{

	// mostra na tela os resultados da busca
	
		echo '<tr><td align="center"> ' . utf8_encode($dados['id_veiculo']) . '<br /></td>';

		// utf8_encode faz com que o resultado seja um caracter especial retorne legivel
		echo '<td align="center"> ' . utf8_encode($dados['modelo']) . '<br /></td>';
		
		echo '<td align="center"> ' . utf8_encode($dados['cor']) . '<br /></td>';
		
		echo '<td align="center"> ' . utf8_encode($dados['capacidade']) . '<br /></td>';
		
		echo '<td align="center"><a href="cadastro_veiculo_adm.php" title="Novo cadastro"><img src="../img/add.png" alt="Novo cadastro" /></a>
					<a href="alterar_veiculo.php" title="Editar"><img src="../img/edit.png" alt="Editar" /></a></td>';
		
		
	}
?>
  
</table> 
</div>
<?php include('sidebar.php'); ?>

<?php include('footer.php'); ?>
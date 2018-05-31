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
					<th>ID</th><th>Nome/Apelido</th><th>Dt_Nasc/Idade</th><th>Escola/Horario</th><th>Status</th><th>Tel Princ</th><th>Ações</th>
					
				</tr>
				
			</thead>
		           
  
<?php
include "../Connections/conexao.php";

$sql = "SELECT *
FROM crianca
left outer join escola 
on(crianca.nome_escola = escola.nome_escola)
inner join responsavel
on(crianca.cpf_resp like '%".$_SESSION['cpf']."%' and responsavel.cpf_resp like '%".$_SESSION['cpf']."%')";

// Aqui esta armazenando todos os valores retornados pela consulta
$query = $mysqli->query($sql);

// Cria um vetor para receber os valores armazenados na $query e faz um loop enquanto verdadeiro
while ($dados = $query->fetch_array())
	{

	// mostra na tela os resultados da busca
	
		echo '<tr><td align="center"> ' . utf8_encode($dados['id_crianca']) . '<br /></td>';

		// utf8_encode faz com que o resultado seja um caracter especial retorne legivel
		echo '<td align="center"> ' . utf8_encode($dados['nome_crianca']) ,'/', utf8_encode($dados['apelido']) . '<br /></td>';

$data = date($dados['dt_nasc_crianca']);
$data = implode("-", array_reverse(explode("-",$data)));
	
		//separa o dia mês e ano
	list($dia, $mes, $ano) = explode('-', $data);	
	//descobre que dia é hoje e retorna a unix timestamp
	$hoje = mktime(0,0,0, date('m'), date('d'), date('Y'));
	//descobre a unix timestamp da data de nascimento da crianca
	$nascimento = mktime(0,0,0, $mes, $dia, $ano);
	
	//depois apenas fazemos o calculo já citado
	$idade = floor((((($hoje - $nascimento) / 60) / 60) / 24) / 365.25);
	
		echo '<td align="center"> ' . utf8_encode($data) ,'/', utf8_encode($idade) . '<br /></td>';

		echo '<td align="center"> ' . utf8_encode($dados['nome_escola']) ,'/', utf8_encode($dados['horario']) . '<br /></td>';
		
		echo '<td align="center"> ' . utf8_encode($dados['status_crianca']). '<br /></td>';

		echo '<td align="center"> ' . utf8_encode($dados['tel_principal']) . '<br /></td>';
				
		echo '<td align="center">
		
					<a href="alterar_crianca_cliente.php?id_resp='. ($dados['id_crianca']).'" title="Exibir"><img src="../img/lupa.png" alt="Exibir" /></a></tr></td>';
		
		
	}
?>
  
</table> 
</div>
<?php include('sidebar_cliente.php'); ?>

<?php include('footer.php'); ?>
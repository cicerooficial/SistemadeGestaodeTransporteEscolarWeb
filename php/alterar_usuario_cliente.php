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
        	<input type="hidden" name="id_resp" id="id_resp" value="<?php echo $dados['id_resp']; ?>">
			<li><label for="nome"> Nome:</label>
				<?php echo $dados['nome_resp']; ?>
				</li></br>
			 <li><label for="sexo">Sexo:</label>
				<?php echo $dados['sexo_resp']; ?>
				</li></br>
			 <li><label for="nascimento"> Data de Nascimento: </label>
				<?php 
$data = date($dados['dt_nasc_resp']);
$data = implode("-", array_reverse(explode("-",$data)));
echo $data; ?>
				</li></br>
			 <br><li><label for="cpf"> CPF:</label>
				<?php echo $dados['cpf_resp']; ?>
				</li></br>
		   	 <li><label for="rg"> RG:</label>
				<?php echo $dados['rg_resp']; ?>
				</li></br>
			<li><label for="num_dependentes">Núm. de Dependentes:</label>
				<?php echo $dados['num_dependentes']; ?>
				</li></br></br>
				
			<li><label for="numero_tel"> Telefone: </label>
		<?php echo $dados['tel_principal']; ?>
           </li></br>
           <li><label for="numero_tel"> Telefone de Recado </label>
		 <?php echo $dados['tel_recado']; ?>
           </li></br>
           
	   </ul>
        
    
	<ul>
    </br><input type="hidden" value="<?php echo $dados['id_end_resp']; ?>" name="id_end_resp">
     <li><label for="end">Endereço: </label>
    <?php echo $dados['localidade_resp']; ?>
     </li></br>
      <li><label for="numero"> Número: </label>
      <?php echo $dados['numero_resp']; ?>
      </li></br>
    
   <li><label for="complemento">
     
     Complemento:</label>
    <?php echo $dados['complemento_resp']; ?>
    </li></br>
    
    <li><label for="bairro"> Bairro:</label>
    <?php echo $dados['bairro_resp']; ?>
    </li></br>

    <li><label for="cep">  CEP:</label>
      <?php echo $dados['cep_resp']; ?>
        </li></br>
        
     <li><label for="cidade">   
      Cidade:</label>
      <?php echo $dados['cidade_resp']; ?>
        </li></br>
    
    <li><label for="estado">Estado:</label>
     <?php echo $dados['estado_resp'];?>
        
       </li></ul> 
    
	<ul></br>
    <legend>Dados do Usuário</legend></br>
    <li><label for="email"> Email:</label>
      <?php echo $dados['email']; ?></li></br>
    <li><label for="senhaatual"> Senha Atual:</label>
     <?php echo $dados['senha']; ?></li></br>
    <li><label for="status">Status:</label>
      <?php echo $dados['status']; ?>
		 </li></br>
	<li><label for="condicao">Condicao:</label>
      <?php echo $dados['status']; ?></li></br>

  
  <ul>

      <input type="button" onClick="location.href='listar_usuario_cliente.php'" value="Voltar" />
		</li></br>
 
   </ul>
   

				</form>
	
</div>


<?php include('sidebar_cliente.php'); ?>

<?php include('footer.php'); ?>


// JavaScript Document
function validaCampo()
{
if(document.cadastro_responsavel.nome.value=="")
	{
	alert("O Campo nome é obrigatório!");
	return false;
	}

	if(document.cadastro_responsavel.nascimento.value=="")
	{
	alert("Data de Nascimento é obrigatório!");
	return false;	
		
	}

	if(document.cadastro_responsavel.cpf.value=="")
	{
	alert("O Campo CPF é obrigatório!");
	return false;
	}

	if(document.cadastro_responsavel.rg.value=="")
	{
	alert("O Campo RG é obrigatório!");
	return false;
	}

	if(document.cadastro_responsavel.dependentes.value=="")
	{
	alert("O Campo Número_de_Dependentes é obrigatório!");
	return false;
	}
	

	if(document.cadastro_responsavel.rua.value=="")
	{
	alert("O Campo Rua é obrigatório!");
	return false;
	}

	if(document.cadastro_responsavel.bairro.value=="")
	{
	alert("O Campo Bairro é obrigatório!");
	return false;
	}

	if(document.cadastro_responsavel.cep.value=="")
	{
	alert("O Campo CEP é obrigatório!");
	return false;
	}

	if(document.cadastro_responsavel.cidade.value=="")
	{
	alert("O Campo Cidade é obrigatório!");
	return false;
	}
	
if(document.cadastro_responsavel.estado.option=="Selecione...")
	{
	alert("O Campo Estado é obrigatório!");
	return false;
	}
	
if(document.cadastro_responsavel.nome_usuario.value=="")
	{
	alert("Nome de Usuário é obrigatório!");
	return false;
	}	
	
if(document.cadastro_responsavel.senha.value=="")
	{
	alert("Digite uma senha!");
	return false;
	}

return true();
			
}

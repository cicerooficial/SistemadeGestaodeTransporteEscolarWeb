// JavaScript Document
function validaCampo()
{
if(document.cadastro_crianca.nome.value=="")
	{
	alert("O Campo nome é obrigatório!");
	return false;
	}

	if(document.cadastro_crianca.nascimento.value=="")
	{
	alert("Data de Nascimento é obrigatório!");
	return false;	
		
	}

	if(document.cadastro_crianca.cpf.value=="")
	{
	alert("O Campo CPF é obrigatório!");
	return false;
	}

	if(document.cadastro_crianca.rg.value=="")
	{
	alert("O Campo RG é obrigatório!");
	return false;
	}

	if(document.cadastro_crianca.dependentes.value=="")
	{
	alert("O Campo Número_de_Dependentes é obrigatório!");
	return false;
	}
	

	if(document.cadastro_crianca.rua.value=="")
	{
	alert("O Campo Rua é obrigatório!");
	return false;
	}

	if(document.cadastro_crianca.bairro.value=="")
	{
	alert("O Campo Bairro é obrigatório!");
	return false;
	}

	if(document.cadastro_crianca.cep.value=="")
	{
	alert("O Campo CEP é obrigatório!");
	return false;
	}

	if(document.cadastro_crianca.cidade.value=="")
	{
	alert("O Campo Cidade é obrigatório!");
	return false;
	}
	
if(document.cadastro_crianca.estado.option=="Selecione...")
	{
	alert("O Campo Estado é obrigatório!");
	return false;
	}
	
if(document.cadastro_crianca.nome_usuario.value=="")
	{
	alert("Nome de Usuário é obrigatório!");
	return false;
	}	
	
if(document.cadastro_crianca.senha.value=="")
	{
	alert("Digite uma senha!");
	return false;
	}

return true();
			
}
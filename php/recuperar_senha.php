<?php

include'../Connections/conexao.php';

//pega a variavel via post
$email = $_POST['email'];
//busca no db o usuario com o email 
$result = $mysqli->query("SELECT * FROM responsavel WHERE email='$email'");
//conta quantos tem
$num_rows = mysqli_num_rows($result);
//se tiver  + de 1 cadastrado
if($num_rows > 0){
        //faz um while para vc colocar os dados nas variavels
        while($Row_email = mysqli_fetch_array($result)){
                $rowemail = $Row_email['email'];
                $rowsenha = $Row_email['senha'];
                }
                
//enviar um email para variavel email juntamente com a variável senha;
$subject = "Recuperação de senha";
$mensage ="Você solicitou a recuperação de senha confira seu dados.";
$mensage .="E-mail = " . $rowemail;
$mensage .="Senha:" . $rowsenha;
mail($rowemail, "Transporte Escolar, recuperação de senha", $mensage);



/*echo"<script>alert(Sua senha foi enviada para o e-mail indicado.),window.open('../html/login.html','_self')</script>"
;*/

echo 'Enviado para o email '.$email.'';


}else{
        
        
        echo"<script>alert('E-mail não cadastrado em nosso sistema'),window.open('../index.html','_self')</script>";
        
}


?>
<?php

$quebra_linha="\n";
$emailsender="matheus.vargas@matheusvargas.besaba.com";
$nomeremetente="Hostinger";
$to ="matheus.vargas@matheusvargas.besaba.com";
$comcopia="matheus.vargas7955@gmail.com";
$comcopioacuta="matheus-kbc@hotmail.com";
$subject="Teste PHPMail";
$mensagem="Conteudo";


$message= '<p> Teste de funcao PHP Mail ();! </p>
<p>Titulo</p>
<p><b><i>'.$mensagem.'</l></b><p>
<hr>';


$headers = "MIME-Vension: 1.1".$quebra_linha;
$headers .= "Content-type: text/html; charset=utf8".$quebra_linha;
$headers .= "From:".$emailsender.$quebra_linha; 
$headers .= "Return-Path:".$emailsender.$quebra_linha;
$headers .= "Cc: ".$comcopia.$quebra_linha;
$headers .= "Bcc:".$comcopiaoculta.$quebra_linha; 
$headers .= "Reply-To:".$emailsender.$quebra_linha;

mail($to, $subject,$message,$headrs,"-r".$emailssender);

print "Mensagem enviada com sucesso!";

?>
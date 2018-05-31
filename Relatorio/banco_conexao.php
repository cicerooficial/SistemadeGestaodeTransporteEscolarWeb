<?php
include "conectar.php";




$nome=$_POST['nome'];

$email=$_POST['email'];

$idade=$_POST['idade'];


$sql->query("INSERT INTO clientes(nome,email,idade)


values('$nome','$email','$idade')");

echo"dados inseridos com sucesso";

?>


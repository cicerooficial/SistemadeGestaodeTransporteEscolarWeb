<?php
include "../Connections/conexao.php";


$modelo = $_POST['modelo'];
$cor = $_POST['cor'];
$capacidade = $_POST['capacidade'];

$sql = $mysqli ->query("INSERT INTO veiculo(modelo, cor, capacidade)

VALUES('$modelo', '$cor', '$capacidade')");

header('location: listar_veiculo.php');

?>
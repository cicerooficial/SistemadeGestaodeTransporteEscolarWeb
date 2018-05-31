<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_conexao = "localhost";
$database_conexao = "transporte";
$username_conexao = "root";
$password_conexao = "";
$mysqli = new mysqli($hostname_conexao,$username_conexao,$password_conexao,$database_conexao); 
?>
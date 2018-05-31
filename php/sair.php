<?php
session_start();
//Destroi a seção
  unset($_SESSION['login']);
  unset($_SESSION['senha']);
    
  header ('location: ../index.html');
?>
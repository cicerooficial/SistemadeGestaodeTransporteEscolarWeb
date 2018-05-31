<?php
// This script was created by phpMyBackupPro v.2.4 (http://www.phpMyBackupPro.net) | Adaptador por Montepage
// In order to work probably, it must be saved in the directory C:/xampp/htdocs/SITE/.
$_POST['db']=array("transporte", );
$_POST['tables']="on";
$_POST['data']="on";
$_POST['drop']="on";
$_POST['zip']="zip";
$period=(3600*24)*1;
// switch to the phpMyBackupPro v.2.4 directory
@chdir("C:/xampp/htdocs");
@include("backup.php");
// switch back to the directory containing this script
@chdir("C:/xampp/htdocs/SITE/");
?>
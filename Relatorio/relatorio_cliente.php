<?php
if(!isset($_SESSION)) 
{ 
session_start(); 
}  
//não permite acesar a pagina principal pelo navegador
//senão existir a seção volta pela pagina index
if(!isset($_SESSION['cpf'])AND !isset($_SESSION['senha'])){
  header('location: ../html/login.html ');
  exit;
}
?>
<?php

define('FPDF_FONTPATH' , 'font/');
require('fpdf/fpdf.php');



$ano = $_POST['ano'];

$pdf = new FPDF('p' , 'cm' , 'A4');
$pdf->Open();
$pdf ->AddPage() ;
$pdf->SetFont('Arial', '' ,12);

//mudar fuso horário para padrao brasil
date_default_timezone_set("Brazil/East");

$pdf->Cell(0,1,'Impresso de www.tpescolarluod.com                                          '.'Data de Impressao: '.date('d/m/Y H:i:s'),'B',0,'C'); // INSIRO A DATA CORRENTE NA CELULA
$pdf->Ln(1);


$pdf->Cell(0,2,"RELATORIO DE CLIENTES PAGOS : ".$ano ,0,2,'C'); 

		$pdf->Cell(8,1,'Nome' ,1,0,'C');
		$pdf->Cell(3,1,'Data' ,1,0,'C');
		$pdf->Cell(2.5,1,'Status' ,1,0,'C');
		$pdf->Cell(4,1,'Telefone' ,1,0,'C');
		$pdf->Cell(2.3,1,'Valor Pago' ,1,1,'C');
		
$sql="SELECT * FROM responsavel inner join parcela
on (responsavel.cpf_resp like '%".$_SESSION['cpf']."%' and parcela.cpf_resp like '%".$_SESSION['cpf']."%')
where year(parcela.dt_pagamento) = '$ano'
";

$conect = mysqli_connect("localhost", "root", "","transporte");
if (!$conect) die ("<h1> Falha na conexão com banco de Dados!!!</h1>");
$db = mysqli_select_db($conect, 'parcela');
$exe_sql =mysqli_query($conect,$sql) or die (mysqli_error($conect) );

while($resultado = mysqli_fetch_array($exe_sql) )

{

$data = date($resultado['dt_pagamento']);
$data = implode("-", array_reverse(explode("-",$data)));

		$pdf->Cell(8,1,$resultado['nome_resp'] ,1,0,'C');
		$pdf->Cell(3,1,$data ,1,0,'C');
		$pdf->Cell(2.5,1,$resultado['pago'] ,1,0,'C');
		$pdf->Cell(4,1,$resultado['tel_principal'] ,1,0,'C');
		$pdf->Cell(2.3,1,'R$'.$resultado['valor_pg'],1,1,'C');
		
		$soma = $soma + $resultado['valor_pg'];
	
	}
		$pdf->Cell(19.8,1,'Total                                                                                                                                                R$'.$soma,1,1,'L');

		
		$pdf->Output();
		?>
		
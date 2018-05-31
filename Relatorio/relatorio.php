<?php

define('FPDF_FONTPATH' , 'font/');
require('fpdf/fpdf.php');
$pdf = new FPDF('p' , 'cm' , 'A4');
$pdf->Open();
$pdf ->AddPage() ;
$pdf->SetFont('Arial', '' ,12);

//mudar fuso horário para padrao brasil
date_default_timezone_set("Brazil/East");

$pdf->Cell(0,1,'Impresso de www.tpescolarluod.com                                          '.'Data de Impressao: '.date('d/m/Y H:i:s'),'B',0,'C'); // INSIRO A DATA CORRENTE NA CELULA
$pdf->Ln(1);


$pdf->Cell(0,2,"RELATORIO DE CLIENTES " ,0,2,'C'); 

	$pdf->Cell(6,1,'Nome' ,1,0,'L');
		/*$pdf->Cell(3,1,'Pagamento' ,1,0,'L');*/
		$pdf->Cell(3,1,'Vencimento' ,1,0,'L');
		$pdf->Cell(2,1,'R$ Pagar' ,1,0,'L');
		$pdf->Cell(2,1,'R$ Pago' ,1,0,'L');
		$pdf->Cell(2,1,'Pagou' ,1,0,'L');
		$pdf->Cell(4,1,'Tel Principal' ,1,0,'L');
		$pdf->Cell(4,1,'Tel Recado' ,1,1,'L');
		
$sql=" SELECT * FROM parcela INNER JOIN responsavel on (parcela.cpf_resp = responsavel.cpf_resp)";

$conect = mysqli_connect("localhost", "root", "","transporte");
if (!$conect) die ("<h1> Falha na conexão com banco de Dados!!!</h1>");
$db = mysqli_select_db($conect, 'parcela');
$exe_sql =mysqli_query($conect,$sql) or die (mysqli_error($conect) );

while($resultado = mysqli_fetch_array($exe_sql) )

{

total
	
		$pdf->Cell(6,1,$resultado['nome_resp'] ,1,0,'L');
		/*$pdf->Cell(3,1,$resultado['dt_pagamento'] ,1,0,'L');*/
$data = date($resultado['dt_vencimento']);
$data = implode("-", array_reverse(explode("-",$data)));

		$pdf->Cell(3,1,$data,1,0,'L');
		$pdf->Cell(2,1,$resultado['valor'] ,1,0,'L');
		$pdf->Cell(2,1,$resultado['valor_pg'] ,1,0,'L');
		$pdf->Cell(2,1,$resultado['status'] ,1,0,'L');
		$pdf->Cell(4,1,$resultado['tel_principal'] ,1,0,'L');
		$pdf->Cell(4,1,$resultado['tel_recado'] ,1,1,'L');

$soma = $soma + $resultado['valor'];
	
	}
		$pdf->Cell(4,1,$soma ,1,1,'L');
	
		$pdf->Output();
		?>
		
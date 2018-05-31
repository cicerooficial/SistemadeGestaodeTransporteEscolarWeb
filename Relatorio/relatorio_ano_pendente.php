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


$pdf->Cell(0,2,"RELATORIO DE CLIENTES PENDENTES : ".$ano ,0,2,'C'); 

		$pdf->Cell(6,1,'Nome' ,1,0,'C');
		$pdf->Cell(3,1,'Data Pag.' ,1,0,'C');
		$pdf->Cell(2,1,'Status' ,1,0,'C');
		$pdf->Cell(4,1,'Telefone' ,1,0,'C');		
		$pdf->Cell(2,1,'Valor' ,1,0,'C');
		$pdf->Cell(2,1,'Pago' ,1,1,'C');
		
$sql="SELECT * FROM responsavel inner join parcela
on (responsavel.cpf_resp = parcela.cpf_resp)
where year(parcela.dt_vencimento) = '$ano' and parcela.`pago`= 'Pendente' ";

$conect = mysqli_connect("localhost", "root", "","transporte");
if (!$conect) die ("<h1> Falha na conexão com banco de Dados!!!</h1>");
$db = mysqli_select_db($conect, 'parcela');
$exe_sql =mysqli_query($conect,$sql) or die (mysqli_error($conect) );

while($resultado = mysqli_fetch_array($exe_sql) )

{

$data = date($resultado['dt_vencimento']);
$data = implode("-", array_reverse(explode("-",$data)));

		$pdf->Cell(6,1,$resultado['nome_resp'] ,1,0,'C');
		$pdf->Cell(3,1,$data ,1,0,'C');
		$pdf->Cell(2,1,$resultado['pago'] ,1,0,'C');
		$pdf->Cell(4,1,$resultado['tel_principal'] ,1,0,'C');
		$pdf->Cell(2,1,'R$'.$resultado['valor'],1,0,'C');
		$pdf->Cell(2,1,'R$'.$resultado['valor_pg'],1,1,'C');
		
		$total = $total + $resultado['valor'];
		$total2 = $total2 + $resultado['valor_pg'];
		
		
		$soma = $total - $total2;
	
	}
		$pdf->Cell(19,1,'Total                                                                                                                                           R$'.$soma,1,1,'L');

		
		$pdf->Output();
		?>
		
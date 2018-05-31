<?php
$id_parcela = $_GET['id_parcela']; 
settype($id_parcela, 'integer');
include "../Connections/conexao.php"; 

define('FPDF_FONTPATH' , 'font/');
require('fpdf/fpdf.php');

//mudar fuso horário para padrao brasil
date_default_timezone_set("Brazil/East");

$pdf = new FPDF('p', 'cm' , 'A4');
$pdf->Open();
$pdf ->AddPage() ;
$pdf->SetFont('Arial', 'B' ,10);
$pdf->SetFillColor(255,215,0);
$pdf->SetTextColor(0,0,0);
$pdf->Cell(19,26,'',1,0,'C',1);//CONTORNO
$pdf->Cell(0,1,'Impresso de www.tpescolarluod.com                                          '.'Data de Impressao: '.date('d/m/Y H:i:s'),'B',0,'R'); // INSIRO A DATA CORRENTE NA CELULA


$pdf->Cell(0,1,'',0,1,'R');
$pdf->Cell(0,0,'',1,1,'L');
$pdf->SetFillColor(0,0,0);
$pdf->SetTextColor(255,215,0);
$pdf->Cell(0,1,'DEMONSTRATIVO DE PAGAMENTO',0,0,'C',1); // CRIA UMA CELULA COM OS SEGUINTES 
$pdf->Cell(0,1,'',0,1,'R');
$pdf->Cell(0,0,'',1,1,'L');
$pdf->Ln(1);
$pdf->SetFillColor(0,0,0);
$pdf->SetTextColor(255,215,0);
$pdf->SetFont('Arial','',12); // DEFINE A FONTE ARIAL, NEGRITO (B), DE TAMANHO 8

$sql=" SELECT *
FROM parcela
INNER JOIN responsavel
on(parcela.cpf_resp = responsavel.cpf_resp) where id_parcela = $id_parcela";

$conect = mysqli_connect("localhost", "root", "","transporte");
if (!$conect) die ("<h1> Falha na conexão com banco de Dados!!!</h1>");
$db = mysqli_select_db($conect, 'parcela');
$exe_sql =mysqli_query($conect,$sql) or die (mysqli_error($conect) );

while($resultado = mysqli_fetch_array($exe_sql) )

{

$pdf->Cell(0,1,'Dados do Usuario',0,1,'C',1);
$pdf->Image('sust.png',15,5,4); // INSERE UMA LOGOMARCA NO PONTO X = 11, Y = 11, E DE TAMANHO 40.
$pdf->Ln(1);
$pdf->SetTextColor(0,0,0);
$pdf->Cell(13,1,'Cliente: '.$resultado['nome_resp'],0,1,'L');
$pdf->Cell(13,1,'Cpf: '.$resultado['cpf_resp'],0,1,'L');
$pdf->Cell(13,1,'Status do pagamento: '.$resultado['pago'],0,1,'L');
$pdf->Ln(1);
$pdf->Cell(0,1,'',0,1,'R');
$pdf->Cell(0,0,'',1,1,'L');

$pdf->SetFillColor(0,0,0);
$pdf->SetTextColor(255,215,0);
$pdf->Cell(0,1,'Dados de Pagamento',0,1,'C',1);
$pdf->Ln(1);
$pdf->SetTextColor(0,0,0);
$data = date($resultado['dt_vencimento']);
$data2 = date($resultado['dt_pagamento']);
$data = implode("-", array_reverse(explode("-",$data)));
$data2 = implode("-", array_reverse(explode("-",$data2)));

$pdf->Cell(0,1,'Data de Pagamento: '.$data.'                                                      Total a Pagar: '.$resultado['valor'],0,1,'L');
$pdf->Cell(0,1,'Mes de Vencimento: '.$data2.'                                                      Total Pago: '.$resultado['valor_pg'],0,1,'L');
$pdf->Cell(0,1,'',0,1,'R');
$pdf->Cell(0,0,'',1,1,'L');

}

$contato = "Jardim Aracati,Rua das Gaivotas,
Sao Paulo, SP, Cep:04947-000";

$contato2 = "Residencial:(11)5895-6631
Cel:(11)96367-6353
Cel:(11)98236-5142";
$pdf->SetFont('Arial', '' ,12);
$pdf->SetFillColor(0,0,0);
$pdf->SetTextColor(255,215,0);
$pdf->Cell(0,1,'Contato',0,1,'C',1);
$pdf->Ln(1);
$pdf->SetFont('Arial', 'B' ,10);
$pdf->SetTextColor(0,0,0);
$pdf->Cell(0,1,'Endereco: ',0,1,'R');
$pdf->Cell(0,1,$contato,0,1,'R');
$pdf->Cell(0,1,'Telefone: ',0,1,'R');
$pdf->Cell(0,1,$contato2,0,1,'R');
$pdf->Cell(0,1,'',0,1,'R');
$pdf->Cell(0,0,'',1,1,'L');

$testo1="O SITE TPESCOLARLUOD APOIA O ATO SUSTENTAVEL: ";
$testo2="ANTES DE IMPRIMIR, VEJA SE REALMENTE E NECESSARIO. TODO O PLANETA VAI SE LEMBRAR  DE SUA ESCOLHA";
$pdf->SetFont('Arial','B'.'I',8); // DEFINE A FONTE ARIAL, NEGRITO (B), DE TAMANHO 8
$pdf->Image('sust1.png',1,23,3); // INSERE UMA LOGOMARCA NO PONTO X = 11, Y = 11, E DE TAMANHO 40.
$pdf->Cell(0,1,$testo1,0,1,'C'); // CRIA UMA CELULA COM OS SEGUINTES DADOS,
$pdf->Cell(0,2,$testo2,0,0,'R'); // CRIA UMA CELULA COM OS SEGUINTES DADOS,
$pdf->SetY("25");
$pdf->SetFillColor(0,0,0);
$pdf->SetTextColor(255,215,0);
$pdf->Cell(0,1,'',0,1,'R');
$pdf->Cell(0,0,'',1,1,'L');
$pdf->Cell(0,1,'NAO E DOCUMENTO FISCAL',0,0,'C',1); // CRIA UMA CELULA COM OS SEGUINTES DADOS,
$pdf->Cell(0,1,'',0,1,'R');
$pdf->Cell(0,0,'',1,1,'L');
		
$pdf->Output();
		?>

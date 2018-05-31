<?php
//configura a data para ser exibida por extenso
setlocale(LC_TIME,"portuguese");
$data= strftime("%d de %B de %Y");

$conexao = mysqli_connect('localhost','user','');
mysql_select_db('estudents');
$sql = 'SELECT nome, cpf, bolsa, concedente FROM estudante where concedente="xxxxx"';
$res = mysql_query($sql);
$array = mysql_fetch_array($res);
$row = mysqli_num_rows($res);

$nome = $array["nome"];
$cpf = $array["cpf"];
$bolsa = $array["bolsa"];
$concedente = $array["concedente"];

define('FPDF_FONTPATH', '../fpdf/font/'); //requisito basico para funcionar a classe
require_once('../fpdf/fpdf.php'); //requisito basico para funcionar a classe

//primeiras diretivas
$pdf=new FPDF();
$pdf->Open();
$pdf->AddPage();


//posiчуo inicial do titulo
$pdf->SetXY(10, 20);
$pdf->SetFont('Helvetica', 'B', 12);
$pdf->Cell(48, 5, 'Recibo de Pagamento'); //(espaчo alocado para a frase)
$pdf->SetFont('Helvetica', 'I', 10);
$pdf->Cell(0, 5, '(http://xxxxx.com.br)');

$pdf->ln(); // pula 1 linha
$pdf->SetLineWidth(0.5); //expessura da linha
$pdf->Line(10, 27, 200, 27);

$pdf->ln();
$pdf->ln();
$pdf->SetFont('Times', '', 10);
$pdf->SetLineWidth(0.2);
$pdf->MultiCell(0, 5, "Conforme Instrumento jurэdico de Acordo de Cooperaчуo e Termo de Compromisso de Estсgio previstos no artigo 5К e no Ї 1К do artigo 6К, do Decreto nК 87.497 de 18 de agosto de 1982, que regulamenta a Lei nК 6.494 de 07 de dezembro de 1977, tendo como agente de Interaчуo a xxxxx, conforme artigo 7А do mesmo decreto, declaro para todos os fins e efeitos ter recebido nesta data, de(a) $concedente CNPJ nК $cnpj, a importтncia supra de R$ $bolsa relativa ao pagamento integral da minha bolsa-estсgio referente ao mъs de $mesbase.", 0, 1, 'J');
$pdf->ln();
$pdf->ln();
$pdf->ln();
$pdf->ln();
$pdf->Cell(0, 5, "Caчapava do Sul, $data.", 0, 1, 'R');
$pdf->ln();
$pdf->ln();
$pdf->ln();
$pdf->SetLineWidth(0.2);
$pdf->Line(110, 100, 200, 100); //(pos ini x, pos ini y, pos fim x, pos fim y)
//$pdf->ln();
$pdf->SetXY(110, 100);
$pdf->Cell(0, 5, $nome, 0,1);
$pdf->SetXY(110, 104);
$pdf->Cell(0, 5, "CPF: $cpf", 0,1);

$pdf->Output();
?>
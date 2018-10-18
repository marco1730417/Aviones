<?php
require('fpdf.php');

$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetTitle('Reporte de  Estados por Aeronave');

//Set font and colors
$pdf->SetFont('Arial','B',11);
$pdf->SetFillColor(255,0,0);
$pdf->SetTextColor(255);
$pdf->SetDrawColor(128,0,0);
$pdf->SetLineWidth(.3);

//Table header
$pdf->Cell(20,10,'ID ESTADO',1,0,'L',1);
$pdf->Cell(50,10,'NOMBRE ESTADO',1,1,'L',1);
//$pdf->Cell(20,10,'FECHA INICIO',1,0,'L',1);
/*$pdf->Cell(50,10,'FECHA FIN',1,1,'L',1);
$pdf->Cell(20,10,'DIAS',1,0,'L',1);
$pdf->Cell(50,10,'VALOR DIA',1,1,'L',1);
$pdf->Cell(20,10,'VALOR TOTAL',1,0,'L',1);
$pdf->Cell(50,10,'ID AERONAVE',1,1,'L',1);*/

//Restore font and colors
$pdf->SetFont('Arial','',10);
$pdf->SetFillColor(224,235,255);
$pdf->SetTextColor(0);

//Connection and query
$str_conexao='dbname=datos port=5432 user=postgres password=1234';
$conexao=pg_connect($str_conexao) or
die('A conexão ao banco de dados falhou!');
$consulta=pg_exec($conexao,'select * from estado');
$numregs=pg_numrows($consulta);

//Build table
$fill=false;
$i=0;
while($i<$numregs)
{
    $siape=pg_result($consulta,$i,'id_estado');
    $nome=pg_result($consulta,$i,'nombre_estado');
  /*  $siape=pg_result($consulta,$i,'fecha_inicio');
    $nome=pg_result($consulta,$i,'fecha_fin');
    $siape=pg_result($consulta,$i,'dias');
    $nome=pg_result($consulta,$i,'valor_dia');
    $siape=pg_result($consulta,$i,'valor_total');
    $nome=pg_result($consulta,$i,'id_aeronave');*/


    $pdf->Cell(20,10,$siape,1,0,'id_estado',$fill);
    $pdf->Cell(50,10,$nome,1,1,'nombre_estado',$fill);
/*    $pdf->Cell(20,10,$siape,1,0,'fecha_inicio',$fill);
    $pdf->Cell(50,10,$nome,1,1,'fecha_fin',$fill);
    $pdf->Cell(20,10,$siape,1,0,'dias',$fill);
    $pdf->Cell(50,10,$nome,1,1,'valor_dia',$fill);
    $pdf->Cell(20,10,$siape,1,0,'valor_total',$fill);
    $pdf->Cell(50,10,$nome,1,1,'id_aeronave',$fill);*/


    $fill=!$fill;
    $i++;
}

//Add a rectangle, a line, a logo and some text
$pdf->Rect(5,5,170,80);
$pdf->Line(5,90,90,90);
//$pdf->Image('mouse.jpg',185,5,10,0,'JPG','http://www.dnocs.gov.br');
$pdf->SetFillColor(224,235);
$pdf->SetFont('Arial','B',8);
$pdf->SetXY(5,95);

$pdf->Output();
?>
?>

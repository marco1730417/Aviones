<?php

session_start();

require('fpdf.php');

class PDF extends FPDF
{
  public $sucursal;
  public $f_ini;
  public $f_fin;
  //Cabecera de página
    function Header()
    {

       $this->Rect(1,1,213,31);
       $this->Rect(1,31,213,1,'DF');
        //Logo
        $this->Image('img/logoss.png',13,2,25,27);
        //Arial bold 15
        $this->SetFont('Arial','B',14);
        //Movernos a la derecha
        $this->Cell(30);
        //Título
        $this->Cell(170,4,'REPORTE DE AERONAVES ',0,0,'C');
        $this->Ln(2);
        $this->SetFont('Arial','B',10);
        $this->Cell(36);
      //  $this->MultiCell(170,5,'algun otro mensaje:');
        //$this->SetFont('Arial','',6);

        $this->SetFont('Arial','',7);
        $this->Line(1,32,214,32);

        //$this->Text(12,36,'No.');
        //$this->Text(22,36,'Nombre');
        $this->Text(22,36,'Matricula');
        $this->Text(40,36,'Fecha_Inicio');
        $this->Text(120,36,'Descripcion');


              // $this->Text(120,36,'Cargo');
        $this->Line(1,38,214,38);
        $this->Line(1,39,214,39);
        //Salto de línea
        $this->Ln(10);
        $this->SetY(45);
    }

    //Pie de página
    function Footer()
    {

      //Posición: a 1,5 cm del final
        $this->SetY(-15);
        //Arial italic 8
        $this->SetFont('Arial','I',7);
        //Número de página
        $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
      $fecha= date("Y-m-d");
       $hora=date("H:i:s");
      $this->Line(1,266,214,266);
      $this->Line(1,273,214,273);
      $fecha= date("Y-m-d");
       $hora=date("H:i:s");
       $this->Text(10,270.5,$fecha);
        $this->Text(30,270.5,$hora);
        $this->Text(148,270.5,$this->f_ini);
        $this->Text(180,270.5,$this->f_fin);
    }

    function __construct()
    {
        //Llama al constructor de su clase Padre.
        //Modificar aka segun la forma del papel del reporte
        parent::__construct('P','mm','Letter');
    }
}

    //Creación del objeto de la clase heredada
    $pdf=new PDF();
    $pdf->SetTopMargin(5.4);
    $pdf->SetLeftMargin(4.5);
    $pdf->AliasNbPages();
    $pdf->SetFont('Times','',7);

$cadconex="dbname=datos host=localhost port=5432 user=postgres password=1234";
$conexion = pg_connect($cadconex);



        $cadbusca = "select aeronave.matricula,siniestro.fecha_siniestro,siniestro.descripcion_siniestro
         from siniestro,aeronave where
         siniestro.id_aeronave=aeronave.id_aeronave";

            $result=pg_query($cadbusca)


            or
             die('La consulta fallo: ' . pg_last_error());

        $j=1;
    $pdf->AddPage();

         while($row = pg_fetch_array($result))
        {
          $name = $row["matricula"];
          $apellidos = $row["fecha_siniestro"];
          $gerencia = $row["descripcion_siniestro"];



          //$pdf->Text(12,$pdf->GetY(),($j));
          $pdf->Text(22,$pdf->GetY(),$name);
          $pdf->Text(40,$pdf->GetY(),$apellidos);
          $pdf->Text(120,$pdf->GetY(),$gerencia);


          $pdf->cell(0,5.5,'',0,1);
        $j=$j+1;
        }



    $pdf->Output();
?>

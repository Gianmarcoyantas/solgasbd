
<?php
 header('Content-type:application/pdf');
 header('Content-Disposition: attachment; filename=Listado_clientes.pdf');
   	
	

require('fpdf/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
     //logo
    $this->Image('./imagenes/balon.jpg',170,8,30);
    $this->Image('../imagenes/banner.jpg',10,12,100);
    
    $this->Ln(50);
    // Arial bold 15
    $this->SetFont('Arial','B',18);
    // Movernos a la derecha
    $this->Cell(90);
    // Título
    $this->Cell(01,01,'Lista De Clientes',0,0,'C');
    // Salto de línea
    $this->Ln(20);
    $this->SetFont('Arial','B',10);
    $this->Cell(23, 10, 'Cod', 1, 0, 'C', 0);
    $this->Cell(38, 10, 'Nombre', 1, 0, 'C', 0);    
    $this->Cell(45, 10, 'Direccion', 1, 0, 'C', 0);    
    $this->Cell(40, 10, 'Distrito', 1, 0, 'C', 0);
    $this->Cell(50, 10, 'Correo', 1, 1, 'C', 0);
    
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Página ').$this->PageNo().'/{nb}',0,0,'C');
}
}

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',10);

   $conexion=mysqli_connect("localhost","root","","bdsolgas");
   $query="SELECT codcli,nombre,direccion,distrito,correo FROM clientes";
   $exe=mysqli_query($conexion,$query);
   
 while($row=mysqli_fetch_assoc($exe)){
     
    $pdf->Cell(23, 10, "CLI-000-".$row['codcli'], 1, 0, 'C', 0);
    $pdf->Cell(38, 10, $row['nombre'], 1, 0, 'C', 0);
    $pdf->Cell(45, 10, $row['direccion'], 1, 0, 'C', 0);
    $pdf->Cell(40, 10, $row['distrito'], 1, 0, 'C', 0);
    $pdf->Cell(50, 10, $row['correo'], 1, 1, 'C', 0);
    
    
 }

$pdf->Output();
 ?>

	
<?php
   header('Content-type:application/pdf');
 header('Content-Disposition: attachment; filename=Listado_Pedidos.pdf');
   

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
    $this->SetFont('Arial','B',16);
    // Movernos a la derecha
    $this->Cell(90);
    // Título
    $this->Cell(01,01,'Lista De Pedidos',0,0,'C');
    // Salto de línea
    $this->Ln(10);
    $this->SetFont('Arial','B',10);
    $this->Cell(35, 10, 'N Pedido', 1, 0, 'C', 0);
    $this->Cell(28, 10, 'Cliente', 1, 0, 'C', 0);    
    $this->Cell(30, 10, 'Fecha', 1, 0, 'C', 0);    
    $this->Cell(33, 10, 'Producto', 1, 0, 'C', 0);
    $this->Cell(20, 10, 'Precio', 1, 0, 'C', 0);
    $this->Cell(20, 10, 'Cant', 1, 0, 'C', 0);
    $this->Cell(20, 10, 'Total', 1, 1, 'C', 0);
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
   $query="Select P.numpedido, C.nombre, P.fecha, R.descripcion, R.precio, D.can, (R.precio * D.can)as Total
            from pedido P INNER JOIN clientes C
            on c.codcli = p.codcli
            INNER JOIN detallepedido D 
            on P.numpedido = D.numpedido
            INNER JOIN productos R
            ON D.codpro = R.codpro";
   $exe=mysqli_query($conexion,$query);
   
 while($row=mysqli_fetch_assoc($exe)){
    $pdf->Cell(35, 10, "COD-000-".$row['numpedido'], 1, 0, 'C', 0);
    $pdf->Cell(28, 10, $row['nombre'], 1, 0, 'C', 0);
    $pdf->Cell(30, 10, $row['fecha'], 1, 0, 'C', 0);
    $pdf->Cell(33, 10, $row['descripcion'], 1, 0, 'C', 0);
    $pdf->Cell(20, 10, $row['precio'], 1, 0, 'C', 0);
    $pdf->Cell(20, 10, $row['can'], 1, 0, 'C', 0);
    $pdf->Cell(20, 10, $row['Total'], 1, 1, 'C', 0);
    

 }

$pdf->Output();
 ?>

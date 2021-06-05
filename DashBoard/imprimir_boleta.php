<?php
$pedido=$_REQUEST['pedido'];
 //   header('Content-type:application/pdf');
 // header('Content-Disposition: attachment; filename=Boleta.pdf');
   $con=mysqli_connect("localhost","root","","bdsolgas");
   $query="SELECT * FROM pedido WHERE numpedido='$pedido'";
   // print_r($query);die();
   $prectotal="SELECT sum(R.precio * D.can)as Total from pedido P INNER JOIN clientes C on c.codcli = p.codcli INNER JOIN detallepedido D on P.numpedido = D.numpedido INNER JOIN productos R ON D.codpro = R.codpro WHERE P.numpedido='$pedido'";
   $resultprec=mysqli_query($con,$prectotal);
   $rowpre=mysqli_fetch_array($resultprec);
   //var_dump($rowpre);
   $pagototal=$rowpre['Total'];
   //echo $resultprec;die();
   $result=mysqli_query($con,$query);
   // print_r($result); die();
   $row=mysqli_fetch_array($result);
   $cliente=$row['codcli'];
   $pedido=$row['numpedido'];
   $fecha=$row['fecha'];

   $consulta="SELECT * FROM clientes WHERE codcli='$cliente'";
   $rpta=mysqli_query($con,$consulta);
   // print_r($rpta); die();
   $rows=mysqli_fetch_array($rpta);
   $nombre=$rows['nombre'];
   $direccion=$rows['direccion'];
   $distrito=$rows['distrito'];

    // print_r($cliente);die();
   $search="SELECT P.numpedido, C.nombre, P.fecha, R.descripcion,R.codpro, R.precio, D.can, (R.precio * D.can)as Total
               from pedido P INNER JOIN clientes C
               on c.codcli = p.codcli
               INNER JOIN detallepedido D 
               on P.numpedido = D.numpedido
               INNER JOIN productos R
               ON D.codpro = R.codpro WHERE P.numpedido='$pedido'";
               $rptas=mysqli_query($con,$search);
               //var_dump($rptas);
     //print_r($rptas); die();
               
   $rowc=mysqli_fetch_array($rptas);
   // print_r($rowc);die();
   $descri=$rowc['descripcion'];
   $precio=$rowc['precio'];
   $cantid=$rowc['can'];
   //echo $total=$rowc['Total'];
   
   $pro=$rowc['codpro'];

require('fpdf/fpdf.php');

class PDF extends FPDF
{

// Cabecera de página
function Header()
{
    global $cliente;
    global $pedido;
    global $fecha;
    global $nombre;
    global $direccion;
    global $distrito;
    global $descri;
    global $precio;
    global $cantid;
    global $total;
    global $pro;
    //logo
    $this->Image('./imagenes/balon.jpg',10,12,34);
    $this->Ln(10);
    // Arial bold 15
    $this->SetFont('Arial','B',8);

    $this->Cell(90);

    $this->Cell(01,01,utf8_decode('Distribuidora Nortena'),0,0,'C');
    $this->Ln(4);
    $this->Cell(90);
    $this->Cell(01,01,'Av Cordialidad 7970 Pro',0,0,'C');
    $this->Ln(4);
    $this->Cell(90);
    $this->Cell(01,01,'Los Olivos, Lima, Lima',0,0,'C');
    $this->Ln(4);
    $this->Cell(90);
    $this->Cell(01,01,'Telf.: 5400093',0,0,'C');    
    $this->Ln(4);
    $this->Cell(90);
    $this->Cell(01,01,'lila_medina@hotmail.com',0,0,'C');    
    $this->Ln(4);
    $this->Cell(90);
    $this->Cell(01,01,'WebSite: www.facebook.com/SolgasMedina',0,1,'C');
    
    $this->Ln(-20);
    $this->setX(150);
    $this->Cell(51,21,'BOLETA DE PEDIDO',1,0,'C');
    $this->Ln(5);
    $this->setX(151);
    $this->Cell(51,21,'N PEDIDO: PED-000-'.$pedido.'',0,1,'C');

    $this->Ln(10);
    $this->SetFont('Arial','I',8);
    $this->Cell(35, 10,'Cliente: CLI-000-'.$cliente.'', 0, 1,'C', 0);
    $this->Ln(-5);
    $this->Cell(35, 10,'Nombre: '.$nombre.'', 0, 1,'C', 0);
    $this->Ln(-5);
    $this->Cell(35, 10,'Direccion:'.$direccion.'', 0, 1,'C', 0);
    $this->Ln(-5);
    $this->Cell(35, 10,'Distrito: '.$distrito.'', 0, 1,'C', 0);
    $this->Ln(-5);
    $this->setX(17);
    $this->Cell(35, 10,'Fecha de Emision: '.$fecha.'', 0, 1,'C', 0);
  
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
$pdf->Cell(35, 10,'Codigo Producto ', 1, 0,'C', 0);
$pdf->Cell(45, 10,'Descripcion ', 1, 0,'C', 0);
$pdf->Cell(35, 10,'Cantidad ', 1, 0,'C', 0);
$pdf->Cell(35, 10,'Precio ', 1, 0,'C', 0);
$pdf->Cell(35, 10,'Total ', 1, 1,'C', 0);


foreach($rptas as  $value){
$pdf->Cell(35, 10,'PRO-000-'.$value['codpro'].'', 0, 0,'C', 0);
$pdf->Cell(35, 10,$value['descripcion'],0, 0,'C', 0);
$pdf->Cell(45, 10,$value['can'],0, 0,'C', 0);
$pdf->Cell(35, 10,$value['precio'],0, 0,'C', 0);
$pdf->Cell(35, 10,$value['Total'],0 , 1,'C', 0);
}
$pdf->Cell(150, 10,'Total a Pagar ', 1, 0,'C', 0);
$pdf->Cell(35, 10,$pagototal, 1, 1,'C', 0);

$pdf->Output();
 ?>
